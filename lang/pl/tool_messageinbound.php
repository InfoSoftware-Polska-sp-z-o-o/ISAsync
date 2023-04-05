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
 * Strings for component 'tool_messageinbound', language 'pl', version '4.0'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nazwa klasy';
$string['component'] = 'Komponent';
$string['configmessageinboundhost'] = 'Adres serwera, na którym Moodle powinien sprawdzać pocztę. Aby określić inny niż domyślny port, użyj [server]:[port], przykładowo poczta.example.com:993. Jeśli port nie zostanie określony, zostanie użyty domyślny port dla typu serwera poczty.';
$string['description'] = 'Opis';
$string['domain'] = 'Domena e-maila';
$string['edit'] = 'Edytuj';
$string['editinghandler'] = 'Edycja {$a}';
$string['enabled'] = 'Włączone';
$string['fixedvalidateaddress'] = 'Potwierdź adres nadawcy';
$string['incomingmailconfiguration'] = 'Konfiguracja poczty przychodzącej';
$string['incomingmailserversettings'] = 'Ustawienia serwera poczty przychodzącej';
$string['incomingmailserversettings_desc'] = 'Moodle może łączyć się z odpowiednio skonfigurowanymi serwerami IMAP. W tym miejscu możesz określić ustawienia używane do łączenia się z serwerem IMAP.';
$string['invalid_recipient_handler'] = 'Jeśli odebrano prawidłową wiadomość, ale nie można uwierzytelnić nadawcy, wiadomość jest przechowywana na serwerze poczty e-mail, a z użytkownikiem zostanie nawiązany kontakt za pomocą adresu e-mail w jego profilu użytkownika. Użytkownik ma możliwość odpowiedzi w celu potwierdzenia autentyczności oryginalnej wiadomości.
Taki jest sposób obsługi odpowiedzi.
Nie jest możliwe wyłączenie weryfikacji nadawcy, ponieważ użytkownik może odpowiedzieć z nieprawidłowego adresu e-mail, jeśli jego konfiguracja klienta poczty elektronicznej jest nieprawidłowa.';
$string['invalid_recipient_handler_name'] = 'Obsługa niepoprawnych odbiorców';
$string['mailbox'] = 'Nazwa skrzynki pocztowej';
$string['mailboxconfiguration'] = 'Konfiguracja skrzynki pocztowej';
$string['mailsettings'] = 'Ustawienia poczty';
$string['message_handlers'] = 'Uchwyty wiadomości';
$string['messageinbound'] = 'Wiadomość przychodząca';
$string['messageinboundenabled'] = 'Włącz przetwarzanie poczty przychodzącej';
$string['messageinboundenabled_desc'] = 'Aby wiadomości były wysyłane z odpowiednimi informacjami, należy włączyć przetwarzanie poczty przychodzącej.';
$string['messageinboundgeneralconfiguration'] = 'Konfiguracja ogólna';
$string['messageinboundgeneralconfiguration_desc'] = 'Przetwarzanie wiadomości przychodzących pozwala na odbieranie i przetwarzanie wiadomości e-mail w Moodle. Są to zastosowania, takie jak wysyłanie odpowiedzi e-mailem na posty na forum lub dodawanie plików do prywatnych plików użytkownika.';
$string['messageinboundhost'] = 'Serwer poczty przychodzącej';
$string['messageinboundhostpass'] = 'Hasło';
$string['messageinboundhostpass_desc'] = 'To jest hasło logowania na Twoje konto e-mail.';
$string['messageinboundhostssl'] = 'Użyj SSL';
$string['messageinboundhostssl_desc'] = 'Niektóre serwery pocztowe obsługują dodatkowy poziom bezpieczeństwa poprzez szyfrowanie komunikacji między Moodle a Twoim serwerem. Zalecamy używanie tego szyfrowania SSL, jeśli Twój serwer je obsługuje.';
$string['messageinboundhosttype'] = 'Typ serwera';
$string['messageinboundhostuser'] = 'Nazwa użytkownika';
$string['messageinboundhostuser_desc'] = 'Jest to nazwa użytkownika podawana do logowania się na Twoje konto e-mail.';
$string['messageinboundmailboxconfiguration_desc'] = 'Gdy wiadomości są wysyłane, pasują do formatu adres+dane@example.com. Aby niezawodnie generować adresy z Moodle, podaj osobno adres, którego normalnie używasz przed znakiem @, oraz domenę po znaku @. Na przykład nazwa skrzynki pocztowej w przykładzie to „adres”, a domena poczty e-mail będzie miała postać „example.com”. W tym celu należy skorzystać z dedykowanego konta e-mail.';
$string['messageprocessingerror'] = 'Niedawno wysłałeś wiadomość e-mail "{$a->subject}", ale niestety nie udało się jej przetworzyć.

Poniżej przedstawiono szczegóły błędu.

{$a->błąd}';
$string['messageprocessingerrorhtml'] = '<p>Niedawno wysłałeś wiadomość e-mail "{$a->subject}", ale niestety nie udało się jej przetworzyć.</p>
<p>Szczegóły błędu są pokazane poniżej.</p>
<p>{$a->błąd}</p>';
$string['messageprocessingfailed'] = 'Nie można przetworzyć wiadomości e-mail "{$a->subject}". Błąd jest następujący: "{$a->wiadomość}".';
$string['messageprocessingfailedunknown'] = 'Nie można przetworzyć wiadomości e-mail "{$a->subject}". Skontaktuj się z administratorem, aby uzyskać więcej informacji.';
$string['messageprocessingsuccess'] = '{$a->plain}

Jeśli nie chcesz otrzymywać takich powiadomień w przyszłości, możesz edytować swoje osobiste preferencje wiadomości, otwierając {$a->messagepreferencesurl} w przeglądarce.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Jeśli nie chcesz otrzymywać takich powiadomień w przyszłości, możesz <a href="{$a->messagepreferencesurl}">edytować swoje osobiste preferencje wiadomości</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Wiadomość potwierdzająca otrzymanie wiadomości przychodzącej';
$string['messageprovider:messageprocessingerror'] = 'Ostrzeżenie o braku możliwości przetworzenia wiadomości przychodzącej';
$string['messageprovider:messageprocessingsuccess'] = 'Potwierdzenie, że wiadomość została pomyślnie przetworzona';
$string['name'] = 'Nazwa';
$string['noencryption'] = 'Wyłączone - bez szyfrowania';
$string['noexpiry'] = 'Bezterminowo';
$string['oneday'] = 'Jeden dzień';
$string['onehour'] = 'Jedna godzina';
$string['oneweek'] = 'Jeden tydzień';
$string['oneyear'] = 'Jeden rok';
$string['pluginname'] = 'Konfiguracja wiadomości przychodzących';
$string['privacy:metadata:messagelist:address'] = 'Adres, pod który e-mail został wysłany';
$string['privacy:metadata:messagelist:messageid'] = 'Identyfikator wiadomości';
$string['privacy:metadata:messagelist:timecreated'] = 'Czas utworzenia rekordu';
$string['replysubjectprefix'] = 'Odp:';
$string['requirevalidation'] = 'Potwierdzić adres nadawcy';
$string['ssl'] = 'SSL (Automatyczne wykrywanie wersji SSL)';
$string['sslv2'] = 'SSLv2 (wymuś SSL w wersji 2)';
$string['sslv3'] = 'SSLv3 (wymuś SSL w wersji 3)';
$string['taskcleanup'] = 'Porządkowanie przychodzących niezweryfikowanych wiadomości e-mail';
$string['validateaddress'] = 'Sprawdź poprawność adresu e-mail nadawcy';
