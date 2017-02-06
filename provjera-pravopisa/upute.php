<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=iso-8859-1">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 1.1.0  (Linux)">
	<META NAME="CREATED" CONTENT="20040209;18180900">
	<META NAME="CHANGED" CONTENT="20040209;18264300">
</HEAD>
<BODY LANG="en-US" DIR="LTR">
<P STYLE="text-decoration: none"><I><U><B>Upute:</B></U></I></P>
<P STYLE="text-decoration: none">Za sve koji &#382;ele da redovno
testiraju funkcionanost provjere pravopisa, dostupan je kratak vodi&#269;,
koji obja&scaron;njava, kako napraviti potrebne datoteke da bi
provjera pravopisa funkcionirala. Ovo je jako potrebno znati, jer sam
projekat zavisi od wordliste, koja se konstantno nadopunjava, i
gre&scaron;ke se ispravljaju. 
</P>
<P><U>Stvaranje munchliste</U>:</P>
<P><I><B>munchlist -l bosnian.aff wordlista &gt; bosnian.munched</B></I></P>
<P><BR><BR>
</P>
<P><U>Stvaranje hashdatoteke</U>:</P>
<P>Da bi napravili hash datoteku, kao finalni korak, potrebno je da
imamo gotovu munchlistu i affix datoteku. Hash listu stvaramo pomo&#263;u
sljede&#263;e skripte:</P>
<P ALIGN=LEFT><I><B><SPAN LANG="hr-HR"><FONT SIZE=2>buildhash
bosnian.munched ./bosnian.aff bosnian.hash</FONT></SPAN></B></I></P>
</BODY>
</HTML>