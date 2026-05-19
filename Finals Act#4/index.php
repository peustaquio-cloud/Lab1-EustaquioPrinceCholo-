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
<!-- LAB 6 -->
<div class="lab">
    <h2>Lab 6: Password Checker</h2>

    <form method="POST">
        <input type="password" name="pass" placeholder="Enter Password" required>
        <button type="submit" name="checkPass">Check</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['checkPass'])){
            $password="cholo3315";

            if($_POST['pass']==$password){
                echo "Access Granted";
            }else{
                echo "Access Denied";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 7 -->
<div class="lab">
    <h2>Lab 7: Leap Year Checker</h2>

    <form method="POST">
        <input type="number" name="year" placeholder="Enter Year" required>
        <button type="submit" name="checkYear">Check</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['checkYear'])){
            $year=$_POST['year'];

            if(($year%4==0 && $year%100!=0) || ($year%400==0)){
                echo "$year is a Leap Year";
            }else{
                echo "$year is not a Leap Year";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 8 -->
<div class="lab">
    <h2>Lab 8: Nested If</h2>

    <form method="POST">
        <input type="number" name="ageVote" placeholder="Age" required>
        <input type="text" name="citizen" placeholder="Citizenship" required>
        <button type="submit" name="voteCheck">Check</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['voteCheck'])){
            $age=$_POST['ageVote'];
            $citizen=$_POST['citizen'];

            if($age>=18){
                if(strtolower($citizen)=="filipino"){
                    echo "Eligible to vote";
                }else{
                    echo "Not eligible";
                }
            }else{
                echo "Not eligible";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 9 -->
<div class="lab">
    <h2>Lab 9: Discount Calculator</h2>

    <form method="POST">
        <input type="number" name="purchase" placeholder="Purchase Amount" required>
        <button type="submit" name="discountBtn">Calculate</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['discountBtn'])){
            $purchase=$_POST['purchase'];

            if($purchase>=1000){
                $discount=.20*$purchase;
            }
            elseif($purchase>=500){
                $discount=.10*$purchase;
            }
            else{
                $discount=0;
            }

            $total=$purchase-$discount;

            echo "Discount: ₱".$discount."<br>";
            echo "Total: ₱".$total;
        }
        ?>
    </div>
</div>

<!-- LAB 10 -->
<div class="lab">
    <h2>Lab 10: Login System</h2>

    <form method="POST">
        <input type="text" name="user" placeholder="Username" required>
        <input type="password" name="loginPass" placeholder="Password" required>
        <button type="submit" name="loginBtn">Login</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['loginBtn'])){

            if($_POST['user']=="chols" && $_POST['loginPass']=="1234"){
                echo "Login Successful";
            }else{
                echo "Invalid Username or Password";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 11 -->
<div class="lab">
    <h2>Lab 11: Day of Week</h2>

    <form method="POST">
        <input type="number" name="day" min="1" max="7" required>
        <button type="submit" name="dayBtn">Show</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['dayBtn'])){
            switch($_POST['day']){
                case 1: echo "Monday"; break;
                case 2: echo "Tuesday"; break;
                case 3: echo "Wednesday"; break;
                case 4: echo "Thursday"; break;
                case 5: echo "Friday"; break;
                case 6: echo "Saturday"; break;
                case 7: echo "Sunday"; break;
                default: echo "Invalid";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 12 -->
<div class="lab">
    <h2>Lab 12: Grade Description</h2>

    <form method="POST">
        <input type="text" name="letter" placeholder="A/B/C/D/F" required>
        <button type="submit" name="gradeBtn">Check</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['gradeBtn'])){
            switch(strtoupper($_POST['letter'])){
                case "A": echo "Excellent"; break;
                case "B": echo "Very Good"; break;
                case "C": echo "Good"; break;
                case "D": echo "Passing"; break;
                case "F": echo "Failed"; break;
                default: echo "Invalid";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 13 -->
<div class="lab">
    <h2>Lab 13: Simple Calculator</h2>

    <form method="POST">
        <input type="number" name="n1" placeholder="First Number" required>
        <input type="number" name="n2" placeholder="Second Number" required>
        <input type="text" name="op" placeholder="+ - * /" required>
        <button type="submit" name="calcBtn">Compute</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['calcBtn'])){
            $a=$_POST['n1'];
            $b=$_POST['n2'];

            switch($_POST['op']){
                case "+": echo $a+$b; break;
                case "-": echo $a-$b; break;
                case "*": echo $a*$b; break;
                case "/": echo $a/$b; break;
                default: echo "Invalid";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 14 -->
<div class="lab">
    <h2>Lab 14: Menu Selection</h2>

    <form method="POST">
        <input type="number" name="menu" placeholder="1-3" required>
        <button type="submit" name="menuBtn">Select</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['menuBtn'])){
            switch($_POST['menu']){
                case 1: echo "Add"; break;
                case 2: echo "Edit"; break;
                case 3: echo "Delete"; break;
                default: echo "Invalid";
            }
        }
        ?>
    </div>
</div>

<!-- LAB 15 -->
<div class="lab">
    <h2>Lab 15: Month Generator</h2>

    <form method="POST">
        <input type="number" name="month" min="1" max="12" required>
        <button type="submit" name="monthBtn">Generate</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['monthBtn'])){
            $months=array(
                1=>"January",2=>"February",3=>"March",
                4=>"April",5=>"May",6=>"June",
                7=>"July",8=>"August",9=>"September",
                10=>"October",11=>"November",12=>"December"
            );

            echo $months[$_POST['month']];
        }
        ?>
    </div>
</div>

<!-- LAB 16 -->
<div class="lab">
    <h2>Lab 16: Traffic Light System</h2>

    <form method="POST">
        <input type="text" name="light" placeholder="red/yellow/green" required>
        <button type="submit" name="lightBtn">Check</button>
    </form>

    <div class="result">
        <?php
        if(isset($_POST['lightBtn'])){
            switch(strtolower($_POST['light'])){
                case "red":
                    echo "Stop";
                    break;

                case "yellow":
                    echo "Slow Down";
                    break;

                case "green":
                    echo "Go";
                    break;

                default:
                    echo "Invalid Color";
            }
        }
        ?>
    </div>
</div>
</div>

</body>
</html>