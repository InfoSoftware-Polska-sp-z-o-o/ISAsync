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
 * Strings for component 'quiz_statistics', language 'pl', version '4.0'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Aktualna odpowiedź';
$string['allattempts'] = 'wszystkie podejścia';
$string['allattemptsavg'] = 'Średnia ocena wszystkich podejść';
$string['allattemptscount'] = 'Łączna liczba ukończonych ocenionych podejść';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" wariant {$a->variant}';
$string['analysisofresponses'] = 'Analiza odpowiedzi';
$string['analysisofresponsesfor'] = 'Analiza odpowiedzi dla {$a}';
$string['analysisvariant'] = '"{$a->name}" wariant {$a->variant}';
$string['attempts'] = 'Próby';
$string['attemptsall'] = 'wszystkie próby';
$string['attemptsfirst'] = 'pierwsze podejście';
$string['backtoquizreport'] = 'Powrót do strony głównej raportu statystyk.';
$string['calculatefrom'] = 'Oblicz statystyki od';
$string['calculatingallstats'] = 'Obliczanie statystyk dla testów, pytań i analizowanie danych odpowiedzi';
$string['cic'] = 'Współczynnik spójności wewnętrznej (dla {$a})';
$string['completestatsfilename'] = 'statusy ukończenia';
$string['count'] = 'Liczba';
$string['counttryno'] = 'Liczba prób {$a}';
$string['coursename'] = 'Nazwa kursu';
$string['detailedanalysis'] = 'Bardziej szczegółowa analiza odpowiedzi na to pytanie';
$string['detailedanalysisforvariant'] = 'Bardziej szczegółowa analiza odpowiedzi do wariantu {$a} dla tego pytania';
$string['discrimination_index'] = 'Indeks dyskryminacji';
$string['discriminative_efficiency'] = 'Efektywność dyskryminacji';
$string['downloadeverything'] = 'Pobierz pełny raport jako';
$string['duration'] = 'Otwarte dla';
$string['effective_weight'] = 'Waga efektywna';
$string['errordeleting'] = 'Błąd podczas usuwania {$a} starych rekordów.';
$string['errormedian'] = 'Błąd podczas pobierania mediany';
$string['errorpowerquestions'] = 'Błąd pobierania danych do obliczenia wariancji ocen pytania';
$string['errorpowers'] = 'Błąd podczas pobierania danych do obliczenia wariancji ocen testu';
$string['errorrandom'] = 'Błąd podczas pobierania danych elementów podrzędnych';
$string['errorratio'] = 'Stopa błędu (dla {$a})';
$string['errorstatisticsquestions'] = 'Błąd podczas pobierania danych do obliczenia wariancji ocen za pytanie';
$string['facility'] = 'Łatwość';
$string['firstattempts'] = 'pierwsze podejścia';
$string['firstattemptsavg'] = 'Średnia ocen z pierwszych podejść';
$string['firstattemptscount'] = 'Liczba pierwszych podejść';
$string['frequency'] = 'Częstość';
$string['highestattempts'] = 'najwyżej oceniona próba';
$string['highestattemptsavg'] = 'Średnia ocen najwyżej ocenionych prób';
$string['intended_weight'] = 'Planowana waga';
$string['kurtosis'] = 'Kurtoza dystrybucji wyniku (dla {$a})';
$string['lastattempts'] = 'ostatnia próba';
$string['lastattemptsavg'] = 'Średnia ocen z ostatnich prób';
$string['lastcalculated'] = 'Ostatnio obliczono przed {$a->lastcalculated}.
Od tamtego czasu. było {$a->count} podejść';
$string['maximumfacility'] = 'Maksimum łatwości';
$string['median'] = 'Mediana ocen (dla {$a})';
$string['medianfacility'] = 'Mediana łatwości';
$string['minimumfacility'] = 'Minimum łatwości';
$string['modelresponse'] = 'Odpowiedź modelu';
$string['nameforvariant'] = 'Wariant {$a->variant} of {$a->name}';
$string['negcovar'] = 'Ujemna kowariancja tej oceny z końcową oceną podejścia';
$string['negcovar_help'] = 'Ocena tego pytania dla tego zestawu podejść układa się w odwrotny sposób niż w całej populacji. Oznacza to, że ogólna ocena populacji jest  poniżej średniej, gdy w tym zestawie jest powyżej, i odwrotnie.

W tym przypadku nie można obliczyć wagi efektywnej. Obliczone wagi efektywne pozostałych pytań mają sens tylko przy założeniu, że maksymalna ocena wyróżnionych pytań o ujemnej kowariancji wynosi zero.

Zatem jeśli wyedytujesz test i ustawisz maksymalną ocenę równą zero dla pytań o ujemnej kowariancji, wtedy waga efektywna tych pytań wyniesie zero, a waga efektywna pozostałych pytań będzie taka, jak obliczona teraz.';
$string['nogradedattempts'] = 'Nie zarejestrowano żadnych podejść do tego testu, bądź też wszystkie podejścia zawierają pytania wymagające ręcznego ocenienia.';
$string['nostudentsingroup'] = 'W tej grupie nie ma jeszcze studentów';
$string['optiongrade'] = 'Częściowy wynik';
$string['partofquestion'] = 'Część pytania';
$string['pluginname'] = 'Statystyka';
$string['position'] = 'Pozycja';
$string['positions'] = 'Pozycje';
$string['questioninformation'] = 'Informacje o pytaniu';
$string['questionname'] = 'Nazwa pytania';
$string['questionnumber'] = 'Pyt. #';
$string['questionstatistics'] = 'Statystyki pytania';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Typ pytania';
$string['quizinformation'] = 'Informacja o teście';
$string['quizname'] = 'Nazwa testu';
$string['quizstructureanalysis'] = 'Analiza struktury testu';
$string['random_guess_score'] = 'Wynik dla odpowiedzi losowej (statystyczny)';
$string['rangeofvalues'] = 'Zakres statystyk dla tych pytań';
$string['recalculatenow'] = 'Przelicz teraz';
$string['reportsettings'] = 'Ustawienia obliczeń statystyk';
$string['response'] = 'Odpowiedź';
$string['skewness'] = 'Skośność dystrybucji wyniku (dla {$a})';
$string['slotstructureanalysis'] = 'Analiza strukturalna pytania numer {$a}';
$string['standarddeviation'] = 'Odchylenie standardowe (dla {$a})';
$string['standarddeviationq'] = 'Odchylenie standardowe';
$string['standarderror'] = 'Błąd standardowy (do {$a})';
$string['statistics'] = 'Statystyki';
$string['statistics:view'] = 'Zobacz raport statystyk';
$string['statisticsreport'] = 'Raport statystyk';
$string['statisticsreportgraph'] = 'Statystyki pytań';
$string['statsfor'] = 'Statystyki testu (dla {$a})';
$string['variant'] = 'Wariant';
$string['viewanalysis'] = 'Zobacz szczegóły';
$string['whichtries'] = 'Analiza odpowiedzi dla';
