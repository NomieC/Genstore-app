<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Menu;
use Illuminate\Http\Request;


class CartController extends Controller
{

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

        return redirect()->route('menu')->with('success', 'Item added to the cart.');
    }


    public function viewCart()
    {
        $cartItems = session('cart', []);

        return view('cart', compact('cartItems'));
    }

    // public function viewCart()
    // {
    //     $menus = Menu::all();
    //     $cartMenuIds = session('cart', []) ? array_column(session('cart'), 'id') : []; // Get menu IDs from the cart items
    //     return view('dashboard', compact('menus', 'cartMenuIds'));
    // }    

    public function clearCart()
    {
        session()->forget('cart'); 
        return redirect()->route('user.sort'); 
    }

    public function removeFromCart($id)
{
    $cartItems = session('cart', []);

    foreach ($cartItems as $key => $item) {
        if ($item['id'] == $id) {
            unset($cartItems[$key]); // Remove the item from the cart
            break; // Exit the loop after removing the item
        }
    }

    // Update the session with the modified cart items
    session(['cart' => array_values($cartItems)]);

    return redirect()->route('menu')->with('success', 'Item removed from the cart.');
}

    
}

