<!DOCTYPE html>
<html>

<head>
    <title>DATA BARANG</title>
</head>

<body>
    <h2>DATA BARANG</h2>
    <br />
    <a href="index1.php">Data BARANG</a>
    <br />
    <br />
    <h3>TAMBAH DATA BARANG</h3>
    <form method="post" action="prosesgambar.php" enctype="multipart/form-data">
        <table width="400">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kdbarang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nmbarang"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <Select name=satuan>
                        <option value=PCS Informasi>PCS</option>
                        <option value=PACK Informatika>PACK</option>
                        <option value=KG Informatika>KG</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <Select name=kategori>
                        <option value=SI Informasi>SI</option>
                        <option value=TI Informatika>TI</option>
                        <option value=SIA Informatika>SIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Modal</td>
                <td><input type="text" name="hmodal"></td>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="hjual"></td>
            </tr>
            </tr>
            <tr>
                <td>Gambar</td>

                <td><input type="file" name="gambar" id="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name="save" type="submit" value="save">
                    <input name="BtnBatal" type="reset" value="BATAL" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>