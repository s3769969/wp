<?php
include_once('tools.php');

//redirects back to index.php if no session data else processes data
if(empty($_SESSION['cart']['cust']) || empty($_SESSION['cart']['movie']) || empty($_SESSION['cart']['seats']))
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
  
  //add order to spreadsheet
  $currentTime = date('d/m/Y h:i');
  $priceTotal = priceCalc($pricesObject);
  $filename = "bookings.txt";
  $records = [
  [ $currentTime,
  $_SESSION['cart']['cust']['name'],
  $_SESSION['cart']['cust']['email'],
  $_SESSION['cart']['cust']['mobile'],
  $_SESSION['cart']['movie']['id'],
  $_SESSION['cart']['movie']['day'],
  $_SESSION['cart']['movie']['hour'],
  $_SESSION['cart']['seats']['STA'],
  $_SESSION['cart']['seats']['STP'],
  $_SESSION['cart']['seats']['STC'],
  $_SESSION['cart']['seats']['FCA'],
  $_SESSION['cart']['seats']['FCP'],
  $_SESSION['cart']['seats']['FCC'],
   $priceTotal ]];
  $fp = fopen($filename, "a");
  flock($fp, LOCK_EX);
  foreach($records as $record)
    fputcsv($fp, $record, "\t");
  flock($fp, LOCK_UN);
  fclose($fp);


  //print receipt
  echo "<link id='stylecss' type=\"text/css\" rel=\"stylesheet\" href=\"receiptStyle.css\">";
  echo "<div id='receipt'>";
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
  echo "</div>";
  echo "<br>";

/*
$fp = fopen($filename, "r");
flock($fp, LOCK_SH);
while($line = fgetcsv($fp)){
  $records[] = $line;
}
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>{$headings[3]}</p>"
echo "<p>{$records[0][0]}</p>"
*/

  echo "<div id='gTicket'>";
  echo "<h2>Group Ticket</h2>";
  echo "</div>";
  echo "<br>";  

  echo "<div class='sTicket'>";
  echo "<h2>Single Ticket</h2>";
  echo "</div>";
}
?>

<?= console_log($records); ?>