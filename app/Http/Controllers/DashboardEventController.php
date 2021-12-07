<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Domisili;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create', [
            'title' => 'Tambah Event',
            'categories' => Category::all(),
            'domisilis' => Domisili::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required|max:255',
            'slug' => 'required|unique:events',
            'institusi_penyelenggara' => 'required|max:255',
            'tgl_event' => 'required',
            'deskripsi_event' => 'required',
            'link_reg' => 'required',
            'status_event' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'domisili_id' => 'required',
            'poster' => 'image|file|max:5000',
        ]);

        if ($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('poster');
        }

        $validatedData["user_id"] = auth()->user()->id;

        Event::create($validatedData);
        return redirect('/dashboard/events')->with('success', 'New event has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.detailEvent', [
            'title' => 'Detail Event',
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.edit', [
            'title' => 'Edit Event',
            'event' => $event,
            'categories' => Category::all(),
            'domisilis' => Domisili::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
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

        $validatedData["user_id"] = $request->user_id;

        Event::where('id', $event->id)->update($validatedData);
        return redirect('/dashboard/events')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if ($event->poster) {
            Storage::delete($event->poster);
        }
        Event::destroy($event->id);
        return redirect('/dashboard/events')->with('success', 'Event has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->nama_event);
        return response()->json(['slug' => $slug]);
    }
}
