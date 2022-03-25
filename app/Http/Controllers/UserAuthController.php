<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserAuthController extends Controller
{
    function login()
    {

        return view('auth.login');
    }

    function register()
    {

        return view('admin.compte.register');
    }

    function create(Request $request)
    {
        //Validation Request
       // return $request->input();

        $request->validate([
          'username' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:5|max:12'
        ]);

        $user = new User;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $query = $user->save();

        if($query)
        {
            return back()->with('success', 'Creation de compte reussi');

        }else{
            return back()->with('Echec', 'Un problème de création du compte...');
        }

    }

    function check(Request $request)
    {
        //return $request->input();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
          ]);

          $user = User::where('email','=', $request->email)->first();
          if($user)
          {
              if(Hash::check($request->password, $user->password)){

                $request->session()->put('LoggedUser', $user->id);
                return redirect('admin');
              }else{
                  return back()->with('Echec', 'Mot de passe invalide');

              }
          }else{
            return back()->with('Echec', 'Pas de compte pour cette adresse mail');
          }
    }
    /*
     function admin(){
        if(session()->has('LoggedUser')){
            $user = User::where('id', '=', session('LoggedUser'))->first();

            $data = [
                'LoggedUserInfo' =>$user
            ];
        }
        return view('Admin.dashboard', $data);
    }
    */
}