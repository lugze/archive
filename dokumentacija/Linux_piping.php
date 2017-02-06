<html>
<head>
<title>Linux Piping</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">
<font size="6" color="#000000"><b><i><font size="5">Linux Piping</font></i></b></font> 
<p align="left"><font size="3"><i><b>Nedim Hadzimahmutovic - <a href="mailto:grungy@linux.org.ba">grungy@linux.org.ba</a></b></i></font><font size="4"><a href="mailto:grungy@linux.org.ba"><br>
  </a></font><font size="4" color="#333333">07.06.2003</font><font size="4">.- 19.02.2006 <i><b>v0.8</b></i></font></p>
<hr>
Mogucnost korištenja pipinga je jedna od moci Unixoidnih sistema. Korištenje ove tehnike u terminalu je dobar trik, a i predstavlja olakšanje pri radu. Piping je takoder raširena metoda medu C programerima. Bez pipinga, bilo bi potrebno pisati velike kolicine koda, da bi se uradili jednostavni zadaci. U osnovi Piping cini akt pokretanja neke komande/programa i zatim slanje njenog izlaznog rezultata na drugi program ili datoteku, znaci zapisivanje u tu datoteku.
<hr>
<p>&nbsp;</p>
<h2>Rad sa pipingom </h2>
<h3>I/O redirekcija </h3>
<p>Napravite tekst datoteku koja ce sadrzati mnogo linija teksta sacinjenih od rijeci TUX, a zatim jednu recenicu koja ce sadrzati rijec TUX i rijec Linux. Zatim ukucajte sljedece " <strong>grep TUX moja_datoteka.txt </strong>". Rezultat ovog zadataka ce kao i obicno biti izlistan na ekranu, a sacinjavat ce pretragu za recenicama koje sadrze rijec TUX. Medutim, ako ukucamo " <strong>grep TUX moja_datoteka.txt &gt; tux_recenice.txt </strong>". Rezultat mozete vidjeti u datoteci <em>tux_recenice.txt </em>. Vidimo da je rezultat komande grep redirektiran i zapisan u datoteku <em>tux_recenice.txt </em>. Dio komande " <strong>&gt; tux_recenice.txt </strong>" kaze shellu da napravi novu datoteku pod nazivom <em>tux_recenice.txt </em> i u nju zapise rezultat komande <em>grep </em>, umjesto da sve izlista na ekran. Ako vec postoji datoteka sa istim imenom onda ce rezultat komande <em>grep </em> biti zapisan preko sadrzaja te datoteke. Kao sto smo primjetili redirekciju izvrsavamo pomocu znaka &gt; , koji se jos i zove <strong>Output redirektor </strong>. </p>
<p>Medutim, ako umjesto znaka &gt; stavimo znak &gt;&gt;, sadrzaj vec postojece datoteke ce ostati isti, a rezultat ce biti dodan na zadnju liniju teksta. Pomocu ' <strong>echo' </strong> komande, koja ce neki tekst jednostavno izlistati na ekran, mozemo dodavati tekst u neku datoteku, npr. </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">echo "pingvin" >> tux_recenice.txt </td>
  </tr>
</table>
<p>Takoder redirekciju mozemo vrsiti i pomocu znaka &lt; , ili kako se jos zove <strong>Input redirektor </strong>. Ovaj znak ima funkciju da redirektira sadrzaj neke datoteke na input ( <em>stdin </em>), odnosno sadrzaj odredene datoteke bi zamjenili ono sto bi inace dolazilo sa tastature. </p>
<p>Primjer: </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grep Tux &lt; tux_recenice.txt </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>Input i output redirektori se mogu i kombinovati. Tako na primjer komanda <em>cp </em> se inace koristi za kopiranje datoteka, medutim ako u nekom slucaju ta komanda ne postoji ili je taj program ostecen, mozemo koristiti <em>cat </em> komandu na sljedeci nacin: </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">cat &lt; datoteka1 &gt; datoteka2 </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>Ovo je slicno kao i <strong>cp datoteka1 datoteka2 </strong></p>
<h3>Piping pomocu | znaka </h3>
<p>Prava moc pipinga je kada jedan program moze da cita output nekog drugog programa. Posmatrajmo grep komandu kada je pokrenemo bez argumenata. </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
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
<p>&nbsp;</p>
<p>grep cita sa ulaza, tastature, i ispisuje recenicu u kojoj se nalazi rijec Tux, tako da takve recenice su prikazane dva puta. Sada ukucajte " <strong>grep TUX moja_datoteka.txt | grep Linux </strong>". Prvi grep izlista sve Tux recenice kao output. Znak | vrijednosti iz outputa prenosi na input sljedece komande, koja je takoder grep komanda. Druga <em>grep </em> komanda pregleda sadrzaj inputa u potrazi za recenicama koje sadrze rijec <em>Linux </em> u sebi. Komanda <em>grep </em> na ovaj nacin se cesto koristi kao filter, i moze se koristiti u vise primjeraka, npr. </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">"grep L moja_datoteka.txt| grep i | grep n | grep u | grep x" </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="left"><b><u><font size="4">Korisni Primjeri Linux Pipinga &amp; Redirekcije: </font></u></b></p>
<p>&#8226;  Sljedeci primjer izlistava listu procesa u datoteku test.txt. </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; ps &gt; test.txt</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>	&#8226;  Komanda "<b>ps -aux</b>" izlistava sve procese (programe) koji su pokrenuti 
  u tom momentu. Lista procesa ce biti poslana na grep komandu, koja ce taj sadrzaj 
  pretraziti u potrazi za datim stringom, u ovom slucaju "<i>user</i>". Krajnji 
  rezultat na ekranu bi bila lsita svih procesa koji je odredjeni korisnik pokrenuo. 
  String "<i>user</i>" mozemo zamjeniti sa bilo kojim imenom korisnika na toj 
  linux masinom. Na ovaj nacin mozemo pratiti rad odredjenih korisnika. </p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; ps -aux | grep "user"</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226;  Lista procesa koje je pokrenuo odredjeni korisnik, snima se u datoteku korisnikovi_procesi.txt (rijec korisnik zamjeniti sa loginom zeljenog korisnika): </p>
