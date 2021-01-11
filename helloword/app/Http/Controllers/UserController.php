<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
class UserController extends Controller
{
    public function getUser(){
        // return view('index');
        $user = Usermodel::all();
        return $user;
    }
}
