@props(['type' => 'button'])

<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'bg-[#6B7A41] text-white px-6 sm:px-8 py-2.5 sm:py-3 rounded-full shadow-lg hover:bg-[#5c6939] transition-all duration-300 transform hover:scale-105 text-sm sm:text-base flex items-center justify-center gap-2'
    ]) }}>
    {{ $slot }}
</button>
