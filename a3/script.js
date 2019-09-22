function hello(){
  alert("hello");
}

var navList = ["aboutusNav", "pricingNav", "nowshowingNav"];
//var navLinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
//var pageSections = document.getElementsByTagName('main')[0].getElementsByTagName('section');

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
  if(Ycoord >= pageSections[0].offsetTop && Ycoord < pageSections[pageSections.length-1].offsetTop + pageSections[pageSections.length-1].scrollHeight){
    for (var n=0; n<pageSections.length; n++){
      if (Ycoord >= pageSections[n].offsetTop && Ycoord < pageSections[n].offsetTop + pageSections[n].scrollHeight){     
        activeNav(pageSections[n].id + "Nav");
      }
    }
  }else{
    resetNavColour();
  }
}




