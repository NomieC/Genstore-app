<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu</title>


</head>
<body>
    <h1>Edit Menu Item</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="menu_name">Menu Name:</label>
        <input type="text" id="menu_name" name="menu_name" value="{{ $menu->menu_name }}" required><br>

        <label for="menu_price">Menu Price:</label>
        <input type="number" id="menu_price" name="menu_price" value="{{ $menu->menu_price }}" required><br>

        <label for="menu_type">Menu Type:</label>
        <input type="text" id="menu_type" name="menu_type" value="{{ $menu->menu_type }}" required><br>

        <label for="menu_category">Menu Category:</label>
        <input type="text" id="menu_category" name="menu_category" value="{{ $menu->menu_category }}" required><br>

        <label for="menu_desc">Menu Description:</label>
        <input type="text" id="menu_desc" name="menu_desc" value="{{ $menu->menu_desc }}" required><br>

        <label for="menu_image">Menu Image:</label>
        <input type="file" id="menu_image" name="menu_image" accept="image/*"><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>

