<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	    <link rel="stylesheet" href="mystyle.css">
		<meta charset="UTF-8">
		<title>MateuszPiwowarski200862</title>
		

		
				
		
	    
		
		
		
		
	</head>
	<body>


		
	    
	    
	    
	    <a href="index.html">
	       Powrót
	   </a>
	    
		
		
		<div id="kontener3">

			<?php
			$color = "red";
			echo "My car is " . $color . "<br>";
			echo "My house is " . $color . "<br>";
			echo "My boat is " . $color . "<br>";
			
			
			
			?>


		    <form action="welcome.php" method="post">
	            <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">imię:</p>
    	        </div>
    	        
    	         <div class="komorkaformularz">
                    <input id="imie" class="pole" type="text" name="imie"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                   <p class="formularzpole"> nazwisko:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
    	        
    	        <input id="nazwisko" class="pole" type="text" name="nazwisko"><br>

    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">płeć:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input  class="pole" type="text" id="plec" name="plec"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">ulica:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="ulica" class="pole" type="text" name="ulica"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">numer domu:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id ="numerdomu" class="pole" type="text" name="numerdomu"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p  class="formularzpole">numer mieszkania:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id ="numermieszkania" class="pole" type="text" name="numer_mieszkania"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">miasto:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id ="miasto" class="pole" type="text" name="miasto"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p  class="formularzpole">data urodzenia:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input class="pole" id="dataurodzenia" type="text" name="data_urodzenia"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">prawo jazdy:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input type="checkbox" id="prawo_jazdy" name="prawo_jazdy"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                   <p class="formularzpole">telefon:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input class="pole" id="telefon" name="telefon" type="text"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                   <p class="formularzpole">Nazwa usługi:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="nazwauslugi" class="pole" type="text" name="nazwauslugi"><br>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                   <p class="formularzpole">cena:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="cena" class="pole" type="text" name="cena"><br>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                   <p class="formularzpole">ilość:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="ilosc" class="pole" type="text" name="ilosc"><br>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                   <p class="formularzpole">Vat%:</p>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="vat" class="pole" type="text" name="vat"><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <p class="formularzpole">uwagi:</p><br>
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <textarea class="pole" id="uwagi" name="uwagi" rows="10" cols="30">
	                        Uwagi...
	                    </textarea><br>
    	        </div>
    	            
    	    </div>
    	    
    	    <div class = "warstwa1">
    	        
	            <div class="komorkaformularz">
                    <input type="button" name ="p1" value="OK">
	                   <input type="reset" name ="p2" value="Czyść">
	                   
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input id="wyslij" type="submit" name ="p3" value="Wyślij" >
	                   <input type="hidden" name ="ukryte" value="0">
    	        </div>
    	        
    	        <div class="komorkaformularz">
                    <input type="button" onclick="sprawdzWszystko()" name ="p4" value="Waliduj">
	                   
    	        </div>
    	       
    	            
    	    </div>
    	  </form>
	        
	    </div>
		
		
		
		
		
		
		
		
		
		
		<br>
		
		
		
		
		
		<p>
		    <a href="http://validator.w3.org/check?uri=referer">
		        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88">
		    </a>
		</p>
	</body>
</html>