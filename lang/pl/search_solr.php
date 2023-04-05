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
 * Strings for component 'search_solr', language 'pl', version '4.0'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Wymieniony serwer Solr jest niedostępny lub określony indeks nie istnieje';
$string['connectionsettings'] = 'Ustawienia połączenia';
$string['errorcreatingschema'] = 'Błąd podczas tworzenia schematu Solr: {$a}';
$string['errorvalidatingschema'] = 'Błąd sprawdzania poprawności schematu Solr: pole {$a->fieldname} nie istnieje. <a href="{$a->setupurl}">Kliknij ten link</a>, aby skonfigurować wymagane pola.';
$string['extensionerror'] = 'Rozszerzenie PHP Apache Solr nie jest zainstalowane. Sprawdź dokumentację.';
$string['fileindexing'] = 'Włącz indeksowanie plików';
$string['fileindexing_help'] = 'Jeśli twoja instalacja Solr to obsługuje, ta funkcja pozwala Moodle przesyłać pliki do zaindeksowania.<br/>
Po włączeniu tej opcji konieczne będzie ponowne zindeksowanie całej zawartości witryny w celu dodania wszystkich plików.';
$string['fileindexsettings'] = 'Ustawienia indeksowania plików';
$string['maxindexfilekb'] = 'Maksymalny rozmiar pliku do zindeksowania (kB)';
$string['maxindexfilekb_help'] = 'Pliki większe niż podana liczba w kilobajtach, nie zostaną uwzględnione w indeksowaniu wyszukiwania. Jeśli ustawione na zero, pliki o dowolnym rozmiarze będą indeksowane.';
$string['minimumsolr4'] = 'Solr 4.0 to minimalna wersja wymagana przez Moodle';
$string['missingconfig'] = 'Twój serwer Apache Solr nie jest jeszcze skonfigurowany w Moodle.';
$string['multivaluedfield'] = 'Pole "{$a}" zwróciło tablicę zamiast skalaru. Usuń bieżący indeks, utwórz nowy i uruchom setup_schema.php przed indeksowaniem danych w Solr.';
$string['nodatafromserver'] = 'Brak danych z serwera';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Ta wtyczka wysyła dane zewnętrznie do połączonej wyszukiwarki Solr. Nie przechowuje danych lokalnie.';
$string['privacy:metadata:data'] = 'Dane osobowe przekazywane z podsystemu wyszukiwania.';
$string['schemafieldautocreated'] = 'Pole "{$a}" już istnieje w schemacie Solr. Prawdopodobnie zapomniałeś uruchomić ten skrypt przed indeksowaniem danych, a pola zostały automatycznie utworzone przez Solr. Usuń bieżący indeks, utwórz nowy i uruchom ponownie setup_schema.php przed zindeksowaniem danych w Solr.';
$string['schemasetupfromsolr5'] = 'Twoja wersja serwera Solr jest niższa niż 5.0. Ten skrypt może ustawić twój schemat tylko wtedy, gdy Solr jest w wersji 5.0 lub nowszej. Musisz ręcznie ustawić pola w swoim schemacie zgodnie z \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Zapytania';
$string['searchinfo_help'] = 'Przeszukiwane pole można określić, dodając prefiks zapytania "title:", "content:", "name:" lub "intro:". Na przykład wyszukiwanie "title: news" spowoduje zwrócenie wyników ze słowem "news" w tytule.

Operatory boolowskie ("AND", "OR", "NOT") mogą być używane do łączenia lub wykluczania słów kluczowych.

Znaki wieloznaczne ("*" lub "?") Mogą być używane do reprezentowania znaków w zapytaniu.';
$string['setupok'] = 'Schemat jest gotowy do użycia.';
$string['solrauthpassword'] = 'Hasło uwierzytelniania HTTP';
$string['solrauthuser'] = 'Nazwa użytkownika uwierzytelniania HTTP';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Limit czasu';
$string['solrhttpconnectiontimeout_desc'] = 'Limit czasu połączenia HTTP jest maksymalnym czasem w sekundach dozwolonym dla operacji przesyłania danych HTTP.';
$string['solrindexname'] = 'Nazwa indeksu';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr nie jest skonfigurowanym silnikiem wyszukiwania';
$string['solrsecuremode'] = 'Tryb bezpieczny';
$string['solrserverhostname'] = 'Nazwa hosta';
$string['solrserverhostname_desc'] = 'Nazwa domeny serwera Solr.';
$string['solrsetting'] = 'Ustawienia Solr';
$string['solrsslcainfo'] = 'Nazwa certyfikatu SSL CA.';
$string['solrsslcapath'] = 'Ścieżka certyfikatów SSL CA';
$string['solrsslcert'] = 'Certyfikat SSL';
$string['solrsslcert_desc'] = 'Nazwa pliku prywatnego certyfikatu sformatowanego w PEM';
$string['solrsslkey'] = 'Klucz SSL';
$string['solrsslkey_desc'] = 'Nazwa pliku klucza prywatnego sformatowanego w PEM';
$string['solrsslkeypassword'] = 'Hasło klucza SSL';
$string['solrsslkeypassword_desc'] = 'Hasło pliku klucza prywatnego sformatowanego w PEM';
