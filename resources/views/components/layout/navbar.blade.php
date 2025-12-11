{{-- Navbar Component --}}
<div x-data="navbar()" x-init="init()">
    {{-- Top Header Bar (Dark Blue) --}}
    <div class="bg-[#0a1a3f] text-white py-2.5 hidden md:block">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-6 lg:gap-8">
                    {{-- Phone --}}
                    <a href="tel:+1234567890" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-[#0a1a3f] border border-white/20 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <span class="font-medium text-white">+1 (234) 567-890</span>
                    </a>
                    
                    {{-- Email --}}
                    <a href="mailto:info@afrixetrin.com" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-[#0a1a3f] border border-white/20 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="font-medium text-white">info@afrixetrin.com</span>
                    </a>
                </div>
                
                {{-- Business Hours --}}
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-green-400"></div>
                    <span class="font-medium text-white">Mon - Fri: 8:00 AM - 6:00 PM</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Navigation Bar (White) --}}
    <nav 
        :class="isScrolled ? 'bg-white shadow-sm' : 'bg-white'"
        class="sticky top-0 z-50 transition-all duration-300"
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 lg:h-24">
                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center">
                    <img 
                        src="https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/user_6930211329811e87e3d81b16/d17e6654e_logo-1.png" 
                        alt="Afrixetrin" 
                        class="h-10 lg:h-12 w-auto"
                    />
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden lg:flex items-center gap-1">
                    @php
                        $navLinks = [
                            ['name' => 'Home', 'route' => '/'],
                            ['name' => 'About Us', 'route' => '/about'],
                            ['name' => 'Services', 'route' => '/services'],
                            ['name' => 'Contact', 'route' => '/contact'],
                        ];
                    @endphp
                    @foreach($navLinks as $link)
                        @php
                            $isActive = request()->is(trim($link['route'], '/') . '*') || (trim($link['route'], '/') === '' && request()->is('/'));
                        @endphp
                        <a
                            href="{{ url($link['route']) }}"
                            class="relative px-5 py-2.5 font-medium text-sm {{ $isActive ? 'text-[#0a1a3f]' : 'text-gray-600' }}"
                        >
                            <span class="relative z-10">{{ $link['name'] }}</span>
                            
                            {{-- Active Background (light yellow) --}}
                            @if($isActive)
                                <div class="absolute inset-0 rounded-lg bg-amber-50"></div>
                            @endif
                            
                            {{-- Active Underline (orange) --}}
                            @if($isActive)
                                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-amber-500"></div>
                            @endif
                        </a>
                    @endforeach
                </div>

                {{-- CTA Button --}}
                <div class="hidden lg:flex items-center">
                    <a
                        href="{{ url('/quote') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-6 py-2.5 rounded-lg font-semibold text-sm"
                    >
                        <span>Get a Quote</span>
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button
                    @click="isMobileMenuOpen = !isMobileMenuOpen"
                    class="lg:hidden relative p-2 rounded-lg hover:bg-gray-100 active:bg-gray-200 transition-colors duration-200"
                    aria-label="Toggle menu"
                >
                    <div class="relative w-6 h-6">
                        <svg x-show="!isMobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 rotate-90" x-transition:enter-end="opacity-100 rotate-0" class="w-6 h-6 text-[#0a1a3f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="isMobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -rotate-90" x-transition:enter-end="opacity-100 rotate-0" class="w-6 h-6 text-[#0a1a3f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div 
            x-show="isMobileMenuOpen"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="lg:hidden border-t border-gray-100 bg-white"
        >
            <div class="px-6 py-4 space-y-1">
                @foreach($navLinks as $link)
                    @php
                        $isActive = request()->is(trim($link['route'], '/') . '*') || (trim($link['route'], '/') === '' && request()->is('/'));
                    @endphp
                    <a
                        href="{{ url($link['route']) }}"
                        @click="isMobileMenuOpen = false"
                        class="block px-4 py-3 rounded-lg font-medium text-sm transition-all duration-200 {{ $isActive ? 'bg-amber-50 text-[#0a1a3f] border-l-2 border-amber-500' : 'text-gray-600 hover:bg-gray-50 hover:text-[#0a1a3f]' }}"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
                
                <div class="pt-2 mt-2 border-t border-gray-100">
                    <a
                        href="{{ url('/quote') }}"
                        @click="isMobileMenuOpen = false"
                        class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-3 rounded-lg font-semibold text-sm shadow-sm hover:shadow-md transition-all duration-200"
                    >
                        Get a Quote
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>

                {{-- Mobile Contact Info --}}
                <div class="pt-4 mt-4 border-t border-gray-100 space-y-3">
                    <a href="tel:+1234567890" class="flex items-center gap-3 text-gray-600 hover:text-amber-600 transition-colors duration-200 text-sm">
                        <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <span class="font-medium">+1 (234) 567-890</span>
                    </a>
                    <a href="mailto:info@afrixetrin.com" class="flex items-center gap-3 text-gray-600 hover:text-amber-600 transition-colors duration-200 text-sm">
                        <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="font-medium">info@afrixetrin.com</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>

@push('scripts')
<script>
function navbar() {
    return {
        isScrolled: false,
        isMobileMenuOpen: false,
        
        init() {
            window.addEventListener('scroll', () => {
                this.isScrolled = window.scrollY > 10;
            });
        }
    }
}
</script>
@endpush

@push('styles')
<style>
[x-cloak] {
    display: none !important;
}
</style>
@endpush
