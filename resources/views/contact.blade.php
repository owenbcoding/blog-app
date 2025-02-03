<x-layouts.app>
    <x-header />
    <div class="container mx-auto mt-10">
        <h1 class="text-center block font-medium text-gray-600 tracking-tight sm:text-5xl lg:text-6xl mt-10">Contact Me!
        </h1>
        <p class="text-center text-gray-500 mt-5text-wrap mt-20 max-w-2xl mx-auto">This is a simple blog application I made to showcase my Full-Stack skills if you would like me to create you something similar for your business or online presense feel free to reach out.
        </p>
        <p class="text-center text-gray-500 mt-5text-wrap mt-20 max-w-2xl mx-auto">You can reach me at
            <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a> 
        </p>
    </div>
</x-layouts.app>