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
 * Strings for component 'availability_grade', language 'pl', version '4.0'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Wymaganie dotyczące osiągnięcia przez studenta oceny zgodnej z nadanymi warunkami.';
$string['error_backwardrange'] = 'Podczas określania warunków dotyczących oceny należy zwrócić uwagę na to, iż wartość minimalna powinna być mniejsza od wartości maksymalnej.';
$string['error_invalidnumber'] = 'Zakres ocen musi mieścić się w granicy 0-100%';
$string['error_selectgradeid'] = 'Należy wybrać warunki dotyczące oceny.';
$string['label_max'] = 'Maksimum oceny wyrażone w procentach (wykluczając wartość maksymalną)';
$string['label_min'] = 'Minimum oceny wyrażone w procentach (uwzględniające wartość minimalną)';
$string['missing'] = '(brak aktywności)';
$string['option_max'] = 'musi być <';
$string['option_min'] = 'musi być ≥';
$string['pluginname'] = 'Ograniczenie uwzględniające oceny';
$string['privacy:metadata'] = 'Wtyczka Ograniczenie uwzględniające oceny nie przechowuje żadnych danych osobistych.';
$string['requires_any'] = 'Masz wystawioną ocenę w aktywności <strong>{$a}</strong>';
$string['requires_max'] = 'Otrzymasz w aktywności <strong>{$a}</strong> odpowiednią ocenę.';
$string['requires_min'] = 'Osiągniesz w aktywności <strong>{$a}</strong> ocenę zgodną z wymaganiami określonymi w ograniczeniach dostępu.';
$string['requires_notany'] = 'Nie masz wystawionej oceny w aktywności <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Nie osiągasz wymaganych wyników w aktywności <strong>{$a}</strong>';
$string['requires_range'] = 'Otrzymasz w aktywności <strong>{$a}</strong> ocenę zgodną z wymaganiami określonymi w ograniczeniach dostępu.';
$string['title'] = 'Ocena';
