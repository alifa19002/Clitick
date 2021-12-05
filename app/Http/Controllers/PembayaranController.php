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
            'active' => 'categories',
            'events' => Event::where('id', $id)->first()
        ]);
    }
    public function store(Request $request)
    {
        $uploadPath = public_path('storage/payment');

        // if(!File::isDirectory($uploadPath)) {
        //     File::makeDirectory($uploadPath, 0755, true, true);
        // }
        if (($file = $request->file('bukti_bayar')) == NULL)
            echo "gada file";
        else
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($uploadPath, $uniqueFileName);
        Payment::create([
            'metode_pembayaran' => request('metode_pembayaran'),
            'tgl_transfer' => request('tgl_transfer'),
            'jml_transfer' => request('jml_transfer'),
            'event_id' => request('event_id'),
            'status_pembayaran' => request('status_pembayaran'),
            'bukti_bayar' => 'payment/' . $uniqueFileName
        ]);

        $id_event = $request->event_id;
        $id_payment = Payment::where('event_id', $id_event)->first()->id;
        Event::where('id', $id_event)->update(array('payment_id' => $id_payment));
        //$post = Post::find($id)->update($request->all()); 
        //User::create($validatedData);

        return redirect('/profile');
    }
    public function accept(Request $request){
        $id_event = $request->event_id;
        $status_event = $request->status_event;
        Event::where('id', $id_event)->update(array('status_event' => $status_event));
        return redirect('/dashboard/request/');
    }
}
