<?php 

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

?>
[
	{
		"color": "blue",
		"name": "New York",
		"data": [ { "x": 0, "y": 40 }, { "x": 1, "y": 49 }, { "x": 2, "y": 38 }, { "x": 3, "y": 30 }, { "x": 4, "y": 32 } ]
	}, 
	{
		"name": "London",
		"data": [ { "x": 0, "y": 19 }, { "x": 1, "y": 22 }, { "x": 2, "y": 29 }, { "x": 3, "y": 20 }, { "x": 4, "y": 14 } ]
	}, 
	{
		"name": "Tokyo",
		"data": [ { "x": 0, "y": 8 }, { "x": 1, "y": 12 }, { "x": 2, "y": 15 }, { "x": 3, "y": 11 }, { "x": 4, "y": 10 } ]
	}
]

