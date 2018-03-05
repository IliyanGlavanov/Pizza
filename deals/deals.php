<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="deals.css?=5" />
</head>
<body>
  <section class="container pizza-container">
    <!-- START OF PROMOTION CAROUSEL -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" id="promocarousel">
        <div id="rightcarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="http://www.facebook.com/">
                        <img src="../promo1.jpg" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <h1>Today's deal</h1>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.facebook.com/">
                        <img src="../promo1.jpg" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <h1>Today's deal</h1>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.facebook.com/">
                        <img src="../promo1.jpg" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <h1>Today's deal</h1>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#rightcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#rightcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  </div>
</section>
  <?php
  include ("../footer.php")
   ?>
</body>
</html>
