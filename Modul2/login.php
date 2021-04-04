<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$_user = strlen($user);
		$_pass = strlen($pass);
		$x = false;

		if ($_user >= 7) {
			echo "Username tidak boleh lebih dari 7 karakter!!!<br>";
			$x = true;
		}

		if (!preg_match("/[A-Z]/", $pass)) {
			echo "Password harus terdapat huruf kapital!!!<br>";
			$x = true;
		}

		if (!preg_match("/[a-z]/", $pass)) {
			echo "Password harus terdapat huruf kecil!!!<br>";
			$x = true;
		}

		if (!preg_match("/[0-9]/", $pass)) {
			echo "Password harus terdapat karakter khusus!!!<br>";
			$x = true;
		}

		if ($_pass < 10) {
			echo "Password harus lebih dari 10 karakter!!!<br>";
			$x = true;
		}

		if ($x == false) {
			echo "Selamat Anda Berhasil Login";
		}
	}
?>