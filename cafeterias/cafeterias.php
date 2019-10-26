<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
  <link rel="icon" href="./../images/logo/favicon.ico" type="image/icon" />
  <link rel="stylesheet" href="./../css/cafeteria.css" />


  <title>Cafeterias</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./../home/index.php">
      <img src="./../images/logo/logo.png" class="img-fluid" width="40px"><strong>Strath Café</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./../home/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../cafeterias/cafeterias.php">Cafeterias</a>
        </li>
        <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            ORDERS <span id="finalOrder">0</span>
          </button></a>
      </ul>

      <?php
      if (isset($_SESSION['loggedin'])) {
        echo '        
          <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-user"><strong> ' . $_SESSION['FirstName'] . " " . $_SESSION['LastName'] . ' - ' . $_SESSION['AdmissionNumber'] . '</strong></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="./../authentication/profile.php">View Profile</a>
                <a class="dropdown-item" href="./../authentication/logout.php">Logout</a>
              </div>
            </li>
          </ul>
          ';
      } else {
        echo '
          <ul class="navbar-nav">
          <li class="nav-item">
              <a href="./../authentication/login.html">
                <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit" id="log">Login</button>
              </a>
            </li>
            <li class="nav-item">
              <a href="./../registration/registration.html">
                <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit" id="log">Register</button>
              </a>
            </li>
          </ul>
          ';
      }
      ?>
    </div>
  </nav>

  <div class="container">
    <h3>AVAILABLE CAFETERIAS</h3>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./strathmore.php">
          <div class="card">
            <div class="card-body">
              <img src="./../images/Beef-Stew-Ugali-1.jpg" alt="hotel1" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Strathmore Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Student's Center (STC) Ground Floor</p>
              </div>
              <div class="rate text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" style="color:gray"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./pate.php">
          <div class="card">
            <div class="card-body">
              <img src="./../images/omena.jpg" alt="hotel4" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Pate Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Auditorium Basement</p>
              </div>
              <div class="rate text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" style="color:gray"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./kilimanjaro.php">
          <div class="card">
            <div class="card-body">
              <img src="./../images/Beef-Stew-Ugali-1.jpg" alt="hotel1" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Kilimanjaro Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Student's Center (STC) Rooftop</p>
              </div>
              <div class="rate text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" style="color:gray"></i>
                <i class="fa fa-star" style="color:gray"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>

  <br>

  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Strath<span>Café</span></h1>
          <img src="./images/apple-store.svg" alt="" />
          <img src="./images/playstore.png" height="40px" alt="" class="ml-4" />
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="#about">About Strath Café </a></li>
            <li><a href="#">Read our blog</a></li>
            <li><a href="#">Order now</a></li>
            <li><a href="#">sign up</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li>Get Help</li>
            <li>Read FAQS</li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container" id="horizontal"></div>
    <div class="container" id="copyright">
      <div class="row">
        <div class="col-md-6">
          <p>Copyrights &copy; Strath Café All rights reserved</p>
        </div>
        <div class="col-md-6">
          <i class="fa fa-twitter" style="font-size: 30px;padding: 12px"></i>
          <i class="fa fa-instagram" style="font-size: 30px;padding: 12px"></i>
          <i class="fa fa-facebook" style="font-size: 30px;padding: 12px"></i>
          <i class="fa fa-linkedin" style="font-size: 30px;padding: 12px"></i>
          <i class="fa fa-phone" style="font-size: 30px;padding: 12px"></i>
        </div>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>