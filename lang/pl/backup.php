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
 * Strings for component 'backup', language 'pl', version '4.0'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Proces tworzenia kopii zapasowej został zakończony';
$string['asyncbackupcompletebutton'] = 'Kontynuuj';
$string['asyncbackupcompletedetail'] = 'Proces tworzenia kopii zapasowej zakończył się pomyślnie. <br/> Dostęp do kopii zapasowej można uzyskać na <a href="{$a}">stronie przywracania.</a>';
$string['asyncbackuperror'] = 'Proces tworzenia kopii zapasowej nie powiódł się';
$string['asyncbackuperrordetail'] = 'Proces tworzenia kopii zapasowej nie powiódł się. Skontaktuj się z administratorem systemu.';
$string['asyncbackuppending'] = 'Proces tworzenia kopii zapasowej jest w toku';
$string['asyncbackupprocessing'] = 'Tworzenie kopii zapasowej jest w toku';
$string['asyncbadexecution'] = 'Złe wykonanie kontrolera kopii zapasowej. Wynosi {$a} i powinien wynosić 2.';
$string['asynccheckprogress'] = 'Postęp możesz sprawdzić w dowolnym momencie na <a href="{$a}"> stronie przywracania</a>.';
$string['asyncemailenable'] = 'Włącz powiadomienia o wiadomościach';
$string['asyncemailenabledetail'] = 'Jeśli ta opcja jest włączona, użytkownicy otrzymają komunikat po zakończeniu asynchronicznej kopii zapasowej lub przywracania.';
$string['asyncgeneralsettings'] = 'Asynchroniczne tworzenie kopii zapasowych/przywracanie';
$string['asyncmessagebody'] = 'Wiadomość';
$string['asyncmessagebodydefault'] = 'Cześć {user_firstname}, <br/> Twoja {operation} (ID: {backupid}) została pomyślnie ukończona. <br/><br/> Możesz uzyskać do niego dostęp tutaj: {link}.';
$string['asyncmessagebodydetail'] = 'Wiadomość do wysłania po zakończeniu asynchronicznej kopii zapasowej lub przywracania.';
$string['asyncmessagesubject'] = 'Temat';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} zakończyła się pomyślnie';
$string['asyncmessagesubjectdetail'] = 'Temat wiadomości';
$string['asyncnowait'] = 'Nie musisz tutaj czekać, proces będzie kontynuowany w tle.';
$string['asyncprocesspending'] = 'Proces w toku';
$string['asyncrestorecomplete'] = 'Proces przywracania został ukończony';
$string['asyncrestorecompletebutton'] = 'Kontynuuj';
$string['asyncrestorecompletedetail'] = 'Proces przywracania został zakończony pomyślnie. Kliknięcie przycisku Kontynuuj spowoduje przejście do <a href="{$a}">kursu dotyczącego przywróconego elementu.</a>';
$string['asyncrestoreerror'] = 'Proces przywracania nie powiódł się';
$string['asyncrestoreerrordetail'] = 'Proces przywracania nie powiódł się. Skontaktuj się z administratorem systemu.';
$string['asyncrestoreinprogress'] = 'Przywracanie w toku';
$string['asyncrestoreinprogress_help'] = 'Pokazano tutaj trwające przywracanie kursu asynchronicznego.';
$string['asyncrestorepending'] = 'Proces przywracania w toku';
$string['asyncrestoreprocessing'] = 'Trwa przywracanie';
$string['asyncreturn'] = 'Wróć do kursu';
$string['autoactivedescription'] = 'Wybierz, czy chcesz wykonywać automatyczne kopie zapasowe. W przypadku wybrania opcji ręcznej automatyczne tworzenie kopii zapasowych będzie możliwe tylko poprzez automatyczny skrypt CLI do tworzenia kopii zapasowych. Można to zrobić ręcznie w wierszu polecenia lub za pomocą crona.';
$string['autoactivedisabled'] = 'Wyłącz';
$string['autoactiveenabled'] = 'Włącz';
$string['autoactivemanual'] = 'Ręcznie';
$string['automatedbackupschedule'] = 'Harmonogram';
$string['automatedbackupschedulehelp'] = 'Wybierz dni tygodnia, w których chcesz wykonywać automatyczne kopie zapasowe.';
$string['automatedbackupsinactive'] = 'Automatyczne kopie zapasowe nie zostały włączone przez administratora witryny';
$string['automatedbackupstatus'] = 'Status kopii zapasowej';
$string['automateddeletedays'] = 'Usuń kopie zapasowe starsze niż';
$string['automatedmaxkept'] = 'Maksymalna liczba przechowywanych kopii zapasowych';
$string['automatedmaxkepthelp'] = 'To ustawienie określa maksymalną liczbę ostatnich automatycznych kopii zapasowych, które mają być przechowywane dla każdego kursu. Starsze kopie zapasowe będą automatycznie usuwane.';
$string['automatedminkept'] = 'Minimalna liczba przechowywanych kopii zapasowych';
$string['automatedminkepthelp'] = 'Jeśli kopie zapasowe starsze niż określona liczba dni zostaną usunięte, może się zdarzyć, że nie zostanie utworzona kopia zapasowa nieaktywnego kursu. Aby temu zapobiec, należy określić minimalną liczbę przechowywanych kopii zapasowych.';
$string['automatedsettings'] = 'Ustawienia automatycznego tworzenia kopii zapasowych';
$string['automatedsetup'] = 'Konfiguracja automatycznych kopii zapasowych';
$string['automatedstorage'] = 'Miejsce przechowywania automatycznych kopii zapasowych';
$string['automatedstoragehelp'] = 'Wybierz lokalizację, w której mają być przechowywane automatycznie tworzone kopie zapasowe.';
$string['backupactivity'] = 'Kopia aktywności: {$a}';
$string['backupcourse'] = 'Kopia kursu: {$a}';
$string['backupcoursedetails'] = 'Szczegóły kursu';
$string['backupcoursesection'] = 'Sekcja: {$a}';
$string['backupcoursesections'] = 'Sekcje kursu';
$string['backupdate'] = 'Data wykonania';
$string['backupdetails'] = 'Szczegóły kopii zapasowej';
$string['backupdetailsnonstandardinfo'] = 'Wybrany plik nie jest standardowym plikiem kopii zapasowej Moodle. Moodle postara się przekonwertować plik kopii zapasowej w standardowy format, a następnie odtworzyć kurs.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Nieznany format';
$string['backuplog'] = 'Informacje techniczne i ostrzeżenia';
$string['backupmode'] = 'Tryb';
$string['backupmode10'] = 'Ogólny';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Centrum';
$string['backupmode40'] = 'Na tej samej stronie';
$string['backupmode50'] = 'Automatyczne';
$string['backupmode60'] = 'Przekonwertowane';
$string['backupmode70'] = 'Asynchroniczna';
$string['backupsection'] = 'Kopia zapasowa sekcji kursu: {$a}';
$string['backupsettings'] = 'Ustawienia kopii';
$string['backupsitedetails'] = 'Szczegóły strony';
$string['backupstage16action'] = 'Kontynuuj';
$string['backupstage1action'] = 'Następny';
$string['backupstage2action'] = 'Następny';
$string['backupstage4action'] = 'Wykonaj kopię zapasową';
$string['backupstage8action'] = 'Kontynuuj';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktywność';
$string['backuptypecourse'] = 'Kurs';
$string['backuptypesection'] = 'Sekcja';
$string['backupversion'] = 'Wersja kopii zapasowej';
$string['cannotfindassignablerole'] = 'Rola {$a} nie może być mapowana na żadną z ról możliwych do przypisania.';
$string['choosefilefromactivitybackup'] = 'Obszar kopii zapasowych aktywności';
$string['choosefilefromactivitybackup_help'] = 'Kopie zapasowe aktywności wykonane przy użyciu ustawień domyślnych są przechowywane tutaj.';
$string['choosefilefromautomatedbackup'] = 'Zautomatyzowane tworzenie kopii zapasowych';
$string['choosefilefromautomatedbackup_help'] = 'Zawiera generowane automatycznie kopie zapasowe.';
$string['choosefilefromcoursebackup'] = 'Obszar kopii zapasowych kursu';
$string['choosefilefromcoursebackup_help'] = 'Kopie zapasowe kursu wykonane przy użyciu ustawień domyślnych są przechowywane tutaj.';
$string['choosefilefromuserbackup'] = 'Obszar prywatnych kopii zapasowych użytkownika';
$string['choosefilefromuserbackup_help'] = 'Pliki kopii zapasowych z anonimowymi danymi użytkownika są przechowywane tutaj.';
$string['config_keep_groups_and_groupings'] = 'Domyślnie przechowuj bieżące grupy i grupowania.';
$string['config_keep_roles_and_enrolments'] = 'Domyślnie zachowuj bieżące role i zapisy.';
$string['config_overwrite_conf'] = 'Pozwala użytkownikowi zastąpić bieżącą konfigurację kursu';
$string['config_overwrite_course_fullname'] = 'Domyślnie nadpisuj pełne imię i nazwisko kursu tym z pliku kopii zapasowej. Wymaga to sprawdzenia „Zastąp konfigurację kursu”, a aktualny użytkownik ma możliwość zmiany pełnej nazwy kursu (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Domyślnie nadpisz krótką nazwę kursu nazwą z pliku kopii zapasowej. Wymaga to zaznaczenia opcji „Zastąp konfigurację kursu” i umożliwienia użytkownikowi zmiany krótkiej nazwy kursu (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Domyślnie nadpisz datę rozpoczęcia kursu datą z pliku kopii zapasowej. Wymaga to zaznaczenia opcji „Zastąp konfigurację kursu” oraz użytkownik musi mieć możliwość zmiany dat kursów podczas ich przywracania (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Ustawia domyślne wartości dla zawartych aktywności w pliku kopii zapasowej.';
$string['configgeneralanonymize'] = 'Jeśli włączone, wszystkie informacje dotyczące użytkowników będę domyślnie utajnione.';
$string['configgeneralbadges'] = 'Ustawia domyślne wartości dla odznak w pliku kopii zapasowej.';
$string['configgeneralblocks'] = 'Ustawia domyślne wartości dla zawartych bloków w pliku kopii zapasowej.';
$string['configgeneralcalendarevents'] = 'Ustawia domyślne ustawienie umieszczania wydarzeń z kalendarza w pliku kopii zapasowej.';
$string['configgeneralcomments'] = 'Ustawia domyślne wartości dla zawartych komentarzy w pliku kopii zapasowej.';
$string['configgeneralcompetencies'] = 'Ustawia domyślne ustawienie umieszczania kompetencji w pliku kopii zapasowej.';
$string['configgeneralcontentbankcontent'] = 'Domyślne ustawienia uwzględniania banku zawartości w kopii zapasowej.';
$string['configgeneralfiles'] = 'Ustawia wartość domyślną uwzględniania plików w kopii zapasowej. Uwaga: wyłączenie tego ustawienia spowoduje utworzenie kopii zapasowej zawierającej tylko odniesienia do plików. Nie stanowi to problemu, jeśli kopia zapasowa zostanie przywrócona w tej samej witrynie, a pliki nie zostaną usunięte zgodnie z ustawieniem „Wyczyść pliki puli śmieci” (okres czyszczenia plików).';
$string['configgeneralfilters'] = 'Ustawia domyślne wartości dla zawartych filtrów w pliku kopii zapasowej.';
$string['configgeneralgroups'] = 'Ustawia domyślne ustawienie umieszczania grup i grupowań w pliku kopii zapasowej.';
$string['configgeneralhistories'] = 'Ustawia wartość domyślną przechowywania historii użytkownika w kopii zapasowej.';
$string['configgenerallogs'] = 'Jeśli włączone, wszystkie logi będą domyślnie zawarte w kopiach zapasowych.';
$string['configgeneralpermissions'] = 'Jeśli ta opcja jest włączona, uprawnienia ról zostaną zaimportowane. Może to zastąpić istniejące uprawnienia dla zarejestrowanych użytkowników.';
$string['configgeneralquestionbank'] = 'Jeżeli włączony, bank pytań będzie dołączony domyślnie do kopii zapasowych. UWAGA: Wyłączenie tej opcji wyłącza kopię zapasową aktywności, które korzystają z banku pytań, tj. test.';
$string['configgeneralroleassignments'] = 'Jeśli włączone, przypisane role będą domyślnie zawarte w kopiach zapasowych.';
$string['configgeneralusers'] = 'Ustawia wartość domyślną przechowywania użytkowników w kopii zapasowej.';
$string['configgeneraluserscompletion'] = 'Jeśli włączone, informacje o postępach użytkowników będą domyślnie zawarte w kopiach zapasowych.';
$string['configlegacyfiles'] = 'Domyślne ustawienie dołączania starszej wersji plików kursów do kopii zapasowej. Pliki kursów w starszej wersji pochodzą z Moodle w wersji 2.0 lub wcześniejszych.';
$string['configloglifetime'] = 'Określa czas przechowywania informacji z dzienników kopii zapasowych. Dzienniki starsze niż ten wiek są automatycznie usuwane. Zaleca się, aby ta wartość była niewielka, ponieważ informacje zapisane w kopii zapasowej mogą być ogromne.';
$string['configrestoreactivities'] = 'Domyślne ustawia przywracania aktywności.';
$string['configrestorebadges'] = 'Domyślne ustawia przywracania odznak.';
$string['configrestoreblocks'] = 'Domyślne ustawia przywracania bloków.';
$string['configrestorecalendarevents'] = 'Ustawia wartość domyślną przywracania zdarzeń kalendarza.';
$string['configrestorecomments'] = 'Domyślne ustawia przywracania komentarzy.';
$string['configrestorecompetencies'] = 'Domyślne ustawia przywracania kompetencji.';
$string['configrestorecontentbankcontent'] = 'Domyślne ustawienia przywracania banku zawartości.';
$string['configrestoreenrolments'] = 'Domyślne ustawia przywracania metod zapisów.';
$string['configrestorefilters'] = 'Domyślne ustawia przywracania filtrów.';
$string['configrestoregroups'] = 'Ustawia domyślne dla przywracania grup i grupowań, jeśli zostały uwzględnione w kopii zapasowej.';
$string['configrestorehistories'] = 'Ustawia domyślną wartość przywracania historii użytkownika, jeśli została uwzględniona w kopii zapasowej.';
$string['configrestorelogs'] = 'Jeśli włączone logi zostaną domyślnie przywrócone, jeśli zostały uwzględnione w kopii zapasowej.';
$string['configrestorepermissions'] = 'Jeśli ta opcja jest włączona, uprawnienia roli zostaną przywrócone. Może to zastąpić istniejące uprawnienia dla zarejestrowanych użytkowników.';
$string['configrestoreroleassignments'] = 'Jeśli domyślnie włączono, przypisania ról zostaną przywrócone, jeśli zostały uwzględnione w kopii zapasowej.';
$string['configrestoreusers'] = 'Ustawia domyślną opcję przywracania użytkowników, jeśli zostali uwzględnieni w kopii zapasowej.';
$string['configrestoreuserscompletion'] = '';
$string['confirmcancel'] = 'Anuluj tworzenie kopii zapasowej';
$string['confirmcancelimport'] = 'Anuluj import';
$string['confirmcancelno'] = 'Nie anuluj';
$string['confirmcancelquestion'] = 'Czy na pewno chcesz anulować?
Wszelkie informacje wprowadzone zostaną utracone.';
$string['confirmcancelrestore'] = 'Anuluj odtwarzanie';
$string['confirmcancelyes'] = 'Anuluj tworzenie kopii zapasowej';
$string['confirmnewcoursecontinue'] = 'Ostrzeżenie: nowy kurs';
$string['confirmnewcoursecontinuequestion'] = 'Tymczasowy (ukryty) kurs zostanie stworzony podczas odtwarzania kursu. Aby przerwać, naciśnij Anuluj. Nie zamykaj przeglądarki podczas odtwarzania.';
$string['copiesinprogress'] = 'Trwa kopiowanie tego kursu. <a href="{$a}"> Wyświetl zadania kopiowania w trakcie. </a>';
$string['copycoursedesc'] = 'Kurs zostanie powielony i umieszczony w wybranej kategorii kursu.';
$string['copycourseheading'] = 'Skopiuj kurs';
$string['copycoursetitle'] = 'Skopiuj kurs: {$a}';
$string['copydest'] = 'Miejsce docelowe';
$string['copyfieldnotfound'] = 'Nie znaleziono wymaganego pola';
$string['copyformfail'] = 'Wywołanie AJAX kopiowania kursu nie powiodło się.';
$string['copyingcourse'] = 'Trwa kopiowanie kursu';
$string['copyingcourseshortname'] = 'kopiowanie';
$string['copyop'] = 'Aktualna operacja';
$string['copyprogressheading'] = 'Kopiowanie kursu w trakcie';
$string['copyprogressheading_help'] = 'Ta tabela pokazuje status wszystkich twoich niedokończonych kopii kursu.';
$string['copyprogresstitle'] = 'Postęp kopiowania kursu';
$string['copyreturn'] = 'Skopiuj i wróć';
$string['copysource'] = 'Źródło';
$string['copyview'] = 'Skopiuj i wyświetl';
$string['coursecategory'] = 'Kategoria, do której zostanie przywrócony kurs';
$string['courseid'] = 'Oryginalny identyfikator (ID)';
$string['coursesettings'] = 'Ustawienia kursu';
$string['coursetitle'] = 'Tytuł';
$string['currentstage1'] = 'Ustawienia początkowe';
$string['currentstage16'] = 'Zakończono';
$string['currentstage2'] = 'Ustawienia schematu';
$string['currentstage4'] = 'Potwierdzenie i przegląd';
$string['currentstage8'] = 'Wykonaj kopię zapasową';
$string['enableasyncbackup'] = 'Włącz asynchroniczne kopie zapasowe';
$string['enableasyncbackup_help'] = 'Jeśli ta opcja jest włączona, wszystkie operacje tworzenia kopii zapasowych i przywracania będą wykonywane asynchronicznie. Nie wpływa to na import i eksport. Asynchroniczne kopie zapasowe i przywracanie umożliwiają użytkownikom wykonywanie innych operacji podczas tworzenia kopii zapasowej lub przywracania.';
$string['enterasearch'] = 'Wprowadź wyszukiwanie*';
$string['error_block_for_module_not_found'] = 'Znaleziono nieprzypisaną instancję bloku  (id: {$a->bid}) w module kursu (id: {$a->mid}). Ten blok nie będzie zachowany';
$string['error_course_module_not_found'] = 'Znaleziono nieprzypisany moduł kursu (id: {$a}). Ten moduł nie będzie zachowany.';
$string['errorcopyingbackupfile'] = 'Nie udało się skopiować pliku kopii zapasowej do folderu tymczasowego przed przywróceniem.';
$string['errorfilenamemustbezip'] = 'Wprowadzony przez Ciebie plik musi być plikiem ZIP i posiadać rozszerzenie .mbz';
$string['errorfilenamerequired'] = 'Musisz podać poprawną nazwę pliku kopii zapasowej';
$string['errorfilenametoolong'] = 'Nazwa pliku musi mieć mniej niż 255 znaków.';
$string['errorinvalidformat'] = 'Nieznany format kopii zapasowej';
$string['errorinvalidformatinfo'] = 'Wybrany plik nie jest prawidłowym plikiem kopii zapasowej Moodle i nie może zostać przywrócony.';
$string['errorminbackup20version'] = 'Ten plik kopii zapasowej został utworzony w jednej z rozwojowej wersji kopii zapasowej Moodle ({$a->backup}). Minimalne wymagania to {$a->min}. Nie można tego odtworzyć.';
$string['errorrestorefrontpagebackup'] = 'Możesz użyć kopii zapasowej strony głównej tylko do przywrócenia strony głównej';
$string['executionsuccess'] = 'Plik kopii zapasowej został poprawnie utworzony.';
$string['extractingbackupfileto'] = 'Wypakowywanie pliku kopii zapasowej do: {$a}';
$string['failed'] = 'Tworzenie kopii zapasowej nie powiodło się';
$string['filealiasesrestorefailures'] = 'Błędy w przywracaniu aliasów';
$string['filealiasesrestorefailures_help'] = 'Aliasy są symbolicznymi łączami do innych plików, włączając te przechowywane w zewnętrznych repozytoriach. W niektórych przypadkach, Moodle nie może ich przywrócić - np. podczas przywracania kopii zapasowej innej strony lub kiedy odwołanie do pliku nie istnieje.