<p>&nbsp;</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; ps -aux | grep korisnik &gt; korisnikovi_procesi.txt </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Listing trenutno pokrenutih procesa, stranica po stranica:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; ps -Hefw | less</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Snimanje listinga direktorijau datoteku:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:/usr &gt; ln -l &gt; ~/usr-listing.txt</td>
  </tr>
</table>
<p>navedena komanda snima sadrzaj direktorija <em>/usr</em> u home direktorij korisnika u datoteku <em>usr-listing.tx</em>t .</p>
<p>&nbsp;</p>
<p>&#8226;  Sljedeci primjer koristeci komandu cat, sadrzaj datoteke test.txt salje komandi grep, koja prikazuje samo rezultate koje sadrze rijec blah. </p>
<p>&nbsp;</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:/usr &gt; cat test.txt | grep &quot;blah&quot;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Datoteka <em>/etc/servise</em> sadrzi listu prepoznatljivih TCP/IP servisa, ciji sadrzaj mozemo sortirati po abecedi na sljedeci nacin:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; cat /etc/services | sort</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Sljedeca komanda je nadopuna prethodno navedene, osim sto kao dodatak, komanda <em>tail</em> uzima zadnjih 50 linija datoteke services, i <em>less</em> komanda prikazuje sadzaj stranicu po stranicu.</p>
<p>&nbsp;</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="2">grungy@linux:~&gt; cat /etc/services | sort | tail -n 50 | less</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Zamsilite da imate datoteku koja sadrzi hiljade e-mail adresa, i trebate ih 
  sortirati i zatim raspodjeliti u manje dijelove. Da bi ovaj posao obavili koristi 
  se piping tehnika. Komanda cat ucitava sadrzaj datoteke <i>lista.txt</i> i salje 
  je komandi sort koja ih sortira, koristeci argumente. Argumenat "<b>-f</b>" 
  znaci da se nema razlike izmedju malih i velikih slova, argumenat "<b>-t @</b>" 
  definise razmak izmedju redova, argumenat "<b>-k 2</b>" govori da se sortiranje 
  izvrsi po domeni u e-mail adresi, <br>
</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; cat lista.txt | sort -f -t @ -k 2 | split -l 500 - lista</td>
  </tr>
</table>
<p><br>
  komanda "<b>split -l 500 - lista</b>" govori da se rezultat sa sortiranja izreze 
    u datoteke dugo po 500 linija, i da im daje imena da pocinju sa rijecju "<b>lista</b>", 
    npr. listaaa, listaab, listaac itd.</p>
<p>&nbsp;</p>
<p>&#8226; Sortirafni fajlovi se mogu spojiti (opcija -m odnosno merge), koristeci -m opciju:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; sort -m prvi_kvartal drugi_kvartal &gt; prvo_polugodiste.txt</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Piping <em>man</em> stranice neke komande u datoteku. Komanda <em>col</em> sluzi da filtrira output, tako sto izbacuje nepozeljne karaktere,ostavljajuci samo backspace (^H). Kao primjer izabran je '<em>ls man</em>':</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; man ls | col -bx &gt; datoteka.txt</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&#8226; Zelite saznati koji dorektoriji i stabla zauzimaju najvise prostora? Unesite sljedeci pipe:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; du -sm $(find $1 -type d -maxdepth 1 -xdev) | sort -g</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>da dobijete listing svih direktorija u stablu, kucajte:</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; find $1 -type d | xargs du -sm | sort -g</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>  <br>
&#8226; Provjera da li je program apache instaliran, odnosno rpm paket (rpm bazirane distribucije):</p>
<table width="77%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td height="10">grungy@linux:~&gt; rpm -qa | grep apache </td>
  </tr>
</table>
<p>&nbsp;</p>
<hr>
<p align="center"><font face="Nimbus Sans l" color="#000000"><i>copyleft</i> <br>
  <u><a href="http://www.lugze.org">Linux User Group Of Zenica - LugZe</a></u></font> 
</p>
<div align="center">
<p>&nbsp; </p>
</div>
</body>
</html>
