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
 * Strings for component 'tool_usertours', language 'pl', version '4.0'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Powyżej';
$string['actions'] = 'Działania';
$string['appliesto'] = 'Dotyczy';
$string['backdrop'] = 'Wyszczególnij';
$string['backdrop_help'] = 'Możesz użyć wyszczególnienia, aby zaznaczyć tę część strony, na którą wskazujesz.

Uwaga: Wyszczególnienia nie są kompatybilna z niektórymi częściami strony, takimi jak pasek nawigacyjny.';
$string['below'] = 'Poniżej';
$string['block'] = 'Blok';
$string['block_named'] = 'Blok o nazwie \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista kroków przewodnika użytkownika';
$string['cachedef_tourdata'] = 'Lista włączonych informacji w przewodniku użytkownika, które są pobierane na każdej stronie';
$string['confirmstepremovalquestion'] = 'Czy jesteś pewien, że chcesz usunąć ten krok?';
$string['confirmstepremovaltitle'] = 'Potwierdź usunięcie kroku';
$string['confirmtourremovalquestion'] = 'Czy jesteś pewien, że chcesz usunąć ten przewodnik?';
$string['confirmtourremovaltitle'] = 'Potwierdź usunięcie przewodnika';
$string['content'] = 'Zawartość';
$string['content_heading'] = 'Zawartość';
$string['content_help'] = 'Treść opisująca krok może być dodana jako zwykły tekst, w razie potrzeby ujęty w znaczniki wielojęzyczne (do użycia z wielojęzycznym filtrem treści).';
$string['content_type'] = 'Typ zawartości';
$string['content_type_help'] = '* Ręczny - treść jest wprowadzana za pomocą edytora tekstu
* Identyfikator ciągu języka - w formacie identyfikator ciągu,komponent (bez spacji po przecinku)';
$string['content_type_langstring'] = 'Identyfikator ciągu języka';
$string['content_type_manual'] = 'Podręcznik';
$string['cssselector'] = 'Selektor CSS';
$string['defaultvalue'] = 'Domyślne ({$a})';
$string['delay'] = 'Opóźnienie przed wyświetleniem następnego kroku';
$string['delay_help'] = 'Opcjonalnie można dodać opóźnienie przed wyświetleniem kolejnego kroku.

To opóźnienie jest w milisekundach.';
$string['description'] = 'Opis';
$string['description_help'] = 'Opis przewodnika może być dodany jako zwykły tekst, ujęty w wielojęzyczne znaczniki (do użycia z wielojęzycznym filtrem treści), jeśli jest to wymagane.

Alternatywnie, identyfikator ciągu językowego można wprowadzić w formacie identyfikator,komponent (bez nawiasów lub spacji po przecinku).';
$string['displaystepnumbers'] = 'Wyświetl numery etapów';
$string['displaystepnumbers_help'] = 'Czy wyświetlać liczbę kroków, np. 1/4, 2/4 itd., aby wskazać długość przewodnika użytkownika.';
$string['done'] = 'Wykonano';
$string['duplicatetour'] = 'Zduplikuj przewodnik';
$string['duplicatetour_name'] = '{$a} (kopia)';
$string['editstep'] = 'Edycja "{$a}"';
$string['enabled'] = 'Włączone';
$string['endonesteptour'] = 'Jasne';
$string['endtour'] = 'Zamknij przewodnik';
$string['endtourlabel'] = 'Etykieta przycisku zakończenia przewodnika';
$string['endtourlabel_help'] = 'Opcjonalnie możesz określić niestandardową etykietę przycisku zakończenia przewodnika. Domyślna etykieta to \'Jasne\' w przypadku przewodników jednoetapowych i \'Zakończ przewodnik\' w przypadku przewodników wieloetapowych.

