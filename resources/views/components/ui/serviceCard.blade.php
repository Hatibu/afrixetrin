@props([
    'title',
    'description',
    'delay' => 0
])

<div class="group bg-white rounded-lg p-6 shadow-sm h-full flex flex-col relative overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
    {{-- Hover Background Gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-amber-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    
    {{-- Content --}}
    <div class="relative z-10">
        {{-- Icon --}}
        <div class="w-14 h-14 rounded-lg bg-[#0a1a3f] flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
            <div class="w-7 h-7 text-white group-hover:text-amber-400 transition-colors duration-300">
                {{ $icon ?? '' }}
            </div>
        </div>
        
        {{-- Title --}}
        <h3 class="text-lg font-bold text-[#0a1a3f] mb-2 group-hover:text-amber-600 transition-colors duration-300">{{ $title }}</h3>
        
        {{-- Description --}}
        <p class="text-gray-600 text-sm leading-relaxed flex-grow mb-4 group-hover:text-gray-700 transition-colors duration-300">{{ $description }}</p>
        
        {{-- Learn More Link --}}
        <a
            href="{{ url('/services') }}"
            class="inline-flex items-center gap-1 text-[#0a1a3f] font-semibold text-sm mt-auto group-hover:text-amber-600 transition-colors duration-300"
        >
            Learn More
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    </div>
    
    {{-- Decorative Corner Element --}}
    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-amber-400/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
