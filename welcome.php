<?php
			$color = "red";
			
			function print_var_name($var) 
			{
				foreach($GLOBALS as $var_name => $value) 
				{
					if ($value === $var) {
					return $var_name;
				}
			}

    return false;
}
			
			error_reporting(0);
			ini_set('display_errors', 0);
			
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$nazwauslugi = $_POST['nazwauslugi'];
			$ulica = $_POST['ulica'];
			$prawo_jazdy = $_POST['prawo_jazdy'];
			$plec = $_POST['plec'];
			$cena = $_POST['cena'];
			$numer_mieszkania = $_POST['numer_mieszkania'];
			$miasto = $_POST['miasto'];
			$data_urodzenia = $_POST['data_urodzenia'];
			$telefon = $_POST['telefon'];
			$ilosc = $_POST['ilosc'];
			$vat = $_POST['vat'];
			$uwagi = $_POST['uwagi'];
			
			$zmienne = array($imie,$nazwisko,$ulica,$plec,$prawo_jazdy,$numer_mieszkania,$miasto,$data_urodzenia,$telefon,$nazwauslugi,$cena,$ilosc,$vat,$uwagi);
			
			$nazwy = array("imię","nazwisko","ulica","plec","prawo_jazdy","numer_mieszkania","miasto","data_urodzenia","telefon","nazwauslugi","cena","ilosc","vat","uwagi");
			
			echo "<table border=1>";
			for($i=0;$i<count($zmienne);$i++)
			{
				echo("<tr>");
					echo("<td>");
						echo "$nazwy[$i]";
					echo("</td>");
					echo("<td>");
						echo "$zmienne[$i]";
					echo("</td>");
				echo("</tr>");
			}
			echo("</table>");
			echo("<a href='welcome.txt'>php.txt</a>")
			
			?>