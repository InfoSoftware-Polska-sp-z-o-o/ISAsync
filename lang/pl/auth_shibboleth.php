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
 * Strings for component 'auth_shibboleth', language 'pl', version '4.0'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'Nazwa metody uwierzytelniania';
$string['auth_shib_auth_method_description'] = 'Podaj nazwę metody uwierzytelniania Shibboleth, który jest znana twoim użytkownikom. Może to być nazwa federacji Shibboleth np. <tt>SWITCHaai Login</tt> lub <tt>InCommon Login</tt> lub podobne.';
$string['auth_shib_changepasswordurl'] = 'URL do zmiany hasła użytkownika';
$string['auth_shib_convert_data'] = 'Modyfikacja danych API';
$string['auth_shib_convert_data_description'] = 'Możesz używać tego API aby dalej modyfikować dane dostarczone przez Shibboleth. <a href="../auth/shibboleth/README.txt" target="_blank">Przeczytaj</a>  w którym są dalsze instrukcje';
$string['auth_shib_convert_data_warning'] = 'Ten plik nie istnieje albo serwer sieci nie może go odczytać';
$string['auth_shib_idp_list'] = 'Dostawcy tożsamości';
$string['auth_shib_idp_list_description'] = 'Podaj listę entityIDs dostawców tożsamości, których użytkownikowi będzia miał do wyboru na stronie logowania. <br /> W każdej linii musi być oddzielona przecinkami para:  EntityID dostawcy (zobacz plik metadanych Shibboleth) i Nazwa dostawcy jaka będzie wyświetlana na liście rozwijanej. <br /> Jako opcjonalny trzeci parametr można dodać lokalizację inicjatora sesji Shibboleth, który będzie użyty w przypadku instalacja Moodle jest częścią federacji.';
$string['auth_shib_instructions'] = 'Użyj aby dostać się przez Shibboleth, jeśli twoja instytucja go używa. Jeśli nie, użyj normalnego pokazanego tu loginu.';
$string['auth_shib_instructions_help'] = 'Tutaj należy zamieścić odpowiednie instrukcje dla użytkowników, tłumaczące Shibboleth. Zostaną one zamieszczone na stronie logowania w sekcji instrukcje. Instrukcja musi zawierać link do"<b>{$a}</b>", na który użytkownicy klikają, gdy chcą się zalogować';
$string['auth_shib_instructions_key'] = 'Instrukcje dotyczące logowania';
$string['auth_shib_integrated_wayf'] = 'Usługa WAYF Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Jeśli zaznaczysz tę opcję, Moodle będzie wykorzystywać własną usługę WAYF zamiast tej skonfigurowanej w Shibboleth. Moodle wyświetli listę rozwijaną na alternatywnej stronie logowania, gdzie użytkownik ma do wyboru dostawców tożsamości.';
$string['auth_shib_logout_return_url'] = 'URL powrotu po wylogowaniu';
$string['auth_shib_logout_return_url_description'] = 'Podaj adres URL, gdzie użytkownicy Shibboleth będą przekierowani po wylogowaniu. <br /> Jeśli pole jest puste, użytkownicy będą przekierowywani tam, gdzie  moodle ich przekieruje';
$string['auth_shib_logout_url'] = 'URL wylogowania z Shibboleth';
$string['auth_shib_logout_url_description'] = 'Podaj adres URL do obsługi wylogowania z Usługodawcy Shibboleth. To zwykle jest <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Jeśli chcesz używać zintegrowanej usługi WAYF, musisz podać rozdzieloną przecinkami listę entityIDs dostawców tożsamości, ich nazwy i ewentualnie inicjator sesji.';
$string['auth_shib_only'] = 'Tylko Shibboleth';
$string['auth_shib_only_description'] = 'Sprawdź tę opcję, jeśli należy wprowadzić potwierdzenie Shibboleth';
$string['auth_shib_username_description'] = 'Nazwa serwera sieci w  środowisku Shibboleth, który będzie używany jako nazwa Moodle';
$string['auth_shibboleth_errormsg'] = 'Proszę wybrać organizację, której jesteś członkiem!';
$string['auth_shibboleth_login'] = 'Login Shibboleth';
$string['auth_shibboleth_login_long'] = 'Zaloguj się do Moodle poprzez Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Logowanie manualne';
$string['auth_shibboleth_select_member'] = 'Jestem członkiem...';
$string['auth_shibboleth_select_organization'] = 'W przypadku uwierzytelniania za pomocą Shibboleth, proszę wybrać organizację z listy rozwijanej:';
$string['auth_shibbolethdescription'] = 'Używając tej metody można tworzyć i autoryzować użytkowników poprzez <a href="http://shibboleth.internet2.edu/" target="_blank">Shibboleth</a>. <br> W celu zapoznania się jak ustawić Twój Moodle za pomocą Shibboleth <a href="../auth/shibboleth/README.txt" target="_blank">czytaj tutaj</a>.';
$string['pluginname'] = 'Shibboleth';
$string['shib_invalid_account_error'] = 'Wydaje się, że masz uwierzytelnienie w Shibboleth, ale Moodle ma znajduje konta dla twojej nazwy username. Być może twoje konto nie istnieje lub zostało zawieszone.';
$string['shib_no_attributes_error'] = 'Wydaje się, że masz dostęp do Shibboleth, ale Moodle nie otrzymał żadnych danych użytkownika. Proszę sprawdzić, czy do właściciela serwera, na którym działa Moodle zostały dostarczone dane identyfikacji, albo poinformować administratora serwera.';
$string['shib_not_all_attributes_error'] = 'Moodle potrzebuje pewnych atrybutów Shibboleth, które w twoim wypadku nie istnieją. Te atrybuty to: {$a}<br /> Prosimy poinformować administratora serwera albo dostarczyciela tożsamości.';
$string['shib_not_set_up_error'] = 'Potwierdzenie Shibboleth nie zostało ustawione poprawnie, ponieważ nie ma na tej stronie zmiennych dla środowiska Shibboleth. Proszę <a href="README.txt">przeczytać</a>, gdzie są dalsze instrukcje albo skontaktować się z zarządzającym siecią tego Moodle.';
