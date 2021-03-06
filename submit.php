<?php 
include 'header.php';
$_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Post your item/service</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/submitcss.css">

  
</head>

<body>

  <h1>Post your item/service</h1>

  <?php
          if (isset($_SESSION['username'])) {
            echo '<div class="gallery-upload">
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?> 

<!--
  <form class="form-signup" action="includes/gallery-upload.inc.php" method="post" enctype-"multipart/form-data">
    <div class="half left cf">
      <input type="text" id="input-product" placeholder="Product">
      <input type="text" id="input-name" placeholder="Name">
      <input type="email" id="input-email" placeholder="Email address">
      <p class="margin">Select images to upload:</p>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </div>

    <div class="half right cf">
      <textarea name="message" type="text" id="input-description" placeholder="Description"></textarea>
    </div>  


  <div>
    <input type="submit" value="Submit" id="input-submit">
  </div>
</form>
        -->




    <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))
          {
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
          }//if
        else
          {
            echo "not logged in";
          }//else
        ?>
      </div>
    <!--Logged in message & logout-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="js/aboutus.js"></script>

</body>

</html>
