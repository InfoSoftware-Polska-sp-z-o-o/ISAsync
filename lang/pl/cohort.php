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
 * Strings for component 'cohort', language 'pl', version '4.0'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Dodaj nową kohortę';
$string['allcohorts'] = 'Wszystkie kohorty';
$string['anycohort'] = 'Dowolny';
$string['assign'] = 'Przypisz';
$string['assigncohorts'] = 'Przypisz członków kohorty';
$string['assignto'] = 'Członkowie kohorty \'{$a}\'';
$string['backtocohorts'] = 'Powrót do kohort';
$string['bulkadd'] = 'Dodaj do kohorty';
$string['bulknocohort'] = 'Nie znaleziono dostępnych kohort';
$string['categorynotfound'] = 'Kategoria <b>{$a}</b> nie została znaleziona lub nie masz uprawnień do utworzenia w niej kohorty. Zostanie użyty domyślny kontekst.';
$string['cohort'] = 'Kohorta';
$string['cohortmember'] = 'Członek kohorty';
$string['cohorts'] = 'Kohorty';
$string['cohortsin'] = '{$a}: dostępne kohorty';
$string['component'] = 'Źródło';
$string['contextnotfound'] = 'Kontekst <b>{$a}</b> nie został znaleziony lub nie masz uprawnień do utworzenia w niej kohorty. Zostanie użyty domyślny kontekst.';
$string['csvcontainserrors'] = 'Znaleziono błędy w danych CSV. Zobacz szczegóły poniżej.';
$string['csvcontainswarnings'] = 'Znaleziono ostrzeżenia w danych CSV. Szczegóły poniżej.';
$string['csvextracolumns'] = 'Kolumna(y) <b>{$a}</b> zostaną zignorowane.';
$string['currentusers'] = 'Bieżący użytkownicy';
$string['currentusersmatching'] = 'Obecnie pasujący użytkownicy';
$string['defaultcontext'] = 'Domyślny kontekst';
$string['delcohort'] = 'Usuń kohortę';
$string['delconfirm'] = 'Czy na pewno chcesz usunąć kohortę \'{$a}\'?';
$string['description'] = 'Opis';
$string['displayedrows'] = '{$a->displayed} wierszy z {$a->total}.';
$string['duplicateidnumber'] = 'Kohorta z takim identyfikatorem już istnieje';
$string['editcohort'] = 'Edytuj kohortę';
$string['editcohortidnumber'] = 'Edytuj ID kohorty';
$string['editcohortname'] = 'Edytuj nazwę kohorty';
$string['eventcohortcreated'] = 'Utworzono kohortę';
$string['eventcohortdeleted'] = 'Kohorta usunięta';
$string['eventcohortmemberadded'] = 'Użytkownik dodany do kohorty';
$string['eventcohortmemberremoved'] = 'Użytkownik usunięty z kohorty';
$string['eventcohortupdated'] = 'Kohorta zaktualizowana';
$string['external'] = 'Zewnętrzna kohorta';
$string['idnumber'] = 'Identyfikator kohorty';
$string['invalidtheme'] = 'Kompozycja kohorty nie istnieje';
$string['memberofcohort'] = 'Członek kohorty';
$string['memberscount'] = 'Rozmiar kohorty';
$string['name'] = 'Nazwa';
$string['namecolumnmissing'] = 'Jest problem z formatem pliku CSV. Proszę sprawdzić, czy zawiera odpowiednie nazwy kolumn. W celu dodania użytkowników do kohorty, przejdź do zakładki \'Prześlij użytkowników\' w administracji serwisu.';
$string['namefieldempty'] = 'Nazwa pola nie może być pusta';
$string['newidnumberfor'] = 'Nowy numer ID dla kohorty {$a}';
$string['newnamefor'] = 'Nowa nazwa dla kohorty {$a}';
$string['nocomponent'] = 'Utworzona ręcznie';
$string['potusers'] = 'Potencjalni użytkownicy';
$string['potusersmatching'] = 'Potencjalne pasujący użytkownicy';
$string['preview'] = 'Podgląd';
$string['privacy:metadata:cohort_members'] = 'Informacja o kohorcie użytkownika.';
$string['privacy:metadata:cohort_members:cohortid'] = 'Identyfikator kohorty';
$string['privacy:metadata:cohort_members:timeadded'] = 'Sygnatura czasowa wskazująca, kiedy użytkownik został dodany do kohorty';
$string['privacy:metadata:cohort_members:userid'] = 'Identyfikator użytkownika powiązanego z kohortą';
$string['removeuserwarning'] = 'Usunięcie użytkowników z kohorty może powodować wypisanie studentów z wielu kursów, obejmując usunięcie ustawień użytkownika, ocen, przynależności do grup oraz innych ustawień.';
$string['search'] = 'Szukaj';
$string['searchcohort'] = 'Przeszukaj kohorty';
$string['selectfromcohort'] = 'Wybierz członków z kohorty';
$string['systemcohorts'] = 'Kohorty systemowe';
$string['unknowncohort'] = 'Nieznana kohorta ({$a})!';
$string['uploadcohorts'] = 'Prześlij kohorty';
$string['uploadcohorts_help'] = 'Kohorty można przesyłać za pomocą pliku tekstowego. Format pliku powinien wyglądać następująco:

* Każda linia pliku zawiera jeden rekord
* Każdy rekord to seria danych oddzielonych przecinkami (lub innymi ogranicznikami)
* Pierwszy rekord zawiera listę nazw pól określających format reszty pliku
* Wymagana nazwa pola to: name
* Opcjonalne nazwy pól to: idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Przesłane kohorty {$a}';
$string['useradded'] = 'Użytkownik dodany do kohorty "{$a}"';
$string['visible'] = 'Widoczna';
$string['visible_help'] = 'Każda kohorta może być wyświetlana przez użytkowników, którzy mają uprawnienia „moodle / cohort: view” w kontekście kohorty. <br/>
Widoczne kohorty mogą być również przeglądane przez użytkowników w kursach.';
