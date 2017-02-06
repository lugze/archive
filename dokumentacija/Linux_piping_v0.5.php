<html>
<head>
<title>Linux Piping</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">
<font size="6" color="#000000"><b><i><font size="5">Linux Piping</font></i></b></font> 
<p align="left"><font size="3"><i><b>Nedim Hadzimahmutovic - <a href="mailto:grungy@linux.org.ba">grungy@linux.org.ba</a></b></i></font><font size="4"><a href="mailto:grungy@linux.org.ba"><br>
  </a></font><font size="4" color="#333333">11.10.2002</font><font size="4">. 
  <i><b>v0.5</b></i></font></p>
<hr>
Mogucnost koristenja pipinga je jedna od moci linux sistema. Koristenje ove tehnike 
u terminalu je dobar trik, a i predstavlja olaksanje pri radu. Piping je takodjer 
siroko rasirena metoda medju C programerima. Bez pipinga, bilo bi potrebno pisati 
velike kolicine koda, da bi se uradili jednostavni zadaci. 
<p>U osnovi Piping cini akt pokretanja neke komande/programa i zatim slanje njenog 
  izlazanog rezultata na drugi program ili datoteku, znaci zapisivanje u tu datoteku.</p>
<hr>
<p>&nbsp;</p>
<p>&nbsp; </p>
<p align="left"><b><font size="5">Primjeri Rada Sa Pipingom</font></b></p>
<p align="left"><i><b>Redirekcija sa znakom <font size="4">></font></b></i></p>
<p>&nbsp;</p>
<p>Napravite tekst datoteku koja ce sadrzati mnogo linija teksta sacinjenih od 
  rijeci TUX, a zatim jednu recenicu koja ce sadrzati rijec TUX i rijec Linux. 
  Zatim ukucajte sljedece "<b>grep TUX moja_datoteka.txt</b>". Rezultat ovog zadataka 
  ce kao i obicno biti izlistan na ekranu, a sacinjavat ce pretragu za recenicama 
  koje sadrze rijec TUX. Medjutim, ako ukucamo "<b>grep TUX moja_datoteka.txt 
  > tux_recenice.tx</b><i>t</i>". Rezultat mozete vidjeti u datoteci <i>tux_recenice.txt</i>. 
  Vidimo da je rezultat komande grep redirektiran i zapisan u dattoeku<i> tux_recenice.txt</i>. 
  Dio komande "<b>> tux_recenice.txt</b>" kaze shellu da napravi novu datoteku 
  pod nazivom <i>tux_recenice.txt</i> i u nju zapise rezultat komande <i>grep</i>, 
  umjesto da sve izlista na ekran. Ako vec postoji datoteka sa istim imenom onda 
  ce rezultat komande <i>grep</i> biti zapisan preko sadrzaja te datoteke.<br>
  Medjutim, ako umjesto znaka <i>></i> stavimo znak <i>>></i>, sadrzaj vec postojece 
  datoteke ce ostati isti, a rezultat ce biti dodan na zadjnu liniju teksta. Pomocu 
  <i>echo</i> komande, koja ce neki tekst jednostavno izlistati na ekran, mozemo 
  dodavati tekst u neku datoteku, npr. </p>
<p>&nbsp;</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="2">echo "pingvin" >> tux_recenice.txt </td>
  </tr>
</table>
<p><i><b>Piping pomocu | znaka</b></i></p>
<p>Prava moc pipinga je kada jedan program moze da cita output nekog drugog programa. 
  Posmatrajmo grep komandu kada je pokrenemo bez argumenata. </p>
<p>&nbsp;</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="134">grungy@linux:~> grep Tux<br>
      recenica koja sadrzi rijec Tux<br>
      recenica koja sadrzi rijec Tux<br>
      recenica bez te rijeci<br>
      Tux je pingvin<br>
      Tux je pingvin<br>
      #</td>
  </tr>
</table>
<p>grep cita sa ulaza, tastature, i ispisuje recenicu u kojoj se nalazi rijec 
  Tux, tako da takve recenice su prikazane dva puta. Sada ukucajte <br>
  "<b>grep TUX moja_datoteka.txt | grep Linux</b>". Prvi grep izlista sve Tux 
  recenice kao output. Znak <b>|</b> vrijednosti iz outputa prenosi na input sljedece 
  komande, koja je takodjer grep komanda. Druga <i>grep</i> komanda pregleda sadrzaj 
  inputa u potrazi za recenicama koje sadrze rijec <i>Linux</i> u sebi. Komanda 
  <i>grep</i> na ovaj nacin se cesto koristi kao filter, i moze se koristiti u 
  vise primjeraka, npr.<br>
  <br>
</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="2">"grep L moja_datoteka.txt| grep i | grep n | grep u | grep 
      x"</td>
  </tr>
</table>
<p>Takodjer jedna od korisnih opcija je i znak <i><</i>. Ovaj znak ima funkciju 
  da redirektira sadrzaj neke datoteke na input (<i>stdin</i>), odnosno sadrzaj 
  odredjene datoteke bi zamjenili ono sto bi inace dolazilo sa tastature.</p>
<p> Primjer:</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="30"><font color="#333333">grungy@linux:~></font> <i>grep Tux < 
      tux_recenice.txt</i></td>
  </tr>
</table>
<p align="left"><b><u><font size="4">Korisni Primjeri</font></u></b></p>
<p>&nbsp;</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="2">ps -aux | grep "user"</td>
  </tr>
</table>
<p>Komanda "<b>ps -aux</b>" izlistava sve procese (programe) koji su pokrenuti 
  u tom momentu. Lista procesa ce biti poslana na grep komandu, koja ce taj sadrzaj 
  pretraziti u potrazi za datim stringom, u ovom slucaju "<i>user</i>". Krajnji 
  rezultat na ekranu bi bila lsita svih procesa koji je odredjeni korisnik pokrenuo. 
  String "<i>user</i>" mozemo zamjeniti sa bilo kojim imenom korisnika na toj 
  linux masinom. Na ovaj nacin mozemo pratiti rad odredjenih korisnika. </p>
<p>&nbsp;</p>
<table width="77%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
    <td height="10">cat lista.txt | sort -f -t @ -k 2 | split -l 500 - lista</td>
  </tr>
</table>
<p>Zamsilite da imate datoteku koja sadrzi hiljade e-mail adresa, i trebate ih 
  sortirati i zatim raspodjeliti u manje dijelove. Da bi ovaj posao obavili koristi 
  se piping tehnika. Komanda cat ucitava sadrzaj datoteke <i>lista.txt</i> i salje 
  je komandi sort koja ih sortira, koristeci argumente. Argumenat "<b>-f</b>" 
  znaci da se nema razlike izmedju malih i velikih slova, argumenat "<b>-t @</b>" 
  definise razmak izmedju redova, argumenat "<b>-k 2</b>" govori da se sortiranje 
  izvrsi po domeni u e-mail adresi, <br>
  <br>
  komanda "<b>split -l 500 - lista</b>" govori da se rezultat sa sortiranja izreze 
  u datoteke dugo po 500 linija, i da im daje imena da pocinju sa rijecju "<b>lista</b>", 
  npr. listaaa, listaab, listaac itd.</p>
<hr>
<p align="center"><font face="Nimbus Sans l" color="#000000"><i>copyleft</i> <br>
  <u><a href="http://ze.lugbih.org">Linux User Group Of Zenica - LugZe</a></u></font> 
</p>
<div align="center">
<p>&nbsp; </p>
</div>
</body>
</html>
