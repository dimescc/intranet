<?php
session_set_cookie_params(800);
session_start();
?>

<?php
$counterstand = intval(file_get_contents("counter.txt"));
 
if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   file_put_contents("counter.txt", $counterstand);
 
   $_SESSION['counter_ip'] = true;
   }
 
echo $counterstand;
?>
