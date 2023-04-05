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
 * Strings for component 'enrol_database', language 'pl', version '4.0'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:unenrol'] = 'Wypisz zawieszonych użytkowników';
$string['dbencoding'] = 'Kodowanie bazy danych';
$string['dbhost'] = 'Host bazy danych';
$string['dbhost_desc'] = 'Wpisz adres IP serwera bazy danych serwera lub jego nazwę';
$string['dbname'] = 'Nazwa bazy danych';
$string['dbname_desc'] = 'Pozostaw puste, jeśli używasz nazwy DSN w bazie danych.';
$string['dbpass'] = 'Hasło bazy danych';
$string['dbsetupsql'] = 'Komenda konfiguracji bazy danych';
$string['dbsetupsql_desc'] = 'Komenda SQL do specjalnej konfiguracji bazy danych, często używany do ustawienia kodowania znaków - przykład dla MySQL i PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Użyj apostrofu zgodnie z Sybase';
$string['dbsybasequoting_desc'] = 'W Sybase pojedynczy apostrof jest znakiem ucieczki (escape) - potrzebne dla Oracle, MS SQL i niektórych innych baz danych. Nie stosować dla MySQL!';
$string['dbtype'] = 'Typ sterownika baz danych';
$string['dbtype_desc'] = 'Nazwa sterownika ADOdb, typ silnika zewnętrznej bazy danych.';
$string['dbuser'] = 'Nazwa użytkownika bazy danych';
$string['debugdb'] = 'Debuguj ADOdb';
$string['debugdb_desc'] = 'Debuguj połączenie ADOdb do zewnętrznej bazy danych - użyj, gdy widzisz pustą stronę podczas logowania. Nie nadaje się do witryn produkcyjnych.';
$string['defaultcategory'] = 'Domyślna kategoria nowego kursu';
$string['defaultcategory_desc'] = 'Kategoria domyślna dla kursów tworzonych automatycznie. Używane, gdy  nie określono lub nie znaleziono id kategorii wymienione.';
$string['defaultrole'] = 'Rola domyślna';
$string['defaultrole_desc'] = 'Rola, którą przypisuje domyślnie, jeśli nie podano jej w tabeli zewnętrznej.';
$string['ignorehiddencourses'] = 'Ignoruj ukryte kursy';
$string['ignorehiddencourses_desc'] = 'Jeśli opcja jest włączona, użytkownicy nie będą zapisywani na kursy, które są ustawione jako niedostępne dla studentów.';
$string['localcategoryfield'] = 'Pole lokalnej kategorii';
$string['localcoursefield'] = 'Pole kursu lokalnego';
$string['localrolefield'] = 'Pole roli lokalnej';
$string['localuserfield'] = 'Pole użytkownika lokalnego';
$string['newcoursecategory'] = 'Pole ID kategorii nowego kursu';
$string['newcoursefullname'] = 'Pole pełnej, nowej nazwy kursu';
$string['newcourseidnumber'] = 'Pole ID nowego kursu';
$string['newcourseshortname'] = 'Pole nowej, krótkiej nazwy kursu';
$string['newcoursetable'] = 'Zdalna tabela nowych kursów';
$string['newcoursetable_desc'] = 'Wpisz nazwę tabeli zawierającej listę kursów, które powinny być utworzone automatycznie. Puste oznacza, że kursy nie będą tworzone.';
$string['pluginname'] = 'Zewnętrzna baza danych';
$string['pluginname_desc'] = 'Do zapisów można użyć zewnętrznej bazy danych (prawie każdego rodzaju). Zakłada się, że zewnętrzna baza danych zawiera przynajmniej pole zawierające identyfikator kursu oraz pole zawierające identyfikator użytkownika. Są one porównywane z polami wybranymi z lokalnego kursu i tabel użytkowników.';
$string['privacy:metadata'] = 'Wtyczka rejestracji zewnętrznej bazy danych nie przechowuje żadnych danych osobowych.';
$string['remotecoursefield'] = 'Pole zdalnego kursu';
$string['remotecoursefield_desc'] = 'Nazwa pola w zdalnej tabeli, którego wartości porównujemy z wpisami w tabeli kursów.';
$string['remoteenroltable'] = 'Zdalna tabela zapisów użytkowników';
$string['remoteenroltable_desc'] = 'Wpisz nazwę tabeli zawierającej informacje o użytkownikach zapisanych na kursy. Puste, oznacza brak synchronizacji zapisów użytkowników.';
$string['remoteotheruserfield'] = 'Inne zdalne pola użytkownika';
$string['remoterolefield'] = 'Pole w zdalnej bazie odpowiadające roli';
$string['remoterolefield_desc'] = 'Nazwa pola w zdalnej tabeli, którego wartości porównujemy z wpisami w tabeli ról.';
$string['remoteuserfield'] = 'Pole użytkownika zewnętrznego';
$string['remoteuserfield_desc'] = 'Nazwa pola w zdalnej tabeli, którego wartości porównujemy z wpisami w tabeli użytkowników.';
$string['settingsheaderdb'] = 'Zewnętrzne połączenie z bazą danych';
$string['settingsheaderlocal'] = 'Lokalne mapowanie pól';
$string['settingsheadernewcourses'] = 'Tworzenie nowych kursów';
$string['settingsheaderremote'] = 'Synchronizacja zdalnych zapisów';
$string['templatecourse'] = 'Szablon nowego kursu';
$string['templatecourse_desc'] = 'Opcjonalnie: kursy tworzone automatycznie mogą kopiować ustawienia z kursu-szablonu. Wpisz tutaj skrócona nazwę (shortname) kursu-szablonu.';
