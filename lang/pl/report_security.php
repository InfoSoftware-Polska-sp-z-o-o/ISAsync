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
 * Strings for component 'report_security', language 'pl', version '4.0'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_info'] = 'Żadne skanery antywirusowe nie są obecnie włączone';
$string['check_antivirus_logstore_not_supported'] = 'Nie można zweryfikować stanu skanerów antywirusowych z powodu wybranego typu magazynu dzienników';
$string['check_antivirus_name'] = 'Antywirus';
$string['check_configrw_details'] = '<p> Zaleca się, aby uprawnienia plików config.php zostały zmienione po instalacji tak, aby plik nie mógł być zmieniany przez serwer WWW. Zwróć uwagę, że ten sposób nie poprawia znacząco bezpieczeństwa serwera, może jedynie spowolnić lub ograniczyć ogólne exploity. </p>';
$string['check_configrw_name'] = 'Zapisywalny config.php';
$string['check_configrw_ok'] = 'config.php nie może być modyfikowany przez skrypty PHP.';
$string['check_configrw_warning'] = 'Skrypt PHP może modyfikować plik config.php.';
$string['check_cookiesecure_details'] = '<p>Jeśli włączasz szyfrowanie https, zaleca się także włączyć bezpieczne cookies. Należy również dodać stałe przekierowanie z http na https. Zalecane jest także włączenie nagłówków HSTS</p>';
$string['check_cookiesecure_error'] = 'Proszę włączyć bezpieczne cookie';
$string['check_cookiesecure_http'] = 'Aby korzystać z bezpiecznych plików cookie, musisz włączyć https';
$string['check_cookiesecure_name'] = 'Bezpieczne cookies';
$string['check_cookiesecure_ok'] = 'Bezpieczne cookies włączone.';
$string['check_crawlers_details'] = '<p>Ustawienie "Otwórz dla Google" umożliwia silnikowi wyszukiwania Google wejść na kurs z wykorzystaniem konta gość. Nie ma sensu włączać tego ustawienia, jeżeli logowanie dla gości jest zabronione</p>';
$string['check_crawlers_error'] = 'Dostęp wyszukiwarki jest dozwolony, ale dostęp dla gości jest wyłączony.';
$string['check_crawlers_info'] = 'Wyszukiwarki mogą logować się jako gość.';
$string['check_crawlers_name'] = 'Otwarty dla Google';
$string['check_crawlers_ok'] = 'Dostęp do modułu wyszukiwania nie jest aktywny.';
$string['check_defaultuserrole_details'] = '<p> Wszyscy zalogowani użytkownicy otrzymują uprawnienia domyślnej roli użytkownika. Upewnij się, że nie ma w tej roli ryzykownych uprawnień. </p><p> Jedyną obsługiwane przestarzałą rolą domyślną jest <em>Uwierzytelniony użytkownik.</em> Uprawnienie do wglądu do kursu nie musi być włączona. </p>';
$string['check_defaultuserrole_error'] = 'Domyślna rola użytkownika "{$a}" jest niepoprawnie zdefiniowana!';
$string['check_defaultuserrole_name'] = 'Domyślna rola dla wszystkich użytkowników';
$string['check_defaultuserrole_notset'] = 'Domyślna rola nie jest ustawiona.';
$string['check_defaultuserrole_ok'] = 'Domyślna rola dla wszystkich użytkowników jest zdefiniowana poprawnie.';
$string['check_dirindex_info'] = 'Indeks katalogu nie powinien być włączony';
$string['check_displayerrors_details'] = '<p>Włączanie ustawienia PHP: <code>display_errors</ code> nie jest zalecane na stronach komercyjnych, ponieważ komunikaty o błędach mogą ujawnić poufne informacje o twoim serwerze.</p>';
$string['check_displayerrors_error'] = 'Ustawienie PHP wyświetlające błędy jest włączone. Zaleca się, aby było ono wyłączone.';
$string['check_displayerrors_name'] = 'Wyświetlanie błędów PHP';
$string['check_displayerrors_ok'] = 'Wyświetlanie błędów PHP wyłączone.';
$string['check_emailchangeconfirmation_details'] = '<p> Zaleca się, aby potwierdzenie e-maila było wymagane, gdy użytkownik zmienia swój adres e-mail w swoim profilu. Jeśli nie, spamerzy mogą próbować wykorzystać serwera do wysyłania spamu. </p><p> Pole e-mail może być również zablokowane przez wtyczki uwierzytelniania, ta możliwość nie jest tu rozważana. </p>';
$string['check_emailchangeconfirmation_error'] = 'Użytkownicy mogą wprowadzić dowolny adres e-mail.';
$string['check_emailchangeconfirmation_info'] = 'Użytkownicy mogą wprowadzić adresy e-mail tylko z dozwolonych domen.';
$string['check_emailchangeconfirmation_name'] = 'Potwierdzenie zmiany adresu e-mail';
$string['check_emailchangeconfirmation_ok'] = 'Potwierdzenie zmiany adresu e-mail w profilu użytkownika.';
$string['check_embed_details'] = '<p>Nieograniczone umieszczanie/zagnieżdżanie obiektów jest bardzo niebezpieczne -  każdy zarejestrowany użytkownik może przypuścić atak typu XSS w stosunku do innych użytkowników serwera. Ta opcja powinna być wyłączona na serwerach/stronach komercyjnych.</p>';
$string['check_embed_error'] = 'Nieograniczone osadzanie obiektów jest dozwolone- to jest bardzo niebezpieczne dla większości serwerów.';
$string['check_embed_name'] = 'Zezwól na znaczniki EMBED i OBJECT';
$string['check_embed_ok'] = 'Nieograniczone osadzanie obiektów nie jest dozwolone.';
$string['check_frontpagerole_details'] = '<p>Wszyscy zalogowani użytkownicy otrzymują uprawnienia domyślnej roli strony głównej, gdy pracują na elementach strony głównej. Upewnij się, że nie ma w tej roli ryzykownych uprawnień. </p><p> Zaleca się utworzenie w tym celu specjalnej roli, a nie używanie roli przestarzałej. </p>';
$string['check_frontpagerole_error'] = 'Wykryto niepoprawnie zdefiniowaną rolę strony głównej:  "{$a}"';
$string['check_frontpagerole_name'] = 'Rola strony głównej';
$string['check_frontpagerole_notset'] = 'Rola strony głównej nie jest jeszcze zdefiniowana';
$string['check_frontpagerole_ok'] = 'Rola strony głównej jest zdefiniowana poprawnie.';
$string['check_guestrole_details'] = '<p>  Rola gości używana jest przez gości, niezalogowanych użytkowników i podczas tymczasowego dostępu do kursu jako gość. Upewnij się, że nie ma w tej roli ryzykownych uprawnień</p><p> Jedyną obsługiwaną przestarzałą rolą gościa jest <em>Gość</em>.';
$string['check_guestrole_error'] = 'Rola gościa "{$a}" jest niepoprawnie zdefiniowana!';
$string['check_guestrole_name'] = 'Rola gościa';
$string['check_guestrole_notset'] = 'Rola gościa nie jest ustawiona.';
$string['check_guestrole_ok'] = 'Rola gościa jest zdefiniowana poprawnie.';
$string['check_mediafilterswf_details'] = '<p>Automatyczne umieszczanie/zagnieżdżanie plików swf jest bardzo niebezpieczne -  każdy zarejestrowany użytkownik może przypuścić atak typu XSS w stosunku do innych użytkowników serwera. Ta opcja powinna być wyłączona na serwerach/stronach komercyjnych.</p>';
$string['check_mediafilterswf_error'] = 'Filtr flash media  jest aktywny - to jest bardzo niebezpieczne dla większości serwerów.';
$string['check_mediafilterswf_name'] = 'Włącz filtr .swf';
$string['check_mediafilterswf_ok'] = 'Filtr flash media nie jest aktywny.';
$string['check_openprofiles_details'] = 'Otwarte profile użytkowników mogą być wykorzystywane przez spamerów. Zaleca się włączenie dwóch opcji <code>Zmuś użytkowników do logowania na profile</code> oraz <code>Zmuś użytkowników do  zalogowania się</code>.</p>';
$string['check_openprofiles_error'] = 'Każdy może przeglądać profile użytkowników bez logowania się.';
$string['check_openprofiles_name'] = 'Otwarte profile użytkowników';
$string['check_openprofiles_ok'] = 'Przed wyświetleniem profili użytkowników wymagane jest logowanie.';
$string['check_passwordpolicy_details'] = 'Jest zalecane, aby polityka haseł była ustawiona, ponieważ odgadnięcie hasła użytkownika jest najprostszym sposobem na uzyskanie nieautoryzowanego dostępu.
Nie należy nakładać zbyt rygorystycznych wymogów, ponieważ może to spowodować, iż użytkownicy nie będą w stanie zapamiętać swoich haseł i będą je zapisywać.';
$string['check_passwordpolicy_error'] = 'Zasady hasła nie są ustawione.';
$string['check_passwordpolicy_name'] = 'Zasady hasła';
$string['check_passwordpolicy_ok'] = 'Zasady hasła włączone.';
$string['check_preventexecpath_name'] = 'Ścieżki wykonywalne';
$string['check_preventexecpath_ok'] = 'Ścieżki wykonywalne ustawialne tylko w pliku config.php.';
$string['check_preventexecpath_warning'] = 'Ścieżki wykonywalne można ustawić w GUI administratora.';
$string['check_publicpaths_403'] = '(Zwrócono 403, najlepiej powinno być 404)';
$string['check_publicpaths_generic'] = '{$a} pliki nie powinny być publiczne';
$string['check_publicpaths_name'] = 'Sprawdź wszystkie publiczne/prywatne ścieżki';
$string['check_riskadmin_detailsok'] = '<p>Proszę zweryfikować poniższą listę administratorów:</p>{$a}';
$string['check_riskadmin_name'] = 'Administratorzy';
$string['check_riskadmin_ok'] = 'Znaleziono {$a} administratorów serwera.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) przejrzyj przypisania ról</a>';
$string['check_riskadmin_warning'] = 'Znaleziono {$a->admincount} administratorów serwera i {$a->unsupcount} nieobsługiwane przypisania ról administratora.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Te aktywne nadpisania dają użytkownikom możliwość załączenia danych użytkowników do kopii zapasowych. Upewnij się, że to uprawnienie jest konieczne. </p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p> Następujące role systemowe pozwalają obecnie użytkownikom uwzględniać dane użytkowników w kopiach zapasowych. Upewnij się, czy to uprawnienie jest konieczne. </p> {$a}';
$string['check_riskbackup_details_users'] = '<p> W związku z definicją ról lub lokalnymi ustawieniami, następujące konta użytkowników mają obecnie uprawnienia do sporządzania kopii zapasowych zawierających prywatne dane wszystkich użytkowników zapisanych w kursie. Upewnij się, że są one (a) zaufane i (b) chronione silnymi hasłami: </p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} w {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Backup danych użytkownika';
$string['check_riskbackup_ok'] = 'Żadna rola nie zezwala na tworzenie kopii zapasowych danych użytkownika';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) w {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Znaleziono {$a->rolecount} ról, {$a->overridecount} nadpisań ról i {$a->usercount} użytkowników  z możliwością tworzenia kopii zapasowych danych użytkowników.';
$string['check_riskxss_details'] = '<p> RYZYKO cross scriptingu XSS dotyczy wszystkich niebezpiecznych uprawnień, które powinni mieć tylko zaufani użytkownicy </p><p> Proszę sprawdzić poniższy listę użytkowników i upewnić się, że masz do nich zaufanie całkowicie na tym serwerze: </p><p> {$a} </p>';
$string['check_riskxss_name'] = 'Zaufani użytkownicy pod względem ryzyka XSS';
$string['check_riskxss_warning'] = 'RYZYKO cross scriptingu XSS -  znaleziono {$a} użytkowników, którzy muszą być zaufani.';
$string['check_unsecuredataroot_details'] = '<p>Katalog główny (dataroot) nie może być dostępny z poziomu strony web. Najlepszym sposobem, aby upewnić się, że ten folder nie jest dostępny, jest użyć katalogu z poza publicznym miejscem na strony, tj. (inny niż: www czy httdoc)</p>
<p>Jeżeli przeniesiesz Katalog główny (dataroot), musisz zaktualizować ustawienie <code>$CFG->dataroot</code> w pliku config.php</p>';
$string['check_unsecuredataroot_error'] = 'Twój katalog główny (dataroot) <code>{$a}</code> jest w złej lokalizacji i jest dostępny z internetu!';
$string['check_unsecuredataroot_name'] = 'Niezabezpieczony główny folder danych';
$string['check_unsecuredataroot_ok'] = 'Katalog główny (dataroot) nie może być dostępny z internetu.';
$string['check_unsecuredataroot_warning'] = 'Twój katalog główny (dataroot) <code>{$a}</code> jest w złej lokalizacji i może być dostępny z internetu.';
$string['check_webcron_name'] = 'Web cron (menadżer zadań)';
$string['check_webcron_ok'] = 'Anonimowi użytkownicy nie mogą wywolać cron.';
$string['check_webcron_warning'] = 'Anonimowi użytkownicy mogą wywołać cron.';
$string['configuration'] = 'Konfiguracja';
$string['description'] = 'Opis';
$string['details'] = 'Szczegóły';
$string['issue'] = 'Pozycja';
$string['pluginname'] = 'Przegląd zabezpieczeń';
$string['privacy:metadata'] = 'Wtyczka Przegląd zabezpieczeń nie przechowuje żadnych danych osobowych.';
$string['security:view'] = 'Pokaż raport bezpieczeństwa';
$string['timewarning'] = 'Przetwarzanie danych może zająć dużo czasu, bądź cierpliwy...';
