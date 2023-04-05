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
 * Strings for component 'local_staticpage', language 'pl', version '4.0'.
 *
 * @package     local_staticpage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Wymuś mod_rewrite w Apache';
$string['cleanhtml'] = 'Wyczyść kod HTML';
$string['cleanhtml_desc'] = '';
$string['cleanhtmlno'] = 'Nie, nie czyść kodu HTML';
$string['cleanhtmlyes'] = 'Tak, czyść kod HTML';
$string['documents'] = 'Dokumenty';
$string['documents_desc'] = 'Strony .html z kodem HTML stron statycznych. Zobacz szczegóły w pliku README.';
$string['documenttitlesource'] = 'Źródło tytułu dokumentu';
$string['documenttitlesourceh1'] = 'h1 - Pierwszy tag / znacznik w kodzie HTML. Zwykle znajduje się zaraz po otwarciu znacznika treści';
$string['documenttitlesourcehead'] = 'Tag tytułowy - tytuł strony. W kodzie HTML zwykle znajduje się w tagu <head></head>';
$string['forcelogin'] = 'Wymuś logowanie';
$string['forcelogin_desc'] = 'Statyczne strony mogą być wyświetlane zalogowanym lub niezalogowanym użytkownikom. Ta opcja może być ustawiona specjalnie dla stron statycznych lub uwzględniać globalne ustawienia Moodle w kwestii logowania. Szczegółowe informacje można znaleźć w README.';
$string['forceloginglobal'] = 'Respektuj globalne ustawienia $ CFG-> loguj';
$string['pagenotfound'] = 'Nie znaleziono strony';
$string['pluginname'] = 'Statyczne Strony';
$string['privacy:metadata'] = 'Rozszerzenie Static Page daje dodatkowe funkcjonalności administratorom Moodle, ale nie przechowuje danych osobowych';
$string['processfilters'] = 'Działanie filtrów';
$string['processfilters_desc'] = 'Ustaw, czy filtry Moodle (zwłaszcza filtr wielojęzyczny) powinny być użyte podczas wyświetlania strony statycznej. Zobacz szczegóły w pliku README.';
$string['processfiltersno'] = 'Nie, nie używaj filtrów';
$string['processfiltersyes'] = 'Tak, użyj filtrów';
$string['settingspagelist'] = 'Lista statycznych stron';
$string['settingspagelistentryfilename'] = 'Zostały znalezione następujące strony:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'Na podstawie nazwy dokumentu Moodle utworzył następującą nazwę strony:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'Strona statyczna powinna być dostępna pod czystym adresem, ale w rzeczywistości przeglądarka nie będzie w stanie jej pobrać i wyświetlić (być może coś jest nie tak z konfiguracją serwera WWW lub konfiguracją mod_rewrite - zobacz więcej szczegółów w pliku README):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'Strona statyczna powinna być dostępna pod standardowym adresem, ale w rzeczywistości przeglądarka nie będzie w stanie jej pobrać i wyświetlić (być może coś jest nie tak z konfiguracją serwera WWW - więcej szczegółów w pliku README):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'Statyczna strona jest dostępna pod standardowym linkiem - adresem URL:<br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Ta lista pokazuje wszystkie statyczne strony, które zostały przesłane do <a href="{$a}"> strefy statycznych stron</a> i adresy URL tych stron';
