<x-app-layout>
    <header class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-slate-900">Dashboard</h1>
            <p class="text-sm text-slate-500 mt-1">Welcome back, {{ Auth::user()->name }}. You have {{ $pendingTasks ?? 0 }} pending tasks.</p>
            <a href="{{ route('projects.create') }}" class="px-4 py-2 bg-primary-600 text-white rounded-lg flex items-center gap-2">
                <i data-lucide="plus" class="w-4 h-4"></i> New Project
            </a>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-slate-500 text-sm font-medium">Active Projects</span>
                    <div class="p-2 bg-blue-50 rounded-lg text-blue-600"><i data-lucide="folder-open" class="w-5 h-5"></i></div>
                </div>
                <div class="text-3xl font-bold text-slate-900">4</div>
                <div class="text-xs text-green-600 mt-2 font-medium">On track</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-slate-500 text-sm font-medium">Pending Requests</span>
                    <div class="p-2 bg-orange-50 rounded-lg text-orange-600"><i data-lucide="user-plus" class="w-5 h-5"></i></div>
                </div>
                <div class="text-3xl font-bold text-slate-900">2</div>
                <div class="text-xs text-slate-400 mt-2">Action required</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-slate-500 text-sm font-medium">Total Citations</span>
                    <div class="p-2 bg-purple-50 rounded-lg text-purple-600"><i data-lucide="quote" class="w-5 h-5"></i></div>
                </div>
                <div class="text-3xl font-bold text-slate-900">1,240</div>
                <div class="text-xs text-green-600 mt-2 flex items-center gap-1"><i data-lucide="arrow-up" class="w-3 h-3"></i> 12% this month</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-slate-500 text-sm font-medium">Messages</span>
                    <div class="p-2 bg-pink-50 rounded-lg text-pink-600"><i data-lucide="message-square" class="w-5 h-5"></i></div>
                </div>
                <div class="text-3xl font-bold text-slate-900">5</div>
                <div class="text-xs text-slate-400 mt-2">2 Unread</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Ongoing Projects -->
            <div class="lg:col-span-2 space-y-6">
                <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                    <i data-lucide="activity" class="w-5 h-5 text-primary-500"></i> Active Collaborations
                </h2>
                
                <!-- Project Card 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:border-primary-300 transition group cursor-pointer" @click="navTo('projects')">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Computer Science</span>
                            <span class="text-sm text-slate-400">Updated 2h ago</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition">AI-Driven Pedagogical Models for Remote Learning</h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">Investigating the effectiveness of adaptive learning algorithms in enhancing student engagement during synchronous online sessions.</p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/150?u=1" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/150?u=2" alt="">
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs text-slate-500 font-medium">+2</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-500">
                                <i data-lucide="check-circle" class="w-4 h-4 text-orange-500"></i>
                                <span>Phase 2: Data Collection</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:border-primary-300 transition group">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700">Environmental Science</span>
                            <span class="text-sm text-slate-400">Updated 1d ago</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition">Urban Micro-climates and Green Infrastructure</h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">A comparative study of heat island effects in Southeast Asian metropolitan areas.</p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/150?u=3" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/150?u=4" alt="">
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-500">
                                <i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i>
                                <span>Phase 4: Publication</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="space-y-8">
                <!-- Suggested Collaborators -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Recommended for You</h3>
                    <div class="space-y-4">
                        <!-- Person 1 -->
                        <div class="flex items-center gap-3">
                            <img src="https://i.pravatar.cc/150?u=a" class="w-10 h-10 rounded-full object-cover">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-slate-900 truncate">Dr. Alan Grant</p>
                                <p class="text-xs text-slate-500 truncate">Paleontology • Univ. of Montana</p>
                            </div>
                            <button class="p-2 text-primary-600 hover:bg-primary-50 rounded-full transition"><i data-lucide="user-plus" class="w-4 h-4"></i></button>
                        </div>
                        <!-- Person 2 -->
                        <div class="flex items-center gap-3">
                            <img src="https://i.pravatar.cc/150?u=b" class="w-10 h-10 rounded-full object-cover">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-slate-900 truncate">Prof. Ellie Sattler</p>
                                <p class="text-xs text-slate-500 truncate">Botany • Independent</p>
                            </div>
                            <button class="p-2 text-primary-600 hover:bg-primary-50 rounded-full transition"><i data-lucide="user-plus" class="w-4 h-4"></i></button>
                        </div>
                        <button @click="navTo('discover')" class="w-full mt-2 text-sm text-center text-primary-600 hover:text-primary-700 font-medium">View all suggestions</button>
                    </div>
                </div>

                <!-- Funding Opportunities -->
                <div class="bg-gradient-to-br from-indigo-900 to-slate-900 p-6 rounded-xl shadow-lg text-white">
                    <h3 class="font-bold text-lg mb-2">New Grant Available</h3>
                    <p class="text-indigo-200 text-sm mb-4">NSF Interdisciplinary Grant for AI Safety. Deadline: Oct 15.</p>
                    <button class="w-full py-2 bg-indigo-500 hover:bg-indigo-600 rounded-lg text-sm font-medium transition">View Details</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
