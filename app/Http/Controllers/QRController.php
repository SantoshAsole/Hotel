<?php

namespace App\Http\Controllers;

use App\Models\HotelsModel;
use App\Models\QRModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public function MakeQR(Request $request)
    {
        $data = $request->except('_method', '_token', 'submit');
        $request->validate([

            'qr_url' => 'required',
            'tables' => 'required',
            'hotel_id' => 'required',
        ]);


        $qrcode = $request->qr_url;
        $tables = $request->tables;
        for ($i = 1; $i <= $tables; $i++) {
            $qrcodeurl = "http://127.0.0.1:8000/menu-list/$qrcode/$i";
            // dd($qrcodeurl);



            QRModel::create([
                'hotel_id' => $request['hotel_id'],
                'qr_url' => $qrcodeurl,
            ]);
        }




        return redirect()->route('HotelManagement')->with('success', 'QR Generated Susscess!!!');
    }


    public function QRManagement()
    {
        $qrs = QRModel::all();
        $hotels = HotelsModel::all();
        return view('qr_management', compact('qrs', 'hotels'));
    }
}
