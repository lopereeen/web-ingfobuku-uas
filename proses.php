<?php
    //include 'koneksi.php';
    include 'fungsi.php';
    session_start();


    if(isset($_POST['aksi'])) {
        if($_POST['aksi'] == "add") {            
             
            $berhasil = tambah_data($_POST, $_FILES);

            if($berhasil){
                $_SESSION['eksekusi'] = "Berhasil Menambah Data";
                header("location: index.php"); 
            } else {
                echo $berhasil;
            }

        } else if($_POST['aksi'] == "edit") {
            //echo "Edit Data <a href='index.php'>Home</a>";
            $berhasil= ubah_data($_POST, $_FILES);
            if($berhasil){
                $_SESSION['eksekusi'] = "Berhasil Memperbarui Data";
                header("location: index.php"); 
            } else {
                echo $berhasil;
            }
        }
    }

    if(isset($_GET['hapus'])) {
        
        $berhasil = hapus_data($_GET);

        if($berhasil){
            $_SESSION['eksekusi'] = "Berhasil Menghapus Data";
            header("location: index.php"); 
            //echo " Data berhasil ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $berhasil;
        }
        //echo "Hapus Data <a href='index.php'>Home</a>";
    }
?>