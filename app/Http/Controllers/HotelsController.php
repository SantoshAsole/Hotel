<?php

namespace App\Http\Controllers;

use App\Models\HotelsModel;
use Illuminate\Http\Request;


class HotelsController extends Controller
{
    public function HotelDashboard()
    {
        $hotels = HotelsModel::all();
        $totalHotles = count($hotels);
        // dd($totalHotles);
        return view('dashboard', compact('totalHotles'));
    }

    public function HotelManagement()
    {
        $hotels = HotelsModel::all();
        $totalHotles = count($hotels);
        // dd($totalHotles);
        return view('hotel_management', compact('totalHotles', 'hotels'));
    }

    public function AddHotel(Request $request)
    {

        $data = $request->except('_method', '_token', 'submit');
        $request->validate([
            'hotel_name' => 'required',
            'hotel_email' => 'required',
            'hotel_password' => 'required',
            'hotel_contact' => 'required',
            'hotel_address' => 'required',
            'hotel_tables' => 'required',
            'is_active' => 'required',
            'is_delete' => 'required',
        ]);

        $hotelLogo = null;
        if (request()->hasFile('hotel_logo')) {
            $HLogo = request()->file('hotel_logo');
            $hotelLogo = md5($HLogo->getClientOriginalName() . time()) . "." . $HLogo->getClientOriginalExtension();
            $destinationPath = public_path('/Hotel Logos');
            $HLogo->move($destinationPath, $hotelLogo);
        }

        HotelsModel::create([
            'hotel_name' => $request['hotel_name'],
            'hotel_email' => $request['hotel_email'],
            'hotel_password' => $request['hotel_password'],
            'hotel_contact' => $request['hotel_contact'],
            'hotel_address' => $request['hotel_address'],
            'hotel_tables' => $request['hotel_tables'],
            'is_active' => $request['is_active'],
            'is_delete' => $request['is_delete'],
            'hotel_logo' => $hotelLogo,
        ]);

        return redirect()->route('HotelManagement')->with('success', 'New Hotel Added');
    }

    public function UpdateHotel(Request $request)
    {

        $data = $request->except('_method', '_token', 'submit');
        $request->validate([
            'hotel_name' => 'required',
            'hotel_email' => 'required',
            'hotel_password' => 'required',
            'hotel_contact' => 'required',
            'hotel_address' => 'required',
            'hotel_tables' => 'required',
            'is_active' => 'required',
            'is_delete' => 'required',

        ]);


        $hotelLogo = null;
        if (request()->hasFile('hotel_logo')) {
            $HLogo = request()->file('hotel_logo');
            $hotelLogo = md5($HLogo->getClientOriginalName() . time()) . "." . $HLogo->getClientOriginalExtension();
            $destinationPath = public_path('/Hotel Logos');
            $HLogo->move($destinationPath, $hotelLogo);
        }

        // dd($hotelLogo);
        $id = $request->hotel_id;

        if ($hotelLogo == null) {
            // dd('empty');
            HotelsModel::where("id", $id)
            ->update(
                array(
                    'hotel_name' => $request['hotel_name'],
                    'hotel_email' => $request['hotel_email'],
                    'hotel_password' => $request['hotel_password'],
                    'hotel_contact' => $request['hotel_contact'],
                    'hotel_address' => $request['hotel_address'],
                    'hotel_tables' => $request['hotel_tables'],
                    'is_active' => $request['is_active'],
                    'is_delete' => $request['is_delete'],
                )
            );
        } else {

            // dd($hotelLogo);
            HotelsModel::where("id", $id)
            ->update(
                array(
                    'hotel_name' => $request['hotel_name'],
                    'hotel_email' => $request['hotel_email'],
                    'hotel_password' => $request['hotel_password'],
                    'hotel_contact' => $request['hotel_contact'],
                    'hotel_address' => $request['hotel_address'],
                    'hotel_tables' => $request['hotel_tables'],
                    'is_active' => $request['is_active'],
                    'is_delete' => $request['is_delete'],
                    'hotel_logo' => $hotelLogo,
                )
            );
        }



        return redirect()->route('HotelManagement')->with('success', 'Hotel Updated!!!');
    }

    public function DeleteHotel(Request $request)
    {
        HotelsModel::where('id',$request->input('id'))->delete();
        return response()->json(['success' => true]);
    }

    public function HotelStatus(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('is_active');

        $data = HotelsModel::find($id);
        $data->is_active = $status;
        $data->save();
        return response()->json(['success' => true]);
    }


    public function index(Request $request)
    {
        $data = $request->qrcodeURL;
        $tables = $request->tables;


      return view('qrcode', compact('data', 'tables'));
    }
}
