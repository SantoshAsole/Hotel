<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\QRController;
use App\Models\HotelsModel;
use App\Models\MenuModel;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [HotelsController::class, 'HotelDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/Hotel-Management', [HotelsController::class, 'HotelManagement'])->name('HotelManagement');
    Route::post('/AddHotel', [HotelsController::class, 'AddHotel'])->name('AddHotel');
    Route::post('/UpdateHotel', [HotelsController::class, 'UpdateHotel'])->name('UpdateHotel');
    Route::get('/DeleteHotel', [HotelsController::class, 'DeleteHotel'])->name('DeleteHotel');
    Route::get('/HotelStatus', [HotelsController::class, 'HotelStatus'])->name('HotelStatus');

    Route::get('/QR-Management', [QRController::class, 'QRManagement'])->name('QRManagement');
});

Route::POST('/generate-qrcode', [QRController::class, 'MakeQR'])->name('generate-QR');


// $pages = array('menu-list');
// $hotels = HotelsModel::all();


// foreach ($pages as $page) {
//     foreach ($hotels as $hotel) {
//         for ($i = 1; $i <= $hotel['hotel_tables']; $i++) {
//             $hotelID = $hotel['id'];
//             global $hotelID;
//             Route::get('/' . $page . '/' . $hotel['hotel_name'] . '/' . $i .'', function () {
//                 $currenturl = Route::current();
//                 global $hotelID;
//                 $hotels = HotelsModel::where('id', $hotelID)->get();
//                 $menus = MenuModel::where('hotel_id', $hotelID)->get();
//                 return view('menu-list', compact('currenturl', 'hotelID', 'hotels', 'menus'));
//             });
//         }
//     }
// }


require __DIR__ . '/auth.php';
