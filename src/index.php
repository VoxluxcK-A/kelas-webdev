<?php

//PYRAMID
// echo "<pre>";

// $rows = 5;
// for ($i = 1; $i <= $rows; $i++) {
    
//     for ($j = 1; $j <= ($rows - $i); $j++) {
//         echo "&nbsp;";
//     }
    
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*";
//     }
    
//     echo "<br>";
// }

// for ($i = $rows; $i >= 1; $i--) {
    
//     for ($j = 1; $j <= ($rows - $i); $j++) {
//         echo "&nbsp;";
//     }
    
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*";
//     }
    
//     echo "<br>";
// }


//Data Siswa
$dataSiswa = [
    "Andi"  => 78,
    "Budi"  => 92,
    "Cici"  => 85,
    "Dedi"  => 60,
    "Eka"   => 95,
    "Fani"  => 88
];

//BubbleSort
function urutkanNilai(array $data) {
    $arraySiswa = [];
    foreach ($data as $nama => $nilai) {
        $arraySiswa[] = ["nama" => $nama, "nilai" => $nilai];
    }
    
    $n = count($arraySiswa);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arraySiswa[$j]['nilai'] < $arraySiswa[$j + 1]['nilai']) {
                $temp = $arraySiswa[$j];
                $arraySiswa[$j] = $arraySiswa[$j + 1];
                $arraySiswa[$j + 1] = $temp;
            }
        }
    }
    
    return $arraySiswa;
}


$hasilRanking = urutkanNilai($dataSiswa);

echo "=== DAFTAR RANKING SISWA (TERTINGGI KE TERENDAH) ===\n";
$ranking = 1;
foreach ($hasilRanking as $siswa) {
    echo "Rank " . $ranking . ": " . $siswa['nama'] . " (Nilai: " . $siswa['nilai'] . ")\n";
    $ranking++;
}

//Cari Siswa
function cariSiswa(array $data, string $namaDicari) {
    foreach ($data as $nama => $nilai) {
        if (strtolower($nama) == strtolower($namaDicari)) {
            return "Siswa bernama $nama ditemukan dengan nilai: $nilai";
        }
    }
    return "Siswa bernama $namaDicari tidak ditemukan.";
}

$namaSiswa = "Cici";
echo "=== HASIL PENCARIAN SISWA ===\n";
$hasilCari = cariSiswa($dataSiswa, $namaSiswa);
echo $hasilCari . "\n";
