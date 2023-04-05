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
 * Strings for component 'install', language 'pl', version '4.0'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Podany katalog admin jest nieprawidłowy';
$string['admindirname'] = 'Katalog admin';
$string['admindirsetting'] = 'Bardzo niewiele stron internetowych używa specjalnego URL, aby dostać się do panelu kontrolnego. Niestety kłóci się to ze standardową lokacją stron administratorskich Moodle. Można to naprawić, zmieniając nazwę katalogu administratorskiego w instalacji i wklejając tu nową nazwę. Na przykład: <br /> <br /><b>moodleadmin</b><br /> <br />

To naprawi linki administracyjne w Moodle';
$string['admindirsettinghead'] = 'Ustawienia katalogu administratora ...';
$string['admindirsettingsub'] = 'Niewiele webhost’ów używa /admin jako specjalnego URL w celu akcesu do panela kontrolnego a także w innych celach. Niestety powoduje to konflikt ze standardową lokalizacją dla stron administratora w Moodle. Powyższy konflikt można naprawić, zmieniając nazwę katalogu administratora podczas instalacji i wstawiając nową nazwę. Na przykład:
<br /> <br /><b>moodleadmin</b><br /> <br />

To naprawi linki administratora w Moodle.';
$string['availablelangs'] = 'Dostępne paczki językowe';
$string['caution'] = 'Ostrzeżenie';
$string['chooselanguage'] = 'Wybierz język';
$string['chooselanguagehead'] = 'Wybierz język';
$string['chooselanguagesub'] = 'Proszę wybrać język do instalacji. Ten język będzie również użyty jako domyślny język witryny, przy czym może być później zmieniony.';
$string['cliadminemail'] = 'Nowy adres e-mail administratora';
$string['cliadminpassword'] = 'Nowe hasło administratora';
$string['cliadminusername'] = 'Nazwa konta administratora';
$string['clialreadyconfigured'] = 'Plik config.php już istnieje. Użyj admin/cli/install_database.php jeśli chcesz zainstalować Moodle dla tej strony.';
$string['clialreadyinstalled'] = 'Plik config.php już istnieje. Użyj admin/cli/install_database.php jeśli chcesz zaktualizować Moodle dla tej strony.';
$string['cliinstallfinished'] = 'Instalacja zakończona pomyślnie.';
$string['cliinstallheader'] = 'Program instalacyjny Moodle {$a} z linii poleceń';
$string['climustagreelicense'] = 'W nieinteraktywnym trybie należy zgodzić się na licencję, poprzez wybranie opcji --agree-license';
$string['cliskipdatabase'] = 'Pomijanie instalacji bazy danych.';
$string['clisupportemail'] = 'Adres emaila wsparcia';
$string['clitablesexist'] = 'Tabele bazy danych już istnieją, instalacja  nie może kontynuować.';
$string['compatibilitysettings'] = 'Sprawdzanie Twoich ustawień PHP';
$string['compatibilitysettingshead'] = 'Sprawdzanie Twoich ustawień PHP';
$string['compatibilitysettingssub'] = 'Twój serwer powinien przejść wszystkie te testy, by Moodle działał poprawnie.';
$string['configfilenotwritten'] = 'Instalator nie mógł automatycznie utworzyć pliku config.php zawierającego Twoje parametry instalacyjne, prawdopodobnie dlatego że katalog Moodle nie ma prawa zapisu. Musisz ręcznie przekopiować poniższy kod do pliku config.php, który powinien znajdować się w głównym katalogu Moodle.';
$string['configfilewritten'] = 'config.php został pomyślnie stworzony';
$string['configurationcomplete'] = 'Konfiguracja skończona';
$string['configurationcompletehead'] = 'Konfiguracja skończona';
$string['configurationcompletesub'] = 'Moodle starał sie zapisać twoją konfigurację w pliku w katalogu głównym instalacji Moodle.';
$string['database'] = 'Baza danych';
$string['databasehead'] = 'Ustawienia bazy danych';
$string['databasehost'] = 'Host bazy danych';
$string['databasename'] = 'Nazwa bazy danych';
$string['databasepass'] = 'Hasło do bazy danych';
$string['databaseport'] = 'Port bazy danych';
$string['databasesocket'] = 'Unix socket (gniazdo)';
$string['databasetypehead'] = 'Wybierz sterownik bazy danych';
$string['databasetypesub'] = 'Moodle obsługuje kilka typów serwerów baz danych. Prosimy o kontakt z administratorem serwera, jeśli nie wiesz, jakiego typu użyć.';
$string['databaseuser'] = 'Użytkownik bazy danych';
$string['dataroot'] = 'Katalog danych';
$string['datarooterror'] = 'Katalog danych, który podałeś, nie może być znaleziony lub utworzony. Popraw ścieżkę lub utwórz katalog ręcznie.';
$string['datarootpermission'] = 'Prawa katalogów danych';
$string['datarootpublicerror'] = 'Katalog danych, który podałeś, jest dostępny bezpośrednio z internetu. Musisz użyć innego katalogu.';
$string['dbconnectionerror'] = 'Nie można połączyć się z podaną bazą danych. Sprawdź ustawienia Twojej bazy danych.';
$string['dbcreationerror'] = 'Błąd tworzenia bazy danych. Nie można stworzyć bazy danych o takiej nazwie z dostarczonymi ustawieniami';
$string['dbhost'] = 'Serwer baz danych';
$string['dbpass'] = 'Hasło';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Prefiks tabel';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p> Potwierdź lokalizację dla tej instalacji Moodle.</p>

