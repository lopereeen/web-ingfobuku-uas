<?php
  include 'koneksi.php';
  $query = "SELECT * FROM data_buku;";
  $sql = mysqli_query($conn, $query);
    //var_dump($result);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="icon/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.css">
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <title> INGFO BUKU </title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fs-3 fw-bold text-primary" href="#"><i class="fa fa-book fs-2 text-dark" aria-hidden="true" ></i> INGFO BUKU</a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Popular Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
        
    <!-- WoIWOi -->
    <div class="container px-4 px-lg-5">
            <!-- WELLCOME HEADER-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/cover.png" style="width: 500px;" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Cari info buku yaa?</h1>
                    <p>Cari info buku dari Judul, Penulis, Genre, Tahun Rilis di INGFO BUKU. Pasti nemu yang kalian cari deh :)</p>
                    <a class="btn btn-primary" href="#!">Ke Rekomendasi ></a>
                </div>
            </div>

            <!-- HEADER ISI-->
            <div class="card text-white bg-secondary my-5 py-2 text-center">
                <div class="card-body"><p class="text-white m-0"><strong>Rekomendasi Buku Bulan Ini</strong></p></div>
            </div>

            <!-- ISI KONTEN -->
             <!-- style = max-width: 1080px; -->
            <?php
              while($result = mysqli_fetch_assoc($sql)){
            ?>


            <div class="card mb-3" style="">
                <div class="row g-0">
                    <div class="col-md-2">
                         <img src="img/<?php echo $result['cover'];?>" style="width: 140px;">
                    </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h3><?php echo $result['judul']; ?> </h3>
                        <p><strong><?php echo $result['penulis']; ?></strong></p>
                        <p><?php echo $result['genre']; ?> </p>
                        <a type="button" href="info.php?ubah=<?php echo $result['kode_buku']; ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>  Lihat info buku</a>
                    </div>
                </div>
            </div>
            </div>

            
            <?php
              }
            ?>



         <!-- FOOTER-->
        <div class="card text-white bg-secondary my-5 py-2 text-center">
                <div class="card-body"><p class="text-white m-0"><strong><i class="fa fa-copyright" aria-hidden="true"></i>  @zakkaibutsu</strong></p></div>
        </div>
    
    
    </div>
</body>
</html>

