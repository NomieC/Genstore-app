<?php $__env->startSection('container'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant&display=swap" rel="stylesheet">
    <style>
        html * {
            font-family: 'Cormorant', serif;
        }

        header {
            position: relative;
            z-index: 10;
            width: 100%;
            height: 10vh;
            background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat 50% 50%;
            background-size: cover;
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

        .card {
            height: 100%;
            background-color: #f1ebdb;
            border-radius: 2px;
        }

        .card-name-box {
            background-color: #d8c6c6;
        }

        .card-name-box,
        .card-desc-box {
            padding: 10px;
        }

        .card-title {
            font-size: 3.5ch;
            font-weight: bold;
        }

        .card-category {
            font-size: 2ch;
            font-weight: bold;
        }

        .card-desc {
            font-weight: 250;
        }

        .card-price {
            font-size: 3ch;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-button {
            font-size: 3ch;
            background-color: #5d5552;
        }

        .card-img-top {
            width: 100%;
            height: 50%;
            object-fit: cover;
            border-radius: 2px;
            /* Optional: adjust border-radius as needed */
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #5d5552;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, minmax(250px, 1fr));
            gap: 20px;
            align-content: start;
            /* Align content at the start of the cross axis */
        }


        .grid-item {
            padding: 10px;
            border-radius: 5px;
        }

        @media screen and (max-width: 767px) {
            .card-img-top {
                height: 200px;
                /* Adjust the height as needed for smaller screens */
            }
        }

        @media screen and (max-width: 479px) {
            .card-img-top {
                height: 150px;
                /* Adjust the height as needed for even smaller screens */
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
            <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo e(asset('uploads/' . $menu->gambar)); ?>" alt="Card image cap">
                <div class="card">
                    <div class="card-name-box">
                        <h3 class="card-title"><?php echo e($menu->nama); ?></h3>
                        <span class="card-category"><?php echo e($menu->kategori); ?></span>
                        <p class="card-desc"><?php echo e($menu->deskripsi); ?></p>
                    </div>

                    <div class="card-desc-box">
                        <p class="card-price">Rp<?php echo e($menu->harga); ?></p>
                        <div class="button-container grid grid-cols-2 gap-2">
                            <form action="/edit/<?php echo e($menu->nama); ?>">
                                <button class="card-button" style="width: 100%">Edit</button>
                            </form>
                            <form action="/delete" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="nama" value="<?php echo e($menu->nama); ?>">
                                <button type="submit" class="card-button" style="width: 100%" name="deleteMenu">Delete</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No menus</p>
            <?php endif; ?>
        </div>
        </tbody>
        </table>
        <div class="button-container mt-3">
            <form action="/addForm" method="post">
                <?php echo csrf_field(); ?>
                <button class="button1">Add Menu</button>
            </form>
        </div>

    </div>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fidelbriandava/Documents/Genstore/Genstore-app/resources/views/menu.blade.php ENDPATH**/ ?>