<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){
        return view('user.login');
    }
    public function Register(){
        return view('user.register');
    }
    public function postregister(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        $repassword = $req->input('repassword');
        $name = $req->input('name');

        if($password!=$repassword){
            session()->put('message','Mật khẩu không trùng khớp!!!');
            return back();
        }

        $user = User::where('email', $email)->first();
        if(isset($user)){
            session()->put('message','Email đã tồn tại!!!');
            return back();
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return redirect()->route('login');
    }

    public function postlogin(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        $remember = $req->input('remember');


        $user = User::where('email', $email)->first();
        $canLogin = false;
        if(isset($user)){
            $canLogin = Hash::check($password, $user->password);
        }
        if($canLogin){//Cho phep dang nhap
            Auth::login($user, $remember);
            return redirect()->route('home');
        }
        else{
            session()->put('message','Email hoặc mật khẩu không đúng!!!');
            return back();
        }
    }
}
