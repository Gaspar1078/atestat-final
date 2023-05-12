<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traveling GENTELMAN</title>
</head>

<body class="body1">
  <link href="css/style.css" rel="stylesheet" />
  <div class="grid">
    <div class="page">
      <?php
      session_start();
      if (isset($_SESSION['username']))
        echo '<p>Hello ' . $_SESSION['username'] .  '</p>';

      require './components/header.php';
      ?>
      <img src="img/DSC05283.jpg" alt="Ez egy kep" class="hatter" />
    </div>
  </div>
</body>

</html>