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
 * Strings for component 'hotpot', language 'pl', version '4.0'.
 *
 * @package     hotpot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Zaniechany';
$string['abandonhotpot'] = 'Twoje dotychczasowe rezultaty zostaną zapisane, ale nie będzie można później wznowić lub ponownie uruchomić tej aktywności.';
$string['activitycloses'] = 'Aktywność dostępna do';
$string['activitygrade'] = 'Ocena aktywności';
$string['activityopens'] = 'Aktywność dostępna od';
$string['added'] = 'Dodano';
$string['addquizchain'] = 'Dodaj łańcuch quizu';
$string['addquizchain_help'] = 'Czy wszystkie quizy w łańcuchu quizu powinny być dodane?

**Nie**
: tylko jeden quiz może być dodany do kursu

**Tak**
: jeżeli plikiem źródłowym jest **plik quizu**, to jest traktowane jako początkowy łańcuch quizów i wszystkie quizy w łańcuchu będą dodane do kursu z identycznymi ustawieniami. Każdy quiz w łańcuchu musi mieć link do następnego pliku w łańcuchu.

Jeżeli plikiem źródłowym jest **folder**, wszystkie rozpoznawalne quizy w folderze będą dodane do kursu tworząc łańcuch quizów z identycznymi ustawieniami.

Jeżeli plikiem źródłowym jest **jednostkowy plik**, tj. plikiem mieszanki Hot Potatoes lub index.html, quizy wymienione w pliku jednostkowym powinny być dodane do kursu jako łańcuch quizów z identycznymi ustawieniami.';
$string['allowpaste'] = 'Zezwalaj na wklejanie';
$string['allowpaste_help'] = 'Jeżeli ustawienie jest włączone, studenci mogą kopiować, wklejać i przeciągać tekst z tekstowego boksu wejścia.';
$string['allowreview'] = 'Zezwól na przegląd';
$string['allowreview_help'] = 'Jeśli opcja jest włączona, studenci mogą dokonać przeglądu swoich prób po zamknięciu quizu.';
$string['analysisreport'] = 'Analiza pozycji';
$string['attempted'] = 'Próbowano';
$string['attemptlimit'] = 'Limit prób';
$string['attemptlimit_help'] = 'Maksymalna liczba prób, które student może wykorzystać w tej aktywności HotPot';
$string['attemptnumber'] = 'Numer próby';
$string['attempts'] = 'Próby';
$string['attemptscore'] = 'Wynik próby';
$string['attemptsunlimited'] = 'Nieograniczone próby';
$string['average'] = 'Średnia';
$string['averagescore'] = 'Średnia ocena';
$string['bodystyles'] = 'Rodzaje ciał';
$string['bodystylesbackground'] = 'Kolor tła i obraz';
$string['bodystylescolor'] = 'Kolor tekstu';
$string['bodystylesfont'] = 'Rozmiar i krój czcionki';
$string['bodystylesmargin'] = 'Lewy i prawy margines';
$string['cacherecords'] = 'Rekordy pamięci podręcznej  HotPot';
$string['canrestarthotpot'] = 'Twoje dotychczasowe wyniki zostaną zapisane, i możesz później przejść "{$a}"';
$string['canresumehotpot'] = 'Twoje dotychczasowe wyniki zostaną zapisane i możesz je wznowić "{$a}" później.';
$string['checks'] = 'Sprawdzenia';
$string['checksomeboxes'] = 'Proszę zaznaczyć niektóre pola';
$string['clearcache'] = 'Wyczyść pamięć podręczną HotPot';
$string['cleardetails'] = 'Wyczyść pamięć podręczną HotPot';
$string['clearedcache'] = 'Pamięć podręczna HotPot została wyczyszczona';
$string['cleareddetails'] = 'Szczegóły HotPot zostały wyczyszczone';
$string['clickreporting'] = 'Włącz raportowanie kliknięcia';
$string['clickreporting_help'] = 'Jeżeli włączone, oddzielny rekord rejestruje każdy czas kliknięcia przycisku "podpowiedzi", "wskazówki" lub "sprawdzania". Pozwala to nauczycielowi na zobaczenie bardzo szczegółowego raportu pokazującego stan quizu przy kliknięciu. Jednakże, tylko jeden rekord na próbę w quizie jest trzymany.';
$string['clicktrailreport'] = 'Trasy kliknięć';
$string['closed'] = 'Ta aktywność została zamknięta';
$string['clues'] = 'Wskazówki';
$string['completed'] = 'Zakończone';
$string['configbodystyles'] = 'Domyślnie, style tematu Moodle mogą nadpisywać style aktywności HotPot. Jednakże, dla każdego wybranego tutaj stylu, style aktywności HotPot będą mieli pierwszeństwo przez style tematu Moodle.';
$string['configenablecache'] = 'Utrzymanie pamięci podręcznej HotPot quizów może znacząco podnieść szybkość dostarczania quizów do studentów.';
$string['configenablecron'] = 'Określ godziny w swojej strefie czasowej, w której może działać skrypt crona HotPot';
$string['configenablemymoodle'] = 'To ustawienie określa, czy HotPot jest wyświetlane na stronie Mój Moodle czy nie';
$string['configenableobfuscate'] = 'Zaciemnianie kodu JavaScript przy wstawianiu odtwarzaczy multimedialnych sprawia, że jest trudniej określić nazwę pliku multimedialnego i określenia co plik zawiera.';
$string['configenableswf'] = 'Zezwalaj na umieszczanie plików SWF w aktywności HotPot. Po włączeniu tego ustawienia filtr_mediaplugin_enable_swf zastanie nadpisany.';
$string['configfile'] = 'Plik konfiguracyjny';
$string['configframeheight'] = 'Kiedy quiz jest wyświetlany w ramce, ta wartość jest wysokością (w pikselach) górnej ramki, która zawiera pasek nawigacyjny Moodle.';
$string['configlocation'] = 'Lokalizacja pliku konfiguracyjnego';
$string['configlockframe'] = 'Jeżeli to ustawienie jest włączone, ramka nawigacyjna, jeżeli jest używana, będzie zablokowana, bez możliwości przesuwania i bez ramki.';
$string['configmaxeventlength'] = 'Jeżeli HotPot ma oba określone czasy otwarcia i zamknięcia, i różnica między dwoma czasami jest większa niż liczba dni określonych tutaj, wtedy dwa oddzielne kalendarze wydarzeń będą dodane do kalendarza kursu. Dla krótszych czasów trwania, lub kiedy tylko jeden czas jest określony, tylko jeden kalendarz wydarzeń będzie dodany. Jeżeli żaden czas nie jest określony,żaden kalendarz wydarzeń nie będzie dodany.';
$string['configstoredetails'] = 'Jeżeli to ustawienie jest włączone, wtedy surowy XML szczegółów, prób quizów HotPot będzie przechowywany w tabeli hotpot_details. Pozwala to próbom quizu na ponowne ocenianie w przyszłości, aby odzwierciedlić zmiany w systemie wyników quizu HotPot. Jednakże, włączenie tej opcji na obciążonej stronie będzie powodować szybki wzrost tabeli hotpot_details.';
$string['confirmdeleteattempts'] = 'Czy na pewno chcesz usunąć te próby?';
$string['confirmstop'] = 'Czy na pewno chcesz opuścić tę stronę?';
$string['correct'] = 'Poprawny';
$string['couldnotinsertsubmissionform'] = 'Nie można wstawić formularza zgłoszeniowego';
$string['d_index'] = 'Indeks róźnicujący';
$string['delay1'] = 'Opóźnienie 1';
$string['delay1_help'] = 'Minimalne opóźnienie pomiędzy pierwszą a drugą próbą.';
$string['delay1summary'] = 'Opóźnienie pomiędzy pierwszą i drugą próbą';
$string['delay2'] = 'Opóźnienie 2';
$string['delay2_help'] = 'Minimalne opóźnienie pomiędzy próbami po drugim podejściu.';
$string['delay2summary'] = 'Opóźnienie pomiędzy późniejszymi próbami';
$string['delay3'] = 'Opóźnienie 3';
$string['delay3_help'] = 'Ustawienie określa opóźnienie pomiędzy zakończonym quizem i kontrolą powrotu do Moodle.

