<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    //
    public function index(){
        //  $profiles=Profile::all(); ---> all donees
        $profiles = Profile::paginate();
        // dd(Profile::all());
        return view('profile',compact('profiles'));
    }
    public function show(Request $request){
        $id= (int)$request->id; //Ajouter (int) pour la conversion de la valeur de l'id en entier
        $Profile=Profile::find($id);
        dd($Profile);
         dd($request ->id);
        return "profile by id + $id";
    }
}
