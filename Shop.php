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
            <form action = "Receipt.php" method = "POST">

                <h1>ORDERS</h1>

                <div class = "Order">
                    <p>Product 1: Anubis' Dark Roast - PHP 90.00 / Order: <input type = "number" name = "Anubis"> </p>
                    <p>Product 2: Jackal's Delight - PHP 95.00 / Order: <input type = "number" name = "Jackal"> </p>
                    <p>Product 3: Coffin Spice - PHP 100.00 / Order: <input type = "number" name = "Coffin"> </p>
                    <p>Product 4: Pharaoh's Nectar - PHP 130.00 / Order: <input type = "number" name = "Pharaoh"> </p>
                    <p>Product 5: Ankh Americano - PHP 110.00 / Order: <input type = "number" name = "Ankh"> </p>
                    <p>Product 6: Golden Scarab Latte - PHP 125.00 / Order: <input type = "number" name = "Scarab"> </p>
                </div>

                <h1>ADDRESS</h1>
                <div class="Address">

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
        </div>



        <div class="Bottom">

            <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
                require ('footer.php');
            ?>

        </div>

    </body>
</html>