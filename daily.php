<?php include('./includes/header.php');?>

<div id="wrapper">

<main>
    <h1> The Frozen Spoon</h1>

<p> There’s a reason why our ice cream is so good: we make it the hard way, 
    because it’s the right way.</p>

    <h2 class="<?php echo $actDay; ?> ">
<?php echo $day; ?></h2>
<p><?php echo $details; ?></p>
<h2> Lists of daily special!</h2>

 

  <ul>
    <li><a style="color:<?php
    if ($today =='Sunday'){
        echo 'orange' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=sunday">Sunday</a></li>

    
    <li><a style="color:<?php
    if ($today =='Monday'){
        echo 'green' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=monday">Monday</a></li>

    <li><a style="color:<?php
    if ($today =='Tuesday'){
        echo 'black' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=tuesday">Tuesday</a></li>

    <li><a style="color:<?php
    if ($today =='Wednesday'){
        echo 'green' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=wednesday">Wednesday</a></li>

    <li><a style="color:<?php
    if ($today =='Thursday'){
        echo 'yellow' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=thursday">Thursday</a></li>

    <li><a style="color:<?php
    if ($today =='Friday'){
        echo 'yellow' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
     today=friday">Friday</a></li>


     
    <li><a style="color:<?php
    if ($today =='Saturday'){
        echo 'orange' ;
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?
    today=saturday">Saturday</a></li>
 






</main>
<aside>
<img src="image/italian ice.jpg"alt="italian">




 
</aside>

 </div>
 <!--end wrapper-->
 <?php
 include('./includes/footer.php');