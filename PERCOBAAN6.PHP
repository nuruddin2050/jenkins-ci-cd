<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 6 Function</title>
    <style>
        .result { 
            background: #e7f3ff; 
            padding: 10px; 
            margin: 10px 0; 
            border-left: 4px solid #2196F3; 
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <h2>Percobaan 6: Function (Fungsi)</h2>

    <?php
    // 1. Function sederhana dengan 1 parameter
    function sapa($nama) {
        return "Halo, $nama! Selamat datang di PHP.";
    }

    // 2. Function untuk perhitungan
    function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // 3. Function dengan kondisi dan return value
    function cekKelulusan($nilai, $kehadiran) {
        if ($nilai >= 60 && $kehadiran >= 75) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

    function konversiNilai($angka) {
        if ($angka >= 85) return "A";
        elseif ($angka >= 70) return "B";
        elseif ($angka >= 60) return "C";
        elseif ($angka >= 50) return "D";
        else return "E";
    }

    // 4. Function dengan default parameter
    function hitungDiskon($harga, $persen = 10) {
        $diskon = $harga * ($persen / 100);
        return $diskon;
    }

    // 5. Function untuk membuat tabel HTML
    function buatTabelPerkalian($angka) {
        echo "<table>";
        echo "<tr><th colspan='3'>Tabel Perkalian $angka</th></tr>";
        for ($i = 1; $i <= 10; $i++) {
            $hasil = $angka * $i;
            echo "<tr><td>$angka</td><td>x $i</td><td>= $hasil</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <h3>1. Function Sederhana</h3>
    <div class="result">
        <?php echo sapa("Budi"); ?>
    </div>

    <h3>2. Function dengan Parameter</h3>
    <div class="result">
        Luas persegi (sisi 5): <?php echo hitungLuasPersegi(5); ?> cm²<br>
        Luas persegi panjang (8 x 5): <?php echo hitungLuasPersegiPanjang(8, 5); ?> cm²
    </div>

    <h3>3. Function dengan Return</h3>
    <div class="result">
        <?php
        $nilai = 85;
        $kehadiran = 90;
        echo "Nilai: $nilai, Kehadiran: $kehadiran%<br>";
        echo "Status: " . cekKelulusan($nilai, $kehadiran) . "<br>";
        echo "Grade: " . konversiNilai($nilai);
        ?>
    </div>

    <h3>4. Function dengan Default Parameter</h3>
    <div class="result">
        Harga: Rp 100.000<br>
        Diskon 10% (default): Rp <?php echo number_format(hitungDiskon(100000)); ?><br>
        Diskon 20%: Rp <?php echo number_format(hitungDiskon(100000, 20)); ?>
    </div>

    <h3>5. Contoh Penggunaan Function</h3>
    <div class="result">
        <?php
        buatTabelPerkalian(7);
        ?>
    </div>

</body>
</html>