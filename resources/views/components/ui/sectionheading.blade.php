@props([
    'subtitle' => null,
    'title',
    'description' => null,
    'centered' => true,
    'light' => false
])

<div
    x-data="{ inView: false }"
    x-intersect="inView = true"
    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
    class="max-w-3xl mb-12 transition-all duration-[600ms] {{ $centered ? 'mx-auto text-center' : '' }}"
>
    @if($subtitle)
        <span class="inline-block text-amber-500 font-semibold uppercase tracking-wider text-sm mb-3">
            {{ $subtitle }}
        </span>
    @endif
    
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight {{ $light ? 'text-white' : 'text-[#0a1a3f]' }}">
        {{ $title }}
    </h2>
    
    @if($description)
        <p class="mt-4 text-lg {{ $light ? 'text-gray-300' : 'text-gray-600' }}">
            {{ $description }}
        </p>
    @endif
</div>
