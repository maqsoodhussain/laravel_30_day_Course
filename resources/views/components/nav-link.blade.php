@props(['active' => false])

<a 
    href="{{ $attributes->get('href') }}"
    class="{{ $active ? 'text-blue-600 font-bold' : 'text-gray-400 hover:text-gray-500' }} text-sm"
>
    {{ $slot }}
</a>
