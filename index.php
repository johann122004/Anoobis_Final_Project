<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="styles_index.css">
</head>
<body>
    <div class="Top">
        <?php #This serves as the main header design that has logo and buttons for navigation
            require ('header.php');
        ?>
    </div>
    <br><br><br><br><br><br>
    <div class = Content>
        <div class = "Left">
            <h1>"Craving the taste of the afterlife? One sip, and you're resurrected."</h1>
            <img src="Coffee_Beans.png" alt="" width="55%" height="55%">
            <p> <a href="Shop.php">NOM NOM NOM</a></p>
        </div>

        <div class = "Right">
            <h1>"A brew of Ancient magic and modern mastery - every sip awakens the gods."</h1>
            <img src="Coffee.png" alt="" width="55%" height="55%">
            <p><a href="Product.php"> Our Products</a></p>
        </div>
    </div>
    <div class="Bottom">
        <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
        require ('footer.php');
        ?>
    </div>
</body>
</html>
