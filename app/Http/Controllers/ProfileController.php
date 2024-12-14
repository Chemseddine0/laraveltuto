<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function index()
    {
        //  $profiles=Profile::all(); ---> all donees
        $profiles = Profile::paginate(9);
        // dd(Profile::all());
        return view('profile.index', compact('profiles'));
    }
    public function show(Request $request)
    {
        $id = (int)$request->id; //Ajouter (int) pour la conversion de la valeur de l'id en entier
        // $Profile=Profile::find($id);
        $profile = Profile::findOrFail($id);
        // if($Profile === NULL){
        //     return abort(403);
        // }

        // dd($Profile);   AFICHER LE PROFILE
        //  dd($request ->id);

        // return "profile by id + $id";
        return view('profile.show', compact('profile'));
    }
    public function create()
    {

        return view('profile.create');
    }
    public function store(Request $request)
    {
        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $bio = $request->bio;

        // Validation
        
        $request->validate([
            'name' => 'required',

        ]);
        // Insertion

        Profile::create($request->post());
            // Profile::create([
            //     'name'=> $name, 
            //     'email'=> $email,
            //     'password'=> Hash::make($password),
            //     'bio'=> $bio,
            // ]);


        // dd($request);
        return redirect()->route('profiles.index');
        // return view('profile.store');
    }
}
