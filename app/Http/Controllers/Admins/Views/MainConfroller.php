<?php

namespace App\Http\Controllers\Admins\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainConfroller extends Controller
{
    public function adminHome() {
        return view("admins.home");
    }
}
