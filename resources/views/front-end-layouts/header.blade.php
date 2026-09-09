<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Mystique Interiors - Luxury Interior Design Studio Bengaluru</title>
    <script src="https://cdn.tailwindcss.com"></script>
  
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'charcoal': '#4D4D4D',
                        'dark-charcoal': '#2A2A2A',
                        'warm-orange': '#F58634',
                        'sage-green': '#5BBF4A',
                        'ivory': '#FEFCF8',
                        'warm-grey': '#6B6B6B',
                        'brass': '#B8860B'
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .smooth-scroll {
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(77, 77, 77, 0.7) 0%, rgba(107, 107, 107, 0.5) 100%);
        }
        .floating-whatsapp {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        /* Parallax Background Styles */
        .parallax-bg {
            will-change: transform;
            backface-visibility: hidden;
            perspective: 1000px;
        }

        /* Enhanced parallax for desktop */
        @media (min-width: 768px) {
            .parallax-bg {
                background-attachment: fixed;
            }
        }

        /* Fallback for mobile devices */
        @media (max-width: 767px) {
            .parallax-bg {
                background-attachment: scroll;
                transform: none !important;
            }
        }

        /* Smooth scrolling enhancement */
        @supports (background-attachment: fixed) {
            .parallax-bg {
                background-attachment: fixed;
            }
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero-bg-placeholder {
            background: linear-gradient(135deg, #4D4D4D 0%, #6B6B6B 100%);
        }
        .img-loading {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        .img-loaded {
            opacity: 1;
        }
    </style>
</head>
<body class="font-sans text-charcoal bg-ivory smooth-scroll">
    
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-ivory z-[9999] flex items-center justify-center">
        <div class="text-center">
            <img src="{{ asset('images/logo-space-mystique.png') }}" alt="Space Mystique Interiors" class="h-16 w-auto mb-6 mx-auto">
            <div class="w-8 h-8 border-2 border-warm-orange border-t-transparent rounded-full animate-spin mx-auto"></div>
        </div>
    </div>
    
    <!-- Top Bar -->
    <div class="fixed w-full top-0 z-50 bg-charcoal text-white text-sm">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-10">
                <!-- Contact Info -->
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>076767 65746</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-2">
                        <svg class="w-4 h-4 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>hello@spacemystique.com</span>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="flex items-center space-x-4">
                    <!-- Instagram -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.2 2.4c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.3 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .3-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.3-1-.4-2.2-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.3 2.2-.4 1.3-.1 1.7-.1 4.9-.1zm0-2.2c-3.3 0-3.7 0-5 .1-1.3.1-2.2.2-3 .5-.8.3-1.5.7-2.2 1.4-.7.7-1.1 1.4-1.4 2.2-.3.8-.4 1.7-.5 3-.1 1.3-.1 1.7-.1 5s0 3.7.1 5c.1 1.3.2 2.2.5 3 .3.8.7 1.5 1.4 2.2.7.7 1.4 1.1 2.2 1.4.8.3 1.7.4 3 .5 1.3.1 1.7.1 5 .1s3.7 0 5-.1c1.3-.1 2.2-.2 3-.5.8-.3 1.5-.7 2.2-1.4.7-.7 1.1-1.4 1.4-2.2.3-.8.4-1.7.5-3 .1-1.3.1-1.7.1-5s0-3.7-.1-5c-.1-1.3-.2-2.2-.5-3-.3-.8-.7-1.5-1.4-2.2-.7-.7-1.4-1.1-2.2-1.4-.8-.3-1.7-.4-3-.5-1.3-.1-1.7-.1-5-.1z"/>
                            <path d="M12.2 5.8c-3.5 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4 6.4-2.9 6.4-6.4-2.9-6.4-6.4-6.4zm0 10.5c-2.3 0-4.1-1.8-4.1-4.1s1.8-4.1 4.1-4.1 4.1 1.8 4.1 4.1-1.8 4.1-4.1 4.1z"/>
                            <circle cx="18.4" cy="5.6" r="1.5"/>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <!-- Pinterest -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="Pinterest">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="fixed w-full top-10 z-40 bg-dark-charcoal/95 backdrop-blur-sm border-b border-warm-grey/10">
        <nav class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-space-mystique.png') }}" alt="Space Mystique Interiors" class="h-12 w-auto">
                    </a>
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-warm-orange transition-colors duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-warm-orange transition-colors duration-300">About</a>
                    <a href="{{ route('services.index') }}" class="text-white hover:text-warm-orange transition-colors duration-300">Services</a>
                    <a href="{{ route('projects.index') }}" class="text-white hover:text-warm-orange transition-colors duration-300">Projects</a>
                    <a href="#" class="text-white hover:text-warm-orange transition-colors duration-300">Contact</a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#consultation" class="bg-warm-orange text-white px-6 py-3 rounded-none hover:bg-charcoal transition-colors duration-300 font-medium">
                        Book Consultation
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-warm-orange transition-colors duration-300">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-dark-charcoal/95 backdrop-blur-sm transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <!-- Close Button -->
        <div class="absolute top-6 right-6">
            <button id="mobile-menu-close" class="text-white hover:text-warm-orange transition-colors duration-300 p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div class="flex flex-col h-full pt-32">
            <!-- Mobile Navigation Links -->
            <nav class="flex-1 px-6">
                <div class="space-y-8">
                    <a href="{{ route('home') }}" class="mobile-menu-link block text-2xl font-light text-white hover:text-warm-orange transition-colors duration-300">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="mobile-menu-link block text-2xl font-light text-white hover:text-warm-orange transition-colors duration-300">
                        About
                    </a>
                    <a href="{{ route('services.index') }}" class="mobile-menu-link block text-2xl font-light text-white hover:text-warm-orange transition-colors duration-300">
                        Services
                    </a>
                    <a href="{{ route('projects.index') }}" class="mobile-menu-link block text-2xl font-light text-white hover:text-warm-orange transition-colors duration-300">
                        Projects
                    </a>
                    <a href="#contact" class="mobile-menu-link block text-2xl font-light text-white hover:text-warm-orange transition-colors duration-300">
                        Contact
                    </a>
                </div>
                
                <!-- Mobile CTA Button -->
                <div class="mt-12">
                    <a href="#consultation" class="mobile-menu-link block bg-warm-orange text-white px-8 py-4 text-lg font-medium hover:bg-white hover:text-charcoal transition-all duration-300 text-center">
                        Book Consultation
                    </a>
                </div>
            </nav>
            
            <!-- Mobile Contact Info -->
            <div class="px-6 py-8 border-t border-warm-grey/20">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 text-white">
                        <svg class="w-5 h-5 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>076767 65746</span>
                    </div>
                    <div class="flex items-center space-x-3 text-white">
                        <svg class="w-5 h-5 text-warm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>hello@spacemystique.com</span>
                    </div>
                </div>
                
                <!-- Mobile Social Links -->
                <div class="flex space-x-6 mt-6">
                    <!-- Instagram -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.2 2.4c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.3 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .3-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.3-1-.4-2.2-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.3 2.2-.4 1.3-.1 1.7-.1 4.9-.1zm0-2.2c-3.3 0-3.7 0-5 .1-1.3.1-2.2.2-3 .5-.8.3-1.5.7-2.2 1.4-.7.7-1.1 1.4-1.4 2.2-.3.8-.4 1.7-.5 3-.1 1.3-.1 1.7-.1 5s0 3.7.1 5c.1 1.3.2 2.2.5 3 .3.8.7 1.5 1.4 2.2.7.7 1.4 1.1 2.2 1.4.8.3 1.7.4 3 .5 1.3.1 1.7.1 5 .1s3.7 0 5-.1c1.3-.1 2.2-.2 3-.5.8-.3 1.5-.7 2.2-1.4.7-.7 1.1-1.4 1.4-2.2.3-.8.4-1.7.5-3 .1-1.3.1-1.7.1-5s0-3.7-.1-5c-.1-1.3-.2-2.2-.5-3-.3-.8-.7-1.5-1.4-2.2-.7-.7-1.4-1.1-2.2-1.4-.8-.3-1.7-.4-3-.5-1.3-.1-1.7-.1-5-.1z"/>
                            <path d="M12.2 5.8c-3.5 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4 6.4-2.9 6.4-6.4-2.9-6.4-6.4-6.4zm0 10.5c-2.3 0-4.1-1.8-4.1-4.1s1.8-4.1 4.1-4.1 4.1 1.8 4.1 4.1-1.8 4.1-4.1 4.1z"/>
                            <circle cx="18.4" cy="5.6" r="1.5"/>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="YouTube">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <!-- Pinterest -->
                    <a href="#" class="text-gray-300 hover:text-warm-orange transition-colors duration-300" title="Pinterest">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.90-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>