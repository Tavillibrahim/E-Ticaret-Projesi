<?php
require_once "fonksiyon.php";

## Sabitler ##

define("PATH", realpath("."));

if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on")   {
    define("protokol", "https://"); // SİTE PROTOKOLÜ
}else{
    define("protokol", "http://"); // SİTE PROTOKOLÜ
}

define("url", protokol . "localhost/E-Ticaret");
define("adminurl", url . "/admin"); 
define("resimler", url . "/assets/images");
$siteUrl="localhost/E-Ticaret";

## BAĞLANTI ##
error_reporting(0);

ob_start();
session_start();

$veriTabaniAdi = "eticaret"; // VERİ TABANAI ADI
$veritabanıKullaniciAdi = "root"; // VERİ TABANI KULLANICI ADI
$veritabanıSifre = ""; // VERİ TABANI ŞİFRE

$dsn = "mysql:host=localhost;dbname=" . $veriTabaniAdi . "";
$user = $veritabanıKullaniciAdi;
$password = $veritabanıSifre;
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
}



## Karakter Sorunu ##


$db->query("SET CHARACTER SET utf8");

$db->query("SET NAMES utf8");

        
        
        
        