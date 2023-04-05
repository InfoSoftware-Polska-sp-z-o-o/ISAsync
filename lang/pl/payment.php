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
 * Strings for component 'payment', language 'pl', version '4.0'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Zarchiwizowane';
$string['accountconfignote'] = 'Bramki płatności dla tego konta zostaną skonfigurowane osobno';
$string['accountdeleteconfirm'] = 'Jeżeli to konto posiadało wcześniejsze płatności, zostanie ono zarchiwizowane, w przeciwnym razie jego dane konfiguracyjne zostaną trwale usunięte. Jesteś pewien, że chcesz kontynuować?';
$string['accountidnumber'] = 'Numer ID';
$string['accountidnumber_help'] = 'Numer ID jest używany tylko podczas kojarzenia konta z systemami zewnętrznymi i nie jest wyświetlany nigdzie na stronie. Jeśli konto ma oficjalną nazwę kodową, można ją wpisać, w przeciwnym razie pole można pozostawić puste.';
$string['accountname'] = 'Nazwa konta';
$string['accountname_help'] = 'Jak to konto zostanie zidentyfikowane dla nauczycieli lub menedżerów, którzy konfigurują płatności (na przykład we wtyczce rejestracji na kurs).';
$string['accountnotavailable'] = 'Nie dostępne';
$string['createaccount'] = 'Utwórz konto płatnicze';
$string['deleteorarchive'] = 'Usuń lub zarchiwizuj';
$string['editpaymentaccount'] = 'Edytuj konto płatnicze';
$string['eventaccountcreated'] = 'Utworzono konto płatnicze';
$string['eventaccountdeleted'] = 'Konto płatnicze zostało usunięte';
$string['eventaccountupdated'] = 'Zaktualizowano konto płatnicze';
$string['feeincludesurcharge'] = '{$a->fee} (zawiera {$a->surcharge}% dopłaty za korzystanie z tego rodzaju płatności)';
$string['gatewaycannotbeenabled'] = 'Nie można włączyć bramki płatności, ponieważ konfiguracja jest niekompletna.';
$string['gatewaydisabled'] = 'Wyłączone';
$string['gatewayenabled'] = 'Włączone';
$string['gatewaynotfound'] = 'Nie znaleziono bramki';
$string['gotomanageplugins'] = 'Włącz i wyłącz bramki płatności oraz ustaw dopłaty za pośrednictwem {$a}.';
$string['gotopaymentaccounts'] = 'Możesz utworzyć wiele kont płatności za pomocą dowolnej z tych bramek na stronie {$a}';
$string['hidearchived'] = 'Ukryj zarchiwizowane';
$string['noaccountsavilable'] = 'Brak dostępnych rachunków płatniczych.';
$string['nocurrencysupported'] = 'Żadna płatność w żadnej walucie nie jest obsługiwana. Upewnij się, że co najmniej jedna bramka płatności jest włączona.';
$string['nogateway'] = 'Nie ma bramki płatności, z której można korzystać.';
$string['nogatewayselected'] = 'Najpierw musisz wybrać bramkę płatności.';
$string['paymentaccount'] = 'Konto płatności';
$string['paymentaccounts'] = 'Konta płatności';
$string['paymentaccountsexplained'] = 'Utwórz jedno lub wiele kont płatniczych dla tej witryny. Każde konto zawiera konfigurację dla dostępnych bramek płatności. Osoba, która konfiguruje płatności w serwisie (np. płatność za zapis na kurs) będzie mogła wybierać spośród dostępnych kont.';
$string['payments'] = 'Płatności';
$string['privacy:metadata:database:payments'] = 'Informacje o płatnościach.';
$string['privacy:metadata:database:payments:amount'] = 'Kwota do zapłaty.';
$string['privacy:metadata:database:payments:currency'] = 'Waluta płatności.';
$string['privacy:metadata:database:payments:gateway'] = 'Bramka płatności używana do płatności.';
$string['privacy:metadata:database:payments:timecreated'] = 'Czas dokonania płatności.';
$string['privacy:metadata:database:payments:timemodified'] = 'Czas ostatniej aktualizacji rekordu płatności.';
$string['privacy:metadata:database:payments:userid'] = 'Użytkownik, który dokonał płatności.';
$string['restoreaccount'] = 'Przywróć';
$string['selectpaymenttype'] = 'Wybierz rodzaj płatności';
$string['showarchived'] = 'Pokaż zarchiwizowane';
$string['supportedcurrencies'] = 'Obsługiwane waluty';
$string['surcharge'] = 'Dopłata (w procentach)';
$string['surcharge_desc'] = 'Dopłata to dodatkowy procent opłaty pobierany od użytkowników, którzy zdecydują się płacić za pomocą tej bramki płatności.';
