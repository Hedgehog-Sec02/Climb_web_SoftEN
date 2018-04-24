<?php
require_once "connect.php" ; 
require_once "model/getNews.php" ; 
/* Send a string after a random number of seconds (2-10) */
echo("Hi! Have a random number: " . rand(1,10));

$stmt2 = News::getAll() ; 
while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
    echo $row['NewsTitle'];  echo "<br>";
}


?>