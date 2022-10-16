<?php
    include 'connect.php';

    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $id_prodi = $_POST['id_prodi'];

    if (empty($id)){
        $sql = 'INSERT INTO mahasiswa VALUE ("'.$nim.'", "'.$nama.'", "'.$jenis_kelamin.'", "'.$tanggal_lahir.'", 
            "'.$alamat.'", "'.$id_prodi.'")';
    }
    else {
        $sql = 'UPDATE mahasiswa SET nim="'.$nim.'", nama="'.$nama.'", jenis_kelamin="'.$jenis_kelamin.'", 
            tanggal_lahir="'.$tanggal_lahir.'", alamat="'.$alamat.'", id_prodi="'.$id_prodi.'" WHERE nim="'.$id.'"';
    }
    

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');
    } else {
        if(empty($id)) 
            echo 'Inserted Failed.';
        else 
            echo 'Updated Failed.';
    }
?>