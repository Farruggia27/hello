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
	$j=true;
	
	$date  = strtotime($data);
	$day   = date('d',$date);
	$month = date('m',$date);
	$year  = date('Y',$date);
	if($anno<1900||$anno>2018||$year!=$anno)
	{
		$j=false;
		$message = "Inserimento anno errato";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	if($giorno<1||$giorno>31||$day!=$giorno)
	{
		$j=false;
		$message = "Inserimento giorno errato";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	if($month!=$mese)
	{
		$j=false;
		$message = "inserimento mese errato";
		echo "<script type='text/javascript'>alert('$message');</script> ";
	}
	if(!chkEmail($email))
	{
	$j=false;
	}
	
	if($j) 
	{ 
		$testo = "Il tuo nome e': " . $nome . "\n"
		. "Il tuo cognome e': " . $cognome . "\n"
		. "La tua data di nascita (come metodo date )e': " . $data . "\n"
		. "il tuo giorno di nascita e': " . $giorno . "\n"
		. "il tuo mese di nascita e': " . $mese . "\n"
		. "il tuo anno di nascita e': " . $anno . "\n"
		. "Il tuo indirizzo e': " . $indirizzo . "\n"
		. "Il tuo cognome e': " . $cognome . "\n"
		. "La tua email e': " . $email;
		mail('$email', 'Grazie per esserti registrato nella piattaforma di prova di Daniele Farruggia\n ', $testo);



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
	else
	{	
		echo "
		<font color='red' size='5'>Errore! Dati inseriti non validi</font>
		<button onclick=\"location.href='index.php'\">Torna alla schermata iniziale</button>");
	}
		
}
 function chkEmail($email)
{
	// elimino spazi, "a capo" e altro alle estremità della stringa
	$email = trim($email);
	$i= true;
	// se la stringa è vuota sicuramente non è una mail
	if(!$email) {
		$i= false;
	}
	// controllo che ci sia una sola @ nella stringa
	$num_at = count(explode( '@', $email )) - 1;
	if($num_at != 1) {
		$i= false;
	}
	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		$i= false;
	}
	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		$i= false;
	}
	return $i;
	
}
/******* Programma principale *******/

$op=$_POST['op'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$data = date('d-F-Y', strtotime($_POST['data']));
$indirizzo=$_POST['indirizzo'];
$login=$_POST['login'];
$pass=$_POST['password'];
$email=$_POST['email'];
$giorno=$_POST['giorno'];
$mese=$_POST['mese'];
$mesenom= $_REQUEST['mese'];
$anno=$_POST['anno'];
switch ($op){
      case "dati":
		dati($nome,$cognome,$data,$giorno,$mese,$anno,$indirizzo,$email,$mesenom);
           break;
      case "check":
           contrpass($login,$pass);
           break;
      default:
		dati($nome,$cognome,$data,$giorno,$mese,$anno,$indirizzo,$email,$mesenom);
           break;
           }
?>

 
