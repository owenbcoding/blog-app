@props(['posts'])

@if ($posts->count() > 0)
    <div class="md:grid md:grid-cols-2 lg:grid-cols-3 sm:grid">
        <!--Grid with 3 blog posts-->
        @foreach ($posts->skip(0) as $post)
            <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" :tags="$post->tags" />
        @endforeach
    </div>
@endif