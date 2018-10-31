<?php

function contrpass($login, $pass)
{
if (($login=='mamma') and ($pass=='ciao')) {echo"Password corretta <br> puoi entrare <br><br> $login $pass";}
 else {echo"Login o Password SBAGLIATA";};
}


function dati($nome, $cognome, $data)
{echo"Il tuo nome e': $nome <br>Il tuo cognome e': $cognome";}

/******* Programma principale *******/
$op=$_POST['op'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$data=$_POST['data'];
$login=$_POST['login'];
$pass=$_POST['password'];
 
 
switch ($op){

      case "dati":
		   dati($nome,$cognome);
           break;

      case "check":
           contrpass($login,$pass);
           break;

      default:
           dati($nome,$cognome);
           break;

}
?>
