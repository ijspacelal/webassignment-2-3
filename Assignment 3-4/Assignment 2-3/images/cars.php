

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

<body>

      <?php

        $db = mysqli_connect("localhost","root","","ecom"); 
        $sql = "SELECT * FROM `Cars` WHERE id='1'";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64, '.base64_encode( $result['Picture'] ).'"/>';
        

        ?>
                        </body>
                        </html>