<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
  <link rel="icon" href="./../images/logo/favicon.ico" type="image/icon" />
  <link rel="stylesheet" href="./../css/cafeteria.css" type="text/css" />


  <title>Strathmore Cafeteria</title>
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


      <!--<div class="container">
          <div class="alert alert-success" id="success">
            <strong>Success!</strong> Your food will be delivered at <span id="myLocation" style="font-size: 24px;"></span>.
            Enjoy your meal
          </div>
        </div>-->
        <h3>STRATHMORE CAFETERIA MENU</h3>
        <!-- <nav>
            <ul>
              <li><a href="#breakfast">Breakfast</a></li>
              <li><a href="#lunch">Lunch</a></li>
              <li><a href="#pastries">Pasteries</a></li>
              <li><a href="#beverages">Beverages</a></li>
            </ul>
          </nav> -->
        <!-- <div class="confuse"></div> -->
      
        <div id="lunch">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <img src="http://sembe.co.ke/images/new_resource/omena.jpg" height="250px" alt=""
                      class="container-fluid" />
                  </div>
                  <div class="card-footer text-center">
                    <span class="item-name">Ugali and omena</span>
                    <div class="item-details">
                      <p class="item-price">Kshs. 65.00</p>
                      <div class="btn-primary btn" data-toggle="modal" data-target="#exampleModalCenter">
                        Order
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <img
                      src="https://scontent-sin2-2.cdninstagram.com/vp/e86b3a9df6ff3b9f95e0834cf48960be/5E1D7254/t51.2885-15/e35/70947137_156805032063516_4363383031961200032_n.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&_nc_cat=100"
                      height="250px" alt="" class="container-fluid" />
                  </div>
                  <div class="card-footer text-center">
                    <span class="item-name">chapatti and beans</span>
                    <div class="item-details">
                      <p class="item-price">Kshs. 65.00</p>
                      <div class="btn-primary btn" data-toggle="modal" data-target="#chapatiBeans">
                        Order
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <img src="https://www.pikachakula.com/wp-content/uploads/2018/02/Beef-Stew-Ugali-017.jpg" height="250px"
                      alt="" class="container-fluid" />
                  </div>
                  <div class="card-footer text-center">
                    <span class="item-name">Ugali-beef</span>
                    <div class="item-details">
                      <p class="item-price">Kshs. 115.00</p>
                      <div class="btn-primary btn" data-toggle="modal" data-target="#ugaliBeef">
                        Order
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <img src="http://adomagardens.com/img/gallery/g2.jpg" height="250px" alt="" class="container-fluid" />
                    </div>
                    <div class="card-footer text-center">
                      <span class="item-name">Ugali-fish</span>
                      <div class="item-details">
                        <p class="item-price">Kshs. 125.00</p>
                        <div class="btn-primary btn" data-toggle="modal" data-target="#ugaliFish">
                          Order
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <img src="https://envirofit.org/wp-content/uploads/2017/08/Stewed-Ndengu-1.jpg" height="250px" alt=""
                        class="container-fluid" />
                    </div>
                    <div class="card-footer text-center">
                      <span class="item-name">chapatti-ndengu</span>
                      <div class="item-details">
                        <p class="item-price">Kshs. 65.00</p>
                        <div class="btn-primary btn" data-toggle="modal" data-target="#chapoNdengu">
                          Order
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <img src="https://www.pikachakula.com/wp-content/uploads/2018/07/Royco-Sukuma-Wiki-002.jpg"
                        height="250px" alt="" class="container-fluid" />
                    </div>
                    <div class="card-footer text-center">
                      <span class="item-name">Ugali-veges</span>
                      <div class="item-details">
                        <p class="item-price">Kshs. 65.00</p>
                        <div class="btn-primary btn" data-toggle="modal" data-target="#ugaliVeges">
                          Order
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- food 1 -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="exampleModalCenterTitle">
                  Ugali and Omena
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="http://sembe.co.ke/images/new_resource/omena.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">65</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
      
        <!-- food 2 -->
        <div class="modal fade" id="chapatiBeans" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                  Chapo beans
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img
                    src="https://scontent-sin2-2.cdninstagram.com/vp/e86b3a9df6ff3b9f95e0834cf48960be/5E1D7254/t51.2885-15/e35/70947137_156805032063516_4363383031961200032_n.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&_nc_cat=100"
                    height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract2">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity2">1</p>
                <button class="btn change-cart mr-4" id="add2">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price2">65</p>
                <button type="button" class="btn align-right githe2" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- food3 -->
        <div class="modal fade" id="ugaliBeef" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                  Ugali-beef
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://www.pikachakula.com/wp-content/uploads/2018/02/Beef-Stew-Ugali-017.jpg" height="150px"
                    alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract3">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity3">1</p>
                <button class="btn change-cart mr-4" id="add3">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price3">115</p>
                <button type="button" class="btn align-right githe3" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- food4 -->
        <div class="modal fade" id="ugaliFish" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                  Ugali-Fish
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="http://adomagardens.com/img/gallery/g2.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract4">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity4">1</p>
                <button class="btn change-cart mr-4" id="add4">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price4">125</p>
                <button type="button" class="btn align-right githe4" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- food5 -->
        <div class="modal fade" id="chapoNdengu" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                  chapatti-ndengu
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://envirofit.org/wp-content/uploads/2017/08/Stewed-Ndengu-1.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract5">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity5">1</p>
                <button class="btn change-cart mr-4" id="add5">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price5">65</p>
                <button type="button" class="btn align-right githe5" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- food6 -->
        <div class="modal fade" id="ugaliVeges" tabindex="-1" role="dialog" aria-labelledby="foodModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                  Ugali-veges
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://www.pikachakula.com/wp-content/uploads/2018/07/Royco-Sukuma-Wiki-002.jpg" height="150px"
                    alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract6">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity6">1</p>
                <button class="btn change-cart mr-4" id="add6">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price6">65</p>
                <button type="button" class="btn  align-right githe6" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
      
      
        <!-- cart modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
      
              <!-- Modal Header -->
              <div class="modal-header">
                <h2 class="modal-title " style="margin-left: 250px;">View cart</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      
              <!-- Modal body -->
              <div class="modal-body">
                <section>
      
                  <center>
                    <div class="myShoppingCart">
                      <img src="./images/cart.svg" alt="" />
                      <h4>You have no food in your shopping cart</h4>
                    </div>
                  </center>
                  <div class="viewOrders">
                    <table>
                      <tr id="tablehead">
                        <th>Food</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total price</th>
                      </tr>
      
                    </table>
                    <!-- <table>
                        <div>
                          <tr id="myFood" style="padding: 15px; margin-left: 100px;"></tr>
                        </div>
                      </table> -->
                  </div>
      
                </section>
              </div>
      
              <!-- Modal footer -->
              <div class="modal-footer">
                <button id="location" type="button" class="btn btn-secondary" data-dismiss="modal">Checkout</button>
              </div>
      
            </div>
          </div>
        </div>
      
        </div>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1>Strath<span>Café</span></h1>
                <img src="./../images/apple-store.svg" alt="" />
                <img src="./../images/playstore.png" height="40px" alt="" class="ml-4" />
              </div>
              <div class="col-md-3">
                <ul>
                  <li><a href="./../about/about.html">About Strath Café </a></li>
                  <li><a href="#">Read our blog</a></li>
                  <li><a href="./../cafeterias/cafeterias.php">Order now</a></li>
                  <li><a href="./../authentication/login.html">sign up</a></li>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>