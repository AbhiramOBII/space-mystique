@include('front-end-layouts.header')

<!-- Projects Hero Section -->
<section class="relative min-h-screen flex items-center justify-center parallax-bg" 
         style="background-image: linear-gradient(rgba(77, 77, 77, 0.7), rgba(107, 107, 107, 0.5)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6 lg:px-8">
        <h1 class="font-serif text-5xl md:text-7xl font-bold mb-6 fade-in">
            Our Projects
        </h1>
        <p class="text-xl md:text-2xl font-light mb-8 fade-in" style="animation-delay: 0.3s;">
            Discover our portfolio of exceptional interior design transformations
        </p>
        <div class="w-24 h-1 bg-warm-orange mx-auto fade-in" style="animation-delay: 0.6s;"></div>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="py-20 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        @if($projects->count() > 0)
            <!-- Projects Filter (Optional - can be added later) -->
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-charcoal mb-6">
                    Featured Projects
                </h2>
                <p class="text-lg text-warm-grey max-w-3xl mx-auto">
                    Each project tells a unique story of transformation, creativity, and attention to detail. 
                    Explore our diverse portfolio spanning residential and commercial spaces.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="group bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <!-- Project Image -->
                        <div class="relative h-64 overflow-hidden">
                            @if($project->featured_image)
                                <img src="{{ asset('storage/' . $project->featured_image->image_path) }}" 
                                     alt="{{ $project->featured_image->alt_text ?: $project->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-warm-grey to-charcoal flex items-center justify-center">
                                    <i class="fas fa-building text-4xl text-white opacity-50"></i>
                                </div>
                            @endif
                            
                            <!-- Service Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-warm-orange text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $project->service->title }}
                                </span>
                            </div>

                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-charcoal bg-opacity-0 group-hover:bg-opacity-70 transition-all duration-500 flex items-center justify-center">
                                <a href="{{ route('projects.show', $project->slug) }}" 
                                   class="bg-warm-orange text-white px-6 py-3 rounded-none font-medium opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-white hover:text-charcoal">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="p-6">
                            <h3 class="font-serif text-xl font-bold text-charcoal mb-2 group-hover:text-warm-orange transition-colors duration-300">
                                {{ $project->title }}
                            </h3>
                            
                            @if($project->subtitle)
                                <p class="text-warm-orange font-medium mb-3">{{ $project->subtitle }}</p>
                            @endif
                            
                            <p class="text-warm-grey mb-4 line-clamp-3">
                                {{ $project->short_description }}
                            </p>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-warm-grey">
                                    <i class="fas fa-images mr-2"></i>
                                    {{ $project->images->count() }} {{ $project->images->count() === 1 ? 'Image' : 'Images' }}
                                </div>
                                
                                <a href="{{ route('projects.show', $project->slug) }}" 
                                   class="text-warm-orange hover:text-charcoal font-medium transition-colors duration-300">
                                    Learn More →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button (if needed for pagination) -->
            <div class="text-center mt-16">
                <a href="#" class="bg-charcoal text-white px-8 py-4 rounded-none hover:bg-warm-orange transition-colors duration-300 font-medium inline-block">
                    Load More Projects
                </a>
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-building text-6xl text-warm-grey mb-6"></i>
                    <h3 class="font-serif text-3xl font-bold text-charcoal mb-4">
                        Projects Coming Soon
                    </h3>
                    <p class="text-warm-grey mb-8">
                        We're currently working on showcasing our amazing portfolio. 
                        Check back soon to see our latest interior design projects.
                    </p>
                    <a href="{{ route('services.index') }}" 
                       class="bg-warm-orange text-white px-8 py-4 rounded-none hover:bg-charcoal transition-colors duration-300 font-medium inline-block">
                        Explore Our Services
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-charcoal text-white">
    <div class="max-w-4xl mx-auto text-center px-6 lg:px-8">
        <h2 class="font-serif text-4xl md:text-5xl font-bold mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl mb-8 text-gray-300">
            Let's transform your space into something extraordinary. 
            Schedule a consultation with our design experts today.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#consultation" 
               class="bg-warm-orange text-white px-8 py-4 rounded-none hover:bg-white hover:text-charcoal transition-colors duration-300 font-medium">
                Book Consultation
            </a>
            <a href="{{ route('services.index') }}" 
               class="border-2 border-white text-white px-8 py-4 rounded-none hover:bg-white hover:text-charcoal transition-colors duration-300 font-medium">
                View Services
            </a>
        </div>
    </div>
</section>

@include('front-end-layouts.footer')

<style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<script>
    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.parallax-bg');
        if (parallax) {
            const speed = scrolled * 0.5;
            parallax.style.transform = `translateY(${speed}px)`;
        }
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

    // Observe project cards for animation
    document.querySelectorAll('.group').forEach(card => {
        observer.observe(card);
    });
</script>
