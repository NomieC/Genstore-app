<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap'); 
        body, html {
            margin: 0;
            text-align: center;
            background-color: black;
            color: white;
            font-family: "cormorant", sans-serif;
            padding: 30px 0 30px;
        }

        .container {
            margin: auto;
            border: 1px solid white;
            border-radius: 20px;
            background-color: white;
            color: black;
            width: 440px;
            padding: 40px 0 40px;
        }

        h2 {
            margin: 0;
        }

        h1{
            margin: 0 0 20px;
        }

        h4 {
            margin: 8px 0 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        form button {
            background: white;
            color: black;
            border: 2px solid #ddd;
            border-radius: 3px;
            font-family: "cormorant", sans-serif;
            padding: 5px 12px 5px;
            font-size: 15px;
            transition: all 0.3s;
        }

        form button:hover {
            background: black;
            color: white;
            cursor: pointer;
            border: 2px solid black;
        }

        form button:active {
            background: black;
            color: white;
            border: 2px solid black;
        }

        form input[type="text"], form input[type="number"], form input[type="file"] {
            padding: 4px;
            border: 1px solid #ddd;
            width: 280px;
            margin-top: 8px;
            font-family: "cormorant", sans-serif;
        }

        form input[type="text"]:focus, form input[type="number"]:focus, form input[type="file"]:focus {
            background-color: black;
            color: white;
            font-family: "cormorant", sans-serif;
        }
        
    </style>
</head>
<body>
    @isset($menu->menu_name)
        <h2>Welcome to</h2>
        <h4>Maison de L'Angalise</h4>
        <div class="container">
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
            <input type="file" id="menu_image" name="menu_image"><br>
            
            @if($menu->menu_image)
                <img src="{{ asset('assets/Foods/' . $menu->menu_image) }}" alt="Menu Image" style="max-width: 300px; max-height: 300px; border-radius: 20px; margin: 10px 0px"><br>
            @endif

            <button type="submit">Update</button>
        </form>
        </div>
    @else
        <h2>Welcome to </h2>
        <h4>Maison de L'Angalise</h4>
        <div class="container">
        <h1>Add Menu Item</h1>
        <form action="/admin/create" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="menu_name">Menu Name:</label>
            <input type="text" id="menu_name" name="menu_name" required><br>
        
            <label for="menu_price">Menu Price:</label>
            <input type="number" id="menu_price" name="menu_price" required><br>
        
            <label for="menu_type">Menu Type:</label>
            <input type="text" id="menu_type" name="menu_type" required><br>
        
            <label for="menu_category">Menu Category:</label>
            <input type="text" id="menu_category" name="menu_category" required><br>
        
            <label for="menu_desc">Menu Description:</label>
            <input type="text" id="menu_desc" name="menu_desc" required><br>
        
            <label for="menu_image">Menu Image:</label>
            <input type="file" id="menu_image" name="menu_image"><br>
        
            <button type="submit" class="add-button">Add</button>
        </form>
        </div>
    
    @endif


</body>
</html>

