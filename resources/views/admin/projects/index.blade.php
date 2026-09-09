@extends('layouts.app')

@section('page-title', 'Projects')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Projects</h4>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add New Project
                    </a>
                </div>

                <div class="card-body">
                    @if($projects->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Service</th>
                                        <th>Status</th>
                                        <th>Images</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>
                                                @if($project->featured_image)
                                                    <img src="{{ asset('storage/' . $project->featured_image->image_path) }}" 
                                                         alt="{{ $project->title }}" 
                                                         class="img-thumbnail" 
                                                         style="width: 60px; height: 60px; object-fit: cover;">
                                                @else
                                                    <div class="bg-light d-flex align-items-center justify-content-center" 
                                                         style="width: 60px; height: 60px;">
                                                        <i class="fas fa-image text-muted"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div>
                                                    <strong>{{ $project->title }}</strong>
                                                    @if($project->subtitle)
                                                        <br><small class="text-muted">{{ $project->subtitle }}</small>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-info">{{ $project->service->title }}</span>
                                            </td>
                                            <td>
                                                @if($project->status === 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-secondary">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-primary">{{ $project->images->count() }} images</span>
                                            </td>
                                            <td>{{ $project->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.projects.show', $project) }}" 
                                                       class="btn btn-sm btn-outline-info" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.projects.edit', $project) }}" 
                                                       class="btn btn-sm btn-outline-primary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.projects.destroy', $project) }}" 
                                                          method="POST" class="d-inline"
                                                          onsubmit="return confirm('Are you sure you want to delete this project?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            {{ $projects->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-building fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">No projects found</h5>
                            <p class="text-muted">Get started by creating your first project.</p>
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Add New Project
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
