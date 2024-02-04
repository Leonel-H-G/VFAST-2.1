<?php 
include 'connect.php';


$q = "SELECT * FROM lugares WHERE Id_Lugar = '1'";
$ejq = $conecta->query($q);
$lista = $ejq->fetch_assoc();

$t = "SELECT * FROM lugares WHERE Id_Lugar = '3'";
$a = $conecta->query($t);
$act = $a->fetch_assoc();

$p = "SELECT * FROM lugares WHERE Id_Lugar = '4'";
$m = $conecta->query($p);
$tier = $m->fetch_assoc();

$y = "SELECT * FROM lugares WHERE Id_Lugar = '8'";
$o = $conecta->query($y);
$func = $o->fetch_assoc();

$yut = "SELECT * FROM lugares WHERE Id_Lugar = '9'";
$lyr = $conecta->query($yut);
$lyrics = $lyr->fetch_assoc();

$ui = "SELECT * FROM lugares WHERE Id_Lugar = '12'";
$diu = $conecta->query($ui);
$crip = $diu->fetch_assoc();

$kal = "SELECT * FROM lugares WHERE Id_Lugar = '13'";
$tf = $conecta->query($kal);
$tier1 = $tf->fetch_assoc();

$po = "SELECT * FROM lugares WHERE Id_Lugar = '17'";
$pa = $conecta->query($po);
$pink = $pa->fetch_assoc();

$e = "SELECT * FROM lugares WHERE Id_Lugar = '20'";
$s = $conecta->query($e);
$ejq = $s->fetch_assoc();


$r = "SELECT * FROM lugares WHERE Id_Lugar = '23'";
$e = $conecta->query($r);
$esc = $e->fetch_assoc();

$li = "SELECT * FROM lugares WHERE Id_Lugar = '22'";
$lo = $conecta->query($li);
$lolas = $lo->fetch_assoc();

$l= "SELECT * FROM lugares WHERE Id_Lugar = '19'";
$w = $conecta->query($l);
$funct = $w->fetch_assoc();


$tour= "SELECT * FROM lugares WHERE Id_Lugar = '5'";
$berw = $conecta->query($tour);
$delt = $berw->fetch_assoc();



?>