<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Form</title>
</head>
<body>
</body>
    <header>
        <img src="logo.png" alt="logo">
    </header>
    <nav>
        <a class="bg"href="beranda.php">beranda</a>
        <a class="bg"href="form.php"><span style="color: rgb(253, 253, 253);">form</span></a>
        <a class="bg"href="profil.php">profil</a>
    </nav>
        <form>
         <h2 class="hi">Tiket Blackpink</h2>
          <table>
          <tr>
           <td><label>Nama</label></td>
           <td>: <input type="text" name=""></td>
          </tr>
          <tr>
           <td><label>Password</label></td>
           <td>: <input type="password"name=""></td>
          </tr>
        <tr> 
         <td><label>Kelamin</label></td>
         <td><input type="radio"name="jenis kelamin"> Laki-Laki</td>
         <td><input type="radio"name="jenis kelamin"> Perempuan</td>
         </tr>
         <tr>
            <td><label>Khusus</label></td>
            <td>
             : <select onchange="Tujuan()" id="inp_tujuan">
             <option>--PILIH--</option><br>
             <option value="jmbr">VVIP Rp.1.500.000</option>
             <option value="sby">VIP Rp.850.000</option>
             </select>
            </td>
           </tr>
            <td><label>JUMLAH</label></td>
            <td>: <input onkeyup="Total()" type="number" id="inp_jumlah" name=""></td>
           </tr>
           <tr>
            <td><label>Kursi </label></td>
            <td><input type="checkbox" id="depan">
            <label for="depan">depan</label> </td>
            <td><input type="checkbox" id="tengah">
            <label for="tengah">tengah</label> </td>
            </td>
           </tr>
           <tr>
            <td><button> kirim </button>
            </td>
           </tr>
           </table>
    <footer>
        <p>2023 BLACKPINK@ulyachmdh_</p>
    </footer>
    </div>
</body>
</html>