Alternatywnie, identyfikator ciągu językowego można wprowadzić w formacie identyfikator,komponent (bez nawiasów lub spacji po przecinku).';
$string['event_step_shown'] = 'Krok wyświetlony';
$string['event_tour_ended'] = 'Zakończono przewodnik';
$string['event_tour_reset'] = 'Resetuj przewodnik';
$string['event_tour_started'] = 'Przewodnik rozpoczęty';
$string['exporttour'] = 'Eksportuj przewodnik';
$string['filter_accessdate'] = 'Data dostępu';
$string['filter_accessdate_enabled'] = 'Włącz filtr daty dostępu';
$string['filter_accessdate_enabled_help'] = 'Pokazuj przewodnik tylko nowym użytkownikom lub użytkownikom, którzy niedawno weszli na stronę.';
$string['filter_category'] = 'Kategoria';
$string['filter_category_help'] = 'Pokaż przewodnik na stronie, która jest powiązana z kursem w wybranej kategorii.';
$string['filter_course'] = 'Kursy';
$string['filter_course_help'] = 'Pokaż przewodnik na stronie, która jest powiązana z wybranym kursem.';
$string['filter_courseformat'] = 'Format kursu';
$string['filter_courseformat_help'] = 'Pokaż przewodnik na stronie, która jest powiązana z kursem wykorzystującym wybrany format kursu.';
$string['filter_cssselector'] = 'Selektor CSS';
$string['filter_cssselector_help'] = 'Pokazuj przewodnik tylko wtedy, gdy na stronie znajduje się określony selektor CSS.';
$string['filter_date_account_creation'] = 'Utworzenie konta użytkownika';
$string['filter_date_first_login'] = 'Pierwszy dostęp użytkownika w okresie';
$string['filter_date_last_login'] = 'Ostatni dostęp użytkownika w okresie';
$string['filter_header'] = 'Filtry przewodnika';
$string['filter_help'] = 'Wybierz warunki, dla których przewodnik będzie wyświetlony. Wszystkie filtry muszą pasować, aby wyświetlić przewodnik użytkownikowi.';
$string['filter_role'] = 'Rola';
$string['filter_role_help'] = 'Przewodnik może być ograniczony do użytkowników z wybranymi rolami w kontekście, w którym pokazywany jest przewodnik. Na przykład ograniczenie przewodnika kokpitu do użytkowników z rolą studenta nie będzie działać, jeśli użytkownicy mają rolę studenta w kursie (jak to zwykle bywa). Przewodnik kokpitu może być ograniczony tylko do użytkowników z rolą systemową.';
$string['filter_theme'] = 'Schemat graficzny';
$string['filter_theme_help'] = 'Pokaż przewodnik, gdy użytkownik korzysta z jednego z wybranych schematów graficznych.';
$string['importtour'] = 'Importuj przewodnik';
$string['invalid_lang_id'] = 'Nieprawidłowy identyfikator ciągu językowego';
$string['left'] = 'Lewa';
$string['modifyshippedtourwarning'] = 'Jest to przewodnik użytkownika, który został dostarczany z systemem Moodle. Wszelkie modyfikacje jakie wykonasz mogą być nadpisane przy następnej aktualizacji witryny.';
$string['moodle_language_identifier'] = 'Identyfikator ciągu języka';
$string['movestepdown'] = 'Przesuń krok w dół';
$string['movestepup'] = 'Przenieś krok w górę';
$string['movetourdown'] = 'Przenieś przewodnik niżej';
$string['movetourup'] = 'Przenieś przewodnik wyżej';
$string['name'] = 'Nazwa';
$string['name_help'] = 'Nazwę przewodnika można dodać jako zwykły tekst, ujęty w znaczniki wielojęzyczne (do użycia z wielojęzycznym filtrem treści), jeśli jest to wymagane.

Alternatywnie, identyfikator ciągu językowego można wprowadzić w formacie identyfikator,komponent (bez nawiasów lub spacji po przecinku).';
$string['newstep'] = 'Nowy krok';
$string['newtour'] = 'Utwórz nowy przewodnik';
$string['next'] = 'Dalej';
$string['nextstep'] = 'Dalej';
$string['nextstep_sequence'] = 'Następny ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opcje';
$string['orphan'] = 'Pokaż, jeśli nie znaleziono celu';
$string['orphan_help'] = 'Pokaż krok, jeśli nie można było znaleźć celu na stronie.';
$string['pathmatch'] = 'Zastosuj do pasującego adresu URL';
$string['pathmatch_help'] = 'Przewodniki będą wyświetlane na każdej stronie, której adres URL odpowiada tej wartości.