**Użycie określonego czasu (w sekundach)**
: kontrola powróci do Moodle po określonej liczbie sekund.

**Użycie ustawień w źródle/szablonie pliku**
: kontrola powróci  do Moodle po ilości sekund określonych w pliku źródłowym lib plikach szablonu dla tego formatu wyjściowego.

**Oczekiwanie do kliknięcia przez studenta OK**
: kontrola powróci do Moodle po tym jak student kliknie przycisk OK na wiadomości zakończenia w quizie.

**Nie kontynuuj automatycznie**
: kontrola nie powróci do Moodle po zakończeniu quizu. Student sam decyduje o nawigacji ze strony quizu.

Uwagi: wyniki quizu zawsze powracają do Moodle bezpośrednio, kiedy quiz jest zakończony lub opuszczony, niezależnie od tego ustawienia.';
$string['delay3afterok'] = 'Zaczekaj, aż student kliknie OK';
$string['delay3disable'] = 'Nie kontynuuj automatycznie';
$string['delay3specific'] = 'Użyj określonego czasu (w sekundach)';
$string['delay3summary'] = 'Opóźnienie na końcu quizu';
$string['delay3template'] = 'Użyj ustawień pliku źródłowego / szablonu';
$string['deleteallattempts'] = 'Usuń wszystkie próby';
$string['deleteattempts'] = 'Usuń próby';
$string['detailsrecords'] = 'Szczegóły rekordów HotPot';
$string['duration'] = 'Czas trwania';
$string['enablecache'] = 'Włącz pamięć podręczną HotPot';
$string['enablecron'] = '';
$string['enablemymoodle'] = 'Pokaż HotPots na stronie Mój Moodle';
$string['enableobfuscate'] = 'Włącz zaciemnianie kodu odtwarzacza multimedialnego';
$string['enableswf'] = 'Zezwalaj na umieszczanie plików SWF w aktywności HotPot';
$string['entry_attempts'] = 'Próby';
$string['entry_dates'] = 'Daty';
$string['entry_grading'] = 'Ocenianie';
$string['entry_title'] = 'Nazwa jednostki jako tytuł';
$string['entrycm'] = 'Poprzednia aktywność';
$string['entrycm_help'] = 'Ustawienie to określa aktywność Moodle i minimalną ocenę dla tej aktywności, która musi być osiągnięta zanim ta aktywność HotPot zostanie wypróbowana.

Nauczyciel może wybrać określoną aktywność,
lub jedną z poniższych ogólnych ustawień zastosowania:

