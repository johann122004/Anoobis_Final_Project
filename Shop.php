<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Order Now</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>

    <body class = "MeSh">

        <div class = "Top">

            <?php #This serves as the main header design that has logo and buttons for navigation
                require ('header.php');
            ?>

        </div>

        <br><br><br><br><br>
        <div class = "MeShRe">

            <form action="Receipt.php" method = "POST">

                <h1>ORDERS</h1>

                <div class = "Order">
                    <?php
                    $conn = mysqli_connect('localhost','root','','anoobis') or die(mysqli_error($conn));
                    $result = mysqli_query($conn,'SELECT * FROM products');

                    while ($row = mysqli_fetch_assoc($result)){
                        $inputName = 'product_'.$row['id'];
                        echo "<p>";
                        echo "Product: " . $row['productName']." - PHP " . number_format($row['productPrice'], 2);
                        echo "/ Order: <input type='number' name ='". $inputName . "' min = '0'>";
                        echo "</p>";
                    }
                    ?>
                </div>

                <h1>ADDRESS</h1>
                <div class="Address">

                    <p>Name: </p>
                        <input type = "letter" name = "name" id = "name" required>
                    <p>Subdivision: </p>
                        <input type = "letter" name = "subd" id = "subd">

                    <p>Province: </p>
                        <input type = "letter" name = "prov" id = "prov">

                    <p>City: </p>
                        <input type = "letter" name = "city" id = "city">

                    <p>ZIP Code: </p>
                        <input type = "number" name = "zip" id = "zip">

                </div>

                <input type = "submit" value = "SUBMIT">
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $conn = mysqli_connect('localhost','root','','anoobis');
                $orderQuery = "INSERT INTO orders (OrderCount) VALUES ()";
                mysqli_query($conn, $orderQuery);
            }
            ?>
        </div>

        <div class="Bottom">

            <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
                require ('footer.php');
            ?>

        </div>

    </body>
</html>