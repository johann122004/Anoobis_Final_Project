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
            } else {
                echo "<p style='color: red;'>❌ Error: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
    </div>

    <!-- 🔽 FOOTER (info, contact, etc.) -->
    <div class="Bottom">
        <?php require ('footer.php'); ?>
    </div>

</body>
</html>