Możesz użyć znaku % jako symbolu wieloznacznego, który oznacza cokolwiek.
Niektóre przykładowe wartości obejmują:

* /my/% - aby dopasować Kokpit
* /course/view.php?id=2 - aby dopasować konkretny kurs
* /mod/forum/view.php% - aby dopasować listę dyskusyjną forum
* /user/profile.php% - aby dopasować stronę profilu użytkownika

Jeśli chcesz wyświetlić przewodnik na stronie głównej witryny, możesz użyć wartości: "FRONTPAGE".';
$string['pausetour'] = 'Pauza';
$string['placement'] = 'Ulokowanie';
$string['placement_help'] = 'Krok może być umieszczony powyżej, poniżej, po lewej lub prawej stronie celu. Zalecane jest ustawienie powyżej lub poniżej, ponieważ te ustawienia lepiej pasują do wyświetlacza mobilnego.

Jeśli krok nie mieści się na określonej stronie w danym miejscu, zostanie automatycznie umieszczony w innym.';
$string['pluginname'] = 'Przewodnik użytkownika';
$string['previousstep'] = 'Wstecz';
$string['privacy:metadata:preference:completed'] = 'Data i godzina ostatniego ukończenia przewodnika przez użytkownika.';
$string['privacy:metadata:preference:requested'] = 'Data i godzina ostatniej, ręcznej prośby o wyświetlenie przewodnika.';
$string['privacy:request:preference:completed'] = 'Ostatnio zaznaczyłeś przewodnik użytkownika "{$a->name}" jako ukończony {$a->time}';
$string['privacy:request:preference:requested'] = 'Ostatnio poprosiłeś o przewodnik użytkownika "{$a->name}" {$a->time}';
$string['reflex'] = 'Kontynuuj po kliknięciu';
$string['reflex_help'] = 'Przejdź do następnego kroku, gdy cel został kliknięty.';
$string['resettouronpage'] = 'Resetuj przewodnik użytkownika na tej stronie';
$string['resumetour'] = 'Wznów';
$string['right'] = 'Prawo';
$string['select_block'] = 'Wybierz blok';
$string['selector_defaulttitle'] = 'Wprowadź opic';
$string['selectordisplayname'] = 'Wybór selektora CSS \'{$a}\'';
$string['selecttype'] = 'Wybierz typ kroku';
$string['sharedtourslink'] = 'Repozytorium przewodników';
$string['skip'] = 'Pomiń';
$string['skip_tour'] = 'Pomiń przewodnik';
$string['target'] = 'Cel';
$string['target_block'] = 'Blok';
$string['target_heading'] = 'Krok docelowy';
$string['target_selector'] = 'Selektor';
$string['target_selector_targetvalue'] = 'Selektory CSS';
$string['target_selector_targetvalue_help'] = 'Selektora CSS można użyć do wskazywania niemal każdego elementu na stronie. Odpowiedni selektor można łatwo znaleźć za pomocą narzędzi programistycznych przeglądarki internetowej.';
$string['target_unattached'] = 'Wyświetl na środku strony';
$string['targettype'] = 'Typ celu';
$string['targettype_help'] = 'Każdy krok jest powiązany z częścią strony - celem. Typy docelowe to:

* Blok - służy do wyświetlania kroku obok określonego bloku,
* Selektor CSS - służy do dokładnego definiowania obszaru docelowego za pomocą CSS,
* Wyświetlaj na środku strony - krok, który nie musi być powiązany z określoną częścią strony.';
$string['title'] = 'Tytuł';
$string['title_help'] = 'Tytuł kroku można dodać jako zwykły tekst, w razie potrzeby w znacznikach (tagach) wieloznaczności (do użytku z filtrem treści wielojęzycznych).

