<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function _construct(){
        @session_start();
    }

    public function getLogin(){
        return view('auth.login');
    }
    
    public function postLogin(Request $request){
        if($request->username == '' || $request->password == ''){
                return redirect('login')->with('notice','Tài khoản hoặc mật khẩu chưa chính xác, vui lòng thử lại.');
        }
        
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // The user is active, not suspended, and exists.
                return redirect('admin/home');
        }else{
            return redirect('login')->with('notice','Tài khoản hoặc mật khẩu chưa chính xác, vui lòng thử lại.');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }

    
    
}
