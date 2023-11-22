<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yayasan extends Controller
{
    public function index() {
        $user = Auth::user();
        if ($user->level !=2) {
            return redirect()->intended('login');
        }

        echo "Ini Halaman Yayasan";
    }
}
