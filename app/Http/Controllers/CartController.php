<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function usersort(Request $request)
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
        return view('dashboard', compact('menus')); 
        
    }

    public function addItem($id)
    {
        $menu = Menu::findOrFail($id);

        // Check if the cart session exists; create one if it doesn't.
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }

        
        $cartItem = [
            'id' => $menu->id,
            'name' => $menu->menu_name,
            'price' => $menu->menu_price,
            'type' => $menu->menu_type,
            'category' => $menu->menu_category,
            'description' => $menu->menu_desc,
            'image' => $menu->menu_image,

        ];

        session()->push('cart', $cartItem);

        return redirect()->route('user.sort')->with('success', 'Item added to the cart.');
    }



    public function viewCart()
    {
        $cartItems = session('cart', []);

        return view('cart', compact('cartItems'));
    }

    public function clearCart()
    {
        session()->forget('cart'); 
        return redirect()->route('user.sort'); 
    }

    public function viewDashboard()
    {
        $menus = Menu::all(); 
        return view('dashboard', ['menus' => $menus]);
    }
}

