<x-layout>
  <x-slot:title>Home | Kevin.dev</x-slot:title>

  <style>
    .glass-hero {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
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
    
    .tech-badge {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }
    
    .tech-badge:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }
  </style>

  <!-- Hero Section -->
  <div class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse delay-1000"></div>
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-ping delay-2000"></div>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 relative z-10">
      <div class="glass-hero rounded-3xl shadow-2xl">
        <div class="px-8 py-16 sm:px-16 lg:flex lg:items-center lg:justify-between lg:px-24">
          
          <!-- Text Section -->
          <div class="text-center lg:text-left max-w-2xl" data-aos="fade-right">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl leading-tight mb-6">
              <span id="typed-text" class="gradient-text"></span>
            </h1>
            
            <p class="text-xl text-gray-300 leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="200">
              A passionate <span class="gradient-text font-semibold">Web & Mobile Developer</span> building elegant, responsive, and high-performance applications using cutting-edge technologies.
            </p>

            <!-- Tech Stack Badges -->
            <div class="flex flex-wrap gap-3 justify-center lg:justify-start mb-10" data-aos="fade-up" data-aos-delay="300">
              <span class="tech-badge px-4 py-2 rounded-full text-white text-sm font-medium">Laravel</span>
              <span class="tech-badge px-4 py-2 rounded-full text-white text-sm font-medium">Flutter</span>
              <span class="tech-badge px-4 py-2 rounded-full text-white text-sm font-medium">Tailwind CSS</span>
              <span class="tech-badge px-4 py-2 rounded-full text-white text-sm font-medium">Vue.js</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-4" data-aos="fade-up" data-aos-delay="400">
              <a href="/projects" class="btn-primary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                View My Work
              </a>
              <a href="/contact" class="btn-secondary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-semibold text-white hover:text-white transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Let's Connect
              </a>
            </div>
          </div>

          <!-- Image Section -->
          <div class="relative mt-12 lg:mt-0 lg:ml-12 w-full max-w-xl" data-aos="fade-left">
            <div class="floating-animation">
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur-2xl opacity-30"></div>
                <img class="relative rounded-2xl shadow-2xl ring-1 ring-white/20 w-full object-cover transform hover:scale-105 transition-transform duration-500"
                     src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                     alt="App Preview">
              </div>
            </div>
            
            <!-- Floating Elements -->
            <div class="absolute -top-6 -right-6 w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-60 animate-ping"></div>
            <div class="absolute -bottom-6 -left-6 w-8 h-8 bg-gradient-to-br from-sky-400 to-blue-500 rounded-full opacity-40 animate-pulse"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Typed.js Script -->
  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        new Typed('#typed-text', {
          strings: [
            "Hi, I'm Kevin",
            "I build modern websites",
            "I craft clean mobile apps", 
            "I design intuitive interfaces",
            "I create digital experiences"
          ],
          typeSpeed: 50,
          backSpeed: 30,
          backDelay: 1500,
          startDelay: 500,
          loop: true,
          showCursor: true,
          cursorChar: "|",
          autoInsertCss: true
        });
        
        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
            });
          });
        });
      });
    </script>
  @endpush
</x-layout>