Alternatywnie, identyfikator łańcucha języka można wprowadzić w identyfikatorze formatu, a także komponencie (bez nawiasów lub spacji po przecinku).';
$string['tour1_content_addingblocks'] = 'Tak naprawdę dokładnie przemyśl dodanie jakiegokolwiek bloku na stronę. Bloki nie są wyświetlane w aplikacji mobilnej Moodle, więc ogólnie rzecz biorąc znacznie lepiej jest upewnić się, że witryna działa dobrze bez bloków.';
$string['tour1_content_blockregion'] = 'Nadal istnieje tutaj region bloków. Zalecamy całkowite usunięcie bloków Nawigacja i Administracja, ponieważ ta funkcjonalność znajduje się w innym miejscu w motywie Boost.';
$string['tour1_content_customisation'] = 'Aby dostosować wygląd witryny i strony głównej, użyj menu ustawień w rogu tego nagłówka. Spróbuj włączyć edycję teraz.';
$string['tour1_content_end'] = 'To już koniec przewodnika użytkownika. Nie pojawi się ponownie, dopóki nie zresetujesz go, korzystając z linku w stopce. Jako administrator możesz również tworzyć własne przewodniki takie jak ten!';
$string['tour1_content_navigation'] = 'Główna nawigacja jest teraz dostępna dzięki tej szufladzie nawigacji. Treść aktualizuje się w zależności od tego, na jakiej jesteś podstronie. Użyj przycisku u góry, aby ją ukryć lub pokazać.';
$string['tour1_content_welcome'] = 'Witamy w temacie Boost. Jeśli dokonano aktualizacji z wcześniejszej wersji, niektóre elementy mogą wyglądać nieco inaczej w tym motywie.';
$string['tour1_title_addingblocks'] = 'Dodawanie bloków';
$string['tour1_title_blockregion'] = 'Region bloków';
$string['tour1_title_customisation'] = 'Dostosowanie';
$string['tour1_title_end'] = 'Koniec przewodnika';
$string['tour1_title_navigation'] = 'Nawigacja';
$string['tour1_title_welcome'] = 'Witaj';
$string['tour2_content_addblock'] = 'Po włączeniu edycji możesz dodawać bloki z szuflady nawigacji. Przemyśl jednak umieszczanie bloków na swoich stronach. Bloki nie są wyświetlane w aplikacji mobilnej Moodle, więc aby zapewnić jak najlepsze doświadczenia użytkownika, upewnij się, że kurs działa dobrze bez bloków.';
$string['tour2_content_addingblocks'] = 'Możesz dodawać bloki do tej strony za pomocą tego przycisku. Przemyśl jednak umieszczanie bloków na swoich stronach. Bloki nie są wyświetlane w aplikacji mobilnej Moodle, więc aby zapewnić jak najlepsze doświadczenia użytkownika, upewnij się, że kurs działa dobrze bez bloków.';
$string['tour2_content_customisation'] = 'Aby zmienić ustawienia kursu, użyj menu ustawień w rogu tego nagłówka. Znajdziesz również podobne menu ustawień na stronie głównej każdej aktywności. Spróbuj włączyć edycję.';
$string['tour2_content_end'] = 'To jest koniec przewodnika użytkownika. Nie pojawi się ponownie, dopóki nie zresetujesz go, korzystając z linku w stopce. Administrator strony może również w razie potrzeby utworzyć dodatkowe przewodniki dla tej witryny.';
$string['tour2_content_navigation'] = 'Nawigacja odbywa się teraz za pomocą tej szuflady nawigacji. Użyj przycisku u góry, aby ukryć lub pokazać. Zobaczysz, że istnieją linki do sekcji kursu.';
$string['tour2_content_opendrawer'] = 'Spróbuj teraz otworzyć szufladę nawigacji.';
$string['tour2_content_participants'] = 'Tutaj możesz zobaczyć uczestników, a także dodawać lub usuwać studentów.';
$string['tour2_content_welcome'] = 'Witamy w temacie Boost. Jeśli Twoja witryna została uaktualniona z wcześniejszej wersji, niektóre rzeczy na stronie kursu mogą wyglądać teraz nieco inaczej.';
$string['tour2_title_addblock'] = 'Dodaj blok';
$string['tour2_title_addingblocks'] = 'Dodawanie bloków';
$string['tour2_title_customisation'] = 'Dostosowanie';
$string['tour2_title_end'] = 'Koniec przewodnika';
$string['tour2_title_navigation'] = 'Nawigacja';
$string['tour2_title_opendrawer'] = 'Szuflada nawigacji';
$string['tour2_title_participants'] = 'Uczestnicy kursu';
$string['tour2_title_welcome'] = 'Witaj';
$string['tour3_content_dashboard'] = 'Nowy kokpit ma wiele funkcji ułatwiających dostęp do najważniejszych informacji.';
$string['tour3_content_displayoptions'] = 'Kursy mogą być sortowane według nazwy kursu, skróconej nazwy kursu lub ostatniego dostępu.

