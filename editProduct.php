<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Editing Page</title>
    <link rel = "stylesheet" href = "styles_admin.css">
</head>
<body>
    <div class = "Top">
        <?php #This serves as the main header design that has logo and buttons for navigation
            require ('adminHeader.php');
        ?>
    </div>
    <br><br><br><br><br><br>
    <?php
    $conn = mysqli_connect("localhost","root","","anoobis");
    if(isset($_POST['add'])){
        $name = $_POST['productName'];
        $desc = $_POST['productDscrp'];
        $price = $_POST['productPrice'];
        $img = $_POST['productIMG'];

        mysqli_query($conn,"INSERT INTO products (productName, productDscrp, productPrice, productIMG) VALUES ('$name', '$desc', '$price', '$img')");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($conn,"DELETE FROM products WHERE id = $id");
    }
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $name = $_POST['productName'];
        $desc = $_POST['productDscrp'];
        $price = $_POST['productPrice'];
        $img = $_POST['productIMG'];

        mysqli_query($conn,"UPDATE products set productName = '$name', productDscrp = '$desc', productPrice = '$price', productIMG = '$img' WHERE id = $id");
    }
    $products = mysqli_query($conn,"SELECT * FROM products");
    ?>
    <h1>Product Editor</h1>
        <form method="POST">
            <input type="text" name="productName" placeholder="Name" required>
            <input type="text" name="productDscrp" size="50" placeholder="Description" required>
            <input type="number" step="0.01" name="productPrice" placeholder="Price" required>
            <input type="text" name="productIMG" placeholder="Image File (e.g. product.jpg)" required>
            <input type="submit" name="add" value = "Add Product">
        </form>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($products)) { ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <tr>
                    <td><input type="text" name="productName" value="<?= $row['productName'] ?>"></td>
                    <td><input type="text" name="productDscrp" size="50" value="<?= $row['productDscrp'] ?>"></td>
                    <td><input type="number" step="0.01" name="productPrice" value="<?= $row['productPrice'] ?>"></td>
                    <td><input type="text" name="productIMG" value="<?= $row['productIMG'] ?>"></td>
                    <td>
                        <input type="submit" name="edit" value="Update">
                        <a href="editProduct.php?delete=<?= $row['id'] ?>">ERASE</a>
                    </td>
                </tr>
            </form>
        <?php } ?>
    </table>
    <div class = "Bottom" >
        <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
            require ('adminFooter.php');
        ?>
    </div>
</body>
</html>