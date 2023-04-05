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
 * Strings for component 'publication', language 'pl', version '4.0'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Dodaj pliki';
$string['allfiles'] = 'Wszystkie pliki';
$string['allowedfiletypes'] = 'Akceptowane typy plików';
$string['allowedfiletypes_err'] = 'Sprawdź dane! Nieprawidłowe rozszerzenia plików lub separatory';
$string['allowedfiletypes_help'] = 'Akceptowane typy plików można ograniczyć, wprowadzając listę typów oddzielonych przecinkami, np. „wideo / mp4, audio / mp3, image / png, image / jpeg” lub rozszerzenia plików zawierające kropkę, np. „.png, .jpg”. Jeśli pole pozostanie puste, dozwolone są wszystkie typy plików.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Szczegóły zadania i formularz zgłoszeniowy będą dostępne od <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'od';
$string['allowsubmissionsfromdate_import'] = 'Zatwierdzone od';
$string['allowsubmissionsfromdate_upload'] = 'Możliwość przesyłania z';
$string['allowsubmissionsfromdateh'] = 'Czas na przesłanie / zatwierdzenie';
$string['allowsubmissionsfromdateh_help'] = 'Możesz określić czas, w którym uczniowie mogą przesyłać pliki lub wyrazić zgodę na publikację plików. W tym czasie studenci mogą edytować swoje pliki, a także wycofać swoją zgodę na publikację.';
$string['allowsubmissionsfromdatesummary'] = 'To zadanie przyjmie zgłoszenia od <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Zawsze pokazuj opis';
$string['alwaysshowdescription_help'] = 'Jeśli ta opcja jest wyłączona, powyższy opis zadania będzie widoczny tylko dla studentów w dniu „Zezwalaj na przesyłanie od”';
$string['approval_timeover'] = 'Możesz zmienić swoją zgodę tylko w okresie zmiany.';
$string['approvalchange'] = 'Status zatwierdzenia zmieniony';
$string['approved'] = 'Zatwierdzony';
$string['approveusers'] = 'widoczny dla wszystkich';
$string['assignment'] = 'Zadanie';
$string['assignment_help'] = 'Wybierz zadanie, z którego chcesz importować pliki. W tej chwili przypisania grupowe nie są obsługiwane i dlatego nie można ich wybrać.';
$string['assignment_notfound'] = 'Nie można już znaleźć zadania, z którego zaimportowano pliki.';
$string['assignment_notset'] = 'Nie wybrano zadania.';
$string['autoimport'] = 'Synchronizuj automatycznie z zadaniem';
$string['autoimport_help'] = 'Jeśli aktywowane, nowe zgłoszenia z odpowiednim zadaniem zostaną automatycznie zaimportowane do modułu folderów studenckich. (Opcjonalnie) W przypadku nowych plików należy ponownie uzyskać zatwierdzenie studenta.';
$string['availability'] = 'Przedział czasowy dla przesłania / zatwierdzenia';
$string['choose'] = 'proszę wybrać...';
$string['configautoimport'] = 'Jeśli wolisz, aby zgłoszenia studentów były automatycznie importowane do instancji folderów studentów. Tę funkcję można włączyć / wyłączyć dla każdej instancji folderu studenta osobno.';
$string['configmaxbytes'] = 'Domyślny maksymalny rozmiar wszystkich plików w folderze studenta.';
$string['configmaxfiles'] = 'Domyślna maksymalna dozwolona liczba załączników na użytkownika.';
$string['configobtainstudentapproval'] = 'Dokumenty są widoczne po uzyskaniu zgody studenta.';
$string['configobtainteacherapproval'] = 'Dokumenty studentów są domyślnie widoczne dla wszystkich pozostałych uczestników.';
$string['configrequiremodintro'] = 'Wyłącz tę opcję, jeśli nie chcesz zmuszać użytkowników do wprowadzania opisu każdej aktywności.';
$string['courseuploadlimit'] = 'Limit przesyłania dla kursu';
$string['cutoffdate'] = 'Data graniczna';
$string['cutoffdate_help'] = 'Jeśli ustawione, zadanie nie będzie przyjmować zgłoszeń po tej dacie bez przedłużenia.';
$string['cutoffdate_import'] = 'Ostatnia zgoda do';
$string['cutoffdate_upload'] = 'Możliwość ostatniego przesłania do';
$string['cutoffdatefromdatevalidation'] = 'Data graniczna musi być późniejsza niż "data dopuszczenia zgłoszeń od daty."';
$string['cutoffdatevalidation'] = 'Data graniczna nie może być wcześniejsza niż termin';
$string['details'] = 'Szczegóły';
$string['downloadall'] = 'Pobierz wszystkie pliki w formacie ZIP';
$string['duedate'] = 'do';
$string['duedate_help'] = 'To jest termin, kiedy zadanie jest z terminem. Zgłoszenia będą nadal dozwolone po tej dacie, ale wszelkie zadania przesłane po tej dacie zostaną oznaczone jako spóźnione. Aby zapobiec przesyłaniu danych po określonej dacie - ustaw datę graniczną przypisania.';
$string['duedate_import'] = 'Zatwierdzenie do';
$string['duedate_upload'] = 'Możliwość przesłania do';
$string['duedatevalidation'] = 'Termin musi być późniejszy niż data dopuszczenia zgłoszeń od daty.';
$string['edit_timeover'] = 'Pliki można edytować tylko podczas okresu zmiany.';
$string['edit_uploads'] = 'Wyślij lub modyfikuj pliki';
$string['emailstudentsmail'] = '{$a->username} zmienił status zatwierdzenia dla \'{$a->filename}\'
dla \'{$a->publication}\' na {$a->apstatus} zatwierdzone o {$a->dayupdated} o {$a->timeupdated}.

