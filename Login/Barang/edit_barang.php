<!DOCTYPE html>
<html>

<head>
    <title>DATA BARANG</title>
</head>

<body>
    <h2>DATA BARANG</h2>
    <br />
    <a href="index1.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA BARANG</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tb_barang where kode_barang='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="prosesupdate.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input type="text" name="kdbarang" value="<?php echo $d['kode_barang']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nmbarang" value="<?php echo $d['nama_barang']; ?>"></td>
                </tr>

                <tr>
                    <td>Satuan</td>
                    <td>
                        <Select name=satuan>
                            <option value="PCS" <?php if ($d['satuan'] == "PCS") echo 'selected="selected"'; ?>>PCS</option>
                            <option value="PACK" <?php if ($d['satuan'] == "PACK") echo 'selected="selected"'; ?>>PACK</option>
                            <option value="KG" <?php if ($d['satuan'] == "KG") echo 'selected="selected"'; ?>>KG</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td>
                        <Select name=kategori>
                            <option value="SI" <?php if ($d['kategori'] == "SI") echo 'selected="selected"'; ?>>SI</option>
                            <option value="TI" <?php if ($d['kategori'] == "TI") echo 'selected="selected"'; ?>>TI</option>
                            <option value="SIA" <?php if ($d['kategori'] == "SIA") echo 'selected="selected"'; ?>>SIA</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Harga Modal</td>
                    <td><input type="text" name="hmodal" value="<?php echo $d['harga_modal']; ?>"></td>
                </tr>

                <tr>
                    <td>Harga jual</td>
                    <td><input type="text" name="hjual" value="<?php echo $d['harga_jual']; ?>"></td>
                </tr>

                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"> <img src="file/<?php echo $d['gambar']; ?>" style="width: 100px float: left;margin-bottom: 5px;"><br /><i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah photo</i>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <br /><br />
                        <input name="save" type="submit" value="save">
                        <input name="BtnBatal" type="reset" value="BATAL" />
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>