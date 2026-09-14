<?php

//indeks dimulai dari 0
## ini adalah array sederhana

// $rank = [
//     "Firman",
//     "Udin",
//     "Kancil",
//     "Koncit",
//     "Palauy",
// ];


// literasi

// $buah = [
//     "nama" => ["Mangga", "Pisang", "Apel"],
//     "tipe" => ["Buah-Buahan", "Buah-Buahan", "Semi-Buah"],
//     "grade" => [97, 95, 98]
// ];

// ## ini teh bisa ngambil 1 bagian data aja dan bisa munculin semua type data juga dengan contohnya
// // ini untuk mengambil 1 data dari variable array diatas

// // foreach ($buah as $key => $value) {
// //     # code...
// //     echo $buah["$key"][2];
// //     echo "<br />";
// // }

// // kalo ini untuk mengambil semua data array yang ada di atas, jadi pake foreach lagi didalammnya 
// foreach ($buah as $key => $value) {
//     foreach ($value as $val) {
//         echo $val;
//         echo "<br />";
//     }
// }

// echo "<br />";


// $hewan = [
//     "nama" => ["Kucing", "Anjing", "Burung"],
//     "type" => ["Karnivora", "Karnivora", "Herbivora"],
// ];

// foreach ($hewan as $key => $value) {
//         foreach ($value as $val) {
//             echo $val;
//             echo "<br />";
//         }

//         echo "<br/>";

// }


## Latihan lagi

// $produk = [
//     "nama" => ["Laptop", "Mouse", "Keyboard"],
//     "type" => ["Elektronik", "Elektronik", "Elektronik"],
//     "jumlah" => [3, 12, 4],
// ];

// foreach ($produk as $namaBarang => $stok) {
//     foreach ($value as $val) {
//         echo $val;
//         echo "<br />";
//     }

//     echo "<br />";
// }


## Latihan lagi dan lagi

// 1. Membuat array asosiatif
// $nilaiSiswa = [
//     "Budi" => 80,
//     "Ani" => 65,
//     "Doni" =>  90,
//     "Siti" => 70,
// ];

// // 2. Melakukan perulangan foreach dan percabangan if-else
// foreach ($nilaiSiswa as $namaSiswa => $nilai) {
//     if ($nilai >= 75 ) {
//         echo "Siswa dengan nama : " . $namaSiswa . " dinyatakan LULUS! <br />";
//     } elseif ($nilai < 75 ) {
//         echo "Siswa dengan nama : " . $namaSiswa . " dinyatakan tidak LULUS! <br />";
//     }
// }


## Latihan Logika lagi dan lagi

$keranjang = [
    ["buah" => "Apel", "harga" => 10000, "qty" => 3],
    ["buah" => "Pisang", "harga" => 5000, "qty" => 10],
    ["buah" => "Mangga", "harga" => 15000, "qty" => 2]
];

foreach ($keranjang as $item) {

    $total = $item["qty"] * $item["harga"];

    if ($total > 40000) {
        echo "Beli buah " . $item["buah"] . " dengan total Rp " . $total . " Mendapatkan diskon! <br />";
    } elseif ($total < 40000) {
         echo "Beli buah " . $item["buah"] . " dengan total Rp " . $total . " tidak mendapatkan diskon! <br />";
    }
}

echo "<br/>";
