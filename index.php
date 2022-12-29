<!DOCTYPE html>
<html>
<head>
	<title>Callback Functions</title>
	<!--created by:Yuleqah Oktovia Rahmadani-->
</head>
<body>
	<h1>Callback Function</h1>
	<?php
    function my_callback($color)
    {
        return strlen($color);
    }
    $strings = ["red", "green", "blue", "yellow", "brown", "pink"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>
</body>
</html>
