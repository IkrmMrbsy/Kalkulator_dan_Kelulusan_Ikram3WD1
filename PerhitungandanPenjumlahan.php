<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penjumlahan</title>
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

        .calculator-container {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="number"]:hover{
            border-color: #219ebc;
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
            color: #219ebc;
            margin-top: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        select{
            width: 80px;
            height: 35px;
            text-align: center;
            background-color: #219ebc;
            transition: background-color 0.3s;
        }

        select:hover{
            background-color:#ef476f;
        }

        #result {
            font-size: 18px;
            font-weight: bold;
            color: #ef476f;
        }

        option{
            font-size: 18px;
        }
    </style>
</head>
<body>

    <h2>Calculator</h2>

    <div class="calculator-container">
        <form method="post">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" required>
            <br>

            <label for="num2">Number 2:</label>
            <input type="number" name="num2" required>
            <br>

            <select name="operator">
                <option value="" selected="true" disabled>Operator</option>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>

            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
            $result = 0;

            switch ($operator) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p id='result'>Error: Cannot divide by zero</p>";
                    }
                    break;
                default:
                    echo "<p id='result'>Error: Invalid operator</p>";
                    break;
            }

            if ($operator != "divide" || $num2 != 0) {
                echo "<h3>Result:</h3>";
                echo "<p id='result'>$result</p>";
            }
        }
        ?>
    </div>

</body>
</html>
