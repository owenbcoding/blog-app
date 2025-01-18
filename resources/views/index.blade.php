<x-layouts.app>
    <x-header />
    <div class="container mx-auto mt-10">
        <h1 class="text-center block font-medium text-gray-600 tracking-tight sm:text-5xl lg:text-6xl mt-10">Latest blogs
        </h1>
        <div class="mt-10">
            <x-posts :posts="$posts" />
        </div>
    </div>
</x-layouts.app>
