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
 * Strings for component 'qtype_numerical', language 'pl', version '4.0'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Akceptowany błąd';
$string['addmoreanswerblanks'] = 'Pola na {no} więcej odpowiedzi';
$string['addmoreunitblanks'] = 'Pola na {no} nowe jednostki';
$string['answercolon'] = 'Odpowiedź:';
$string['answererror'] = 'Błąd';
$string['answermustbenumberorstar'] = 'Odpowiedź musi być liczbą, np: -1,234 or 3e8,  lub \'*\'.';
$string['answerno'] = 'Odpowiedź {$a}';
$string['decfractionofquestiongrade'] = 'jako ułamek [0..1] punktacji za pytanie';
$string['decfractionofresponsegrade'] = 'jako ułamek [0..1] punktacji za daną odpowiedź';
$string['decimalformat'] = 'cyfry dziesiętne';
$string['editableunittext'] = 'Pole tekstowe';
$string['errornomultiplier'] = 'Musisz podać mnożnik (współczynnik) dla tej jednostki.';
$string['errorrepeatedunit'] = 'Dwie jednostki nie mogą mieć takich samych nazw.';
$string['geometric'] = 'Geometryczna';
$string['invalidnumber'] = 'Musisz podać poprawną liczbę.';
$string['invalidnumbernounit'] = 'Musisz wpisać poprawną liczbę. Nie wpisuj tu jednostki.';
$string['invalidnumericanswer'] = 'Jedna z podanych odpowiedzi nie jest poprawną liczbą.';
$string['invalidnumerictolerance'] = 'Jedna z podanych tolerancji nie jest poprawną liczbą.';
$string['leftexample'] = 'po lewej, np. $ 1,00 lub £ 1,00';
$string['manynumerical'] = 'Jednostka jest opcjonalna. Jeśli wpisana, będzie użyta do do konwersji do Jednostki 1 przed ocenianiem.';
$string['multiplier'] = 'Mnożnik';
$string['nominal'] = 'Nominalna';
$string['noneditableunittext'] = 'NIE edytowalny tekst jednostki nr 1';
$string['nonvalidcharactersinnumber'] = 'Nieprawidłowe znaki w liczbie';
$string['notenoughanswers'] = 'Należy wpisać przynajmniej jedną odpowiedź';
$string['nounitdisplay'] = 'Jednostka nie jest oceniana';
$string['numericalmultiplier'] = 'Współczynnik';
$string['numericalmultiplier_help'] = 'Współczynnik, przez który odpowiedź liczbowa zostanie pomnożona. Podstawowa jednostka (Jednostkat 1) ma współczynnik domyślny 1. Tak więc, jeśli poprawna odpowiedź numeryczna to 5500 i ustawisz \'W\' jako \'Jednostkę 1\', poprawna odpowiedź to \'5500 W\'. Jeśli dodasz jednostkę \'kW\' ze współczynnikiem  0,001, to poprawną odpowiedzią będzie również \'5,5 kW\'. Należy zauważyć, że dopuszczalny błąd jest również mnożony, więc tolerancja \'100 W\' będzie wynosiła w nowych jednostkach \'0.1 kW\'.';
$string['oneunitshown'] = 'Jednostka 1 jest wyświetlana automatycznie przy polu odpowiedzi';
$string['onlynumerical'] = 'Jednostki nie są używane. Tylko wartość numeryczna jest liczona.';
$string['pleaseenterananswer'] = 'Proszę wprowadzić odpowiedź.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Proszę wprowadzić swoją odpowiedź bez użycia separatora tysięcy ({$a}).';
$string['pluginname'] = 'Numeryczne';
$string['pluginname_help'] = 'Z punktu widzenia studenta, pytanie numeryczne wygląda jak pytanie z krótką odpowiedzią*. Różnica jest taka, że tu odpowiedź może uwzględniać dopuszczalny błąd. W ten sposób odpowiedzi z pewnego przedziału liczbowego będą uznane za poprawne. Na przykład, gdy odpowiedzią dokładną jest 10, a przyjęty błąd 2, to dowolną liczbę z przedziału od 8 do 12 będzie zaakceptowana jako poprawna.';
$string['pluginnameadding'] = 'Dodawanie pytania numerycznego';
$string['pluginnameediting'] = 'Edycja pytania numerycznego';
$string['pluginnamesummary'] = 'Pozwala wprowadzić odpowiedź liczbową (również z jednostką), która jest oceniana poprzed porównanie jej z wzorcowymi odpowiedziami, uwzględniając tolerancję.';
$string['privacy:metadata'] = 'Wtyczka pytania typu numerycznego nie przechowuje żadnych prywatnych danych.';
$string['relative'] = 'Relatywna';
$string['rightexample'] = 'po prawej, np. 1,00 cm lub 1,00 km';
$string['selectunit'] = 'Wybierz jednostkę';
$string['selectunits'] = 'Wybierz jednostki';
$string['studentunitanswer'] = 'Jednostki wprowadza się poprzez';
$string['tolerancetype'] = 'Typ tolerancji';
$string['unit'] = 'Jednostka';
$string['unitappliedpenalty'] = 'Oceny są obniżone o {$a} za złą jednostkę.';
$string['unitchoice'] = 'przyciski opcji';
$string['unitedit'] = 'Edytuj jednostkę';
$string['unitgraded'] = 'Jednostkę należy podać i będzie ona oceniana.';
$string['unithandling'] = 'Ustawienia dotyczące jednostek';
$string['unitincorrect'] = 'Nie podano poprawnej jednostki';
$string['unitmandatory'] = 'Obligatoryjny';
$string['unitmandatory_help'] = '* Odpowiedź będzie oceniona w podanych jednostkach.
* Jeśli nie poda się jednostki, ocena będzie obniżona.';
$string['unitnotselected'] = 'Musisz wybrać jednostkę.';
$string['unitonerequired'] = 'Musisz wprowadzić przynajmniej jedną jednostkę.';
$string['unitoptional'] = 'Jednostka opcjonalna';
$string['unitoptional_help'] = '* Jeśli pole jednostki nie jest puste, odpowiedź będzie oceniana z uwzględnieniem tej jednostki.
* Jeżeli jednostka jest źle wpisana lub nieznana, odpowiedź zostanie uznana za niepoprawną.';
$string['unitpenalty'] = 'Obniżenie oceny za błąd w jednostce';
$string['unitpenalty_help'] = 'Ocena będzie obniżona gdy:
* w polu jednostek wpisano błędną jednostkę lub
* jednostkę wpisano w polu wartości';
$string['unitposition'] = 'Jednostkę stawia się';
$string['units'] = 'Jednostki';
$string['unitselect'] = 'listę rozwijalną';
$string['unitx'] = 'Jednostka {no}';
$string['xmustbenumeric'] = '{$a} musi być liczbą.';
$string['xmustnotbenumeric'] = '{$a} nie może być liczbą.';
$string['youmustenteramultiplierhere'] = 'Należy tu wpisać mnożnik';