* Poprzednia aktywność w tym kursie
* Poprzednia aktywność w tej sekcji
* Poprzedni HotPot w tym kursie
* Poprzedni HotPot w tej sekcji';
$string['entrycmcourse'] = 'Poprzednia aktywność w tym kursie';
$string['entrycmsection'] = 'Poprzednia aktywność w tej części kursu';
$string['entrycompletionwarning'] = 'Przed rozpoczęciem tej aktywności należy spojrzeć na {$a}.';
$string['entrygrade'] = 'Ocena poprzedniej aktywności';
$string['entrygradewarning'] = 'Nie możesz uruchomić tej aktywności dopóki nie osiągniesz wyniku  {$a->entrygrade}% w {$a->entryactivity}. Obecnie, twoja ocena dla aktywności wynosi {$a->usergrade}%';
$string['entryhotpotcourse'] = 'Poprzedni HotPot w tym kursie';
$string['entryhotpotsection'] = 'Poprzedni HotPot w tej części kursu';
$string['entryoptions'] = 'Opcje strony wprowadzenia';
$string['entryoptions_help'] = 'Te pola wyboru włączają lub wyłączają wyświetlanie pozycji na stronie wprowadzenia HotPot.

**Nazwa jednostki jako tytuł**
: jeżeli zaznaczony, nazwa jednostki będzie wyświetlana jako tytuł na stronie wprowadzającej.

**Klasyfikacja**
: jeżeli zaznaczony, informacja oceniania HotPot będzie wyświetlana na stronie wprowadzającej.

**Daty**
: jeżeli zaznaczony, daty otwarcia i zamknięcia HotPot będą wyświetlane na stronie wprowadzającej.

**Próby**
: jeżeli zaznaczony, tabela pokazująca szczegóły poprzednich prób użytkownika na tym HotPot, będzie wyświetlana na stronie wprowadzającej. Próby mogą być wznawiane, poprzez przycisk wznawiania wyświetlanego w prawej kolumnie.';
$string['entrypage'] = 'Pokaż stronę wprowadzenia';
$string['entrypage_help'] = 'Czy studentom powinnoa być pokazywana strona początkowa przed uruchomieniem aktywności HotPot?

**Tak**
: studentom będzie pokazywana strona początkowa przed startem HotPot. Zawartość strony początkowej jest określona przez opcje strony początkowej HotPot.

**Nie**
: studentom nie będzie pokazywana strona początkowa, a HotPot będzie uruchomiony natychmiastowo.

Strona początkowa jest zawsze pokazywana nauczycielowi, w celu dostarczenia dostępu do raportów i strony edycji quizów';
$string['entrypagehdr'] = 'Strona wprowadzenia';
$string['entrytext'] = 'Tekst strony wprowadzenia';
$string['event_attempt_reviewed'] = 'Przegląd próby HotPot';
$string['event_attempt_reviewed_description'] = 'Użytkownik z id "{$a->userid}" przejrzał próbę w aktywności "hotpot" z id modułu kursu "{$a->cmid}"';
$string['event_attempt_reviewed_explanation'] = 'Użytkownik już przejrzał próbę aktywności HotPot';
$string['event_attempt_started'] = 'Próba HotPot rozpoczęła się';
$string['event_attempt_started_description'] = 'Użytkownik z id "{$a->userid}" uruchomił próbę w aktywności "hotpot" z id modułu kursu "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'Użytkownik już uruchomił próbę aktywności HotPot';
$string['event_attempt_submitted'] = 'Próba HotPot wysłana';
$string['event_attempt_submitted_description'] = 'Użytkownik z id "{$a->userid}" wysłał próbę w aktywności "hotpot" z id modułu kursu "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'Użytkownik już wysłał próbę aktywności HotPot';
$string['event_base'] = 'Wykryto wydarzenie HotPot';
$string['event_base_description'] = 'Użytkownik z id "{$a->userid}" rozpoczął wydrzenie w aktywności "hotpot" z id modułu kursu "{$a->cmid}"';
$string['event_base_explanation'] = 'Wydarzenie zostało wykryte przez moduł HotPot';
$string['event_report_viewed'] = 'Przejrzany raport HotPot';
$string['event_report_viewed_description'] = 'Użytkownik z id "{$a->userid}"obejrzał raport prób w aktywności "hotpot" z id modułu kursu "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'Użytkownik już przejrzał raport o próbach w aktywności HotPot';
$string['exit_areyouok'] = 'Cześć, czy nadal tu jesteś?';
$string['exit_attemptscore'] = 'Twój wynik dla tej próby to {$a}';
$string['exit_course'] = 'Kurs';
$string['exit_course_text'] = 'Powrót do strony głównej kursu';
$string['exit_encouragement'] = 'Zachęta';
$string['exit_excellent'] = 'Znakomicie';
$string['exit_feedback'] = 'Odpowiedź zwrotna strony wyjściowej';
$string['exit_feedback_help'] = 'Te opcje włączają lub wyłączają wyświetlanie pozycji odpowiedzi zwrotnej na stronie końcowej HotPot.

**Nazwa jednostki jako tytuł**
: jeżeli zaznaczono, nazwa jednostki będzie wyświetlana jako tytuł na stronie końcowej.

**Zachęta**
: jeżeli zaznaczono, jakieś zachęty będą wyświetlane na stronie końcowej. Zachęta zależy od oceny HotPot:
: **&gt; 90%**: Doskonale!
: **&gt; 60%**: Bardzo dobrze
: **&gt; 0%**: Słabo
: **= 0%**: Wszystko w porządku?

