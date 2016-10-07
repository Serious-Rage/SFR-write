
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>&dagger;SFR-write&dagger;</title>
	<link rel="stylesheet" type="text/css" href="css/basic_white.css" />
</head>

<body>

<h1 class="centered">DATA WAS APPENDED TO THE TEXT DOCUMRNT FRAMED BELOW</h1> 

<?php

        $Selected_File = $_POST[slctFile];

        $filename = 'txt/' . $Selected_File . '_W1.txt'; 
   
	print "<h4>Writing to File " . $filename . "<b/h4>>";


	
        // passing in an array the second argument being the file to write to

	$fp = fopen($filename, 'w');   //opens the file for writing

	$cntr = 1;

	while(true)
	{
		$item_html_name = 'item'.$cntr;

		$item = $_POST[$item_html_name];

		if (empty($item))
		{
			break;
		}

		$cntr++;

		print "Item: ".$item."<br />";

		$output_line = $item."\n";

		fwrite($fp, $output_line);

	}


	fclose($fp);


	      //  print "<h4>Appending File<b/h4>>";

	
                $filename = 'txt/' . $Selected_File  . '_A1.txt';     // passing in an array the first argument being the file to append to
		$fp = fopen($filename, 'a');   //opens the file for appending

		$cntr = 1;

		while(true)
		{
			$item_html_name = 'item'.$cntr;

			$item = $_POST[$item_html_name];

			if (empty($item))
			{
				break;
			}

			$cntr++;

			print "Item: ".$item."<br />";

			$output_line = $item."\n";

			fwrite($fp, $output_line);

		}

//print '<br><br><h2>Complete appended Document</h2><br>';

/*
                $filename = 'txt/' . $Selected_File.'_A1.txt';  
		$lines_in_file = count(file($filename));

		$fp = fopen($filename, 'r');   //opens the file for reading

		for ($ii = 1; $ii <= $lines_in_file; $ii++)
		{
			$line = fgets($fp);  //Reads one line from the file
			$trimedLine = trim($line);

			print '<h>'.$ii.' - '.$trimedLine.'</h><br/>';
		}
*/
		fclose($fp);


$filename = 'txt/' . $Selected_File  . '_A1.txt';  


echo "<br/>";

echo "<div id=\"containFrame\" style=\"background-color:#bababa\"><br/>";
echo "<iframe id=\"SFR_110\" src=\"txt/" . $Selected_File  . "_A1.txt\" width=\"inherit\" height=\"300px\" scrolling=\"yes\" ></iframe>";	
echo "</div>";

?>

</body>
</html>
