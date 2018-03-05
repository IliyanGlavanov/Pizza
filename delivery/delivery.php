<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Home</title>
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="delivery.css" />
    <!--Toggle login-->
    <script src="locationclick.js" type="text/javascript"></script>
    <script src="facebook.js" type="text/javascript"></script>
</head>
<body>

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1675475726080991',
                cookie: true,
                xfbml: true,
                version: 'v2.8'
            });
            FB.AppEvents.logPageView();
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) { return; }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <section class="container">
        <div class="row" id="contentbox">
            <form class="col-md-12">
                <h1 id="plslogin">Please Log In</h1>
                <a href="#" class="fa fa-facebook" id="contentlogin"></a>
                
                <div class='row text-center' id="textlocation">
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.088968629172!2d25.13240051549754!3d43.646317279121504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40ac18f50482e1c9%3A0x499d59e83910d9b0!2sul.+%22Radetsky%22%2C+5930+Belene!5e0!3m2!1sen!2sbg!4v1509489258805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
            </form>
        </div>
    </section>
    <?php
      include ("../footer.php")
     ?>
</body>
</html>
