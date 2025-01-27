<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta description="A simple Blog-App">
    <link rel="icon" type="icon/png" href="../images/.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('Blog-App')</title>
</head>

<body> 
    <header x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Desktop nav -->
        <div class="mx-auto flex max-w-7xl items-center justify-between py-6 px-6 lg:px-8">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a class="flex" href="{{ route('home') }}">
                    <x-carbon-blog class="h-8 w-10 sm:h-10"/>
                    <p class="mt-2 ml-5">Blog-app</p>
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button x-show="!open" @click="open = true" type="button"
                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-expanded="false">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <button x-show="open" @click="open = false" type="button"
                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <a href="{{ route('home') }}" class="text-base font-medium text-gray-500 hover:text-gray-300">Home</a>

                <a href="{{ route('about') }}" class="text-base font-medium text-gray-500 hover:text-gray-300">About</a>

                <a href="{{ route('contact') }}"
                    class="text-base font-medium text-gray-500 hover:text-gray-300">Contact</a>
            </nav>
        </div>
        <!--
            Mobile menu, show/hide based on mobile menu state.
            -->
        <div class="relative inset-x-0 top-0 z-30 origin-top-right transform p-2 transition">
            <div class="divide-y-2">
                <div x-show="open" class="mt-6">
                    <nav class="grid grid-cols-1 gap-7">
                        <a href="{{ route('home') }}" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-200">
                            <div
                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md ">
                                <x-heroicon-o-home class="h-10 w-10 text-black" />
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">Home</div>
                        </a>

                        <a href="{{ route('about') }}" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-200">
                            <div
                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md ">
                                
                                <x-heroicon-o-question-mark-circle class="h-10 w-10 text-black" />
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">About</div>
                        </a>

                        <a href="{{ route('contact') }}" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-200">
                            <div
                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md">
                                
                                <x-codicon-mail class="h-10 w-10 text-black" />
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">Contact</div>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <div class="mx-auto max-w-7xl overflow-hidden">
            <p class="m-20 text-center text-xs leading-5 text-gray-500">&copy; 2025 Blog-App. All rights
                reserved.</p>
        </div>
    </footer>
</body>
</html>