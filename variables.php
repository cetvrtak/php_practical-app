<?php // test1.php
 $username = "Fred Smith";
 echo $username;
 echo "<br>";
 $current_user = &$username;
 echo $current_user;
 $username = "Stevo Iliskovic";
 echo "<br>";
 echo $current_user;
 echo "<h2>Team</h2>";
//  $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
// print_r($team);
//  print_r($team);
//  $team[0] = "Stevo";
//  echo "<br>";
//  print_r($team);
 define("TEAM", array('Bill', 'Mary', 'Mike', 'Chris', 'Anne'));
 print_r(TEAM);
 echo "<br>";
 echo TEAM[0];
 echo "<br>";
 print_r(TEAM);

 echo "<div><h2>Incrementing operator</h2>";
 $x = 9;
 if ($x++ == 10) echo "<p>" . $x . "</p></div>";
 if ($x++ == 10) echo "<p>$x</p></div>";

 echo "This is line " . __LINE__ . " of file " . __FILE__;
 echo "<br>";

 $temp = "The date is ";
 echo longdate(time());
 echo "<br>";
 function longdate($timestamp)
 {
    global $temp;
    return $temp . date("l F jS Y", $timestamp);
 }

 print_r($_SERVER);
 echo "<br>";

 $came_from = htmlentities($_SERVER['REQUEST_TIME']);
 echo $came_from . "<br>";

 $myNumber = 12;
 function incrementMyNumber() {
   global $myNumber;
   $myNumber++;
 }
 incrementMyNumber();
 function displayMyNumber() {
   global $myNumber;
   echo "My number is " . $myNumber . "<br>";
 }
 displayMyNumber();
?>

<?= "This is an alternative way to start a PHP interpretation"; ?>
