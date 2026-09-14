<?php


// a == b sama dengan
// a < b kurang dari
// a > b lebih dari
// a <= b kurang dari sama dengan
// a >= b lebih dari sama dengan
// a != b tidak sama dengan
//
$nama = "Firman";
$umur = "26";
$job = "Nganggur";
$pekerjaan = $umur < 25 ? $nama."sudah memiliki pekerjaan" : $nama."belum memiliki pekerjaan";

echo $pekerjaan;

// if ($umur == 23 ) {
//     //true ini hasilnya 
//     echo $nama. "itu benar";
// } else {
//     // false jika salah ini hasilnya 
//     echo $salah. "bener bener dah elu"; 
// }


// switch ($umur) {
//     case '23':
//         # code ...  
//           echo $nama. "itu benar";
//         break;
//     case '24':
//         # code ...  
//           echo $nama. "itu lu ketuaan";
//         break;
//     case '22':
//         # code ...  
//           echo $nama. "itu lu kemudaan";
//         break;

//     default:
//         #code ...
//           echo $nama. "itu lu berarti udah gaada";
//         break;
// }