Jest dostępny tutaj:

    {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} zmienił status zatwierdzenia dla \'{$a->filename}\'
dla <i>\'{$a->publication}\'</i> na <b>{$a->apstatus} approved</b> o {$a->dayupdated} o {$a->timeupdated}</i><br /><br />
To jest <a href="{$a->url}">dostępne na stronie www</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} wysłał plik\'{$a->filename}\'
dla \'{$a->publication}\' o {$a->dayupdated} o {$a->timeupdated}.

Jest dostępny tutaj:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} wysłał plik \'{$a->filename}\'
dla <i>\'{$a->publication}\' o {$a->dayupdated} o {$a->timeupdated}</i><br /><br />
To jest <a href="{$a->url}">dostępne na stronie www</a>.';
$string['entiresperpage'] = 'Uczestnicy pokazani per strona';
$string['eventpublicationapprovalchanged'] = 'Zmienił się status zatwierdzenia publikacji';
$string['eventpublicationduedateextended'] = 'Wydłużono termin publikacji';
$string['eventpublicationfiledeleted'] = 'Usunięcie pliku publikacji';
$string['eventpublicationfileimported'] = 'Import pliku publikacji';
$string['eventpublicationfileuploaded'] = 'Przesyłanie pliku publikacji';
$string['extensionduedate'] = 'Termin przedłużenia';
$string['extensionnotafterduedate'] = 'Przedłużenie musi nastąpić po terminie';
$string['extensionnotafterfromdate'] = 'Data przedłużenia musi być późniejsza niż data "dopuszczenia zgłoszeń od daty"';
$string['extensionto'] = 'Przedłużenie do';
$string['filedetails'] = 'Szczegóły';
$string['filesofthesetypes'] = 'Można dodawać pliki tego typu:';
$string['go'] = 'Dalej';
$string['grantextension'] = 'przyznaj przedłużenie';
$string['groupapprovalmode'] = 'Tryb zatwierdzania grupowego';
$string['groupapprovalmode_all'] = 'WSZYSCY członkowie grupy muszą zatwierdzić';
$string['groupapprovalmode_help'] = 'Tutaj decydujesz, czy wymagana jest akceptacja wszystkich członków grupy, czy tylko akceptacja co najmniej jednego członka grupy, aby pliki były widoczne. Pliki będą widoczne tylko po zatwierdzeniu przez wszystkich członków grupy lub przynajmniej jednego członka grupy.';
$string['groupapprovalmode_single'] = 'przynajmniej JEDEN członek musi zatwierdzić';
$string['guideline'] = 'widoczne dla wszystkich:';
$string['hidden'] = 'ukryte';
$string['importfrom_err'] = 'Musisz wybrać zadanie, z którego chcesz zaimportować.';
$string['maxbytes'] = 'Maksymalny rozmiar załącznika';
$string['maxfiles'] = 'Maksymalna liczba załączników';
$string['messageprovider:publication_updates'] = 'Powiadomienia o publikacji';
$string['mode'] = 'Tryb';
$string['mode_help'] = 'Wybierz, czy uczniowie mogą przesyłać dokumenty z folderu, czy źródłem są dokumenty z zadania.';
$string['modeimport'] = 'pobrać dokumenty z zadania';
$string['modeupload'] = 'studenci mogą przesyłać dokumenty';
$string['modulename'] = 'Folder studencki';
$string['modulename_help'] = 'Folder studencki oferuje następujące funkcje:

