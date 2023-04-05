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
 * Strings for component 'attendance', language 'pl', version '4.0'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'N';
$string['Afull'] = 'Nieobecny';
$string['Eacronym'] = 'U';
$string['Efull'] = 'Usprawiedliwiony';
$string['Lacronym'] = 'S';
$string['Lfull'] = 'Spóźnienie';
$string['Pacronym'] = 'O';
$string['Pfull'] = 'Obecny';
$string['absenteereport'] = 'Raport nieobecności';
$string['acronym'] = 'Skrót';
$string['add'] = 'Dodaj';
$string['addedrecip'] = 'Dodano {$a} nowego odbiorcę';
$string['addedrecips'] = 'Dodano {$a} nowych odbiorców';
$string['addmultiplesessions'] = 'Dodaj sesje wielokrotne';
$string['addsession'] = 'Dodaj sesję';
$string['adduser'] = 'Dodaj użytkownika';
$string['addwarning'] = 'Dodaj ostrzeżenie';
$string['all'] = 'Wszystkie';
$string['allcourses'] = 'Wszystkie kursy';
$string['allpast'] = 'Wszystkie przeszłe';
$string['allsessions'] = 'Wszystkie sesje';
$string['allsessionstotals'] = 'Podsumowanie dla wybranych sesji';
$string['attendance:addinstance'] = 'Dodaj nową frekwencję';
$string['attendance:canbelisted'] = 'Widoczny w liście obecności';
$string['attendance:changeattendances'] = 'Zmiana obecności';
$string['attendance:changepreferences'] = 'Zmiana ustawień';
$string['attendance:export'] = 'Eksport raportów';
$string['attendance:manageattendances'] = 'Zarządzaj frekwencją';
$string['attendance:managetemporaryusers'] = 'Zarządzaj uczestnikami tymczasowymi';
$string['attendance:takeattendances'] = 'Rejestrowanie obecności';
$string['attendance:view'] = 'Przeglądanie obecności';
$string['attendance:viewreports'] = 'Przeglądanie raportów';
$string['attendance:viewsummaryreports'] = 'Zobacz raporty z podsumowaniem kursu';
$string['attendance:warningemails'] = 'Pozwala subskrybować wiadomości e-mail o nieobecnych użytkownikach';
$string['attendance_already_submitted'] = 'Twoja frekwencja została już zarejestrowana.';
$string['attendance_no_status'] = 'Brak prawidłowego statusu - może być już za późno, aby zarejestrować obecność.';
$string['attendancedata'] = 'Data frekwencji';
$string['attendancefile'] = 'Plik frekwencji (format csv)';
$string['attendancefile_help'] = 'Plik musi być plikiem CSV z wierszem nagłówka i polami do identyfikacji użytkownika oraz odnotowanym czasem obecności np. (e-mail,czas sprawdzenia) lub (nazwa użytkownika,czas)';
$string['attendancegrade'] = 'Ocena frekfencji';
$string['attendancenotset'] = 'Należy wskazać swoją obecność';
$string['attendancenotstarted'] = 'Frekwencja nie została uruchomiona dla tego kursu';
$string['attendancepercent'] = 'Procent frekwencji';
$string['attendancereport'] = 'Raport frekwencji';
$string['attendanceslogged'] = 'Zapisane obecności';
$string['attendancestaken'] = 'Odbyte obecności';
$string['attendancesuccess'] = 'Frekwencja została poprawnie dodana';
$string['attendanceupdated'] = 'Frekwencja została zaktualizowana';
$string['attforblockdirstillexists'] = 'Stary katalog mod/attforblock nadal istnieje - należy usunąć ten katalog na serwerze przed uruchomieniem tej aktualizacji.';
$string['attrecords'] = 'Dane o obecnościach';
$string['autoassignstatus'] = 'Automatycznie wybierz najwyższy dostępny status';
$string['autoassignstatus_help'] = 'Jeśli ta opcja zostanie wybrana, studenci automatycznie otrzymają najwyższą dostępną ocenę.';
$string['automark'] = 'Automatyczne oznaczanie';
$string['automark_help'] = 'Umożliwia automatyczne oznaczanie.
Jeśli "Tak" uczniowie zostaną automatycznie oznaczeni w zależności od ich pierwszego dostępu do kursu.
Jeśli "Oznacz jako nieoznaczone na koniec zajęć", wszyscy uczniowie, którzy nie zaznaczyli swojej obecności, zostaną przełączeni na wybrany stan nieoznaczony.';
$string['automarkall'] = 'Tak';
$string['automarkclose'] = 'Oznacz jako nieoznaczone na koniec sesji';
$string['automarktask'] = 'Sprawdź obecności na sesjach wymagających automatycznego oznaczania';
$string['autorecorded'] = 'system automatycznego oznaczania';
$string['averageattendance'] = 'Średnia frekwencja';
$string['averageattendancegraded'] = 'Średnia frekwencja';
$string['backtoparticipants'] = 'Powrót do listy uczestników';
$string['below'] = 'Poniżej {$a}%';
$string['calclose'] = 'Zamknij';
$string['calendarevent'] = 'Utwórz wydarzenie w kalendarzu dla sesji';
$string['calendarevent_help'] = 'Jeśli ta opcja jest włączona, dla tej sesji zostanie utworzone zdarzenie w kalendarzu.
Jeśli opcja jest wyłączona, wszelkie istniejące wydarzenia w kalendarzu dla tej sesji zostaną usunięte.';
$string['caleventcreated'] = 'Zdarzenie kalendarza dla sesji zostało pomyślnie utworzone';
$string['caleventdeleted'] = 'Zdarzenie kalendarza dla sesji zostało pomyślnie usunięte';
$string['calmonths'] = 'Styczeń,Luty,Marzec,Kwiecień,Maj,Czerwiec,Lipiec,Sierpień,Wrzesień,Październik,Listopad,Grudzień';
$string['calshow'] = 'Wybierz datę';
$string['calweekdays'] = 'Ni,Pn,Wt,Śr,Cz,Pt,So';
$string['cannottakeforgroup'] = 'Nie możesz zarejestrować obecności dla grupy "{$a}"';
$string['cantaddstatus'] = 'Podczas dodawania nowego statusu musisz ustawić akronim i opis.';
$string['categoryreport'] = 'Raport kategorii kursu';
$string['changeattendance'] = 'Zmień frekwencję';
$string['changeduration'] = 'Zmień czas trwania';
$string['changesession'] = 'Zmień sesję';
$string['checkweekdays'] = 'Wybierz dni tygodnia, które mieszczą się w wybranym zakresie dat sesji.';
$string['closed'] = 'Ta sesja nie jest obecnie dostępna do samodzielnego oznaczenia';
$string['column'] = 'kolumna';
$string['columnmap'] = 'Mapowanie kolumn';
$string['columnmap_help'] = 'Dla każdego z przedstawionych pól wybierz odpowiednią kolumnę w pliku csv.';
$string['columns'] = 'kolumny';
$string['commonsession'] = 'Wszyscy studenci';
$string['commonsessions'] = 'Wspólny';
$string['confirm'] = 'Potwierdź';
$string['confirmcolumnmappings'] = 'Potwierdź mapowania kolumn';
$string['confirmdeletehiddensessions'] = 'Czy na pewno chcesz usunąć {$a->count} sesji zaplanowanych przed datą rozpoczęcia kursu ({$a->date})?';
$string['confirmdeleteuser'] = 'Czy na pewno chcesz usunąć użytkownika \'{$a->fullname}\' ({$a->email})?<br/>Wszystkie jego wpisy obecności zostaną trwale usunięte.';
$string['copyfrom'] = 'Kopiuj dane o obecnościach z';
$string['countofselected'] = 'Policz z wybranych';
$string['course'] = 'Kurs';
$string['coursemessage'] = 'Wiadomość do użytkowników kursu';
$string['courseshortname'] = 'Krótka nazwa kursu';
$string['coursesummary'] = 'Streszczenie podsumowania kursu';
$string['createmultiplesessions'] = 'Utwórz sesję wielokrotne';
$string['createmultiplesessions_help'] = 'Ta funkcja pozwala na utworzenie wielu terminów w jednym kroku.

  * <strong>Data rozpoczęcia spotkań</strong>: Wskaż datę rozpoczęcia kursu (pierwszy dzień zajęć).
  * <strong>Data zakończenia spotkań</strong>: Wskaż ostatni dzień zajęć (ostatni dzień rejestrowania obecności).
  * <strong>Dni spotkań</strong>: Wskaż dni tygodnia, w których odbywają się zajęcia (na przykład Poniedziałek/Środa/Piątek).
  * <strong>Częstotliwość</strong>: Ustawienie częstotliwości. Jeśli zajęcia odbywają się co tydzień, wskaż 1; jeśli odbywają się co dwa tygodnie, wskaż 2; jeśli co trzy tygodnie, wskaż 3; itd.';
