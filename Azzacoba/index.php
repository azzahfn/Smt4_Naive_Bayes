<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="img/mnc2.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- font awsome -->
  <link rel="stylesheet" href="css/fontawesome.css" />
  <link rel="stylesheet" href="css/brands.css" />
  <link rel="stylesheet" href="css/solid.css" />

  <link rel="stylesheet" href="css/gaya.css">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

  <title>Simulasi</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
            <img src="img/MNCG.png" alt="" width=200 height=50>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Simulasi
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Keterangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container" style='margin-top:90px'>
      <div class="row">
        <div class="col-12 mt-5">
          <h2 class="tebal">PT Media Nusantara Citra Tbk</h2>
          <p class="desc mt-4">Dikenal dengan nama MNC Media atau MNC Group merupakan sebuah perusahaan yang bergerak dalam bidang media yang berpusat di Jakarta, Indonesia.
          MNC bergerak dibidang perdagangan umum, pembangunan, perindustrian, pertanian, pengangkutan, percetakan, multimedia melalui perangkat satelit dan perangkat telekomunikasi lainnya, jasa dan investasi. Bisnis utama perseroan saat ini adalah media. Sumber pendapatan terbesar MNCN berasal dari empat media televisi nasional yaitu RCTI, MNCTV, GTV dan iNews. Keempat stasiun televisi nasional tersebut menawarkan acara beragam seperti film-film box office, acara olahraga, pencarian bakat, reality show, acara musik, berita dan infotainment.</p>
        </div>
      </div>

    <div class="row">
      <div class="col-12 mt-4">
        <h4 class="tebal">SIMULASI PROBABILITAS PENERIMAAN KARYAWAN</h4>
      </div>

      <div class="col-6">
          <form method="POST" class="mt-3">

          <div class="form-group">
            <label for="usia">Usia :</label>
            <select name="usia" id="usia" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih usia anda--</option>
                      <?php
                      for($i=20 ; $i <= 25 ; $i++){
                        echo"<option value='$i'>$i</option>";
                      }
                      ?>
            </select>
          </div>

          <div class="form-group">
            <label for="tinggi">Tinggi Badan :</label>
            <select name="tinggi" id="tinggi" class="form-control selBox" required="required">
                <option value="" disabled selected>-- pilih tinggi--</option>
                <option value="kt">Kurang Tinggi ( < 150 cm - 159 cm )</option>
                <option value="ideal">Ideal ( 160 cm - 167 cm )</option>
                <option value="st">Sangat Tinggi ( >167 cm )</option>
            </select>
          </div>

          <div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja :</label>
            <select name="pengalaman_kerja" id="pengalaman_kerja" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih Tahun Pengalaman--</option>
                      <option value="kerja1">Kerja1 ( < 1 thn - 2 thn )</option>
                      <option value="kerja2">Kerja2 ( 3 thn - 4 thn )</option>
                      <option value="kerja3">Kerja3 ( >4 thn )</option>
                  </select>
          </div>

          <div class="form-group">
            <label for="prestasi">Prestasi :</label>
            <select name="prestasi" id="prestasi" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih Prestasi--</option>
                      <option value="ada">Ada</option>
                      <option value="tidak_ada">Tidak Ada</option>
                  </select>
          </div>

          <div class="form-group">
            <label for="upendidikan">Pendidikan :</label>
            <select name="pendidikan" id="pendidikan" class="form-control selBox" required="required">
                      <option value="" disabled selected>-- pilih pendidikan--</option>
                      <option value="sma">SMA</option>
                      <option value="smk">SMK</option>
                      <option value="s1">S1</option>
                  </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary mt-3" id="dor" onclick="return simulasi()"/>
          </div>

          </form>
      </div>
    </div>
        
    <div class="row">
      <div class="col-12 mt-5 mb-5">
          <div id="hasilSIM" style="margin-bottom:30px;">

          </div>
      </div>
    </div>

    </div>

<!-- Footer -->
<footer class="page-footer font-small abu1">

  <!-- Footer Elements -->
  <div class="container">

   
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 abu2">© <?php echo date('Y'); ?> Copyright
    <a href="https://github.com/azzahfn"> BY : AZZAH F NIZZAH </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="jspopper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- validasi -->
<script>
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('ul').toggleClass('active');
    });
  });
</script>

<script>
  function simulasi()
  {
    var usia = $("#usia").val();
    var tinggi_badan = $("#tinggi").val();
    var pengalaman_kerja = $("#pengalaman_kerja").val();
    var prestasi = $("#prestasi").val();
    var pendidikan = $("#pendidikan").val();

    //validasi
    var um = document.getElementById("usia");
    var tb = document.getElementById("tinggi");
    var bb = document.getElementById("pengalaman_kerja");
    var sk = document.getElementById("prestasi");
    var pp = document.getElementById("pendidikan");

    if(um.selectedIndex == 0){
      alert("Usia Tidak Boleh Kosong");
      return false;
    }

    if(tb.selectedIndex == 0){
      alert("Tinggi Badan Tidak Boleh Kosong");
      return false;
    }

    if(bb.selectedIndex == 0){
      alert("Pengalaman Kerja Tidak Boleh Kosong");
      return false;
    }

    if(sk.selectedIndex == 0){
      alert("Status Kesehatan Tidak Boleh Kosong");
      return false;
    }

    if(pp.selectedIndex == 0){
      alert("Prestasi Tidak Boleh Kosong");
      return false;
    }

    //batas validasi

      $.ajax({
        url :'simulasi.php',
        type : 'POST',
         Type : 'html',
        data : {usia : usia , tinggi_badan : tinggi_badan , pengalaman_kerja: pengalaman_kerja , prestasi : prestasi , pendidikan : pendidikan},
        success : function(data){
          document.getElementById("hasilSIM").innerHTML = data;
        },
      });

      return false;

  }
</script>

<script>
$(document).ready(function(){
  $('#dor').click(function(){
    $('html, body').animate({
        scrollTop: $("#hasilSIM").offset().top
    }, 500);
  });
});
</script>
</body>
</html>
