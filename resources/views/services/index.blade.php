@extends('front-end-layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-96 md:h-[500px] flex items-center justify-center bg-ivory overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/services-hero.jpg') }}" 
             alt="Space Mystique Services" 
             class="w-full h-full object-cover opacity-80">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-charcoal/50 to-charcoal/30"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="font-playfair text-5xl md:text-6xl font-light text-ivory mb-6 leading-tight">
            Our <span class="text-warm-orange">Services</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-ivory/90 font-light leading-relaxed">
            Comprehensive interior design solutions tailored to your vision and lifestyle
        </p>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        @if($services->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="group bg-ivory hover:bg-charcoal transition-all duration-300 cursor-pointer rounded-sm overflow-hidden shadow-sm hover:shadow-lg">
                        <div class="p-8">
                            <!-- Service Thumbnail -->
                            <div class="mb-6 overflow-hidden rounded-lg">
                                @if($service->thumbnail)
                                    <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                                         alt="{{ $service->title }}" 
                                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <div class="w-full h-48 bg-warm-orange/10 group-hover:bg-white/20 rounded-lg flex items-center justify-center transition-colors duration-300">
                                        <svg class="w-12 h-12 text-warm-orange group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Service Title -->
                            <h3 class="font-playfair text-2xl font-medium text-charcoal group-hover:text-white mb-4 transition-colors duration-300">
                                {{ $service->title }}
                            </h3>
                            
                            <!-- Service Subtitle -->
                            @if($service->subtitle)
                                <h4 class="text-lg text-warm-orange group-hover:text-warm-orange/90 mb-4 transition-colors duration-300">
                                    {{ $service->subtitle }}
                                </h4>
                            @endif
                            
                            <!-- Short Description -->
                            <p class="text-charcoal/80 group-hover:text-white/80 leading-relaxed mb-6 transition-colors duration-300">
                                {{ $service->short_description }}
                            </p>
                            
                            <!-- Learn More Link -->
                            <a href="{{ route('services.show', $service) }}" 
                               class="inline-flex items-center text-warm-orange group-hover:text-white font-medium transition-colors duration-300">
                                Learn More
                                <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- No Services Message -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-3xl font-light text-charcoal mb-4">
                    Services Coming Soon
                </h3>
                <p class="text-lg text-charcoal/70 max-w-2xl mx-auto">
                    We're currently updating our services portfolio. Please check back soon or contact us directly 
                    to learn about our comprehensive interior design solutions.
                </p>
            </div>
        @endif
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-charcoal text-ivory">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-playfair text-4xl md:text-5xl font-light mb-8">
            Ready to Transform Your <span class="text-warm-orange">Space?</span>
        </h2>
        
        <p class="text-xl font-light mb-12 leading-relaxed text-ivory/80">
            Let's discuss your project and create something beautiful together.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="tel:07676765746" class="inline-flex items-center px-8 py-4 bg-warm-orange text-ivory font-medium rounded-sm hover:bg-warm-orange/90 transition-all duration-300 group">
                Call Now: 076767 65746
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </a>
            
            <a href="{{ route('about') }}" class="inline-flex items-center px-8 py-4 border border-ivory/30 text-ivory font-medium rounded-sm hover:bg-ivory/10 transition-all duration-300">
                Learn About Us
            </a>
        </div>
    </div>
</section>
@endsection
