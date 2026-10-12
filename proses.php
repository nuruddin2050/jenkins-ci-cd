<?php
// Selalu mulai session di baris paling awal
session_start();

// Cek apakah request method-nya adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Inisialisasi session array jika belum ada
    if (!isset($_SESSION['mahasiswa'])) {
        $_SESSION['mahasiswa'] = [];
    }

    // Kumpulkan data dari form ke dalam sebuah array
    $data_mahasiswa = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'prodi' => $_POST['prodi'],
        'semester' => $_POST['semester'],
        'alamat' => $_POST['alamat']
    ];

    // Tambahkan data mahasiswa baru ke dalam session array
    $_SESSION['mahasiswa'][] = $data_mahasiswa;

    // Arahkan kembali ke halaman form setelah data disimpan
    header('Location: form.php');
    exit();

} else {
    // Jika diakses tanpa melalui form, tampilkan pesan
    echo "Akses tidak valid.";
}
?>