<header id="header" class="top-head">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-4 col-sm-12 left-rs">
                <div class="navbar-header">
                   <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                   <span class="sr-only">Toggle navigation</span> 
                   <span class="icon-bar"></span> 
                   <span class="icon-bar"></span> 
                   <span class="icon-bar"></span> 
                   </button>
                   <a href="index.html" class="navbar-brand"><img src="images/maoslogo.png" alt="#" /></a>
                </div>
                <form class="navbar-form navbar-left web-sh">
                   <div class="form">
                      <input type="text" class="form-control" placeholder="Search for name or category books">
                   </div>
                </form>
             </div>
             <div class="col-md-8 col-sm-12">
                <div class="right-nav">
                   <div class="login-sr">
                      <div class="login-signup">
                         <ul>
                         <?php
                           if(isset($_SESSION['email'])){
                           ?>
                              <li><a href="category.php"><span class="glyphicon glyphicon-book"></span> Category</a></li>
                              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                              <li><a href="about-us.php"><span class="glyphicon glyphicon-th-large"></span> About-us</a></li>
                              <li><a href="Account.php"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                              <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                              <li><a href="category.php"><span class="glyphicon glyphicon-book"></span> Category</a></li>
                              <li><a href="about-us.php"><span class="glyphicon glyphicon-th-large"></span> About-us</a></li>
                           <?php
                           }
                           ?>
                         </ul>
                      </div>
                   </div>
                   <div class="help-r hidden-xs">
                      <div class="help-box">
                         <ul>
                            <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="images/flag.png" alt="" /> </a> </li>
                            <li> <a href="#"><img class="h-i" src="images/help-icon.png" alt="" /> Help </a> </li>
                         </ul>
                      </div>
                   </div>
                   <div class="nav-b hidden-xs">
                      <div class="nav-box">
                         <ul>
                            <li><a href="about-us.php">About Maos</a></li>
                            <li><a href="#">Chart</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--/.container-fluid --> 
    </nav>
 </header>