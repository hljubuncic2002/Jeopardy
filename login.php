<?php
session_start();
error_reporting(0);
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">
  </head>
  <body>
    <?php

    $scoreboard=file_get_contents("scores.txt");
    $scoreboardList=explode(PHP_EOL, $scoreboard);
    $scoreboardArr = [];
    foreach ($scoreboardList as $scorb) {
      $scoreboardLines = explode(",", $scorb);
      array_push($scoreboardArr, $scoreboardLines);
    }

    $foundScores=array();
    foreach ($scoreboardArr as $x) {
      if (strtolower($x[0]) == strtolower($_POST['userName'])){
        array_push($foundScores, $x[1]);
      }
    } ?>

    <div class="qCard"> <?php
    if (count($foundScores)>0){
     ?>
    <h1>Found scores for <?php echo $_POST['userName'] ?>:</h1>
    <?php
    foreach ($foundScores as $y) {
      echo $y.PHP_EOL;
    }
  }
  else { ?>
    <h1>This user has no recorded scores.</h1> <?php
  }
     ?>

   <form action="signup.php" method="post">
     <input type="submit" value="Play again!">
   </form>
   </div>

  </body>
</html>
