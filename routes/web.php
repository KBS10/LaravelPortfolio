<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function(Request $request){
    $loginInfo = User::where('email', $request->input('email'))
        ->where('password', $request->input('password'))
        ->first();
    $loginCount = User::where('email', $request->input('email'))
        ->where('password', $request->input('password'))
        ->count();
    if( $loginCount == 1){
        $request->session()->put('Login', 1);
        return view('main', $loginInfo);
    }else{
        return view('login');
    }
});

Route::post('/Check',function(Request $request){
    $value = $request->session()->get('Login');
    if ($request->session()->has('Login')) {
        return $value;
    }else{
        return "실패";
    }
});

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index');

    Route::get('/portfolio', 'DashboardController@portfolio');
});


//Route::get('/create', 'BlogController@create')->name('blogs.create')->middleware('auth');
