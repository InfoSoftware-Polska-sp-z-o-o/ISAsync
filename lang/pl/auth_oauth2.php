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
 * Strings for component 'auth_oauth2', language 'pl', version '4.0'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Użytkownik z taką nazwą użytkownika już istnieje na tej stronie. Jeśli jest to twoje konto, zaloguj się, podając swoją nazwę użytkownika i hasło, a następnie dodaj je jako połączone logowanie na swojej stronie preferencji.';
$string['alreadylinked'] = 'To zewnętrzne konto jest już połączone z kontem na tej stronie';
$string['auth_oauth2description'] = 'Uwierzytelnianie oparte na standardzie OAuth 2';
$string['auth_oauth2settings'] = 'Ustawienia uwierzytelniania OAuth 2.';
$string['confirmaccountemail'] = 'Witaj {$a->fullname},
poproszono o otwarcie nowego konta na \'{$a->sitename}\' używając Twojego adresu e-mail.

Aby potwierdzić swoje nowe konto, użyj tego adresu:

{$a->link}

W większości programów pocztowych powinien się wyświetlić niebieski link. na który możesz kliknąć. Gdy to nie zadziała, wytnij link i wklej go do paska adresu u góry okna przeglądarki.

Jeśli potrzebujesz pomocy, skontaktuj się z administratorem strony,
{$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}: potwierdzenie konta';
$string['confirmationinvalid'] = 'Link potwierdzający jest nieprawidłowy lub wygasł. Rozpocznij proces logowania ponownie, aby wygenerować nowy e-mail z potwierdzeniem.';
$string['confirmationpending'] = 'To konto oczekuje na potwierdzenie przez e-mail.';
$string['confirmlinkedloginemail'] = 'Witaj {$a->fullname},
poproszono o utworzenia powiązania {$a->issuername} {$a->linkedemail} z Twoim kontem \'{$a->sitename}\' przy użyciu adresu e-mail.

Aby potwierdzić tę prośbę i połączyć te logowania, przejdź pod ten adres:

{$a->link}

W większości programów pocztowych powinien się wyświetlić niebieski link. na który możesz kliknąć. Gdy to nie zadziała, wytnij link i wklej go do paska adresu u góry okna przeglądarki.

Jeśli potrzebujesz pomocy, skontaktuj się z administratorem strony,
{$a->admin}';
$string['confirmlinkedloginemailsubject'] = '{$a}: potwierdzenie połączonego logowania';
$string['createaccountswarning'] = 'Ta wtyczka uwierzytelniania pozwala użytkownikom tworzyć konta w Twojej witrynie. Jeśli korzystasz z tej wtyczki, możesz chcieć włączyć ustawienie "authpreventaccountcreation".';
$string['createnewlinkedlogin'] = 'Powiąż nowe konto ({$a})';
$string['emailconfirmlink'] = 'Powiąż swoje konta';
$string['emailconfirmlinksent'] = '<p>Znaleziono istniejące konto z tym adresem e-mail, ale nie jest ono jeszcze powiązane.</p>
    <p>Konta muszą być połączone, zanim będzie można się zalogować.</p>
    <p>Wiadomość e-mail powinna zostać wysłana na Twój adres <b>{$a}</b>.</p>
    <p>Zawiera ona proste instrukcje powiązania kont.</p>
    <p>Jeśli masz jakiekolwiek trudności, skontaktuj się z administratorem witryny.</p>';
$string['emailpasswordchangeinfo'] = 'Drogi użytkowniku: {$a->firstname},
ktoś (prawdopodobnie Ty) na stronie <b>\'{$a->sitename}\'</b> zażądał wygenerowania nowego hasła dla Twojego konta.

Nie możesz zresetować swojego hasła, ponieważ do logowania używasz konta w innym serwisie.


Jeśli potrzebujesz pomocy, skontaktuj się z administratorem witryny
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Zmień informacje dotyczące hasła';
$string['info'] = 'Zewnętrzne konto';
$string['issuer'] = 'Usługa OAuth 2';
$string['issuernologin'] = 'Tego wystawcy nie można użyć do logowania';
$string['linkedlogins'] = 'Połączone logowania';
$string['linkedloginshelp'] = 'Pomoc z połączonymi logowaniami';
$string['loginerror_authenticationfailed'] = 'Proces uwierzytelniania nie powiódł się.';
$string['loginerror_cannotcreateaccounts'] = 'Nie można znaleźć konta z tym adresem e-mail.';
$string['loginerror_invaliddomain'] = 'Adres e-mail nie jest dozwolony na tej stronie.';
$string['loginerror_nouserinfo'] = 'Nie zwrócono żadnych informacji o użytkowniku. Usługa OAuth 2 może być nieprawidłowo skonfigurowana.';
$string['loginerror_userincomplete'] = 'Zwrócone informacje o użytkowniku nie zawierały nazwy użytkownika i adresu e-mail. Usługa OAuth 2 może być nieprawidłowo skonfigurowana.';
$string['noissuersavailable'] = 'Żadna ze skonfigurowanych usług OAuth2 nie pozwala na połączenie kont logowania';
$string['notenabled'] = 'Przepraszamy, wtyczka uwierzytelniania OAuth 2 nie jest włączona';
$string['notloggedindebug'] = 'Próba logowania nie powiodła się. Powód: {$a}';
$string['notwhileloggedinas'] = 'Nie można zarządzać połączonymi logowaniami, gdy jesteś zalogowany jako inny użytkownik.';
$string['oauth2:managelinkedlogins'] = 'Zarządzaj własnymi połączonymi kontami logowania';
$string['plugindescription'] = 'Ta wtyczka uwierzytelniania wyświetla listę skonfigurowanych dostawców tożsamości na stronie logowania. Wybór dostawcy tożsamości umożliwia użytkownikom logowanie przy użyciu poświadczeń od dostawcy OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Uwierzytelnianie OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Ta wtyczka jest podłączona do podsystemu uwierzytelniania.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Identyfikator użytkownika, który zmodyfikował to konto.';
$string['privacy:metadata:auth_oauth2:username'] = 'Zewnętrzna nazwa użytkownika przypisana do tego konta.';
