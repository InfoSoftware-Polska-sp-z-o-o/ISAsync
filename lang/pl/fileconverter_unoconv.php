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
 * Strings for component 'fileconverter_unoconv', language 'pl', version '4.0'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Ścieżka do konwertera dokumentów unoconv';
$string['pathtounoconv_help'] = 'Ścieżka do konwertera dokumentów unoconv. Jest to plik wykonywalny, który umożliwia konwersję między formatami dokumentów obsługiwanymi przez LibreOffice. Jest to ustawienie opcjonalne, ale jeśli zostanie określone, Moodle użyje go do automatycznej konwersji między formatami dokumentów. Opcja ta służy do obsługi szerszego zakresu plików wejściowych dla funkcji adnotacji PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Wtyczka konwertera dokumentów Unoconv nie przechowuje żadnych danych osobowych.';
$string['test_unoconv'] = 'Przetestuj ścieżkę unoconv';
$string['test_unoconvdoesnotexist'] = 'Ścieżka unoconv nie wskazuje na program unoconv. Sprawdź ustawienia ścieżki.';
$string['test_unoconvdownload'] = 'Pobierz przekonwertowany plik testowy pdf.';
$string['test_unoconvempty'] = 'Ścieżka unoconv nie jest ustawiona. Sprawdź ustawienia ścieżki.';
$string['test_unoconvisdir'] = 'Ścieżka unoconv wskazuje na folder, proszę dołączyć program unoconv do określonej ścieżki';
$string['test_unoconvnotestfile'] = 'Brakuje dokumentu testowego do przekonwertowania na PDF.';
$string['test_unoconvnotexecutable'] = 'Ścieżka unoconv wskazuje na plik, który nie jest wykonywalny';
$string['test_unoconvok'] = 'Wydaje się, że ścieżka unoconv jest poprawnie skonfigurowana.';
$string['test_unoconvversionnotsupported'] = 'Wersja unoconv, którą zainstalowałeś, nie jest obsługiwana.';
