<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];

        $filename = $_FILES['gambar']['name'];
        $temp_file = $_FILES['gambar']['tmp_name'];

        $file_ext = explode(".", $filename);
        $file_ext = end($file_ext);
        $file_ext = strtolower($file_ext);
        move_uploaded_file($temp_file, "uploads/{$filename}");

        $gambar = $filename;
        // 1
        // $dsn = "mysql:host=localhost;dbname=studentData";
        // $kunci = new PDO($dsn, "root", "");
        $dsn = "mysql:host=localhost;dbname=Genstore";
        $kunci = new PDO($dsn, "sqluser", "password");

        // 2
        $sql = "INSERT INTO Menu(nama, harga, kategori, deskripsi, gambar) 
        VALUES (:nama, :harga, :kategori, :deskripsi, :gambar) 
        ON DUPLICATE KEY UPDATE 
        harga = VALUES(harga), kategori = VALUES(kategori), deskripsi = VALUES(deskripsi), gambar = VALUES(gambar)";

        $stmt = $kunci->prepare($sql);
        $data = [
            ':nama' => $nama,
            ':harga' => $harga,
            ':kategori' => $kategori,
            ':deskripsi' => $deskripsi,
            ':gambar' => $gambar
        ];
        $stmt->execute($data);

        header("Location: index.php");
    ?>
</body>
</html>