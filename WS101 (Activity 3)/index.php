<!DOCTYPE html>
<html>
<head>
    <title>PHP Forms Laboratory Activities</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>PHP Forms Exercises</h2>

<form method="post"
action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- LAB 1 -->
    <h3>Name Input</h3>

    <label>Name</label>
    <input type="text" name="name"
    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
    required>

    <hr>

    <!-- LAB 3 -->
    <h3>Email Input</h3>

    <label>Email</label>
    <input type="email" name="email"
    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
    required>

    <hr>

    <!-- LAB 7 -->
    <h3>Gender</h3>

    <input type="radio" name="gender" value="Male"
    <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked"; ?>>
    Male

    <input type="radio" name="gender" value="Female"
    <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked"; ?>>
    Female

    <hr>

    <!-- LAB 8 -->
    <h3>Course</h3>

    <select name="course" required>

        <option value="">Select Course</option>

        <option value="BSIT"
        <?php if(isset($_POST['course']) && $_POST['course']=="BSIT") echo "selected"; ?>>
        BSIT
        </option>

        <option value="BSCS"
        <?php if(isset($_POST['course']) && $_POST['course']=="BSCS") echo "selected"; ?>>
        BSCS
        </option>

        <option value="BSEd"
        <?php if(isset($_POST['course']) && $_POST['course']=="BSEd") echo "selected"; ?>>
        BSEd
        </option>

    </select>

    <hr>

    <!-- LAB 9 -->
    <h3>Message</h3>

    <textarea name="message" required><?php
    echo isset($_POST['message']) ?
    htmlspecialchars($_POST['message']) : '';
    ?></textarea>

    <hr>

    <!-- LAB 13 -->
    <h3>Password</h3>

    <label>Password</label>
    <input type="password" name="password" required>

    <hr>

    <!-- LAB 14 -->
    <h3>Hobbies</h3>

    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <br>

    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
    <br>

    <input type="checkbox" name="hobbies[]" value="Sports"> Sports

    <hr>

    <!-- LAB 16 -->
    <h3>Age</h3>

    <label>Age</label>

    <input type="number" name="age"
    value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>"
    required>

    <hr>

    <!-- LAB 15 -->
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form>

<div class="result">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    /* LAB 5 */
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $gender = isset($_POST['gender']) ?
    htmlspecialchars($_POST['gender']) : '';

    $course = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars(trim($_POST['message']));
    $age = $_POST['age'];

    /* LAB 4 */
    if(empty($name) || empty($email) ||
       empty($gender) || empty($course) ||
       empty($message) || empty($age)){

        echo "<div class='error'>All fields are required.</div>";

    }

    /* LAB 6 */
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        echo "<div class='error'>Invalid email format.</div>";

    }

    /* LAB 16 */
    elseif(!is_numeric($age) || $age < 1 || $age > 120){

        echo "<div class='error'>Invalid age.</div>";

    }

    else{

        echo "<div class='success'>Form Submitted Successfully!</div><br>";

        echo "<strong>Name:</strong> $name <br><br>";

        echo "<strong>Email:</strong> $email <br><br>";

        echo "<strong>Gender:</strong> $gender <br><br>";

        echo "<strong>Course:</strong> $course <br><br>";

        echo "<strong>Age:</strong> $age <br><br>";

        echo "<strong>Message:</strong><br>$message <br><br>";

        if(isset($_POST['hobbies'])){

            echo "<strong>Hobbies:</strong> ";

            echo implode(", ", $_POST['hobbies']);

            echo "<br><br>";
        }

        echo "<strong>Password:</strong> Hidden for security reasons.";
    }
}

?>

</div>

</div>

</body>
</html>