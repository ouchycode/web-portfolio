<x-layout>
    <x-slot:title>Contact | Kevin.dev</x-slot:title>

    <style>
        .glass-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-form {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .glass-input {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            transition: all 0.3s ease;
        }
        
        .glass-input:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(96, 165, 250, 0.5);
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #60A5FA, #A78BFA);
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
        
        .success-alert {
            background: rgba(34, 197, 94, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(34, 197, 94, 0.3);
        }
        
        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .contact-icon {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .contact-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
    </style>

    <!-- Contact Section -->
    <div class="min-h-screen relative overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-ping delay-2000"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 py-20 relative z-10">
            <div class="glass-container rounded-3xl shadow-2xl p-8 sm:p-12">
                
                <!-- Header -->
                <div class="text-center mb-12" data-aos="fade-down">
                    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                        Get In <span class="gradient-text">Touch</span>
                    </h1>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Have a project in mind? Let's collaborate and create something amazing together
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    
                    <!-- Contact Form -->
                    <div class="floating-animation" data-aos="fade-right">
                        @if (session('success'))
                            <div class="success-alert mb-6 rounded-xl px-6 py-4 text-green-300 shadow-lg" data-aos="fade-in">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}" class="glass-form rounded-2xl p-8 shadow-xl space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Nama
                                </label>
                                <input type="text" name="name" id="name"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-white placeholder-gray-400"
                                    placeholder="Masukkan nama Anda"
                                    required />
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Email
                                </label>
                                <input type="email" name="email" id="email"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-white placeholder-gray-400"
                                    placeholder="email@example.com"
                                    required />
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    Pesan
                                </label>
                                <textarea name="message" id="message" rows="5"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-white placeholder-gray-400 resize-none"
                                    placeholder="Ceritakan tentang proyek atau ide Anda..."
                                    required></textarea>
                            </div>

                            <div class="text-center pt-2">
                                <button type="submit"
                                    class="btn-primary inline-flex items-center justify-center rounded-full px-8 py-4 text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 w-full sm:w-auto">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-8" data-aos="fade-left">
                        <div class="text-center lg:text-left">
                            <h3 class="text-2xl font-bold text-white mb-4">Let's Connect</h3>
                            <p class="text-gray-300 leading-relaxed">
                                I'm always interested in hearing about new projects and opportunities. 
                                Whether you're a company looking to hire, or you're a fellow developer 
                                looking to collaborate, I'd love to hear from you.
                            </p>
                        </div>

                        <!-- Contact Methods -->
                        <div class="space-y-4">
                            <div class="contact-icon rounded-xl p-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-white font-medium">Email</h4>
                                    <p class="text-gray-400 text-sm">kevinnardiansyahh19@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-icon rounded-xl p-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-white font-medium">Location</h4>
                                    <p class="text-gray-400 text-sm">Tangerang, Banten, ID</p>
                                </div>
                            </div>

                            <div class="contact-icon rounded-xl p-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-white font-medium">Response Time</h4>
                                    <p class="text-gray-400 text-sm">Usually within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="pt-6">
                            <h4 class="text-white font-medium mb-4">Find me on</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="contact-icon w-12 h-12 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5A4.25 4.25 0 0 1 16.25 20.5h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm8.75 2a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm-4.5 2.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5Zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="contact-icon w-12 h-12 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <a href="#" class="contact-icon w-12 h-12 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-6 -right-6 w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-60 animate-ping"></div>
                <div class="absolute -bottom-6 -left-6 w-8 h-8 bg-gradient-to-br from-sky-400 to-blue-500 rounded-full opacity-40 animate-pulse"></div>
            </div>
        </div>
    </div>
</x-layout>