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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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


  <div class="jdl1"><h2 class="pt-3">HOBI</h2></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
    <div class="jumbotron">
    <div class="img1" ><img src="badminton.jpg" class="rounded-circle"></div><br>
    <div class="img1" ><img src="hdst.png" class="rounded-circle"></div><br>
    <div class="img1" ><img src="trvlng.jpeg" class="rounded-circle"></div>
</div>


</div>
<?php
    //buat sql
    $strSQL = "SELECT * FROM hobi";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
<div class="col-sm-6">
    <div class="jumbotron">
    <h1>Ini Hobi Ku</h1>
    <p><?php echo $row['isi']; ?></p>
</div>


</div>

</div>
</div>


</div>
</div>
<?php
  }
}
    ?>

<footer class="footer">
  <p>Coppy Right-Gunawan Sulistiyo</p>
</footer>

</body>
</html>