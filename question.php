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
      if (isset($_POST['button'])) {
        array_push($_SESSION['ansArr'],$_POST['button']);
        ?>
        <div class="qCard">
              <?php
              $_SESSION['qVal']=$_POST['button'];
              echo($_SESSION['questionsArr'][$_SESSION['qVal']][0]);
              $_SESSION['rightAns']=$_SESSION['questionsArr'][$_SESSION['qVal']][1];
              $_SESSION['ansVal']=$_SESSION['questionsArr'][$_SESSION['qVal']][2];
            }
      ?>
      <form name="answer" method="POST" action="ans.php">
        <input type="text" id="ansInput" name="ansInput">
        <input type="submit" value="Submit answer!">
      </form>
    </div>

  </body>
</html>
