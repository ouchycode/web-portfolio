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

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Page Content -->
    <main id="main-content" class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Enhanced Background decoration -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Large floating orbs -->
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating-delayed"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse"></div>
            
            <!-- Medium floating elements -->
            <div class="absolute top-20 left-10 w-32 h-32 bg-indigo-400 rounded-full mix-blend-multiply filter blur-lg opacity-15 floating" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 right-10 w-24 h-24 bg-cyan-400 rounded-full mix-blend-multiply filter blur-lg opacity-15 floating" style="animation-delay: 3s;"></div>
            
            <!-- Small accent dots -->
            <div class="absolute top-1/4 right-1/4 w-4 h-4 bg-blue-400 rounded-full opacity-40 animate-ping"></div>
            <div class="absolute bottom-1/4 left-1/4 w-3 h-3 bg-purple-400 rounded-full opacity-30 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <!-- Content Container with Glass Effect -->
        <div class="relative z-20">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <x-footer />

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
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                    } else {
                        menu.classList.remove('hidden');
                        btn.classList.add('hamburger-open');
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!btn.contains(e.target) && !menu.contains(e.target)) {
                        menu.classList.add('hidden');
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                    }
                });

                // Close menu on escape key
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                        menu.classList.add('hidden');
                        btn.classList.remove('hamburger-open');
                        btn.setAttribute('aria-expanded', 'false');
                        btn.focus();
                    }
                });
            }
        });

        // Enhanced Progress Bar
        window.addEventListener('scroll', () => {
            const progressBar = document.getElementById('progress-bar');
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            progressBar.style.width = Math.min(progress, 100) + '%';
        });

        // Enhanced Back to Top Button
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

        // Enhanced form validation and UX
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', (e) => {
                const loadingOverlay = document.getElementById('loading-overlay');
                loadingOverlay?.classList.remove('hidden');
                
                // Hide loading after 3 seconds (adjust based on your needs)
                setTimeout(() => {
                    loadingOverlay?.classList.add('hidden');
                }, 3000);
            });
        });

        // Enhanced lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('loading-skeleton');
                        img.classList.add('transition-opacity', 'duration-500');
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px'
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                img.classList.add('loading-skeleton');
                imageObserver.observe(img);
            });
        }

        // Enhanced keyboard navigation
        document.addEventListener('keydown', (e) => {
            // Alt + H for Home
            if (e.altKey && e.key === 'h') {
                e.preventDefault();
                window.location.href = '/';
            }
            
            // Alt + C for Contact
            if (e.altKey && e.key === 'c') {
                e.preventDefault();
                window.location.href = '/contact';
            }

            // Alt + P for Projects
            if (e.altKey && e.key === 'p') {
                e.preventDefault();
                window.location.href = '/projects';
            }
        });

        // Performance monitoring
        window.addEventListener('load', () => {
            if ('performance' in window) {
                const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
                console.log(`⚡ Page loaded in ${loadTime}ms`);
                
                // Add performance badge for development
                if (loadTime < 1000) {
                    console.log('🚀 Excellent performance!');
                } else if (loadTime < 2000) {
                    console.log('✅ Good performance');
                } else {
                    console.log('⚠️ Consider optimizing load time');
                }
            }
        });

        // Enhanced smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add some interactive particle effects on mouse move
        let mouseX = 0;
        let mouseY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            // Create subtle cursor trail effect
            if (Math.random() > 0.9) {
                createCursorParticle(mouseX, mouseY);
            }
        });

        function createCursorParticle(x, y) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: fixed;
                left: ${x}px;
                top: ${y}px;
                width: 4px;
                height: 4px;
                background: linear-gradient(45deg, #3b82f6, #8b5cf6);
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                animation: fadeOut 1s ease-out forwards;
            `;
            
            document.body.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        }

        // Add fadeOut animation dynamically
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeOut {
                0% {
                    opacity: 1;
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(0) translateY(-20px);
                }
            }
        `;
        document.head.appendChild(style);
    </script>

    <!-- Extra Scripts from Child View -->
    @stack('scripts')
</body>
</html>