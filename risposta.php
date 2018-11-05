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
function dati($nome, $cognome, $data,$giorno,$mese,$anno,$indirizzo)
{
	
	
	echo"	<p align='center'>
			<font  color='red'>I TUOI DATI SONO<br></font>
		</p>
		<fieldset>
			Il tuo nome e': $nome <br>
			Il tuo cognome e': $cognome <br>
			La tua data di nascita (come metodo date )e': $data <br>
            
            il tuo giorno di nascita e': $giorno<br>
             il tuo mese di nascita e': $mese<br>
              il tuo anno di nascita e': $anno<br>
			Il tuo indirizzo e': $indirizzo <br>
		</fieldset>";
}
/******* Programma principale *******/
$op=$_POST['op'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$data = date('d-m-Y', strtotime($_POST['data']));
$indirizzo=$_POST['indirizzo'];
$login=$_POST['login'];
$pass=$_POST['password'];

$giorno=$_POST['giorno'];
$mese=$_POST['mese'];
$anno=$_POST['anno'];
switch ($op){
      case "dati":
		   dati($nome,$cognome,$data,$indirizzo,$giorno,$mese,$anno);
           break;
      case "check":
           contrpass($login,$pass);
           break;
      default:
           dati($nome,$cognome,$data,$indirizzo,$giorno,$mese,$anno);
           break;
           }
 ?>
 
