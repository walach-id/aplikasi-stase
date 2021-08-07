@props(['required' => false, 'text', 'id', 'type' => 'text', 'rememberOldValue' => true])
<div class="mt-2">
    <label class="block text-base font-bold text-black" for="name">{{ $text }}</label>
    <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" id="{{ $id }}"
        name="{{ $id }}" type="{{ $type }}" {{ $required ? 'required' : '' }}
        value="{{ $rememberOldValue ? old($id) : '' }}">
</div>
