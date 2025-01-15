<x-layout>
    <x-header />
    <div class="container mx-auto mt-10">
        <h1 class="text-center block font-medium text-gray-600 tracking-tight sm:text-5xl lg:text-6xl mt-10">Latest blogs
        </h1>
        <x-posts :posts="$posts" />
    </div>
</x-layout>
