<?php
$dta["NIM"]="2201010557";
$dta["NAMA"]="UMI NIRWANA";
$dta["JKEL"]="P";
$dta["JURUSAN"]="TI-PAR";
$dta["ALAMAT"]="NTB,bima";
$dta["HOBI"]="MENULIS,MENYANYI";

header("content-type: application/json; charset=utf-8");
echo json_encode($dta);