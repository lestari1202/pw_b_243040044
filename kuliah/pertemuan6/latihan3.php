<?php
// $mahasiswa = [
//     ["Lestari Vebrianti", "243040044", "LESTARI.243040044@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Alisha Nur Salampessy", "243040055", "ALISHA.243040055@mail.unpas.ac.id", "Teknik Informatika"],
// ];

//array asosiative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Lestari Vebrianti",
        "nrp" => "243040044",
        "email" => "LESTARI.243040044@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "lestari.jpg"
    ],
    [
        "nama" => "Alisha Nur Salampessy",
        "nrp" => "243040055",
        "email" => "ALISHA.243040055@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alisha.jpeg"
    ],
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dartar Mahasiswa</title>
</head>

<body>
    <h1>Dartar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>