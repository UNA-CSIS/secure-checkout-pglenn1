<?php
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["subtotal"])) {
    header("Location: index.php");
    exit();
}

$taxRate = 0.08;
$tax = $_SESSION["subtotal"] * $taxRate;
$total = $_SESSION["subtotal"] + $tax;

$_SESSION["total"] = $total;
?>

<html>
<body>
    <h2>Tax Calculation</h2>
    <p>Subtotal: $<?php echo number_format($_SESSION["subtotal"], 2); ?></p>
    <p>Tax: $<?php echo number_format($tax, 2); ?></p>
    <p>Total: $<?php echo number_format($total, 2); ?></p>
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>
