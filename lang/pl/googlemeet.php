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
 * Strings for component 'googlemeet', language 'pl', version '4.0'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Klucz API';
$string['checkweekdays'] = 'Wybierz dni tygodnia, które należą do wybranego zakresu dat.';
$string['clientid'] = 'Identyfikator klienta OAuth';
$string['clientid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-the-API-key-and-OAuth-client-ID" target="_blank"> Jak tworzyć klucz API i identyfikator klienta OAuth</a>';
$string['date'] = 'Data';
$string['duration'] = 'Czas trwania';
$string['earlierto'] = 'Data wydarzenia nie może być wcześniejsza niż data rozpoczęcia kursu ({$a}).';
$string['emailcontent'] = 'Zawartość wiadomości email';
$string['emailcontent_default'] = '<p> Cześć %userfirstname%,<br>
to powiadomienie ma na celu przypomnienie, że w kursie: %coursename% będzie odbywać się spotkanie Google. </p>
<p>Nazwa spotkania: <b>%googlemeetname%</b><br>
Data: %eventdate% %duration% %timezone%<br>
Link dostępu: %url%</p>';
$string['emailcontent_help'] = 'Kiedy powiadomienie jest wysyłane do ucznia, treść wiadomości e-mail pobiera z tego pola. Można użyć następujących symboli wieloznacznych:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Wejdź do pokoju';
$string['eventdate'] = 'Data wydarzenia';
$string['from'] = 'od';
$string['generateurlroom'] = 'Wygeneruj adres pokoju';
$string['googlemeet:addinstance'] = 'Dodaj nowy Google Meet™ dla Moodle';
$string['googlemeet:editrecording'] = 'Edytuj nagranie';
$string['googlemeet:removerecording'] = 'Usuń nagranie';
$string['googlemeet:syncgoogledrive'] = 'Synchronizuj z Dyskiem Google';
$string['googlemeet:view'] = 'Wyświetl zawartość Google Meet™ dla Moodle';
$string['hide'] = 'Ukryj';
$string['invalideventenddate'] = 'Ta data nie może być wcześniejsza niż „Data wydarzenia”';
$string['invalideventendtime'] = 'Godzina zakończenia musi być późniejsza niż godzina rozpoczęcia';
$string['invalidstoredurl'] = 'Nie można wyświetlić tego zasobu, adres URL Google Meet jest nieprawidłowy.';
$string['jstableinfo'] = 'Wyświetlam nagrania od {start} do {end} z {rows}';
$string['jstableinfofiltered'] = 'Wyświetlam od {start} do {end} z {rows} nagrań (przefiltrowane z {rowsTotal} nagrań)';
$string['jstableloading'] = 'Ładuje ...';
$string['jstablenorows'] = 'Nie znaleziono nagrań';
$string['jstableperpage'] = '{select} nagrań na stronę';
$string['jstablesearch'] = 'Szukam ...';
$string['lastsync'] = 'Ostatnia synchronizacja:';
$string['loading'] = 'Ładowanie';
$string['messageprovider:notification'] = 'Przypomnienie o rozpoczęciu wydarzenia w Google Meet';
$string['minutesbefore'] = 'Minut wcześniej';
$string['minutesbefore_help'] = 'Liczba minut przed rozpoczęciem wydarzenia, kiedy powiadomienie powinno zostać wysłane.';
$string['modulename'] = 'Google Meet™ dla Moodle';
$string['modulename_help'] = 'Moduł Google Meet ™ dla Moodle umożliwia nauczycielowi utworzenie pokoju Google Meet jako aktywności kursu, a po spotkaniach udostępnia uczniom nagrania zapisane na Dysku Google.
<p>©2018 Google LLC wszelkie prawa zastrzeżone.<br/>
Google Meet i logo Google Meet są zastrzeżonymi znakami towarowymi firmy Google LLC.</p>';
$string['modulenameplural'] = 'Instancja Google Meet™ dla Moodle';
$string['multieventdateexpanded'] = 'Wydłużono powtarzalność daty wydarzenia';
$string['multieventdateexpanded_desc'] = 'Pokaż ustawienia „Powtarzanie daty wydarzenia” jako domyślnie rozwinięte podczas tworzenia nowego pokoju.';
$string['name'] = 'Nazwa';
$string['never'] = 'nigdy';
$string['notfoundrecordingname'] = 'Nie znaleziono nagrania o tej nazwie';
$string['notfoundrecordingsfolder'] = 'Na Dysku Google nie znaleziono folderu „Meet Recordings”.';
$string['notification'] = 'Powiadomienie';
$string['notificationexpanded'] = 'Powiadomienia rozwinięte';
$string['notify'] = 'Wyślij powiadomienie studentowi';
$string['notify_help'] = 'Jeśli opcja jest zaznaczona, do studenta zostanie wysłane powiadomienie o dacie rozpoczęcia wydarzenia.';
$string['notifycationexpanded_desc'] = 'Pokaż ustawienia „Powiadomienia” jako domyślnie rozwinięte podczas tworzenia nowego pokoju.';
$string['notifytask'] = 'Zadanie powiadamiania Google Meet ™ dla Moodle';
$string['notpossiblesync'] = 'Nie można zsynchronizować się z innym kontem niż to, które utworzyło pokój.';
$string['or'] = 'lub';
$string['play'] = 'Odtwórz';
$string['pluginadministration'] = 'Administracja Google Meet™ dla Moodle';
$string['pluginname'] = 'Google Meet™ dla Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Rejestruje powiadomienia wysyłane do użytkowników o rozpoczęciu zdarzeń. Dane te mają charakter tymczasowy i są usuwane po dacie rozpoczęcia wydarzenia.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'Identyfikator wydarzenia';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Sygnatura czasowa wskazująca, kiedy użytkownik otrzymał powiadomienie';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'Identyfikator użytkownika';
$string['recording'] = 'Nagranie';
$string['recordings'] = 'Nagrania';
$string['recordingswiththename'] = 'Nazwa nagrania';
$string['recurrenceeventdate'] = 'Powtarzanie daty wydarzenia';
$string['recurrenceeventdate_help'] = 'Ta funkcja umożliwia tworzenie wielu powtórzeń od daty zdarzenia.
<br>* <strong> Powtarzaj w</strong>: wybierz dni tygodnia, w których Twoja klasa będzie się spotykać (na przykład poniedziałek / środa / piątek).
<br>* <strong> Powtarzaj co </strong>: umożliwia ustawienie częstotliwości. Jeśli Twoja klasa będzie się spotykać co tydzień, wybierz 1; będzie się spotykać co dwa tygodnie, wybierz 2; co 3 tygodnie, wybierz 3 itd.
<br>* <strong> Powtarzaj do </strong>: wybierz ostatni dzień spotkania (ostatni dzień, w którym chcesz przyjąć powtarzającą się datę wydarzenia).';
$string['repeatasfollows'] = 'Powtórz powyższą datę wydarzenia w następujący sposób';
$string['repeatevery'] = 'Powtarzaj co';
$string['repeaton'] = 'Powtarzaj w';
$string['repeatuntil'] = 'Powtarzaj do';
$string['requirednamefield'] = 'Wprowadź nazwę pokoju, który ma zostać utworzony automatycznie.';
$string['roomcreator'] = 'Tworzący pokój:';
$string['roomname'] = 'Nazwa pokoju';
$string['roomurl'] = 'Adres URL pokoju';
$string['roomurlexpanded'] = 'URL pokoju został rozszerzony';
$string['roomurlexpanded_desc'] = 'Domyślnie pokaż ustawienia „Adres URL pokoju” jako rozwinięte podczas tworzenia nowego pokoju.';
$string['show'] = 'Pokaż';
$string['syncwithgoogledrive'] = 'Synchronizuj z Dyskiem Google';
$string['thereisnorecordingtoshow'] = 'Brak nagrań do wyświetlenia';
$string['timeahead'] = 'Nie można utworzyć wielu powtórzeń daty wydarzenia, które przekraczają jeden rok, dostosować daty rozpoczęcia i zakończenia.';
$string['to'] = 'do';
$string['today'] = 'dziś';
$string['upcomingevents'] = 'Nadchodzące wydarzenia';
$string['url_failed'] = 'Wymagany jest prawidłowy adres URL Google Meet';
$string['visible'] = 'widoczny';
$string['week'] = 'tydzień/tygodnie';
