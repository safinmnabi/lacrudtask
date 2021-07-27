<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function login(Request $req)
    {
        if($req->isMethod('post'))
        {

            $email = $req->input('email');
            $pass = $req->input('password');
            $result = DB::table('tuser')->where('email',$email)->first();
            if ($result && Hash::check($pass, $result->password))
            {

                session(['islogged' => true]);
                session(['email' => $email]);
                return redirect('/index');
            }      
        }

        return view('login');
    }


    public function register(Request $r)
    {
        if ($r->isMethod('post'))
        {
            $email= $r->input('email');
            $password= $r->input('password');
            $hash_pass = Hash::make($password);

            $result = DB::table('tuser')->insert([
                'email' => $email,
                'password' => $hash_pass,
            ]);

            if($result)
            {
                return redirect('/');
            }

            else{
                return response()->json(['status' => false, 'message' => "Technical Problem"]);
            }
        }
        return view('register');
    }

    public function logout()
    {
        if (session()->flush()) {
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
