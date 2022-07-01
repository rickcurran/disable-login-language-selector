=== Disable Login Language Selector ===
Contributors: rickcurran
Donate link: https://paypal.me/rickcurranqreate
Tags: login, languages
Requires at least: 5.9
Tested up to: 5.9
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kui teil on WordPress 5.9 ja uuemates versioonides lubatud rohkem kui üks keel, eemaldage sisselogimisekraanilt keelevalija.

== Kirjeldus ==

WordPress 5.9 lisas uue keelevalija, mis võimaldab kasutajatel sisselogimisekraani rippmenüüst keeli vahetada, kui teie WordPressi installimisel on lubatud rohkem kui üks keel. See pistikprogramm pakub kiiret ja lihtsat viisi selle keelevalija ilmumise vältimiseks.

See on väga lihtne pistikprogramm, mis on ette nähtud kasutamise hõlbustamiseks: peate lihtsalt installima ja aktiveerima pistikprogrammi ning see takistab keele rippmenüü ilmumist teie saidi sisselogimisekraanile.

Teise võimalusena saate sama efekti saavutada, kui lisate oma teema faili `functions.php` järgmise koodirea:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Ekraanipildid ==

1. See ekraanipilt näitab keele rippmenüüd, mis peidetakse, kui see pistikprogramm on lubatud.

== Paigaldamine ==

1. Laadige pistikprogrammi pakett üles oma saidi pistikprogrammide kataloogi või otsige oma WordPressi juhtpaneeli jaotises Pluginad WordPressi pistikprogrammide kataloogist käsku "Keela sisselogimiskeele valija".
2. Pärast üleslaadimist või installimist peate pistikprogrammi aktiveerima oma WordPressi armatuurlaua jaotises Pluginad.
3. Keelevalija ei tohiks enam teie saidi sisselogimiskuvale ilmuda.

== Korduma kippuvad küsimused ==

= Mida see pistikprogramm teeb? =

WordPress 5.9 lisas uue keelevalija, mis võimaldab kasutajatel sisselogimisekraani rippmenüüst keeli vahetada, kui teie WordPressi installimisel on lubatud rohkem kui üks keel. See pistikprogramm pakub kiiret ja lihtsat viisi selle keelevalija ilmumise vältimiseks.

See on väga lihtne pistikprogramm, mis on ette nähtud kasutamise hõlbustamiseks: peate lihtsalt installima ja aktiveerima pistikprogrammi ning see takistab keele rippmenüü ilmumist teie saidi sisselogimisekraanile.

Teise võimalusena saate sama efekti saavutada, kui lisate oma teema faili `functions.php` järgmise koodirea:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= Miks ma peaksin seda pistikprogrammi kasutama? =

Kui teie veebisaidil on aktiivne rohkem kui üks keel, on teie sisselogimisekraanil nähtav WordPress 5.9-sse lisatud keelevalija. Kui te ei soovi, et see keelevalija oleks nähtav, siis selle pistikprogrammi kasutamine peatab selle kuvamise.

On mitu põhjust, miks teie veebisaidil võib olla aktiivne mitu keelt, kuid te ei soovi, et keelevalija oleks saidi kasutajatele nähtav.

Võib-olla on teil kohandatud keelevalija juba olemasoleva teema või pistikprogrammi osana paigas, nii et WordPressi keelevalija pole vajalik.

Või nagu tavaliselt, installiti WordPress vaikekeeleks inglise (Ameerika Ühendriigid). Nendel juhtudel põhjustab järgmise keele lubamine rohkem kui ühe aktiivse keele, näiteks inglise (Ameerika Ühendriigid) ja inglise (UK), võimaldades seega keelevalija olenemata sellest, kas soovite saidi kasutajatele saada mitut keelevalikut.

= Olen installinud plugina, kuid ma näen endiselt keelevalijat =

Kontrollige, kas pistikprogramm on õigesti üles laaditud, installitud ja aktiveeritud.

== Muudatuste logi ==

= 1.0.1 =

- Funktsionaalseid muudatusi pole, see värskendus lihtsalt muudab pistikprogrammi faili lühikirjeldust, et see vastaks lugemise faili kirjelduses kirjutatule

= 1.0 =

- Esialgne pistikprogrammi ehitamine.
- Lisatud PayPali annetuslink