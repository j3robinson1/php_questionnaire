<html>
<head>
  <title>Questionnaire</title>
</head>
<body>
  <?php 

    $answers = ['1'=>'a', '2'=>'b', '3'=>'b', '4'=>'d', '5'=>'a'];
    $questions = ['1'=>'What is my favorite color?', '2'=>'What is OOP?', '3'=>'What does PHP stand for?', '4'=>'What is my name?', '5'=>'What is my mothers name?'];
    foreach($questions as $question) {

      $i += 1;
      echo $i . '. ';
      echo $question;
      ?><br>
      <?php
    echo $_POST['value'];
?>
<form method="post" action="posted.php">
<select>
  <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option>
</select>
<br>

<input type="submit">
<?php include('posted.php'); ?>
</form>
</body>
</html>