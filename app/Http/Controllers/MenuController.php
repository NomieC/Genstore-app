<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

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
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update([
            'menu_name' => $request->input('menu_name'),
            'menu_price' => $request->input('menu_price'),
            'menu_type' => $request->input('menu_type'),
            'menu_category' => $request->input('menu_category'),
            'menu_desc' => $request->input('menu_desc'),
            'menu_image' => $request->input('menu_image'),
        ]);

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

