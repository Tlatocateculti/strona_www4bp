<?php
	
	
	$thaslo = "Tajne";
	$tuzytk = "Marcin";
	if (!isset($_POST['nick']) || empty($_POST['nick'])) {
		echo "Nie podano nazwy użtykownika!";
		return;
	}
	if ($_POST['nick'] !== $tuzytk) {
		echo "Zły użytkownik, nie znam Cię!";
		return;
	}
	if (isset($_POST['pass'])){
		if ($_POST['pass'] === $thaslo) {
			echo "<h1>Dostałeś dotęp, {$_POST['nick']}!</h1>";
		}
		else {
			echo "<h1>Nie masz uprawnień!<h1>";
		}
	}
	///////////////
	else {
		echo "Dane niekompletne!";
	}
	

			