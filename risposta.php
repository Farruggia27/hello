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
function dati($nome, $cognome, $data,$giorno,$mese,$anno,$indirizzo,$email)
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
			La tua email e': $email<br>
		</fieldset>";
}
 function chkEmail($email)
{
	// elimino spazi, "a capo" e altro alle estremità della stringa
	$email = trim($email);

	// se la stringa è vuota sicuramente non è una mail
	if(!$email) {
		return false;
	}

	// controllo che ci sia una sola @ nella stringa
	$num_at = count(explode( '@', $email )) - 1;
	if($num_at != 1) {
		return false;
	}

	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		return false;
	}

	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		return false;
	}

	return true;
}

$email = 'test@dominio.it';

if(chkEmail($email)) {
	echo 'Indirizzo email corretto';
}
else {
	echo 'Indirizzo email errato';
}
/******* Programma principale *******/
$op=$_POST['op'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$data = date('d-m-Y', strtotime($_POST['data']));
$indirizzo=$_POST['indirizzo'];
$login=$_POST['login'];
$pass=$_POST['password'];
$email=$_POST['email'];
$giorno=$_POST['giorno'];
$mese=$_POST['mese'];
$anno=$_POST['anno'];
switch ($op){
      case "dati":
		chkEmail($email);   
		dati($nome,$cognome,$data,$giorno,$mese,$anno,$indirizzo,$email);
           break;
      case "check":
           contrpass($login,$pass);
           break;
      default:
           	chkEmail($email);
		dati($nome,$cognome,$data,$giorno,$mese,$anno,$indirizzo,$email);
           break;
           }

?>

 
