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
 * Strings for component 'scorm', language 'pl', version '4.0'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktywacja';
$string['activityloading'] = 'Automatycznie zostaniesz przeniesiony do aktywności w';
$string['activityoverview'] = 'Masz pakiety SCORM, które wymagają uwagi';
$string['activitypleasewait'] = 'Ładowanie, proszę czekać...';
$string['adminsettings'] = 'Ustawienia administratora';
$string['advanced'] = 'Zaawansowane';
$string['aicchacpkeepsessiondata'] = 'Czas danych sesji AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Okres czasu (w dniach) przechowywania zewnętrznych danych sesji AICC HACP (wysoka wartość powoduje zapełnianie tabeli starymi danymi, ale może się przydać podczas debugowania)';
$string['aicchacptimeout'] = 'Limit czasu AICC HACP';
$string['aicchacptimeout_desc'] = 'Okres czasu (w minutach), przez jaki zewnętrzna sesja AICC HACP może pozostać otwarta';
$string['allowapidebug'] = 'Włącz debugowanie i śledzenie API (ustaw maskę przechwytywania przez apidebugmask)';
$string['allowtypeaicchacp'] = 'Włącz zewnętrzne AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Opcja pozwala na zewnętrzną komunikację AICC HACP bez konieczności logowania użytkownika przez żądania typu POST z zewnętrznego pakietu AICC';
$string['allowtypeexternal'] = 'Włącz zewnętrzny typ pakietu';
$string['allowtypeexternalaicc'] = 'Włącz bezpośrednie URLe AICC';
$string['allowtypeexternalaicc_desc'] = 'Opcja umożliwia bezpośredni dostęp przez adres URL do prostego pakietu AICC';
$string['allowtypelocalsync'] = 'Włącz typ pakietu ładowalnego';
$string['apidebugmask'] = 'Maska debugowania API - użyj prostego wyrażenia regularnego na &lt;username&gt;: &lt;activityname&gt; np. admin:.* debugowanie tylko dla użytkownika admin.';
$string['areacontent'] = 'Pliki treści';
$string['areapackage'] = 'Plik pakietu';
$string['asset'] = 'Zasób';
$string['assetlaunched'] = 'Zasób - obejrzany';
$string['attempt'] = 'Próba';
$string['attempt1'] = '1 próba';
$string['attempts'] = 'Próby';
$string['attemptsmanagement'] = 'Zarządzanie próbami';
$string['attemptstatusall'] = 'Kokpit i strona wpisów';
$string['attemptstatusentry'] = 'Tylko strona wejściowa';
$string['attemptstatusmy'] = 'Tylko Kokpit';
$string['attemptsx'] = '{$a} prób';
$string['attr_error'] = 'Nieprawidłowa wartość atrybutu ({$a->attr}) w tagu {$a->tag}.';
$string['autocommit'] = 'Automatyczne zatwierdzanie';
$string['autocontinue'] = 'Automatyczna kontynuacja';
$string['autocontinue_help'] = '<p><b>Auto-Kontynuacja</b></p>
<p> Jeżeli automatyczna kontynuacja jest ustawiona na "tak", wtedy SCO wywołuje metodę "close communication", automatycznie następny SCO będzie dostępny.</p>
<p>Jeżeli jest ustawione "Nie", uzytkownik musi użyć przycisku "kontynuuj" żeby kontynuować.</p>';
$string['autocontinuedesc'] = 'Jeśli ta opcja jest włączona, kolejne obiekty edukacyjne są uruchamiane automatycznie, w przeciwnym razie należy użyć przycisku Kontynuuj.';
$string['averageattempt'] = 'Średnia prób';
$string['badarchive'] = 'Musisz wprowadzić poprawny plik zip';
$string['badmanifest'] = 'Błedy manifestów: zobacz logi błędów';
$string['browse'] = 'Przeglądaj';
$string['browsed'] = 'Przeglądane';
$string['browsemode'] = 'Tryb przeglądania';
$string['browserepository'] = 'Przeglądaj repozytorium';
$string['calendarend'] = '{$a} zamyka się';
$string['calendarstart'] = '{$a} otwiera się';
$string['cannotaccess'] = 'Nie możesz wywołać tego skryptu w ten sposób';
$string['cannotfindsco'] = 'Nie można znaleźć SCO';
$string['chooseapacket'] = 'Wybierz lub uaktualnij pakiet SCORMa';
$string['closebeforeopen'] = 'Ustawiłeś datę zamknięcia przed datą otwarcia';
$string['compatibilitysettings'] = 'Ustawienia zgodności';
$string['completed'] = 'Zakończone';
$string['completiondetail:allscos'] = 'Wykonaj wszystkie elementy tej aktywności';
$string['completiondetail:completionscore'] = 'Uzyskaj wynik {$a} lub więcej';
$string['completiondetail:completionstatuscompleted'] = 'Ukończ aktywność';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Ukończ lub zalicz aktywność';
$string['completiondetail:completionstatuspassed'] = 'Zalicz aktywność';
$string['completionscorerequired'] = 'Wymagany minimalny wynik';
$string['completionscorerequired_help'] = 'Włączenie tego ustawienia będzie wymagać od użytkownika co najmniej minimalnego wyniku, aby mógł oznaczyć aktywność SCORM jako kompletną';
$string['completionscorerequireddesc'] = 'Minimalny wynik {$a} jest wymagany do ukończenia';
$string['completionstatus_completed'] = 'Zakończony';
$string['completionstatus_passed'] = 'Zaliczony';
$string['completionstatusrequired'] = 'Wymagany status';
$string['completionstatusrequired_help'] = 'Sprawdzanie jednego lub więcej stanów wymaga od użytkownika osiągnięcia co najmniej jednego z kontrolowanych stanów, aby ta aktywność SCORM mogła zostać oznaczona jako kompletna';
$string['completionstatusrequireddesc'] = 'Student musi osiągnąć co najmniej jeden z następujących statusów: {$a}';
$string['confirmloosetracks'] = 'UWAGA: Ten pakiet wydaje się być zmienionym lub zmodyfikowanym. Jeśli struktura tego pakietu uległa zmianie, niektóre informacje o użyciu pakietu przez użytkowników mogą zostać utracone.';
$string['contents'] = 'Zawartość';
$string['coursepacket'] = 'Pakiet kursu';
$string['coursestruct'] = 'Struktura kursu';
$string['crontask'] = 'Przetwarzanie w tle dla SCORM';
$string['currentwindow'] = 'Bieżące okno';
$string['datadir'] = 'Błąd systemu plików: Nie można utworzyć folderu z danymi kursu.';
$string['defaultdisplaysettings'] = 'Domyślne ustawienia wyświetlania';
$string['defaultgradesettings'] = 'Ustawienia domyślne ocen';
$string['defaultothersettings'] = 'Inne ustawienia domyślne';
$string['deleteallattempts'] = 'Usuń wszystkie próby SCORM';
$string['deleteattemptcheck'] = 'Czy jesteś absolutnie pewien, że chcesz całkowicie usunąć te próby?';
$string['deleteselected'] = 'Usuń zaznaczone próby';
$string['deleteuserattemptcheck'] = 'Czy jesteś absolutnie pewien, że chcesz całkowicie usunąć wszystkie Twoje próby?';
$string['details'] = 'Szczegóły ścieżki';
$string['directories'] = 'Pokaż łącze do katalogu';
$string['disabled'] = 'Wyłączony';
$string['display'] = 'Pokaż';
$string['displayactivityname'] = 'Wyświetl nazwę aktywności';
$string['displayactivityname_help'] = 'Wyświetla lub nie nazwę aktywności powyżej odtwarzacza SCORM.';
$string['displayattemptstatus'] = 'Wyświetl status prób';
$string['displayattemptstatus_help'] = 'Jeśli opcja jest włączona, wyniki prób użytkownika są wyświetlane w bloku przeglądu kursu w kokpicie i/lub na stronie SCORM.';
$string['displayattemptstatusdesc'] = 'Czy wyświetlać podsumowanie prób użytkownika w bloku przeglądu kursu w kokpicie i/lub na stronie SCORM?';
$string['displaycoursestructure'] = 'Wyświetl strukturę kursu na stronie wejściowej';
$string['displaycoursestructure_help'] = 'Jeśli włączone, spis treści jest wyświetlany na stronie konspektu SCORM.';
$string['displaycoursestructuredesc'] = 'Jeśli ta opcja jest włączona, spis treści jest wyświetlany na stronie konspektu SCORM.';
$string['displaydesc'] = 'To ustawienie włącza pokazywanie pakietu dla aktywności';
$string['displaysettings'] = 'Wyświetl ustawienia';
$string['dnduploadscorm'] = 'Dodaj pakiet SCORM';
$string['domxml'] = 'Zewnętrzna biblioteka DOMXML';
$string['element'] = 'Element';
$string['enter'] = 'Wejdź';
$string['entercourse'] = 'Wejdź do kursu';
$string['errorlogs'] = 'Logi błędów';
$string['eventattemptdeleted'] = 'Próba usunięta';
$string['everyday'] = 'Każdy dzień';
$string['everytime'] = 'Przy każdym użyciu';
$string['exceededmaxattempts'] = 'Osiągnąłeś maksymalną liczbę prób.';
$string['exit'] = 'Wyjdź z kursu';
$string['exitactivity'] = 'Wyjdź z aktywności';
$string['expired'] = 'Niestety, ta aktywność została zamknięta {$a} i nie jest już dostępna';
$string['external'] = 'Aktualizacja czasy zewnętrznych pakietów';
$string['failed'] = 'Nieudane';
$string['finishscorm'] = 'Po zakończeniu oglądania tego zasobu, {$a}';
$string['finishscormlinkname'] = 'kliknij tu, aby wrócić do strony kursu';
$string['firstaccess'] = 'Pierwszy dostęp';
$string['firstattempt'] = 'Pierwsza próba';
$string['forceattemptalways'] = 'Zawsze';
$string['forcecompleted'] = 'Wymuś stan zakończenia';
$string['forcecompleted_help'] = 'Jeśli włączone, stan aktualnej próby jest ustawiany na"zakończono". To ustawienie ma zastosowanie tylko do pakietu SCORM 1.2. Jest to przydatne, jeśli pakiet SCORM nie obsługuje poprawnie ponownego wejścia do próby lub w inny sposób niewłaściwie ustawia status zakończenia.';
$string['forcecompleteddesc'] = 'Wartość domyślna wymuszania stanu zakończenia';
$string['forcejavascript'] = 'Zmuś użytkowników do włączenia JavaScript';
$string['forcejavascript_desc'] = 'Jeśli włączono (zalecane) to uniemożliwia to dostęp do obiektów SCORMa, kiedy JavaScript nie jest obsługiwany/włączony w przeglądarce użytkownika. Jeśli opcję wyłączono, użytkownik może wyświetlić SCORM, ale komunikacja API się nie powiedzie i informacje o ocenach nie zostaną zapisane.';
$string['forcejavascriptmessage'] = 'JavaScript jest wymagana do wyświetlenia tego obiektu, włącz obsługę JavaScript w przeglądarce i spróbuj ponownie.';
$string['forcenewattempts'] = 'Wymuś nową próbę';
$string['found'] = 'Znaleziono manifest';
$string['frameheight'] = 'Ustaw domyślną wysokość ramki SCO';
$string['framewidth'] = 'Ustaw domyślną szerokość ramki SCO';
$string['fromleft'] = 'Z lewej';
$string['fromtop'] = 'Z góry';
$string['fullscreen'] = 'Wyświetl na całym ekranie';
$string['general'] = 'Dane ogólne';
$string['gradeaverage'] = 'Średnia ocen';
$string['gradeforattempt'] = 'Ocena za próbę';
$string['gradehighest'] = 'Najwyższa ocena';
$string['grademethod'] = 'Metoda oceniania';
$string['grademethod_help'] = '<p><b>Metody oceniania</b></p>
<p>
Wynik pracy na SCORM/AICC pokazany na stronach ocen może być obliczony w kilku trybach:
<ul>
<li><b>Liczba obiektów SCO</b><br/>
Ten tryb pokazuje liczbę zakończonych/zdanych SCO. Wartością maksymalną jest ilość SCO.
<li><b>Najlepsza ocena</b><br/>
Strona ocenianie wyświetla najwyższy wynik uzyskanych przez uczestników we wszystkich zdanych SCO.
<li><b>Ocena przeciętna</b><br/>
Jeśli wybierasz ten tryb Moodle określi średnią wszystkich wyników.
<li><b>Ocena zsumowana</b><br/>
W tym trybie wszystkie wyniki zostaną zsumowane.
</li></p>';
$string['grademethoddesc'] = 'Wartość domyślna metody oceniania aktywności';
$string['gradereported'] = 'Ocena przekazana';
$string['gradescoes'] = 'Liczba obiektów SCO';
$string['gradesettings'] = 'Ustawienia oceny';
$string['gradesum'] = 'Zsumuj oceny';
$string['height'] = 'Wysokość';
$string['hidden'] = 'Ukryty';
$string['hidebrowse'] = 'Wyłącz tryb podglądu';
$string['hidebrowse_help'] = 'Tryb podglądu pozwala studentowi przeglądać aktywność przed oficjalnym podejściem do rozwiązania. Jeśli tryb podglądu jest wyłączony, przycisk podglądu jest ukryty.';
$string['hidebrowsedesc'] = 'Wartość domyślna trybu podglądu';
$string['hideexit'] = 'Ukryj link do wyjścia';
$string['hidereview'] = 'Ukryj przycisk cofania';
$string['hidetoc'] = 'Pokaż strukturę kursu (TOC)';
$string['hidetoc_help'] = 'To ustawienie określa, w jaki sposób spis treści jest wyświetlany w odtwarzaczu SCORM.';
$string['hidetocdesc'] = 'Wartość domyślna pokazywania spisu treści kursu w odtwarzaczu';
$string['highestattempt'] = 'Najwyższa próba';
$string['identifier'] = 'Identyfikator pytania';
$string['incomplete'] = 'Niepełne';
$string['info'] = 'Informacja';
$string['interactions'] = 'Interakcja';
$string['invalidactivity'] = 'Aktywność SCORM jest niepoprawna';
$string['invalidhacpsession'] = 'Nieprawidłowa sesja HACP';
$string['invalidmanifestresource'] = 'UWAGA: Poniższe zasoby były wymienione w manifeście, ale nie zostały znalezione:';
$string['invalidstatus'] = 'Nieprawidłowy status';
$string['invalidurl'] = 'Podano niepoprawny adres URL';
$string['invalidurlhttpcheck'] = 'Określono nieprawidłowy URL. Wiadomość: <pre> {$a->cmsg} </pre>';
$string['last'] = 'Ostatni dostęp o';
$string['lastaccess'] = 'Ostatni dostęp';
$string['lastattempt'] = 'Ostatnia zakończona próba';
$string['lastattemptlock'] = 'Zablokuj po ostatniej próbie';
$string['lastattemptlock_help'] = 'Jeśli opcja jest włączona, student nie może uruchomić odtwarzacza SCORM, gdy  wykorzystał wszystkich przydzielone próby.';
$string['lastattemptlockdesc'] = 'Jeśli ta opcja jest włączona, student nie może uruchomić odtwarzacza SCORM po wykorzystaniu wszystkich przydzielonych mu prób.';
$string['location'] = 'Pokaż pasek pozycji';
$string['max'] = 'Maksymalna punktacja';
$string['maximumattempts'] = 'Liczba prób';
$string['maximumattempts_help'] = 'To ustawienie pozwala ograniczyć liczbę prób. Dotyczy tylko SCORM 1.2 i pakietów AICC.';
$string['maximumattemptsdesc'] = 'Wartość domyślna liczby prób';
$string['maximumgradedesc'] = 'To ustawienie przydziela maksymalną, domyślną ocenę dla aktywności';
$string['menubar'] = 'Pokaż pasek menu';
$string['min'] = 'Minimalny wynik';
$string['missing_attribute'] = 'Brakuje atrybutu {$a->attr} w tagu {$a->tag}';
$string['missing_tag'] = 'Brakuje tagu {$a->tag}';
$string['missingparam'] = 'Brakuje wymaganego parametru lub jest on nieprawidłowy';
$string['mode'] = 'Tryb';
$string['modulename'] = 'Pakiet SCORM';
$string['modulename_help'] = 'SCORM i AICC to zbiór specyfikacji zapewniających interoperacyjność, dostępność i ponowne wykorzystanie internetowych materiałów dydaktycznych. Moduł SCORM/AICC pozwala na umieszczanie w kursach pakietów SCORM/AICC.';
$string['modulenameplural'] = 'Pakiety SCORM';
$string['myattempts'] = 'Moje próby';
$string['nav'] = 'Pokaż nawigację';
$string['navigation'] = 'Nawigacja';
$string['navpositionleft'] = 'Pozycja przycisków nawigacyjnych od lewej strony w pikselach.';
$string['navpositiontop'] = 'Pozycja przycisków nawigacyjnych od góry w pikselach.';
$string['networkdropped'] = 'Moduł prezentacji SCORM ustalił, że twoje połączenie internetowe jest niewiarygodne lub zostało przerwane. Jeśli będziesz kontynuować prezentację SCORM, twoje postępy mogą nie zostać zapisane.
Opuść prezentację i powróć, gdy będzesz mieć niezawodne połączenie z Internetem.';
$string['newattempt'] = 'Rozpocznij nową próbę';
$string['next'] = 'Kontynuuj';
$string['no_attributes'] = 'Tag {$a->tag} musi mieć atrybuty';
$string['no_children'] = 'Tag {$a->tag} musi mieć \'potomków\'';
$string['noactivity'] = 'Pusty raport';
$string['noattemptsallowed'] = 'Liczba dozwolonych prób';
$string['noattemptsmade'] = 'Liczba wykonanych prób';
$string['nolimit'] = 'Nieograniczone próby';
$string['nomanifest'] = 'Nieprawidłowy pakiet plików - brak struktury imsmanifest.xml lub AICC';
$string['noprerequisites'] = 'Niestety nie masz odpowiednich praw dostępu do tego obiektu.';
$string['noreports'] = 'Brak raportu do wyświetlenia';
$string['normal'] = 'Normalne';
$string['noscriptnoscorm'] = 'Twoja przeglądarka nie wspiera JavaScript lub obsługa JavaScript została wyłączona. Nie można wyświetlić pakietu lub zapisać danych.';
$string['not_corr_type'] = 'Błąd typu w tagu {$a->tag}';
$string['notattempted'] = 'Nie próbowano';
$string['notopenyet'] = 'Niestety, ta aktywność jest niedostępna do {$a}';
$string['objectives'] = 'Cele';
$string['openafterclose'] = 'Określiłeś datę otwarcia po dacie zamknięcia';
$string['optallstudents'] = 'wszyscy użytkownicy';
$string['optattemptsonly'] = 'użytkownicy, którzy mają próby';
$string['options'] = 'Opcje';
$string['optionsadv'] = 'Opcje (zaawansowane)';
$string['optionsadv_desc'] = 'Jeśli zaznaczono, opcje okna zostaną ustawione jako zaawansowane opcji na formularzu';
$string['optnoattemptsonly'] = 'użytkownicy, którzy nie mają prób';
$string['organization'] = 'Organizacja';
$string['organizations'] = 'Organizacje';
$string['othersettings'] = 'Dodatkowe ustawienia';
$string['package'] = 'Plik pakietu';
$string['package_help'] = '<p><b>Plik pakietu</b></p>

