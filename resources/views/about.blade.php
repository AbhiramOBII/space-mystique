@extends('front-end-layouts.app')

@section('content')
<!-- Hero Section - Founders' Statement -->
<section class="relative h-96 md:h-[700px] flex items-center justify-center bg-ivory overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/about-home.jpg') }}" 
             alt="Suparna Nagaraj & Nagaraj - Founders" 
             class="w-full h-full object-cover opacity-80">
        <div class="absolute inset-0 bg-gradient-to-b from-black/90 via-charcoal/70 to-charcoal/50"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="font-playfair text-5xl md:text-7xl font-light text-ivory mb-8 leading-tight">
            Design is personal.<br>
            <span class="text-warm-orange">Details make it timeless.</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-ivory/90 font-light mb-12 leading-relaxed">
            A journey led by Suparna Nagaraj & Nagaraj — crafting meaningful spaces for over 25 years.
        </p>
        
        <a href="#portfolio" class="inline-flex items-center px-8 py-4 bg-warm-orange text-ivory font-medium rounded-sm hover:bg-warm-orange/90 transition-all duration-300 group">
            Explore Our Work
            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- The Founders Section -->
<section class="py-24 bg-ivory fade-in-section">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Founder Imagery -->
            <div class="relative">
                <div class="aspect-[4/5] bg-warm-gray/10 rounded-sm overflow-hidden">
                    <img src="{{ asset('images/founders-studio.jpg') }}" 
                         alt="Suparna Nagaraj & Nagaraj in their design studio" 
                         class="w-full h-full object-cover">
                </div>
                <!-- Decorative Element -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-warm-orange/10 rounded-sm -z-10"></div>
            </div>
            
            <!-- Right: Narrative Copy -->
            <div class="space-y-8">
                <div>
                    <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                        The Founders
                    </h2>
                    <div class="w-16 h-px bg-warm-orange mb-8"></div>
                </div>
                
                <div class="space-y-6 text-lg text-charcoal/80 leading-relaxed">
                    <p>
                        <strong class="text-charcoal">Suparna Nagaraj</strong> and <strong class="text-charcoal">Nagaraj</strong> 
                        stand as the creative and executional pillars of Space Mystique Interiors, bringing together 
                        decades of passion for design, materials, and the art of detailing.
                    </p>
                    
                    <p>
                        Their journey spans over 25 years across residential and commercial projects, each one 
                        reflecting their shared belief that spaces should be more than beautiful—they should 
                        reflect personality, serve purpose, and embrace practicality.
                    </p>
                    
                    <p>
                        What sets them apart is their hands-on approach to every project. From the initial 
                        concept to the final installation, Suparna and Nagaraj remain deeply involved, 
                        ensuring that every detail aligns with their vision of timeless, meaningful design.
                    </p>
                </div>
                
                <!-- Quote -->
                <blockquote class="border-l-4 border-warm-orange pl-6 py-4 bg-warm-gray/5 rounded-sm">
                    <p class="font-playfair text-xl text-charcoal italic">
                        "We believe that great design is not about following trends, but about creating 
                        spaces that tell a story and stand the test of time."
                    </p>
                    <cite class="text-warm-orange font-medium mt-2 block">— Suparna Nagaraj & Nagaraj</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- The Beginning of Space Mystique -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                The Beginning of Space Mystique
            </h2>
            <div class="w-16 h-px bg-warm-orange mx-auto mb-8"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="space-y-8 text-lg text-charcoal/80 leading-relaxed">
                <p class="text-xl font-light text-charcoal">
                    Space Mystique Interiors was born from a vision to bring international design 
                    sensibilities to Indian homes and workspaces, creating spaces that honor both 
                    global aesthetics and local functionality.
                </p>
                
                <p>
                    Founded on the principle of affordable luxury without compromise, the studio 
                    emerged from Suparna and Nagaraj's desire to make exceptional design accessible. 
                    They recognized that great interiors shouldn't be reserved for the elite—every 
                    space deserves thoughtful consideration and expert craftsmanship.
                </p>
                
                <p>
                    From the very beginning, the founders established a culture of hands-on involvement. 
                    Unlike many design firms that delegate execution, Suparna and Nagaraj remain 
                    personally invested in every project, ensuring that their vision translates 
                    seamlessly from concept to completion.
                </p>
                
                <p>
                    This commitment to founder-led supervision has become the cornerstone of Space 
                    Mystique's reputation, building trust with clients who know their spaces are 
                    being crafted by the very minds that conceived them.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Design Philosophy Section -->
<section class="py-24 bg-ivory">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                Design Philosophy
                <span class="block text-warm-orange">Led by Detail</span>
            </h2>
            <div class="w-16 h-px bg-warm-orange mx-auto mb-8"></div>
        </div>
        
        <!-- Philosophy Manifesto -->
        <div class="bg-charcoal text-ivory p-12 md:p-16 rounded-sm mb-16">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="font-playfair text-3xl md:text-4xl font-light mb-8">
                    Our Design Manifesto
                </h3>
                
                <div class="grid md:grid-cols-2 gap-8 text-lg leading-relaxed">
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-warm-orange font-medium mb-2">Design begins with a central idea</h4>
                            <p class="text-ivory/80">Every space starts with a story, a purpose, a vision that guides every decision.</p>
                        </div>
                        
                        <div>
                            <h4 class="text-warm-orange font-medium mb-2">Every detail supports a larger narrative</h4>
                            <p class="text-ivory/80">From material selection to lighting placement, each element contributes to the whole.</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-warm-orange font-medium mb-2">Balance of aesthetics, function, and durability</h4>
                            <p class="text-ivory/80">Beautiful spaces must also be livable, practical, and built to last.</p>
                        </div>
                        
                        <div>
                            <h4 class="text-warm-orange font-medium mb-2">Timeless over trendy</h4>
                            <p class="text-ivory/80">We create designs that evolve gracefully, transcending fleeting fashion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Craftsmanship & Execution -->
