<?php
require_once 'autoload.php';

$obj = new Bayes();

// echo $obj->sumData()."<br>";
// echo $obj->sumTrue()."<br>";
// echo $obj->sumFalse()."<br>";
// echo $obj->probUmur(21,0)."<br>";

$jumTrue = $obj->sumTrue();
$jumFalse = $obj->sumFalse();
$jumData = $obj->sumData();

$a1 = 20;
$a2 = "st";
$a3 = "kerja1";
$a4 = "ada";
$a5 = "smk";

//TRUE
$umur = $obj->probUsia($a1,1);
$tinggi = $obj->probTinggi($a2,1);
$pengalaman_kerja = $obj->probPengalaman_kerja($a3,1);
$prestasi = $obj->probPrestasi($a4,1);
$pendidikan = $obj->probPendidikan($a5,1);

//FALSE
$umur2 = $obj->probUsia($a1,0);
$tinggi2 = $obj->probTinggi($a2,0);
$pengalaman_kerja2 = $obj->probPengalaman_kerja($a3,0);
$prestasi2 = $obj->probPrestasi($a4,0);
$pendidikan2 = $obj->probPendidikan($a5,0);

//result
$paT = $obj->hasilTrue($jumTrue,$jumData,$usia,$tinggi,$pengalaman_kerja,$prestasi,$pendidikan);
$paF = $obj->hasilFalse($jumTrue,$jumData,$usia2,$tinggi2,$pengalaman_kerja2,$prestasi2,$pendidikan2);

echo "
======================================<br>
usia : $a1<br>
tinggi : $a2<br>
pengalaman_kerja : $a3<br>
prestasi : $a4<br>
pendidikan : $a5<br>
=======================================<br><br>
";

echo "
======================================<br>
kemungkinan true : <br>
jumlah true : $jumTrue <br>
jumlah data : $jumData <br>
=======================================<br><br>
";

echo "
======================================<br>
kemungkinan false : <br>
jumlah false : $jumFalse <br>
jumlah data : $jumData <br>
=======================================<br><br>
";

echo "
======================================<br>
pATrue : $jumTrue / $jumData<br>
usia true : $usia / $jumTrue <br>
tinggi true : $tinggi / $jumTrue <br>
pengalaman_kerja true : $pengalaman_kerja / $jumTrue <br>
kesehatan true : $prestasi / $jumTrue <br>
pendidikan true : $pendidikan / $jumTrue <br><br>
=======================================<br><br>
";

echo "
======================================<br>
pAFalse : $jumFalse / $jumData<br>
umur false : $usia2 / $jumFalse <br>
tinggi false : $tinggi2 / $jumFalse <br>
pengalaman_kerja false : $pengalaman_kerja2 / $jumFalse <br>
prestasi false : $prestasi2 / $jumFalse <br>
pendidikan false : $pendidikan2 / $jumFalse <br>
=======================================<br><br>
";

echo "
======================================<br>
presentasi yes : $paT<br>
presentasi no : $paF<br>
=======================================<br><br>
";

if($paT > $paF){
  echo "
  ======================================<br>
  PRESENTASI YES LEBIH BESAR DARI PADA PRESENTASI NO<br>
  =======================================
  <br><br>";
}else if($paF > $paT){
  echo "
  ======================================<br>
  PRESENTASI NO LEBIH BESAR DARI PADA PRESENTASI YES<br>
  =======================================
  <br><br>";
}

// echo $obj->hasilTrue($jumTrue,$jumData,$usia,$tinggi,$pengalaman_kerja,$prestasi,$pendidikan)."<br>";
// echo $obj->hasilFalse($jumTrue,$jumData,$usia2,$tinggi2,$pengalaman_kerja2,$prestasi2,$pendidikan2)."<br><br>";

$result = $obj->perbandingan($paT,$paF);
echo " Status : $result[0] <br>Presentasi diterima sebanyak : ".round($result[1],2)." % <br>Presentasi diolak sebanyak : ".round($result[2],2)." % ";
 ?>
