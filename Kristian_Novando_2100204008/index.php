<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran mahasiswa Baru | Institut Shanti Bhuana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Institut Shanti Bhuana</h1>
    </header>

<div id="wrapper">
    <h4>MENU</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list_mahasiswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
		<p>
			<?php
				if ($_GET['status'] == 'sukses') {
					echo "Pendaftaran mahasiswa Baru Berhasil!";
				}	else {
					echo "Pendaftaran Gagal!";
				}
			?>
		</p>
	<?php endif; ?>
</div>

</body>
</html>