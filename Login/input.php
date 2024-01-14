<?php
//koneksi ke mysql
$koneksi = mysqli_connect("localhost", "root", "", "db_barang");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal" . mysqli_connect_error();
} else {
    $kode_barang = $_POST['kdbarang'];
    $nama_barang = $_POST['nmbarang'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $harga_modal = $_POST['hmodal'];
    $harga_jual = $_POST['hjual'];

    $query = mysqli_query($koneksi, "insert into tb_barang (kode_barang,nama_barang,satuan,kategori,harga_modal,harga_jual) values ('$kode_barang','$nama_barang','$satuan','$kategori','$harga_modal','$harga_jual')");
    if ($query)
        echo "Input Data Sukses<br>";
    else
        echo "Input Data Gagal<br>";
}
