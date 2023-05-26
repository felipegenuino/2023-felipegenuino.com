<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


Route::resources([
    // 'works' => WorkController::class,
    'posts' => PostController::class
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('send-mail', function () {
//     $details = [
//         'title' => 'Mail from felipegenuino.com',
//         'body' => 'This is for testing email using smtp'
//     ];
//     Mail::to('guntaurus@gmail.com')->send(new \App\Mail\MyTestMail($details));
//     //dd("Email is Sent.");
// });


require __DIR__ . '/auth.php';
