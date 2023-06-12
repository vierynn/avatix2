<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="BG-container">
<!-- NAVBAR -->
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="#">Profile Kelompok 4</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#aurel">Aurellia Vieryn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#manda">Amanda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#virgie">Virgie Cecilia</a>
    </li>
  </ul>
</nav>

<?php 
    date_default_timezone_set("Asia/Jakarta");
    $t = date("H:i");
    if ($t >= "04:00" && $t < "12:00"):
      echo "<p style='text-align:center;'><strong>Good morning!</strong><p>";
    elseif ($t >= "12:00" && $t < "18:00"):
      echo "<p style='text-align:center;'><strong>Good afternoon!</strong><p>";
    elseif ($t >= "18:00" && $t <= "23:59"):
      echo "<p style='text-align:center;'><strong>Good evening!</strong><p>";
    else:
      echo "<p style='text-align:center;'><strong>Hello!</strong><p>";
    endif;

    echo "\n";
    echo "<p style='text-align:center;'><strong>The current time is ".$t.".</strong></p>";

    $n = 0;
    while ($n < 3 && $t >= "22:00" || $n < 3 && $t < "04:00"):
      echo "<p style='text-align:center;color:red'><strong>Please get some sleep!</strong></p>";
      echo "\n";
      $n+=1;
    endwhile
?>

<section class="vh-50" id="aurel">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ asset('images/1.jpg') }}"
                alt="Avatar" class="img-fluid my-5" style="width: 110px;" />
              <h5>Aurellia Vieryn</h5>
              <p>2440066626</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date of Birth</h6>
                    <p class="text-muted">24 October 2002</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Favorite Course</h6>
                    <p class="text-muted">Web Programming</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-10 mb-3">
                    <h6>Skill or Hobbies</h6>
                    <p class="text-muted">Watching Entertainment Shows</p>
                  </div>
                </div>
                <div class="logo-container">
                  <a href="https://www.instagram.com/aurelleryn" class='logo-ig'><img src="{{asset('images/ig.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vh-50" id="manda">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ asset('images/2.jpg') }}"
                alt="Avatar" class="img-fluid my-5" style="width: 110px;" />
              <h5>Amanda</h5>
              <p>2440016874</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date of Birth</h6>
                    <p class="text-muted">1 July 2002</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Favorite Course</h6>
                    <p class="text-muted">Time Series Analysis</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-10 mb-3">
                    <h6>Skill or Hobbies</h6>
                    <p class="text-muted">Listening to Music</p>
                  </div>
                  <a href="https://www.instagram.com/amanda_gouw" class='logo-ig'><img src="{{asset('images/ig.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vh-50" id="virgie">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ asset('images/3.jpg') }}"
                alt="Avatar" class="img-fluid my-5" style="width: 110px;" />
              <h5>Virgie Cecilia</h5>
              <p>2440043433</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date of Birth</h6>
                    <p class="text-muted">30 August 2002</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Favorite Course</h6>
                    <p class="text-muted">Web Programming</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-10 mb-3">
                    <h6>Skill or Hobbies</h6>
                    <p class="text-muted">Listening to Music</p>
                  </div>
                </div>
                <div class="logo-container">
                  <a href="https://www.instagram.com/ceciliavirgie" class='logo-ig'><img src="{{asset('images/ig.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<footer class="footer">
  <div class="content has-text-centered">
    <p><center><strong>Thank you for your attention.</strong></center></p>
    <br>
  </div>
</footer>
</html>