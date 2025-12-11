@props([
    'title',
    'description',
    'delay' => 0
])

<div
    x-data="{ inView: false }"
    x-intersect="inView = true"
    :style="`transition-delay: {{ $delay }}ms`"
    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="group transition-all duration-[600ms]"
>
    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 h-full flex flex-col relative overflow-hidden">
        {{-- Decorative gradient --}}
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
        
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
            <div class="w-8 h-8 text-amber-400">
                {{ $icon ?? '' }}
            </div>
        </div>
        
        <h3 class="text-xl font-bold text-[#0a1a3f] mb-3">{{ $title }}</h3>
        <p class="text-gray-600 leading-relaxed flex-grow">{{ $description }}</p>
        
        <a
            href="{{ url('/services') }}"
            class="inline-flex items-center gap-2 text-[#0a1a3f] font-semibold mt-6 group/link"
        >
            Learn More
            <svg class="w-4 h-4 group-hover/link:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    </div>
</div>
