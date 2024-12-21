<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
        public function __construct(){
            $this->middleware('auth')->except(['show','create','store']);
            // $this->middleware('auth')->only(['show']);
        }
    //
    public function index()
    {
        //  $profiles=Profile::all(); ---> all donees
        $profiles = Profile::paginate(9);
        // dd(Profile::all());
        return view('profile.index', compact('profiles'));
        // return view('publications.index', compact('profiles'));

    }
    public function show(Profile $profile)
    {
        // $id = (int)$request->id; 
        //Ajouter (int) pour la conversion de la valeur de l'id en entier

        // $Profile=Profile::find($id);

        // $profile = Profile::findOrFail($id);
        // if($Profile === NULL){
        //     return abort(403);
        // }

        //dd($id);   //AFICHER LE PROFILE
        //   dd($profile ->id);

        // return "profile by id + $id";
        return view('profile.show', compact('profile'));
    }
    public function create()
    {

        return view('profile.create');
    }
    public function store(ProfileRequest $request)
    {
        // Validation
        $formFields = $request->validated();
        
        //Hash
        $formFields['password'] = Hash::make($request->password);
        // dd($formFields);

    //    $fileName =$request->file('image')->store('profile','public');
    //    $formFields['image'] = $fileName;
    $this->uploadImage($request,$formFields);
        // Insertion
        Profile::create($formFields);





        //redirection

        //redirect('/home')
        //redirect()->route(...)=>to_route(...)
        //redirect()->action(...)
        //back()
        //back()->withinput()

        return redirect()->route('profiles.index')->with('success', 'Votre compte est bien cree');
    }
    public function destroy(Profile $profile)
    {

        $profile->delete();

        return to_route('profiles.index')->with('danger','le profile a ete bien supprimer');
    }
    public function edit(Profile $profile)
    {
     return view('profile.edit', compact('profile'));
    }

    public function update(ProfileRequest $request,Profile $profile)
    {
        $formFields = $request->validated();

     //Hash
     $formFields['password'] = Hash::make($request->password);
      
    //  $fileName =$request->file('image')->store('profile','public');
      $this->uploadImage($request,$formFields);
     
        $profile->fill($formFields)->save();
     
        // $profile->update($formFields);
        return to_route('profiles.show',$profile->id)->with('success','le profile a ete bien Modifier');

    }
        public function uploadImage(ProfileRequest $request,array &$formFields){
            unset($formFields['image']);
            if($request->hasFile('image')){
                $formFields['image'] = $request->file('image')->store('profile','public');
            }


        }
}