**Jednostka oceny próby**
: jeżeli zaznaczono, ocena dla jednostki próby, która została już zakończona, będzie wyświetlana na stronie końcowej.

**Jednostka oceny**
: jeżeli zaznaczono, ocena HotPot, będzie wyświetlana na stronie końcowej.

Ponadto, jeżeli metoda jednostki oceniania jest większą wiadomością do powiedzenia użytkownikowi, jeżeli większość ostatnich prób była porównywalna lub lepsza do ich poprzednich, zostanie wyświetlona.';
$string['exit_goodtry'] = 'Dobra próba!';
$string['exit_grades'] = 'Oceny';
$string['exit_grades_text'] = 'Spójrz na swoje oceny zdobyte do tej pory w tym kursie';
$string['exit_hotpotgrade'] = 'Twoja ocena dla tej aktywności to {$a}';
$string['exit_hotpotgrade_average'] = 'Twoja średnia ocen zdobyta do tej pory dla tej aktywności to {$a}';
$string['exit_hotpotgrade_highest'] = 'Twoja najwyższa ocena dla tej aktywności wynosi jak na razie {$a}';
$string['exit_hotpotgrade_highest_equal'] = 'Dorównałeś swojej poprzedniej najlepszej dla tej aktywności!';
$string['exit_hotpotgrade_highest_previous'] = 'Twoja poprzednia najwyższa ocena dla tej aktywności wynosiła {$a}';
$string['exit_hotpotgrade_highest_zero'] = 'Nie masz jeszcze wyniku większego niż {$a} dla tej aktywności';
$string['exit_index'] = 'Indeks';
$string['exit_index_text'] = 'Przejdź do indeksu aktywności';
$string['exit_links'] = 'Linki strony końcowej';
$string['exit_links_help'] = 'To są opcje włączające lub wyłączające wyświetlanie niektóre linki nawigacji na stronie końcowej HotPot.

**Próbowanie ponowne**
: jeżeli wiele prób jest dozwolone na tym HotPot i student nadal ma jakieś pozostałe próby, zostanie wyświetlony link pozwalający studentowi na ponowienie próby HotPot.

**Indeks**
: jeżeli zaznaczono, link do strony indeksu HotPot zostanie wyświetlony.

**Kurs**
: jeżeli zaznaczono, link do strony kursu Moodle zostanie wyświetlony.

**Oceny**
: jeżeli zaznaczono, link do dziennika ocen Moodle zostanie wyświetlony.';
$string['exit_next'] = 'Następny';
$string['exit_next_text'] = 'Spróbuj następną aktywność';
$string['exit_noscore'] = 'Pomyślnie ukończyłeś(aś) tę aktywność!';
$string['exit_retry'] = 'Spróbuj ponownie';
$string['exit_retry_text'] = 'Powtórz tę aktywność';
$string['exit_welldone'] = 'Dobra robota!';
$string['exit_whatnext_0'] = 'Co teraz chcesz zrobić?';
$string['exit_whatnext_1'] = 'Wybierz swoje przeznaczenie ...';
$string['exit_whatnext_default'] = 'Proszę wybrać jedną opcję z poniższych:';
$string['exitcm'] = 'Następna aktywność';
$string['exitcm_help'] = 'To ustawienie określa aktywność Moodle do zrobienia, kiedy aktywność HotPot zostanie zakończona. Dodatkowo ocena jest minimalną oceną dla aktywności HotPot, jaka jest wymagana przed pokazaniem następnej aktywności.

Nauczyciel może wybrać określoną aktywność, lub jedną z poniższych ogólnych ustawień zastosowania:

* Następna aktywność w tym kursie
* Następna aktywność w tej sekcji
* Następna aktywność HotPot w tym kursie
* Następna aktywność HotPot w tej sekcji

Inne opcje strny wyjścia są wyłączone i student osiągnął wymaganą ocenę w tej aktywności HotPot, następna aktywność będzie pokazywana od razu. Jednakże studentowi będzie pokazywany link do następnej aktywności, w który będzie mógł kliknąć kiedy będzie gotowy.';
$string['exitcmcourse'] = 'Następna aktywność w tym kursie';
$string['exitcmsection'] = 'Następna aktywność w tej części kursu';
$string['exitgrade'] = 'Następna ocena aktywności';
$string['exithotpotcourse'] = 'Następny hotpot w tym kursie';
$string['exithotpotsection'] = 'Następny HotPot w tej części kursu';
$string['exitoptions'] = 'Opcje strony wyjścia';
$string['exitpage'] = 'Pokaż stronę wyjścia';
$string['exitpage_help'] = 'Czy strona końcowa powinna być wyświetlana po zakończeniu quizu HotPot?

**Tak**
: studentom będzie wyświetlana strona końcowa kiedy HotPot zostanie zakończony. Zawartość strony końcowej jest zależna od ustawień strony końcowej odpowiedzi zwrotnej HotPot  i linków.