Możesz także wybrać wyświetlanie kursów na liście z podsumowaniem lub domyślnym widokiem \'karty\'.';
$string['tour3_content_overview'] = 'Blok przeglądu kursu pokazuje wszystkie kursy, na które jesteś zapisany.

Możesz wybrać pokazywanie kursów będących aktualnie w toku, zakończonych, nadchodzących, a także kursów oznaczonych gwiazdką.';
$string['tour3_content_recentcourses'] = 'Blok ostatnio przeglądanych kursów wyświetla kursy, które niedawno wyświetlałeś, dzięki czemu możesz szybko do nich wrócić.';
$string['tour3_content_starring'] = 'Możesz oznaczyć kurs gwiazdką, aby wyróżnić dany kurs lub ukryć kurs, który nie jest już dla ciebie ważny.

Te działania wpływają tylko na twój widok.

Możesz również wybrać wyświetlanie kursów w widoku listy, podsumowania lub w domyślnym widoku kart.';
$string['tour3_content_timeline'] = 'Blok osi czasu pokazuje ważne nadchodzące wydarzenia.

Możesz wybrać wyświetlanie aktywności w następnym tygodniu, miesiącu lub w przyszłości.

Możesz również wyświetlić pozycje, które są zaległe.';
$string['tour3_title_dashboard'] = 'Twój kokpit';
$string['tour3_title_displayoptions'] = 'Opcje wyświetlania';
$string['tour3_title_overview'] = 'Przegląd kursów';
$string['tour3_title_recentcourses'] = 'Ostatnio przeglądane kursy';
$string['tour3_title_starring'] = 'Oznaczanie kursów gwiazdką i ich ukrywanie';
$string['tour3_title_timeline'] = 'Blok osi czasu';
$string['tour4_content_groupconvo'] = 'Jeśli jesteś członkiem grupy z włączoną obsługą wiadomości grupowych, znajdziesz tutaj rozmowy grupowe.

Rozmowy grupowe umożliwiają interakcję z innymi członkami grupy w prywatnej i dogodnej lokalizacji.';
$string['tour4_content_icon'] = 'Możesz uzyskać dostęp do wiadomości z dowolnej strony za pomocą tej ikony.

Jeśli masz jakieś nieprzeczytane wiadomości, pojawi się tutaj ich liczba.

Kliknij ikonę, aby otworzyć szufladę wiadomości i kontynuować przewodnik.';
$string['tour4_content_messaging'] = 'Nowe funkcje przesyłania wiadomości obejmują grupowe przesyłanie wiadomości w ramach kursu i lepszą kontrolę nad tym, kto może Ci wysłać wiadomość.';
$string['tour4_content_settings'] = 'Możesz uzyskać dostęp do ustawień wiadomości za pomocą ikony kółka zębatego. Nowe ustawienie prywatności pozwolą ci zdecydować, kto może do ciebie napisać.';
$string['tour4_content_starred'] = 'Możesz wybrane rozmowy oznaczyć gwiazdką, aby móc później łatwiej je znaleźć.';
$string['tour4_title_groupconvo'] = 'Wiadomości grupowe';
$string['tour4_title_icon'] = 'Wiadomości';
$string['tour4_title_messaging'] = 'Nowy interfejs wiadomości';
$string['tour4_title_settings'] = 'Ustawienia wiadomości';
$string['tour4_title_starred'] = 'Oznaczone gwiazdką';
$string['tour_activityinfo_activity_student_content'] = 'Daty aktywności oraz czynności do wykonania, aby zakończyć aktywność są wyświetlane na stronie aktywności.';
$string['tour_activityinfo_activity_student_title'] = 'Nowość: Informacje o aktywności';
$string['tour_activityinfo_activity_teacher_content'] = 'Daty aktywności i warunki ich ukończenia są teraz wyświetlane dla studentów na każdej stronie aktywności (i opcjonalnie na stronie kursu).

