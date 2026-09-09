@extends('layouts.app')

@section('page-title', 'Create Project')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Create New Project</h4>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">URL-friendly version of the title (e.g., luxury-apartment-design)</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="subtitle" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" 
                                           id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                                    @error('subtitle')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="short_description" class="form-label">Short Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" 
                                              id="short_description" name="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="full_description" class="form-label">Full Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('full_description') is-invalid @enderror" 
                                              id="full_description" name="full_description" rows="10" required>{{ old('full_description') }}</textarea>
                                    @error('full_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Multiple Images Upload -->
                                <div class="form-group mb-3">
                                    <label for="images" class="form-label">Project Images</label>
                                    <div id="image-upload-container">
                                        <div class="image-upload-item mb-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control @error('images.0') is-invalid @enderror" 
                                                           name="images[]" accept="image/*">
                                                    @error('images.0')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" 
                                                           name="alt_texts[]" placeholder="Alt text (optional)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="add-image">
                                        <i class="fas fa-plus me-1"></i>Add Another Image
                                    </button>
                                    <small class="form-text text-muted d-block mt-2">Upload project images (JPEG, PNG, JPG, GIF - Max: 2MB each)</small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="service_id" class="form-label">Service <span class="text-danger">*</span></label>
                                    <select class="form-control @error('service_id') is-invalid @enderror" 
                                            id="service_id" name="service_id" required>
                                        <option value="">Select a service</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                                {{ $service->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('service_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-control @error('status') is-invalid @enderror" 
                                            id="status" name="status" required>
                                        <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                           id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                                    @error('meta_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">For SEO purposes</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                              id="meta_description" name="meta_description" rows="4">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">For SEO purposes</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Project</button>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#full_description'))
        .catch(error => {
            console.error(error);
        });

    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slug = title
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '') // Remove special characters
            .replace(/[\s_-]+/g, '-') // Replace spaces and underscores with hyphens
            .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
        
        document.getElementById('slug').value = slug;
    });

    // Add more image upload fields
    let imageCount = 1;
    document.getElementById('add-image').addEventListener('click', function() {
        const container = document.getElementById('image-upload-container');
        const newItem = document.createElement('div');
        newItem.className = 'image-upload-item mb-3';
        newItem.innerHTML = `
            <div class="row">
                <div class="col-md-8">
                    <input type="file" class="form-control" name="images[]" accept="image/*">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="alt_texts[]" placeholder="Alt text (optional)">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-image">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        container.appendChild(newItem);
        imageCount++;
    });

    // Remove image upload fields
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-image') || e.target.parentElement.classList.contains('remove-image')) {
            const item = e.target.closest('.image-upload-item');
            item.remove();
        }
    });
</script>
@endsection