<section class="py-24 bg-warm-gray/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Content -->
            <div class="space-y-8">
                <div>
                    <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                        Craftsmanship &
                        <span class="text-warm-orange">Execution</span>
                    </h2>
                    <div class="w-16 h-px bg-warm-orange mb-8"></div>
                </div>
                
                <div class="space-y-6 text-lg text-charcoal/80 leading-relaxed">
                    <p>
                        At Space Mystique, exceptional design is only the beginning. Our strength lies 
                        in our ability to execute that vision with precision, quality, and attention 
                        to every detail.
                    </p>
                    
                    <p>
                        We offer comprehensive, end-to-end interior solutions backed by a strong 
                        in-house team of designers, material experts, skilled carpenters, and 
                        experienced supervisors.
                    </p>
                    
                    <p>
                        What truly sets us apart is our founder-led supervision model. Suparna and 
                        Nagaraj personally oversee every phase of execution, ensuring that the 
                        quality and precision of our work never wavers.
                    </p>
                    
                    <p>
                        From intimate residential spaces to large-scale commercial projects, we have 
                        the capability and expertise to handle turnkey interior solutions of any 
                        scale while maintaining our commitment to excellence.
                    </p>
                </div>
            </div>
            
            <!-- Right: Image -->
            <div class="relative">
                <div class="aspect-[4/5] bg-warm-gray/10 rounded-sm overflow-hidden">
                    <img src="{{ asset('images/about-craftmanship.jpg') }}" 
                         alt="Detailed craftsmanship and execution" 
                         class="w-full h-full object-cover">
                </div>
                <!-- Decorative Element -->
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-warm-orange/10 rounded-sm -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- What Sets the Founders Apart -->
<section class="py-24 bg-ivory">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl font-light text-charcoal mb-6">
                What Sets Us Apart
            </h2>
            <div class="w-16 h-px bg-warm-orange mx-auto mb-8"></div>
        </div>
        
        <!-- Grid of Differentiators -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 25+ Years Experience -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">25+ Years of Experience</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    Over two decades of expertise in residential and commercial interior design, 
                    building a legacy of exceptional spaces.
                </p>
            </div>
            
            <!-- Founder-Driven -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">Founder-Driven Design</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    Personal involvement from Suparna and Nagaraj in every project, ensuring 
                    consistent quality and vision.
                </p>
            </div>
            
            <!-- Bespoke Approach -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17v4a2 2 0 002 2h4M15 5l2 2"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">Bespoke, Detail-Oriented</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    Every project is uniquely crafted with meticulous attention to detail and 
                    personalized design solutions.
                </p>
            </div>
            
            <!-- International Inspiration -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">Global Inspiration, Local Sensibility</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    International design aesthetics thoughtfully adapted for Indian functionality 
                    and lifestyle needs.
                </p>
            </div>
            
            <!-- Long-term Relationships -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">Long-term Client Relationships</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    Building lasting partnerships through trust, transparency, and consistent 
                    delivery of exceptional results.
                </p>
            </div>
            
            <!-- Turnkey Solutions -->
            <div class="text-center p-8 bg-white rounded-sm shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-16 h-16 bg-warm-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="font-playfair text-2xl font-medium text-charcoal mb-4">Complete Turnkey Solutions</h3>
                <p class="text-charcoal/70 leading-relaxed">
                    End-to-end interior solutions from concept to completion, handling projects 
                    of any scale with expertise.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Personal Invitation Closing -->
<section class="py-24 bg-charcoal text-ivory">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-playfair text-4xl md:text-6xl font-light mb-8">
            Every space deserves
            <span class="text-warm-orange">thoughtful design.</span>
        </h2>
        
        <p class="text-xl md:text-2xl font-light mb-12 leading-relaxed text-ivory/80">
            We invite you to begin your design journey with us. Let Suparna Nagaraj and Nagaraj 
            transform your vision into a space that reflects your personality, serves your needs, 
            and stands the test of time.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="#contact" class="inline-flex items-center px-8 py-4 bg-warm-orange text-ivory font-medium rounded-sm hover:bg-warm-orange/90 transition-all duration-300 group">
                Book a Design Consultation
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            
            <a href="#portfolio" class="inline-flex items-center px-8 py-4 border border-ivory/30 text-ivory font-medium rounded-sm hover:bg-ivory/10 transition-all duration-300">
                View Our Portfolio
            </a>
        </div>
        
        <!-- Personal Note -->
        <div class="mt-16 pt-8 border-t border-ivory/20">
            <p class="font-playfair text-lg italic text-ivory/70">
                "We look forward to crafting something beautiful together."
            </p>
            <p class="text-warm-orange font-medium mt-2">
                — Suparna Nagaraj & Nagaraj, Founders
            </p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Smooth scroll animations for About page
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observe sections with fade-in-section class for animation
    document.querySelectorAll('.fade-in-section').forEach(section => {
        observer.observe(section);
    });
</script>
@endsection
