<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Registration;
use function Illuminate\Support\defer;

Route::get('/', function(){
    return redirect('/ro', 302);
});

Route::get('/ro', function (){

    session(['site_lang' => 'ro']);

    App::setLocale('ro');

    return view('front.home-ro');
});

Route::get('/ru', function (){

    session(['site_lang' => 'ru']);

    App::setLocale('ru');

    return view('front.home-ru');
});

//Route::view('/ro', 'front.home-ro');
//Route::view('/ru', 'front.home-ru');

Route::post('register-user', function (Request $request){

    App::setLocale(session('site_lang'));

    $validated = $request->validate([
        'name' => 'required|min:3',
        'email' => 'nullable|email',
        'phone' => 'required|phone:INTERNATIONAL,MD',
        'message' => 'nullable|min:3',
    ]);

    Registration::create($validated);

    defer(fn () => Mail::to(config('mail.from.address'))->send(new \App\Mail\NewCourseRequest($validated)));

    return response()->json(__('form.success'), 200);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
