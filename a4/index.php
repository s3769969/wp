<?php 
include_once('tools.php'); 
//change error reporting
error_reporting( E_ERROR | E_WARNING | E_PARSE );

$posts = [$_POST['movie']['id'], $_POST['movie']['day'], $_POST['movie']['hour'], $_POST['seats']['STA'], $_POST['seats']['STP'], $_POST['seats']['STC'], $_POST['seats']['FCA'], $_POST['seats']['FCP'], $_POST['seats']['FCC'], $_POST['cust']['name'], $_POST['cust']['email'], $_POST['cust']['mobile'], $_POST['cust']['card'], $_POST['cust']['expiry']];
$requiredFields = [
  'id' => $_POST['movie']['id'],
  'day' => $_POST['movie']['day'],
  'hour' => $_POST['movie']['hour'],
//  'name' => $_POST['cust']['name'],
//  'email' => $_POST['cust']['email'],
//  'mobile' => $_POST['cust']['mobile'],
//  'card' => $_POST['cust']['card'],
//  'expiry' => $_POST['cust']['expiry']
];

//sanitise potential malicious code
sanitise($posts);

// handle POST data, if found 
$errorsFound = 0;
if (!empty($_POST)) 
{ 
  //$errorsFound .= emptyFields($requiredFields);
  if(!empty($_POST['movie']['id']) && !empty($_POST['movie']['day']) && !empty($_POST['movie']['hour'])){
    validSess($moviesObject) ? : $sessError =' Please select an available movie session';
    validSess($moviesObject) ? : $errorsFound;
  }else{
    $sessError =' Please select a movie session';
    $errorsFound++;
  }
  if(!empty($_POST['cust']['name'])){
    $nameEcho = $_POST['cust']['name'];
    validName() ? : $nameError =' Please enter a valid name';
    validName() ? : $errorsFound++;
  }else{
    $nameError=' Cannot leave name blank';
    $errorsFound++;
  }
  $eCheckName = $errorsFound;
  if(!empty($_POST['cust']['email'])){
    $emailEcho = $_POST['cust']['email'];
    validEmail() ? : $emailError =' Please enter a valid email';
    validEmail() ? : $errorsFound++;
  }else{
    $emailError=' Cannot leave email blank';
    $errorsFound++;
  }
  $eCheckEmail = $errorsFound;
  if(!empty($_POST['cust']['mobile'])){
    $mobileEcho = $_POST['cust']['mobile'];
    validMobile() ? : $mobileError =' Please enter an Australian mobile number';
    validMobile() ? : $errorsFound++;
  }else{
    $mobileError=' Cannot leave mobile blank';
    $errorsFound++;
  }
  $eCheckMobile = $errorsFound;
  if(!empty($_POST['cust']['card'])){
    $cardEcho = $_POST['cust']['card'];
    validCard() ? : $cardError =' Please enter a valid Credit Card number';
    validCard() ? : $errorsFound++;
  }else{
    $cardError=' Cannot leave Credit Card field blank';
    $errorsFound++;
  }
  $eCheckCard = $errorsFound;
  if(!empty($_POST['cust']['expiry'])){
    $expiryEcho = $_POST['cust']['expiry'];
    validExpiry() ? : $expiryError =' Please use a card that expires in no less than 28 days';
    validExpiry() ? : $errorsFound++;
    $errorsFound = validExpiry();
  }else{
    $expiryError=' Cannot leave expiry blank';
    $errorsFound++;
  }
  $eCheckExpiry = $errorsFound;

  //validTicket() ? : $errorsFound++;
  $eCheck3 = $errorsFound;
 
 // If POST data was sent and no errors. Post data is added to session and redirect to receipt page. 
  if ($errorsFound === 0)
  {
    console.log("no errors");
    $_SESSION['cart'] = $_POST;
    header("Location: receipt.php");
    exit();
  }else{
  }
}

//alert($_SESSION['cart']['cust']['expiry']);

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?> 

<?php 
  include_once('indexHTML.php');
  echo "<pre>\$_GET Contains: <pre>";
  preShow($_GET);
  echo "<pre>\$_Post Contains: <pre>";
  preShow($_POST);
  echo "<pre>\$_Session Contains: <pre>";
  preShow($_SESSION);
  //$my_bad_array = ["1", "2", "1", "4"];
  //$aarg = preshow($my_bad_array, true);
  //echo "why is \n $aarg \n not working?";

  $pricesArrayPHP = array (1, 2, 3, 4);
  php2js($pricesArrayPHP, 'pricesArrayJS');
  printMyCode();

?>

<?= console_log($eCheckName); ?>
<?= console_log($eCheckEmail); ?>
<?= console_log($eCheckMobile); ?>
<?= console_log($eCheckCard); ?>
<?= console_log($eCheckExpiry); ?>

<?= console_log($eCheck3); ?>
