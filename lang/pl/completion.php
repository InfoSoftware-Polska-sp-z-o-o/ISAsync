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
 * Strings for component 'completion', language 'pl', version '4.0'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Uzyskanie oceny';
$string['activities'] = 'Aktywności';
$string['activitiescompleted'] = 'Ukończenie aktywności';
$string['activitiescompletednote'] = 'Uwaga: zakończenie aktywności musi być ustawione dla aktywności pojawiającej się na powyższej liście.';
$string['activitieslabel'] = 'Aktywności/zasoby';
$string['activityaggregation'] = 'Wymagany warunek';
$string['activityaggregation_all'] = 'WSZYSTKIE wybrane aktywności muszą być ukończone';
$string['activityaggregation_any'] = 'DOWOLNA z wybranych aktywności musi być ukończona';
$string['activitycompletion'] = 'Ukończenie aktywności';
$string['activitycompletionupdated'] = 'Zmiany zapisane';
$string['activitygradenotrequired'] = 'Ocena nie jest wymagana';
$string['affectedactivities'] = 'Zmiany będą dotyczyć następujących <b>{$a}</b> aktywności i/lub zasobów:';
$string['aggregationmethod'] = 'Metoda zestawienia';
$string['all'] = 'Wszystkie';
$string['any'] = 'Którykolwiek';
$string['approval'] = 'Zatwierdzone';
$string['badautocompletion'] = 'Po wybraniu automatycznego uzupełniania, należy również włączyć co najmniej jeden warunek (poniżej).';
$string['bulkactivitycompletion'] = 'Hurtowa edycja warunków ukończenia';
$string['bulkactivitydetail'] = 'Wybierz aktywności, które chcesz edytować hurtowo.';
$string['checkall'] = 'Zaznacz lub usuń zaznaczenie wszystkich aktywności i zasobów';
$string['checkallsection'] = 'Zaznacz lub usuń zaznaczenie wszystkich aktywności i zasobów w następującej sekcji: {$a}';
$string['completeactivity'] = 'Ukończ aktywność';
$string['completed'] = 'Ukończona';
$string['completedunlocked'] = 'opcje ukończenia są odblokowane';
$string['completedunlockedtext'] = 'Jeśli zapiszesz zmiany, stan ukończenia dla studentów zostanie usunięty. Jeśli rozmyślisz nie zapisuj tego formularza.';
$string['completedwarning'] = 'opcje ukończenia są zablokowane';
$string['completedwarningtext'] = 'Ta aktywność została już oznaczona jako ukończona przez {$a} uczestnika(ów). Zmiana opcji ukończenia unieważni status ukończenia i może powodować nieporozumienia. Dlatego stan ukończenia jest zablokowany i nie powinien być odblokowywany, chyba że to konieczne.';
$string['completion'] = 'Śledzenie ukończenia';
$string['completion-alt-auto-enabled'] = 'Ten element jest automatycznie oznaczany jako ukończony po spełnieniu warunków: {$a}';
$string['completion-alt-auto-fail'] = 'Ukończona: {$a} (bez pozytywnej oceny)';
$string['completion-alt-auto-n'] = 'Nieukończone: {$a}';
$string['completion-alt-auto-n-override'] = 'Nieukończona: {$a->modname} (ustawione przez {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Ukończona: {$a} (z pozytywną oceną)';
$string['completion-alt-auto-y'] = 'Ukończona: {$a}';
$string['completion-alt-auto-y-override'] = 'Ukończona: {$a->modname} (ustawione przez {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Studenci mogą samodzielnie oznaczyć ten element jako ukończony: {$a}';
$string['completion-alt-manual-n'] = 'Nieukończone: {$a}. Wybierz, aby oznaczyć jako ukończone.';
$string['completion-alt-manual-n-override'] = 'Nieukończona: {$a->modname} (ustawione przez {$a->overrideuser}). Wybierz, aby oznaczyć jako ukończone.';
$string['completion-alt-manual-y'] = 'Ukończone: {$a}. Wybierz, aby oznaczyć jako nieukończone.';
$string['completion-alt-manual-y-override'] = 'Ukończona: {$a->modname} (ustawione przez {$a->overrideuser}). Wybierz, aby oznaczyć jako nieukończone.';
$string['completion-fail'] = 'Ukończona (nie uzyskano pozytywnej oceny)';
$string['completion-n'] = 'Nieukończona';
$string['completion-n-override'] = 'Nieukończona (ustawione przez {$a})';
$string['completion-pass'] = 'Ukończona (uzyskano pozytywna ocenę)';
$string['completion-y'] = 'Ukończona';
$string['completion-y-override'] = 'Ukończona (ustawione przez {$a})';
$string['completion_automatic'] = 'Pokaż aktywność jako ukończoną, gdy warunki są spełnione';
$string['completion_help'] = 'Jeśli ta opcja jest włączona, ukończenie aktywności może być monitorowane ręcznie lub automatycznie (na podstawie określonych warunków). W razie potrzeby można ustawić wiele warunków - wtedy aktywność zostanie uznana za ukończoną dopiero po spełnieniu ich WSZYSTKICH.

