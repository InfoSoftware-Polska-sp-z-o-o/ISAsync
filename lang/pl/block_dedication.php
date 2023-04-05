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
 * Strings for component 'block_dedication', language 'pl', version '4.0'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Czasomierz...';
$string['access_info'] = 'Tylko dla prowadzących:';
$string['connectionratiorow'] = 'Połączenia/dzień';
$string['dedication:addinstance'] = 'Zezwól na dodanie bloku CZASOMIERZ';
$string['dedication:use'] = 'Zezwól na używanie bloku CZASOMIERZ';
$string['dedication_estimation'] = 'Szacowany czas spędzony w kursie to';
$string['dedicationall'] = 'Czasy wszystkich studentów. Kliknij dowolną nazwę, aby zobaczyć szczegóły.';
$string['dedicationgroup'] = 'Czasy wszystkich członków grupy <em>{$a}</em>. Kliknij dowolną nazwę, aby zobaczyć szczegóły.';
$string['dedicationrow'] = 'Czasomierz';
$string['form'] = 'Konfiguracja Czasomierza';
$string['form_help'] = 'Czas jest szacowany na podstawie sesji i czasu trwania sesji z logów.

<strong>Klik:</strong> za każdym razem, gdy użytkownik uzyskuje dostęp do strony w Moodle, zapisywany jest wpis w logu.

<strong>Sesja:</strong> zestaw co najmniej dwóch kolejnych kliknięć, w których czas
pomiędzy każdą parą kolejnych kliknięć nie przekracza ustalonego maksymalnego czasu.

<strong>Czas trwania sesji:</strong> czas, jaki upłynął między pierwszym a ostatnim kliknięciem w sesji.

<strong>Spędzony czas:</strong> suma czasu trwania całej sesji użytkownika.';
$string['form_text'] = 'Wybierz zakres dat i maksymalny czas między kliknięciami w tej samej sesji.';
$string['limit'] = 'Limit między kliknięciami (w minutach)';
$string['limit_help'] = 'Limit między kliknięciami określa, czy dwa kliknięcia są częścią tej samej sesji, czy nie';
$string['maxtime'] = 'Koniec okresu';
$string['maxtime_help'] = 'Uwzględnij tylko te wpisy z logu, które kończą się przed tą datą';
$string['meandedication'] = '<strong>Średnio:</strong> {$a}';
$string['mintime'] = 'Początek okresu';
$string['mintime_help'] = 'Uwzględnij tylko te wpisy z logu, które kończą się po tej dacie';
$string['pagetitle'] = '{$a}: spędzonego czasu';
$string['period'] = 'Przedział czasowy od <em>{$a->mintime}</em> do <em>{$a->maxtime}</em>.';
$string['perioddiff'] = '<strong>Łączny czas:</strong>  {$a}';
$string['perioddiffrow'] = 'Upłynęło';
$string['pluginname'] = 'CZASOMIERZ';
$string['sessionduration'] = 'Czas';
$string['sessionstart'] = 'Początek sesji';
$string['show_dedication'] = 'Pokaż studentom czas spędzony w kursie';
$string['show_dedication_help'] = 'Domyślnie, czas spędzony w kursie widoczny jest tylko dla nauczyciela. To ustawienie pozwala studentom zobaczyć ich czas spędzony w kursie.';
$string['sincerow'] = 'Od';
$string['submit'] = 'Uruchom obliczanie';
$string['torow'] = 'Do';
$string['totaldedication'] = '<strong>Łączny czas:</strong> {$a}';
$string['userdedication'] = 'Szczegóły <em>{$a}</em>.';
