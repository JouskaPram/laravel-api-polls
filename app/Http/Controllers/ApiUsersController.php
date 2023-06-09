<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiUsersController extends Controller
{
    public function regis()
    {
        return User::create([
            'name'=>request("name"),
            'email'=>request("email"),
            'password'=>Hash::make(request("password")),
            'api_token'=>request(Str::random(40)),
        ]);
    }
}