$string['createonesession'] = 'Utwórz jedną sesję dla kursu';
$string['csvdelimiter'] = 'Separator CSV';
$string['currentlyselectedusers'] = 'Aktualnie wybrani użytkownicy';
$string['customexportfields'] = 'Eksportuj niestandardowe pola profilu użytkownika';
$string['customexportfields_help'] = 'Dodatkowe niestandardowe pola profilu użytkownika do wyeksponowania w raporcie.';
$string['date'] = 'Data';
$string['days'] = 'Dni';
$string['defaultdisplaymode'] = 'Domyślny tryb wyświetlania';
$string['defaults'] = 'Domyślne';
$string['defaultsessionsettings'] = 'Domyślne ustawienia sesji';
$string['defaultsessionsettings_help'] = 'Te ustawienia definiują wartości domyślne dla wszystkich nowych sesji';
$string['defaultsettings'] = 'Domyślne ustawienia frekwencji';
$string['defaultsettings_help'] = 'Te ustawienia definiują wartości domyślne dla wszystkich nowych obecności';
$string['defaultstatus'] = 'Domyślny zestaw statusów';
$string['defaultsubnet'] = 'Domyślny adres sieciowy';
$string['defaultsubnet_help'] = 'Rejestrowanie obecności może być ograniczone do określonych podsieci poprzez określenie rozdzielonej przecinkami listy częściowych lub pełnych adresów IP. Jest to domyślna wartość używana podczas tworzenia nowych sesji.';
$string['defaultview'] = 'Domyślny widok przy logowaniu';
$string['defaultview_desc'] = 'Jest to domyślny widok wyświetlany prowadzącemu przy pierwszym logowaniu.';
$string['defaultwarnings'] = 'Domyślny zestaw ostrzeżeń';
$string['defaultwarningsettings'] = 'Domyślne ustawienia ostrzeżeń';
$string['defaultwarningsettings_help'] = 'Te ustawienia definiują ustawienia domyślne dla wszystkich nowych ostrzeżeń';
$string['delete'] = 'Usuń';
$string['deletecheckfull'] = 'Czy na pewno chcesz całkowicie usunąć {$a}, w tym wszystkie dane użytkownika?';
$string['deletedgroup'] = 'Grupa powiązana z tą sesją została usunięta';
$string['deletehiddensessions'] = 'Usuń wszystkie ukryte sesje';
$string['deletelogs'] = 'Usuń dane frekwencji';
$string['deleteselected'] = 'Usuń zaznaczone';
$string['deletesession'] = 'Usuń sesję';
$string['deletesessions'] = 'Usuń wszystkie sesje';
$string['deleteuser'] = 'Usuń użytkownika';
$string['deletewarningconfirm'] = 'Czy na pewno chcesz usunąć to ostrzeżenie?';
$string['deletingsession'] = 'Usuwanie sesji na kurs';
$string['deletingstatus'] = 'Usuwanie statusu dla kursu';
$string['description'] = 'Opis';
$string['display'] = 'Wyświetl';
$string['displaymode'] = 'Tryb wyświetlania';
$string['donotusepaging'] = 'Bez stronicowania';
$string['downloadexcel'] = 'Pobierz w formacie Excel';
$string['downloadooo'] = 'Pobierz w formacie OpenOffice';
$string['downloadtext'] = 'Pobierz w formacie tekstowym';
$string['duration'] = 'Czas trwania';
$string['editsession'] = 'Edytuj sesję';
$string['edituser'] = 'Edytuj użytkownika';
$string['emailcontent'] = 'Treść wiadomości e-mail';
$string['emailcontent_default'] = 'Witaj %userfirstname%,
Twoja frekwencja w %coursename% %attendancename% spadła poniżej %warningpercent% i wynosi obecnie %percent% - mamy nadzieję, że wszystko w porządku!

