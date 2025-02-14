<?php
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["total"])) {
    header("Location: index.php");
    exit();
}

function validateCard($card) {
    if (preg_match('/^4\d{12}(\d{3})?$/', $card)) {
        return "VISA";
    } elseif (preg_match('/^5[1-5]\d{14}$/', $card)) {
        return "MASTERCARD";
    } elseif (preg_match('/^3[47]\d{13}$/', $card)) {
        return "AMEX";
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST["card_number"];
    $cardType = validateCard($cardNumber);

    if ($cardType) {
        $maskedCard = substr($cardNumber, -4);
        $_SESSION["confirmation"] = "Your $cardType ending with $maskedCard has been charged $" . number_format($_SESSION["total"], 2);
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Invalid card number. <a href='checkout.php'>Try again</a>";
    }
}
?>

<html>
<body>
    <h2>Checkout</h2>
    <form action="" method="post">
        Card Number: <input type="text" name="card_number" required>
        <input type="submit" value="Submit Payment">
    </form>
</body>
</html>
