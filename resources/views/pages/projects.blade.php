<x-layout>
    <x-slot:title>Projects | Kevin.dev</x-slot:title>

    <style>
        .glass-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #60A5FA, #A78BFA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .project-link {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
        }
        
        .project-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 64, 175, 0.4);
        }
        
        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>

    <!-- Projects Section -->
    <div class="min-h-screen relative overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-ping delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 py-20 relative z-10">
            <div class="glass-container rounded-3xl shadow-2xl p-8 sm:p-12">
                <!-- Header -->
                <div class="text-center mb-16" data-aos="fade-down">
                    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                        My <span class="gradient-text">Projects</span>
                    </h1>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                        Showcase of my recent work and creative projects built with modern technologies
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($projects as $project)
                        <div class="glass-card rounded-2xl overflow-hidden shadow-lg floating-animation" 
                             data-aos="fade-up" 
                             data-aos-delay="{{ $loop->index * 100 }}">
                            
                            <!-- Project Image -->
                            <div class="relative overflow-hidden">
                                @if ($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" 
                                         alt="{{ $project->title }}"
                                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110">
                                @else
                                    <div class="w-full h-48 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    </div>
                                @endif
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                            </div>

                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-white mb-3 hover:text-blue-300 transition-colors">
                                    {{ $project->title }}
                                </h3>
                                
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    {{ Str::limit($project->description, 120) }}
                                </p>

                                @if($project->link)
                                    <div class="flex justify-end">
                                        <a href="{{ $project->link }}" 
                                           target="_blank"
                                           class="project-link inline-flex items-center px-4 py-2 rounded-full text-white text-sm font-medium hover:text-white transition-all duration-300">
                                            <span>View Project</span>
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <!-- Floating Elements -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-60 animate-ping"></div>
                        </div>
                    @endforeach
                </div>

                <!-- Empty State -->
                @if ($projects->isEmpty())
                    <div class="text-center py-16" data-aos="fade-up">
                        <div class="glass-card rounded-2xl p-12 max-w-md mx-auto">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-white mb-2">No Projects Yet</h3>
                            <p class="text-gray-300">Projects will be displayed here once they're added.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>