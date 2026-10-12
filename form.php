<?php
// Mulai session di awal file
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; }
        .form-container { padding: 20px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 30px; }
        .form-group { margin: 15px 0; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
        button:hover { background: #45a049; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .action-links a { margin-right: 10px; text-decoration: none; }
        .action-links a.edit { color: #2196F3; }
        .action-links a.delete { color: #f44336; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Form Pendaftaran Mahasiswa</h2>
        <form method="POST" action="proses.php">
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Program Studi:</label>
                <select name="prodi" required>
                    <option value="">Pilih Prodi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
            </div>
            <div class="form-group">
                <label>Semester:</label>
                <input type="number" name="semester" min="1" max="14" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit">Daftar</button>
        </form>
    </div>

    <hr>

    <h2>Data Mahasiswa Terdaftar</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Cek apakah session 'mahasiswa' ada dan tidak kosong
            if (isset($_SESSION['mahasiswa']) && !empty($_SESSION['mahasiswa'])) {
                // Looping data mahasiswa dari session
                foreach ($_SESSION['mahasiswa'] as $index => $mhs) {
                    echo "<tr>";
                    echo "<td>" . ($index + 1) . "</td>";
                    echo "<td>" . htmlspecialchars($mhs['nim']) . "</td>";
                    echo "<td>" . htmlspecialchars($mhs['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($mhs['prodi']) . "</td>";
                    echo "<td class='action-links'>";
                    // Link untuk Aksi Edit dan Hapus akan kita buat di langkah selanjutnya
                    echo "<a href='#' class='edit'>Edit</a>";
                    echo "<a href='#' class='delete'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                // Tampilkan pesan jika tidak ada data
                echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data mahasiswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>