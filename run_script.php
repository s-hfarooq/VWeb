<?php
	echo $_GET["myCountry"];
	$command = escapeshellcmd('/usr/bin/python3 /var/www/html/test.py');
	$output = shell_exec($command);
	echo "test";
	echo $output;
	echo "test2";
	//file_put_contents('/var/www/html/files/output.txt', $output);
	//header('Location: succ.html?success=true');
?>
