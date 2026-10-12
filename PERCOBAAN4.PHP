<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 4 - Perulangan</title>
    <style>
        table { border-collapse: collapse; margin: 10px 0; }
        table, th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>

    <h2>Percobaan 4: Perulangan (Looping)</h2>

    <h3>1. FOR LOOP</h3>
    <?php
    echo "<b>Angka 1-10:</b><br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }

    echo "<br><br><b>Bilangan Genap 2-20:</b><br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i ";
    }
    ?>

    <h3>2. WHILE LOOP</h3>
    <?php
    echo "<b>Countdown 10-1:</b><br>";
    $angka = 10;
    while ($angka >= 1) {
        echo "$angka ";
        $angka--;
    }
    ?>

    <h3>3. DO-WHILE LOOP</h3>
    <?php
    echo "<b>Kelipatan 5:</b><br>";
    $kelipatan = 5;
    do {
        echo "$kelipatan ";
        $kelipatan += 5;
    } while ($kelipatan <= 50);
    ?>

    <h3>4. FOREACH LOOP</h3>
    <?php
    $mahasiswa = ["Budi", "Ani", "Citra", "Dedi", "Eka"];
    echo "<b>Daftar Mahasiswa:</b><br>";
    foreach ($mahasiswa as $index => $nama) {
        $no = $index + 1;
        echo "$no. $nama<br>";
    }
    ?>

    <h3>5. Tabel Perkalian</h3>
    <?php
    echo "<table>";
    // Header Kolom (1-10)
    echo "<tr><th>X</th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Baris dan sel tabel
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><th>$i</th>"; // Header Baris
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "<td>$hasil</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>