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
 * Strings for component 'tool_coursedates', language 'pl', version '4.0'.
 *
 * @package     tool_coursedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = 'Musisz wybrać przynajmniej jedną datę do aktualizacji';
$string['autoenddate'] = 'Wyliczyć datę końcową?';
$string['autoenddate_default'] = 'Nie zmieniaj';
$string['autoenddate_help'] = 'Moodle może wyliczyć automatycznie daty końcowe na podstawie liczby sekcji w kursach wykorzystujących format tygodniowy. Możesz wybrać, czy chcesz wymusić to działanie na poziomie kategorii kursów.';
$string['autoenddate_off'] = 'Wyłącz automatyczne daty końcowe';
$string['autoenddate_on'] = 'Wymuś automatyczne daty końcowe';
$string['coursedates:setdates'] = 'Ustaw daty rozpoczęcia/zamknięcia wszystkich kursów w kategorii.';
$string['keependdates'] = 'Zachowaj istniejące daty zakończenia';
$string['pluginname'] = 'Ustaw daty kursów';
$string['privacy:metadata'] = 'Wtyczka Ustaw daty kursów nie przechowuje żadnych prywatnych danych.';
$string['setdates'] = 'Ustaw daty kursów';
$string['setdatesinstruction'] = 'Ustaw daty rozpoczęcia i zakończenia wszystkich kursów w kategorii kursów i we wszystkich jej podkategoriach. Wybierz opcje i kliknij "Potwierdź". Po potwierdzeniu, Moodle utworzy jednorazowe zadanie w harmonogramie zaplanowanych zadań i wstawi odpowiednie daty w tle. Wymaga to włączonego cron-a na serwerze.';
$string['updatequeued'] = 'Zaplanowano jednorazowe zadanie aktualizujące wszystkie kursy w kategorii <strong>{$a}</strong>. Zadanie zostanie wykonane w następnym cyklu programu cron.';
