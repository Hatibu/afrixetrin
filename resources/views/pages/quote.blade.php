@extends('layouts.app')

@section('title', 'Request a Quote - Afrixetrin')

@section('content')
@php
    $cargoTypes = [
        'General Cargo',
        'Containerized',
        'Bulk Cargo',
        'Hazardous Materials',
        'Perishable Goods',
        'Oversized/Heavy Lift',
        'Vehicles',
        'Electronics',
        'Textiles',
        'Other'
    ];

    $shippingMethods = [
        ['value' => 'sea_fcl', 'label' => 'Sea Freight (FCL)', 'icon' => 'Ship'],
        ['value' => 'sea_lcl', 'label' => 'Sea Freight (LCL)', 'icon' => 'Ship'],
        ['value' => 'air', 'label' => 'Air Freight', 'icon' => 'Plane'],
        ['value' => 'road', 'label' => 'Road Transport', 'icon' => 'Truck'],
        ['value' => 'multimodal', 'label' => 'Multimodal', 'icon' => 'Package']
    ];

    $availableServices = [
        'Customs Clearance',
        'Freight Forwarding',
        'Warehousing',
        'Distribution',
        'Cargo Insurance',
        'Documentation',
        'Door-to-Door Delivery'
    ];

    $steps = [
        ['number' => 1, 'title' => 'Cargo Details', 'icon' => 'Package'],
        ['number' => 2, 'title' => 'Route & Service', 'icon' => 'MapPin'],
        ['number' => 3, 'title' => 'Contact Info', 'icon' => 'User']
    ];
@endphp

