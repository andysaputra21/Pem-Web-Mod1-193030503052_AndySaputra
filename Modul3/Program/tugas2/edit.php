<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pegawai.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pekerja WHERE id=$id";
$query = mysqli_query($db, $sql);
$pekerja = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <header>
        <h3>Formulir Edit</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>
            <input type="hidden" name="id" value="<?php echo $pekerja['id'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $pekerja['Nama'] ?>" />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" value= "<?php echo $pekerja['Alamat'] ?>" />
        </p>

        <p>
            <label for="Jenis_kelamin">Jenis Kelamin: </label>
            <?php $jenis_kelamin = $pekerja['Jenis_kelamin']; ?> 
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $pekerja['Agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'khatolik') ? "selected": "" ?>>khatolik</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir : </label>
            <input type="date" name="tanggal_lahir" value="<?php echo $pekerja['Tanggal_Lahir'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" value="<?php echo $pekerja['Email'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

<a href="index.php">kembali ke menu</a>
    </body>
</html>