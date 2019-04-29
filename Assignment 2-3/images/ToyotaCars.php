

<html>

<head >
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">

    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
        
    
</head>


<body >
 
 
<div style="text-align:center">
<p>
<h2>Cars for sale:</h2>       
<div class="container-fluid padding">
       <div class="row padding" >
       <div class="col-lg-3">

      <?php
        $db = mysqli_connect("localhost","root","","ecom"); 
        $sql = "SELECT * FROM `Cars` WHERE id='1'";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);   
        echo '<img src="data:image/jpeg;base64,' .base64_encode( $result['Picture'] ).'" width="300" height="200"/>';
        echo  '<br> Model:  ' .$result['Model'];
        echo  '<br> Year:  ' .$result['Description'];
        echo  '<br> Company:  ' .$result['Company'];
      
        ?>

        </div>

       
    
   
  <div class="col-lg-3">
         <?php
        $sql = "SELECT * FROM `Cars` WHERE id='2'";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64, '.base64_encode( $result['Picture'] ).'"width="300" height="200"/>';
        echo  '<br> Model:  ' .$result['Model'];
        echo  '<br> Year:  ' .$result['Description'];
        echo  '<br> Company:  ' .$result['Company'];

        ?>
  </div> 

  <div class="col-lg-3">
         <?php
        $sql = "SELECT * FROM `Cars` WHERE id='3'";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64, '.base64_encode( $result['Picture'] ).'"width="300" height="200"/>';
        echo  '<br> Model:  ' .$result['Model'];
        echo  '<br> Year:  ' .$result['Description'];
        echo  '<br> Company:  ' .$result['Company'];

        ?>
  </div> 



     
</div>
</div>
       </p></div>
        
                        </body>
                        </html>