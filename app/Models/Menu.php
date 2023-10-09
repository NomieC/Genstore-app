<?php

// app/Models/Menu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'harga', 'kategori', 'deskripsi', 'gambar'];
    protected $table = 'menus';
    // Any additional model logic or relationships can be defined here
}

