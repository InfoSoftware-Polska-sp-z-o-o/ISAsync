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
 * Strings for component 'contentbank', language 'pl', version '4.0'.
 *
 * @package     contentbank
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['author'] = 'Autor';
$string['choosecontext'] = 'Wybierz kurs lub kategorię...';
$string['close'] = 'Zamknij';
$string['contentbank'] = 'Bank zawartości';
$string['contentbankpreferences'] = 'Preferencje banku zawartości';
$string['contentdeleted'] = 'Zawartość została usunięta.';
$string['contentname'] = 'Nazwa zawartości';
$string['contentnotdeleted'] = 'Wystąpił błąd podczas próby usunięcia treści.';
$string['contentnotrenamed'] = 'Wystąpił błąd podczas próby zmiany nazwy.';
$string['contentrenamed'] = 'Nazwa zawartości została zmieniona.';
$string['contentsmoved'] = 'Zawartość banku zawartości została przeniesiona do {$a}.';
$string['contenttypenoaccess'] = 'Nie możesz wyświetlić {$a}.';
$string['contenttypenoedit'] = 'Nie możesz edytować tej zawartości';
$string['contentvisibilitychanged'] = 'Ustawiono widoczność treści na {$a}.';
$string['contentvisibilitynotset'] = 'Wystąpił błąd podczas próby ustawienia opcji widoczności treści.';
$string['contextnotallowed'] = 'Nie masz dostępu do banku treści w tym kontekście.';
$string['deletecontent'] = 'Usuń zawartość';
$string['deletecontentconfirm'] = 'Czy na pewno chcesz usunąć zawartość <em>\'{$a->name}\'</em> z wszystkimi powiązanymi plikami? Tej czynności nie można cofnąć.';
$string['deletecontentconfirmlinked'] = 'Treść zostanie usunięta tylko z banku zawartości. Wszelkie miejsca, które obecnie prowadzą do niej, zostaną automatycznie zaktualizowane, aby zamiast tego korzystały z kopii treści.';
$string['displaydetails'] = 'Wyświetl bank zawartości ze szczegółami pliku';
$string['displayicons'] = 'Wyświetl bank zawartości z ikonami';
$string['emptynamenotallowed'] = 'Pusta nazwa jest niedozwolona';
$string['errordeletingcontentfromcategory'] = 'Błąd podczas usuwania zawartości z kategorii {$a}.';
$string['errornofile'] = 'Do utworzenia treści potrzebny jest kompatybilny plik.';
$string['eventcontentcreated'] = 'Utworzono zawartość';
$string['eventcontentdeleted'] = 'Zawartość usunięta';
$string['eventcontentreplaced'] = 'Zawartość zastąpiona plikiem';
$string['eventcontentupdated'] = 'Zawartość zaktualizowana';
$string['eventcontentuploaded'] = 'Zawartość przesłąna';
$string['eventcontentviewed'] = 'Zawartość wyświetlono';
$string['exit'] = 'Wyjście';
$string['file'] = 'Prześlij zawartość';
$string['file_help'] = 'Pliki mogą być przechowywane w banku zawartości do wykorzystania w kursach. Można przesyłać tylko pliki używane przez typy treści włączone w witrynie.';
$string['itemsfound'] = '{$a} znalezionych elementów';
$string['lastmodified'] = 'Ostatnio zmodyfikowany';
$string['more'] = 'Więcej';
$string['name'] = 'Zawartość';
$string['nocontentavailable'] = 'Brak dostępnych treści';
$string['nocontenttypes'] = 'Brak dostępnych typów zawartości';
$string['nopermissiontodelete'] = 'Nie masz uprawnień do usuwania zawartości.';
$string['nopermissiontomanage'] = 'Nie masz uprawnień do zarządzania zawartością.';
$string['notavailable'] = 'Przepraszamy, ta zawartość nie jest dostępna.';
$string['notvalidpackage'] = 'Przepraszamy, ten plik jest nieprawidłowy.';
$string['privacy:metadata:content:contenttype'] = 'Wtyczka typu treści w banku zawartości.';
$string['privacy:metadata:content:name'] = 'Nazwa treści w banku zawartości.';
$string['privacy:metadata:content:timecreated'] = 'Czas utworzenia zawartości.';
$string['privacy:metadata:content:timemodified'] = 'Czas modyfikacji zawartości.';
$string['privacy:metadata:content:usercreated'] = 'Użytkownik, który utworzył zawartość.';
$string['privacy:metadata:content:usermodified'] = 'Ostatni użytkownik, który modyfikował zawartość.';
$string['privacy:metadata:contentbankcontent'] = 'Przechowuje treść banku zawartości.';
$string['privacy:metadata:userid'] = 'Identyfikator użytkownika tworzącego lub modyfikującego treść banku zawartości.';
$string['privacy:request:preference:set'] = 'Wartość ustawienia \'{$a->name}\' wynosiła \'{$a->value}\'';
$string['public'] = 'publiczny';
$string['rename'] = 'Zmień nazwę';
$string['renamecontent'] = 'Zmień nazwę zawartości';
$string['replacecontent'] = 'Zastąp plikiem';
$string['searchcontentbankbyname'] = 'Wyszukaj zawartość według nazwy';
$string['size'] = 'Rozmiar';
$string['timecreated'] = 'Czas utworzenia';
$string['type'] = 'Typ';
$string['unlisted'] = 'Zastrzeżony';
$string['unsupported'] = 'Ten typ zawartości nie jest obsługiwany.';
$string['upload'] = 'Prześlij plik';
$string['uses'] = 'Miejsca wystąpienia';
$string['visibilitychoicepublic'] = 'Publiczny';
$string['visibilitychoiceunlisted'] = 'Zastrzeżony';
$string['visibilitypref'] = 'Domyślna widoczność zawartości';
$string['visibilitypref_help'] = 'Treści utworzone w banku zawartości będą domyślnie używać tego ustawienia widoczności.';
$string['visibilitysetpublic'] = 'Upublicznij';
$string['visibilitysetunlisted'] = 'Zastrzeż';
$string['visibilitytitleunlisted'] = '{$a} (Zastrzeżony)';
