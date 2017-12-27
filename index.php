Her gemmer man et timestamp når en bruger trykker på knappen "gem ny cookie".
<!--lav en form der POSTER input elementet "tid" til scriptet lavcookie.php når man trykker gem cookie-->
<form method="POST" action="lavcookie.php">
<!--indsæt tid time/minut/sekund som værdi i input elementet-->	
<input type="text" name="tid" value="<?php echo date("h:i:s");?>" readonly/>
<!--knap til bruger-->	
<button type="submit">gem ny cookie</button>
</form>
<br/>
"cookiens indhold, tid":
<!--vis hvad der står i cookie, der er sat i lavcookie.php-->	
<?php 
	echo $_COOKIE["log"];
?>
