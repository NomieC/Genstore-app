<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class Menu2Controller extends Controller
{
    public function createMenu(Request $request){
        $incomingFields = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:6048'
        ]);

        $incomingFields['nama'] = strip_tags($incomingFields['nama']);
        $incomingFields['harga'] = strip_tags($incomingFields['harga']);
        $incomingFields['kategori'] = strip_tags($incomingFields['kategori']);
        $incomingFields['deskripsi'] = strip_tags($incomingFields['deskripsi']);
        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->store('uploads', 'public');
            $incomingFields['gambar'] = $filename;
        }
        Menu::create($incomingFields);
        return redirect('/');
    }
}
