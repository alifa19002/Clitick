<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Domisili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'events' => Event::latest()->where('status_event', "Accepted")->filter(request(['search', 'category']))->paginate(10)->withQueryString()
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

    public function edit(Event $event)
    {
        return view('user.editEvent', [
            'title' => 'Edit Event',
            'event' => $event,
            'categories' => Category::all(),
            'domisilis' => Domisili::all()
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $rules = [
            'nama_event' => 'required|max:255',
            'institusi_penyelenggara' => 'required|max:255',
            'tgl_event' => 'required',
            'deskripsi_event' => 'required',
            'link_reg' => 'required',
            'status_event' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'domisili_id' => 'required',
            'poster' => 'image|file|max:5000',
        ];

        if ($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('poster')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['poster'] = $request->file('poster')->store('poster');
        }

        $validatedData["user_id"] = auth()->user()->id;

        Event::where('id', $event->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Post has been updated!');
    }

    public function destroy(Event $event)
    {
        if ($event->poster) {
            Storage::delete($event->poster);
        }
        Event::destroy($event->id);
        return redirect('/profile')->with('success', 'Event has been deleted!');
    }
}
