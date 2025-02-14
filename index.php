<html>
<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "Welcome back " . $_COOKIE["user"] . "!<br/>";
        echo "<a href='shop.php'>Go to Shop</a> | <a href='logout.php'>Logout</a>";
    } else {
    ?>
    <form action="login.php" method="post">
        Name: <input type="text" name="name" required />
        Password: <input type="password" name="pwd" required />
        Remember Me: <input type="checkbox" name="remember" value="ON" />
        <input type="submit" value="Login" />
    </form>
    <?php
    }
    ?>
</body>
</html>
