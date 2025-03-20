<?php
//array associative
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
    [
        "nama" => "Derania Safa Zaina",
        "nrp" => "243040038",
        "email" => "DERANIA.243040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "derania.jpeg"
    ],
    [
        "nama" => "Naila Zalfa Winarti",
        "nrp" => "243040015",
        "email" => "NAILA.243040015@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "naila.jpeg"
    ],
    [
        "nama" => "Audiena Febrianti",
        "nrp" => "243040062",
        "email" => "AUDIENA.243040062@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "audiena1.jpeg"
    ],
    [
        "nama" => "Bayu Adji Prakoso",
        "nrp" => "243040040",
        "email" => "BAYU.243040040@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bayu.jpeg"
    ],
    [
        "nama" => "Rian Hery Juniarto",
        "nrp" => "243040049",
        "email" => "RIAN.243040049@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rian.png"
    ],
    [
        "nama" => "Muhammad Kevin",
        "nrp" => "243040059",
        "email" => "KEVIN.243040059@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kevin.jpg"
    ],
    [
        "nama" => "Muhammad Taufiq",
        "nrp" => "243040050",
        "email" => "TAUFIQ.243040050@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "taufiq.png"
    ],
    [
        "nama" => "Muhammad Rafi",
        "nrp" => "243040056",
        "email" => "RAFI.243040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafi.jpeg"
    ]
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
        <hr>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        </hr>
    <?php endforeach; ?>
</body>

</html>