**Nie**
: studentom nie będzie wyświetlana strona końcowa. Zamiast tego, pójdą oni natychmiast do następnej aktywności lub powrócą do strony kursu Moodle.';
$string['exitpagehdr'] = 'Strona wyjścia';
$string['exittext'] = 'Tekst strony wyjścia';
$string['feedbackdiscuss'] = 'Omów ten quiz na forum';
$string['feedbackformmail'] = 'Formularz informacji zwrotnej';
$string['feedbackmoodleforum'] = 'Forum Moodle';
$string['feedbackmoodlemessaging'] = 'Powiadomienia Moodle';
$string['feedbacknone'] = 'Żaden';
$string['feedbacksendmessage'] = 'Wyślij wiadomość do instruktora';
$string['feedbackwebpage'] = 'Strona internetowa';
$string['firstattempt'] = 'Pierwsza próba';
$string['forceplugins'] = 'Wymuś media plugin';
$string['forceplugins_help'] = 'Jeżeli włączone, kompatybilne z Moodle odtwarzacze multimedialne odtworzą takie plik jak: avi, mpeg, mpg, mp3, mov and wmv. Jednakże, Moodle nie zmienia żadnego ustawienia odtwarzaczy w quizie.';
$string['frameheight'] = 'Wysokość ramki';
$string['giveup'] = 'Zaniechaj';
$string['grademethod'] = 'Metoda oceniania';
$string['grademethod_help'] = 'Ustawienie to definiuje, jak ocena HotPot jest obliczana z wyników prób.

**Najwyższy wynik**
: ocena będzie ustawiona na najwyższy wynik dla próby w tej aktywności HotPot.

**Średni wynik**
: ocena będzie ustawiona na średni wynik dla prób w tej aktywności HotPot.

**Pierwsza próba**
: ocena będzie ustawiona na wynik z pierwszej próby w tej aktywności HotPot.

**Ostatnia próba**
: ocena będzie ustawiona na wynik z ostatniej próby w tej aktywności HotPot.';
$string['gradeweighting'] = 'Waga oceny';
$string['gradeweighting_help'] = 'Oceny dla tej aktywności HotPot zostaną skalowane do tej liczby w dzienniku ocen Moodle.';
$string['highestscore'] = 'Najwyższa ocena';
$string['hints'] = 'Wskazówka';
$string['hotpot:addinstance'] = 'Dodaj nową aktywność HotPot';
$string['hotpot:attempt'] = 'Wypróbuj aktywność HotPot u wyślij wyniki';
$string['hotpot:deleteallattempts'] = 'Usuń wszystkie próby użytkowników w aktywności HotPot';
$string['hotpot:deletemyattempts'] = 'Usuń swoje próby w aktywności HotPot';
$string['hotpot:ignoretimelimits'] = 'Ignoruj ograniczenia czasowe w aktywności HotPot';
$string['hotpot:manage'] = 'Zmień ustawienia aktywności HotPot';
$string['hotpot:preview'] = 'Podgląd aktywności HotPot';
$string['hotpot:reviewallattempts'] = 'Pokaż dowolne próby użytkowników w aktywności HotPot';
$string['hotpot:reviewmyattempts'] = 'Zobacz własne próby w aktywności HotPot';
$string['hotpot:view'] = 'Zobacz stronę wprowadzenia aktywności HotPot';
$string['hotpotname'] = 'Nazwa aktywności HotPot';
$string['ignored'] = 'Ignoruj';
$string['inprogress'] = 'w trakcie';
$string['isgreaterthan'] = 'jest większa(y) niż';
$string['islessthan'] = 'jest mniejsza(y) niż';
$string['lastaccess'] = 'Ostatni dostęp';
$string['lastattempt'] = 'Ostatnia próba';
$string['lockframe'] = 'Zablokuj ramkę';
$string['maxeventlength'] = 'Maksymalna liczba dni dla pojedynczego wydarzenia kalendarza';
$string['mediafilter_hotpot'] = 'Filtr multimedialny HotPot';
$string['mediafilter_moodle'] = 'Standardy Moodle filtrów multimedualnych';
$string['migratingfiles'] = 'Migracja plików quizu Hot Potatoes';
$string['migratinglogs'] = 'Migracja dzienników Hot Potatoes';
$string['missingsourcetype'] = 'Rekord HotPot jest brakującym typem źródłowym';
$string['modulename'] = 'Quiz Hot Potatoes';
$string['modulename_help'] = 'Moduł HotPot pozwala nauczycielom dostarczane interaktywnych materiałów edukacyjnych dla ich studentów przez Moodle i pokazywanie raportów o odpowiedziach studentów i wyników.

Pojedyńcza aktywność HotPot zawiera dodatkową stronę wprowadzającą, pojedyńcze ćwiczenie edukacyjne i dodatkowo stronę końcową. Ćwiczeniem może być statyczna strona WWW lub interaktywna strona, która oferuje tekst, audio i komunikaty wizualne i rekordy ich odpowiedzi. Ćwiczenie jest stworzone na komputerze nauczyciela używając oprogramowania i ładowanie do Moodle.

Aktywność HotPot może obsługiwać ćwiczenia stworzone przez poniższe oprogramowania:

* Hot Potatoes (wersja 6)
* Qedoc
* Xerte
* iSpring
* każdy edytor HTML';
$string['modulenameplural'] = 'Quizy Hot Potatoes';
$string['nameadd'] = 'Nazwa';
$string['nameadd_help'] = 'Nazwa może być określonym tekstem wprowadzonym przez nauczyciela lub może być wygenerowana automatycznie.

**Pobierz z pliku źródłowego**
: nazwa będzie wydobyta z pliku źródłowego.

