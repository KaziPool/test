<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;

class ExpertController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ID' => 'required',
            'password' => 'required',
            'secretKey' => 'required'
        ]);

        Expert::create($request->all());
    }
    public function addJob(){

    }
    public function addJobDetails(){

    }
    public function bid(){

    }
    public function validate(){

    }
    public function receivePay(){

    }
    public function deRegister(){

    }
}
