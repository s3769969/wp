<?php
include_once('tools.php');

//redirects back to index.php if no session data else processes data
if(empty($_SESSION))
{
  header("Cache-Control: no-cache, must-revalidate");
  header("Expires: date(\"Y-m-d\")");
  header("Location: index.php");
  exit();
}else{
  
  //session details added to arrays
  $seatDetailsArray = [
  'STA' => $_SESSION['cart']['seats']['STA'],
  'STP' => $_SESSION['cart']['seats']['STP'],
  'STC' => $_SESSION['cart']['seats']['STC'],
  'FCA' => $_SESSION['cart']['seats']['FCA'],
  'FCP' => $_SESSION['cart']['seats']['FCP'],
  'FCC' => $_SESSION['cart']['seats']['FCC']];

  $custDetailsArray = [
  'Name:' => $_SESSION['cart']['cust']['name'],
  'Email:' => $_SESSION['cart']['cust']['email'],
  'Mobile:' => $_SESSION['cart']['cust']['mobile'],
  'Credit Card:' => $_SESSION['cart']['cust']['card'],
  'Expiry:' => $_SESSION['cart']['cust']['expiry']];
  
  $sessionDetailsArray = [
  'Movie:' => $_SESSION['cart']['movie']['id'],
  'Day:' => $_SESSION['cart']['movie']['day'],
  'Hour:' => $_SESSION['cart']['movie']['hour']];
  
  //add order to spreadsheet and 

  //print receipt
  echo "<link id='stylecss' type=\"text/css\" rel=\"stylesheet\" href=\"receiptStyle.css\">";
  echo "<h1>LUNARDO CINEMA</h1>";
  echo "<h2>123 Country Road, Small Town, VIC 1010</h2>";
  echo "<h2>ABN number: 00 123 456 789</h2>";
  echo "<h2>" . date("Y-m-d") . "</h2>";
  echo "<p class=\"subHeading\">Customer details<p>";
  echo "<hr>";
  echo table($custDetailsArray);
  echo "<p class=\"subHeading\">Movie Session details<p>";
  echo "<hr>";
  echo table($sessionDetailsArray);
  echo "<p class=\"subHeading\">Seat and Pricing details<p>";
  echo "<hr>";
  echo table($seatDetailsArray);
  echo "<p>Total: $ " . priceCalc($pricesObject) . "	(GST included)</p>";
  echo "<p>GST:	$ " . number_format((float)priceCalc($pricesObject)/11, 2, '.', '') . "</p>";
}
?>