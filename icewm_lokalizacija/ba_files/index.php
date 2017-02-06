<HTML>

<TITLE>ICeWM Lokalizacija - datoteke</TITLE>

<BODY bgcolor=#FFFFFF background="http://ze.lugbih.org/lokalizacija/images/pozadina_pot.png">
<table width="82%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="4%" height="20">&nbsp; </td>
    <td width="96%" height="20"> 
      <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif"><u>IceWM 
        Bosnian Translation Files</u></font></b></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="2"> 
      <div align="center"><u> </u></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"><?php 

	$handle=opendir('.');

 	
 	echo "<h4>\n\r";

 	while (false !== ($file = readdir($handle))) {

 		echo "<a href=\"".$file."\">".$file."</a><br>";

	}

	echo "</h4>\n\r";

 	closedir($handle); 

?></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <hr>
    </td>
  </tr>
</table>

</BODY>

</HTML>