<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('event.pengajuan', [
            "title" => "Pengajuan Event"
        ]);
    }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'no_telp' => 'required|numeric|digits_between:10,14',
        //     'jk' => 'required|max:1',
        //     'password' => 'required|min:5|max:255'
        // ]);
        Event::create([
            'nama_event' => request('nama_event'),
            'institusi_penyelenggara' => request('institusi_penyelenggara'),
            'tgl_event' => request('tgl_event'),
            'deskripsi_event' => request('deskripsi_event'),
            'status_event' => request('status_event'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id'),
            'domisili_id' => request('domisili_id')
        ]);
        
        //User::create($validatedData);
        
        return redirect('/pengajuan');
    }
}
