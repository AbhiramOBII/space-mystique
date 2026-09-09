@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Service Details: {{ $service->title }}</h4>
                    <div>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back to Services</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h5>Title</h5>
                                <p class="lead">{{ $service->title }}</p>
                            </div>

                            @if($service->subtitle)
                            <div class="mb-4">
                                <h5>Subtitle</h5>
                                <p>{{ $service->subtitle }}</p>
                            </div>
                            @endif

                            <div class="mb-4">
                                <h5>Short Description</h5>
                                <p>{{ $service->short_description }}</p>
                            </div>

                            <div class="mb-4">
                                <h5>Full Description</h5>
                                <div class="border p-3 bg-light">
                                    {!! $service->full_description !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Service Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Status:</strong>
                                        <span class="badge badge-{{ $service->status === 'active' ? 'success' : 'secondary' }}">
                                            {{ ucfirst($service->status) }}
                                        </span>
                                    </div>

                                    <div class="mb-3">
                                        <strong>Created:</strong><br>
                                        {{ $service->created_at->format('M d, Y \a\t g:i A') }}
                                    </div>

                                    <div class="mb-3">
                                        <strong>Last Updated:</strong><br>
                                        {{ $service->updated_at->format('M d, Y \a\t g:i A') }}
                                    </div>

                                    @if($service->meta_title)
                                    <div class="mb-3">
                                        <strong>Meta Title:</strong><br>
                                        <small class="text-muted">{{ $service->meta_title }}</small>
                                    </div>
                                    @endif

                                    @if($service->meta_description)
                                    <div class="mb-3">
                                        <strong>Meta Description:</strong><br>
                                        <small class="text-muted">{{ $service->meta_description }}</small>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-3">
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this service? This action cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">Delete Service</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
