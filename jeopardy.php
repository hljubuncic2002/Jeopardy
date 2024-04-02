<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="jeopardy.css">
    <title>Document</title>
</head>
<body>
  <?php
    global $score1;
    $questions=file_get_contents("data.txt");
    $questionsList=explode(PHP_EOL, $questions);
    $questionsArr = [];
    foreach ($questionsList as $ques) {
      $finalLines = explode(",", $ques);
      array_push($questionsArr, $finalLines);
    }
    function score1(&$score1){
      $score1+=100;
    }

    ?>
    <div class="game">
      <?php

      if (isset($_POST['button'])) {
        ?>
        <div class="qCard">
              <h1><?php
              $qVal=($_POST['button']);
              echo($questionsArr[$qVal][0]);
              ?>
            </h1>
              <form method="post" action="">
                <input type="text" id="text" name="text">
              </form>
            </div> <?php
            score1();
      }

      ?>
        <div class="scores">
            <h3> player 1: <?php echo $score1?> </h3>
          <h3> player 2: <?php echo($score2) ?> </h3>
      </div>


      <form method="post" action="">
        <div class="grid">

          <div class="gridBox">Capitals</div>
          <div class="gridBox">Leaders</div>
          <div class="gridBox">Countries</div>
          <div class="gridBox">Topic 4</div>
          <div class="gridBox">Topic 5</div>
          <div class="gridBox">Topic 6</div>
          <button name="button" value="0"><div class="gridBox">$200</div></button>
          <button name="button" value="1"><div class="gridBox">$200</div></button>
          <button name="button" value="2"><div class="gridBox">$200</div></button>
          <button name="button" value="3"><div class="gridBox">$200</div></button>
          <button name="button" value="4"><div class="gridBox">$200</div></button>
          <button name="button" value="5"><div class="gridBox">$200</div></button>
          <button name="button" value="6"><div class="gridBox">$400</div></button>
          <button name="button" value="7"><div class="gridBox">$400</div></button>
          <button name="button" value="8"><div class="gridBox">$400</div></button>
          <button name="button" value="9"><div class="gridBox">$400</div></button>
          <button name="button" value="10"><div class="gridBox">$400</div></button>
          <button name="button" value="11"><div class="gridBox">$400</div></button>
          <div class="gridBox">$600</div>
          <div class="gridBox">$600</div>
          <div class="gridBox">$600</div>
          <div class="gridBox">$600</div>
          <div class="gridBox">$600</div>
          <div class="gridBox">$600</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$800</div>
          <div class="gridBox">$1000</div>
          <div class="gridBox">$1000</div>
          <div class="gridBox">$1000</div>
          <div class="gridBox">$1000</div>
          <div class="gridBox">$1000</div>
          <div class="gridBox">$1000</div>

        </div>
        </form>

</div>
</body>
</html>
