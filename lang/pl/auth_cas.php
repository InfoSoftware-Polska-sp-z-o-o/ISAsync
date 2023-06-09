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
 * Strings for component 'auth_cas', language 'pl', version '4.0'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Wybór uwierzytelniania';
$string['auth_cas_auth_logo'] = 'Logo metody uwierzytelniania';
$string['auth_cas_auth_name'] = 'Nazwa metody uwierzytelniania';
$string['auth_cas_auth_user_create'] = 'Utwórz użytkowników zewnętrznie';
$string['auth_cas_baseuri'] = 'Adres URI serwer (nic jeżeli nie basuje na URI) Np, jeżeli CAS serwer odpowiada pod adresem: host.domaine.fr/CAS/ to<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Bazowy URI';
$string['auth_cas_casversion'] = 'Wersja protokołu CAS';
$string['auth_cas_certificate_check'] = 'Wybierz "tak", jeśli chcesz sprawdzić certyfikat serwera';
$string['auth_cas_certificate_check_key'] = 'Weryfikacja serwera';
$string['auth_cas_certificate_path'] = 'Ścieżka pliku łańcucha CA (format PEM) do sprawdzenia poprawności certyfikatu serwera';
$string['auth_cas_certificate_path_empty'] = 'Jeśli włączysz Weryfikację Serwera, musisz podać ścieżkę do certyfikatu';
$string['auth_cas_certificate_path_key'] = 'Ścieżka do certyfikatu';
$string['auth_cas_changepasswordurl'] = 'URL strony do zmiany hasła użytkownika.';
$string['auth_cas_create_user'] = 'Włącz to, jeżeli chcesz użytkowników uwierzytelnianych przez serwer CAS wstawić do bazy danych Moodle. Jeżeli nie włączysz to tylko użytkownicy istniejący w bazie Moodle będą mogli się logować.';
$string['auth_cas_create_user_key'] = 'Utwórz użytkownika';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Domyślnie';
$string['auth_cas_curl_ssl_version_key'] = 'Wersja cURL SSL';
$string['auth_cas_enabled'] = 'Włącz to, jeżeli chcesz wykorzystywać autoryzacje serwer CAS';
$string['auth_cas_hostname'] = 'Nazwa serwer CAS <br/> np:host.domain.fr';
$string['auth_cas_hostname_key'] = 'Nazwa hosta';
$string['auth_cas_invalidcaslogin'] = 'Niestety, Twój login jest błędny - autoryzacja nie powiodła się';
$string['auth_cas_language'] = 'Wybierz język dla stron uwierzytelnienia';
$string['auth_cas_language_key'] = 'Język';
$string['auth_cas_logincas'] = 'Dostęp przez połączenie bezpieczne';
$string['auth_cas_logoutcas'] = 'Włącz to na "tak" jeśli chcesz wylogować się z CAS (Central Authentication Service), kiedy rozłączasz się od Moodle.';
$string['auth_cas_logoutcas_key'] = 'Wyloguj się z CAS';
$string['auth_cas_multiauth'] = 'Wybierz &quot;tak&quot;, jeśli chcesz mieć złożone uwierzytelnianie (CAS + inne uwierzytelnianie)';
$string['auth_cas_multiauth_key'] = 'Uwierzytelnianie złożone';
$string['auth_cas_port'] = 'Na którym porcie nasłuchuje serwer CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Wybierz &quot;tak&quot;, jeśli chcesz użyć CAS w trybie proxy';
$string['auth_cas_proxycas_key'] = 'Tryb proxy';
$string['auth_cas_server_settings'] = 'Konfiguracja serwera CAS';
$string['auth_cas_text'] = 'Bezpieczne połączenie';
$string['auth_cas_use_cas'] = 'Użyj CAS';
$string['auth_cas_version'] = 'Wersja używanego protokołu CAS';
$string['auth_casdescription'] = 'Metoda używa serwera CAS (Central Authentication Service) do uwierzytelnienia użytkowników w środowisku Single Sign On (SSO). Możesz też użyć uwierzytelniania LDAP. Jeżeli podana nazwa użytkownika i hasło są zgodne z CAS, Moodle utworzy nowego użytkownika w swojej bazie danych, pobierając wymagane atrybuty użytkownika z LDAP. Przy następnych logowaniach tylko nazwa użytkownika i hasło będą sprawdzane.';
$string['auth_casnotinstalled'] = 'Nie można użyć uwierzytelniania CAS. PHP LDAP nie zainstalowane.';
$string['noldapserver'] = 'Brak serwera LDAP skonfigurowanego dla CAS! Synchronizacja wyłączona.';
$string['pluginname'] = 'Użyj serwera CAS (SSO)';
$string['privacy:metadata'] = 'Wtyczka autoryzacji CAS server (SSO) nie przechowuje żadnych danych osobowych.';
