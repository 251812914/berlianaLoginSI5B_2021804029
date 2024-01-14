<!DOCTYPE html>
<html>

<head>
    <title>Upload File </title>
</head>

<body>
    <h1>Upload File </h1>
    <?php
    include 'koneksi.php';
    if (isset($_POST["save"])) {
        // menangkap data yang di kirim dari form
        $kode_barang = $_POST['kdbarang'];
        $nama_barang = $_POST['nmbarang'];
        $satuan = $_POST['satuan'];
        $kategori = $_POST['kategori'];
        $harga_modal = $_POST['hmodal'];
        $harga_jual = $_POST['hjual'];

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['gambar']['name'];

        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];

        $file_tmp = $_FILES['gambar']['tmp_name'];
        $namafile = 'img_' . $kode_barang . '.' . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, 'file/' . $namafile);
                $query = mysqli_query($koneksi, "insert into tb_barang (kode_barang,nama_barang,satuan,kategori,harga_modal,harga_jual,gambar) values ('$kode_barang','$nama_barang','$satuan','$kategori','$harga_modal','$harga_jual','$namafile')");
                if ($query) {
                    echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index1.php';</script>";
                } else {
                    echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index1.php';</script>";
                }
            } else {
                echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
            }
        } else {
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>";
        }
    }
