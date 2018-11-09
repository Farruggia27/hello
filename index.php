<html>
<head>
<title>Farruggia</title>

</head>
<body bgcolor="CD3333">
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
     <font face=verdana size=2>Giorno di nascita</font>
     <input type=text size=2 name=giorno>
    </td> 
    <td>
     <font face=verdana size=2>Anno di nascita</font>
     <input type=text size=4 name=anno>
    </td> 
    <td>

    <font face=verdana size=2>Mese di nascita</font>
     <select id="mese" name="mese">
            <option value="1">Gennaio</option>
            <option value="2">Febbraio</option>
            <option value="3">Marzo</option>
            <option value="4">Aprile</option>
            <option value="5">Maggio</option>
            <option value="6">Giugno</option>
            <option value="7">Luglio</option>
            <option value="8">Agosto</option>
            <option value="9">Settembre</option>
            <option value="10">Ottobre</option>
            <option value="11">Novembre</option>
            <option value="12">Dicembre</option>
      </select>

    </td>
     <td>
         <font face=verdana size=2>Email</font>
          <input type=text size=30 name=email>
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
