<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $primarykey = 'id';
    protected $fillable = [
        'hotel_id',
        'menu_name',
        'menu_price',
        'menu_image',
        'menu_description',
        'is_active',
        'is_delete',
    ];
}
