<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\polls;
class PollsApiController extends Controller
{
    public function getpolls()
    {
        return polls::all();
    }
     public function postpolls()
     {
        request()->validate([
            "title"=>"required",
            "deskripsi"=>"required",
            "deadline"=>"required",
            "created_by"=>"required",
        ]);
        return polls::create([
            "title"=>request("title"),
            "deskripsi"=>request("deskripsi"),
            "deadline"=>request("deadline"),
            "created_by"=>request("created_by"),
        ]);
     }
     public function deletepolls(polls $p)
     {
        $succes = $p->delete();
        return[
            "succes"=>$succes,
            "status"=>200
        ];
     }
}
