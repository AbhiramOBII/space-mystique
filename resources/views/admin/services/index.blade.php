@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Services Management</h4>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->subtitle ?? '-' }}</td>
                                        <td>
                                            <span class="badge badge-{{ $service->status === 'active' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($service->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $service->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.services.show', $service) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this service?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No services found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
