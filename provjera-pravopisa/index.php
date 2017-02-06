<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=iso-8859-1">
	<TITLE>Provjera Pravopisa Za Bosanski Jezik</TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 1.1.0  (Linux)">
	<META NAME="CREATED" CONTENT="20030505;16534900">
	<META NAME="CHANGED" CONTENT="20040209;18522800">
	<STYLE>
	<!--
		P { color: #000000 }
		H3 { color: #000000 }
	-->
	</STYLE>
</HEAD>

<BODY LANG="en-US" TEXT="#000000" BGCOLOR="#ffffff" DIR="LTR">
<H3><FONT COLOR="#000080"><FONT FACE="Verdana, Arial, Helvetica, sans-serif">Provjera
Pravopisa Za Bosanski Jezik </FONT></FONT>
</H3>
<HR>
<P ALIGN=CENTER><SPAN STYLE="text-decoration: none"><B><FONT FACE="Verdana, Arial, Helvetica, sans-serif"><FONT COLOR="#000080"><a href="http://www.lugze.org/provjera-pravopisa/index.php">Home</a> 
  <a href="index.php?ime=uvod">Uvod</a> <a href="index.php?ime=novosti">Novosti</a> 
  <a href="index.php?ime=status">Status</a> <a href="http://forum.lugbih.org/viewtopic.php?t=930">Rasprava</a></FONT></FONT></B></SPAN></P>
<HR>
<?PHP $ime = $_GET['ime']; 

if ($ime == "") { 
    include("indeks.php"); 
}; 

if ($ime == "uvod") { 
   include("uvod.php"); 
};

if ($ime == "novosti") { 
   include("novosti.php"); 
};

if ($ime == "status") { 
   include("status.php"); 
};



 ?>
<?PHP include("foot.php"); ?>
 <BR>
</BODY>
</HTML>
