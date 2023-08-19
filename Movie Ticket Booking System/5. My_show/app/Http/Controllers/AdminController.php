<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index()
    {
        return view('admin.adminLogin');
    }

    public function create(Request $request,$guard = null){

        $request->validate([
            'AdminEmailId'=>'required',
            'password'=>'required'
        ]);

        // if (Auth::guard('admin')->check()) {
        //     if ($guard == "admin") {
        //        // return redirect()->route('post');
        //     } else {
        //       //  return redirect()->route('admin-login');
        //     }
        // }
        //Auth::guard(')->logout();

        if(Auth::guard('admin')->attempt(['AdminEmailId'=>$request->AdminEmailId,'password'=>$request->password])){
            return redirect()->route('post');
        }else{
            return redirect()->route('admin-login');
        }

        //return redirect()->route('post');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();

        return redirect()->route('admin-login');
    }
}
