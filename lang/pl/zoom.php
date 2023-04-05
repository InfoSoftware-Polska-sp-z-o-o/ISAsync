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
 * Strings for component 'zoom', language 'pl', version '4.0'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Czynności';
$string['addtocalendar'] = 'Dodaj do kalendarza';
$string['allmeetings'] = 'Wszystkie spotkania';
$string['allmeetings_disable'] = 'Wyłącz wszystkie linki do spotkań';
$string['allmeetings_enable'] = 'Włącz wszystkie linki do spotkań';
$string['alternative_hosts'] = 'Alternatywni gospodarze';
$string['alternative_hosts_disable'] = 'Wyłącz opcję alternatywnych hostów';
$string['alternative_hosts_help'] = 'Opcja alternatywnego gospodarza pozwala na zaplanowanie spotkań i wyznaczenie innego użytkownika Pro na tym samym koncie do rozpoczęcia spotkania lub webinaru, jeśli nie jest to możliwe. Użytkownik ten otrzyma wiadomość e-mail z powiadomieniem, że został dodany jako alternatywny gospodarz, z linkiem do rozpoczęcia spotkania. Oddziel kilka adresów e-mail przecinkiem (bez spacji).';
$string['alternative_hosts_inputfield'] = 'Pokaż alternatywne hosty jako zwykłe pole wejściowe';
$string['alternative_hosts_picker_placeholder'] = 'Wybierz użytkownika(ów)';
$string['apikey'] = 'Klucz API Zoom';
$string['apisecret'] = 'Hasło API Zoom';
$string['apiurl'] = 'URL API Zoom';
$string['audio_both'] = 'Dźwięk z komputera i telefon';
$string['audio_telephony'] = 'Tylko telefon';
$string['audio_voip'] = 'Tylko dzięk z komputera';
$string['audiodefault'] = 'Domyślny dźwięk';
$string['authentication'] = 'Autoryzacja';
$string['cachedef_sessions'] = 'Informacje o żądaniu raportu o użytkownikach Zoom';
$string['cachedef_zoomid'] = 'Identyfikator użytkownika Zoom';
$string['calendardescriptionURL'] = 'Link do spotkania: {$a}';
$string['calendardescriptionintro'] = '\\nOpis:\\n{\\$a}';
$string['calendariconalt'] = 'Ikona kalendarza';
$string['changehost'] = 'Zmień gospodarza';
$string['clickjoin'] = 'Kliknięto przycisk "Dołącz do spotkania"';
$string['connectionfailed'] = 'Połączenie nie powiodło się:';
$string['connectionok'] = 'Połączenie działa.';
$string['connectionsettings'] = 'Ustawienia połączenia';
$string['connectionsettings_desc'] = 'Te ustawienia określają, w jaki sposób Moodle łączy się z Zoom.';
$string['connectionstatus'] = 'Status połączenia';
$string['defaultsettings'] = 'Domyślne ustawienia Zoom';
$string['defaultsettings_help'] = 'Ustawienia te definiują ustawienia domyślne dla wszystkich nowych spotkań Zoom i webinarów.';
$string['displayleadtime'] = 'Wyświetl czas realizacji';
$string['downloadical'] = 'Pobierz iCal';
$string['downloadical_disable'] = 'Wyłącz link pobierania iCal';
$string['downloadical_enable'] = 'Włącz link pobierania iCal';
$string['duration'] = 'Czas trwania (w minutach)';
$string['encryptiontype'] = 'Typ szyfrowania';
$string['endtime'] = 'Czas zakończenia';
$string['err_duration_nonpositive'] = 'Czas trwania musi być dodatni.';
$string['err_duration_too_long'] = 'Czas trwania nie może przekroczyć 150 godzin.';
$string['err_invalid_password'] = 'Hasło zawiera nieprawidłowe znaki.';
$string['err_long_timeframe'] = 'Żądany przedział czasowy jest zbyt długi, pokazuję wyniki z ostatniego miesiąca w zakresie.';
$string['err_password'] = 'Hasło może zawierać tylko następujące znaki: [a-z A-Z 0-9 @ - _ *]. Maksymalnie 10 znaków.';
$string['err_password_required'] = 'Wymagane jest hasło.';
$string['err_start_time_past'] = 'Data rozpoczęcia nie może być w przeszłości';
$string['errorwebservice'] = 'Błąd usługi zoom web service: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom otrzymał nieprawidłowe żądanie: {$a}';
$string['errorwebservice_notfound'] = 'Zasób nie istnieje: {$a}';
$string['export'] = 'Eksport';
$string['externaluser'] = 'Zewnętrzny użytkownik';
$string['firstjoin'] = 'Pierwszy, który może dołączyć';
$string['firstjoin_desc'] = 'Kiedy najwcześniej użytkownik może dołączyć do zaplanowanego spotkania (ile minut przed rozpoczęciem).';
$string['getmeetingreports'] = 'Pobierz raport ze spotkania Zoom';
$string['globalsettings'] = 'Ustawienia ogólne';
$string['globalsettings_desc'] = 'Te ustawienia dotyczą wtyczki Zoom jako całości.';
$string['host'] = 'Gospodarz';
$string['invalid_status'] = 'Status niepoprawny, sprawdź bazę danych.';
$string['invalidscheduleuser'] = 'Nie można zaplanować dla tego użytkownika.';
$string['join'] = 'Dołącz';
$string['join_meeting'] = 'Dołącz do spotkania';
$string['joinbeforehost'] = 'Dołączanie do spotkania przed gospodarzem';
$string['joinbeforehostenable'] = 'Zezwalaj uczestnikom na dołączanie w dowolnym momencie';
$string['joinlink'] = 'Link połączenia';
$string['jointime'] = 'Czas dołączenia';
$string['leavetime'] = 'Czas opuszczenia';
$string['licenseonjoin'] = 'Wybierz tę opcję, jeśli chcesz, aby gospodarz otrzymał licencję podczas rozpoczynania spotkania <i>oraz</i> podczas tworzenia.';
$string['licensesettings'] = 'Ustawienia licencji';
$string['licensesettings_desc'] = 'Te ustawienia definiują sposób, w jaki Moodle obsługuje Twoją licencję Zoom.';
$string['licensesnumber'] = 'Liczba licencji';
$string['lowlicenses'] = 'Jeśli liczba twoich licencji przekroczy wymagane, to przy tworzeniu każdej nowej aktywności przez użytkownika, zostanie mu przyznana licencja PRO poprzez obniżenie statusu innego użytkownika. Opcja ta jest skuteczna, gdy liczba aktywnych licencji PRO jest większa niż 5.';
$string['maskparticipantdata'] = 'Ukryj dane uczestników';
$string['maskparticipantdata_help'] = 'Zapobiega pojawieniu się danych o uczestnikach w raportach (przydatne dla stron, które ukrywają dane uczęstników, np. dla HIPAA).';
$string['media'] = 'Media';
$string['meeting_finished'] = 'Ukończono';
$string['meeting_invite'] = 'Informacje o telefonie / połączeniu telefonicznym';
$string['meeting_invite_hide'] = 'Ukryj zaproszenie na spotkanie';
$string['meeting_invite_show'] = 'Pokaż zaproszenie na spotkanie';
$string['meeting_nonexistent_on_zoom'] = 'Nie ma na Zoom';
$string['meeting_not_started'] = 'Nie rozpoczęto';
$string['meeting_started'] = 'W toku';
$string['meeting_time'] = 'Czas rozpoczęcia';
$string['modulename'] = 'Spotkanie Zoom';
$string['modulename_help'] = 'Zoom to platforma wideokonferencyjna, która daje uprawnionym użytkownikom możliwość organizowania spotkań online.';
$string['modulenameplural'] = 'Spotkania Zoom';
$string['newmeetings'] = 'Nowe spotkanie';
$string['nomeetinginstances'] = 'Nie znaleziono żadnych sesji na to spotkanie.';
$string['noparticipants'] = 'W tej chwili nie znaleziono żadnych uczestników na tę sesję.';
$string['nosessions'] = 'Nie znaleziono żadnych sesji dla określonego zakresu.';
$string['nozooms'] = 'Brak spotkań';
$string['nozoomsfound'] = 'Nie znaleziono spotkań dla danego kursu.';
$string['off'] = 'Wyłącz';
$string['oldmeetings'] = 'Spotkania zakończone';
$string['on'] = 'Włącz';
$string['option_audio'] = 'Opcje audio';
$string['option_audio_help'] = 'Dzięki tej opcji możesz zezwolić użytkownikom na dzwonienie tylko przy użyciu telefonu, tylko dźwięku z komputera lub obu tych funkcji';
$string['option_authenticated_users'] = 'Tylko uwierzytelnieni użytkownicy';
$string['option_encryption_type'] = 'Szyfrowanie';
$string['option_host_video'] = 'Wideo gospodarza';
$string['option_jbh'] = 'Włącz dołączenie przed gospodarzem';
$string['option_mute_upon_entry'] = 'Wycisz przy wejściu';
$string['option_mute_upon_entry_help'] = 'Automatycznie wycisz wszystkich uczestników, gdy dołączają do spotkania. Gospodarz kontroluje, czy uczestnicy mogą wyłączyć wyciszenie.';
$string['option_participants_video'] = 'Uczestnicy wideo';
$string['option_proxyhost'] = 'Użyj proxy';
$string['option_proxyhost_desc'] = 'Serwer proxy ustawiony tutaj jako \'<code><hostname>:<port></code>\' służy tylko do komunikacji z Zoom. Pozostaw puste, aby użyć domyślnych ustawień proxy Moodle. Ustaw to tylko wtedy, gdy nie chcesz ustawiać globalnego proxy w Moodle.';
$string['option_waiting_room'] = 'Włącz poczekalnię';
$string['participantdatanotavailable'] = 'Szczegóły niedostępne';
$string['participantdatanotavailable_help'] = 'Dane uczestników nie są dostępne dla tej sesji Zoom (np. ze względu na wymagania HIPAA).';
$string['participants'] = 'Uczestnicy';
$string['password'] = 'Kod dostępu';
$string['password_allowed_char'] = 'Hasło może zawierać tylko następujące znaki: [a-z A-Z 0-9 @ - _ *].';
$string['password_length'] = 'Minimum {$a} znak(ów).';
$string['password_letter'] = 'Kod dostępu musi zawierać co najmniej 1 literę.';
$string['password_lower_upper'] = 'Kod dostępu musi zawierać małe i wielkie litery.';
$string['password_max_length'] = 'Maksymalnie 10 znaków.';
$string['password_number'] = 'Kod dostępu musi zawierać co najmniej 1 cyfrę.';
$string['password_only_numeric'] = 'Kod dostępu może zawierać tylko cyfry i nie może zawierać innych znaków.';
$string['password_special'] = 'Kod dostępu musi mieć co najmniej 1 znak specjalny (@ -_ *).';
$string['passwordprotected'] = 'Chronione hasłem';
$string['pluginadministration'] = 'Zarządzanie spotkaniem Zoom';
$string['pluginname'] = 'Spotkanie Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'Tabela bazy danych, która przechowuje informacje o każdej instancji spotkania.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Nazwa spotkania, w którym uczestniczył użytkownik.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Tabela bazy danych, która przechowuje informacje o uczestnikach spotkania.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Jak długo uczestnik był na spotkaniu';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Czas, w którym uczestnik dołączył do spotkania';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Czas, w którym uczestnik opuścił spotkanie';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Nazwa uczestnika';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'E-mail uczestnika';
$string['recurringmeeting'] = 'Cykliczne';
$string['recurringmeeting_help'] = 'Włączenie tej opcji spowoduje, że spotkanie będzie cyklicznym spotkaniem bez daty i godziny zakończenia. W każdej chwili można uzyskać do niego dostęp.';
$string['recurringmeetingexplanation'] = 'Spotkanie nie ma ustawione daty ani godziny zakończenia';
$string['recurringmeetinglong'] = 'Spotkanie cykliczne (spotkanie bez daty i godziny zakończenia)';
$string['recurringmeetingthisis'] = 'To jest spotkanie cykliczne';
$string['recycleonjoin'] = 'Odzyskaj licencję po dołączeniu';
$string['redefinelicenses'] = 'Ponowne przypisanie licencji';
$string['refreshreports'] = 'Odśwież raporty z sesji';
$string['report'] = 'Raporty';
$string['reportapicalls'] = 'Zgłoś wyczerpane wywołania API';
$string['resetapicalls'] = 'Zresetuj liczbę dostępnych wywołań API';
$string['schedule'] = 'Harmonogram';
$string['schedulefor'] = 'Zaplanuj spotkanie dla';
$string['scheduleforself'] = 'Zaplanuj dla siebie';
$string['schedulingprivilege'] = 'Uprawnienia do planowania';
$string['schedulingprivilege_disable'] = 'Wyłącz opcję uprawnień do planowania';
$string['schedulingprivilege_enable'] = 'Włącz opcję uprawnień do planowania';
$string['search:activity'] = 'Zoom - informacje o aktywności';
$string['security'] = 'Bezpieczeństwo';
$string['sessions'] = 'Sesje';
$string['sessionsreport'] = 'Raport sesji';
$string['setpasscode'] = 'Ustal kod dostępu';
$string['start'] = 'Start';
$string['start_meeting'] = 'Rozpocznij spotkanie';
$string['start_time'] = 'Kiedy';
$string['starthostjoins'] = 'Włącz wideo, gdy gospodarz dołączy';
$string['startpartjoins'] = 'Włącz wideo, gdy uczestnik dołączy';
$string['starttime'] = 'Czas rozpoczęcia';
$string['status'] = 'Status';
$string['title'] = 'Tytuł';
$string['topic'] = 'Temat';
$string['unavailable'] = 'W tej chwili nie możesz dołączyć.';
$string['unavailablefinished'] = 'Spotkanie już się zakończyło.';
$string['unavailablefirstjoin'] = 'Możesz dołączyć najwcześniej {$a->mins} minut/y przed planowanym czasem rozpoczęcia.';
$string['unavailablenotstartedyet'] = 'Spotkanie jeszcze się nie rozpoczęło.';
$string['updatemeetings'] = 'Aktualizacja ustawień spotkania z Zoom';
$string['usepersonalmeeting'] = 'Użyj osobistego spotkania o identyfikatorze {$a}';
$string['waitingroom'] = 'Poczekalnia włączona';
$string['waitingroomenable'] = 'Włącz poczekalnię';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<b><p>Ten moduł był już ustawiony jako spotkanie, a nie webinar. Nie możesz zmienić tego ustawienia po utworzeniu spotkania.</b></p>';
$string['webinar_already_true'] = '<p><b>Ten moduł był już ustawiony jako webinar, a nie spotkanie. Nie możesz zmienić tego ustawienia po utworzeniu webinaru.</b></p>';
$string['webinar_disable'] = 'Wyłącz webinary';
$string['webinar_help'] = 'Ta opcja jest dostępna tylko dla wstępnie autoryzowanych kont Zoom.';
$string['zoom:addinstance'] = 'Dodaj nowe spotkanie Zoom';
$string['zoom:refreshsessions'] = 'Odśwież raporty ze spotkań Zoom';
$string['zoom:view'] = 'Zobacz spotkania Zoom';
$string['zoomerr'] = 'Wystąpił błąd podczas korzystania z Zoom.';
$string['zoomerr_alternativehostusernotfound'] = 'Nie znaleziono użytkownika {$a} w Zoom.';
$string['zoomerr_apikey_missing'] = 'Nie znaleziono klucza API Zoom';
$string['zoomerr_apisecret_missing'] = 'Nie znaleziono hasła API Zoom';
$string['zoomerr_id_missing'] = 'Musisz określić identyfikator modułu kursu lub identyfikator instancji';
$string['zoomerr_licensesnumber_missing'] = 'Znaleziono ustawienie odzyskiwania licencji Zoom, ale nie znaleziono ustawienia liczby licencji Zoom';
$string['zoomerr_maxretries'] = 'Próbowano {$a->maxretries} razy nawiązać połączenie, ale nie udało się: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Tego spotkania nie można znaleźć na Zoom. Możesz je <a href="{$a->recreate}">ponownie utworzyć tutaj</a> lub <a href="{$a->delete}">całkowicie usunąć</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Tego spotkania nie można znaleźć na Zoom. W razie pytań prosimy o kontakt z organizatorem spotkania.';
$string['zoomerr_usernotfound'] = 'Nie możesz znaleźć swojego konta na Zoom. Jeśli używasz Zoom po raz pierwszy, musisz zalogować się na konto Zoom <a href="{$a}" target="_blank">{$a}</a>. Po aktywacji konta Zoom, załaduj ponownie tę stronę i kontynuuj konfigurację spotkania. W przeciwnym razie upewnij się, że Twój adres e-mail w Zoom jest zgodny z Twoim adresem e-mailem w tym systemie.';
$string['zoomurl'] = 'Strona domowa Zoom';
