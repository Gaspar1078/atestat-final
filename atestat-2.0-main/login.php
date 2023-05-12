<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <?php

    require './components/header.php';

    ?>

    <div class="">
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
        </form>
        <form action="signup.php" method="post">
            <input type="submit" value="Sign Up">
    </div>



</body>

</html>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $pass = $_POST['password'];
    $name = $_POST['username'];
} else return;



$con = mysqli_connect("localhost", "root", "", "gent_travel");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user_info WHERE Username = '$name' AND Passkey = '$pass'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
    session_start();
    $_SESSION['username'] = $name;
    header("Location: index.php");
} else {
    echo "Login failed";
}

?>