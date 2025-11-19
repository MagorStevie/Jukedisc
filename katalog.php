<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JukeDisc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php
    include("includes/header.php");

    $ky_1 = "4 190";
    $ky_2 = "1 610";
    $ky_3 = "1 990";
    $ky_4 = "1 690";
    $ky_5 = "5 490";
    $ky_6 = "2 290";

    $el_1 = "31 190";
    $el_2 = "31 190";
    $el_3 = "31 190";
    $el_4 = "6 390";
    $el_5 = "6 490";
    $el_6 = "11 790";
    $el_7 = "17 890";

    $ba_1 = "12 890";
    $ba_2 = "9 990";
    $ba_3 = "46 990";
    $ba_4 = "10 690";

    $uk_1 = "8 690";
    $uk_2 = "1 550";
    $uk_3 = "2 590";
    $uk_4 = "1 890";
    $uk_5 = "1 490";

    $př_1 = "239";
    $př_2 = "199";
    $př_3 = "549";
    $př_4 = "149";
    ?>
    <script>
        function myFunction1() {
            var x = document.getElementById("myDIV1");
            x.style.display = "flex";
            x.style.flexDirection = "column";
            var x = document.getElementById("k1");
            x.style.textDecoration = "underline"
            var x = document.getElementById("k2");
            x.style.textDecoration = "none"
            var x = document.getElementById("k3");
            x.style.textDecoration = "none"
            var x = document.getElementById("k4");
            x.style.textDecoration = "none"
            var x = document.getElementById("k5");
            x.style.textDecoration = "none"
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction2() {
            var x = document.getElementById("myDIV2");
            x.style.display = "flex";
            x.style.flexDirection = "column";
            var x = document.getElementById("k2");
            x.style.textDecoration = "underline"
            var x = document.getElementById("k1");
            x.style.textDecoration = "none"
            var x = document.getElementById("k3");
            x.style.textDecoration = "none"
            var x = document.getElementById("k4");
            x.style.textDecoration = "none"
            var x = document.getElementById("k5");
            x.style.textDecoration = "none"
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction3() {
            var x = document.getElementById("myDIV3");
            x.style.display = "flex";
            var x = document.getElementById("myDIV3");
            x.style.flexDirection = "column";
            var x = document.getElementById("k3");
            x.style.textDecoration = "underline"
            var x = document.getElementById("k2");
            x.style.textDecoration = "none"
            var x = document.getElementById("k1");
            x.style.textDecoration = "none"
            var x = document.getElementById("k4");
            x.style.textDecoration = "none"
            var x = document.getElementById("k5");
            x.style.textDecoration = "none"
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction4() {
            var x = document.getElementById("myDIV4");
            x.style.display = "flex";
            var x = document.getElementById("myDIV4");
            x.style.flexDirection = "column";
            var x = document.getElementById("k4");
            x.style.textDecoration = "underline"
            var x = document.getElementById("k2");
            x.style.textDecoration = "none"
            var x = document.getElementById("k3");
            x.style.textDecoration = "none"
            var x = document.getElementById("k1");
            x.style.textDecoration = "none"
            var x = document.getElementById("k5");
            x.style.textDecoration = "none"
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction5() {
            var x = document.getElementById("myDIV5");
            x.style.display = "flex";
            var x = document.getElementById("myDIV5");
            x.style.flexDirection = "column";
            var x = document.getElementById("k5");
            x.style.textDecoration = "underline"
            var x = document.getElementById("k2");
            x.style.textDecoration = "none"
            var x = document.getElementById("k3");
            x.style.textDecoration = "none"
            var x = document.getElementById("k4");
            x.style.textDecoration = "none"
            var x = document.getElementById("k1");
            x.style.textDecoration = "none"
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
        }

        function openPopup() {
            document.getElementById("popupOverlay").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popupOverlay").style.display = "none";
        }
    </script>
    <div id="popupOverlay" class="popup-overlay">
        <div class="popup">
            <h2>Něco se pokazilo!</h2>
            <p>Zkuste to později</p>
            <button class="close-btn" onclick="closePopup()">Zavřít</button>
        </div>
    </div>
    <div class="katalog">
        <div class="katalog_main">
            <div class="parametry">
                <button id="k1" onclick="myFunction1()">Klasické kytary</button>
                <button id="k5" onclick="myFunction5()">Elektrické kytary</button>
                <button id="k2" onclick="myFunction2()">Baskytary</button>
                <button id="k3" onclick="myFunction3()">Ukulele</button>
                <button id="k4" onclick="myFunction4()">Příslušenství</button>
            </div>
            <div class="produkty">
                <div id="myDIV1" class="ky">

                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/klas/blond-sc-44s-r-nat.avif" alt="">
                            </div>
                            <h3>Blond SC-44S R NAT
                            </h3>
                            <p><?php print($ky_1) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Klasická kytara Blond SC-44S R NAT v 4/4 velikosti nabízí polomasivní konstrukci s přední deskou z masivu smrku a zadní deskou a luby z vrstveného palisandru, mahagonový krk a palisandrový hmatník a kobylku. Struny jsou přes nultý pražec z tvrzeného kompozitního materiálu s kovovými částicemi (plastic steel) uchyceny v klasických chromovaných mechanikách. Stylové zpracování podtrhuje nanesený lesklý lak a tradiční prvky v podobě dekorativní rozety a plastové lemovky (ABS). Na kytaře jsou nataženy struny značky Savarez.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/klas/blond-oc-44-bk.avif" alt="">
                            </div>
                            <h3>Blond OC-44 BK
                            </h3>
                            <p><?php print($ky_2) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Klasická kytara Blond OC-44 BK v 4/4 velikosti nabízí tělo zhotovené z vrstveného smrku a lípy, krk ze dřeva okoumé a hmatník a kobylku z moderního kompozitního materiálu. Struny jsou přes plastový nultý pražec uchyceny v klasických chromovaných mechanikách s bílými kolíčky. Stylové zpracování podtrhuje nanesený lesklý lak, černá úprava přední desky a tradiční prvky v podobě dekorativní rozety a plastové lemovky (ABS).</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/klas/blond-oc-34-bb.avif" alt="">
                            </div>
                            <h3>Blond OC-34 BB
                            </h3>
                            <p><?php print($ky_3) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Dětská klasická kytara Blond OC-34 BB v 3/4 velikosti nabízí tělo zhotovené z vrstveného smrku a lípy, krk ze dřeva okoumé a hmatník a kobylku z moderního kompozitního materiálu. Struny jsou přes plastový nultý pražec uchyceny v klasických chromovaných mechanikách s bílými kolíčky. Stylové zpracování podtrhuje nanesený lesklý lak, Blue Burst finiš přední desky a tradiční prvky v podobě dekorativní rozety a plastové lemovky (ABS).</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/klas/blond-oc-34-nat.avif" alt="">
                            </div>
                            <h3>Blond OC-34 NAT
                            </h3>
                            <p><?php print($ky_4) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Dětská klasická kytara Blond OC-34 NAT v 3/4 velikosti nabízí tělo zhotovené z vrstveného smrku a lípy, krk ze dřeva okoumé a hmatník a kobylku z moderního kompozitního materiálu. Struny jsou přes plastový nultý pražec uchyceny v klasických chromovaných mechanikách s bílými kolíčky. Stylové zpracování podtrhuje nanesený lesklý lak a tradiční prvky v podobě dekorativní rozety a plastové lemovky (ABS).</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/klas/cort-ac-200-nat.avif" alt="">
                            </div>
                            <h3>Cort AC-200 NAT
                            </h3>
                            <p><?php print($ky_5) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Tato klasická kytara z řady Cort AC nabízí moderní prvky v podobě osazení kvalitní elektronikou Fishman nebo spodní výřez těla pro snazší hru na vysokých polohách hmatníku. Jedná se o cenově dostupný model vyrobený z kvalitních dřev charakteristický vřelým, hlubokým, tónem. Tak jako všechny modely z řady AC je i tato kytara poměrně velkorysá k preciznosti zahrání a odpustí řadu drobných chybek – představuje tak ideální nástroj pro začínající kytaristy.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>

                </div>
                <div id="myDIV2" class="ba">

                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/bas/cort-b5-element-optb.avif" alt="">
                            </div>
                            <h3>Cort B5 Element OPTB
                            </h3>
                            <p><?php print($ba_1) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Nové baskytary Element od firmy Cort v sobě kombinují ty nejlepší prvky ze série Artisan B, kvalitní zpracování a skvělý poměr cena/výkon, díky čemuž potěší nejen profesionální muzikanty, ale také hudební nadšence, kteří hledají opravdu kvalitní nástroj za rozumnou cenu.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/bas/jet-guitars-jjb-300-sb.avif" alt="">
                            </div>
                            <h3>JET Guitars JJB-300 SB
                            </h3>
                            <p><?php print($ba_2) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>JET JJB-300 SB je cenově dostupná čtyřstrunná elektrická baskytara v JB designu. Tělo z “pečeného” topolu zdobí stylový Sunburst finiš. Krk i hmatník nástroje jsou vyrobeny z rovněž tepelně upraveného dřeva kanadského javoru. Krk vyztužuje dvoucestná výztuha, plochu hmatníku rozděluje dvacet pražců a černé poziční tečky.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/bas/sandberg-california-tm-4-mt-bb-pff-adt.avif" alt="">
                            </div>
                            <h3>Sandberg California TM 4 MT BB PFF ADT
                            </h3>
                            <p><?php print($ba_3) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Elektrické baskytary Sandberg California TM jsou nástroje vycházející z léty osvědčeného designového konceptu Jazz Bass. Stejně jako ostatní nástroje Sandberg, i tyto jsou vyráběny v Německu, a to ze zcela prvotřídních materiálů týmem velmi zkušených kytarářů. O kvalitu se zde skutečně netřeba bát.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/bas/jet-guitars-jpb-300-sg-r.avif" alt="">
                            </div>
                            <h3>JET Guitars JPB-300 SG R
                            </h3>
                            <p><?php print($ba_4) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>JET Guitars přináší nový pohled na svět elektrických baskytar, zaměřený na hráče všech úrovní. Model JPB-300 SG R je perfektní volbou pro baskytaristy, kteří hledají nejen skvělý výkon, ale i vizuální přitažlivost. Tento nástroj, s tělem z topolu, s krkem z kanadského pečeného javoru a hmatníkem z palisandru, nabízí vynikající hratelnost a výjimečný zvuk. Vysoce kvalitní snímače poskytují silné a hluboké basy, zatímco vyšší tóny zůstávají jasné a artikulované.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                </div>
                <div id="myDIV3" class="uk">

                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/uk/flight-maia-baritone-eq-a-natural.avif" alt="">
                            </div>
                            <h3>Flight Maia Baritone EQ-A Natural
                            </h3>
                            <p><?php print($uk_1) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Maia Baritone EQ-A Natural je elektroakustické barytonové ukulele osazené kovovými strunami. Kombinace přední desky z masivu mangovníku a zadní desky a lubů z laminovaného palisandru poskytuje nástroji krásně vřelý bohatý zvuk, který je díky kovovým strunám i bez ozvučení dostatečně hlasitý. V rámci materiálů pro krk a hmatník padla volba na osvědčená dřeva, africký mahagon a palisandr, používaná u prémiových nástrojů.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/uk/cascha-hh-2300l-concert-mahogany-lh-black.avif" alt="">
                            </div>
                            <h3>Cascha HH 2300L Concert Mahogany LH Black
                            </h3>
                            <p><?php print($uk_2) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Akustické ukulele pro leváky Cascha HH 2300L Concert Mahogany LH Black z řady Mahogany Series je cenově dostupný nástroj, který potěší děti i dospělé. Spolu s ukulele získáte i praktický polstrovaný obal a tři trsátka, takže můžete okamžitě vyrazit za zábavou.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/uk/flight-dus-321-mah-natural.avif" alt="">
                            </div>
                            <h3>Flight DUS 321 MAH Natural
                            </h3>
                            <p><?php print($uk_3) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Slovinská značka Flight je dalším zajímavým pojmem na poli výrobců ukulelí. Nabízí široké spektrum těchto populárních kompaktních nástrojů v klasických i méně tradičních tvarech a standardních velikostech. Začínající hráče a tuláky s muzikantskou duší potěší kvalitně zpracované cenově dostupnější modely ukulelí zhotovené z klasických i exotických dřevin v přírodních a barevných úpravách, nebo cestovní modely ukulelí z řady Travel Series s tělem z odolného plastu. Zkrátka nepřijdou ani náročnější muzikanti a profi hráči, kteří mohou vybírat ze špičkově zpracovaných polo/celomasivních modelů elektroakustických ukulelí.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/uk/bamboo-u-21-crown.avif" alt="">
                            </div>
                            <h3>Bamboo U-21 Crown
                            </h3>
                            <p><?php print($uk_5) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Řada New Generation značky Bamboo představuje cenově dostupná ukulele v koncertní a sopránové velikosti ozdobená pestrobarevnými grafickými motivy. Sopránové ukulele s označením U-21 CROWN nabízí tělo zhotovené z lipové překližky, krk z okoumé, hmatník a kobylku z ořechu a uchycení strun přes nultý a sedlový pražec z kosti v mechanikách kytarového typu. Nástroj je dodáván v obalu.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/uk/flight-nus-350-dc.avif" alt="">
                            </div>
                            <h3>Flight NUS 350 DC
                            </h3>
                            <p><?php print($uk_4) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Tělo sopránového ukulele NUS 350 Dreamcatcher je zhotoveno z laminovaného sapele, dřeva botanicky příbuzného s mahagonem/pravým mahagonem (proto bývá označováno jako sapele mahogany). Krk a hmatník nástroje jsou vyrobeny z afrického okoumé a ořechu, což je rovněž poměrně často používaná kombinace dřev. Struny jsou přes nultý a sedlový pražec z kosti ukotveny v ladicích mechanikách kytarového typu (Open Geared) a ořechové kobylce. Stylovost nástroje podtrhuje výrazná laserová rytina topu zhotovená podle ručně kreslené předlohy.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                </div>
                <div id="myDIV4" class="pr">

                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/př/trs.avif" alt="">
                            </div>
                            <h3>Fender Aero Acrylic Picks 1.5mm
                            </h3>
                            <p><?php print($př_1) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Trsátka značky Fender ze série Aero Acrylic v sobě kombinují tradiční želvovinový design, léty ozkoušený tvar a jasný, artikulovaný tón akrylového materiálu. Ačkoliv svým vzhledem připomínají tradičnější celuloidová trsátka, jejich materiál je z tvrdšího a pevnějšího termoplastu, který z vaší kytary vytáhne pronikavý, expresivní tón. Okraje trsátek jsou jemně zkosené, což napomáhá plynulé hře bez nežádoucích přezvuků. Ideální také jako dárek pro kytarové nadšence.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/př/daddario-guitar-strap-black-red.avif" alt="">
                            </div>
                            <h3>D'Addario Guitar Strap Black & Red
                            </h3>
                            <p><?php print($př_2) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Základní, cenově dostupné popruhy od americké značky D’addario ve třech barevných provedeních – černobílá, černočervená a černomodrá. Jsou vyrobeny z polyesteru a mají pevná koženková zakončení, takže zaručují bezpečné uchycení vašeho nástroje. Samozřejmostí je také nastavitelná délka.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/př/guitto-ggs-15-brown.avif" alt="">
                            </div>
                            <h3>
                                Guitto GGS-15 Brown
                            </h3>
                            <p><?php print($př_3) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Kytarový stojan Guitto GGS-15 se stane spolehlivým parťákem pro odložení vašeho nástroje a zároveň perfketním designovým prvkem do vašeho obýváku, ložnice nebo zkušebny. Pokud hledáte kvalitní a stabilní stojan pro svou kytaru nebo baskytaru, ale zároveň vám záleží na designu vašeho stojanu, tento kousek pro vás bude tou správnou volbou. Stojan je vyroben z pevného jasanového dřeva, které je jemně lakované tak, aby byla zachována přirozená kresba dřeva. V místech styku s nástrojem je stojan opatřen gumovou ochranou, která nástroj chrání proti poškrábání. Ať už hledáte stojan pro svou akustickou či elektrickou kytaru nebo baskytaru, Guitto GGS-15 vás zajisté nezklame.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/př/ernie-ball-mute-noodle-guitar.avif" alt="">
                            </div>
                            <h3>Ernie Ball Mute Noodle - Guitar
                            </h3>
                            <p><?php print($př_4) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Mute Noodle Guitar od společnosti Ernie Ball je praktická pomůcka, která vám umožní zkrotit zvuk vaší elektrické (či akustické) kytary. Díky gumovému materiálu získáte měkčí a tišší tón, který vám umožní jamovat po nocích, cvičit dlouhé hodiny, nebo eliminovat nežádoucí přezvuky při nahrávání. Jeho instalace je navíc velmi jednoduchá – tlumítko jednoduše nasunete na struny poblíž kobylky a můžete hrát.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>

                </div>
                <div id="myDIV5" class="el">

                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-mn-moon-white.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky MN Moon White
                            </h3>
                            <p><?php print($el_1) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Podoba elektrické kytary PRS Silver Sky je výsledkem úzké spolupráce mezi firmou PRS a bluesrockovým muzikantem a držitelem ceny Grammy Johnem Mayerem. Design nástroje vychází z oblíbených prvků vintage kytar J. Mayera okořeněných moderní estetikou a feelem.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-rw-laurel-green.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky RW Laurel Green
                            </h3>
                            <p><?php print($el_2) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Podoba elektrické kytary PRS Silver Sky je výsledkem úzké spolupráce mezi firmou PRS a bluesrockovým muzikantem a držitelem ceny Grammy Johnem Mayerem. Design nástroje vychází z oblíbených prvků vintage kytar J. Mayera okořeněných moderní estetikou a feelem.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-mn-stone-blue.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky MN Stone Blue
                            </h3>
                            <p><?php print($el_3) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Podoba elektrické kytary PRS Silver Sky je výsledkem úzké spolupráce mezi firmou PRS a bluesrockovým muzikantem a držitelem ceny Grammy Johnem Mayerem. Design nástroje vychází z oblíbených prvků vintage kytar J. Mayera okořeněných moderní estetikou a feelem.
                            </p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/cort-g200se-srd.avif" alt="">
                            </div>
                            <h3>Cort G200SE SRD
                            </h3>
                            <p><?php print($el_4) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Elektrická kytara G200SE SRD značky Cort z řady G nabízí spojení modernějšího designu těla, HSS konfigurace snímačů a stylového retro finiše. Jedná se o cenově dostupnější nástroj, který jistě osloví začínající i zkušené muzikanty s lety praxe.
                            </p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/cort-g200se-acr.avif" alt="">
                            </div>
                            <h3>Cort G200SE ACR
                            </h3>
                            <p><?php print($el_5) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Elektrická kytara G200SE ACR značky Cort z řady G nabízí spojení modernějšího designu těla, HSS konfigurace snímačů a stylového retro finiše. Jedná se o cenově dostupnější nástroj, který jistě osloví začínající i zkušené muzikanty s lety praxe.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/jet-guitars-jj-350-bgt.avif" alt="">
                            </div>
                            <h3>JET Guitars JJ-350 BGT
                            </h3>
                            <p><?php print($el_6) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Tělo elektrické kytary JJ-350 BGT v dobře známém offset designu je zhotoveno z pečeného topolu. Přišroubovaný krk z kanadského javoru a hmatník nástroje prošly před kompletací tepelnou úpravou, díky které je dřevo stabilnější a kytara zároveň získává vzhled a feel již vyzrálých nástrojů.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                    <div class="produkt">
                        <div class="produkt_main">
                            <div>
                                <img src="images/produkty/el/vintage-vs6v-green-metalflake-30th-anniversary.avif" alt="">
                            </div>
                            <h3>Vintage VS6V Green Metalflake 30th Anniversary
                            </h3>
                            <p><?php print($el_7) ?> Kč</p>
                        </div>
                        <div class="popis">
                            <p>Elektrická kytara VS6V Green Metalflake 30th Anniversary v double-cut SG designu je součástí limitované řady, kterou britská značka Vintage Guitars slaví třicetiny. A takové patnáctiny krát dva je potřeba pořádně oslavit.</p>
                            <button class="open-btn" onclick="openPopup()">Přidat do košíku</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php
    include("includes/footer.php")
    ?>

</body>

</html>