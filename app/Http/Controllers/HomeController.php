<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        if ($user->usertype === 'admin') {
            return view('home.admin.index');
        }

        return view('home.user.index');
    }
}
