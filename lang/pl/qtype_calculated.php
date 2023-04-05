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
 * Strings for component 'qtype_calculated', language 'pl', version '4.0'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Dodaj';
$string['addmoreanswerblanks'] = 'Dodaj kolejne pole odpowiedzi';
$string['addsets'] = 'Dodaj zestawy';
$string['answerdisplay'] = 'Wyświetlanie odpowiedzi';
$string['answerformula'] = 'Formuła odpowiedzi {$a}';
$string['answerhdr'] = 'Odpowiedź';
$string['answerstoleranceparam'] = 'Parametry tolerancji odpowiedzi';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Dowolna wartość';
$string['atleastoneanswer'] = 'Musisz wpisać przynajmniej jedną odpowiedź';
$string['atleastonerealdataset'] = 'Przynajmniej jeden zestaw próbek musi wystąpić w treści pytania';
$string['atleastonewildcard'] = 'Musi wystąpić przynajmniej jeden symbol w treści pytania lub formule odpowiedzi';
$string['calcdistribution'] = 'Rozkład';
$string['calclength'] = 'Miejsca dziesiętne';
$string['calcmax'] = 'Maksimum';
$string['calcmin'] = 'Minimum';
$string['choosedatasetproperties'] = 'Wybierz właściwości zestawu próbek';
$string['choosedatasetproperties_help'] = 'Zestaw próbek jest zbiorem wartości wstawianych w miejsce symbolu zmiennej. Można utworzyć prywatny zestaw dla danego pytania lub zestaw współdzielony, który można wykorzystać w innych pytaniach w tej kategorii.';
$string['correctanswerformula'] = 'Poprawna formuła odpowiedzi';
$string['correctanswershows'] = 'Liczba miejsc przy wyświetlaniu odpowiedzi';
$string['correctanswershowsformat'] = 'Format';
$string['correctfeedback'] = 'Dla poprawnej odpowiedzi';
$string['dataitemdefined'] = 'jest dostępna z {$a} zdefiniowanymi wartościami liczbowymi';
$string['datasetrole'] = 'Zmiennym <strong> {x ..} </ strong> zostaną przypisane wartości liczbowe z odpowiedniego zestawu próbek';
$string['decimals'] = 'z {$a}';
$string['deleteitem'] = 'Usuń';
$string['deletelastitem'] = 'Usuń ostatnią próbkę';
$string['distributionoption'] = 'Wybierz rozkład*';
$string['editdatasets'] = 'Edycja zestawu próbek';
$string['editdatasets_help'] = 'Wartości do zestawu próbek mogą być dodawanie poprzez wprowadzenie wartości w polu Symbol zmiennej* i naciśnięcie przycisku Dodaj. Aby automatycznie wygenerować 10 lub więcej wartości, wybierz liczbę danych z listy i kliknij Dodaj.
W równomiernym rozkładzie każda wartość z przedziału jest równie prawdopodobna, rozkład logarytmiczny oznacza, że wartości bliższe dolnej granicy są bardziej prawdopodobne.';
$string['existingcategory1'] = 'użyje istniejącego współdzielonego zestawu próbek';
$string['existingcategory2'] = 'jeden spośród plików już używanych przez inne pytania z tej kategorii';
$string['existingcategory3'] = 'jeden spośród linków już używanych przez inne pytania z tej kategorii';
$string['forceregeneration'] = 'wymuś generowanie';
$string['forceregenerationall'] = 'wymuś generowanie wartości wszystkich zmiennych*';
$string['forceregenerationshared'] = 'wymuś generowanie wartości zmiennych z wyjątkiem współdzielonych';
$string['functiontakesatleasttwo'] = 'Funkcja {$a} musi mieć co najmniej dwa argumenty';
$string['functiontakesnoargs'] = 'Funkcja {$a} nie zawiera żadnych argumentów';
$string['functiontakesonearg'] = 'Funkcja {$a} musi mieć dokładnie jeden argument';
$string['functiontakesoneortwoargs'] = 'Funkcja {$a} musi mieć jeden lub dwa argumenty';
$string['functiontakestwoargs'] = 'Funkcja {$a} musi mieć dokładnie dwa argumenty';
$string['generatevalue'] = 'Generuj nowe wartości z zakresu';
$string['getnextnow'] = 'Wygeneruj nową \'próbkę do dodania\'';
$string['hexanotallowed'] = 'Zestaw próbek <strong>{$a->name}</strong>, dana heksadecymalna {$a->value} jest niedozwolona';
$string['illegalformulasyntax'] = 'Niedozwolona składnia formuły zaczynająca się od \'{$a}\'';
$string['incorrectfeedback'] = 'Dla niepoprawnej odpowiedzi';
$string['itemno'] = 'Próbka {$a}';
$string['itemscount'] = 'Licznik próbek';
$string['itemtoadd'] = 'Próbka do dodania';
$string['keptcategory1'] = 'użyje tego samego współdzielonego zestawu próbek co poprzednio';
$string['keptcategory2'] = 'plik z tej samej kategorii wspólnych plików jak poprzednio';
$string['keptcategory3'] = 'link z tej samej kategorii wspólnych linków jak poprzednio';
$string['keptlocal1'] = 'użyje tego samego prywatnego zestawu próbek co poprzednio';
$string['keptlocal2'] = 'plik ze zbioru plików tego pytania jak poprzednio';
$string['keptlocal3'] = 'link ze zbioru linków tego pytania jak poprzednio';
$string['lengthoption'] = 'Wybierz opcję długości';
$string['loguniform'] = 'Log-jednorodny';
$string['loguniformbit'] = 'cyfr, z logarytmicznie jednorodnego rozkładu';
$string['makecopynextpage'] = 'Następna strona (nowe pytanie)';
$string['mandatoryhdr'] = 'Obowiązkowe wyrażenia zastępcze (występujące w odpowiedziach)';
$string['max'] = 'Maks';
$string['min'] = 'Min';
$string['minmax'] = 'Zakres wartości';
$string['missingformula'] = 'Brakuje wzoru';
$string['missingname'] = 'Brakuje nazwy pytania';
$string['missingquestiontext'] = 'Brakuje treści pytania';
$string['mustenteraformulaorstar'] = 'Należy tu wpisać wzór lub \'*\'';
$string['newcategory1'] = 'użyje nowego współdzielonego zestawu próbek';
$string['newcategory2'] = 'plik z tego samego zbioru plików, jakie mogą być użyte w innych pytaniach z tej kategorii';
$string['newcategory3'] = 'link z tego samego zbioru linków, jakie mogą być użyte w innych pytaniach z tej kategorii';
$string['newlocal1'] = 'użyje nowego prywatnego zestawu próbek';
$string['newlocal2'] = 'plik z nowego zbioru plików tylko dla  tego pytania';
$string['newlocal3'] = 'link z nowego zbioru linków tylko dla  tego pytania';
$string['newsetwildcardvalues'] = 'nowych próbek do zestawu wartości zmiennych';
$string['nextitemtoadd'] = 'Następna \'próbka do dodania\'';
$string['nextpage'] = 'Następna strona';
$string['nocoherencequestionsdatyasetcategory'] = 'Dla pytania o id {$a->qid} id kategoria {$a->qcat} nie jest identyczna z kategorią  {$a->sharedcat} współdzielonej zmiennej {$a->name}. Wyedytuj pytanie.';
$string['nocommaallowed'] = 'Przecinek nie może być używany. Użyj kropki dziesiętnej: 0.013 lub 1.3e-2';
$string['nodataset'] = 'prawdopodobnie brak zmiennej w wyrażeniu';
$string['nosharedwildcard'] = 'Brak wyrażeń zastępczych w tej kategorii';
$string['notvalidnumber'] = 'Wartość zmiennej  nie jest prawidłową liczbą';
$string['oneanswertrueansweroutsidelimits'] = 'Co najmniej jedna poprawna odpowiedź poza przedziałem rzeczywistych wartości*. <br /> Zmodyfikuj ustawienia tolerancji (ustawienia zaawansowane)';
$string['param'] = 'Parametr {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Dla odpowiedzi częściowo poprawnej';
$string['pluginname'] = 'Obliczeniowe';
$string['pluginname_help'] = 'Pytania obliczeniowe umożliwiają użycie symboli zmiennych w nawiasach klamrowych w treści pytania. Symbole zmiennych są zastępowane konkretnymi wartościami liczbowymi, gdy test jest rozwiązywany.
 Na przykład, na pytanie "Jaki jest obszar prostokąta o długości {l} i szerokość {w}?"  poprawną odpowiedź wyznaczałąby formuła  "{l}*{w}" (gdzie * oznacza mnożenie).';
