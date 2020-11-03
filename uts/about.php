<?php
include('./admin/koneksi.php');
$query = "SELECT * FROM about";
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
<?php
 $strSQL = "SELECT * FROM about";
 $runStrSQL = mysqli_query($conn,$strSQL);
 $jmlRowData = mysqli_num_rows($runStrSQL);
 if ($jmlRowData < 0) {
   echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
 }
 else {
   while($row = mysqli_fetch_assoc($runStrSQL)) {
 
?>

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
<h1>About Me</h1>
<div class="batas">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="img2" src="gnw.jpg">
      
    </div>
    <div class="col-sm-6">
      <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Nama</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['nama']; ?>" name="readonly_input">
  <div class="form-group">
    <label for="email">Tempat Tanggal Lahir</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['ttl']; ?>" name="readonly_input">
  <div class="form-group">
    <label for="email">Umur</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['umur']; ?>" name="readonly_input">
    <div class="form-group">
    <label for="email">Kuliah</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['kuliah']; ?>" name="readonly_input">
  <div class="form-group">
    <label for="email">Prodi</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['prodi']; ?>" name="readonly_input">
    <div class="form-group">
    <label for="email">Angkatan</label>
    <input type="email" class="form-control" id="readonly_input" placeholder="<?php echo $row['angkatan']; ?>" name="readonly_input">
 
    <?php
  }
}
    ?>
  </div>
  </div>
</div>
</div>
</div>



</body>
</html>