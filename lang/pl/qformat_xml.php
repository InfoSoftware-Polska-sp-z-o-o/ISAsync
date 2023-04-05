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
 * Strings for component 'qformat_xml', language 'pl', version '4.0'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Nieprawidłowy plik XML - oczekiwano stringa (może należy użyć CDATA?)';
$string['pluginname'] = 'Format Moodle XML';
$string['pluginname_help'] = 'To własny format importu i eksportu pytań Moodle\'a.';
$string['privacy:metadata'] = 'Wtyczka formatu XML nie przechowuje żadnych danych osobowych.';
$string['truefalseimporterror'] = '<b>Ostrzeżenie:</b>  Pytanie typu prawda/fałsz &quot;{$a->questiontext}&quot; nie zostało zaimportowane poprawnie. Nie wiadomo, czy właściwa odpowiedź to \'prawda\' czy \'fałsz\'. Przyjęto, że odpowiedź brzmi &quot;{$a->answer}&quot;. Jeśli niesłusznie, trzeba będzie zmodyfikować pytanie.';
$string['unsupportedexport'] = 'Format XML nie umożliwia eksportu pytania typu: {$a}';
$string['xmlimportnoname'] = 'Brak nazwy pytania w pliku XML';
$string['xmlimportnoquestion'] = 'Brak treści pytania w pliku XML';
$string['xmltypeunsupported'] = 'Typu pytania {$a} nie jest obsługiwany przez import XML';
