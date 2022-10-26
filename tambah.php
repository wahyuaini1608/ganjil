<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian BBM</title>
</head>
<body>
    <h2>FORM PEMBELIAN BBM</h2>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nik">NIK :</label>
                    <input type="number" name="nik"/>
</p>
<p>
    <label for="jenis_kendaraan">Jenis Kendaraan</label>
    <select name="jenis_kendaraan">
        <option value="motor">Motor</option>
        <option value="mobil">Mobil</option>
        <option value="truk">Truk</option>
        <option value="bis">Bis</option>
        <option value="tossa">Tossa</option>
</select>
</p>

<p>
    <input type="submit" value="Kirim Data" name="tambah"/>
</fieldset>
</form>
</body>
</html>