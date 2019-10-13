<?php
include_once('tools.php');

//alert($_SESSION['cart']['cust']['expiry']);

$custDetailsArray = [
  'Name' => $_SESSION['cart']['cust']['name'],
  'Email' => $_SESSION['cart']['cust']['email'],
  'Mobile' => $_SESSION['cart']['cust']['mobile'],
  'Credit Card' => $_SESSION['cart']['cust']['card'],
  'Expiry' => $_SESSION['cart']['cust']['expiry']];

$ticketDetailsArray = [
  'Movie' => $_SESSION['cart']['movie']['id'],
  'Day' => $_SESSION['cart']['movie']['day'],
  'Hour' => $_SESSION['cart']['movie']['hour']];

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
  echo "<link id='stylecss' type=\"text/css\" rel=\"stylesheet\" href=\"receiptStyle.css\">";
  echo "<h1>LUNARDO CINEMA</h1>";
  echo "<h2>123 Country Road, Small Town, VIC 1010</h2>";
  echo "<h2>ABN number: 00 123 456 789</h2>";
  echo "<h2>" . date("Y-m-d") . "</h2>";
  echo "<p class=\"subHeading\">Customer details<p>";
  echo "<hr>";
  echo table($custDetailsArray);
  echo "<p class=\"subHeading\">Ticket details<p>";
  echo "<hr>";
  echo table($ticketDetailsArray);
  echo "<p class=\"subHeading\">Price details<p>";
  echo "Total: ";
}


?>