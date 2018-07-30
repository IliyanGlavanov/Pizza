<?php
  include ("header.php")
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="StylesMain.css?=6" />
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
                          <img src="promo1.jpg" alt="...">
                      </a>
                      <div class="carousel-caption">
                          <h1>Today's deal</h1>
                      </div>
                  </div>
                  <div class="item">
                      <a href="http://www.facebook.com/">
                          <img src="promo1.jpg" alt="...">
                      </a>
                      <div class="carousel-caption">
                          <h1>Today's deal</h1>
                      </div>
                  </div>
                  <div class="item">
                      <a href="http://www.facebook.com/">
                          <img src="promo1.jpg" alt="...">
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
<!-- END OF PROMOTION CAROUSEL -->

        <div class="row" id="firstrow">
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pepperoni.png" alt="John" style="width:100%">
                <div class="containers">
                  <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"PEPPERONI"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/Cheese.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"ALL CHEESE"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pizza_HawaiianChicken.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"MEAT & VEGGIE"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pizza_PremiumGardenVeggie_test.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"ALL VEGGIE"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/Classic_Meat_Lovers_Pizza.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"MEAT KING"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/Classic_Supreme_Pizza.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"SUPREME ONE"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/Primo_Meat.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"MEAT & CHEESE"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pizza_GiddyUpBBQChicken.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"CHICKEN BBQ"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pizza_Meatbrawl.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"MEATBALLS WORLD"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
            <div class="menubackground col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="../pizza-images/pizza_CockadoodleBacon.png" alt="John" style="width:100%">
                <div class="containers">
                    <!-- THE NAME OF THE PIZZA START -->
                    <div class="pizza-name-Размер">"CHICKEN & BACON"</div>
                    <!-- THE NAME OF THE PIZZA END -->
                    <!-- START OF Съставки TOOLTIP -->
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Съставки</p>
                    <!-- END OF Съставки TOOLTIP -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Избери размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: $2.99</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: $3.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: $4.49</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: $5.29</a></li>
                        </ul>
                    </div>
                    <p><button class="add-to-cart">Добави <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="   background-color: #34384a;">
                <div class="modal-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="promo2.jpg" alt="...">
                          <div class="carousel-caption">
                           <h1>Today's deal</h1>
                          </div>
                        </div>
                        <div class="item">
                          <img src="promo3.jpg" alt="...">
                          <div class="carousel-caption">
                            <h1>Today's deal</h1>
                          </div>
                        </div>
                    </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                  <div class="modal-footer">
                    <button id="closebtn" type="button" class="btn btn-lg btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include ("footer.php")
     ?>
</body>
</html>
