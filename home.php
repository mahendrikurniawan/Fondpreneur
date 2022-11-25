<?php include 'crud/connect.php'; ?>
<?php include 'phpcrud/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to css-->
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style-local.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!--navbar-->
    <header>
        <a href="#" class="logo">
            <img src="img/LOGO.png" alt="">
        </a>
        <!--Menu icon-->
        <i class='bx bx-menu' id="menu-icon"></i>
        <!--Links-->
        <ul class="navbar">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Kisah Sukses</a></li>
            <li><a href="#Products">produk</a></li>
            <li><a href="#service">Pelayanan</a></li>
            <li><a href="#webinarinfo">info Webinar</a></li>
            <li><a href="#ourvideos">Videos</a></li>
            <li><a href="#customers">Pelanggan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <!--Icon-->
        <div class="header-icon">
            <i class=''></i>
            <i class='' id="search-icon"></i>
            <a href="crudadmin/read.php" class="logo">
                <img src="img/admin.png">
            </a>
        </div>
        <!--Search Box-->

    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Buatlah Mimpimu <br> Jadi Kenyataan !</h1>
            <p>FondPreneur adalah website yang berisikan seputar informasi tentang wirausaha. FondPreneur ini juga
                bisa dijadikan sebagai wadah dan media pembelajaran bagi para mahasiswa yang tertarik seputar
                wirausaha.</p>
        </div>
        <div class="home-img">
            <img src="img/pengusahaindo.png" alt="">
        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/BobSadino.png" alt="">
        </div>
        <div class="about-text">
            <h2>Kisah Sukses Bob Sadino</h2>
            <p>Bambang Mustari yang kemudian akrab dikenal Bob Sadino adalah sosok inspiratif kelahiran Tanjungkarang,
                Lampung Tanggal 9 Maret 1933.</p>

            <p>Kisah Sukses dari Bob Sadino ini dimulai setelah lulus SMA Kerja Di Jakarta Lylod di Belanda dan Jerman,
                Membuka Sewa Mobil dan Menjadi Supir, Menjadi Kuli Bangunan, Bisnis Telur Ayam Negeri dan Sayuran,
                hingga akhirnya memiliki Supermarket Kem Chicks.
                Berkat ide-ide kreatifnya, Bob Sadino menjadi sosok yang sangat dikagumi oleh masyarakat karena sangat
                menginspirasi orang banyak.</p>
        </div>
    </section>
    <!--Products-->
    <section>
        <section class="Products" id="Products">
            <div class="heading">
                <h2>Rekomendasi Produk</h2>
            </div>
            <!--Container-->
            <div class="products-container">
                <div class="box">
                    <img src="img/Buku1.png" alt="">
                    <h3>ORIGINALS - ADAM GRANT</h3>
                    <div class="content">
                        <span>Rp. 206.000,00</span>
                        <a href="https://www.tokopedia.com/kapulogo/buku-adam-grant-originals-tabrak-aturan-jadilah-pemenang?extParam=ivf%3Dfalse%26src%3Dsearch">Lihat
                            detail</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/Buku2.png" alt="">
                    <h3>Platform Revolution - Geoffrey G. Parker</h3>
                    <div class="content">
                        <span>Rp. 113.500,00</span>
                        <a href="https://shopee.co.id/Buku-Platform-Revolution--How-Networked-Market-i.326900811.11137982376">Lihat
                            detail</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/Buku3.png" alt="">
                    <h3>Sprint - Jake Knapp</h3>
                    <div class="content">
                        <span>Rp. 296.000,00</span>
                        <a href="https://www.tokopedia.com/bookarchive/sprint-jake-knapp">Lihat detail</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/Buku4.png" alt="">
                    <h3>The 4-Hour WorkWeek - Timothy Ferriss</h3>
                    <div class="content">
                        <span>Rp. 349.000,00</span>
                        <a href="https://www.tokopedia.com/bookworldindo/buku-import-the-4-hour-work-week-by-tim-ferriss-original-paperback-hardcover?extParam=ivf%3Dfalse&src=topads">Lihat
                            detail</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/Buku5.png" alt="">
                    <h3>The Lean Startup - Eric Ries</h3>
                    <div class="content">
                        <span>Rp. 189.000,00</span>
                        <a href="https://www.tokopedia.com/periplus/the-lean-startup-how-today-s-entrepreneurs-use-conti-9781524762407?extParam=ivf%3Dfalse%26src%3Dsearch">Lihat
                            detail</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/Buku6.png" alt="">
                    <h3>The Nuclear Effect - Scott Oldford</h3>
                    <div class="content">
                        <span>Rp. 100.000,00</span>
                        <a href="https://www.tokopedia.com/rekomendasi/2234390892?srsltid=AR5OiO31oXFC8EGF8CgayKgeh_TJU9dDD5uLx5xLZoKTMxxuavBzuI4vZww">Lihat
                            detail</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--Our Service-->
    <section>
        <section class="service" id="service">
            <div class="heading">
                <h2>Pelayanan Jasa</h2>
            </div>
            <div class="content-box">
                <div class="card">
                    <i class='bx bxl-figma bx-md'></i>
                    <h4>Logo</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan Logo</a></li>
                    </p>
                </div>

                <div class="card">
                    <i class='bx bxl-unsplash bx-md'></i>
                    <h4>Poster</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan Poster</a></li>
                    </p>
                </div>

                <div class="card">
                    <i class='bx bx-id-card bx-md'></i>
                    <h4>id card</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan id-card</a></li>
                    </p>
                </div>

                <div class="card">
                    <i class='bx bxl-adobe bx-md'></i>
                    <h4>Banner</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan Banner</a></li>
                    </p>
                </div>

                <div class="card">
                    <i class='bx bxl-instagram-alt bx-md'></i>
                    <h4>Feed IG</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan Feed IG</a></li>
                    </p>
                </div>

                <div class="card">
                    <i class='bx bxs-book-content bx-md'></i>
                    <h4>Katalog</h4>
                    <p><a href="https://wa.me/6281903877858">Melayani Pembuatan katalog</a></li>
                    </p>
                </div>

            </div>
            </div>
        </section>
    </section>
    <section>
        <section>
            <?php
            // include 'functions.php';
            // Connect to MySQL database
            $pdo = pdo_connect_mysql();
            // Get the page via GET request (URL param: page), if non exists default the page to 1
            $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
            // Number of records to show on each page
            $records_per_page = 10;


            // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
            $stmt = $pdo->prepare('SELECT * FROM kontak ORDER BY id LIMIT :current_page, :record_per_page');
            $stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
            $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
            $stmt->execute();
            // Fetch the records so we can display them in our template.
            $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


            // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
            $num_contacts = $pdo->query('SELECT COUNT(*) FROM kontak')->fetchColumn();

            ?>
            <?= template_header('Fondpreneur') ?>
            <div class="heading">
                <h2>Data Pemesanan</h2>
            </div>
            <div class="content read">
                <a href="phpcrud/create.php" class="btn btn-sm btn-info mb-3">Tambah Data</a>
                <a href="import/index.php" class="btn btn-sm btn-info mb-3">Import</a>
                <a href="Printdata/Printdata.html" class="btn btn-sm btn-info mb-3">Eksport</a>
                <a href="01_fc.html" class="btn btn-sm btn-info mb-3">Chart</a>
                <table class="table" border="2" style="background-color: white;">
                    <thead class="table-info">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Pesanan</td>
                            <td>Tanggal Pemesanan</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact) : ?>
                            <tr>
                                <td><?= $contact['id'] ?></td>
                                <td><?= $contact['nama'] ?></td>
                                <td><?= $contact['email'] ?></td>
                                <td><?= $contact['notelp'] ?></td>
                                <td><?= $contact['tanggal'] ?></td>
                                <td class="actions">
                                    <a href="phpcrud/update.php?id=<?= $contact['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                                    <a href="phpcrud/delete.php?id=<?= $contact['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php if ($page > 1) : ?>
                        <a href="home.php?page=<?= $page - 1 ?>"><i class="btn btn-sm btn-info mb-3">Kembali</i></a>
                    <?php endif; ?>
                    <?php if ($page * $records_per_page < $num_contacts) : ?>
                        <a href="home.php?page=<?= $page + 1 ?>"><i class="btn btn-sm btn-info mb-3">Lainnya</i></a>
                    <?php endif; ?>
                </div>
            </div>
            <?= template_footer() ?>


        </section>
    </section>

    <section>

        <!--Our Webinar Information-->
        <section class="webinarinfo" id="webinarinfo">
            <div class="heading">
                <h2>Informasi Webinar</h2>
            </div>
            <div class="imgweb">
                <a href="https://drive.google.com/file/d/1rZTFvnuWZD_9BlaxCiHJcnvq0fvq1IMB/view" target="itembox" data-item="mobile"><img src="img/Web1.png" width="45px">
                </a>
                <a href="https://drive.google.com/file/d/1xT-NmH8r2X5rbV9RxL2pURqMKXiZOZkA/view" target="itembox" data-item="camera"><img src="img/web2.png">
                </a>
                <a href="https://drive.google.com/file/d/1F4mRTDaOaLn9ivsP59QMA5QfvV2S3qu_/view" target="itembox" data-item="watch"><img src="img/web3.png">
                </a>
                <a href="https://drive.google.com/file/d/16LRct9qEq7inixjNjXHCf9Qgvi8f-Id2/view" target="itembox" data-item="watch"><img src="img/web4.png">
                </a>
                <a href="https://drive.google.com/file/d/1lwaWMeYIeoR_YxzRnxQVF8DaIqCRn4m5/view" target="itembox" data-item="watch"><img src="img/web5.png">
                </a>
                <a href="https://drive.google.com/file/d/1MSxcH6p1PCnUE3GZDf9HHGL32T8SrOIV/view" target="itembox" data-item="watch"><img src="img/web6.png">
                </a>
            </div>
        </section>
        <!--Our videos-->
        <section class="ourvideos" id="ourvideos">
            <div class="heading">
                <h2>Video Wirausaha</h2>
            </div>
            <div class="container">

                <div class="main-video-container">
                    <video src="images/vid-1.mp4" loop controls class="main-video"></video>
                    <h3 class="main-vid-title">Satu Tugas Utama Seorang Entrepreneur</h3>
                </div>

                <div class="video-list-container">

                    <div class="list active">
                        <video src="Videos/Video1.mp4" class="list-video"></video>
                        <h3 class="list-title">Satu Tugas Utama Seorang Entrepreneur</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video2.mp4" class="list-video"></video>
                        <h3 class="list-title">MINDSET SEORANG ENTREPRENEUR - SANDIAGA
                            UNO - BE A BILLIONAIRE</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video3.mp4" class="list-video"></video>
                        <h3 class="list-title">Dari Mana Bisnis Besar itu Dimulai</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video4.mp4" class="list-video"></video>
                        <h3 class="list-title">Berpikirlah Jadilah Pengusaha❗Prinsip Sukses Bos Jalan Tol Jusuf Hamka untuk
                            Anak Muda</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video5.mp4" class="list-video"></video>
                        <h3 class="list-title">Apa Itu Entrepreneur ❓- Apakah Saya Cocok Jadi Entrepreneur ❓</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video6.mp4" class="list-video"></video>
                        <h3 class="list-title">5 RAHASIA MENGAPA ORANG CINA PADA KAYA</h3>
                    </div>

                    <div class="list">
                        <video src="Videos/Video7.mp4" class="list-video"></video>
                        <h3 class="list-title">5 Mindset Basic Tentang Keuangan yang Harus Anda Pegang Sampai Anda Meninggal
                        </h3>
                    </div>

                </div>

            </div>
            <script src="js/main.js"></script>

        </section>


        <!--customers-->
        <section class="customers" id="customers">
            <div class="heading">
                <h2>Testimoni Pelanggan</h2>
            </div>
            <div class="customers-container">
                <div class="box">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>Desain yang dihasilkan keren banget, cepat, harganya terjangkau, dan bisa custom desain yang
                        diinginkan pelanggan.
                    </p>
                    <h2>Adelia</h2>
                    <img src="img/Orang1.jpg" alt="">
                </div>
                <div class="box">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>Suka banget sama hasil desainnya, elegan, simpel dan rapih, pelayanannya juga oke banget!! Top
                        Markotop!.</p>
                    <h2>Nathan</h2>
                    <img src="img/Orang2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>Untuk jasa yang ditawarkan berguna banget buat branding produk UMKM saya. Hasilnya keren banget!.</p>
                    <h2>Samuel</h2>
                    <img src="img/Orang3.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="footer-box">
                <h2>Fondpreneur</h2>
                <p>Silahkan Follow dan like Social media kami, kalian juga dapat menghubungi kami melalui akun sosial media
                    yang tertera di bawah ini.</p>
                <div class="social">
                    <a href="https://www.facebook.com/people/Fond-Preneur/100085612765318/"><i class='bx bxl-facebook'></i></a>
                    <a href="https://twitter.com/fondpreneur?t=j5dSPznUibYDRhjKaeH4DA&s=09"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/fondpreneur/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.tiktok.com/@fondpreneur_1?_t=8W5qUdidZgY&_r=1"><i class='bx bxl-tiktok'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Support</h3>
                <li><a href="#">Product</a></li>
                <li><a href="#">Help and Support</a></li>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Term Of Use</a></li>
                <li><a href="#">Product</a></li>
            </div>
            <div class="footer-box">
                <h3>View Guides</h3>
                <li><a href="#">Features</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog Posts</a></li>
                <li><a href="#">Our Branches</a></li>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <div class="contact">
                    <span><i class='bx bxs-map'></i>Kec. Bogor Utara, Kota Bogor, Jawa Barat</span>
                    <span><i class='bx bxs-phone'></i>+6281903877858</span>
                    <span><i class='bx bxs-envelope'></i>foundpreneur206@gmail.com</span>
                </div>
            </div>
        </section>
        <!--copyright-->
        <div class="copyright">
            <p>&#169; FondpreneurOlivia2022</p>
        </div>
        <!--Link to JS-->
        <script src="js/bootstrap.min.js"></script>
</body>

</html>