Więcej informacji i rzeczywisty powód błędu można znaleźć w pliku zdarzeń przywracania.';
$string['filealiasesrestorefailuresinfo'] = 'Niektóre aliasy zawarte w pliku kopii zapasowej nie mogą zostać przywrócone. Poniższa lista

zawiera ich planowaną lokalizację i plik źródłowy odnoszące się do oryginalnej strony.';
$string['filename'] = 'Nazwa pliku';
$string['filereferencesincluded'] = 'Odwołania do plików zewnętrznych są zawarte w pliku kopii zapasowej. Nie będą działać, jeśli kopia zapasowa zostanie przywrócona w innej witrynie.';
$string['filereferencesnotsamesite'] = 'Plik kopii zapasowej pochodzi z innej witryny, więc nie można przywrócić odniesień do plików.';
$string['filereferencessamesite'] = 'Plik kopii zapasowej pochodzi z tej witryny, dzięki czemu można przywrócić odwołania do plików.';
$string['generalactivities'] = 'Uwzględnij aktywności i zasoby';
$string['generalanonymize'] = 'Anonimizacja informacji';
$string['generalbackdefaults'] = 'Główne ustawienia kopii zapasowej';
$string['generalbadges'] = 'Uwzględnij odznaki';
$string['generalblocks'] = 'Uwzględnij bloki';
$string['generalcalendarevents'] = 'Uwzględnij wydarzenia kalendarza';
$string['generalcomments'] = 'Uwzględnij komentarze';
$string['generalcompetencies'] = 'Uwzględnij kompetencje';
$string['generalcontentbankcontent'] = 'Uwzględnij bank zawartości';
$string['generalenrolments'] = 'Uwzględnij metody zapisów';
$string['generalfiles'] = 'Uwzględnij pliki';
$string['generalfilters'] = 'Uwzględnij filtry';
$string['generalgradehistories'] = 'Uwzględnij historię';
$string['generalgroups'] = 'Uwzględnij grupy i grupowania';
$string['generalhistories'] = 'Uwzględnij historię';
$string['generallegacyfiles'] = 'Uwzględnij pliki kursu w starym formacie';
$string['generallogs'] = 'Uwzględnij logi';
$string['generalpermissions'] = 'Uwzględnij nadpisania uprawnień';
$string['generalquestionbank'] = 'Uwzględnij bank pytań';
$string['generalrestoredefaults'] = 'Ogólne ustawienia przywracania';
$string['generalrestoresettings'] = 'Ogólne ustawienia przywracania';
$string['generalroleassignments'] = 'Uwzględnij przypisania ról';
$string['generalsettings'] = 'Główne ustawienia kopii zapasowych';
$string['generalusers'] = 'Uwzględnij użytkowników';
$string['generaluserscompletion'] = 'Uwzględnij pełną informację użytkownika';
$string['hidetypes'] = 'Ukryj opcje typu';
$string['importbackupstage16action'] = 'Kontynuuj';
$string['importbackupstage1action'] = 'Następny';
$string['importbackupstage2action'] = 'Następny';
$string['importbackupstage4action'] = 'Wykonaj import';
$string['importbackupstage8action'] = 'Kontynuuj';
$string['importcurrentstage0'] = 'Wybór kursu';
$string['importcurrentstage1'] = 'Ustawienia początkowe';
$string['importcurrentstage16'] = 'Zakończono';
$string['importcurrentstage2'] = 'Ustawienia schematu';
$string['importcurrentstage4'] = 'Potwierdzenie i przegląd';
$string['importcurrentstage8'] = 'Wykonaj import';
$string['importfile'] = 'Importuj plik kopii zapasowej';
$string['importgeneralduplicateadminallowed'] = 'Zezwól na rozwiązanie konfliktu admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Jeśli witryna ma konto o nazwie użytkownika „admin”, wówczas próba przywrócenia pliku kopii zapasowej zawierającego konto o nazwie użytkownika „admin” może spowodować konflikt. Jeśli to ustawienie jest włączone, konflikt zostanie rozwiązany przez zmianę nazwy użytkownika w pliku kopii zapasowej na „admin_xyz”.';
$string['importgeneralmaxresults'] = 'Max. liczba wyświetlanych kursów do importu';
$string['importgeneralmaxresults_desc'] = 'Kontroluje liczbę kursów wymienionych na pierwszym etapie procesu importowania';
$string['importgeneralsettings'] = 'Ogólne domyślne opcje importowania';
$string['importrootsettings'] = 'Importuj ustawienia';
$string['importsettings'] = 'Ogólne ustawienia importu';
$string['importsuccess'] = 'Import zakończony. Naciśnij kontynuuj, aby powrócić do kursu.';
$string['includeactivities'] = 'Zawiera:';
$string['includeditems'] = 'Zawiera elementy';
$string['includefilereferences'] = 'Odwołania plików do zewnętrznych treści';
$string['includesection'] = 'Sekcja {$a}';
$string['includeuserinfo'] = 'Dane użytkownika';
$string['inprogress'] = 'Tworzenie kopii zapasowej w toku';
$string['jumptofinalstep'] = 'Przejdź do ostatniego etapu';
$string['keep'] = 'Zachowaj';
$string['keptroles'] = 'Uwzględnij zapisy do ról';
$string['keptroles_help'] = 'Użytkownicy należący do wybranych ról zostaną zapisani do nowego kursu. Dane użytkownika nie zostaną skopiowane, chyba że włączona jest opcja „Uwzględnij dane użytkownika”.';
$string['locked'] = 'Zablokowane';
$string['lockedbyconfig'] = 'To ustawienie zostało zablokowane przez ustawienia domyślne kopii zapasowej';
$string['lockedbyhierarchy'] = 'Zablokowane przez zależności';
$string['lockedbypermission'] = 'Nie masz wystarczających uprawnień, aby zmienić to ustawienie';
$string['loglifetime'] = 'Przechowaj logi przez';
$string['managefiles'] = 'Zarządzaj plikami kopii zapasowych';
$string['mergerestoredefaults'] = 'Przywróć ustawienia domyślne podczas scalania z innym kursem';
$string['missingfilesinpool'] = 'Niektórych plików nie można zapisać podczas tworzenia kopii zapasowej, więc ich przywrócenie nie będzie możliwe.';
$string['module'] = 'Moduł';
$string['moodleversion'] = 'Wersja Moodle';
$string['morecoursesearchresults'] = 'Znaleziono więcej kursów niż {$a}, wyświetlam pierwsze {$a}';
$string['moreresults'] = 'Jest zbyt wiele wyników, wprowadź bardziej szczegółowe wyszukiwanie.';
$string['nomatchingcourses'] = 'Brak kursów do wyświetlenia';
$string['norestoreoptions'] = 'Brak kategorii lub istniejących kursów, które można przywrócić.';
$string['originalwwwroot'] = 'Adres URL pliku kopii zapasowej';
$string['overwrite'] = 'Zastąp';
$string['pendingasyncdeletedetail'] = 'W trakcie tego kursu trwa asynchroniczna kopia zapasowa. <br/>
Nie można usunąć kursów, dopóki kopia zapasowa się nie zakończy.';
$string['pendingasyncdetail'] = 'Asynchroniczne kopie zapasowe pozwalają użytkownikowi mieć tylko jedną oczekującą kopię zapasową zasobu na raz. <br/>
Nie można umieszczać w kolejce wielu asynchronicznych kopii zapasowych tego samego zasobu, ponieważ prawdopodobnie spowodowałoby to wiele kopii zapasowych o tej samej zawartości.';
$string['pendingasyncedit'] = 'Dla tego kursu istnieje oczekująca asynchroniczna kopia zapasowa. Nie edytuj tego kursu, dopóki kopia zapasowa nie zostanie ukończona.';
$string['pendingasyncerror'] = 'Oczekuje na utworzenie kopii zapasowej tego zasobu';
$string['preparingdata'] = 'Przygotowanie danych';
$string['preparingui'] = 'Przygotowanie do wyświetlenia strony';
$string['previousstage'] = 'Poprzedni';
$string['privacy:metadata:backup:detailsofarchive'] = 'To archiwum może zawierać różne dane użytkowników związane z kursem, takie jak oceny, zapisy użytkowników i dane dotyczące aktywności.';
$string['privacy:metadata:backup:externalpurpose'] = 'Celem tego archiwum jest przechowywanie informacji związanych z kursem, które mogą zostać później przywrócone.';
$string['privacy:metadata:backup_controllers'] = 'Lista operacji tworzenia kopii zapasowych';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID kursu';
$string['privacy:metadata:backup_controllers:operation'] = 'Operacja, która została wykonana, np. przywracanie.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Data utworzenia zadania';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Data zmodyfikowania zadania';
$string['privacy:metadata:backup_controllers:type'] = 'Rodzaj obsługiwanego elementu, np. aktywność.';
$string['qcategory2coursefallback'] = 'Kategoria pytań "{$a->name}", znajdująca się w pliku kopii zapasowej w kontekście systemu/kategorii kursu, zostanie przywrócona w kontekście kursu';
$string['qcategorycannotberestored'] = 'Nie można utworzyć kategorii pytań "{$a->name}" podczas przywracania';
$string['question2coursefallback'] = 'Kategoria pytań "{$a->name}", znajdująca się w pliku kopii zapasowej w kontekście systemu/kategorii kursu, zostanie przywrócona w kontekście kursu';
$string['questionegorycannotberestored'] = 'Pytania "{$a->name}" nie mogą być utworzone przez przywracanie';
$string['recyclebin_desc'] = 'Pamiętaj, że te ustawienia zostaną również wykorzystane w stosunku do kosza.';
$string['replacerestoredefaults'] = 'Przywróć ustawienia domyślne podczas przywracania do innego kursu z usuwaniem jego zawartości';
$string['restoreactivity'] = 'Odtwórz aktywność';
$string['restorecourse'] = 'Odtwórz kurs';
$string['restorecoursesettings'] = 'Ustawienia kursu';
$string['restoredcourseid'] = 'ID przywróconego kursu: {$a}';
$string['restoreexecutionsuccess'] = 'Kurs został przywrócony poprawnie. Klikając poniżej przycisk "Kontynuuj" przejdziesz do widoku kursu, który odtworzyłeś.';
$string['restorefileweremissing'] = 'Niektórych plików nie można odtworzyć, ponieważ brakowało ich w kopii zapasowej.';
$string['restorenewcoursefullname'] = 'Nowa nazwa kursu';
$string['restorenewcourseshortname'] = 'Nowa krótka nazwa kursu';
$string['restorenewcoursestartdate'] = 'Nowa data rozpoczęcia';
$string['restorerolemappings'] = 'Przywracanie mapowania ról';
$string['restorerootsettings'] = 'Ustawienia odtwarzania';
$string['restoresection'] = 'Przywróć sekcję';
$string['restorestage1'] = 'Potwierdź';
$string['restorestage16'] = 'Przegląd';
$string['restorestage16action'] = 'Wykonaj odtwarzanie';
$string['restorestage1action'] = 'Następny';
$string['restorestage2'] = 'Miejsce docelowe';
$string['restorestage2action'] = 'Następny';
$string['restorestage32'] = 'Przetwarzanie';
$string['restorestage32action'] = 'Kontynuuj';
$string['restorestage4'] = 'Ustawienia';
$string['restorestage4action'] = 'Następny';
$string['restorestage64'] = 'Zakończono';
$string['restorestage64action'] = 'Kontynuuj';
$string['restorestage8'] = 'Schemat';
$string['restorestage8action'] = 'Następny';
$string['restoretarget'] = 'Przywróć cel';
$string['restoretocourse'] = 'Przywróć do kursu:';
$string['restoretocurrentcourse'] = 'Odtwórz do tego kursu';
$string['restoretocurrentcourseadding'] = 'Scalanie kopii zapasowej kursu do tego / z tym kursem';
$string['restoretocurrentcoursedeleting'] = 'Usuń zawartość tego kursu, a następnie przywróć';
$string['restoretoexistingcourse'] = 'Odtwórz do istniejącego kursu';
$string['restoretoexistingcourseadding'] = 'Scalanie kopii zapasowej kursu do istniejącego kursu';
$string['restoretoexistingcoursedeleting'] = 'Usuń zawartość istniejącego kursu, a następnie przywróć';
$string['restoretonewcourse'] = 'Odtwórz jako nowy kurs';
$string['restoringcourse'] = 'Trwa odtwarzanie kursu';
$string['restoringcourseshortname'] = 'przywracam';
$string['rootenrolmanual'] = 'Przywróć jako rejestracje ręczne';
$string['rootsettingactivities'] = 'Uwzględnij aktywności i zasoby';
$string['rootsettinganonymize'] = 'Utajnianie informacji o użytkowniku';
$string['rootsettingbadges'] = 'Uwzględnij odznaki';
$string['rootsettingblocks'] = 'Uwzględnij bloki';
$string['rootsettingcalendarevents'] = 'Uwzględnij zdarzenia z kalendarza';
$string['rootsettingcomments'] = 'Uwzględnij komentarze';
$string['rootsettingcompetencies'] = 'Uwzględnij kompetencje';
$string['rootsettingcontentbankcontent'] = 'Uwzględnij bank zawartości';
$string['rootsettingcustomfield'] = 'Uwzględnij niestandardowe pola';
$string['rootsettingenrolments'] = 'Uwzględnij metody zapisów';
$string['rootsettingenrolments_always'] = 'Tak, zawsze';
$string['rootsettingenrolments_never'] = 'Nie, przywróć użytkowników jako rejestracje ręczne';
$string['rootsettingenrolments_withusers'] = 'Tak, ale tylko pod warunkiem uwzględnienia użytkowników';
$string['rootsettingfiles'] = 'Dołącz pliki';
$string['rootsettingfilters'] = 'Uwzględnij filtry';
$string['rootsettinggradehistories'] = 'Uwzględnij historię oceniania';
$string['rootsettinggroups'] = 'Uwzględnij grupy i grupowania';
$string['rootsettingimscc1'] = 'Konwertuj do IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Konwertuj do IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Uwzględnij pliki kursu w starym formacie';
$string['rootsettinglogs'] = 'Uwzględnij logi kursu';
$string['rootsettingpermissions'] = 'Uwzględnij nadpisania uprawnień';
$string['rootsettingquestionbank'] = 'Uwzględnij bank pytań';
$string['rootsettingroleassignments'] = 'Uwzględnij role przypisane użytkownikowi';
$string['rootsettings'] = 'Ustawienia kopii zapasowej';
$string['rootsettingusers'] = 'Uwzględnij zarejestrowanych użytkowników';
$string['rootsettinguserscompletion'] = 'Dołącz szczegółowe informacje o ukończeniu';
$string['samesitenotification'] = 'Ta kopia zapasowa została utworzona tylko z odniesieniami do plików, a nie do samych plików. Przywracanie będzie działać tylko w tej witrynie.';
$string['sectionactivities'] = 'Aktywności';
$string['sectioninc'] = 'Zawarte w kopii zapasowej (brak informacji o użytkowniku)';
$string['sectionincanduser'] = 'Zawarte w kopii zapasowej wraz z informacjami o użytkowniku';
$string['selectacategory'] = 'Wybierz kategorię';
$string['selectacourse'] = 'Wybierz kurs';
$string['setting_course_fullname'] = 'Nazwa kursu';
$string['setting_course_shortname'] = 'Krótka nazwa kursu';
$string['setting_course_startdate'] = 'Data rozpoczęcia kursu';
$string['setting_keep_groups_and_groupings'] = 'Zachowaj obecne grupy i grupy nadrzędne';
$string['setting_keep_roles_and_enrolments'] = 'Zachowaj obecne role i metody zapisów';
$string['setting_overwrite_conf'] = 'Zastąp konfigurację kursu';
$string['setting_overwrite_course_fullname'] = 'Zastąp pełną nazwę kursu';
$string['setting_overwrite_course_shortname'] = 'Zastąp krótką nazwę kursu';
$string['setting_overwrite_course_startdate'] = 'Zastąp datę rozpoczęcia kursu';
$string['showtypes'] = 'Pokaż opcje typu';
$string['sitecourseformatwarning'] = 'To jest kopia zapasowa strony głównej i może zostać ona wykorzystana  tylko do przywrócenia strony głównej';
$string['skiphidden'] = 'Pomiń ukryte kursy';
$string['skiphiddenhelp'] = 'Wybierz, czy pominąć ukryte kursy';
$string['skipmodifdays'] = 'Pomiń kursy nie modyfikowane od';
$string['skipmodifdayshelp'] = 'Pomiń kursy nie modyfikowane od kilku dni';
$string['skipmodifprev'] = 'Pomiń kursy nie modyfikowane od poprzedniej kopii zapasowej';
$string['skipmodifprevhelp'] = 'Wybierz, czy pomijać kursy, które nie zostały zmodyfikowane od czasu ostatniej automatycznej kopii zapasowej. Wymaga to włączenia rejestrowania.';
$string['status'] = 'Stan';
$string['storagecourseandexternal'] = 'Obszar kopii zapasowej wewnątrz kursu i określony folder';
$string['storagecourseonly'] = 'Obszar kopii zapasowej wewnątrz kursu';
$string['storageexternalonly'] = 'Określony folder dla automatycznych kopii zapasowych';
$string['successful'] = 'Tworzenie kopii zapasowej zakończyło się powodzeniem';
$string['successfulcopy'] = 'Kopiowanie powiodło się';
$string['successfulrestore'] = 'Przywracanie zakończyło się powodzeniem';
$string['timetaken'] = 'Wykorzystany czas';
$string['title'] = 'Tytuł';
$string['totalcategorysearchresults'] = 'Wszystkich kategorii: {$a}';
$string['totalcoursesearchresults'] = 'Wszystkich kursów: {$a}';
$string['undefinedrolemapping'] = 'Odwzorowanie ról niezdefiniowane dla archetypu „{$ a}”.';
$string['unnamedsection'] = 'Sekcja bez nazwy';
$string['userdata'] = 'Uwzględnij dane użytkownika';
$string['userdata_help'] = 'Jeśli opcja jest włączona, dane takie jak posty na forum, przesłane zadania itp. zostaną skopiowane do nowego kursu dla wszystkich użytkowników z rolą wybraną w opcji „Uwzględnij zapisy do ról”.';
$string['userinfo'] = 'Informacja o użytkowniku';
