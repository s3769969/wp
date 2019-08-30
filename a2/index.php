<!DOCTYPE html>
<html lang='en'>

<div id="parallaxTop"></div>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <link href='//fonts.googleapis.com/css?family=Convergence' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">  </head>

  <body>

    <header>
      <div>
	<span>Lunardo Cinema</span>
	<img src='../../media/LClogo.png' alt='Lunardo Cinema logo' height=80 />
      </div>

    </header>

    <nav>
	<ul>
  	  <li><a href="#aboutus">About Us</a></li>
  	  <li><a href="#pricing">Pricing</a></li>
  	  <li><a href="#nowshowing">Now Showing</a></li>
	</ul>

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
             <div class="rowOdd">
                <div class="cell" >Seat Type</div>
                <div class="cell">Discount Pricing*</div>
                <div class="cell">Standard Pricing</div>
             </div>
            <div class="row">
                  <div class="cell">Standard Adult</div>
                <div class="cell">14.00</div>
                <div class="cell">19.80</div>
            </div>
            <div class="rowOdd">
                <div class="cell">Standard Concession</div>
                <div class="cell">12.50</div>
                <div class="cell">17.50</div>
           </div>
            <div class="row">
                <div class="cell">Standard Child</div>
                <div class="cell">11.00</div>
                <div class="cell">15.30</div>
           </div>
		<div class="rowOdd">
                <div class="cell">First-Class Adult</div>
                <div class="cell">24.00</div>
                <div class="cell">30.00</div>
           </div>
		<div class="row">
                <div class="cell">First-Class Concession</div>
                <div class="cell">22.50</div>
                <div class="cell">27.00</div>
           </div>
		<div class="rowOdd">
                <div class="cell">First-Class Child</div>
                <div class="cell">21.00</div>
                <div class="cell">24.00</div>
           </div>
	<div class="spacer"></div>
	<div class="rowOdd">*Discount Pricing applies all day Monday and Wednesday, AND 12pm on Weekdays</div>
	</div>

      </section>

      <section id="nowshowing">
	<h1>Now Showing</h1>
	<div id="ACT">
	  <img class="poster" src='../../media/endgameposter2.jpg' alt='endgame poster' />
	  <div><h2>Avengers: Endgame	(PG-13)</h2><br>
	  <p><br>Mon -<br>Tues -<br>Wed 9pm<br>Thurs 9pm<br>Fri 9pm<br>Sat 6pm<br>Sun 6pm</p>
	  </div>
	</div>

	<div id="RMC">
	  <img class="poster" src='../../media/topendweddingposter.jpg' alt='top end wedding poster' />	
	  <div><h2>Top End Wedding	(M)</h2><br>
	  <p><br>Mon 6pm <br>Tues 6pm <br>Wed - <br>Thurs - <br>Fri - <br>Sat 3pm <br>Sun 3pm</p>
	  </div>
	</div>

	<div id="ANM">
	  <img class="poster" src='../../media/dumboposter.jpg' alt='dumbo poster' />
	  <div><h2>Dumbo	(PG)</h2><br>
	  <p><br>Mon 12pm <br>Tues 12pm <br>Wed 6pm <br>Thurs 6pm <br>Fri 6pm <br>Sat 12pm <br>Sun 12pm</p>
	  </div>
	</div>

	<div id="AHF">
	  <img class="poster" src='../../media/happyprinceposter.jpg' alt='happy prince poster' />
	  <div><h2>The Happy Prince	(R)</h2><br>
	  <p><br>Mon - <br>Tues - <br>Wed 12pm <br>Thurs 12pm <br>Fri 12pm <br>Sat 9pm <br>Sun 9pm</p>
	  </div>
	</div>
	</section>
	
	<article id='Synopsis'>
	  <h1>Avengers: Endgame	(PG-13)</h1>
	  <iframe id="trailer" width="" height="360px" src="https://www.youtube.com/embed/lLfKgylPkm4" frameborder="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  <div id="synopsistext"><h2>Plot Description:</h2>
	  <p>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...</p>
	  </div>
	  <div id="booking">
	  <h2>Make a Booking</h2>
	  <ul>
	    <button>Wed 9pm</button>
	    <button>Thurs 9pm</button>
	    <button>Fri 9pm</button>
	    <button>Sat 6pm</button>
	    <button>Sun 6pm</button>
	  </ul>
	  </div>
	</article>

        
      <article id='Booking Area'>
	<h1>Booking Area</h1>
        <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
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
