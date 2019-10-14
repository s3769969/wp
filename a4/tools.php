<?php
  session_start();

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// Put your PHP functions and modules here

// initialise variables we need with default values 
$movie['id'] = '';
$movie['day'] = '';
$movie['hour'] = '';
$seats['STA'] = '';
$seats['STP'] = '';
$seats['STC'] = '';
$seats['FCA'] = '';
$seats['FCP'] = '';
$seats['FCC'] = '';
$cust['name'] = '';
$cust['email'] = '';
$cust['mobile'] = '';
$cust['card'] = '';
$cust['expiry'] = '';
$nameEcho = '';
$emailEcho = '';
$mobileEcho = '';
$cardEcho = '';
$expiryEcho = '';
$nameError = '';
$emailError = '';
$mobileError = '';
$cardError = '';
$expiryError = '';
$emptyError = '<span style="color:red">Cannot be blank</span>';
$response = '';

//declare needed variables and arrays
$ticketDetailsArray = [
  'Movie:' => ["ACT", "RMC", "ANM", "AHF"],
  'Day:' => ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"],
  'Hour:' => ["T12", "T15", "T18", "T21"]];

$descriptionACT =<<< "descriptionACT"
'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...'
descriptionACT;
$descriptionRMC =<<< "descriptionRMC"
'Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.'
descriptionRMC;
$descriptionANM =<<< "descriptionANM"
'A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer.'
descriptionANM;
$descriptionAHF =<<< "descriptionAHF"
'The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor.'
descriptionAHF;

$moviesObject = [
  'ACT' => [
    'title' => 'Avengers: Endgame',
    'rating' => 'PG-13',
    'description' => $descriptionACT,
    'screenings' => [
      'WED' => 'T21',
      'THU' => 'T21',
      'FRI' => 'T21',
      'SAT' => 'T18',
      'SUN' => 'T18']
  ],
  'RMC' => [
    'title' => 'Top End Wedding',
    'rating' => 'M',
    'description' => $descriptionRMC,
    'screenings' => [
      'MON' => 'T18',
      'TUE' => 'T18',
      'SAT' => 'T15',
      'SUN' => 'T15']
  ],
  'ANM' => [
    'title' => 'Dumbo',
    'rating' => 'PG',
    'description' => $descriptionANM,
    'screenings' => [
      'MON' => 'T12',
      'TUE' => 'T12',
      'WED' => 'T18',
      'THU' => 'T18',
      'FRI' => 'T18',
      'SAT' => 'T12',
      'SUN' => 'T12']
  ],
  'AHF' => [
    'title' => 'The Happy Prince',
    'rating' => 'R',
    'description' => $descriptionAHF,
    'screenings' => [
      'WED' => 'T12',
      'THU' => 'T12',
      'FRI' => 'T12',
      'SAT' => 'T21',
      'SUN' => 'T21']
  ]
];

$pricesObject = [
  'full' => [
    'STA' => 19.8,
    'STP' => 17.5,
    'STC' => 15.3,
    'FCA' => 30.0,
    'FCP' => 27.0,
    'FCC' => 24.0
  ],
  'disc' => [
    'STA' => 14.0,
    'STP' => 12.5,
    'STC' => 11.0,
    'FCA' => 24.0,
    'FCP' => 22.5,
    'FCC' => 21.0
  ]
];

//stop cross site scripting attacks
function sanitise($posts){
  foreach ($posts as $post){
    $post = htmlentities($post);
  }
}

function validName(){
  if(preg_match("/^[a-zA-Z \-.']{1,50}$/" ,$_POST['cust']['name'])){
    $cust[name] = $_POST['cust']['name'];
    return true;
  }else{
    $nameError=' Please enter a valid name';
    return false;
  }
}

function validEmail(){
  if(filter_var($_POST['cust']['email'], FILTER_VALIDATE_EMAIL)){
    $cust[email] = $_POST['cust']['email'];
    return true;
  }else{
    $emailError =' Please enter a valid email';
    return false;
  }
}

function validMobile(){
  if(preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $_POST['cust']['mobile'])){
    $cust[mobile] = $_POST['cust']['mobile'];
    return true;
  }else{
    $mobileError =' Please enter an Australian mobile number';
    return false;
  }
}

function validCard(){
  if(preg_match("/^( ?\d){14,19}$/", $_POST['cust']['card'])){
    $cust[card] = $_POST['cust']['card'];
    return true;
  }else{
    $cardError =' Please enter a valid Credit Card number';
    return false;
  }
}

function validExpiry(){
  $expiryDate = $_POST['cust']['expiry'];
  $currentDate = date("Y-m-d");
  $currentDateTime = new DateTime($currentDate);
  $expiryDateTime = new DateTime($expiryDate);
  $diff = date_diff($currentDateTime, $expiryDateTime)->format('%R%a');

  //Check that card expiry is no less than 28 days
  if($diff >= 28){
    $cust[expiry] = $_POST['cust']['expiry'];
    return true;
  }else{
    $expiryError =' Please use a card that expires in no less than 28 days';
    return false;
  }
}

//Check if any required fields are empty
function emptyFields($requiredFields){
  $emptyCount = 0;
  foreach ($requiredFields as $value){
    empty($value) ? $emptyCount++ : $emptyCount;
  }
  return $emptyCount;
}

//creates table using data
function table($detailsArray){
  $details = " ";
  foreach ($detailsArray as $key => $value){
     $details .= "<div class=\"row\"><div class=\"cell\" style=\"display: table-cell\">" .$key. "</div>";
     $details .= "<div class=\"cell\" style=\"display: table-cell\">" .$value. "</div></div>";
  }
  return $details;
}

//check movie session exists
function validSess($moviesObject){
  foreach ($moviesObject as $id => $screenings){
    if ($_POST['movie']['id'] == $id){
      foreach (validSessHelper($moviesObject, $_POST['movie']['id']) as $hour){
        if(in_array($_POST['movie']['hour'], $hour)){
          return true;
        }
      }
    }
  }
  return false;
}

function validSessHelper($arr, $id){
  foreach($arr[$id]['screenings'] as $day => $hour){
    if($day == $$_POST['movie']['day']){
      return $hour;
    }
  }
}

//Gets price for ticket based on day/time
function getPrice($seatType, $pricesObject)
{ 
  $discountTimes = ["T12"];
  $discountDays = ["MON", "TUE", "WED", "THU", "FRI"];
  $movieDay = $_SESSION['cart']['movie']['day'];
  $movieHour = $_SESSION['cart']['movie']['hour'];
  if (in_array($movieDay, $discountDays) && in_array($movieHour, $discountTimes)){
    foreach ($pricesObject as $disc => $seatCode){
      return getPriceHelper($pricesObject["disc"], $seatType);      
    }
  }else{
    foreach ($pricesObject as $disc => $seatCode){
      return getPriceHelper($pricesObject["full"], $seatType);      
    }
  }
}

function getPriceHelper($arr, $seatType){
  foreach($arr as $seatCode => $price){
    if($seatType == $seatCode){
      return $price;
    }
  }
}

//calc total cost of tickets
function priceCalc($pricesObject){
  $priceTotal = '';
  $seats = $_SESSION['cart']['seats'];
  foreach ($seats as $seatType => $seatNo){
    $price = getPrice($seatType, $pricesObject);
    $priceTotal += $price * $seatNo;
  }
  return number_format((float)$priceTotal, 2, '.', '');
}


?>