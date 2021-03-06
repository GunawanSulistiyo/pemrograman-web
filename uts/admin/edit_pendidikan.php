<?php
include_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Website Example</title>
  <link rel="stylesheet" href="mycss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
<a class="navbar-brand text-light">ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<ul class="navbar-nav margin">
<li class="nav-item">
    <a class="nav-link text-light" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edit_about2.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edit_pendidikan2.php">Education</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edit_hobi2.php">Hobby</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edit_achievement2.php">Achievement</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="edit_kontak2.php">Contact</a>
  </li>
</ul>
</nav>
  <br><br>

  <?php   
    $stat = 2;  
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];
        $universitas = $_POST['universitas']; 
         //buat koneksi
         $strSQL = "UPDATE edukasi SET sd='$sd', smp='$smp', sma='$sma', universitas='$universitas'WHERE id='$id'";
        // echo $strSQL;
       //die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $stat = 1; //sukses
         }  
         else {
             $stat = 0; //tidak sukses;
         }      
         header("refresh:3; url=../edukasi.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM edukasi WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $sd = $row['sd'];
                $smp = $row['smp'];
                $sma = $row['sma']; 
                $universitas = $row['universitas'];
            }
        }
        else {            
            $stat = 3;
        }
    }  
    else {       
        $sd = "";
        $smp = "";
        $sma = "";
        $universitas = "";
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Edit Data Beranda</h2>   

        <?php 
        include "modal_pendidikan.php";
           if ($stat == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database. Halaman ini akan kembali ke List Mahasiswa dalam 3 detik
            </div>
        <?php 
            }
            else if ($stat == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
            else if ($stat == 3) {        
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak terdapat di dalam database, halaman ini akan diredirect ke List Mahasiswa dalam waktu 3 detik
            </div>
        <?php 
            header("refresh:3; url=../edukasi.php");
            die;
            }
        ?>
        <form id="myform" method="post" action="edit_pendidikan.php">
            <div class="form-group">
                <label>Kode</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly 
                <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Sekolah Dasar</label>
                <input id="sd" class="form-control" type="text" name="sd" value="<?php echo $sd ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Sekolah Menengah Pertama</label>
                <input id="smp" class="form-control" type="text" name="smp" value="<?php echo $smp ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Sekolah Menengah Atas</label>
                <input id="sma" class="form-control" type="text" name="sma" value="<?php echo $sma ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Universitas</label>
                <input id="universitas" class="form-control" type="text" name="universitas" value="<?php echo $universitas ?>" <?php echo $disableForm ?>>
            </div>

            
               
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan" <?php echo $disableForm ?>>   
        </form>
        
    </div>
   
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const sd = $('#sd').val();
            const smp = $('#smp').val();
            const sma = $('#sma').val();
            const universitas = $('#universitas').val();
           
            $('#idi').text(id);
            $('#sdo').text(sd);
            $('#smpi').text(smp);
            $('#smak').text(sma);
            $('#unis').text(universitas);
            //buka modal
            $('#pesan3').modal({
                show: true
            });
        });
    });
    
    </script>


  <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p style="color:white">Copyright By Refi Tandjilal</p>
  </div>
  </div>

</body>

</html>