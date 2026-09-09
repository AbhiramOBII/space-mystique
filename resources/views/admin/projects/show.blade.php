@extends('layouts.app')

@section('page-title', 'Project Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Project: {{ $project->title }}</h4>
                    <div>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary me-2">
                            <i class="fas fa-edit me-1"></i>Edit Project
                        </a>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Project Details -->
                            <div class="mb-4">
                                <h5>Project Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td width="150"><strong>Title:</strong></td>
                                        <td>{{ $project->title }}</td>
                                    </tr>
                                    @if($project->subtitle)
                                        <tr>
                                            <td><strong>Subtitle:</strong></td>
                                            <td>{{ $project->subtitle }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td><strong>Slug:</strong></td>
                                        <td><code>{{ $project->slug }}</code></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Service:</strong></td>
                                        <td><span class="badge bg-info">{{ $project->service->title }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status:</strong></td>
                                        <td>
                                            @if($project->status === 'active')
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Created:</strong></td>
                                        <td>{{ $project->created_at->format('F d, Y \a\t g:i A') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Updated:</strong></td>
                                        <td>{{ $project->updated_at->format('F d, Y \a\t g:i A') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Short Description -->
                            <div class="mb-4">
                                <h5>Short Description</h5>
                                <p class="text-muted">{{ $project->short_description }}</p>
                            </div>

                            <!-- Full Description -->
                            <div class="mb-4">
                                <h5>Full Description</h5>
                                <div class="border rounded p-3 bg-light">
                                    {!! $project->full_description !!}
                                </div>
                            </div>

                            <!-- Project Images -->
                            @if($project->images->count() > 0)
                                <div class="mb-4">
                                    <h5>Project Images ({{ $project->images->count() }})</h5>
                                    <div class="row">
                                        @foreach($project->images as $image)
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img src="{{ asset('storage/' . $image->image_path) }}" 
                                                         alt="{{ $image->alt_text }}" 
                                                         class="card-img-top" 
                                                         style="height: 200px; object-fit: cover;">
                                                    <div class="card-body p-2">
                                                        <small class="text-muted">
                                                            <strong>Alt Text:</strong> {{ $image->alt_text ?: 'No alt text provided' }}
                                                        </small>
                                                        <br>
                                                        <small class="text-muted">
                                                            <strong>Order:</strong> {{ $image->sort_order }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="mb-4">
                                    <h5>Project Images</h5>
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        No images have been uploaded for this project yet.
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <!-- SEO Information -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">SEO Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Meta Title:</strong>
                                        <p class="text-muted mb-0">{{ $project->meta_title ?: 'Not set' }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <strong>Meta Description:</strong>
                                        <p class="text-muted mb-0">{{ $project->meta_description ?: 'Not set' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">Actions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">
                                            <i class="fas fa-edit me-2"></i>Edit Project
                                        </a>
                                        
                                        @if($project->status === 'active')
                                            <a href="#" class="btn btn-success" target="_blank">
                                                <i class="fas fa-external-link-alt me-2"></i>View on Website
                                            </a>
                                        @endif
                                        
                                        <form action="{{ route('admin.projects.destroy', $project) }}" 
                                              method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100">
                                                <i class="fas fa-trash me-2"></i>Delete Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
