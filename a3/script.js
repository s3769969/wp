function hello(){
  alert("hello");
}

var navList = ["aboutusNav", "pricingNav", "nowshowingNav"];

function resetNavColour(){
  for (var nav of navList){
    document.getElementById(nav).style = "";
  }  
}

function activeNav(navSelected){
  resetNavColour();
  for (var nav of navList){
    if (nav == navSelected.id){
      document.getElementById(nav).style = "color: hsla(0, 0%, 0%, 1); background: hsla(50, 90%, 50%, 1);";
    }
  }
}





