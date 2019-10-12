<?php

if(empty($_SESSION))
{
  //header("Cache-Control: no-cache, must-revalidate");
  //header("Expires: date("d-m-Y")");
  header("Location: test.php");
  exit;
}else{
  //add order to spreadsheet and print receipts
  echo "Welcome";
}


?>