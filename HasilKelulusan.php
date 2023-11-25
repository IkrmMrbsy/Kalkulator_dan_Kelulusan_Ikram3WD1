<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #219ebc;
        }

        .form-container,
        .result-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #219ebc;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #ef476f;
        }

        h3 {
            margin-top: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .tidak-lulus {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Formulir Nilai</h2>

    <div class="form-container">
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required>

            <label for="score">Nilai:</label>
            <input type="number" name="nilai" required>

            <label for="attendance">Absen:</label>
            <input type="number" name="absen" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $nim = $_POST["nim"];
            $nilai = $_POST["nilai"];
            $absen = $_POST["absen"];

            echo "<h3>Student Information:</h3>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Nilai:</strong> $nilai</p>";
            echo "<p><strong>Absen:</strong> $absen</p>";

            if ($nilai >= 75 && $absen >= 75) {
                echo "<p class='lulus'>Status: Lulus</p>";
            } else {
                echo "<p class='tidak-lulus'>Status: Tidak Lulus</p>";
            }
        }
        ?>
    </div>

</body>
</html>
