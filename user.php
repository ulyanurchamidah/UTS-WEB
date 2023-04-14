<html>
<head>
    <link rel="stylesheet" href="tes.css">
    <link rel="icon" href="bp.jpg">
    <title>User</title>
</head>
<body>
    <header>
        <img src="Logo.png" alt="logo">
    </header>
    <nav>
           <a href="beranda.php"><span>Beranda</span></a>
           <a href="form.php"><span>Form</span></a>        
           <a href="profil.php"><span>Profile</span></a>
           <a href="index.php"><span style="color: white;">User</span></a>
    </nav>
    <?php
    // Memulai session
    session_start();

    // Cek apakah session level sudah ada, jika tidak redirect ke halaman sign in
    if (!isset($_SESSION['level'])) {
        header("Location: index.php");
        exit;
    }

    // Mendapatkan data session level pengguna
    $level = $_SESSION['level'];

    if ($level == "user") {
        echo "Selamat datang, User!";
    }
    ?>

    <div class="text1">
        <h2>Hi, Jangan lupa saksikan event yang telah di laksakan oleh BANK BRI
            <br>Blackpink telah hadir untuk menghibur warna Indonesia lo!!
        </h2>
    </div>
    <div class="text2">
        <br>
        <h3> Ayo ramaikan dengan mengklik tombol yang di bawah ini!
        </h3>
    </div>
    <div class="text2">
        <a href="form.php" target="_SELF">
        <button class="btn">DAFTAR</button>
    </div>
</body>
</html>
</body>
</html>

