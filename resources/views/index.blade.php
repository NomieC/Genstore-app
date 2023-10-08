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
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-f4e1d2">

    <?php
    // 1
    $dsn = "mysql:host=localhost;dbname=Genstore";
    $kunci = new PDO($dsn, "sqluser", "password");
    // $dsn = "mysql:host=localhost;dbname=Genstore";
    // $kunci = new PDO($dsn, "root", "");

    // 2
    $sql = "SELECT * FROM Menu;";

    // 3
    $hasil = $kunci->query($sql);

    if (isset($_GET['nama'])) {
        // $dsn = "mysql:host=localhost;dbname=Genstore";
        // $kunci = new PDO($dsn, "sqluser", "password");
        $dsn = "mysql:host=localhost;dbname=Genstore";
        $kunci = new PDO($dsn, "sqluser", "password");
        $nama = $_GET['nama'];
        $sql = "DELETE FROM Menu WHERE nim = '{$nama}'";
        $stmt = $kunci->prepare($sql);
        $stmt->execute();
    }
    ?>

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
            <?php
            while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="card">
                <img class="card-img-top" src="{{ asset('uploads/' . $row['gambar']) }}" alt="Card image cap">
                    <div class="card-body">
                    <?= $row['gambar'] ?>
                        <h5 class="card-title"><?= $row['nama'] ?></h5>
                        <p class="card-text"><?= $row['harga'] ?></p>
                        <p class="card-text"><?= $row['kategori'] ?></p>
                        <p class="card-text"><?= $row['deskripsi'] ?></p>
                        <button class="btn btn-info" onclick="location.href='form.php?nama=<?= $row['nama'] ?>'">Edit</button>
                        <form action="delete.blade.php" method="post">
                            <input type="hidden" name="nama" value="<?= $row['nama'] ?>">
                            <button type="submit" class="btn btn-info" name="deleteStudent">Delete</button>
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </tbody>
        </table>
        <div class="button-container mt-3">
            <button class="button1" onclick="location.href='form.php'">Tambah Menu</button>
            <button class="button2" onclick="location.href='delete.php'">Delete Student</button>
        </div>
    </div>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>