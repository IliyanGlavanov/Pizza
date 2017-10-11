<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best pizza in the city">
    <meta name="keywords" content="Best, Pizza, Belene, Slice, Pepperoni">
    <link type="image/x-icon" rel="icon" href="pizza-icon.ico" />
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
    <script src="script-popup.js" type="text/javascript"></script>
    <script type="text/javascript" src="pizzasize.js"></script>
    <!--MY .CSS LIBRARY-->
    <link type="text/css" rel="stylesheet" href="main.css?=14" />
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="StylesMain.css?=1" />

</head>
<body>
    <header class="container">
        <div class="row">
            <h1 class="col-md-9 col-sm-12 col-xs-12"><a href="index.html" id="pizza">Iliyan's Pizza Place</a></h1>
            <h4 href="#" class="col-md-3 col-sm-6 col-xs-6" id="callus">Call us: + 359 00 00 00 000</h4>

        </div>
        <!-- START OF PROMOTION CAROUSEL -->
        <div class="row">
            <nav class="col-md-12 col-sm-12 col-xs-12" id="nav">
                <ul id="navbar">
                    <li><a href="index.html" class="navbutton">Home</a></li>
                    <li><a href="../deals/deals.html" class="navbutton">Deals</a></li>
                    <li><a href="../napitki/napitki.html" class="navbutton">Drinks</a></li>
                    <li><a href="../dostavka/dostavka.html" class="navbutton">Delivery</a></li>
                    <li><a href="../kontakti/kontakti.html" class="navbutton">Contact us</a></li>
                    <li><a href="../login/login.php"> Log in</a></li>
                    <li><a href="../login/login.php">Sign up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container pizza-container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" id="promocarousel">
          <div id="rightcarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <a href="http://www.facebook.com/">
                          <img src="https://s3-media2.fl.yelpcdn.com/bphoto/nUTnqd9Ujn5yC3--MVryKw/o.jpg" alt="...">
                      </a>
                      <div class="carousel-caption">
                          <h1>Днешната промоция</h1>
                      </div>
                  </div>
                  <div class="item">
                      <a href="http://www.facebook.com/">
                          <img src="https://s3-media2.fl.yelpcdn.com/bphoto/nUTnqd9Ujn5yC3--MVryKw/o.jpg" alt="...">
                      </a>
                      <div class="carousel-caption">
                          <h1>Днешната промоция</h1>
                      </div>
                  </div>
                  <div class="item">
                      <a href="http://www.facebook.com/">
                          <img src="https://s3-media2.fl.yelpcdn.com/bphoto/nUTnqd9Ujn5yC3--MVryKw/o.jpg" alt="...">
                      </a>
                      <div class="carousel-caption">
                          <h1>Днешната промоция</h1>
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
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pepperoni.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"PEPPERONI" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, olive oil, Italian seasoning, sugar,salt, flour, dry yeast">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/Cheese.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"ALL CHEESE" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Parmesan cheese, mozzarella cheese, basil, olive oil, sugar,salt, flour, dry yeast">Ingredients</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                Изберете размер
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                            </ul>
                        </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pizza_HawaiianChicken.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"MEAT & VEGGIE" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pizza_PremiumGardenVeggie_test.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"ALL VEGGIE" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/Classic_Meat_Lovers_Pizza.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"MEAT KING" <br> pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/Classic_Supreme_Pizza.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"SUPREME ONE" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/Primo_Meat.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"MEAT & CHEESE" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pizza_GiddyUpBBQChicken.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"BBQ CHICKEN" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pizza_Meatbrawl.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"MEATBALLS" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12">
                <img src="https://www.pizzahut.com/assets/w/tile/thor/pizza_CockadoodleBacon.png" alt="John" style="width:100%">
                <div class="containers">
                    <h2>"CHICKEN & BACON" pizza</h2>
                    <p class="pizza-name" data-toggle="tooltip" title="Кашкавал">Ingredients</p>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            Изберете размер
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер SM - Цена: 2.99 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер M - Цена: 3.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер L - Цена: 4.49 лв.</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1">Размер XL - Цена: 5.29 лв.</a></li>
                        </ul>
                    </div>
                    <p><button class="poruchai">Add to cart</button></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="http://www.facebook.com/">
                            <img src="https://artofmakingpizza.com/wp-content/uploads/2017/04/wine-and-pizza-1000x510.jpg" alt="...">
                            </a>
                          <div class="carousel-caption">
                            ...
                          </div>
                        </div>
                        <div class="item">
                            <img src="https://images.fineartamerica.com/images-medium-large-5/pizza-and-beer-kay-novy.jpg" alt="...">
                          <div class="carousel-caption">
                            this item is
                          </div>
                        </div>
                        <div class="item">
                          <img src="https://itsgoingdown.org/wp-content/uploads/2017/08/zzzz.jpeg" alt="...">
                          <div class="carousel-caption">
                            ...
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container">
        <div class="row footer-social-icons">
            <h4 class="_14">Follow us on</h4>
            <ul class="social-icons">
                <li><a href="" class="social-icon" data-toggle="tooltip" title="Facebook"> <i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="social-icon" data-toggle="tooltip" title="Twitter"> <i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="social-icon" data-toggle="tooltip" title="RSS"> <i class="fa fa-rss"></i></a></li>
                <li><a href="" class="social-icon" data-toggle="tooltip" title="YouTube"> <i class="fa fa-youtube"></i></a></li>
                <li><a href="" class="social-icon" data-toggle="tooltip" title="LinkedIn"> <i class="fa fa-linkedin"></i></a></li>
                <li><a href="" class="social-icon" data-toggle="tooltip" title="Google"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
