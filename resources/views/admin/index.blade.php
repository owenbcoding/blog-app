<x-layouts.admin>
    <header>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-600 text-center">Quick Links</h1>
        </div>
    </header>
    <div
        class="divide-y divide-gray-200 overflow-hidden rounded-lg shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0 mt-10">
        <div
            class="group relative rounded-tl-lg rounded-tr-lg bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 sm:rounded-tr-none">
            <div>
                <span class="inline-flex rounded-lg p-3  ring-white">
                    {{-- <x-heroicon-o-folder class="h-10 w-10" /> --}}
                    <x-carbon-blog class="h-8 w-10 sm:h-10"/>
                </span>
            </div>
            <div class="ml-4">
                <h3 class="text-base font-semibold leading-6 text-gray-900">
                    {{-- {{ route('admin.projects.create') }} --}}
                    <a href="" class="focus:outline-none">
                        <!-- Extend touch target to entire panel -->
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Post Blog
                    </a>
                </h3>
                <p class="mt-2 text-sm text-gray-500">Create Blog-post</p>
            </div>
            <span class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400"
                aria-hidden="true">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                </svg>
            </span>
        </div>
        <div
            class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 sm:rounded-tr-lg">
            <div>
                <span class="inline-flex rounded-lg p-3 ring-white">
                    <x-far-list-alt class="h-8 w-10 sm:h-10"/>
                </span>
            </div>
            <div class="ml-4">
                <h3 class="text-base font-semibold leading-6 text-gray-900">
                    {{-- {{ route('admin.posts.create') }} --}}
                    <a href="" class="focus:outline-none">
                        <!-- Extend touch target to entire panel -->
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Post-Management
                    </a>
                </h3>
                <p class="mt-2 text-sm text-gray-500">Blog management</p>
            </div>
            <span class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400"
                aria-hidden="true">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                </svg>
            </span>
        </div>
    </div>
</x-layouts.admin>