<x-layout>
    <x-slot:title>About | Kevin.dev</x-slot:title>

    <style>
        .glass-hero {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #1E40AF, #3B82F6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 64, 175, 0.4);
        }
        
        .btn-secondary {
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }
        
        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .skill-progress {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }
        
        .skill-bar {
            background: linear-gradient(90deg, #1E40AF, #3B82F6);
            height: 8px;
            border-radius: 50px;
            transition: width 2s ease-in-out;
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .pulse-animation {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }
    </style>

    <!-- About Hero Section -->
    <div class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-ping delay-2000"></div>
        </div>

        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-hero rounded-3xl shadow-2xl">
                <div class="px-8 py-16 sm:px-16 text-center">
                    <h2 class="text-5xl font-bold text-white mb-6" data-aos="fade-up">
                        <span class="gradient-text">About Me</span>
                    </h2>
                    <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                        Saya adalah seorang mahasiswa <span class="gradient-text font-semibold">Ilmu Komputer</span> sekaligus <span class="gradient-text font-semibold">Web & Mobile Developer</span> dengan passion untuk membangun aplikasi yang 
                        <em class="text-blue-300">efisien</em>, <em class="text-blue-300">modern</em>, dan <em class="text-blue-300">mudah digunakan</em>. 
                        Dengan pengalaman di berbagai teknologi cutting-edge, saya senang mengubah ide menjadi solusi digital yang powerful.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="400">
                        <a href="{{ asset('files/cv-kevin.pdf') }}" download
                           class="btn-primary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download CV
                        </a>
                        <a href="https://www.linkedin.com/in/kevin" target="_blank"
                           class="btn-secondary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-semibold text-white hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            LinkedIn
                        </a>
                        <a href="https://github.com/kevin" target="_blank"
                           class="btn-secondary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-semibold text-white hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="relative overflow-hidden py-24">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 to-gray-900"></div>
        
        <!-- Floating Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-600 rounded-full mix-blend-multiply filter blur-xl opacity-10 pulse-animation"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-indigo-600 rounded-full mix-blend-multiply filter blur-xl opacity-10 pulse-animation delay-1000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h3 class="text-4xl font-bold text-white mb-4">
                    <span class="gradient-text">My Skills</span>
                </h3>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Technologies and tools I use to bring ideas to life
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Laravel Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/laravel.svg') }}" alt="JavaScript"
                        class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Laravel</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 90%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Expert - 90%</p>
                    <p class="text-gray-400 text-sm">PHP framework for web artisans</p>
                </div>

                <!-- Flutter Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/flutter.svg') }}" alt="JavaScript"
                        class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Flutter</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 80%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Advanced - 80%</p>
                    <p class="text-gray-400 text-sm">Cross-platform mobile development</p>
                </div>

                <!-- Tailwind CSS Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/tailwindcss.svg') }}" alt="JavaScript"
                             class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Tailwind CSS</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 85%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Advanced - 85%</p>
                    <p class="text-gray-400 text-sm">Utility-first CSS framework</p>
                </div>

                <!-- PHP Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/php.svg') }}" alt="JavaScript"
                             class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">PHP</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 88%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Advanced - 88%</p>
                    <p class="text-gray-400 text-sm">Server-side scripting language</p>
                </div>

                <!-- Figma Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-pink-500 to-orange-500 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/figma.svg') }}" alt="JavaScript"
                             class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Figma</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 70%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Intermediate - 70%</p>
                    <p class="text-gray-400 text-sm">UI/UX design and prototyping</p>
                </div>

                <!-- JavaScript Skill -->
                <div class="glass-card p-8 rounded-2xl text-center floating-animation" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center">
                        <img src="{{ asset('icons/javascript.svg') }}" alt="JavaScript"
                             class="w-8 h-8 object-contain filter brightness-0 invert" />
                    </div>
                    
                    <h4 class="text-xl font-bold text-white mb-3">JavaScript</h4>
                    <div class="skill-progress mb-3">
                        <div class="skill-bar" style="width: 75%"></div>
                    </div>
                    <p class="text-blue-300 font-semibold mb-2">Intermediate - 75%</p>
                    <p class="text-gray-400 text-sm">Client-side scripting language</p>
                </div>
            </div>
        </div>
    </section>

   
</x-layout>