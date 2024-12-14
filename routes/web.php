<?php
use App\Http\Controllers\homeController; //import controller homeController
use App\Http\Controllers\ProfileController; //import controller ProfileController
use App\Http\Controllers\InfoController; //import controller InfoController
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [homeController::class,'index'])->name(name: 'home');
Route::get('/profiles', [ProfileController::class,'index'])->name('profiles.index');
Route::get('/profiles/{id}', [ProfileController::class,'show'])
->where('id','\d+')  //only int on id
->name('profiles.show');

Route::get('/settings', [InfoController::class,'index'])->name('settings.index');

Route::get('/profiles/create', [ProfileController::class,'create'])->name('create');

Route::post('/profiles/store', [ProfileController::class,'store'])->name('store');






// Route::get('/hello/{nom}/{prenom}', function (Request $request) {
// dd($request-> nom);

//     return view('hello',[
//         'nom' => $nom,
//         'prenom' => $prenom

//     ]);
// });







// Route::get('/hello', function () {
//     $nom="chemsedine";
//     return view('hello',[
//         'nom' => $nom,
//         'prenom' => "Bouzidy",
//         'cours' => ['php','html','MVC']
//     ]);
// });
