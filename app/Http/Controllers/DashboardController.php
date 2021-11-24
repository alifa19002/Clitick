<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard Admin";
        $events = Event::all();
        return view('admin.rekap', compact(['title', 'events']));
    }
}
