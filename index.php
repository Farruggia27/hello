<html>
  <head>
    <title>Primo esempio PHP</title>";
  </head>
  <body bgcolor="b0b0b0">
<?php


echo "<form action=risposta.php method=post>";
echo "<center>";
echo "<table width=50% bgcolor="909090">";
 echo "<tr>";
  echo "<td>";
   echo "<font face=verdana size=2>Nome</font>";
   echo "<input type=text size=10 name=nome>";
  echo "</td>";
  echo "<td>";
   echo "<font face=verdana size=2>Cognome</font>";
   echo "<input type=text size=10 name=cognome>";
  echo "</td>";
 echo "</tr>";
 echo "<tr>";
  echo "<td>";
   echo "<font face=verdana size=2>Login</font>";
   echo "<input type=text size=10 name=login>";
  echo "</td>";
  echo "<td>";
   echo "<font face=verdana size=2>password</font>";
   echo "<input type=text size=10 name=password>";
  echo "</td>";
 echo "</tr>";
 echo "<tr>";
  echo "<td>";
echo "<SELECT size=1 name=op> <OPTION selected></OPTION> <OPTION value=dati>Visualizza dati</OPTION> <OPTION value=check>Esegui login</OPTION></SELECT>";
  echo "</td>";
  echo "<td>";
   echo "<input type=submit value=invia>";
   echo "<input type=reset value=cancella>";
  echo "</td>";
echo " </tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>
  </body>
</html>