<p>Pakiet jest plikiem z rozszerzeniem <b>zip</b> (lub pif) i zawiera pliki definicji kursu AICC lub SCORM.</p>

<p>Pakiet <b>SCORM</b> musi zawierać w sobie pliki o nazwie <b>imsmanifest.xml</b> który definiuje strukturę kursu SCORM, lokalizację zasobów i wiele innych rzeczy.<p>

<p>Pakiet <b>AICC</b> jest określany przez kilka plików (od 4 do 7) z określonymi rozszerzeniami. Poniżej znajdziesz oznaczenia rozszerzeń:
<ul>
<li>CRS &#8211; Plik Opisu Kursu
<li>AU &#8211; Plik Jednostki Zadaniowej
<li>DES &#8211; Plik Opisowy
<li>CST &#8211; Plik Struktury Kursu
<li>ORE &#8211; Plik Zależności Obiektywnych (opcjonalny)
<li>PRE &#8211; Plik Założeń Wstępnych (opcjonalny)
<li>CMP &#8211; Plik Wymogu Ukończenia (opcjonalny)
</ul>';
$string['packagedir'] = 'Błąd systemu plików: Nie można utworzyć folderu dla pakietu';
$string['packagefile'] = 'Nie wskazano pliku';
$string['packagehdr'] = 'Pakiet';
$string['packageurl'] = 'adres URL';
$string['packageurl_help'] = 'To ustawienie pozwala określić URL do pakietu SCORM, zamiast wskazywać plik w oknie wyboru pliku.';
$string['page-mod-scorm-x'] = 'Jakakolwiek strona SCORM';
$string['pagesize'] = 'Rozmiar strony';
$string['passed'] = 'Udane';
$string['php5'] = 'PHP5 (natywna biblioteka DOMXML)';
$string['pluginadministration'] = 'Administracja pakietem SCORM';
$string['pluginname'] = 'Pakiet SCORM';
$string['popup'] = 'Otwórz w nowym oknie';
$string['popuplaunched'] = 'Ten pakiet SCORM został uruchomiony w wyskakującym oknie. Po zakończeniu przeglądania tego zasobu i zamknięciu okna zostaniesz automatycznie przekierowany do strony kursu, jeśli nie, kliknij tutaj, aby powrócić do strony kursu.';
$string['popupmenu'] = 'W menu rozwijanym';
$string['popupopen'] = 'Otwórz w nowym oknie';
$string['popupsblocked'] = 'Wydaje się, że wyskakujące okna są zablokowane, przez co moduł SCORM się nie wyświetla. Proszę sprawdzić ustawienia przeglądarki i spróbować ponownie.';
$string['position_error'] = 'Tag {$a->tag} nie może być \'dzieckiem\' {$a->parent}';
$string['preferencespage'] = 'Preferencje tylko dla bieżącej strony';
$string['preferencesuser'] = 'Preferencje tylko dla tego raportu';
$string['prev'] = 'Poprzednie';
$string['privacy:metadata:aicc:externalpurpose'] = 'Ta wtyczka wysyła dane na zewnątrz za pomocą AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Status lekcji do śledzenia';
$string['privacy:metadata:aicc_session:scormmode'] = 'Tryb śledzonego elementu';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Status elementu do śledzenia';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Czas sesji do śledzenia';
$string['privacy:metadata:aicc_session:timecreated'] = 'Czas utworzenia śledzonego elementu';
$string['privacy:metadata:attempt'] = 'Numer próby';
$string['privacy:metadata:scoes_track:element'] = 'Nazwa elementu do śledzenia';
$string['privacy:metadata:scoes_track:value'] = 'Wartość danego elementu';
$string['raw'] = 'Surowe punkty';
$string['regular'] = 'Zwykły manifest';
$string['report'] = 'Raport';
$string['reportcountallattempts'] = '{$a->nbattempts} prób {$a->nbusers} użytkowników, spośród {$a->nbresults} wyników';
$string['reportcountattempts'] = '{$a->nbresults} wyników ({$a->nbusers} użytkowników)';
$string['reports'] = 'Raporty';
$string['response'] = 'Odpowiedź';
$string['result'] = 'Wynik';
$string['results'] = 'Wyniki';
$string['review'] = 'Przegląd';
$string['reviewmode'] = 'Tryb przeglądu';
$string['rightanswer'] = 'Prawidłowa odpowiedź';
$string['scoes'] = 'Obiekty SCO';
$string['score'] = 'Wynik';
$string['scorm:addinstance'] = 'Dodaj nowy pakiet SCORM';
$string['scorm:deleteownresponses'] = 'Usuń własne próby';
$string['scorm:deleteresponses'] = 'Usuń próby SCORM';
$string['scorm:savetrack'] = 'Zapisz ścieżkę';
$string['scorm:skipview'] = 'Pomiń wprowadzenie';
$string['scorm:viewreport'] = 'Zobacz raport';
$string['scorm:viewscores'] = 'Zobacz wyniki';
$string['scormclose'] = 'Dostępne do';
$string['scormcourse'] = 'Kurs SCORM';
$string['scormloggingoff'] = 'Logowanie API jest wyłączone';
$string['scormloggingon'] = 'Logowanie API jest włączone';
$string['scormopen'] = 'Dostępne od';
$string['scormresponsedeleted'] = 'Usunięte próby użytkownika';
$string['scormtype'] = 'Typ';
$string['scormtype_help'] = 'To ustawienie określa, w jaki sposób pakiet jest wstawiany do kursu. Istnieją 4 opcje:

