<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\Category;
use App\Models\Domisili;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('event.pengajuan', [
            "title" => "Pengajuan Event",
            'active' => 'categories',
            'categories' => Category::all(),
            'domisili' => Domisili::all()
        ]);
    }
    public function store(Request $request)
    {
        $uploadPath = public_path('storage/poster');

        // if(!File::isDirectory($uploadPath)) {
        //     File::makeDirectory($uploadPath, 0755, true, true);
        // }
        if (($file = $request->file('poster')) == NULL)
            echo "gada file";
        else
            $uniqueFileName = uniqid() . $request->nama_event . '.' . $file->getClientOriginalExtension();
        $file->move($uploadPath, $uniqueFileName);
        Event::create([
            'nama_event' => request('nama_event'),
            'institusi_penyelenggara' => request('institusi_penyelenggara'),
            'tgl_event' => request('tgl_event'),
            'deskripsi_event' => request('deskripsi_event'),
            'link_reg' => request('link_reg'),
            'status_event' => request('status_event'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id'),
            'domisili_id' => request('domisili_id'),
            'poster' => 'poster/' . $uniqueFileName,
            'slug' => Str::replace(' ', '-', Str::lower(request('nama_event')))
        ]);

        //User::create($validatedData);

        return redirect('/pengajuan')->with('success', 'Event berhasil diajukan.');
    }
}
