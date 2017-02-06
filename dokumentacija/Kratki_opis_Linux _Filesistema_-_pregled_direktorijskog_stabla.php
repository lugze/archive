<html>
<head>
<title>Kratki opis Linux Filesistema (pregled direktorijskog stabla)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<p><font face="Nimbus Sans l"><b><i><font size="5">Kratki opis Linux Filesistema 
  (pregled direktorijskog stabla)</font></i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;<b><i><font size="3">Nedim 
  Hadzimahmutovic <a href="mailto:grungy@linux.org.ba">grungy@linux.org.ba</a> 
  </font></i></b></font> <font face="Nimbus Sans l" color="#000000"><b><i><font size="3">v0.2</font></i></b></font><br>
  <i>07.10.2002 </i> </p>
<hr>
<font face="Nimbus Sans l" color="#000000"><i>U ovom poglavlju mozete procitati 
o tome kako je linux direktorijsko stablo organizovano. Citavo stablo je tako 
napravljeno da ga je moguco podijeliti u manje dijolve, tako da je svaki zasebno 
sposoban biti na odvojenoj particiji ili cak hard disku tako da ti dijelovi mogu 
biti ograniceni na odredjenu velicinu, sto zavisi od velicine particije . Ovo 
prije svega omogucuje laksu administraciju masine. Glavni dijelovi su root (/), 
/usr, /var, i /home filesistemi. Svaki dio ima odredjenu svrhu. Direktorijsko 
stablo je tako dizajnirano da veoma dobro radi i mrezi linux masina koje mogu 
da dijele medjusobno neke dijelove filesistema.</i></font>
<hr>
<p><font face="Nimbus Sans l" color="#000000"><i>* root filesistem</i></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>* /usr filesistem</i></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>*/var filesistem</i></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>* /home filesistem</i></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><font face="'Times New Roman'"><b><i>/bin</i></b></font></font></p>
<p><font face="Nimbus Sans l" color="#000000"><font face="'Times New Roman'"><i>- 
  U ovom direktoriju se nalaze komande koje su potrebne prilikom podizanja sistema, 
  i kmande koje koriste normalno korisni prilikom rada, odnosno poslije dizanja 
  sistema.</i></font></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><font face="'Times New Roman'"><b><i>/sbin</i></b></font></font></p>
<p><font face="Nimbus Sans l" color="#000000"><font face="'Times New Roman'"><i>- 
  Slican /bin direktoriju, samo sto sadrzi komande koje nisu namijenjene normalnim 
  korisnicima, znaci komande koje uglavnom koristi root.</i></font></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/etc</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>- Konfiguracijske datoteke specificne 
  za masinu, kako ih mi podesimo.</i></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/root</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">- Kucni, home, direktorij za root 
  korisnika. Ovaj direktorij inace nije pristupan normalnim korisnicima na sistemu.</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/lib</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">- Biblioteke koje su potrebne za 
  pokretanje programa.</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/lib/modules</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>- Loadable kernel moduli, pogotovo 
  oni koji su potrebni za oporavak sistema poslije pada</i><b><i> sistema.</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/dev</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">- Device datoteke.</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/tmp</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">- Trenutne datoteke. Medjutim danas 
  se trenutne datoteke uglavnom smjestaju i <b>/var/tmp </b>direktorij i programi 
  koji se pokrecu nakon dozanja sistema bi trebali da koriste ovaj direktorij. 
  Direktorij /tmp je cesto simbolicna veza (link) na /var/tmp dir.</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/boot</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000">- Datoteke koje su koristene od 
  LILO izbornika.</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000"><b><i>/mnt</i></b></font></p>
<p><font face="Nimbus Sans l" color="#000000"><i>- </i><b><i> </i></b><i>Tacka 
  u kojoj su smjesteni trenutno mountirani uredjaji itd.</i></font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<p><font face="Nimbus Sans l" color="#000000">Za pojedinacne opise vaznijih direktorija 
  ( /etc, /dev, /usr, /var, /proc ) i datoteka pod njima, pogledajte sljedeci 
  link: http://ze.lugbih.org/textware</font></p>
<p><font face="Nimbus Sans l" color="#000000">&nbsp;</font></p>
<hr>
<p align="center"><font face="Nimbus Sans l" color="#000000"> copyleft <a href="http://www.lugbih.org">LugBih</a>, 
  <a href="http://ze.lugbih.org">LugZe</a></font></p>
</body>
</html>
