<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

$item1 = $_POST["item1"] * 10;
$item2 = $_POST["item2"] * 15;
$item3 = $_POST["item3"] * 20;
$subtotal = $item1 + $item2 + $item3;

$_SESSION["subtotal"] = $subtotal;
?>

<html>
<body>
    <h2>Order Summary</h2>
    <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
    <a href="tax.php">Proceed to Tax Calculation</a>
</body>
</html>
