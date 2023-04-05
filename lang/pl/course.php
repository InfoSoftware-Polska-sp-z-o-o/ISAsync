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
 * Strings for component 'course', language 'pl', version '4.0'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Stopka wyboru aktywności';
$string['activitychooseractivefooter_desc'] = 'Wybór aktywności może obsługiwać wtyczki, które dodają elementy do stopki.';
$string['activitychoosercategory'] = 'Wybór aktywności';
$string['activitychooserhidefooter'] = 'Brak stopki';
$string['activitychooserrecommendations'] = 'Zalecane aktywności';
$string['activitychoosersettings'] = 'Ustawienia wyboru aktywności';
$string['activitychoosertabmode'] = 'Zakładki wyboru aktywności';
$string['activitychoosertabmode_desc'] = 'Selektor aktywności umożliwia nauczycielowi łatwe wybieranie aktywności i zasobów do dodania do kursu. To ustawienie określa, które zakładki powinny być w nim wyświetlane. Należy zauważyć, że karta oznaczone gwiazdką jest wyświetlana tylko wtedy, gdy użytkownik oznaczył jedną lub więcej aktywności gwiazdką, a karta z rekomendacjami jest wyświetlana tylko wtedy, gdy administrator witryny określił zalecane aktywności.';
$string['activitychoosertabmodeone'] = 'Oznaczone gwiazdką, Wszystkie, Aktywności, Zasoby, Zalecane';
$string['activitychoosertabmodethree'] = 'Oznaczone gwiazdką, Aktywności, Zasoby, Zalecane';
$string['activitychoosertabmodetwo'] = 'Oznaczone gwiazdką, Wszystkie, Zalecane';
$string['activitydate:closed'] = 'Zamknięto:';
$string['activitydate:closes'] = 'Zamyka się:';
$string['activitydate:opened'] = 'Otwarto:';
$string['activitydate:opens'] = 'Otwiera się:';
$string['aria:coursecategory'] = 'Kategoria kursu';
$string['aria:courseimage'] = 'Obraz kursu';
$string['aria:coursename'] = 'Nazwa kursu';
$string['aria:courseshortname'] = 'Krótka nazwa kursu';
$string['aria:defaulttab'] = 'Domyślne aktywności';
$string['aria:favourite'] = 'Kurs jest oznaczony gwiazdką';
$string['aria:favouritestab'] = 'Aktywności oznaczone gwiazdką';
$string['aria:modulefavourite'] = 'Aktywności oznaczone gwiazdką {$a}';
$string['aria:recommendedtab'] = 'Zalecane aktywności';
$string['browsecourseadminindex'] = 'Przeglądaj administrację kursu za pomocą tego indeksu.';
$string['browsesettingindex'] = 'Przeglądaj ustawienia z tym indeksem.';
$string['completion_automatic:done'] = 'Wykonano:';
$string['completion_automatic:failed'] = 'Nieudane:';
$string['completion_automatic:todo'] = 'Do wykonania:';
$string['completion_manual:aria:done'] = '{$a} jest oznaczone jako wykonane. Naciśnij, aby cofnąć.';
$string['completion_manual:aria:markdone'] = 'Oznacz {$a} jako wykonane';
$string['completion_manual:done'] = 'Wykonano';
$string['completion_manual:markdone'] = 'Oznacz jako wykonane';
$string['completion_setby:auto:done'] = 'Wykonano: {$a->condition} (ustawione przez {$a->setby})';
$string['completion_setby:auto:todo'] = 'Do wykonania:  {$a->condition} (ustawiono przez {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} jest oznaczone przez {$a->setby} jako wykonane. Naciśnij, aby cofnąć.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} jest oznaczona przez {$a->setby} jako niewykonana. Naciśnij, aby oznaczyć jako gotowe.';
$string['completionrequirements'] = 'Wymagania do ukończenia {$a}';
$string['coursealreadyfinished'] = 'Kurs jest już zakończony';
$string['coursecontentnotification'] = 'Wyślij powiadomienie o zmianie treści';
$string['coursecontentnotification_help'] = 'Zaznacz to pole, aby powiadomić uczestników kursu o tej nowej/zmienionej aktywności lub zasobie. Tylko użytkownicy, którzy mają dostęp do aktywności lub zasobu, otrzymają powiadomienie.';
$string['coursecontentnotifnew'] = '{$a->coursename} nowa treść';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> jest nowe w kursie <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Zmień swoje preferencje powiadomień</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} zmiana treści';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> zostało zmienione w kursie <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Zmień swoje preferencje powiadomień</a></p>';
$string['coursenotyetfinished'] = 'Kurs jeszcze się nie zakończył';
$string['coursenotyetstarted'] = 'Kurs jeszcze się nie rozpoczął';
$string['coursetoolong'] = 'Kurs jest za długi';
$string['customfield_islocked'] = 'Zablokowane';
$string['customfield_islocked_help'] = 'Jeśli pole jest zablokowane, tylko użytkownicy z możliwością zmiany zablokowanych pól niestandardowych (domyślnie tylko użytkownicy z domyślną rolą menedżera) będą mogli to zmienić w ustawieniach kursu.';
$string['customfield_notvisible'] = 'Nikt';
$string['customfield_visibility'] = 'Widoczne dla';
$string['customfield_visibility_help'] = 'To ustawienie określa, kto może wyświetlać nazwę i wartość pola niestandardowego na liście kursów lub w dostępnym filtrze pól niestandardowych na pulpicie nawigacyjnym.';
$string['customfield_visibletoall'] = 'Każdy';
$string['customfield_visibletoteachers'] = 'Nauczyciele';
$string['customfieldsettings'] = 'Ogólne ustawienia niestandardowego pola kursu';
$string['downloadcontent'] = 'Uwzględnij w pobieraniu treści kursu';
$string['downloadcontent_help'] = 'Czy ta aktywność lub zasób powinien być zawarty w pliku zip z zawartością kursu, którą można pobrać? Pliki, foldery, strony i etykiety można w pełni pobierać. W przypadku wszystkich innych aktywności i zasobów pobierana jest tylko nazwa i opis. Ta opcja wymaga włączenia pobierania treści kursu w ustawieniach kursu.

