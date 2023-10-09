<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Mahasiswa</title>

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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['nama'])){
            $dsn = "mysql:host=localhost;dbname=Genstore";
            $kunci = new PDO($dsn, "root", "");

            $nama = $_POST['nama'];
            $sql = "DELETE FROM Menu WHERE nama = '{$nama}'";
            $statement = $kunci->prepare($sql);
            $statement->execute();

            header("Location: index.php");
            exit();
        }
    }
    ?>
    <div class="container">
        <div class="card-image">	
			<h2 class="card-heading">
				DELETE
				<small>Delete a Student Info</small>
			</h2>
		</div>

        <form action="delete.php" method="post" enctype="multipart/form-data" onsubmit="redirectToIndex()">
            <div class="input">    
                <input type="text" name="nama" class="input-field" required/>
                <label class="input-label">Nama</label>
            </div>
            <br />

            <button type="submit" class="button">Delete</button>
        </form>
    </div>
</body>
</html>