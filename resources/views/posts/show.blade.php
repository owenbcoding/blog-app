@props(['post'])

<x-layouts.app>
    <div class="py-10 px-6 lg:px-8">
        <canvas id="canvas" class="hidden absolute opacity-75 bg-gray-700"></canvas>
        <div class="mx-auto max-w-3xl text-base leading-7">
            <div class="mt-5 mb-5">
                @if ($post->tags && $post->tags->count())
                    @foreach ($post->tags as $tag)
                    <x-tag :tag="$tag" size="small" />
                    @endforeach
                @endif
            </div>
            <h1 class="dark:text-gray-400 text-3xl font-bold tracking-tight sm:text-4xl">{{ $post->title }}</h1>
            <figure class="mt-5">
                @if ($post->thumbnail)
                    <img class="aspect-video rounded-xl bg-gray-50 object-cover"
                        src="{{ asset('storage/' . $post->thumbnail) }}" alt="post-image">
                @else
                    <x-post-card-image :seed="$post->id" />
                @endif
            </figure>
            <p class="text-xl leading-8 mt-5 mb-5">{{ $post->excerpt }}</p>
            <div class="mt-5 max-w-2xl">
                <p class="mt-6 text-lg">{{ $post->body }}</p>
            </div>
        </div>
    </div>
</x-layouts.app>
