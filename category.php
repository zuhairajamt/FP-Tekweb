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
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-4.png" alt="" /> Indonesia </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Account</a></li>
            <li><a href="#">Chart</a></li>
            <li><a href="#">About Maos</a></li>
            <li><a href="#">Help</a></li>
         </ul>
      </div>
      <div class="furniture-box">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="#">Frontpage </a></li>
                     <li class="active">Bookstores</li>
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
                        <div class="by-box">
                           <h5>By price</h5>
                           <div id="slider-range"></div>
                           <p>
                              <input type="text" id="amount" readonly style="">
                           </p>
                        </div>
                        <div class="by-com">
                           <h5>Category </h5>
                           <div class="list-b">
                              <div id="boxscroll">
                                 <div class="form-check">
                                    <input id="checkbox1" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox1">
                                    Novel
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox2" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox2">
                                    Magazine
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox3" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox3">
                                    Comic
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox4" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox4">
                                    Ensiklopedia
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox5" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox5">
                                    Nomic
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox6" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox6">
                                    Antology
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox7" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox7">
                                    Myth
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox8" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox8">
                                    Biography
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox9" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox9">
                                    Commentary
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox10" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox10">
                                    Dictionary
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox11" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox11">
                                    Guide
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox12" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox12">
                                    Scientific
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox13" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox13">
                                    Default
                                    </label>
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
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>123k likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="#">View</a>
                                       <a href="#">Rp85.000,00</a>
                                    </div>
                                    <div class="like-list">
                                       <ul>
                                          <li>
                                             <div class="im-b"><img class="" src="images/list-img-01.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-02.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-03.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-04.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-05.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-06.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                          </li>
                                       </ul>
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
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>213 likes</p>
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
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>103 likes</p>
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
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>23 likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="productpage.html">View</a>
                                       <a href="#">Rp 75.000,00</a>
                                    </div>
                                    <div class="like-list">
                                       <ul>
                                          <li>
                                             <div class="im-b"><img class="" src="images/list-img-01.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-02.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-03.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-04.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-05.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="images/list-img-06.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                          </li>
                                       </ul>
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
                                    <a href="#" tabindex="0">Rp 100.000,00</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>230 likes</p>
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
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>230 likes</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 hidden-xs">
                     <div class="furniture-right">
                        <h3>Genre</h3>
                        <div class="right-list-f">
                           <ul>
                              <li><a href="#"><img width="32" src=" " alt="" /> Fantasy</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Advanture</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Romance</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Contemporary</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Dystopian</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Mistery</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Horror</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Paranormal</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Hi-Fi</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Sci-Fi</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Memoir</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Cooking</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Art</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> History</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Development</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Motivational</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Health</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Guide</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Families & Relationship</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Humor</a></li>
                              <li><a href="#"><img width="32" src=" " alt="" /> Children's</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="loding-box">
                     <a href="#">
                        <div class="sk-wave">
                           <div class="sk-rect sk-rect1"></div>
                           <div class="sk-rect sk-rect2"></div>
                           <div class="sk-rect sk-rect3"></div>
                           <div class="sk-rect sk-rect4"></div>
                           <div class="sk-rect sk-rect5"></div>
                        </div>
                        <span>Loading more awesome books...</span>
                     </a>
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
      <script>
         $( function() {
         	$( "#slider-range" ).slider({
         		range: true,
         		min: 0,
         		max: 300000,
         		values: [ 10000, 300000 ],
         		slide: function( event, ui ) {
         			$( "#amount" ).val( "Rp" + ui.values[ 0 ] + " - Rp" + ui.values[ 1 ] );
         		}
         	});
         	$( "#amount" ).val( "Rp" + $( "#slider-range" ).slider( "values", 0 ) +
         		" - Rp" + $( "#slider-range" ).slider( "values", 1 ) );
         } );
      </script>
      <script src="js/jquery.nicescroll.min.js"></script> 
      <script>
         $(document).ready(function() {
           $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#ededed",boxzoom:true}); // First scrollable DIV
         });
      </script>
   </body>
</html>