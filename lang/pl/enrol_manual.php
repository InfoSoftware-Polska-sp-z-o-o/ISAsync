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
 * Strings for component 'enrol_manual', language 'pl', version '4.0'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Zaawansowane';
$string['alterstatus'] = 'Zmień status';
$string['altertimeend'] = 'Zmień czas zakończenia';
$string['altertimestart'] = 'Zmień czas rozpoczęcia';
$string['assignrole'] = 'Przypisz role';
$string['assignroles'] = 'Przypisz role';
$string['browsecohorts'] = 'Przeglądaj kohorty';
$string['browseusers'] = 'Przeglądaj użytkowników';
$string['confirmbulkdeleteenrolment'] = 'Czy na pewno chcesz usunąć tych użytkowników z listy zapisanych?';
$string['defaultperiod'] = 'Domyślny okres uczestnictwa';
$string['defaultperiod_desc'] = 'Domyślna długość okresu uczestnictwa. Jeśli jest ustawiona na zero, okres uczestnictwa będzie nieograniczony.';
$string['defaultperiod_help'] = 'Długość okresu uczestnictwa, począwszy od momentu zapisania użytkownika na kurs. Jeśli wyłączone, czas uczestnictwa jest nieograniczony.';
$string['defaultstart'] = 'Domyślny moment rejestracji';
$string['deleteselectedusers'] = 'Usuń wybranych użytkowników z listy zapisanych';
$string['editselectedusers'] = 'Edytuj stan uczestnictwa wybranego użytkownika';
$string['enrolledincourserole'] = 'Zapisano na kurs "{$a->course}" w roli "{$a->role}"';
$string['enrolusers'] = 'Zapisz użytkowników';
$string['enroluserscohorts'] = 'Zapisz wybranych użytkowników i kohorty';
$string['expiredaction'] = 'Akcja wygaśnięcia rejestracji';
$string['expiredaction_help'] = 'Wybierz akcję do wykonania, gdy rejestracja użytkownika wygaśnie. Należy pamiętać, że niektóre dane użytkownika i ustawienia są usuwane z kursu podczas wyrejestrowywania się z kursu.';
$string['expirymessageenrolledbody'] = 'Witaj {$a->user},

Informujemy, że twój zapis na kurs {$a->course} wygasa {$a->timeend}.

Jeżeli potrzebujesz pomocy, prosimy o kontakt z {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Powiadomienie o wygaśnięciu zapisu na kurs';
$string['expirymessageenrollerbody'] = 'Zapisy na kurs \'{$a->course}\' wygasną w ciągu następnego {$a->threshold} dla następujących użytkowników:

{$a->użytkownicy}

Aby przedłużyć ich rejestrację przejdź do {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Powiadomienie o wygaśnięciu zapisu na kurs';
$string['manual:config'] = 'Konfigurowanie wtyczek zapisów ręcznych';
$string['manual:enrol'] = 'Zapisz użytkowników';
$string['manual:manage'] = 'Zarządzanie zapisami ręcznymi na kurs';
$string['manual:unenrol'] = 'Wypisz użytkowników z kursu';
$string['manual:unenrolself'] = 'Wypisz się z kursu';
$string['manualpluginnotinstalled'] = 'Wtyczka "Manual" nie została jeszcze zainstalowana';
$string['messageprovider:expiry_notification'] = 'Powiadomienie o wygaśnięciu zapisów';
$string['now'] = 'Teraz';
$string['pluginname'] = 'Zapisywanie ręczne';
$string['pluginname_desc'] = 'Wtyczka zapisów ręcznych umożliwia  użytkownikowi z odpowiednimi uprawnieniami, jak nauczyciel ręczne zapisywanie użytkowników na kurs poprzez odpowiednią pozycję w ustawieniach administracyjnych kursu. (Ważne jest, aby rozróżnić tę wtyczkę od \'samodzielnych zapisów\' dokonywanych przez studentów.)
Ta wtyczka powinny być normalnie włączona, ponieważ niektóre inne wtyczki, np. zapisywanie samodzielne, wymagają tej podstawowej wtyczki.';
$string['selectcohorts'] = 'Wybierz kohortę';
$string['selectusers'] = 'Wybierz użytkowników';
$string['status'] = 'Włącz zapisywanie ręczne';
$string['status_desc'] = 'Zezwalaj na dostęp do kursów dla wewnętrznie zapisanych użytkowników. Powinno być włączone w większości przypadków.';
$string['status_help'] = 'To ustawienie określa, czy użytkownicy mogą być zapisywani ręcznie, w ustawieniach administracji kursu, przez użytkownika z odpowiednimi uprawnieniami, takimi jak nauczyciel.';
$string['statusdisabled'] = 'Wyłączone';
$string['statusenabled'] = 'Włączone';
$string['unenrol'] = 'Wypisz użytkownika';
$string['unenrolselectedusers'] = 'Wypisz wybranych użytkowników';
$string['unenrolselfconfirm'] = 'Czy na pewno chcesz wypisać się z kursu "{$a}"?';
$string['unenroluser'] = 'Czy na pewno chcesz wypisać "{$a->user}" z kursu "{$a->course}"?';
$string['unenrolusers'] = 'Wypisz użytkowników';
$string['wscannotenrol'] = 'Wtyczki nie może ręcznie zapisać użytkownika do kursu id = {$a->courseid}';
$string['wsnoinstance'] = 'Wtyczka zapisywania ręcznego nie istnieje lub jest wyłączona dla kursu (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Nie masz uprawnień, aby przypisać rolę ({$a->roleid}) do użytkownika ({$a->userid}) w kursie ({$a->courseid}).';
