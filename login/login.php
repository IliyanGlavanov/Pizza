<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best pizza in the city">
    <meta name="keywords" content="Best, Pizza, Belene, Slice, Pepperoni">
    <link type="image/x-icon" rel="icon" href="../pizza-icon.ico" />
    <meta charset="utf-8" />
    <title>Iliyan's Pizza Place</title>
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Icons-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--popup-->
    <script src="../script-popup.js" type="text/javascript"></script>
    <!-- Log in animations -->
    <script src="loginform.js" type="text/javascript"></script>
    <!--MY .CSS LIBRARY-->
    <link type="text/css" rel="stylesheet" href="../main.css?=1" />
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="login.css?=3" />
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.10&appId=1675475726080991";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header class="container">
        <div class="row">
            <h1 class="col-md-9 col-sm-12 col-xs-12"><a href="index.html" id="pizza">Iliyan's Pizza Place</a></h1>
            <h4 href="#" class="col-md-3 col-sm-6 col-xs-6" id="callus">Call us: + 359 00 00 00 000</h4>

        </div>
        <!-- START OF PROMOTION CAROUSEL -->
        <div class="row">
            <nav class="col-md-12 col-sm-12 col-xs-12" id="nav">
              <ul id="navbar">
                  <li><a href="../index.html" class="navbutton">Home</a></li>
                  <li><a href="../deals/deals.html" class="navbutton">Deals</a></li>
                  <li><a href="../drinks/drinks.html" class="navbutton">Drinks</a></li>
                  <li><a href="../delivery/delivery.html" class="navbutton">Delivery</a></li>
                  <li><a href="../contacts/contacts.html" class="navbutton">Contact us</a></li>
                  <li><a href="login.php" class="navbutton registerbtn"> Log in</a></li>
                  <li><a href="login.php" class="navbutton registerbtn">Sign up</a></li>
              </ul>
            </nav>
        </div>
    </header>
  <section>

<div class="container" id="loginform">
  <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <a href="#" class="active" id="login-form-link">Login</a>
            </div>
            <div class="col-xs-6">
              <a href="#" id="register-form-link">Register</a>
            </div>
          </div>
          <hr>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
                <div class="form-group">
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group text-center">
                  <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                  <label for="remember"> Remember Me</label>
                </div>
                <div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
                  <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
              </div>
            </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </section>
    <footer>
        <div class="footer-social-icons">
            <h4 class="_14">Follow us on</h4>
            <ul class="social-icons">
                <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
