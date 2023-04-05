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
 * Strings for component 'portfolio_boxnet', language 'pl', version '4.0'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID klienta';
$string['existingfolder'] = 'Istniejący folder, w którym będą umieszczane pliki';
$string['folderclash'] = 'Folder, który chciałaś/eś utworzyć już istnieje!';
$string['foldercreatefailed'] = 'Nie udało się utworzyć folderu docelowego na Box';
$string['folderlistfailed'] = 'Nie udało się odzyskać listy folderów z Box';
$string['missinghttps'] = 'Wymagane HTTPS';
$string['missinghttps_help'] = 'Box będzie współpracować tylko z witryną obsługującą protokół HTTPS.';
$string['missingoauthkeys'] = 'Brak identyfikatora klienta i tajnego klucza';
$string['missingoauthkeys_help'] = 'Dla tej wtyczki nie skonfigurowano identyfikatora klienta ani tajnego klucza. Możesz je otrzymać na stronie dewelopera Box.';
$string['newfolder'] = 'Nowy folder, w którym będą umieszczane pliki';
$string['noauthtoken'] = 'Nie udało się pobrać tokenu uwierzytelnienia dla tej sesji';
$string['notarget'] = 'Musisz wybrać istniejący lub utworzyć nowy folder, aby móc przesłać do niego pliki';
$string['noticket'] = 'Nie udało się pobrać ticketu z Box, aby rozpocząć sesję uwierzytelniania';
$string['password'] = 'Twoje hasło Box (nie zostanie zapisane)';
$string['pluginname'] = 'Box';
$string['privacy:metadata'] = 'Ta wtyczka wysyła dane na zewnątrz do połączonego konta Box. Nie przechowuje danych lokalnie.';
$string['privacy:metadata:data'] = 'Dane osobowe przekazywane z podsystemu portfolio.';
$string['sendfailed'] = 'Nie udało się przesłać treści do Box: {$a}';
$string['setupinfo'] = 'Instrukcje instalacji';
$string['setupinfodetails'] = 'Aby uzyskać klucz API, zaloguj się do Box.net i wejdź na stronę <a href="{$a->servicesurl}">OpenBox development page</a> . W &quot;Developer Tools&quot;, wybierz &quot;Create new application\' (Utwórz nową aplikację)
Klucz API jest wyświetlany w sekcji &quot;Backend parameters\'  formularzu aplikacji. Na tym formularzu wpisz do pola &quot;Redirect URL\' kod: <br /> <code>{$a->callbackurl}</code> <br />
 Opcjonalnie możesz podać więcej informacji na temat twojej witryny Moodle. Wartości te można później edytować na stronie \'View my applications\'.';
$string['sharedfolder'] = 'Udostępniony folder';
$string['sharefile'] = 'Udostępnić ten plik?';
$string['sharefolder'] = 'Udostępnić ten folder?';
$string['targetfolder'] = 'Folder docelowy';
$string['tobecreated'] = 'Zostanie utworzony';
$string['username'] = 'Twoja nazwa użytkownika Box (nie będzie przechowywana)';
$string['warninghttps'] = 'Box wymaga, aby Twoja witryna korzystała z protokołu HTTPS, by portfolio mogło działać poprawie.';
