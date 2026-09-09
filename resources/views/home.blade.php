@extends('front-end-layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div class="absolute inset-0 parallax-bg hero-bg-placeholder">
        <img src="images/hero-02.jpg" 
             alt="Luxury Interior Design" 
             class="w-full h-full object-cover img-loading"
             onload="this.classList.remove('img-loading'); this.classList.add('img-loaded');">
    </div>
    
    <!-- Overlay -->
    <div class="absolute inset-0 hero-gradient"></div>
    
    <!-- Content -->
    <div class="relative z-10 text-center text-white px-6 lg:px-8 max-w-4xl mx-auto fade-in">
        <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 leading-tight">
            Where Aesthetics Meet
            <span class="text-warm-orange">Functionality</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed">
            Creating timeless interiors with international design sensibility for over 25 years
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#consultation" class="bg-warm-orange text-white px-8 py-4 text-lg font-medium hover:bg-white hover:text-charcoal transition-all duration-300 transform hover:scale-105">
                Book Free Consultation
            </a>
            <a href="#portfolio" class="border-2 border-white text-white px-8 py-4 text-lg font-medium hover:bg-white hover:text-charcoal transition-all duration-300">
                View Our Work
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-32 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-charcoal mb-6">
                        Crafting Spaces That
                        <span class="text-warm-orange">Inspire</span>
                    </h2>
                    <p class="text-lg text-warm-grey leading-relaxed mb-6">
                        For over 25 years, Space Mystique has been at the forefront of luxury interior design in Bengaluru. 
                        We believe that great design is not just about aesthetics—it's about creating spaces that enhance 
                        the way you live, work, and feel.
                    </p>
                    <p class="text-lg text-warm-grey leading-relaxed">
                        Our team of expert designers combines international design sensibilities with local craftsmanship 
                        to deliver interiors that are both timeless and contemporary.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-warm-orange mb-2">25+</div>
                        <div class="text-warm-grey">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-warm-orange mb-2">500+</div>
                        <div class="text-warm-grey">Projects Completed</div>
                    </div>
                </div>
                <a href="#services" class="inline-block bg-charcoal text-white px-8 py-4 font-medium hover:bg-warm-orange transition-colors duration-300">
                    Explore Our Services
                </a>
            </div>
            <div class="relative">
                <img src="images/about-interior-design.jpg" 
                     alt="About Space Mystique Interiors" 
                     class="w-full h-96 object-cover rounded-lg shadow-2xl">
                <div class="absolute -bottom-6 -right-6 bg-warm-orange text-white p-6 rounded-lg shadow-xl">
                    <div class="text-2xl font-bold">Award</div>
                    <div class="text-sm">Winning Design</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-charcoal mb-6">
                Our <span class="text-warm-orange">Services</span>
            </h2>
            <p class="text-xl text-warm-grey max-w-3xl mx-auto">
                From concept to completion, we offer comprehensive interior design services 
                tailored to your unique vision and lifestyle.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="group bg-ivory p-8 hover:bg-charcoal transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mb-6 group-hover:bg-white transition-colors duration-300">
                    <svg class="w-8 h-8 text-white group-hover:text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-charcoal group-hover:text-white mb-4 transition-colors duration-300">
                    Residential Design
                </h3>
                <p class="text-warm-grey group-hover:text-gray-300 transition-colors duration-300">
                    Complete home interiors including living rooms, bedrooms, kitchens, and bathrooms designed for modern living.
                </p>
            </div>
            
            <!-- Service 2 -->
            <div class="group bg-ivory p-8 hover:bg-charcoal transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mb-6 group-hover:bg-white transition-colors duration-300">
                    <svg class="w-8 h-8 text-white group-hover:text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-charcoal group-hover:text-white mb-4 transition-colors duration-300">
                    Commercial Spaces
                </h3>
                <p class="text-warm-grey group-hover:text-gray-300 transition-colors duration-300">
                    Office spaces, retail stores, restaurants, and hospitality venues that reflect your brand and enhance productivity.
                </p>
            </div>
            
            <!-- Service 3 -->
            <div class="group bg-ivory p-8 hover:bg-charcoal transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mb-6 group-hover:bg-white transition-colors duration-300">
                    <svg class="w-8 h-8 text-white group-hover:text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-charcoal group-hover:text-white mb-4 transition-colors duration-300">
                    Space Planning
                </h3>
                <p class="text-warm-grey group-hover:text-gray-300 transition-colors duration-300">
                    Optimal space utilization with 3D visualization and detailed floor plans for maximum functionality.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview Section -->
<section id="portfolio" class="py-32 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-charcoal mb-6">
                Featured <span class="text-warm-orange">Projects</span>
            </h2>
            <p class="text-xl text-warm-grey max-w-3xl mx-auto">
                Explore our portfolio of stunning interiors that showcase our commitment to excellence and attention to detail.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Project 1 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="images/project-luxury-villa.jpg" 
                         alt="Luxury Villa Interior" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-charcoal/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="text-white text-center">
                            <h4 class="text-xl font-semibold mb-2">Luxury Villa</h4>
                            <p class="text-sm">Modern Contemporary</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="images/project-office-space.jpg" 
                         alt="Office Space Interior" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-charcoal/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="text-white text-center">
                            <h4 class="text-xl font-semibold mb-2">Corporate Office</h4>
                            <p class="text-sm">Professional Workspace</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="images/project-apartment.jpg" 
                         alt="Apartment Interior" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-charcoal/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="text-white text-center">
                            <h4 class="text-xl font-semibold mb-2">Urban Apartment</h4>
                            <p class="text-sm">Minimalist Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="/projects" class="bg-warm-orange text-white px-8 py-4 font-medium hover:bg-charcoal transition-colors duration-300">
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Consultation Section -->
<section id="consultation" class="py-32 bg-charcoal text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6">
            Ready to Transform Your <span class="text-warm-orange">Space?</span>
        </h2>
        <p class="text-xl text-gray-300 mb-12">
            Book a free consultation with our expert designers and let's bring your vision to life.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">Consultation</h3>
                <p class="text-gray-300">Free initial consultation to understand your needs and vision</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">Design</h3>
                <p class="text-gray-300">Detailed design concepts with 3D visualizations</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-warm-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">Execution</h3>
                <p class="text-gray-300">Professional execution with quality materials and craftsmanship</p>
            </div>
        </div>
        
        <a href="tel:07676765746" class="bg-warm-orange text-white px-8 py-4 text-lg font-medium hover:bg-white hover:text-charcoal transition-all duration-300 transform hover:scale-105">
            Call Now: 076767 65746
        </a>
    </div>
</section>
@endsection
