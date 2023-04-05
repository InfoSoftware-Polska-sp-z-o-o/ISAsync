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
 * Strings for component 'gradingform_rubric', language 'pl', version '4.0'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Dodaj kryterium';
$string['additionalfeedback'] = 'Dodatkowa informacja zwrotna';
$string['alwaysshowdefinition'] = 'Zezwalaj użytkownikom na podgląd formularza oceniania używanego w module (w przeciwnym razie formularz widoczny będzie dopiero po ocenieniu)';
$string['backtoediting'] = 'Powróć do edycji';
$string['confirmdeletecriterion'] = 'Czy na pewno chcesz usunąć to kryterium?';
$string['confirmdeletelevel'] = 'Czy na pewno chcesz usunąć ten poziom?';
$string['criterion'] = 'Kryterium  {$a}';
$string['criterionaddlevel'] = 'Dodaj poziom';
$string['criteriondelete'] = 'Usuń kryterium';
$string['criterionduplicate'] = 'Powiel kryterium';
$string['criterionempty'] = 'Kliknij, aby edytować kryterium';
$string['criterionmovedown'] = 'Przesuń w dół';
$string['criterionmoveup'] = 'Przesuń do góry';
$string['definerubric'] = 'Zdefiniuj tabelę kryteriów';
$string['description'] = 'Opis';
$string['enableremarks'] = 'Pozwól oceniającemu na dodawanie uwag tekstowych do każdego kryterium';
$string['err_mintwolevels'] = 'Każde kryterium musi mieć co najmniej dwa poziomy';
$string['err_nocriteria'] = 'Tabela kryteriów musi zawierać co najmniej jedno kryterium';
$string['err_nodefinition'] = 'Definicja poziomu nie może być pusta';
$string['err_nodescription'] = 'Opis kryterium nie może być pusty';
$string['err_scoreformat'] = 'Liczba punktów za każdy poziom musi być prawidłową liczbą nieujemną';
$string['err_totalscore'] = 'Maksymalna możliwa liczba punktów do otrzymania w tabeli kryteriów musi być większa od zera';
$string['gradingof'] = '{$a}: zasady oceniania';
$string['level'] = 'Poziom {$a->definition}, {$a->score} punktów.';
$string['leveldelete'] = 'Usuń poziom {$a}';
$string['levelempty'] = 'Kliknij, aby edytować poziom';
$string['levelsgroup'] = 'Grupa poziomów';
$string['name'] = 'Nazwa';
$string['needregrademessage'] = 'Definicja tabeli kryteriów została zmieniona po uprzednim ocenieniu studenta. Student nie zobaczy tej tabeli, dopóki jej nie przejrzysz i nie zaktualizujesz oceny.';
$string['notset'] = 'Nie ustawiono';
$string['pluginname'] = 'Tabela kryteriów';
$string['pointsvalue'] = '{$a} punktów';
$string['previewrubric'] = 'Podgląd tabeli kryteriów';
$string['regrademessage1'] = 'Masz zamiar zapisać zmiany w tabeli kryteriów, która została już wykorzystana do oceniania. Zdecyduj, czy istniejące oceny wymagają przejrzenia. Jeśli tak - szczegóły będą ukryte dla studentów do czasu, gdy ich oceny zostaną przeliczone.';
$string['regrademessage5'] = 'Masz zamiar zapisać istotne zmiany w tabeli kryteriów, która była już wykorzystana do oceniania. Ocena końcowa pozostanie w dzienniku ocen, ale szczegóły będą ukryte dla studentów do czasu, gdy ich oceny zostaną przeliczone.';
$string['regradeoption0'] = 'Nie zaznaczaj do ponownego ocenienia';
$string['regradeoption1'] = 'Zaznacz do ponownego ocenienia';
$string['restoredfromdraft'] = 'UWAGA: ostatnia próba ocenienia tej osoby nie została poprawnie zapisana, więc tymczasowo zachowane oceny zostały przywrócone. Jeśli chcesz zrezygnować z tych zmian użyj przycisku &quot;Anuluj&quot;  poniżej.';
$string['rubric'] = 'Tabela kryteriów';
$string['rubricmapping'] = 'Przeliczenie oceny formularza na ocenę modułu';
$string['rubricmappingexplained'] = 'Minimalna ocena w tej tabeli kryteriów to <b>{$a->minscore} pkt.</b> i zostanie skonwertowana na minimalną ocenę w tym module (która wynosi 0, o ile nie jest stosowana inna skala).
Maksymalna ocena <b>{$a->maxscore} pkt. </b> zostanie przekształcona na maksymalnym ocenę w module. <br /> Pośrednie wyniki zostaną przeliczone proporcjonalnie i zaokrąglone do najbliższej oceny. <br /> Jeśli specjalna skala jest używana zamiast ocen liczbowych, wynik zostanie przekształcony tak, jakby kolejne pozycje skali odpowiadały kolejnym liczbom całkowitym.';
$string['rubricnotcompleted'] = 'Zaznacz coś w każdym kryterium';
$string['rubricoptions'] = 'Opcje tabeli kryteriów';
$string['rubricstatus'] = 'Bieżący stan tabeli kryteriów';
$string['save'] = 'Zapisz';
$string['saverubric'] = 'Zapisz tabeli kryteriów jako gotową';
$string['saverubricdraft'] = 'Zapisz jako szkic';
$string['scorepostfix'] = '{$a} punktów';
$string['showdescriptionstudent'] = 'Oceniani widzą opis kryteriów';
$string['showdescriptionteacher'] = 'Wyświetlaj opis kryteriów w trakcie oceniania';
$string['showremarksstudent'] = 'Oceniani widzą uwagi';
$string['showscorestudent'] = 'Oceniani widzą punktację za każdy poziom kryterium';
$string['showscoreteacher'] = 'Wyświetlaj punktację za każdy poziom kryterium w trakcie oceniania';
$string['sortlevelsasc'] = 'Kolejność wyświetlania poziomów';
$string['sortlevelsasc0'] = 'Malejąco wg punktów';
$string['sortlevelsasc1'] = 'Rosnąco wg punktów';