<p><b>Adres w sieci:</b>
Podaj pełny adres w sieci gdzie Moodle będzie dostępny.
Jeżeli adresów w sieci jest wiele wybierz jeden który będą używali studenci. Nie dodawaj slash</p>

<p><b> Katalog Moodle:</b>
Podaj pełną ścieżkę dostępu do tej instalacji upewnij się że wielkość liter jest poprawna. </p>

<p><b> Katalog z danymi:</b>
Miejsce gdzie Moodle może przechowywać pliki, Ten katalog powinien mieć prawo odczytu i ZAPISU dla serwera www(przeważnie \'nobody\' lub \'apache\'), ale nie ma być dostępny bezpośrednio przez sieć </p>';
$string['directorysettingshead'] = 'Proszę potwierdzić lokację dla instalacji Moodle.';
$string['directorysettingssub'] = '<b>Adres strony</b>
Wpisz pełen adres sieci pod którym będzie dostępne Moodle. Jeśli do strony można dojść przez kilka adresów, należy wpisać ten, którego typowo będą używać studenci. Nie używać ukośników na końcu
<br />
<br />
<b>Katalog MOODLE</b>
Wpisać pełną ścieżkę pliku do instalacji.
Upewnić się, że pisownia wielkich-małych liter się zgadza
<br />
<br/>
<b>Katalog danych</b>
Potrzebujesz miejsca, w którym Moodle będzie zachowywał załadowane pliki. Ten katalog powinien być i czytany, i zapisywany przez użytkownika serwera WWW (zwykle \'nobody\', \'apache\'), ale nie może być do niego dostępu bezpośrednio przez sieć.
 Instalator spróbuje go utworzyć, jeśli nie istnieje.';
$string['dirroot'] = 'Katalog Moodle';
$string['dirrooterror'] = '"Katalog Moodle" wydaje się być nieprawidłowy - tam nie znajduje się instalacja Moodle. Wartości poniżej zostaną przywrócone.';
$string['download'] = 'Pobierz';
$string['downloadlanguagebutton'] = 'Pobierz "{$a}" pakiet językowy';
$string['downloadlanguagehead'] = 'Pobierz pakiet językowy';
$string['downloadlanguagenotneeded'] = 'Możesz kontynuować proces instalacji, używając domyślnego pakietu językowego "{$a}".';
$string['downloadlanguagesub'] = 'Teraz masz możliwość załadowania pakietu językowego i kontynuowania procesu instalacji w tym języku.<br/><br/>Jeśli nie możesz załadować pakietu, instalacja będzie się odbywać dalej po angielsku (kiedy się skończy, będziesz mieć możliwość załadowania i zainstalowania dodatkowych pakietów językowych)';
$string['doyouagree'] = 'Zgadzasz się? (tak / nie):';
$string['environmenthead'] = 'Sprawdzam środowisko (ustawienia) ...';
$string['environmentsub'] = 'Sprawdzamy, czy różne komponenty systemu spełniają wymagania systemu';
$string['environmentsub2'] = 'Każde wydanie Moodle ma pewne minimalne wymagania wersji PHP i pewną liczbę obowiązkowych rozszerzeń PHP. Pełna kontrola środowiska odbywa się przed każdą instalacją i aktualizacją. Prosimy o kontakt z administratorem serwera, jeśli nie wiesz jak zainstalować nową wersję lub włączyć rozszerzenie PHP.';
$string['errorsinenvironment'] = 'Kontrola środowiska zakończona niepowodzeniem!';
$string['fail'] = 'Nie udało się';
$string['fileuploads'] = 'Przesyłanie plików';
$string['fileuploadserror'] = 'Powinno być włączone';
$string['fileuploadshelp'] = '<p>Przesyłany plik nie jest dostępny na Twoim serwerze.</p>

<p> Możesz nadal instalować Moodle, lecz bez tego ustawienia nie będziesz mógł załadowywać plików kursu lub obrazów profilów nowych użytkowników.</p>

<p> Aby umożliwić przesyłanie plików, musisz sam (lub z pomocą swojego administratora systemu) edytować główny plik php.ini w swoim systemie i zmienić ustawienie <b>file_uploads</b> to \'1\'.</p>';
$string['inputdatadirectory'] = 'Katalog danych:';
$string['inputwebadress'] = 'Adres internetowy:';
$string['inputwebdirectory'] = 'Katalog Moodle:';
$string['installation'] = 'Instalacja';
$string['invaliddbprefix'] = 'Nieprawidłowy prefiks. Prefiks może składać się tylko z małych liter i podkreślenia.';
$string['langdownloaderror'] = 'Niestety język "{$a}" nie może zostać pobrany. Proces instalacji będzie kontynuowany w języku angielskim.';
$string['langdownloadok'] = 'Język został "{$a}" zainstalowany pomyślnie. Instalacja będzie w nim kontynuowana w tym języku.';
$string['memorylimit'] = 'Limit pamięci';
$string['memorylimiterror'] = 'Limit pamięci PHP jest ustawiony na zbyt małą wartość ... może to powodować problemy w przyszłości';
$string['memorylimithelp'] = '<p>Limit pamięci PHP dla Twojego serwera jest ustawiony obecnie na {$a}.</p>

<p> Może to stworzyć sytuację, w której Moodle będzie miał w przyszłości problemy z pamięcią, zwłaszcza jeśli masz udostępnionych wiele modułów i/lub wielu użytkowników.</p>

<p>Jeśli jest to możliwe, zalecamy ustawienie konfiguracji PHP z wyższym limitem, np. 40M.
Istnieje kilka sposobów przeprowadzenia tej operacji, których możesz spróbować:</p>
<ol>
<li>Jeśli możesz przekompiluj PHP za pomocą <i>--enable-memory-limit</i>.
Pozwoli to Moodle ustawić samoczynnie limit pamięci.</li>
<li>Jeśli masz dostęp do pliku konfiguracyjnego php.ini, możesz w nim zmienić ustawienie <b>memory_limit</b> do wielkości np. 40M. W przypadku, gdy nie posiadasz dostępu możesz poprosić swojego administratora aby zrobił to za Ciebie.</li>
<li>Na niektórych serwerach PHP można stworzyć plik. htaccess w katalogu Moodle zawierający poniższą linię:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Jednakże na niektórych serwerach będzie uniemożliwiało to poprawne działanie <b>wszystkich</b> stron PHP (ujrzysz błędy na wyświetlanych stronach), wtedy będziesz musiał usunąć plik .htaccess.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem MySQLi, aby mógł komunikować się z MySQL. Sprawdź plik php.ini lub przekompiluj PHP. Rozszerzenie MySQLi nie jest dostępne dla PHP 4.';
$string['nativemariadb'] = 'MariaDB (natywny/mariadb)';
$string['nativemariadbhelp'] = 'Potrzebujesz skonfigurować bazę danych, gdzie Moodle będzie przechowywać większość danych.
Baza danych może być utworzona, jeżeli użytkownik bazy ma potrzebne uprawnienia, użytkownik i hasło muszą już istnieć. Prefiks tabeli jest opcjonalny.
Ten sterownik nie jest kompatybilny z silnikiem MyISAM.';
$string['nativemysqli'] = 'mproved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'Teraz należy skonfigurować bazę danych, gdzie Moodle przechowuje większość informacji.
Baza danych zostanie utworzona automatycznie, jeśli użytkownik posiada potrzebne uprawnienia. Nazwa użytkownika i hasło są obowiązkowe i muszą już istnieć. Prefiks tabeli nie jest obowiązkowy.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Teraz należy skonfigurować bazę danych, gdzie Moodle przechowuje większość informacji.
Baza danych musi być utworzona wcześniej, oraz użytkownik wraz z hasłem musi posiadać odpowiednie uprawnienia. Prefiks tabeli nie jest obowiązkowy.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Teraz należy skonfigurować bazę danych, gdzie Moodle przechowuje większość informacji.
Baza danych musi być utworzona wcześniej, oraz użytkownik wraz z hasłem musi posiadać odpowiednie uprawnienia. Prefiks tabeli nie jest obowiązkowy.';
$string['nativesqlsrv'] = 'PostgreSQL (native/pgsql)';
$string['nativesqlsrvhelp'] = 'Teraz należy skonfigurować bazę danych, gdzie Moodle przechowuje większość informacji.
Baza danych musi być utworzona wcześniej, oraz użytkownik wraz z hasłem musi posiadać odpowiednie uprawnienia. Prefiks tabeli nie jest obowiązkowy.';
$string['nativesqlsrvnodriver'] = 'Sterowniki firmy Microsoft dla programu SQL Server dla PHP nie są zainstalowane lub nie jest skonfigurowany poprawnie.';
$string['ociextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem OCI8, aby mógł komunikować się z Oracle. Sprawdź plik php.ini lub przekompiluj PHP.';
$string['pass'] = 'Udane';
$string['paths'] = 'Ścieżki';
$string['pathserrcreatedataroot'] = 'Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator.';
$string['pathshead'] = 'Potwierdź ścieżki';
$string['pathsrodataroot'] = 'Główny katalog danych nie ma uprawnień do zapisu. ';
$string['pathsroparentdataroot'] = 'Nadrzędny katalog ({$a->parent}) jest tylko do odczytu. Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator. ';
$string['pathssubadmindir'] = 'Nieliczne portale używają URL /admin jako specjalnego adresu panelu sterowania. Niestety jest to sprzeczne ze standardowej lokalizacją folderu stron administratora Moodle. Można to naprawić poprzez zmianę nazwy katalogu administratora w instalacji i podanie tej nazwy tu, np.: <em>moodleadmin.</em> Linki administratora Moodle będą automatycznie poprawione.';
$string['pathssubdataroot'] = 'Potrzebny jest obszar, gdzie Moodle może zapisywać ładowane do niego pliki. Katalog ten powinien mieć prawo do odczyt i ZAPISU  przez użytkownika serwera WWW (zwykle &quot;nobody&quot; lub &quot;apache&quot;), ale może być być dostępny bezpośrednio przez sieć. Instalator spróbuje go utworzyć, jeśli nie istnieje.';
$string['pathssubdirroot'] = 'Pełna ścieżka do katalogu z instalacją Moodle.';
$string['pathssubwwwroot'] = 'Pełny adres internetowy, pod którym Moodle będzie dostępny. Moodle nie może być dostępny przy użyciu wielu adresów. Jeśli twoja witryna ma kilka adresów publicznych, należy skonfigurować trwałe przekierowania z wszystkich z nich na jeden. Jeśli Twoja witryna jest dostępna zarówno z intranetu i Internetu, korzystaj z publicznego adresu i ustaw DNS tak, aby użytkownicy Intranetu korzystali też z adresu publicznego. Jeśli adres nie jest poprawny, należy ponownie uruchomić instalację z innym adresem.';
$string['pathsunsecuredataroot'] = 'Lokalizacja głównego katalogu danych nie jest bezpieczna';
$string['pathswrongadmindir'] = 'Katalog admin nie istnieje';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem PGSQL, aby mógł komunikować się z PostgreSQL. Sprawdź plik php.ini lub przekompiluj PHP.';
$string['phpextension'] = 'rozszerzenie PHP {$a}';
$string['phpversion'] = 'Wersja PHP';
$string['phpversionhelp'] = '<p>Moodle wymaga wersji PHP co najmniej 5.6.5 lub 7.1 (7.0.x ma pewne ograniczenia silnika).</p>
<p>Aktualnie używasz wersji {$a}.</p>
<p>Musisz zaktualizować PHP lub przenieść na host z nowszą wersją PHP.</p>';
$string['releasenoteslink'] = 'Więcej informacji na temat tej wersji Moodle można znaleźć na {$a}';
$string['safemode'] = 'Tryb bezpieczny';
$string['safemodeerror'] = 'Moodle ma trudności z włączeniem bezpiecznego trybu';
$string['safemodehelp'] = '“<p> Moodle może mieć wiele zróżnicowanych problemów z trybem bezpiecznym z czego nie najmniejszym jest brak możliwości tworzenia nowych plików.

<p> Tryb bezpieczny jest zazwyczaj dostępny jedynie na publicznych host-ach web a więc musisz znaleźć nową firmę hostingową dla Twojej strony Moodle.</p>

<p> Można kontynuować instalacje, lecz należy spodziewać się pewnych problemów w przyszłości.</p>';
$string['sessionautostart'] = 'Automatyczny start sesji';
$string['sessionautostarterror'] = 'To powinno być wyłączone';
$string['sessionautostarthelp'] = '<p>Moodle wymaga obsługi sesjii nie będzie bez niego funkcjonować.</p>
<p>Sesja może być zainicjowana w pliku php.ini  poszukaj parametrów session.auto_start sesji </p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem SQLite. Sprawdź plik php.ini lub przekompiluj PHP.';
$string['upgradingqtypeplugin'] = 'Aktualizacja pytania/rodzaju wtyczki';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Widzisz tę stronę, ponieważ z powodzeniem zainstalowałeś i uruchomiłeś <strong>{$a->packname} {$a->packversion}</strong> na swoim komputerze.';
$string['welcomep30'] = 'Ten instalator <strong>{$a->installername}</strong> zawiera aplikacje, by stworzyć środowisko, w którym będzie działać <strong>Moodle</strong>, czyli';
$string['welcomep40'] = 'Pakiet zawiera <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Wszystkie aplikacje w tym pakiecie maja własne, oddzielne licencje. Kompletny pakiet <strong>{$a->installername}</strong> jest <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> i jest dystrybuowany na <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licencji.';
$string['welcomep60'] = 'Nastepujące strony przeprowadzą cię przez instalację <strong>Moodle</strong> na twoim komputerze. Możesz zaakceptować ustawienia domyślne, lub opcjonalnie, dostosować je do swoich potrzeb.';
$string['welcomep70'] = 'Kliknij przycisk "Dalej" żeby kontynuować instalację <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adres w sieci';
$string['wwwrooterror'] = 'Adres w sieci wydaje się być niepoprawny - wydaje się że nie ma tam instalacji Moodle';
