<?

	$dir = "/home/c/cn01374/public_html/test";
	$dirs = array_diff(scandir($dir), [".", ".."]);
	// print_r($dirs);
    $begin = array_key_first($dirs);

    echo"<p><a href='../'>Go back</a></p>";

    for($i = $begin; $i < count($dirs) + $begin; $i++){
        if(is_dir($dirs[$i])){
            echo "<p><a href='$dirs[$i]'>$dirs[$i]</a></p>";
        }
    }
