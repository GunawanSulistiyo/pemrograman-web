<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="../style.css">
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
    <a class="nav-link text-light" href="edit_contact.php">Contact</a>
  </li>
</ul>
</nav>
  <br><br>

    <?php 
      
      include_once ("koneksi.php");
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>LIST ABOUT</h1>
        </div>
      </div>
      <div class="row mb-3 mt-3">
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <thead>
            <tr>
              <th>Kode </th>
              <th>Nama </th>
              <th>Judul</th>
              <th>Komen</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM contact";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["nama"] ?></td>
              <td><?php echo $row["judul"] ?></td>
              <td><?php echo $row["komen"] ?></td>
              <td><?php echo $row["email"] ?></td>
                
              </td>
            </tr>
     <?php 
      }
    }
    ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  
    
    <footer class="footer">
  <p>Coppy Right-Gunawan Sulistiyo</p>
</footer>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
</body>
</html>