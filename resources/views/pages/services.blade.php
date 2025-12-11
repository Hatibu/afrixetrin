@extends('layouts.app')

@section('title', 'Our Services - Afrixetrin')

@section('content')
@php
    $services = [
        [
            'id' => 'customs',
            'icon' => 'FileCheck',
            'title' => 'Customs Clearance',
            'description' => 'Expert handling of all customs documentation and clearance procedures for seamless import and export operations.',
            'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80',
            'features' => [
                'Import & export documentation',
                'Duties & taxes calculation',
                'Regulatory compliance handling',
                'Tariff classification',
                'License & permit management',
                'Bond preparation'
            ],
            'benefits' => [
                'Faster clearance times',
                'Reduced penalties & delays',
                'Expert regulatory guidance',
                'Complete documentation support'
            ]
        ],
        [
            'id' => 'freight',
            'icon' => 'Ship',
            'title' => 'Freight Forwarding',
            'description' => 'Comprehensive air, sea, and inland transport coordination for efficient global cargo movement.',
            'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=800&q=80',
            'features' => [
                'Ocean freight (FCL & LCL)',
                'Air freight services',
                'Multimodal transportation',
                'Door-to-door delivery',
                'Route optimization',
                'Carrier negotiation'
            ],
            'benefits' => [
                'Competitive shipping rates',
                'Global network coverage',
                'Real-time tracking',
                'Flexible shipping options'
            ]
        ],
        [
            'id' => 'warehousing',
            'icon' => 'Warehouse',
            'title' => 'Warehousing & Distribution',
            'description' => 'Secure storage facilities with advanced inventory management and efficient distribution networks.',
            'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=800&q=80',
            'features' => [
                'Secure storage facilities',
                'Inventory management',
                'Order fulfillment',
                'Pick & pack services',
                'Cross-docking',
                'Last-mile delivery'
            ],
            'benefits' => [
                'Reduced storage costs',
                'Accurate inventory tracking',
                'Faster order processing',
                'Scalable solutions'
            ]
        ],
        [
            'id' => 'insurance',
            'icon' => 'Shield',
            'title' => 'Cargo Insurance',
            'description' => 'Comprehensive cargo coverage and risk mitigation to protect your valuable shipments.',
            'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
            'features' => [
                'All-risk coverage',
                'Marine cargo insurance',
                'Air cargo insurance',
                'Inland transit coverage',
                'Claims management',
                'Risk assessment'
            ],
            'benefits' => [
                'Complete peace of mind',
                'Fast claims processing',
                'Tailored coverage options',
                'Expert risk advice'
            ]
        ],
        [
            'id' => 'consultancy',
            'icon' => 'Lightbulb',
            'title' => 'Logistics Consultancy',
            'description' => 'Strategic import/export advisory and supply chain optimization to enhance your business operations.',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            'features' => [
                'Supply chain analysis',
                'Cost reduction strategies',
                'Compliance consulting',
                'Trade agreement advisory',
                'Process optimization',
                'Technology integration'
            ],
            'benefits' => [
                'Improved efficiency',
                'Reduced logistics costs',
                'Strategic insights',
                'Competitive advantage'
            ]
        ]
    ];

    $transportModes = [
        ['icon' => 'Anchor', 'title' => 'Sea Freight', 'description' => 'FCL & LCL shipping worldwide'],
        ['icon' => 'Plane', 'title' => 'Air Freight', 'description' => 'Express & standard air cargo'],
        ['icon' => 'Truck', 'title' => 'Land Transport', 'description' => 'Road & rail logistics']
    ];
@endphp

