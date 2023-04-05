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
 * Strings for component 'portfolio_flickr', language 'pl', version '4.0'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Klucz API';
$string['contenttype'] = 'Typy zawartości';
$string['err_noapikey'] = 'Brak klucza API';
$string['err_noapikey_help'] = 'Nie ma skonfigurowanego klucza API dla tej wtyczki. Możesz otrzymać jeden z nich ze strony serwisu Flickr.';
$string['hidefrompublicsearches'] = 'Ukryj te obrazy przed publicznym wyszukiwaniem?';
$string['isfamily'] = 'Widoczne dla rodziny';
$string['isfriend'] = 'Widoczne dla znajomych';
$string['ispublic'] = 'Publiczne (każdy może je zobaczyć)';
$string['moderate'] = 'Umiarkowany';
$string['noauthtoken'] = 'Nie udało się pobrać tokenu uwierzytelnienia dla tej sesji';
$string['other'] = 'Sztuka, Ilustracje, CGI lub inne niefotograficzne obrazy';
$string['photo'] = 'Zdjęcia';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Ta wtyczka wysyła dane na zewnątrz do połączonego konta Flickr. Nie przechowuje danych lokalnie.';
$string['privacy:metadata:data'] = 'Dane osobowe przekazywane z podsystemu portfolio.';
$string['restricted'] = 'Ograniczony';
$string['safe'] = 'Bezpieczny';
$string['safetylevel'] = 'Poziom bezpieczeństwa';
$string['screenshot'] = 'Zrzuty ekranu';
$string['set'] = 'Ustawiony*';
$string['setupinfo'] = 'Instrukcje instalacji';
$string['setupinfodetails'] = 'Aby uzyskać klucz API i tzw. tajny ciąg, zaloguj się do serwisu Flickr i <a href="{$a->applyurl}">poproś o nowy klucz</a>. Gdy nowy klucz i tajny ciąg będą wygenerowane, kliknij na &quot;Edit auth flow for this  app&quot; na ich stronie. Wybierz typ aplikacji &quot;Web Application&quot;. Do pola \'Callback URL\' wpisz wartość: <br /> <code>{$a->callbackurl}</code> <br />
Opcjonalnie możesz podać opis i logo twojej witryny Moodle. Wartości te można wpisać później na <a href="{$a->keysurl}">stronie</a> z listą aplikacji Flickr.';
$string['sharedsecret'] = 'Tajny ciąg';
$string['title'] = 'Tytuł';
$string['uploadfailed'] = 'Nie udało się przesłać obrazu(ów) na flickr.com: {$a}';
