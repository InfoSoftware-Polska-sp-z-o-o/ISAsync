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
 * Strings for component 'quizaccess_ipaddresslist', language 'pl', version '4.0'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Dodaj lokalizację';
$string['allowedsubnets'] = 'Dozwolone lokalizacje';
$string['allowedsubnets_help'] = 'Dostęp to testu (quizu) może być ograniczony do konkretnych lokalizacji określonych adresem IP użytkownika. Lista lokalizacji i przyporządkowanych im adresów IP podsieci jest definiowana przez administratora witryny. Nie zaznaczaj żadnej lokalizacji, aby wyłączyć sprawdzenie lokalizacji.';
$string['editsubnet'] = 'Edycja lokalizacji';
$string['managesubnets'] = 'Zarządzanie lokalizacjami';
$string['pluginname'] = 'Reguły dostępu do testu z adresów IP';
$string['subnet'] = 'IP podsieci';
$string['subnet_help'] = 'Podaj listę (oddzielonych przecinkami) częściowych lub pełnych adresów IP.

Przykłady:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,?192.168.,?231.54.211.0/20,?231.3.56.10-20';
$string['subnetwrong'] = 'Ten test jest dostępny jedynie z wybranych lokalizacji. Twój komputer nie znajduje się na liście dozwolonych miejsc.';
