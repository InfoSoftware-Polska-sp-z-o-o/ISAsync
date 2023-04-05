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
 * Strings for component 'auth_db', language 'pl', version '4.0'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Nie można połączyć się z zewnętrzną bazą danych.';
$string['auth_dbcannotreadtable'] = 'Nie można odczytać zewnętrznej tabeli.';
$string['auth_dbcantconnect'] = 'Nie można połączyć się z podaną bazą danych';
$string['auth_dbchangepasswordurl_key'] = 'URL strony do zmiany hasła użytkownika.';
$string['auth_dbcolumnlist'] = 'Tabela zewnętrzna zawiera następujące kolumny:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Debuguj połączenie ADOdb do zewnętrznej bazy danych - użyj, gdy widzisz pustą stronę podczas logowania. Nie nadaje się do witryn produkcyjnych.';
$string['auth_dbdeleteuser'] = 'Usunięty użytkownik: {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Wystąpił błąd podczas usuwania użytkownika {$a}';
$string['auth_dbdescription'] = 'Metoda ta wykorzystuje tabelę zewnętrznej bazy danych dla sprawdzenia czy podana nazwa użytkownika i hasło są poprawne. W przypadku nowego konta, informacje z innych pól również mogą zostać skopiowane do Moodle.';
$string['auth_dbextencoding'] = 'Kodowanie zewnętrznej bazy danych';
$string['auth_dbextencodinghelp'] = 'Kodowanie znaków użyte w zewnętrznej bazie danych';
$string['auth_dbextrafields'] = 'Te pola są opcjonalne. Możesz wstępnie wypełnić niektóre pola dotyczące użytkownika informacją z <b>pól zewnętrznej bazy danych</b>, które tutaj określasz. <br />Jeżeli nic w tym miejscu nie wpiszesz, użyte zostaną wartości domyślne. <br /> W obu przypadkach, użytkownik będzie mógł dokonać edycji tych pól po zalogowaniu';
$string['auth_dbfieldpass'] = 'Nazwa pola zawierającego hasła';
$string['auth_dbfieldpass_key'] = 'Pole hasła';
$string['auth_dbfielduser'] = 'Nazwa pola zawierającego nazwy użytkowników. To pole musi mieć typ danych varchar.';
$string['auth_dbfielduser_key'] = 'Pole nazwy użytkownika';
$string['auth_dbhost'] = 'Komputer, na którym znajduje się serwer bazy danych. Użyj systemowego wpisu DSN, jeśli używasz ODBC. Użyj wpisu PDO DSN, jeśli używasz PDO.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Dodany użytkownik: {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Błąd podczas wstawiania użytkownika {$a->username} - użytkownik o tej nazwie został już utworzony za pomocą wtyczki \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Błąd podczas wstawiania użytkownika {$a}';
$string['auth_dbname'] = 'Nazwa samej bazy danych. Pozostaw puste, jeśli używasz ODBC DSN. Pozostaw puste, jeśli twoje PDO DSN zawiera już nazwę bazy danych.';
$string['auth_dbname_key'] = 'Nazwa bazy danych';
$string['auth_dbnoexttable'] = 'Nie określono tabeli zewnętrznej.';
$string['auth_dbnouserfield'] = 'Nie określono pola zewnętrznego użytkownika.';
$string['auth_dbpass'] = 'Hasło dla powyższej nazwy użytkownika';
$string['auth_dbpass_key'] = 'Hasło';
$string['auth_dbpasstype'] = 'Określ format stosowany przez pole hasła. Sktór MD5 jest przydatny przy łączeniu się z innymi popularnymi aplikacjami sieci WWW, takimi jak PostNuke
Użyj \'wewnętrzny\' jeśli chcesz aby zewnętrzna baza danych zarządzała nazwami użytkowników &amp; adresami e-mail, ale Moodle zarządzał hasłami. Jeśli uzyjesz \'wewnętrzny\', <i>musisz</I> wskazać pole adresu e-mail w zewnetrznej bazie danych oraz musisz regularnie uruchamiać admin/cron.php i auth/db/cli/sync_users.php. Moodle będzie wysyłał e-mail do nowych użytkowników z tymczasowym hasłem.';
$string['auth_dbpasstype_key'] = 'Format hasła';
$string['auth_dbreviveduser'] = 'Użytkownik reaktywowany {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Błąd podczas reaktywowania użytkownika {$a}';
$string['auth_dbsetupsql'] = 'Komenda ustawień SQL';
$string['auth_dbsetupsqlhelp'] = 'Komenda SQL do specjalnej konfiguracji bazy danych, często używana do ustawienia kodowania - przykład dla MySQL i PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Zawieszony użytkownik {$a->name} / {$a->id}';
$string['auth_dbsuspendusererror'] = 'Błąd podczas zawieszania użytkownika {$a}';
$string['auth_dbsybasequoting'] = 'Użyj apostrofu zgodnie z Sybase';
$string['auth_dbsybasequotinghelp'] = 'W Sybase pojedynczy apostrof jest znakiem ucieczki (escape) - potrzebne dla Oracle, MS SQL i niektórych innych baz danych. Nie stosować dla MySQL!';
$string['auth_dbsyncuserstask'] = 'Zadanie synchronizacji użytkowników';
$string['auth_dbtable'] = 'Nazwa tabeli w bazie danych';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtableempty'] = 'Zewnętrzna tabela jest pusta.';
$string['auth_dbtype'] = 'Typ bazy danych (szczegółowe informacje można znaleźć w dokumentacji <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb — Warstwa abstrakcji bazy danych dla PHP</a>).';
$string['auth_dbtype_key'] = 'Baza danych';
$string['auth_dbupdateerror'] = 'Błąd podczas aktualizowania zewnętrznej bazy danych.';
$string['auth_dbupdateusers'] = 'Aktualizuj użytkowników';
$string['auth_dbupdateusers_description'] = 'Oprócz dodawania nowych użytkowników zaktualizuj istniejących użytkowników.';
$string['auth_dbupdatinguser'] = 'Zaktualizowany użytkownik: {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nazwa użytkownika mającego prawo dostępu do odczytu z bazy';
$string['auth_dbuser_key'] = 'Użytkownik bazy danych';
$string['auth_dbuserstoadd'] = 'Wpisy użytkownika do dodania: {$a}';
$string['auth_dbuserstoremove'] = 'Wpisy użytkownika do usunięcia: {$a}';
$string['pluginname'] = 'Zewnętrzna baza danych';
$string['privacy:metadata'] = 'Wtyczka zewnętrznej bazy autoryzacji nie przechowuje żadnych danych osobowych.';
