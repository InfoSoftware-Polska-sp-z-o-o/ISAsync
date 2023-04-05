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
 * Strings for component 'enrol_ldap', language 'pl', version '4.0'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Przydziel rolę \'{$a->role_shortname}\' użytkownikowi \'{$a->user_username}\' w kursie \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nie udało się przypisać roli \'{$a->role_shortname}\' użytkownikowi \'{$a->user_username}\' w kursie \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = 'Kursy mogą być tworzone automatycznie jeżeli pojawia się zgłoszenie na kurs, który dotychczas nie istnieje w Moodle.
Jeśli używasz automatycznego tworzenia kursu, zaleca się, aby usunąć następujące uprawnienia: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname i moodle/course:changesummary
aby zapobiec modyfikacjom tych 4 pól.';
$string['autocreate_key'] = 'Twórz automatycznie';
$string['autocreation_settings'] = 'Ustawienia automatycznego tworzenia kursów';
$string['autoupdate_settings'] = 'Ustawienia automatycznej aktualizacji kursu';
$string['bind_dn'] = 'Jeżeli chcesz używać bind-user do poszukiwania użytkowników, określ ich tutaj. Podobnie do \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Pełna hierarchiczna nazwa bind-usera';
$string['bind_pw'] = 'Hasło dla bind-usera';
$string['bind_pw_key'] = 'Hasło';
$string['bind_settings'] = 'Ustawienia powiązań użytkownika';
$string['cannotcreatecourse'] = 'Nie można utworzyć kursu: brak wymaganych danych w LDAP!';
$string['cannotupdatecourse_duplicateshortname'] = 'Nie można zaktualizować kursu: Powielona krótka nazwa. Pomijam kurs o numerze \'{$a->idnumber}\'...';
$string['category'] = 'Kategoria dla automatycznie tworzonych kursów';
$string['category_key'] = 'Kategoria';
$string['contexts'] = 'Kontekst LDAP';
$string['couldnotfinduser'] = 'Nie udało się odnaleźć użytkownika \'{$a}\', pomijam';
$string['course_fullname'] = 'Opcjonalne: Pole skąd LDAP ma pobierać pełną nazwę.';
$string['course_fullname_key'] = 'Pełna nazwa';
$string['course_fullname_updateonsync'] = 'Zaktualizuj pełną nazwę podczas wykonania skryptu synchronizacji';
$string['course_fullname_updateonsync_key'] = 'Aktualizuj pełną nazwę';
$string['course_idnumber'] = 'Mapuj (odwzoruj) unikalny identyfikator w LDAP, przeważnie <em>cn</em> lub <em>uid</em>. Blokuj tę wartość jeżeli używasz automatycznego tworzenia kursów.';
$string['course_idnumber_key'] = 'Numer ID';
$string['course_search_sub'] = 'Przeszukuj przynależność do grup w podkontekstach';
$string['course_search_sub_key'] = 'Przeszukuj podkonteksty';
$string['course_settings'] = 'Ustawienie zapisywania na kurs';
$string['course_shortname'] = 'Opcjonalne:Pole skąd LDAP ma pobierać nazwę skróconą';
$string['course_shortname_key'] = 'Nazwa skrócona';
$string['course_shortname_updateonsync'] = 'Zaktualizuj krótką nazwę podczas wykonania skryptu synchronizacji';
$string['course_shortname_updateonsync_key'] = 'Aktualizuj krótką nazwę';
$string['course_summary'] = 'Opcjonalne:Pole skąd LDAP ma pobierać opis';
$string['course_summary_key'] = 'Opis';
$string['course_summary_updateonsync'] = 'Podsumowanie aktualizacji podczas synchronizacji skryptu';
$string['course_summary_updateonsync_key'] = 'Aktualizacja podsumowania';
$string['coursenotexistskip'] = 'Kurs \'{$a}\' nie istnieje a automatyczne tworzenie jest wyłączone, pomijam działanie.';
$string['courseupdated'] = 'Kurs o identyfikatorze "{$a->idnumber}" został zaktualizowany.';
$string['courseupdateskipped'] = 'Kurs o identyfikatorze "{$a->idnumber}" nie wymaga aktualizacji. Pomijam ....';
$string['createcourseextid'] = 'UTWORZYĆ użytkownika zapisanego do nieistniejącego kursu &quot;{$a->courseextid}&quot;';
$string['createnotcourseextid'] = 'Użytkownik zapisany do nieistniejącego kursu &quot;{$a->courseextid}&quot;';
$string['creatingcourse'] = 'Tworzenie kursu &quot;{$a}&quot; ...';
$string['duplicateshortname'] = 'Nie można utworzyć kursu: Powielona krótka nazwa. Pomijam kurs o numerze \'{$a->idnumber}\'...';
$string['editlock'] = 'Blokuj wartość';
$string['emptyenrolment'] = 'Wyczyść* zapis do roli &quot;{$a->role_shortname}&quot; w kursie &quot;{$a->course_shortname}&quot;';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Zapisz użytkownika \'{$a->user_username}\' do kursu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Włącz metodę zapisu dla użytkownika \'{$a->user_username}\' w kursie \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group () nie obsługuje wybranego typu użytkownika: {$a}';
$string['extcourseidinvalid'] = 'Zewnętrzny id kursu jest nieprawidłowy!';
$string['extremovedsuspend'] = 'Wyłącz metodę zapisu dla użytkownika \'{$a->user_username}\' w kursie \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Wyłącz metodę zapisu i usuń role użytkownika \'{$a->user_username}\' w kursie \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Wypisz użytkownika \'{$a->user_username}\' z kursu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Nie powiodło się!';
$string['general_options'] = 'Opcje ogólne';
$string['group_memberofattribute'] = 'Nazwa atrybutu, która określa, do których grup dany użytkownik lub grupa należy (np. memberOf, groupMembership, itp.)';
$string['group_memberofattribute_key'] = 'Atrybut grupy';
$string['host_url'] = 'Określ URL hosta LDAP w postaci: \'ldap://ldap.myorg.com/\' lub \'ldaps://ldap.myorg.com/';
$string['host_url_key'] = 'URL hosta';
$string['idnumber_attribute'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, podaj atrybut, który odpowiadał \'ID number\' użytkownika w ustawieniach uwierzytelniania LDAP';
$string['idnumber_attribute_key'] = 'Atrybut \'ID number';
$string['ldap:manage'] = 'Zarządzaj wtyczkami zapisu przez LDAP';
$string['ldap_encoding'] = 'Określ kodowanie znaków używane przez serwer LDAP. Najprawdopodobniej jest to utf-8; MS AD v2 wykorzystuje kodowanie domyślne platformy np. CP1252, CP1250 itp.';
$string['ldap_encoding_key'] = 'kodowanie LDAP';
$string['memberattribute'] = 'Atrybut członka LDAP';
$string['memberattribute_isdn'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, musisz to tu zaznaczyć oraz skonfigurować pozostałe ustawienia w tej sekcji';
$string['memberattribute_isdn_key'] = 'Atrybut członka używa DN';
$string['nested_groups'] = 'Czy chcesz używać grup zagnieżdżonych (grup w grupach) przy zapisach?';
$string['nested_groups_key'] = 'Zagnieżdżone grupy';
$string['nested_groups_settings'] = 'Ustawienia zagnieżdżonych grup';
$string['nosuchrole'] = 'Nie ma takiej roli: &quot;{$a}&quot;';
$string['objectclass'] = 'Parametru klasa obiektu (objectClass) używamy do szukania kursów. Przeważnie to \'group\' lub \'posixGroup';
$string['objectclass_key'] = 'Klasa obiektu (objectclass)';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, określ w jaki sposób traktowane są aliasy podczas wyszukiwania. Wybierz jedną z następujących wartości: &quot;No&quot; (LDAP_DEREF_NEVER) lub &quot;Yes&quot; (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Idź za aliasami';
$string['phpldap_noextension'] = '<em>Wydaje się, że moduł PHP LDAP nie jest zainstalowany. Prosimy upewnić się, że jest zainstalowany i włączony, jeżeli chcesz korzystać z tej wtyczki.</em>';
$string['pluginname'] = 'Zapisy LDAP';
$string['pluginname_desc'] = '<p>Możesz użyć serwera LDAP do kontroli zapisów.
Zakłada się że twoje drzewo LDAP zawiera grupy odwzorowujące kursy że każda z tych grup/kursów będzie miała wpisy członkowskie odwzorowujące studentów. </p>
Zakłada się, że kursy są zdefiniowane jako grupy w LDAPie, a każda z tych grup ma wiele pól czlonkowkich (<em>member</em> lub <em>memberUid</em>)  które zawierają unikatowy identyfikator użytkownika.
Aby wykorzystywać zapisy przez LDAP twoi użytkownicy <strong> muszą </strong> mieć ważne (aktualne, poprawne) pole idnumber. Grupy LDAP muszą mieć ten idnumber w polach członków aby użytkownik został zapisany na kurs.
To będzie działać poprawnie jeśli już korzystasz z autoryzacji LDAP.</p>
Zapisywanie będzie uaktualniane kiedy użytkownik zaloguje się. Można również uruchomić skrypt do synchronizacji zapisów. Zobacz w em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p> Ta wtyczka może również tworzyć automatycznie nowe kursy, kiedy pojawiają się nowe grupy w LDAP. </p>';
$string['pluginnotenabled'] = 'Wtyczka nie jest włączona!';
$string['privacy:metadata'] = 'Wtyczka rejestracji LDAP nie przechowuje żadnych danych osobowych.';
$string['role_mapping'] = '<p> Dla każdej roli, którą chcesz przypisać z LDAP, należy określić listę kontekstów, gdzie znajdują się grupy. Oddziel konteksty średnikiem \';\'. </p><p> Należy również określić atrybut, w którym serwer LDAP przechowuje przynależność do grup. Zazwyczaj jest to  &quot;member&quot; lub &quot;memberUid&quot; </p>';
$string['role_mapping_attribute'] = 'Atrybut przynależności do grupy w LDAP dla {$a}';
$string['role_mapping_context'] = 'Konteksty LDAP dla {$a}';
$string['role_mapping_key'] = 'Mapuj (przenoś) role z LDAP';
$string['roles'] = 'Mapowanie ról';
$string['server_settings'] = 'Ustawienia sewera LDAP';
$string['synccourserole'] = '== Synchronizacja kursu \'{$a->idnumber}\' dla roli \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'Zadanie synchronizacji rejestracji LDAP';
$string['template'] = 'Opcjonalnie: Automatycznie tworzone kursy mogą kopiować ustawienia z wzorcowego kursu-szablonu.';
$string['template_key'] = 'Szablon';
$string['updatelocal'] = 'Uaktualnij dane lokalne';
$string['user_attribute'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, określ atrybut używany do określania/wyszukiwania użytkowników. Jeśli używasz uwierzytelniania LDAP, wartość ta powinna być taka jak atrybut &quot;ID number&quot; w ustawieniach uwierzytelniania LDAP';
$string['user_attribute_key'] = 'Atrybut identyfikatora';
$string['user_contexts'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, określ listę kontekstów, w których znajdują się użytkownicy.
Oddziel konteksty średnikiem \';\'. Na przykład: \'ou=users,o=org; ou=others,o=org';
$string['user_contexts_key'] = 'Konteksty';
$string['user_search_sub'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN,
określ, czy szukać użytkowników równiez w podkontekstach';
$string['user_search_sub_key'] = 'Przeszukuj podkonteksty';
$string['user_type'] = 'Jeśli przynależność do grupy zawiera pełne nazwy DN, określ, w jaki sposób użytkownicy są przechowywani w LDAP';
$string['user_type_key'] = 'Typ użytkownika';
$string['version'] = 'Wersja protokołu LDAP zainstalowana na Twoim serwerze.';
$string['version_key'] = 'Wersja';
