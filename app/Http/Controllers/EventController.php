<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;

class EventController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('nama_kategori', request('category'));
            $title = ' in ' . $category->nama_kategori;
        }
        return view('event.events', [
            'title' => 'All Events' . $title,
            'active' => 'events',
            'categories' => Category::all(),
            'events' => Event::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Event $event)
    {
        return view('/event/detailEvent', [
            'title' => 'Detail Event',
            'active' => 'events',
            'event' => $event,
        ]);
    }
}