To ustawienie nie ma wpływu na pobieranie zawartości aplikacji mobilnej do użytku w trybie offline.';
$string['downloadcourseconfirmation'] = 'Zamierzasz pobrać plik zip z zawartością kursu (z wyłączeniem elementów, których nie można pobrać oraz plików większych niż {$a}).';
$string['downloadcoursecontent'] = 'Pobierz zawartość kursu';
$string['downloadcoursecontent_help'] = 'To ustawienie określa, czy zawartość kursu może być pobierana przez użytkowników z możliwością pobierania zawartości kursu (domyślnie użytkownicy w roli studenta lub nauczyciela).';
$string['enabledownloadcoursecontent'] = 'Włącz opcję pobierania zawartość kursu';
$string['errorendbeforestart'] = 'Data zakończenia ({$a}) jest wcześniejsza niż data rozpoczęcia kursu.';
$string['favourite'] = 'Kurs oznaczony gwiazdką';
$string['gradetopassnotset'] = 'Ten kurs nie ma ustawionej oceny do zaliczenia. Można ją ustawić w pozycji oceny z kursu (konfiguracja dziennika ocen).';
$string['informationformodule'] = 'Informacje o aktywności {$a}';
$string['module'] = 'Aktywność';
$string['noaccesssincestartinfomessage'] = 'Cześć {$a->userfirstname},
<br>wielu studentów zapisanych do kursu {$a->coursename} nie zalogowało się jeszcze do niego.';
$string['nocourseactivity'] = 'Niewystarczająca liczba aktywności w kursie między jego początkiem a końcem';
$string['nocourseendtime'] = 'Kurs nie ma ustawionego czasu zakończenia';
$string['nocoursesections'] = 'Brak sekcji kursu';
$string['nocoursestudents'] = 'Brak studentów';
$string['norecentaccessesinfomessage'] = 'Cześć {$a->userfirstname},
<br>wielu studentów nie uczestniczyło ostatnio w kursie {$a->coursename}.';
$string['noteachinginfomessage'] = 'Cześć {$a->userfirstname},
<br>wykryto kursy z ustawioną datą rozpoczęcia w następnym tygodniu, w których brakuje prowadzących i/lub studentów.';
$string['participantsnavigation'] = 'Pomocnicza nawigacja uczestników.';
$string['privacy:completionpath'] = 'Ukończenie kursu';
$string['privacy:favouritespath'] = 'Informacje o oznaczeniu kursu gwiazdką';
$string['privacy:metadata:activityfavouritessummary'] = 'System kursów zawiera informacje o tym, które pozycje w oknie wyboru aktywności zostały oznaczone przez użytkownika gwiazdką.';
$string['privacy:metadata:completionsummary'] = 'Kurs przechowuje informacje o ukończeniu przez użytkownika.';
$string['privacy:metadata:favouritessummary'] = 'Kurs przechowuje informacje dotyczące oznaczenia gwiazdką przez użytkownika.';
$string['privacy:perpage'] = 'Liczba kursów do wyświetlenia na stronę.';
$string['recommend'] = 'Zalecane';
$string['recommendcheckbox'] = 'Zalecane aktywności: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} po rozpoczęciu kursu';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} przed rozpoczęciem kursu';
$string['searchactivitiesbyname'] = 'Wyszukaj aktywności według nazwy';
$string['searchresults'] = 'Wyniki wyszukiwania: {$a}';
$string['studentsatriskincourse'] = 'Studenci zagrożeni w kursie {$a}';
$string['studentsatriskinfomessage'] = 'Cześć {$a->userfirstname},
<br>uczniowie w kursie {$a->coursename} zostali zidentyfikowani jako zagrożeni.';
$string['submitsearch'] = 'Prześlij wyszukiwanie';
$string['target:coursecompetencies'] = 'Studenci zagrożeni nieosiągnięciem kompetencji przypisanych do kursu';
$string['target:coursecompetencies_help'] = 'Ten cel opisuje, czy student jest zagrożony nieosiągnięciem kompetencji przypisanych do kursu. Ten cel zakłada, że wszystkie kompetencje przypisane do kursu muszą zostać osiągnięte do końca kursu.';
$string['target:coursecompletion'] = 'Studenci zagrożeni niespełnieniem warunków ukończenia kursu';
$string['target:coursecompletion_help'] = 'Ten cel określa, czy student jest zagrożony niespełnieniem warunków ukończenia kursu.';
$string['target:coursedropout'] = 'Studenci zagrożeni porzuceniem nauki';
$string['target:coursedropout_help'] = 'Ten cel określa, czy student jest zagrożony niezaliczeniem kursu.';
$string['target:coursegradetopass'] = 'Studenci zagrożeni nieosiągnięciem minimalnej oceny do zaliczenia kursu';
$string['target:coursegradetopass_help'] = 'Ten cel określa, czy student jest zagrożony nie osiągnięciem minimalnej oceny wymaganej do zaliczenia kursu.';
$string['target:noaccesssincecoursestart'] = 'Studenci, którzy dotąd nie weszli na stronę kursu';
$string['target:noaccesssincecoursestart_help'] = 'Ten cel określa studentów, którzy nigdy nie mieli dostępu do kursu, na który są zapisani.';
$string['target:noaccesssincecoursestartinfo'] = 'Następujący studenci są zapisani na kurs, który się rozpoczął, ale nigdy do niego nie zajrzeli.';
$string['target:norecentaccesses'] = 'Studenci, którzy ostatnio nie zaglądali do kursu';
$string['target:norecentaccesses_help'] = 'Ten cel identyfikuje studentów, którzy nie korzystali z kursu, na który są zapisani, w określonym przedziale czasu analizy (domyślnie w ciągu ostatniego miesiąca).';
$string['target:norecentaccessesinfo'] = 'Następujący studenci nie zaglądali do kursu, na który są zapisani, w ustawionym przedziale czasowym do analizy (domyślnie ostatni miesiąc).';
$string['target:noteachingactivity'] = 'Ryzyko niewystartowania kursów';
$string['target:noteachingactivity_help'] = 'Ten cel określa, czy kursy, które mają się rozpocząć w nadchodzącym tygodniu, będą miały zajęcia dydaktyczne.';
$string['target:noteachingactivityinfo'] = 'Następujące kursy, których czas rozpoczęcia przypada w nadchodzących dniach, mogą się nie rozpocząć z uwagi na brak zapisanych prowadzących i/lub studentów.';
$string['targetlabelstudentcompetenciesno'] = 'Student, który prawdopodobnie osiągnie kompetencje przypisane do kursu';
$string['targetlabelstudentcompetenciesyes'] = 'Student zagrożony nieosiągnięciem kompetencji przypisanych do kursu';
$string['targetlabelstudentcompletionno'] = 'Student, który prawdopodobnie spełni warunki ukończenia kursu';
$string['targetlabelstudentcompletionyes'] = 'Student, który prawdopodobnie nie spełni warunków ukończenia kursu';
$string['targetlabelstudentdropoutno'] = 'Niezagrożone';
$string['targetlabelstudentdropoutyes'] = 'Student zagrożony niezaliczeniem';
$string['targetlabelstudentgradetopassno'] = 'Student, który prawdopodobnie osiągnie minimalną ocenę wymaganą do zaliczenia kursu.';
$string['targetlabelstudentgradetopassyes'] = 'Student zagrożony nie osiągnięciem minimalnej oceny wymaganej do zaliczenia kursu.';
$string['targetlabelteachingno'] = 'Kursy zagrożone nierozpoczęciem';
$string['targetlabelteachingyes'] = 'Nauczyciele, którzy mają dostęp do kursu';
