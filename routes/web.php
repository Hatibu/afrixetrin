<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
        'service' => 'nullable|string',
        'company' => 'nullable|string',
        'phone' => 'nullable|string',
    ]);

    // Here you can save to DB or send email (Mail::to()...)
    // Example: ContactMessage::create($request->all());

    return redirect()->route('contact')->with('success', true);
})->name('contact.store');

Route::get('/quote', function () {
    return view('pages.quote');
})->name('quote');

Route::post('/quote', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'cargo_type' => 'required|string|max:255',
        'cargo_description' => 'nullable|string',
        'weight' => 'nullable|numeric|min:0',
        'volume' => 'nullable|numeric|min:0',
        'quantity' => 'nullable|integer|min:0',
        'origin' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'shipping_method' => 'nullable|string',
        'services' => 'nullable|array',
        'services.*' => 'string',
        'insurance' => 'nullable|string',
        'full_name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'notes' => 'nullable|string',
    ]);

    // Here you can save to DB or send email (Mail::to()...)
    // Example: QuoteRequest::create($request->all());

    return redirect()->route('quote')->with('success', true);
})->name('quote.store');
