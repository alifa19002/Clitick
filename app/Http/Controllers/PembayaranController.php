<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Event;

class PembayaranController extends Controller
{
    public function index($id)
    {
        return view('user.pembayaran', [
            "title" => "Pengajuan Event",
            'active' => 'events',
            'events' => Event::where('id', $id)->first()->id
        ]);
    }
    public function store(Request $request)
    {
            $uploadPath = public_path('storage/payment');

            // if(!File::isDirectory($uploadPath)) {
            //     File::makeDirectory($uploadPath, 0755, true, true);
            // }
            if(($file = $request->file('bukti_bayar')) == NULL)
                echo "gada file";
            else
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
        Payment::create([
            'metode_pembayaran' => request('metode_pembayaran'),
            'tgl_transfer' => request('tgl_transfer'),
            'jml_transfer' => request('jml_transfer'),
            'id_event' => request('id_event'),
            'bukti_bayar' => 'payment/'.$uniqueFileName
        ]);
        
        //User::create($validatedData);
        
        return redirect('/profile');
    }
}
