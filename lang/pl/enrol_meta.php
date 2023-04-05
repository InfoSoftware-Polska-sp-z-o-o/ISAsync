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
 * Strings for component 'enrol_meta', language 'pl', version '4.0'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Dodaj do grupy';
$string['coursesort'] = 'Sortuj listę kursów';
$string['creategroup'] = 'Utwórz nową grupę';
$string['defaultgroupnametext'] = 'kurs {$a->name} {$a->increment}';
$string['linkedcourse'] = 'Połącz z kursem nadrzędnym';
$string['meta:config'] = 'Konfigurowanie zapisów przez kurs nadrzędny';
$string['meta:selectaslinked'] = 'Podłączanie kursu nadrzędnego';
$string['meta:unenrol'] = 'Wypisz zawieszonych użytkowników';
$string['nosyncroleids'] = 'Role, które nie są synchronizowane';
$string['nosyncroleids_desc'] = 'Domyślnie wszystkie przypisania ról poziomu kursu są zsynchronizowane z kursu nadrzędnego do kursów podrzędnych. Role, które są wybrane tutaj, nie będą uwzględnione w procesie synchronizacji. Role podlegające synchronizacji będą zaktualizowane w następnym cyklu cron.';
$string['pluginname'] = 'Kurs nadrzędny';
$string['pluginname_desc'] = 'Wtyczka połączenia z kursem nadrzędnym synchronizuje zapisy i role w dwu kursach.';
$string['syncall'] = 'Synchronizuj wszystkich zapisanych użytkowników';
$string['syncall_desc'] = 'Jeśli opcja jest włączona, wszyscy zapisani użytkownicy są synchronizowani, nawet jeśli nie mają oni roli w kursie nadrzędnym. Jeśli opcja jest wyłączona, tylko użytkownicy, którzy mają co najmniej jedną synchronizowaną rolę są zapisywani do kursu podrzędnego.';
