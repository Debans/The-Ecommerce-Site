<?php

include "includes/common.php"

?>

<!DOCTYPE html>



<html>

   

<head>

        <title>Television | E-Store.com</title>

        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

        

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->

    <link href="css/style.css" rel="stylesheet">

        <!-- jQuery -->

    <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>

    

</head>

   

<body style="padding-top: 50px;">

            <!-- Header file -->

    <?php

        include 'includes/header.php';

        include 'includes/check-if-added.php';

        include 'includes/modal.php';

        ?>

    <br>

    <br>

    

    <div class="container">

        <!-- Jumbotron Header -->

            <div class="jumbotron home-spacer" id="products-jumbotron">

                <center><h1>Welcome to our E-Store</h1>

                <p>We have the best Televisions from Biggest Brands for you. No need to hunt around, we have all in one place.</p>

              </center>

            </div>

            <hr>

            <br>

            

        <div class="row">

            <div class="col-sm-3" >

               <div class="panel-group">

               

               <div class="panel panel-default">

                    <div class="panel-heading color">

                        <h3 style="color:orange">Brands</h3>

                    </div>

                    <div class="panel-body">

                       <div class="rmvb">

                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>

                           <p><a href="#panasonic"><span style="color:black">PANASONIC</span></a></p>

                           <p><a href="#lg"><span style="color:black">LG</span></a></p>

                            <p><a href="#sony"><span style="color:black">SONY</span></a></p>

                        </div>

                    </div>

                </div>

               <br>

                <div class="panel panel-default">

                    <div class="panel-heading  color">

                        <h3 style="color:orange">Visual Type</h3>

                    </div>

                    

                    <div class="panel-body">

                       <div class="rmvb">

                            <p><a href="#samsung"><span style="color:black">LED</span></a></p>

                            <p><a href="#panasonic"><span style="color:black">QLED</span></a></p>

                        </div>

                    </div>

                </div>

                </div>

            </div>

            

            

            <div class="col-sm-9 text-center">

                <div class="panel-group">

                  <!----------------------------------------------------featured phone----------------------------------->

                   <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 style="color:orange">Featured Televisions</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/1.jpg" alt="samsung" >

                                    <div class="caption">

                                        <h3>Samsung Ultra HD</h3>

                                        <p>Price: Rs. 99999.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/2.jpg" alt="sony">

                                    <div class="caption">

                                        <h3>SONY Bravia (4K)</h3>

                                            <p>Price: Rs. 89999.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/3.jpg" alt="sony">

                                <div class="caption">

                                    <h3>LG Full HD</h3>

                                        <p>Price: Rs. 80000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/4.jpg" alt="...">

                                <div class="caption">

                                    <h3>4K Ultra HD Smart Android</h3>

                                        <p>Price: Rs.1,20,000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------samsung----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="samsung" style="color:orange">SAMSUNG</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/5.jpg" alt="iphone x" >

                                    <div class="caption">

                                        <h3>Samsung 43inch Smart TV</h3>

                                        <p>Price: Rs. 58000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/6.jpg" alt="sam">

                                    <div class="caption">

                                        <h3>Samsung 43 Inch Ufdk  Smart 4K UHD Led TV</h3>

                                            <p>Price: Rs. 69000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/7.jpg" alt="sam">

                                <div class="caption">

                                    <h3>Samsung Full HD LED Smart TV</h3>

                                        <p>Price: Rs. 60000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/8.jpg" alt="sam">

                                <div class="caption">

                                    <h3>Samsung Samsung 60-inch UHD Smart 4K LED TV</h3>

                                        <p>Price: Rs. 50000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------Panasonic----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="panasonic" style="color:orange">Panasonic</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/9.jpg" alt="panasonic" >

                                    <div class="caption">

                                        <h3>Panasonic 123 cm (49 Inches) 4K HD Led Smart TV</h3>

                                        <p>Price: Rs. 65000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div> 

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/10.jpg" alt="panasonic">

                                    <div class="caption">

                                        <h3>Panasonic 135cm(49Inches)4K UltraHDSmart TV</h3>

                                            <p>Price: Rs. 60000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/11.jpg" alt="panasonic">

                                <div class="caption">

                                    <h3>Panasonic 80cm (49 Inches) 4K Ultra HD Led TV </h3>

                                        <p>Price: Rs. 45000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/12.jpg" alt="panasonic">

                                <div class="caption">

                                    <h3>Panasonic 123 cm (49 Inches) 4K Ultra HD Led Smart TV </h3>

                                        <p>Price: Rs. 35000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------LG----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="lg" style="color:orange">LG</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/13.jpg" alt="lg" >

                                    <div class="caption">

                                        <h3>LG UHD TV</h3>

                                        <p>Price: Rs. 36000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/14.jpg" alt="lg">

                                    <div class="caption">

                                        <h3>LG LED HD TV</h3>

                                            <p>Price: Rs. 34000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/15.jpg" alt="lg">

                                <div class="caption">

                                    <h3>LG ULTRA HD TV</h3>

                                        <p>Price: Rs. 51000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/16.jpg" alt="lg">

                                <div class="caption">

                                    <h3>LG SMART ULTRA HD TV</h3>

                                        <p>Price: Rs. 68000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------sony----------------------------------->

                   <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="sony" style="color:orange">SONY</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/17.jpg" alt="sony" >

                                    <div class="caption">

                                        <h3>SONY UHD TV</h3>

                                        <p>Price: Rs. 89000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/18.jpg" alt="sony">

                                    <div class="caption">

                                        <h3>SONY BRAVIA 35inch  TV</h3>

                                            <p>Price: Rs.69000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/19.jpg" alt="sony">

                                <div class="caption">

                                    <h3>SONY 45inch UHD TV</h3>

                                        <p>Price: Rs. 99000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/20.jpg" alt="sony">

                                <div class="caption">

                                    <h3>SONY BRAVIA 35inch 4K UHD TV</h3>

                                        <p>Price: Rs. 79000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                    

                </div>

            </div>

        </div>

    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>