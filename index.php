<html>
<head>
<title>Primo esempio PHP</title>

</head>
<body bgcolor="b0b0b0">
<form action=risposta.php method=post>
<center>
<table width=50% bgcolor="909090">
 <tr>
  <td>
   <font face=verdana size=2>Nome</font>
   <input type=text size=10 name=nome>
  </td>
  <td>
   <font face=verdana size=2>Cognome</font>
   <input type=text size=10 name=cognome>
  </td>
  <td>
   <font face=verdana size=2>Data di nascita</font>
   <input type=date  name=data>
  </td>
  <td>
   <font face=verdana size=2>Indirizzo</font>
   <input type=text size=30 name=indirizzo>
  </td>
 </tr>
 <tr>
  <td>
   <font face=verdana size=2>Login</font>
   <input type=text size=10 name=login>
  </td>
  <td>
   <font face=verdana size=2>password</font>
   <input type=text size=10 name=password>
  </td>
 </tr>
 <tr>
  <td>
  <SELECT size=1 name=op> <OPTION selected>
   </OPTION> <OPTION value=dati>Visualizza dati</OPTION> 
   <OPTION value=check>Esegui login</OPTION>
  </SELECT>
  </td>
  <td>
   <input type=submit value=invia>
   <input type=reset value=cancella>
  </td>
 </tr>
</table>
</form>
</center>
</body>
</html>

