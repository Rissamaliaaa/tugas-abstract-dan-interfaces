<?php
// Risa Amalia
// 18050623019
// D3 Manajemen Informatika
require_once 'core/init.php';
$Beruang = new Beruang("Kutub",12, "Hoaam","Putih");
$Kucing = new Kucing("Anggora", 4, "Meong", "Kuning");
$Gajah = new Gajah("Kutub",12, "Hoaam","Putih");
$Beruang->DisplayData();
$Kucing->DisplayData();
$Gajah->DisplayData();
?>