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
 * Strings for component 'enrol_paypal', language 'pl', version '4.0'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Przypisz role';
$string['businessemail'] = 'Firmowy e-mail PayPal';
$string['businessemail_desc'] = 'Firmowy adres e-mail dla konta PayPal';
$string['cost'] = 'Koszt zapisu';
$string['costerror'] = 'Koszt zapisu nie jest liczbą';
$string['costorkey'] = 'Wybierz jedną z poniższych metod zapisu.';
$string['currency'] = 'Waluta';
$string['defaultrole'] = 'Domyślna rola';
$string['defaultrole_desc'] = 'Wskaż rolę, która powinna zostać przypisana użytkownikowi podczas zapisywania się przez PayPal';
$string['enrolenddate'] = 'Data końcowa';
$string['enrolenddate_help'] = 'Jeśli ustawiono, użytkownik może być zapisany tylko do tej daty.';
$string['enrolenddaterror'] = 'Data końca zapisów na kurs nie może być wcześniejsza niż data początku zapisów';
$string['enrolperiod'] = 'Czas trwania zapisów';
$string['enrolperiod_desc'] = 'Domyślna długość okresu uczestnictwa. Jeśli jest ustawiona na zero, czas uczestnictwa będzie nieograniczony.';
$string['enrolperiod_help'] = 'Długość okresu uczestnictwa, począwszy od momentu zapisania użytkownika na kurs. Jeśli wyłączone, czas uczestnictwa jest nieograniczony.';
$string['enrolstartdate'] = 'Data początkowa';
$string['enrolstartdate_help'] = 'Jeśli ustawiono, użytkownik może być zapisany tylko od tej daty.';
$string['errdisabled'] = 'Wtyczka rejestracji PayPal jest wyłączona i nie obsługuje powiadomień o płatnościach.';
$string['erripninvalid'] = 'Natychmiastowe powiadomienie o płatności nie zostało zweryfikowane przez PayPal.';
$string['errpaypalconnect'] = 'Nie można połączyć się z {$a->url} w celu weryfikacji natychmiastowego powiadomienia o płatności: {$a->result}';
$string['expiredaction'] = 'Czynność podejmowana po wygaśnięciu zapisu';
$string['expiredaction_help'] = 'Wybierz czynność, którą należy wykonać, gdy rejestracja użytkownika wygaśnie. Należy pamiętać, że niektóre dane i ustawienia użytkownika są usuwane z kursu przy wypisaniu się z niego.';
$string['mailadmins'] = 'Informuj administratora';
$string['mailstudents'] = 'Informuj studentów';
$string['mailteachers'] = 'Informuj nauczycieli';
$string['messageprovider:paypal_enrolment'] = 'Wiadomości nt zapisów przez PayPal';
$string['nocost'] = 'Nie ma opłat związanych z zapisaniem się na ten kurs!';
$string['paypal:config'] = 'Konfigurowanie wtyczek zapisu przez  PayPal';
$string['paypal:manage'] = 'Zarządzaj zapisanymi użytkownikami';
$string['paypal:unenrol'] = 'Wypisz użytkowników z kursu';
$string['paypal:unenrolself'] = 'Wypisz się z kursu';
$string['paypalaccepted'] = 'Płatności PayPal są akceptowane';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Moduł PayPal pozwala skonfigurować odpłatność za kursy. Jeżeli koszt kursu wynosi zero, studenci nie są proszeni o opłatę. Można tu ustawić domyślny koszt dla całej witryny lub koszt każdego kursu osobno. Koszt kursu ma priorytet nad kosztem dla serwisu.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informacje o transakcjach PayPal dla zapisów/rejestrcji PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Adres e-mail lub identyfikator konta PayPal odbiorcy płatności (czyli sprzedawcy).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Informacja wprowadzona przez kupującego w polu notatki dotyczącej płatności w witrynie PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Pełna nazwa kupującego.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Status płatności.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Powód oczekiwania na status płatności (jeśli taki jest).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Podstawowy adres e-mail odbiorcy płatności (czyli sprzedawcy).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Unikalny identyfikator konta PayPal odbiorcy płatności (tj. sprzedawcy).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Kwota podatku naliczona przy płatności.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Czas powiadomienia Moodle o płatności przez PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Identyfikator użytkownika, który wykupił uczestnictwo w kursie.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Wtyczka rejestracji PayPal przesyła dane użytkownika z Moodle do witryny PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adres użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Miasto użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Kraj użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Adres email użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Imię użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Nazwisko użytkownika kupującego kurs.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Pełna nazwa kupującego.';
$string['processexpirationstask'] = 'Powiadomienia o wygaśnięciu rejestracji w systemie PayPal';
$string['sendpaymentbutton'] = 'Wyślij płatności za pośrednictwem PayPal';
$string['status'] = 'Zezwól na zapisy poprzez PayPal';
$string['status_desc'] = 'Pozwól użytkownikom korzystać z systemu PayPal, aby zapisać się na kurs.';
$string['transactions'] = 'Transakcje PayPal';
$string['unenrolselfconfirm'] = 'Czy na pewno chcesz się wypisać z kursu "{$a}"?';
