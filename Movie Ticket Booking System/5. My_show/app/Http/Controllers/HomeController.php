<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movie=Movie::all();
        return view('user.movie_show',compact('movie'));
    }

    public function getId($id)
    {
        $user=User::find($id);
        return view('user.layouts.header',compact('user'));
    }

    public function updateProfileData(Request $request, $id)
    {
        $userID=User::find($id);
        return redirect()->route('');
    }
}
