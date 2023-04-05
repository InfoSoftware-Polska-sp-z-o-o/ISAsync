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
 * Strings for component 'enrol', language 'pl', version '4.0'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Dostępne wtyczki zapisów na kursy';
$string['addinstance'] = 'Dodaj metodę zapisu';
$string['addinstanceanother'] = 'Dodaj metodę i utwórz kolejną';
$string['ajaxnext25'] = 'Następne 25 ...';
$string['ajaxoneuserfound'] = '1 znaleziony użytkownik';
$string['ajaxxmoreusersfound'] = 'Znaleziono ponad {$a} użytkowników';
$string['ajaxxusersfound'] = 'znaleziono {$a} użytkowników';
$string['assignnotpermitted'] = 'Nie masz uprawnień lub nie możesz przypisywać ról w tym kursie.';
$string['bulkuseroperation'] = 'Działania zbiorcze na użytkownikach';
$string['configenrolplugins'] = 'Proszę wybrać wszystkie niezbędne wtyczki oraz ułożyć w odpowiedniej kolejności.';
$string['custominstancename'] = 'Własna nazwa metody zapisów';
$string['defaultenrol'] = 'Dodaj do nowych kursów';
$string['defaultenrol_desc'] = 'Możliwe jest domyślne dodanie tej wtyczki do wszystkich nowych kursów.';
$string['deleteinstanceconfirm'] = 'Czy na pewno chcesz usunąć metodę zapisów &quot;{$a->name}&quot; z {$a->users} zapisanych użytkowników?';
$string['deleteinstanceconfirmself'] = 'Czy na pewno chcesz usunąć instancję "{$a->name}", która daje tobie dostęp do tego kursu? Jeżeli będziesz kontynuować, jest możliwe, że nie będziesz w stanie uzyskać dostępu do tego kursu.';
$string['deleteinstancenousersconfirm'] = 'Zamierzasz usunąć metodę zapisów: "{$a->name}". Kontynuować?';
$string['disableinstanceconfirmself'] = 'Czy na pewno chcesz usunąć instancję "{$a->name}", która daje tobie dostęp do tego kursu? Jeżeli będziesz kontynuować, jest możliwe, że nie będziesz w stanie uzyskać dostępu do tego kursu.';
$string['durationdays'] = '{$a} dni';
$string['editenrolment'] = 'Edytuj zapisy';
$string['edituserenrolment'] = 'Edycja zapisu: {$a}';
$string['enrol'] = 'Zapisz';
$string['enrolcandidates'] = 'Nie zapisani użytkownicy';
$string['enrolcandidatesmatching'] = 'Znalezieni użytkownicy spoza kursu';
$string['enrolcohort'] = 'Zapisy kohort';
$string['enrolcohortusers'] = 'Zapisz użytkowników';
$string['enroldetails'] = 'Szczegóły zapisów';
$string['enrollednewusers'] = 'Pomyślnie zapisano {$a} nowych użytkowników';
$string['enrolledusers'] = 'Zapisani użytkownicy';
$string['enrolledusersmatching'] = 'Znalezieni użytkownicy';
$string['enrolme'] = 'Zapisz mnie na ten kurs';
$string['enrolmentinstances'] = 'Metody zapisów';
$string['enrolmentmethod'] = 'Metoda zapisu';
$string['enrolmentnew'] = 'Nowe zapisy w {$a}';
$string['enrolmentnewuser'] = '{$a->user} zapisał się na kurs "{$a->course}"';
$string['enrolmentoptions'] = 'Opcje zapisów';
$string['enrolments'] = 'Zapisy';
$string['enrolmentupdatedforuser'] = 'Rejestracja dla użytkownika "{$a->fullname}" została zaktualizowana';
$string['enrolnotpermitted'] = 'Nie masz uprawnień, aby zapisać inne osoby do tego kursu';
$string['enrolperiod'] = 'Okres uczestnictwa';
$string['enroltimecreated'] = 'Utworzono zapisy';
$string['enroltimeend'] = 'Koniec uczestnictwa';
$string['enroltimeendinvalid'] = 'Data zakończenia zapisów musi przypadać po dacie rozpoczęcia zapisów';
$string['enroltimestart'] = 'Początek uczestnictwa';
$string['enrolusage'] = 'Wystąpienia / zapisy';
$string['enrolusers'] = 'Zapisz użytkowników';
$string['enrolxusers'] = 'Zapisz {$a} użytkowników';
$string['errajaxfailedenrol'] = 'Nie udało się zapisać użytkownika';
$string['errajaxsearch'] = 'Błąd podczas wyszukiwania użytkowników';
$string['erroreditenrolment'] = 'Podczas edycji metody zapisów wystąpił błąd';
$string['errorenrolcohort'] = 'Błąd podczas dodawania metody zapisu przez kohortę na ten kurs.';
$string['errorenrolcohortusers'] = 'Błąd podczas zapisu członków kohorty do tego kursu.';
$string['errorthresholdlow'] = 'Próg zawiadomienia musi wynosić co najmniej 1 dzień.';
$string['errorwithbulkoperation'] = 'Podczas przetwarzania zbiorczej zmiany zapisów nastąpił błąd.';
$string['eventenrolinstancecreated'] = 'Utworzono instancję zapisów';
$string['eventenrolinstancedeleted'] = 'Usunięto instancję zapisów';
$string['eventenrolinstanceupdated'] = 'Zaktualizowano instancję zapisów';
$string['eventuserenrolmentcreated'] = 'Zapisano użytkownika do kursu';
$string['eventuserenrolmentdeleted'] = 'Użytkownik wypisany z kursu';
$string['eventuserenrolmentupdated'] = 'Zaktualizowano wypis użytkownika';
$string['expirynotify'] = 'Poinformuj o wygasającym dostępie do kursu.';
$string['expirynotify_help'] = 'To ustawienie określa, czy zostanie wysłana informacja o wygasaniu dostępu do kursu.';
$string['expirynotifyall'] = 'Rejestrant i zapisany użytkownik';
$string['expirynotifyenroller'] = 'Tylko rejestrant';
$string['expirynotifyhour'] = 'Godzina wysłania powiadomienia o wygaśnięciu rejestracji';
$string['expirythreshold'] = 'Próg zawiadomienia';
$string['expirythreshold_help'] = 'Z jakim wyprzedzeniem czasowym użytkownicy powinni zostać poinformowani o wygasającej rejestracji?';
$string['extremovedaction'] = 'Zewnętrzna akcja wypisania użytkownika';
$string['extremovedaction_help'] = 'Wybierz akcję w przypadku, gdy użytkownik zostanie usunięty z zewnętrznego źródła, z któego został zapisany. Zwróć uwagę, że niektóre dane i ustawienia użytkownika są usuwane z kursu podczas wypisywania użytkownika.';
$string['extremovedkeep'] = 'Zachowaj użytkownika jako zapisanego';
$string['extremovedsuspend'] = 'Wyłącz zapisy na kurs';
$string['extremovedsuspendnoroles'] = 'Wyłącz zapisy na kurs i usuń przypisane role';
$string['extremovedunenrol'] = 'Wypisz użytkownika z kursu';
$string['finishenrollingusers'] = 'Zakończ zapisy użytkowników';
$string['foundxcohorts'] = 'Znaleziono {$a} kohort';
$string['instanceadded'] = 'Metoda dodana';
$string['instanceeditselfwarning'] = 'Ostrzeżenie:';
$string['instanceeditselfwarningtext'] = 'Jesteś zapisany w tym kursie, przez tą metodę zapisu, zmiany mogą mieć wpływ na dostęp do kursu.';
$string['invalidenrolduration'] = 'Nieprawidłowy czas trwania zapisów';
$string['invalidenrolinstance'] = 'Niedozwolona metoda zapisu';
$string['invalidrequest'] = 'Nieprawidłowe żądanie';
$string['invalidrole'] = 'Niepoprawna rola';
$string['manageenrols'] = 'Zarządzaj wtyczkami zapisów';
$string['manageinstance'] = 'Zarządzaj';
$string['migratetomanual'] = 'Migracja do ręcznych zapisów';
$string['nochange'] = 'Bez zmian';
$string['noexistingparticipants'] = 'Brak istniejących uczestników';
$string['nogroup'] = 'Brak grupy';
$string['noguestaccess'] = 'Goście nie mają prawa dostępu do tego kursu. Proszę się zalogować.';
$string['none'] = 'Żaden';
$string['notenrollable'] = 'Skontaktuj się z prowadzącym w celu zapisania się na ten kurs.';
$string['notenrolledusers'] = 'Pozostali użytkownicy';
$string['otheruserdesc'] = 'Użytkownicy nie zapisani na ten kurs, ale dziedziczą lub mają przypisane w nim role.';
$string['participationactive'] = 'Aktywny';
$string['participationnotcurrent'] = 'Nieaktualny';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Zawieszony';
$string['periodend'] = 'do {$a}';
$string['periodnone'] = 'zapisani {$a}';
$string['periodstart'] = 'od {$a}';
$string['periodstartend'] = 'od {$a->start} do {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Zapisy';
$string['privacy:metadata:user_enrolments:userid'] = 'Identyfikator użytkownika.';
$string['proceedtocourse'] = 'Przejdź do zawartości kursu';
$string['recovergrades'] = 'Odzyskaj, jeśli to możliwe, stare oceny użytkownika';
$string['rolefromcategory'] = '{$a->role} (Rola odziedziczona z kategorii)';
$string['rolefrommetacourse'] = '{$a->role} (Rola odziedziczona z kursu nadrzędnego)';
$string['rolefromsystem'] = '{$a->role} (Rola przydzielona na poziomie witryny)';
$string['rolefromthiscourse'] = '{$a->role} (Przydzielono w tym kursie)';
$string['sendfromcoursecontact'] = 'Kontakt kursu';
$string['sendfromnoreply'] = 'Z adresu no-replay';
$string['startdatetoday'] = 'Dziś';
$string['synced'] = 'Zsynchronizowano';
$string['testsettings'] = 'Test ustawień';
$string['testsettingsheading'] = 'Test ustawień zapisu - {$a}';
$string['totalenrolledusers'] = '{$a} zapisanych użytkowników';
$string['totalotherusers'] = '{$a} innych użytkowników';
$string['totalunenrolledusers'] = '{$a} wypisanych użytkowników';
$string['unassignnotpermitted'] = 'Nie masz uprawnień do odbierania ról w tym kursie.';
$string['unenrol'] = 'Wypisz z kursu';
$string['unenrolconfirm'] = 'Czy na pewno chcesz wypisać użytkownika "{$a->user}" (uprzednio zarejestrowanego poprzez "{$a->enrolinstancename}") z kursu "{$a->course}"?';
$string['unenrolleduser'] = 'Rejestracja dla użytkownika "{$a->fullname}" została zaktualizowana';
$string['unenrolme'] = 'Wypisz mnie z {$a}';
$string['unenrolnotpermitted'] = 'Nie masz uprawnień lub nie możesz wypisać tego użytkownika z kursu.';
$string['unenrolroleusers'] = 'Wypisz użytkowników';
$string['uninstallmigrating'] = 'Migracja "{$a}" zapisów';
$string['unknowajaxaction'] = 'Nieznana akcja';
$string['unlimitedduration'] = 'Nieograniczony';
$string['userremovedfromselectiona'] = 'Użytkownik "{$a}" został usunięty z zaznaczenia.';
$string['usersearch'] = 'Szukaj';
$string['withselectedusers'] = 'Z zaznaczonymi użytkownikami';
$string['youenrolledincourse'] = 'Jesteś zapisany do kursu.';
$string['youunenrolledfromcourse'] = 'Zostałeś wypisany z kursu "{$a}".';
