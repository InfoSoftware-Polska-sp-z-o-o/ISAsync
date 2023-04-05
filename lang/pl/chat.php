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
 * Strings for component 'chat', language 'pl', version '4.0'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Masz nadchodzące sesje czatu';
$string['ajax'] = 'Wersja wykorzystująca AJAX';
$string['autoscroll'] = 'Przewijaj automatycznie';
$string['beep'] = 'Bzzz';
$string['bubble'] = 'Dymki';
$string['cantlogin'] = 'Nie udało się zalogować do pokoju czatu!';
$string['chat:addinstance'] = 'Dodaj nowy czat';
$string['chat:chat'] = 'Dostęp do czatu';
$string['chat:deletelog'] = 'Usuń logi czatu';
$string['chat:exportparticipatedsession'] = 'Eksportuj sesję czatu, w której brałeś udział';
$string['chat:exportsession'] = 'Eksportuj dowolne sesje czatu';
$string['chat:readlog'] = 'Zobacz logi czatu';
$string['chat:talk'] = 'Rozmowa na czacie';
$string['chat:view'] = 'Wyświetl aktywność czatu';
$string['chatintro'] = 'Opis';
$string['chatname'] = 'Nazwa pokoju czatu';
$string['chatreport'] = 'Sesje czatu';
$string['chattime'] = 'Czas następnego czatu';
$string['compact'] = 'Kompaktowy';
$string['composemessage'] = 'Utwórz wiadomość';
$string['configmethod'] = 'Metoda AJAX dostarcza interfejs czatu oparty na technologii AJAX, który kontaktuje się regularnie z serwerem, aby zaktualizować dyskusję.
Normalna metoda wymaga, aby użytkownicy regularnie łączyli się z serwerem, aby zaktualizować dyskusję. Nie wymaga to dodatkowej konfiguracji i działa wszędzie. Niestety duża liczba czatujących osób generuje duże obciążenie serwera.
Używanie tzw. demona wymaga dostępu do powłoki Unixa, ale daje szybkie i skalowalne środowisko czatu.';
$string['confignormalupdatemode'] = 'Uaktualnianie chat-roomów zazwyczaj obsługuje sie wydajnie używając funkcji <em>keep-alive</em> w Http 1.1, ale to mimo wszystko obciąża serwer. Bardziej zaawansowaną metodą jest używanie <em>Stream</em> aby przesyłać uaktualnienie użytkownikom. Używanie <em>Stream</em> jest znacznie lepsze, ale może nie być zainstalowane na Twoim serwerze.';
$string['configoldping'] = 'Po jakim czasie braku aktywności uznaje się, że użytkownik opuścił czat?  Jest to tylko górna granica, ponieważ zwykle odłączenie wykrywa się bardzo szybko. Niższe wartości bardziej obciążają serwer. Jeśli używasz zwykłej metody, <strong>nigdy</strong> nie ustawiaj mniej niż 2*chat_refresh_room.';
$string['configrefreshroom'] = 'Jak często czat ma być odświeżany? (w sekundach). Ustawienie niskiej wartości spowoduje szybsze działanie, może jednak obciążać serwer, kiedy wiele osób rozmawia';
$string['configrefreshuserlist'] = 'Jak często ma być odświeżana lista użytkowników? (w sekundach)';
$string['configserverhost'] = 'Host komputera, na którym jest zainstalowany demon';
$string['configserverip'] = 'Adres IP, który wskazuje powyższy host';
$string['configservermax'] = 'Maksymalna liczba uczestników';
$string['configserverport'] = 'Port używany przez demona';
$string['coursetheme'] = 'Szata graficzna kursu';
$string['crontask'] = 'Przetwarzanie w tle dla modułu czatu';
$string['currentchats'] = 'Aktywne sesje czatu';
$string['currentusers'] = 'Aktualni użytkownicy';
$string['deletesession'] = 'Usuń sesję';
$string['deletesessionsure'] = 'Czy na pewno chcesz usunąć tę sesję?';
$string['donotusechattime'] = 'Nie pokazuj czasów czatu';
$string['enterchat'] = 'Kliknij tu, aby dołączyć do rozmowy';
$string['entermessage'] = 'Napisz wiadomość';
$string['errornousers'] = 'Nie znaleziono żadnych użytkowników!';
$string['eventmessagesent'] = 'Wiadomość wysłana';
$string['eventsessionsviewed'] = 'Wyświetlono sesje';
$string['explaingeneralconfig'] = 'Te ustawienia są <strong>zawsze</strong> używane';
$string['explainmethoddaemon'] = 'Te ustawienia mają skutek <strong>tylko</strong>, jeśli wybrałeś demona do obsługi czatu.';
$string['explainmethodnormal'] = 'Te ustawienia mają skutek <strong>tylko</strong>, jeśli wybrałeś normalną metodę obsługi czatu.';
$string['generalconfig'] = 'Podstawowa konfiguracja';
$string['idle'] = 'Bezczynny';
$string['indicator:cognitivedepth'] = 'Czat poznawczy';
$string['indicator:cognitivedepth_help'] = 'Ten wskaźnik opiera się na głębi poznawczej osiągniętej przez studenta w ramach aktywności na czacie.';
$string['indicator:cognitivedepthdef'] = 'Czat poznawczy';
$string['indicator:cognitivedepthdef_help'] = 'Uczestnik osiągnął ten procent zaangażowania poznawczego oferowanego przez Czat podczas zakresu analizy (Poziomy = Brak wyświetlenia, Wyświetlenie, Wysłanie, Wyświetlenie informacji zwrotnej, Skomentowanie informacji zwrotnej)';
$string['indicator:socialbreadth'] = 'Czat społecznościowy';
$string['indicator:socialbreadth_help'] = 'Ten wskaźnik opiera się na szerokości społecznej osiągniętej przez studenta podczas aktywności na czacie.';
$string['indicator:socialbreadthdef'] = 'Czat społecznościowy';
$string['indicator:socialbreadthdef_help'] = 'Uczestnik osiągnął ten procent zaangażowania społecznościowego oferowanego przez Czat podczas zakresu analizy (Poziomy = Brak uczestnictwa, Sam uczestnik, Uczestnik z innymi)';
$string['inputarea'] = 'Obszar wprowadzania';
$string['invalidid'] = 'Nie znaleziono tego pokoju czatu!';
$string['list_all_sessions'] = 'Lista wszystkich sesji.';
$string['list_complete_sessions'] = 'Lista zakończonych sesji.';
$string['listing_all_sessions'] = 'Lista wszystkich sesji.';
$string['messagebeepseveryone'] = '{$a} nabzyczał(a) na wszystkich!';
$string['messagebeepsyou'] = '{$a} właśnie na Ciebie nabzyczał(a)!';
$string['messageenter'] = '{$a} dołącza do rozmowy';
$string['messageexit'] = '{$a} opuszcza rozmowę';
$string['messages'] = 'Wiadomości';
$string['messageyoubeep'] = 'Nabzyczałeś(aś) na {$a}';
$string['method'] = 'Metoda czatu';
$string['methodajax'] = 'Metoda AJAX';
$string['methoddaemon'] = 'Demon czatu';
$string['methodnormal'] = 'Normalna metoda';
$string['modulename'] = 'Czat';
$string['modulename_help'] = 'Moduł Czat pozwala uczestnikom na dyskusję poprzez sieć w czasie rzeczywistym. Jest to użyteczne narzędzie pozwalające na lepsze zrozumienie siebie nawzajem oraz tematu, który jest omawiany - sposób funkcjonowania pokojów czatu zasadniczo różni się od asynchronicznych forów.';
$string['modulenameplural'] = 'Czaty';
$string['neverdeletemessages'] = 'Nigdy nie usuwaj wiadomości';
$string['nextchattime'] = 'Godzina kolejnego czatu:';
$string['nextsession'] = 'Następna zaplanowana sesja';
$string['no_complete_sessions_found'] = 'Nie znaleziono kompletnych sesji.';
$string['nochat'] = 'Nie znaleziono czatu';
$string['noguests'] = 'Czat jest zamknięty dla gości';
$string['nomessages'] = 'Brak wiadomości';
$string['nopermissiontoseethechatlog'] = 'Nie masz uprawnień do oglądania logów czatu.';
$string['normalkeepalive'] = 'Utrzymuj';
$string['normalstream'] = 'Strumień';
$string['noscheduledsession'] = 'Nie ma zaplanowanych sesji';
$string['notallowenter'] = 'Nie posiadasz uprawnień, aby wejść do tego pokoju czatu.';
$string['notlogged'] = 'Nie jesteś zalogowany!';
$string['oldping'] = 'Opóźnienie do rozłączenia';
$string['page-mod-chat-x'] = 'Dowolna strona modułu czat';
$string['pastchats'] = 'Poprzednie sesje czatu';
$string['pastsessions'] = 'Poprzednie sesje';
$string['pluginadministration'] = 'Administracja czatem';
$string['pluginname'] = 'Czat';
$string['privacy:metadata:chat_messages_current'] = 'Bieżąca sesja czatu. Te dane są tymczasowe i są usuwane po usunięciu sesji czatu';
$string['privacy:metadata:chat_users'] = 'Śledzi, którzy użytkownicy są w których pokojach czatu';
$string['privacy:metadata:chat_users:firstping'] = 'Czas pierwszego dostępu do czatu';
$string['privacy:metadata:chat_users:ip'] = 'IP użytkownika';
$string['privacy:metadata:chat_users:lang'] = 'Język użytkownika';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Czas ostatniej wiadomości w tym czacie';
$string['privacy:metadata:chat_users:lastping'] = 'Czas ostatniego dostępu do czatu';
$string['privacy:metadata:chat_users:userid'] = 'Identyfikator użytkownika';
$string['privacy:metadata:chat_users:version'] = 'Jak użytkownik uzyskał dostęp do czatu (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Zapis wiadomości wysłanych podczas sesji czatu';
$string['privacy:metadata:messages:issystem'] = 'Czy wiadomość jest wiadomością generowaną przez system';
$string['privacy:metadata:messages:message'] = 'Wiadomość';
$string['privacy:metadata:messages:timestamp'] = 'Czas wysłania wiadomości.';
$string['privacy:metadata:messages:userid'] = 'Identyfikator użytkownika autora wiadomości';
$string['refreshroom'] = 'Odśwież pokój';
$string['refreshuserlist'] = 'Odśwież listę użytkowników';
$string['removemessages'] = 'Usuń wszystkie wiadomości';
$string['repeatdaily'] = 'Codziennie w tym samym czasie';
$string['repeatnone'] = 'Nie powtarzaj - jedynie określony czas';
$string['repeattimes'] = 'Powtarzaj / publikuj czasy sesji';
$string['repeatweekly'] = 'Co tydzień w tym samym czasie';
$string['saidto'] = 'powiedział(a) do';
$string['savemessages'] = 'Zachowaj minione sesje';
$string['search:activity'] = 'Czat - informacje o aktywności';
$string['seesession'] = 'Zobacz sesję';
$string['send'] = 'Wyślij';
$string['sending'] = 'Wysyłanie';
$string['serverhost'] = 'Nazwa serwera';
$string['serverip'] = 'IP serwera';
$string['servermax'] = 'Maksymalna liczba użytkowników';
$string['serverport'] = 'Port serwera';
$string['sessions'] = 'Sesje czat';
$string['sessionstart'] = 'Następna sesja czatu rozpocznie się {{a->date}, ({$a->fromnow} od teraz)';
$string['sessionstartsin'] = 'Następna sesja czatu rozpocznie się za {$a}.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Każdy może oglądać minione sesje';
$string['studentseereports_help'] = 'Jeśli ustawiono na Nie, uprawnienie mod/chat:readlog jest wymagane, aby zobaczyć logi rozmów';
$string['talk'] = 'Mów do...';
$string['updatemethod'] = 'Metoda aktualizacji';
$string['updaterate'] = 'Częstość odświeżania:';
$string['userlist'] = 'Lista użytkowników';
$string['usingchat'] = 'Korzystanie z czatu';
$string['usingchat_help'] = '<p>Czat posiada pewne cechy, aby nieco umilić rozmowy.</p>

