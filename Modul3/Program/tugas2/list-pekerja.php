<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <nav>
        <a href="input.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pekerja";
        $query = mysqli_query($db, $sql);

        while($pekerja = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pekerja['id']."</td>";
            echo "<td>".$pekerja['Nama']."</td>";
            echo "<td>".$pekerja['Alamat']."</td>";
            echo "<td>".$pekerja['Jenis_kelamin']."</td>";
            echo "<td>".$pekerja['Agama']."</td>";
            echo "<td>".$pekerja['Tanggal_Lahir']."</td>";
            echo "<td>".$pekerja['Email']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$pekerja['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pekerja['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <a href="index.php">kembali ke menu</a>
    </body>
</html>