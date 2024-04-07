<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">
  </head>
  <body>
    <?php
    $ansVal=($_SESSION['questionsArr'][$_SESSION['qVal']][2]);
    $pTurn=($_SESSION['counter']%$_SESSION['noUsers'])+1; #this uses modulo to get player turn info. Counter starts at 0. player1 gets the first question, and if 0, the first player gets the quesiton. The third question would be at counter 2. The third player needs to get the value of the question. As such, 1 is added to have the value go to the right player.

      if (isset($_POST['ansInput'])) {
        if ($_SESSION['questionsArr'][$_SESSION['qVal']][1] == strtolower($_POST['ansInput'])){
          $_SESSION['score'.$pTurn]+=$ansVal;
          $ansStatus=[" correctly", " awarded to "];

        } else {
          $_SESSION['score'.$pTurn]-=$ansVal;
          $ansStatus=[" incorrectly", " deducted from "];
        }
      }
    ?>
    <div class="qCard">
      <h3> You answered <?php echo $ansStatus[0] ?> </h3> <br>
      <p> <?php echo $ansVal ?> has been <?php echo $ansStatus[1] ?> your account, <?php echo $_SESSION['player'.$pTurn] ?>!</p>
      <?php
      if ($_SESSION['counter']<29){
        $_SESSION['counter']+=1;
        ?>
      <form action="jeopardy.php" method="POST" name="return">
        <input type="submit" value="Return to the board">
      </form> <?php
    } else { ?>
      <form action="final.php" method="POST" name="return">
        <input type="submit" value="See results">
      </form> <?php
    }
       ?>
    </div>

  </body>
</html>
