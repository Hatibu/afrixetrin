@extends('layouts.app')

@section('title', 'Our Services - Afrixetrin')

@section('content')
{{-- Hero Section --}}
<section class="relative py-24 lg:py-32 bg-[#0a1a3f] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=2000&q=80"
             alt="Port" class="w-full h-full object-cover">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl" data-aos="fade-up">
            <span class="inline-block text-amber-400 font-semibold uppercase tracking-wider text-sm mb-4">
                Our Services
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                <span class="text-white" style="color: #ffffff;">Comprehensive </span><span class="text-amber-400">Logistics Solutions</span>
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
            @php
                $modes = [
                    ['icon' => 'anchor', 'title' => 'Sea Freight', 'desc' => 'FCL & LCL shipping worldwide'],
                    ['icon' => 'paper-plane', 'title' => 'Air Freight', 'desc' => 'Express & standard air cargo'],
                    ['icon' => 'truck', 'title' => 'Land Transport', 'desc' => 'Road & rail logistics'],
                ];
            @endphp

            @foreach($modes as $index => $mode)
                <div class="flex items-center gap-4 p-6 rounded-2xl bg-gray-50 hover:bg-gradient-to-r hover:from-amber-500 hover:to-amber-600 group transition-all duration-500"
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-14 h-14 rounded-xl bg-[#0a1a3f] flex items-center justify-center group-hover:bg-white transition-colors">
                        @if($mode['icon'] === 'anchor')
                            <i class="fas fa-anchor text-3xl text-amber-400 group-hover:text-amber-600"></i>
                        @elseif($mode['icon'] === 'paper-plane')
                            <i class="fas fa-paper-plane text-3xl text-amber-400 group-hover:text-amber-600"></i>
                        @elseif($mode['icon'] === 'truck')
                            <i class="fas fa-truck text-3xl text-amber-400 group-hover:text-amber-600"></i>
                        @endif
                    </div>
                    <div>
                        <h4 class="font-bold text-[#0a1a3f] group-hover:text-white transition-colors">{{ $mode['title'] }}</h4>
                        <p class="text-gray-500 text-sm group-hover:text-white/80 transition-colors">{{ $mode['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services Detail --}}
<section class="py-24 lg:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 space-y-32">
        @php
            $services = [
                [
                    'id' => 'customs', 'icon' => 'file-check', 'title' => 'Customs Clearance',
                    'desc' => 'Expert handling of all customs documentation and clearance procedures for seamless import and export operations.',
                    'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800',
                    'features' => ['Import & export documentation','Duties & taxes calculation','Regulatory compliance handling','Tariff classification','License & permit management','Bond preparation'],
                    'benefits' => ['Faster clearance times','Reduced penalties & delays','Expert regulatory guidance','Complete documentation support']
                ],
                [
                    'id' => 'freight', 'icon' => 'ship', 'title' => 'Freight Forwarding',
                    'desc' => 'Comprehensive air, sea, and inland transport coordination for efficient global cargo movement.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=800',
                    'features' => ['Ocean freight (FCL & LCL)','Air freight services','Multimodal transportation','Door-to-door delivery','Route optimization','Carrier negotiation'],
                    'benefits' => ['Competitive shipping rates','Global network coverage','Real-time tracking','Flexible shipping options']
                ],
                [
                    'id' => 'warehousing', 'icon' => 'warehouse', 'title' => 'Warehousing & Distribution',
                    'desc' => 'Secure storage facilities with advanced inventory management and efficient distribution networks.',
                    'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800',
                    'features' => ['Secure storage facilities','Inventory management','Order fulfillment','Pick & pack services','Cross-docking','Last-mile delivery'],
                    'benefits' => ['Reduced storage costs','Accurate inventory tracking','Faster order processing','Scalable solutions']
                ],
                [
                    'id' => 'insurance', 'icon' => 'shield-check', 'title' => 'Cargo Insurance',
                    'desc' => 'Comprehensive cargo coverage and risk mitigation to protect your valuable shipments.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800',
                    'features' => ['All-risk coverage','Marine cargo insurance','Air cargo insurance','Inland transit coverage','Claims management','Risk assessment'],
                    'benefits' => ['Complete peace of mind','Fast claims processing','Tailored coverage options','Expert risk advice']
                ],
                [
                    'id' => 'consultancy', 'icon' => 'lightbulb', 'title' => 'Logistics Consultancy',
                    'desc' => 'Strategic import/export advisory and supply chain optimization to enhance your business operations.',
                    'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800',
                    'features' => ['Supply chain analysis','Cost reduction strategies','Compliance consulting','Trade agreement advisory','Process optimization','Technology integration'],
                    'benefits' => ['Improved efficiency','Reduced logistics costs','Strategic insights','Competitive advantage']
                ]
            ];
        @endphp

        @foreach($services as $index => $service)
            <div id="{{ $service['id'] }}"
                 class="grid lg:grid-cols-2 gap-16 items-center {{ $index % 2 == 1 ? 'lg:flex-row-reverse' : '' }}"
                 data-aos="fade-up">
                <!-- Text Content -->
                <div class="{{ $index % 2 == 1 ? 'lg:order-2' : '' }}">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center flex-shrink-0">
                            @if($service['icon'] === 'file-check')
                                <i class="fas fa-file-check text-3xl text-amber-400"></i>
                            @elseif($service['icon'] === 'ship')
                                <i class="fas fa-ship text-3xl text-amber-400"></i>
                            @elseif($service['icon'] === 'warehouse')
                                <i class="fas fa-warehouse text-3xl text-amber-400"></i>
                            @elseif($service['icon'] === 'shield-check')
                                <i class="fas fa-shield-alt text-3xl text-amber-400"></i>
                            @elseif($service['icon'] === 'lightbulb')
                                <i class="fas fa-lightbulb text-3xl text-amber-400"></i>
                            @endif
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-[#0a1a3f]">{{ $service['title'] }}</h2>
                    </div>

                    <p class="text-gray-600 text-lg leading-relaxed mb-8">{{ $service['desc'] }}</p>

                    <div class="grid md:grid-cols-2 gap-4 mb-8">
                        @foreach($service['features'] as $feature)
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-amber-500 text-xl"></i>
                                <span class="text-gray-700">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-gray-100 rounded-2xl p-6">
                        <h4 class="font-semibold text-[#0a1a3f] mb-4">Key Benefits</h4>
                        <div class="grid grid-cols-2 gap-3">
                            @foreach($service['benefits'] as $benefit)
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                                    <span class="text-gray-600 text-sm">{{ $benefit }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('quote') }}"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-6 py-3 rounded-full font-semibold mt-8 hover:shadow-lg hover:shadow-amber-500/30 transition-all group">
                        Get a Quote
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Image -->
                <div class="{{ $index % 2 == 1 ? 'lg:order-1' : '' }} relative">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                         class="rounded-2xl shadow-2xl w-full h-[500px] object-cover">

                    <div class="absolute -bottom-6 -right-6 bg-[#0a1a3f] text-white p-6 rounded-2xl shadow-xl hidden lg:block">
                        <div class="text-amber-400 font-semibold">Trusted by</div>
                        <div class="text-3xl font-bold">500+ Clients</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Why Choose Us"
            title="What Sets Us Apart"
            description="We deliver excellence through expertise, technology, and unwavering commitment to your success."
        />

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            @php
                $advantages = [
                    ['icon' => 'globe', 'title' => 'Global Reach', 'desc' => '50+ countries in our network'],
                    ['icon' => 'users', 'title' => 'Expert Team', 'desc' => '20+ years of combined experience'],
                    ['icon' => 'trending-up', 'title' => 'Cost Efficiency', 'desc' => 'Optimized rates & routes'],
                    ['icon' => 'chart-bar', 'title' => 'Real-Time Tracking', 'desc' => '24/7 shipment visibility'],
                ];
            @endphp

            @foreach($advantages as $index => $item)
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:-translate-y-2 transition-all duration-500 border border-gray-100"
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center group-hover:from-[#0a1a3f] group-hover:to-[#1a3a6f] transition-all">
                        @if($item['icon'] === 'globe')
                            <i class="fas fa-globe text-4xl text-amber-600 group-hover:text-amber-400"></i>
                        @elseif($item['icon'] === 'users')
                            <i class="fas fa-users text-4xl text-amber-600 group-hover:text-amber-400"></i>
                        @elseif($item['icon'] === 'trending-up')
                            <i class="fas fa-chart-line text-4xl text-amber-600 group-hover:text-amber-400"></i>
                        @elseif($item['icon'] === 'chart-bar')
                            <i class="fas fa-chart-bar text-4xl text-amber-600 group-hover:text-amber-400"></i>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-[#0a1a3f] mt-6">{{ $item['title'] }}</h4>
                    <p class="text-gray-500 mt-2">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 bg-gradient-to-r from-[#0a1a3f] to-[#1a3a6f]">
    <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">
            <span class="text-white" style="color: #ffffff;">Need a Custom </span><span class="text-amber-400">Logistics Solution?</span>
        </h2>
        <p class="mt-6 text-xl text-gray-300">
            Our experts are ready to design a tailored solution for your unique requirements.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
            <a href="{{ route('quote') }}"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all group">
                Request a Quote
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-white text-[#0a1a3f] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                Contact Our Team
            </a>
        </div>
    </div>
</section>
@endsection
