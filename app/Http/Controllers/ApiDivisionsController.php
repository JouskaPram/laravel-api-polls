<?php

namespace App\Http\Controllers;

use App\Models\division;
use Illuminate\Http\Request;

class ApiDivisionsController extends Controller
{
    public function getdivisions()
    {
        return division::all();
    }
     public function postdivision()
     {
        request()->validate([
            "nama"=>"required"
        ]);
        return division::create([
            "nama"=>request("nama")
        ]);
     }
     public function deletedivision(division $p)
     {
        $succes = $p->delete();
        return[
            "succes"=>$succes,
            "status"=>200
        ];
     }
}
