<!DOCTYPE html>
<html>
    <head>
        <title>FORM TABEL SISWA</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldlist>
            <p>
                <label for="nama">nama: </label>
                <input text="text" name="nama" />
</p>
<p>
    <label for="kelas">kelas: </label>
    <input text="text" name="kelas" />
</p>
<p>
    <label for="jurusan">jurusan: </label>
    <select name ="jurusan" >
    <option>RPL</option>
    <option>TSM</option>
    <option>TB</option>
    <option>TBG</option>
    <option>LAS</option>
</select>
</p>
<p>
    <label for="tahun">tahun: </label>
    <input text="text" name="tahun" />
</p>
<p>
    <label for="nominal">nominal</label>
    <select name="nominal">
        <option>140000</option>
        <option>150000</option>
        <option>155000</option>
</p>
</fieldlist>
<p>
    <input type="submit" value="submit" name="submit" />
</p>
</fieldlist>
</form>
</body>
</html>