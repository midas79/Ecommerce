<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index() {
        if (Auth::user()->role == "user") {
            return view("dashboard");
        }

        else {
            return view("admin.dashboard");
        }
    }
}
