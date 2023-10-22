@extends('layouts.app')

@section('content')
    <h1>Edit Menu Item</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="menu_name">Menu Name:</label>
        <input type="text" id="menu_name" name="menu_name" value="{{ $menu->menu_name }}" required><br>
        <input type="text" id="menu_price" name="menu_price" value="{{ $menu->menu_price }}" required><br>
        <input type="text" id="menu_type" name="menu_type" value="{{ $menu->menu_type }}" required><br>
        <input type="text" id="menu_category" name="menu_category" value="{{ $menu->menu_category }}" required><br>
        <input type="text" id="menu_" name="menu_" value="{{ $menu->menu_ }}" required><br>
        <input type="text" id="menu_name" name="menu_name" value="{{ $menu->menu_name }}" required><br>
        <!-- Add other form fields for menu_price, menu_category, menu_desc, etc. -->
        <button type="submit">Update</button>
    </form>
@endsection
