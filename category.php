<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Katalog || Maos Store</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
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
            <li><a href="about-us.php">About Maos</a></li>
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
      <div class="furniture-box">
         <div class="container">
            <div class="row">
               <div class="furniture-main">
                  <h2>Bookstores</h2>
                  <div class="col-md-3 col-sm-4">
                     <div class="furniture-left">
                        <h3>Filter Products</h3>
                        <div class="by-com">
                           <h5>Category>Novel </h5>
                           <div class="list-b">
                              <div id="boxscroll">
                                 <div class="form-button">
                                    <a href="category_comic.php"><input id="button1" class="button" type="button" value="Comic" onclick=""></a>
                                 </div>
                                 <div class="form-button">
                                    <a href="category_science.php"><input id="button2" class="button" type="button" value="Scientific" onclick=""></a>
                                 </div>
                                 <div class="form-button">
                                    <input id="button3" class="button" type="button" value="Novel" onclick="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-8">
                     <div class="furniture-middle">
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="images/npb_book.png" alt="#" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Negeri Para Bedebah</h3>
                                    <p>By <span>Tere Liye</span></span></p>
                                    <div class="prod-btn">
                                       <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>123 likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="pp_npb.php">View</a>
                                       <a href="#">Rp85.000,00</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row cat-pd">
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="images/Ubur-ubur-Lembur.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Ubur-ubur Lembur</h4>
                                       <p>By <span>Raditya Dika</span></p>
                                    </div>
                                    <a href="#" tabindex="0">Rp 60.000,00</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="pp_uul.php">View</a>
                                       <p>213 likes</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="images/bumi.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Bumi</h4>
                                       <p>By <span>Tere Liye</span></p>
                                    </div>
                                    <a href="#" tabindex="0">Rp 90.000,00</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="pp_bumi.php">View</a>
                                       <p>103 likes</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="images/harry3.jpg" alt="#" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Harry Potter Deathly Hallows</h3>
                                    <p>By <span>J K. Rowling</span></p>
                                    <div class="prod-btn">
                                       <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>23 likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="productpage.php">View</a>
                                       <a href="#">Rp 75.000,00</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row cat-pd">
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="images/harry_gof.jpg" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Harry Potter - And The Goblet of Fire</h4>
                                       <p>By <span>J K. Rowling</span></p>
                                    </div>
                                    <a href="#" tabindex="0">Rp 75.000,00</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="pp_gof.php">View</a>
                                       <p>230 likes</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="images/fantasticbeasts-1.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Fantastic Beasts - The Crimes of Grindelwold</h4>
                                       <p>By <span>J K. Rowling</span></p>
                                    </div>
                                    <a href="#" tabindex="0">Rp 200.000,00</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a onclick="wishlist()"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a onclick="like()"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="pp_fb.php">View</a>
                                       <p>230 likes</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 hidden-xs">
                     <div class="furniture-right">
                     </div>
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
      <script src="js/jquery-ui.js"></script>
      <script src="js/wow.min.js"></script>
      <!--custom js-->
      <script src="js/custom.js"></script>
      <script src="js/alert.js"></script>
      <script src="js/jquery.nicescroll.min.js"></script>
      <script>
         $(document).ready(function() {
           $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#ededed",boxzoom:true}); // First scrollable DIV
         });
      </script>
   </body>
</html>
