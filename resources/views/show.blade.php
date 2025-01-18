<x-layout>
    <x-header />
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600">{{ $post->body }}</p>
    </div>
</x-layout>