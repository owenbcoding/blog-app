@props(['posts'])

<div>
    @if ($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
        <div class="flex justify-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center mt-20">No posts yet. Please check back later.</p>
    @endif
</div>