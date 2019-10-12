<?php
session_start();

//alert($_SESSION['cart']['cust']['expiry']);

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if(empty($_SESSION))
{
  header("Cache-Control: no-cache, must-revalidate");
  header("Expires: date(\"Y-m-d\")");
  header("Location: index.php");
  exit();
}else{
  //add order to spreadsheet and print receipts
  echo "Welcome";
}


?>