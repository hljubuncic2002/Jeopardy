<?php session_start();
  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">
  </head>
  <body>
    <div class="qCard">
    <?php

    if (!(isset($finalScores))){
      $finalScores=array();
    }
    for ($j=1; $j <= $_SESSION['noUsers']; ++$j) {

      array_push($finalScores,[$_SESSION['player'.$j],$_SESSION['score'.$j]]);
    }
    $namesonlyFinal=array_column($finalScores,0);
    $scoresonlyFinal=array_column($finalScores,1);
    array_multisort($scoresonlyFinal, SORT_DESC, $scoresonlyFinal);

    for ($k=0; $k < $_SESSION['noUsers']; ++$k) {

      echo ($k+1).' : '.$namesonlyFinal[$k].' scored '.$scoresonlyFinal[$k].' points.'; ?> <br> <?php
      $fileLine=$finalScores[$k][0].','.$finalScores[$k][1].PHP_EOL;
      file_put_contents('scores.txt',$fileLine, FILE_APPEND);
    }

     ?>
     <form action="signup.php" method="post">
       <input type="submit" value="Play again!">
     </form>
     </div>

  </body>
</html>
