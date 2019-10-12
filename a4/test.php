<?php 
include_once('tools.php'); 

//change error reporting
error_reporting( E_ERROR | E_WARNING | E_PARSE );

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
$custNameError = '';
$custEmailError = '';
$custMobileError = '';
$custCardError = '';
$custExpiryError = '';
$emptyError = '<span style="color:red">Cannot be blank</span>';
$response = '';

//declare needed variables and arrays
$requiredFields = [$_POST['movie']['id'], $_POST['movie']['day'], $_POST['movie']['hour'], $_POST['cust']['name'], $_POST['cust']['email'], $_POST['cust']['mobile'], $_POST['cust']['card'], $_POST['cust']['expiry']];
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
  
// handle POST data, if found 
$errorsFound = 0; 
if (!empty($_POST)) 
{ 
  if(preg_match("/^[a-zA-Z \-.']{1,50}$/" ,$_POST['cust']['name'])){
    $cust[name] = $_POST['cust']['name'];
  }else{
    $errorsFound++;
    $custNameError=' <span style="color:red">Enter valid response</span>';
  }
  if(filter_var($_POST['cust']['email'], FILTER_VALIDATE_EMAIL)){
    $cust[email] = $_POST['cust']['email'];
  }else{
    $errorsFound++;
    $custEmailError =' <span style="color:red">Enter valid response</span>';
  }
  if(preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $_POST['cust']['mobile'])){
    $cust[mobile] = $_POST['cust']['mobile'];
  }else{
    $errorsFound++;
    $custMobileError =' <span style="color:red">Enter valid response</span>';
  }
  if(preg_match("/^( ?\d){14,19}$/", $_POST['cust']['card'])){
    $cust[card] = $_POST['cust']['card'];
  }else{
    $errorsFound++;
    $custCardError =' <span style="color:red">Enter valid response</span>';
  }
  $expiryDate = $_POST['cust']['expiry'];
  $elements = preg_split("/[-]+/", $expiryDate);
  $expiryMonth = $elements[1];
  $expiryYear = $elements[0];
  if ($expiryMonth[0] == 0){
    $expiryMonth = $expiryMonth[1];
  }
  //Check if year is in future or if year is current and month is at least current month. As months are indexed at 0, we subtract 1
  if ($expiryYear > date("Y") || ($expiryYear = date("Y") && $expiryMonth >= date("m"))){
    $cust[expiry] = $_POST['cust']['expiry'];
  }else{
    $errorsFound++;
    $custExpiryError =' <span style="color:red">Enter valid response</span>';
  }
  //Check if any required fields are empty
  foreach ($requiredFields as $value){
    empty($value) ? "true" : "false";
  }
 
 // If POST data was sent and no errors. Post data is added to session and redirect to receipt page. 
  if ($errorsFound === 0)
  {
    //unset ($_SESSION['cart']);
    $_SESSION['cart'] = $_POST;
    header("Location: receipt.php");
    exit;
  }
}

?> 

<?php 
  include_once('index.php'); 
  preShow($_POST);
  preShow($_SESSION);
  $my_bad_array = ["1", "2", "1", "4"];
  $aarg = preshow($my_bad_array, false);
  echo "why is \n $aarg \n not working?";

  $pricesArrayPHP = array (1, 2, 3, 4);
  php2js($pricesArrayPHP, 'pricesArrayJS');

  printMyCode();

?> 
