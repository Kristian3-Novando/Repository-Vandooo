<body bgcolor="#E9967A">
<?php 
include("config.php");
if( !isset($_GET['id']) ) {
    header('Location: list-mahasiswa.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM calon_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Mahasiswa Baru | ISBCoding</title>
    
<body>
    <header>
        <h3>Formulir Pendaftaran siswa Baru</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?> />">
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $mahasiswa['alamat'] ?></textarea>
            </p>

            <p>
                <label for="jenis kelamin">Jenis Kelamin: </label>
                <?php $jk =$mahasiswa['jenis_kelamin'];?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo $jk == ('perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $mahasiswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'katolik') ? "selected": "" ?>>Katolik</option>
                    <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
                    <option <?php echo ($agama == 'atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $mahasiswa['sekolah_asal'] ?>" />
            </p>

            <p>
                <input type="submit" value="Simpan" name="simpan" ?>
            </p>

        </fieldset>
    </form> 
    
</body>
</html>
</body>