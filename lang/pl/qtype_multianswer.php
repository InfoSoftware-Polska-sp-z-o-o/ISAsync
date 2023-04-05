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
 * Strings for component 'qtype_multianswer', language 'pl', version '4.0'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Potwierdzam, że chcę by to pytanie było zapisane jako edytowane';
$string['confirmsave'] = 'Potwierdź, następnie zapisz {$a}';
$string['correctanswer'] = 'Prawidłowa odpowiedź';
$string['correctanswerandfeedback'] = 'Poprawna odpowiedź i informacja zwrotna';
$string['decodeverifyquestiontext'] = 'Dekodowanie i weryfikacja tekstu pytania';
$string['layout'] = 'Układ';
$string['layouthorizontal'] = 'Poziomy wiersz przycisków radiowych';
$string['layoutmultiple_horizontal'] = 'Poziomy rząd pól wyboru';
$string['layoutmultiple_vertical'] = 'Pionowa kolumna pól wyboru';
$string['layoutselectinline'] = 'Menu rozwijane w linii w tekście';
$string['layoutundefined'] = 'Niezdefiniowany układ';
$string['layoutvertical'] = 'Pionowa kolumna przycisków radiowych';
$string['nooptionsforsubquestion'] = 'Nie można pobrać opcji dla części pytania # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Pytanie zagnieżdżone (Cloze) <strong>"{$a}"</strong> nie zawiera żadnego pytania';
$string['pleaseananswerallparts'] = 'Proszę odpowiedzieć na wszystkie części pytania.';
$string['pluginname'] = 'Pytanie zagnieżdżone (dawne Cloze)';
$string['pluginname_help'] = 'Pytanie zagnieżdżone (dawne Cloze) składa się z fragmentu tekstu z osadzonym w nim pytaniami np. wielokrotnego wyboru i na krótką odpowiedź';
$string['pluginnameadding'] = 'Dodawanie pytania zagnieżdżonego (Cloze)';
$string['pluginnameediting'] = 'Edycja pytania zagnieżdżonego (Cloze)';
$string['pluginnamesummary'] = 'Pytania tego typu są bardzo elastyczne, ale mogą być tworzone wyłącznie ręcznie, poprzez wprowadzanie tekstu zawierającego specjalne kody, które stanowią zagnieżdżone pytania wielokrotnego wyboru, na krótkie odpowiedzi i numeryczne.';
$string['privacy:metadata'] = 'Wtyczka pytania typu zagnieżdżonego nie przechowuje żadnych prywatnych danych.';
$string['qtypenotrecognized'] = 'typ pytania {$a} nie rozpoznany';
$string['questiondefinition'] = 'Definicja pytania';
$string['questiondeleted'] = 'Pytanie usunięte';
$string['questioninquiz'] = '<ul>
<li>dodawać lub usuwać pytań, </li>
<li>zmieniać kolejności pytań w tekście, </li>
<li>zmieniać typów pytań (numeryczne, krótka odpowiedź, wielokrotny wybór). </li>
</ul>';
$string['questionnotfound'] = 'Nie znaleziono treści pytana w sekcji nr #{$a}';
$string['questionsadded'] = 'Pytanie dodane';
$string['questionsaveasedited'] = 'Pytanie zostanie zapisane jako edytowane';
$string['questionsless'] = 'O {$a} pytań mniej niż w pytaniu zagnieżdżonym przechowywanym w bazie danych*';
$string['questionsmissing'] = 'Tekst pytania musi zawierać co najmniej jeden zagnieżdżony kod pytania.';
$string['questionsmore'] = 'O {$a} pytań więcej niż w pytaniu zagnieżdżonym przechowywanym w bazie danych*';
$string['questiontypechanged'] = 'Typ pytania został zmieniony';
$string['questiontypechangedcomment'] = 'Typ co najmniej jednego pytania został zmieniony. <br >
Czy dodano, usunięto lub przeniesiono pytanie? <br >
Sprawdź dalej.';
$string['questionusedinquiz'] = 'To pytanie jest używane w {$a->nb_of_quiz} testach, liczba podejść: {$a->nb_of_attempts}';
$string['storedqtype'] = 'Zapisany typ pytania {$a}';
$string['subqresponse'] = 'część {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Nieznany typ pytania: {$a->type} w sekcji nr #{$a->sub}';
$string['warningquestionmodified'] = ' <b>UWAGA</ b>';
$string['youshouldnot'] = '<b>NIE POWINIENEŚ</b>';
