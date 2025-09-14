<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Http\Request;

// =============================
// Halaman Home (Cover)
// =============================
Route::view('/', 'pages.index')->name('home'); 
// file: resources/views/pages/index.blade.php

// =============================
// Auth
// =============================
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

// =============================
// Invitation
// =============================
Route::view('/invitation', 'pages.invitation')->name('invitation'); 
// file: resources/views/pages/invitation.blade.php

// =============================
// Love Story / Details
// =============================
Route::prefix('details')->name('details.')->group(function () {
    Route::view('/met', 'details.details-met')->name('met');
    Route::view('/journey', 'details.details-journey')->name('journey');
    Route::view('/proposal', 'details.details-proposal')->name('proposal');
    Route::view('/wedding', 'details.details-wedding')->name('wedding');
});
// file: resources/views/details/details-*.blade.php

// =============================
// Form Submissions (RSVP, Wishes, Gift)
// =============================
Route::post('/rsvp-submit', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'attendance' => 'required|in:yes,no',
        'message' => 'nullable|string|max:500',
    ]);

    return redirect()->route('invitation')->with('success', 'RSVP submitted successfully!');
})->name('rsvp.submit');

Route::post('/wishes-submit', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'message' => 'required|string|max:500',
    ]);

    return redirect()->route('invitation')->with('success', 'Your wish has been sent!');
})->name('wishes.submit');

Route::post('/gift-submit', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'message' => 'nullable|string|max:500',
    ]);

    return redirect()->route('invitation')->with('success', 'Gift confirmation submitted successfully!');
})->name('gift.submit');
