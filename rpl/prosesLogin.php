<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// LOGIN DUMMY
if ($username === 'admin' && $password === 'admin') {
    $_SESSION['login'] = true;
    header("Location: krs3.php");
} else {
    echo "<script>
        alert('Username atau password salah');
        window.location='login.php';
    </script>";
}
