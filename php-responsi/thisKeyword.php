<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$arff = new Person("Herdiansah", "Bengkulu");

// tambahkan value nama di object
$arff->nama = "Ajahh";

// panggil function sayHelloNull dengan parameter
$arff->sayHelloNull("diansah");

// buat object dari kelas person
$prass = new Person("her", "palembang");

// tambahkan value nama di object
$prass->nama = "Sumbul";

// panggil function sayHelloNull dengan parameter null
$prass->sayHelloNull(null);
