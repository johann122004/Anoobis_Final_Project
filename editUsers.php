<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Editing Page</title>
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
        $users = mysqli_query($conn,"SELECT * FROM users");
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $pass = $_POST['password'];

            mysqli_query($conn,"INSERT INTO users (name, password) VALUES ('$name', '$pass')");
        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            mysqli_query($conn,"DELETE FROM products WHERE ID = $id");
        }
        if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $pass = $_POST['password'];

            mysqli_query($conn,"UPDATE users set name = '$name', password = '$pass' WHERE ID = $id");
        }
        ?>

        <h1>User Editor</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="add" value="Add User">
        </form>

        <table border = "1">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($users)){?>
            <form method="POST">
                <input type="hidden" name="id" value="<?= $row['ID'] ?>">
                <tr>
                    <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
                    <td><input type="text" name="password" value="<?= $row['password'] ?>"></td>
                    <td>
                        <input type="submit" name="edit" value="Update">
                        <a href="editUsers.php?delete=<?= $row['ID'] ?>">Delete</a>
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