Aby jak najlepiej wykorzystać ten kurs, powinieneś poprawić swoją frekwencję. Daj znać, jeśli potrzebujesz pomocy.';
$string['emailcontent_help'] = 'Gdy ostrzeżenie zostanie wysłane do studenta, pobiera treść wiadomości e-mail z tego pola. Można używać następujących symboli wieloznacznych:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Temat wiadomości e-mail';
$string['emailsubject_default'] = 'Ostrzeżenie dotyczące frekwencji';
$string['emailsubject_help'] = 'Jeśli ostrzeżenie jest wysyłane do studenta, bierze temat wiadomości e-mail z tego pola.';
$string['emailuser'] = 'Wyślij e-mail do użytkownika';
$string['emailuser_help'] = 'Jeśli zaznaczone, ostrzeżenie zostanie wysłane do studenta.';
$string['emptyacronym'] = 'Puste akronimy są niedozwolone. Stan nie został zaktualizowany.';
$string['emptydescription'] = 'Puste opisy są niedozwolone. Stan nie został zaktualizowany.';
$string['enablecalendar'] = 'Twórz wydarzenia kalendarza';
$string['enablecalendar_desc'] = 'Jeśli ta opcja jest włączona, dla każdej sesji zostanie utworzone zdarzenie w kalendarzu. Po zmianie tego ustawienia należy uruchomić resetowanie raportu kalendarza.';
$string['enablewarnings'] = 'Włącz ostrzeżenia';
$string['enablewarnings_desc'] = 'Pozwala to na zdefiniowanie zestawu ostrzeżeń dotyczących obecności i powiadomień e-mail dla użytkowników, gdy poziom obecności spadnie poniżej skonfigurowanego progu.<br/><strong>OSTRZEŻENIE: Jest to nowa funkcja i nie została dokładnie przetestowana. Używaj jej na własną odpowiedzialność i przekaż opinię na forach Moodle, jeśli uważasz, że działa dobrze.</strong>';
$string['encoding'] = 'Kodowanie';
$string['encoding_help'] = 'Odnosi się to do rodzaju kodowania kodu kreskowego używanego na legitymacji studenckiej. Typowe typy schematów kodowania kodów kreskowych to Code-39, Code-128 i UPC-A.';
$string['endofperiod'] = 'Koniec okresu';
$string['endtime'] = 'Czas zakończenia sesji';
$string['enrolmentend'] = 'Zapisywanie użytkowników kończy się {$a}';
$string['enrolmentstart'] = 'Zapisywanie użytkowników rozpoczyna się {$a}';
$string['enrolmentsuspended'] = 'Uczestnictwo zawieszone';
$string['enterpassword'] = 'Wpisz hasło';
$string['error:coursehasnoattendance'] = 'Nie ma żadnych frekwencji w kursie o krótkiej nazwie {$a}.';
$string['error:coursenotfound'] = 'Nie można znaleźć kursu o krótkiej nazwie {$a}.';
$string['error:qrcode'] = 'Opcja "Zezwól studentom na rejestrowanie własnej obecności" musi być włączona, aby korzystać z kodu QR! Pomijam.';
$string['error:sessioncourseinvalid'] = 'Sesja kursu jest nieprawidłowa! Pomijam.';
$string['error:sessiondateinvalid'] = 'Data sesji jest nieprawidłowa! Pomijam.';
$string['error:sessionendinvalid'] = 'Data zakończenia sesji jest nieprawidłowa! Pomijam.';
$string['error:sessionstartinvalid'] = 'Czas rozpoczęcia sesji jest nieprawidłowy! Pomijam.';
$string['error:userduplicate'] = 'Użytkownik {$a} został znaleziony dwukrotnie podczas importu. Proszę podać tylko jeden rekord dla użytkownika.';
$string['errorgroupsnotselected'] = 'Wybierz jedną lub więcej grup';
$string['errorinaddingsession'] = 'Błąd podczas dodawania sesji';
$string['erroringeneratingsessions'] = 'Błąd podczas generowania sesji';
$string['eventdurationupdated'] = 'Zaktualizowana długość zajęć';
$string['eventreportviewed'] = 'Wyświetlony raport obecności';
$string['eventscreated'] = 'Utworzono wydarzenia kalendarza';
$string['eventsdeleted'] = 'Wydarzenia w kalendarzu zostały usunięte';
$string['eventsessionadded'] = 'Dodany termin';
$string['eventsessiondeleted'] = 'Usunięty termin';
$string['eventsessionipshared'] = 'Konfilkt IP podczas samodzielnej rejestracji frekwencji';
$string['eventsessionsimported'] = 'Sesje zaimportowano';
$string['eventsessionupdated'] = 'Zaktualizowany termin';
$string['eventstatusadded'] = 'Dodany status';
$string['eventstatusupdated'] = 'Zaktualizowany status';
$string['eventstudentattendancesessionsupdated'] = 'Zaktualizowano raport sesji';
$string['eventstudentattendancesessionsviewed'] = 'Wyświetlono raport sesji';
$string['eventtaken'] = 'Zarejestrowana obecność';
$string['eventtakenbystudent'] = 'Zarejestrowana obecność przez studenta';
$string['export'] = 'Eksport';
$string['extrarestrictions'] = 'Dodatkowe ograniczenia';
$string['formattexttype'] = 'Formatowanie';
$string['from'] = 'od:';
$string['gradebookexplanation'] = 'Ocena w dzienniku ocen';
$string['gradebookexplanation_help'] = 'Moduł listy obecności wyświetla aktualną ocenę za obecność bazując na liczbie punktów uzyskanych do tej pory i liczbie punktów możliwych do uzyskania w tym okresie. Nie są brane pod uwagę spotkania, które się jeszcze nie odbyły. W dzienniku ocena za obecność bazuje na aktualnym procencie obecności i liczbie punktów, które można uzyskać w trakcie trwania całego kursu, włączając w to spotkania, które się jeszcze nie odbyły. W ten sposób oceny za obecność wyświetlane w module listy obecności oraz w dzienniku ocen mogą mieć różną liczbę punktów, ale stanowią ten sam procent całości punktów.

