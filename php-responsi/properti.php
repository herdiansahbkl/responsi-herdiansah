<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Herdiansah", "Bengkulu");

// manipulasi properti nama person
$person1->nama = "Herdiansah";
$person1->alamat = "Bengkulu";
$person1->negara = "Indonesia";
// menampilkan hasil
echo "nama = {$person1->nama}" . PHP_EOL;
echo "alamat = {$person1->alamat}" . PHP_EOL;
echo "negara = {$person1->negara}" . PHP_EOL;
