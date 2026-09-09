@include('front-end-layouts.header')

<!-- Project Hero Section -->
<section class="relative min-h-screen flex items-end parallax-bg" 
         style="background-image: linear-gradient(rgba(77, 77, 77, 0.4), rgba(107, 107, 107, 0.6)), url('{{ $project->featured_image ? asset('storage/' . $project->featured_image->image_path) : 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}');">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative z-10 w-full pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl">
                <!-- Breadcrumb -->
                <nav class="mb-6">
                    <div class="flex items-center space-x-2 text-white/80">
                        <a href="{{ route('home') }}" class="hover:text-warm-orange transition-colors">Home</a>
                        <span>/</span>
                        <a href="{{ route('projects.index') }}" class="hover:text-warm-orange transition-colors">Projects</a>
                        <span>/</span>
                        <span class="text-white">{{ $project->title }}</span>
                    </div>
                </nav>

                <!-- Project Info -->
                <div class="text-white">
                    <div class="mb-4">
                        <span class="bg-warm-orange text-white px-4 py-2 rounded-full text-sm font-medium">
                            {{ $project->service->title }}
                        </span>
                    </div>
                    
                    <h1 class="font-serif text-5xl md:text-7xl font-bold mb-6 fade-in">
                        {{ $project->title }}
                    </h1>
                    
                    @if($project->subtitle)
                        <p class="text-2xl md:text-3xl font-light mb-6 text-warm-orange fade-in" style="animation-delay: 0.3s;">
                            {{ $project->subtitle }}
                        </p>
                    @endif
                    
                    <p class="text-xl md:text-2xl font-light max-w-3xl fade-in" style="animation-delay: 0.6s;">
                        {{ $project->short_description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details Section -->
<section class="py-20 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none">
                    <h2 class="font-serif text-3xl font-bold text-charcoal mb-6">Project Overview</h2>
                    <div class="text-warm-grey leading-relaxed">
                        {!! $project->full_description !!}
                    </div>
                </div>
            </div>

            <!-- Project Info Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg p-8 shadow-lg sticky top-8">
                    <h3 class="font-serif text-2xl font-bold text-charcoal mb-6">Project Details</h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="font-medium text-warm-grey">Service</span>
                            <span class="text-charcoal font-medium">{{ $project->service->title }}</span>
                        </div>
                        
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="font-medium text-warm-grey">Images</span>
                            <span class="text-charcoal font-medium">{{ $project->images->count() }}</span>
                        </div>
                        
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="font-medium text-warm-grey">Completed</span>
                            <span class="text-charcoal font-medium">{{ $project->created_at->format('M Y') }}</span>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="mt-8">
                        <a href="#consultation" 
                           class="w-full bg-warm-orange text-white px-6 py-4 rounded-none hover:bg-charcoal transition-colors duration-300 font-medium text-center block">
                            Start Your Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Gallery Section -->
@if($project->images->count() > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl font-bold text-charcoal mb-6">
                Project Gallery
            </h2>
            <p class="text-lg text-warm-grey max-w-3xl mx-auto">
                Explore the transformation through our detailed photography showcasing every aspect of this project.
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($project->images as $index => $image)
                <div class="group relative overflow-hidden rounded-lg {{ $index === 0 ? 'md:col-span-2 md:row-span-2' : '' }}" 
                     data-gallery-item="{{ $index }}">
                    <img src="{{ asset('storage/' . $image->image_path) }}" 
                         alt="{{ $image->alt_text ?: $project->title }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 cursor-pointer {{ $index === 0 ? 'h-96 md:h-full' : 'h-64' }}">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-charcoal bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-500 flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Related Projects Section -->
@if($relatedProjects->count() > 0)
<section class="py-20 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl font-bold text-charcoal mb-6">
                Related Projects
            </h2>
            <p class="text-lg text-warm-grey max-w-3xl mx-auto">
                Discover more projects in the {{ $project->service->title }} category.
            </p>
        </div>

        <!-- Related Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedProjects as $relatedProject)
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="relative h-64 overflow-hidden">
                        @if($relatedProject->featured_image)
                            <img src="{{ asset('storage/' . $relatedProject->featured_image->image_path) }}" 
                                 alt="{{ $relatedProject->featured_image->alt_text ?: $relatedProject->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-warm-grey to-charcoal flex items-center justify-center">
                                <i class="fas fa-building text-4xl text-white opacity-50"></i>
                            </div>
                        @endif
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-charcoal bg-opacity-0 group-hover:bg-opacity-70 transition-all duration-500 flex items-center justify-center">
                            <a href="{{ route('projects.show', $relatedProject->slug) }}" 
                               class="bg-warm-orange text-white px-6 py-3 rounded-none font-medium opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-white hover:text-charcoal">
                                View Project
                            </a>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-charcoal mb-2 group-hover:text-warm-orange transition-colors duration-300">
                            {{ $relatedProject->title }}
                        </h3>
                        
                        @if($relatedProject->subtitle)
                            <p class="text-warm-orange font-medium mb-3">{{ $relatedProject->subtitle }}</p>
                        @endif
                        
                        <p class="text-warm-grey mb-4 line-clamp-2">
                            {{ $relatedProject->short_description }}
                        </p>
                        
                        <a href="{{ route('projects.show', $relatedProject->slug) }}" 
                           class="text-warm-orange hover:text-charcoal font-medium transition-colors duration-300">
                            Learn More →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-20 bg-charcoal text-white">
    <div class="max-w-4xl mx-auto text-center px-6 lg:px-8">
        <h2 class="font-serif text-4xl md:text-5xl font-bold mb-6">
            Inspired by This Project?
        </h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's create something equally stunning for your space. 
            Our team is ready to bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#consultation" 
               class="bg-warm-orange text-white px-8 py-4 rounded-none hover:bg-white hover:text-charcoal transition-colors duration-300 font-medium">
                Book Consultation
            </a>
            <a href="{{ route('projects.index') }}" 
               class="border-2 border-white text-white px-8 py-4 rounded-none hover:bg-white hover:text-charcoal transition-colors duration-300 font-medium">
                View All Projects
            </a>
        </div>
    </div>
</section>

@include('front-end-layouts.footer')

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .prose h2, .prose h3, .prose h4 {
        color: #4D4D4D;
        font-family: 'Playfair Display', serif;
    }
    
    .prose p {
        color: #6B6B6B;
        line-height: 1.8;
    }
</style>

<script>
    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.parallax-bg');
        if (parallax) {
            const speed = scrolled * 0.3;
            parallax.style.transform = `translateY(${speed}px)`;
        }
    });

    // Gallery lightbox functionality (basic implementation)
    document.querySelectorAll('[data-gallery-item]').forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            if (img) {
                // Create lightbox overlay
                const overlay = document.createElement('div');
                overlay.className = 'fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4';
                overlay.innerHTML = `
                    <div class="relative max-w-4xl max-h-full">
                        <img src="${img.src}" alt="${img.alt}" class="max-w-full max-h-full object-contain">
                        <button class="absolute top-4 right-4 text-white text-2xl hover:text-warm-orange transition-colors">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                
                document.body.appendChild(overlay);
                document.body.style.overflow = 'hidden';
                
                // Close lightbox
                overlay.addEventListener('click', function(e) {
                    if (e.target === overlay || e.target.closest('button')) {
                        document.body.removeChild(overlay);
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });
    });

    // Fade in animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.group, .prose').forEach(element => {
        observer.observe(element);
    });
</script>
