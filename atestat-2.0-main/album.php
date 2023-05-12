<html>
<title>The Genteltravel</title>

<body class="body1">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/album.css" />
  <div class="grid"></div>
  <div class="page">
    <?php
    require("./components/header.php");
    session_start();

    ?>
    <?php if (isset($_SESSION['username'])) : ?>
      <form action="createPost.php" method="post">
        <input type="submit" value="+ New post">
      </form>
    <?php endif ?>
    <span></span>
    <img src="" alt="">


  </div>
  <div class="album-grid">

    <?php

    $text = "";
    $picture = "";

    $con = mysqli_connect("localhost", "root", "", "gent_travel");
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Album";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_row($result)) {
      $text = $row[1];
      $picture = $row[2];


      echo '<div class="text">';
      echo $text;
      echo '</div>';
      echo '<div class="photos">';
      if (isset($_SESSION['username']))
        echo '<img src="' . $picture . '" alt="Picture">';
      else
        echo '<img src="https://media.istockphoto.com/id/936681148/vector/lock-icon.jpg?s=612x612&w=0&k=20&c=_0AmWrBagdcee-KDhBUfLawC7Gh8CNPLWls73lKaNVA=" alt="Picture">';
      echo '</div>';
    }




    ?>
  </div>
  </div>
</body>

</html>