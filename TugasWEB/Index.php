<?php
if( isset($_POST["login"]) ){
    if( $_POST["user"] == "ulya" && $_POST["pass"] == 123){
        header("Location: beranda.php");
        exit;
    }else{
        $error = true;
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="Index.css">
        <title>Login</title>
    </head>
    <body>
        <section id="login">
        <form action="beranda.php" method="post">
            <br>Username : ulya 
            <br>Pass : 123
            <br>
            <br>
            <h1 >Welcome</h1>
            <h5>Silahkan Login Terlebih dahulu!</h5>
            <br>
            <br>
            <input type="text" placeholder="Username" name="user"><br>
            <br>
            <input type="password" placeholder="Password" name="pass"><br>
            <br>
            <button class="bt" type="submit" name="login">LOGIN</button>
            <?php if( isset( $error)) : ?>
                <p style="color: red; font-style: sans serif;">
                    Username atau Password Salah!!!
                </p>
            <?php endif ?>
        </form>
        </section>
    </body>
</html>