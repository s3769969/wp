function hello(){
  alert("hello");
}

const days = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"]
const hours = {"12pm":"T12", "3pm":"T15", "6pm":"T18", "9pm":"T21"};
var navList = ["aboutusNav", "pricingNav", "nowshowingNav"];

function resetNavColour(){
  for (var nav of navList){
    document.getElementById(nav).style = "";
  }  
}

function activeNav(navSelected){
  resetNavColour();
  for (var nav of navList){
    if (nav == navSelected){
      document.getElementById(nav).style = "color: hsla(0, 0%, 0%, 1); background: hsla(50, 90%, 50%, 1);";
    }
  }
}

function checkActiveSection(Ycoord, pageSections){
  if(Ycoord >= pageSections[0].offsetTop -3 && Ycoord < pageSections[pageSections.length-1].offsetTop + pageSections[pageSections.length-1].scrollHeight){
    for (var n=0; n<pageSections.length; n++){
      if (Ycoord >= pageSections[n].offsetTop && Ycoord < pageSections[n].offsetTop + pageSections[n].scrollHeight){     
        activeNav(pageSections[n].id + "Nav");
      }
    }
  }else{
    resetNavColour();
  }
}

function updateSynopsis(thisMovie){
  document.getElementById("movieTitle").innerHTML = thisMovie.children[0].innerHTML;
  document.getElementById("trailer").src = thisMovie.children[1].innerHTML;
  document.getElementById("synopsisText").innerHTML = thisMovie.children[2].innerHTML;
  document.getElementById("timesButtonList").innerHTML = "";
  var movieId = thisMovie.id;
  var movieTimes = thisMovie.children[3].children;
  for (var time of movieTimes){
    let session = String(time.innerHTML);
    if(session.includes("-")){
    }else{
      document.getElementById("timesButtonList").innerHTML += "<button onclick=\"updateHiddenFormFields(" + movieId + ", this)\">" + session + "</button>";
    }
  }
}

function checkDay(session){
  for (var day of days){
    if (session.toUpperCase().includes(day)){
      return day;
    }
  }
}

function checkHour(session){
  for (var hour in hours){
    if (session.includes(hour)){
      return hours[hour];
    }
  }
}

function updateHiddenFormFields(movieId, button){
  let session = button.innerHTML;
  let movieDay = checkDay(session);
  let movieHour = checkHour(session);
  document.getElementById("movie-id").value = movieId.id;
  document.getElementById("movie-day").value = movieDay;
  document.getElementById("movie-hour").value = movieHour;
}









//get all the elements of class 'error', clear the inner html
function clearErrors()
{
  var allErrors = document.getElementsByClassName('error');
  for (var i = 0; i < allErrors.length; i++) {
    allErrors[i].innerHTML = "";
  }
  var allInputs = document.getElementsByTagName('input');
  for (i = 0; i < allInputs.length; i++) {
    allInputs[i].style.removeProperty("background-color");
  }
}

// Check the name
function nameCheck()
{
  var name = document.getElementById('cust-name').value;
  var pattern = /^[a-zA-Z \-.']{1,50}$/;
  if (pattern.test(name))
  {
    document.getElementById('cust-name-error').innerHTML="";
    document.getElementById('cust-name').style.backgroundColor='';
    return true;
  }
  else
  {
    document.getElementById('cust-name-error').innerHTML="<br>Name entered is invalid. Please re-enter.";
    document.getElementById('cust-name').style.backgroundColor='#fee';
    return false;
  }
}

//Removes spaces and returns string
function removeSpaces(input)
{
  var units = input.split(" ");
  var inputNospaces = "";
  for (var unit of units){
    unit.trim();
    inputNospaces += unit;
  }
  return inputNospaces;
}

// Check the mobile number
function mobileCheck()
{
  var mobile = document.getElementById('cust-mobile').value;
  var mobileNospaces = removeSpaces(mobile);
  var pattern = /^(\(04\)|04|\+614)(\d){8}$/;
  if (pattern.test(mobile))
  {
    document.getElementById('cust-mobile-error').innerHTML="";
    document.getElementById('cust-mobile').style.backgroundColor='';
    return true;
  }
  else
  {
    document.getElementById('cust-mobile-error').innerHTML="<br>Mobile number is not an Australian number. Please re-enter.";
    document.getElementById('cust-mobile').style.backgroundColor='#fee';
    return false;
  }
}

// Check if credit card number between 14-19 digits
function cardNoCheck()
{
  var cardNo = document.getElementById('cust-card').value;
  var cardNoNospace = removeSpaces(cardNo);
  var pattern = /^(\d){14,19}$/;
  if (pattern.test(cardNoNospace))
  {
    document.getElementById('cust-card-error').innerHTML="";
    document.getElementById('cust-card').style.backgroundColor='';
    return true;
  }
  else
  {
    document.getElementById('cust-card-error').innerHTML="<br>Credit card number is invalid. Please re-enter.";
    document.getElementById('cust-card').style.backgroundColor='#fee';
    return false;
  }
}

// Check the card expiry date
function expiryCheck()
{
  var date = document.getElementById('cust-expiry').value;
  var elements = date.split('-');
  var expiryMonth = elements[1];
  var expiryYear = elements[0];
  if (expiryMonth[0] == 0){
    expiryMonth = expiryMonth[1];
  }
console.log(expiryMonth);
console.log(expiryYear);
  //Check if year is in future or if year is current and month is at least current month. As months are indexed at 0, we subtract 1
  if (expiryYear > new Date().getFullYear() || (expiryYear = new Date().getFullYear() && expiryMonth - 1 >= new Date().getMonth()))
  {
console.log(new Date().getMonth());
    document.getElementById('cust-expiry-error').innerHTML="";
    document.getElementById('cust-expiry').style.backgroundColor='';
    return true;
  }else
  {
    document.getElementById('cust-expiry-error').innerHTML="<br>Credit card has expired or invalid expiry date. Please try another card.";
    document.getElementById('cust-expiry').style.backgroundColor='#fee';
    return false;
  }
}

// Checks all form fields are valid
function formValidate() 
{
  // clear all errors, even if it's the first run
    clearErrors();
    var countErrors=0;
  // Is their first name using english characters and/or punctuation
    if (!nameCheck()) countErrors++;
  // Is their mobile number a valid Australian number
    if (!mobileCheck()) countErrors++;
  // Is credit card number between 14-19 digits
    if (!cardNoCheck()) countErrors++;
  // Is their credit card not yet expired
    if (!expiryCheck()) countErrors++;
  // Block or allow submission depending on number of errors
    console.log(countErrors);
    return (countErrors==0);
}

  