* Uczestnicy mogą przesyłać dokumenty, które są dostępne dla innych uczestników natychmiast lub po sprawdzeniu dokumentów i wyrażeniu zgody.
* Zadanie może zostać wybrane jako podstawa folderu studenckiego. Nauczyciel może zdecydować, które dokumenty zadania są widoczne dla wszystkich uczestników. Nauczyciele mogą również pozwolić uczestnikom zdecydować, czy ich dokumenty powinny być widoczne dla innych.';
$string['modulenameplural'] = 'Foldery studenckie';
$string['myfiles'] = 'Własne pliki';
$string['mygroupfiles'] = 'Pliki mojej grupy';
$string['name'] = 'Nazwa folderu studenckiego';
$string['noentries'] = 'Brak wpisów';
$string['nofiles'] = 'Brak plików';
$string['nofilestozip'] = 'Brak plików do spakowania zip-em';
$string['nonexistentfiletypes'] = 'Następujące typy plików nie zostały rozpoznane: {$a}';
$string['nopublicationsincourse'] = 'Na tym kursie nie ma instancji folderów studentów.';
$string['nothing_to_show_groups'] = 'nic do wyświetlenia - brak dostępnej grupy';
$string['nothing_to_show_users'] = 'nic do wyświetlenia - nie ma studentów';
$string['nothingtodisplay'] = 'Brak wpisów do wyświetlenia';
$string['notice'] = 'Informacja:';
$string['notice_groupimportrequireallapproval'] = 'Zdecyduj, czy Twoje pliki są dostępne dla wszystkich. Wszyscy członkowie grupy muszą wyrazić zgodę, zanim plik będzie widoczny.';
$string['notice_groupimportrequireoneapproval'] = 'Zdecyduj, czy Twoje pliki są dostępne dla wszystkich. Wystarczy jeden członek grupy, aby plik był widoczny. Przed zatwierdzeniem pliku należy wewnętrznie omówić grupę, czy plik powinien być widoczny, czy nie!';
$string['notice_importnoapproval'] = 'Następujące pliki są widoczne dla wszystkich.';
$string['notice_importrequireapproval'] = 'Zdecyduj, czy Twoje pliki są dostępne dla wszystkich.';
$string['notice_uploadnoapproval'] = 'Wszystkie pliki będą natychmiast widoczne dla wszystkich po przesłaniu. Nauczyciel zastrzega sobie prawo do ukrywania opublikowanych plików w dowolnym momencie.';
$string['notice_uploadrequireapproval'] = 'Wszystkie przesłane pliki będą widoczne dopiero po sprawdzeniu przez nauczyciela';
$string['notifications'] = 'Powiadomienia';
$string['notifystudents'] = 'Powiadom uczniów o zmianach w zatwierdzeniu';
$string['notifystudents_help'] = 'Jeśli ta opcja jest włączona, studenci otrzymują wiadomość za każdym razem, gdy zmienia się status zatwierdzenia jednego z przesłanych plików. Metody wiadomości są konfigurowalne.';
$string['notifyteacher'] = 'Powiadom nauczycieli o przesłanych materiałach';
$string['notifyteacher_help'] = 'Jeśli ta opcja jest włączona, oceniający (zwykle nauczyciele) otrzymują wiadomość za każdym razem, gdy uczeń prześle plik. Metody wiadomości są konfigurowalne.';
$string['obtainstudentapproval'] = 'Uzyskać  zatwierdzenie';
$string['obtainstudentapproval_help'] = 'Zdecyduj, czy studenci uzyskają zgodę: <br> <ul> <li> tak - pliki będą widoczne dla wszystkich dopiero po zatwierdzeniu przez studenta. Nauczyciel może wybrać poszczególnych uczniów / pliki z prośbą o zatwierdzenie. </li> <li> nie - zgody ucznia nie można uzyskać za pośrednictwem Moodle. Widoczność pliku zależy wyłącznie od preferencji nauczyciela. </li> </ul>';
$string['obtainteacherapproval'] = 'Zatwierdzone domyślnie';
$string['obtainteacherapproval_help'] = 'Zdecyduj, czy pliki będą widoczne natychmiast po przesłaniu, czy nie: <br> <ul> <li> tak - wszystkie pliki będą widoczne dla wszystkich od razu </li> <li> nie - pliki zostaną opublikowane dopiero po nauczycielu zatwierdzony </li> </ul>';
$string['optionalsettings'] = 'Opcje';
$string['pending'] = 'W oczekiwaniu';
$string['pluginadministration'] = 'Administrowanie folderami studentów';
$string['pluginname'] = 'Folder studencki';
$string['privacy:metadata:approval'] = 'Czy członek grupy zatwierdził lub odrzucił plik.';
$string['privacy:metadata:contenthash'] = 'Klucz SHA1 zawartości pliku jest używany do ustalenia, czy plik się zmienił.';
$string['privacy:metadata:extduedates'] = 'Przechowuje informacje o zastąpionych / przedłużonych terminach publikacji mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'Termin obowiązujący dla użytkownika z powodu nadpisania / przedłużenia.';
$string['privacy:metadata:fileid'] = 'Identyfikator pliku.';
$string['privacy:metadata:filename'] = 'Nazwa pliku.';
$string['privacy:metadata:files'] = 'Przechowuje informacje (identyfikator, do kogo należy, skąd pochodzi, skrót treści, nazwę pliku i jeśli został zatwierdzony przez nauczyciela i / lub ucznia) o plikach przesłanych / importowanych do mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Przechowuje informacje o zatwierdzeniu lub odrzuceniu przez członków grupy plików zaimportowanych z przedłożenia grupy.';
$string['privacy:metadata:publicationfileexplanation'] = 'Pliki i przekonwertowane zgłoszenia onlinetext dla tej wtyczki są przechowywane przez API plików Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Ile wpisów powinno być wyświetlanych na jednej stronie tabeli!';
$string['privacy:metadata:studentapproval'] = 'Czy uczeń zatwierdził lub odrzucił plik.';
$string['privacy:metadata:teacherapproval'] = 'Czy nauczyciel zatwierdził lub odrzucił plik.';
$string['privacy:metadata:timecreated'] = 'Data i godzina utworzenia rekordu danych.';
$string['privacy:metadata:timemodified'] = 'Ostatnia data i godzina aktualizacji / modyfikacji rekordu danych.';
$string['privacy:metadata:type'] = 'Zaznacza pochodzenie pliku (przesłanego przez studenta, importowanego z przedłożenia zadania lub przekonwertowanego tekstu onlinet z przedłożenia zadania).';
$string['privacy:metadata:userid'] = 'Identyfikator użytkownika.';
$string['privacy:path:files'] = 'pliki';
$string['privacy:path:resources'] = 'zasoby';
$string['privacy:type:import'] = 'zaimportowany plik';
$string['privacy:type:onlinetext'] = 'importowany tekst online';
$string['privacy:type:upload'] = 'wysłany plik';
$string['publication:addinstance'] = 'Dodaj nowy folder studencki';
$string['publication:approve'] = 'Zdecyduj, czy pliki powinny być widoczne dla każdego ucznia';
$string['publication:grantextension'] = 'przyznaj przedłużenie';
$string['publication:receiveteachernotification'] = 'Otrzymuj powiadomienia dla nauczycieli';
$string['publication:upload'] = 'Prześlij pliki do folderu studenckiego';
$string['publication:view'] = 'Wyświetl folder ucznia';
$string['publicfiles'] = 'Pliki publiczne';
$string['published_aftercheck'] = 'nie, tylko po zatwierdzeniu przez nauczyciela';
$string['published_immediately'] = 'tak natychmiast, bez zgody nauczyciela';
$string['rejected'] = 'Odrzucony';
$string['rejectusers'] = 'niewidoczny dla wszystkich';
$string['requiremodintro'] = 'Wymagaj opisu działania';
$string['reset'] = 'Cofnij';
$string['reset_userdata'] = 'Wszystkie dane';
$string['resetstudentapproval'] = 'Zresetuj status';
$string['save_changes'] = 'Zapisz zmiany';
$string['saveapproval'] = 'zapisz zatwierdzenie';
$string['savestudentapprovalwarning'] = 'Czy na pewno chcesz zapisać te zmiany? Nie można zmienić statusu, gdy zostanie ustawiony.';
$string['saveteacherapproval'] = 'zapisz zatwierdzenie';
$string['search:activity'] = 'Folder studencki - informacje o aktywności';
$string['show_details'] = 'Pokaż szczegóły';
$string['status'] = 'Status';
$string['student_approve'] = 'zatwierdź';
$string['student_approved'] = 'zatwierdzony';
$string['student_pending'] = 'niewidoczny (niezatwierdzony)';
$string['student_reject'] = 'odrzuć';
$string['student_rejected'] = 'odrzucony';
$string['studentapproval'] = 'Status';
$string['studentapproval_help'] = 'status kolum reprezentuje odpowiedź uczniów na zatwierdzenie:

