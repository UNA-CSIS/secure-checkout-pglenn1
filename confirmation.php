<?php
session_start();
if (!isset($_SESSION["confirmation"])) {
    header("Location: index.php");
    exit();
}
?>

<html>
<body>
    <h2>Order Confirmation</h2>
    <p><?php echo $_SESSION["confirmation"]; ?></p>
    <a href="shop.php">Continue Shopping</a> | <a href="logout.php">Logout</a>
</body>
</html>
