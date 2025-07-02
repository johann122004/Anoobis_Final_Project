<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class = "receipt">
    <div class="Top">
        <?php #This serves as the main header design that has logo and buttons for navigation
            require ('header.php');
        ?>
    </div>
    <br><br><br><br><br><br>
    <div class="Receipt">
        <?php
        $finaltotal = 0;
        $items = array("Anubis" => 90.00, "Jackal" => 95.00, "Coffin" => 100.00,
        "Pharaoh" => 130.00, "Ankh" => 110.00, "Scarab" => 125.00);
        ?>
        <table>
            <tr>
                <th><h1>Product Name</h1></th>
                <th><h1>Price</h1></th>
                <th><h1>Quantity</h1></th>
                <th><h1>Cost</h1></th>
            </tr>
            <?php
            foreach ($items as $item => $price) {
                if(isset($_POST[$item]) && ($_POST[$item] > 0)){
                    $quantity = $_POST[$item];
                    $cost = $price * $quantity;
                    $finaltotal += $cost;
                    ?>
                    <tr>
                        <td><?php echo "<p class = 'Item'>".$item."</p>"; ?></td>
                        <td><?php echo "<p class = 'Price'> PHP " . number_format($price, 2)."</p>"; ?></td>
                        <td><?php echo "<p class = 'Quan'>".$quantity."</p>"; ?></td>
                        <td><?php echo "<p class = 'Cost'> PHP " . number_format($cost, 2)."</p>"; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <?php
            echo"<h2 class='Time'>Expected Time: " .rand(3,8). " Minutes</h2>";
            echo "<h2 class='Total'>Total Cost: PHP ".  number_format($finaltotal, 2)."</h2>";
            echo"<h2 class='Dist'>Distance from you: " .rand(5,10). " km</h2>";
        ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="Bottom">
        <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
        require ('footer.php');
        ?>
    </div>
</body>
</html>