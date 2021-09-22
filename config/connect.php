
 <?php
 //Set Variables 
$host='localhost';
$db='ninja pizza'; 
$username='Pranjali';
$pass='pranjali';

$mysqli=new mysqli($host,$username,$pass,$db);
if(mysqli_connect_error())
  {
    die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());
   }

?>
