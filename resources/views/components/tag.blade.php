@props(['tag', 'size' => 'small'])

<span class="inline-flex items-center px-2 py-2 rounded-md text-sm font-medium bg-blue-100 text-white bg-gray-400">
    {{ $tag->name }}
</span>