<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel = "stylesheet" href = "styles.css">
</head>

<body class = "MeSh">

    <!-- 🔼 TOP HEADER (logo, navigation) -->
    <div class = "Top">
        <?php require ('header.php'); ?>
    </div>

    <br><br><br><br><br>
    <div class = "MeShRe">

        <!-- 🛒 ORDER FORM -->
        <form action="shop.php" method="POST">
            <h1>ORDERS</h1>

            <div class="Order">
                <?php
                // 🟡 Connect to the database
                $conn = mysqli_connect('localhost','root','','anoobis') or die(mysqli_error($conn));
                $result = mysqli_query($conn,'SELECT * FROM products');

                // 🔁 Display all products as input fields
                while ($row = mysqli_fetch_assoc($result)){
                    $inputName = 'product_'.$row['id'];
                    echo "<p>";
                    echo "Product: " . $row['productName'] . " - PHP " . number_format($row['productPrice'], 2);
                    echo " / Order: <input type='number' name='". $inputName ."' min='0'>";
                    echo "</p>";
                }
                ?>
            </div>

            <!-- 📍 ADDRESS SECTION -->
            <h1>ADDRESS</h1>
            <div class="Address">
                <p>Name: </p><input type="text" name="name" id="name" required>
                <p>Subdivision: </p><input type="text" name="subd" id="subd">
                <p>Province: </p><input type="text" name="prov" id="prov">
                <p>City: </p><input type="text" name="city" id="city">
                <p>ZIP Code: </p><input type="number" name="zip" id="zip">
            </div>

            <input type="submit" value="SUBMIT">
        </form>

        <?php
        // 🟢 HANDLE FORM SUBMISSION
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = mysqli_connect('localhost','root','','anoobis') or die(mysqli_error($conn));

            // ✅ Insert a new empty order to increment the count
            $insertOrderQuery = "INSERT INTO orders () VALUES ()";

            if (mysqli_query($conn, $insertOrderQuery)) {
                echo "<p style='color: green;'>✔️ Order submitted successfully!</p>";
                $result = mysqli_query($conn,'SELECT * FROM products');
                $finaltotal = 0;
            } else {
                echo "<p style='color: red;'>❌ Error: " . mysqli_error($conn) . "</p>";
            }
            echo "<br><br><br><br><br>";
            echo "<h2 class ='summary'>ORDER SUMMARY</h2>";
            echo "<div class='result'>";
            $result = mysqli_query($conn, 'SELECT * FROM products');
            $finaltotal = 0;
            echo "<table>
                    <tr>
                        <th><h1>Product Name</h1></th>
                        <th><h1>Price</h1></th>
                        <th><h1>Quantity</h1></th>
                        <th><h1>Cost</h1></th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $productName = $row['productName'];
                $productPrice = $row['productPrice'];
                $inputName = 'product_' . $row['id'];
                if (isset($_POST[$inputName]) && intval($_POST[$inputName]) > 0) {
                    $quantity = intval($_POST[$inputName]);
                    $cost = $productPrice * $quantity;
                    $finaltotal += $cost;

                    echo "<tr>
                            <td><p class='Item'>" . htmlspecialchars($productName) . "</p></td>
                            <td><p class='Price'> PHP " . number_format($productPrice, 2) . "</p></td>
                            <td><p class='Quan'>" . $quantity . "</p></td>
                            <td><p class='Cost'> PHP " . number_format($cost, 2) . "</p></td>
                        </tr>";
                }
            }
            echo "</table>";
            echo "<h2 class='Total'>Total: PHP " . number_format($finaltotal, 2) . "</h2>";
            // Display address details (if provided)
            if (!empty($_POST['name'])) {
                echo "<h2 class='Name'>Name: " . htmlspecialchars($_POST['name']) . "</h2>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <!-- 🔽 FOOTER (info, contact, etc.) -->
    <div class="Bottom">
        <?php require('footer.php'); ?>
    </div>

</body>

</html>