# UPV/EHU 2016/2017 Ikasturteko Web Sistemetako Proiektua
Errepositorio honetan Web Sistemak ikasgaieko proiektua aurkituko duzute oso-osorik (kodea, irudiak, e.a.).
Jarraian fitxategien laburpen txiki bat egingo da laguntza gisa (adibidez PKE ikasgaiean lana errazteko):
* orrialdeko goiburuak eta oinak hiru fitxategietan daude banatuak
  * orrialdeGoia.php fitxategiak orrialde gehienen <head> sekzioa irekitzen du eta oinarrizko fonfigurazioa jartzen du
    * fitxategi honetan irekitzen da baita ere sesioa
  * orrialdeNabigazioa.php fitxategiak goiburuko botoiak eta nabigazio barrak definitzen ditu (</head> eta <body> tag-ak orrialde bakoitzean definitu behar dira)
  * orrialdeOina.php fitxategian orrialdearen oina definitzen da (irudiak eta linkak) eta </html> ixten da
* CSS nagusia style.css da, bertan definitzen da proiektuko estilo nagusia
  * badaude beste CSS fitxategi batzuk mugikorretan eta interfazea moldatzeko
* irudiak karpetan gordetzen dira web orrialdeko ikono gehienak
* web orrialdea erabiltzeko beharrezkoa da db karpetan dagoen erabiltzaileak.sql taulen definizioa inportatzea phpmyadmin kudeatzailean
  * fitxategi hau datu base huts batean sartu behar da eta bertan sortuko ditu taulak eta oinarrizko datuak
* hiru erabiltzaile daude erabilgarri:
  * GUEST motako erabiltzailea
    * ez du login egin behar, defektuzko erabiltzailea
  * USER motako erabiltzailea
    * erregistratzean sortzen den erabiltzaile mota, funtzionalitate gehiago ditu
    * erabiltzailea: a000@ikasle.ehu.eus
    * pasahitza: asdfasdfasdf
  * IRAKASLEA motako erabiltzailea
    * administrazio funtzionalitate aurreratuak ditu
    * erabiltzailea: rosa123@ikasle.ehu.eus
    * pasahitza: 123456
