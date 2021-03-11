
<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Home | E-Store.com</title>

        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">



          <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap Core CSS -->

          <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->

          <link href="./css/style.css" rel="stylesheet">

        <!-- jQuery -->

          <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

          <script src="js/bootstrap.min.js"></script>

    </head>

    <body style="padding-top: 50px;">



        <!-- Header -->

        <?php

        include 'includes/header.php';

        ?>

        <!--Header end-->



        <div id="content">

            <!--Main banner image-->

            <div id = "banner_image">

                <div class="container">

                    <center>

                        <div id="banner_content">

                            <h1 style="font-family: algerian;font-size:450%;">WORLD OF TELEVISIONS</h1>

                            <h4 style="font-family: Copperplate Gothic Bold;font-size: 150%;color: powderyellow;"><p>Flat 30% OFF on all products.</p></h4>

                            <br>

                            <br>

                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>

                        </div>

                    </center>

                </div>

            </div>

            <br>

            <br>

            <!--Main banner image end-->



            <!--Item categories listing-->

            <div class="container text-center">

                <div id="item_list">

                    <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 style="color:orange">Choose from wide range of brands</h3>

                        </div>



                    <div class="panel-body">

                        <div class="col-sm-3">

                            <a href="products.php#ios">

                               <div class="thumbnail">

                                   <img src="./img/samsung.jpg" alt="samsung" >

                                        <div class="caption">

                                            <h3>Samsung</h3>

                                        </div>

                                </div>

                            </a>

                        </div>



                         <div class="col-sm-3">

                            <a href="products.php#samsung">

                               <div class="thumbnail">

                                   <img src="./img/panasonic.jpg" alt="panasonic" >

                                        <div class="caption">

                                            <h3>Panasonic</h3>

                                        </div>

                                </div>

                            </a>

                        </div>



                         <div class="col-sm-3">

                            <a href="products.php#oneplus">

                               <div class="thumbnail">

                                   <img src="./img/lg.jpg" alt="lg" >

                                        <div class="caption">

                                            <h3>LG</h3>

                                        </div>

                                </div>

                            </a>

                        </div>



                         <div class="col-sm-3">

                            <a href="products.php#xiaomi">

                               <div class="thumbnail">

                                   <img src="./img/sony.jpg" alt="sony" >

                                        <div class="caption">

                                            <h3>SONY</h3>

                                        </div>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>







                </div>

            </div>



            <!--Item categories listing end-->

        </div>



        <!--Footer-->

        <?php

        include 'includes/footer.php';

        ?>

        <!--Footer end-->



    </body>

</html>