<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/member-detail', function () {
    return view('member-detail');
})->name('member-details');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', 'ContactController@store');

Route::get('/contact-confirmation', function () {
    return view('contact-confirmation');
})->name('contact-confirmation');

Route::get('/appointment-confirmation', function () {
    return view('appointment-confirmation');
})->name('appointment-confirmation');

Route::get('/sms/send/{to}', function(\Nexmo\Client $nexmo, $to){
    $message = $nexmo->message()->send([
        'to' => $to,
        'from' => 'NEXMO',
        'text' => 'Sending SMS from Laravel. Woohoo!'
    ]);
    Log::info('sent message: ' . $message['message-id']);
});