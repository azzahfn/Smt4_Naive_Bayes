<?php
require_once 'autoload.php';

$obj = new Bayes();

$jumTrue = $obj->sumTrue();
$jumFalse = $obj->sumFalse();
$jumData = $obj->sumData();

$a1 = $_POST['usia'];
$a2 = $_POST['tinggi_badan'];
$a3 = $_POST['pengalaman_kerja'];
$a4 = $_POST['prestasi'];
$a5 = $_POST['pendidikan'];

//TRUE
$usia = $obj->probUsia($a1,1);
$tinggi = $obj->probTinggi($a2,1);
$pengalaman_kerja = $obj->probPengalaman_kerja($a3,1);
$prestasi = $obj->probPrestasi($a4,1);
$pendidikan = $obj->probPendidikan($a5,1);

//FALSE
$usia2 = $obj->probUsia($a1,0);
$tinggi2 = $obj->probTinggi($a2,0);
$pengalaman_kerja2 = $obj->probPengalaman_kerja($a3,0);
$prestasi2 = $obj->probPrestasi($a4,0);
$pendidikan2 = $obj->probPendidikan($a5,0);

//result
$paT = $obj->hasilTrue($jumTrue,$jumData,$usia,$tinggi,$pengalaman_kerja,$prestasi,$pendidikan);
$paF = $obj->hasilFalse($jumTrue,$jumData,$usia2,$tinggi2,$pengalaman_kerja2,$prestasi2,$pendidikan2);

if($a2 == "kt"){
  $a2 = "Kurang Tinggi";
}else if($a2 == "st"){
  $a2 = "Sangat Tinggi";
}

echo "
<div class='jumbotron jumbotron-fluid' id='hslPrekdiksinya'>
  <div class='container'>
    <h1 class='display-4 tebal'>Hasil Prediksi</h1>
    <p class='lead'>Berikut ini adalah hasil prediksi berdasarkan masukan calon pegawai menggunakan metode naive bayes.</p>
  </div>
</div>
";

echo "
<div class='card' style='width: 25rem;'>
  <div class='card-header' style='background-color:#17a2b8;color:#fff'>
    <b>Informasi Calon Pegawai</b>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>usia : &nbsp;&nbsp;<b>$a1</b></li>
    <li class='list-group-item'>tinggi : &nbsp;&nbsp;<b>$a2</b></li>
    <li class='list-group-item'>pengalaman_kerja : &nbsp;&nbsp;<b>$a3</b></li>
    <li class='list-group-item'>prestasi : &nbsp;&nbsp;<b>$a4</b></li>
    <li class='list-group-item'>pendidikan : &nbsp;&nbsp;<b>$a5</b></li>
  </ul>
</div><br>
<hr>
";

echo "<br>
<table class='table table-bordered' style='font-size:18px;text-align:center'>
  <tr style='background-color:#17a2b8;color:#fff'>
    <th>Jumlah True</th>
    <th>Jumlah False</th>
    <th>Jumlah Total Data</th>
  </tr>
  <tr>
    <td>$jumTrue</td>
    <td>$jumFalse</td>
    <td>$jumData</td>
  </tr>
</table>
";

echo "<br>
<table class='table table-bordered' style='font-size:18px;text-align:center'>
  <tr style='background-color:#17a2b8;color:#fff'>
    <th></th>
    <th>True</th>
    <th>False</th>
  </tr>
  <tr>
    <td>pA</td>
    <td>$jumTrue / $jumData</td>
    <td>$jumFalse / $jumData</td>
  </tr>
  <tr>
    <td>Umur</td>
    <td>$usia / $jumTrue</td>
    <td>$usia2 / $jumFalse</td>
  </tr>
  <tr>
    <td>Tinggi Badan</td>
    <td>$tinggi / $jumTrue</td>
    <td>$tinggi2 / $jumFalse</td>
  </tr>
  <tr>
    <td>Berat Badan</td>
    <td>$pengalaman_kerja / $jumTrue</td>
    <td>$pengalaman_kerja2 / $jumFalse</td>
  </tr>
  <tr>
    <td>Status Kesehatan</td>
    <td>$prestasi / $jumTrue</td>
    <td>$prestasi2 / $jumFalse</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>$pendidikan / $jumTrue</td>
    <td>$pendidikan2 / $jumFalse</td>
  </tr>
</table>
";

echo "<br>
  <table class='table table-bordered' style='font-size:18px;text-align:center;'>
    <tr style='background-color:#17a2b8;color:#fff'>
      <th>Presentasi Diterima</th>
      <th>Presentasi Ditolak</th>
    </tr>
    <tr>
      <td>$paT</td>
      <td>$paF</td>
    </tr>
  </table>
";

$result = $obj->perbandingan($paT,$paF);

if($paT > $paF){
  echo "<br>
  <h3 class='tebal'>PRESENTASI <span class='badge badge-success' style='padding:10px'><b>DITERIMA</b></span> LEBIH BESAR DARI PADA PRESENTASI DITOLAK</h3><br>";
  echo "<h4><br>Presentasi diterima sebanyak : <b>".round($result[1],2)." %</b> <br>Presentasi ditolak sebanyak : <b>".round($result[2],2)." % </b></h4>";
}else if($paF > $paT){
  echo "<br>
  <h3 class='tebal'>PRESENTASI <span class='badge badge-danger' style='padding:10px'><b>DITOLAK</b></span> LEBIH BESAR DARI PADA PRESENTASI DITERIMA</h3><br>";
  echo "<h4><br>Presentasi ditolak sebanyak : <b>".round($result[1],2)." %</b> <br>Presentasi diterima sebanyak : <b>".round($result[2],2)." % </b></h4>";
}


if($result[0] == "DITERIMA"){
  echo "
  <div class='alert alert-success mt-5' role='aler'>
    <h4 class='alert-heading'>Kesimpulan : $result[0] </h4>
    <p>Selamat ! berdasarkan hasil prediksi , anda dinyatakan <b>diterima!</b></p>
    <hr>
    <p class='mb-0'>- Have a nice day -</p>
  </div>";
}else{
  echo"
  <div class='alert alert-danger mt-5' role='aler'>
  <h4 class='alert-heading'>Kesimpulan : $result[0] </h4>
  <p>Maaf, berdasarkan hasil prediksi , anda dinyatakan <b>ditolak!</p>
  <hr>
  <p class='mb-0'>- Don't give up ! -</p>
  </div>";
}


 ?>
