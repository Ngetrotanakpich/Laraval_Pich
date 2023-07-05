<?php

use App\Http\Controllers\Tour_controller;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\user_comment_china_package;
use App\Models\user_comment_switzerland_package;
use App\Models\user_comment_thailand_package;
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

//-----
Route::get('/login', function () {
    return view('sign_in');
})->name("login");



Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup',[LoginController::class,'process_signup'] );
Route::post('/signin',[LoginController::class,'process_login'] );

//-----

Route::get('/sign_in', function () {
    return view('sign_in');
})->name("sign_in");

Route::get('/guide', function () {
    return view('guide');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/switzerland', function () {
    return view('switzerland');
});
Route::get('/china', function () {
    return view('china');
});
Route::get('/thailand', function () {
    return view('thailand');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
/*
Route::get('/booking', function () {
    return view('booking');
});
*/
Route::get('dashboard/mainform', function () {
    return view('/dashboard/mainform');
});
Route::get('dashboard/booking', function () {
    return view('/dashboard/booking');
});
Route::get('dashboard/signin', function () {
    return view('/dashboard/signin');
});


Route::get('/user', function () {
    return view('user');
});

// Route::get('/bookhistory', function () {
//     return view('bookhistory');
// });
Route::get('/china', [Tour_controller::class, 'getUserCommentForm'])->name('china');
Route::post('/china', [Tour_controller::class, 'china'])->name('china');
Route::get('/tbl_user_comment_china_package', [Tour_controller::class, 'getUserCommentData'] );

//User comment switzerland package
Route::get('/switzerland', [Tour_controller::class, 'getUserCommentForm'])->name('switzerland');
Route::post('/switzerland', [Tour_controller::class, 'switzerland'])->name('switzerland');
Route::get('/tbl_user_comment_switzerland_package', [Tour_controller::class, 'getUserCommentData'] );

//User comment china package
Route::get('/thailand', [Tour_controller::class, 'getUserCommentForm'])->name('thailand');
Route::post('/thailand', [Tour_controller::class, 'thailand'])->name('thailand');
Route::get('/tbl_user_comment_thailand_package', [Tour_controller::class, 'getUserCommentData'] );






//

// Protected group by middleware
Route::group(["middleware" => ["auth"]], function(){


        Route::get('/userhistory', [Tour_controller::class, 'view']);

        Route::get('/booking', [Tour_controller::class, 'add']);
        // Route::post('/booking', [Tour_controller::class, 'booking'])->name('booking'); // Use "form.store" as the route name
        Route::post('/booking', [Tour_controller::class, 'booking'])->name('booking');


        Route::get('/view', [Tour_controller::class, 'view'])->name('view');

        Route::get('/edit/{id}', [Tour_controller::class, 'edit']);
        Route::post('/edit', [Tour_controller::class, 'edit_value'])->name('edit.update'); // Use "edit.update" as the route name

        Route::get('/delete/{id}', [Tour_controller::class, 'delete']);
});