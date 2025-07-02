<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($koneksi, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOA COFFE | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Warung Tirai Merah</h1>
            <h3>Setiap malam, selalu ada cerita!</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Mau pesan apa?"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                                <button type="submit" class="btn warna2 text-white">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlight kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlight-kategori kategori-makanan d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Makanan">Indomie Bangladesh</a></h4>
                    </div>
                </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlight-kategori kategori-minuman d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Minuman">Kopi Tirai Aren</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                        <div class="highlight-kategori kategori-cemilan d-flex justify-content-center
                    align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Cemilan">Roti Bakar</a></h4>
                </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Tentang Kami  -->
            <div class="container-fluid warna1 py-5 text-light">
                <div class="container text-center">
                    <h3>TOA COFFE</h3>
                    <p class="fs-5 mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia cupiditate consequatur praesentium corporis tempora quisquam! Cumque, facilis eligendi sapiente, libero, beatae tempore temporibus dicta aspernatur ullam aperiam voluptatibus excepturi magnam quo veritatis ea earum repellat? Rem nostrum dolore sint nihil dolor in eaque, minima adipisci tempore ex aspernatur deleniti incidunt maxime ratione aliquam esse, commodi voluptatum nam temporibus vitae animi cupiditate sequi eligendi. Quidem eius ad et magnam fugiat quas molestiae tenetur atque deleniti possimus quo, dolores ea libero aspernatur.
                    </p>
                </div>
            </div>

        <!-- Produk -->
        <div class="contaner-fluid py-5">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row mt-5">
                    <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                             <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                                </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                                        <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                                        <p class="card-text text-harga">Rp<?php echo $data['harga']; ?></p>
                                        <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                                </div>                             
                            </div>
                        </div>
                        <?php } ?>
                </div>
                <a class="btn btn-outline-warning mt-3" href="produk.php">See more</a>
            </div>
        </div>

        <!-- footer -->
        <?php require "footer.php";?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>