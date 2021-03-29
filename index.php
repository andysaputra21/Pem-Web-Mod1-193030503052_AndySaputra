<?php
  $nama= ["AndySaputra", "didi", "busu", "abol","adri"];
      function vokal($kata) {
        $a = substr_count($kata, 'a');
        $i = substr_count($kata, 'i');
        $u = substr_count($kata, 'u');
        $e = substr_count($kata, 'e');
        $o = substr_count($kata, 'o');
        $count = ($a+$i+$u+$e+$o);
        return $count;
      }

      function konsonan($kata) {
        $jumlah = strlen($kata);
        $a = substr_count($kata, 'a');
        $i = substr_count($kata, 'i');
        $u = substr_count($kata, 'u');
        $e = substr_count($kata, 'e');
        $o = substr_count($kata, 'o');
        $count = $jumlah - ($a+$i+$u+$e+$o);
        return $count;
        }
?>

<!DOCTYPE html>
<head>
  <title>Tugas Mudul 1</title>
</head>
<body>
    <h1 align="center">Anggota Keluarga</h1>
      <table align="center" border="1" cellpadding="20" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jumlah Kata</th>
              <th>Jumlah Huruf</th>
              <th>Kebalikan Nama</th>
              <th>Jumlah Huruf Konsonsan</th>
              <th>Jumlah Huruf Vokal</th>
            </tr>
          </thead>
      
           <?php foreach ($nama as $n) :  ?>
                    <tr>
                        <td><?php echo $n."<br>"; ?></td>
                        <td><?php echo str_word_count($n)."<br>"; ?></td>
                        <td><?php echo strlen($n)."<br>"; ?></td>
                        <td><?php echo strrev($n)."<br>"; ?></td>
                        <td><?= konsonan($n);  ?></td>
                        <td><?= vokal($n);  ?></td>
                    </tr>            
	         <?php endforeach; ?>       
      </table>
</body>
</html>