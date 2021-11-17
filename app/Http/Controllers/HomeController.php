<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => 'Home',
            'active' => 'home',
            'latest_events' => Event::latest()->limit(5)->get()
        ]);
    }
}
