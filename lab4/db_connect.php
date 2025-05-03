<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Database Connection</title>
        <meta charset = "UTF-8">

    </head>
    <body>
        <?php
        $servename = "localhost";
        $username = "root";
        $password = "";
        $dbname = "can302_test";

        $conn = new mysqli($servename, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";
        }
        ?>
    </body>

</html>