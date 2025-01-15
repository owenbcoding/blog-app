<div>
    <div>
        <h1 class="text-center block font-medium text-gray-600 tracking-tight sm:text-5xl lg:text-6xl mt-10">Latest blogs
        </h1>
    </div>
    @if ($posts->count() > 0)
        <x-posts-grid :posts="$posts" />
        <div class="flex justify-center">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center">No Posts yet. Please check back later.</p>
    @endif
</div>
