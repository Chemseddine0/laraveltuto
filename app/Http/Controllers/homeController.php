<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(Request $request){
        // $nom =$request -> nom;
        $nom ="chemsedidne";
        $prenom ="bouzidy";
        $languages=['php','html','css'];
        $color="green";
        $examen=[];
        $n1=20;
        $n2=10;
     $users=[
        ['id'=>'1','nom'=>'jamaoui','metier'=>'Expert Technique'],
        ['id'=>'2','nom'=>'Chemseddine','metier'=>'Testeur '],
        ['id'=>'3','nom'=>'Kamal','metier'=>'Directeur tehnique'],
        ['id'=>'4','nom'=>'Hassan','metier'=>'Jardinier'],
    ];
        return view('home',compact('nom','languages','prenom','examen','color','n1','n2','users'));
    }
}
