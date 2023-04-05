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
 * Strings for component 'tool_unittest', language 'pl', version '4.0'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'Dodaj prefiks do pliku konfiguracyjnego';
$string['all'] = 'Wszystko';
$string['codecoverageanalysis'] = 'Wykonaj analizę pokrycia kodu.';
$string['codecoveragecompletereport'] = '(obejrzyj pełen raport pokrycia kodu)';
$string['codecoveragedisabled'] = 'Nie można włączyć analizy pokrycia kodu w tym serwerze (brak rozszerzenia xdebug).';
$string['codecoveragelatestdetails'] = '(dnia {$a->date}, z {$a->files} plikami, {$a->percentage} pokryte)';
$string['codecoveragelatestreport'] = '(obejrzyj najnowszy pełen raport pokrycia kodu)';
$string['confignonwritable'] = 'Plik config.php nie jest zapisywalny przez serwer WWW. Zmień uprawnienia lub edytuj go przez odpowiednie konto użytkownika, i dodaj następującą linię przed zamykającym tagiem php: <br /> $CFG->unittestprefix = \'tst_\' // Change tst_ to a prefix of your choice, different from $CFG->prefix';
$string['coveredlines'] = 'Pokryte wiersze';
$string['coveredpercentage'] = 'Ogólne pokrycie kodu';
$string['dbtest'] = 'Testy funkcjonalne bazy danych';
$string['deletingnoninsertedrecord'] = 'Próba usunięcia rekordu, który nie został wstawiony przez te testy jednostkowe (id {$a->id} w tabeli {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Próba usunięcia rekordów, które nie zostały wstawione przez te testy jednostkowe (z tabeli {$a->table}).';
$string['droptesttables'] = 'Usuń tabele testowe';
$string['exception'] = 'Wyjątek';
$string['executablelines'] = 'Linie wykonywalne';
$string['fail'] = 'Błąd';
$string['ignorefile'] = 'Ignoruj testy dla pliku';
$string['ignorethisfile'] = 'Ponownie uruchom test ignorując ten plik';
$string['installtesttables'] = 'Zainstaluj tabele testowe';
$string['moodleunittests'] = 'Testy jednostkowe Moodle: {$a}';
$string['notice'] = 'Uwaga';
$string['onlytest'] = 'Zrób test tylko w';
$string['othertestpages'] = 'Inne strony testowe';
$string['pass'] = 'test OK';
$string['pathdoesnotexist'] = 'Ścieżka \'{$a}\' nie istnieje.';
$string['pluginname'] = 'Testy jednostkowe';
$string['prefix'] = 'Prefiks tabel testów jednostkowych';
$string['prefixnotset'] = 'Prefiks tabel testów jednostkowych nie jest skonfigurowany. Wypełnij i wyślij ten formularz, aby dodać go do config.php.';
$string['reinstalltesttables'] = 'Zainstaluj ponownie tabele testowe';
$string['retest'] = 'Jeszcze raz testuj';
$string['retestonlythisfile'] = 'Jeszcze raz testuj tylko ten plik.';
$string['runall'] = 'Uruchom wszystkie testy.';
$string['runat'] = 'Uruchom o {$a}.';
$string['runonlyfile'] = 'Uruchom tylko testy w tym pliku';
$string['runonlyfolder'] = 'Uruchom tylko testy w tym katalogu';
$string['runtests'] = 'Uruchom testy';
$string['rununittests'] = 'Uruchom testy jednostkowe';
$string['showpasses'] = 'Pokaż wyniki pozytywne i negatywne';
$string['showsearch'] = 'Pokaż wyszukiwanie plików testowych.';
$string['skip'] = 'Pomiń';
$string['stacktrace'] = 'Ślad stosu:';
$string['summary'] = '{$a->run}/{$a->total} przypadków testowych zakończonych: <strong>{$a->passes} pozytywnych, {$a->fails}</strong> negatywnych i <strong>{$a->exceptions} wyjątków.</strong>';
$string['tablesnotsetup'] = 'Tabele testów jednostkowych nie zostały jeszcze zbudowane. Chcesz zbudować je teraz?';
$string['testdboperations'] = 'Testuj operacje bazy danych';
$string['testtablescsvfileunwritable'] = 'Plik CSV z tabelami testowymi nie jest zapisywalny ({$a->filename})';
$string['testtablesneedupgrade'] = 'Tabele testowe muszą zostać zaktualizowane. Czy chcesz przystąpić do aktualizacji?';
$string['testtablesok'] = 'Tabele testowe pomyślnie zainstalowane.';
$string['thorough'] = 'Uruchom szczegółowy test (może trwać długo).';
$string['timetakes'] = 'Czas wykonania: {$a}.';
$string['totallines'] = 'Wszystkich linii';
$string['uncaughtexception'] = 'Nieprzechwycony wyjątek [{$a->getMessage()}] w [{$a->getFile()}: {$a->getLine()}] TESTY PRZERWANE.';
$string['uncoveredlines'] = 'Niepokryte linie';
$string['unittest:execute'] = 'Wykonaj testy jednostek';
$string['unittestprefixsetting'] = 'Prefiks testów jednostkowych: <strong>{$a->unittestprefix}</strong> (Edytuj config.php, aby zmienić).';
$string['unittests'] = 'Testy jednostkowe';
$string['updatingnoninsertedrecord'] = 'Próba zapisu rekordu, który nie został wstawiony przez te testy jednostkowe (id {$a->id} w tabeli {$a->table}).';
$string['version'] = 'Używana wersja <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> {$a}.';
