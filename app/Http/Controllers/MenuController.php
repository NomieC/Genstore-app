<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category'); 
        $type = $request->input('type');
        if ($category) {
                
            $menus = Menu::where('menu_category', $category)->get();
        } else if ($type){
            $menus = Menu::where('menu_type', $type)->get();
        } else {
            
            $menus = Menu::all();
        }

        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin/menu', compact('menus'));
        } else {
            return view('dashboard', compact('menus')); 
        }
        
    }


    public function edit($id)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $menu = Menu::findOrFail($id);
            return view('admin/edit', compact('menu'));

        } else {
            // You can redirect or return an error view here for non-admin users
            return redirect()->route('home');
        }
        
    }

    // Update the menu item with edited data
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'menu_name'  => 'required',
            'menu_price'  => 'required',
            'menu_type'  => 'required', 
            'menu_category'  => 'required',
            'menu_desc'  => 'required',
            'menu_image' => 'image|mimes:jpeg,png,jpg,gif|max:42048'
        ]);
    
        $menu->update([
            'menu_name'  => $request->input('menu_name'),
            'menu_price'  => $request->input('menu_price'),
            'menu_type'  => $request->input('menu_type'), 
            'menu_category'  => $request->input('menu_category'),
            'menu_desc'  => $request->input('menu_desc'),
        ]);

        if ($request->hasFile('menu_image')) {
            Storage::delete('public/assets/Foods' . $menu->menu_image);

            $file = $request->file('menu_image');
            $filename = $file->getClientOriginalName();
            $file->storeAs('Foods', $filename, 'public');
            $menu->update([
                'menu_image' => $filename,
            ]);
        }
    
        return redirect('/admin')->with('success', 'Menu item updated successfully!');
    }

    public function add()
    {   
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin/edit');
        } else {
            // You can redirect or return an error view here for non-admin users
            return redirect()->route('home');
        }
    }

    public function create(Request $request) {
        $incomingFields = $request->validate([
            'menu_name'  => 'required',
            'menu_price'  => 'required',
            'menu_type'  => 'required', 
            'menu_category'  => 'required',
            'menu_desc'  => 'required',
            'menu_image' => 'image|mimes:jpeg,png,jpg,gif|max:42048'
        ]);

        $incomingFields['menu_name'] = strip_tags($incomingFields['menu_name']);
        $incomingFields['menu_price'] = strip_tags($incomingFields['menu_price']);
        $incomingFields['menu_type'] = strip_tags($incomingFields['menu_type']);
        $incomingFields['menu_category'] = strip_tags($incomingFields['menu_category']);
        $incomingFields['menu_desc'] = strip_tags($incomingFields['menu_desc']);

        if($request->hasFile('menu_image')) {
            $file = $request->file('menu_image');
            $filename = $file->getClientOriginalName();
            $file->storeAs('Foods', $filename, 'public');
            $incomingFields['menu_image'] = $filename;
        }

        Menu::create($incomingFields);
        return redirect('/admin')->with('success','Menu item created succesfully');
    }

    // Delete the menu item
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect('/admin')->with('success', 'Menu item deleted successfully!');

        
    }


    
}

