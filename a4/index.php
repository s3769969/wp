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
$posts = [$_POST['movie']['id'], $_POST['movie']['day'], $_POST['movie']['hour'], $_POST['seats']['STA'], $_POST['seats']['STP'], $_POST['seats']['STC'], $_POST['seats']['FCA'], $_POST['seats']['FCP'], $_POST['seats']['FCC'], $_POST['cust']['name'], $_POST['cust']['email'], $_POST['cust']['mobile'], $_POST['cust']['card'], $_POST['cust']['expiry']];
$requiredFields = [$_POST['movie']['id'], $_POST['movie']['day'], $_POST['movie']['hour'], $_POST['cust']['name'], $_POST['cust']['email'], $_POST['cust']['mobile'], $_POST['cust']['card'], $_POST['cust']['expiry']];

//sanitise potential malicious code
sanitise($posts);

// handle POST data, if found 
$errorsFound = 0;
$eCheck1 = $errorsFound;
if (!empty($_POST)) 
{ 
  $errorsFound += emptyFields($requiredFields);
  $eCheck2 = $errorsFound;
  validName() ? : $errorsFound++;
  $eCheckName = $errorsFound;
  validEmail() ? : $errorsFound++;
  $eCheckEmail = $errorsFound;
  validMobile() ? : $errorsFound++;
  $eCheckMobile = $errorsFound;
  validCard() ? : $errorsFound++;
  $eCheckCard = $errorsFound;
  validExpiry() ? : $errorsFound++;
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
  preShow($_GET);
  preShow($_POST);
  preShow($_SESSION);
  //$my_bad_array = ["1", "2", "1", "4"];
  //$aarg = preshow($my_bad_array, true);
  //echo "why is \n $aarg \n not working?";

  $pricesArrayPHP = array (1, 2, 3, 4);
  php2js($pricesArrayPHP, 'pricesArrayJS');
  printMyCode();

?>

<?= console_log($eCheck1); ?>
<?= console_log($eCheck2); ?>

<?= console_log($eCheckName); ?>
<?= console_log($eCheckEmail); ?>
<?= console_log($eCheckMobile); ?>
<?= console_log($eCheckCard); ?>
<?= console_log($eCheckExpiry); ?>

<?= console_log($eCheck3); ?>