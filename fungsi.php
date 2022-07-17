<?php
    include 'koneksi.php';

    function tambah_data($data, $files){

            $kode_buku = $data['kode_buku'];
            $judul = $data['judul'];
            $penulis = $data['penulis'];
            $genre = $data['genre'];
            $sinopsis = $data['sinopsis'];
            $cover = $files['cover']['name'];

            $dir = "img/";
            $tmpFile = $_FILES['cover']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$cover);

            //die();

            $query = "INSERT INTO data_buku VALUES('$kode_buku','$judul','$penulis','$genre','$sinopsis','$cover')";
            $sql = mysqli_query($GLOBALS['conn'], $query);

            return true; 
    }

    function ubah_data($data, $files){
            $kode_buku = $data['kode_buku'];
            $judul = $data['judul'];
            $penulis = $data['penulis'];
            $genre = $data['genre'];
            $sinopsis = $data['sinopsis'];

            $queryShow = "SELECT * FROM data_buku WHERE kode_buku = '$kode_buku';";
            $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['cover']['name'] == ""){
                $cover = $result['cover'];
            }else{
                $cover = $files['cover']['name'];
                unlink("img/".$result['cover']);
                move_uploaded_file($files['cover']['tmp_name'], 'img/'.$_FILES['cover']['name']);
                
            }
            

            $query = "UPDATE  data_buku SET kode_buku='$kode_buku', judul='$judul', penulis='$penulis', genre='$genre', sinopsis='$sinopsis', cover='$cover' WHERE kode_buku='$kode_buku';";
            $sql = mysqli_query($GLOBALS['conn'], $query);
            
            return true;
    }

    function hapus_data($data){
        $kode_buku = $data['hapus'];

        $queryShow = "SELECT * FROM data_buku WHERE kode_buku = '$kode_buku';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        //var_dump($result);

        unlink("img/".$result['cover']);

        $query = "DELETE FROM data_buku WHERE kode_buku = '$kode_buku';";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
?>