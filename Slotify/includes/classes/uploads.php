<?php
class uploads {
      private $con;

      public function __construct($con) {
        $this->con = $con;
      }
      public function insert($ti, $path) {
  //Insert into db
          return $this->insertDetails($ti, $path);


      }

      private function insertDetails($ti, $path) {

        $result = mysqli_query($this->con, "INSERT INTO songs VALUES ('','$ti','','','','','$path','','')");

        return $result;
      }

}
?>
