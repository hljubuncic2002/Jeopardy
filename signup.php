<?php
  session_start();
  session_unset();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jeopardy.css">
  </head>
  <body>
    <div class="qCard">
    <form action="enterNames.php" method="POST">
      <label for="noUsers">Enter the number of players: (2-4)</label><br>
      <input type="number" id="noUsers" name="noUsers" value="2" min="2" max="4"></input>
      <input type="submit" value="Play!">
    </form>
    <h3>Or, log in: </h3>
    <form action="login.php" method="POST">
      <label for="noUsers">Enter your name: </label><br>
      <input type="text" id="userName" name="userName"></input>
      <input type="submit" value="Search">
    </form>
  </div>
  </body>
</html>