**Użyj nazwy pliku źródłowego**
: nazwa pliku źródłowego będzie używana jako nazwa.

**Użyj ścieżki pliku źródłowego**
: ścieżka pliku źródłowego będzie używana jako nazwa. Ukośniki w ścieżce zostaną zastąpione przez spacje.

**Określony tekst**
: określony tekst wprowadzony przez nauczyciela, będzie używany jako nazwa.';
$string['nameedit'] = 'Nazwa';
$string['nameedit_help'] = 'Konkretny tekst, który jest wyświetlany studentom';
$string['navigation'] = 'Nawigacja';
$string['navigation_embed'] = 'Zagnieżdżona strona www';
$string['navigation_frame'] = 'Ramka nawigacji moodle';
$string['navigation_give_up'] = 'Pojedyńczy przycisk "zaniechaj"';
$string['navigation_help'] = 'To ustawienie określa nawigację używaną w quizie:

**Pasek nawigacji Moodle**
: pasek nawigacji Moodle będzie wyświetlony w tym samym oknie co quiz na górze strony

**Nawigacja Moodle w ramce**
: pasek nawigacji Moodle będzie wyświetlony w oddzielnej ramce na górze quizu

**Wbudowana strona**
: pasek nawigacji Moodle będzie wyświetlony w quizie Hot Potatoes wewnątrz okna

**Oryginalna pomoc nawigacyjna**
: quiz będzie wyświetlony z przyciskami nawigacji, zdefiniowane w quizie

**Pojedynczy przycisk "Poddaj się"**
: quiz będzie wyświetlony z pojedynczym przyciskiem "Poddaj się" na górze strony

**Brak**
: quiz będzie wyświetlony  bez żadnych pomocy nawigacyjnych, więc wszystkie pytania będą poprawnie odpowiadane, w zależności od ustawienia "Pokaż następny quiz?", Moodle może wrócić do strony kursu lub wyświetlić następny quiz';
$string['navigation_moodle'] = 'Standardowy pas nawigacji Moodle (górny i boczny)';
$string['navigation_none'] = 'Nikt';
$string['navigation_original'] = 'Oryginalny pasek pomocniczy';
$string['navigation_topbar'] = 'Tylko pasek nawigacyjny Moodle na górze (bez pasków bocznych)';
$string['noactivity'] = 'Nie aktywny';
$string['nohotpots'] = 'Nie znaleziono HotPots';
$string['nomoreattempts'] = 'Przepraszamy, nie masz więcej dostępnych prób w tej aktywności';
$string['noresponses'] = 'Informacja o poszczególnych pytaniach i odpowiedziach nie była znaleziona.';
$string['noreview'] = 'Nie masz uprawnień aby  wyświetlić szczegóły tej próby.';
$string['noreviewafterclose'] = 'Ten quiz został zamknięty. Nie masz już uprawnień, aby zobaczyć szczegóły tej próby.';
$string['noreviewbeforeclose'] = 'Nie masz uprawnień aby wyświetlić szczegóły tej próby aż do {$a}.';
$string['nosourcefilesettings'] = 'Rekord HotPot jest niewłaściwym informacyjnym plikiem źródłowym';
$string['notattemptedyet'] = 'Jeszcze nie próbowano';
$string['notavailable'] = 'Ta aktywność nie jest obecnie dla Ciebie dostępna.';
$string['outputformat'] = 'format wyświetlania';
$string['outputformat_best'] = 'najlepszy';
$string['outputformat_help'] = 'Format wyjściowy określa jak zawartość będzie prezentowana studentowi.

Formaty wyjściowe, które są dostępne zależą od typu pliku źródłowego. Niektóre typy pliku źródłowego mają jeszcze jeden format wyjściowy, kiedy inne typy pliku źródłowego mają kilka formatów wyjściowych.

Najlepsze ustawienie wyświetli zawartość używając optymalnego formatu wyjściowego w przeglądarce studenta.';
$string['outputformat_hp_6_jcloze_html'] = 'JCloze (v6) z html';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'ANCT-Scan z HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'DropDown z HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (a) z HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'FindIt (b) z HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'JGloss z HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'JCloze (v6) z HP6 xml';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'JCloze (v6) z HP6 xml (Auto-zaawansowany)';
$string['outputformat_hp_6_jcross_html'] = 'JCross (v6) z html';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) z xml';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) z html';
$string['outputformat_hp_6_jmatch_html_sort'] = 'JMatch Sort z html';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (flashcard) z xml';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'JMemori z xml';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch Sort z xml';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) z xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) z xml';
$string['outputformat_hp_6_jmix_html'] = 'JMix (v6) z html';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) z xml';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) z xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ z prefiksem, sufiksem) z xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6+ z naciśnięciem klawisza) z xml';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) z html';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) z xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) from z (Auto-zaawansowany)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) z xml (Egzamin)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) z html';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) z xml';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) z html';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) z html, wynik przyrostowy';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) z xml';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) z xml, wynik przyrostowy';
$string['outputformat_html_ispring'] = 'Plik iSpring HTML';
$string['outputformat_html_xerte'] = 'Plik Xerte HTML';
$string['outputformat_html_xhtml'] = 'Standardowy plik HTML';
$string['outputformat_qedoc'] = 'Plik Qedoc';
$string['overviewreport'] = 'Przegląd';
$string['penalties'] = 'Sankcje karne';
$string['percent'] = 'Procent';
$string['pluginadministration'] = 'Administracja HotPot';
$string['pluginname'] = 'Moduł HotPot';
$string['pressoktocontinue'] = 'Naciśnij przycisk OK, aby kontynuować lub Anuluj, aby pozostać na bieżącej stronie.';
$string['questionshort'] = 'Pyt. -{$a}';
$string['quizname_help'] = 'Pomoc tekstowa dla nazwy quizu';
$string['quizzes'] = 'Quizy';
$string['responses'] = 'Odpowiedzi';
$string['responsesreport'] = 'Odpowiedzi';
$string['reviewafterattempt'] = 'Po próbie zezwalaj na przegląd';
$string['reviewafterclose'] = 'Po zamknięciu HotPot zezwalaj na przegląd';
$string['reviewduringattempt'] = 'Zezwalaj na przegląd podczas próby';
$string['reviewoptions'] = 'Opcje przeglądu';
$string['score'] = 'Punkt';
$string['scoresreport'] = 'Punkty';
$string['selectattempts'] = 'Wybierz próby';
$string['showerrormessage'] = 'Błąd HotPot: {$a}';
$string['sourcefile'] = 'Nazwa pliku źródłowego';
$string['sourcefile_help'] = 'To ustawienie określa plik zawierający zawartość pokazywana studentom.

