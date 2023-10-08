<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Import your Menu model

class MenuController extends Controller
{
    public function updateMenu(Request $request)
    {
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
        } else {
            $filename = null; // Set a default value if no file is uploaded
        }

        // Create or update menu record in the database
        Menu::updateOrCreate(
            ['nama' => $nama],
            ['harga' => $harga, 'kategori' => $kategori, 'deskripsi' => $deskripsi, 'gambar' => $filename]
        );

        // Redirect back to the form page or any other page you desire
        return redirect()->route('form'); // Adjust the route name accordingly
    }
}
