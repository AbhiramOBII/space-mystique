<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['service', 'images'])->active()->latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if (!$project->isActive()) {
            abort(404);
        }

        $project->load(['service', 'images']);
        $relatedProjects = Project::with(['service', 'images'])
            ->active()
            ->where('id', '!=', $project->id)
            ->where('service_id', $project->service_id)
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
