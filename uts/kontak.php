<html>
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
       <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
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
    $status = 2;
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $judul = $_POST['judul'];
        $komen = $_POST['komen'];

        //buat koneksi
        $strsql = "INSERT INTO contact_us (kode, nama, email, judul, komen) 
        VALUES ('$kode','$nama','$email','$judul', '$komen')";
        
        $runSQL = mysqli_query($conn,$strsql);        
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        } 
    }            
    ?>

    
    <?php 
        if ($status == 1) {
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data berhasil diinput ke dalam database.
    </div>
    <?php 
        }
        else if ($status == 0){
    ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data tidak berhasil diinput ke dalam database.
    </div>
    <?php 
        }
    
    ?>

<div class="text4">
    <h1>Contact Us</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron">
                <div class=text4>
                <h2>Message Me</h2>
                </div>
                    <form method="post" action="contact.php">
                        <div class="form-group">
                            <label>Kode </label>
                            <input class="form-control" type="text" name="kode">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input class="form-control" type="text" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input class="form-control" type="text" name="komen">
                        </div>
                        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
                    </form>

                </div>
            </div>

            <div class="col-sm-6">
                <div class="jumbotron">
                <h2 class="text4">Our Social Media</h2><br>
                <div class="row">
                <div class="col">
                <a href="https://www.facebook.com/"> <div class="img1" ><img src="facebook.jpg" class="rounded-circle"></div><br></a>
                </div>
                
                <div class="col-14">
                <a href="https://www.instagram.com/accounts/login/?hl=id"> <div class="img1" ><img src="ig.jpg" class="rounded-circle"></div><br></a>
                </div>

               </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="footer">
  <p>Coppy Right-Gunawan Sulistiyo</p>
</footer>
</body>
</html>