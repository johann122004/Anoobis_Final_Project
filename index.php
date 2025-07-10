<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title> Log-in </title>
    <link rel = "stylesheet" href = "styles_index.css">
</head>
<body>
    <div class = "Top" >

        <?php #This serves as the main header design that has logo and buttons for navigation
            require ('headerindex.php');
        ?>

    </div>

    <br><br><br><br><br><br>

    <div class = Log>
        <form method = "POST" >
            <h1>LOG-IN</h1>
            <p>Username: <input type="text" name="uname"><br><br></p>
            <p>Password: <input type="password" name="password"> <br><br></p>
            <p><input type="submit" value="Log-in" name="login"></p>

        </form>
        
    </div>
    <div class="New"><a href="register.php"><p>Register a new user here.</p></a></div>
    
    <?php
        $conn = mysqli_connect("localhost","root","","anoobis") or die(mysqli_error());
        if(isset($_POST["login"])){
            $username = $_POST["uname"];
            $password = $_POST["password"];
            $query1 = mysqli_query($conn,"select * from users");
            if ( mysqli_num_rows ($query1) > 0 ) {
                while ( $rows = mysqli_fetch_assoc ($query1) ) {
                    $dbuser = $rows["name"];
                    $dbpass = $rows["password"];
                    if ( $username == $dbuser && $password == $dbpass ) {
                        header ("Location: home.php" );
                        exit();
                    }
                    else{
                        echo
                            "<script>
                                alert('wrong username or password. Invalid login. Please try again.');
                            </script>";
                    }
                }
            }
            $query2 = mysqli_query($conn,"select * from admin");
            if ( mysqli_num_rows ($query2) > 0 ) {
                while ( $rows = mysqli_fetch_assoc ($query2) ) {
                    $dbuser = $rows["adminName"];
                    $dbpass = $rows["adminPassword"];
                    if ( $username == $dbuser && $password == $dbpass ) {
                        header ("Location: admin.php" );
                        exit();
                    }
                    else{
                        echo
                            "<script>
                                alert('wrong username or password. Invalid login. Please try again.');
                            </script>";
                    }
                }
            }
            else{
                echo
                    "<script>
                        alert('no result');
                    </script>";
            }
        }
    ?>

    <div class = "Bottom" >
        <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
            require ('footerindex.php');
        ?>
    </div>
    
</body>
</html>
