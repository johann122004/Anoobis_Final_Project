<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel = "stylesheet" href = "styles_admin.css">
</head>
    <body>
        <div class = "Top">
            <?php #This serves as the main header design that has logo and buttons for navigation
                require ('adminHeader.php');
            ?>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <?php
        session_start();
        $conn = mysqli_connect('localhost','root','','anoobis');
        $result = mysqli_query($conn,'SELECT COUNT(*) AS totalOrders FROM orders');
        $row = mysqli_fetch_assoc($result);
        $orderCount = $row['totalOrders'];
        echo "<h1>WELCOME ADMIN TO THE ADMIN PAGE.</h1>";
        echo "<img src ='Logo.png' width ='25%' height = '25%'>";
        echo "<h2>Total Orders: ". $orderCount."</h2>";
        ?>
        <div class = "Bottom">

            <?php #This section is the footer, containing info about Anoobis and contact info that links to another page

                require ('adminFooter.php');

            ?>

        </div>
    </body>
</html>