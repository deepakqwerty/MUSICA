<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn=$_SESSION['userLoggedIn'];
}
 else {
       header("Location: register.php");
}

if(isset($_POST['upload'])){

  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_Loc = $_FILES['file']['tmp_name'];
  $file_store = "C:/xampp/htdocs/Slotify/assets/music/".$file_name;

  move_uploaded_file($file_tem_Loc, $file_store);

}
?>

<html>

<head>

  <title>Welcome to Musica!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <div id="mainContainer">
        <div id="topContainer">
            

            <div id="mainViewContainer">
                <div id="mainContent">

                  <form action="?" method="POST" enctype="multipart/form-data">
                  <label>Upload Your Music</label>
                  <p><input type="file" name= "file"></p>
                  <p><input type="submit" name="upload" value= "Upload Music"></p>
                </form>

                </div>
              </div>
            </div>

          
        </div>

    </body>

</html>
