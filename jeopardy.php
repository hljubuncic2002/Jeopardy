<?php
session_start();

for ($i=1; $i <= $_SESSION['noUsers']; ++$i){
  if (!(isset($_SESSION['player'.$i]))) {
    $_SESSION['player'.$i]=$_POST['player'.$i];
  }
  if (!(isset($_SESSION['score'.$i]))) {
      $_SESSION['score'.$i]=0;
  }
  if (!(isset($_SESSION['counter']))) {
    $_SESSION['counter']=0;
  }
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">

  </head>
  <body>
    <?php
    if (!(isset($_SESSION['ansArr']))){
      $_SESSION['ansArr']=array();
    }

    $questions=file_get_contents("data.txt");
    $questionsList=explode(PHP_EOL, $questions);
    $questionsArr = [];
    foreach ($questionsList as $ques) {
      $finalLines = explode(",", $ques);
      array_push($questionsArr, $finalLines);
    }
    $_SESSION["questionsArr"]=$questionsArr;
    ?>
   <div class="game">
     <div class="jeopardy">
       <h2><b>Jeopardy!</b></h2>
     </div>
     <div class="scores">
     <?php
      $noUsers=$_SESSION['noUsers'];
      for($i=1;$i<=$noUsers;$i++){ ?>
         <div class="userScore">
          <p> <?php echo $_SESSION['player'.$i], ': ', $_SESSION['score'.$i]; ?> </p>
        </div>
          <?php
        }?>
    </div>

      <form action="Question.php" method="post">
        <div class="grid">

          <div class="gridBoxTop">Capitals</div>
          <div class="gridBoxTop">Leaders</div>
          <div class="gridBoxTop">Countries</div>
          <div class="gridBoxTop">Animals</div>
          <div class="gridBoxTop">Computing</div>
          <div class="gridBoxTop">Cars</div>
          <?php
            for ($_SESSION['make']=0; $_SESSION['make'] < 30; ++$_SESSION['make']) {
               if (!(in_array($_SESSION['make'],$_SESSION['ansArr']))) { ?>
                 <button name="button" value="<?php echo $_SESSION['make'] ?>"><div class="gridBox"><?php echo $_SESSION['qButtons'][$_SESSION['make']] ?></div></button> <?php
               } else { ?>
                 <div class="gridBox" Disabled>Disabled</div> <?php
               }
            }

            ?>

        </div>
        </form>



  </body>
</html>