*? - oczekuje na zatwierdzenie
* ✓ - udzielono zgody
* ✖ - zatwierdzenie odrzucone';
$string['teacher_approved'] = 'widoczne (zatwierdzone)';
$string['teacher_pending'] = 'oczekuje na potwierdzenie';
$string['teacher_rejected'] = 'odrzucony';
$string['teacherapproval'] = 'Zatwierdź';
$string['total'] = 'suma';
$string['updatefiles'] = 'Zaktualizuj pliki';
$string['updatefileswarning'] = 'Pliki od pojedynczego studenta w folderze studenta zostaną zaktualizowane wraz z przesłaniem zadania. Widoczne już pliki studentów również zostaną zastąpione, jeśli zostaną usunięte lub odświeżone - ustawienia ucznia dotyczące widoczności nie zostaną zmienione.';
$string['uploaded'] = 'Przesłano';
$string['visibility'] = 'widoczne dla wszystkich';
$string['visible'] = 'widoczne';
$string['visibleforstudents'] = 'widoczne dla wszystkich';
$string['visibleforstudents_no'] = 'Ten plik NIE jest widoczny dla uczniów';
$string['visibleforstudents_yes'] = 'Uczniowie mogą zobaczyć ten plik';
$string['warning_changefromobtainstudentapproval'] = 'If you perform this change, only you can decide which files are visible to all students. The students are not asked for their approval. All files marked as approved will become visible to all students independent of the students\' decisions.';
$string['warning_changefromobtainteacherapproval'] = 'Jeśli wykonasz tę zmianę, tylko Ty możesz zdecydować, które pliki będą widoczne dla wszystkich uczniów. Studenci nie są proszeni o zgodę. Wszystkie pliki oznaczone jako zatwierdzone będą widoczne dla wszystkich studentów, niezależnie od ich decyzji.';
$string['warning_changetoobtainstudentapproval'] = 'eśli wykonasz tę zmianę, studenci są proszeni o zatwierdzenie wszystkich plików oznaczonych jako widoczne. Pliki będą widoczne dopiero po zatwierdzeniu przez studentów.';
$string['warning_changetoobtainteacherapproval'] = 'Po wyłączeniu tego ustawienia przesłane pliki nie będą automatycznie widoczne dla innych uczestników. Musisz określić, które pliki są widoczne. Już widoczne pliki staną się niewidoczne.';
$string['withselected'] = 'Z wybranymi ...';
$string['zipusers'] = 'Pobierz jako Zip';
