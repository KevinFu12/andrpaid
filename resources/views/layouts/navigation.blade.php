    <nav class="sticky top-0 z-50 w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center cursor-pointer" @click="navTo(isLoggedIn ? 'dashboard' : 'landing')">
                    <div class="flex-shrink-0 flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary-500 to-indigo-600 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-primary-500/30">
                            A
                        </div>
                        <span class="font-bold text-xl tracking-tight text-slate-900">Andr<span class="text-primary-600">Paid</span></span>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <template x-if="!isLoggedIn">
                        <div class="flex items-center space-x-6">
                            <a href="#" @click.prevent="navTo('landing')" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition">Home</a>
                            <a href="#" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition">About</a>
                            <a href="#" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition">Testimonials</a>
                            <div class="h-4 w-px bg-slate-300"></div>
                            <button @click="login()" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition">Log in</button>
                            <button @click="login()" class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-700 transition shadow-md shadow-primary-500/20">
                                Get Started
                            </button>
                        </div>
                    </template>

                    <template x-if="isLoggedIn">
                        <div class="flex items-center space-x-6">
                            <a href="#" @click.prevent="navTo('dashboard')" :class="view === 'dashboard' ? 'text-primary-600' : 'text-slate-500'" class="text-sm font-medium hover:text-primary-600 transition">Dashboard</a>
                            <a href="#" @click.prevent="navTo('discover')" :class="view === 'discover' ? 'text-primary-600' : 'text-slate-500'" class="text-sm font-medium hover:text-primary-600 transition">Collaborators</a>
                            <a href="#" @click.prevent="navTo('projects')" :class="view === 'projects' ? 'text-primary-600' : 'text-slate-500'" class="text-sm font-medium hover:text-primary-600 transition">Projects</a>
                            <a href="#" @click.prevent="navTo('messages')" :class="view === 'messages' ? 'text-primary-600' : 'text-slate-500'" class="text-sm font-medium hover:text-primary-600 transition relative">
                                Messages
                                <span class="absolute -top-1 -right-2 flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                                </span>
                            </a>
                            
                            <!-- User Dropdown -->
                            <div class="relative ml-3" x-data="{ open: false }">
                                <button @click="open = !open" @click.away="open = false" class="flex items-center gap-2 focus:outline-none">
                                    <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white shadow-sm" :src="currentUser.avatar" alt="User">
                                    <span class="hidden lg:block text-sm font-medium text-slate-700" x-text="currentUser.name"></span>
                                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                                </button>
                                
                                <div x-show="open" x-transition.opacity.duration.200ms class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-1 border border-slate-100 z-50">
                                    <a href="#" @click.prevent="navTo('profile')" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">My Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Settings</a>
                                    <div class="border-t border-slate-100 my-1"></div>
                                    <button @click="logout()" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign out</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Sidebar -->
        <div x-show="sidebarOpen" class="md:hidden border-t border-slate-200 bg-white shadow-lg absolute w-full z-40">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <template x-if="!isLoggedIn">
                    <div>
                        <a href="#" @click.prevent="navTo('landing')" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Home</a>
                        <button @click="login()" class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-primary-600 hover:bg-primary-50">Login</button>
                    </div>
                </template>
                <template x-if="isLoggedIn">
                    <div>
                        <a href="#" @click.prevent="navTo('dashboard')" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Dashboard</a>
                        <a href="#" @click.prevent="navTo('discover')" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Collaborators</a>
                        <a href="#" @click.prevent="navTo('projects')" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">Projects</a>
                        <a href="#" @click.prevent="navTo('profile')" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50">My Profile</a>
                        <button @click="logout()" class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-red-50">Sign Out</button>
                    </div>
                </template>
            </div>
        </div>
    </nav>
