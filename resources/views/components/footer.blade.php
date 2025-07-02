<style>
    .glass-footer {
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .footer-gradient {
        background: linear-gradient(90deg, #1E40AF, #3B82F6, #8B5CF6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .social-link {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
    }
    
    .footer-link {
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
        position: relative;
    }
    
    .footer-link:hover {
        color: #60A5FA;
        transform: translateY(-1px);
    }
    
    .footer-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: -2px;
        left: 50%;
        background: linear-gradient(90deg, #60A5FA, #A78BFA);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .footer-link:hover::after {
        width: 100%;
    }
</style>

<footer class="glass-footer py-12 text-white relative">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse"></div>
        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            
            <!-- Brand Section -->
            <div class="text-center md:text-left" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-3">
                    <span class="footer-gradient">Kevin Ardiansyah</span>
                </h3>
                <p class="text-gray-300 leading-relaxed">
                    Building modern web and mobile applications with passion and precision.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-lg font-semibold mb-4 text-white">Quick Links</h4>
                <div class="space-y-2">
                    <div><a href="/" class="footer-link">Home</a></div>
                    <div><a href="/projects" class="footer-link">Projects</a></div>
                    <div><a href="/contact" class="footer-link">Contact</a></div>
                </div>
            </div>

            <!-- Connect Section -->
            <div class="text-center md:text-right" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-lg font-semibold mb-4 text-white">Let's Connect</h4>
                <div class="flex justify-center md:justify-end space-x-4 mb-4">
                    <a href="#" class="social-link w-10 h-10 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5A4.25 4.25 0 0 1 16.25 20.5h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm8.75 2a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm-4.5 2.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5Zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5Z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link w-10 h-10 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link w-10 h-10 rounded-full flex items-center justify-center hover:text-blue-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    
                   
                </div>
                <p class="text-sm text-gray-400">
                    Always open for collaborations
                </p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} <span class="footer-gradient">Kevin Ardiansyah</span> — All rights reserved.
                </div>
                <div class="flex items-center space-x-4 text-sm">
                    <span class="text-gray-400">Made with</span>
                    <svg class="w-4 h-4 text-red-400 animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span class="text-gray-400">in Indonesia</span>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-60 animate-ping"></div>
    </div>
</footer>