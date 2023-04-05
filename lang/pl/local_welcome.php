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
 * Strings for component 'local_welcome', language 'pl', version '4.0'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Wtyczki uwierzytelniające';
$string['auth_plugins_desc'] = 'Wybierz wtyczki uwierzytelniające, dla których chcesz wysłać wiadomość powitalną.';
$string['configure'] = 'Skonfiguruj wtyczkę';
$string['customprofilefields'] = 'Pola profilu użytkownika';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>New site user [[fullname]]</h3>
    Utworzono nowe konto z następującymi szczegółami:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Username: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Nowy użytkownik zarejestrował się na [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Welcome [[fullname]]</h3>
    Twoje konto Moodle zostało utworzone na stronie [[sitelink]] z następującymi danymi:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Username: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Jeśli kiedykolwiek zgubisz hasło, zresetowanie jest łatwe:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Witaj  [[fullname]] na stronie [[sitename]]';
$string['defaultprofilefields'] = 'Domyślne pola profilu';
$string['fieldname'] = 'Nazwa pola';
$string['globalhelp'] = 'Ta wtyczka do Moodle wysyła konfigurowalną wiadomość powitalną do nowych użytkowników.
<br><br>
Wtyczka korzysta z systemu zdarzeń w Moodle i zostanie uruchomiona, gdy utworzony jest nowy użytkownik, bez względu na to, czy było to konto utworzone ręcznie, czy zostało utworzone za pomocą samodzielnej rejestracji.
<br><br>
Tabele na tej stronie pokazują dostępne pola profilu, których można użyć w szablonie wiadomości na stronie konfiguracji tej wtyczki.
Wartości pokazane w tej tabeli są wartościami pól TWOJEGO profilu i zostaną zastąpione wartościami adresatów po wysłaniu powitalnej wiadomości e-mail.';
$string['message_moderator'] = 'Wiadomość dla moderatora';
$string['message_moderator_desc'] = 'Wiadomość wysłana do moderatorów';
$string['message_moderator_enabled'] = 'Włącz wiadomości do moderatora';
$string['message_moderator_enabled_desc'] = 'To pole wyboru umożliwia wysyłanie powiadomień do moderatorów.';
$string['message_moderator_subject'] = 'Temat wiadomości dla moderatora';
$string['message_moderator_subject_desc'] = 'To będzie temat wiadomości e-mail wysłanej do moderatora. Użyj [[fullname]] jako tagu, zostanie on zastąpiony przez imię i nazwisko użytkownika.';
$string['message_user'] = 'Wiadomość dla użytkownika';
$string['message_user_desc'] = 'Wiadomość wysłana do nowych użytkowników';
$string['message_user_enabled'] = 'Włącz wiadomości dla użytkownika';
$string['message_user_enabled_desc'] = 'To pole wyboru umożliwia wysyłanie wiadomości powitalnych do nowych użytkowników
<br><br>
Odwiedź <a href="{$a}">tę stronę, aby zobaczyć listę dostępnych pól</a>';
$string['message_user_subject'] = 'Temat wiadomości dla użytkownika';
$string['message_user_subject_desc'] = 'To jest temat wiadomości e-mail wysłanej do użytkownika. Użyj [[fullname]] jako tagu, zostanie on zastąpiony przez dane użytkownika tj. imię i nazwisko.';
$string['moderator_email'] = 'E-mail moderatora';
$string['moderator_email_desc'] = 'Powiadomienia o nowych użytkownikach są wysyłane na ten adres e-mail';
$string['pluginname'] = 'Witamy w Moodle';
$string['resetpass'] = 'Tu zresetuj swoje hasło';
$string['sender_email'] = 'Adres e-mail nadawcy';
$string['sender_email_desc'] = 'Gdy nowi użytkownicy logują się, ten adres e-mail jest używany do wysyłania wiadomości z powiadomieniem; użytkownicy będą mogli zobaczyć ten adres e-mail.';
$string['sender_firstname'] = 'Imię osoby wysyłającej wiadomość powitalną';
$string['sender_firstname_desc'] = 'Imię używane podczas wysyłania poczty do użytkowników.';
$string['sender_lastname'] = 'Nazwisko moderatora';
$string['sender_lastname_desc'] = 'Nazwisko używane podczas wysyłania poczty do użytkowników.';
$string['type'] = 'Pisz';
$string['welcomefields'] = 'Dodatkowe pola szablonów';
$string['yourvalue'] = 'Twoja wartość';
