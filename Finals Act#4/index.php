<!DOCTYPE html>
<html>
<head>
    <title>PHP Interactive Labs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>PHP If & Switch Statement Labs</h1>

    <!-- LAB 1 -->
    <div class="lab">
        <h2>Lab 1: Voting Eligibility</h2>

        <form method="POST">
            <input type="number" name="age" placeholder="Enter your age" required>
            <button type="submit" name="checkAge">Check</button>
        </form>

        <div class="result">
            <?php
            if(isset($_POST['checkAge'])) {
                $age = $_POST['age'];

                if($age >= 18) {
                    echo "You are eligible to vote";
                } else {
                    echo "You are not eligible to vote";
                }
            }
            ?>
        </div>
    </div>

    <!-- LAB 2 -->
    <div class="lab">
        <h2>Lab 2: Positive or Negative</h2>

        <form method="POST">
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit" name="checkNumber">Check</button>
        </form>

        <div class="result">
            <?php
            if(isset($_POST['checkNumber'])) {
                $number = $_POST['number'];

                if($number >= 0) {
                    echo "Positive Number";
                } else {
                    echo "Negative Number";
                }
            }
            ?>
        </div>
    </div>

    <!-- LAB 3 -->
    <div class="lab">
        <h2>Lab 3: Grade Checker</h2>

        <form method="POST">
            <input type="number" name="grade" placeholder="Enter grade" required>
            <button type="submit" name="checkGrade">Check</button>
        </form>

        <div class="result">
            <?php
            if(isset($_POST['checkGrade'])) {
                $grade = $_POST['grade'];

                if($grade >= 90 && $grade <= 100) {
                    echo "Excellent";
                } elseif($grade >= 80) {
                    echo "Good";
                } elseif($grade >= 70) {
                    echo "Average";
                } else {
                    echo "Failed";
                }
            }
            ?>
        </div>
    </div>

    <!-- LAB 4 -->
    <div class="lab">
        <h2>Lab 4: Even or Odd Checker</h2>

        <form method="POST">
            <input type="number" name="evenodd" placeholder="Enter a number" required>
            <button type="submit" name="checkEvenOdd">Check</button>
        </form>

        <div class="result">
            <?php
            if(isset($_POST['checkEvenOdd'])) {
                $num = $_POST['evenodd'];

                if($num % 2 == 0) {
                    echo "Even Number";
                } else {
                    echo "Odd Number";
                }
            }
            ?>
        </div>
    </div>

    <!-- LAB 5 -->
    <div class="lab">
        <h2>Lab 5: Largest of Three Numbers</h2>

        <form method="POST">
            <input type="number" name="num1" placeholder="First Number" required>
            <input type="number" name="num2" placeholder="Second Number" required>
            <input type="number" name="num3" placeholder="Third Number" required>

            <button type="submit" name="largest">Find Largest</button>
        </form>

        <div class="result">
            <?php
            if(isset($_POST['largest'])) {

                $a = $_POST['num1'];
                $b = $_POST['num2'];
                $c = $_POST['num3'];

                if($a > $b && $a > $c) {
                    echo "$a is the largest";
                } elseif($b > $a && $b > $c) {
                    echo "$b is the largest";
                } else {
                    echo "$c is the largest";
                }
            }
            ?>
        </div>
    </div>

</div>

</body>
</html>