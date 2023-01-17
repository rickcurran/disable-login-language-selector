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

Eliminați meniul de selecție a limbii din ecranul de login dacă aveți mai multe limbi activate în WordPress 5.9 și versiuni ulterioare.

== Descriere ==

WordPress 5.9 a adăugat un nou selector de limbă pentru a permite utilizatorilor să schimbe limbile dintr-un meniu de selecție multiplă de pe ecranul de autentificare, dacă mai multe limbi sunt activate la instalarea WordPress. Acest plugin oferă o modalitate rapidă și ușoară de a preveni apariția acestui selector de limbă.

Este un plugin foarte simplu oferit pentru ușurință în utilizare: trebuie doar să instalați și să activați pluginul. Acesta va împiedica apariția meniului de selecție multiplă a limbii pe ecranul de login al site-ului dvs.

Alternativ, puteți obține același efect adăugând următoarea linie de cod la fișierul `functions.php` din tema dvs.:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Capturi de ecran ==

1. Această captură de ecran arată meniul de selecție multiplă a limbii care va fi ascunsă atunci când acest plugin este activat.

== Instalare ==

1. Încărcați codul acestui plugin în directorul de pluginuri de pe site-ul dvs. sau căutați „Dezactivați meniul de selecție a limbii din ecranul de login” în directorul de pluginuri WordPress din secțiunea Pluginuri a aplicației WordPress.
2. Odată încărcat sau instalat, trebuie să activați pluginul din secțiunea Plugin-uri din aplicația WordPress.
3. Meniul de selecție multiplă a limbii nu ar trebui să mai apară pe ecranul de login al site-ului dvs.

== întrebări frecvente ==

= Ce face acest plugin? =

WordPress 5.9 a adăugat un nou selector de limbă pentru a permite utilizatorilor să schimbe limbile dintr-un meniu de selecție multiplă de pe ecranul de autentificare, dacă mai multe limbi sunt activate la instalarea WordPress. Acest plugin oferă o modalitate rapidă și ușoară de a preveni apariția acestui selector de limbă.

Este un plugin foarte simplu oferit pentru ușurință în utilizare: trebuie doar să instalați și să activați pluginul. Acesta va împiedica apariția meniului de selecție multiplă a limbii pe ecranul de login al site-ului dvs.

Alternativ, puteți obține același efect adăugând următoarea linie de cod la fișierul `functions.php` din tema dvs.:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= De ce aș folosi acest plugin? = 

Dacă aveți mai multe limbi active pe site-ul dvs., meniul de alegere multiplă a limbii, care a fost adăugat în WordPress 5.9, va fi vizibil pe ecranul dvs. de login. Dacă nu doriți ca acest meniu de selectare a limbii să fie vizibil, atunci utilizarea acestui plugin va face ca acest meniu să dispară.

Există mai multe motive pentru care se poate să aveți mai multe limbi active pe site-ul dvs. web, dar în același timp nu doriți ca meniul de limbă să fie vizibil pentru utilizatorii site-ului pe ecranul de login:

Poate că aveți deja un meniu de alegere a limbii personalizat, ca parte a unei teme sau a unui plugin existent, așa că nu mai este necesar acest meniu de alegere a limbii care vine împreună cu WordPress.

Sau poate, așa cum este obișnuit, WordPress a fost instalat cu limba implicită setată ca engleză (Statele Unite). În aceste cazuri, activarea unei limbi ulterioare ar duce la existența mai multor limbi active, de exemplu engleza (Statele Unite) și Română. Prin urmare meniul de alegere a limbii se afișează indiferent dacă doriți sau nu să aveți mai multe opțiuni de limbă disponibile pentru utilizatorii site-ului.

= Am instalat pluginul, dar încă văd selectorul de limbă =

Verificați dacă pluginul a fost încărcat, instalat și activat corect.

== Jurnalul modificărilor ==

= 1.0.1 =

- Fără modificări funcționale, această actualizare modifică pur și simplu scurta descriere din fișierul pluginului pentru a se potrivi cu ceea ce este scris în descrierea fișierului readme

= 1.0 =

- Crearea inițială a pluginului.
- S-a adăugat linkul pentru donații PayPal