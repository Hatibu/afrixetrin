@extends('layouts.app')

@section('title', 'Request a Quote - Afrixetrin')

@section('content')
{{-- Hero Section
<section class="relative py-24 lg:py-32 bg-[#0a1a3f] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=2000&q=80"
             alt="Containers" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl" data-aos="fade-up">
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

{{-- Multi-Step Quote Form --}}
<section class="py-24 lg:py-32">
    <div class="max-w-4xl mx-auto px-6">
        @if(session('success'))
            {{-- Success State --}}
            <div class="text-center py-20" data-aos="fade-up">
                <div class="w-24 h-24 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-8">
                    <i class="ph-check-circle ph-bold text-6xl text-green-600"></i>
                </div>
                <h2 class="text-4xl font-bold text-[#0a1a3f] mb-4">Quote Request Received!</h2>
                <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">
                    Thank you for your request. Our team will review your requirements and send you a detailed quote within 24-48 hours.
                </p>

                <div class="bg-white rounded-3xl p-8 shadow-xl max-w-2xl mx-auto text-left mb-10">
                    <h4 class="font-bold text-[#0a1a3f] mb-6 text-lg">What happens next?</h4>
                    <ol class="space-y-4">
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 font-bold flex items-center justify-center justify-center flex-shrink-0">1</div>
                            <span class="text-gray-700">Our team reviews your cargo details</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 font-bold flex items-center justify-center flex-shrink-0">2</div>
                            <span class="text-gray-700">We calculate the best rates and routes</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 font-bold flex items-center justify-center flex-shrink-0">3</div>
                            <span class="text-gray-700">You receive a detailed quote via email</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 font-bold flex items-center justify-center flex-shrink-0">4</div>
                            <span class="text-gray-700">We schedule a call to discuss further</span>
                        </li>
                    </ol>
                </div>

                <a href="{{ route('quote') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-500/30 transition">
                    Submit Another Request
                    <i class="ph-arrow-right"></i>
                </a>
            </div>
        @else
            <form action="{{ route('quote.store') }}" method="POST" x-data="{ step: 1 }">
                @csrf

                {{-- Progress Steps --}}
                <div class="flex justify-between items-center mb-12">
                    @php
                        $steps = [
                            ['num' => 1, 'title' => 'Cargo Details', 'icon' => 'package'],
                            ['num' => 2, 'title' => 'Route & Service', 'icon' => 'map-pin'],
                            ['num' => 3, 'title' => 'Contact Info', 'icon' => 'user']
                        ];
                    @endphp

                    @foreach($steps as $index => $s)
                        <div class="flex items-center">
                            <div class="flex items-center gap-3" :class="step >= {{ $s['num'] }} ? 'opacity-100' : 'opacity-40'">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center transition-all"
                                     :class="step >= {{ $s['num'] }} ? 'bg-gradient-to-br from-amber-500 to-amber-600 text-white' : 'bg-gray-200 text-gray-500'">
                                    <i class="ph-{{ $s['icon'] }} ph-bold text-lg"></i>
                                </div>
                                <span class="hidden md:block font-medium" :class="step >= {{ $s['num'] }} ? 'text-[#0a1a3f]' : 'text-gray-400'">{{ $s['title'] }}</span>
                            </div>
                            @if($index < count($steps) - 1)
                                <div class="hidden sm:block w-20 lg:w-32 h-1 mx-4 rounded-full transition-colors"
                                     :class="step > {{ $s['num'] }} ? 'bg-amber-500' : 'bg-gray-200'"></div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100">
                    {{-- Step 1: Cargo Details --}}
                    <div x-show="step === 1" x-transition>
                        <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Cargo Details</h3>
                        <p class="text-gray-500 mb-8">Tell us about your shipment</p>

                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Cargo Type *</label>
                                <select name="cargo_type" class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20" required>
                                    <option value="">Select cargo type</option>
                                    @foreach(['General Cargo','Containerized','Bulk Cargo','Hazardous Materials','Perishable Goods','Oversized/Heavy Lift','Vehicles','Electronics','Textiles','Other'] as $type)
                                        <option value="{{ $type }}" {{ old('cargo_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                                @error('cargo_type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Cargo Description</label>
                                <textarea name="cargo_description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">{{ old('cargo_description') }}</textarea>
                            </div>

                            <div class="grid md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Weight (kg)</label>
                                    <input type="number" name="weight" value="{{ old('weight') }}" placeholder="e.g., 1000" class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Volume (CBM)</label>
                                    <input type="number" step="0.01" name="volume" value="{{ old('volume') }}" placeholder="e.g., 25" class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                                    <input type="number" name="quantity" value="{{ old('quantity') }}" placeholder="e.g., 500" class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 2: Route & Service --}}
                    <div x-show="step === 2" x-transition>
                        <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Route & Service</h3>
                        <p class="text-gray-500 mb-8">Where is your cargo going and how?</p>

                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Origin *</label>
                                <input type="text" name="origin" value="{{ old('origin') }}" placeholder="City, Country" required class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                @error('origin') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Destination *</label>
                                <input type="text" name="destination" value="{{ old('destination') }}" placeholder="City, Country" required class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                @error('destination') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-700 mb-4">Preferred Shipping Method</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach([
                                    ['value' => 'sea_fcl', 'label' => 'Sea Freight (FCL)', 'icon' => 'ship'],
                                    ['value' => 'sea_lcl', 'label' => 'Sea Freight (LCL)', 'icon' => 'ship'],
                                    ['value' => 'air', 'label' => 'Air Freight', 'icon' => 'paper-plane-tilt'],
                                    ['value' => 'road', 'label' => 'Road Transport', 'icon' => 'truck'],
                                    ['value' => 'multimodal', 'label' => 'Multimodal', 'icon' => 'package']
                                ] as $method)
                                    <label class="flex flex-col p-4 rounded-xl border-2 cursor-pointer transition-all has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50">
                                        <input type="radio" name="shipping_method" value="{{ $method['value'] }}" {{ old('shipping_method') == $method['value'] ? 'checked' : '' }} class="sr-only">
                                        <i class="ph-{{ $method['icon'] }} ph-bold text-2xl mb-2 mx-auto text-gray-400 has-[:checked]:text-amber-600"></i>
                                        <span class="text-sm font-medium text-center">{{ $method['label'] }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-700 mb-4">Services Required</label>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach(['Customs Clearance','Freight Forwarding','Warehousing','Distribution','Cargo Insurance','Documentation','Door-to-Door Delivery'] as $service)
                                    <label class="flex items-center gap-3 p-4 rounded-xl border-2 cursor-pointer transition-all has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50">
                                        <input type="checkbox" name="services[]" value="{{ $service }}" {{ is_array(old('services')) && in_array($service, old('services')) ? 'checked' : '' }} class="w-5 h-5 text-amber-600 rounded focus:ring-amber-500">
                                        <span class="text-sm font-medium">{{ $service }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">Do you need cargo insurance?</label>
                            <div class="flex gap-4">
                                @foreach(['Yes', 'No', 'Not Sure'] as $option)
                                    <label class="flex items-center gap-2 px-5 py-3 rounded-xl border-2 cursor-pointer transition-all has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50">
                                        <input type="radio" name="insurance" value="{{ $option }}" {{ old('insurance') == $option ? 'checked' : '' }} class="sr-only">
                                        <div class="w-5 h-5 rounded-full border-2 border-gray-300 has-[:checked]:border-amber-500 has-[:checked]:bg-amber-500"></div>
                                        <span>{{ $option }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Step 3: Contact Info --}}
                    <div x-show="step === 3" x-transition>
                        <h3 class="text-2xl font-bold text-[#0a1a3f] mb-2">Contact Information</h3>
                        <p class="text-gray-500 mb-8">How can we reach you?</p>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="full_name" value="{{ old('full_name') }}" required class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                @error('full_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" name="company" value="{{ old('company') }}" class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" required class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">
                                @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Additional Notes</label>
                            <textarea name="notes" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-amber-500 focus:ring-4 focus:ring-amber-500/20">{{ old('notes') }}</textarea>
                        </div>
                    </div>

                    {{-- Navigation Buttons --}}
                    <div class="flex justify-between items-center mt-12 pt-8 border-t">
                        <button type="button" x-show="step > 1" @click="step--" class="px-8 h-12 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                            Back
                        </button>
                        <div></div> {{-- Spacer --}}

                        @if(request()->input('step') != 3)
                            <button type="button" @click="step++" class="px-8 h-12 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl font-semibold hover:shadow-xl hover:shadow-amber-500/30 transition flex items-center gap-2">
                                Continue
                                <i class="ph-arrow-right"></i>
                            </button>
                        @else
                            <button type="submit" class="px-8 h-12 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl font-semibold hover:shadow-xl hover:shadow-amber-500/30 transition flex items-center gap-3">
                                Submit Quote Request
                                <i class="ph-check-circle"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </form>

            {{-- Trust Indicators --}}
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                @foreach([
                    ['icon' => 'file-text', 'text' => 'No Obligation'],
                    ['icon' => 'shield-check', 'text' => 'Secure Data'],
                    ['icon' => 'phone', 'text' => '24hr Response'],
                    ['icon' => 'check-circle', 'text' => 'Free Quote']
                ] as $item)
                    <div class="flex flex-col items-center text-gray-600">
                        <i class="ph-{{ $item['icon'] }} ph-bold text-3xl text-amber-500 mb-2"></i>
                        <span class="text-sm font-medium">{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

{{-- Alpine.js for step navigation (add to layout) --}}
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
