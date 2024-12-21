<?php
use App\Http\Controllers\homeController; //import controller homeController
use App\Http\Controllers\ProfileController; //import controller ProfileController
use App\Http\Controllers\InfoController; //import controller InfoController
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Services\Calcul;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;



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
Route::resource('publications',PublicationController::class);

route::middleware(['guest'])->group(function () {
    
    Route::controller( LoginController::class)->group(function(){
        Route::get('/login', 'show')->name('login.show');
        Route::post('/login', 'login')->name('login');
        // Route::get('/', [homeController::class,'index'])->name( 'home')->withoutMiddleware('guest');
     });
});


Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');
// Route::get('/', [homeController::class,'index'])->name(name: 'home')->middleware('auth');
Route::get('/', [PublicationController::class,'index'])->name('publications.index');

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



Route::view('/form','form');
// Route::post('/form',function(Request $request) {
//         // dd($request->date('input_field')->addDay());
        
//         $request->mergeIfMissing(['input_field'=>date('Y-m-d')]);
//         dd($request->input('input_field'));
//         //only
//         //except    
//         // $request->hasAny(['input_field','input_field2']);
//         // $request->missing(['input_field','input_field2']);
//         // $request->whenHas(['input_field','input_field2'],function(){});
// })->name('form');


//Response (download,afficher)


Route::get('/salam',function() {
    // $response = new Response( 'salam',500  );
    // return $response ;
    //Response (download,afficher)
    return Response()->download('storage/profile/default.png','name fichier',[],'inline');
    // $response = new Response(  )->file();
   
});


// php artisan route:cache 
// php artisan route:clear

//Cookies (create,destroy)
    Route::get('/cookie/get',function(Request $request) {
        dd($request->cookie('age'));
    });
    Route::get('/cookie/set/{cookie}',function($cookie) {
        $response = new Response();
        $cookieObject=cookie()->forever(    'age',$cookie);
    return  $response->withCookie($cookieObject);
    });

    // Headers + Request 
    //Content-Type :text/plain image/png Application/json
     //cash
      //x-profile =15
    //400,200
    //Server -> navigateur
    Route::get('/headers',function(Request $request) {
        $response = new Response(['data' => 'ok']);

    //   dd($request->header('aa','aa'));
      dd($request->header('host'));
        return  $response->withHeaders( [
            'Content-Type'=> 'Application/json',
              'x-chemseddine'=> 'yes'
            ] );
    });
    // Request
    Route::get('/request',function(Request $request) {
        // dd($request->url(),$request->fullUrl());
        // dd($request->path());
        // dd($request->is('request'));
        // dd($request->host());
        // dd($request->method());
        // dd($request->isMethod('GET'));
        dd($request->ip());
    });