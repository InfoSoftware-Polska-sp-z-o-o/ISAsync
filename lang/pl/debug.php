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
 * Strings for component 'debug', language 'pl', version '4.0'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Wtyczka uwierzytelniania {$a} nie została znalezniona.';
$string['blocknotexist'] = '{$a} blok nie istnieje';
$string['cannotbenull'] = '{$a} nie może być puste!';
$string['cannotdowngrade'] = 'Nie można dokonać aktualizacji wstecznej: {$a->plugin} z {$a->oldversion} do {$a->newversion}.';
$string['cannotfindadmin'] = 'Nie można znaleźć konta administratora!';
$string['cannotinitpage'] = 'Nie można w pełni zainicjować strony: niepoprawny {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} tabele nie może być pomyślnie ustawionych!';
$string['codingerror'] = 'Wykryto błąd kodowania, musi on zostać naprawiony przez programistę: {$a}';
$string['configmoodle'] = 'Moodle nie został jeszcze skonfigurowany. Musisz najpierw zmodyfikować plik config.php';
$string['erroroccur'] = 'Wystąpił błąd w trakcie tego procesu';
$string['invalidarraysize'] = 'Niewłaściwy rozmiar tablic w parametrach  {$a}';
$string['invalideventdata'] = 'Przesłano nieprawidłowe dane wydarzenia: {$a}';
$string['invalidparameter'] = 'Wykryto nieprawidłową wartość parametru.';
$string['invalidresponse'] = 'Wykryto nieprawidłową wartość odpowiedzi.';
$string['line'] = 'Linia';
$string['missingconfigversion'] = 'Tabela Config nie zawiera wersji, niestety, nie mogę kontynuować..';
$string['modulenotexist'] = '{$a} moduł nie istnieje';
$string['morethanonerecordinfetch'] = 'Znaleziono więcej niż jeden rekord w fetch ()!';
$string['mustbeoveride'] = 'Abstrakcyjna metoda {$a} musi zostać nadpisana.';
$string['noadminrole'] = 'Nie można znaleźć roli admina';
$string['noblocks'] = 'Brak zainstalowanych bloków!';
$string['nocate'] = 'Brak kategorii!';
$string['nomodules'] = 'Nie znaleziono modułów!';
$string['nopageclass'] = 'Zaimportowano {$a}, ale nie znaleziono klasy strony';
$string['noreports'] = 'Brak dostępnych raportów';
$string['notables'] = 'Brak tabel!';
$string['phpvaroff'] = 'Wartość zmiennej PHP serwera \'{$a->name}\' powinna być wyłączona - {$a->link}';
$string['phpvaron'] = 'Wartość zmiennej PHP serwera \'{$a->name}\' nie jest włączona - {$a->link}';
$string['reactive_resetpanel'] = 'Resetuj panel';
$string['sessionmissing'] = 'brakujący obiekt {$a} z sesji';
$string['sqlrelyonobsoletetable'] = 'Ten SQL wykorzystuje przestarzałe tabele: {$a}! Twój kod musi być naprawiony przez programistę.';
$string['withoutversion'] = 'Główny plik version.php nie istnieje, jest uszkodzony lub nie można go odczytać.';
$string['xmlizeunavailable'] = 'funkcje xmlize nie są dostępne';
