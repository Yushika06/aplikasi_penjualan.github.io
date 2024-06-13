<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Toko Online {{ $nama }}</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profil">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="product-detail">
            <img src="img/Fishing [9D7F875].png" alt="Gambar Produk">
            <div class="product-info">
                <h2>Nama Produk</h2>
                <p>Deskripsi produk...</p>
                <p>Harga: Rp 100.000</p>
                <button class="btn btn-buy">Beli Sekarang</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Toko Online. Yusufnova.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
