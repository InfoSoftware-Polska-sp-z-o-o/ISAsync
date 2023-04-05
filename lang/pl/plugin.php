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
 * Strings for component 'plugin', language 'pl', version '4.0'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Akcje';
$string['availability'] = 'Dostępność';
$string['cancelinstallall'] = 'Anuluj nowe instalacje ({$a})';
$string['cancelinstallhead'] = 'Anulowanie instalacji wtyczki';
$string['cancelinstallinfodir'] = 'Folder do usunięcia: {$a}';
$string['cancelinstallone'] = 'Anuluj tę instalację';
$string['cancelupgradeall'] = 'Anuluj aktualizacje ({$a})';
$string['cancelupgradehead'] = 'Przywracanie poprzedniej wersji wtyczek';
$string['cancelupgradeone'] = 'Anuluj tę aktualizację';
$string['checkforupdates'] = 'Sprawdź, czy dostępne są aktualizacje';
$string['checkforupdateslast'] = 'Ostatnie sprawdzenie wykonano: {$a}';
$string['dependencyavailable'] = 'Dostępne';
$string['dependencyfails'] = 'Niepowodzenia';
$string['dependencyinstall'] = 'Zainstaluj';
$string['dependencyinstallhead'] = 'Instalowanie brakujących zależności';
$string['dependencyinstallmissing'] = 'Zainstaluj brakujące zależności ({$a})';
$string['dependencymissing'] = 'Brakujące';
$string['dependencyunavailable'] = 'Niedostępne';
$string['dependencyupload'] = 'Prześlij';
$string['dependencyuploadmissing'] = 'Załaduj pliki ZIP';
$string['detectedmisplacedplugin'] = 'Wtyczka "{$a->component}" jest zainstalowana w niepoprawnym miejscu "{$a->current}", oczekiwane położenie to "{$a->expected}"';
$string['displayname'] = 'Nazwa wtyczki';
$string['err_response_curl'] = 'Nie można pobrać dostępnych aktualizacji danych - nieoczekiwany błąd cURL.';
$string['err_response_format_version'] = 'Nieoczekiwana wersja formatu odpowiedzi. Spróbuj ponownie sprawdzić dostępne aktualizacje.';
$string['err_response_http_code'] = 'Nie można pobrać dostępnych aktualizacji danych - nieoczekiwany kod odpowiedzi HTTP.';
$string['filterall'] = 'Pokaż wszystko';
$string['filtercontribonly'] = 'Pokaż tylko wtyczki dodatkowe';
$string['filterupdatesonly'] = 'Pokaż tylko do aktualizacji';
$string['incompatibleversion'] = 'Niezgodna wersja Moodle: {$a}';
$string['isenabled'] = 'Włączone?';
$string['misdepinfoplugin'] = 'Informacja o wtyczce';
$string['misdepinfoversion'] = 'Informacja o wersji';
$string['misdepsavail'] = 'Dostępne brakujące zależności';
$string['misdepsunavail'] = 'Niedostępne brakujące zależności';
$string['misdepsunavaillist'] = 'Nie znaleziono wersji spełniającej wymagania dotyczące zależności: {$a}.';
$string['misdepsunknownlist'] = 'Nie znajduje się katalogu wtyczek: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Brak zainstalowanych wtyczek tego typu';
$string['notdownloadable'] = 'Nie można pobrać pakietu';
$string['notdownloadable_help'] = 'Nie można automatycznie pobrać pakietu ZIP z aktualizacją.';
$string['notes'] = 'Notatki';
$string['notsupported'] = 'Wtyczka może nie być kompatybilna z wersją {$a} Moodle';
$string['notwritable'] = 'Pliki wtyczki nie są zapisywalne';
$string['notwritable_help'] = 'Masz włączone automatyczne aktualizacje wdrożeniowe i tutaj jest dostępna aktualizacja dla tej wtyczki. Jednakże, pliki wtyczki nie są zapisywalne przez serwer WWW, więc aktualizacja nie może być automatycznie zainstalowana.

