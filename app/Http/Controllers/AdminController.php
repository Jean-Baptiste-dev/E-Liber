<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        /*if(session()->has('LoggedUser')){
            $user = User::where('id', '=', session('LoggedUser'))->first();

            $data = [
                'LoggedUserInfo' =>$user
            ];
        }
        */
        return view('Admin.dashboard');
        
    }
    public function accueil(){
        
        return view('index');
    }
    /*
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('accueil');
    }
    */

    public function profil(){
        return view('indexpro');
    }
}
