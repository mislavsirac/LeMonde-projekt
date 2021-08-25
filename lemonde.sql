-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 12:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemonde`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8mb4_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Mislav', 'Širac', 'mislavsirac', '$2y$10$ftYnnIludbsoG2X44DQvY.RII.TSohoF/12B2apRwL083Q96XshOW', 0),
(2, 'Antea', 'Aljinović', 'aaljinovic', '$2y$10$57wcpXtdfsyHgNRhdA0JvOQfYAx22bl8GgTH0N0ofLxrKMLnsO0ba', 0),
(4, 'Administrator', 'Administratović', 'admin', '$2y$10$X5lL48xonVe5Xa6dc0HxaOEXjADrtx0nZbH0mX4oZJgXoXBx5HIp.', 1),
(11, 'Mislav', 'Širac', 'msirac', '$2y$10$azZODKEFYabalzdvho1TG.rAsIWArs7gns3I2nwCwQxYPw4QYAdha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(18, '13.06.2021.', 'OBLJETNICA OSNUTKA 101. BRIGADE ZNG-A', 'Milanović: Nisam bio u ratu, bio sam u Zagrebu, radio sam za Hrvatsku, ali nisam nosio pušku', 'Svečanost je održana u Centru za kulturu i obrazovanje Susedgrad u Gajnicama, a prilikom svečanosti prikazali su se slajdovi fotografija svih poginulih pripadnika 101. brigade.\r\n\r\nPredsjednik Zoran Milanović je u svojem govoru istaknuo kako je taj detalj bilo dirljivo i ponizno gledati.\r\n\r\n\"Natjera te da na trenutak spustiš pogled i da se zapitaš: Gdje sam ja bio? Ja nisam bio u ratu, bio sam u Zagrebu, radio sam za Hrvatsku, ali nisam nosio pušku. Slava i čast, što da kažem više od toga\", poručio je Milanović.\r\n\r\nIstaknuo je kako se moramo držati zajedno iako u demokraciji nije moguće isto misliti i govoriti.\r\n\r\n\"Svađa zna biti katkada produktivna, ali bitno je da se složimo. Da shvatimo da nas malo, koliko nas ima, ne možemo nikako uspjeti i da nemamo šanse ako nemamo nekakvu osnovnu razinu sloge\", naglasio je Milanović.\r\n\r\nPredsjednik je dodao kako ćemo vječno pamtiti ljude koji su svoje živote dali tijekom rata.', 'mile.jpg', 'politika', 1),
(19, '13.06.2021.', 'Država: Penavina kuća na Visu nije stambeni prostor, zato smo im', 'RODITELJIMA vukovarskog gradonačelnika Ivana Penave država je 2014. godine darovala trosobni stan .', 'Zato nas je sada zanimalo što je s kućom na Visu koju su otkrile Index Istrage. Prije objave tog članka pitali smo ih što bi bilo kada bi se dokazalo da je u vrijeme sklapanja ugovora o darovanju stana postojala druga nekretnina. Odgovorili su da bi tada došlo do raskidanja ugovora s Penavama.\r\n\r\n\"Ukoliko bi se naknadno ispostavilo da su u vrijeme darovanja stana Ante i Zdenka Penava imali u vlasništvu drugi useljivi stambeni objekt, u takvoj situaciji stranke bi svakako morale vratiti predmetni stan u državno vlasništvo i darovni ugovor bi se raskinuo\", decidirano su tvrdili. \r\n\r\nZato smo im se obratili nakon objave tog članka. I pitali kako je moguće da kuća na Visu nije bila prepreka u dobivanju besplatnog stana u Vukovaru.\r\nKuća za odmor nije stambeni objekt, kaže država\r\n\r\nKažu da se u primjeni Zakona o područjima posebne državne skrbi vlasništvo, pazite sad, kuće za odmor \"nije smatralo zaprekom za ostvarenje prava na stambeno zbrinjavanje jer se kuća za odmor nije smatrala drugim useljivim stambenim objektom koji bi predstavljao zapreku sukladno citiranom članku\", naveli su iz Državnog ureda. \r\n\r\nDa ne bi bilo zabune, kasnije su još jednom naglasili da je obitelj Penava nekretninu na otoku kategorizirala kao \"kuću za odmor - stoga nije predstavljala zapreku za darovanje\" stana.\r\n\r\nValja spomenuti da se apartmani smješteni unutar Penavine kuće oglašavaju jedino na stranici lokalne Turističke zajednice te da ih, za razliku od susjednih, nema na popularnim tražilicama poput Bookinga ili Airbnba. Na portalu TZ-a pojavljuju se samo četiri slike kuće. Sve je prikazuju izvana. Zaista se trude da je iznajme.  \r\nKuća na Visu bila je useljiva\r\n\r\nNa nedavnoj konferenciji za medije, koju je Ivan Penava održao nakon našeg ranijeg članka o njegovim nekretninama, pred kamerama je mahao fotografijama kuće na Visu sugerirajući da nije bila u idiličnom stanju kad su je kupili 1998. godine. \r\n\r\nHtjeli smo znati postoje li šanse da je kuća bila neuseljiva u vrijeme kad su Penavini dobivali stan. I je li država izašla na teren provjeriti tu nekretninu. \r\n\r\n\"Spisu ne priliježe dokaz iz kojeg bi bilo vidljivo da je na kući za odmor na Visu izvršen očevid radi procjene useljivosti iste, međutim, budući da je ista kuća kategorizirana kao kuća za odmor (a ovo je utvrđeno uvidom u spisu priloženo porezno rješenje grada Visa) to ni nije bilo potrebno, iz naprijed navedenih razloga\", odgovorili su iz Državnog ureda. \r\n\r\nTo znači da je kuća bila useljiva, sređena, dotjerana u vrijeme kad je Penavama poklonjen stan. Inače ne bi dobila kategorizaciju. \r\nDržava ne zna je li još nekom iznajmljivaču dala stan\r\n\r\nPostavili smo im i sljedeće pitanje: Je li vam poznato u koliko je slučajeva dotad Republika Hrvatska darovala stanove obiteljima koje su bile vlasnice useljivih kuća na atraktivnim lokacijama?\r\n\r\nOdgovorili su kako \"taj podatak nije poznat\". Ali da su sve podnositelje zahtjeva tretirali jednako. \r\nJoš su i potpisali izjavu da nemaju druge nekretnine\r\n\r\nPozitivno mišljenje da se Penavama pokloni stan dalo je i Općinsko državno odvjetništvo u Vukovaru. \r\n\r\nPitali smo jesu li provjeravali imaju li osobe kojima će država pokloniti stan već neke druge nekretnine. Kažu da je za to bio zadužen Državni ured za stambeno zbrinjavanje koji im je 5. svibnja 2014. godine dostavio zaključak da su ispunjeni svi uvjeti za predmetni pravni posao darovanja nekretnine propisani Zakonom o područjima posebne državne skrbi.\r\n\r\n\"Napominjemo kako isti nikada nisu prijavili mjesto Vis kao adresu stanovanja, pa pravo vlasništva predmetne obitelji na Visu nije tada provjeravano. Ujedno napominjemo i kako je supruga podnositelja zahtjeva dala pisanu izjavu da nema u vlasništvu drugi useljiv stambeni objekt te isti nije prodala ili na drugi način otuđila iz svog vlasništva nakon 8. listopada 1991.\", odgovorili su. \r\n\r\nDržavno odvjetništvo nije, kaže, utvrdilo postojanje zakonskih zapreka. \r\nImali su tri kuće prije nego što su dobili stan \r\n\r\nNakon našeg članka o kući na Visu portal Telegram otkrio je da su uoči dobivanja stana roditelji Ivana Penave na njega i sestru prepisali dvije nekretnine u Vukovaru. Kuću u Ulici Josipa bana Jelačića dali su Danijeli Penavi, a Ivanu Penavi pripala je nekretnina u Dubrovačkoj ulici, odakle je nekidan održao presicu. Ta je kuća bila suvlasništvo njegove obitelji u kojoj je Penavin otac imao jednu trećinu. \r\n\r\nTo su, dakle, već tri kuće koje su imali prije nego što su dobili stan od države. \r\n\r\nIz Ureda vukovarskog gradonačelnika Ivana Penave obećali su nam poslati odgovore na upite do konca prošlog tjedna, no to se nije dogodilo. Ako i kad stignu, rado ćemo ih objaviti. ', 'roditelji.jpg', 'politika', 1),
(20, '13.06.2021.', 'Banožić:', 'Do kraja godine dugoročan plan razvoja Oružanih snaga RH', '\r\n\r\nSABORSKI klubovi u četvrtak su jednoglasno pozdravili vladin prijedlog da se u operaciju potpore miru Sea Guardian u Sredozemlju uputi do 35 pripadnika hrvatskih Oružanih snaga, pri čemu su oporbeni zastupnici otvorili pitanje opremljenosti Hrvatske vojske.\r\n\r\nMinistar obrane Mario Banožić zastupnicima je najavio da će do kraja godine pred njima biti dugoročan plan razvoja Oružanih snaga, dokument koji će pratiti jasni izvori financiranja i opremanja u Hrvatskoj vojsci (HV).\r\n\r\n\"Cilj nam je da u sve tri grane Oružanih snaga idemo u modernizaciju, podizanje razine obuke, kao i štićenje dosadašnjih prava koje HV ima\", rekao je ministar.\r\n\r\nSačić: Hrvatska vojska je slabo opremljena, vojni rok mora doći na dnevni red\r\n\r\nŽeljko Sačić (Klub HS) ustvrdio je, naime, da je \"u ovom trenutku HV vrlo slabo opremljena\", u pomorskom djelu, kopnenoj vojsci i Hrvatskom ratnom zrakoplovstvu (HRZ), \"o kojem možemo samo pričati\".\r\n\r\nSDP-ov Franko Vidović poručuje da Hrvatska ne smije izgubiti sposobnost HRZ-a, da je došlo vrijeme da se preispita i uloga Hrvatske ratne mornarice i Obalne straže te njihove sinergije. Treba, kaže, preispitati je li ovakav način funkcioniranja najbolji i što bi se dogodilo ako bismo Obalnu stažu stavili pod civilnu upravu.\r\n\r\nSačić je upozorio i na problem zaštite državne granice zbog ilegalnih migracija. \"Potencijali granične policije su ograničeni, vojsku ćemo kad-tad morati staviti u funkciju na granicu, naravno ne sa šmajserima i mitraljeskim gnijezdima\", kazao je te poručio da vojni rok mora biti stavljen da dnevni red, prilagođen modernim vremenima i nekim europskim primjerima.\r\n\r\nOštre kritike HDZ-ovih zastupnika zaradio je Matko Kuzmanić (SDP) porukom Banožiću da od njega očekuje da neće nastaviti putem kojim je MORH išao u prošlom mandatu.\r\n\r\n\"Nažalost, u prošlom mandatu MORH je postalo simbol sumnjivih i skrivenih nabava, djelom i korupcije, dijelom i određenih tragedija, loših procjena i sigurnosnih propusta\", izjavio je Kuzmanić koji od ministra očekuje da ozbiljno preispita sustav domovinske sigurnosti, kao i neke odluke.\r\n\r\nAnte Bačić (HDZ) njegove tvrdnje naziva \"užasnim lažima\" i ističe kako je u mandatu ministra Damira Krstičevića MORH imao otvorenu nabavu i radio transparentno.\r\n\r\nOperacija na Sredozemlju početkom rujna\r\n\r\nU operaciju koja bi trajala oko 20 dana početkom rujna išli bi brodom Hrvatske ratne mornarice Dubrovnik, rekao je ministar Banožić napominjući da je 1,2 milijuna kuna osigurano u državnom proračunu, a prethodnu suglasnost dao je predsjednik Republike.  \r\n\r\nOperacija Sea Guardian je NATO-om vođena operacija započeta 2016. godine u kojoj je Hrvatska do sada sudjelovala dva puta.\r\n\r\nPripadnici hrvatskih Oružanih snaga do danas su pod okriljem NATO-a, Europske unije i UN-a sudjelovali u operacijama na područjima 28 država i dobivali pohvale, istaknuo je Anđelko Stričak (HDZ). Podsjetio je kako je Hrvatska početkom devedesetih i sama koristila mirovne misije, a već 1999. njeni su vojnici sudjelovali u misijama.\r\n', 'banozic.jpg', 'politika', 1),
(21, '13.06.2021.', 'Danski savez objavio nove informacije o Eriksenovu stanju', 'CHRISTIAN ERIKSEN je u bolnici nakon što se jučer na utakmici 1. kola skupine B Eura ', 'Eriksena su na terenu oživljavali desetak minuta, nakon čega je hitno prebačen u bolnicu, odakle se nešto kasnije javio suigračima koji su potom odlučili da će nastaviti utakmicu. Finska je slavila 1:0.\r\n\r\nDan nakon utakmice i šokantnog događaja o svemu se oglasio i Danski nogometni savez.\r\n\r\n\"Ovo su najnovije vijesti. Jutros smo razgovarali s Eriksenom, koji je pozdravio svoje suigrače. Njegovo stanje je stabilno i ostat će u bolnici zbog daljnjih pretraga. Momčad i čitav stručni stožer dobili su stručnu pomoć i jedni drugima pomažu da prebrode jučerašnji događaj. Od srca zahvaljujemo svima na porukama podrške koje su stigle od brojnih saveza i klubova. Slobodno nastavite slati poruke Danskom savezu, a mi ćemo učiniti sve da svaka od njih dođe do Christiana\", objavio je Danski savez na Twitteru.', 'danska.jpg', 'sport', 1),
(22, '13.06.2021.', 'Pojavila se glasina da je Eriksen kolabirao zbog cjepiva: \"Ne, o', 'Liječnici su se borili za život Christiana Eriksena', 'Danski se nogometaš srušio iz čista mira. Eriksen je bio pri svijesti kada su ga konačno iznijeli s terena i odveli u bolnicu. Veznjak Intera i najveća zvijezda Danske uspio se iz bolnice javiti suigračima.\r\n\r\nUbrzo potom počele su se širiti priče da se Eriksenu to dogodilo zbog toga što se cijepio protiv koronavirusa. Iz njegovog kluba Intera odmah se javio direktor Giuseppe Marotta:\r\n\r\n\"Eriksen nije imao koronavirus i nije cijepljen protiv koronavirusa\", rekao je Talijan i otklonio sulude teorije.', 'danska1.jpg', 'sport', 1),
(23, '13.06.2021.', 'Kjaer spasio prijatelja Eriksena, pokušao igrati utakmicu pa se ', 'CHRISTIAN ERIKSEN (29) srušio se u 43. minuti utakmice Danske i Finske u Kopenhagenu', 'Danski je reprezentativac pao na travnjak iz čista mira i uslijedile su dramatične scene. Igrači su se okupili oko njega i odmah pozvali pomoć jer su vidjeli da je ostao bez svijesti. Najpribraniji među njima bio je Simon Kjaer.\r\nKjaer je znao što treba\r\n\r\nKjaer je pravovremenom reakcijom spriječio Eriksena da si u nesvjestici proguta jezik kako ne bi došlo do gušenja. Postavio ga je u ispravan položaj i organizirao suigrače da formiraju krug oko njega dok ga je liječnička služba reanimirala.\r\n\r\nNakon što su iz bolnice stigle sjajne vijesti da je Eriksen pri svijesti, utakmica se nastavila nakon gotovo dva sata (20:30) i Finska je golom Pohjanpala u 60. minuti došla do pobjede. Za Kjaera je sve to skupa bilo previše, pa je u 63. minuti izašao s terena. Izbornik Kasper Hjulmand morao ga je zamijeniti.', 'eriksen.jpg', 'sport', 1),
(24, '13.06.2021.', 'Talijani: Donnarumma je dogovorio sve s novim klubom, potpisuje ', 'GIANLUIGI DONNARUMMA sinoć je sačuvao svoju mrežu u visokoj pobjedi Italije ', 'Prvom talijanskom golmanu 30. lipnja istječe ugovor s Milanom, s kojim se nije dogovorio o produljenju. Talijanski mediji pišu da će tijekom vikenda odraditi liječnički pregled i potpisati za PSG.\r\n\r\nNjegov agent Mino Raiola već je dogovorio sve uvjete s pariškim klubom, javljaju Sportitalia i Sky Sport Italia.\r\n\r\nDonnarumma je u Milan stigao kao 14-godišnjak, a već dvije godine kasnije debitirao je za prvu momčad. Već dugo glasi za najboljeg mladog golmana svijeta. Tek su mu 22 godine, a već za sobom ima 251 nastup za Milan.\r\n ', 'talijani.jpg', 'sport', 0),
(25, '13.06.2021.', 'Maicon se u 40. godini vraća u Europu. Odigrat će dvije utakmice', 'LEGENDARNI Brazilac Douglas Maicon (40) i dalje aktivno igra nogomet.', 'Trenutačno je član brazilskog četvrtoligaša Sone, a uskoro bi mogao ostvariti transfer u Europu.\r\n\r\nMaicon je blizu potpisa za amatersku momčad Tre Penne iz San Marina. Riječ je o prvaku istoimene zemlje, a proslavljeni desni bek došao bi pomoći tom klubu u kvalifikacijama za Ligu prvaka. Trebao bi za početak odigrati dvije kvalifikacijske utakmice.\r\n\r\nMaicon je u karijeri igrao za Cruzeiro, Monaco, Inter, Manchester City, Romu, Avai, Ciriciumu i Villa Novu. Za reprezentaciju Brazila nastupio je 76 puta i zabio sedam golova.\r\n\r\nIgrajući za Inter od 2006. do 2012. bio je jedan od najboljih desnih bekova svijeta. S Interom je osvojio 11 trofeja, uključujući četiri talijanska prvenstva i Ligu prvaka.', 'maicon.jpg', 'sport', 0),
(26, '13.06.2021.', 'Bh. mediji: Rijeka prodaje igrača u Premiership', 'IZ bh. medija stižu informacije da bi Rijeka mogla prodati veznjaka Stjepana Lončara ', 'Informaciju su prenijeli i engleski mediji i čini se da je taj posao blizu realizacije.\r\n\r\nRijeka bi trebala zaraditi oko tri milijuna eura, a dio financijskog kolača pripao bi i Širom Brijegu, klubu u kojem je Lončar započeo karijeru.\r\n\r\nLončar je u Rijeci od 2018. godine i prema Transfermarktu vrijedi 2.5 milijuna eura.\r\n\r\nZa Rijeku je ove sezone odigrao 42 utakmice u svim natjecanjima i zabio tri gola te dodao šest asistencija kroz 3480 minuta igre. Za reprezentaciju Bosne i Hercegovine ima devet nastupa.\r\n\r\nNorwich se pak vratio u Premiership, a Englezi pišu kako su klubu hitno potrebni igrači na poziciji veznjaka.', 'rijeka.jpg', 'sport', 0),
(27, '13.06.2021.', 'HSLS, Radnička fronta i još 69 političkih stranaka nije izvijest', 'OD 167 registriranih političkih stranaka, čak 71 nije izvijestila o donacijama dobivenim', 'Naime, sve registrirane stranke, nezavisni saborski zastupnici i nezavisni lokalni vijećnici morali su do 15. srpnja u ponoć Državnom izbornom povjerenstvu (DIP) dostaviti izvješća o donacijama.\r\n\r\nOni koji tu obvezu nisu ispunili napravili su prekršaj za koji mogu biti novčano kažnjeni - stranke od 10 tisuća do 100 tisuća kuna, a nezavisni zastupnici i vijećnici od dvije tisuće do 20 tisuća kuna. Hoće li neka od stranaka biti novčano kažnjena i u kojem iznosu sada je teško predvidjeti s obzirom na proceduru koja slijedi. \r\n\r\nNaime, nakon što DIP obavijesti Državno odvjetništvo RH da su neke stranke počinile prekršaj, na tom tom je tijelu da procijeni \'isplati\' li se pokrenuti postupak s obzirom na činjenicu da brojne stranke nisu imale donacija. Odluči li se, ipak, na taj korak, konačnu odluku o novčanoj kazni donijet će sud. \r\n\r\nO donacijama nisu izvijestili HSLS i Radnička fronta\r\n\r\nPrema DIP-ovim podacima, polugodišnje izvješće dostavilo je 96 stranaka, od čega njih devet izvan zakonom propisanog roka.\r\n\r\nMeđu strankama koje nisu ispunile zakonsku obvezu su i stranaka koje imaju svoje zastupnike u Hrvatskom saboru, konkretno HSLS i Radnička fronta.\r\n\r\nNa istom je popisu i stranka bivšeg predsjednika države Ive Josipovića Naprijed Hrvatska! koja se priključila SDP-u, zatim Nova politika, stranka bivšeg mostovca Vlahe Orepića koji se priključio HSS-u, stranke dvojice župana Damira Bajsa i Stjepana Kožića koje u nazivu imaju i dodatak nezavisna lista.\r\n\r\nObvezu su zaboravile i stranke čiji su zastupnici nekada sjedili u Saboru poput Hrvatskih laburista, Bloka umirovljenici zajedno (BUZ), Srpske narodne stranke.   \r\n\r\nOstale stranke na popisu \'zaboravnih\' uglavnom su slabije poznate široj javnosti poput Međimurske, Splitske, Zelene, Zagorske stranke za Zagreb, Rapskog pučkog sabora, Alternative, Zelinskih laburista - Stranke Prigorja, Agende mladih demokrata, Komunističke partije Hrvatske,  Hrvatske stranke pravaškog bratstva, stranke Modeli altruizma u politici, zatim Sasvim male stranke (SMS), Nezavisne liste boljih, Moje voljene Hrvatske itd.\r\n\r\nOd 1. siječnja do 30. lipnja, za redovne političke aktivnosti od donatora je najviše dobila stranka Milana Bandića (600 tisuća kuna), pa HDZ (560 tisuća).\r\n\r\nSlijedi DP Miroslava Škore (299 tisuća), Fokus (284 tisuće), Hrvatska konzervativna stranka (164 tisuće), Hrvatski suverenisti (152 tisuće), Štromarov HNS (143 tisuće), Hrast (123 tisuće), Reformisti (103 tisuće), platforma Možemo ! (83 tisuće), Most (70 tisuća), Demokrati (68 tisuća), SDP (60 tisuća) itd. Zbrojeno, tih 10-ak stranaka, od  donatora je dobilo više od 2,7 milijuna kuna.\r\n\r\nDonacije za redoviti rad ne treba miješati s onima za izbore, svake imaju svoj račun, posebno se objavljuju one redovite, posebno izborne.\r\n\r\nNiz stranaka izvijestio je da nije primio donacije, među njima su Pupovčev SDSS, HSU Silvana Hrelje, IDS, Glavašev HDSSB, Promijenimo Hrvatsku.\r\n\r\nDa u prvoj polovici godine nisu primili ni kune donacija, izvijestilo je i šest nezavisnih saborskih zastupnika Vladimir Bilek, Veljko Kajtazi, Željko Glasnović, Robert Jankovics, Ermina Lekaj Prljaskaj i Furio Radin.', 'radnicka.jpg', 'politika', 0),
(28, '13.06.2021.', 'Vlada imenovala glavnog državnog rizničara', 'NA zatvorenom dijelu današnje, prve sjednice, vlada je glavnim državnim rizničarem', 'Prethodno je razriješen dosadašnji vršitelj dužnosti nacionalnog dužnosnika za ovjeravanje Stipe Župan, priopćeno je iz Vlade RH.\r\n\r\nZbog odlaska na novu dužnost, s danom 23. srpnja 2020., razriješena je državna tajnica u Ministarstvu vanjskih i europskih poslova dr. sc. Nikolina Brnjac.\r\n\r\nNa osobni zahtjev razriješeni su državni tajnici u Ministarstvu znanosti i obrazovanja dr. sc. Tome Antičić i prof. dr. sc. Branka Ramljak.\r\n\r\nNa osobni zahtjev razriješena je i pomoćnica ministra znanosti i obrazovanja Lidija Kralj.\r\n\r\nNa zatvorenom dijelu sjednice vlada je utvrdila prijedlog odluke o davanju suglasnosti za otvaranje Konzulata. Poštujući odredbe međunarodnih sporazuma, nije u mogućnosti objaviti cjelovit materijal te točke označene stupnjem tajnosti \"ograničeno\".\r\n\r\nDonesene su i odluke o provođenju mjera osiguranja i zaštite. Točka je označena stupnjem tajnosti \"povjerljivo\" te je, navodi se u priopćenju iz vlade, nisu u mogućnosti objaviti.', 'drzavni.jpg', 'politika', 0),
(29, '13.06.2021.', 'Vidović Krišto: Želim čuti zašto treba nositi maske', 'KAROLINA Vidović Krišto, zastupnica Domovinskog pokreta, gostovala je u Dnevniku Nove TV', 'KAROLINA Vidović Krišto, zastupnica Domovinskog pokreta, gostovala je u Dnevniku Nove TV gdje je komentirala novi saziv sabora, program buduće vlade, a dotakla se i nošenja maski, odnosno nenošenja u njenom slučaju.\r\n\r\nNa pitanje zašto odbija nositi masku u sabornici ističe da joj nije namjera nikoga provocirati.\r\n\r\n\"To su preporuke. Predsjedavajućeg sam pitala zašto ju moramo nositi, nije mi znao odgovoriti. Markotić je jedan od stručnjaka u mainstream medijima, ali ima niz epidemiologa koji govore suprotno. Nisam kompetentna, ali sam oprezna s nečim što kaže samo dvoje ljudi. Želim čuti zašto treba nositi maske. Predložila sam da glasamo o tome\" rekla je Vidović Krišto te dodala da i inače nosi marame.\r\n\r\nDodala je da ima \"niz epidemiologa koji su mi rekli da je to apsolutno besmisleno\".\r\n\r\nVidović Krišto je komentirala program buduće vlade koji je danas predstavljen u saboru. Nazvala ga je irelevantnim, a formiranje vlade protuustavnim.\r\n\r\n\"Program Plenkovića je irelevantan jer je vlada sastavljena protuustavno. U Hrvatskoj više nemamo nijednu instituciju kojoj se možemo obratiti\", rekla je Vidović Krišto pa dodala da je sastav nove vlade gotovo identičan prethodnoj.\r\n\r\n\"Opterećen je aferama\", dodala je. ', 'maske.jpg', 'politika', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
