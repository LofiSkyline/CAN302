
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sid = $_POST["sid"];
    echo "Your name is $name and your student ID is $sid.";
}
?>
