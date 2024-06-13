<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Yusufnova</title>
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

        <section id="products">

            <div class="product">
                <img src="img/Fishing [9D7F875].png" alt="Produk 1">
                <h3>Produk 1</h3>
                <p>Rp100.000</p>
                <a href="/produk-detail" class="btn">Lihat Detail</a>
            </div>
            <!-- Tambahkan lebih banyak produk di sini -->
            <div class="product">
                <img src="img/Exploration [019407B].png" alt="Produk 2">
                <h3>Produk 2</h3>
                <p>Rp100.000</p>
                <a href="/produk-detail" class="btn">Lihat Detail</a>
            </div>
            
            <div class="product">
                <img src="img/Materials [69F5AD0].png" alt="Produk 3">
                <h3>Produk 3</h3>
                <p>Rp100.000</p>
                <a href="/produk-detail" class="btn">Lihat Detail</a>
            </div>

            <div class="product">
                <img src="img/Exploration [3CE6262].png" alt="Produk 4">
                <h3>Produk 4</h3>
                <p>Rp100.000</p>
                <a href="/produk-detail" class="btn">Lihat Detail</a>
            </div>

        </section>
        
    </main>

    <footer>
        <p>&copy; 2024 Toko Online. Yusufnova.</p>
    </footer>

</body>
</html>
