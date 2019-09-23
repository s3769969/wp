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





