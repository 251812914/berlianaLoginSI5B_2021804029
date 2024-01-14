<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require 'functions.php';

?>

<!DOCTYPE html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>Hello, Anwar Anas</h1>
    <nav>
        <ul>
            <li><a href="list_barang.php">DATA BARANG</a></li>
            <li><a href="list_mahasiswa.php">DATA MAHASISWA</a></li>
            <li><a href="list_user.php">DATA USER</li>
            <li><a href="Data_baru.php">DATA BARU</li>

        </ul>
    </nav>




</body>

</html>