* Pakiet przesłany - pakiet SCORM może być wskazany i wybrany w oknie wyboru pliku
* Zewnętrzny manifest SCORM - pozwala określić imsmanifest.xml URL. Uwaga: Jeśli adres URL ma inną domenę niż witryna, lepszym rozwiązaniem jest typ "Pobrany pakiet", w przeciwnym razie oceny nie są zapisywane.
* Pakiet pobrany - pozwala okreslić URL pakietu. Pakiet zostanie rozpakowany, zapisany lokalnie i będzie aktualizowany wraz z zewnętrznym pakietem SCORM.
* Lokalne repozytorium IMS - umożliwia wybór pakietu z lokalnego repozytorium IMS
* Zewnętrzny URL AICC - ten URL uruchamia jeden prosty moduł AICC. Wokół niego zostanie zbudowana pseudo pakiet.';
$string['scrollbars'] = 'Włącz pasek przewijania w oknie';
$string['search:activity'] = 'Pakiet SCORM - informacje o aktywności';
$string['selectall'] = 'Zaznacz wszystko';
$string['selectnone'] = 'Odznacz wszystko';
$string['show'] = 'Pokaż';
$string['sided'] = 'Z boku';
$string['skipview'] = 'Student pomija strony spisu treści';
$string['skipview_help'] = 'To ustawienie określa, czy strona spisu treści może być pomijana (nie wyświetlana). Jeśli pakiet zawiera tylko jeden obiekt, spis treści może być zawsze pomijany.';
$string['skipviewdesc'] = 'Wartość domyślna pomijania spisu treści';
$string['slashargs'] = 'OSTRZEŻENIE: argumenty po ukośniku / są wyłączone na tej stronie i obiekty mogą nie działać zgodnie z oczekiwaniami!';
$string['stagesize'] = 'Rozmiar ramki/okna';
$string['stagesize_help'] = 'Te dwa ustawienia określają szerokość i wysokość okna dla obiektów SCO.';
$string['started'] = 'Rozpoczęte o';
$string['status'] = 'Stan';
$string['statusbar'] = 'Pokaż pasek stanu';
$string['student_response'] = 'odpowiedź';
$string['subplugintype_scormreport'] = 'Raport';
$string['subplugintype_scormreport_plural'] = 'Raporty';
$string['suspended'] = 'Zawieszone';
$string['syntax'] = 'Błąd składni';
$string['tag_error'] = 'Nieznany tag ({$a->tag}) w treści: {$a->value}';
$string['time'] = 'Czas';
$string['title'] = 'Tytuł';
$string['toc'] = 'Spis treści';
$string['too_many_attributes'] = 'Tag {$a->tag} ma za wiele atrybutów';
$string['too_many_children'] = 'Tag {$a->tag} ma za wiele \'dzieci\'';
$string['toolbar'] = 'Pokaż pasek narzędzi';
$string['totaltime'] = 'Czas (suma)';
$string['trackcorrectcount'] = 'Liczba poprawnych';
$string['trackcorrectcount_help'] = 'Liczba poprawnych wyników pytania';
$string['trackid'] = 'Id';
$string['trackingloose'] = 'OSTRZEŻENIE: Dane dotyczące monitorowania tego pakietu SCORMa zostaną utracone!';
$string['tracklatency'] = 'Czas oczekiwania';
$string['tracklatency_help'] = 'Czas, jaki upłynął między wyświetleniem <br>elementu interaktywnego <br/> a pierwszą reakcją';
$string['trackpattern'] = 'Wzór';
$string['trackresponse'] = 'Odpowiedź';
$string['trackresult'] = 'Wynik';
$string['trackresult_help'] = 'Wynik na podstawie odpowiedzi studenta <br/> i poprawnego wyniku';
$string['trackscoremax'] = 'Maksymalny wynik';
$string['trackscoremax_help'] = 'Maksymalna wartość w zakresie surowego wyniku';
$string['trackscoremin'] = 'Minimalny wynik';
$string['trackscoremin_help'] = 'Minimalna wartość w zakresie surowego wyniku';
$string['trackscoreraw_help'] = 'Liczba, która odzwierciedla wyniki ucznia <br/> względem przedziału wartości (min..max)';
$string['tracksuspenddata'] = 'Zawieszone dane';
$string['tracksuspenddata_help'] = 'Miejsce do zachowywania danych <br/> ucznia między sesjami';
$string['tracktime'] = 'Czas';
$string['tracktime_help'] = 'Czas, w którym rozpoczęto próbę';
$string['tracktype'] = 'Typ';
$string['tracktype_help'] = 'Typ pytania, na przykład "wybór wielokrotny" lub "krótka odpowiedź".';
$string['trackweight'] = 'Waga';
$string['trackweight_help'] = 'Waga przypisana elementowi';
$string['type'] = 'Typ';
$string['typeaiccurl'] = 'Zewnętrzny URL AICC';
$string['typeexternal'] = 'Zewnętrzny manifest SCORM';
$string['typelocal'] = 'Przesłany pakiet';
$string['typelocalsync'] = 'Pobrany pakiet';
$string['unziperror'] = 'Wystąpił błąd podczas rozpakowywania pakietu';
$string['updatefreq'] = 'Częstotliwość automatycznej aktualizacji';
$string['updatefreq_help'] = 'Pozwala na automatycznie pobieranie i aktualizowanie zewnętrznych pakietów';
$string['updatefreqdesc'] = 'Wartość domyślna częstotliwości automatycznej aktualizacji';
$string['validateascorm'] = 'Autoryzuj pakiet SCORMa';
$string['validation'] = 'Wynik autoryzacji';
$string['validationtype'] = 'Wybierz bibliotekę DOMXML, która będzie autoryzowała Manifest SCORM. Jeśli się na tym nie znasz, pozostaw wartość obecnie wybraną.';
$string['value'] = 'Wartość';
$string['versionwarning'] = 'Wersja manifestu jest starsza niż 1.3, ostrzeżenie w tagu {$a->tag}';
$string['viewallreports'] = 'Przejrzyj raporty dla {$a} prób';
$string['viewalluserreports'] = 'Przejrzyj raporty dla {$a} studentów';
$string['whatgrade'] = 'Oceń próby';
$string['whatgrade_help'] = 'Jeśli wielokrotne próby są dozwolone, to ustawienie określa, czy najwyższa, średnia, pierwsza czy ostatnia ukończona próba jest rejestrowana w dzienniku ocen. Ostatnia ukończona opcja próba nie obejmuje prób ze  statusem "nieudane".

Obsługa wielokrotnych prób

* Opcja rozpoczęcia nowej próby jest dostępna przez pole checkbox nad przyciskiem Wejdź na stronie spisu treści, więc upewnij się, że dajesz dostęp do tej strony, jeśli chcesz dopuścić wielokrotne próby.
* Niektóre pakiety SCORM są przygotowane na obsługę nowych prób, jednak wiele - nie. Oznacza to, że jeśli uczeń wejdzie ponownie do rozpoczętej próby, a specjalnie nie uwzględniono tego w wewnętrznej logice tego SCORMa, odpowiedzi mogą uleć nadpisaniu, mimo że próba była oznaczona jako "ukończona" lub "udana"
* Ustawienia "Wymuś stan zakończenia", "Wymuś nowe podejścia" i "Zablokuj po ostatniej próbie" także pozwalają na zarządzanie wieloma próbami.';
$string['whatgradedesc'] = 'Wartość domyślna oceny za próbę';
$string['width'] = 'Szerokość';
$string['window'] = 'Okno';
$string['youmustselectastatus'] = 'Musisz wybrać status na wymagany';
