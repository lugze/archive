<html>
<head>
<meta http-equiv="content-type" content="Korisne i Interesantne datoteke na vasem Linux Sistemu" />
<title>Korisne i Interesantne datoteke na vasem Linux Sistemu</title>
</head>
<body bgcolor="#FFFFFF">
<div> 
  <table width="96%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td> 
        <p style="text-align: left"><strong><big><font size="5"><i>Korisne i Interesantne 
          datoteke na vasem Linux Sistemu</i></font></big></strong><br>
          <i><br>
          <b><font size="3">Nedim Hadzimahmutovic <a href="mailto:grungy@linux.org.ba">grungy@linux.org.ba</a></font></b></i><br>
          20.11.2002 <i>v1.0</i><br />
        </p>
        <hr>
        Tekst predstavlja popis datoteka koje vam daju infromacije o vasem sistemu, 
        masini, nacinu rada i samom radu linux <br>
        operativnog sistema. Lista predstavlja kracu zbirku datoteka. Sadrzaj 
        daototeke mozete pregledati pomocu komande <b>cat</b> (<b>" cat datoteka 
        "</b>). 
        <hr>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left"><b>Interesantne - Korisne datoteke: </b></p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left; margin-left: 10pt"><font size="4"><span style="font-weight: bold; font-size: 12.000000pt">Direktorij 
          /etc</span></font></p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left"><span style="font-weight: bold">/etc/passwd 
          </span></p>
        <p style="text-align: left"> Datoteka predsavlja bazu korisnika, i sadrzi 
          podatke o tim korisnicima, kao stu su korisnicko ime, ime i prezime, 
          homedirektorij, enkriptovanu sifru i ostale informacije o tom korisniku. 
          Medjutim danas taj enkriptovani password je smjesten u/etc/shadow datoteci, 
          koju je nasuprot /etc/passwd datoteci moguce procitati samo ako ste 
          root. </p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left"> <span style="font-weight: bold">/etc/fstab 
          </span></p>
        <p style="text-align: left"> Lista fajlsistema koji su mountirani automatski 
          prilikom startanja mashine (mount -a). </p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left"><span style="font-weight: bold">/etc/group</span></p>
        <p style="text-align: left"> Datoteka slicna /etc/passwd datoteci, samo 
          sto umjesto korisnika opisuje grupe, za vise informacija pogledajte 
          manualne stranice za group (man group)</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/etc/inittab </span></p>
        <p style="text-align: left"> Konfiguracijska datoteka za init. </p>
        <p style="text-align: left">&nbsp;</p>
        <p style="text-align: left"> <span style="font-weight: bold">/etc/issue</span></p>
        <p style="text-align: left"><br />
          Output od <span style="font-weight: bold">getty </span>prije login prompta. 
          Najcesce sadrzi kratki opis ili pozdravnu poruku za sistem. Sadrzaj 
          zavisi od sistem administratora.</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/etc/securetty</span></p>
        <p style="text-align: left"> Identifikuje sigurne treminale, npr. terminale 
          sa kojih je dozvoljeno da se root moze logovati. Uglavnom su izlistane 
          virtualne konsole, tako da je nemoguce pristupiti preko mreze, modema 
          i sl. na sistem kao root, tako da se onemogucava provala u sistem.</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/etc/motd </span></p>
        <p style="text-align: left"> Poruka dana (Message Of The Day). Ova poruku 
          izborno podesava administrator sistema, i sluzi za slanje poruka svim 
          korisnicimate mashine. Poruka se prikazuje poslije uspjesnog prijavljivanja 
          korisnika. Kod vecine distribucija pocetna vrijednost te poruke je "Have 
          a lot of fun..."ako ste root mozete je mijenjati po volji, npr kao neku 
          dobrodoslicu. </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/etc/mtab<br>
          <br>
          </span> Lista trenutno mountiranih fajlsistema </p>
        <p style="text-align: left">&nbsp;</p>
        <p style="text-align: left"><span style="font-weight: bold">/usr/include/asmerrno.h 
          </span></p>
        <p style="text-align: left"> Ova datoteka sadrzi kompletnu listu osnovnih 
          error poruka, </p>
        <p style="text-align: left">Primjer Sadrzaja: </p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left">#define EPERM 1 /* Operation not permitted 
          */ /* Operacija nije dozvoljena*/ </p>
        <p style="text-align: left">#define ENOENT 2 /* No such file or directory 
          */ /* Ne postoji takava datoteka ili direktorij */ </p>
        <p style="text-align: left">#define ESRCH 3 /* No such process */ /* Ne 
          postoji takav proces */ </p>
        <p style="text-align: left">#define EINTR 4 /* Interrupted system call 
          */ /* */ </p>
        <p style="text-align: left">#define EIO 5 /* I/O error */ /* */ </p>
        <p style="text-align: left">#define ENXIO 6 /* No such device or address 
          */ /* */ </p>
        <p style="text-align: left">#define E2BIG 7 /* Arg list too long */ /* 
          */ </p>
        <p style="text-align: left">#define ENOEXEC 8 /* Exec format error */ 
          /* */ </p>
        <p style="text-align: left"><br />
        </p>
        <p style="text-align: left; margin-left: 10pt"><span style="font-weight: bold; font-size: 12.000000pt">Proc 
          Filesistem - /proc</span></p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/version </span></p>
        <p style="text-align: left"> Verzija kernela, takodjer daje informacije 
          o gcc verziji, linux distribuciji, datumu itd.. ( ukucaj: cat /proc/version 
          ) </p>
        <p style="text-align: left"> <span style="font-weight: bold">/proc/devices</span></p>
        <p style="text-align: left"> Lista device drivera koji konfigurisani u 
          trenutni pokrenuti kernel</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/dma</span></p>
        <p style="text-align: left"> Prikazuje koji su DMA kanali tenurno u upotrebi</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/filesystems</span></p>
        <p style="text-align: left"> Filesistemi koji su konfigurisani u kernel</p>
        <p style="text-align: left"><span style="font-weight: bold">/proc/ioports</span></p>
        <p style="text-align: left"> Koji I/O portovi se trenutno koriste </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/uptime </span></p>
        <p style="text-align: left"> Vrijeme koliko je racunar upaljen. </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/meminfo </span></p>
        <p style="text-align: left"> Datoteka sadrzi informacije o potrosnji memorije, 
          fizicke i swap memorije. </p>
        <p style="text-align: left">&nbsp;</p>
        <p style="text-align: left"> <span style="font-weight: bold">/proc/modules 
          </span></p>
        <p style="text-align: left"> Kernel moduli koji se pokrenuti u momentu. 
        </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/kmsg </span></p>
        <p style="text-align: left"> Poruke koje je izbacio kernel. </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/cpuinfo</span> </p>
        <p style="text-align: left"> Informacije o procesoru, tip, model, performanse 
          procesora. </p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/ksyms</span></p>
        <p style="text-align: left"> Tabela simbola za kernel</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/net</span></p>
        <p style="text-align: left"> Informacije statusa za mrezne protokole</p>
        <p style="text-align: left"><br />
          <span style="font-weight: bold">/proc/stat</span></p>
        <p style="text-align: left"> Razlicite statistike o vasem sistemu</p>
        <p style="text-align: left" align="center">&nbsp;</p>
        <p align="center"><b><i> <a href="http://ze.lugbih.org">Linux User Group of Zenica</a> </i></b></p>
        <p align="center"><i><b>20.11.2002 - Linuxnewbie Document </b></i> </p>
      </td>
    </tr>
  </table>
  
</div>
</body>
</html>
