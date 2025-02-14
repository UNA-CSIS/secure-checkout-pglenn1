<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>

<html>
<body>
    <h2>Welcome, <?php echo $_SESSION["user"]; ?>! Shop below:</h2>
    <form action="summary.php" method="post">
        <p>Item 1: $10 <input type="number" name="item1" min="0" value="0"></p>
        <p>Item 2: $15 <input type="number" name="item2" min="0" value="0"></p>
        <p>Item 3: $20 <input type="number" name="item3" min="0" value="0"></p>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
