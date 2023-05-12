<header>
  <div class="Title">
    <!-- <div class="vertical_line"></div> -->
    <!-- <div class="vertical_line2"></div> -->
    <h1>GENTELMAN</h1>
    <h2>AROUND THE WORLD</h2>
  </div>
  <div class="budget">
    <h3>...on a budget</h3>
  </div>
  <div class="homebar">
    <a href="index.php">HOME</a>
    <a href="contact.php">CONTACT</a>
    <a href="album.php">ALBUM</a>
    <?php session_start() ?>
    <?php if (isset($_SESSION['username'])) : ?>
      <a href="logout.php">LOGOUT</a>
    <?php else : ?>
      <a href="login.php">LOGIN</a>
    <?php endif; ?>



  </div>
</header>