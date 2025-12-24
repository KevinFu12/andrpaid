<x-app-layout>
    <div class="min-h-screen bg-slate-50 pb-12">
            <div class="bg-white border-b border-slate-200 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Find Collaborators</h2>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-8">Connect with researchers across 500+ institutions sharing your passion.</p>
                    
                    <!-- Search Bar -->
                    <div class="max-w-2xl mx-auto relative">
                        <input type="text" placeholder="Search by research interest, name, or university..." class="w-full pl-12 pr-4 py-4 rounded-full border-2 border-slate-200 focus:border-primary-500 focus:ring-0 shadow-sm text-lg transition">
                        <i data-lucide="search" class="absolute left-4 top-5 text-slate-400 w-6 h-6"></i>
                    </div>

                    <!-- Filter Tags -->
                    <div class="flex flex-wrap justify-center gap-2 mt-6">
                        <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-600 text-sm font-medium hover:bg-slate-200 cursor-pointer transition">Machine Learning</span>
                        <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-600 text-sm font-medium hover:bg-slate-200 cursor-pointer transition">Public Health</span>
                        <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-600 text-sm font-medium hover:bg-slate-200 cursor-pointer transition">Economics</span>
                        <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-600 text-sm font-medium hover:bg-slate-200 cursor-pointer transition">Renewable Energy</span>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Collaborator Card Loop -->
                    @foreach ($collaborators as $user)
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:-translate-y-1 hover:shadow-md transition">
                            <div class="flex items-start justify-between mb-4">
                                <img
                                    src="{{ $user->avatar_url ?? 'https://i.pravatar.cc/150?u='.$user->id }}"
                                    class="w-16 h-16 rounded-full object-cover border-4 border-slate-50"
                                >

                                <button class="text-primary-600 hover:bg-primary-50 p-2 rounded-full">
                                    <i data-lucide="user-plus" class="w-5 h-5"></i>
                                </button>
                            </div>

                            <h3 class="text-lg font-bold text-slate-900">{{ $user->name }}</h3>
                            <p class="text-sm text-primary-600 font-medium mb-2">
                                {{ $user->academic_title }}
                            </p>

                            <div class="flex items-center gap-1 text-xs text-slate-500 mb-4">
                                <i data-lucide="map-pin" class="w-3 h-3"></i>
                                <span>{{ $user->institution }}</span>
                            </div>

                            <a
                                href="{{ route('profile.show', $user) }}"
                                class="w-full block text-center py-2 border border-slate-200 rounded-lg hover:bg-slate-50"
                            >
                                View Profile
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
</x-app-layout>
