<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Kevin.dev - Full Stack Developer' }}</title>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <!-- Tailwind CSS via Vite -->
    @vite('resources/css/app.css')

    <!-- Custom Styles -->
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar - Dark theme */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #1e40af);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #2563eb, #1d4ed8);
        }

        /* Glass Effects */
        .glass-backdrop {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-dark {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Loading animation */
        .loading-skeleton {
            background: linear-gradient(90deg, #1e293b 25%, #334155 50%, #1e293b 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }

        /* Floating elements */
        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .floating-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }

        /* Enhanced focus styles */
        .focus-ring:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }

        /* Text gradients */
        .text-gradient {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #1e40af 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-secondary {
            background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 50%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced button styles */
        .btn-primary {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.4);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 64, 175, 0.5);
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        /* Dark navbar specific styles */
        .nav-link-dark {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link-dark::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link-dark:hover::before {
            width: 100%;
        }
        
        .hamburger-line {
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform-origin: center;
        }
        
        .hamburger-open .line1 {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger-open .line2 {
            opacity: 0;
            transform: scale(0);
        }
        
        .hamburger-open .line3 {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        .mobile-menu-slide {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }
        
        .mobile-menu-slide.open {
            max-height: 400px;
        }
        
        .mobile-menu-item {
            transform: translateX(-20px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-slide.open .mobile-menu-item {
            transform: translateX(0);
            opacity: 1;
        }
        
        .mobile-menu-slide.open .mobile-menu-item:nth-child(1) { transition-delay: 0.1s; }
        .mobile-menu-slide.open .mobile-menu-item:nth-child(2) { transition-delay: 0.15s; }
        .mobile-menu-slide.open .mobile-menu-item:nth-child(3) { transition-delay: 0.2s; }
        .mobile-menu-slide.open .mobile-menu-item:nth-child(4) { transition-delay: 0.25s; }
        .mobile-menu-slide.open .mobile-menu-item:nth-child(5) { transition-delay: 0.3s; }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        /* Progress bar enhancement */
        .progress-bar {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            box-shadow: 0 2px 10px rgba(59, 130, 246, 0.3);
        }

        /* Page transitions */
        .page-transition {
            opacity: 0;
            transform: translateY(20px);
            animation: pageEnter 0.8s ease-out forwards;
        }

        @keyframes pageEnter {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animated background particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0.1;
            animation: particleFloat 20s linear infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.1;
            }
            90% {
                opacity: 0.1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Tech badge styles */
        .tech-badge {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .tech-badge:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.2);
        }

        /* Glow effects */
        .glow-blue {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

        .glow-purple {
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .glass-backdrop,
            .glass-dark,
            .glass-card {
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
        }
    </style>
</head>
<body class="font-sans bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 text-white antialiased page-transition overflow-x-hidden">

    <!-- Animated Background Particles -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="particle w-2 h-2 bg-blue-400" style="left: 10%; animation-delay: 0s;"></div>
        <div class="particle w-1 h-1 bg-purple-400" style="left: 20%; animation-delay: 2s;"></div>
        <div class="particle w-3 h-3 bg-sky-400" style="left: 30%; animation-delay: 4s;"></div>
        <div class="particle w-2 h-2 bg-indigo-400" style="left: 40%; animation-delay: 6s;"></div>
        <div class="particle w-1 h-1 bg-blue-300" style="left: 50%; animation-delay: 8s;"></div>
        <div class="particle w-2 h-2 bg-purple-300" style="left: 60%; animation-delay: 10s;"></div>
        <div class="particle w-1 h-1 bg-sky-300" style="left: 70%; animation-delay: 12s;"></div>
        <div class="particle w-3 h-3 bg-blue-400" style="left: 80%; animation-delay: 14s;"></div>
        <div class="particle w-2 h-2 bg-indigo-300" style="left: 90%; animation-delay: 16s;"></div>
    </div>

    <!-- Progress Bar -->
    <div id="progress-bar" class="fixed top-0 left-0 h-1 progress-bar z-50 transition-all duration-300" style="width: 0%"></div>

    <!-- Enhanced Dark Glass Navbar -->
    <nav class="glass-dark shadow-2xl sticky top-0 z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 glow-blue">
                        <img src="{{ asset('images/kevin-logo.png') }}" alt="Logo" class="w-6 h-6 object-contain" />
                    </div>
                    <span class="text-2xl font-bold text-white group-hover:text-gradient transition-colors duration-300">
                        Kevin.dev
                    </span>
                </a>
                

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8 font-medium text-gray-300">
                    <a href="/" class="nav-link-dark hover:text-white transition-colors duration-300 py-2">Home</a>
                    <a href="/about" class="nav-link-dark hover:text-white transition-colors duration-300 py-2">About</a>
                    <a href="/projects" class="nav-link-dark hover:text-white transition-colors duration-300 py-2">Projects</a>
                    <a href="/contact" class="nav-link-dark hover:text-white transition-colors duration-300 py-2">Contact</a>
                    <a href="/contact" class="ml-2 btn-primary px-6 py-2.5 rounded-full text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm font-medium">
                        Hire Me
                    </a>
                </div>

                <!-- Hamburger Menu -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="relative w-10 h-10 flex flex-col justify-center items-center space-y-1.5 group" aria-expanded="false" aria-label="Toggle navigation menu">
                        <span class="hamburger-line line1 block h-0.5 w-6 bg-white rounded-full"></span>
                        <span class="hamburger-line line2 block h-0.5 w-6 bg-white rounded-full"></span>
                        <span class="hamburger-line line3 block h-0.5 w-6 bg-white rounded-full"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="mobile-menu-slide md:hidden glass-card border-t border-white/10 shadow-2xl hidden">
            <div class="px-6 py-6 space-y-4">
                <a href="/" class="mobile-menu-item block text-gray-300 hover:text-white hover:bg-white/10 font-medium py-3 px-4 rounded-lg transition-all duration-300">
                    Home
                </a>
                <a href="/about" class="mobile-menu-item block text-gray-300 hover:text-white hover:bg-white/10 font-medium py-3 px-4 rounded-lg transition-all duration-300">
                    About
                </a>
                <a href="/projects" class="mobile-menu-item block text-gray-300 hover:text-white hover:bg-white/10 font-medium py-3 px-4 rounded-lg transition-all duration-300">
                    Projects
                </a>
                <a href="/contact" class="mobile-menu-item block text-gray-300 hover:text-white hover:bg-white/10 font-medium py-3 px-4 rounded-lg transition-all duration-300">
                    Contact
                </a>
                <div class="mobile-menu-item pt-4 border-t border-white/10">
                    <a href="/contact" class="block w-full text-center btn-primary px-6 py-3 rounded-full text-white font-medium shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        Hire Me
                    </a>
                </div>
            </div>
        </div>
    </nav>

   

    <!-- Enhanced Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-14 h-14 btn-primary text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 opacity-0 invisible z-40 glow-blue">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
        </svg>
    </button>

    <!-- Enhanced Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 glass-dark z-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative">
                <div class="animate-spin rounded-full h-16 w-16 border-4 border-blue-500 border-t-transparent glow-blue"></div>
                <div class="absolute inset-0 animate-ping rounded-full h-16 w-16 border-4 border-purple-500 border-t-transparent opacity-20"></div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS with enhanced settings
        AOS.init({
            once: true,
            duration: 1000,
            offset: 100,
            easing: 'ease-out-cubic',
            delay: 100,
        });

        // Enhanced Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isOpen = !menu.classList.contains('hidden');
                    
                    if (isOpen) {
                        menu.classList.add('hidden');
                        menu.classList.remove('open');
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                    } else {
                        menu.classList.remove('hidden');
                        menu.classList.add('open');
                        btn.classList.add('hamburger-open');
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });

          
              
                // Close menu when clicking on menu items
                const mobileMenuLinks = menu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                        menu.classList.remove('open');
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                    });
                });

                // Close menu on escape key
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                        menu.classList.add('hidden');
                        menu.classList.remove('open');
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                        btn.focus();
                    }
                });
            }

            // Enhanced navbar scroll effect
            let lastScrollTop = 0;
            const navbar = document.querySelector('nav');
            
            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > 100) {
                    navbar.style.background = 'rgba(15, 23, 42, 0.95)';
                    navbar.style.backdropFilter = 'blur(25px)';
                    navbar.classList.add('shadow-2xl');
                } else {
                    navbar.style.background = 'rgba(15, 23, 42, 0.8)';
                    navbar.style.backdropFilter = 'blur(20px)';
                }
                
                lastScrollTop = scrollTop;
            });
        });

        // Enhanced Progress Bar
        window.addEventListener('scroll', () => {
            const progressBar = document.getElementById('progress-bar');
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            progressBar.style.width = Math.min(progress, 100) + '%';
        });

        // HAMBURGER Enhanced Back to Top Button
        const backToTopBtn = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.add('opacity-0', 'invisible');
                backToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        backToTopBtn?.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

    
   

    

      

   


    </script>

    <!-- Extra Scripts from Child View -->
    
</body>
</html>