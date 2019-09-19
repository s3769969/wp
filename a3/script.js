activeNavClick(){
  changeNav(){};
};

activeNavScroll(){
  gety(){};
  checkNav(){};
  changeNav(){};
};

selectSynopsis(){
  getMovie(){};
  makeAllInvisible(){};
  changeMovieVisible(){};
};

updateHidden(){
  getMovieDayTime(){};
  changeHiddenFields(){}
};

checkFormFields(){
  checkSTA(){};
  checkSTP(){};
  checkSTC(){};
  checkFCA(){};
  checkFCP(){};
  checkFCC(){};
  checkCustName(){};
  checkCustEmail(){};
  checkCustMobile(){};
  checkCustExpiryMonth(){};
  checkCustExpiryYear(){};
  if(error > 0){disableSubmit};
  else{enableSubmit};
};

calcTotalCost(){
  var totalCost{};
  countSTA(){};
  countSTP(){};
  countSTC(){};
  countFCA(){};
  countFCP(){};
  if(discount){
  calculatePrice(countFCC(){}, parseInt(document.getElementById('FCC-disc').value));}
  else{ calculatePrice(countFCC(){}, parseInt(document.getElementById('FCC-nodisc').value));}
};

clickSubmit(){

};


function calculatePrice(seatType, seatPrice) {
  var numSeats = parseInt(document.getElementById(seatType).value);
  document.getElementById(seatType).focus();
  document.getElementById(seatType).select();
  var seatPrice = document.getElementById(seatPrice).value;
  var price = seatPrice * numSeats;
  document.getElementById('price').innerHTML = salePrice.toFixed(2);
  return true;
}

