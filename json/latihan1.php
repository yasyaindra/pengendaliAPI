<?php
// $mahasiswa = [
//     [
//         "nama" => "Indra Maulana",
//         "umur" => 19,
//         "jurusan" => "Informatika",
//         "email" => "indra@mail.com"
//     ],
//     [
//         "nama" => "Idris Wahyu",
//         "umur" => 17,
//         "jurusan" => "DKV",
//         "email" => "wahyu@mail.com"
//     ]
// ];

// $data = json_encode($mahasiswa);

// echo $data;

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
