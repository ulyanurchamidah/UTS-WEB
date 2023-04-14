<?php
    // Memulai session
    session_start();

    // Data pengguna dengan level dan informasi sign in
    $users = array(
        array("username" => "admin", "password" => "admin", "level" => "admin"),
        array("username" => "user", "password" => "user", "level" => "user"),
        array("username" => "staff", "password" => "staff", "level" => "staff")
    );

    // Mendapatkan data dari form sign in
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            // Set SESSION dengan level pengguna
            $_SESSION['level'] = $user['level'];
            // Redirect ke halaman sesuai role bisnisnya
            if ($user['level'] == "admin") {
                header("Location: admin.php");
            } elseif ($user['level'] == "user") {
                header("Location: user.php");
            } elseif ($user['level'] == "staff") {
                header("Location: staff.php");
            }
            exit; // Keluar dari skrip PHP
        }
    }

    // Jika username atau password tidak sesuai, kembali ke halaman sign in
    header("Location: index.php");