Potrzebujesz utworzyć folder wtyczki i cała jej zapisywalna zawartość powinna automatycznie zainstalować aktualizację.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Wszystkie wtyczki';
$string['overviewext'] = 'Dodatkowe wtyczki';
$string['overviewupdatable'] = 'Dostępne aktualizacje';
$string['packagesdebug'] = 'Włączone raportowanie błędów na stronie';
$string['packagesdownloading'] = 'Pobieranie {$a}';
$string['packagesextracting'] = 'Wypakowywanie {$a}';
$string['packagesvalidating'] = 'Walidowanie {$a}';
$string['packagesvalidatingfailed'] = 'Instalacja przerwana';
$string['packagesvalidatingok'] = 'Walidacja prawidłowa, instalacja może być kontynuowana';
$string['plugincheckall'] = 'Wszystkie wtyczki';
$string['plugincheckattention'] = 'Wtyczki wymagające uwagi';
$string['pluginchecknone'] = 'Żadne wtyczki nie wymagają Twojej uwagi';
$string['pluginchecknotice'] = 'Ta strona wyświetla wtyczki, które mogą wymagać uwagi podczas uaktualniania. Podświetlone są nowe wtyczki, które będą instalowane, te, które będą aktualizowane, i wszelkie brakujące wtyczki. Dodatkowe wtyczki są również podświetlone. Zaleca się, aby sprawdzić, czy są nowsze wersje dodatkowych wtyczek i zaktualizować ich kod źródłowy przed kontynuowaniem uaktualniania Moodle.';
$string['plugindisable'] = 'Wyłącz';
$string['plugindisabled'] = 'Wyłączone';
$string['pluginenable'] = 'Włącz';
$string['pluginenabled'] = 'Włączone';
$string['release'] = 'Wydanie';
$string['requiredby'] = 'Wymagane przez: {$a}';
$string['requires'] = 'Wymagane';
$string['rootdir'] = 'Katalog';
$string['settings'] = 'Ustawienia';
$string['source'] = 'Źródło';
$string['sourceext'] = 'Dodatkowy';
$string['sourcestd'] = 'Standardowe';
$string['status'] = 'Status';
$string['status_delete'] = 'Zostanie usunięte';
$string['status_downgrade'] = 'Jest już zainstalowana wyższa wersja!';
$string['status_missing'] = 'Brak pliku na dysku';
$string['status_new'] = 'Zostanie zainstalowane';
$string['status_nodb'] = 'Brak bazy danych';
$string['status_upgrade'] = 'Zostanie zaktualizowane';
$string['status_uptodate'] = 'Zainstalowane';
$string['supportedconversions'] = 'Obsługiwane konwersje dokumentów';
$string['supportedmoodleversions'] = 'Wspierane wersje Moodle';
$string['systemname'] = 'Identyfikator';
$string['type_antivirus'] = 'Wtyczka antywirusa';
$string['type_antivirus_plural'] = 'Wtyczki antywirusa';
$string['type_auth'] = 'Metoda uwierzytelniania';
$string['type_auth_plural'] = 'Wtyczki uwierzytelniania';
$string['type_availability'] = 'Ograniczenie dostępności';
$string['type_availability_plural'] = 'Ograniczenia dostępności';
$string['type_block'] = 'Blok';
$string['type_block_plural'] = 'Bloki';
$string['type_cachelock'] = 'Uchwyt blokady pamięci podręcznej';
$string['type_cachelock_plural'] = 'Uchwyty blokady pamięci podręcznej';
$string['type_cachestore'] = 'Magazyn pamięci podręcznej';
$string['type_cachestore_plural'] = 'Magazyny pamięci podręcznej';
$string['type_calendartype'] = 'Rodzaj kalendarza';
$string['type_calendartype_plural'] = 'Rodzaje kalendarza';
$string['type_contentbank'] = 'Bank zawartości';
$string['type_contentbank_plural'] = 'Wtyczka banku zawartości';
$string['type_coursereport'] = 'Raport kursu';
$string['type_coursereport_plural'] = 'Raport kursu';
$string['type_customfield'] = 'Niestandardowe pole';
$string['type_customfield_plural'] = 'Niestandardowe pola';
$string['type_dataformat'] = 'Format daty';
$string['type_dataformat_plural'] = 'Formaty dat';
$string['type_editor'] = 'Edytor';
$string['type_editor_plural'] = 'Edytory';
$string['type_enrol'] = 'Metody zapisów';
$string['type_enrol_plural'] = 'Metody zapisów';
$string['type_fileconverter'] = 'Konwerter dokumentów';
$string['type_fileconverter_plural'] = 'Konwertery dokumentów';
$string['type_fileconvertermanage'] = 'Zarządzaj konwerterami dokumentów';
$string['type_filter'] = 'Filtr';
$string['type_filter_plural'] = 'Filtry tekstu';
$string['type_format'] = 'Format kursu';
$string['type_format_plural'] = 'Formaty kursu';
$string['type_gradeexport'] = 'Metoda eksportu ocen';
$string['type_gradeexport_plural'] = 'Metody eksportu ocen';
$string['type_gradeimport'] = 'Metoda importu ocen';
$string['type_gradeimport_plural'] = 'Metody importu ocen';
$string['type_gradereport'] = 'Raport dziennika ocen';
$string['type_gradereport_plural'] = 'Raporty dziennika ocen';
$string['type_gradingform'] = 'Zaawansowana metoda oceniania';
$string['type_gradingform_plural'] = 'Zaawansowana metoda oceniania';
$string['type_h5plib'] = 'Struktura H5P';
$string['type_h5plib_plural'] = 'Struktury H5P';
$string['type_local'] = 'Wtyczka lokalna';
$string['type_local_plural'] = 'Wtyczki lokalne';
$string['type_media'] = 'Odtwarzacz multimediów';
$string['type_media_plural'] = 'Odtwarzacze multimediów';
$string['type_message'] = 'Wtyczka powiadomień';
$string['type_message_plural'] = 'Wtyczki powiadomień';
$string['type_mnetservice'] = 'Usługa MNet';
$string['type_mnetservice_plural'] = 'Usługi MNet';
$string['type_mod'] = 'Moduł aktywności';
$string['type_mod_plural'] = 'Moduły aktywności';
$string['type_paygw'] = 'Bramka płatności';
$string['type_paygw_plural'] = 'Bramki płatności';
$string['type_paygwmanage'] = 'Zarządzaj bramkami płatności';
$string['type_plagiarism'] = 'Wtyczka antyplagiatowa';
$string['type_plagiarism_plural'] = 'Wtyczki antyplagiatowe';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolio';
$string['type_profilefield'] = 'Typ pola profilu';
$string['type_profilefield_plural'] = 'Typy pola profilu';
$string['type_qbehaviour'] = 'Zachowanie pytań';
$string['type_qbehaviour_plural'] = 'Zachowanie pytań';
$string['type_qformat'] = 'Format importu/eksportu pytań';
$string['type_qformat_plural'] = 'Formaty importu/eksportu pytań';
$string['type_qtype'] = 'Rodzaj pytania';
$string['type_qtype_plural'] = 'Rodzaje pytań';
$string['type_report'] = 'Raport strony';
$string['type_report_plural'] = 'Raporty';
$string['type_repository'] = 'Repozytorium';
$string['type_repository_plural'] = 'Repozytoria';
$string['type_search'] = 'Wyszukiwarka';
$string['type_search_plural'] = 'Wyszukiwarki';
$string['type_theme'] = 'Temat';
$string['type_theme_plural'] = 'Tematy';
$string['type_tool'] = 'Narzędzia admina';
$string['type_tool_plural'] = 'Narzędzia admina';
$string['type_webservice'] = 'Protokół webserwisu';
$string['type_webservice_plural'] = 'Protokoły webserwisu';
$string['uninstall'] = 'Odinstaluj';
$string['uninstallconfirm'] = 'Zamierzasz odinstalować wtyczkę <em>{$a->name}</em>. To całkowicie usunie z bazy danych wszystko co jest powiązane z tą wtyczką, włączając w to konfigurację, zapisaną historię zdarzeń, pliki użytkownika zarządzane przez wtyczkę, itd. Nie ma żadnej drogi powrotnej, jeżeli Moodle sam nie utworzył żadnej kopii zapasowej. CZY NA PEWNO chcesz kontynuować?';
$string['uninstalldelete'] = 'Wszystkie powiązane dane z wtyczką <em>{$a->name}</em> zostaną usunięte z bazy danych. Aby zapobiec ponownej samo-instalacji wtyczki, ten folder <em>{$a->rootdir}</em> musi zostać teraz ręcznie usunięty z twojego serwera. Moodle sam nie może usunąć tego folderu z powodu praw zapisu.';
$string['uninstalldeleteconfirm'] = 'Wszystkie powiązane dane z wtyczką <em>{$a->name}</em> zostaną usunięte z bazy danych. Aby zapobiec ponownej samo-instalacji wtyczki, ten folder <em>{$a->rootdir}</em> musi zostać teraz ręcznie usunięty z twojego serwera. Czy chcesz teraz usunąć folder wtyczki?';
$string['uninstalldeleteconfirmexternal'] = 'Okazuje się, że obecna wersja wtyczki została uzyskana przez system zarządzania kodem źródłowym ({$a}). Jeżeli usuniesz folder wtyczki, możesz stracić ważne lokalne modyfikacje kodu. Upewnij się, że chcesz na pewno usunąć przed kontynuacją folder wtyczki.';
$string['uninstallextraconfirmblock'] = 'Tutaj są instancje {$a->instances} tego bloku.';
$string['uninstallextraconfirmenrol'] = 'Tutaj są zapisy {$a->enrolments} użytkownika.';
$string['uninstallextraconfirmmod'] = 'Tutaj są instancje {$a->instances} tego modułu w kursach {$a->courses}.';
$string['uninstalling'] = 'Odinstalowywanie {$a->name}';
$string['updateavailable'] = 'Dostępna jest nowa wersja {$a}!';
$string['updateavailable_moreinfo'] = 'Więcej informacji ...';
$string['updateavailable_release'] = 'Wydanie {$a}';
$string['updatepluginconfirm'] = 'Potwierdzenie aktualizacji wtyczki';
$string['updatepluginconfirmexternal'] = 'Jeżeli zainstalujesz tą aktualizację, możesz nie być już w stanie dłużej uzyskiwać aktualizacji wtyczki z systemu zarządzania kodu źródłowego. Upewnij się, że chcesz na pewno usunąć przed kontynuacją folder wtyczki.';
$string['updatepluginconfirminfo'] = 'Masz zamiar zainstalować nową wersję wtyczki <strong>{$a->name}</strong>. Pakiet zip z wersją {$a->version} wtyczki będzie pobrany z <a href="{$a->url}">{$a->url}</a> i wypakowany do folderu Moodle, więc może uaktualnić twoją wersję Moodla.';
$string['updatepluginconfirmwarning'] = 'Proszę zwrócić uwagę, że Moodle nie wykonuje automatycznie kopii zapasowej twojej bazy danych przed aktualizacją. Stanowczo doradzamy, abyś sam zrobił pełną kopię zapasową, w skrajnych przypadkach nowy kod posiada błędy, które mogą spowodować, że twoja strona będzie niedostępna lub spowodują zniszczenie bazy danych. Kontynuujesz na własne ryzyko.';
$string['validationmsg_componentmatch'] = 'Pełna nazwa komponentu';
$string['validationmsg_componentmismatchname'] = 'Niezgodna nazwa wtyczki';
$string['validationmsg_componentmismatchname_info'] = 'Wtyczka deklaruje, że jej nazwa to \'{$a}\', ale nie jest to zgodne z nazwą katalogu głównego.';
$string['validationmsg_componentmismatchtype'] = 'Niezgodny typ wtyczki';
$string['validationmsg_componentmismatchtype_info'] = 'Oczekiwano typu \'{$a->expected}\', ale wtyczka deklaruje, że jej typ to \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Rozpakowany plik nie został znaleziony';
$string['validationmsg_filesnumber'] = 'Nie znaleziono wystarczającej liczby plików w pakiecie';
$string['validationmsg_filestatus'] = 'Nie można wyodrębnić wszystkich plików';
$string['validationmsg_filestatus_info'] = 'Próba wyodrębnienia pliku {$a->file} spowodowała błąd \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Znaleziono pliki językowe';
$string['validationmsg_maturity'] = 'Deklarowany poziom dojrzałości';
$string['validationmsg_missingcomponent'] = 'Wtyczka nie deklaruje nazwy komponentu';
$string['validationmsg_missingexpectedlangenfile'] = 'Niezgodność nazwy pliku języka angielskiego';
$string['validationmsg_missingexpectedlangenfile_info'] = 'W podanym typie wtyczki brakuje oczekiwanego pliku języka angielskiego {$a}.';
$string['validationmsg_missinglangenfile'] = 'Nie znaleziono pliku języka angielskiego';
$string['validationmsg_missinglangenfolder'] = 'Brakuje folderu języka angielskiego';
$string['validationmsg_missingversion'] = 'Wtyczka nie deklaruje swojej wersji';
$string['validationmsg_missingversionphp'] = 'Nie znaleziono pliku version.php';
$string['validationmsg_multiplelangenfiles'] = 'Znaleziono wiele angielskich plików językowych';
$string['validationmsg_onedir'] = 'Nieprawidłowa struktura pakietu ZIP.';
$string['validationmsg_pathwritable'] = 'Sprawdź prawa do zapisu';
$string['validationmsg_pluginversion'] = 'Wersja dodatku';
$string['validationmsg_pluginversiontoolow'] = 'Zainstalowana jest już wyższa wersja tej wtyczki';
$string['validationmsg_release'] = 'Wydanie wtyczki';
$string['validationmsg_requiresmoodle'] = 'Wymagana wersja Moodle';
$string['validationmsg_rootdir'] = 'Nazwa instalowanej wtyczki';
$string['validationmsg_rootdirinvalid'] = 'Nieprawidłowa nazwa wtyczki';
$string['validationmsg_targetexists'] = 'Lokalizacja docelowa już istnieje i zostanie usunięta (nadpisana)';
$string['validationmsg_unknowntype'] = 'Nieznany typ wtyczki';
$string['validationmsglevel_error'] = 'Błąd';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Ostrzeżenie';
$string['version'] = 'Wersja';
$string['versiondb'] = 'Aktualna wersja';
$string['versiondisk'] = 'Nowa wersja';