Na przykład, jeśli po uzyskaniu do tej pory 8 z 10 punktów (80% obecności) oraz przy ocenie za obecność w kursie w wysokości 50 punktów, moduł listy obecności będzie wyświetlać 8/10 zaś w dzienniku ocen będzie to 40/50. Faktycznie uczestnik nie uzyskał jeszcze 40 punktów, ale 40 jest wartością punktową równoważną aktualnemu procentowi obecności wynoszącemu 80%. Liczba punktów uzyskanych w liście obecności nigdy się nie zmniejsza, ponieważ bazuje jedynie na obecności do tej pory. Jednak liczba punktów za obecność w dzienniku ocen może się zwiększać lub zmniejszać zależnie od rejestrowanych obecności, ponieważ bazuje na obecnościach w całym kursie.';
$string['graded'] = 'Oceniane sesje';
$string['gridcolumns'] = 'Kolumny siatki';
$string['group'] = 'Grupa';
$string['groups'] = 'Grupy';
$string['groupsession'] = 'Grupa';
$string['groupsessionsby'] = 'Sesje grupowe wg.';
$string['hiddensessions'] = 'Ukryte sesje';
$string['hiddensessions_help'] = 'Termin jest ukrywany jeśli data rozpoczęcia kursu jest starsza niż data terminu. Po zmianie daty rozpoczęcia kursu ukryte terminy będą pokazywane.

Można użyć tej funkcji aby ukryć starsze terminy zamiast je usuwać. Uwaga: tylko widoczne terminy są pokazywane w Dzienniku ocen.';
$string['hiddensessionsdeleted'] = 'Wszystkie ukryte sesje zostały usunięte';
$string['hideextrauserdetails'] = 'Ukryj dodatkowe informacje o użytkowniku';
$string['hidensessiondetails'] = 'Ukryj szczegóły sesji';
$string['identifyby'] = 'Identyfikacja studenta po';
$string['import'] = 'Importuj';
$string['importfile'] = 'Importuj plik';
$string['importfile_help'] = 'Importuje plik';
$string['importsessions'] = 'Import sesji';
$string['importstatus'] = 'Pole statusu';
$string['includeabsentee'] = 'Uwzględnij sesję podczas obliczania raportu nieobecności';
$string['includeabsentee_help'] = 'Jeśli zaznaczone, ta sesja zostanie uwzględniona w obliczeniach raportu nieobecności.';
$string['includeall'] = 'Wybierz wszystkie sesje';
$string['includedescription'] = 'Dołącz opis sesji';
$string['includenottaken'] = 'Dołącz nadchodzące terminy';
$string['includeqrcode'] = 'Dołącz kod QR';
$string['includeremarks'] = 'Dołącz uwagi';
$string['incorrectpassword'] = 'Podałeś nieprawidłowe hasło i twoja obecność nie została zarejestrowana. Wprowadź poprawne hasło.';
$string['incorrectpasswordshort'] = 'Nieprawidłowe hasło, frekwencja nie została zarejestrowana.';
$string['indetail'] = 'Szczegóły...';
$string['indicator:cognitivedepth_help'] = 'Wskaźnik ten opiera się na głębokości poznawczej osiągniętej przez ucznia w ramach aktywności dotyczącej obecności.';
$string['indicator:cognitivedepthdef_help'] = 'Uczestnik osiągnął ten procent zaangażowania poznawczego oferowanego przez obecność w tym przedziale analizy (poziomy = brak widoku, widok)';
$string['indicator:socialbreadth_help'] = 'Ten wskaźnik oparty jest na zasięgu społecznym osiągniętym przez ucznia w ramach aktywności dotyczącej obecności.';
$string['indicator:socialbreadthdef_help'] = 'Uczestnik osiągnął ten procent zaangażowania społecznego oferowanego przez obecność w tym przedziale analizy (poziomy = brak uczestnictwa, sam uczestnik)';
$string['invalidaction'] = 'Musisz wybrać akcję';
$string['invalidemails'] = 'Musisz podać adresy istniejących kont użytkowników. Nie znaleziono: {$a}';
$string['invalidimportfile'] = 'Format pliku jest nieprawidłowy.';
$string['invalidsessionenddate'] = 'Ta data nie może być wcześniejsza niż data sesji';
$string['invalidsessionendtime'] = 'Czas zakończenia musi być późniejszy niż czas rozpoczęcia';
$string['invalidstatus'] = 'Wybrałeś nieprawidłowy stan, spróbuj ponownie';
$string['iptimemissing'] = 'Niepoprawna liczba minut do zwolnienia';
$string['jumpto'] = 'Przeskocz do';
$string['keepsearching'] = 'Szukaj dalej';
$string['marksessionimportcsvhelp'] = 'Formularz ten umożliwia wgranie pliku csv zawierającego identyfikator użytkownika i status - polem statusu może być akronim statusu lub godzina zarejestrowania obecności dla tego użytkownika. Jeśli wartość czasu zostanie przekroczona, system spróbuje przypisać wartość statusu z najwyższą dostępną w tym czasie oceną.';
$string['maxpossible'] = 'Maksymalne możliwe';
$string['maxpossible_help'] = 'Pokazuje wynik, jaki każdy użytkownik może osiągnąć, jeśli uzyska maksymalną liczbę punktów w każdej sesji, która nie została jeszcze podjęta (przeszłe i przyszłe):
    <ul>
    <li><strong>Punkty</strong>: maksymalna liczba punktów, które każdy użytkownik może osiągnąć przez wszystkie sesje.</li>
    <li><strong>Procenty</strong>: maksymalny procent, które każdy użytkownik może osiągnąć przez wszystkie sesje.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Maksymalny możliwy procent';
