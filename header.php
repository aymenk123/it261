<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of Our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of Our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily page of Our Website Project';
     $body = 'daily inner';
    break;

    case 'contact.php' :
    $title = 'Contact  page of Our Website Project';
     $body = 'contact inner';
     break;

    case 'gallery.php' :
    $title = 'Gallery page of Our Website Project';
     $body = 'gallery inner';
     break;
}    
//  our navigational array!
$nav =array(
    'index.php' => 'Home',
    'about.php'=>  'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',

);

// this is the beginnig of the swithch for homework 3

if(isset($_GET['today'])){
    $today= $_GET['today'];
} else{
    $today= date('l');
}

switch($today) {
    case 'Saturday' :
        $actDay= 'black';
        $day='hhghhhhggggggggg'
        $details ='ggggggggggggggggggggggggggggggg';
        $picture=''
        $altTag=''
        $background='blood'
        break;
        

}



?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
     initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="css/styles.css" type="text/css"
     rel="stylesheet">
</head>

<body class="<?php echo $body    ;?>">
    
 <header>
    <div class="inner header">
        <a href="index.php">
            <img id="logo"
            src="image/logo.png"alt="logo">
        </a>
      <!--  <nav>
            <ul>
             <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>


            </ul>
        </nav>  -->

        <nav>
        <ul>
        <?php
        foreach ($nav as $key => $value)  {
            if (THIS_PAGE == $key)  {
                echo '<li><a style="color:red;" href=" '.$key.' ">
                '.$value.'</a></li>';
               }else {
                echo '<li><a style="color:green;" href=" '.$key.' ">
                '.$value.'</a></li>';

            }
           
            }  // end foreach 
          ?>
        </ul>
        </nav>
    
         </div>
      <!--end inner header-->
    
    
</header> 
