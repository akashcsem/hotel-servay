<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('visitor.dashboard');
    }


    public function contact ()
    {
        return view('visitor.contact');
    }
}
