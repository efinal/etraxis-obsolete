<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in Polish.
 *
 * @package Engine
 * @subpackage Localization
 * @author Radosław Wójtowicz
 */

$resource_polish = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Wszystkie pola zaznaczone jako wymagane powinny być wypełnione.',
    'Wartość domyślna powinna być z przedziału od %1 do %2.',
    'Konto jest wyłączone.',
    'Konto jest zablokowane.',
    'Nieprawidłowa nazwa użytkownika.',
    'Wprowadzona nazwa konta już istnieje.',
    'Nieprawidłowy adres email.',
    'Hasła nie są identyczne.',
    'Hasło powinno mieć co najmniej %1 znaków.',
    'Projekt o podanej nazwie już istnieje.',
    /* 210 */
    'Grupa o podanej nazwie już istnieje.',
    'Szablon o podanej nazwie lub prefixie już istnieje.',
    'Stan lub skrót o tej nazwie już istnieje.',
    'Pole o podanej nazwie już istnieje.',
    'Nieprawidłowa wartość liczbowa',
    'Wartość liczbowa powinna być z przedziału od %1 do %2.',
    'Wartość "%1" powinna być z przedziału od %2 do %3.',
    'Wartość maksymalna powinna być większa od wartości minimalnej.',
    'Został przekroczony limit "upload_max_filesize" w pliku konfiguracyjnym "php.ini".',
    'Wielkość wysyłanego pliku nie może przekroczyć %1 Kbytes.',
    /* 220 */
    'Przesyłany plik nie został do końca przesłany.',
    'Nie przesłano żadnego pliku.',
    'Brak tymczasowego folderu.',
    'Załącznik o podanej nazwie już istnieje.',
    'Nie znaleziono rekordu.',
    'Filtr o podanej nazwie już istnieje.',
    'Nieprawidłowa wartość daty.',
    'Data powinna być z zakresu od %1 do %2.',
    'Nieprawidłowa wartość czasu.',
    'Czas powinien być z zakresu od %1 do %2.',
    /* 230 */
    'Powiadomienie o tej samej nazwie już istnieje.',
    'Przypomnienie o tej samej nazwie już istnieje.',
    'Przypomnienie zostało wysłane.',
    'Widok o tej samej nazwie już istnieje.',
    'Proszę podać krótki opis tego rekordu.',
    'Błąd zapisu na dysk.',
    'Upload pliku został zatrzymany przez roższeżenie.',
    'Musi być włączna obsługa JavaScript.',
    'To jest automatycznie generowana wiadomość, proszę na nią nie odpowiadać.',
    'Nieprawidłowa wartość dziesiętna.',
    /* 240 */
    'Wartość dziesiętna powinna być w przedziale od %1 do %2.',
    'Widok nie może mieć więcej niż %1 kolumn.',
    'Sprawdzenie wartości "%1" nie powiodło się.',
    'Użytkownik nie uzyskał autoryzacji.',
    'Nieprawidłowa nazwa użytkownika lub hasła.',
    'Nieznany błąd.',
    'Błąd parsowania XMLa.',
    'Zmiany zostały zapisane.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Czy jesteś pewien, że chcesz usunąć wszystkie widoki?',
    'Czy jesteś pewien, że chesz usunąć wybrane konto?',
    'Czy jesteś pewien, że chesz usunąć wybrany projekt?',
    'Czy jesteś pewien, że chesz usunąć wybraną grupę?',
    'Czy jesteś pewien, że chesz usunąć wybrany szablon?',
    'Czy jesteś pewien, że chesz usunąć wybrany status?',
    'Czy jesteś pewien, że chesz usunąć wybrane pole?',
    'Czy jesteś pewien, że chcesz zmienić status tego rekordu?',
    'Czy jesteś pewien, że chesz wznowić wybrany rekord?',
    'Czy jesteś pewien, że chesz przydzielić wybrany rekord?',
    /* 310 */
    'Czy jesteś pewien, że chesz usunąć wszystkie zaznaczone filtry?',
    'Czy jesteś pewien, że chesz usunąć wszytkie zaznaczone powiadomienia?',
    'Czy jesteś pewien, że chesz wysłać wybrane przypomnienie?',
    'Czy jesteś pewien, że chesz usunąć wybrane przypomnienie?',
    'Czy jesteś pewien, że chesz wyjść?',
    'Czy jesteś pewien, że chesz usnąć wybrany rekord?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'polski',
    'Logowanie',
    'OK',
    'Anuluj',
    'Zapisz',
    'Powrót',
    'Następny',
    'Utwórz',
    'Edytuj',
    'Usuń',
    /* 1010 */
    'Rekordy',
    'Konta',
    'Projekty',
    'Zmień hasło',
    'Pole o stausie "%1"',
    'brak',
    'Ilość:',
    'Motyw',
    'Informacje o koncie',
    'Nazwa użytkownika',
    /* 1020 */
    'Pełna nazwa',
    'E-mail',
    'Domyślny',
    'administrator',
    'użytkownik',
    'Opis',
    'Hasło',
    'Potwierdź hasło',
    'wyłączony',
    'zablokowany',
    /* 1030 */
    'Nowe konto',
    'Konto "%1"',
    'Informacje o projekcie',
    'Nazwa projektu',
    'Data utworzenia',
    'zawieszony',
    'Nowy projekt',
    'Projekt "%1"',
    'Grupy',
    'Informacje o grupie',
    /* 1040 */
    'Nazwa grupy',
    'Nowa grupa',
    'Grupa "%1"',
    'Członkowie',
    'Inni',
    'Członek',
    'Szablony',
    'Informacje o szablonie',
    'Nazwa szablonu',
    'Prefix',
    /* 1050 */
    'Nowy szablon',
    'Szablon "%1"',
    'Stany',
    'Informacja o stanie',
    'Nazwa stanu',
    'Skrót',
    'Typ stanu',
    'początkowy',
    'pośredni',
    'końcowy',
    /* 1060 */
    'Odpowiedzialny',
    'nie zmieniaj',
    'przydziel',
    'usuń',
    'Nowy stan',
    'Stan "%1"',
    'Utwórz pośredni',
    'Utwórz końcowy',
    'Przejścia',
    'Uprawnienia',
    /* 1070 */
    'Utwórz początkowy',
    'Dozwolony',
    'Pola',
    'Informacje o polu',
    'Kolejność',
    'Nazwa pola',
    'Typ pola',
    'liczba',
    'tekst',
    'pole tekstowe',
    /* 1080 */
    'Wymagany',
    'tak',
    'nie',
    'Min.wartość',
    'Max.wartość',
    'Max.długość',
    'wymagany',
    'Nowe pole (krok %1/%2)',
    'Pole "%1"',
    'Pozwolenie na odczyt',
    /* 1090 */
    'Pozwolenie do zapisu',
    'Informacje ogólne',
    'ID',
    'Projekt',
    'Szablon',
    'Stan',
    'Wiek',
    'Nowy rekord',
    'Rekord "%1"',
    'Moje rekordy',
    /* 1100 */
    'Historia',
    'Opóźnij',
    'Wznów',
    'Przydziel',
    'Zmień status',
    'Czas',
    'Autor',
    'Rekord został utworzony ze statusem: "%1".',
    'Rekord został przypisany do %1.',
    'Rekord został zmodyfikowany.',
    /* 1110 */
    'Status został zmieniony do "%1".',
    'Rekord opóźni się do %1.',
    'Rekord został wznowiony.',
    'Plik "%1" został dołączony.',
    'Plik "%1" został usunięty.',
    'pozwolenie na tworzenie rekordów',
    'pozwolenie na modyfikowanie rekordów',
    'pozwolenie na opóźnianie rekordów',
    'pozwolenie na wznowienie rekordów',
    'pozwolenie na ponowne otwarcie rekordów',
    /* 1120 */
    'pozwolenie na wznawianie rekordów',
    'pozwolenie na dołączanie plików',
    'pozwolenie na usuwanie plików',
    'Języki',
    'Dodaj komentarz',
    'Komentarz został dodany.',
    'pozwolenie na dodawanie komentarzy',
    'Komentarz',
    'Dodaj plik',
    'Usuń plik',
    /* 1130 */
    'Załącznik',
    'Nazwa załącznika',
    'Plik załącznika',
    'Załączniki',
    'Brak pól.',
    'Czas krytyczny',
    'Czas zamrożenia',
    'Zmiany',
    'Poprzednia wartość',
    'Nowa wartość',
    /* 1140 */
    'checkbox',
    'rekord',
    'lista',
    'Pozycje listy',
    '%1 Kb',
    'Filtry',
    'Nazwa filtru',
    'Wszystkie projekty',
    'Wszystkie szablony',
    'Wszystkie stany',
    /* 1150 */
    'Pokaż rekord',
    'Pokaż tylko utworzone przez ...',
    'Pokaż tylko przydzielone do ...',
    'pokaż tylko nie zakończone',
    'Temat',
    'Szukaj',
    'Parametry wyszukiwania',
    'Wyniki wyszukiwania',
    'Tekst który chesz wyszukać',
    'szukaj w polach',
    /* 1160 */
    'szukaj w komentarzach',
    'Status',
    'aktywny',
    'Powiadomienia',
    'powiadamiaj gdy utworzono nowy rekord',
    'powiadamiaj gdy przydzielono do rekordu',
    'powiadamiaj gdy rekord jest modyfikowany',
    'powiadamiaj gdy zmieni się status rekordu',
    'powiadamiaj gdy rekord zostanie przesunięty',
    'powiadamiaj gdy rekord jest wznowiony',
    /* 1170 */
    'powiadamiaj gdy zostanie dodany komentarz',
    'powiadamiaj gdy zostanie dodany załącznik',
    'powiadamiaj gdy plik zostanie usunięty',
    'wymagany',
    'Przesunięty',
    'Termin',
    'Warość domyślna',
    'włączony',
    'wyłączony',
    'Statystyki',
    /* 1180 */
    'Otwartych rekordów',
    'Utworzonych do zamkniętych',
    'tydzień',
    'liczba',
    'Kopiuj',
    'Rekord został skopiowany z "%1".',
    'Wyloguj',
    'powiadamiaj jeśli rekord jest kopiowany',
    'Ustawienia',
    'Rekordów na stronie',
    /* 1190 */
    'Zakładek na stronie',
    'Zablokuj',
    'Odblokuj',
    'Typ grupy',
    'globalna',
    'lokalna',
    'Konfiguracja',
    'Linia',
    'Adres URL strony web',
    'Bezpieczeństwo',
    /* 1200 */
    'Minimalna długość hasła',
    'Maksymalna ilość prób zalogowania',
    'Czas blokowania (mins)',
    'Baza danych',
    'Typ bazy danych',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Serwer bazy danych',
    'Nazwa bazy danych',
    /* 1210 */
    'Nazwa użytkownika bazy danych',
    'Active Directory',
    'Serwer LDAP',
    'Numer portu',
    'Konto szukania',
    'Podstawowy DN',
    'Administratorzy',
    'Powiadamianie przez email',
    'Maksymalna wielkość',
    'Debugowanie',
    /* 1220 */
    'Tryb debugowania',
    'włączony (bez prywatnych danych)',
    'właczony (wszystkie dane)',
    'Debug logs',
    'Włączony',
    'Wyłączony',
    'dziesiętna',
    'pozwolenie na przeglądanie rekordów',
    'Zaznacz wszystko',
    'Autor',
    /* 1230 */
    'data',
    'czas',
    'pokaż tylko przesunięte',
    'Nazwa powiadomienia',
    'Zdarzenia',
    'Wersja %1',
    'role',
    'Powiadamiaj',
    'Nie powiadamiaj',
    'Przypomnienia',
    /* 1240 */
    'Nazwa przypomnienia',
    'Tytuł przypomnienia',
    'Odbiorcy przypomnienia',
    'Nowe przypomnienie',
    'Przypomnienie "%1"',
    'pozwolenie do wysyłania przypomnień',
    'Wyślij',
    'Nowy filtr',
    'Filtr "%1"',
    'Nowe powiadomienie',
    /* 1250 */
    'Powiadomienie "%1"',
    'Liczba linii w polu tekstowym',
    'Możesz wstawić link do innego rekordu wpisując "rec#" i jego numer (np. "rec#305").',
    'Pokaż tylko przeniesione do stanu ...',
    'Podziel się z ...',
    'Eksportuj',
    'Inne powiadomienia...',
    'Dodany do powiadomień',
    '%1 dodał Cię do powiadomień dla wybranego rekordu.',
    '%1 został usunięty z powiadamiania.',
    /* 1260 */
    'Kopia do',
    'Magazyn',
    'Arybuty LDAP',
    'Widoki',
    'Zamknij',
    'Nazwa widoku',
    'Nowy widok',
    'Widok "%1"',
    'Nie wybrano widoku',
    'Ustaw',
    /* 1270 */
    'Kolumny',
    'Ostrzeżenie',
    'Informacja',
    'Błąd',
    'Pytanie',
    'Wyrówanie',
    'z lewej',
    'wyśrodkowane',
    'z prawej',
    'Usługa będzie niedostępna od %1 do %2 (%3)',
    /* 1280 */
    'Wszystkie przydzielone do mnie',
    'Wszystkie utworzone przeze mnie',
    'Pokaż w e-mailu',
    'Proszę czekać...',
    'Zrzuć',
    'Subrekordy',
    'Utwórz subrekord',
    'Dołącz subrekord',
    'Usuń subrekord',
    'Automatyczne odświerzanie',
    /* 1290 */
    'Subrekord "%1" został dodany.',
    'Subrekord "%1" został usunięty.',
    'pozwolenie na dodawnie subrekordów',
    'pozwolenie na usuwanie subrekordów',
    'powiadamiaj kiedy subrekord jest dodany',
    'powiadamiaj kiedy subrekord jest usunięty',
    'utworzonych rekordów',
    'zamkniętych rekordów',
    'Poufne',
    'Dodaj poufny komentarz',
    /* 1300 */
    'pozwolenie na dodawnie/czytanie poufnych komentarzy',
    'Poufny komentarz został dodany.',
    'Nadrzędny ID',
    'zależny',
    'Strefa czasowa',
    'Dodaj separator',
    'CSV znak rozdzielenia',
    'CSV kodowanie',
    'CSV zakończenie lini',
    'powiadamiaj kiedy rekord zostanie wznowiony',
    /* 1310 */
    'Włącz filtry',
    'Wyłącz filtry',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    'Rozwiń wszystkie',
    /* 1320 */
    'Zamknij wszystkie',
    'Rekord został wznowiony ze statusem "%1".',
    'Ost.Mod.',
    'PCRE do sprawdzenia wartości pola',
    'PCRE do przeszukiwania wartości pola',
    'PCRE do zastąpienia wartości pola',
    'Następny status(domyślny)',
    'Status opóźnienia',
    'pokaż wszystkie',
    'pokaż tylko aktywne',
    /* 1330 */
    'Zdarzenia',
    'Wznów',
    'Dostęp anonimowy',
    'Brak.',
    'Grupy globalne',
    'Gość',
    'Import',
    'pozwolenie na kasowanie rekordów',
    NULL,
    'Domyślny język',
    /* 1340 */
    'Wygaśnięcie hasła (dni)',
    'Wygaśnięcie sesji (min)',
    'LDAP enumeration',
    'PostgreSQL',
    'lista indeksów',
    'lista wartości',
    'Utworzony',
    'Oznacz jako przeczytane',
    'Zarejestrowany',
    'TLS',
    /* 1350 */
    'Spakowany',
    'Ost.Stan',
    'Komentarze',
    'Rozmiar',
    'Wygląd',
    'CSV',
    'Włącz',
    'Wyłącz',
    'Podgląd',
    'Właściciel',
    /* 1360 */
    'Każdy.',
    'Oznacz jako nieprzeczytane',
    'Nadrzędne rekordy',
);

?>
