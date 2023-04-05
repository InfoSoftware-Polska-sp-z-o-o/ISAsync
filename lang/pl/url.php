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
 * Strings for component 'url', language 'pl', version '4.0'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Wybierz zmienną...';
$string['clicktoopen'] = 'Kliknij link {$a} aby otworzyć zasób.';
$string['configdisplayoptions'] = 'Wybierz wszystkie opcje, które powinny być dostępne, istniejące ustawienia nie są modyfikowane. Przytrzymaj klawisz Ctrl, aby zaznaczyć wiele pól.';
$string['configframesize'] = 'Kiedy strona internetowa lub przesłany plik jest wyświetlany w ramce, wartość ta jest wysokością (w pikselach) górnej ramki (która zawiera nawigację).';
$string['configrolesinparams'] = 'Włącz, jeśli chcesz uwzględnić lokalne nazwy ról na liście parametrów do wyboru.';
$string['configsecretphrase'] = 'Tajna fraza używana do utworzenia zaszyfrowanego kodu, który może być wysłany do niektórych serwerów jako parametr. Zaszyfrowany kod jest produkowany przez funkcję md5 z wartości aktualnego adresu IP użytkownika połączonego z tajną frazą, czyli kod = md5 (IP.secretphrase). Proszę pamiętać, że to nie jest niezawodne, ponieważ adres IP może ulec zmianie i jest często wspólny dla różnych komputerów.';
$string['contentheader'] = 'Zawartość';
$string['createurl'] = 'Utwórz adres URL';
$string['displayoptions'] = 'Dostępne opcje wyświetlania';
$string['displayselect'] = 'Wyświetl ';
$string['displayselect_help'] = 'Ustawienie to określa, w jaki sposób URL jest wyświetlany, wpływ na to ma również typ wskazywanego pliku i czy przeglądarka umożliwia osadzanie. Możliwe opcje:

* Automatycznie - najlepsza opcja wyświetlania dla danego typu pliku
* Osadzone - URL jest wyświetlany na stronie, poniżej paska nawigacji, wraz z opisem i blokami
* Otwórz - tylko URL będzie wyświetlony w oknie przeglądarki
* W oknie pop-up - plik URL zostanie wyświetlony w nowym oknie przeglądarki bez menu i paska adresu
* W ramce - plik URL jest wyświetlany w ramce poniżej paska nawigacji i opisu pliku
* Nowe okno - plik URL zostanie wyświetlony w nowym oknie przeglądarki z menu i paskiem adresu';
$string['displayselectexplain'] = 'Wybierz typ wyświetlania, niestety nie wszystkie rodzaje nadają się do wszystkich adresów URL.';
$string['externalurl'] = 'Zewnętrzny adres URL';
$string['framesize'] = 'Wysokość ramki';
$string['invalidstoredurl'] = 'Nie można wyświetlić tego zasobu, adres URL jest nieprawidłowy.';
$string['invalidurl'] = 'Wprowadzony adres URL jest nieprawidłowy';
$string['modulename'] = 'Adres URL';
$string['modulename_help'] = 'Adres URL umożliwia dodanie linku do strony WWW. Prowadzący może dodać link m.in. do strony głównej, ale również do dokumentów czy obrazów znajdujących się na stronie WWW.

Użytkownik ma możliwość korzystania z kilku sposobów wyświetlania adresu URL. Strona WWW może być wyświetlona np. w postaci osadzonej lub w wyskakującym oknie.

Adres URL może być dodany do każdego innego zasobu lub aktywności, wszędzie tam gdzie pojawia się edytor tekstu.';
$string['modulenameplural'] = 'Adresy URL';
$string['page-mod-url-x'] = 'Każda strona modułu URL';
$string['parameterinfo'] = '&amp;parametr=zmienna';
$string['parametersheader'] = 'Zmienne adresu URL';
$string['parametersheader_help'] = 'Niektóre zmienne wewnętrzne Moodle mogą być automatycznie dołączane do adresu URL. Wpisz swoją nazwę parametru w każdym polu tekstowym, a następnie wybierz odpowiednią zmienną.';
$string['pluginadministration'] = 'Adres URL modułu administracyjnego';
$string['pluginname'] = 'Adres URL';
$string['popupheight'] = 'Wysokość okna pop-up (w pikselach)';
$string['popupheightexplain'] = 'Określ domyślną wysokość wyskakującego okna (pop-up).';
$string['popupwidth'] = 'Szerokość okna pop-up (w pikselach)';
$string['popupwidthexplain'] = 'Określ domyślną szerokość wyskakującego okna (pop-up).';
$string['printintro'] = 'Wyświetl opis adresu URL';
$string['printintroexplain'] = 'Wyświetlać opis adresu URL poniżej treści? Niektóre typy mogą nie wyświetlać opisu adresu URL, pomimo włączenia.';
$string['privacy:metadata'] = 'Wtyczka Adres URL nie przechowuje żadnych danych osobowych.';
$string['rolesinparams'] = 'Uwzględnij nazwy ról w parametrach';
$string['search:activity'] = 'Adres URL';
$string['serverurl'] = 'Adres URL serwera';
$string['url:addinstance'] = 'Dodaj nowy zasób URL';
$string['url:view'] = 'Zobacz adres URL';
