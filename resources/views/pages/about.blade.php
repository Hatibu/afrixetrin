@extends('layouts.app')

@section('title', 'About Us - Afrixetrin')

@section('content')
{{-- Hero Section --}}
<section class="relative py-24 lg:py-32 bg-[#0a1a3f] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?auto=format&fit=crop&w=2000&q=80"
             alt="Warehouse"
             class="w-full h-full object-cover">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl" data-aos="fade-up">
            <span class="inline-block text-amber-400 font-semibold uppercase tracking-wider text-sm mb-4">
                About Us
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                <span class="text-white" style="color: #ffffff;">Your Reliable Partner in </span><span class="text-amber-400">Global Trade</span>
            </h1>
            <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                For over two decades, Afrixetrin has been at the forefront of clearing and forwarding services,
                helping businesses navigate the complexities of international logistics.
            </p>
        </div>
    </div>
</section>

{{-- Company Story --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <x-sectionheading subtitle="Our Story" title="Building Trust Through Excellence" centered="false" />

                <div class="space-y-6 text-gray-600 leading-relaxed mt-8">
                    <p>
                        Founded in 2003, Afrixetrin began as a small customs brokerage firm with a vision to simplify
                        international trade for businesses of all sizes. What started as a team of three passionate
                        logistics professionals has grown into a full-service clearing and forwarding company with
                        operations spanning multiple continents.
                    </p>
                    <p>
                        Today, we handle thousands of shipments annually, serving clients from diverse industries
                        including manufacturing, retail, agriculture, and technology. Our success is built on a
                        foundation of integrity, efficiency, and an unwavering commitment to customer satisfaction.
                    </p>
                    <p>
                        We understand that every shipment represents a business opportunity, a promise to a customer,
                        or a crucial component in a supply chain. That's why we treat every cargo with the utmost care
                        and urgency, ensuring your goods reach their destination safely and on time.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800" alt="Container yard" class="rounded-2xl shadow-lg h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800" alt="Shipping containers" class="rounded-2xl shadow-lg h-64 object-cover mt-8">
                <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=800" alt="Warehouse" class="rounded-2xl shadow-lg h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=800" alt="Port cranes" class="rounded-2xl shadow-lg h-64 object-cover mt-8">
            </div>
        </div>
    </div>
</section>

{{-- Stats Banner --}}
<section class="bg-gradient-to-r from-amber-500 to-amber-600 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @php
                $stats = [
                    ['value' => '2003', 'label' => 'Founded'],
                    ['value' => '500+', 'label' => 'Active Clients'],
                    ['value' => '50+', 'label' => 'Countries'],
                    ['value' => '24/7', 'label' => 'Support']
                ];
            @endphp

            @foreach($stats as $index => $stat)
                <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
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
            <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100" data-aos="fade-up">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center mb-6">
                    <i class="fas fa-bullseye text-amber-400 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1a3f] mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To provide exceptional clearing and forwarding services that empower businesses to trade globally
                    with confidence. We strive to simplify logistics, ensure compliance, and deliver value through
                    innovation and dedicated customer service.
                </p>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1a3f] mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To become the most trusted and innovative clearing and forwarding company in the region,
                    recognized for our operational excellence, technological advancement, and commitment to
                    sustainable trade practices.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Core Values --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Our Values"
            title="The Principles That Guide Us"
            description="Our core values define who we are and how we conduct business every day."
        />

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            @php
                $values = [
                    ['icon' => 'shield', 'title' => 'Integrity', 'desc' => 'We operate with honesty and transparency in every interaction and transaction.'],
                    ['icon' => 'bolt', 'title' => 'Speed', 'desc' => 'Time is money. We ensure fast processing without compromising quality.'],
                    ['icon' => 'eye', 'title' => 'Transparency', 'desc' => 'Clear communication and real-time updates at every stage of your shipment.'],
                    ['icon' => 'award', 'title' => 'Compliance', 'desc' => 'Full adherence to international trade regulations and customs requirements.'],
                ];
            @endphp

            @foreach($values as $index => $value)
                <div class="text-center group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center group-hover:from-amber-500 group-hover:to-amber-600 transition-all duration-500">
                        @if($value['icon'] === 'shield')
                            <i class="fas fa-shield-alt text-4xl text-amber-600 group-hover:text-white transition-colors duration-500"></i>
                        @elseif($value['icon'] === 'bolt')
                            <i class="fas fa-bolt text-4xl text-amber-600 group-hover:text-white transition-colors duration-500"></i>
                        @elseif($value['icon'] === 'eye')
                            <i class="fas fa-eye text-4xl text-amber-600 group-hover:text-white transition-colors duration-500"></i>
                        @elseif($value['icon'] === 'award')
                            <i class="fas fa-award text-4xl text-amber-600 group-hover:text-white transition-colors duration-500"></i>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-[#0a1a3f] mt-6 mb-3">{{ $value['title'] }}</h4>
                    <p class="text-gray-600">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 bg-[#0a1a3f]">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white" style="color: #ffffff;">
            Ready to Work With Us?
        </h2>
        <p class="mt-6 text-xl text-gray-300">
            Let's discuss how we can help optimize your logistics operations.
        </p>
        <div class="mt-10">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-300 group">
                Get in Touch
                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>
@endsection
