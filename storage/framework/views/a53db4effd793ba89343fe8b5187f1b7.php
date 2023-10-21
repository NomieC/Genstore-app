<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500&family=Poppins&display=swap');

        body {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>
</head>

<body class="overscroll-none">
    <?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('container'); ?>
    
    <?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<!--    ======COLOR PALLETE======
        background-color: ;
        #fdf5e8  SC 01 Cotton White
        #878882 Silver
        #927c55 Gold
        #f1ebdb SC 06 French Linen -dipake ++++++
        #bcb7a4 SC 07 Khaky -dipake +++++++
        #5d5552 SC 08 Ebony
        #d8c6c6 SC 93 Lily
        #beaab5 SC 94 Velvet Plum
        #606372 SC 98 Parisian Blue ->Buat navbar
        #bdd0ca SC 71 Mint
        #8ea7a3 SC 72 Sapphire
        #626e7c SC 83 Denim --><?php /**PATH /Users/fidelbriandava/Documents/Genstore/Genstore-app/resources/views/layouts/main.blade.php ENDPATH**/ ?>