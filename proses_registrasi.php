<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $NIM = $_POST["NIM"];
        $Nama = $_POST["Nama"];
        $JenisKelamin = $_POST["JenisKelamin"];
        $Prodi = $_POST["Prodi"];
        $Skills = isset($_POST["Skills"]) ? $_POST["Skills"] : [];
        $Domisili = $_POST["Domisili"];
        $Email = $_POST["Email"];


        // Menampilkan output
        ?>
        <div class="result-container">
            <h2>Hasil Registrasi:</h2>
            <p>NIM: <?php echo $NIM; ?></p>
            <p>Nama Lengkap: <?php echo $Nama; ?></p>
            <p>Jenis Kelamin: <?php echo $JenisKelamin; ?></p>
            <p>Program Studi: <?php echo $Prodi; ?></p>
            <p>Skills: <?php echo implode(", ", $Skills); ?></p>
            <p>Domisili: <?php echo $Domisili; ?></p>
            <p>Email: <?php echo $Email; ?></p>
        </div>
        <?php
    } else {
        echo "<p>Invalid request method</p>";
    }
    ?>
</body>
</html>
