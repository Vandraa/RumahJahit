<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function user(){
        echo "halo user";
        echo"<h1>" . Auth::user()->name . "</h1>";
     }
}