$string['maxpossiblepoints'] = 'Maksymalna możliwa liczba punktów';
$string['maxwarn'] = 'Maksymalna liczba ostrzeżeń e-mail';
$string['maxwarn_help'] = 'Maksymalna liczba wysyłanych ostrzeżeń (wysyłane jest tylko jedno ostrzeżenie na sesję)';
$string['mergeuser'] = 'Scal użytkownika';
$string['mobilesessionfrom'] = 'Pokaż wcześniejsze sesje';
$string['mobilesessionfrom_help'] = 'Umożliwia ograniczenie listy sesji podczas oznaczania w aplikacji - pokazuje tylko sesje, które rozpoczęły się od tej wartości';
$string['mobilesessionto'] = 'Pokaż przyszłe sesje';
$string['mobilesessionto_help'] = 'Umożliwia ograniczenie listy sesji do wyświetlania tylko niewielkiej liczby przyszłych sesji.';
$string['mobilesettings'] = 'Ustawienia aplikacji mobilnej';
$string['mobilesettings_help'] = 'To ustawienie kontroluje zachowanie aplikacji mobilnej Moodle';
$string['modulename'] = 'Frekwencja';
$string['modulename_help'] = 'Moduł listy obecności umożliwia prowadzącemu sprawdzanie obecności podczas trwania zajęć. Studenci mają wgląd w informacje o swoich obecnościach.
Prowadzący może utworzyć wiele terminów i oznaczyć status obecności jako: "Obecny", "Nieobecny", "Spóźniony" lub "Usprawiedliwiony". Może również wprowadzić własne statusy - według indywidualnych potrzeb.
W ramach modułu dostępne są raporty dotyczące wszystkich użytkowników jak również z możliwością wyboru obecności danego studenta.';
$string['modulenameplural'] = 'Frekwencje';
$string['months'] = 'Miesiące';
$string['moreattendance'] = 'Obecność została zarejestrowana dla tej strony';
$string['moveleft'] = 'Przesuń w lewo';
$string['moveright'] = 'Przesuń w prawo';
$string['multisessionexpanded'] = 'Wiele sesji rozwinięte';
$string['multisessionexpanded_desc'] = 'Pokaż ustawienia "Wiele sesji" jako domyślnie rozwinięte podczas tworzenia nowych sesji.';
$string['mustselectusers'] = 'Musisz wybrać użytkowników do eksportu';
$string['newdate'] = 'Nowa data';
$string['newduration'] = 'Nowy czas';
$string['newstatusset'] = 'Nowy zestaw statusów';
$string['noabsentstatusset'] = 'Używany zestaw statusu nie ma statusu, z którego można korzystać, gdy nie jest oznaczony.';
$string['noattendanceusers'] = 'Nie można eksportować żadnych danych, ponieważ nie ma studentów zapisanych na kurs.';
$string['noattforuser'] = 'Brak istniejących zapisów dla uzytkownika';
$string['noautomark'] = 'Wyłączone';
$string['nodescription'] = 'Regularne zajęcia';
$string['noeventstoreset'] = 'Brak wydarzeń w kalendarzu wymagających aktualizacji.';
$string['nogroups'] = 'Ta aktywność została skonfigurowana do korzystania z grup, ale w kursie nie ma grup.';
$string['noguest'] = 'Goście nie mogą zobaczyć frekwencji';
$string['noofdaysabsent'] = 'Brak z nieobecnościami';
$string['noofdaysexcused'] = 'Brak dni nieusprawiedliwionych';
$string['noofdayslate'] = 'Brak dni ze spóźnieniami';
$string['noofdayspresent'] = 'Brak dni z obecnościami';
$string['nosessiondayselected'] = 'Nie wybrano dnia w którym odbywają się zajęcia';
$string['nosessionexists'] = 'Brak terminów dla tego przedmiotu';
$string['nosessionsselected'] = 'Nie wybrano sesji';
$string['notfound'] = 'Nie odnaleziono składowej "Lista obecności" w tym przedmiocie!';
$string['notifytask'] = 'Wysyłaj ostrzeżenia użytkownikom';
$string['notmember'] = 'nie&nbsp;członek';
$string['notset'] = 'nie ustawiono';
$string['noupgradefromthisversion'] = 'Moduł attendance nie może być zaktualizowany z zainstalowanej wersji attforblock. - Należy usunąć attforblock lub zaktualizować go go najnowszej wersji przed instalacją nowego modułu attendance';
$string['numsessions'] = 'Liczba sesji';
$string['olddate'] = 'Stara data';
$string['onactivitycompletion'] = 'Po zakończeniu aktywności';
$string['onlyselectedusers'] = 'Eksportuj wybranych uczestników';
$string['overallsessions'] = 'Przez wszystkie sesje';
$string['overallsessions_help'] = 'Wyświetla statystyki wszystkich sesji, łącznie z tymi, które jeszcze nie zostały odbyte (przeszłe i przyszłe):
    <ul>
    <li><strong>Sesje</strong>: całkowita liczba sesji.</li>
    <li><strong>Punkty</strong>: punkty przyznane na podstawie podjętych sesji.</li>
    <li><strong>Procent</strong>: procent przyznanych punktów w odniesieniu do maksymalnej możliwej liczby punktów dla wszystkich sesji.</li>
    </ul>';
$string['oversessionstaken'] = 'Odbyte sesje';
$string['oversessionstaken_help'] = 'Wyświetla statystyki sesji, w których frekwencja została wykonana:
    <ul>
    <li><strong>Sesje</strong>: liczba odbytych sesji.</li>
    <li><strong>Punkty</strong>: punkty przyznawane na podstawie podjętych sesji.</li>
    <li><strong>Procent</strong>: procent przyznanych punktów w odniesieniu do maksymalnej możliwej liczby punktów w odbytych sesjach.</li>
    </ul>';
