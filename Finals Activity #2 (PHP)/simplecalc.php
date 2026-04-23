<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <style>
        body {
            font-family: "Comic Sans MS", Arial;
            background: linear-gradient(to bottom, #dff6ff, #ffffff);
            text-align: center;
            margin: 0;
        }

        .card {
            background: white;
            margin: 60px auto;
            padding: 25px;
            width: 300px;
            border-radius: 20px;
            border: 3px dashed #b3e5fc;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #5aa9e6;
        }
    </style>
</head>

<body>

<div class="card">
    <h2>☁️ Simple Calculator ☁️</h2>

    <?php
    $num1 = 8;
    $num2 = 4;

    echo "Sum: " . ($num1 + $num2) . "<br>";
    echo "Difference: " . ($num1 - $num2) . "<br>";
    echo "Product: " . ($num1 * $num2) . "<br>";
    echo "Quotient: " . ($num1 / $num2);
    ?>

</div>

</body>
</html>