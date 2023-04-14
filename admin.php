<?php
    // Memulai session
    session_start();

    // Cek apakah session level sudah ada, jika tidak redirect ke halaman login
    if (!isset($_SESSION['level'])) {
        header("Location: index.php");
        exit;
    }

    // Mendapatkan data session level pengguna
    $level = $_SESSION['level'];
?>

<html>
<head>
    <link rel="stylesheet" href="coba.css">
    <link rel="icon" href="bp.jpg">
    <title>Admin</title>
    <script>
    // Function untuk menghitung hasil
    function hitung() {
      var angka1 = parseInt(document.getElementById('angka1').value);
      var angka2 = parseInt(document.getElementById('angka2').value);
      var hasil = angka1 + angka2; // Perhitungan
      document.getElementById('hasil').value = hasil;
    }
  </script>
</head>
<body>
    <header>
        <img src="Logo.png">
    </header>
    <nav>
           <a href="beranda.php"><span>Beranda</span></a>
           <a href="form.php"><span>Form</span></a>        
           <a href="profil.php"><span>Profil</span></a>
           <a href="index.php"><span style="color: white;">Admin</span></a>
    </nav>
    <!-- Form perhitungan menggunakan JavaScript -->
    <h1>Form Pembelian</h1><br>
    <?php
    if ($level == "admin") {
        echo "Selamat datang, Admin!";
    }
    ?>
<form>
    <label for="namaTiket">Nama Tiket :</label>
    <input style="textcolor black;" type="text" id="namaTiket" name="namaTiket">
    <label for="hargaTiket">Harga Tiket :</label>
    <input type="number" id="hargaTiket" name="hargaTiket">
    <label for="jumlahTiket">Jumlah Tiket :</label>
    <input type="number" id="jumlahTiket" name="jumlahTiket">
    <button type="button" onclick="hitungTotal()">Hitung Total</button><br>
    <button type="button" onclick="hapusData()">Hapus Data</button>
</form>
    <h2>Hasil Perhitungan</h2>
    <p id="outputNamaTiket"></p>
    <p id="outputHargaTiket"></p>
    <p id="outputJumlahTiket"></p>
    <p id="outputTotalHarga"></p>

<script class="in">
    function hitungTotal() {
        // Mengambil nilai input dari form
        var namaTiket = document.getElementById("namaTiket").value;
        var hargaTiket = parseFloat(document.getElementById("hargaTiket").value);
        var jumlahTiket = parseInt(document.getElementById("jumlahTiket").value);

        // Menghitung total harga
        var totalHarga = hargaTiket * jumlahTiket;

        // Menampilkan hasil perhitungan pada output
        document.getElementById("outputNamaTiket").innerHTML = "Nama Tiket: " + namaTiket;
        document.getElementById("outputHargaTiket").innerHTML = "Harga Tiket: Rp " + hargaTiket.toLocaleString();
        document.getElementById("outputJumlahTiket").innerHTML = "Jumlah Tiket: " + jumlahTiket;
        document.getElementById("outputTotalHarga").innerHTML = "Total Harga: Rp " + totalHarga.toLocaleString();
    }

    function hapusData() {
        // Menghapus nilai input pada form
        document.getElementById("namaTiket").value = "";
        document.getElementById("hargaTiket").value = "";
        document.getElementById("jumlahTiket").value = "";

        // Menghapus hasil perhitungan pada output
        document.getElementById("outputNamaTiket").innerHTML = "";
        document.getElementById("outputHargaTiket").innerHTML = "";
        document.getElementById("outputJumlahTiket").innerHTML = "";
        document.getElementById("outputTotalHarga").innerHTML = "";
    }
</script>
</body>
</html>