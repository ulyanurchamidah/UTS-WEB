<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="icon" href="bp.jpg">
    <title>Form</title>
</head>
<style>
    .t1{
        color: black;
    }
    button {
    display: block;
    padding: 10px 15px;
    background-color: black;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<body>
</body>
    <header>
        <img src="logo.png" alt="logo">
    </header>
    <nav>
        <a class="bg"href="beranda.php">Beranda</a>
        <a class="bg"href="form.php"><span style="color: rgb(253, 253, 253);">Form</span></a>
        <a class="bg"href="profil.php">Profil</a>
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
            <td><button> kirim </button>
            </td>
            </tr>
            <tr>
            <td><a class="t1" href="index.php"><span>Sing In</span></a>
            </td>
            </tr>
           </table>
    <footer>
        <p>2023 BLACKPINK@ulyachmdh_</p>
    </footer>
    </div>
</body>
</html>