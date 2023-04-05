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
 * Strings for component 'condition', language 'pl', version '4.0'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Dodaj warunki ukończenia do formularza.';
$string['addgrades'] = 'Dodaj {no} warunek(ki) ocen do formularza';
$string['adduserfields'] = 'Dodaj {no} pola użytkownika do formularza warunków';
$string['availabilityconditions'] = 'Ogranicz dostęp';
$string['availablefrom'] = 'Zezwól na dostęp od';
$string['availablefrom_help'] = 'Studenci mają dostęp do aktywności poprzez link na stronie kursu tylko w okresie dostępności, między datą początkową i końcową.

Różnica między okresem dostępności a ustawieniami dostępności dla aktywności jest taka, że mimo wyłączenia dostępności studenci mogą widzieć opis aktywności, podczas gdy poza okresem dostępności nie widzą aktywności całkowicie.';
$string['availableuntil'] = 'Zezwalaj na dostęp do';
$string['badavailabledates'] = 'Błędne daty. Jeśli ustawiasz obie daty, \'Zezwalaj na dostęp od/do\', data \'od\' powinna być wcześniejsza od \'do\'.';
$string['badgradelimits'] = 'Jeśli ustawiono zarówno górną i dolną granicę oceny, górna granica musi być wyższa niż dolna.';
$string['completion_complete'] = 'musi być oznaczone jako ukończone';
$string['completion_fail'] = 'musi być zakończone z oceną negatywną';
$string['completion_incomplete'] = 'nie może być oznaczone jako ukończone';
$string['completion_pass'] = 'musi być zakończone z oceną pozytywną';
$string['completioncondition'] = 'Warunek ukończenia aktywności';
$string['completioncondition_help'] = 'To ustawienie określa warunki ukończenia aktywności, które muszą być spełnione w celu uzyskania dostępu do TEJ aktywności. Należy pamiętać, że śledzenie ukończenia musi być włączone, zanim będzie można ustawionić warunki ukończenia aktywności. Można wprowadzić więcej niż jeden warunek w razie potrzeby. W tym przypadku dostęp do aktywności będzie dozwolony jedynie wtedy, gdy WSZYSTKIE warunki zostaną spełnione.';
$string['completionconditionsection'] = 'Warunek ukończenia aktywności';
$string['completionconditionsection_help'] = 'To ustawienie określa czy warunki dowolnej aktywności muszą być spełnione aby móc przejść do sekcji. Należy pamiętać, że śledzenie ukończenia musi być ustawione pierwsze przed ustawieniem warunku zakończenia aktywności.

Wiele warunków zakończenia aktywności może być w razie potrzeby ustawione. Jeżeli tak, dostęp do sekcji może być tylko dopuszczone tylko wtedy, kiedy WSZYSTKIE warunki zakończenia aktywności są spełnione.';
$string['configenableavailability'] = 'Gdy opcja jest włączona, umożliwia ustawienie warunków (w oparciu o datę, ocenę lub ukończenie) dostępu do aktywności.';
$string['contains'] = 'zawiera';
$string['doesnotcontain'] = 'nie zawiera';
$string['enableavailability'] = 'Włącz dostęp warunkowy';
$string['endswith'] = 'kończy się na';
$string['fielddeclaredmultipletimes'] = 'Nie można zadeklarować tego samego pola więcej niż raz dla jednej aktywności.';
$string['grade_atleast'] = 'mysi być co najmniej';
$string['grade_upto'] = 'i mniej niż';
$string['gradecondition'] = 'Warunki ocen';
$string['gradecondition_help'] = 'To ustawienie określa dowolne warunki dla ocen, które muszą być spełnione w celu uzyskania dostępu do tej aktywności.

W razie potrzeby mogą być ustawione wielokrotne warunki. W takim przypadku aktywność będzie dostępna tylko po spełnieniu WSZYSTKICH warunków. ';
$string['gradeconditionsection'] = 'Warunki ocen';
$string['gradeconditionsection_help'] = 'To ustawienie określa czy warunki oceny muszą być spełnione, aby uzyskać dostęp do sekcji.

Wiele warunków oceny może być w razie potrzeby ustawione. Jeżeli tak, dostęp do sekcji może być tylko dopuszczone tylko wtedy, kiedy WSZYSTKIE warunki oceny są spełnione.';
$string['gradeitembutnolimits'] = 'Musisz wprowadzić górną lub dolną granicę, lub obie.';
$string['gradelimitsbutnoitem'] = 'Musisz wybrać pozycję oceny';
$string['gradesmustbenumeric'] = 'Minimalna i maksymalna ocena musi być liczbą (lub pozostawić puste).';
$string['groupingnoaccess'] = 'Obecnie nie należysz do grupy, która ma dostęp do tej sekcji.';
$string['isempty'] = 'jest pusty';
$string['isequalto'] = 'równa się';
$string['isnotempty'] = 'nie jest pusty';
$string['none'] = '(żaden)';
$string['notavailableyet'] = 'Jeszcze nie dostepny';
$string['requires_completion_0'] = 'Niedostępne chyba, że aktywność <strong>{$a}</ strong> jest niekompletna.';
$string['requires_completion_1'] = 'Niedostępne dopóki aktywność <strong>{$a}</strong> nie zostanie oznaczona jako zakończona.';
$string['requires_completion_2'] = 'Niedostępne dopóki aktywność <strong>{$a}</strong> jest zakończona i oceniona pozytywnie.';
$string['requires_completion_3'] = 'Niedostępne dopóki aktywność <strong>{$a}</strong> jest zakończona i oceniona negatywnie.';
$string['requires_date'] = 'Dostępny od {$a}.';
$string['requires_date_before'] = 'Dostępny do {$a}.';
$string['requires_date_both'] = 'Dostępny od {$a->from} do {$a->until}.';
$string['requires_date_both_single_day'] = 'Dostępne na {$a}.';
$string['requires_grade_any'] = 'Niedostępne dopóki nie będziesz miał(a) oceny w <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Niedostępne chyba, że osiągniesz wymaganą punktację w <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Niedostępne dopóki nie osiągniesz wymaganej punktacji w <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Niedostępne, chyba że masz określony wynik w <strong>{$a}.</strong>';
$string['requires_user_field_contains'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> zawiera <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> zawiera <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> zawiera <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> jest puste.';
$string['requires_user_field_isequalto'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> jest równe <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Niedostępne, jeśli <strong>{$a->field}</strong> jest puste.';
$string['requires_user_field_startswith'] = 'Niedostępne, chyba że <strong>{$a->field}</strong> rozpoczyna się od <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Przed dostępem aktywność może być';
$string['showavailability_hide'] = 'Ukryj całkowicie aktywność';
$string['showavailability_show'] = 'Pokaż aktywność oznaczoną na szaro z informacją o ograniczeniach';
$string['showavailabilitysection'] = 'Zanim sekcja będzie dostępna';
$string['showavailabilitysection_hide'] = 'Ukryj sekcję całkowicie';
$string['showavailabilitysection_show'] = 'Pokaż sekcję oznaczoną na szaro z informacją o ograniczeniach';
$string['startswith'] = 'rozpoczyna się od';
$string['userfield'] = 'Pole użytkownika';
$string['userfield_help'] = 'Możesz ograniczyć dostęp oparty na dowolnym polu z profilu użytkownika.';
$string['userrestriction_hidden'] = 'Dostęp ograniczony (całkowicie ukryty, brak wiadomości): {$a}';
$string['userrestriction_visible'] = 'Dostęp ograniczony: {$a}';
