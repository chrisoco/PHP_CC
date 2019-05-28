<?php

  $loggedIn = true;

  echo ($loggedIn) ? 'You are LoggedIn' : 'You are NOT LoggedIn' . '<br>';

  $age = 20;
  $score = 15;

  echo '<br><br>Your score is: ' .
    ($score > 10 ?
      ($age > 10 ? 'Average'  : 'Exceptional') :
      ($age > 10 ? 'Horrible' : 'Average')
    );
 ?>

 <div>
   <?php if($loggedIn) { ?>
     <h1>Welcome User</h1>
   <?php } else { ?>
     <h1>Welcome Guest</h1>
   <?php } ?>
 </div>

<!-- ---------------->

 <div>
<?php if($loggedIn): ?>
  <h1>Welcome User</h1>
<?php else: ?>
  <h1>Welcome Guest</h1>
<?php endif ?>
 </div>


<?php $arr = ['Hello', 'World', 1, 2, 3]; ?>
<div>
  <?php foreach ($arr as $val): ?>
    <?php echo $val . '<br>' ?>
  <?php endforeach; ?>
</div>
