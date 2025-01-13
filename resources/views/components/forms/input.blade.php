@props(['type' => 'text', 'name', 'value' => '', 'placeholder' => '', 'required' => false])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $value) }}"
    placeholder="{{ $placeholder }}"
    @if($required) required @endif
    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
/>
@error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror