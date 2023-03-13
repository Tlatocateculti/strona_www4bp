<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="keywords" content="podstawa, strona podstawowa, nauka"/>
		<meta name="description" content="To jest witryna przypominająca tworzenie stron WWW"/>
		<title>Strona przypomnienie</title>
		<link rel="stylesheet" href="./css/styl.css"/>
	</head>
	<body>
		
			<p>Strona testowa PHP</p>
			
			<?php
				function wylicz(string $a ) {
					//var_dump(is_string($a));
					if(is_string($a)) {
						return "Twój ciąg znakowy: {$a}";
					}
					return $a+15;
				}
				
				
			?>
		
			<p><?php echo wylicz(5); ?>
			<p><?php echo wylicz(" Hej, hej"); ?>
				
		
		
		<form method="post">
			<input type="password" name="liczba"/>
			<input type="submit" value="Prześlij"/>
		</form>
	</body>
</html>