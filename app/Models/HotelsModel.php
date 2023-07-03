<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelsModel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $primarykey = 'id';
    protected $fillable = [
        'hotel_name',
        'hotel_contact',
        'hotel_address',
        'hotel_logo',
        'hotel_tables',
        'is_active',
        'is_delete',
    ];
}
