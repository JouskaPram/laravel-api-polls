<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApiTokenController extends Controller
{
   public function random()
   {
    $token = Str::random(40);
 
    request()->user()->forceFill([
        'api_token' => hash('sha256', $token),
    ])->save();

    return ['token' => $token];
   }
}
