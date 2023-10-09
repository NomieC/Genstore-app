<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List's</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <!-- Font Awesome (for the menu icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>

    <!-- <link href="../dist/output.css" rel="stylesheet"> -->

    <style>
        header {
            position: relative;
            z-index: 10;
            width: 100%;
            height: 10vh;
            background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat 50% 50%;
            background-size: cover;
        }

        .container {
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: bisque;
        }

        .table-style {
            border: 2px solid black;
        }

        .button1 {
            background-color: #80664f;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        .button2 {
            background-color: gray;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .card-img-top {
    width: 100%;
    height: auto;
    border-radius: 5px 5px 0 0; /* Optional: adjust border-radius as needed */
}

.container {
    max-width: 900px;
    margin: 0 auto;
    margin-top: 30px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: bisque;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.grid-item {
    padding: 10px;
    border-radius: 5px;
}

@media screen and (max-width: 767px) {
    .card-img-top {
        height: 200px; /* Adjust the height as needed for smaller screens */
    }
}

@media screen and (max-width: 479px) {
    .card-img-top {
        height: 150px; /* Adjust the height as needed for even smaller screens */
    } 
}

    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-f4e1d2">

    <script>
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
    
    <header>
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                LOGO
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-bottom: 20px">
        <h1>Daftar Menu</h1>

        <div class="grid-container grid grid-cols-3 gap-8">
            @forelse($menus as $menu)
            <div class="card">
                <img class="card-img-top" src="{{ asset('uploads/' . $menu->gambar) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->nama }}</h5>
                    <p class="card-text">{{ $menu->harga }}</p>
                    <p class="card-text">{{ $menu->kategori }}</p>
                    <p class="card-text">{{ $menu->deskripsi }}</p>
                    <div class="button-container mt-3">
                        <form action="/edit/{{ $menu->nama }}">
                            <button class="btn btn-info">Edit</button>
                        </form>
                        <form action="/delete" method="post">
                            @csrf
                            <input type="hidden" name="nama" value="{{ $menu->nama }}">
                            <button type="submit" class="btn btn-info" name="deleteStudent">Delete</button>
                        </form>
                    </div>      
                </div>
            </div>
            @empty
            <p>no menus</p>
            @endforelse
        
        </div>
        </tbody>
        </table>
        <div class="button-container mt-3">
            <form action="/addForm" method="post">
                @csrf
                <button class="button1" >Add Menu</button>
            </form>
        </div>

    </div>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>