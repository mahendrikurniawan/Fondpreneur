<?php include 'header.php'; ?>

        <h1 class="mt-3 mb-3">Mahasiswa</h1>
        <a href="formMahasiswa.php" class="btn btn-sm btn-info mb-3">Tambah</a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $sql = 'SELECT * FROM mahasiswa JOIN prodi ON prodi.id_prodi = mahasiswa.id_prodi';

                    $query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_object($query)) {
                ?>
                
                <tr>
                    <td><?php echo $row->nim; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->jenis_kelamin; ?></td>
                    <td><?php echo $row->tanggal_lahir; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->prodi; ?></td>
                    <td>
                        <a href="formMahasiswa.php?nim=<?php echo $row->nim?>" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="deletemahasiswa.php?nim=<?php echo $row->nim?>" class="btn btn-sm btn-danger"
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