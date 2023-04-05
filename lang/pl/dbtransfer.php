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
 * Strings for component 'dbtransfer', language 'pl', version '4.0'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Sprawdzenie struktury tabeli źródłowej';
$string['copyingtable'] = 'Kopiowanie tabeli {$a}';
$string['copyingtables'] = 'Kopiowanie zawartości tabeli ';
$string['creatingtargettables'] = 'Tworzenie tabel w docelowej bazie danych';
$string['dbexport'] = 'Eksport bazy danych';
$string['dbtransfer'] = 'Transfer bazy danych';
$string['differenttableexception'] = 'Struktura tabeli {$a} nie pasuje.';
$string['done'] = 'Wykonano';
$string['exportschemaexception'] = 'Aktualna struktura bazy danych nie pasuje do wszystkich plików install.xml. <br /> {$a}';
$string['importschemaexception'] = 'Aktualna struktura bazy danych nie pasuje do wszystkich plików install.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'Obecna wersja {$a->currentver} nie pasuje do wersji wyeksportowanej {$a->schemaver}.';
$string['malformedxmlexception'] = 'Znaleziono błędy XML, nie można kontynuować.';
$string['tablex'] = 'Tabela {$a}:';
$string['unknowntableexception'] = 'Znaleziono nieznana tabelę: {$a} w pliku eksportu.';
