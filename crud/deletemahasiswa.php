<?php
    include 'connect.php';

    $nom = $_GET['nom'];

    $sql ='DELETE FROM pelanggan WHERE nom= "'.$nom.'"';

    $result = mysqli_query($conn, $sql);  

    if ($result){
        header('Location: index.php');
    }else {
        echo('Deleted Failed');
    }
?>
