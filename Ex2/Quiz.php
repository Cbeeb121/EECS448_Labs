<?php

  $answersArr = array($_POST["question1"], $_POST["question2"], $_POST["question3"], $_POST["question4"], $_POST["question5"]);
  $correctAnswers = array("Soviet Union", "Rome", "Italy", "Poland", "Kampuchea");
  $questionsArr = array("Question 1: Mikhail Gorbachev:","Question 2: Julius Caesar:","Question 3: Giovanni Giolitti:","Question 4: Stanisław August Poniatowski:","Question 5: Pol Pot:");
  $num = 0

  for ($i = 0; $i < 5; $i++){
    echo $questionsArr[$i] . "<br>";
    echo "You answered: " . $answersArr[$i] . "<br>";
    echo "Correct answer: " . $correctAnswers[$i] . "<br> <br>";
    if ($answersArr[$i] == $correctAnswers[$i]){
      $num++;
    }
  }
  echo "You received a score of " . ($num / 5 * 100) . "%!" . " By answering " . $num . " out of 5 questions correct!<br>";
?>
