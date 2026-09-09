<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['service', 'images'])->latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::active()->get();
        return view('admin.projects.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug',
            'subtitle' => 'nullable|string|max:255',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'status' => 'required|in:active,inactive',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alt_texts.*' => 'nullable|string|max:255',
        ]);

        $project = Project::create($validated);

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imagePath = $image->store('projects/images', 'public');
                
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                    'alt_text' => $request->alt_texts[$index] ?? null,
                    'sort_order' => $index,
                ]);
            }
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load(['service', 'images']);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $services = Service::active()->get();
        $project->load('images');
        return view('admin.projects.edit', compact('project', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
            'subtitle' => 'nullable|string|max:255',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'status' => 'required|in:active,inactive',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alt_texts.*' => 'nullable|string|max:255',
            'delete_images' => 'nullable|array',
            'delete_images.*' => 'exists:project_images,id',
        ]);

        $project->update($validated);

        // Handle image deletions
        if ($request->has('delete_images')) {
            $imagesToDelete = ProjectImage::whereIn('id', $request->delete_images)->get();
            foreach ($imagesToDelete as $image) {
                if (Storage::disk('public')->exists($image->image_path)) {
                    Storage::disk('public')->delete($image->image_path);
                }
                $image->delete();
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            $maxSortOrder = $project->images()->max('sort_order') ?? -1;
            
            foreach ($request->file('images') as $index => $image) {
                $imagePath = $image->store('projects/images', 'public');
                
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                    'alt_text' => $request->alt_texts[$index] ?? null,
                    'sort_order' => $maxSortOrder + $index + 1,
                ]);
            }
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete all project images
        foreach ($project->images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
