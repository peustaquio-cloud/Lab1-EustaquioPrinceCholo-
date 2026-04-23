<!DOCTYPE html>
<html>
<head>
    <title>PHP Activities - Cinnamoroll Theme</title>

    <style>
        body {
            font-family: "Comic Sans MS", Arial;
            background: linear-gradient(to bottom, #dff6ff, #ffffff);
            margin: 0;
            text-align: center;
        }

        header {
            background: #b3e5fc;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            border-bottom: 4px solid #81d4fa;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            margin: 20px auto;
            padding: 20px;
            width: 320px;
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            border: 3px dashed #b3e5fc;
        }

        h2 {
            color: #5aa9e6;
            margin-top: 0;
        }

        footer {
            margin-top: 30px;
            padding: 10px;
            background: #b3e5fc;
        }
    </style>
</head>

<body>

<header>
    ☁️ FINAL ACTIVITY 2 ☁️
</header>

<div class="container">

    <!-- ACTIVITY 1 -->
    <div class="card">
        <h2>ACTIVITY 1: Basic Output</h2>
        <?php
        echo "Name: Prince Cholo Eustaquio <br>";
        print "Course: BSIT-1X<br><br>";

        echo "Symbol to end PHP statement: ; <br>";
        echo "Faster output: echo";
        ?>
    </div>

    <!-- ACTIVITY 2 -->
    <div class="card">
        <h2>ACTIVITY 2: Multiple Outputs</h2>
        <?php
        echo "Welcome Everyone!<br>";
        echo "I really love Cinnamoroll!<br>";
        echo "Have a wonderful day!";
        ?>
    </div>

    <!-- ACTIVITY 3 -->
    <div class="card">
        <h2>ACTIVITY 3: Variables</h2>
        <?php
        $name = "Chols";
        $age = 20;

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age;
        ?>
    </div>

    <!-- ACTIVITY 4 -->
    <div class="card">
        <h2>ACTIVITY 4: Fixed Variables</h2>
        <?php
        $name = "Ana";
        $age = 18;

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age;
        ?>
    </div>

    <!-- ACTIVITY 5 -->
    <div class="card">
        <h2>ACTIVITY 5: Arithmetic</h2>
        <?php
        $a = 10;
        $b = 3;

        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b);
        ?>
    </div>

    <!-- ACTIVITY 6 -->
    <div class="card">
        <h2>ACTIVITY 6: Assignment</h2>
        <?php
        $x = 5;
        $x += 3;

        echo "Output: " . $x;
        ?>
    </div>

    <!-- ACTIVITY 7 -->
    <div class="card">
        <h2>ACTIVITY 7: Comparison</h2>
        <?php
        $a = 10;
        $b = 5;

        var_dump($a > $b);
        echo "<br>";
        var_dump($a == $b);
        ?>
    </div>

</div>

<footer>
    Made with ☁️💙 | PHP Practice
</footer>

</body>
</html>