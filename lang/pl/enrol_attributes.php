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
 * Strings for component 'enrol_attributes', language 'pl', version '4.0'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax-error'] = 'Wystąpił błąd';
$string['ajax-okforced'] = 'OK, zapisano {$a} użytkownik/-ów';
$string['ajax-okpurged'] = 'OK, zapisani użytkownicy zostali wypisani';
$string['attributes:config'] = 'Skonfiguruj instancje wtyczki';
$string['attributes:manage'] = 'Zarządzaj zapisanymi użytkownikami';
$string['attributes:unenrol'] = 'Wypisz użytkowników z kursu';
$string['attributes:unenrolself'] = 'Wypisz siebie z kursu';
$string['attrsyntax'] = 'Reguły pól profilu użytkownika';
$string['attrsyntax_help'] = '<p>Te reguły mogą wykorzystywać jedynie Inne pola z profilu użytkownika.</p>';
$string['confirmforce'] = 'To (ponownie) zapisze wszystkich użytkowników zgodnych z tą regułą.';
$string['confirmpurge'] = 'To wypisze wszystkich użytkowników zgodnych z tą regułą.';
$string['defaultrole'] = 'Domyślna rola';
$string['defaultrole_desc'] = 'Domyślna rola używana w tej wtyczce do zapisów (każda instancja pluginu może to nadpisać)';
$string['force'] = 'Wymuś zapisy';
$string['mappings'] = 'mapowania Shibboleth';
$string['mappings_desc'] = 'Podczas korzystania z uwierzytelnienia Shibboleth, ta wtyczka może automatycznie aktualizować profil użytkownika przy każdym logowaniu. <br><br> Na przykład, jeśli chcesz zaktualizować pole użytkownika <code> homeorganizationtype </ code> z atrybutem shibboleth < code>Shib-HomeOrganizationType </ code> (pod warunkiem, że zmienna dostępna jest dla serwera podczas logowania), można wpisać w jednym wierszu: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br> Można  wprowadzić taką liczbę wierszy, ile potrzeba.<br><br> Aby nie używać tej funkcji lub gdy nie korzystasz z uwierzytelnienia Shibboleth , pozostaw to pole puste.';
$string['pluginname'] = 'Zapisy przez pola w profilu użytkownika';
$string['profilefields'] = 'Pola profilowe do zastosowania w selektorze';
$string['profilefields_desc'] = 'Które pola z profilu użytkownika mogą być używane podczas konfigurowania zapisów w kursie?<br><br><b>Jeśli nie wybierzesz żadnej roli tutaj, to wtyczka nie będzie mogła poprawnie działać, a tym samym uniemożliwia jego stosowanie w kursach.</b><br> Funkcja poniżej mogą jednak być nadal używane w tym przypadku.';
$string['purge'] = 'Wyczyść zapisy';
$string['removewhenexpired'] = 'Wypisz po wygaśnięciu atrybutów';
$string['removewhenexpired_help'] = 'Wypisz użytkowników podczas logowania jeśli nie spełniają reguł zapisów.';
