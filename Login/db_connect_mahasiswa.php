<?php
//koneksi ke mysql
$koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswaa");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal" . mysqli_connect_error();
}
