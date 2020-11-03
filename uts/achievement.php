<?php
include_once "admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" type="text/css" href="sdti-css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script src="https://kit.fontawesome.com/9fa27ba088.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="style.css">
        
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
<a class="navbar-brand text-light">PORTFOLIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<ul class="navbar-nav margin">
  <li class="nav-item">
    <a class="nav-link text-light" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edukasi.php">Education</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="hobi.php">Hobby</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="achievement.php">Achievement</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="kontak.php">Contact</a>
  </li>
</ul>
</nav>
<?php
    //buat sql
    $strSQL = "SELECT * FROM achievement";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
<div class="container">
    <h2 class="pt-3">Achievement</h2>
</div>

  <div class="container">
    <div class="jumbotron  bg-light" style="margin-bottom:0">
  <div class="img1" ><img src="piala.png" class="rounded-circle"></div>
  <div class="form-group text-dark">
      <label for="email">Juara 1:</label>
      <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['juara1']; ?>" name="readonly_input">
  <div class="form-group text-dark">
  <label for="email">Juara 2:</label>
      <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['juara2']; ?>" name="readonly_input">
  <div class="form-group text-dark">
  <label for="email">Juara 3:</label>
      <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['juara3']; ?>" name="readonly_input">
  <?php
  }
}
    ?>
    </div>
    </div>
    </div>
</div>
<footer class="footer">
  <p>Coppy Right-Gunawan Sulistiyo</p>
</footer>


</body>
</html>