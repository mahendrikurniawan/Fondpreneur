<?php
    include 'connect.php';

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesanan = $_POST['pesanan'];
    $tanggal = $_POST['tanggal'];

    if (empty($id)){
        $sql = 'INSERT INTO pelanggan VALUE ("'.$nom.'", "'.$nama.'", "'.$email.'", "'.$pesanan.'", 
            "'.$tanggal.'")';
    }
    else {
        $sql = 'UPDATE pelanggan SET nom="'.$nom.'", nama="'.$nama.'", email="'.$email.'", 
            pesanan="'.$pesanan.'", tanggal="'.$tanggal.'"';
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