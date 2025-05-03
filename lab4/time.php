<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>PHP Time</title>
    </head>
    <body>
        <h2>Now is: </h2>
        <?php 
            date_default_timezone_set("Asia/Shanghai");
            echo "The time is " . date( "h:i:sa") . "<br>";
        ?>
    </body>
</html>