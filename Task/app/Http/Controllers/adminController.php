<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req){

        $req->session()->flush();
        return redirect('/login');
    }
}
