<?php
  include 'koneksi.php';
  session_start();
  
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
    <title> Admin - INGFO BUKU  </title>
</head>

    <script>
        $(document).ready(function () {
          $('#dt').DataTable({
            "lengthMenu": [5, 10, 25, 50]
          });
        });
    </script>

<body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fs-3 fw-bold text-primary" href="#"><i class="fa fa-book fs-2 text-dark" aria-hidden="true" ></i> INGFO BUKU</a>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-decoration-underline" aria-current="page" href="#">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-underline" href="index2.php">Website</a>
              </li>
            </ul>
            <span class="navbar-text">
              Input yang teliti yaa lurr..
            </span>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
        <figure class="text-center ">
            <blockquote class="blockquote">
            <p class="mt-5">Semangat memberi ingfo sahabat malas diseluruh negeri yang lagi cari info buku</p>
            </blockquote>
            <figcaption class="blockquote-footer mb-4">
             Adm00n Ingfo Buku
             </figcaption>
        </figure>
        <a type="button" href="kelola.php" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>Tambah Data</a>
    <?php
      if(isset($_SESSION['eksekusi'])):
    ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <strong>
            <?php echo $_SESSION['eksekusi']; ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
      session_destroy();
      endif;
    ?>


    <div class="table-responsive">
        <table id="dt" class=" table table-bordered table-hover compact ">
          <thead>
            <tr>
              <th><center>No. </center></th>
              <th>Judul </th>
              <th>Penulis</th>
              <th>Genre</th>
              <th>Sinopsis </th>
              <th>Cover </th>
              <th>Aksi </th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
              <td><center>
                <?php echo $result['kode_buku']; ?></center></td>
              <td><?php echo $result['judul']; ?> </td>
              <td><?php echo $result['penulis']; ?></td>
              <td><?php echo $result['genre']; ?></td>
              <td><?php echo $result['sinopsis']; ?> </td>
              <td> <img src="img/<?php echo $result['cover'];?>" style="width: 100px;"> </td>

              <td> 
                <a type="button" href="kelola.php?ubah=<?php echo $result['kode_buku']; ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i></a>
                <p> </p>
                <a href="proses.php?hapus=<?php echo $result['kode_buku']; ?>"  type="button" class="btn btn-danger btn-sm"
                onClick="return confirm('Yakin ingin menghapus data ini?')">
                <i class="fa fa-trash"></i> </a>
              </td>
            </tr>
            
            <?php
              }
            ?>
            </tbody>
    </div>

</body>
</html>