Pole obok nazwy aktywności na stronie kursu wskazuje, czy aktywność jest ukończona.';
$string['completion_manual'] = 'Studenci mogą ręcznie oznaczyć tę aktywność jako ukończoną';
$string['completion_none'] = 'Nie wykrywaj ukończenia aktywności';
$string['completionactivitydefault'] = 'Użyj domyślnej aktywności';
$string['completiondefault'] = 'Użyj domyślnej aktywności';
$string['completiondisabled'] = 'Wyłączony, nie wyświetlany w ustawieniach aktywności';
$string['completionduration'] = 'Zapisy';
$string['completionenabled'] = 'Włączone, sterowanie poprzez ustawienia aktywności i śledzenia ukończenia.';
$string['completionexpected'] = 'Oczekiwane ukończenie do';
$string['completionexpected_help'] = 'To ustawienie określa datę, kiedy aktywność powinna być ukończona.';
$string['completionexpectedfor'] = '{$a->instancename} powinno zostać ukończone';
$string['completionicons'] = 'Bloki oznaczania ukończenia';
$string['completionicons_help'] = 'Pole obok nazwy aktywności może być użyte w celu wskazania, kiedy aktywność jest ukończona.

Jeśli wyświetlone jest pole z przerywaną ramką, oznaczenie pojawi się automatycznie, gdy ukończysz aktywność zgodnie z warunkami określonymi przez nauczyciela.

