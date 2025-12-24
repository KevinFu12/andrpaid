<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AndrPaid') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets (Breeze) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-slate-50 text-slate-800 antialiased"
    x-data="{ sidebarOpen: false }"
>
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary-500 to-indigo-600 flex items-center justify-center text-white font-bold text-lg">
                            A
                        </div>
                        <span class="font-bold text-xl tracking-tight text-slate-900">
                            Andr<span class="text-primary-600">Paid</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    @auth
                        <a href="{{ route('dashboard') }}"
                           class="text-sm font-medium hover:text-primary-600 {{ request()->routeIs('dashboard') ? 'text-primary-600' : 'text-slate-500' }}">
                            Dashboard
                        </a>

                        <a href="{{ route('discover') }}"
                           class="text-sm font-medium hover:text-primary-600 {{ request()->routeIs('discover') ? 'text-primary-600' : 'text-slate-500' }}">
                            Collaborators
                        </a>

                        <a href="{{ route('projects.index') }}"
                           class="text-sm font-medium hover:text-primary-600 {{ request()->routeIs('projects.*') ? 'text-primary-600' : 'text-slate-500' }}">
                            Projects
                        </a>

                        <!-- User Dropdown -->
                        <div class="relative ml-3" x-data="{ open: false }">
                            <button @click="open = !open"
                                    @click.outside="open = false"
                                    class="flex items-center gap-2 focus:outline-none">
                                <img
                                    class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->avatar_url ?? 'https://i.pravatar.cc/150' }}"
                                    alt="{{ Auth::user()->name }}"
                                >
                                <span class="hidden lg:block text-sm font-medium text-slate-700">
                                    {{ Auth::user()->name }}
                                </span>
                                <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                            </button>

                            <div
                                x-show="open"
                                x-transition
                                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-1 border border-slate-100"
                            >
                                <a href="{{ route('profile.edit') }}"
                                   class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                    Profile
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-sm font-medium text-slate-600 hover:text-primary-600">
                            Log in
                        </a>

                        <a href="{{ route('register') }}"
                           class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-700 shadow-md">
                            Get Started
                        </a>
                    @endauth
                </div>

                <!-- Mobile -->
                <div class="flex items-center md:hidden">
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-slate-400">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @include('layouts.footer')
</body>
</html>
