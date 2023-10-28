<?php
// this file will demonstrate for loop and in addition to placing your php inside your HTML!!
//  The for loop -Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration;}

// celcius and fahrenheit 
// $far = ($celcius *9/5) + 32;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>

<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    table  {
        width:500px;
        margin:20px auto;
        border-collapse: collapse;
        border:1px solid lightblue;
    
    }

    td,th {
        border:1px solid lightblue;
        border-collapse:collapse;
        padding:5px;
    }
    h1,h2{
        text-align:center;
        margin:10px 0;
        color:blue;
    }
    </style>
    </head>
<body>
    <h1> My Celcius / Fahrenheit Table! </h1>
    <table>
    <tr>
        <th> Celcius</th>
        <th> Fahrenheit</th>
</tr>
<?php
for ($cel =0; $cel<= 100; $cel += 3){
    $far = ($cel*9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.$far.' degrees </td>';
    echo '</tr>';

}
?>
<table>


    
</body>
</html>


<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    table  {
        width:500px;
        margin:20px auto;
        border-collapse: collapse;
        border:1px solid lightblue;
    
    }

    td,th {
        border:1px solid lightblue;
        border-collapse:collapse;
        padding:5px;
    }
    h1,h2{
        text-align:center;
        margin:10px 0;
        color:blue;
    }
    </style>
    </head>
<body>
    <h2> My kilometer / Mileage Table! </h2>
    <table>
    <tr>
        <th> Celcius</th>
        <th> Fahrenheit </th>
</tr>
<?php

for ($cel =0; $cel<= 100; $cel += 3){
    $far = ($cel*9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.$far.' degrees </td>';
    echo '</tr>';

}
?>
<table>


    
</body>
</html>