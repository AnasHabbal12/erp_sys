<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginView() {
        return view('admin.auth.login');
    }

    public function login (Request $request) {

    }
}
