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

                <div class = "product1">
                    <img src = "Anubis_Dark_Roast.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Anubis' Dark Roast</p>
                    <p>Description: Rich, Bold, Anubis' Dark Roast will energize you with the energy of the God of the Afterlife.</p>
                    <p>Price: PHP 90.00</p>
                </div>



                <div class = "product2">
                    <img src = "Jackal's_Delight.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Jackal's Delight</p>
                    <p>Description: Experience the life of a Jackal and scream in joy as you taste in it's special delightful drink.</p>
                    <p>Price: PHP 95.00</p>
                </div>



                <div class = "product3">
                    <img src = "Coffin_Spice.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Coffin Spice</p>
                    <p>Description: Spice your life up in the tomb that resides the Coffin Spice.</p>
                    <p>Price: PHP 100.00</p>
                </div>



                <div class = "product4">
                    <img src = "Pharaoh's_Nectar.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Pharaoh's Nectar</p>
                    <p>Description: Sweet and Elegant. Dare to taste Royalty as you indulge on the Pharaoh's Nectar sweets.</p>
                    <p>Price: PHP 130.00</p>
                </div>



                <div class = "product5">
                    <img src = "Ankh_Americano.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Ankh Americano</p>
                    <p>Description: Unlock the Key of Life through the indulgence of the Ankh Americano.</p>
                    <p>Price: PHP 110.00</p>
                </div>



                <div class = "product6">
                    <img src = "Golden_Scarab_Latte.jpg" alt = "" width = "300" height = "300">
                    <p>Name: Golden Scarab Latte</p>
                    <p>Description: Witness a true Egyptian treasure through the Golden Scarab Latte, with it's signature golden texture and even more golden flavor.
                    <p>Price: PHP 125.00</p>
                </div>



            </div>

            <br><br><br><br><br>

            <div class = "Bottom">

                <?php #This section is the footer, containing info about Anoobis and contact info that links to another page
                require ('footer.php');
                ?>

            </div>

        </body>
</html>