$string['pageof'] = 'Strona  {$a->page} z {$a->numpages}';
$string['participant'] = 'Uczestnik';
$string['password'] = 'Hasło';
$string['passwordgrp'] = 'Hasło studenta';
$string['passwordgrp_help'] = 'Jeśli ustawione, studenci będą musieli wprowadzić to hasło, zanim będą mogli ustawić swój status obecności dla sesji. Jeśli puste, hasło nie jest wymagane.';
$string['passwordrequired'] = 'Musisz wprowadzić hasło sesji, aby móc przesłać swoją obecność';
$string['percentage'] = 'Procent';
$string['percentageallsessions'] = 'Procent wszystkich sesji';
$string['percentagesessionscompleted'] = 'Procent odbytych sesji';
$string['pluginadministration'] = 'Administracja frekwencją';
$string['pluginname'] = 'Frekwencja';
$string['points'] = 'Punkty';
$string['pointsallsessions'] = 'Punkty za wszystkie sesje';
$string['pointssessionscompleted'] = 'Punkty za odbyte sesje';
$string['preferences_desc'] = 'Zmiany w zestawach statusów będą miały wpływ na istniejące sesje obecności i mogą wpływać na ocenianie.';
$string['preventsharederror'] = 'Funkcja samodzielnego rejestrowania frekwencji została wyłączona dla sesji. Wygląda na to, że to urządzenie zostało użyte do zarejestrowania obecności dla innego studenta.';
$string['preventsharedip'] = 'Zapobiegaj dzieleniu adresów IP przez studentów';
$string['preventsharedip_help'] = 'Uniemożliwia studentom korzystanie z tego samego urządzenia (identyfikowanego przy użyciu adresu IP) w celu oznaczenia frekwencji w kursie dla innych studentów.';
$string['preventsharediptime'] = 'Czas na ponowne wykorzystanie adresu IP (minuty)';
$string['preventsharediptime_help'] = 'Po upływie tego czasu zezwól na ponowne wykorzystanie adresu IP do oznaczenia frekwencji.';
$string['preview'] = 'Podgląd pliku';
$string['previewhtml'] = 'Podgląd formatu HTML';
$string['priorto'] = 'Data sesji jest wcześniejsza niż data rozpoczęcia kursu ({$a}), więc nowe sesje zaplanowane przed tą datą będą ukryte (niedostępne). Możesz zmienić datę rozpoczęcia kursu w dowolnym momencie (zobacz ustawienia kursu), aby mieć dostęp do wcześniejszych sesji.<br><br>Zmień datę sesji lub po prostu kliknij ponownie przycisk "Dodaj sesję", aby potwierdzić.';
$string['privacy:metadata:attendancelog'] = 'Rejestr zapisanych obecności użytkownika.';
$string['privacy:metadata:attendancesessions'] = 'Sesje, na które będzie rejestrowana obecność.';
$string['privacy:metadata:attendancewarningdone'] = 'Dziennik ostrzeżeń wysłanych do użytkowników w związku z rejestracją ich frekwencji.';
$string['privacy:metadata:duration'] = 'Czas trwania sesji w sekundach';
$string['privacy:metadata:groupid'] = 'Identyfikator grupy powiązany z sesją.';
$string['privacy:metadata:ipaddress'] = 'Adres IP z którego zarejestrowano obecność.';
$string['privacy:metadata:lasttaken'] = 'Znacznik czasu, kiedy sesja była ostatnio odbyta.';
$string['privacy:metadata:lasttakenby'] = 'Identyfikator ostatniego użytkownika, który wziął udział w tej sesji';
$string['privacy:metadata:notifyid'] = 'Powiązany identyfikator ostrzeżenia o sesji obecności.';
$string['privacy:metadata:remarks'] = 'Komentarze na temat frekwencji użytkownika.';
$string['privacy:metadata:sessdate'] = 'Znacznik czasu rozpoczęcia sesji.';
$string['privacy:metadata:sessionid'] = 'Identyfikator sesji obecności.';
$string['privacy:metadata:statusid'] = 'Identyfikator statusu obecności studenta.';
$string['privacy:metadata:statusset'] = 'Zestaw statusów, do którego należy identyfikator statusu.';
$string['privacy:metadata:studentid'] = 'Identyfikator studenta, który zarejestrował obecność.';
$string['privacy:metadata:takenby'] = 'Identyfikator użytkownika, który wprowadził dane obecności studenta';
$string['privacy:metadata:timemodified'] = 'Znacznik czasu ostatniej modyfikacji sesji';
$string['privacy:metadata:timesent'] = 'Znacznik czasu wysłania ostrzeżenia.';
$string['privacy:metadata:timetaken'] = 'Znacznik czasu wzięcia udziału w zajęciach przez studenta.';
$string['privacy:metadata:userid'] = 'Identyfikator użytkownika, do którego należy wysłać ostrzeżenie.';
$string['processingfile'] = 'Przetwarzanie pliku';
$string['qr_cookie_error'] = 'Sesja QR wygasła.';
$string['qr_pass_wrong'] = 'Hasło QR jest nieprawidłowe lub wygasło.';
$string['qrcode'] = 'Kod QR';
$string['randompassword'] = 'Losowe hasło';
$string['remark'] = 'Uwaga dla: {$a}';
$string['remarks'] = 'Uwagi';
$string['repeatasfollows'] = 'Powtarzaj powyższą sesję';
$string['repeatevery'] = 'Powtarzaj co:';
$string['repeaton'] = 'Powtarzaj w dniu:';
$string['repeatuntil'] = 'Powtarzaj aż do:';
$string['report'] = 'Raport';
$string['required'] = 'Wymagane*';
$string['requiredentries'] = 'Tymczasowe rekordy zastępują rekordy obecności uczestników';
$string['requiredentry'] = 'Kreator scalania tymczasowych użytkowników';
$string['requiredentry_help'] = '<p align="center"><b>Frekwencja</b></p>
<p align="left"><strong>Łączone konta</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Użytkownik Moodle</th>
<th>Tymczasowy użytkownik</th>
<th>Akcja</th>
</tr>
<tr>
<td>Dane obecności</td>
<td>Dane obecności</td>
<td>Tymczasowy użytkownik zastąpi użytkownika Moodle</td>
</tr>
<tr>
<td>Brak danych obecności</td>
<td>Dane obecności</td>
<td>Tymczasowa obecność użytkownika zostanie przeniesiona na użytkownika Moodle</td>
</tr>
<tr>
<td>Dane obecności</td>
<td>Brak danych obecności</td>
<td>Tymczasowy użytkownik zostanie usunięty</td>
</tr>
<tr>
<td>Brak danych na temat obecności</td>
<td>Brak danych na temat obecności</td>
<td>Tymczasowy użytkownik zostanie usunięty</td>
</tr>
</table>

