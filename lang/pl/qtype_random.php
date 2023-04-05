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
 * Strings for component 'qtype_random', language 'pl', version '4.0'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Czy może wybrać pytanie ręcznie oceniane jako pytanie losowo wybrane z kategorii?';
$string['includingsubcategories'] = 'Zawierający podkategorie';
$string['pluginname'] = 'Losowe';
$string['pluginname_help'] = 'Pytanie losowe nie jest typem pytania jako takim. Jest to mechanizm wstawiający do testu losowo wybrane pytanie z określonej kategorii.';
$string['pluginnameediting'] = 'Edycja pytania typu: Losowe';
$string['privacy:metadata'] = 'Wtyczka pytanie losowego wyboru nie zawiera żadnych prywatnych danych.';
$string['randomqname'] = 'Losowe ({$a})';
$string['randomqnamefromtop'] = 'Wadliwe losowe pytanie! Usuń to pytanie.';
$string['randomqnamefromtoptags'] = 'Wadliwe losowe pytanie! Usuń to pytanie.';
$string['randomqnametags'] = 'Losowe ({$a->category}, tagi: {$a->tags})';
$string['randomqplusname'] = 'Losowe ({$a} i podkategorie)';
$string['randomqplusnamecourse'] = 'Losowe (dowolna kategoria w tym kursie)';
$string['randomqplusnamecoursecat'] = 'Losowe (dowolna kategoria wewnątrz kategorii kursu {$a})';
$string['randomqplusnamecoursecattags'] = 'Losowe (dowolna kategoria wewnątrz kategorii kursu {$a->category}, tagi: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Losowe (dowolna kategoria w tym kursie {$a->category}, tagi: {$a->tags})';
$string['randomqplusnamemodule'] = 'Losowe (dowolna kategoria tego testu)';
$string['randomqplusnamemoduletags'] = 'Losowe (dowolna kategoria tego testu, tagi: {$a->tags})';
$string['randomqplusnamesystem'] = 'Losowe (dowolna kategoria na poziomie systemu)';
$string['randomqplusnamesystemtags'] = 'Losowe (dowolna kategoria na poziomie systemu, tagi: {$a->tags})';
$string['randomqplusnametags'] = 'Losowe ({$a->category} i podkategorie, tagi: {$a->tags})';
$string['selectedby'] = '{$a->questionname} wybrane przez {$a->randomname}';
$string['selectmanualquestions'] = 'Losowe pytania mogą korzystać z ręcznie ocenianych pytań';
$string['taskunusedrandomscleanup'] = 'Usuń nieużywane losowe pytania';
