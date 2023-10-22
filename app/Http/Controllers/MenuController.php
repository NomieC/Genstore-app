<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category'); // Get the category from the request
        $type = $request->input('type'); // Get the category from the request

        if ($category) {
            // If a category is selected, filter menus by category
            $menus = Menu::where('menu_category', $category)->get();
        } else if ($type){
            $menus = Menu::where('menu_type', $type)->get();
        } else {
            // If no category is selected, fetch all menus
            $menus = Menu::all();
        }

        return view('admin', compact('menus'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('edit', compact('menu'));
    }

    // Update the menu item with edited data
    // public function update(Request $request, $id)
    // {
    //     $menu = Menu::findOrFail($id);
    
    //     // Update other fields
    //     $menu->menu_name = $request->input('menu_name');
    //     $menu->menu_price = $request->input('menu_price');
    //     $menu->menu_type = $request->input('menu_type');
    //     $menu->menu_category = $request->input('menu_category');
    //     $menu->menu_desc = $request->input('menu_desc');
    
    //     // Handle menu image upload
    //     if ($request->hasFile('menu_image')) {
    //         // Delete the previous menu image, if it exists
    //         // Storage::delete('public/assets/Foods' . $menu->menu_image);
    
    //         // // Get the original filename
    //         // $originalFilename = $request->file('menu_image')->getClientOriginalName();
    
    //         // // Store the new menu image with the original filename
    //         // $imagePath = $request->file('menu_image')->storeAs('assets/Foods/', $originalFilename);
    //         // $menu->menu_image = $originalFilename;

    //         $file = $request->file('menu_image');
    //         $filename = $file->getClientOriginalName();
    //         $file->storeAs('assets/Foods', $filename, 'public');
    //         $incomingFields['menu_image'] = $filename;
    //     }
    
    //     $menu->save();
    
    //     return redirect('/admin')->with('success', 'Menu item updated successfully!');

        
    // }
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'menu_name'  => 'required',
            'menu_price'  => 'required',
            'menu_type'  => 'required', 
            'menu_category'  => 'required',
            'menu_desc'  => 'required',
            'menu_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:42048'
        ]);
    
        $menu->update([
            'menu_name'  => $request->input('menu_name'),
            'menu_price'  => $request->input('menu_price'),
            'menu_type'  => $request->input('menu_type'), 
            'menu_category'  => $request->input('menu_category'),
            'menu_desc'  => $request->input('menu_desc'),
        ]);

        if ($request->hasFile('menu_image')) {
            $file = $request->file('menu_image');
            // Get the original filename
            $filename = $file->getClientOriginalName();
            // Store the file with the original filename
            $file->storeAs('public/assets/Foods', $filename);
            $menu->update([
                'menu_image' => $filename,
            ]);
        }
    
        return redirect('/admin')->with('success', 'Menu item updated successfully!');
    }


    // Delete the menu item
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect('/admin')->with('success', 'Menu item deleted successfully!');
    }
}

