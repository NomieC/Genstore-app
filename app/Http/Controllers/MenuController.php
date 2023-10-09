<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Assuming Menu is your model
        return view('index', compact('menus'));
        // $menus = DB::table('menus')->get(); // Assuming your table name is 'menus'
        // return view('menu.index', ['menus' => $menus]);
    }
    public function createMenu(Request $request)
    {
        $incomingFields = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);
    
        $incomingFields['nama'] = strip_tags($incomingFields['nama']);
        $incomingFields['harga'] = strip_tags($incomingFields['harga']);
        $incomingFields['kategori'] = strip_tags($incomingFields['kategori']);
        $incomingFields['deskripsi'] = strip_tags($incomingFields['deskripsi']);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            // Get the original filename
            $filename = $file->getClientOriginalName();
            // Store the file with the original filename
            $file->storeAs('uploads', $filename, 'public');
            $incomingFields['gambar'] = $filename;
        }
    
        Menu::create($incomingFields);
        return redirect('/menus');
    }
    public function updateMenu(Request $request, $nama){
        $menu = Menu::where('nama', $nama)->first();
        
        // Validate the incoming data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);
    
        // Update the menu item with the new data
        $menu->update([
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'kategori' => $request->input('kategori'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        // Update the image if a new image is uploaded
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            // Get the original filename
            $filename = $file->getClientOriginalName();
            // Store the file with the original filename
            $file->storeAs('uploads', $filename, 'public');
            // Delete the old image if it exists
            // if ($menu->gambar && Storage::disk('public')->exists('uploads/' . $menu->gambar)) {
            //     Storage::disk('public')->delete('uploads/' . $menu->gambar);
            // }
            // Update the 'gambar' field in the database with the new filename
            $menu->update([
                'gambar' => $filename,
            ]);
        }
    
        return redirect('/menus')->with('success', 'Menu item updated successfully!');
    }
    
    
    public function createOrUpdateMenu(Request $request){
        $incomingFields = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);

        // Check the action type from the hidden input field
        $action = $request->input('action');

        // Handle create and update logic based on the action type
        if ($action === 'create') {
            $incomingFields = $request->validate([
                'nama' => 'required',
                'harga' => 'required',
                'kategori' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048'
            ]);
        
            $incomingFields['nama'] = strip_tags($incomingFields['nama']);
            $incomingFields['harga'] = strip_tags($incomingFields['harga']);
            $incomingFields['kategori'] = strip_tags($incomingFields['kategori']);
            $incomingFields['deskripsi'] = strip_tags($incomingFields['deskripsi']);
        
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                // Get the original filename
                $filename = $file->getClientOriginalName();
                // Store the file with the original filename
                $file->storeAs('uploads', $filename, 'public');
                $incomingFields['gambar'] = $filename;
            }
        
            Menu::create($incomingFields);
            return redirect('/index')->with('success', 'Menu item created successfully!');
        } elseif ($action === 'update') {
        
            // Validate the incoming data
            $request->validate([
                'nama' => 'required',
                'harga' => 'required',
                'kategori' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:12048'
            ]);
    
            $menu = Menu::where('nama', $incomingFields['nama'])->first();
            $menu->update([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'kategori' => $request->input('kategori'),
                'deskripsi' => $request->input('deskripsi'),
            ]);

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                // Get the original filename
                $filename = $file->getClientOriginalName();
                // Store the file with the original filename
                $file->storeAs('uploads', $filename, 'public');
                // Update the 'gambar' field in the database with the new filename
                $menu->update([
                    'gambar' => $filename,
                ]);
            }

            return redirect('/index')->with('success', 'Menu item updated successfully!');
        }

        // Handle other cases or errors
    }

    public function editForm($nama){
        $menu = Menu::where('nama', $nama)->first();
        return view('form', compact('menu'));
    }
    public function addForm(){
        return view('form');
    }
        
    public function delete(Request $request){
        $nama = $request->input('nama');
        Menu::where('nama', $nama)->delete();
        return redirect('/menus'); // Redirect to the menu page after deletion
    }

}
