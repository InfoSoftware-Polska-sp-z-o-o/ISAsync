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
 * Strings for component 'grading', language 'pl', version '4.0'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' jest wybrana jako aktywna metoda oceniania dla \'{$a->area}\' obszaru';
$string['activemethodinfonone'] = '\'{$a->method}\' jest wybrana jako aktywna metoda oceniania dla \'{$a->area}\' obszaru';
$string['changeactivemethod'] = 'Zmień aktywną metodę oceniania na:';
$string['clicktoclose'] = 'kliknij aby zamknąć';
$string['exc_gradingformelement'] = 'błąd orzy tworzeniu elementu formularza oceniania';
$string['formnotavailable'] = 'Wybrano metodę oceniania zaawansowanego, ale odpowiedni formularz nie istnieje. Należy go wcześniej stworzyć przy pomocy linku w bloku Ustawienia.';
$string['gradingformunavailable'] = 'Uwaga: formularz oceniania zaawansowanego jeszcze nie istnieje. Prosta metoda oceniania będzie używana, dopóki formularz nie zostanie stworzony.';
$string['gradingmanagement'] = 'Zaawansowane ocenianie';
$string['gradingmanagementtitle'] = 'Zaawansowane ocenianie: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metoda oceniania';
$string['gradingmethod_help'] = 'Wybierz metodę oceniania zaawansowanego, która będzie użyta w bieżącym kontekście. Aby wyłączyć ocenianie zaawansowane wybierz "Proste bezpośrednie ocenianie".';
$string['gradingmethodnone'] = 'Proste bezpośrednie ocenianie';
$string['gradingmethods'] = 'Metody oceniania';
$string['manageactionclone'] = 'Stwórz nowy formularz oceniania na podstawie szablonu';
$string['manageactiondelete'] = 'Usuń ten formularz';
$string['manageactiondeleteconfirm'] = 'Zamierzasz usunąć formularz oceniania "{$a->formname}" i wszystkie związane z nim informacje z \'{$a->component} ({$a->area})\'. Upewnij się, że rozumiesz następujące konsekwencje:
* Nie ma możliwości cofnięcia tej operacji.
* Można przełączyć się na inną metodę oceniania, np. \'Proste bezpośrednie ocenianie\' bez usuwania tego formularza.
* Wszystkie informacje z formularza  zostaną utracone.
* Obliczone wynikowe oceny przechowywane w dzienniku ocen nie zostaną naruszone. Jednakże wyjaśnienie, jak były one obliczane nie będzie dostępne.
* Operacja ta nie ma wpływu na ewentualne kopie tego formularza związane z innymi aktywnościami.';
$string['manageactiondeletedone'] = 'Formularz został usunięty';
$string['manageactionedit'] = 'Edytuj definicję bieżącego formularza';
$string['manageactionnew'] = 'Zdefiniuj nowy formularz oceniania';
$string['manageactionshare'] = 'Publikuj formularz jako nowy szablon';
$string['manageactionshareconfirm'] = 'Zamierzasz zapisać kopię formularza oceniania &quot;{$a}&quot; jako nowy szablon publiczny. Inni użytkownicy witryny będą w stanie tworzyć nowe formularze w swoich aktywnościach na podstawie tego szablonu.';
$string['manageactionsharedone'] = 'Formularz został zapisany jako szablon';
$string['noitemid'] = 'Ocenienie nie jest możliwe. Nie istnieją pozycje do oceny.';
$string['nosharedformfound'] = 'Nie znaleziono szablonu';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Identyfikator użytkownika, który zdefiniował ocenę.';
$string['searchownforms'] = 'uwzględnij moje własne formularze';
$string['searchtemplate'] = 'Wyszukawanie formularza oceniania';
$string['searchtemplate_help'] = 'Możesz wyszukiwać formularz oceniania i użyć go jako szablon dla nowego formularza. Wystarczy wpisać słowa, które pojawiają się gdzieś w jego nazwie, opisie lub treści. Aby wyszukać frazę, umieść ją w cudzysłowie.

Domyślnie tylko formularze zapisane jako współdzielone są uwzględnione w wynikach wyszukiwania. Można także dołączyć swoje własne formularze. W ten sposób można po prostu ponownie użyć swoich formularzy bez współdzielenia ich. Tylko formularze oznaczone jako \'gotowe do użycia\' mogą być ponownie wykorzystane w ten sposób.';
$string['statusdraft'] = 'Szkic';
$string['statusready'] = 'Gotowy do użycia';
$string['templatedelete'] = 'Usuń';
$string['templatedeleteconfirm'] = 'Zamierzasz usunąć współdzielony szablon \'{$a} &quot;. Usuwanie szablonu nie wpływa na istniejące formularze, które zostały z niego utworzone.';
$string['templateedit'] = 'Edytuj';
$string['templatepick'] = 'Użyj tego szablonu';
$string['templatepickconfirm'] = 'Chcesz użyć formularza &quot;{$a->formname}&quot; jako szablonu dla nowego formularza w &quot;{$a->component} ({$a->area})&quot;?';
$string['templatepickownform'] = 'Użyj tego formularza jako szablonu';
$string['templatesource'] = 'Położenie: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Własny formularz';
$string['templatetypeshared'] = 'Współdzielony szablon';
