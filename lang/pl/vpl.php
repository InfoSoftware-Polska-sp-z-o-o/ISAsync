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
 * Strings for component 'vpl', language 'pl', version '4.0'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Kompilacja lub przygotowanie wykonania nie powiodło się';
$string['about'] = 'O VPL';
$string['acceptcertificates'] = 'Akceptuj certyfikaty z własnym podpisem';
$string['acceptcertificates_description'] = 'Jeśli serwery wykonawcze nie używają certyfikatów z własnym podpisem, odznacz tę opcję';
$string['acceptcertificatesnote'] = '<p>Używasz zaszyfrowanego połączenia.<p/>
<p>Aby użyć szyfrowanego połączenia z serwerami wykonawczymi, wymagane jest zaakceptowanie jego certyfikatów.<p/>
<p>Jeśli masz problemy z tym procesem, możesz spróbować użyć połączenia http (nieszyfrowanego) lub innej przeglądarki.<p/>
<p>Kliknij poniższe linki (serwer #) i zaakceptuj oferowany certyfikat.<p/>';
$string['addfile'] = 'Dodaj plik';
$string['advanced'] = 'Zaawansowane';
$string['allfiles'] = 'Wszystkie pliki';
$string['allsubmissions'] = 'Wszystkie prace';
$string['always_use_ws'] = 'Zawsze używaj protokołu niezaszyfrowanego (ws) websocket';
$string['always_use_wss'] = 'Zawsze używaj szyfrowanego protokołu sieciowego (wss)';
$string['anyfile'] = 'Dowolny plik';
$string['attemptnumber'] = 'Liczba prób {$a}';
$string['autodetect'] = 'Automatyczne wykrywanie';
$string['automaticevaluation'] = 'Automatyczne ocenianie';
$string['automaticgrading'] = 'Automatyczna ocena';
$string['averageperiods'] = 'Średni okres {$a}';
$string['averagetime'] = 'Średni czas {$a}';
$string['basedon'] = 'W oparciu o';
$string['basic'] = 'Podstawy';
$string['binaryfile'] = 'Plik binarny';
$string['browserupdate'] = 'Zaktualizuj swoją przeglądarkę do najnowszej wersji lub użyj innej przeglądarki obsługującej Websocket.';
$string['calculate'] = 'Przelicz';
$string['changesNotSaved'] = 'Zmiany nie zostały zapisane';
$string['check_jail_servers'] = 'Sprawdź serwery wykonawcze';
$string['check_jail_servers_help'] = '<p>Ta strona sprawdza i pokazuje status używanych serwerów wykonawczych dla tej aktywności.</p>';
$string['clipboard'] = 'Schowek';
$string['closed'] = 'Zamknięty';
$string['comments'] = 'Komentarze';
$string['compilation'] = 'Kompilacja';
$string['connected'] = 'połączono';
$string['connecting'] = 'łączenie';
$string['connection_closed'] = 'zamknięto połączenie';
$string['connection_fail'] = 'błąd połączenia';
$string['console'] = 'Konsola';
$string['copy'] = 'Kopiuj';
$string['create_new_file'] = 'Utwórz nowy plik';
$string['currentstatus'] = 'Bieżąca pozycja';
$string['cut'] = 'Wytnij';
$string['datesubmitted'] = 'Data dodana';
$string['debug'] = 'Debuguj';
$string['debugging'] = 'Debugowanie';
$string['debugscript'] = 'Skrypt debugowania';
$string['debugscript_help'] = 'Wybierz skrypt debugowania do użycia w tym działaniu';
$string['defaultexefilesize'] = 'Maksymalny domyślny rozmiar pliku wykonania';
$string['defaultexememory'] = 'Użyto maksymalnej domyślnej pamięci';
$string['defaultexeprocesses'] = 'Maksymalna domyślna liczba procesów';
$string['defaultexetime'] = 'Maksymalny domyślny czas wykonania';
$string['defaultfilesize'] = 'Domyślny maksymalny rozmiar pliku do przesłania';
$string['defaultresourcelimits'] = 'Domyślne limity zasobów wykonania';
$string['delete'] = 'Usuń';
$string['delete_file_fq'] = 'usunąć plik \'{\\$a}\'?';
$string['delete_file_q'] = 'Usunąć plik?';
$string['deleteallsubmissions'] = 'Usuń wszystkie zgłoszenia';
$string['depends_on_https'] = 'Użyj ws lub wss w zależności od tego, czy używasz http czy https';
$string['description'] = 'Opis zadania';
$string['diff'] = 'diff';
$string['discard_submission_period'] = 'Odrzucić okres składania materiałów';
$string['discard_submission_period_description'] = 'Dla każdego studenta i każdego przypisania system próbuje odrzucić wysyłanie. System zachowuje ostatnie i co najmniej jedno zgłoszenie na każdy okres';
$string['download'] = 'Pobierz';
$string['downloadallsubmissions'] = 'Pobierz wszystkie przesłane prace';
$string['downloadsubmissions'] = 'Pobierz materiały';
$string['duedate'] = 'Data końcowa';
$string['edit'] = 'Edycja';
$string['editing'] = 'Edytuj';
$string['editortheme'] = 'Motyw edytora';
$string['evaluate'] = 'Oceny';
$string['evaluateonsubmission'] = 'Oceniaj tylko przy składaniu';
$string['evaluating'] = 'Ocenianie';
$string['evaluation'] = 'Oceny';
$string['examples'] = 'Przykłady';
$string['execution'] = 'Wykonanie';
$string['executionfiles'] = 'Pliki wykonywalne';
$string['executionfiles_help'] = '<p>Tutaj możesz przygotować pliki niezbędne do wykonania, debugowania lub oceny programu przygotowanego przez studenta.  Dotyczy to skryptów, plików testowych programu i plików danych.</p>
<p>Jeśli nie ustawisz skryptów do uruchamiania lub debugowania, system rozwiąże używany język (w oparciu o rozszerzenia nazw plików) i użyje predefiniowanego skryptu.</p>';
$string['executionoptions'] = 'Opcje wykonania';
$string['executionoptions_help'] = '<h1>Opcje wykonania</h1>
<p>Na tej stronie ustawiane są różne opcje wykonania.</p>
<ul>
<li><b>W oparciu o</b>: ustawia inną instancję VPL, z której importowane są niektóre funkcje:
<ul><li>Pliki wykonywalne (łączenie wstępnie zdefiniowanych plików skryptów).</li>
<li>Limity dla zasobów wykonania.</li>
<li>Wariacje, które są łączone w celu wykonywania multiwariacji.</li>
<li>Maksymalna długość każdego importowanego pliku ze składnią</li>
</ul>
</li>
<li><b>Uruchom</b>, <b>Debuguj</b> i <b>Sprawdź</b>: muszą być ustawione na \'Tak\', jeśli odpowiednia akcja może zostać wykonana podczas edycji zgłoszenia. Dotyczy to tylko studentów, użytkownicy z możliwością oceniania zawsze mogą wykonywać te działania</li>
<li><b>Sprawdzenie samej składni</b>: składnia jest sprawdzana automatycznie po zaimportowaniu.</li>
<li><b>Automatyczna ocena</b>: jeżli rezultat sprawdzenia zawiera kody oceny, używane są one do automatycznego oceniania.</li>
</ul>';
$string['file'] = 'Plik';
$string['fileNotChanged'] = 'Plik nie został zmieniony';
$string['file_name'] = 'Nazwa pliku';
$string['fileadded'] = 'Plik \'{\\$a}\' został dodany';
$string['filedeleted'] = 'Plik \'{\\$a}\' został usunięty';
$string['filelist'] = 'Lista plików';
$string['filenotadded'] = 'Plik nie został dodany';
$string['filenotdeleted'] = 'Plik \'{$a}\' NIE został usunięty';
$string['filenotrenamed'] = 'Plik \'{$a}\' NIE został zmieniony';
$string['filerenamed'] = 'Nazwa pliku \'{\\$a->from}\' została zmieniona na \'{\\$a->to}\'';
$string['filesChangedNotSaved'] = 'Pliki zostały zmienione, ale nie zostały zapisane';
$string['filesNotChanged'] = 'Pliki nie zostały zmienione';
$string['filestoscan'] = 'Pliki do skanowania';
$string['fileupdated'] = 'Plik \'{\\$a}\' zotał zaktualizowany';
$string['finalreduction'] = 'Ostateczne obniżenie';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Ostateczne obniżenie oceny.<br>
<b>NE</b> Automatyczne oceny wymagane przez studenta.<br>
<b>FE</b> Dozwolone wolne oceny.<br>
<b>R</b>Stopień zmniejszenia przez ocenę. Jeśli jest to procent, stosuje się go w stosunku do poprzedniego wyniku.<br>';
$string['find'] = 'Znajdź';
$string['find_replace'] = 'Znajdź/Zamień';
$string['freeevaluations'] = 'Darmowe oceny';
$string['freeevaluations_help'] = 'Liczba automatycznych ocen, które nie zmniejszają końcowego wyniku';
$string['fulldescription'] = 'Pełny opis';
$string['fulldescription_help'] = '<h1>Pełny opis</h1>
<p>Musisz tutaj napisać pełny opis czynności.</p>
<p>Jeśli nic tutaj nie napiszesz, w zamian pokaże się krótki opis.</p>
<p>Jeśli chcesz oceniać automatycznie, interfejsy przypisań muszą być szczegółowe i niejednoznaczne.</p>';
$string['fullscreen'] = 'Pełny ekran';
$string['getjails'] = 'Pobierz serwery wykonawcze';
$string['gradeandnext'] = 'Oceń i przejdź dalej';
$string['graded'] = 'Oceniony';
$string['gradedbyuser'] = 'Ocenione przez użytkownika';
$string['gradedon'] = 'Data oceny';
$string['gradedonby'] = 'Przeglądane dnia {$a->date} przez {$a->gradername}';
$string['gradenotremoved'] = 'Ocena nie została usunięta. Sprawdż konfigurację czynności w dzienniku ocen.';
$string['gradenotsaved'] = 'Ocena nie została zapisana. Sprawdź konfigurację czynności w dzienniku ocen.';
$string['gradeoptions'] = 'Opcje oceniania';
$string['grader'] = 'Oceniający';
$string['gradercomments'] = 'Komentarze oceniającego';
$string['graderemoved'] = 'Ocena została usunięta';
$string['groupwork'] = 'Praca grupowa';
$string['inconsistentgroup'] = 'Nie jesteś członkiem tylko jednej grupy (0 o >1)';
$string['incorrect_file_name'] = 'Niepoprawna nazwa pliku';
$string['individualwork'] = 'Praca indywidualna';
$string['instanceselection'] = 'Wybór VPL';
$string['isexample'] = 'Ćwiczenie przykładowe';
$string['jail_servers'] = 'Lista serwerów wykonawczych';
$string['jail_servers_config'] = 'Konfiguracja serwerów wykonawczych';
$string['jail_servers_description'] = 'Napisz linię dla każdego serwera';
$string['joinedfiles'] = 'Dołączone wybrane pliki';
$string['keepfiles'] = 'Pliki używane podczas wykonania';
$string['keepfiles_help'] = '<h1>Pliki używane podczas wykonania</h1>
<p>Ze względów bezpieczeństwa pliki dodane jako "Pliki wykonawcze" są usuwane przed uruchomieniem pliku vpl_execution.</p>
Jeśli któryś z tych plików jest potrzebny podczas wykonywania (na przykład do wykorzystania jako dane testowe), musi zostać tutaj zaznaczony.';
$string['keyboard'] = 'Klawiatura';
$string['lasterror'] = 'Ostatnie informacje o błędzie';
$string['lasterrordate'] = 'Ostatnia data błędu';
$string['listofcomments'] = 'Lista komentarzy';
$string['listsimilarity'] = 'Znaleziono listę podobieństw';
$string['listwatermarks'] = 'Lista znaków wodnych';
$string['load'] = 'Załaduj';
$string['loading'] = 'Ładuje się';
$string['local_jail_servers'] = 'Lokalne serwery wykonawcze';
$string['local_jail_servers_help'] = '<h1>Lokalne serwery wykonawcze</h1>
<p>Tutaj możesz ustawić lokalne serwery wykonawcze dodane dla tego działania i dla tych
które są na nim oparte.</p>
<p>Wprowadź pełny adres URL serwera w każdym wierszu. Możesz użyć pustych linii
i komentarze rozpoczynające linię od "#".</p>
<p>Ta aktywność będzie używana jako lista serwerów wykonawczych: ustawienia serwerów tutaj
plus lista serwerów ustawiona w działaniu "na podstawie"
plus lista popularnych serwerów wykonawczych.
Jeśli chcesz zapobiec tej czynności i pochodnym
korzystając z innych serwerów, musisz dodać linię
zawierające "end_of_jails" na końcu listy serwerów.
</p>';
$string['manualgrading'] = 'Ręczne ocenianie';
$string['maxexefilesize'] = 'Maksymalny rozmiar wykonywalnych plików';
$string['maxexememory'] = 'Maksymalna używana pamięć';
$string['maxexeprocesses'] = 'Maksymalna liczba procesów';
$string['maxexetime'] = 'Maksymalny czas wykonania';
$string['maxfiles'] = 'Maksymalna liczba plików';
$string['maxfilesexceeded'] = 'Przekroczono maksymalną liczbę plików';
$string['maxfilesize'] = 'Maksymalny rozmiar wysyłanego pliku';
$string['maxfilesizeexceeded'] = 'Przekroczono maksymalny rozmiar pliku';
$string['maximumperiod'] = 'Maksymalny okres {$a}';
$string['maxresourcelimits'] = 'Maksymalne limity zasobów wykonania';
$string['maxsimilarityoutput'] = 'Maksymalne wyjście przez podobieństwo';
$string['menucheck_jail_servers'] = 'Sprawdź serwery wykonawcze';
$string['menuexecutionfiles'] = 'Pliki wykonywalne';
$string['menuexecutionoptions'] = 'Opcje';
$string['menukeepfiles'] = 'Pliki używane';
$string['menulocal_jail_servers'] = 'Lokalne serwery wykonawcze';
$string['menuresourcelimits'] = 'Limity zasobów';
$string['minsimlevel'] = 'Minimalny poziom podobieństwa do pokazania';
$string['moduleconfigtitle'] = 'Konfiguracja modułu VPL';
$string['modulename'] = 'Wirtualne Laboratorium Programistyczne';
$string['modulename_help'] = '<p>Wirtualne Laboratorium Programistyczne to narzędzie umożliwiające łatwe przeprowadzanie zadań programistycznych. Pozwala na uruchamianie, sprawdzanie, ewaluację i ocenę programów  tworzonych przez studentów bezpośrednio na platformie Moodle.</p>

<p>Funkcjonalności:</p>
<ul>
<li>pozwala na edycję kodu źródłowego w przeglądarce</li>
<li>studenci mogą uruchamiać swoje programy w przeglądarce</li>
<li>studenci i nauczyciele mogą uruchamiać testy aby sprawdzić działanie programów</li>
<li>pozwala wyszukiwać podobieństwa pomiędzy plikami</li>
<li>pozwala ustawić ograniczenia wklejania gotowego kodu</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Strona wirtualnego laboratorium programistycznego</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Wirtualne Laboratoria Programowania';
$string['multidelete'] = 'Wielokrotne usuwanie';
$string['nevaluations'] = '{$a} dokonano automatycznej oceny';
$string['new'] = 'Nowy';
$string['new_file_name'] = 'Nowa nazwa pliku';
$string['next'] = 'Następny';
$string['nojailavailable'] = 'Brak serwera wykonawczego';
$string['noright'] = 'Nie masz prawa dostępu';
$string['nosubmission'] = 'Brak przesłanej pracy.
Podgląd niedostępny.';
$string['notexecuted'] = 'Nie przesłane';
$string['notgraded'] = 'Nieoceniony';
$string['notsaved'] = 'Nie zapisano';
$string['novpls'] = 'Brak zdefiniowanego laboratorium';
$string['nowatermark'] = 'Własny znak wodny {$a}';
$string['nsubmissions'] = '{$a} złożono';
$string['numcluster'] = 'Klaster {$a}';
$string['open'] = 'Otwarty';
$string['opnotallowfromclient'] = 'Niedozwolona czynność z tego komputera';
$string['options'] = 'Opcje';
$string['optionsnotsaved'] = 'Opcje nie zostały zapisane';
$string['optionssaved'] = 'Opcje zostały zapisane';
$string['origin'] = 'Pochodzenie';
$string['othersources'] = 'Inne źródła do skanowania';
$string['outofmemory'] = 'Brak pamięci';
$string['paste'] = 'Wklej';
$string['pluginadministration'] = 'Administracja VPL';
$string['pluginname'] = 'Wirtualne Laboratorium Programowania';
$string['previoussubmissionslist'] = 'Poprzednia lista składania';
$string['print'] = 'Drukuj';
$string['proposedgrade'] = 'Proponowana ocena: {$a}';
$string['proxy'] = 'serwer proxy';
$string['proxy_description'] = 'Serwer proxy z Moodle do serwerów wykonawczych';
$string['redo'] = 'Gotowe';
$string['reductionbyevaluation'] = 'Zmniejszenie przez automatyczną ocenę';
$string['reductionbyevaluation_help'] = 'Zmniejsz wynik końcowy o wartość lub procent za każdą automatyczną ocenę, o którą prosi student';
$string['regularscreen'] = 'Zwykły ekran';
$string['removegrade'] = 'Usuń ocenę';
$string['rename'] = 'Zmień nazwę';
$string['rename_file'] = 'Zmień nazwę pliku';
$string['replace_find'] = 'Zamień/Znajdź';
$string['requestedfiles'] = 'Wymagane pliki';
$string['requestedfiles_help'] = '<h1>Wymagane pliki</h1>
<p>Tutaj ustawia się nazwy żądanych plików do maksymalnego numeru pliku, który został określony w podstawowych wymaganiach ćwiczenia.</p>
<p>Jeśli nie ustawisz nazw dla pełnej liczby plików, nienazwane pliki są opcjonalne i mogą mieć dowolną nazwę.</p>
<p>Możesz także dodać zawartość żądanych plików, zawartość ta będzie dostępna za pierwszym razem, gdy zostaną one otwarte w edytorze, jeśli
nie istnieją poprzednie wpisy.</p>';
$string['requirednet'] = 'Zezwolono na przesłanie z sieci';
$string['requiredpassword'] = 'Wymagane jest hasło';
$string['resetfiles'] = 'Zresetuj pliki';
$string['resetvpl'] = 'Resetuj {$a}';
$string['resourcelimits'] = 'Limity zasobów wykonania';
$string['resourcelimits_help'] = '<h1>Limity zasobów wykonania</h1>
<p>Można ustawić ograniczenia dotyczące czasu wykonania, używanej pamięci, rozmiarów plików wykonawczych i liczby procesów, które mają być wykonywane jednocześnie.</p>
<p>Limity te są używane podczas uruchamiania plików skryptowych vpl_run.sh, vpl_debug.sh i vpl_evaluate.sh oraz utworzonego przez nich pliku vpl_execution.</p>
<p>Jeśli działanie to jest oparte na innej aktywności, na ograniczenia mogą mieć wpływ te ustawione w podstawowej aktywności i jej potomków lub w globalnej konfiguracji modułu.</p>';
$string['restrictededitor'] = 'Przesyłanie zewnętrznego pliku, wklej i upuść zawartość zewnętrzną';
$string['retrieve'] = 'Pobierz wyniki';
$string['run'] = 'Uruchom';
$string['running'] = 'Uruchamianie';
$string['runscript'] = 'Uruchom skrypt';
$string['runscript_help'] = 'Wybierz skrypt uruchamiania, który będzie używany w tym działaniu';
$string['save'] = 'Zapisz';
$string['savecontinue'] = 'Zapisz i kontynuuj';
$string['saved'] = 'Zapisane';
$string['savedfile'] = 'Plik  \'{\\$a}\' został zapisany';
$string['saveoptions'] = 'opcje zapisu';
$string['saving'] = 'Zapisywanie';
$string['scanactivity'] = 'Aktywność';
$string['scandirectory'] = 'Katalog';
$string['scanningdir'] = 'Skanowanie katalogu ...';
$string['scanoptions'] = 'Opcje skanowania';
$string['scanother'] = 'Skanuj podobieństwa w dodanych źródłach';
$string['scanzipfile'] = 'Plik Zip';
$string['sebkeys'] = 'Klucz egzaminu SEB';
$string['sebkeys_help'] = 'Klucz egzaminacyjny SEB (maks. 3) uzyskany z pliku .seb
Jest bardziej niezawodny niż tylko przeglądarka.<br>https://safeexambrowser.org';
$string['sebrequired'] = 'Wymagana przeglądarka SEB';
$string['sebrequired_help'] = 'Właściwe skonfigurowanie przeglądarki SEB jest wymagane';
$string['select_all'] = 'Zaznacz wszystko';
$string['server'] = 'serwer';
$string['serverexecutionerror'] = 'Błąd wykonania serwera';
$string['shortcuts'] = 'Skróty klawiszowe';
$string['shortdescription'] = 'Krótki opis';
$string['similarity'] = 'Kontrola podobieństw w kodzie';
$string['similarto'] = 'Podobne do';
$string['startdate'] = 'Dostępny od';
$string['submission'] = 'Prześlij swoją pracę';
$string['submissionperiod'] = 'Okres przesyłania prac';
$string['submissionrestrictions'] = 'Ograniczenia przesyłania prac';
$string['submissions'] = 'Złożono';
$string['submissionselection'] = 'Wybierz';
$string['submissionslist'] = 'Złożone prace';
$string['submissionview'] = 'Podgląd przesłanej pracy';
$string['submittedby'] = 'Przesłane przez {$a}';
$string['submittedon'] = 'Data przesłania pracy';
$string['submittedonp'] = 'Przesłano {$a}';
$string['sureresetfiles'] = 'Czy chcesz utracić całą pracę i zresetować pliki do postaci pierwotnej?';
$string['test'] = 'Składnik testu';
$string['testcases'] = 'Przypadki testowe';
$string['testcases_help'] = 'Ten modułu pozwala uruchomić program studenta i sprawdzić wynik jego działania dla zadanych danych wejściowych. Aby skonfigurować proces oceny, należy przygotować plik "vpl_evaluate.cases".<br>
Plik "vpl_evaluate.cases" ma następujący format:<br>
<ul>
<li> "<b>case </b>= Opis przypadku testowego": Instrukcja -początku definicji przypadku testowego.</li>
<li> "<b>input </b>= text": Instrukcja definiująca dane wejściowe. Dane mogą zostać umieszczone w kilku wierszach. Kolejna instrukcja kończy te dane.</li>
<li> "<b>output </b>= text": instrukcja definiująca dane wyjściowe. Dane zostać umieszczone w kilku wierszach. Kolejna instrukcja kończy te dane. <br>
Przypadek testowy obejmować trzy rodzaje danych wyjściowych: liczby, tekst i tekst dokładny.
<ul>
<li> <b>liczby</b>: definiowane jako sekwencja liczb (liczb całkowitych i liczb zmiennoprzecinkowych). Sprawdzane są tylko liczby na wyjściu. Inne teksty są ignorowane. Wartości zmiennoprzecinkowe sprawdzane są z tolerancją</li>
<li> <b>tekst</b>: definiowany poprzez tekst bez podwójnego cudzysłowu. Sprawdzane są tylko słowa. Pozostałe znaki są ignorowane. W porównaniu nie jest rozróżniana wielkość liter </li>
<li> <b>tekst dokładny</b>: definiowany poprzez tekst w podwójnym cudzysłowie. Dane wyjściowe są testowane poprzez dokładne porównanie tekstu.</li>
</ul>
</li>
<li> "<b>grade reduction</b> = [value|percentage%]" : Obniżenie oceny. Domyślnie błąd obniża ocenę studenta (zaczynając od maxgrade) o (grade_range/number of cases), ale za pomocą tej instrukcji możesz zdecydować, czy zmienić o wartość, czy o procent.</li>
</ul>';
$string['timeleft'] = 'Pozostały czas';
$string['timelimited'] = 'Czas ograniczony';
$string['timeout'] = 'Czas minął';
$string['timeunlimited'] = 'Czas nieograniczony';
$string['totalnumberoferrors'] = 'Błędy';
$string['undo'] = 'Cofnij';
$string['unexpected_file_name'] = 'Niepoprawna nazwa pliku: oczekiwano \'{$a->expected}\' a znaleziono  \'{$a->found}\'';
$string['unzipping'] = 'Rozpakowywanie ...';
$string['uploadfile'] = 'Importuj plik';
$string['usevariations'] = 'Użyj wariacji';
$string['usewatermarks'] = 'Użyj znaków wodnych';
$string['usewatermarks_description'] = 'Dodaje znaki wodne do plików ucznia (tylko do obsługiwanych języków)';
$string['variation'] = 'Wariacja {$a}';
$string['variation_options'] = 'Opcje wariacji';
$string['variations'] = 'Wariacje';
$string['variations_help'] = '<h1>Wariacje</h1>
<p>Zestaw wariacji może być zdefiniowany dla każdej czynności. Wariacje te są losowo przypisywane do studentów.</p>
<p>Możesz tutaj wskazać czy czynność zawiera wariacje, ustawić tytuł zestawowi wariacji i dodać pożądane wariacje.</p>
<p>Każda wariacja ma kod identyfikacyjny oraz opis. Kod identyfikacyjny jest używany przez plik <b>vpl_enviroment.sh</b> aby przekazać wariację przypisaną do każdego studenta plikowi skryptowemu. Opis w formacie HTML jest pokazywany studentom, którzy przypisali odpowiednie zmiany.</p>';
$string['variations_unused'] = 'Ta czynność ma wariacje, ale są wyłączone';
$string['variationtitle'] = 'Tytuł wariacji';
$string['varidentification'] = 'Identyfikacja';
$string['visiblegrade'] = 'Widoczny';
$string['vpl'] = 'Wirtualne Laboratorium Programowania';
$string['vpl:addinstance'] = 'Dodaj nowe wystąpienia vpl';
$string['vpl:grade'] = 'Oceń przypisanie VPL';
$string['vpl:manage'] = 'Zarządzaj przydziałem VPL';
$string['vpl:setjails'] = 'Ustaw serwery wykonawcze dla poszczególnych instancji VPL';
$string['vpl:similarity'] = 'Szukaj podobieństw przypisań VPL';
$string['vpl:submit'] = 'Prześlij zadanie VPL';
$string['vpl:view'] = 'Zobacz pełny opis przydziału VPL';
$string['vpl_debug.sh'] = 'Ten skrypt przygotowuje debugowanie przesłanego programu';
$string['vpl_evaluate.cases'] = 'Przypadki testowe do oceny';
$string['vpl_evaluate.sh'] = 'Ten skrypt przygotowuje sprawdzenie przesłanego programu';
$string['vpl_run.sh'] = 'Ten skrypt przygotowuje wykonanie przesłanego programu';
$string['websocket_protocol'] = 'Protokół WebSocket';
$string['websocket_protocol_description'] = 'Typ protokołu WebSocket (ws:// or wss://) używany przez przeglądarkę do łączenia się z serwerami wykonawczymi.';
$string['workingperiods'] = 'Okresy pracy';
$string['worktype'] = 'Rodzaj pracy';
