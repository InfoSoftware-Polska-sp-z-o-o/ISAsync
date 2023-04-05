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
 * Strings for component 'dialogue', language 'pl', version '4.0'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Akcje';
$string['ago'] = 'temu';
$string['attachment'] = 'Załącznik';
$string['attachments'] = 'Załączniki';
$string['bulkopener'] = 'Opóźniona konwersacja';
$string['bulkopenrule'] = 'Reguła opóźnionej konwersacji';
$string['bulkopenrulenotifymessage'] = '<strong>Informacja</strong></br>Podczas korzystania z reguły opóźnionej konwersacji, konwersacje nie są od razu otwierane. Rozmowy zostaną otwarte po uruchomieniu funkcji cron systemu, zwykle co 30 minut.';
$string['bulkopenrules'] = 'Regułay opóźnionej konwersacji';
$string['cachedef_params'] = 'Parametry - interfejs użytkownika';
$string['cachedef_participants'] = 'Id uczestników (podstawowe informacje)';
$string['cachedef_unreadcounts'] = 'Nieprzeczytane wiadomości użytkowników liczą się w rozmowach';
$string['cachedef_userdetails'] = 'Krótkie informacje o użytkowniku, wszyscy zarejestrowani użytkownicy';
$string['cannotclosedraftconversation'] = 'Nie możesz zamknąć rozmowy, która się jeszcze nie rozpoczęła!';
$string['cannotdeleteopenconversation'] = 'Nie możesz usunąć otwartej rozmowy';
$string['closeconversation'] = 'Zamknij konwersacje';
$string['closed'] = 'Zamknięty';
$string['completed'] = 'Zakończony';
$string['configmaxattachments'] = 'Domyślnie maksymalna dozwolona liczba załączników na post.';
$string['configmaxbytes'] = 'Domyślny maksymalny rozmiar wszystkich załącznikówdialogowych w witrynie (z zastrzeżeniem ograniczeń kursów i innych ustawień lokalnych)';
$string['configtrackunread'] = 'Śledź nieprzeczytane wiadomości dialogowe na stronie głównej kursu';
$string['configviewconversationsbyrole'] = 'Eksperymentalny: przeglądaj rozmowy według roli, uporządkuj listę rozmów według roli autora';
$string['configviewstudentconversations'] = 'Eksperymentalny: lista studentów z rozmowami, w które są zaangażowani';
$string['conversation'] = 'Konwersacje';
$string['conversationcloseconfirm'] = 'Czy na pewno chcesz zamknąć rozmowę {$a}?';
$string['conversationclosed'] = 'Rozmowa {$a} została zamknięta';
$string['conversationdeleteconfirm'] = 'Czy na pewno chcesz usunąć rozmowę {$a}, nie można tego cofnąć?';
$string['conversationdeleted'] = 'Rozmowa {$a} została usunięta';
$string['conversationdiscarded'] = 'Rozmowa odrzucona';
$string['conversationlistdisplayheader'] = 'Wyświetlanie {$a->show} {$a->state} rozmowy {$a->groupname}';
$string['conversationopened'] = 'Rozmowa została otwarta';
$string['conversationopenedcron'] = 'Rozmowy zostaną otwarte automatycznie';
$string['conversationopenedwith'] = '<strong>1</strong> rozmowa otwarta z:';
$string['conversations'] = 'Rozmowy';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> rozmowy otwarte z:';
$string['cutoffdate'] = 'Data graniczna';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'dzień';
$string['days'] = 'dni';
$string['deleteallconversations'] = 'Usuń wszystkie rozmowy';
$string['deletealldrafts'] = 'Usuń wszystkie szkice';
$string['deleteallrules'] = 'Usuń wszystkie reguły';
$string['deleteconversation'] = 'Usuń konwersacje';
$string['deletereply'] = 'Usuń odpowiedź';
$string['dialogue:addinstance'] = 'Dodaj dialog';
$string['dialogue:bulkopenrulecreate'] = 'Stwórz regułę opóźnionej konwersacji';
$string['dialogue:bulkopenruleeditany'] = 'Pozwala użytkownikowi edytować dowolną regułę, przydatną dla administratorów itp';
$string['dialogue:close'] = 'Zamknij rozmowę';
$string['dialogue:closeany'] = 'Zamknij dowolne';
$string['dialogue:delete'] = 'Usuń własne';
$string['dialogue:deleteany'] = 'Usuń dowolne';
$string['dialogue:open'] = 'Otwórz konwersacje';
$string['dialogue:receive'] = 'Odbierz, kto może być odbiorcą podczas otwierania rozmowy';
$string['dialogue:reply'] = 'Odpowiedz';
$string['dialogue:replyany'] = 'Odpowiedz dowolnej';
$string['dialogue:viewany'] = 'Zobacz dowolną';
$string['dialogue:viewbyrole'] = 'Zobacz listę wątków według roli - eksperymentalne';
$string['dialoguecron'] = 'Dialog cron';
$string['dialogueintro'] = 'Wprowadzenie do rozmowy';
$string['dialoguename'] = 'Nazwa rozmowy';
$string['displaybystudent'] = 'Wyświetl ucznia';
$string['displayconversationsheading'] = 'Wyświetlanie {$a} rozmów';
$string['displaying'] = 'Wyświetlanie';
$string['draft'] = 'Szkic';
$string['draftconversation'] = 'Szkic rozmowy';
$string['draftconversationtrashed'] = 'Szkoc rozmowy usunięty';
$string['draftlistdisplayheader'] = 'Wyświetlam moje szkice';
$string['draftreply'] = 'Szkic odpowiedzi';
$string['draftreplytrashed'] = 'Szkic odpowiedzi usunięty';
$string['drafts'] = 'Szkice';
$string['errorcutoffdateinpast'] = 'Nie można ustawić daty granicznej w przeszłości';
$string['erroremptymessage'] = 'Wiadomość nie może być pusta';
$string['erroremptysubject'] = 'Temat nie może być pusty.';
$string['errornoparticipant'] = 'Musisz otworzyć rozmowę z kimś...';
$string['eventconversationclosed'] = 'Rozmowa zakończona';
$string['eventconversationcreated'] = 'Rozmowa utworzona';
$string['eventconversationdeleted'] = 'Rozmowa usunięta';
$string['eventconversationviewed'] = 'Rozmowa obejrzana';
$string['eventreplycreated'] = 'Odpowiedź utworzona';
$string['everybody'] = 'Każdy (dostępne dla wszystkich)';
$string['everyone'] = 'Każdy';
$string['everyones'] = 'wszyscy';
$string['firstname'] = 'Imię';
$string['fullname'] = 'Pełne imię i nazwisko';
$string['groupmodenotifymessage'] = 'Ta aktywność działa w trybie grupy, wpłynie to na to, z kim możesz rozpocząć rozmowę i jakie konwersacje są wyświetlane.';
$string['hasnotrun'] = 'Jeszcze nie działa';
$string['hour'] = 'godzina';
$string['hours'] = 'godziny';
$string['includefuturemembers'] = 'Uwzględnij przyszłych członków';
$string['ingroup'] = 'w grupie {$a}';
$string['justmy'] = 'tylko moje';
$string['lastname'] = 'Nazwisko';
$string['lastranon'] = 'Ostatnio uruchomiony o';
$string['latest'] = 'Najnowszy';
$string['listpaginationheader'] = '{$a->start}-{$a->end} z {$a->total}';
$string['matchingpeople'] = 'Pasujący ludzie ({$a})';
$string['maxattachments'] = 'Maksymalna liczba załączników';
$string['maxattachments_help'] = 'To ustawienie określa maksymalną liczbę plików, które można dołączyć do posta dialogowego.';
$string['maxattachmentsize'] = 'Maksymalny rozmiar załącznika';
$string['maxattachmentsize_help'] = 'To ustawienie określa największy rozmiar pliku, który można dołączyć do posta dialogowego.';
$string['message'] = 'Wiadomość';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} opublikował nową wiadomość do rozmowy, w której uczestniczysz
w temacie: <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Zobacz w Moodle</a></p>';
$string['messageapismallmessage'] = '{$a} opublikował nową wiadomość do rozmowy, w której uczestniczysz';
$string['messageprovider:post'] = 'Powiadomienia z rozmowy';
$string['messages'] = 'wiadomości';
$string['mine'] = 'Mój';
$string['minute'] = 'minuta';
$string['minutes'] = 'minut';
$string['modulename'] = 'Rozmowa';
$string['modulename_help'] = 'Dialogi umożliwiają uczniom lub nauczycielom rozpoczęcie dwukierunkowego dialogu z inną osobą. Są to zajęcia kursowe, które mogą być przydatne, gdy nauczyciel chce miejsca, w którym mógłby udzielić prywatnej informacji zwrotnej dla ucznia na temat jego aktywności online. Na przykład, jeśli uczeń uczestniczy w forum językowym i popełnił błąd gramatyczny, na który nauczyciel chce zwrócić uwagę bez zawstydzania ucznia, dialog jest idealnym miejscem. Aktywność dialogowa będzie również doskonałym sposobem dla doradców w instytucji do interakcji ze studentami - wszystkie działania są rejestrowane i e-mail nie jest koniecznie wymagany';
$string['modulenameplural'] = 'Rozmowy';
$string['month'] = 'miesiąc';
$string['months'] = 'miesięcy';
$string['nobulkrulesfound'] = 'Nie znaleziono reguł!';
$string['noconversationsfound'] = 'Nie znaleziono konwersacji!';
$string['nodraftsfound'] = 'Nie znaleziono szkiców';
$string['nomatchingpeople'] = 'Brak pasujących ludzi \'{$a}\\';
$string['nopermissiontoclose'] = 'Nie masz uprawnień do zamknięcia tej rozmowy!';
$string['nopermissiontodelete'] = 'Nie masz uprawnień do usunięcia!';
$string['nosubject'] = '[Brak tematu]';
$string['numberattachments'] = '{$a} załączniki';
$string['numberunread'] = '{$a} nieprzeczytane';
$string['oldest'] = 'Najstarsze';
$string['onlydraftscanbetrashed'] = 'Tylko szkice mogą zostać zniszczone';
$string['open'] = 'Otwórz';
$string['openedbyfullyear'] = '<small>Otwarta przez</small> <strong>{$a->fullname}</strong> <small>o</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Otwarta przez</small> <strong>{$a->fullname}</strong> <small>o</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Otwarta przez</small> <strong>{$a->fullname}</strong> <small>w</small> {$a->time} <small>({$a->timepast}) temu</small>';
$string['openwith'] = 'Otwórz z';
$string['participants'] = 'uczestnicy';
$string['people'] = 'Ludzie';
$string['pluginadministration'] = 'Administracja dialogu';
$string['pluginname'] = 'Dialog';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>odpowiedziano</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>odpowiedziano o</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>odpowiedziano o</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>odpowiedziano o</small> {$a->time} <small>({$a->timepast}) temu</small>';
$string['reply'] = 'Odpowiedz';
$string['replydeleteconfirm'] = 'Czy na pewno chcesz usunąć tę odpowiedź?';
$string['replydeleted'] = 'Odpowiedź została usunięta';
$string['replysent'] = 'Twoja odpowiedź została wysłana';
$string['runsuntil'] = 'Działa do';
$string['savedraft'] = 'Zapisz szkic';
$string['searchpotentials'] = 'Szukaj potencjalnych...';
$string['second'] = 'sekunda';
$string['seconds'] = 'sekund';
$string['send'] = 'Wyślij';
$string['senton'] = '<small><strong>Wyślij o: </strong></small>';
$string['sortedby'] = 'Posortowane według: {$a}';
$string['studenttostudent'] = 'Uczeń do ucznia';
$string['subject'] = 'Temat';
$string['teachertostudent'] = 'Nauczyciel do ucznia';
$string['trashdraft'] = 'Kosz szkiców';
$string['unread'] = 'Nieprzeczytane';
$string['unreadmessages'] = 'Nieprzeczytane wiadomości';
$string['unreadmessagesnumber'] = '{$a} nieprzeczytane wiadomości';
$string['unreadmessagesone'] = '1 nieprzeczytana wiadomość';
$string['usecoursegroups'] = 'Użyj grupy z kursów';
$string['usecoursegroups_help'] = 'Jeśli kurs ma zdefiniowane grupy, zostaną dodane dalsze ograniczenia dotyczące tego, kto może otworzyć rozmowę. Dialogi można otwierać tylko między członkami grupy, chyba że osoba otwierająca dialog ma opcję „Dostęp do wszystkich grup” zestaw możliwości.';
$string['usesearch'] = 'Użyj wyszukiwania, aby znaleźć osoby, z którymi możesz rozpocząć dialog';
$string['viewconversations'] = 'Zobacz rozmowy';
$string['viewconversationsbyrole'] = 'Zobacz rozmowy po roli';
$string['week'] = 'tydzień';
$string['weeks'] = 'tygodni';
$string['year'] = 'rok';
$string['years'] = 'lat';
