<?php
/*
1. Does it exist? or "Has it been submitted"
2. Is it empty? or "Does value == NULL"
3. Display back to user
*/

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
   $day = $_GET['day'];
   $date = $_GET['date'];
   $year = $_GET['year'];
   if(!empty($day) && !empty($date) && !empty($year)){
      echo 'Is is ' . $day . ' ' . $date . ' ' . $year;
   }else{
      echo 'Fill in all fields';
   }
   
}




?>

<form action="index.php" method="GET">
   Day:<br><input type="text" name="day"><br>
   Date:<br><input type="text" name="date"><br>
   Year:<br><input type="text" name="year"><br><br>
   <input type="submit" value="Submit">



</form>
