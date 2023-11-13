<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ajahh");
var_dump($company);

$company->programmer = new BackendProgrammer("Ajahh");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ajahh");
var_dump($company);

sayHelloProgrammer(new Programmer("Herdiansah"));
sayHelloProgrammer(new BackendProgrammer("Herdiansah"));
sayHelloProgrammer(new FrontendProgrammer("Herdiansah"));
