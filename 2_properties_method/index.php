<?php

include "Buku.php";

$objek=new Buku();
$objek->isidata("pemrograman web","safrizal","smkngoding");
$objek->cetakinfo();


$objek1=new Buku();
$objek1->isidata("pemrograman berorientasi objek","ahmadi muslim","smkngoding");
$objek1->cetakinfo();