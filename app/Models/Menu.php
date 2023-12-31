<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "menu_name",
        "menu_price",
        "menu_type",
        "menu_category",
        "menu_desc",
        "menu_image",
    ];
}
