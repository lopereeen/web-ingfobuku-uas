<!DOCTYPE html>

<?php
    include 'koneksi.php';
    session_start();

    $kode_buku = '';
    $judul = '';
    $penulis = '';
    $genre = '';
    $sinopsis = '';

    if(isset($_GET['ubah'])) {
        $kode_buku = $_GET['ubah'];

        $query = "SELECT * FROM data_buku WHERE kode_buku = '$kode_buku';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $kode_buku = $result['kode_buku'];
        $judul = $result['judul'];
        $penulis = $result['penulis'];
        $genre = $result['genre'];
        $sinopsis = $result['sinopsis'];

        //var_dump($result);
        //die();
    }
?>

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
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- ISI BAPAKMOOOO -->

    <div class="container px-2 px-lg-5">
            <div class="row gx-9 gx-lg-10  my-5">
                <div class="col-lg-3"><img src="img/<?php echo $result['cover'];?>" style="width: 200px;"></div>
                <div class="col-lg-9 ml-5">
                    <h1 class="font-weight-light"><?php echo $judul; ?></h1>
                    <p>Genre : <?php echo $genre; ?></p>
                    <p>Penulis : <?php echo $penulis; ?></p>
                    <p>Sinopsis : </p>
                    <div class="mb-3 row">
                <div class="col-sm-10">
                    <div class="mb-3">
                        <p class="border-bottom"><?php echo $sinopsis; ?></p>
                    </div>
                </div>
            </div>
                    <a class="btn btn-primary" href="index2.php">  <i class="fa fa-chevron-left" aria-hidden="true"></i>  Kembali</a>
                </div>
            </div>
        

    </div>
</body>
</html>