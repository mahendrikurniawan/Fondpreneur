<?php 
    include 'header.php'; 

    $edit= false;

    if (! empty($_GET['nim'])) {
        $sql = 'SELECT * FROM mahasiswa WHERE nim="'.$_GET['nim'].'"';

        $query= mysqli_query($conn, $sql);

        if (mysqli_num_rows($query)) {
            $edit = true;
            $row = mysqli_fetch_object($query);
        }
    }

    
?>

<h1 class="mt-3 mb-3">Form Mahasiswa</h1>
<form action="saveMahasiswa.php" method="POST">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" placeholder="NIM" value="<?php if($edit) echo $row->nim;?>" required>
        <input type="hidden" name="id" value="<?php if($edit) echo $row->nim;?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php if($edit) echo $row->nama;?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" id="pria" checked>
            <label class="form-check-label" for="pria">
                Pria
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" id="wanita"
                <?php if ($edit && $row -> jenis_kelamin == 'Wanita') echo 'checked';?>>
            <label class="form-check-label" for="wanita">
                Wanita
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php if($edit) echo $row->tanggal_lahir;?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"  required><?php if($edit) echo $row->alamat;?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select class="form-control" name="id_prodi" required>

        <?php
            $sql = 'SELECT * FROM prodi';

            $query = mysqli_query($conn, $sql);

            while ($rows = mysqli_fetch_object($query)) {
        ?>

            <option value="<?php echo $rows->id_prodi; ?>"<?php if ($edit && $row->id_prodi == $rows->id_prodi) echo'selected'; ?>>
                <?php  echo $rows->prodi;?>
            </option>
        
        <?php } ?>

        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
</form>

<?php include 'footer.php'; ?>