<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationsRequest;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth')->except(['show','index']);
        // $this->middleware('auth')->only(['show']);
    }
    public function index()
    {
             //  $profiles=Profile::all(); ---> all donees
            //  $publications = Publication::paginate(9);
            //  dd(Publication::all());
            // $publications =  Publication::latest()->get();
            $publications =  Publication::latest()->paginate(11);
            //   dd(Publication::latest()->get());
             return view('publications.index', compact('publications'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("publications.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationsRequest $request)
    {
        // dd(Auth::id());
        $formFields = $request->validated();
        $this->uploadImage($request,$formFields);
        $formFields['profile_id']=Auth::id();
        // Insertion
        Publication::create($formFields);
        return redirect()->route('publications.index')->with('success', 'Votre compte est bien cree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
        return view('profile.show', compact('publication'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //methode basic try gate
                // verify if id user === piblication user id
        // if(!Gate::allows ('update-publication', $publication)){
        //     abort(403);

        // }
    //     Profile  $profiler,Publication $publication
    //    dd(Gate::allows ('update-publication', $publication));
        Gate::authorize('update-publication', $publication);
        return view("publications.edit", compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationsRequest $request, Publication $publication)
    {
        // verify if id user === piblication user id
        // if(Auth::id() !== $publication->profile_id){
        //     abort(404);
        //     dd('dont have permission');
        // }
        Gate::authorize('update-publication', $publication);

        $formFields = $request->validated();
        $this->uploadImage($request,$formFields);
        $publication->fill($formFields)->save();
        return to_route('publications.index',$publication->id)->with('success','la publication a ete bien Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();

        return to_route('publications.index')->with('danger','le profile a ete bien supprimer');
    }
    public function uploadImage(PublicationsRequest $request,array &$formFields){
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('publication','public');
        }


    }
}
