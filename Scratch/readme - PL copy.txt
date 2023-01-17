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

Usuń selektor języka z ekranu logowania, jeśli masz włączony więcej niż jeden język w WordPress 5.9 i nowszych.

== Opis ==

__NOTE FROM RICK, THIS NEXT SECTION IS EXACTLY THE SAME AS ANOTHER SECTION BELOW__

WordPress 5.9 dodał nowy selektor języka, aby umożliwić użytkownikom przełączanie języków z rozwijanej listy na ekranie logowania, jeśli w instalacji WordPressa włączony jest więcej niż jeden język. Ta wtyczka zapewnia szybki i łatwy sposób zapobiegający wyświetlaniu tego selektora języka.

Jest to bardzo prosta wtyczka, która zapewnia łatwość użytkowania: wystarczy zainstalować i aktywować wtyczkę, aby zapobiec wyświetlaniu języka na ekranie logowania do Twojej witryny.

Alternatywnie możesz osiągnąć ten sam efekt, dodając następujący wiersz kodu do pliku `functions.php` w swoim motywie:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Zrzuty ekranu ==

1. Ten zrzut ekranu pokazuje rozwijane menu języka, które będzie ukryte po włączeniu tej wtyczki.

== Installation ==

1. Prześlij pakiet wtyczek do katalogu wtyczek w swojej witrynie lub wyszukaj „Wyłącz wybór języka logowania” w katalogu wtyczek WordPress w sekcji Wtyczki, na pulpicie nawigacyjnym WordPress.
2. Po przesłaniu lub zainstalowaniu musisz aktywować wtyczkę w sekcji Wtyczki na pulpicie WordPress.
3. Selektor języka nie powinien już pojawiać się na ekranie logowania do Twojej witryny.

== Często Zadawane Pytania ==

= Co robi ta wtyczka? =

__NOTE FROM RICK, THIS NEXT SECTION IS EXACTLY THE SAME AS ANOTHER SECTION ABOVE__

WordPress 5.9 dodał nowy selektor języka, aby umożliwić użytkownikom przełączanie języków z rozwijanej listy na ekranie logowania, jeśli w instalacji WordPressa włączony jest więcej niż jeden język. Ta wtyczka zapewnia szybki i łatwy sposób zapobiegający wyświetlaniu tego selektora języka.

Jest to bardzo prosta wtyczka, która zapewnia łatwość użytkowania: wystarczy zainstalować i aktywować wtyczkę, aby zapobiec wyświetlaniu języka na ekranie logowania do Twojej witryny.

Alternatywnie możesz osiągnąć ten sam efekt, dodając następujący wiersz kodu do pliku `functions.php` w swoim motywie:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= Dlaczego miałbym używać tej wtyczki? = 

Jeśli masz więcej niż jeden aktywny język na swojej stronie, selektor języka, który został dodany w WordPress 5.9, będzie widoczny na ekranie logowania. Jeśli nie chcesz, aby ten selektor języka był widoczny, użycie tej wtyczki zatrzyma jego wyświetlanie.

Istnieje kilka powodów, dla których możesz mieć więcej niż jeden aktywny język w swojej witrynie, ale nie chcesz, aby selektor języka był widoczny dla użytkowników witryny:

Być może masz już niestandardowy selektor języka jako część istniejącego motywu lub wtyczki, więc selektor języka WordPress nie jest wymagany.

A może, jak to zwykle bywa, WordPress został zainstalowany z domyślnym językiem ustawionym jako angielski (Stany Zjednoczone). W takich przypadkach włączenie kolejnego języka spowodowałoby, że aktywny byłby więcej niż jeden język, na przykład angielski (Stany Zjednoczone) i Polski, co oznacza włączenie selektora języka niezależnie od tego, czy chcesz mieć wiele opcji językowych dostępnych dla użytkowników witryny.

= Zainstalowałem wtyczkę, ale nadal widzę selektor języka =

Sprawdź, czy wtyczka została poprawnie wgrana, zainstalowana i aktywowana.

== Dziennik zmian ==

= 1.0.1 =

- Brak zmian funkcjonalnych, ta aktualizacja po prostu modyfikuje krótki opis w pliku wtyczki, aby pasował do tego, co jest napisane w opisie pliku readme

= 1.0 =

- Wstępna budowa wtyczki.
- Dodano łącze do darowizn PayPal