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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Keterangan</title>
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Simulasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Kriteria</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">Keterangan  <span class="sr-only">(current)</span> </a>
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
          <center><h1 class="tebal mb-5">Contact Admin </h1></center>
          <hr>

          <div class="row mt-5">
          <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/logo3.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <b><center> Azzah F Nizzah </center></b>
                    <center> - 5D 19090015 - </center>
                  </p>
                </div>
              </div>
            </div>
                    <div class="media-body">
								<div class="personal_text">
             
									<h3>Azzah F Nizzah</h3>
									<h5>Teknik Informatika</h5>
									<p>Project UAS Mata Kuliah Pengantar Kecerdasan Buatan</p>
									<ul class="list basic_info">
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 31st December, 2000</a>
                    <br>
									 <p> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 44 (012) 6954 783</a> <br>
										<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> adminku@mail.com</a> <br> </p>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Semarang</a><br>
									</ul>
								</div>
							</div>

           
          </div>
          
        </div><!-- end col -->
      </div><!-- end row -->

      <div class="row mt-5">
          <div class="col-12">
            <h3 class="text-center text-abu1 mt-4">'' <b>Southeast Asia's Largest </b> and Most Integrated Media Group ''</h3>
          </div>
        </div>
    </div><!-- end container -->

<!-- Footer -->
<footer class="page-footer font-small abu1 mt-5">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 d-flex justify-content-center">
          
          <!--Instagram-->
          <a class="icn" href="https://www.instagram.com/azfn0o_/" target="_blank">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!-- Github -->
          <a class="icn" href="https://github.com/azzahfn" target="_blank">
            <i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!--Facebook -->
          <a class="icn" href="https://www.facebook.com/azzah.chyqirlsgranackachenaxscoutstulanxk" target="_blank">
            <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

         <!--Pinterest-->
         <a class="icn" href="https://azzahfnizzah.blogspot.com/" target="_blank">
           <i class="fab fa-dribbble fa-lg white-text fa-2x"> </i>
          </a>
        </div>

        <div class="text-center">
        Southeast Asia's Largest and  <i class="fa fa-heart" style="color:#dc3545"></i> Most Integrated Media Group
        </div>
      </div>
      <!-- Grid column -->

    </div>
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

<script src="js/jquery.js"></script>

<!-- validasi -->
<script>
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('ul').toggleClass('active');
    });
  });
</script>
</body>
</html>
