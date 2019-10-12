<!DOCTYPE html>
<html lang='en'>

<div id="parallaxTop"></div>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 4</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script type="text/javascript" src='../wireframe.js'></script>
    <script type="text/javascript" src='script.js'></script>
    <!-- <script type="text/javascript"> function hello(){alert("hello");}</script> -->
    <noscript>Your browser does not support JavaScript.<br> Please enable JavaScript in browser settings.</noscript>
    <link href='//fonts.googleapis.com/css?family=Convergence' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <script>
window.onscroll = function(){ var pageSections = document.getElementsByTagName('main')[0].getElementsByTagName('section');
checkActiveSection(window.scrollY, pageSections);}
    </script>
  </head>

  <body onload="updateSynopsis(ACT); calcTotalCost();">

    <header>
      <div>
	<span>Lunardo Cinema</span>
	<img onclick="hello()" src='../../media/LClogo.png' alt='Lunardo Cinema logo' height=80 />
      </div>

    </header>

    <nav>
	<a id="aboutusNav" href="#aboutus" onclick="activeNav(aboutusNav.id)">About Us</a>
	<a id="pricingNav" href="#pricing" onclick="activeNav(pricingNav.id)">Pricing</a>
	<a id="nowshowingNav" href="#nowshowing" onclick="activeNav(nowshowingNav.id)">Now Showing</a>
    </nav>

    <main>
      <section id="aboutus"><h1>About Us</h1>
	<div>
	  <h1>New Facilities</h1>
	  <p>Check out the extensive improvements and renovations. More movie screens, bigger screens, bigger rooms and better sound!</p>
	  <video class="video" poster="../../media/4DX.jpg" controls loop="loop" source src="../../media/dolby.mp4"></video>
	</div>
	<div>
	  <h1>Upgraded seats</h1>
	  <p>Our new seats are now more comfortable, with full reclining seats available for First Class screenings</p>
	  <div class = "seats">
	    <img class="seatimg" src='../../media/seat.jpg' alt='Standard seat image' height=80 />
	    <p>Our new Standard seats</p>
	  </div>
	  <div class = "seats">
	    <img class="seatimg" src='../../media/premiumseat.png' alt='Premium seat image' height=80 />
	    <p>Our new First-Class seats</p>
	  </div>
	</div>
	<div><h1>3D Dolby Vision projection and Dolby Atmos sound</h1>	
	  <video class="video" poster="../../media/dolbyatmos.jpg" controls loop="loop" src="../../media/dolbyatmos.mp4"></video>
	  <p>Check out true cinematic visuals and sound for that <a href="https://www.dolby.com/us/en/cinema">Dolby experience</a></p>
	</div>

      </section>	

      <section id="pricing">
	<h1>Pricing</h1>

	<div class="table">
             <div id="leadingRow" class="rowOdd">
                <div class="cell" >Seat Type</div>
                <div class="cell">Discount Pricing*</div>
                <div class="cell">Standard Pricing</div>
             </div>
            <div class="row">
                <div class="cell">Standard Adult</div>
                <div id="STA-disc" class="cell" value="14.00">14.00</div>
                <div id="STA-nodisc" class="cell" value="19.80">19.80</div>
            </div>
            <div class="rowOdd">
                <div class="cell">Standard Concession</div>
                <div id="STP-disc" class="cell" value="12.50">12.50</div>
                <div id="STP-nodisc" class="cell" value="17.50">17.50</div>
           </div>
            <div class="row">
                <div class="cell">Standard Child</div>
                <div id="STC-disc" class="cell" value="11.00">11.00</div>
                <div id="STC-nodisc" class="cell" value="15.30">15.30</div>
           </div>
		<div class="rowOdd">
                <div class="cell">First-Class Adult</div>
                <div id="FCA-disc" class="cell" value="24.00">24.00</div>
                <div id="FCA-nodisc" class="cell" value="30.00">30.00</div>
           </div>
		<div class="row">
                <div class="cell">First-Class Concession</div>
                <div id="FCP-disc" class="cell" value="22.50">22.50</div>
                <div id="FCP-nodisc" class="cell" value="27.00">27.00</div>
           </div>
		<div class="rowOdd">
                <div class="cell">First-Class Child</div>
                <div id="FCC-disc" class="cell" value="21.00">21.00</div>
                <div id="FCC-nodisc" class="cell" value="24.00">24.00</div>
           </div>
	<div class="spacer"></div>
	<div class="rowOdd">*Discount Pricing applies all day Monday and Wednesday, AND 12pm on Weekdays</div>
	</div>

      </section>

      <section id="nowshowing">
	<h1>Now Showing</h1>
	<div id="ACT" onclick="updateSynopsis(ACT); showSynopsis();">
	  <div id="ACTTitle" style="display:none">Avengers: Endgame (PG-13)</div>
	  <div id="ACTTrailer" style="display:none">https://www.youtube.com/embed/lLfKgylPkm4</div>
	  <div id="ACTSynopsis" style="display:none">After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...</div>
	  <div id="ACTTimes" style="display:none"><span>Mon -</span><span>Tues -</span><span>Wed 9pm</span><span>Thurs 9pm</span><span>Fri 9pm</span><span>Sat 6pm</span><span>Sun 6pm</span></div>
	  <img class="poster" src='../../media/endgameposter2.jpg' alt='endgame poster' />
	  <div><h2>Avengers: Endgame (PG-13)</h2><br>
	  <p><br>Mon -<br>Tues -<br>Wed 9pm<br>Thurs 9pm<br>Fri 9pm<br>Sat 6pm<br>Sun 6pm</p>
	  </div>
	</div>>

	<div id="RMC" onclick="updateSynopsis(RMC); showSynopsis();">
	  <div id=RMCTitle" style="display:none">Top End Wedding (M)</div>
	  <div id="RMCTrailer" style="display:none">https://www.youtube.com/embed/j5ZXCCM-IVo</div>
	  <div id="RMCSynopsis" style="display:none">Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.</div>
	  <div id="RMCTimes" style="display:none"><span>Mon 6pm</span><span>Tues 6pm</span><span>Wed -</span><span>Thurs -</span><span>Fri -</span><span>Sat 3pm</span><span>Sun 3pm</span></div>  
	  <img class="poster" src='../../media/topendweddingposter.jpg' alt='top end wedding poster' />	
	  <div><h2>Top End Wedding (M)</h2><br>
	  <p><br>Mon 6pm <br>Tues 6pm <br>Wed - <br>Thurs - <br>Fri - <br>Sat 3pm <br>Sun 3pm</p>
	  </div>
	</div>

	<div id="ANM" onclick="updateSynopsis(ANM); showSynopsis();">
	  <div id="ANMTitle" style="display:none">Dumbo (PG)</div>
	  <div id="ANMTrailer" style="display:none">https://youtube.com/embed/7NiYVoqBt-8</div>
	  <div id="ANMSynopsis" style="display:none">A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer.</div>
	  <div id="ANMTimes" style="display:none"><span>Mon 12pm</span><span>Tues 12pm</span><span>Wed 6pm</span><span>Thurs 6pm</span><span>Fri 6pm</span><span>Sat 12pm</span><span>Sun 12pm</span></div>
	  <img class="poster" src='../../media/dumboposter.jpg' alt='dumbo poster' />
	  <div><h2>Dumbo (PG)</h2><br>
	  <p><br>Mon 12pm <br>Tues 12pm <br>Wed 6pm <br>Thurs 6pm <br>Fri 6pm <br>Sat 12pm <br>Sun 12pm</p>
	  </div>
	</div>

	<div id="AHF" onclick="updateSynopsis(AHF); showSynopsis();">
	  <div id="AHFTitle" style="display:none">The Happy Prince (R)</div>
	  <div id="AHFTrailer" style="display:none">https://youtube.com/embed/4HmN9r1Fcr8</div>
	  <div id="AHFSynopsis" style="display:none">The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor.</div>
	  <div id="AHFTimes" style="display:none"><span>Mon -</span><span>Tues -</span><span>Wed 12pm</span><span>Thurs 12pm</span><span>Fri 12pm</span><span>Sat 9pm</span><span>Sun 9pm</span></div>  
	  <img class="poster" src='../../media/happyprinceposter.jpg' alt='happy prince poster' />
	  <div><h2>The Happy Prince (R)</h2><br>
	  <p><br>Mon - <br>Tues - <br>Wed 12pm <br>Thurs 12pm <br>Fri 12pm <br>Sat 9pm <br>Sun 9pm</p>
	  </div>
	</div>
	</section>
	
	<article id='Synopsis'>
	  <h1 id="movieTitle">Avengers: Endgame	(PG-13)</h1>
	  <iframe id="trailer" width="" height="360px" src="https://www.youtube.com/embed/lLfKgylPkm4" frameborder="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  <div id="synopsisDiv"><h2>Plot Description:</h2>
	  <p id="synopsisText">After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...</p>
	  </div>
	  <div id="booking">
	  <h2>Make a Booking</h2>
	  <ul id="timesButtonList">
	    <button>Wed 9pm</button>
	    <button>Thurs 9pm</button>
	    <button>Fri 9pm</button>
	    <button>Sat 6pm</button>
	    <button>Sun 6pm</button>
	  </ul>
	  </div>
	</article>

      <article id='Booking-Area'>
	<h1>Booking Area</h1>

	<div id="form" class="form">
	<h2 id=bookingTitleDayTime></h2>
        <form id= bookingForm name="booking-form" method="post" action="index.php">
	
	<input id="movie-id" type="hidden" name="movie[id]" value="">
	<input id="movie-day" type="hidden" name="movie[day]" value="">
	<input id="movie-hour" type="hidden" name="movie[hour]" value="">

	<div id="form-left" class="form">
	<label id="sBookingLabel" for="sBooking">Standard </label>
	<div id="sBooking">
	<label for="seats-STA">Adults  </label>
	<select id="seats-STA" name="seats[STA]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-STA-error"></span>
	<br>
	<label for="seats-STP">Concession  </label>
	<select id="seats-STP" name="seats[STP]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-STP-error"></span>
	<br>
	<label for="seats-STC">Children  </label>
	<select id="seats-STC" name="seats[STC]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-STC-error"></span>
	<br>
	</div>
	<label id="fcBookingLabel" for="fcBooking">First Class </label>
	<div id="fcBooking">
	<label for="seats-FCA">Adults  </label>
	<select id="seats-FCA" name="seats[FCA]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-FCA-error"></span>
	<br>
	<label for="seats-FCP">Concession  </label>
	<select id="seats-FCP" name="seats[FCP]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-FCP-error"></span>
	<br>
	<label for="seats-FCC">Children  </label>	
	<select id="seats-FCC" name="seats[FCC]" class="seats-input" onchange="calcTotalCost()">
	 <option value="">Please Select</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	</select>
	<span class="error" id="seats-FCC-error"></span>
	<br>
	</div>

	<label >Total $ </label>
	<label id="price-total" name="price[total]" value="initial"></label>
	<span class="error" id="price-total-error"></span>
	<br>
	</div>
	<div id="form-right" class="form">
	<label for="cust-name">Name  </label>
	<input id="cust-name" type="text" name="cust[name]" placeholder="John Smith">
	<span class="error" id="cust-name-error"></span>
	<br>
	<label for="cust-email">Email  </label>
	<input id="cust-email" type="email" name="cust[email]" placeholder="john.smith@gmail.com">
	<span class="error" id="cust-email-error"></span>
	<br>
	<label for="cust-mobile">Mobile  </label>
	<input id="cust-mobile" type="tel" name="cust[mobile]" placeholder="Enter Mobile Number">
	<span class="error" id="cust-mobile-error"></span>
	<br>
	<label for="cust-card">Credit Card  </label>
	<input id="cust-card" type="text" name="cust[card]" placeholder="Enter CC Number">
	<span class="error" id="cust-card-error"></span>
	<br>
	<label for="cust-expiry">Expiry  </label>
	<input id="cust-expiry" type="month" name="cust[expiry]" min="">
	<span class="error" id="cust-expiry-error"></span>
	<br>
        <br>
	<br>
	<button id='order-button' type="submit" value="order">Order</button>
	<span class="error" id="order-error"></span>
	<br>
	</div>
	</form>
	</div>  
      </article>

    </main>

    <footer>
      <div id="cinema details">
        <ul>
          <li>Email: general_inquiries@lunardo.cinemas.com.au</li>
          <li>Phone: (03) 9876 2345</li>
          <li>Location: 123 Country Road, Small Town, VIC 1010</li>
        </ul>
      </div>
      <div class="spacer"> </div>
      <div id="my details">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Sebastian Wisidagama, 3769969. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. <a href="https://github.com/s3769969/wp" target=_blank">GitHub repository</a></div>
      <div id"disclaimer">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	<div class="spacer"> </div>
	<div class="spacer"> </div>
	<div class="spacer"> </div>

    </footer>

  </body>
</html>
