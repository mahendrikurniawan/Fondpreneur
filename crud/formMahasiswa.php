<?php 
    include 'header.php'; 

    $edit= false;

    if (! empty($_GET['nom'])) {
        $sql = 'SELECT * FROM pelanggan WHERE nom="'.$_GET['nom'].'"';

        $query= mysqli_query($conn, $sql);

        if (mysqli_num_rows($query)) {
            $edit = true;
            $row = mysqli_fetch_object($query);
        }
    }

    
?>

<h1 class="mt-3 mb-3">Silahkan Masukkan Data</h1>
<form action="saveMahasiswa.php" method="POST">
    <div class="mb-3">
        <label class="form-label">No</label>
        <input type="text" class="form-control" name="nom" placeholder="No" value="<?php if($edit) echo $row->nom;?>" required>
        <input type="hidden" name="id" value="<?php if($edit) echo $row->nom;?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php if($edit) echo $row->nama;?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php if($edit) echo $row->email;?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Pesanan</label>
        <input type="text" class="form-control" name="pesanan" placeholder="Pesanan" value="<?php if($edit) echo $row->pesanan;?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Pemesanan</label>
        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Pemesanan" value="<?php if($edit) echo $row->tanggal;?>" required>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
</form>

<?php include 'footer.php'; ?>