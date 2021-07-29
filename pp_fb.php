<?php
   session_start();
   require 'check_added_cart.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Detail Barang</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/animate-wow.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <link rel="stylesheet" href="css/select2.min.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/stylee.css">
   </head>
   <body>
     <!-- HEADER -->
     <?php include 'header.php'?>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Account</a></li>
            <li><a href="#">About Maos</a></li>
         </ul>
      </div>
      <div class="furniture-box">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 <div class="prod-page-title">
                     <h2>Fantastic Beasts - The Crimes of Grindelwold</h2>
                     <p>J. K. Rowling</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="images/fantasticbeasts-1.png" alt="#" />
                     </div>
                     <div class="pof-text">

                     </div>

                  </div>
               </div>
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src="images/fantasticbeasts-1.png" alt="#" /></div>
                              </div>
                              <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/fantasticbeasts-1.png" alt="#" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                           <div class="left-dit-p">
                              <div class="prod-btn">
                                 <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                           <div class="right-dit-p">
                              <div class="like-list">
                                 <ul>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                   <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                   <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                   <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Synopsis</h4>
                           <p>The powerful Dark wizard Gellert Grindelwald was captured in New York with the help of Newt Scamander. But, making good on his threat, Grindelwald escapes custody and sets about gathering followers, most of whom are unsuspecting of his true agenda: to raise pure-blood wizards up to rule over all non-magical beings..

                           In an effort to thwart Grindelwald’s plans, Albus Dumbledore enlists Newt, his former Hogwarts student, who agrees to help once again, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world..
                           </p>
                           <br>
                        </div>
                        <div class="spe-a">
                           <h4>Book Information</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Author</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>J. K. Rowling</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Illustrator</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>-</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Year Released</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>2018</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Pages</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>304</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Publisher</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Scholastic</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Series</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Fantastic beasts</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Genre</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Fantasy, Adventure</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>ISBN</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>9781338263893</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <br></br>
                  <p style="font-size: 20px">Add Rating</p>
                  <div class="star-widget">
               <input onclick="feedback()" type="radio" name="rate" id="rate-5">
               <label for="rate-5" class="fa fa-star"></label>
               <input onclick="feedback()" type="radio" name="rate" id="rate-4">
               <label for="rate-4" class="fa fa-star"></label>
               <input onclick="feedback()" type="radio" name="rate" id="rate-3">
               <label for="rate-3" class="fa fa-star"></label>
               <input onclick="feedback()" type="radio" name="rate" id="rate-2">
               <label for="rate-2" class="fa fa-star"></label>
               <input onclick="wishlist()" type="radio" name="rate" id="rate-1">
               <label for="rate-1" class="fa fa-star"></label>
            </div>
               <br></br>
               <span style="font-size: 20px">User Rating</span>
               <p style="font-size: 15px">4.0 average based on 32 reviews.</p>
                <div class="rating">
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               </div>
               <hr style="border:3px solid #f1f1f1">
               <div class="row">
                  <div class="side">
               </div>
                  </div>
                  <div class="similar-box">
                     <h2>Other Novels</h2>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/npb_book.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                   <a href=""><h4>Negeri Para Bedebah</h4></a>
                                    <p>Tere Liye</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 60.000,00</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/harry3.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="productpage.php"><h4>Harry Potter Deathly Hallows</h4></a>
                                    <p>J. K. Rowling</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 75.000,00</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/bumi.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="pp_bumi.php"><h4>Bumi</h4></a>
                                 </div>
                                 <a href="#" tabindex="0">Rp 90.000,00</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/harry_gof.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="pp_gof.php"><h4>Harry Potter and the Goblet of Fire</h4></a>
                                    <p>By J. K. Rowling</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 75.000,00</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right">
                     <h4>Price</h4>
                     <h3>Rp 200.000,00 </h3>
                              <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           }
                           else{
                              if(check_added_to_cart(1)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                 }else{
                                    ?>
                                 <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                 <?php
                              }
                           }
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FOOTER -->
      <?php include 'footer.php'?>
      <!--main js-->
      <script src="js/jquery-1.12.4.min.js"></script>
      <!--bootstrap js-->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/select2.full.min.js"></script>
      <script src="js/wow.min.js"></script>
      <!--custom js-->
      <script src="js/custom.js"></script>
      <script src="js/alert.js"></script>
   </body>
</html>
