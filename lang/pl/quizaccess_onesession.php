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
 * Strings for component 'quizaccess_onesession', language 'pl', version '4.0'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Próbujesz uzyskać dostęp do testu z komputera, urządzenia lub przeglądarki innej niż ta, która została użyta do rozpoczęcia testu. Jeśli przypadkowo zamknąłeś przeglądarkę, skontaktuj się z nauczycielem.';
$string['eventattemptblocked'] = 'Próba uzyskania jednoczesnego dostępu do testu przez użytkownika za pomocą innego urządzenia została zablokowana';
$string['eventattemptunlocked'] = 'Użytkownik mógł kontynuować podejście do testu przy użyciu innego urządzenia';
$string['onesession'] = 'Blokuj jednoczesne połączenia';
$string['onesession:unlockattempt'] = 'Odblokuj podejście do quizu';
$string['onesession_help'] = 'Jeśli ta opcja jest włączona, użytkownicy mogą kontynuować podejście do testu tylko w tej samej sesji przeglądarki. Wszelkie próby otwarcia tego samego testu przy użyciu innego komputera, urządzenia lub przeglądarki zostaną zablokowane. Może to być przydatne w sytuacji, w której chcemy mieć pewność, że nikt nie pomaga użytkownikowi rozwiązać test, otwierając równocześnie to samo podejście do testu na innym komputerze.';
$string['pluginname'] = 'Reguła blokowania dostępu do quizu dla równoczesnych sesji';
$string['privacy:metadata'] = 'Wtyczka przechowuje skrót ciągu używanego do identyfikacji sesji na urządzeniu klienckim. Pomimo iż oryginalny ciąg zawiera adres IP klienta oraz nagłówek User-Agent wysłany przez przeglądarkę klienta, skrót nie pozwala na wyodrębnienie tych informacji. Skrót jest automatycznie usuwany natychmiast po zakończeniu sesji danego testu.';
$string['studentinfo'] = 'Uwaga! Nie możesz zmieniać urządzenia podczas rozwiązywania tego testu. Pamiętaj, że po rozpoczęciu testu wszelkie próby połączenia z tym testem za pomocą innych komputerów, urządzeń lub przeglądarek zostaną zablokowane. Nie zamykaj okna przeglądarki do końca podejścia, w przeciwnym razie nie będziesz mógł ukończyć tego testu.';
$string['unlockthisattempt'] = 'Pozwól użytkownikowi na kontynuowanie podejścia przy użyciu innego urządzenia';
$string['unlockthisattempt_header'] = 'Blokuj jednoczesne połączenia';
$string['whitelist'] = 'Sieci bez sprawdzania adresu IP';
$string['whitelist_desc'] = 'Ta opcja ma na celu zmniejszenie liczby fałszywych podejść, kiedy użytkownicy kontynuują podejście do testu za pomocą połączeń w sieciach komórkowych, w których adres IP można zmienić podczas rozwiązywania testu. W większości sytuacji nie jest to potrzebne. Możesz podać listę podsieci oddzielonych przecinkami (np. 88.0.0.0/8, 77.77.0.0/16). Jeśli adres IP znajduje się w takich sieciach, nie jest sprawdzany. Aby całkowicie wyłączyć sprawdzanie adresu IP, możesz ustawić wartość 0.0.0.0/0.';
