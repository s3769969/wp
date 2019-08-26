<!DOCTYPE html>
<html lang='en'>

<style>
.parallax { 
  /* The image used */
  background-image: url("../../media/LClogo.png");

  /* Set a specific height */
  height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<!-- Container element -->
<div class="parallax"></div>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <link href='//fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

  </head>

  <body>

    <header>
      <div>
	<span>Lunardo Cinema</span>
	<img src='../../media/LClogo.png' alt='Lunardo Cinema logo' height=80 />
      </div>

    </header>

    <nav style='font-family: "Indie Flower";'>
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
	  <p>Check out the extensive improvements and renovations. More movie screens, bigger screens, bigger rooms, better sound!</p>
	  <video class="media-element" controls autoplay="autoplay" loop="loop" source src="../../media/dolby.mp4"></video>
	</div>
	<div>
	  <h1>Upgraded seats</h1>
	  <img src='../../media/seat.jpg' alt='Standard seat image' height=80 />
	  <p>Our new Standard seats</p>
	  <img src='../../media/premiumseat.png' alt='Premium seat image' height=80 />
	  <p>Our new First-Class seats</p>
	  <p>Our new seats are now more comfortable, with full reclining seats available for First Class screenings</p>
	</div>
	<div><h1>3D Dolby Vision projection and Dolby Atmos sound</h1>	
	  <video class="fp-engine" autoplay="autoplay" loop="loop" preload="auto" src="../../media/dolbyatmos.mp4"></video>
	  <p>Check out true cinematic visuals and sound for that <a href="https://www.dolby.com/us/en/cinema">Dolby experience</a></p>
	</div>

      </section>	

      <section id="pricing">
	<h1>Pricing</h1>
	<div>Seat Type, Seat code, Discount Pricing*, Standard Pricing</div>
	<div>Standard Adult, STA, 14.00, 19.80</div>
	<div>Standard Concession, STP, 12.50, 17.50</div>
	<div>Standard Child, STC, 11.00, 15.30</div>
	<div>First-Class Adult, FCA, 24.00, 30.00</div>
	<div>First-Class Concession, FCP, 22.50, 27.00</div>
	<div>First-Class Child, FCC, 21.00, 24.00</div>
	<div>*Discount Pricing applies all day Monday and Wednesday, and 12pm on Weekdays</div>

      </section>

      <section id="nowshowing">
	<h1>Now Showing</h1>
	<div id="ACT">
	  <span><img class="poster" src='../../media/endgameposter.jpg' alt='Website Under Construction' /></span>
          <span>
	    <p>Avengers: Endgame	PG-13</p>
	    <p>Mon - Tues - Wed 9pm Thurs 9pm Fri 9pm Sat 6pm Sun 6pm</p>
	  </span>
	</div>

	<div id="RMC">
	  <span><img class="poster" src='../../media/topendweddingposter.jpg' alt='Website Under Construction' /></span>
          <span>
	    <p>Top End Wedding	M</p>
	    <p>Mon 6pm Tues 6pm Wed - Thurs - Fri - Sat 3pm Sun 3pm</p>
	  </span>
	</div>

	<div id="ANM">
	  <span><img class="poster" src='../../media/dumboposter.jpg' alt='Website Under Construction' /></span>
          <span>
	    <p>Dumbo	PG</p>
	    <p>Mon 12pm Tues 12pm Wed 6pm Thurs 6pm Fri 6pm Sat 12pm Sun 12pm</p>
	  </span>
	</div>

	<div id="AHF">
	  <span><img class="poster" src='../../media/happyprinceposter.jpg' alt='Website Under Construction' /></span>
          <span>
	    <p>The Happy Prince	R</p>
	    <p>Mon - Tues - Wed 12pm Thurs 12pm Fri 12pm Sat 9pm Sun 9pm</p>
	  </span>
	</div>
	<div>
	  <h1>Avengers: Endgame	PG-13</h1>
	  <iframe width="" height="" src="https://www.youtube.com/embed/lLfKgylPkm4" frameborder="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
	  <p>Plot Description: After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...</p>
	  <div>
	  <p>Make a Booking</p>
	  <ul>
	    <button>Wed 9pm</button>
	    <button>Thurs 9pm</button>
	    <button>Fri 9pm</button>
	    <button>Sat 6pm</button>
	    <button>Sun 6pm</button>
	  </ul>
	  </div>
	</div>
	</section>

        
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

    </footer>

  </body>
</html>
