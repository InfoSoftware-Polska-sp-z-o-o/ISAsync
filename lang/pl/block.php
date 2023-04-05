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
 * Strings for component 'block', language 'pl', version '4.0'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Dowolna strona odpowiadająca powyższej';
$string['appearsinsubcontexts'] = 'Pojawia się w kontekstach podrzędnych';
$string['assignrolesinblock'] = 'Przypisz role dla bloku: {$a}';
$string['blocksettings'] = 'Ustawienia bloku';
$string['bracketfirst'] = '{$a} (pierwszy)';
$string['bracketlast'] = '{$a} (ostatni)';
$string['configureblock'] = 'Konfiguruj blok: {$a}';
$string['contexts'] = 'Kontekst strony';
$string['contexts_help'] = 'Konteksty są szczególnymi rodzajami stron, na których ten blok może być wyświetlany w jego oryginalnej lokalizacji. Będziesz tutaj mieć różne opcje w zależności od pierwotnej i bieżącej lokalizacji bloku. Na przykład, można ograniczyć wyświetlanie bloku tak, aby pojawiał się tylko na stronach forum. Zrobisz to dodając blok do kursu (co powoduje wyświetlanie go na na wszystkich podstronach), a następnie wchodząc do forum i edytując ustawienia bloku, aby ograniczyć wyświetlanie wyłącznie do stron forum.';
$string['createdat'] = 'Pierwotne położenie bloku';
$string['createdat_help'] = 'Pierwotna lokalizacja, w której utworzono blok. Ustawienia bloku mogą powodować pojawianie sie bloku w innych lokalizacjach (kontekstach) wewnątrz lokalizacji pierwotnej. Np. blok utworzony na stronie kursu mógłby być wyświetlany w aktywnościach wewnątrz tego kursu. Blok utworzony na stronie głównej serwisu może być wyświetlony w dowolnym miejscu serwisu.';
$string['defaultregion'] = 'Domyślna lokalizacja';
$string['defaultregion_help'] = 'Tematy mogą definiować jeden bądź więcej nazwanych regionów,  w których wyświetlane są bloki.To ustawienie określa, w którym z nich chcesz, aby aby blok pojawiał się domyślnie. Region może być nadpisany na poszczególnych stronach, jeśli to jest wymagane.';
$string['defaultweight'] = 'Domyślna waga';
$string['defaultweight_help'] = 'Waga bloku z grubsza decyduje, w jakiej kolejności (od góry do dołu) bloki pojawiają się w wybranym regionie. Położenie końcowe zależy od wag bloków sąsiednich. Waga bloku może być zmieniona na konkretnych stronach.';
$string['deleteblock'] = 'Usuń blok: {$a}';
$string['deleteblockcheck'] = 'Czy jesteś pewien/a, że chcesz usunąć ten blok zatytułowany {$a}?';
$string['deleteblockinprogress'] = 'Blok {$a} jest obecnie usuwany z tej strony.';
$string['deleteblockwarning'] = '<p>Masz zamiar usunąć blok, który pojawia się w innym miejscu.</p><p>Oryginalna lokalizacja bloku: {$a->location}<br />Wyświetlane typy na stronie: {$a->pagetype}</p><p>Czy na pewno chcesz kontynuować?</p>';
$string['deletecheck'] = 'Czy usunąć blok {$a}?';
$string['deletecheck_modal'] = 'Usunąć blok?';
$string['hideblock'] = 'Ukryj blok: {$a}';
$string['hidepanel'] = 'Ukryj panel';
$string['moveblock'] = 'Przesuń blok: {$a}';
$string['moveblockafter'] = 'Przesuń blok po bloku {$a}';
$string['moveblockbefore'] = 'Przesuń blok przed blokiem {$a}';
$string['moveblockinregion'] = 'Przesuń blok do regionu {$a}';
$string['movingthisblockcancel'] = 'Przesunięcie bloku ({$a})';
$string['myblocks'] = 'Moje bloki';
$string['onthispage'] = 'Na tej stronie';
$string['pagetypes'] = 'Typy stron';
$string['pagetypewarning'] = 'Uprzednio wybrany typ strony nie jest już dostępny. Proszę wybrać najbardziej odpowiedni typ strony poniżej.';
$string['privacy:request:blockisdocked'] = 'Wskazuje, czy blok został zadokowany';
$string['privacy:request:blockishidden'] = 'Wskazuje, czy blok był ukryty/zwinięty';
$string['region'] = 'Lokalizacja';
$string['restrictpagetypes'] = 'Wyświetlaj na stronach następującego typu';
$string['showblock'] = 'Pokaż blok: {$a}';
$string['showoncontextandsubs'] = 'Wyświetl w \'{$a}\' i na wszystkich jego podstronach ';
$string['showoncontextonly'] = 'Wyświetl tylko w  \'{$a}\'';
$string['showonentiresite'] = 'Wyświetl w całej witrynie';
$string['showonfrontpageandsubs'] = 'Wyświetl na stronie głównej oraz na stronach dodanych do strony głównej';
$string['showonfrontpageonly'] = 'Wyświetl tylko na stronie głównej ';
$string['subpages'] = 'Wybierz strony';
$string['thisspecificpage'] = 'Ta specyficzna strona';
$string['visible'] = 'Widzialność';
$string['weight'] = 'Waga';
$string['wherethisblockappears'] = 'Umiejscowienie bloku';
