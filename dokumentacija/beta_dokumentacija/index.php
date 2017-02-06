<HTML>
<TITLE>Lista</TITLE>
<BODY bgcolor=#d1d1d1>
<?php 
	$handle=opendir('.');
 	echo "<h2><STRONG>Lista za direktorij : ".getcwd()."\n\r</STRONG></h2><BR><HR>";
 	echo "<h4>\n\r";
 	while (false !== ($file = readdir($handle))) {
 		echo "<a href=\"".$file."\">".$file."</a><br>";
	}
	echo "</h4>\n\r";
 	closedir($handle); 
?>
</BODY>
</HTML>