<div x-data="quoteForm()">
    {{-- Hero Section --}}
    <section class="relative py-24 lg:py-32 bg-[#0a1a3f]">
        <div class="absolute inset-0 opacity-20">
            <img
                src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=2000&q=80"
                alt="Containers"
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
                    Get a Quote
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Request Your <span class="text-amber-400">Free Quote</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 leading-relaxed">
                    Tell us about your cargo and we'll provide you with the best shipping solution tailored to your needs.
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
            <h2 class="text-3xl font-bold text-[#0a1a3f] mb-4">Quote Request Received!</h2>
            <p class="text-gray-600 mb-8">
                Thank you for your request. Our team will review your requirements and send you a detailed quote within 24-48 hours.
            </p>
            <div class="bg-white rounded-2xl p-6 shadow-lg text-left mb-8">
                <h4 class="font-semibold text-[#0a1a3f] mb-4">What happens next?</h4>
                <ul class="space-y-3">
                    @php
                        $nextSteps = [
                            'Our team reviews your cargo details',
                            'We calculate the best rates and routes',
                            'You receive a detailed quote via email',
                            'We schedule a call to discuss further'
                        ];
                    @endphp
                    @foreach($nextSteps as $index => $item)
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 font-semibold text-xs">
                                {{ $index + 1 }}
                            </div>
                            <span class="text-gray-600">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button
                @click="resetForm()"
                class="bg-gradient-to-r from-amber-500 to-amber-600 hover:shadow-lg hover:shadow-amber-500/30 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300"
            >
                Submit Another Request
            </button>
        </div>
    </div>

    {{-- Quote Form --}}
    <div x-show="!isSubmitted">
        <section class="py-24 lg:py-32">
            <div class="max-w-4xl mx-auto px-6">
                {{-- Progress Steps --}}
                <div class="flex justify-between items-center mb-12">
                    @foreach($steps as $index => $s)
                        <div class="flex items-center">
                            <div :class="`flex items-center gap-3 ${step >= {{ $s['number'] }} ? 'opacity-100' : 'opacity-40'}`">
                                <div :class="`w-12 h-12 rounded-full flex items-center justify-center transition-all duration-500 ${
                                    step >= {{ $s['number'] }} 
                                        ? 'bg-gradient-to-br from-amber-500 to-amber-600 text-white' 
                                        : 'bg-gray-200 text-gray-500'
                                }`">
                                    @if($s['icon'] === 'Package')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg>
                                    @elseif($s['icon'] === 'MapPin')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    @elseif($s['icon'] === 'User')
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    @endif
                                </div>
                                <span class="hidden md:block font-medium text-[#0a1a3f]">{{ $s['title'] }}</span>
                            </div>
                            @if($index < count($steps) - 1)
                                <div :class="`hidden sm:block w-16 lg:w-32 h-1 mx-4 rounded-full transition-colors duration-500 ${
                                    step > {{ $s['number'] }} ? 'bg-amber-500' : 'bg-gray-200'
                                }`"></div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div
                    x-show="step === 1"
                    x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 translate-x-5"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100"
                >
                    {{-- Step 1: Cargo Details --}}
                    <div class="space-y-6">
                            <div>
                                <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Cargo Details</h3>
                                <p class="text-gray-500">Tell us about your shipment</p>
                            </div>

                            <div class="space-y-2">
                                <label for="cargoType" class="block text-sm font-medium text-gray-700">Cargo Type *</label>
                                <select
                                    id="cargoType"
                                    x-model="formData.cargoType"
                                    class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                >
                                    <option value="">Select cargo type</option>
                                    @foreach($cargoTypes as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="cargoDescription" class="block text-sm font-medium text-gray-700">Cargo Description</label>
                                <textarea
                                    id="cargoDescription"
                                    x-model="formData.cargoDescription"
                                    placeholder="Describe your cargo (e.g., 500 cartons of electronics)"
                                    rows="3"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none resize-none transition-colors"
                                ></textarea>
                            </div>

                            <div class="grid md:grid-cols-3 gap-6">
                                <div class="space-y-2">
                                    <label for="weight" class="block text-sm font-medium text-gray-700">Weight (kg)</label>
                                    <input
                                        type="number"
                                        id="weight"
                                        x-model="formData.weight"
                                        placeholder="e.g., 1000"
                                        class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                    />
                                </div>
                                <div class="space-y-2">
                                    <label for="volume" class="block text-sm font-medium text-gray-700">Volume (CBM)</label>
                                    <input
                                        type="number"
                                        id="volume"
                                        x-model="formData.volume"
                                        placeholder="e.g., 25"
                                        class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                    />
                                </div>
                                <div class="space-y-2">
                                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                                    <input
                                        type="number"
                                        id="quantity"
                                        x-model="formData.quantity"
                                        placeholder="e.g., 500"
                                        class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    x-show="step === 2"
                    x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 translate-x-5"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100"
                >
                    {{-- Step 2: Route & Service --}}
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Route & Service</h3>
                            <p class="text-gray-500">Where is your cargo going and how?</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="origin" class="block text-sm font-medium text-gray-700">Origin *</label>
                                <input
                                    type="text"
                                    id="origin"
                                    x-model="formData.origin"
                                    placeholder="City, Country"
                                    required
                                    class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                />
                            </div>
                            <div class="space-y-2">
                                <label for="destination" class="block text-sm font-medium text-gray-700">Destination *</label>
                                <input
                                    type="text"
                                    id="destination"
                                    x-model="formData.destination"
                                    placeholder="City, Country"
                                    required
                                    class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                />
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-700">Preferred Shipping Method</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                @foreach($shippingMethods as $method)
                                    <button
                                        type="button"
                                        @click="formData.shippingMethod = '{{ $method['value'] }}'"
                                        :class="`p-4 rounded-xl border-2 transition-all duration-300 text-left ${
                                            formData.shippingMethod === '{{ $method['value'] }}'
                                                ? 'border-amber-500 bg-amber-50'
                                                : 'border-gray-200 hover:border-gray-300'
                                        }`"
                                    >
                                        @if($method['icon'] === 'Ship')
                                            <svg :class="`w-6 h-6 mb-2 ${
                                                formData.shippingMethod === '{{ $method['value'] }}' ? 'text-amber-600' : 'text-gray-400'
                                            }`" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                            </svg>
                                        @elseif($method['icon'] === 'Plane')
                                            <svg :class="`w-6 h-6 mb-2 ${
                                                formData.shippingMethod === '{{ $method['value'] }}' ? 'text-amber-600' : 'text-gray-400'
                                            }`" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                            </svg>
                                        @elseif($method['icon'] === 'Truck')
                                            <svg :class="`w-6 h-6 mb-2 ${
                                                formData.shippingMethod === '{{ $method['value'] }}' ? 'text-amber-600' : 'text-gray-400'
                                            }`" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        @elseif($method['icon'] === 'Package')
                                            <svg :class="`w-6 h-6 mb-2 ${
                                                formData.shippingMethod === '{{ $method['value'] }}' ? 'text-amber-600' : 'text-gray-400'
                                            }`" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                            </svg>
                                        @endif
                                        <span :class="`text-sm font-medium ${
                                            formData.shippingMethod === '{{ $method['value'] }}' ? 'text-amber-700' : 'text-gray-700'
                                        }`">{{ $method['label'] }}</span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-700">Services Required</label>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($availableServices as $service)
                                    <label
                                        :class="`flex items-center gap-3 p-4 rounded-xl border-2 cursor-pointer transition-all duration-300 ${
                                            formData.services.includes('{{ $service }}')
                                                ? 'border-amber-500 bg-amber-50'
                                                : 'border-gray-200 hover:border-gray-300'
                                        }`"
                                    >
                                        <input
                                            type="checkbox"
                                            :checked="formData.services.includes('{{ $service }}')"
                                            @change="toggleService('{{ $service }}')"
                                            class="sr-only"
                                        />
                                        <div :class="`w-5 h-5 rounded border-2 flex items-center justify-center ${
                                            formData.services.includes('{{ $service }}')
                                                ? 'bg-amber-500 border-amber-500'
                                                : 'border-gray-300'
                                        }`">
                                            <template x-if="formData.services.includes('{{ $service }}')">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </template>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700">{{ $service }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-700">Do you need cargo insurance?</label>
                            <div class="flex gap-4">
                                @foreach(['Yes', 'No', 'Not Sure'] as $option)
                                    <label
                                        :class="`flex items-center gap-2 px-4 py-3 rounded-xl border-2 cursor-pointer transition-all duration-300 ${
                                            formData.insuranceRequired === '{{ $option }}'
                                                ? 'border-amber-500 bg-amber-50'
                                                : 'border-gray-200 hover:border-gray-300'
                                        }`"
                                    >
                                        <input
                                            type="radio"
                                            name="insurance"
                                            value="{{ $option }}"
                                            x-model="formData.insuranceRequired"
                                            class="sr-only"
                                        />
                                        <div :class="`w-4 h-4 rounded-full border-2 flex items-center justify-center ${
                                            formData.insuranceRequired === '{{ $option }}'
                                                ? 'border-amber-500'
                                                : 'border-gray-300'
                                        }`">
                                            <template x-if="formData.insuranceRequired === '{{ $option }}'">
                                                <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                                            </template>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700">{{ $option }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    x-show="step === 3"
                    x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 translate-x-5"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100"
                >
                    <form @submit.prevent="handleSubmit">
                        {{-- Step 3: Contact Info --}}
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Contact Information</h3>
                                <p class="text-gray-500">How can we reach you?</p>
                            </div>

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
                                    <label for="company" class="block text-sm font-medium text-gray-700">Company Name</label>
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
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        x-model="formData.phone"
                                        placeholder="+1 (234) 567-890"
                                        required
                                        class="w-full h-12 px-4 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none transition-colors"
                                    />
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="additionalNotes" class="block text-sm font-medium text-gray-700">Additional Notes</label>
                                <textarea
                                    id="additionalNotes"
                                    x-model="formData.additionalNotes"
                                    placeholder="Any special requirements or additional information..."
                                    rows="4"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:outline-none resize-none transition-colors"
                                ></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Navigation Buttons --}}
                <div class="flex justify-between mt-10 pt-8 border-t">
                    <template x-if="step > 1">
                        <button
                            type="button"
                            @click="step--"
                            class="h-12 px-8 rounded-xl border-2 border-gray-200 hover:border-gray-300 text-gray-700 font-medium transition-all duration-300"
                        >
                            Back
                        </button>
                    </template>
                    <div x-show="step === 1"></div>
                    
                    <template x-if="step < 3">
                        <button
                            type="button"
                            @click="step++"
                            class="h-12 px-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:shadow-lg hover:shadow-amber-500/30 rounded-xl text-white font-semibold transition-all duration-300 inline-flex items-center gap-2"
                        >
                            Continue
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                    </template>
                    
                    <template x-if="step === 3">
                        <button
                            type="button"
                            @click="handleSubmit()"
                            :disabled="isSubmitting"
                            class="h-12 px-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:shadow-lg hover:shadow-amber-500/30 rounded-xl text-white font-semibold transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed inline-flex items-center gap-2"
                        >
                            <span x-show="!isSubmitting" class="flex items-center gap-2">
                                Submit Quote Request
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <span x-show="isSubmitting" class="flex items-center gap-2">
                                <div class="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                                Submitting...
                            </span>
                        </button>
                    </template>
                </div>

                {{-- Trust Indicators --}}
                <div
                    x-data="{ inView: false }"
                    x-intersect="inView = true"
                    :class="inView ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                    class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 transition-all duration-[600ms]"
                    style="transition-delay: 200ms;"
                >
                    @php
                        $trustIndicators = [
                            ['icon' => 'FileText', 'text' => 'No Obligation'],
                            ['icon' => 'Shield', 'text' => 'Secure Data'],
                            ['icon' => 'Phone', 'text' => '24hr Response'],
                            ['icon' => 'CheckCircle', 'text' => 'Free Quote']
                        ];
                    @endphp
                    @foreach($trustIndicators as $item)
                        <div class="flex items-center gap-3 justify-center text-gray-500">
                            @if($item['icon'] === 'FileText')
                                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            @elseif($item['icon'] === 'Shield')
                                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            @elseif($item['icon'] === 'Phone')
                                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            @elseif($item['icon'] === 'CheckCircle')
                                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                            <span class="text-sm font-medium">{{ $item['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>

@push('scripts')
<script>
function quoteForm() {
    return {
        step: 1,
        isSubmitting: false,
        isSubmitted: false,
        formData: {
            cargoType: '',
            cargoDescription: '',
            weight: '',
            volume: '',
            quantity: '',
            origin: '',
            destination: '',
            shippingMethod: '',
            services: [],
            insuranceRequired: '',
            fullName: '',
            company: '',
            email: '',
            phone: '',
            additionalNotes: ''
        },
        
        toggleService(service) {
            const index = this.formData.services.indexOf(service);
            if (index > -1) {
                this.formData.services.splice(index, 1);
            } else {
                this.formData.services.push(service);
            }
        },
        
        async handleSubmit() {
            this.isSubmitting = true;
            // Simulate form submission
            await new Promise(resolve => setTimeout(resolve, 1500));
            this.isSubmitting = false;
            this.isSubmitted = true;
        },
        
        resetForm() {
            this.formData = {
                cargoType: '',
                cargoDescription: '',
                weight: '',
                volume: '',
                quantity: '',
                origin: '',
                destination: '',
                shippingMethod: '',
                services: [],
                insuranceRequired: '',
                fullName: '',
                company: '',
                email: '',
                phone: '',
                additionalNotes: ''
            };
            this.step = 1;
            this.isSubmitted = false;
        }
    }
}
</script>
@endpush
@endsection
