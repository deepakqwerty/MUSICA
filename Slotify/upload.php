<?php   	include("includes/header.php");
include("includes/classes/uploads.php");
?>
<div class="gridViewContainer">
  <h2>UPLOADS</h2>

  <form action="?" method="POST" enctype="multipart/form-data">
  <label>Upload Your Music</label>
  <p><input type="file" name= "file"></p>
  <p><input style ="color:black;" type="submit" name="upload" value= "Upload Music"></p>
  </form>

</div>
<?php   	include("includes/footer.php"); ?>

      <?php


      $ups = new uploads($con);

      if(isset($_SESSION['userLoggedIn'])) {
          $userLoggedIn=$_SESSION['userLoggedIn'];
      }
       else {
             header("Location: register.php");
      }

      function function_alert($message) {
        // Display the alert box
        echo "<script>alert('$message');</script>";
      }

      if(isset($_POST['upload'])){

        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tem_Loc = $_FILES['file']['tmp_name'];
        $file_store = "C:/xampp/htdocs/Slotify/assets/music/".$file_name;
        $uploadOk = 1;
        $imageFileType = pathinfo($file_store,PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($file_store)) {
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES['file']['size'] > 10000000) {
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "mp3" ) {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          function_alert("Sorry, your file was not uploaded.");
        // if everything is ok, try to upload file
        }
        else{
        move_uploaded_file($file_tem_Loc, $file_store);
        function_alert("The file has been uploaded.");
        }
        //upload button was pressed
        function sanitizeForm($inputText) {
        	$inputText = strip_tags($inputText);
        	$inputText = str_replace(" ", "", $inputText);
        	return $inputText;
        }

        $ti = sanitizeForm($file_name);
        $path = "assets/music/".$file_name;

        $wasSuccessful = $ups->insert($ti,$path);



    }
      ?>
