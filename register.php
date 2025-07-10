<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "styles_index.css">
</head>
<body>
    <div class = "Top" >

        <?php #This serves as the main header design that has logo and buttons for navigation
            require ('headerindex.php');
        ?>

    </div>
    <br><br><br><br><br><br>
    <div class = Reg>

        <form method = "POST" >
            <h1>REGISTER</h1>
            <p>Username: <input type="text" name="uname"><br><br></p>
            <p>Password: <input type="password" name="password"> <br><br></p>
            <p><input type="submit" value="Register" name="register"></p>

        </form>
    </div>
    <div class="Old"><a href="index.php"><p>Already a user? Click here.</p></a></div>
<?php
    $conn = mysqli_connect("localhost", "root", "", "anoobis") or die(mysqli_error());
    if (isset($_POST["register"])) {
        $username = $_POST["uname"];
        $password = $_POST["password"];
        $exists = mysqli_query($conn, "SELECT * FROM users WHERE name='$username'");
        if (mysqli_num_rows($exists) > 0) {
            echo "<script>alert('Username already exists. Please try a different one.');</script>";
        } else {
            mysqli_query($conn, "INSERT INTO users (name, password) VALUES ('$username', '$password')");
            echo "<script>alert('Registration successful!'); window.location='index.php';</script>";
            header ("Location: home.php" );
        }
    }
?>

    </div>


        <div class = "Bottom" >
        <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
            require ('footerindex.php');
        ?>

    </div>

</body>
</html>