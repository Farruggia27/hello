<?php
function contrpass($login, $pass)
{
if (($login=='mamma') and ($pass=='ciao')) 
{
	echo"Password corretta <br> puoi entrare <br><br> $login $pass";
}
 else 
 {
	 echo"Login o Password SBAGLIATA";
 };
}
function dati($nome, $cognome, $data)
{
	
	
	echo"	<p align='center'>
			<font  color='red'>I TUOI DATI SONO<br></font>
		</p>
		<fieldset>
			Il tuo nome e': $nome <br>
			Il tuo cognome e': $cognome <br>
			La tua data di nascita (come metodo date )e': $data <br>
			
			/*Il tuo giorno di nascita(con metodo text) e': $giorno <br>
			il tuo anno di nascita (con metodo text) e': $anno <br>
			Il tuo mese di nascita (con combobox) e': $mese <br>*/
			Il tuo indirizzo e': $indirizzo <br>
		</fieldset>";
}
/******* Programma principale *******/
$op=$_POST['op'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$data = date('d-m-Y', strtotime($_POST['data']));

/*$giorno=$_POST['giorno'];
$anno=$_POST['anno'];
$mese = $_POST['mese'];*/

$indirizzo=$_POST['indirizzo'];
$login=$_POST['login'];
$pass=$_POST['password'];
 
  


 ?>
 
 
