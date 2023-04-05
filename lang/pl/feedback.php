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
 * Strings for component 'feedback', language 'pl', version '4.0'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Dodaj pytanie';
$string['add_pagebreak'] = 'Dodaj podział strony';
$string['adjustment'] = 'Wyrównanie';
$string['after_submit'] = 'Po zatwierdzeniu';
$string['allowfullanonymous'] = 'Zezwól na pełną anonimowość';
$string['analysis'] = 'Analiza';
$string['anonymous'] = 'Anonimowy';
$string['anonymous_edit'] = 'Zapisz nazwę użytkownika';
$string['anonymous_entries'] = 'Anonimowe wpisy ({$a})';
$string['anonymous_user'] = 'Anonimowy użytkownik';
$string['answerquestions'] = 'Odpowiedz na pytania';
$string['append_new_items'] = 'Dodaj nowe elementy';
$string['autonumbering'] = 'Automatyczna numeracja';
$string['autonumbering_help'] = 'Włącza lub wyłącza automatyczną numerację dla każdego pytania';
$string['average'] = 'Średnia';
$string['bold'] = 'Pogrubienie';
$string['calendarend'] = '{$a} zamyka się';
$string['calendarstart'] = '{$a} otwiera się';
$string['cannotaccess'] = 'Możesz uzyskać dostęp do tej informacji zwrotnej tylko z poziomu kursu';
$string['cannotsavetempl'] = 'zapisywanie szablonów jest niedozwolone';
$string['captcha'] = 'Zabezpieczenie Captcha';
$string['captchanotset'] = 'Captcha nie została ustawiona.';
$string['check'] = 'wielokrotne odpowiedzi (checkbox)';
$string['check_values'] = 'Możliwe odpowiedzi';
$string['checkbox'] = 'wielokrotne odpowiedzi (checkbox)';
$string['choosefile'] = 'Wybierz plik';
$string['chosen_feedback_response'] = 'wybrana informacja zwrotna';
$string['closebeforeopen'] = 'Określiłeś/aś datę zakończenia przed datą rozpoczęcia.';
$string['complete_the_form'] = 'Odpowiedz na pytania';
$string['completed'] = 'zakończony';
$string['completed_feedbacks'] = 'Zatwierdzone odpowiedzi';
$string['completedon'] = 'Ukończono {$a}';
$string['completiondetail:submit'] = 'Prześlij opinię';
$string['completionsubmit'] = 'Wyświetl jako zakończone, jeśli informacja zwrotna została podana';
$string['configallowfullanonymous'] = 'Jeśli ta opcja jest ustawiona, opinia zwrotna może być wypełniona bez uprzedniego logowania. Ma to zastosowanie tylko do opinii na stronie głównej.';
$string['confirmdeleteentry'] = 'Czy na pewno chcesz usunąć ten wpis?';
$string['confirmdeleteitem'] = 'Czy na pewno chcesz usunąć ten element?';
$string['confirmdeletetemplate'] = 'Czy na pewno chcesz usunąć ten szablon?';
$string['confirmusetemplate'] = 'Czy na pewno chcesz użyć tego szablonu?';
$string['continue_the_form'] = 'Kontynuuj odpowiedzi na pytania';
$string['count_of_nums'] = 'Liczba liczb';
$string['courseid'] = 'ID kursu';
$string['creating_templates'] = 'Zapisz te pytania jako nowy szablon';
$string['delete_entry'] = 'Usuń wpis';
$string['delete_item'] = 'Usuń pytanie';
$string['delete_old_items'] = 'Usuń stare pozycje';
$string['delete_pagebreak'] = 'Usuń stronę przerwy';
$string['delete_template'] = 'Usuń szablon';
$string['delete_templates'] = 'Usuń szablon...';
$string['depending'] = 'Pytania zależne';
$string['depending_help'] = 'Możliwe jest, aby wyświetlenie pytania zależało od odpowiedzi na inne pytanie. <br /> <strong>Oto przykład.</strong> <br /><ul><li> Najpierw należy utworzyć pytanie, od którego inne pytanie może zależeć. </li><li> Następnie dodać podział strony. </li><li> Następnie dodać pytania zależne od wartości pytanieu utworzonego wcześniej. Wybierz pytanie z listy oznaczonej &quot;Zależne od pytania&quot; i wpisać odpowiednią wartość w polu tekstowym oznaczonym &quot;Wymagana wartość&quot;. </li></ul> <strong>Struktura powinnz wyglądać następująco.</strong> <ol><li> pytanie Q: Czy masz samochód? : Tak/nie </li><li> Podział strony </li><li> pytanie P: Jakiego koloru jest twój samochód? <br /> (Pytanie to zależy od odpowiedzi na pytanie 1 o wartości = tak) </li><li> pytanie Q: Dlaczego nie masz samochodu? <br /> (Pytanie to zależy od  odpowiedzi na pytanie 1 z wartością = Nie) </li><li> ... inne pytania</li></ol>';
$string['dependitem'] = 'Zależne od pytania';
$string['dependvalue'] = 'Wymagana wartość';
$string['description'] = 'Opis';
$string['do_not_analyse_empty_submits'] = 'Nie dodawaj do analizy pustych odpowiedzi';
$string['downloadresponseas'] = 'Pobierz wszystkie odpowiedzi jako:';
$string['drop_feedback'] = 'Usuń z tego kursu';
$string['dropdown'] = 'pojedyncza odpowiedź (lista rozwijana)';
$string['dropdown_values'] = 'Możliwe odpowiedzi';
$string['dropdownlist'] = 'pojedyncza odpowiedź (lista rozwijana)';
$string['dropdownrated'] = 'Lista (ze skalą liczbową)';
$string['edit_item'] = 'Edytuj pytanie';
$string['edit_items'] = 'Edytuj pytania';
$string['email_notification'] = 'Wyślij powiadomienie e-mail ';
$string['email_notification_help'] = 'Jeśli ta opcja jest włączona, nauczyciele będą otrzymywać powiadomienia o przesłanych opiniach zwrotnych.';
$string['emailteachermail'] = '{$a->username} zakończył wypełnianie aktywności informacja zwrotna: \'{$a->feedback}\'

