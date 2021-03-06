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
use App\Models\User;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth' ]], function(){


    Route::get('/', 'FrontEnd\Services@index');
Route::namespace('BackEnd')->prefix('admin')->group(function() {

    Route::get('/', 'Home@home')->name('admin.home');


        Route::resource('Users', 'Users')->except(['show'])->middleware(['role:super-admin']);


        Route::resource('Services', 'Services')->except(['show'])->middleware(['role:super-admin|moderator']);

        Route::resource('Services/Categories', 'ServiceCategories')->except(['show'])->middleware(['role:super-admin|moderator']);


    Route::post ('/search', function () {
        $q = Input::get ( 'q' );
        if($q != "") {
            $user = User::where('name', 'LIKE', '%' . $q . '%')->orWhere('email', 'LIKE', '%' . $q . '%')->get();
            if (count($user) > 0)
                return view('back-end.home')->withDetails($user)->withQuery($q);
            else
                return view ( 'back-end.home' )->withMessage ( 'No Details found. Try to search again !' );

        }
    });


});



});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
