<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Sign up</title>
</head>

<body>
    <?php

    require './components/header.php';

    ?>

    <div class="">
        <form action="signup.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
        </form>
        <form action="login.php" method="post">
            <input type="submit" value="LogIn">
    </div>



</body>

</html>
</body>





</html>
<?php

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $pass = $_POST['password'];
    $name = $_POST['username'];
    $email = $_POST['email'];
} else return;




$con = mysqli_connect("localhost", "root", "", "gent_travel");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user_info (Username, Passkey, Email) VALUES ('$name', '$pass', '$email')";
mysqli_query($con, $sql);

session_start();
$_SESSION['username'] = $name;
header("Location: index.php");



?>

</html>