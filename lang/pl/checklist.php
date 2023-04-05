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
 * Strings for component 'checklist', language 'pl', version '4.0'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Dodaj komentarz';
$string['additem'] = 'Dodaj';
$string['additemalt'] = 'Dodaj nową pozycję do listy';
$string['additemhere'] = 'Wstaw nową pozycję po tej';
$string['addownitems'] = 'Dodaj swoja własną pozycję';
$string['addownitems-stop'] = 'Zakończ dodawanie własnych elementów';
$string['allowmodulelinks'] = 'Zezwól na dodawanie linków';
$string['anygrade'] = 'Dowolna ocena';
$string['anygrouping'] = 'Domyślne grupowanie';
$string['autopopulate'] = 'Pokaż w tworzonej liście moduły dostępne w kursie';
$string['autopopulate_help'] = 'Możliwe jest wysłanie maila informacyjnego, po wypełnieniu listy. E-mail z powiadomieniem może być wysłany: do studenta, który ją wypełnił, do wszystkich nauczycieli w kursie lub do obu tych grup.
Administrator może wpływać na to kto otrzymuje ten email używając właściwości mod:checklist/emailoncomplete - domyślnie wszyscy nauczyciele będą informowani o tym zdarzeniu.';
$string['autoupdate'] = 'Zaznacz kiedy moduły będą ukończone';
$string['autoupdate2'] = 'Zaznaczenie ukończenia kursów lub modułów';
$string['autoupdate2_help'] = 'Automatycznie odznacz pozycje na swojej liście kontrolnej, gdy wykonasz odpowiednie czynności w kursie.<br />
Jeśli śledzenie wypełniania jest włączone, będzie to służyć do zaznaczania pozycji na liście.<br>
W przeciwnym razie " zakończenie" aktywności różnić się będzie w zależności od konkretnej aktywności - "obejrzyj" zasób, "wyślij" quiz lub zadanie, "napisz" na forum lub dołącz do czatu, itp. (aby uzyskać szczegółowe informacje na temat tego, co dokładnie powoduje, że aktywność jest oznaczana jako "zakończona", poproś administratora strony o zajrzenie do pliku "mod/checklist/classes/local/autoupdate.php")<br>
Jeśli element jest powiązany z kursem, a ten kurs ma włączoną opcję ukończenia, to element zostanie zaktualizowany, gdy kurs zostanie oznaczony jako ukończony.';
$string['autoupdate_help'] = 'Automatyczne odznaczanie pozycji na swojej liście, po wykonaniu konkretnej czynności w kursie.<br />
Jeśli śledzenieaktywności jest włączone, zostanie to wykorzystane do zaznaczenia pozycji na liście.<br>
W przeciwnym razie "ukończenie" aktywności różni się w zależności od ustawień aktywności - "obejrzyj" zasób, "wyślij" quiz lub zadanie, "napisz" na forum lub dołącz do czatu itp. (aby uzyskać szczegółowe informacje na temat tego, co dokładnie powoduje, że aktywność jest oznaczana jako "ukończona", poproś administratora strony o sprawdzenie pliku "mod/checklist/classes/local/autoupdate.php")<br>

