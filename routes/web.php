<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeLang;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Storage;

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
});


Route::get('language/{locale}', function ($locale) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('language');


Route::get('/download-file/{file_name}', function ($file_name) {
    return response()->download(Storage::path('contact-us-files/'.$file_name), $file_name);
})->name('file.download');
