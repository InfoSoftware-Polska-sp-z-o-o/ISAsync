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
 * Strings for component 'qtype_essay', language 'pl', version '4.0'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Akceptowane typy plików';
$string['acceptedfiletypes_help'] = 'Akceptowane typy plików można ograniczyć, wprowadzając listę rozszerzeń plików. Jeśli pole jest puste, wszystkie typy plików są dozwolone.';
$string['allowattachments'] = 'Zezwól na załączniki';
$string['answerfiles'] = 'Pliki odpowiedzi';
$string['answertext'] = 'Tekst odpowiedzi';
$string['attachedfiles'] = 'Załączniki: {$a}';
$string['attachmentsoptional'] = 'Załączniki są opcjonalne';
$string['attachmentsrequired'] = 'Wymagane są załączniki';
$string['err_maxminmismatch'] = 'Maksymalny limit słów musi być większy niż minimalny limit słów';
$string['err_maxwordlimit'] = 'Maksymalny limit słów jest włączony, ale nie jest ustawiony';
$string['err_maxwordlimitnegative'] = 'Maksymalny limit słów nie może być liczbą ujemną';
$string['err_minwordlimit'] = 'Minimalny limit słów jest włączony, ale nie jest ustawiony';
$string['err_minwordlimitnegative'] = 'Minimalny limit słów nie może być liczbą ujemną';
$string['formateditor'] = 'Edytor HTML';
$string['formateditorfilepicker'] = 'Edytor HTML z wybieraniem plików';
$string['formatmonospaced'] = 'Zwykły tekst, czcionka o stałej szerokości';
$string['formatnoinline'] = 'Bez tekstu online';
$string['formatplain'] = 'Zwykły tekst';
$string['graderinfo'] = 'Informacja dla oceniających';
$string['graderinfoheader'] = 'Informacja o ocenie';
$string['maxbytes'] = 'Maksymalny rozmiar pliku';
$string['maxwordlimit'] = 'Maksymalny limit słów';
$string['maxwordlimit_help'] = 'Jeśli odpowiedź wymaga, aby studenci wprowadzili tekst, jest to maksymalna liczba słów, jaką każdy student będzie mógł przesłać.';
$string['maxwordlimitboundary'] = 'Limit słów dla tego pytania wynosi {$a->limit} słów, a Ty próbujesz przesłać {$a->count} słów. Skróć odpowiedź i spróbuj ponownie.';
$string['minwordlimit'] = 'Minimalny limit słów';
$string['minwordlimit_help'] = 'Jeśli odpowiedź wymaga, aby studenci wprowadzili tekst, jest to minimalna liczba słów, jaką każdy student będzie mógł przesłać.';
$string['minwordlimitboundary'] = 'To pytanie wymaga odpowiedzi na co najmniej {$a->limit} słów, a Ty próbujesz przesłać {$a->count} słów. Rozwiń swoją odpowiedź i spróbuj ponownie.';
$string['mustattach'] = 'Gdy wybrana jest opcja "Bez tekstu online" lub gdy wpisanie odpowiedzi jest opcjonalne, należy zezwolić na przynajmniej jeden załącznik.';
$string['mustrequire'] = 'Gdy wybrana jest opcja "Bez tekstu online" lub gdy wpisanie odpowiedzi jest opcjonalne, należy wymagać przynajmniej jednego załącznika.';
$string['mustrequirefewer'] = 'Nie możesz wymagać więcej załączników, niż zezwalasz.';
$string['nlines'] = '{$a} linii';
$string['nonexistentfiletypes'] = 'Następujące typy plików nie zostały rozpoznane: {$a}';
$string['pluginname'] = 'Esej';
$string['pluginname_help'] = 'W odpowiedzi na to pytanie użytkownik może przekazać jeden lub więcej plików i/lub wpisać tekst online w edytorze. Można sporządzić szablon do odpowiedzi. Odpowiedzi należy ocenić ręcznie.';
$string['pluginnameadding'] = 'Dodawanie pytania typu esej';
$string['pluginnameediting'] = 'Edycja pytania typu esej';
$string['pluginnamesummary'] = 'To pytanie pozwala na odpowiedź poprzez przesłanie pliku/plików bądź wpisanie tekstu online w edytorze. Odpowiedź musi być oceniona ręcznie.';
$string['privacy:metadata'] = 'Pytanie typu esej nie przechowuje żadnych prywatnych danych.';
$string['privacy:preference:attachments'] = 'Liczba dozwolonych załączników.';
$string['privacy:preference:attachmentsrequired'] = 'Liczba wymaganych załączników.';
$string['privacy:preference:maxbytes'] = 'Maksymalny rozmiar pliku.';
$string['privacy:preference:responsefieldlines'] = 'Liczba linii wskazujących rozmiar pola tekstowego.';
$string['privacy:preference:responseformat'] = 'Jaki jest format odpowiedzi (edytor HTML, zwykły tekst itp.)?';
$string['responsefieldlines'] = 'Rozmiar pola wprowadzania';
$string['responseformat'] = 'Format odpowiedzi';
$string['responseisrequired'] = 'Wymagaj od studentów wprowadzenia tekstu';
$string['responsenotrequired'] = 'Wprowadzanie tekstu jest opcjonalne';
$string['responseoptions'] = 'Opcje odpowiedzi';
$string['responserequired'] = 'Wymagany tekst';
$string['responsetemplate'] = 'Szablon odpowiedzi';
$string['responsetemplateheader'] = 'Szablon odpowiedzi';
$string['wordcount'] = 'Liczba słów: {$a}';
$string['wordcounttoofew'] = 'Liczba słów: {$a->count}, mniej niż limit {$a->limit} słów.';
$string['wordcounttoomuch'] = 'Liczba słów: {$a->count}, więcej niż limit {$a->limit} słów.';