Przetłumaczono z www.DeepL.com/Translator (wersja darmowa)';
$string['autoupdatenote'] = 'Dotyczy ocen automatycznie zaktualizowanych dla użytkowników w roli studenta. Nie będą wyświetlane aktualizacje dla list przeznaczonych dla użytkowników w roli prowadzącego.';
$string['autoupdatewarning_both'] = 'Na liście znajdują się elementy, które będą aktualizowane automatycznie (wtedy gdy studenci ukończą powiązaną aktywność). Należy pamiętać o tym, że przy ustawieniu "student i nauczyciel" pasek postępu nie będzie zaktualizowany dopóki nauczyciel nie zaakceptuje uzyskanej oceny.';
$string['autoupdatewarning_student'] = 'Na liście znajdują się elementy, które będą aktualizowane automatycznie (wtedy gdy studenci ukończą powiązaną aktywność).';
$string['autoupdatewarning_teacher'] = 'Na tej liście znajdują się pozycje, które będą automatycznie aktualizowane,  gdy tylko uczniowie wykonają odpowiednie zadanie.';
$string['calendardescription'] = 'To wydarzenie zostało dodane do listy: {$a}';
$string['canceledititem'] = 'Anuluj';
$string['changetextcolour'] = 'Następny kolor tekstu';
$string['checkeditemsdeleted'] = 'Odznaczone elementy  zostały elementy';
$string['checklist'] = 'lista';
$string['checklist:addinstance'] = 'Dodaj nową listę';
$string['checklist:edit'] = 'Utwórz i edytuj listę';
$string['checklist:emailoncomplete'] = 'Otrzymywanie wiadomości e-mail dotyczących uzupełnień.';
$string['checklist:preview'] = 'Podgląd listy';
$string['checklist:updatelocked'] = 'Zaktualizuj zablokowane znaczniki listy kontrolnej';
$string['checklist:updateother'] = 'Aktualizacja ocen z list uczniów';
$string['checklist:updateown'] = 'Aktualizuj swoje znaki na liście';
$string['checklist:viewmenteereports'] = 'Zobacz postęp tylko podopiecznych';
$string['checklist:viewreports'] = 'Zobacz postęp studentów';
$string['checklistautoupdate'] = 'Zezwól na automatyczną aktualizację listy';
$string['checklistfor'] = 'Lista dla';
$string['checklistintro'] = 'Wprowadzenie';
$string['checklistsettings'] = 'Ustawienia';
$string['checks'] = 'Pozycje';
$string['choosecourse'] = 'Wybierz kurs...';
$string['comments'] = 'Komentarze';
$string['completiondetail:items'] = 'Odhaczone: {$a}';
$string['completiondetail:percent'] = 'Odhaczone: {$a}%';
$string['completionpercent'] = 'Liczba pozycji, które należy odhaczyć:';
$string['completionpercentgroup'] = 'Wymóg zgłoszenia do sprawdzenia.';
$string['completionpercentgroup_help'] = 'Jeśli wybrano opcję " wartość procentowa pozycji", użytkownik musi odhaczyć co najmniej określoną wartość procentową pozycji listy, aby została ona uznana za "kompletną". Jeśli wybrano "pozycje", użytkownik musi odhaczyć co najmniej tyle pozycji na liście. Uwaga: jeżeli podasz tutaj liczbę pozycji większą niż liczba pozycji na liście kontrolnej, to nigdy nie zostanie ona uznana za kompletną.';
$string['configchecklistautoupdate'] = 'Zanim na to pozwolisz musisz dokonać kilku zmian w kodzie , proszę zobacz mod/checklist/README.txt po więcej informacji';
$string['configshowcompletemymoodle'] = 'Jeśli ta opcja nie jest zaznaczona, wówczas wypełnione listy będą ukryte na stronie "Mój Moodle"';
$string['configshowmymoodle'] = 'Jeśli ta opcja jest odznaczona, zadania z listy kontrolnej (z paskami postępu) nie będą się pojawiać na stronie "Mój Moodle"';
$string['configshowupdateablemymoodle'] = 'Jeśli ta opcja jest zaznaczona, na stronie "Mój Moodle" będą widoczne tylko te listy, które można aktualizować.';
$string['confirmdeleteitem'] = 'Czy na pewno chcesz usunąć tę pozycję z listy?';
$string['deleteitem'] = 'Usuń tę pozycję';
$string['duedatesoncalendar'] = 'Dodaj terminy do kalendarza';
$string['edit'] = 'Edytuj listę';
$string['editchecks'] = 'Edytuj zaznaczenia';
$string['editdatesstart'] = 'Edytuj daty';
$string['editdatesstop'] = 'Zakończ edycję dat';
$string['edititem'] = 'Edytuj tę pozycję';
$string['emailoncomplete'] = 'Powiadom, kiedy lista jest ukończona:';
$string['emailoncomplete_help'] = 'Kiedy lista jest kompletna, może zostać wysłany e-mail z powiadomieniem: do studenta, który ją wypełnił, do wszystkich nauczycieli w kursie lub do obydwu tych grup.
Administrator może kontrolować kto otrzymuje ten email używając właściwości "mod:checklist/emailoncomplete" - domyślnie wszyscy nauczyciele będą otrzymywać te powiadomienie.';
$string['emailoncompletebody'] = 'Użytkownik {$a->user} ukończył listę \'{$a->checklist}\' w kursie \'{$a->coursename}\'
Obejrzyj listę tutaj:';
$string['emailoncompletebodyown'] = 'Ukończyłeś listę \'{$a->checklist}\' w kursie \'{$a->coursename}\'
Obejrzyj listę tutaj:';
$string['emailoncompletesubject'] = 'Użytkownik {$a->user} ukończył listę {$a->checklist}';
$string['emailoncompletesubjectown'] = 'Ukończyłeś listę {$a->checklist}';
$string['enterurl'] = 'Wpisz adres ...';
$string['eventchecklistcomplete'] = 'Lista została wypełniona';
$string['eventeditpageviewed'] = 'Strona edycji';
$string['eventreportviewed'] = 'Wyświetlono sprawozdanie';
$string['eventstudentchecksupdated'] = 'Aktualizacja punktów odznaczonych przez studentów';
$string['eventteacherchecksupdated'] = 'Aktualizacja punktów odznaczonych przez nauczycieli';
$string['export'] = 'Eksportuj pozycje';
$string['forceupdate'] = 'Aktualizacja odznaczonych pozycji dla wszystkich elementów automatycznych';
$string['gradetocomplete'] = 'Ocena do uzupełnienia:';
$string['grouping'] = 'Widoczny dla grupowania';
$string['guestsno'] = 'Nie masz dostępu do tej listy';
$string['headingitem'] = 'Ten element jest nagłówkiem - nie będzie miał pola do zaznaczania obok siebie.';
$string['import'] = 'Importuj pozycje';
$string['importfile'] = 'Wybierz plik do importu';
$string['importfromcourse'] = 'Cały kurs';
$string['importfromsection'] = 'Bieżąca sekcja';
$string['indentitem'] = 'Wcięcie elementu';
$string['itemcomplete'] = 'Zakończony/e';
$string['items'] = 'Pozycje listy';
$string['itemstype'] = 'Elementy';
$string['linkcourses'] = 'Zezwalaj na łączenie elementów z kursami';
$string['linkcourses_desc'] = 'Gdy opcja ta jest włączona, pozycje listy mogą być powiązane z kursami w Moodle - są oznaczane jako wypełnione, gdy powiązany z nimi kurs zostanie ukończony. Włączenie tej opcji może mieć pewien wpływ na wydajność podczas edycji pozycji listy kontrolnej na stronach z dużą liczbą kursów.';
$string['linkto'] = 'Link do';
$string['linktocourse'] = 'Kurs powiązany z tą elementem';
$string['linktomodule'] = 'Link do tego modułu';
$string['linktourl'] = 'Link powiązany z tym elementem';
$string['lockteachermarks'] = 'Zablokuj oceny prowadzących';
$string['lockteachermarks_help'] = 'Gdy to ustawienie jest włączone, nauczyciel, który raz zapisał ocenę "Tak", nie będzie mógł jej zmienić. Użytkownicy z uprawnieniami "mod/checklist:updatelocked" nadal będą mogli zmienić ocenę.';
$string['lockteachermarkswarning'] = 'Uwaga! Jeśli przy wybranej pozycji zaznaczysz opcję "Tak" a następnie klikniesz klawisz "Zapisz" - stracisz możliwość wprowadzania zmian dotyczących tej pozycji.';
$string['modulename'] = 'Lista';
$string['modulename_help'] = 'Moduł listy zadań pozwala nauczycielowi na stworzenie listy  prac uczniów do wypełnienia.';
$string['modulenameplural'] = 'Listy';
$string['moveitemdown'] = 'Przesuń pozycję w dół';
$string['moveitemup'] = 'Przesuń pozycję w górę';
$string['noitems'] = 'Brak pozycji na liście';
$string['onlyenrolled'] = 'Tylko aktywni użytkownicy';
$string['onlyenrolleddesc'] = 'Gdy  ta opcja jest zaznaczona, tylko użytkownicy z aktywnymi zapisami są pokazywani na listach kontrolnych (odznacz, by wrócić do ustawień domyślnych)';
$string['openlinkinnewwindow'] = 'Otworzyć w nowym oknie?';
$string['optionalhide'] = 'Usuń pozycje opcjonalne';
$string['optionalitem'] = 'Ta pozycja jest opcjonalna';
$string['optionalshow'] = 'Pokaż pozycje opcjonalne';
$string['or'] = 'lub';
$string['percent'] = 'Procent pozycji';
$string['percentcomplete'] = 'Pozycja wymagana';
$string['percentcompleteall'] = 'Wszystkie pozycje';
$string['pluginadministration'] = 'Administracja listą';
$string['pluginname'] = 'Lista';
$string['preview'] = 'Podgląd';
$string['privacy:metadata:checklist_check'] = 'Informacja o tym, które pozycje z danej listy zostały sprawdzone przez użytkownika (lub przez nauczyciela) na danej liście kontrolnej';
$string['privacy:metadata:checklist_check:item'] = 'Identyfikator pozycji listy, która została sprawdzona.';
$string['privacy:metadata:checklist_check:teacherid'] = 'Identyfikator nauczyciela, który ostatnio aktualizował status tego elementu.';
$string['privacy:metadata:checklist_check:teachermark'] = 'Status pozycji użytkownika, nadany przez nauczyciela';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'Czas, kiedy nauczyciel po raz ostatni zmieniał status pozycji';
$string['privacy:metadata:checklist_check:userid'] = 'Identyfikator użytkownika, który zaznaczył dany element (lub, użytkownika, dla którego został on zaznaczony)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'Czas, w którym użytkownik ostatnio odznaczył element (0, jeśli element jest aktualnie odznaczony)';
$string['privacy:metadata:checklist_comment'] = 'Informacje o uwagach, jakie nauczyciel wyraził na temat postępów użytkownika na danej liście';
$string['privacy:metadata:checklist_comment:commentby'] = 'ID użytkownika (nauczyciela), który zamieścił ten komentarz';
$string['privacy:metadata:checklist_comment:itemid'] = 'Identyfikator pozycji listy, do której odnosi się komentarz';
$string['privacy:metadata:checklist_comment:text'] = 'Komentarz:';
$string['privacy:metadata:checklist_comment:userid'] = 'ID użytkownika (studenta), do którego odnosi się ten komentarz';
$string['privacy:metadata:checklist_item'] = 'Informacja o prywatnych elementach, które użytkownik dodał do danej listy kontrolnej';
$string['privacy:metadata:checklist_item:checklist'] = 'ID listy kontrolnej, do której został dodany ten element prywatny';
$string['privacy:metadata:checklist_item:displaytext'] = 'Tekst elementu prywatnej listy kontrolnej';
$string['privacy:metadata:checklist_item:userid'] = 'ID użytkownika, który stworzył ten element prywatny (0 dla elementów tworzonych przez nauczyciela i widocznych dla wszystkich użytkowników)';
$string['progress'] = 'Postęp';
$string['removeauto'] = 'Usuń elementy będące modułami kursu';
$string['report'] = 'Wyświetl postęp';
$string['reporttablesummary'] = 'Tabela pokazujące pozycje z listy, które zostały wypełnione przez każdego ucznia';
$string['requireditem'] = 'Ta pozycja jest wymagana - musi być ukończona';
$string['resetchecklistprogress'] = 'Zresetuj listy kontrolną i pozycje zaznaczone przez użytkownika';
$string['savechecks'] = 'Zapisz';
$string['showcompletemymoodle'] = 'Pokauj wypełnione listy na stronie \'My Moodle\'.';
$string['showfulldetails'] = 'Pokaż szczegóły';
$string['showhidechecked'] = 'Pokaż/ukryj wybrane pozycje';
$string['showmymoodle'] = 'Pokaż listy na mojej stronie domowej';
$string['showprogressbars'] = 'Pokaż paski postępu';
$string['showupdateablemymoodle'] = 'Na stronie \'Mój Moodle\' pokaż tylko listy do zaktualizowania';
$string['teacheralongsidecheck'] = 'Student i nauczyciel';
$string['teachercomments'] = 'Nauczyciele mogą dodawać komentarze';
$string['teacherdate'] = 'Data ostatniej aktualizacji wykonanej przez nauczyciela';
$string['teacheredit'] = 'Zaktualizowane przez';
$string['teacherid'] = 'Nauczyciel, który ostatnio aktualizował ocenę';
$string['teachermarkno'] = 'Nauczyciel stwierdza, że NIE ukończyłeś tego zadania';
$string['teachermarkundecided'] = 'Nauczyciel jeszcze tego nie oznaczył';
$string['teachermarkyes'] = 'Nauczyciel informuje, że ukończyłeś to zadanie.';
$string['teachernoteditcheck'] = 'Tylko student';
$string['teacheroverwritecheck'] = 'Tylko nauczyciel';
$string['theme'] = 'Szata graficzna listy';
$string['togglecolumn'] = 'Przełącz kolumny';
$string['toggledates'] = 'Przełącz nazwy i daty';
$string['togglerow'] = 'Przełącz wiersze';
$string['unindentitem'] = 'Wycofaj wcięcie elementu';
$string['updatecompletescore'] = 'Zapisz oceny końcowe.';
$string['updateitem'] = 'Aktualizuj';
$string['userdate'] = 'Data ostatniej aktualizacji wykonanej przez użytkownika';
$string['useritemsallowed'] = 'Użytkownik może dodawać własne elementy';
$string['useritemsdeleted'] = 'Pozycje użytkownika usunięte';
$string['view'] = 'Zobacz listę';
$string['viewall'] = 'Zobacz wszystkich studentów';
$string['viewallcancel'] = 'Anuluj';
$string['viewallsave'] = 'Zapisz';
$string['viewsinglereport'] = 'Zobacz postępy tego użytkownika';
$string['viewsingleupdate'] = 'Zaktualizuj postępy dla tego użytkownika';
$string['yesnooverride'] = 'Tak, nie można nadpisać';
$string['yesoverride'] = 'Tak, można nadpisać';
