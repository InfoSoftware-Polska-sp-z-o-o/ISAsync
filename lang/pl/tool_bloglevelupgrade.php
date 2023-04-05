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
 * Strings for component 'tool_bloglevelupgrade', language 'pl', version '4.0'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p> Ta strona została ostatnio uaktualniona do Moodle 2.0. </p><p> Widoczność blogów została uproszczony w wersji 2.0, ale Twoja witryna nadal korzysta z jednego ze starych typów widoczności. </p><p> Aby zachować widoczność wpisów w blogu opartą na kursie lub grupie, należy uruchomić następujący skrypt aktualizacyjny, który w każdym kursie, którego uczestnicy utworzyli tu wpisy, utworzy specjalne "blogopodobne"  forum i skopiuje odpowiednie wpisy z blogu do tego specjalnego forum. </p><p> Blogi zostaną całkowicie wyłączone na poziomie witryny. Żadne wpisy na blogu nie zostaną usunięte w trakcie tego procesu. </p><p> Można uruchomić skrypt, odwiedzając <a href="{$a->fixurl}">stronę aktualizacji blogów</a> . </p>';
$string['bloglevelupgradeinfo'] = 'Widoczność blogów została uproszczony w wersji 2.0, ale Twoja witryna nadal korzysta z jednego ze starych typów widoczności. Aby zachować widoczność wpisów w blogu opartą na kursie lub grupie, należy uruchomić następujący skrypt aktualizacyjny, który w każdym kursie, którego uczestnicy utworzyli tu wpisy, utworzy specjalne "blogopodobne"  forum i skopiuje odpowiednie wpisy z blogu do tego specjalnego forum. Blogi zostaną całkowicie wyłączone na poziomie witryny. Żadne wpisy na blogu nie zostaną usunięte w trakcie tego procesu.';
$string['bloglevelupgradeprogress'] = 'Postęp konwersji: przejrzano {$a->userscount} użytkowników,{$a->blogcount} wpisów skonwertowano.';
$string['pluginname'] = 'Uaktualnienie widoczności blogów';
