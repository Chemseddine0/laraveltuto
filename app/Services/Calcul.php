<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Calcul {
    public  function __construct(Request $request)
    {

    }
    public function somme($a ,$b){
        return $a + $b;
        }
}
