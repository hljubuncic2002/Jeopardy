<?php session_start(); ?>
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
<?php


/*checks if a specific button has been clicked by taking the value of the button as input
and determining if it exists within the session's array ($_Session['buttons_clicked']. If it exists,
it returns true*/
function isButtonClicked($buttonVal){
    return isset($_SESSION['buttons_clicked'][$buttonVal]);
}
/*value of the button is retrieved from ($_POST['button']) and sets in the session's array
($_SESSION['buttons_clicked') sets to true once the button has been clicked */
if (isset($_POST['button'])){
    $buttonVal = $_POST['button'];
    $_SESSION['buttons_clicked'][$buttonVal]=true;
}
  
/* array questions will go here!!!  
$questionsArr = array(
    array("Question 1"),
    array("Question 2"),
    array("Question 3"),
    // Add more questions here
);
*/

?>
<div class = "game">
<?php
    if (isset($_POST['button'])) {
        ?>
        <div class="qCard">
            <h1><?php
                $qVal=($_POST['button']);
                echo $questionsArr[$qVal][0];
                ?>
            </h1>
            <form method="post" action="">
                <input type="text" id="text" name="text">
            </form>
        </div>
    <?php
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
            <?php
/*loop generates buttons for game grid, iterating 30 times, thus producing 30 buttons. Calls the (isButtonClicked())
for every button to determine if button has been clicked. If it has, it adds the disabled attribute to the button, making it unclickable.
If it hasn't, the player will still be able to click button to view question*/
            for($i = 0; $i < 30; $i++){
                if(isButtonClicked($i)){
                    $disabled = 'disabled';
                } else{
                    $disabled = '';
                }
                ?>
                <button name="button" value="<?php echo $i; ?>" <?php echo $disabled; ?>>
                    <div class="gridBox"><?php echo "$" . (($i % 6) + 1) * 200; ?></div>
                </button>
                <?php
            }
            ?>



        </div>
    </form>
</div>



</body>
</html>
<?php session_abort();?>
