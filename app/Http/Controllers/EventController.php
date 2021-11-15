<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('event.events', [
            'title' => 'Events',
            'active' => 'events',
            'events' => Event::latest()->get()
        ]);
    }
}
