<?php
// koneksi database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // menangkap data yang di kirim dari form
    $kode_barang = $_POST['kdbarang'];
    $nama_barang = $_POST['nmbarang'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $harga_modal = $_POST['hmodal'];
    $harga_jual = $_POST['hjual'];
    $namaFileBaru = "";


    if ($_FILES['gambar']['name']) {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['gambar']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $namaFileBaru = 'img_' . $kode_barang . '.'  . $ekstensi;

        if (!in_array($ekstensi, $ekstensi_diperbolehkan)) {
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window location='edit_barang.php?id=$kode_barang';</script>";
            return;
        }

        if ($ukuran > 1044070) {
            echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
            return;
        }

        if (!move_uploaded_file($file_tmp, 'file/' . $namaFileBaru)) {
            echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
            return;
        }
    }


    $query = "UPDATE tb_barang SET nama_barang='$nama_barang', satuan='$satuan', kategori='$kategori', harga_modal='$harga_modal',harga_jual='$harga_jual'";

    if ($namaFileBaru != "") $query .= ",gambar='$namaFileBaru'";
    $query .= "WHERE kode_barang='$kode_barang'";

    $update = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($update) {
        echo "<script>alert('DATA BERHASIL DI UPDATE');window.location='index1.php';</script>";
    } else {
        echo "<script>alert('DATA GAGAL DI UPDATE');window.location='index1.php';</script>";
    }
}
