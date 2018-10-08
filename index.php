<!DOCTYPE html>
<html>
<head>
	<title>MSG</title>
	<meta charset="windows-1251">
</head>
<body>
	<?php
		$hash = '';
		for ($i=1; $i<8; $i++) {
			$hash .= chr(rand(33, 90));
		}
		echo $hash;
	?>
</body>
</html>