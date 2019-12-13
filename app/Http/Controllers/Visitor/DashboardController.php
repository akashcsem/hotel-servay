<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        if ($request->session()->has('room_id')){
            return redirect()->route('visitor.rooms.index');
        }
        return view('visitor.dashboard');
    }


    public function contact ()
    {
        return view('visitor.contact');
    }
}
