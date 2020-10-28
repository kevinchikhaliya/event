<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

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
//first



Route::get('/', function () {
    return view('login');
});

// Route::view('event-list','event-list');


// Route::view('institutes','institutes');

Route::get('signUp',[userController::class,'register1']);

Route::post('register', [userController::class,'register']);

Route::post('login', [userController::class,'login']);

Route::get('logout', [userController::class,'logout']);

Route::get('index', [userController::class,'dashboard']);

Route::get('login', [userController::class,'login_view']);


Route::post('event-list', [userController::class,'addEvent']);
Route::post('edit-event-list', [userController::class,'updateEvent']);
Route::get('delete/{id}',[userController::class,'delete']);
Route::get('event-list', [userController::class,'myevent']);
Route::post('createevent', [userController::class,'addEvent']);



Route::get('events', [userController::class,'show']);

Route::get('single/{id}',[userController::class,'singleEvent']);

Route::post('takePart', [userController::class,'takePart']);


Route::get('/createevent', function () {
    return view('createevent');
});


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware(['guest'])->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware(['guest'])->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
    

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => md5($password)
            ])->save();
               
            $user->setRememberToken(Str::random(60));

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect('login')->with('status', __($status))
                : back()->withErrors(['email' => __($status)]);
})->middleware(['guest'])->name('password.update');




