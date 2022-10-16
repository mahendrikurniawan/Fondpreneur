<?php include 'header.php'; ?>

        <h1 class="mt-3 mb-3">Mahasiswa</h1>
        <a href="formMahasiswa.php" class="btn btn-sm btn-info mb-3">Tambah</a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Email</th>
                    <th>Pesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td><?php echo $row->nom; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->pesanan; ?></td>
                    <td><?php echo $row->tanggal; ?></td>
                    <td>
                        <a href="pelanggan/formMahasiswa.php?nom=<?php echo $row->nom?>" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="pelanggan/deletemahasiswa.php?nom=<?php echo $row->nom?>" class="btn btn-sm btn-warning"
                        onclick="return confirm('Apakah Anda yakin akan menghapus data');">Hapus</a>
                            
                    </td>
                </tr>

            </tbody>
        </table>

<?php include 'footer.php'; ?>