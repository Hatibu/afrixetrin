@extends('layouts.app')

@section('title', 'Home - Afrixetrin')

@section('content')
@php
    $services = [
        [
            'icon' => 'FileCheck',
            'title' => 'Customs Clearance',
            'description' => 'Expert handling of import/export documentation, duties, taxes, and full compliance with regulations.',
            'delay' => 0
        ],
        [
            'icon' => 'Ship',
            'title' => 'Freight Forwarding',
            'description' => 'Comprehensive air, sea, and inland transport coordination for seamless cargo movement worldwide.',
            'delay' => 100
        ],
        [
            'icon' => 'Warehouse',
            'title' => 'Warehousing & Distribution',
            'description' => 'Secure storage facilities with advanced inventory control and efficient dispatch services.',
            'delay' => 200
        ],
        [
            'icon' => 'Shield',
            'title' => 'Cargo Insurance',
            'description' => 'Complete cargo coverage, risk mitigation strategies, and professional claims support.',
            'delay' => 300
        ],
        [
            'icon' => 'Lightbulb',
            'title' => 'Logistics Consultancy',
            'description' => 'Strategic import/export advisory and supply chain optimization for your business growth.',
            'delay' => 400
        ]
    ];

    $features = [
        ['icon' => 'Clock', 'title' => 'Fast Clearance', 'description' => 'Expedited processing times'],
        ['icon' => 'Award', 'title' => 'Compliance Expertise', 'description' => 'Full regulatory compliance'],
        ['icon' => 'Users', 'title' => 'Experienced Team', 'description' => '20+ years in logistics'],
        ['icon' => 'DollarSign', 'title' => 'Cost-Effective', 'description' => 'Competitive pricing'],
        ['icon' => 'Activity', 'title' => 'Real-Time Updates', 'description' => 'Track your cargo 24/7'],
        ['icon' => 'Globe', 'title' => 'Global Network', 'description' => 'Worldwide partnerships']
    ];

    $processSteps = [
        ['icon' => 'FileText', 'title' => 'Documentation', 'description' => 'We handle all paperwork'],
        ['icon' => 'CheckCircle', 'title' => 'Clearance', 'description' => 'Customs processing'],
        ['icon' => 'Ship', 'title' => 'Freight', 'description' => 'Transport coordination'],
        ['icon' => 'Warehouse', 'title' => 'Warehousing', 'description' => 'Secure storage'],
        ['icon' => 'Truck', 'title' => 'Delivery', 'description' => 'Final mile delivery']
    ];

    $testimonials = [
        [
            'name' => 'Michael Chen',
            'company' => 'GlobalTech Industries',
            'quote' => 'Afrixetrin has transformed our supply chain operations. Their customs clearance is incredibly fast and accurate.',
            'rating' => 5
        ],
        [
            'name' => 'Sarah Johnson',
            'company' => 'Maritime Exports Ltd',
            'quote' => 'Outstanding service! They handle our freight forwarding with precision and always keep us updated.',
            'rating' => 5
        ],
        [
            'name' => 'David Okonkwo',
            'company' => 'Pan-African Trading Co.',
            'quote' => 'The most reliable clearing and forwarding company we have worked with. Highly recommended!',
            'rating' => 5
        ]
    ];
@endphp

