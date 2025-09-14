@props(['id' => '', 'title' => '', 'bg' => null, 'overlay' => null])

<section id="{{ $id }}" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8">
    @if ($bg)
        <div class="absolute inset-0">
            <img src="{{ asset($bg) }}" alt="{{ $title }}"
                class="w-full h-full object-cover" loading="lazy" />
            @if ($overlay)
                <div class="absolute inset-0 {{ $overlay }}"></div>
            @endif
        </div>
    @endif

    <div class="relative z-10 max-w-7xl mx-auto text-center mb-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-wide text-white">{{ $title }}</h2>
    </div>

    <div class="relative z-10">
        {{ $slot }}
    </div>
</section>
@props(['id' => '', 'title' => '', 'bg' => null, 'overlay' => null])

<section id="{{ $id }}" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8">
    @if ($bg)
        <div class="absolute inset-0">
            <img src="{{ asset($bg) }}" alt="{{ $title }}"
                class="w-full h-full object-cover" loading="lazy" />
            @if ($overlay)
                <div class="absolute inset-0 {{ $overlay }}"></div>
            @endif
        </div>
    @endif

    <div class="relative z-10 max-w-7xl mx-auto text-center mb-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-wide text-white">{{ $title }}</h2>
    </div>

    <div class="relative z-10">
        {{ $slot }}
    </div>
</section>
