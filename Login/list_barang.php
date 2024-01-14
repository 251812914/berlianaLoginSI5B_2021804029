<!DOCTYPE html>
<html>

<head>
    <title>DATA BARANG</title>
</head>

<body>
    <h2>DATA BARANG</h2>
    <br />
    <a href="tambahbarang.php"> + TAMBAH BARANG</a>
    <br />
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Kategori</th>
            <th>Harga Modal</th>
            <th>Harga Jual</th>
            <th>Gambar</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_barang");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_barang']; ?></td>
                <td><?php echo $d['nama_barang']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['harga_modal']; ?></td>
                <td><?php echo $d['harga_jual']; ?></td>
                <td><img src="<?php echo "file/" . $d['gambar']; ?>" width="50" height="70">
                </td>
                <td>
                    <a href="edit_barang.php?id=<?php echo $d['kode_barang']; ?>">EDIT</a> |
                    <a href="hapus.php?id=<?php echo $d['kode_barang'];
                                            ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>