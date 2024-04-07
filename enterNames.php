<?php
session_start();
  $_SESSION['noUsers']=$_POST['noUsers'];
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">
  </head>
  <body>
    <div class="qCard">
    <form action="jeopardy.php" method="POST">
      <?php
      $_SESSION['qButtons']=array(200,200,200,200,200,200,
                             400,400,400,400,400,400,
                             600,600,600,600,600,600,
                             800,800,800,800,800,800,
                             1000,1000,1000,1000,1000,1000
      );
      for ($i=1; $i<=$_SESSION['noUsers']; ++$i){ ?>
        <label for="player<?php echo $i ?>">Enter the name of Player <?php echo $i ?>:</label> <input type="text" name="player<?php echo $i ?>" id="player<?php echo $i ?>" placeholder="Player Name"><br><br>
        <?php
      }
      ?>
      <div class="qCardButton">
        <input type="submit" value="Play">
      </div>

    </form>
  </div>

  </body>
</html>