<div>
    {{-- Hero Section --}}
    <section class="relative min-h-[90vh] flex items-center">
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=2000&q=80"
                alt="Port logistics"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3f]/95 via-[#0a1a3f]/80 to-[#0a1a3f]/40" />
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 py-32">
            <div
                x-data="{ inView: false }"
                x-intersect="inView = true"
                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="max-w-3xl transition-all duration-[800ms]"
            >
                <span class="inline-flex items-center gap-2 bg-amber-500/20 text-amber-400 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Trusted Logistics Partner Since 2003
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                    Efficient Clearing & Forwarding for
                    <span class="text-amber-400"> Global Trade</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 leading-relaxed max-w-2xl">
                    Streamline your logistics with our comprehensive customs clearance, freight forwarding, and cargo handling solutions. Your success is our destination.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-10">
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
                        class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-sm text-white border border-white/30 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all duration-300"
                    >
                        Contact Us
                    </a>
                </div>
            </div>
        </div>

        {{-- Floating Stats --}}
        <div
            x-data="{ inView: false }"
            x-intersect="inView = true"
            :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
            class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 hidden lg:block transition-all duration-[800ms]"
            style="transition-delay: 400ms;"
        >
            <div class="bg-white rounded-2xl shadow-2xl p-8 flex gap-12">
                @php
                    $stats = [
                        ['value' => '20+', 'label' => 'Years Experience'],
                        ['value' => '5000+', 'label' => 'Shipments Handled'],
                        ['value' => '50+', 'label' => 'Countries Served'],
                        ['value' => '98%', 'label' => 'Client Satisfaction']
                    ];
                @endphp
                @foreach($stats as $stat)
                    <div class="text-center">
                        <div class="text-4xl font-bold text-[#0a1a3f]">{{ $stat['value'] }}</div>
                        <div class="text-gray-500 mt-1">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-24 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Our Services"
                title="Comprehensive Logistics Solutions"
                description="From customs clearance to final delivery, we offer end-to-end logistics services tailored to your business needs."
            />
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                @foreach($services as $service)
                    <x-ui.serviceCard 
                        :title="$service['title']"
                        :description="$service['description']"
                        :delay="$service['delay']"
                    >
                        <x-slot:icon>
                            @if($service['icon'] === 'FileCheck')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            @elseif($service['icon'] === 'Ship')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            @elseif($service['icon'] === 'Warehouse')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            @elseif($service['icon'] === 'Shield')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            @elseif($service['icon'] === 'Lightbulb')
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            @endif
                        </x-slot:icon>
                    </x-ui.serviceCard>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
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
                        subtitle="Why Choose Us"
                        title="Your Trusted Partner in Global Logistics"
                        description="We combine industry expertise with cutting-edge technology to deliver exceptional service and value."
                        :centered="false"
                    />
                    
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        @foreach($features as $index => $feature)
                            <div
                                x-data="{ inView: false }"
                                x-intersect="inView = true"
                                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                                class="flex items-start gap-4 transition-all duration-500"
                                style="transition-delay: {{ $index * 100 }}ms;"
                            >
                                <div class="w-12 h-12 rounded-xl bg-amber-500/10 flex items-center justify-center flex-shrink-0">
                                    @if($feature['icon'] === 'Clock')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    @elseif($feature['icon'] === 'Award')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                    @elseif($feature['icon'] === 'Users')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    @elseif($feature['icon'] === 'DollarSign')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    @elseif($feature['icon'] === 'Activity')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    @elseif($feature['icon'] === 'Globe')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#0a1a3f]">{{ $feature['title'] }}</h4>
                                    <p class="text-gray-500 text-sm mt-1">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
                    class="relative transition-all duration-[800ms]"
                >
                    <div class="relative">
                        <img
                            src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80"
                            alt="Container yard"
                            class="rounded-2xl shadow-2xl"
                        />
                        <div class="absolute -bottom-8 -left-8 bg-[#0a1a3f] text-white p-8 rounded-2xl shadow-xl">
                            <div class="text-4xl font-bold text-amber-400">20+</div>
                            <div class="text-gray-300 mt-1">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Steps --}}
    <section class="py-24 lg:py-32 bg-[#0a1a3f]">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Our Process"
                title="How We Work"
                description="A streamlined process designed for efficiency and transparency at every step."
                :light="true"
            />
            
            <div class="relative mt-16">
                {{-- Connection Line --}}
                <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-amber-500/20 via-amber-500 to-amber-500/20 -translate-y-1/2" />
                
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach($processSteps as $index => $step)
                        <div
                            x-data="{ inView: false }"
                            x-intersect="inView = true"
                            :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                            class="relative text-center transition-all duration-500"
                            style="transition-delay: {{ $index * 150 }}ms;"
                        >
                            <div class="relative z-10 w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center shadow-lg shadow-amber-500/30">
                                @if($step['icon'] === 'FileText')
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                @elseif($step['icon'] === 'CheckCircle')
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @elseif($step['icon'] === 'Ship')
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                @elseif($step['icon'] === 'Warehouse')
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                @elseif($step['icon'] === 'Truck')
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @endif
                            </div>
                            <div class="absolute top-6 left-1/2 -translate-x-1/2 w-8 h-8 bg-[#0a1a3f] rounded-full flex items-center justify-center border-4 border-amber-500 text-white font-bold text-sm z-20">
                                {{ $index + 1 }}
                            </div>
                            <h4 class="text-white font-semibold text-lg mt-8">{{ $step['title'] }}</h4>
                            <p class="text-gray-400 mt-2">{{ $step['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-6">
            <x-ui.sectionheading 
                subtitle="Testimonials"
                title="What Our Clients Say"
                description="Don't just take our word for it. Here's what our valued clients have to say about our services."
            />
            
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                @foreach($testimonials as $index => $testimonial)
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                        class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative transition-all duration-500"
                        style="transition-delay: {{ $index * 150 }}ms;"
                    >
                        <svg class="absolute top-6 right-6 w-10 h-10 text-amber-500/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-5 h-5 fill-amber-400 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-gray-600 leading-relaxed italic">"{{ $testimonial['quote'] }}"</p>
                        <div class="mt-6 pt-6 border-t border-gray-100">
                            <div class="font-semibold text-[#0a1a3f]">{{ $testimonial['name'] }}</div>
                            <div class="text-gray-500 text-sm">{{ $testimonial['company'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=2000&q=80"
                alt="Shipping containers"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-[#0a1a3f]/90" />
        </div>
        
        <div class="relative max-w-4xl mx-auto px-6 text-center">
            <div
                x-data="{ inView: false }"
                x-intersect="inView = true"
                :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-[600ms]"
            >
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
                    Ready to Optimize Your <span class="text-amber-400">Logistics?</span>
                </h2>
                <p class="mt-6 text-xl text-gray-300">
                    Get in touch with our experts today and discover how we can help streamline your supply chain.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                    <a
                        href="{{ url('/quote') }}"
                        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-300 group"
                    >
                        Get Your Free Quote
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
