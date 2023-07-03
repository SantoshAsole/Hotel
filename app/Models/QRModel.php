<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRModel extends Model
{
    use HasFactory;
    protected $table = 'qr_codes';
    protected $primarykey = 'id';
    protected $fillable = [
        'hotel_id',
        'qr_url',
    ];
}
