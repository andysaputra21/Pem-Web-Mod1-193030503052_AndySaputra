<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <header>
        <h3>Input Data</h3>
    </header>

    <form action="proses-input.php" method="POST">

        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat"/>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Khatolik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
         <input type="date" name="tanggal_lahir"/>
            </select>
        </p>
        <p>
            <label for="alamat">Email: </label>
            <input type="text" name="email"/>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>
       
        <a href="index.php">kembali ke menu</a>
    </body>
</html>