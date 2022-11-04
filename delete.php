<?php
    require "koneksi.php";
    
    $id = $_GET['id'];

    $kon = mysqli_query($conn, "SELECT profile from datamember WHERE id=$id");
    $ken = mysqli_fetch_assoc($kon);
    unlink('gambar/'.$ken['profile']);

    $result = mysqli_query($conn, "DELETE FROM datamember WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('Data Berhasil Dihapus');
            document.location.href = 'tampilan.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('Data Gagal Dihapus');
            document.location.href = 'tampilan.php';
        </script>";
    }
?>