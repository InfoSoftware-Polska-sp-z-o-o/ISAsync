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
 * Strings for component 'message_airnotifier', language 'pl', version '4.0'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Zarządzaj urządzeniami';
$string['airnotifieraccesskey'] = 'Klucz dostępu do Airnotifier';
$string['airnotifierappname'] = 'Nazwa aplikacji Airnotifier';
$string['airnotifierfielderror'] = 'Usuń wszelkie spacje lub niepotrzebne znaki z następującego pola: {$a}';
$string['airnotifiermobileappname'] = 'Nazwa aplikacji mobilnej';
$string['airnotifierport'] = 'Port Airnotifier';
$string['airnotifierurl'] = 'Adres URL Airnotifier';
$string['checkconfiguration'] = 'Sprawdź i przetestuj konfigurację powiadomień push';
$string['configairnotifierappname'] = 'Identyfikator nazwy aplikacji w Airnotifier.';
$string['configairnotifiermobileappname'] = 'Unikalny identyfikator aplikacji mobilnej (zwykle coś w rodzaju com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Port używany podczas łączenia się z serwerem Airnotifier.';
$string['configairnotifierurl'] = 'Adres URL serwera, z którym należy się połączyć w celu wysyłania powiadomień push.';
$string['configured'] = 'Skonfigurowany';
$string['deletecheckdevicename'] = 'Usuń swoje urządzenie: {$a->name}';
$string['deletedevice'] = 'Usuń urządzenie. Pamiętaj, że aplikacja może ponownie zarejestrować urządzenie. Jeśli urządzenie nadal się pojawia, wyłącz je.';
$string['devicetoken'] = 'Token urządzenia';
$string['enableprocessor'] = 'Włącz mobilne powiadomienia';
$string['keyretrievedsuccessfully'] = 'Klucz dostępu został pomyślnie pobrany. Aby uzyskać dostęp do statystyk użytkowania aplikacji Moodle, utwórz konto w <a href="https://apps.moodle.com">Portalu Moodle App</a>.';
$string['messageprovidersempty'] = 'W domyślnych preferencjach powiadomień nie ma włączonych powiadomień mobilnych.';
$string['messageproviderslow'] = 'Tylko niektóre powiadomienia mobilne są domyślnie włączone w ustawieniach powiadomień.';
$string['nodevices'] = 'Brak zarejestrowanych urządzeń. Urządzenia pojawią się automatycznie po zainstalowaniu aplikacji Moodle i dodaniu tej witryny.';
$string['noemailevernotset'] = '$CFG->noemailever wyłączone';
$string['noemaileverset'] = '$CFG->noemailever jest włączone w config.php. Musisz ustawić to ustawienie na false lub je usunąć.';
$string['nopermissiontomanagedevices'] = 'Nie masz uprawnień do zarządzania urządzeniami.';
$string['notconfigured'] = 'Serwer Airnotifier nie został skonfigurowany, więc nie można wysyłać powiadomień push.';
$string['notificationsserverconfiguration'] = 'Konfiguracja serwera powiadomień (Airnotifier)';
$string['pluginname'] = 'Telefon komórkowy';
$string['privacy:enableddescription'] = 'Jeśli to urządzenie jest aktywowane w Airnotifier.';
$string['privacy:metadata:date'] = 'Data wysłania wiadomości.';
$string['privacy:metadata:enabled'] = 'Czy urządzenie Airnotifier jest aktywowane.';
$string['privacy:metadata:externalpurpose'] = 'Te informacje są przesyłane do zewnętrznej strony, aby ostatecznie dostarczyć je do urządzenia mobilnego użytkownika.';
$string['privacy:metadata:fullmessage'] = 'Pełna wiadomość.';
$string['privacy:metadata:notification'] = 'Jeśli ta wiadomość jest powiadomieniem.';
$string['privacy:metadata:smallmessage'] = 'Sekcja wiadomości.';
$string['privacy:metadata:subject'] = 'Wiersz tematu wiadomości.';
$string['privacy:metadata:userdeviceid'] = 'Identyfikator połączenia z urządzeniem mobilnym użytkownika';
$string['privacy:metadata:userfromfullname'] = 'Pełna nazwa użytkownika, który wysłał wiadomość.';
$string['privacy:metadata:userfromid'] = 'Identyfikator ID autora wiadomości.';
$string['privacy:metadata:userid'] = 'Identyfikator użytkownika, który wysłał wiadomość.';
$string['privacy:metadata:username'] = 'Nazwa użytkownika';
$string['privacy:metadata:usersubsystem'] = 'Ta wtyczka jest połączona z podsystemem użytkowników.';
$string['requestaccesskey'] = 'Wymagany klucz dostępu';
$string['sendtest'] = 'Wyślij testowe powiadomienie push na moje urządzenia';
$string['serverconnectivityerror'] = 'Ta witryna nie może połączyć się z serwerem powiadomień {$a}';
$string['showhide'] = 'Włącz/wyłącz urządzenie.';
$string['unknowndevice'] = 'Nieznane urządzenie';
$string['userdevices'] = 'Urządzenia użytkownika';
