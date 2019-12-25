<h1>Results:</h1>
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">

<label>Action Time with booster: </label><?php
$DACT = (($_GET['default_action_time'] / 100) * (100 - $_GET['boost']));
 echo $DACT?>
<br>
<h2>Money:</h2>
<?php 
$money_hour = ((3600 / $DACT / 2) * $_GET['sell_price']);
$money_day = ($money_hour * 24);
$money_week = ($money_day * 7);
$money_year = ($money_day * 365);

?>
<label>Per hour:</label> <?php echo number_format( $money_hour, 1, '.', ',' );?>
<br>
<br>

<label>Per day:</label> <?php echo  number_format( $money_day, 1, '.', ',' );?>
<br>
<br>

<label>Per week:</label> <?php echo number_format($money_week, 1, '.', ',' );?>
<br>
<br>

<label>Per year:</label> <?php echo number_format($money_year, 1, '.', ',' );?>