Jeśli pokazane jest pole z ciągłą obwódką, możesz w nie kliknąć jeśli uważasz aktywność za ukończoną. Jeśli zmienisz zdanie, ponowne kliknięcie usuwa oznaczenie.';
$string['completionmenuitem'] = 'Ukończenie';
$string['completionnotenabled'] = 'Śledzenie ukończenia nie jest włączone';
$string['completionnotenabledforcourse'] = 'Śledzenie ukończenia nie jest włączone w tym kursie';
$string['completionnotenabledforsite'] = 'Śledzenie ukończenia nie jest włączone w tym serwisie';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Data, kiedy kurs zostanie oznaczony jako ukończony';
$string['completionpassgrade'] = 'Wymagaj pozytywnej oceny';
$string['completionpassgrade_desc'] = 'Student musi otrzymać ocenę pozytywną, aby ukończyć tą aktywność';
$string['completionpassgrade_help'] = 'Jeśli ta opcja jest włączona, aktywność jest uznawana za ukończoną, gdy student otrzyma ocenę pozytywną.';
$string['completionsettingslocked'] = 'Ustawienia ukończenia są zablokowane';
$string['completionusegrade'] = 'Wymaga oceny';
$string['completionusegrade_desc'] = 'Student musi otrzymać ocenę, aby ukończyć tę aktywność.';
$string['completionusegrade_help'] = 'Jeśli włączone, aktywność uważana jest za ukończoną, gdy student otrzyma ocenę. Ikony pozytywnej lub negatywnej oceny mogą być wyświetlane, jeśli próg zaliczenia został określony.';
$string['completionview'] = 'Wymaga obejrzenia';
$string['completionview_desc'] = 'Student musi zajrzeć do tej aktywności, aby ją ukończyć.';
$string['configcompletiondefault'] = 'Ustawienie domyślnie dla zakończonego śledzenia, kiedy utworzono nową aktywność';
$string['configenablecompletion'] = 'Opcja pozwala włączyć funkcje śledzenia ukończenia (postępów) na poziomie kursu.';
$string['confirmselfcompletion'] = 'Potwierdź samodzielne oznaczenie ukończenia.';
$string['courseaggregation'] = 'Wymagany warunek';
$string['courseaggregation_all'] = 'WSZYSTKIE wybrane kursy muszą być ukończone';
$string['courseaggregation_any'] = 'DOWOLNY z wybranych kursów musi być ukończony';
$string['coursealreadycompleted'] = 'Już ukończyłeś ten kurs';
$string['coursecomplete'] = 'Kurs ukończony';
$string['coursecompleted'] = 'Kurs ukończony';
$string['coursecompletedmessage'] = '<p>Gratulacje!</p><p>Ukończyłeś kurs <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Ukończenie kursu';
$string['coursecompletioncondition'] = 'Warunek: {$a}';
$string['coursegrade'] = 'Ocena z kursu';
$string['coursesavailable'] = 'Dostępne kursy';
$string['coursesavailableexplaination'] = 'Uwaga: Warunki zakończenia dla kursu muszą być ustawione, aby pojawił się na powyższej liście.';
$string['criteria'] = 'Kryteria';
$string['criteriagroup'] = 'Grupa kryteriów';
$string['criteriarequiredall'] = 'Wszystkie poniższe kryteria są wymagane';
$string['criteriarequiredany'] = 'Jakiekolwiek poniższe kryteria są wymagane';
$string['csvdownload'] = 'Pobierz w formacie arkusza kalkulacyjnego (UTF-8 .csv)';
$string['datepassed'] = 'Data minęła';
$string['days'] = 'Dni';
$string['daysoftotal'] = '{$a->days} z {$a->total}';
$string['defaultcompletion'] = 'Domyślne warunki ukończenia';
$string['defaultcompletionupdated'] = 'Zmiany zapisane';
$string['deletecompletiondata'] = 'Usuń dane o ukończeniu';
$string['dependencies'] = 'Zależności';
$string['dependenciescompleted'] = 'Zakończenie innych kursów';
$string['detail_desc:receivegrade'] = 'Otrzymaj ocenę';
$string['detail_desc:view'] = 'Wyświetl';
$string['editcoursecompletionsettings'] = 'Edytuj ustawienia ukończenia kursu';
$string['enablecompletion'] = 'Włącz śledzenie ukończenia';
$string['enablecompletion_help'] = 'Po włączeniu, ustawienia śledzenia postępów są wyświetlane na stronie śledzenia postępów i w ustawieniach aktywności.';
$string['enrolmentduration'] = 'Długość okresu uczestnictwa w kursie';
$string['enrolmentdurationlength'] = 'Użytkownik musi być zapisanym uczestnikiem kursu przez';
$string['err_noactivities'] = 'Śledzenie ukończenia nie jest włączone w żadnej aktywności, więc nie może zostać wyświetlone. Można włączyć śledzenie ukończenia przez edycję ustawień danej aktywności.';
$string['err_nocourses'] = 'Śledzenie ukończenia nie jest włączone w żadnym innym kursie, więc nie może zostać wyświetlone. Można włączyć śledzenie ukończenia przez edycję ustawień kursu.';
$string['err_nograde'] = 'Próg zaliczenia kursu nie został określony dla tego kursu. Aby włączyć ten typ kryterium należy ustalić próg zaliczenia dla tego kursu.';
$string['err_noroles'] = 'Brak ról z uprawnieniami moodle/course:markcomplete w tym kursie.';
$string['err_nousers'] = 'W tej grupie lub kursie nia ma studentów, dla których wyświetlany byłby stan ukończenia. (Domyślnie stan ukończenia wyśwtetlany jest tylko dla studentów, więc jeśli nie ma tu studentów, pojawia się ten błąd. Administratorzy mogą zmienić to ustawienie.';
$string['err_settingslocked'] = 'Jeden lub więcej studentów spełniło już kryteria ukończenia, więc ustawienia zostały zablokowane. Odblokowanie ustawień kryteriów ukończenia unieważni status ukończenia użytkownika i może powodować zamieszanie.';
$string['err_system'] = 'Wystąpił błąd wewnętrzny w systemie śledzenia postępów. (Administratorzy systemu mogą włączyć debugowanie, aby zobaczyć więcej szczegółów.)';
$string['eventcoursecompleted'] = 'Kurs ukończony';
$string['eventcoursecompletionupdated'] = 'Zaktualizowano ukończenie kursu';
$string['eventcoursemodulecompletionupdated'] = 'Zaktualizowano ukończenie aktywności kursu';
$string['eventdefaultcompletionupdated'] = 'Zaktualizowano wartość domyślną ukończenia zajęć';
$string['excelcsvdownload'] = 'Pobierz w formacie zgodnym z MS Excel (.CSV)';
$string['failed'] = 'Nieudane';
$string['fraction'] = 'Część';
$string['graderequired'] = 'Wymagana ocena z kursu';
$string['gradexrequired'] = '{$a} wymagane';
$string['hiddenrules'] = 'Ukryte zostały ustawienia, które są specyficzne dla: <b>{$a}</b>. Aby je zobaczyć, zaznacz tylko elementy jednego rodzaju.';
$string['inprogress'] = 'W toku';
$string['manual'] = 'Ręcznie';
$string['manualcompletionby'] = 'Ręczne oznaczenie ukończenia przez innych';
$string['manualcompletionbynote'] = 'Uwaga: Uprawnienie moodle/course:markcomplete musi być dozwolone dla roli, aby pojawiła się na liście.';
$string['manualselfcompletion'] = 'Samodzielne oznaczenie ukończenia';
$string['manualselfcompletionnote'] = 'Uwaga: Jeżeli włączono samodzielne oznaczenie ukończenia kursu, należy na stronie kursu dodać blok "Ukończenie ręczne".';
$string['markcomplete'] = 'Oznacz jako ukończone';
$string['markedcompleteby'] = 'Oznaczono jako ukończony przez {$a}';
$string['markingyourselfcomplete'] = 'Samodzielne oznaczenie ukończenia';
$string['modifybulkactions'] = 'Wprowadź zmiany, które chcesz wprowadzić hurtowo';
$string['moredetails'] = 'Więcej szczegółów';
$string['nocriteriaset'] = 'Brak kryteriów ukończenia tego kursu';
$string['notcompleted'] = 'Nieukończone';
$string['notenroled'] = 'Nie jesteś zapisany na ten kurs';
$string['nottracked'] = 'Obecnie nie jesteś śledzony przez mechanizm śledzenia postępów na tym kursie';
$string['notyetstarted'] = 'Jeszcze nie rozpoczęto';
$string['overallaggregation'] = 'Wymagania zaliczenia';
$string['overallaggregation_all'] = 'Kurs jest ukończony kiedy WSZYSTKIE warunki są spełnione';
$string['overallaggregation_any'] = 'Kurs jest ukończony kiedy KTÓRYKOLWIEK z warunków jest spełniony';
$string['pending'] = 'Oczekujący';
$string['periodpostenrolment'] = 'Po okresie uczestnictwa';
$string['privacy:metadata:completionstate'] = 'Jeśli aktywność została ukończona';
$string['privacy:metadata:course'] = 'Identyfikator kursu';
$string['privacy:metadata:coursecompletedsummary'] = 'Przechowuje informacje o użytkownikach, którzy spełnili kryteria w kursie';
$string['privacy:metadata:coursemoduleid'] = 'Identyfikator aktywności';
$string['privacy:metadata:timecompleted'] = 'Data w którym kurs został ukończony.';
$string['privacy:metadata:timeenrolled'] = 'Termin, w którym użytkownik został zapisany na kurs';
$string['privacy:metadata:timemodified'] = 'Termin  modyfikacji ukończenia aktywności';
$string['privacy:metadata:timestarted'] = 'Czas rozpoczęcia kursu.';
$string['privacy:metadata:unenroled'] = 'Jeśli użytkownik został wypisany z kursu';
$string['privacy:metadata:viewed'] = 'Jeśli aktywność została wyświetlona';
$string['progress'] = 'Postępy studenta w nauce';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Postęp: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Uznawanie wcześniejszego kształcenia';
$string['remainingenroledfortime'] = 'Pozostaje zapisany na określony okres czasu';
$string['remainingenroleduntildate'] = 'Pozostaje zapisany do określonej daty';
$string['reportpage'] = 'Wyświetlanie użytkowników {$a->from} do {$a->to} z {$a->total}.';
$string['requiredcriteria'] = 'Wymagane kryteria';
$string['resetactivities'] = 'Wyczyść wszystkie zaznaczone aktywności i zasoby';
$string['restoringcompletiondata'] = 'Zapisywanie danych zaliczenia';
$string['roleaggregation'] = 'Wymagany warunek';
$string['roleaggregation_all'] = 'WSZYSTKIE wybrane role muszą zaznaczyć spełnienie warunku';
$string['roleaggregation_any'] = 'KTÓRAKOLWIEK z wybranych ról musi zaznaczyć spełnienie warunku';
$string['roleidnotfound'] = 'Nie znaleziono roli o identyfikatorze {$a}';
$string['saved'] = 'Zapisano';
$string['seedetails'] = 'Zobacz szczegóły';
$string['select'] = 'Wybierz';
$string['self'] = 'Samodzielnie';
$string['selfcompletion'] = 'Samodzielne oznaczenie ukończenia';
$string['showcompletionconditions'] = 'Wyświetl warunki ukończenia aktywności';
$string['showinguser'] = 'Pokaż użytkownika';
$string['todo'] = 'DO zrobienia';
$string['unenrolingfromcourse'] = 'Wypisywanie z kursu';
$string['unenrolment'] = 'Wypisanie z kursu';
$string['unit'] = 'Sekcja';
$string['unlockcompletion'] = 'Odblokuj opcje ukończenia';
$string['unlockcompletiondelete'] = 'Odblokuj opcje ukończenia i usuń dane ukończenia użytkownika';
$string['usealternateselector'] = 'Użyj alternatywnego wyboru kursu';
$string['usernotenroled'] = 'Użytkownik nie jest zapisany na kurs';
$string['viewcoursereport'] = 'Zobacz raport kursu';
$string['viewingactivity'] = 'Przeglądanie {$a}';
$string['withconditions'] = 'Z warunkami';
$string['writingcompletiondata'] = 'Zapisywanie danych o ukończeniu.';
$string['xdays'] = '{$a} dni';
$string['yourprogress'] = 'Twój postęp';