Możesz ją zobaczyć tutaj:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} zakończył wypełnianie aktywność - informacja zwrotna: <i>\'{$a->feedback}\'</i><br />
Możesz ją zobaczyć <a href="{$a->url}">tutaj</a>.';
$string['entries_saved'] = 'Twoje odpowiedzi zostały zapisane. Dziękuję.';
$string['eventresponsedeleted'] = 'Odpowiedź usunięta';
$string['eventresponsesubmitted'] = 'Przesłane odpowiedzi';
$string['export_questions'] = 'Eksport pytań';
$string['export_to_excel'] = 'Eksportuj do programu Excel';
$string['feedback:addinstance'] = 'Dodaj nową informację zwrotną';
$string['feedback:complete'] = 'Wypełnianie opinii zwrotnej';
$string['feedback:createprivatetemplate'] = 'Utwórz prywatny szablon';
$string['feedback:createpublictemplate'] = 'Utwórz publiczny szablon';
$string['feedback:deletesubmissions'] = 'Usuwanie opinii zwrotnych';
$string['feedback:deletetemplate'] = 'Usuń szablon';
$string['feedback:edititems'] = 'Edytuj pozycję';
$string['feedback:mapcourse'] = 'Skojarz globalne formularze opinii z kursami';
$string['feedback:receivemail'] = 'Otrzymano powiadomienie e-mail';
$string['feedback:view'] = 'Zobacz informację zwrotną';
$string['feedback:viewanalysepage'] = 'Wyświetlanie strony analizy opinii';
$string['feedback:viewreports'] = 'Zobacz raporty';
$string['feedback_is_not_for_anonymous'] = 'Informacja zwrotna nie jest anonimowa';
$string['feedback_is_not_open'] = 'Informacja zwrotna nie jest otwarta';
$string['feedbackclose'] = 'Zezwól na odpowiedzi do';
$string['feedbackcompleted'] = '{$a->username} kończył/a {$a->feedbackname}';
$string['feedbackopen'] = 'Zezwól na odpowiedzi od';
$string['file'] = 'Plik';
$string['filter_by_course'] = 'Filtruj według kursu';
$string['handling_error'] = 'Wystąpił błąd w obsłudze akcji modułu opinii zwrotnej';
$string['hide_no_select_option'] = 'Ukryj opcję: "Nie wybrano"';
$string['horizontal'] = 'poziomo';
$string['import_questions'] = 'Importuj pytania';
$string['import_successfully'] = 'Import zakończono poprawnie';
$string['importfromthisfile'] = 'Importuj z tego pliku';
$string['includeuserinrecipientslist'] = 'Uwzględnij {$a} na liście odbiorców';
$string['info'] = 'Informacja';
$string['infotype'] = 'Typ informacji';
$string['insufficient_responses'] = 'zbyt mało opinii';
$string['insufficient_responses_for_this_group'] = 'Jest zbyt mało wysłanych opinii dla tej grupy';
$string['insufficient_responses_help'] = 'Zbyt mało wysłanych opinii dla tej grupy. Aby zachować anonimowość, potrzebne są co najmniej 2 wysłane opinie.';
$string['item_label'] = 'Etykieta';
$string['item_name'] = 'Pytanie';
$string['label'] = 'Etykieta';
$string['labelcontents'] = 'Zawartość';
$string['mapcourse'] = 'Skojarz opinie z kursami';
$string['mapcourse_help'] = 'Domyślnie formularze opinii zwrotnej utworzony na stronie głównej są dostępne w całej witrynie i pojawią się we wszystkich kursach korzystających z bloku opinii zwrotnej. Możesz oznaczyć formularz opinii zwrotnej jako "sticky", aby pojawiał się wszędzie, lub ograniczyć jego występowanie do kursów, które z nim skojarzysz.';
$string['mapcourseinfo'] = 'To jest formularz opinii na poziomie całej witryny, który jest dostępny we wszystkich kursach w bloku Opinia zwrotna. Można jednak ograniczyć kursy, w których będzie on wyświetlany przez tzw. skojarzenie. Wyszukaj kurs i skojarz go z tym formularzem.';
$string['mapcoursenone'] = 'Brak skojarzonych formularzy. Formularz będzie dostępny ze wszystkich kursów.';
$string['mapcourses'] = 'Skojarz formularz opinii z kursami';
$string['mappedcourses'] = 'Skojarzone kursy';
$string['mappingchanged'] = 'Mapowanie kursu zostało zmienione';
$string['maximal'] = 'Maksimum';
$string['messageprovider:message'] = 'Przypomnienie o opinii zwrotnej';
$string['messageprovider:submission'] = 'Powiadomienia o wysłanej opinii zwrotnej';
$string['minimal'] = 'Minimum';
$string['mode'] = 'Tryb';
$string['modulename'] = 'Opinia zwrotna';
$string['modulename_help'] = 'Moduły informacji zwrotnej (opinii) umożliwiają tworzenie niestandardowe ankiet oceniających kursy.';
$string['modulenameplural'] = 'Opinie zwrotne';
$string['move_item'] = 'Przenieś to pytanie';
$string['multichoice'] = 'Wybór wielokrotny';
$string['multichoice_values'] = 'Wartości wyboru wielokrotnego';
$string['multichoicerated'] = 'Wybór wielokrotny (ze skalą liczbową)';
$string['multichoicetype'] = 'Wariant wyboru wielokrotnego';
$string['multiplesubmit'] = 'Zezwól na wielokrotne rozwiązania';
$string['multiplesubmit_help'] = 'Jeśli opcja jest włączona - w anonimowej ankiecie użytkownicy mogą przesyłać opinie nieograniczoną liczbę razy.';
$string['name'] = 'Nazwa';
$string['name_required'] = 'Nazwa wymagana';
$string['next_page'] = 'Następna strona';
$string['no_handler'] = 'Nie istnieje obsługi dla akcji';
$string['no_itemlabel'] = 'Brak etykiety';
$string['no_itemname'] = 'Brak nazwy elementu';
$string['no_items_available_yet'] = 'Nie skonfigurowano jeszcze żadnych pytań';
$string['no_templates_available_yet'] = 'Brak dostępnych szablonów';
$string['non_anonymous'] = 'Nazwa użytkownika będzie zapamiętywana i prezentowana z odpowiedziami';
$string['non_anonymous_entries'] = 'Pozycje nieanonimowe';
$string['non_respondents_students'] = 'Studenci niebędący respondentami ({$a})';
$string['not_completed_yet'] = 'Jeszcze nie zakończono(y)';
$string['not_selected'] = 'Nie wybrano';
$string['not_started'] = 'Nie rozpoczęto';
$string['numberoutofrange'] = 'Liczba poza zakresem';
$string['numeric'] = 'Odpowiedź numeryczna';
$string['numeric_range_from'] = 'Zakres od';
$string['numeric_range_to'] = 'Zakres do';
$string['of'] = 'z';
$string['oldvaluespreserved'] = 'Wszystkie stare pytania i przypisane wartości zostaną zachowane';
$string['oldvalueswillbedeleted'] = 'Bieżące pytania i wszystkie odpowiedzi zostaną usunięte.';
$string['only_one_captcha_allowed'] = 'Tylko jedno captcha jest dozwolona w informacji zwrotnej';
$string['openafterclose'] = 'Podałeś datę otwarcia po dacie zamknięcia';
$string['overview'] = 'Przegląd';
$string['page'] = 'Strona';
$string['page-mod-feedback-x'] = 'Dowolna strona informacji zwrotnej';
$string['page_after_submit'] = 'Wiadomość po ukończeniu';
$string['pagebreak'] = 'Podział strony';
$string['pluginadministration'] = 'Administracja informacją zwrotną';
$string['pluginname'] = 'Opinia zwrotna';
$string['position'] = 'Pozycja';
$string['previous_page'] = 'Poprzednia strona
';
$string['privacy:metadata:value:value'] = 'Wybrana odpowiedź.';
$string['public'] = 'Publiczny';
$string['question'] = 'Pytanie';
$string['questionandsubmission'] = 'Ustawienia pytań i odpowiedzi';
$string['questions'] = 'Pytania';
$string['radio'] = 'pojedyncza odpowiedź (radiobutton)';
$string['radio_values'] = 'Odpowiedzi';
$string['ready_feedbacks'] = 'Gotowe informacje zwrotne';
$string['required'] = 'Wymagane';
$string['resetting_data'] = 'Resetuj informacje zwrotne';
$string['resetting_feedbacks'] = 'Resetowanie informacji zwrotnej';
$string['response_nr'] = 'Numer odpowiedzi';
$string['responses'] = 'Odpowiedzi';
$string['responsetime'] = 'Czas odpowiedzi';
$string['save_as_new_item'] = 'Zapisz jako nowe pytanie';
$string['save_as_new_template'] = 'Zapisz jako nowy szablon';
$string['save_entries'] = 'Zatwierdź swoją odpowiedź';
$string['save_item'] = 'Zapisz pytanie';
$string['saving_failed'] = 'Zapisywanie nie powiodło się';
$string['search:activity'] = 'Informacja zwrotna - informacje o aktywności';
$string['search_course'] = 'Szukaj kursu';
$string['searchcourses'] = 'Szukaj kursów';
$string['searchcourses_help'] = 'Szukaj kursu, które chcesz skojarzyć z tym formularzem opinii. Wpisz kod lub nazwę.';
$string['selected_dump'] = 'Wybrane indeksy zmiennej $SESSION są wydrukowane poniżej:';
$string['send'] = 'wyślij';
$string['send_message'] = 'Wyślij powiadomienie';
$string['show_all'] = 'Pokaż wszystkie';
$string['show_analysepage_after_submit'] = 'Pokaż stronę z analizą';
$string['show_entries'] = 'Pokaż odpowiedzi';
$string['show_entry'] = 'Pokaż odpowiedź';
$string['show_nonrespondents'] = 'Pokaż kto nie udzielił opinii*';
$string['site_after_submit'] = 'Strona po zatwierdzeniu';
$string['sort_by_course'] = 'Sortuj według kursu';
$string['started'] = 'Rozpoczęto';
$string['startedon'] = 'Rozpoczęto o {$a}';
$string['subject'] = 'Temat';
$string['switch_item_to_not_required'] = 'Ustaw jako niewymagane';
$string['switch_item_to_required'] = 'Ustaw jako wymagane';
$string['template'] = 'Szablon';
$string['template_deleted'] = 'Usunięto szablon';
$string['template_saved'] = 'Zapisano szablon';
$string['templates'] = 'Szablony';
$string['textarea'] = 'Dłuższa odpowiedź tekstowa';
$string['textarea_height'] = 'Liczba linii';
$string['textarea_width'] = 'Szerokość';
$string['textfield'] = 'Krótka odpowiedź tekstowa';
$string['textfield_maxlength'] = 'Maksymalna, akceptowalna liczba znaków ';
$string['textfield_size'] = 'Szerokość pola tekstowego';
$string['there_are_no_settings_for_recaptcha'] = 'Brak ustawień dla captcha';
$string['this_feedback_is_already_submitted'] = 'Już zakończyłeś wypełnianie tej aktywności.';
$string['typemissing'] = 'Brakująca wartość "typ"';
$string['update_item'] = 'Zapisz zmiany w pytaniu';
$string['url_for_continue'] = 'URL dla przycisku kontynuacji';
$string['url_for_continue_help'] = 'Domyślnie po wypełnieniu formularza użytkownik jest przekierowywany na stronę kursu. Można zdefiniować tutaj inny docelowy adres URL dla przycisku Kontynuuj.';
$string['use_one_line_for_each_value'] = 'Użyj jednej linii dla każdej odpowiedzi!';
$string['use_this_template'] = 'Użyj tego szablonu';
$string['using_templates'] = 'Użyj szablonu';
$string['vertical'] = 'pionowo';
$string['whatfor'] = 'Co chcesz zrobić?';
