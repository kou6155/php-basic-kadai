<!DOCTYPE html>
<html lang='ja'>

<head>
   <meta charset = 'utf-8'>
</head>

<body>
   <p>
     <?php
      $score1 = 80;
      $score2 = 60;
      $score3 = 55;
      $score4 = 40;
      $score5 = 100;
      $score6 = 25;
      $score7 = 80;
      $score8 = 95;
      $score9 = 30;
      $score10 = 60;



      $score_all = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
      // echo '合計点は' . $score_all . '点';
      // echo '<br>';
      echo '平均点は' . $score_all / 10 . '点';
      ?>
   </p>
</body>
</html>