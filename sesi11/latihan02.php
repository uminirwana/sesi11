<?php
$dta[0]["NIM"]="2201010557";
$dta[0]["NAMA"]="UMI NIRWANA";
$dta[0]["JKEL"]="P";
$dta[0]["JURUSAN"]="TI-PAR";
$dta[0]["ALAMAT"]="NTB,bima";
$dta[0]["HOBI"]="MENULIS,MENYANYI";


$dta[1]["NIM"]="2201010737";
$dta[1]["NAMA"]="pudensiana yasinta kurnia";
$dta[1]["JKEL"]="P";
$dta[1]["JURUSAN"]="TI-PAR";
$dta[1]["ALAMAT"]="labuan bajo";
$dta[1]["HOBI"]="menyanyi";


$dta[2]["NIM"]="2201010736";
$dta[2]["NAMA"]="nadia rizky febrian";
$dta[2]["JKEL"]="P";
$dta[2]["JURUSAN"]="TI-PAR";
$dta[2]["ALAMAT"]="lombok";
$dta[2]["HOBI"]="main HP";

$dta[3]["NIM"]="20177645";
$dta[3]["NAMA"]="achmad";
$dta[3]["JKEL"]="L";
$dta[3]["JURUSAN"]="TI-MTI";
$dta[3]["ALAMAT"]="bali";
$dta[3]["HOBI"]="membaca";

$dta[4]["NIM"]="2087615";
$dta[4]["NAMA"]="rama";
$dta[4]["JKEL"]="L";
$dta[4]["JURUSAN"]="TI-MTI";
$dta[4]["ALAMAT"]="bima";
$dta[4]["HOBI"]="memaki";




header("content-type: application/json; charset=utf-8");
echo json_encode($dta);