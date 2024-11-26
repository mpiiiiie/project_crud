<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <style>

            #jumbotron {
                text-shadow: #000 1px;
            }

            #jumbotron h1 {
                color: #fff;
            }

            #jumbotron p {
                color: #fff;
            }

            .background-jumbotron {
                background-image: url("img/background.jpg");
                height: 500px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                box-shadow: inset 0 0 0 2000px rgba(0,0,0,0,5);
            }

            .btn-lg{
                background-color: rgb(33, 33, 174);
        
            }

            .bg-blue {
                color: #5d3427;
            }
        </style>
</head>

<body>

    <!--navbar menu-->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="smoot.com" width="130px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">keunggulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Konsultasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Tentang Kami</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!--jumbotron image-->
    <section id="jumbotron" class="jumbotron-fluid background-jumbotron">
            <div class="container-fluid py-5 text-center">
            <P class="p-4"></P>
              <h1 class="display-5 fw-bold">Selamat Datang di HOME BOOK</h1>
              <p>Lebih dari sekadar toko buku, kami adalah komunitas bagi para pencinta literasi.<br>
              Bergabunglah dengan forum diskusi, ikuti acara peluncuran buku,<br>
              dan temukan teman-teman baru yang berbagi kecintaan yang sama terhadap membaca.<br>
              Di sini, setiap pembaca adalah bagian dari keluarga besar yang saling mendukung dan menginspirasi.</p>
              <a class="btn btn-primary btn-lg" type="button" href="index.php">LOGIN</a>
            </div>
    </section>

    <!--bagian keunggulan-->
    <section id="keunggulan" class="container-fluid bg-light p-4">
        <div class="row text-center">
            <div class="col-12 p5">
                <h2 class="display-5 fw-bold">Mengapa harus pilih home book?</h2>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                <i class="fas fa-book fa-stack-1x text-white"></i>
            </span>

                    <h3 class="mt-4 bg-blue">Koleksi Lengkap</h3>
                    <p>Kami menawarkan berbagai pilihan buku dari berbagai genre, mulai dari fiksi, non-fiksi, hingga buku anak-anak</p>
            </div>


        <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                <i class="fas fa-shop fa-stack-1x text-white"></i>
            </span>

                    <h3 class="mt-4 bg-blue">Layanan Pelanggan Ramah</h3>
                    <p>Tim kami siap membantu Anda dengan senyuman! Kami percaya bahwa pengalaman berbelanja harus menyenangkan</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                <i class="fas fa-dollar fa-stack-1x text-white"></i>
            </span>

                    <h3 class="mt-4 bg-blue">Promo Menarik</h3>
                    <p>Kami berkomitmen untuk memberikan harga yang bersaing dan menawarkan promo serta diskon menarik secara berkala.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                <i class="fas fa-shield fa-stack-1x text-white"></i>
            </span>

                    <h3 class="mt-4 bg-blue">Kualitas Terjamin</h3>
                    <p>memastikan bahwa Anda mendapatkan bacaan yang tidak hanya menarik, tetapi juga informatif dan inspiratif.</p>
            </div>



    </section>

    <!--bagian produk-->
    <section id="produk" class="container">
        <div class="row text-center">
            <div class="col-12 p-4">
                <h2 class="display-5 fw-bold">Daftar Produk</h2>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
            <img src="img/2.png" width="150px" align="right" class="card-img-top" alt="gambar">
            <div class="card-body">
                <h5 class="card-title">As Long as the Lemon Trees Grow</h5>
                <p class="card-text">Secara keseluruhan novel As Long As Lemon Tree Growth berhasil menggambarkan kondisi perang yang terjadi di Suriah.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
            </div>
        </div>

        

    </section>

    <!--bagian konsultasi-->
    <section id="konsultasi">

    </section>

    <!--bagian kontak-->
    <section id="kontak">

    </section>

    <!--bagian fotter-->
    <section id="fotter">

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>