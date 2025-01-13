@props(['name', 'rows' => 3, 'placeholder' => '', 'required' => false])

<textarea
    name="{{ $name }}"
    id="{{ $name }}"
    rows="{{ $rows }}"
    placeholder="{{ $placeholder }}"
    @if($required) required @endif
    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
>{{ old($name) }}</textarea>
@error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror