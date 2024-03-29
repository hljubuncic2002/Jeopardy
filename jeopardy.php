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
    <div class="game">

      <?php
        if(array_key_exists('1200', $_POST)) { ?>
          <div class="qCard">
            <h1>What is the captial of Germany?</h1>
            <form>
              <input type="text" id="1200answer">
            </form>
          </div>
          <?php
        }
       ?>

      <form method="post">
        <div class="grid">

          <div class="gridBox">Topic 1</div>
          <div class="gridBox">Topic 2</div>
          <div class="gridBox">Topic 3</div>
          <div class="gridBox">Topic 4</div>
          <div class="gridBox">Topic 5</div>
          <div class="gridBox">Topic 6</div>
          <button name="1200"><div class="gridBox">$200</div></button>
          <div class="gridBox">$200</div>
          <div class="gridBox">$200</div>
          <div class="gridBox">$200</div>
          <div class="gridBox">$200</div>
          <div class="gridBox">$200</div>
          <div class="gridBox">$400</div>
          <div class="gridBox">$400</div>
          <div class="gridBox">$400</div>
          <div class="gridBox">$400</div>
          <div class="gridBox">$400</div>
          <div class="gridBox">$400</div>
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
