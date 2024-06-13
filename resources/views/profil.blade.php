<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
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
        <section id="profile">
            <h2>Profil Pengguna</h2>
            <div class="profile-info">
                <img src="https://i.pinimg.com/736x/ed/21/b6/ed21b6caed5a53a85a7ed5e07a95a161.jpg" alt="Foto Profil" id="profile-photo">
                <div class="profile-details">
                    <h3>Username: <span id="username">Pelanggan 1</span></h3>
                    <p>Biodata: <span id="biodata">Biodata pengguna.</span></p>
                    <p>Jumlah Pembelian: <span id="purchase-count">5</span></p>
                </div>
                <button class="btn" id="edit-profile-btn">Edit Profil</button>
            </div>

            <div id="edit-profile-form" class="hidden">
                <h3>Edit Profil</h3>
                <form id="profile-form">
                    <label for="new-photo">Foto Profil:</label>
                    <input type="file" id="new-photo" name="new-photo"><br>
                    <label for="new-username">Username:</label>
                    <input type="text" id="new-username" name="new-username" value="user123"><br>
                    <label for="new-biodata">Biodata:</label>
                    <textarea id="new-biodata" name="new-biodata">Ini adalah biodata pengguna.</textarea><br>
                    <button type="button" class="btn" id="save-profile-btn">Simpan</button>
                    <button type="button" class="btn" id="cancel-edit-btn">Batal</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Toko Online. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
