@extends('layouts.app')

@section('title', 'Contact Us - Afrixetrin')

@section('content')
{{-- Hero Section --}}
<section class="relative py-24 lg:py-32 bg-[#0a1a3f] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=2000&q=80"
             alt="Warehouse" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl" data-aos="fade-up">
            <span class="inline-block text-amber-400 font-semibold uppercase tracking-wider text-sm mb-4">
                Contact Us
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                <span class="text-white" style="color: #ffffff;">Get in Touch </span><span class="text-amber-400">With Our Team</span>
            </h1>
            <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                Have questions about our services? We're here to help. Reach out and we'll respond as soon as we can.
            </p>
        </div>
    </div>
</section>

{{-- Contact Form & Info --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-3 gap-12">
            {{-- Contact Info Sidebar --}}
            <div class="space-y-10" data-aos="fade-right">
                <div>
                    <h3 class="text-2xl font-bold text-[#0a1a3f] mb-3">Contact Information</h3>
                    <p class="text-gray-600">Reach out to us through any of the following channels.</p>
                </div>

                @php
                    $contacts = [
                        ['icon' => 'map-pin', 'title' => 'Our Office', 'lines' => ['123 Logistics Way', 'Port City, Business District 10001']],
                        ['icon' => 'phone', 'title' => 'Phone', 'lines' => ['+1 (234) 567-890', '+1 (234) 567-891']],
                        ['icon' => 'envelope', 'title' => 'Email', 'lines' => ['info@afrixetrin.com', 'support@afrixetrin.com']],
                        ['icon' => 'clock', 'title' => 'Business Hours', 'lines' => ['Monday - Friday: 8:00 AM - 6:00 PM', 'Saturday: 9:00 AM - 1:00 PM']],
                    ];
                @endphp

                @foreach($contacts as $item)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center flex-shrink-0">
                            <i class="ph-{{ $item['icon'] }} ph-bold text-2xl text-amber-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#0a1a3f]">{{ $item['title'] }}</h4>
                            @foreach($item['lines'] as $line)
                                <p class="text-gray-600 mt-1">{{ $line }}</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <!-- Google Map -->
                <div class="rounded-2xl overflow-hidden shadow-lg h-64 mt-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1626179408831!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-2" data-aos="fade-left">
                <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center">
                            <i class="ph-chat-teardrop-text ph-bold text-2xl text-amber-400"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-[#0a1a3f]">Send Us a Message</h3>
                            <p class="text-gray-500">Fill out the form below and we'll get back to you.</p>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="mb-8 p-6 bg-green-50 border border-green-200 rounded-2xl text-center">
                            <div class="w-20 h-20 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <i class="ph-check-circle ph-bold text-5xl text-green-600"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Message Sent Successfully!</h3>
                            <p class="text-gray-600">Thank you for contacting us. We'll reply within 24 hours.</p>
                            <a href="{{ route('contact') }}" class="inline-block mt-6 text-amber-600 font-semibold hover:underline">
                                Send Another Message →
                            </a>
                        </div>
                    @else
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" name="full_name" value="{{ old('full_name') }}" required
                                           class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition"
                                           placeholder="John Doe">
                                    @error('full_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                                    <input type="text" name="company" value="{{ old('company') }}"
                                           class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition"
                                           placeholder="Your Company Ltd.">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                           class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition"
                                           placeholder="john@company.com">
                                    @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}"
                                           class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition"
                                           placeholder="+1 (234) 567-890">
                                </div>
                            </div>

                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Service Required</label>
                                <select name="service"
                                        class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition">
                                    <option value="">Select a service</option>
                                    @foreach(['Customs Clearance','Freight Forwarding','Warehousing & Distribution','Cargo Insurance','Logistics Consultancy','Other'] as $service)
                                        <option value="{{ $service }}" {{ old('service') == $service ? 'selected' : '' }}>{{ $service }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Message *</label>
                                <textarea name="message" rows="5" required
                                          class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20 transition resize-none"
                                          placeholder="Tell us about your logistics needs...">{{ old('message') }}</textarea>
                                @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <button type="submit"
                                    class="w-full mt-8 h-14 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl font-semibold text-lg hover:shadow-xl hover:shadow-amber-500/30 transition-all duration-300 flex items-center justify-center gap-3">
                                <span>Send Message</span>
                                <i class="ph-paper-plane-tilt ph-bold text-xl"></i>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Global Presence --}}
<section class="py-24 lg:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <x-sectionheading
            subtitle="Global Presence"
            title="We Operate east africa"
            description="With partners and offices across the globe, we're always close to your cargo."
        />

        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @foreach([
                ['region' => 'Africa', 'cities' => 'Lagos, Johannesburg, Cairo, Nairobi'],
                ['region' => 'Europe', 'cities' => 'Rotterdam, Hamburg, London, Antwerp'],
                ['region' => 'Asia Pacific', 'cities' => 'Singapore, Hong Kong, Shanghai, Dubai']
            ] as $location)
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:-translate-y-2 transition-all duration-500 border border-gray-100"
                     data-aos="fade-up">
                    <div class="w-14 h-14 mx-auto rounded-xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center mb-4">
                        <i class="ph-globe ph-bold text-3xl text-amber-400"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0a1a3f]">{{ $location['region'] }}</h4>
                    <p class="text-gray-500 mt-2">{{ $location['cities'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