<div>
    {{-- Hero Section --}}
    <section class="relative py-24 lg:py-32 bg-[#0a1a3f]">
        <div class="absolute inset-0 opacity-20">
            <img
                src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=2000&q=80"
                alt="Port"
                class="w-full h-full object-cover"
            />
        </div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div
                x-data="{ inView: false }"
                x-intersect="inView = true"
                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="max-w-3xl transition-all duration-[600ms]"
            >
                <span class="inline-block text-amber-400 font-semibold uppercase tracking-wider text-sm mb-4">
                    Our Services
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Comprehensive <span class="text-amber-400">Logistics Solutions</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                    From customs clearance to final delivery, we provide end-to-end logistics services tailored to meet your unique business requirements.
                </p>
            </div>
        </div>
    </section>

    {{-- Transport Modes --}}
    <section class="py-16 bg-white border-b">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($transportModes as $index => $mode)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                        class="flex items-center gap-4 p-6 rounded-2xl bg-gray-50 hover:bg-gradient-to-r hover:from-amber-500 hover:to-amber-600 group transition-all duration-500"
                        style="transition-delay: {{ $index * 100 }}ms;"
                    >
                        <div class="w-14 h-14 rounded-xl bg-[#0a1a3f] flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                            @if($mode['icon'] === 'Anchor')
                                <svg class="w-7 h-7 text-amber-400 group-hover:text-amber-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            @elseif($mode['icon'] === 'Plane')
                                <svg class="w-7 h-7 text-amber-400 group-hover:text-amber-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            @elseif($mode['icon'] === 'Truck')
                                <svg class="w-7 h-7 text-amber-400 group-hover:text-amber-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                        </div>
                        <div>
                            <h4 class="font-bold text-[#0a1a3f] group-hover:text-white transition-colors duration-500">{{ $mode['title'] }}</h4>
                            <p class="text-gray-500 text-sm group-hover:text-white/80 transition-colors duration-500">{{ $mode['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services Detail --}}
    <section class="py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 space-y-32">
            @foreach($services as $index => $service)
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    id="{{ $service['id'] }}"
                    class="grid lg:grid-cols-2 gap-16 items-center transition-all duration-[600ms] {{ $index % 2 === 1 ? 'lg:flex-row-reverse' : '' }}"
                >
                    <div class="{{ $index % 2 === 1 ? 'lg:order-2' : '' }}">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center">
                                @if($service['icon'] === 'FileCheck')
                                    <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                @elseif($service['icon'] === 'Ship')
                                    <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                @elseif($service['icon'] === 'Warehouse')
                                    <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                @elseif($service['icon'] === 'Shield')
                                    <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                @elseif($service['icon'] === 'Lightbulb')
                                    <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                @endif
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#0a1a3f]">{{ $service['title'] }}</h2>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-8">{{ $service['description'] }}</p>
                        
                        <div class="grid md:grid-cols-2 gap-4 mb-8">
                            @foreach($service['features'] as $feature)
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-6">
                            <h4 class="font-semibold text-[#0a1a3f] mb-4">Key Benefits</h4>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($service['benefits'] as $benefit)
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-amber-500" />
                                        <span class="text-gray-600 text-sm">{{ $benefit }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <a
                            href="{{ url('/quote') }}"
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-6 py-3 rounded-full font-semibold mt-8 hover:shadow-lg hover:shadow-amber-500/30 transition-all duration-300 group"
                        >
                            Get a Quote
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                    
                    <div class="{{ $index % 2 === 1 ? 'lg:order-1' : '' }}">
                        <div class="relative">
                            <img
                                src="{{ $service['image'] }}"
                                alt="{{ $service['title'] }}"
                                class="rounded-2xl shadow-2xl w-full h-[500px] object-cover"
                            />
                            <div class="absolute -bottom-6 -right-6 bg-[#0a1a3f] text-white p-6 rounded-2xl shadow-xl hidden lg:block">
                                <div class="text-amber-400 font-semibold">Trusted by</div>
                                <div class="text-3xl font-bold">500+ Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Why Choose Our Services --}}
    <section class="py-24 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Why Choose Us"
                title="What Sets Us Apart"
                description="We deliver excellence through expertise, technology, and unwavering commitment to your success."
            />
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @php
                    $whyChoose = [
                        ['icon' => 'Globe', 'title' => 'Global Reach', 'description' => '50+ countries in our network'],
                        ['icon' => 'Users', 'title' => 'Expert Team', 'description' => '20+ years of combined experience'],
                        ['icon' => 'TrendingUp', 'title' => 'Cost Efficiency', 'description' => 'Optimized rates & routes'],
                        ['icon' => 'BarChart3', 'title' => 'Real-Time Tracking', 'description' => '24/7 shipment visibility']
                    ];
                @endphp
                @foreach($whyChoose as $index => $item)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                        class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:-translate-y-2 transition-all duration-500"
                        style="transition-delay: {{ $index * 100 }}ms;"
                    >
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center group-hover:from-[#0a1a3f] group-hover:to-[#1a3a6f] transition-all duration-500">
                            @if($item['icon'] === 'Globe')
                                <svg class="w-8 h-8 text-amber-600 group-hover:text-amber-400 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @elseif($item['icon'] === 'Users')
                                <svg class="w-8 h-8 text-amber-600 group-hover:text-amber-400 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            @elseif($item['icon'] === 'TrendingUp')
                                <svg class="w-8 h-8 text-amber-600 group-hover:text-amber-400 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            @elseif($item['icon'] === 'BarChart3')
                                <svg class="w-8 h-8 text-amber-600 group-hover:text-amber-400 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            @endif
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1a3f] mt-6">{{ $item['title'] }}</h4>
                        <p class="text-gray-500 mt-2">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 bg-gradient-to-r from-[#0a1a3f] to-[#1a3a6f]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div
                x-data="{ inView: false }"
                x-intersect="inView = true"
                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-[600ms]"
            >
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
                    Need a Custom <span class="text-amber-400">Logistics Solution?</span>
                </h2>
                <p class="mt-6 text-xl text-gray-300">
                    Our experts are ready to design a tailored solution for your unique requirements.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                    <a
                        href="{{ url('/quote') }}"
                        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-300 group"
                    >
                        Request a Quote
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a
                        href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center gap-2 bg-white text-[#0a1a3f] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all duration-300"
                    >
                        Contact Our Team
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
