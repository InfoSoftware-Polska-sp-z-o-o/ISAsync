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
 * Strings for component 'workshopallocation_random', language 'pl', version '4.0'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Recenzje własnej pracy?';
$string['allocationaddeddetail'] = 'Nowa recenzja do zrobienia: <strong>{$a->reviewername}</strong> jest recenzentem dla <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Nie można cofnąć przydziału do recenzji, która została już oceniona: <strong>recenzent: {$a->reviewername}</strong> , autor pracy: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Ponowna recenzja: <strong>{$a->reviewername}</strong> nadal jest  recenzentem dla <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Ustawienia przydziału prac';
$string['assessmentdeleteddetail'] = 'Cofnięty przydział do recenzji: <strong>{$a->reviewername}</strong> nie jest już recenzentem dla <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Uczestnicy mogą byc recenzentami bez przesłania własnej pracy';
$string['confignumofreviews'] = 'Domyślna liczba prac przypisywana losowo';
$string['excludesamegroup'] = 'Recenzenci tylko spoza własnej grupy';
$string['noallocationtoadd'] = 'Nie ma nic do przydzielenia';
$string['nogroupusers'] = '<p> Ostrzeżenie: Jeśli warsztat jest w trybie "widoczne grupy" lub "osobne grupy", użytkownicy MUSZĄ należeć do co najmniej jednej grupy, aby to narzędzie przydzieliło im recenzje. Użytkownicy bez grupy mogą recenzować tylko własne prace, można też usunąć ich istniejący przydział. </p><p> Ci użytkownicy nie są aktualnie w żadnej grupie: {$a} </p>**';
$string['numofdeallocatedassessment'] = 'Cofamy przydział {$a} recenzji';
$string['numofrandomlyallocatedsubmissions'] = 'Losowe przydzielanie {$a} prac';
$string['numofreviews'] = 'Liczba recenzji';
$string['numofselfallocatedsubmissions'] = 'Przydzielam {$a} prac do autorecenzji';
$string['numperauthor'] = 'na wysłaną pracę';
$string['numperreviewer'] = 'na recenzenta';
$string['pluginname'] = 'Automatyczny przydział';
$string['randomallocationdone'] = 'Wykonano przydział losowy';
$string['removecurrentallocations'] = 'Unieważnić bieżące przydziały';
$string['resultnomorepeers'] = 'Nie ma więcej dostępnych osób';
$string['resultnomorepeersingroup'] = 'Nie ma więcej dostępnych osób w tej grupie';
$string['resultnotenoughpeers'] = 'Niewystarczająca liczba dostępnych osób';
$string['resultnumperauthor'] = 'Próbuje przydzielić {$a} recenzje na autora';
$string['resultnumperreviewer'] = 'Próbuję przydzielić {$a} recenzje na recenzenta';
$string['stats'] = 'Aktualne statystyki przydziału';
