<?php
    
    $answer1 = $_POST['questions[1]'];
    $answer2 = $_POST['questions[2]'];
    $answer3 = $_POST['questions[3]'];
    $answer4 = $_POST['questions[4]'];
    $answer5 = $_POST['questions[5]'];

    $Correct = 0;
    
    if ($answers[1] == "a") { $Correct++; }
    if ($answers[2] == "b") { $Correct++; }
    if ($answers[3] == "b") { $Correct++; }
    if ($answers[4] == "d") { $Correct++; }
    if ($answers[5] == "a") { $Correct++; }
    
    echo "<div>$Correct / 5 correct</div>";
    
?>