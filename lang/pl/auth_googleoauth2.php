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
 * Strings for component 'auth_googleoauth2', language 'pl', version '4.0'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_facebookclientid'] = 'twój identyfikator/klucz "secret" aplikacji może być wygenerowany na  <a href="https://developers.facebook.com/apps/" target="_blank">stronie dewelopera Facebook</a>:
<br/>Dodaj nową aplikację > Strona > Wprowadź nazwę strony jako nazwę aplikacji > Utwórz nowy identyfikator aplikacji Facebooka > Wprowadź adres URL Strony - nie jest wymagane wprowadzenie adresy mobilnego > Na stronie potwierdzenia strony, zobacz link "Przeskocz do Kokpitu dewelopera" > w kokpicie aplikacji powinienes znaleźć identyfikator / klucz "secret" > Ustawienia > Zaawansowane > Wprowadź poprawny OAuth redirect URIs
<br/>Adres URL strony: {$a->siteurl}
<br/>Domena aplikacji: {$a->sitedomain}
<br/>Valid OAuth redirect URIs: {$a->callbackurl}';
$string['auth_googlesettings'] = 'Ustawienia';
$string['couldnotgetuseremail'] = 'Sieć społecznościowa nie dostarcza nam <b>e-maila</b>. Moodle wymaga prawidłowego adresu e-mail do poprawnego logowania: sprawdź preferencje użytkownika w sieci społecznościowej i włącz widoczność e-maili.';
$string['displaybuttons'] = 'Wyświetlić przyciski na stronie logowania ?';
$string['displaybuttonshelp'] = 'Wyświetl przyciski logo dostawcy w górnej części strony logowania.
Jeśli chcesz samodzielnie umieścić przyciski na swojej stronie logowania, możesz wyłączyć tę opcję i dodać następujący kod: {$a}';
$string['emailnotallowed'] = 'Twój adres e-mail jest uprawniony do logowania się na tej stronie.';
$string['faileduserdetails'] = 'Witryna nawiązała połączenie z wybranym dostawcą, ale nie udało się pobrać danych użytkownika.';
$string['horizontal'] = 'Ułożenie poziome';
$string['microsoft_failure'] = 'Nie otrzymano kodu autoryzacyjnego z serwerów Microsoft.';
$string['moreproviderlink'] = 'Zaloguj się za pomocą innej usługi.';
$string['noaccountyet'] = 'Nie masz jeszcze uprawnień do korzystania z serwisu. Skontaktuj się z administratorem i poproś go o aktywację konta.';
$string['othermoodle'] = 'Other Moodle auth';
$string['othersettings'] = 'Inne ustawienia';
$string['unknownfirstname'] = 'Nieznane imię';
$string['unknownlastname'] = 'Nieznane nazwisko';
$string['vertical'] = 'Ułożenie pionowe';
