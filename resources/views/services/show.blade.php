@extends('front-end-layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-96 md:h-[600px] flex items-center justify-center bg-ivory overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        @if($service->thumbnail)
            <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                 alt="{{ $service->title }}" 
                 class="w-full h-full object-cover opacity-80">
        @else
            <img src="{{ asset('images/service-detail-hero.jpg') }}" 
                 alt="{{ $service->title }}" 
                 class="w-full h-full object-cover opacity-80">
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-charcoal/60 to-charcoal/40"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="font-playfair text-5xl md:text-7xl font-light text-ivory mb-6 leading-tight">
            {{ $service->title }}
        </h1>
        
        @if($service->subtitle)
            <p class="text-2xl md:text-3xl text-warm-orange font-light mb-8">
                {{ $service->subtitle }}
            </p>
        @endif
        
        <p class="text-xl text-ivory/90 font-light leading-relaxed">
            {{ $service->short_description }}
        </p>
    </div>
    
    <!-- Breadcrumb -->
    <div class="absolute bottom-8 left-8 z-10">
        <nav class="text-ivory/80 text-sm">
            <a href="{{ route('services.index') }}" class="hover:text-warm-orange transition-colors duration-300">Services</a>
            <span class="mx-2">/</span>
            <span class="text-warm-orange">{{ $service->title }}</span>
        </nav>
    </div>
</section>

<!-- Service Details Section -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="prose prose-lg max-w-none">
            <div class="text-charcoal/80 leading-relaxed">
                {!! $service->full_description !!}
            </div>
        </div>
    </div>
</section>

<!-- Related Services Section -->
@php
    $relatedServices = \App\Models\Service::active()
        ->where('id', '!=', $service->id)
        ->limit(3)
        ->get();
@endphp

@if($relatedServices->count() > 0)
<section class="py-24 bg-ivory">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                Other <span class="text-warm-orange">Services</span>
            </h2>
            <p class="text-xl text-charcoal/70 max-w-3xl mx-auto">
                Explore our comprehensive range of interior design solutions
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-{{ $relatedServices->count() > 2 ? '3' : $relatedServices->count() }} gap-8">
            @foreach($relatedServices as $relatedService)
                <div class="group bg-white hover:bg-charcoal transition-all duration-300 cursor-pointer rounded-sm overflow-hidden shadow-sm hover:shadow-lg">
                    <div class="p-8">
                        <!-- Service Thumbnail -->
                        <div class="mb-6 overflow-hidden rounded-lg">
                            @if($relatedService->thumbnail)
                                <img src="{{ asset('storage/' . $relatedService->thumbnail) }}" 
                                     alt="{{ $relatedService->title }}" 
                                     class="w-full h-32 object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="w-full h-32 bg-warm-orange/10 group-hover:bg-white/20 rounded-lg flex items-center justify-center transition-colors duration-300">
                                    <svg class="w-8 h-8 text-warm-orange group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Service Title -->
                        <h3 class="font-playfair text-2xl font-medium text-charcoal group-hover:text-white mb-4 transition-colors duration-300">
                            {{ $relatedService->title }}
                        </h3>
                        
                        <!-- Service Subtitle -->
                        @if($relatedService->subtitle)
                            <h4 class="text-lg text-warm-orange group-hover:text-warm-orange/90 mb-4 transition-colors duration-300">
                                {{ $relatedService->subtitle }}
                            </h4>
                        @endif
                        
                        <!-- Short Description -->
                        <p class="text-charcoal/80 group-hover:text-white/80 leading-relaxed mb-6 transition-colors duration-300">
                            {{ Str::limit($relatedService->short_description, 120) }}
                        </p>
                        
                        <!-- Learn More Link -->
                        <a href="{{ route('services.show', $relatedService) }}" 
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
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-24 bg-charcoal text-ivory">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-playfair text-4xl md:text-5xl font-light mb-8">
            Interested in <span class="text-warm-orange">{{ $service->title }}?</span>
        </h2>
        
        <p class="text-xl font-light mb-12 leading-relaxed text-ivory/80">
            Let's discuss how we can bring this service to life in your space.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="tel:07676765746" class="inline-flex items-center px-8 py-4 bg-warm-orange text-ivory font-medium rounded-sm hover:bg-warm-orange/90 transition-all duration-300 group">
                Get Free Consultation
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </a>
            
            <a href="{{ route('services.index') }}" class="inline-flex items-center px-8 py-4 border border-ivory/30 text-ivory font-medium rounded-sm hover:bg-ivory/10 transition-all duration-300">
                View All Services
            </a>
        </div>
    </div>
</section>
@endsection

@if($service->meta_title || $service->meta_description)
@section('meta')
    @if($service->meta_title)
        <title>{{ $service->meta_title }} | Space Mystique Interiors</title>
    @endif
    
    @if($service->meta_description)
        <meta name="description" content="{{ $service->meta_description }}">
    @endif
@endsection
@endif
