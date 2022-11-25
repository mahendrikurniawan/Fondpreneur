<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $notelp, $tanggal]);
    // Output message
    $msg = 'Menambah Data Berhasil!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Masukkan Data</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="email">Email</label>
        <label for="notelp">Pesanan</label>
        <input type="text" name="email" id="email">
        <input type="text" name="notelp" id="notelp">
        <label for="tanggal">Tanggal Pemesanan</label> <br>
        <label for="notelp"></label>
        <input type="text" name="tanggal" id="tanggal">
        <label for="notelp"></label>
        <input type="submit" value="Submit">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>