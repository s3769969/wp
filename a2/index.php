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
      <div><img src='../../media/LClogo.png' alt='Lunardo Cinema logo' height=80 />Lunardo Cinema
      </div>

    </header>

    <nav style='font-family: "Indie Flower";'>
	<ul>
  	  <li><a href="about.asp">About Us</a></li>
  	  <li><a href="pricing.asp">Pricing</a></li>
  	  <li><a href="nowshowing.asp">Now Showing</a></li>
	</ul>

    </nav>

    <main>
      <section id="aboutus"><h1>About Us</h1></section>

      <section id="pricing"><h1>Pricing</h1></section>

      <section id="nowshowing"><h1>Now Showing</h1>
      <div><div><img class="poster" src='../../media/website-under-construction.png' alt='Website Under Construction' /></div>
      <div><p>Movie Title 1	Rating</p>
	<p>Time 1 Time 2 Time 3</p></div></div>
      <div><div><img class="poster" src='../../media/website-under-construction.png' alt='Website Under Construction' /></div>
      <div><p>Movie Title 2	Rating</p>
	<p>Time 1 Time 2 Time 3</p></div></div>
      <div><div><img class="poster" src='../../media/website-under-construction.png' alt='Website Under Construction' /></div>
      <div><p>Movie Title 3	Rating</p>
	<p>Time 1 Time 2 Time 3</p></div></div>
      <div><span><img class="poster" src='../../media/website-under-construction.png' alt='Website Under Construction' /></div>
      <div><p>Movie Title 4	Rating</p>
	<p>Time 1 Time 2 Time 3</p></div></div>

      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>

    </main>

    <footer>
      <div id="email">Email: general_inquiries@lunardo.cinemas.com.au</div>
      <div id="phone">Phone: (03) 9876 2345</div>
      <div id="location">Location: 23 Country Road, Small Town, VIC 1010</div>
      <div class="spacer"> </div>
      <div id="my details">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Sebastian Wisidagama, 3769969. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. <a href="https://github.com/s3769969/wp" target=_blank">GitHub repository</a></div>
      <div id"disclaimer">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

    </footer>

  </body>
</html>
