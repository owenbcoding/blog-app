@props(['post'])

<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <article class="flex flex-col items-start justify-between mt-20">
        <div class="relative">
            @if ($post-> thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}"
                alt="blog-image" class="aspect-[16/9] rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            @else
                <x-post-card-image :seed="$post->id" />
            @endif
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
            <div class="mt-8 flex items-center gap-x-4 text-xs">
                <time class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                @if ($post->tags && $post->tags->count())
                    @foreach ($post->tags as $tag)
                    <a href="/categories/{{ $tag->name }}"
                        class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">{{ $tag->name }}</a>
                    @endforeach
                @endif
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="/posts/{{ $post->slug }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">{{ $post->excerpt }}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                {{-- <img src="../images/" alt="" class="h-10 w-10"> --}}
                <x-carbon-blog class="h-8 w-10 sm:h-10"/>
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <p class="text-gray-600">blog-app</p>
                    </p>
                </div>
            </div> 
        </div>
    </article>
</div>