</p>
<p align="left"><strong>Tymczasowy użytkownik zostanie usunięty we wszystkich przypadkach po operacji scalania</strong></p>';
$string['requiresubnet'] = 'Wymagaj adresu sieciowego';
$string['requiresubnet_help'] = 'Rejestrowanie obecności może być ograniczone do określonych podsieci poprzez określenie rozdzielonej przecinkami listy częściowych lub pełnych adresów IP.';
$string['resetcaledarcreate'] = 'Wydarzenia w kalendarzu zostały włączone, ale kilka istniejących sesji nie ma zdarzeń. Czy chcesz utworzyć wydarzenia kalendarza dla wszystkich istniejących sesji?';
$string['resetcaledardelete'] = 'Wydarzenia w kalendarzu zostały wyłączone, ale kilka istniejących sesji zawiera zdarzenia, które powinny zostać usunięte. Czy chcesz usunąć wszystkie istniejące wydarzenia?';
$string['resetcalendar'] = 'Zresetuj kalendarz';
$string['resetdescription'] = 'Uwaga: usunięcie danych o obecnościach spowoduje skasowanie informacji z bazy danych. Zamiast tego można ukryć poprzednie terminy zmieniając datę rozpoczęcia przedmiotu.';
$string['resetstatuses'] = 'Przywróć domyślne statusy';
$string['restoredefaults'] = 'Przywróć domyślne';
$string['resultsperpage'] = 'Pozycji na stronę';
$string['resultsperpage_desc'] = 'Liczba studentów wyświetlanych na stronie';
$string['rotateqrcode'] = 'Generuj kod QR';
$string['rotateqrcode_cleartemppass_task'] = 'Zadanie usunięcia haseł tymczasowych utworzonych przez funkcję generowania kodu QR.';
$string['rotateqrcodeexpirymargin'] = 'Margines wygaśnięcia generowania kodu QR/hasła (w sekundach)';
$string['rotateqrcodeexpirymargin_desc'] = 'Przedział czasu (w sekundach), po którym wygasa kod QR/hasła.';
$string['rotateqrcodeinterval'] = 'Interwał generowania nowego kodu QR/hasła (w sekundach)';
$string['rotateqrcodeinterval_desc'] = 'Przedział czasu (w sekundach) do wygenerowania nowego kodu QR/hasła.';
$string['save'] = 'Zapisz frekwencję';
$string['scantime'] = 'Czas skanowania';
$string['scantime_help'] = 'Pozwala to na dołączenie znacznika czasu do pliku importu - system spróbuje przekonwertować znacznik czasu przekazany za pomocą funkcji PHP strtotime, a następnie użyje ustawień statusu obecności, aby zdecydować, który status ustawić dla użytkownika';
$string['search:activity'] = 'Frekwencja - informacje o aktywności';
$string['selectactivity'] = 'Wybierz aktywność';
$string['session'] = 'Sesja';
$string['session_help'] = 'Sesja';
$string['sessionadded'] = 'Sesja dodana';
$string['sessionalreadyexists'] = 'Sesja dla tej daty już istnieje';
$string['sessiondate'] = 'Data sesji';
$string['sessiondays'] = 'Dni sesji';
$string['sessiondeleted'] = 'Sesja usunięta';
$string['sessionduplicate'] = 'Istnieje zduplikowana sesja dla kursu: {$a->course} we frekwencji: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Sesji nie dodano (już nie istnieje)!';
$string['sessiongenerated'] = 'Wygenerowano jedną sesję';
$string['sessions'] = 'Sesje';
$string['sessionsallcourses'] = 'Wszystkie kursy';
$string['sessionsbyactivity'] = 'Instancja obecności';
$string['sessionsbycourse'] = 'Kurs';
$string['sessionsbydate'] = 'Tydzień';
$string['sessionscompleted'] = 'Odbyte sesje';
$string['sessionscurrentcourses'] = 'Bieżące kursy';
$string['sessionsgenerated'] = 'Sesja wygenerowana pomyślnie';
$string['sessionsids'] = 'Identyfikator sesji:';
$string['sessionsnotfound'] = 'Brak sesji w wybranym przedziale dat';
$string['sessionstartdate'] = 'Data rozpoczęcia sesji';
$string['sessionstotal'] = 'Łączna liczba sesji';
$string['sessionsupdated'] = 'Zaktualizowano sesje';
$string['sessiontype'] = 'Typ sesji';
$string['sessiontype_help'] = 'Istnieją dwa rodzaje sesji: wspólne i grupy. Istnieje możliwość dodania różnych typów zależnych od aktywności typów grup.

* W trybie grupy "Brak grup" można dodawać tylko wspólne sesje.
* W trybie grup "Widoczne grupy" można dodać wspólne i grupowe sesje.
* W trybie grupy "Osobne grupy" można dodawać tylko sesje grupowe.';
$string['sessiontypeshort'] = 'Typ';
$string['sessionunknowngroup'] = 'Sesja zawiera nieznane grupy: {$a}';
$string['sessionupdated'] = 'Sesja pomyślnie zaktualizowane';
$string['set_by_student'] = 'Rejestrowanie samodzielne';
$string['setallstatuses'] = 'Ustaw zbiorowo status dla użytkowników';
$string['setallstatusesto'] = 'Ustaw status na: «{$a}»';
$string['setperiod'] = 'Określony czas zwolnienia adresu IP w minutach';
$string['settings'] = 'Ustawienia';
$string['setunmarked'] = 'Automatycznie ustawiany, gdy nie jest zaznaczony';
$string['setunmarked_help'] = 'Jeśli włączone w sesji, ustawia ten status, jeśli uczeń nie zaznaczył swojej obecności.';
$string['showdefaults'] = 'Pokaż domyślne';
$string['showduration'] = 'Pokaż długość zajęć';
$string['showextrauserdetails'] = 'Pokaż dodatkowe informacje o użytkowniku';
$string['showqrcode'] = 'Pokaż kod QR';
$string['showsessiondescriptiononreport'] = 'Pokaż opis sesji w raporcie';
$string['showsessiondescriptiononreport_desc'] = 'Pokaż opis sesji na liście obecności.';
$string['showsessiondetails'] = 'Pokaż szczegóły sesji';
$string['somedisabledstatus'] = '(Niektóre opcje zostały usunięte po rozpoczęciu sesji).';
$string['sortedgrid'] = 'posortowana siatka';
$string['sortedlist'] = 'posortowana lista';
$string['startofperiod'] = 'Początek okresu';
$string['starttime'] = 'Czas rozpoczęcia';
$string['status'] = 'Status';
$string['statusall'] = 'Wszyscy';
$string['statusdeleted'] = 'Stan usunięty';
$string['statuses'] = 'Statusy';
$string['statusset'] = 'Zestaw statusów {$a}';
$string['statussetsettings'] = 'Zestaw statusów';
$string['statusunselected'] = 'Nieoznaczeni';
$string['strftimedm'] = '%d %h';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H:%M';
$string['strftimedmyw'] = '<nobr>%a, %d %b %Y</nobr>';
$string['strftimeh'] = '%H';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Dostępne dla studentów (minuty)';
$string['studentavailability_help'] = 'Gdy studenci oznaczają swoją obecność, określa liczbę minut po rozpoczęciu sesji, gdy ten status jest dostępny.
 <br/>Jeśli puste, ten status będzie zawsze dostępny, jeśli ustawiony na 0 - zawsze ukryty dla studentów.';
