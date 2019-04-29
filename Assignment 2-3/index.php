<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';


?>


<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        

</head>

<body >
	

	<div id="header">
        <h1 >My E-com Store </h1>
        </div>
        
       <nav class="navbar navbar-expand-sm justify-content-center " style="color: black; font-weight: bold">
          <ul class="navbar-nav center">
            <li class="nav-item ">
              <a class="nav-link custom" style="color: black; font-weight: bold" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom" style="color: black; font-weight: bold" href="images/about us.html">ABOUT US</a>
            </li>   
            <li class="nav-item ">
              <a class="nav-link custom" style="color: black; font-weight: bold" href="images/Contact.html">CONTACT US </a>
            </li>
          </ul>
       </nav>

  
       <div class="container-fluid padding">
       <div class="row padding" >
              <div class="col-lg-3">
                    <div style="color: mediumorchid" class="jumbotron">
                      <h3>Categories</h3>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" style="color:rgba(14, 41, 28, 0.623)" href="images/cars cat.php" >Car Categories</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color:rgba(14, 41, 28, 0.623)"href="images/computer cat.php">Computer Categories</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" style="color:rgba(14, 41, 28, 0.623)" href="images/phone cat.php">Phone Categories</a>
                        </li>
                    </ul>
                    </div>
             </div>




             <div class="col-lg-3">
                      <div id=texts>
                      <p>
                      <a href="images/cars.php">
                      <img src="images/car.jpg">   </a>
                      <br>
                      All Cars        
                      </p>
                      </div>
                   </div>
        
               

                 <div class="col-lg-3">
                        <div id=texts>
                        <p>
                        <a href="images/Computer.php">
                        <img src="images/Computer.jpg">
                        </a>
                        <br>
                        All Computers      
                        </p>
                        </div>
                  </div>
        
      <!--<div class="col-lg-9"> -->
                  <div class="col-lg-3">
                        <div id=texts>
                        <p>
                        <a href="images/phone.php">
                        <img src="images/phone.jpg">
                        </a>
                        <br>
                        All Smart phones        
                        </p>
                        </div> 
                   </div>
       <!--  </div>  -->         
      
      </div>
      </div>

              <footer>
                <p>Contact us at Mijlal635@gmail.com</p>
                <p>0337-5777587</p>
              </footer>
     

    
</body>
