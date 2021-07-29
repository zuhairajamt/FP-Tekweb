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
      <link rel="stylesheet" href="css/stylee.css">
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
                     <h2>Seri Kuliah Ringkas : Elektronika Dasar</h2>
                     <p>Mohamad Ramdhani</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="images/ed1.jpg" alt="#" />
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
                                 <div class="tab-pane active" id="pic-1"><img src="images/ed1.jpg" alt="#" /></div>
                                 <div class="tab-pane" id="pic-2"><img src="images/ed1.jpg" alt="#" /></div>
                              </div>
                              <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/ed1.jpg" alt="#" /></a></li>
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
                           <p>Elektronika adalah salah satu mata kuliah inti di program studi teknik elektro, dan cukup sering diajarkan juga di jurusan-jurusan lain yang membutuhkan pengetahuan elektronika. Ada pandangan bahwa materi-materi mata kuliah ini dirasa sulit dipahami, sehingga bisa membuat cukup banyak mahasiswa gagal dalam mata kuliah ini.
                           Elektronika Dasar adalah buku yang disusun untuk menjelaskan dasar-dasar elektronika secara Iebih mudah dan sederhana. Buku ini menitikberatkan pembahasan pada materi tentang dioda dan transistor yang dibagi dalam 12 bab dengan topik bahasan mulai dari bahan semikonduktor, sambungan PN, aplikasi dioda, transistor BJT dan FET, balk untuk bias (prategangan) maupun untuk analisis sinyal kecilnya, penguat bertingkat, penguat op-amp, dan rangkaian aplikasi. Teori-teori di dalam buku ini disampaikan ringkas namun jelas. Sebagai pendukung pemahaman, diberikan contoh soal di dalam bab terkait. Sebagai alat uji, latihan soal beserta jawaban diberikan pada akhir bab. Diharapkan buku ini tidak saja menjadi media belajar di ruang kuliah saja, tetapi juga dapat dipergunakan untuk belajar mandiri sehingga membantu mahasiswa, terutama tingkat dasar, untuk dapat memahami elektronika Iebih balk lagi.
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
                                    <p>Mohamad Ramdhani</p>
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
                                    <p>2021</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Pages</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>208</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Publisher</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Erlangga</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Series</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>-</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Genre</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>-</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>ISBN</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>9786024869670</p>
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
                     <h2>Other Books</h2>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/utbk.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                   <a href="pp_utbk.php"><h4>Bank Soal Saintek Utbk Sbmptn 2022</h4></a>
                                    <p>Tim Master Eduka</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 140.000,00</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/teknik.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="pp_teknik.php"><h4>Teori Dan Aplikasi Teknik Listrik</h4></a>
                                    <p>Drs. Daryanto</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 92.000,00</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/tanah.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="pp_tanah.php"><h4>Mekanika Tanah 1 Konsep Dasar Dan Pengukuran Laboratorium</h4></a>
                                    <p>DR AGUS TUGAS SADJIANTO,S.T., M.T</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 75.000,00</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/daya.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <a href="pp_daya.php"><h4>Distribusi Daya Listrik, Teori Dan Praktik</h4></a>
                                    <p>Cekmas Cekdin</p>
                                 </div>
                                 <a href="#" tabindex="0">Rp 50.000,00</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right">
                     <h4>Price</h4>
                     <h3>Rp 95.000,00 </h3>
                     <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           }
                           else{
                              if(check_added_to_cart(1)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                 }else{
                                    ?>
                                 <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
