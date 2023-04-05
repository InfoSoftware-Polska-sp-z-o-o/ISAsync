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
 * Strings for component 'auth_email', language 'pl', version '4.0'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'Potwierdzenie e-mailem jest domyślną metodą uwierzytelniania. Użytkownik rejestruje się wybierając własną, nową nazwę użytkownika oraz hasło, a następnie wysyłane jest potwierdzenie na adres jego konta pocztowego. E-mail ten zawiera bezpieczny odnośnik do strony, na której użytkownik może potwierdzić zarejestrowanie swojego konta. Przy kolejnych logowaniach dokonywane jest tylko porównanie nazwy użytkownika i hasła z wartościami zapisanymi w bazie danych Moodle.';
$string['auth_emailnoemail'] = 'Nie udało się wysłać maila do ciebie.';
$string['auth_emailrecaptcha'] = 'Dodaje kontrolny element wideo/audio do strony samodzielnej rejestracji użytkowników przez e-mail. To chroni witryny przed spamerami i daje dobre wyniki. Odwiedź http://www.google.com/recaptcha by poznać więcej szczegółów.';
$string['auth_emailrecaptcha_key'] = 'Włącz element reCAPTCHA';
$string['auth_emailsettings'] = 'Ustawienia';
$string['pluginname'] = 'Uwierzytelnienie z wykorzystaniem poczty elektronicznej';
$string['privacy:metadata'] = 'Wtyczka samodzielnej rejestracji bazującej na e-mailu nie przechowuje żadnych danych osobowych.';
