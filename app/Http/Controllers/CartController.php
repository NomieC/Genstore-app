<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Menu;
use Illuminate\Http\Request;


class CartController extends Controller
{

    // public function addItem($id)
    // {
    //     $menu = Menu::findOrFail($id);

    //     // Check if the cart session exists; create one if it doesn't.
    //     if (!session()->has('cart')) {
    //         session(['cart' => []]);
    //     }

        
    //     $cartItem = [
    //         'id' => $menu->id,
    //         'name' => $menu->menu_name,
    //         'price' => $menu->menu_price,
    //         'type' => $menu->menu_type,
    //         'category' => $menu->menu_category,
    //         'description' => $menu->menu_desc,
    //         'image' => $menu->menu_image,

    //     ];

    //     session()->push('cart', $cartItem);

    //     return redirect()->route('menu')->with('success', 'Item added to the cart.');
    // }

    public function addItem($id)
    {
        $menu = Menu::findOrFail($id);

        // Check if the cart session exists; create one if it doesn't.
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }

        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id => [
                    'name' => $menu->menu_name,
                    'quantity' => 1,
                    'price' => $menu->menu_price,
                    'type' => $menu->menu_type,
                    'category' => $menu->menu_category,
                    'description' => $menu->menu_desc,
                    'image' => $menu->menu_image,
                ]
            ];
            session()->put('', $cart);
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
        }

        $cart[$id] = [
            'name' => $menu->menu_name,
            'quantity' => 1,
            'price' => $menu->menu_price,
            'type' => $menu->menu_type,
            'category' => $menu->menu_category,
            'description' => $menu->menu_desc,
            'image' => $menu->menu_image,
        ];

        session()->put('cart', $cart);
        session(['cart' => array_values($cart)]);
        return redirect()->route('menu')->with('success', 'Item added to the cart.');
    }

    
    public function viewCart()
    {
        $cartItems = session('cart', []);

        return view('cart', compact('cartItems'));
    } 

    public function clearCart()
    {
        session()->forget('cart'); 
        return redirect()->route('menu'); 
    }

    
}

