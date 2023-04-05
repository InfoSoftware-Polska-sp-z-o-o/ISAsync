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
 * Strings for component 'auth_ldap', language 'pl', version '4.0'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Nie można utworzyć nowego konta w usłudze Active Directory. Upewnij się, że spełniasz wszystkie wymagania (połączenie LDAPS, powiązanie z odpowiednimi prawami itp.)';
$string['auth_ldap_attrcreators'] = 'Lista grup lub kontekstów, których członkowie mogą tworzyć atrybuty. Rozdzielaj elementy znakiem \';\'. Przykład: "cn=teachers,ou=staff,o=myorg"';
$string['auth_ldap_attrcreators_key'] = 'Twórcy atrybutów';
$string['auth_ldap_auth_user_create_key'] = 'Twórz użytkowników zewnętrznie';
$string['auth_ldap_bind_dn'] = 'Określ tutaj czy chcesz skorzystać z funkcji bind-user do szukania użytkowników, np. \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Pełna hierarchiczna nazwa użytkownika w LDAP';
$string['auth_ldap_bind_pw'] = 'Hasło dla funkcji bind-user';
$string['auth_ldap_bind_pw_key'] = 'Hasło';
$string['auth_ldap_bind_settings'] = 'Ustawienia powiązań (bind)';
$string['auth_ldap_changepasswordurl_key'] = 'URL do zmiany hasła';
$string['auth_ldap_contexts'] = 'Lista kontekstów, w których znajdują się użytkownicy. Oddzielaj różne konteksty symbolem \';\', np. \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteksty';
$string['auth_ldap_create_context'] = 'Jeżeli włączysz opcję tworzenia użytkowników z potwierdzeniem pocztą elektroniczną, zdefiniuj kontekst, w którym tworzeni są tacy użytkownicy. Powinien być różnić się od kontekstu innych użytkowników w celu uniknięcia problemów związanych z bezpieczeństwem. Nie musisz dodawać tego kontekstu do zmiennej ldap_context-variable - Moodle automatycznie wyszuka użytkowników w tym kontekście.';
$string['auth_ldap_create_context_key'] = 'Kontekst nowych użytkowników';
$string['auth_ldap_create_error'] = 'Błąd podczas tworzenia użytkownika w LDAP.';
$string['auth_ldap_expiration_desc'] = 'Wybierz NIE do wyłączenia sprawdzania ważności hasła lub czytania przez LDAP (passwordExpiration time) czasu ważności hasła';
$string['auth_ldap_expiration_key'] = 'Ważność';
$string['auth_ldap_expiration_warning_desc'] = 'Liczba dni przed wygaśnięciem hasła kiedy jest wyświetlane ostrzeżenie.';
$string['auth_ldap_expiration_warning_key'] = 'Ostrzeżenie ważności';
$string['auth_ldap_expireattr_desc'] = 'Opcjonalnie: Unieważnia atrybut LDAP (passwordExpiration Time) który przechowuje czas ważności hasła,';
$string['auth_ldap_expireattr_key'] = 'Atrybut ważności';
$string['auth_ldap_graceattr_desc'] = 'Opcjonalnie: Unieważnij atrybut gracelogin (jak często uzytkownik może odmawiać zmiany wygasłego hasła)';
$string['auth_ldap_gracelogin_key'] = 'atrybut Grace login';
$string['auth_ldap_gracelogins_desc'] = 'Włącza wspierania gracelogin w LDAP. Po wygaśnięciu hasła użytkownik może się zalogować  dopóki licznik nie zejdzie do zera Włączając tę funkcję zostanie wyświetlony komunikat jeśli hasło wygaśnie.';
$string['auth_ldap_gracelogins_key'] = 'Grace logins';
$string['auth_ldap_groupecreators'] = 'Lista grup lub kontekstów, których członkowie mogą tworzyć grupy. Rozdzielaj elementy znakiem \';\'. Przykład: "cn=teachers,ou=staff,o=myorg"';
$string['auth_ldap_groupecreators_key'] = 'Twórcy grup';
$string['auth_ldap_host_url'] = 'Określ host LDAP za pomocą adresu URL, np. \'ldap://ldap.myorg.com/\' lub \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'Adres URL hosta';
$string['auth_ldap_ldap_encoding'] = 'Określ kodowanie znaków używane przez serwer LDAP. Najczęściej jest to utf-8, MS, AD używa domyślnego kodowania platform jak cp1252, cp1250 itd.';
$string['auth_ldap_ldap_encoding_key'] = 'Kodowanie LDAP';
$string['auth_ldap_login_settings'] = 'Opcje logowania';
$string['auth_ldap_memberattribute'] = 'Określ atrybut członkostwa użytkownika jeżeli użytkownik należy do grupy. Zazwyczaj jest to \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Opcjonalnie: Zastępuje obsługę wartości atrybutów, 0 albo 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atrybut członkostwa używa nazwy DN';
$string['auth_ldap_memberattribute_key'] = 'Atrybut członkostwa';
$string['auth_ldap_no_mbstring'] = 'Potrzebuję rozszerzenia mbstring aby tworzyć użytkowników w AD';
$string['auth_ldap_noconnect'] = 'Moduł LDAP nie może się połączyć z serwerem:  {$a}';
$string['auth_ldap_noconnect_all'] = 'Moduł LDAP nie może się połączyć z żadnym serwerem:  {$a}';
$string['auth_ldap_noextension'] = '<em>Moduł PHP LDAP wydaje się być nieobecny w systemie. Proszę upewnić się, że jest zainstalowany i włączony, jeśli chcesz korzystać z tej wtyczki uwierzytelniania.</em>';
$string['auth_ldap_objectclass'] = 'Filtr wykorzystany do nazywania/szukania użytkowników. Zwykle będzie to objectClass=posixAccount. Ustawienie objectClass=* zwróci wszystkie obiekty LDAP.';
$string['auth_ldap_objectclass_key'] = 'Szukanie przez objectClass';
$string['auth_ldap_opt_deref'] = 'Określa jak obsługiwane są aliasy podczas wyszukiwania.
Wybierz jedną z następujących wartości:
"Nie" (LDAP_DEREF_NEVER) lub
"Tak" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Aliasy dereferencji';
$string['auth_ldap_passtype'] = 'Określ format nowych lub zmienionych haseł w serwerze LDAP.';
$string['auth_ldap_passtype_key'] = 'Format hasła';
$string['auth_ldap_passwdexpire_settings'] = 'Ustawienia ważności hasła w LDAP';
$string['auth_ldap_preventpassindb'] = 'Wybierz tak aby uniknąć przechowywania haseł w bazie danych Moodla';
$string['auth_ldap_preventpassindb_key'] = 'Zapobiegaj buforowaniu haseł';
$string['auth_ldap_search_sub'] = 'Wpisz wartość <> 0 jeżeli chcesz szukać użytkowników z podkontekstów';
$string['auth_ldap_search_sub_key'] = 'Szukaj w podkontekstach';
$string['auth_ldap_server_settings'] = 'Ustawienia serwer LDAP';
$string['auth_ldap_suspended_attribute_key'] = 'Zawieszony atrybut';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() nie zna tego typu: {$a}';
$string['auth_ldap_update_userinfo'] = 'Uaktualnij informacje o użytkowniku (imię, nazwisko, adres...) z LDAP do Moodle. Informacje na temat mapowania: /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Atrybut używany do nazywania/szukania użytkowników, zwykle \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atrybut szukania użytkownika';
$string['auth_ldap_user_exists'] = 'Nazwa użytkownika LDAP już istnieje.';
$string['auth_ldap_user_settings'] = 'Ustawienia wyszukiwania użytkownika';
$string['auth_ldap_user_type'] = '***Wybierz sposób w jaki użytkownicy są przechowywani w LDAP. To ustawienie określa również jak będą działać:  ??? ***';
$string['auth_ldap_user_type_key'] = 'Typ użytkownika';
$string['auth_ldap_usertypeundefined'] = 'config.user_type nie zdefiniowany lub funkcja ldap_expirationtime2unix nie obsługuje tego typu!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type nie zdefiniowany lub funkcja ldap_unixi2expirationtime nie obsługuje tego typu!';
$string['auth_ldap_version'] = 'Wersja protokołu LDAP używana przez serwer.';
$string['auth_ldap_version_key'] = 'Wersja';
$string['auth_ldapdescription'] = 'Metoda ta zapewnia uwierzytelnienie względem zewnętrznego serwera LDAP.<br /> Jeżeli podana nazwa użytkownika i hasło są poprawne, Moodle dokonuje wpisu nowego użytkownika do swojej bazy danych. Moduł ten może odczytywać atrybuty użytkownika z LDAP i wstępnie wypełnić odpowiednie pola w Moodle. Przy kolejnych logowaniach sprawdzane są tylko nazwa użytkownika i hasło.';
$string['auth_ldapextrafields'] = 'Te pola są opcjonalne. Możesz wstępnie wypełnić niektóre pola dotyczące użytkowników Moodle informacjami z określonych tutaj <b>pól LDAP</b>. <br /> Jeżeli pola te pozostawisz puste, żadne informacje nie zostaną przeniesione z LDAP i wykorzystane zostaną wartości domyślne Moodle. <br /> W obu przypadkach, użytkownik będzie mógł dokonać edycji tych pól po zalogowaniu.';
$string['auth_ldapnotinstalled'] = 'Nie można korzystać z uwierzytelniania LDAP. Moduł PHP LDAP nie jest zainstalowany.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Ustaw na tak, aby próbować automatycznego logowania Single Sign On z domeny NTLM. <strong>Uwaga:</strong> To wymaga dodatkowej konfiguracji na serwerze, przeczytaj <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Włącz';
$string['auth_ntlmsso_ie_fastpath'] = 'Ustaw, aby włączyć szybką ścieżkę NTLM SSO (omija pewne kroki i działa tylko w przypadku klienta przeglądarki MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Szybka ścieżka MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Tak, wszystkie inne przeglądarki używają standardowego formularza logowania';
$string['auth_ntlmsso_missing_username'] = 'Musisz podać co najmniej %username% w formacie zdalnej nazwy użytkownika';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format nazwy zdalnego użytkownika';
$string['auth_ntlmsso_subnet'] = 'Jeśli ustawione, połączenie SSO będzie używane tylko z klientami w tej podsieci. Format: xxx.xxx.xxx.xxx/bitmask. Poszczególne podsieci rozdziel przecinkiem \',\'.';
$string['auth_ntlmsso_subnet_key'] = 'Podsieć';
$string['auth_ntlmsso_type'] = 'Metoda uwierzytelniania skonfigurowana na serwerze web (w razie wątpliwości wybrać NTLM)';
$string['auth_ntlmsso_type_key'] = 'Typ uwierzytelniania';
$string['connectingldap'] = 'Podłączanie do serwera LDAP ...';
$string['creatingtemptable'] = 'Tworzę tymczasową tabelę {$a}';
$string['didntfindexpiretime'] = 'password_expire() nie znalazła okresu ważności.';
$string['didntgetusersfromldap'] = 'Nie pobrano żadnych użytkowników z LDAP - błąd? - Kończę.';
$string['gotcountrecordsfromldap'] = 'Pobrano {$a} rekordów z bazy LDAP';
$string['ldapnotconfigured'] = 'Adres url hosta LDAP nie jest obecnie skonfigurowany';
$string['morethanoneuser'] = 'Uwaga! Znaleziono więcej niż jednego użytkowniku w LDAP. Użyty będzie tylko pierwszy.';
$string['needbcmath'] = 'Potrzebujesz rozszerzenie BCMath aby uzyć grace logins z active directory';
$string['needmbstring'] = 'Niezbędne jest rozszerzenie mbstring, aby zmieniać hasła w Active Directory';
$string['nodnforusername'] = 'Błąd w user_update_password(). Brak DN dla: {$a->username}';
$string['noemail'] = 'Nie udało się wysłać maila do ciebie.';
$string['notcalledfromserver'] = 'Nie może być wywołane z serwera web.';
$string['noupdatestobedone'] = 'Brak aktualizacji do wykonania';
$string['nouserentriestoremove'] = 'Brak wpisów użytkownika do usunięcia';
$string['nouserentriestorevive'] = 'Brak użytkowników do przywrócenia';
$string['nouserstobeadded'] = 'Brak wpisów użytkownika do dodania';
$string['ntlmsso_attempting'] = 'Próbuję logowania Single Sign On poprzez NTLM ...';
$string['ntlmsso_failed'] = 'Automatyczne logowanie nie powiodło się, proszę wykorzystać standardową stronę logowania ....';
$string['ntlmsso_isdisabled'] = 'NTLM SSO jest wyłączone.';
$string['ntlmsso_unknowntype'] = 'Nieznany typ NTML SSO!';
$string['pagesize_key'] = 'Rozmiar strony';
$string['pluginname'] = 'Użyj serwera LDAP';
$string['pluginnotenabled'] = 'Wtyczka nie jest włączona!';
$string['privacy:metadata'] = 'Wtyczka serwera autoryzacji LDAP nie przechowuje żadnych danych osobowych.';
$string['renamingnotallowed'] = 'W LDAP zmiana nazwy u zytkownika jest zabroniona';
$string['rootdseerror'] = 'Błąd podczas czytania rootDSE z Active Directory';
$string['start_tls_key'] = 'Użyj TLS';
$string['syncroles'] = 'Synchronizuj role systemowe z LDAP';
$string['synctask'] = 'Zadanie synchronizacji użytkowników LDAP';
$string['systemrolemapping'] = 'Mapowanie ról systemowych';
$string['updatepasserror'] = 'Błąd w user_update_password(). Kod błędu: {$a->errno}; Opis błędu: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Błąd w user_update_password() podczas czytania okresu ważności hasła. Kod błędu: {$a->errno}; Opis błędu: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Błąd w user_update_password() podczas modyfikacji wygaśnięcia lub/i logowań dodatkowych. Kod błędu: {$a->errno}; Łańcuch błędu: {$a->errstring}';
$string['updateremfail'] = 'Błąd aktualizacji rekordu LDAP. Kod błędu: {$a->errno}; opis błędu: {$a->errstring} <br/> Pole ({$a->key}) - stara wartość Moodle: \'{$a->ouvalue}\' nowa wartość: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Nie udało się zapisać w LDAP, niejednoznaczne pole {$a->key}; stara wartość moodle: &quot;{$a->ouvalue}&quot;; nowa wartość: "{$a->nuvalue} &quot;';
$string['updateusernotfound'] = 'Nie znaleziono użytkownika podczas zewnętrznej aktualizacji. Szczegóły poniżej: podstawa wyszukiwania: \'{$a->userdn}\'; filtr wyszukiwania: &quot;(objectClass = *)&quot;; atrybuty: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: funkcja ldap user_activate() nie obsługuje wybranego typu użytkownika: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: funkcja ldap user_disable() nie obsługuje wybranego typu użytkownika: {$a}';
$string['useracctctrlerror'] = 'Błąd podczas pobierania userAccountControl dla {$a}';
$string['userentriestoadd'] = 'Wpisy użytkownika do dodania: {$a}';
$string['userentriestoremove'] = 'Wpisy użytkownika do usunięcia: {$a}';
$string['userentriestorevive'] = 'Użytkownicy do przywrócenia: {$a}';
$string['userentriestoupdate'] = 'Wpisy użytkownika do zaktualizowania: {$a}';
$string['usernotfound'] = 'Nie znaleziono użytkowników w bazie LDAP';
