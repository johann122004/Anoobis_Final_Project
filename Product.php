<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Product List</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>
        <body class = "MeSh">

            <div class = "Top">
                <?php #This serves as the main header design that has logo and buttons for navigation
                    require ('header.php');
                ?>
            </div>

            <br><br><br><br><br><br>



            <div class = "Coffee">

                <?php
                $conn = mysqli_connect('localhost','root','','anoobis');
                $result = mysqli_query($conn,'SELECT * FROM products');

                while ($row = mysqli_fetch_assoc($result)){
                    echo "<div class = 'product'>";
                    echo "<img src = '". $row['productIMG']. "' width = '300' height ='300'>";
                    echo "<p>Name: ". $row['productName']."</p>";
                    echo "<p>Description: ". $row['productDscrp']."</p>";
                    echo "<p>Price: ". number_format($row['productPrice'], 2)."</p>";
                    echo "</div>";
                }
                ?>

            </div>

            <br><br><br><br><br>

            <div class = "Bottom">

                <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
                require ('footer.php');
                ?>

            </div>

        </body>
</html>