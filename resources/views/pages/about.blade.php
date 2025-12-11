@extends('layouts.app')

@section('title', 'About Us - Afrixetrin')

@section('content')
@php
    $values = [
        [
            'icon' => 'Shield',
            'title' => 'Integrity',
            'description' => 'We operate with honesty and transparency in every interaction and transaction.'
        ],
        [
            'icon' => 'Zap',
            'title' => 'Speed',
            'description' => 'Time is money. We ensure fast processing without compromising quality.'
        ],
        [
            'icon' => 'Eye',
            'title' => 'Transparency',
            'description' => 'Clear communication and real-time updates at every stage of your shipment.'
        ],
        [
            'icon' => 'Award',
            'title' => 'Compliance',
            'description' => 'Full adherence to international trade regulations and customs requirements.'
        ]
    ];

    $stats = [
        ['value' => '2003', 'label' => 'Founded'],
        ['value' => '500+', 'label' => 'Active Clients'],
        ['value' => '50+', 'label' => 'Countries'],
        ['value' => '24/7', 'label' => 'Support']
    ];

    $team = [
        [
            'name' => 'James Okonkwo',
            'role' => 'Chief Executive Officer',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80'
        ],
        [
            'name' => 'Amara Diallo',
            'role' => 'Operations Director',
            'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80'
        ],
        [
            'name' => 'David Chen',
            'role' => 'Head of Customs',
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=80'
        ],
        [
            'name' => 'Sarah Williams',
            'role' => 'Client Relations Manager',
            'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=80'
        ]
    ];
@endphp

<div>
    {{-- Hero Section --}}
    <section class="relative py-24 lg:py-32 bg-[#0a1a3f]">
        <div class="absolute inset-0 opacity-20">
            <img
                src="https://images.unsplash.com/photo-1605745341112-85968b19335b?auto=format&fit=crop&w=2000&q=80"
                alt="Warehouse"
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
                    About Us
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Your Reliable Partner in <span class="text-amber-400">Global Trade</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                    For over two decades, Afrixetrin has been at the forefront of clearing and forwarding services, helping businesses navigate the complexities of international logistics.
                </p>
            </div>
        </div>
    </section>

    {{-- Company Story --}}
    <section class="py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
                    class="transition-all duration-[800ms]"
                >
                    <x-ui.sectionheading 
                        subtitle="Our Story"
                        title="Building Trust Through Excellence"
                        :centered="false"
                    />
                    <div class="space-y-6 text-gray-600 leading-relaxed">
                        <p>
                            Founded in 2003, Afrixetrin began as a small customs brokerage firm with a vision to simplify international trade for businesses of all sizes. What started as a team of three passionate logistics professionals has grown into a full-service clearing and forwarding company with operations spanning multiple continents.
                        </p>
                        <p>
                            Today, we handle thousands of shipments annually, serving clients from diverse industries including manufacturing, retail, agriculture, and technology. Our success is built on a foundation of integrity, efficiency, and an unwavering commitment to customer satisfaction.
                        </p>
                        <p>
                            We understand that every shipment represents a business opportunity, a promise to a customer, or a crucial component in a supply chain. That's why we treat every cargo with the utmost care and urgency, ensuring your goods reach their destination safely and on time.
                        </p>
                    </div>
                </div>
                
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
                    class="relative transition-all duration-[800ms]"
                >
                    <div class="grid grid-cols-2 gap-4">
                        <img
                            src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=500&q=80"
                            alt="Container yard"
                            class="rounded-2xl shadow-lg h-64 object-cover"
                        />
                        <img
                            src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=500&q=80"
                            alt="Shipping containers"
                            class="rounded-2xl shadow-lg h-64 object-cover mt-8"
                        />
                        <img
                            src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=500&q=80"
                            alt="Warehouse"
                            class="rounded-2xl shadow-lg h-64 object-cover"
                        />
                        <img
                            src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=500&q=80"
                            alt="Port cranes"
                            class="rounded-2xl shadow-lg h-64 object-cover mt-8"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Banner --}}
    <section class="bg-gradient-to-r from-amber-500 to-amber-600 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($stats as $index => $stat)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                        class="text-center transition-all duration-500"
                        style="transition-delay: {{ $index * 100 }}ms;"
                    >
                        <div class="text-4xl md:text-5xl font-bold text-white">{{ $stat['value'] }}</div>
                        <div class="text-white/80 mt-2">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-24 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 transition-all duration-[600ms]"
                >
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                            <circle cx="12" cy="12" r="2" fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0a1a3f] mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To provide exceptional clearing and forwarding services that empower businesses to trade globally with confidence. We strive to simplify logistics, ensure compliance, and deliver value through innovation and dedicated customer service.
                    </p>
                </div>

                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 transition-all duration-[600ms]"
                    style="transition-delay: 150ms;"
                >
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0a1a3f] mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To become the most trusted and innovative clearing and forwarding company in the region, recognized for our operational excellence, technological advancement, and commitment to sustainable trade practices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Our Values"
                title="The Principles That Guide Us"
                description="Our core values define who we are and how we conduct business every day."
            />
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @foreach($values as $index => $value)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                        class="text-center group transition-all duration-500"
                        style="transition-delay: {{ $index * 100 }}ms;"
                    >
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center group-hover:from-amber-500 group-hover:to-amber-600 transition-all duration-500">
                            @if($value['icon'] === 'Shield')
                                <svg class="w-10 h-10 text-amber-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            @elseif($value['icon'] === 'Zap')
                                <svg class="w-10 h-10 text-amber-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            @elseif($value['icon'] === 'Eye')
                                <svg class="w-10 h-10 text-amber-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            @elseif($value['icon'] === 'Award')
                                <svg class="w-10 h-10 text-amber-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            @endif
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1a3f] mt-6 mb-3">{{ $value['title'] }}</h4>
                        <p class="text-gray-600">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-24 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Our Team"
                title="Meet the Experts Behind Your Success"
                description="Our experienced team of logistics professionals is dedicated to providing exceptional service."
            />
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @foreach($team as $index => $member)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                        class="bg-white rounded-2xl overflow-hidden shadow-lg group transition-all duration-500"
                        style="transition-delay: {{ $index * 100 }}ms;"
                    >
                        <div class="relative overflow-hidden">
                            <img
                                src="{{ $member['image'] }}"
                                alt="{{ $member['name'] }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3f] to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-500" />
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="text-xl font-bold text-[#0a1a3f]">{{ $member['name'] }}</h4>
                            <p class="text-amber-600 mt-1">{{ $member['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-[#0a1a3f]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div
                x-data="{ inView: false }"
                x-intersect="inView = true"
                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-[600ms]"
            >
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
                    Ready to Work With Us?
                </h2>
                <p class="mt-6 text-xl text-gray-300">
                    Let's discuss how we can help optimize your logistics operations.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                    <a
                        href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-300 group"
                    >
                        Get in Touch
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
