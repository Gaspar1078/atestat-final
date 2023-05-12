<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <?php
    require './components/header.php';
    ?>

    <form action="createPost.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <label for="text">Post text:</label>
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Write post" required></textarea>
        <label for="img">Post image: (url)</label>
        <input type="text" id="img" name="img">
        <input type="submit" value="Post">
    </form>
</body>

</html>

<?php
if (isset($_POST['text']) && isset($_POST['img'])) {
    $text = $_POST['text'];
    $img = $_POST['img'];
    $title = $_POST['title'];
    $title = '<h3>' . $title . '</h3>';
    $text  = $title . $text;
    $conn =  mysqli_connect("localhost", "root", "", "gent_travel");
    $sql = "INSERT INTO Album (article, album) VALUES ('$text', '$img')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: album.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
