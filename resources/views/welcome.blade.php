<x-app-layout>
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-primary-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-24 lg:pt-32">
             <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-6">
                    Research doesn't have to be <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-indigo-600">lonely.</span>
                </h1>
                <p class="text-xl text-slate-600 mb-10">Connect, Collaborate, Publish.</p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-4 text-lg font-semibold rounded-full text-white bg-slate-900 hover:bg-slate-800 shadow-xl">Find a Collaborator</a>
                </div>
             </div>
        </div>
    </div>
    
    <!-- Features Grid -->
    <div class="py-24 bg-slate-50">
        <!-- (Paste Features HTML from prototype lines 246-270 here) -->
    </div>
</x-app-layout>
