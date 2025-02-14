<?php
session_start();

$usr = $_POST["name"];
$pwd = $_POST["pwd"];

if ($pwd == "bar") {
    $_SESSION["user"] = $usr;
    if (isset($_POST["remember"]) && $_POST["remember"] == "ON") {
        setcookie("user", $usr, time() + (60 * 3)); // Set cookie for 3 minutes
    }
    header("Location: shop.php");
    exit();
} else {
    echo "Wrong username or password. <a href='index.php'>Try again</a>";
}
?>
