<HTML><head>
<title>Korisne i Interesantne datoteke na vasem Linux Sistemu</title></head>

<body bgcolor="#ffffff" text="#000000">
<strong><big><font size="5"><i>Korisne i Interesantne datoteke na vasem Linux 
Sistemu</i></font></big></strong><br>
<i><br>
<b><font size="3">Nedim Hadzimahmutovic <a href="mailto:grungy@linux.org.ba">grungy@linux.org.ba</a></font></b></i><br>
07.10.2002 <i>v0.1</i> <br>
<br>
<hr>

Tekst predstavlja popis datoteka koje vam daju infromacije o vasem sistemu, masini, nacinu rada i samom radu linux
<br>operativnog sistema. Lista predstavlja kracu zbirku datoteka. Sadrzaj daototeke mozete pregledati pomocu komande <b>cat</b>
(<b>" cat datoteka "</b>).
<hr>
<br>Lista:


<br><br><b>/etc/passwd</b>

	 <br> <br>Datoteka predsavlja bazu korisnika, i sadrzi podatke o tim korisnicima, kao stu su korisnicko ime, ime i prezime, home
	<br>direktorij, enkriptovanu sifru i ostale informacije o tom korisniku. Medjutim danas taj enkriptovani password je smjesten u
	<br>
<i>/etc/shadow</i> datoteci, koju je nasuprot <i>/etc/passwd</i> datoteci moguce 
procitati samo ako ste root. <br>
<br><br><b>/etc/fstab</b>
<br><br>Lista fajlsistema koji su mountirani automatski prilikom startanja mashine (<b>mount -a</b>).



<br><br><br><b>/etc/inittab</b>
<br><br>Konfiguracijska datoteka za <b>init</b>.


<br><br><br><b>/etc/motd</b>
<br><br>Poruka dana (Message Of The Day). Ova poruku izborno podesava administrator sistema, i sluzi za slanje poruka svim korisnicima
<br>te mashine. Poruka se prikazuje poslije uspjesnog prijavljivanja korisnika. Kod vecine distribucija pocetna vrijednost te poruke je "Have a lot of fun..."
<br>ako ste root mozete je mijenjati po volji, npr kao neku dobrodoslicu.


<br><br><br><b>/etc/mtab</b>
<br><br>Lista trenutno mountiranih fajlsistema


<br><br><br><b>/usr/include/asmerrno.h</b>

	<br><br>  Ova datoteka sadrzi kompletnu listu osnovnih error poruka,


 <br>Primjer Sadrzaja:

<br><br>EPERM            1      /* Operation not permitted */          /* Operacija nije dozvoljena*/
<br>ENOENT           2      /* No such file or directory */           /* Ne postoji takava datoteka ili direktorij */
<br>ESRCH            3      /* No such process */                    /* Ne postoji takav proces */



<br><br><br><b>/proc/version</b>
	<br><br>Verzija kernela, takodjer daje informacije o gcc verziji, linux distribuciji, datumu itd.. ( ukucaj: cat /proc/version )
	
	
<br><br><br><b>/proc/uptime</b>
	<br><br>Vrijeme koliko je racunar upaljen.
	
	
<br><br><br><b>/proc/meminfo</b>
<br><br>Datoteka sadrzi informacije o potrosnji memorije, fizicke i swap memorije.



<br><br><br><b>/proc/modules</b>
<br><br>Kernel moduli koji se pokrenuti u momentu.



<br><br><br><b>/proc/kmsg</b>
<br><br>Poruke koje je izbacio kernel.



<br><br><br><b>/proc/cpuinfo</b>
<br><br>Informacije o procesoru, tip, model, performanse procesora.

written in pico

<hr>
<div align="center"><br>
  07.10.2002 - Linuxnjubi Document <br>
  copyleft <b><a href="http://www.linux.org.ba">LugBih</a></b>, <b><a href="http://ze.lugbih.org">LugZe</a></b> 
</div>
</HTML>
