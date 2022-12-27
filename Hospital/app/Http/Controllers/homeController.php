<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class homeController extends Controller
{
    //Redirect to User and admin pages
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 0) {
                return view('user.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    //User home page View function
    function index()
    {
        return view('user.home');
    }
}