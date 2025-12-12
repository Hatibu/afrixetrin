@extends('layouts.app')

@section('title', 'Home - Afrixetrin')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=2000&q=80"
             alt="Port logistics" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3f]/95 via-[#0a1a3f]/80 to-[#0a1a3f]/40"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-12 py-32">
        <div class="max-w-3xl" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 bg-amber-500/20 text-amber-400 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <i class="fas fa-globe"></i>
                Trusted Logistics Partner Since 2003
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                <span class="text-white" style="color: #ffffff;">Efficient Clearing & Forwarding for</span><br>
                <span class="text-amber-400">Global Trade</span>
            </h1>
            <p class="mt-6 text-xl text-gray-300 leading-relaxed max-w-2xl">
                Streamline your logistics with our comprehensive customs clearance, freight forwarding, and cargo handling solutions. Your success is our destination.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mt-10">
                <a href="{{ route('quote') }}"
                   class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all group">
                    Request a Quote
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-sm text-white border border-white/30 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition">
                    Contact Us
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="400">
            <div class="bg-white rounded-2xl shadow-2xl p-8 flex flex-wrap justify-around gap-8 max-w-4xl mx-auto">
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
    </div>
</section>

{{-- Services Section --}}
<section class="py-24 lg:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Our Services"
            title="Comprehensive Logistics Solutions"
            description="From customs clearance to final delivery, we offer end-to-end logistics services tailored to your business needs."
        />

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            @php
                $services = [
                    ['icon' => 'file-check', 'title' => 'Customs Clearance', 'desc' => 'Expert handling of import/export documentation, duties, taxes, and full compliance with regulations.'],
                    ['icon' => 'ship', 'title' => 'Freight Forwarding', 'desc' => 'Comprehensive air, sea, and inland transport coordination for seamless cargo movement worldwide.'],
                    ['icon' => 'warehouse', 'title' => 'Warehousing & Distribution', 'desc' => 'Secure storage facilities with advanced inventory control and efficient dispatch services.'],
                    ['icon' => 'shield-check', 'title' => 'Cargo Insurance', 'desc' => 'Complete cargo coverage, risk mitigation strategies, and professional claims support.'],
                    ['icon' => 'lightbulb', 'title' => 'Logistics Consultancy', 'desc' => 'Strategic import/export advisory and supply chain optimization for your business growth.'],
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group"
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center mb-6 group-hover:from-amber-500 group-hover:to-amber-600 transition-all">
                        @if($service['icon'] === 'file-check')
                            <i class="fas fa-clipboard-check text-3xl text-amber-600 group-hover:text-white"></i>
                        @elseif($service['icon'] === 'ship')
                            <i class="fas fa-ship text-3xl text-amber-600 group-hover:text-white"></i>
                        @elseif($service['icon'] === 'warehouse')
                            <i class="fas fa-warehouse text-3xl text-amber-600 group-hover:text-white"></i>
                        @elseif($service['icon'] === 'shield-check')
                            <i class="fas fa-shield-alt text-3xl text-amber-600 group-hover:text-white"></i>
                        @elseif($service['icon'] === 'lightbulb')
                            <i class="fas fa-lightbulb text-3xl text-amber-600 group-hover:text-white"></i>
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-[#0a1a3f] mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <x-sectionheading
                    subtitle="Why Choose Us"
                    title="Your Trusted Partner in Global Logistics"
                    description="We combine industry expertise with cutting-edge technology to deliver exceptional service and value."
                    centered="false"
                />

                <div class="grid grid-cols-2 gap-6 mt-10">
                    @php
                        $features = [
                            ['icon' => 'clock', 'title' => 'Fast Clearance', 'desc' => 'Expedited processing times'],
                            ['icon' => 'award', 'title' => 'Compliance Expertise', 'desc' => 'Full regulatory compliance'],
                            ['icon' => 'users', 'title' => 'Experienced Team', 'desc' => '20+ years in logistics'],
                            ['icon' => 'dollar-sign', 'title' => 'Cost-Effective', 'desc' => 'Competitive pricing'],
                            ['icon' => 'chart-line', 'title' => 'Real-Time Updates', 'desc' => 'Track your cargo 24/7'],
                            ['icon' => 'globe', 'title' => 'Global Network', 'desc' => 'Worldwide partnerships'],
                        ];
                    @endphp

                    @foreach($features as $index => $f)
                        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/10 flex items-center justify-center flex-shrink-0">
                                @if($f['icon'] === 'clock')
                                    <i class="fas fa-clock text-2xl text-amber-600"></i>
                                @elseif($f['icon'] === 'award')
                                    <i class="fas fa-award text-2xl text-amber-600"></i>
                                @elseif($f['icon'] === 'users')
                                    <i class="fas fa-users text-2xl text-amber-600"></i>
                                @elseif($f['icon'] === 'dollar-sign')
                                    <i class="fas fa-dollar-sign text-2xl text-amber-600"></i>
                                @elseif($f['icon'] === 'chart-line')
                                    <i class="fas fa-chart-line text-2xl text-amber-600"></i>
                                @elseif($f['icon'] === 'globe')
                                    <i class="fas fa-globe text-2xl text-amber-600"></i>
                                @endif
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#0a1a3f]">{{ $f['title'] }}</h4>
                                <p class="text-gray-500 text-sm mt-1">{{ $f['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80"
                     alt="Container yard" class="rounded-2xl shadow-2xl">
                <div class="absolute -bottom-8 -left-8 bg-[#0a1a3f] text-white p-8 rounded-2xl shadow-xl">
                    <div class="text-4xl font-bold text-amber-400">20+</div>
                    <div class="text-gray-300 mt-1">Years of Excellence</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Process Steps --}}
<section class="py-24 lg:py-32 bg-[#0a1a3f]">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Our Process"
            title="How We Work"
            description="A streamlined process designed for efficiency and transparency at every step."
            light
        />

        <div class="relative mt-20">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-amber-500/20 via-amber-500 to-amber-500/20 -translate-y-1/2"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @php
                    $steps = [
                        ['icon' => 'file-text', 'title' => 'Documentation', 'desc' => 'We handle all paperwork'],
                        ['icon' => 'check-circle', 'title' => 'Clearance', 'desc' => 'Customs processing'],
                        ['icon' => 'ship', 'title' => 'Freight', 'desc' => 'Transport coordination'],
                        ['icon' => 'warehouse', 'title' => 'Warehousing', 'desc' => 'Secure storage'],
                        ['icon' => 'truck', 'title' => 'Delivery', 'desc' => 'Final mile delivery']
                    ];
                @endphp

                @foreach($steps as $index => $step)
                    <div class="text-center relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <div class="relative z-10 w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center shadow-lg shadow-amber-500/30">
                            @if($step['icon'] === 'file-text')
                                <i class="fas fa-file-alt text-4xl text-white"></i>
                            @elseif($step['icon'] === 'check-circle')
                                <i class="fas fa-check-circle text-4xl text-white"></i>
                            @elseif($step['icon'] === 'ship')
                                <i class="fas fa-ship text-4xl text-white"></i>
                            @elseif($step['icon'] === 'warehouse')
                                <i class="fas fa-warehouse text-4xl text-white"></i>
                            @elseif($step['icon'] === 'truck')
                                <i class="fas fa-truck text-4xl text-white"></i>
                            @endif
                        </div>
                        <div class="absolute top-6 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#0a1a3f] rounded-full flex items-center justify-center border-4 border-amber-500 text-white font-bold z-20">
                            {{ $index + 1 }}
                        </div>
                        <h4 class="text-white font-semibold text-lg mt-10">{{ $step['title'] }}</h4>
                        <p class="text-gray-400 mt-2">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-24 lg:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Testimonials"
            title="What Our Clients Say"
            description="Don't just take our word for it. Here's what our valued clients have to say about our services."
        />

        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @php
                $testimonials = [
                    ['name' => 'Michael Chen', 'company' => 'GlobalTech Industries', 'quote' => 'Afrixetrin has transformed our supply chain operations. Their customs clearance is incredibly fast and accurate.', 'rating' => 5],
                    ['name' => 'Sarah Johnson', 'company' => 'Maritime Exports Ltd', 'quote' => 'Outstanding service! They handle our freight forwarding with precision and always keep us updated.', 'rating' => 5],
                    ['name' => 'David Okonkwo', 'company' => 'Pan-African Trading Co.', 'quote' => 'The most reliable clearing and forwarding company we have worked with. Highly recommended!', 'rating' => 5],
                ];
            @endphp

            @foreach($testimonials as $index => $t)
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative overflow-hidden"
                     data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <i class="fas fa-quote-right absolute top-6 right-6 text-6xl text-amber-500/20"></i>
                    <div class="flex gap-1 mb-4">
                        @for($i = 0; $i < $t['rating']; $i++)
                            <i class="fas fa-star text-amber-400 text-xl"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">“{{ $t['quote'] }}”</p>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="font-semibold text-[#0a1a3f]">{{ $t['name'] }}</div>
                        <div class="text-gray-500 text-sm">{{ $t['company'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=2000&q=80"
             alt="Shipping containers" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#0a1a3f]/90"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">
            <span class="text-white" style="color: #ffffff;">Ready to Optimize Your </span><span class="text-amber-400">Logistics?</span>
        </h2>
        <p class="mt-6 text-xl text-gray-300">
            Get in touch with our experts today and discover how we can help streamline your supply chain.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
            <a href="{{ route('quote') }}"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all group">
                Get Your Free Quote
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