$string['studentid'] = 'Identyfikator studenta';
$string['studentmarked'] = 'Twoja obecność dla tej sesji została zarejestrowana.';
$string['studentmarking'] = 'Rejestrowanie przez studenta';
$string['studentpassword'] = 'Hasło studenta';
$string['studentrecordingexpanded'] = 'Rejestrowanie przez studenta rozwinięte';
$string['studentrecordingexpanded_desc'] = 'Pokaż ustawienia "Rejestrowanie przez studenta" jako domyślnie rozwinięte podczas tworzenia nowych sesji.';
$string['studentscanmark'] = 'Zezwól studentom na rejestrowanie obecności';
$string['studentscanmark_desc'] = 'Jeśli ta opcja zostanie zaznaczona, prowadzący będą mogli zezwolić studentom na zaznaczenie ich obecności.';
$string['studentscanmark_help'] = 'Po zaznaczeniu opcji, studenci będą mogli samodzielnie zmieniać status swoich obecności na zajęciach.';
$string['studentscanmarksessiontime'] = 'Uczniowie rejestrują obecność w czasie sesji';
$string['studentscanmarksessiontime_desc'] = 'Jeśli zaznaczone, uczniowie mogą rejestrować swoją obecność tylko podczas sesji.';
$string['studentscanmarksessiontimeend'] = 'Koniec sesji (minuty)';
$string['studentscanmarksessiontimeend_desc'] = 'Jeśli sesja nie ma czasu zakończenia, ile minut sesja powinna być dostępna dla uczniów, aby zapisać ich obecność.';
$string['submit'] = 'Zatwierdź';
$string['submitattendance'] = 'Zarejestruj obecność';
$string['submitpassword'] = 'Zatwierdź hasło';
$string['subnet'] = 'Podsieć';
$string['subnetactivitylevel'] = 'Zezwalaj na konfigurację podsieci na poziomie aktywności';
$string['subnetactivitylevel_desc'] = 'Jeśli jest włączona, prowadzący mogą nadpisywać domyślną podsieć na poziomie aktywności podczas tworzenia frekwencji. W przeciwnym razie podczas tworzenia sesji zostaną użyte domyślne ustawienia witryny.';
$string['subnetwrong'] = 'Frekwencja może być rejestrowana tylko z określonych lokalizacji, a ten komputer nie znajduje się na liście dozwolonych.';
$string['summary'] = 'Podsumowanie';
$string['tablerenamefailed'] = 'Zmiana nazwy starej tabeli attforblock na attendance nie powiodła się';
$string['tactions'] = 'Akcja';
$string['takeattendance'] = 'Sprawdź obecność';
$string['takensessions'] = 'Odbyte sesje';
$string['tcreated'] = 'Utworzony';
$string['tempaddform'] = 'Dodaj uczestnika tymczasowego';
$string['tempexists'] = 'Jest już tymczasowy użytkownik z tym adresem e-mail';
$string['temptable'] = 'Lista tymczasowych uczestników';
$string['tempuser'] = 'Tymczasowy użytkownik';
$string['tempusermerge'] = 'Scal tymczasowego użytkownika';
$string['tempusers'] = 'Uczestnicy tymczasowi';
$string['tempusersedit'] = 'Edytuj tymczasowego użytkownika';
$string['tempuserslist'] = 'Uczestnicy tymczasowi';
$string['thirdpartyemails'] = 'Powiadom innych użytkowników';
$string['thirdpartyemails_help'] = 'Lista innych użytkowników, którzy zostaną powiadomieni. (wymaga uprawnień mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Ostrzeżenie obecności';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} frekwencja w {$a->coursename} {$a->aname} jest niższa niż {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Otrzymujesz to, ponieważ nauczyciel tego kursu dodał Twój adres e-mail do listy odbiorców';
$string['thiscourse'] = 'Ten kurs';
$string['time'] = 'Czas';
$string['timeahead'] = 'Nie można utworzyć wielu sesji dłuższych niż rok, należy skorygować daty rozpoczęcia i zakończenia.';
$string['to'] = 'do:';
$string['triggered'] = 'Pierwsza wiadomość';
$string['tuseremail'] = 'E-mail';
$string['tusername'] = 'Imię i nazwisko';
$string['ungraded'] = 'Nieoceniane sesje';
$string['unknowngroup'] = 'Nieznana grupa';
$string['unknownstatus'] = 'Nieznany identyfikator stanu: {$a}';
$string['update'] = 'Aktualizacja';
$string['uploadattendance'] = 'Prześlij frekwencję za pomocą CSV';
$string['usedefaultsubnet'] = 'Używaj domyślnej';
$string['usemessageform'] = 'lub skorzystaj z poniższego formularza, aby wysłać wiadomość do wybranych uczniów';
$string['userexists'] = 'Jest już prawdziwy użytkownik z tym adresem e-mail';
$string['userid'] = 'Identyfikator użytkownika';
$string['userimportfield'] = 'Pole użytkownika zewnętrznego';
$string['userimportfield_help'] = 'Pole z przesłanego pliku CSV, które zawiera identyfikator użytkownika';
$string['userimportto'] = 'Pole użytkownika Moodle';
$string['userimportto_help'] = 'Pole Moodle pasujące do danych z eksportu CSV';
$string['users'] = 'Uczestnicy do wyeksportowania';
$string['usestatusset'] = 'Zestaw statusów';
$string['variable'] = 'zmienna';
$string['variablesupdated'] = 'Zmienne pomyślnie zaktualizowane';
$string['versionforprinting'] = 'wersja do druku';
$string['viewmode'] = 'Tryb wyświetlania';
$string['warnafter'] = 'Liczba odbytych sesji przed ostrzeżeniem';
$string['warnafter_help'] = 'Ostrzeżenia będą uruchamiane wtedy, gdy użytkownik odbył przynajmniej wymienioną liczbę sesji.';
$string['warningdeleted'] = 'Ostrzeżenie usunięte';
$string['warningdesc'] = 'Te ostrzeżenia zostaną automatycznie dodane do wszystkich nowych aktywności. Jeśli więcej niż jedno ostrzeżenie zostanie uruchomione dokładnie w tym samym czasie, zostanie wysłane tylko te o niższym progu ostrzegawczym.';
$string['warningdesc_course'] = 'Ustalone tutaj progi ostrzeżeń wpływają na raport o nieobecności i umożliwiają powiadamianie studentów i osób trzecich. Jeśli więcej niż jedno ostrzeżenie zostanie uruchomione dokładnie w tym samym czasie, zostanie wysłane tylko to o niższym progu ostrzegawczym.';
$string['warningfailed'] = 'Nie można utworzyć ostrzeżenia, które używa tego samego procentu i liczby sesji.';
$string['warningpercent'] = 'Ostrzegaj, jeśli procent spadnie poniżej';
$string['warningpercent_help'] = 'Ostrzeżenie zostanie uruchomione, gdy ogólny procent spadnie poniżej tej liczby.';
$string['warnings'] = 'Zestaw ostrzeżeń';
$string['warningthreshold'] = 'Próg ostrzegawczy';
$string['warningupdated'] = 'Zaktualizowano ostrzeżenia';
$string['week'] = 'tydzień/tygodni';
$string['weekcommencing'] = 'Początek tygodnia';
$string['weeks'] = 'Tygodnie';
$string['youcantdo'] = 'Nic nie możesz zrobić';