Zazwyczaj plik źródłowy jest tworzony poza Moodle i wtedy jest załadowywany do obszaru plików w kursie Moodle.
To może być plik html lub inny plik utworzony za pomocą oprogramowania authoringu, np. Hot Potatoes lub Qedoc.

Plik źródłowy może być określony jako folder i ścieżką pliku w obszarze plików w kursie Moodle, lub URL zaczynającym się od http:// lub https://

Dla materiałów Qedoc, plik źródłowy musi być URL modułu Qedoc, który zostanie załadowany na serwer Qedoc.

* np. http://www.qedoc.net/library/ABCDE_123.zip
* Jeżeli chcesz zdobyć więcej informacji o Qedoc, zobacz: [Dokumentacja Qedoc: Uploading_modules](http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'Nie znaleziono pliku źródłowego (lub jest pusty): {$a}';
$string['status'] = 'Status';
$string['stopbutton'] = 'Pokaż przycisk Stop';
$string['stopbutton_help'] = 'Jeżeli to ustawienie jest włączone, przycisk zatrzymania będzie wstawione w quizie.

Jeżeli student kliknie na przycisk zatrzymania, dotychczasowe wyniki będą zwrócone do Moodle i status próby quizu będzie ustawiony na opuszczony.

Tekst który jest wyświetlony na przycisku zatrzymania może zawierać ustawione frazy z paczek językowych Moodle, lub nauczyciel może określić swój własny tekst na przycisku.';
$string['stopbutton_langpack'] = 'Z pakietu językowego';
$string['stopbutton_specific'] = 'Użyj określonego tekstu';
$string['stoptext'] = 'Tekst przycisku Stop';
$string['storedetails'] = 'Przechowaj surowy szczegółowy XML prób quizu HotPot';
$string['studentfeedback'] = 'Informacja zwrotna studenta';
$string['studentfeedback_help'] = 'Jeżeli włączony, link do okna wyskakującego odpowiedzi zwrotnej będzie wyświetlony ilekroć student kliknie na przycisk "Sprawdź". Okno odpowiedzi zwrotnej pozwala studentom na dyskusję w tym quizie z ich nauczycielem i kolegami z klasy w jednej z poniższych dróg:

**Strona Web**
: wymaga URL strony Web, np. http://mojserwer.pl/formzwrotny.html

**Formularz zgłoszeniowy odpowiedzi zwrotnej**
: wymaga URL do skryptu formularza, np. http://mojserwer.pl/cgi-bin/formmail.pl

**Forum Moodle**
: indeks forum dla kursu zostanie wyświetlony

**Wiadomości Moodle**
: okno natychmiastowych wiadomości Moodle zostanie wyświetlone. Jeżeli kurs ma kilku nauczycieli, student będzie poproszony o wybór nauczyciela przed pojawieniem się okna wiadomości.';
$string['submits'] = 'Zadania';
$string['subplugintype_hotpotattempt'] = 'Format wyjściowy';
$string['subplugintype_hotpotattempt_plural'] = 'Formaty wyjściowy';
$string['subplugintype_hotpotreport'] = 'Raport';
$string['subplugintype_hotpotreport_plural'] = 'Raporty';
$string['subplugintype_hotpotsource'] = 'Plik źródłowy';
$string['subplugintype_hotpotsource_plural'] = 'Pliki źródłowe';
$string['textsourcefile'] = 'Pobierz z pliku źródłowego';
$string['textsourcefilename'] = 'Użyj nazwy pliku źródłowego';
$string['textsourcefilepath'] = 'Użyj ścieżki pliku';
$string['textsourcequiz'] = 'Pobierz z quizu';
$string['textsourcespecific'] = 'Określony tekst';
$string['timeclose'] = 'Dostępny do';
$string['timedout'] = 'Przekroczono limit czasu';
$string['timelimit'] = 'Limit czasu';
$string['timelimit_help'] = 'To ustawienie określa max. czas trwania pojedynczej próby.

**Użyj ustawień w pliku źródłowym/szablonie**
: limit czasu będzie pobrany z pliku źródłowego lub plików szablonu dla tego formatu wyjściowego

**Użyj określonego czasu**
: limit czasu określony na stronie ustawień HotPot będzie używany jako limit czasu dla próby w tym quizie. To ustawienie nadpisuje limity czasu w pliku źródłowym, pliku konfiguracyjnym lub plikach szablonu dla tego formatu wyjściowego.

**Wyłączony**
: żaden limit czasu nie będzie ustawiony dla prób w tym quizie.

Uwaga: jeżeli próba jest wznawiana, czasomierz kontynuuje czas próby od momentu kiedy próba została poprzednio spauzowana.';
$string['timelimitexpired'] = 'Limit czasu dla tego podejścia minął';
$string['timelimitspecific'] = 'Użyj określonego czasu';
$string['timelimitsummary'] = 'Limit czasu na jedną próbę';
$string['timelimittemplate'] = 'Użyj ustawień pliku źródłowego/szablonu';
$string['timeopen'] = 'Dostępne od';
$string['timeopenclose'] = 'Czas otwarcia oraz zamknięcia';
$string['timeopenclose_help'] = 'Możesz określić czasy, kiedy quiz będzie dostępny dla ludzi. Przed czasem otwarcia i po czasie zamknięcia, quiz nie będzie dostępny.';
$string['title'] = 'Tytuł';
$string['title_help'] = 'To ustawienie określa tytuł, który będzie wyświetlony na stronie web.

**Nazwa aktywności HotPot**
: nazwa aktywności HotPot będzie wyświetlona jako tytuł strony web.

**Pobierz z pliku źródłowego**
: tytuł,dowolny, zdefiniowany w pliku źródłowym będzie używany jako tytuł strony web.

**Użyj nazwy pliku źródłowego**
: nazwa pliku źródłowego, wyłączając każdą nazwę folderu, będzie używany jako tytuł strony web.

**Użyj ścieżki pliku źródłowego**
: ścieżka pliku źródłowego, włączając każdą nazwę folderu, będzie używany jako tytuł strony web.';
$string['toolsindex'] = 'Indeks Narzędzi HotPot';
$string['unitname_help'] = 'Tekst pomocy dla nazwy jednostki';
$string['unrecognizedsourcefile'] = 'Przepraszamy, moduł HotPot nie może wykryć typ pliku źródłowego {$a}';
$string['updated'] = 'Zaktualizowany';
$string['updatinggrades'] = 'Aktualizowanie ocen HotPot';
$string['usefilters'] = 'Użyj filtrów';
$string['usefilters_help'] = 'Jeżeli to ustawienie jest włączone, zawartość będzie przekazywana przez filtry Moodle przed wysłaniem do przeglądarki.';
$string['useglossary'] = 'Użyj słownika';
$string['useglossary_help'] = 'Jeżeli to ustawienie jest włączone, zawartość będzie przekazywana przez filtr autolinkowania słów ze słownika Moodle przed wysłaniem do przeglądarki.

Uwaga: to ustawienie nadpisuje ustawienie administracji strony do włączania lub wyłączania filtru autolinkowania ze słownika.';
$string['usemediafilter'] = 'Użyj filtru multimedialnego';
$string['usemediafilter_help'] = 'To ustawienie określa filtr multimedialny do użycia.

**Brak**
: zawartość nie będzie przekazywana przez żadne filtry multimedialne.

**Standardowe filtry multimedialne Moodle**
: zawartość będzie przekazywana przez standardowe filtry multimedialne Moodle. Te filtry szukają linków popularnych typów plików dźwiękowych lub filmowych, i konwertują te linki do odpowiednich odtwarzaczy multimedialnych.

**Filtry multimedialne HotPot**
: zawartość będzie przekazywana przez filtry, które wykryją linki, obrazy, dźwięki i filmy to określonej notacji nawiasów kwadratowych.

Notacja nawiasu kwadratowego ma poniższą składnię:
<code>[url odtwarzacz szerokość wysokość opcje]</code>

**url**
: relatywny lub absolutny url pliku multimedialnego

**odtwarzacz** (opcjonalnie)
: nazwa odtwarzacza będzie wstawiona. Domyślna wartość dla tego ustawienia to "moodle". Standardowa wersja modułu HotPot także oferuje poniższe odtwarzacze:
: **dew**: odtwarzacz mp3
: **dyer**: odtwarzacz mp3 stworzony przez Bernard Dyer
: **hbs**: odtwarzacz mp3 stworzone przez Half-Baked Software
: **image**: wstawia obraz na stronę web
: **link**: wstawia lin do innej strony web

**szerokość** (opcjonalnie)
: wymagana szerokość odtwarzacza

**wysokość** (opcjonalnie)
: wymagana wysokość odtwarzacza. Jeżeli zostanie ominięta ta wartość, zostanie ustawiony na taką samą wartość co szerokość.

**opcje** (opcjonalnie)
: lista opcji oddzielonymi przecinkami przekazywana do odtwarzacza. Każda opcja może być łatwo przełączana włącz/wyłącz lub przez parę nazwa wartość.
: **nazwa=wartość
: **nazwa="jakaś wartość ze spacjami"';
$string['viewreports'] = 'Wyświetl raport dla {$a} użytkownika(ów)';
$string['views'] = 'Odwiedziny';
$string['weighting'] = 'Waż';
$string['wrong'] = 'Nieprawidłowo';
$string['zeroduration'] = 'Brak czasu trwania';
$string['zeroscore'] = 'Zero punktów';
