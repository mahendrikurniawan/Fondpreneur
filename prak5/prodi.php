<?php include 'header.php'; ?>

        <h1 class="mt-3 mb-3">Program Studi</h1>
        <a href="formProdi.php" class="btn btn-sm btn-info mb-3">Tambah</a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>ID Prodi</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $sql = 'SELECT * FROM prodi';

                    $query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_object($query)) {
                ?>
                
                <tr>
                    <td><?php echo $row->id_prodi; ?></td>
                    <td><?php echo $row->prodi; ?></td>
                    <td>
                        <a href="formProdi.php?id=<?php echo $row->id_prodi?>" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="deletemahasiswa.php?id=<?php echo $row->id_prodi?>" class="btn btn-sm btn-danger"
                        onclick="return confirm('Apakah Anda yakin akan menghapus data');">Hapus</a>
                            
                    </td>
                </tr>

                <?php
                    } if (!mysqli_num_rows($query)) {
                        echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
                    }
                ?>

            </tbody>
        </table>

<?php include 'footer.php'; ?>