@props(['post', 'tags'])

<div class="mx-auto px-6 lg:px-8">
    <article class="flex flex-col items-start justify-between mt-10">
        <div class="relative">
            @if ($post->thumbnail)
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="blog-image"
                    class="aspect-[16/9] rounded-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            @else
                <x-post-card-image :seed="$post->id" />
            @endif
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
            <div class="mt-8 flex items-center gap-x-4 text-xs">
                <time class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                @foreach ($post->tags as $tag)
                    <x-tag :tag="$tag" size="small" />
                @endforeach
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    {{-- {{ route('posts.show', $post->slug) }} --}}
                    <a href="{{ route('posts.show', ['post' => $post->slug]) }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">{{ $post->excerpt }}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                <x-carbon-blog class="h-8 w-10 sm:h-10" />
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        Blog-app
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
