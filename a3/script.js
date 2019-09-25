//Test function to verify this script.js is running
function hello(){
  alert("hello");
}

//Global variables and constants declared 
const days = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"]
const hours = {"12pm":"T12", "3pm":"T15", "6pm":"T18", "9pm":"T21"};
var navList = ["aboutusNav", "pricingNav", "nowshowingNav"]; 
var discountTimes = ["T12"];
var discountDays = ["MON", "TUE", "WED", "THU", "FRI"];

//Removes styling for all nav links
function resetNavColour(){
  for (var nav of navList){
    document.getElementById(nav).style = "";
  }  
}

//Removes styling for all nav links and styles active link
function activeNav(navSelected){
  resetNavColour();
  for (var nav of navList){
    if (nav == navSelected){
      document.getElementById(nav).style = "color: hsla(0, 0%, 0%, 1); background: hsla(50, 90%, 50%, 1);";
    }
  }
}

//Removes styling for all session buttons
function resetButtonColour(buttonList){
  for (var i=0; i<buttonList.length; i++){
    document.getElementById("timesButtonList").children[i].style = "";
  }  
}

//Removes styling for all session buttons and styles active button
function selectedButton(buttonSelected){
console.log(buttonSelected);
  var buttonList = buttonSelected.parentElement.children
console.log(buttonList);
  resetButtonColour(buttonList);
  for (var button of buttonList){
    if (button == buttonSelected){
      buttonSelected.style = "background: hsla(0, 0%, 0%, 1); color: hsla(50, 90%, 50%, 1);";
    }
  }
}

//Checks active link using scrollY value
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

//Updates synopsis elements and adds appropriate movie time buttons
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

//Returns day in required format using given session
function checkDay(session){
  for (var day of days){
    if (session.toUpperCase().includes(day)){
      return day;
    }
  }
}

//Returns hour in required format using given session
function checkHour(session){
  for (var hour in hours){
    if (session.includes(hour)){
      return hours[hour];
    }
  }
}

//Updates hidden form fields from movie time/session button
function updateHiddenFormFields(movieId, button){
  selectedButton(button);
  document.getElementById("bookingTitleDayTime").innerHTML = movieId.children[0].innerHTML + "\t" + button.innerHTML;
  let session = button.innerHTML;
  let movieDay = checkDay(session);
  let movieHour = checkHour(session);
  document.getElementById("movie-id").value = movieId.id;
  document.getElementById("movie-day").value = movieDay;
  document.getElementById("movie-hour").value = movieHour;
  document.getElementById("Booking-Area").style = ""; 
}

//get all the elements of class 'error', clears the inner html and removes background on all input fields
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
    document.getElementById('cust-name').style.backgroundColor='hsla(360, 100%, 70%, 0.5)';
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
  var pattern = /^(\(04\)|04|\+614)( ?\d){8}$/;
  if (pattern.test(mobileNospaces))
  {
    document.getElementById('cust-mobile-error').innerHTML="";
    document.getElementById('cust-mobile').style.backgroundColor='';
    return true;
  }
  else
  {
    document.getElementById('cust-mobile-error').innerHTML="<br>Mobile number is not an Australian number. Please re-enter.";
    document.getElementById('cust-mobile').style.backgroundColor='hsla(360, 100%, 70%, 0.5)';
    return false;
  }
}

// Check if credit card number between 14-19 digits
function cardNoCheck()
{
  var cardNo = document.getElementById('cust-card').value;
  var cardNoNospace = removeSpaces(cardNo);
  var pattern = /^( ?\d){14,19}$/;
  if (pattern.test(cardNoNospace))
  {
    document.getElementById('cust-card-error').innerHTML="";
    document.getElementById('cust-card').style.backgroundColor='';
    return true;
  }
  else
  {
    document.getElementById('cust-card-error').innerHTML="<br>Credit card number is invalid. Please re-enter.";
    document.getElementById('cust-card').style.backgroundColor='hsla(360, 100%, 70%, 0.5)';
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
  //Check if year is in future or if year is current and month is at least current month. As months are indexed at 0, we subtract 1
  if (expiryYear > new Date().getFullYear() || (expiryYear = new Date().getFullYear() && expiryMonth - 1 >= new Date().getMonth()))
  {
    document.getElementById('cust-expiry-error').innerHTML="";
    document.getElementById('cust-expiry').style.backgroundColor='';
    return true;
  }else
  {
    document.getElementById('cust-expiry-error').innerHTML="<br>Credit card has expired or invalid expiry date. Please try another card.";
    document.getElementById('cust-expiry').style.backgroundColor='hsla(360, 100%, 70%, 0.5)';
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
  // Have they ordered any tickets
    if (!purchaseCheck()) countErrors++;
  // Block or allow submission depending on number of errors
    console.log(countErrors);
    return (countErrors==0);
}

//Gets price for ticket based on day/time
function getPrice(seatType)
{ 
  var movieDay = document.getElementById("movie-day").value;
  var movieHour = document.getElementById("movie-hour").value;
  var price = seatType + "-nodisc";
  var discPrice = seatType + "-disc";
  if (discountDays.indexOf(movieDay) != -1 && discountTimes.indexOf(movieHour) != -1){
    return document.getElementById(discPrice).innerHTML;
  }else{
    return document.getElementById(price).innerHTML;
  }
}

//Calculates and updates total ticket price
function calcTotalCost()
{
  var totalPrice = 0;
  var seatInputs = document.getElementsByClassName('seats-input');
  for (var i = 0; i < seatInputs.length; i++) {
    var seatType = seatInputs[i].id.split('-')[1];
console.log(getPrice(seatType));
    totalPrice += seatInputs[i].value * getPrice(seatType);
  }
  document.getElementById("price-total").value = totalPrice.toFixed(2);
  document.getElementById("price-total").innerHTML = "Total $ " + totalPrice.toFixed(2);
}  

function purchaseCheck(){
  var priceTotal = document.getElementById("price-total").value;
  if (priceTotal >= 0){
    return true;
  } else{
    document.getElementById("price-total-error").innerHTML="<br>You have not purchased any movie tickets! Please purchase a ticket before submitting your order.";
    return false;
  }
}


