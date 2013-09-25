<?php

// connecting to db
mysql_connect('DB HOSTNAME', 'DB USERNAME', 'DB PASSWORD');  
mysql_select_db('DB NAME'); 

$sql="SELECT * FROM saved_search";

$result = mysql_query($sql);


        
echo '<ul>';

while($row = mysql_fetch_array($result))
 {
 echo '<li><a href="#">' . $row['search_terms'] . '</a></li>';
 }
echo '</ul>';

?>

