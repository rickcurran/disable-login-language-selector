=== Disable Login Language Selector ===
Contributors: rickcurran
Donate link: https://paypal.me/rickcurranqreate
Tags: login, languages
Requires at least: 5.9
Tested up to: 6.6
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Eliminați selectorul de limbă din ecranul de conectare dacă aveți mai multe limbi activate în WordPress 5.9 și versiuni ulterioare.

== Descriere ==

WordPress 5.9 a adăugat un nou selector de limbă pentru a permite utilizatorilor să schimbe limbile dintr-un meniu derulant de pe ecranul de autentificare, dacă mai multe limbi sunt activate la instalarea dvs. WordPress. Acest plugin oferă o modalitate rapidă și ușoară de a preveni apariția acestui selector de limbă.

Este un plugin foarte simplu care este furnizat pentru ușurință în utilizare: trebuie doar să instalați și să activați pluginul și va împiedica apariția meniului drop-down de limbă pe ecranul de conectare al site-ului dvs.

Alternativ, puteți obține același efect adăugând următoarea linie de cod la fișierul `functions.php` din tema dvs.:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Capturi de ecran ==

1. Această captură de ecran arată lista derulantă a limbii care va fi ascunsă atunci când acest plugin este activat.

== Instalare ==

1. Încărcați pachetul de pluginuri în directorul de pluginuri de pe site-ul dvs. sau căutați „Dezactivați selectorul limbii de conectare” în directorul de pluginuri WordPress din secțiunea Pluginuri a tabloului de bord WordPress.
2. Odată încărcat sau instalat, trebuie să activați pluginul din secțiunea Plugin-uri din tabloul de bord WordPress.
3. Selectorul de limbă nu ar trebui să mai apară pe ecranul de conectare al site-ului dvs.

== întrebări frecvente ==

= Ce face acest plugin? =

WordPress 5.9 a adăugat un nou selector de limbă pentru a permite utilizatorilor să schimbe limbile dintr-un meniu derulant de pe ecranul de autentificare, dacă mai multe limbi sunt activate la instalarea dvs. WordPress. Acest plugin oferă o modalitate rapidă și ușoară de a preveni apariția acestui selector de limbă.

Este un plugin foarte simplu care este furnizat pentru ușurință în utilizare: trebuie doar să instalați și să activați pluginul și va împiedica apariția meniului drop-down de limbă pe ecranul de conectare al site-ului dvs.

Alternativ, puteți obține același efect adăugând următoarea linie de cod la fișierul `functions.php` din tema dvs.:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= De ce aș folosi acest plugin? = 

Dacă aveți mai multe limbi active pe site-ul dvs., selectorul de limbi care a fost adăugat în WordPress 5.9 va fi vizibil pe ecranul dvs. de conectare. Dacă nu doriți ca acest selector de limbă să fie vizibil, atunci utilizarea acestui plugin nu va mai apărea.

Există mai multe motive pentru care este posibil să aveți mai multe limbi active pe site-ul dvs. web, dar nu doriți ca selectorul de limbă să fie vizibil pentru utilizatorii site-ului:

Poate că aveți deja un selector de limbă personalizat ca parte a unei teme sau a unui plugin existent, așa că nu este necesar selectorul de limbă WordPress.

Sau poate, așa cum este obișnuit, WordPress a fost instalat cu limba implicită setată ca engleză (Statele Unite). În aceste cazuri, activarea unei limbi ulterioare ar duce la existența mai multor limbi active, de exemplu engleza (Statele Unite ale Americii) și Română, prin urmare activarea selectorului de limbă indiferent dacă doriți să aveți mai multe opțiuni de limbă disponibile pentru utilizatorii site-ului.

= Am instalat pluginul, dar încă văd selectorul de limbă =

Verificați dacă pluginul a fost încărcat, instalat și activat corect.

== Jurnalul modificărilor ==

= 1.0.1 =

- Fără modificări funcționale, această actualizare modifică pur și simplu scurta descriere din fișierul plugin pentru a se potrivi cu ceea ce este scris în descrierea fișierului readme

= 1.0 =

- Compilarea inițială a pluginului.
- S-a adăugat linkul pentru donații PayPal