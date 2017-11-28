<?php
$ime=$_POST["ime"];
$prezime=$_POST["prezime"];
$adresa=$_POST["adresa"];
$mjesto=$_POST["mjesto"];
$telbr=$_POST["telbr"];

$datoteka = fopen ("Osobe.txt","a");
if($datoteka){
    fwrite($datoteka, $ime."\r\n".$prezime."\r\n".$adresa."\r\n".$mjesto."\r\n".$telbr."\r\n");
}
fclose($datoteka);
readfile("index.html");