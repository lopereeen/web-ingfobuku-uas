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

</head>
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
                <a class="nav-link text-decoration-underline" href="#">Website</a>
              </li>
            </ul>
            <span class="navbar-text">
              Input yang teliti yaa lurr..
            </span>
          </div>
        </div>
      </nav>
    </div>

    <div class="container mt-5">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $kode_buku; ?>" name="kode_buku" >
            <div class="mb-3 row">
                <label for="kode_buku" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" name="kode_buku" class="form-control" id="kode_buku"
                    value="<?php echo $kode_buku; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" id="judul"
                    value="<?php echo $judul; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                <input type="text" name="penulis" class="form-control" id="penulis" 
                value="<?php echo $penulis; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                <input type="text" name="genre" class="form-control" id="genre"
                value="<?php echo $genre; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <textarea class="form-control" name="sinopsis" id="sinopsis" rows="3"
                        ><?php echo $sinopsis; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" name="cover" type="file" id="cover" accept="image/*">
                    </div>
                </div>
            </div>
            
            <?php
                if(isset($_GET['ubah'])) {
            ?>
                <button type="submit" name="aksi" href="kelola.php" value="edit" class="btn btn-primary mb-3">
                <i class="fa fa-floppy-o"></i> Simpan Perubahan</button>
            <?php
                } else {
            ?>
                <button type="submit" name="aksi" href="kelola.php" value="add" class="btn btn-primary mb-3">
                <i class="fa fa-floppy-o"></i> Tambahkan</button>
            <?php
                }
            ?>
                <a type="button" href="index.php" class="btn btn-danger mb-3">
                <i class="fa fa-trash"></i> Batal</a>
        </form>
        

    </div>
</body>
</html>