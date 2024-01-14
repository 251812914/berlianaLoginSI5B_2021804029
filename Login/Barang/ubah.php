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
        <form method="post" action="prosesupdate.php">

            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input type="text" name="kdbarang" value="<?php echo $d['kode_barang']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nmbarang" value="<?php echo $d['nama_barang']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Satuan</td>
                    <td>
                        <Select name=satuan>
                            <option value="PCS" <?php if ($d['satuan'] == "PCS") echo 'selected="selected"'; ?>>PCS</option>
                            <option value="PACK" <?php if ($d['satuan'] == "PACK") echo 'selected="selected"'; ?>>PACK</option>
                            <option value="KG" <?php if ($d['satuan'] == "KG") echo 'selected="selected"'; ?>>KG</option>
                    </td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td>
                        <Select name=jurusan>
                            <option value="SI" <?php if ($d['jurusan'] == "SI") echo 'selected="selected"'; ?>>SI</option>
                            <option value="TI" <?php if ($d['jurusan'] == "TI") echo 'selected="selected"'; ?>>TI</option>
                            <option value="SIA" <?php if ($d['jurusan'] == "SIA") echo 'selected="selected"'; ?>>SIA</option>
                        </select>
                    </td>
                </tr>
                </tr>

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
                    <td></td>
                    <td>
                        <input name="BtnSimpan" type="submit" value="SIMPAN">
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