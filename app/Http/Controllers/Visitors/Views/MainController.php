<?php

namespace App\Http\Controllers\Visitors\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view("home");
    }
}
