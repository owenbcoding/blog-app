<x-layouts.app>
    <x-header />
    <div class="container mx-auto mt-10">
        <h1 class="text-center block font-medium text-gray-600 tracking-tight sm:text-5xl lg:text-6xl mt-10">About
        </h1>
        <p class="text-center text-gray-500 mt-5text-wrap mt-20 max-w-2xl mx-auto">This is a simple blog application built with Laravel and Tailwind
            CSS and alpine js othewise known as the talls stack. This was a project that I recreated from a pervious client I made a similar site for.
        </p>
        <p class="text-center text-gray-500 mt-5text-wrap mt-20 max-w-2xl mx-auto">
            <a href="{{ route('contact') }}">Click here to contact me.</a> 
        </p>
    </div>
</x-layouts.app>