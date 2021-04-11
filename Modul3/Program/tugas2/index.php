<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <nav>
        <header>
        <h3 align="center">Selamat Datang</h3>
    </header>

        <ul>
            <li><a href="input.php">Input Data Bru</a></li>
            <li><a href="list-pekerja.php">Data Pekerja</a></li>
        </ul>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pegawai baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </nav>

    

    </body>
</html>