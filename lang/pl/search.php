<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'search', language 'pl', version '4.0'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Szukanie zaawansowane';
$string['all'] = 'Wszystko';
$string['allareas'] = 'Wszystkie obszary';
$string['allcourses'] = 'Wszystkie kursy';
$string['allusers'] = 'Wszyscy użytkownicy';
$string['author'] = 'Autor';
$string['authorname'] = 'Imię autora';
$string['back'] = 'Wstecz';
$string['beadmin'] = 'Musisz być administratorem aby użyć tej strony.';
$string['checkdb'] = 'Sprawdź bazę danych';
$string['checkdbadvice'] = 'Sprawdź swoją bazę danych czy nie ma błędów';
$string['checkdir'] = 'Sprawdź katalog';
$string['checkdiradvice'] = 'Upewnij się, że katalog danych istnieje i umożliwia pisanie w nim';
$string['commenton'] = 'Komentuj';
$string['confirm_delete'] = 'Czy na pewno chcesz usunąć indeks dla {$a}? Dopóki obszar wyszukiwania nie zostanie zaindeksowany, użytkownicy nie będą otrzymywać wyników wyszukiwania z tego obszaru.';
$string['confirm_deleteall'] = 'Czy na pewno chcesz teraz usunąć całą zindeksowaną zawartość? Dopóki witryna nie zostanie ponownie zaindeksowana, użytkownicy nie otrzymają wyników wyszukiwania.';
$string['confirm_indexall'] = 'Czy na pewno chcesz teraz zaktualizować zawartość indeksowaną? Jeśli duża ilość treści wymaga indeksowania, może to zająć dużo czasu. W przypadku serwerów działających na żywo powinieneś pozostawić indeksowanie w zaplanowanym zadaniu \'Indeksowanie globalnego wyszukiwania\'.';
$string['confirm_reindexall'] = 'Czy na pewno chcesz teraz ponownie zindeksować całą zawartość witryny? Jeśli Twoja witryna zawiera dużą ilość treści, zajmie to dużo czasu, a użytkownicy mogą nie uzyskać pełnych wyników wyszukiwania, dopóki nie zostaną ukończone.';
$string['content:courserole'] = '{$a->role} w {$a->course}';
$string['core-all'] = 'Wszystko';
$string['core-course-content'] = 'Treści kursów';
$string['core-courses'] = 'Kursy';
$string['core-other'] = 'Inny';
$string['core-users'] = 'Użytkownicy';
$string['createanindex'] = 'utwórz indeks';
$string['createdon'] = 'Utworzony na';
$string['database'] = 'Baza danych';
$string['databasestate'] = 'Stan indeksowania bazy danych';
$string['datadirectory'] = 'Katalog danych';
$string['deleteindex'] = 'Usuń indeks {$a}';
$string['deletionsinindex'] = 'Usunięcia w indeksie';
$string['docmodifiedon'] = 'Ostatnio zmodyfikowany {$a}';
$string['doctype'] = 'Typ dokumentu';
$string['doctypenotsupported'] = 'Określony typ dokumentu nie jest jeszcze obsługiwany';
$string['documents'] = 'dokumenty';
$string['documentsfor'] = 'Dokumenty dla';
$string['documentsindatabase'] = 'Dokumenty w bazie danych';
$string['documentsinindex'] = 'Dokumenty w indeksie';
$string['duration'] = 'Czas trwania';
$string['emptydatabaseerror'] = 'Tablica bazy danych nie istnieje lub nie zawiera rekordów indeksu';
$string['enginenotfound'] = 'Nie znaleziono silnika {$a}.';
$string['enginenotinstalled'] = 'Silnik {$a} nie jest zainstalowany.';
$string['enginenotselected'] = 'Nie wybrano żadnego silnika wyszukiwania.';
$string['engineserverstatus'] = 'Wyszukiwarka nie jest dostępna. Proszę skontaktować się z administratorem.';
$string['enteryoursearchquery'] = 'Wpisz swoje zapytanie';
$string['error_indexing'] = 'Wystąpił błąd podczas indeksowania';
$string['errorareanotavailable'] = 'Obszar wyszukiwania {$a} jest niedostępny.';
$string['errors'] = 'Błędy';
$string['everywhere'] = 'Wszędzie gdzie masz dostęp';
$string['filesinindexdirectory'] = 'Pliki w katalogu indeksu';
$string['filterheader'] = 'Filtr';
$string['fromtime'] = 'Zmodyfikowano po';
$string['globalsearch'] = 'Globalne wyszukiwanie';
$string['globalsearchdisabled'] = 'Globalne wyszukiwanie nie jest włączone';
$string['gradualreindex'] = 'Stopniowy reindeks {$a}';
$string['gradualreindex_confirm'] = 'Czy na pewno chcesz ponownie zindeksować {$a}? Może to trochę potrwać, chociaż istniejące dane pozostaną dostępne podczas ponownego indeksowania.';
$string['gradualreindex_queued'] = 'Zażądano ponownego zindeksowania dla {$a->name} ({$a->count} contexts). Indeksowanie zostanie przeprowadzone z pomocą zaplanowanego zadania &lsquo;Indeksowanie globalnego wyszukiwania’.';
$string['incourse'] = 'w kursie {$a}';
$string['index'] = 'Indeks';
$string['indexwhendisabledshortnotice'] = 'Indeksowanie jest niedostępne.';
$string['invalidindexerror'] = 'Katalog indeksu zawiera niewłaściwy indeks lub nie zawiera niczego.';
$string['ittook'] = 'Trwało';
$string['matchingfile'] = 'Dopasowanie z pliku <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Dopasowane z plików:';
$string['mycoursesonly'] = 'Tylko moje kursy';
$string['next'] = 'Następny';
$string['noindexmessage'] = 'Admin: Wydaje się, że nie ma indeksu wyszukiwania.';
$string['noresults'] = 'Brak wyników';
$string['normalsearch'] = 'Wyszukiwanie zwykłe';
$string['notitle'] = 'Brak tytułu';
$string['openedon'] = 'otwarty';
$string['optimize'] = 'Optymalizacja';
$string['order'] = 'Kolejność wyników';
$string['order_location'] = 'Nadaj priorytet wynikom związanym z {$a}';
$string['order_relevance'] = 'Najpierw najbardziej przydatne';
$string['priority'] = 'Priorytet';
$string['priority_normal'] = 'Normalny';
$string['priority_reindexing'] = 'Ponowne indeksowanie';
$string['privacy:metadata'] = 'Podsystem wyszukiwania nie przechowuje żadnych danych osobowych.';
$string['progress'] = 'Postęp';
$string['queryerror'] = 'Podane zapytanie nie mogło zostać przeanalizowane przez silnik wyszukiwania: {$a}';
$string['queueheading'] = 'Dodatkowa kolejka indeksowania ({$a} pozycji)';
$string['resultsreturnedfor'] = 'wyniki zwrócone dla';
$string['runindexer'] = 'Uruchom indeksowanie (naprawdę)';
$string['runindexertest'] = 'Uruchom test indeksowania';
$string['schemanotupdated'] = 'Schemat wyszukiwania jest nieaktualny.';
$string['schemaversionunknown'] = 'Wyszukiwarka nie zna bieżącej wersji schematu.';
$string['score'] = 'Wynik';
$string['search'] = 'Szukaj';
$string['search:course'] = 'Kursy';
$string['search:customfield'] = 'Niestandardowe pola kursu';
$string['search:message_received'] = 'Wiadomości - otrzymane';
$string['search:message_sent'] = 'Wiadomości - wysłane';
$string['search:mycourse'] = 'Moje kursy';
$string['search:section'] = 'Sekcje kursu';
$string['search:user'] = 'Użytkownicy';
$string['searcharea'] = 'Obszar wyszukiwania';
$string['searching'] = 'Wyszukiwanie w ...';
$string['searchnotpermitted'] = 'Nie masz uprawnień do wyszukiwania';
$string['searchsetupdescription'] = 'Poniższe kroki pomogą skonfigurować globalne wyszukiwanie Moodle.';
$string['searchwithin'] = 'Szukaj w';
$string['seconds'] = 'sekundy';
$string['solutions'] = 'Rozwiązania';
$string['statistics'] = 'Statystyki';
$string['step'] = 'Krok';
$string['thesewordshelpimproverank'] = 'Te słowa poprawią ranking';
$string['thesewordsmustappear'] = 'Te słowa muszą wystąpić';
$string['thesewordsmustnotappear'] = 'Te słowa nie mogą wystąpić';
$string['title'] = 'Tytuł';
$string['tofetchtheseresults'] = 'aby pobrać wyniki';
$string['topresults'] = 'Najlepsze wyniki';
$string['totalsize'] = 'Rozmiar całkowity';
$string['totime'] = 'Zmodyfikowano przed';
$string['type'] = 'Typ';
$string['uncompleteindexingerror'] = 'Indeksowanie nieudane, uruchom jeszcze raz.';
$string['versiontoolow'] = 'Niestety do wyszukiwania globalnego wymagany jest PHP 5.0.0 lub nowszy';
$string['viewresultincontext'] = 'Zobacz ten wynik w kontekście';
$string['wordsintitle'] = 'Słowa w tytule';