<dl>
<dt><b>Emotikony</b></dt>
<dd>Dowolne emotikony, które mogą zostać wprowadzone gdziekolwiek indziej w Moodle, mogą zostać wprowadzone także tu i zostaną wyświetlone poprawnie. Na przykład,  :-) = <img src="pix/s/smiley.gif">  </dd>

<dt><b>Linki</b></dt>
<dd>Adresy internetowe zostaną zamienione na linki automatycznie.</dd>

<dt><b>Nastrój</b></dt>
<dd>Możesz rozpocząć linię z "/me" lub ":", aby okazać swój nastrój. Na przykład, jeżeli Twoje imię to Jan i wpiszesz ":śmieje się!" lub "/me śmieje się!", wszyscy zobaczą "Jan śmieje się!"</dd>

<dt><b>Bzyczenie</b></dt>
<dd>Możesz wysłać dźwięk do innych ludzi naciskając na link "Bzzz" obok ich imienia. Użytecznym skrótem, aby wysłać bzyczenie do wszystkich ludzi na czacie jednocześnie jest "beep all".</dd>

<dt><b>HTML</b></dt>
<dd>Jeśli znasz nieco kod HTML, możesz używać go w swym tekście, aby wprowadzać obrazy, odtwarzać dźwięki lub odpowiednio formatować tekst.</dd>

</dl>';
$string['viewreport'] = 'Poprzednie sesje';
