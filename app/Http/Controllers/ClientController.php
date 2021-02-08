<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ID' => 'required'
        ]);

        Client::create($request->all());
    }
    public function editProfile(){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ID' => 'required',
            'password' => 'required',
            'secretKey' => 'required'
        ]);

        Client::update($request->all());
    }
    public function placeJob(){

    }
    public function addJob(){

    }
    public function chooseExpert(){

    }
    public function validate(){

    }
    public function pay(){

    }
    public function deregister(){

    }
}
