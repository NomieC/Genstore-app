<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        label{
            margin-bottom: 5px;
        }

        body{
            background-color: #f4e1d2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #faf6f2;
        }

        .card {
            margin: 1rem auto;
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 425px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 10px 20px 0 rgba(#999, .25);
            padding: .75rem;
        }

        .card-image {
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
            padding-bottom: 65%;
            background-image: url('https://assets.codepen.io/285131/coffee_1.jpg');
            background-repeat: no-repeat;
            background-size: 150%;
            background-position: 0 5%;
            position: relative;
        }

        .card-heading {
            position: absolute;
            left: 10%;
            top: 15%;
            right: 10%;
            font-size: 1.75rem;
            font-weight: 700;
            color: #735400;
            line-height: 1.222;
        }

        small {
            display: block;
            font-size: .75em;
            font-weight: 400;
            margin-top: .25em;
        }

        .input {
            display: flex;
            flex-direction: column-reverse;
            position: relative;
            padding-top: 1.5rem;
            margin-top: 1.5rem;
        }

        .input-label {
            font-weight: bold;
            color: #5c4938;
            position: absolute;
            top: 1.5rem;
            transition: 0.25s ease;
        }

        .input-field {
            height: 50px;
            font-size: 16px;
            border: 0;
            border-radius: 5px;
            z-index: 1;
            background-color: transparent;
            border-bottom: 2px solid #5c4938;
            font: inherit;
            font-size: 1.125rem;
            padding: 0.25rem 0;
        }

        .input-field:focus,
        .input-field:valid {
            outline: 0;
            border-bottom-color: #5c4938;
        }

        .input-field:focus+.input-label,
        .input-field:valid+.input-label {
            color: #5c4938;
            transform: translateY(-1.5rem);
        }

        .button {
            background-color: #80664f;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #5c4938;
        }
    </style>

</head>
<body>
    <?php
            $dsn = "mysql:host=localhost;dbname=Genstore";
            $kunci = new PDO($dsn, "sqluser", "password");
        
        if(isset($_GET['nama'])){
            $nama = $_GET['nama'];
        }

        try {
            $sql = "SELECT * FROM menu WHERE nama = :nama";
            $statement = $kunci->prepare($sql);
            $statement->bindParam(':nama', $nama);
            $statement->execute();
    
            $studentData = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($studentData) {
                $nama = $studentData['nama'];
                $harga = $studentData['harga'];
                $kategori = $studentData['kategori'];
                $deskripsi = $studentData['deskripsi'];
                $gambar = $studentData['gambar'];
            } else {
                $nama = '';
                $harga = '';
                $kategori = '';
                $deskripsi = '';
                $gambar = '';
            }
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
        }

    ?>

    <div class="container">
        <div class="card-image">	
			<h2 class="card-heading">
				Get started
				<small>Register Your Student Info</small>
				<small>(Enter same nim to update data)</small>
			</h2>
		</div>

        <form action="/createMenu" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <input type="text" name="nama" class="input-field" required/>
                <label class="input-label">Name</label>
            </div>

            <div class="input">    
                <input type="text" name="harga" class="input-field" required/>
                <label class="input-label">Harga</label>
            </div>
    
            <div class="input">
                <input type="text" name="kategori" class="input-field" required/>
                <label class="input-label">Kategori</label>
            </div>
            
            <div class="input">
                <input type="text" name="deskripsi" class="input-field" required/>
                <label class="input-label">Deskripsi</label>
            </div>

            <div class="input">
                <input type="file" name="gambar" required/>
                <label class="input-label">Insert Your Photo</label><br />
            </div>
            
            <?php
                if (isset($gambar) && !empty($gambar)) {
                    echo '<img src="uploads/' . $gambar . '" alt="Student Image" 
                        style="max-width: 300px; max-height: 300px; border-radius: 20px; margin: 10px 0px">';
                }
            ?>
            <br>
            
            <button type="submit" class="button">Submit</button>
 
        </form>
    </div>



</body>
</html>