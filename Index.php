<?php
/** strings
* formulär
* Jämförelser
* if - else, else if
* _GET()
*
*/
?>

<h1>Det Stora Äventyret</h1>

<?php
if($_GET['player_name'] == null):
?>
<form action="Index.php">
	<label>Vad Heter Du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="0">
	<input type="submit" name="Skicka">
</form>

<?php
endif;
if ($_GET['player_name'] != null) {
	if ($_GET['player_name'] == "Deez Nutz" ) {
		echo "HAAAH GAT EEEEMMMMM";
	}	

switch ($_GET['page']) {
 	case '0':
	?>
	<h2>Hej <? echo $_GET['player_name']?></h2>
		<p>Du befinner dig i en skog</p>
		<br>
		<form action="Index.php">
			<label>Vad Vill Du göra?</label>
			<br>
			<label for="move">Gå någonstans</label>
			<input type="radio" name="page" value="1" id="move">
			<br>
			<label for="inventory">Kolla vad du har med dig</label>
			<input type="radio" name="page" value="100" id="inventory">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="skicka">
		</form>
		<?php
 		break;

 	case '1':
		?>
		<h2>Hej <? echo $_GET['player_name']?></h2>
			<form action="Index.php">
				<label>Vart vill du gå?</label>
				<br>
				<label for="west">Väst</label>
				<input type="radio" name="page" value="2" id="west">
				<br>
				<label for="north">Norr</label>
				<input type="radio" name="page" value="3" id="north">
				<br>
				<label for="east">Öst</label>
				<input type="radio" name="page" value="4" id="east">
				<br>
				<label for="south">Söder</label>
				<input type="radio" name="page" value="5" id="south">
				<br>
				<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
				<input type="submit" name="Skicka">
			</form>
		<?php
 		break;
 	case '2':
 		?>
 		<form adction="index.html">
 			<label>Du Försöker Gå åt Väster men det enda du hittar där är en brant bergvägg</label>
 			<br>
 			<label>Vart Vill Du Gå Istället?</label>
 			<br>
 			<label for="north">Norr</label>
 			<input type="radio" name="page" value="3" id="north">
 			<br>
			<label for="east">Öst</label>
			<input type="radio" name="page" value="4" id="east">
			<br>
			<label for="south">Söder</label>
			<input type="radio" name="page" value="5" id="south">
			<br>
			<label for="upp">Klättra Upp</label>
			<input type="radio" name="page" value="99" id="upp">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="Skicka">
 		</form>
 		<?php
		break;
 	case '3':
 	?>
 		<form adction="index.html">
 			<label>Du Försöker Gå åt Norr men det enda du hittar där är en brant bergvägg</label>
 			<br>
 			<label>Vart Vill Du Gå Istället?</label>
 			<br>
 			<label for="north">Väster</label>
 			<input type="radio" name="page" value="2" id="north">
 			<br>
			<label for="east">Öst</label>
			<input type="radio" name="page" value="4" id="east">
			<br>
			<label for="south">Söder</label>
			<input type="radio" name="page" value="5" id="south">
			<br>
			<label for="upp">Klättra Upp</label>
			<input type="radio" name="page" value="99" id="upp">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="Skicka">
 		</form>
 		<?php
 		break;
 	case '4':
		?>
 		<form adction="index.html">
 			<label>Du Försöker Gå åt Öster men det enda du hittar där är en brant bergvägg</label>
 			<br>
 			<label>Vart Vill Du Gå Istället?</label>
 			<br>
 			<label for="north">Väster</label>
 			<input type="radio" name="page" value="2" id="north">
 			<br>
			<label for="east">Norr</label>
			<input type="radio" name="page" value="3" id="east">
			<br>
			<label for="south">Söder</label>
			<input type="radio" name="page" value="5" id="south">
			<br>
			<label for="upp">Klättra Upp</label>
			<input type="radio" name="page" value="99" id="upp">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="Skicka">
 		</form>
 		<?php
 		break;
	case '5':
	?>
 		<form adction="index.html">
 			<label>Du Försöker Gå åt Söder men det enda du hittar där är en brant bergvägg</label>
 			<br>
 			<label>Vart Vill Du Gå Istället?</label>
 			<br>
 			<label for="north">Väster</label>
 			<input type="radio" name="page" value="2" id="north">
 			<br>
			<label for="east">Norr</label>
			<input type="radio" name="page" value="3" id="east">
			<br>
			<label for="south">Öster</label>
			<input type="radio" name="page" value="4" id="south">
			<br>
			<label for="upp">Klättra Upp</label>
			<input type="radio" name="page" value="99" id="upp">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="Skicka">
 		</form>
 		<?php
 		break;
 	case '99':
 		?>
 		<p>Du försöker klättra uppför bergväggen men efter en par meters klättrande tappar du greppet och ramlar ner och dör!/p>
 		<h1>GAME OVER</h1>
 		<?php
 		break;
 	case '100':
 		?>
 		<p>Din Väska och dina fickor är lika tomma som rymden</p>
 		<form adction="index.html">
 			<label>Vart Vill Du Gå Istället?</label>
 			<br>
 			<label for="north">Väster</label>
 			<input type="radio" name="page" value="2" id="north">
 			<br>
			<label for="east">Norr</label>
			<input type="radio" name="page" value="3" id="east">
			<br>
			<label for="south">Öster</label>
			<input type="radio" name="page" value="4" id="south">
			<br>
			<label for="south">Söder</label>
 			<input type="radio" name="page" value="5" id="south">
			<br>
			<input type="hidden" name="player_name" value="<?= $_GET['player_name']?>">
			<input type="submit" name="Skicka">
 		</form>
 		<?php
 		break;
 	default:
 		echo $_GET[page];
 		echo "<br>";
 		echo "What you be doing here!";
 		break;
 	}
}
?>