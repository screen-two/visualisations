<?php

// connecting to db
mysql_connect('mysql1859int.cp.blacknight.com', 'u1148707_screen2', 'Arch1p3lag0');  
mysql_select_db('db1148707_screen2'); 

$sql="SELECT * FROM saved_search";

$result = mysql_query($sql);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Saved Searches</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/graph-styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://d3js.org/d3.v3.js"></script>

</head>

<body>

    <section class="saved-searches">
    
		<?php
        
        echo '<ol>';
        
        while($row = mysql_fetch_array($result))
         {
         echo '<li><a href="http://digitalinc.ie/visual-with-search/search-graph-working.php?q=' . $row['search_terms'] . '">' . $row['search_terms'] . '</a></li>';
         }
        echo '</ol>';
        
        ?>
    
    </section>

</body>
 