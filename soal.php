<?php
// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $nim = "";
$namaErr = $emailErr = $nimErr = "";

// Periksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // **********************  1  **************************  
    // Tangkap nilai nama yang ada pada form HTML
    if (empty($_POST["nama"])) {
        $namaErr = "Nama wajib diisi!";
    } 

    // **********************  2  **************************  
    // Validasi format email agar sesuai dengan standar
    if (empty($_POST["email"])) {
        $emailErr = "Email wajib diisi!";
    } 

    // **********************  3  **************************  
    // Pastikan NIM terisi dan berupa angka
    if (empty($_POST["nim"])) {
        $nimErr = "NIM wajib diisi!";
    } elseif (!ctype_digit($_POST["nim"])) {
        $nimErr = "NIM harus berupa angka!";
    } 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <?php if (!empty($namaErr) || !empty($emailErr) || !empty($nimErr)) { ?>
                <div class="alert alert-danger">
                    <strong>Kesalahan!</strong> Harap perbaiki data yang salah.
                </div>
            <?php } else { ?>
                <div class="alert alert-success">
                    <strong>Berhasil!</strong> Data pendaftaran telah diterima.
                </div>
            <?php } ?>
        <?php } ?>

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <div class="form-group">
                <label>Nama :</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <?php if (!empty($namaErr)) { ?>
                    <div class="error"><?php echo $namaErr; ?></div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label>Email :</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <?php if (!empty($emailErr)) { ?>
                    <div class="error"><?php echo $emailErr; ?></div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label>NIM :</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">
                <?php if (!empty($nimErr)) { ?>
                    <div class="error"><?php echo $nimErr; ?></div>
                <?php } ?>
            </div>

            <div class="button-container">
                <button type="submit">Daftar</button>
            </div>

        </form>
    </div>
</body>
</html>