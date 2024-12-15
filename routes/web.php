<?php
use App\Http\Controllers\homeController; //import controller homeController
use App\Http\Controllers\ProfileController; //import controller ProfileController
use App\Http\Controllers\InfoController; //import controller InfoController
use App\Http\Controllers\LoginController;
use App\Services\Calcul;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// route::name('profiles.')->prefix('profiles')->group(function () {
//      Route::controller( ProfileController::class)->group(function(){
//         Route::get('/', 'index')->name('index');
//         Route::get('/create', 'create')->name('create');
//         Route::post('/profiles', 'store')->name('store');
//         Route::delete('/{profile}', 'destroy')->name('destroy');
//         Route::get('/{profile}/edit', 'edit')->name('edit');
//         Route::put('/{profile}', 'update')->name('update');
//         Route::get('/{profile}', 'show')->where('profile','\d+')  ->name('show');
//      });
// } );

Route::resource('profiles',ProfileController::class);

route::middleware(['guest'])->group(function () {
    
    Route::controller( LoginController::class)->group(function(){
        Route::get('/login', 'show')->name('login.show');
        Route::post('/login', 'login')->name('login');
        // Route::get('/', [homeController::class,'index'])->name( 'home')->withoutMiddleware('guest');
     });
});


Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');
// Route::get('/', [homeController::class,'index'])->name(name: 'home')->middleware('auth');
Route::get('/', [homeController::class,'index'])->name( 'home');

Route::get('/age/{age?}',function($age= null) {
    if (empty($age)) {

        return 'age inconnue';
    }
return 'age =>'. $age;
});// faccultatif


Route::get('/route',function() {
    dd(Route::current());
    dd(Route::currentRouteName());
    dd(Route::currentRouteAction());

})->name('route');


// send user to extern site
Route::get('/google',function() {
 return redirect()->away('https://www.google.co.uk/');

})->name('google');

Route::get('/somme/{a}/{b}',function($a,$b,Calcul $calcul) {
    
    return $calcul->somme($a,$b);
});//couplage faible




Route::get('/settings', [InfoController::class,'index'])->name('settings.index');











// php artisan route:cache 
// php artisan route:clear