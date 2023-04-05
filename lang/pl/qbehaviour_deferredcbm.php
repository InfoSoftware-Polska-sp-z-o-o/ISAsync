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
 * Strings for component 'qbehaviour_deferredcbm', language 'pl', version '4.0'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Trafność';
$string['accuracyandbonus'] = 'Trafność + dodatek';
$string['assumingcertainty'] = 'Nie wybrano poziomu pewności. Zakładamy: {$a}.';
$string['averagecbmmark'] = 'Średnia ocena CBM';
$string['basemark'] = 'Ocena bazowa {$a}';
$string['breakdownbycertainty'] = 'W rozbiciu na stopnie pewności';
$string['cbmbonus'] = 'Dodatek CBM';
$string['cbmgradeexplanation'] = 'Dla CBM ocena jest wyświetlana powyżej w odniesieniu do maksimum dla wszystkich poprawnych dla C=1.';
$string['cbmgrades'] = 'Oceny CBM';
$string['cbmgrades_help'] = 'Korzystając z Oceniania Bazującego na Pewności (BCM) otrzymujesz ocenę 100% za każde pytanie z z odpowiedzią C=1 (niska pewność). Oceny mogą być tak wysokie aż do 300% jeśli każde pytanie jest poprawne dla C=3 (wysoka pewność). Błędne przekonanie (przekonanie o błędnej odpowiedzi) skutkuje niższą oceną niż udzielenie błędnej odpowiedzi To może nawet doprowadzić do ogólnych negatywnych ocen.

**Trafność** jest wyrażana w % ignorując pewność ale uwzględnia ona maksymalną wagę oceny dla każdego pytania.
Pomyślne odróżnienie bardziej lub mniej miarodajnych odpowiedzi daje lepszą oceną niż zaznaczenie tego samego poziomu pewności dla pytania.

Znajduje to odzwierciedlenie w **Bonusie CBM**. **Trafność** + **Bonus CBM** jest lepszą miarą wiedzy niż **Trafność**. Błędne przekonanie może prowadzić do ujemnej premii.';
$string['cbmmark'] = 'Ocena CBM {$a}';
$string['certainty'] = 'Pewność';
$string['certainty-1'] = 'Nie mam pojęcia';
$string['certainty1'] = 'Niezbyt (<67%)';
$string['certainty2'] = 'Średnio (>67%)';
$string['certainty3'] = 'Bardzo (>80%)';
$string['certainty_help'] = 'Ocenianie oparte na pewności wymaga, aby wskazać, jak pewny jesteś swojej odpowiedzi. Dostępne są następujące poziomy pewności:


Poziom pewności  | C=1 (Niepewny) | C=2 (Średnio pewny) | C=3 (Całkiem pewny)
------------------------ | ---------------------- | ------------------------------ | ------------------------------

Zaznacz jeśli:
poprawnie                                          |             1                   |                      2                      |                 3
niepoprawnie                                   |              0                   |                    -2                      |                -6
Prawdopodobnie poprawnie    |           <67%              |                67-80%               |             >80%

Najlepsze oceny są zdobyte przez wzrost niepewności. Na przykład, jeśli uważasz, że prawdopodobieństwo udzielenia złej odpowiedzi jest większe niż 1:3, powinieneś wybrać C=1, aby uniknąć ryzyka negatywnej oceny.';
$string['certaintyshort-1'] = 'Nie mam pojęcia';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Nie mam pojęcia';
$string['foransweredquestions'] = 'Wyniki tylko dla pytań z udzielonymi odpowiedziami {$a}';
$string['forentirequiz'] = 'Wyniki dla całego testu ({$a} pytań)';
$string['howcertainareyou'] = 'Poziom  pewności: {$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Liczba odpowiedzi: {$a->responses}. Trafność: {$a->fraction}. (Optymalny zakres {$a->idealrangelow} do {$a->idealrangehigh}). Byłaś/eś {$a->judgement} wykorzystując ten poziom pewności.';
$string['noquestions'] = 'Brak odpowiedzi';
$string['overconfident'] = 'zbyt pewny siebie';
$string['pluginname'] = 'Informacja zwrotna po zakończeniu podejścia z CBM';
$string['slightlyoverconfident'] = 'nieco zbyt pewny siebie';
$string['slightlyunderconfident'] = 'trochę niepewny';
$string['underconfident'] = 'niepewny';
$string['weightx'] = 'Waga {$a}';
