<x-layouts.app>
    <x-header />
    <div class="space-y-10">
        <section> 
            <div class="grid grid-cols-3 gap-8 max-w-7xl mx-auto mt-6">
                @foreach ($posts as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </div>
        </section>
    </div>
</x-layouts.app>