$string['pluginnameadding'] = 'Dodawanie pytania obliczeniowego';
$string['pluginnameediting'] = 'Edycja pytania obliczeniowego';
$string['pluginnamesummary'] = 'Pytania obliczeniowe są jak pytaniach numeryczne, przy czym wartości zmiennych są każdorazowo wybierane losowo z zestawów próbek.';
$string['possiblehdr'] = 'Możliwe, że symbol zmiennej
występuje tylko w treści pytania';
$string['privacy:metadata'] = 'Wtyczka pytania obliczeniowego nie przechowuje żadnych prywatnych danych.';
$string['questiondatasets'] = 'Zestaw próbek';
$string['questiondatasets_help'] = 'Zestaw próbek dla zmiennych, które mogą być użyte w pytaniach';
$string['questionstoredname'] = 'Zapisana nazwa pytania';
$string['replacewithrandom'] = 'Zastąp wartością losową';
$string['reuseifpossible'] = 'użyj poprzednich wartości zmiennych jeśli to możliwe';
$string['setno'] = 'Próbka {$a}. tego zestawu';
$string['setwildcardvalues'] = 'zestawów próbek z ustalonymi wartościami zmiennych';
$string['sharedwildcard'] = 'Współdzielona zmienna <strong>{$a}</strong>';
$string['sharedwildcardname'] = 'Współdzielona zmienna';
$string['sharedwildcards'] = 'Współdzielona zmienna';
$string['showitems'] = 'Wyświetl ';
$string['significantfigures'] = 'z {$a}';
$string['significantfiguresformat'] = 'cyfry znaczące';
$string['synchronize'] = 'Synchronizuj dane ze współdzielonym zestawem próbek z innymi pytaniami w teście.';
$string['synchronizeno'] = 'Nie synchronizuj';
$string['synchronizeyes'] = 'Synchronizuj';
$string['synchronizeyesdisplay'] = 'Synchronizuj i wyświetl nazwę współdzielonego zestawu próbek jako prefiks nazwy pytania';
$string['tolerance'] = 'Tolerancja &plusmn;';
$string['tolerancetype'] = 'Typ';
$string['trueanswerinsidelimits'] = 'Poprawna odpowiedź: {$a->correct} znajdująca się wewnątrz  granic prawdziwych wartości {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">BŁĄD Poprawna odpowiedź: {$a->correct} znajduje się poza granicami prawdziwych wartości {$a->true}</span>';
$string['uniform'] = 'Jednorodny';
$string['uniformbit'] = 'cyfr dziesiętnych, z jednorodnego rozkładu';
$string['unsupportedformulafunction'] = 'Funkcja {$a} jest niedostępna';
$string['updatecategory'] = 'Aktualizuj kategorię';
$string['updatedatasetparam'] = 'Aktualizuj parametry zestawu próbek';
$string['updatetolerancesparam'] = 'Aktualizuj parametry tolerancji odpowiedzi';
$string['updatewildcardvalues'] = 'Aktualizuj wartości zmiennych';
$string['useadvance'] = 'Użyj klawisza, aby zobaczyć błędy';
$string['usedinquestion'] = 'Użyty w pytaniu';
$string['wildcard'] = 'Zmienna {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Parametry zmiennych wykorzystywane do generowania wartości';
$string['wildcardrole'] = 'Symbole zmiennych <strong>{x ..}</strong> są zastępowane przez wygenerowane wartości liczbowe.';
$string['wildcards'] = 'Symbole zmiennych {a}...{z}';
$string['wildcardvalues'] = 'Wartości zmiennych';
$string['wildcardvaluesgenerated'] = 'Wygenerowane wartości zmiennych';
$string['youmustaddatleastoneitem'] = 'Musisz dodać co najmniej jeden zestaw próbek zanim zapiszesz to pytanie.';
$string['youmustaddatleastonevalue'] = 'Należy dodać co najmniej jeden zestaw wartości zmiennych przed zapisaniem tego pytania.';
$string['zerosignificantfiguresnotallowed'] = 'Prawidłowa odpowiedź nie musi mieć jakieś cyfry znaczące!';
