<?php
//Data siswa
$dataSiswa = [
    "Andi"  => 78,
    "Budi"  => 92,
    "Cici"  => 85,
    "Dedi"  => 60,
    "Eka"   => 95,
    "Fani"  => 88
];

//Nambah siswa
function tambahSiswa(array &$data, string $nama, int $nilai): void {
    $data[$nama] = $nilai;
}

//BubbleSort
function urutkanNilai(array $data): array {
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

//Linear search nya
function cariSiswa(array $data, string $namaDicari): string {
    foreach ($data as $nama => $nilai) {
        if (strtolower($nama) === strtolower($namaDicari)) {
            return "Siswa bernama '$nama' ditemukan dengan nilai: $nilai";
        }
    }
    return "Siswa bernama '$namaDicari' tidak ditemukan.";
}

echo "=== PROGRAM MANAJEMEN NILAI SISWA ===\n\n";

tambahSiswa($dataSiswa, "Gani", 91);
tambahSiswa($dataSiswa, "Hani", 73);
echo "Berhasil menambahkan siswa baru (Gani dan Hani).\n\n";

$hasilRanking = urutkanNilai($dataSiswa);

echo "--- DAFTAR RANKING SISWA ---\n";
$rank = 1;
foreach ($hasilRanking as $siswa) {
    echo "Rank $rank: {$siswa['nama']} (Nilai: {$siswa['nilai']})\n";
    $rank++;
}
echo "------------------------------------------\n\n";

echo "--- HASIL PENCARIAN SISWA ---\n";
$targetCari = "Gani";
echo cariSiswa($dataSiswa, $targetCari) . "\n";