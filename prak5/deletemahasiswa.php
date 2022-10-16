<?php
    include 'connect.php';

    $nim = $_GET['nim'];

    $sql ='DELETE FROM mahasiswa WHERE nim = "'.$nim.'"';

    $result = mysqli_query($conn, $sql);  

    if ($result){
        header('Location: index.php');
    }else {
        echo('Deleted Failed');
    }
?>
