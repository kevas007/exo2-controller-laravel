<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $users = [
            (object)[
                'id'=>1,
                'nom'=>'Nicolas',
                'age'=>18,
                'email'=>'nicos@example.com'
            ]
        ];
        return view('welcome', compact('users'));
    }
}
