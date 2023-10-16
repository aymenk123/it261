
<!DOCTYPE html>
<html>
<head>
<title>IT261</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> (Aymen IT261 Portal Page)</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Welcome</a></li>
       <li><a href="about.php/.php">About</a></li>
       <li><a href="daily.php/index.php">Daily</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="gallery.php/.php">Gallery</a></li>
      <li><a href="project.php/.php">Project</a></li>
 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>
    
 

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
    
        <img class="img-desktop2" src="image/desktop2.jpg" alt="my screenshot2">

 
<p>My name is Aymen khaleefa,I'm a web designer student at Seatttle Central College.</p>
 <p>My hoobby is playing and watching Soccer</p>
 <p>I chose to be a web designer becase I love drawing and doodling ever since I was a kid.</p>
 <p>Graphic designing makes my interest a profession and lets me create impressive designs that impact people.</p>
</section>
    <img class="img-desktop" src="image/desktop.jpg" alt="my screenshot">
    <li><a href="currency.php/.php">currency.php</a></li>
    <li><a href="currency logic.php/.php">currency logic.php</a></li>
    <li><a href="var.php/.php">var.php</a></li>
    <li><a href="Var2.php/.php">var2.php</a></li>
    <li><a href="heredoc.php/.php">heredoc.php</a></li>

<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
     <img class="img-desktop1" src="image/desktop1.jpg" alt="my screenshot1">
    <p> Weekly Class Exercise</p>
    <p>Week 2</p>
     <li><a href="index.php" class="selected">MAMP-HW1</a></li>
         <li><a href="index.php" class="selected">Portal Page-HW2</a></li>
         <li><a href="index.php" class="selected">week 2 Class Execises</a></li>
         <li><a href="index.php" class="selected">Week 2 Class Treasure Hunt</a></li>
    <p>Week 3</p>
         <li><a href="index.php" class="selected">Using a Switch-HW3- in your Website</a></li>
         <li><a href="index.php" class="selected">week 3 Class Exercises</a></li>
         <li><a href="index.php" class="selected">week 3 Treasure Hunt</a></li>
    <P>Week 4</P>
             <li><a href="index.php" class="selected">Troubleshootinh-HW4</a></li>
         <li><a href="index.php" class="selected">Week 4 Class Exercises</a></li>
         <li><a href="index.php" class="selected">Week 4 Treasure Hunt</a></li>
    <p> Week 5</p>
         <li><a href="index.php" class="selected">Calculating Form-HW5</a></li>
         <li><a href="index.php" class="selected">Currency- if/else- Extra credit(20 points)</a></li>
         <li><a href="index.php" class="selected">Week 5 Class Exercise</a></li>
         <li><a href="index.php" class="selected">Week 5 Treasure Hunt</a></li>
    <p> Week 6</p>
         <li><a href="index.php" class="selected">week 6 Class Exercises</a></li>
         <li><a href="index.php" class="selected">Week 6 Treasure Hunt</a></li>
    <p> Week 7</p>
         <li><a href="index.php" class="selected">Emailable form HW 6</a></li>
         <li><a href="index.php" class="selected">Week 7- Treasure Hunt</a></li>
         <li><a href="index.php" class="selected">Week 7 Class Exercises1</a></li>
         <li><a href="index.php" class="selected">Using disscussions and Other!</a></li>
   
    </aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
  <footer>
      <p><small>&copy; 2023-<?=date("Y")?> by 
          <a href="contact.php">Aymen</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    



  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
 </script>
</body>
</html>