W przypadku aktywności wymagających od studentów ręcznego oznaczania aktywności jako ukończonych, na stronie aktywności wyświetlany jest przycisk „Oznacz jako ukończone”.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nowość: Informacje o aktywności';
$string['tour_activityinfo_course_student_content'] = 'Daty aktywności i/lub co zrobić, aby je ukończyć, są wyświetlane na stronie kursu.';
$string['tour_activityinfo_course_student_title'] = 'Nowość: Informacje o aktywności';
$string['tour_activityinfo_course_teacher_content'] = 'Nowe ustawienia kursu \'Pokaż warunki ukończenia\' i \'Pokaż daty aktywności\' pozwalają wybrać, czy warunki ukończenia aktywności (jeśli są ustawione) lub/i daty mają być wyświetlane dla studentów na stronie kursu.';
$string['tour_activityinfo_course_teacher_title'] = 'Nowość: Informacje o aktywności';
$string['tour_final_step_content'] = 'To już koniec tego przewodnika. Nie pojawi się ponownie, dopóki nie zresetujesz go, korzystając z linku w stopce.';
$string['tour_final_step_title'] = 'Zakończ przewodnik';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Zamieszczaj tutaj ważne wiadomości.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Coś do powiedzenia wszystkim?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Dodaj nową lub edytuj istniejącą zawartość.';
$string['tour_navigation_course_edit_teacher_title'] = 'Aktywuj tryb edycji';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Przeglądaj aktywności i śledź swoje postępy.';
$string['tour_navigation_course_index_student_title'] = 'Rozejrzyj się';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Przeciągnij i upuść aktywności, aby zmienić kolejność treści w kursie.';
$string['tour_navigation_course_index_teacher_title'] = 'Indeks kursu';
$string['tour_navigation_course_student_tour_des'] = 'Gdzie można przeglądać aktywności w kursie';
$string['tour_navigation_course_student_tour_name'] = 'Indeks kursu';
$string['tour_navigation_course_teacher_tour_des'] = 'Tryb edycji, przeciąganie i upuszczanie aktywności oraz publikowanie ogłoszeń w kursie';
$string['tour_navigation_course_teacher_tour_name'] = 'Course editing';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Ten panel boczny może zawierać więcej funkcji.';
$string['tour_navigation_dashboard_title'] = 'Rozwiń, aby odkryć';
$string['tour_navigation_dashboard_tour_des'] = 'Gdzie można znaleźć bloki';
$string['tour_navigation_dashboard_tour_name'] = 'Szuflada blokowa';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Dodaj, kopiuj, usuwaj i ukrywaj kursy z tego menu.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Rozumiem';
$string['tour_navigation_mycourses_title'] = 'Kursy i kategorie';
$string['tour_navigation_mycourses_tour_des'] = 'Opcje zarządzania kursami na stronie Moje kursy';
$string['tour_navigation_mycourses_tour_name'] = 'Zarządzanie kursem';
$string['tour_resetforall'] = 'Status przewodnika został zresetowany. Będzie to widoczne dla wszystkich użytkowników.';
$string['tourconfig'] = 'Plik konfiguracyjny przewodnika do importu';
$string['tourisenabled'] = 'Przewodnik włączony';
$string['tourlist_explanation'] = 'Możesz utworzyć dowolną liczbę przewodników i włączać je w różnych częściach Moodle. Dla danej strony może istnieć tylko jeden przewodnik.';
$string['tours'] = 'Przewodniki';
$string['usertours'] = 'Przewodniki użytkownika';
$string['usertours:managetours'] = 'Utwórz, edytuj i usuń przewodniki użytkownika';
$string['viewtour_edit'] = 'Możesz <a href="{$a->editlink}">edytować domyślny przewodnik</a> i <a href="{$a->resetlink}">wymusić ponowne wyświetlenie przewodnika dla wszystkich użytkowników</a>.';
$string['viewtour_info'] = 'To jest przewodnik o nazwie \'{$a->tourname}\'. Odnosi się on do ścieżki \'{$a->path}\'.';
