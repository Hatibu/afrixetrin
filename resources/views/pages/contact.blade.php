@extends('layouts.app')

@section('title', 'Contact Us - Afrixetrin')

@section('content')
@php
    $contactInfo = [
        [
            'icon' => 'MapPin',
            'title' => 'Our Office',
            'lines' => ['123 Logistics Way', 'Port City, Business District 10001']
        ],
        [
            'icon' => 'Phone',
            'title' => 'Phone',
            'lines' => ['+1 (234) 567-890', '+1 (234) 567-891']
        ],
        [
            'icon' => 'Mail',
            'title' => 'Email',
            'lines' => ['info@afrixetrin.com', 'support@afrixetrin.com']
        ],
        [
            'icon' => 'Clock',
            'title' => 'Business Hours',
            'lines' => ['Monday - Friday: 8:00 AM - 6:00 PM', 'Saturday: 9:00 AM - 1:00 PM']
        ]
    ];

    $services = [
        'Customs Clearance',
        'Freight Forwarding',
        'Warehousing & Distribution',
        'Cargo Insurance',
        'Logistics Consultancy',
        'Other'
    ];
@endphp

<div x-data="contactForm()">
    {{-- Hero Section --}}
    <section class="relative py-24 lg:py-32 bg-[#0a1a3f]">
        <div class="absolute inset-0 opacity-20">
            <img
                src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=2000&q=80"
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
                    Contact Us
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Get in Touch <span class="text-amber-400">With Our Team</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                    Have questions about our services? We're here to help. Reach out to us and we'll respond as soon as we can.
                </p>
            </div>
        </div>
    </section>

    {{-- Success Message --}}
    <div 
        x-show="isSubmitted"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        class="min-h-screen flex items-center justify-center bg-gray-50 px-6"
    >
        <div class="text-center max-w-lg">
            <div class="w-20 h-20 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-6">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-[#0a1a3f] mb-4">Message Sent Successfully!</h2>
            <p class="text-gray-600 mb-8">
                Thank you for contacting us. One of our team members will get back to you within 24 hours.
            </p>
            <button
                @click="resetForm()"
                class="bg-gradient-to-r from-amber-500 to-amber-600 hover:shadow-lg hover:shadow-amber-500/30 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300"
            >
                Send Another Message
            </button>
        </div>
    </div>

    {{-- Contact Form & Info Section --}}
    <div x-show="!isSubmitted">
        <section class="py-24 lg:py-32">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid lg:grid-cols-3 gap-12">
                    {{-- Contact Info --}}
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
                        class="space-y-8 transition-all duration-[600ms]"
                    >
                        <div>
                            <h3 class="text-2xl font-bold text-[#0a1a3f] mb-4">Contact Information</h3>
                            <p class="text-gray-600">Reach out to us through any of the following channels.</p>
                        </div>

                        @foreach($contactInfo as $index => $item)
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500/20 to-amber-500/5 flex items-center justify-center flex-shrink-0">
                                    @if($item['icon'] === 'MapPin')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    @elseif($item['icon'] === 'Phone')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    @elseif($item['icon'] === 'Mail')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    @elseif($item['icon'] === 'Clock')
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#0a1a3f]">{{ $item['title'] }}</h4>
                                    @foreach($item['lines'] as $line)
                                        <p class="text-gray-600">{{ $line }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                        {{-- Map --}}
                        <div class="rounded-2xl overflow-hidden shadow-lg h-64">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1626179408831!5m2!1sen!2sid"
                                width="100%"
                                height="100%"
                                style="border: 0;"
                                allowfullscreen=""
                                loading="lazy"
                                title="Office Location"
                            ></iframe>
                        </div>
                    </div>

                    {{-- Contact Form --}}
                    <div
                        x-data="{ inView: false }"
                        x-intersect="inView = true"
                        :class="inView ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
                        class="lg:col-span-2 transition-all duration-[600ms]"
                    >
                        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-[#0a1a3f]">Send Us a Message</h3>
                                    <p class="text-gray-500">Fill out the form below and we'll get back to you.</p>
                                </div>
                            </div>

                            <form @submit.prevent="handleSubmit" class="space-y-6">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name *</label>
                                        <input
                                            type="text"
                                            id="fullName"
                                            x-model="formData.fullName"
                                            placeholder="John Doe"
                                            required
                                            class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                        />
                                    </div>
                                    <div class="space-y-2">
                                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                        <input
                                            type="text"
                                            id="company"
                                            x-model="formData.company"
                                            placeholder="Your Company Ltd."
                                            class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                        />
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address *</label>
                                        <input
                                            type="email"
                                            id="email"
                                            x-model="formData.email"
                                            placeholder="john@company.com"
                                            required
                                            class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                        />
                                    </div>
                                    <div class="space-y-2">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                        <input
                                            type="tel"
                                            id="phone"
                                            x-model="formData.phone"
                                            placeholder="+1 (234) 567-890"
                                            class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                        />
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="service" class="block text-sm font-medium text-gray-700">Service Required</label>
                                    <select
                                        id="service"
                                        x-model="formData.service"
                                        class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                    >
                                        <option value="">Select a service</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service }}">{{ $service }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label for="message" class="block text-sm font-medium text-gray-700">Your Message *</label>
                                    <textarea
                                        id="message"
                                        x-model="formData.message"
                                        placeholder="Tell us about your logistics needs..."
                                        required
                                        rows="5"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none resize-none transition-colors"
                                    ></textarea>
                                </div>

                                <button
                                    type="submit"
                                    :disabled="isSubmitting"
                                    class="w-full h-14 bg-gradient-to-r from-amber-500 to-amber-600 hover:shadow-xl hover:shadow-amber-500/30 rounded-xl text-lg font-semibold transition-all duration-300 text-white disabled:opacity-50 disabled:cursor-not-allowed"
                                >
                                    <span x-show="!isSubmitting" class="flex items-center justify-center gap-2">
                                        Send Message
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                        </svg>
                                    </span>
                                    <span x-show="isSubmitting" class="flex items-center justify-center gap-2">
                                        <div class="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                                        Sending...
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Global Presence --}}
        <section class="py-24 lg:py-32 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <x-ui.sectionheading 
                    subtitle="Global Presence"
                    title="We Operate Worldwide"
                    description="With partners and offices across the globe, we're always close to your cargo."
                />
                
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="grid md:grid-cols-3 gap-8 mt-12 transition-all duration-[600ms]"
                >
                    @php
                        $locations = [
                            ['region' => 'Africa', 'cities' => 'Lagos, Johannesburg, Cairo, Nairobi'],
                            ['region' => 'Europe', 'cities' => 'Rotterdam, Hamburg, London, Antwerp'],
                            ['region' => 'Asia Pacific', 'cities' => 'Singapore, Hong Kong, Shanghai, Dubai']
                        ];
                    @endphp
                    @foreach($locations as $location)
                        <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:-translate-y-2 transition-all duration-500">
                            <div class="w-14 h-14 mx-auto rounded-xl bg-gradient-to-br from-[#0a1a3f] to-[#1a3a6f] flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-[#0a1a3f]">{{ $location['region'] }}</h4>
                            <p class="text-gray-500 mt-2">{{ $location['cities'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>

@push('scripts')
<script>
function contactForm() {
    return {
        formData: {
            fullName: '',
            company: '',
            email: '',
            phone: '',
            service: '',
            message: ''
        },
        isSubmitting: false,
        isSubmitted: false,
        
        async handleSubmit() {
            this.isSubmitting = true;
            // Simulate form submission
            await new Promise(resolve => setTimeout(resolve, 1500));
            this.isSubmitting = false;
            this.isSubmitted = true;
        },
        
        resetForm() {
            this.formData = {
                fullName: '',
                company: '',
                email: '',
                phone: '',
                service: '',
                message: ''
            };
            this.isSubmitted = false;
        }
    }
}
</script>
@endpush
@endsection
