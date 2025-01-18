@props(['posts'])

<div>
    @if ($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="border rounded p-4">
                    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    <p>{{ $post->excerpt }}</p>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center mt-20">No posts yet. Please check back later.</p>
    @endif
</div>