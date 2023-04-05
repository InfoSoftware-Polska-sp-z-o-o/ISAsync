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
 * Strings for component 'enrol_mnet', language 'pl', version '4.0'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Istnieje już wtyczka MNet dla tego hosta. Tylko jeden egzemplarz może istnieć dla jednego hosta i/lub jeden dla "wszystkich hostów".';
$string['instancename'] = 'Nazwa metody zapisów';
$string['instancename_help'] = 'Opcjonalnie można zmienić nazwę tego egzemplarza metody zapisów przez MNet. Jeśli zostawisz to pole puste, pozostanie nazwa domyślna, zawierająca nazwę zdalnego hosta i rolę przypisaną dla jego użytkowników.';
$string['mnet_enrol_name'] = 'Usługa zdalnych zapisów';
$string['pluginname'] = 'Zapisy przez MNet';
$string['pluginname_desc'] = 'Umożliwia zdalnym hostom sieci MNet zapisywanie swoich użytkowników do naszych kursów.';
$string['remotesubscriber'] = 'Zdalny host';
$string['remotesubscriber_help'] = 'Wybierz "Wszystkie hosty", aby otworzyć ten kurs dla wszystkich węzłów Mnet, którym udostępniamy usługę zdalnego rejestrowania się, lub wybierz jednego hosta, aby ten kurs był dostępny tylko dla użytkowników z tego hosta.';
$string['remotesubscribersall'] = 'Wszystkie hosty';
$string['roleforremoteusers'] = 'Rola dla zdalnych użytkowników';
$string['roleforremoteusers_help'] = 'Jaką rolę otrzyma zdalny użytkownik z wybranego hosta.';
