<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Receipt</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>

    <body class = "receipt">


        <div class = "Top">
            <?php #This serves as the main header design that has logo and buttons for navigation
                require ('header.php');
            ?>
        </div>

        <br><br><br><br><br><br>

        <div class = "Receipt">

            <?php
                $conn = mysqli_connect('localhost','root','','anoobis');
                $result = mysqli_query($conn,'SELECT * FROM products');
                $finaltotal = 0;
            ?>

            <table>
                <tr>
                    <th><h1>Product Name</h1></th>
                    <th><h1>Price</h1></th>
                    <th><h1>Quantity</h1></th>
                    <th><h1>Cost</h1></th>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)){
                    $productName = $row['productName'];
                    $productPrice = $row['productPrice'];
                    $inputName = 'product_'.$row['id'];
                    if(isset($_POST[$inputName]) && intval ($_POST[$inputName]) > 0){
                        $quantity = intval ($_POST[$inputName]);
                        $cost = $productPrice * $quantity;
                        $finaltotal += $cost;

                        echo "<tr>
                                <td><p class = 'Item'>". htmlspecialchars($productName) ."</p></td>
                                <td><p class = 'Price'> PHP " . number_format($productPrice, 2)."</p></td>
                                <td><p class = 'Quan'>".$quantity."</p></td>
                                <td><p class = 'Cost'> PHP " . number_format($cost, 2)."</p></td>
                            </tr>";
                    }
                }
                ?>
            </table>
            <h2 class = "Total">Total: PHP <?php echo number_format($finaltotal,2);?> </h2>

            <?php
                if(!empty($_POST['name'])){
                    echo "<h2 class = 'Name'> Name: ". htmlspecialchars($_POST['name']). "</h2>";
                }
            ?>

        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class = "Bottom">

            <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
                require ('footer.php');
            ?>

        </div>

    </body>
</html>