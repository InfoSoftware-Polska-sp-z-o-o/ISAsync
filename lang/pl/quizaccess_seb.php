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
 * Strings for component 'quizaccess_seb', language 'pl', version '4.0'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Dodaj nowy szablon';
$string['allowedbrowserkeysdistinct'] = 'Klucze muszą być różne.';
$string['allowedbrowserkeyssyntax'] = 'Klucz powinien być 64-znakowym ciągiem szesnastkowym.';
$string['cachedef_config'] = 'Pamięć podręczna konfiguracji SEB';
$string['cachedef_configkey'] = 'Pamięć podręczna kluczy konfiguracji SEB';
$string['cachedef_quizsettings'] = 'Pamięć podręczna ustawień testu SEB';
$string['cantdelete'] = 'Szablon nie może zostać usunięty, ponieważ był używany w co najmniej jednym teście.';
$string['cantedit'] = 'Szablon nie może być edytowany, ponieważ był używany w co najmniej jednym teście.';
$string['confirmtemplateremovalquestion'] = 'Czy na pewno chcesz usunąć ten szablon?';
$string['confirmtemplateremovaltitle'] = 'Potwierdzić usunięcie szablonu?';
$string['conflictingsettings'] = 'Nie masz uprawnień do aktualizowania istniejących ustawień przeglądarki Safe Exam Browser.';
$string['content'] = 'Szablon';
$string['description'] = 'Opis';
$string['disabledsettings'] = 'Ustawienia wyłączone.';
$string['downloadsebconfig'] = 'Pobierz plik konfiguracyjny SEB';
$string['duplicatetemplate'] = 'Szablon o tej samej nazwie już istnieje.';
$string['edittemplate'] = 'Edytuj szablon';
$string['enabled'] = 'Włączone';
$string['event:accessprevented'] = 'Dostęp do testu został zablokowany';
$string['event:templatecreated'] = 'Szablon SEB został utworzony';
$string['event:templatedeleted'] = 'Szablon SEB został usunięty';
$string['event:templatedisabled'] = 'Szablon SEB został wyłączony';
$string['event:templateenabled'] = 'Szablon SEB został włączony';
$string['event:templateupdated'] = 'Szablon SEB został zaktualizowany';
$string['filenotpresent'] = 'Prześlij plik konfiguracyjny SEB.';
$string['fileparsefailed'] = 'Przesłany plik nie może zostać zapisany jako plik konfiguracyjny SEB.';
$string['httplinkbutton'] = 'Pobierz konfigurację';
$string['invalid_browser_key'] = 'Nieprawidłowy klucz przeglądarki SEB';
$string['invalid_config_key'] = 'Nieprawidłowy klucz konfiguracyjny SEB';
$string['invalidtemplate'] = 'Nieprawidłowy szablon konfiguracji SEB';
$string['managetemplates'] = 'Zarządzaj szablonami';
$string['missingrequiredsettings'] = 'W ustawieniach konfiguracji brakuje niektórych wymaganych wartości.';
$string['name'] = 'Nazwa';
$string['newtemplate'] = 'Nowy szablon';
$string['noconfigfilefound'] = 'Nie można znaleźć przesłanego pliku konfiguracyjnego SEB do testu z cmid: {$a}';
$string['noconfigfound'] = 'Nie można znaleźć konfiguracji SEB dla testu z cmid: {$a}';
$string['notemplate'] = 'Brak szablonu';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Identyfikator testu, dla którego istnieją ustawienia.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Czas uniksowy, kiedy ustawienia zostały utworzone.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Czas uniksowy ostatniej modyfikacji ustawień.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Identyfikator użytkownika, który jako ostatni utworzył lub zmodyfikował ustawienia.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Czas uniksowy, kiedy szablon został utworzony.';
$string['quizsettings'] = 'Ustawienia testu';
$string['seb:manage_filemanager_sebconfigfile'] = 'Zmień ustawienia testu SEB: Wybierz plik konfiguracyjny SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Zmień ustawienie testu SEB: Aktywuj filtrowanie adresów URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Zmień ustawienie testu SEB: Dozwolone klucze egzaminacyjne przeglądarki';
$string['seb:manage_seb_allowreloadinexam'] = 'Zmień ustawienie testu SEB: Zezwalaj na ponowne ładowanie';
$string['seb:manage_seb_allowspellchecking'] = 'Zmień ustawienie testu SEB: Włącz sprawdzanie pisowni';
$string['seb:manage_seb_enableaudiocontrol'] = 'Zmień ustawienie testu SEB: Włącz sterowanie dźwiękiem';
$string['seb:manage_seb_expressionsallowed'] = 'Zmień ustawienie testu SEB: Proste wyrażenia dozwolone';
$string['seb:manage_seb_expressionsblocked'] = 'Zmień ustawienie testu SEB: Proste wyrażenia zablokowane';
$string['seb:manage_seb_muteonstartup'] = 'Zmień ustawienie testu SEB: Wycisz podczas uruchamiania';
$string['seb:manage_seb_showreloadbutton'] = 'Zmień ustawienie testu SEB: Pokaż przycisk ponownego ładowania';
$string['seb:manage_seb_showsebdownloadlink'] = 'Zmień ustawienie testu SEB: Pokaż łącze pobierania';
$string['seb:manage_seb_showsebtaskbar'] = 'Zmień ustawienie testu SEB: Pokaż pasek zadań';
$string['seb:manage_seb_showtime'] = 'Zmień ustawienie testu SEB: Pokaż czas';
$string['seb:manage_seb_showwificontrol'] = 'Zmień ustawienie testu SEB: Pokaż kontrolę Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Zmień ustawienie testu SEB: Wybierz szablon SEB';
$string['seb:managetemplates'] = 'Zarządzaj szablonami konfiguracji SEB';
$string['seb_activateurlfiltering'] = 'Włącz filtrowanie adresów URL';
$string['seb_allowedbrowserexamkeys'] = 'Dozwolone klucze egzaminacyjne przeglądarki';
$string['seb_allowspellchecking'] = 'Włącz sprawdzanie pisowni';
$string['seb_allowspellchecking_help'] = 'Jeśli opcja jest włączona, sprawdzanie pisowni w przeglądarce SEB jest dozwolone.';
$string['seb_enableaudiocontrol'] = 'Włącz sterowanie dźwiękiem';
$string['seb_enableaudiocontrol_help'] = 'Jeśli opcja jest włączona, ikona sterowania dźwiękiem jest wyświetlana na pasku zadań SEB.';
$string['seb_expressionsallowed'] = 'Wyrażenia dozwolone';
$string['seb_expressionsblocked'] = 'Wyrażenia zablokowane';
$string['seb_muteonstartup'] = 'Wycisz przy uruchomieniu';
$string['seb_showkeyboardlayout'] = 'Pokaż układ klawiatury';
$string['seb_showreloadbutton'] = 'Pokaż przycisk przeładowania';
$string['seb_showsebtaskbar'] = 'Pokaż pasek zadań SEB';
$string['seb_showtime'] = 'Pokaż czas';
$string['seb_showwificontrol'] = 'Pokaż kontrolę Wi-Fi';
$string['seb_use_client'] = 'Tak - użyj konfiguracji klienta SEB';
$string['seb_use_manually'] = 'Tak - skonfiguruj ręcznie';
$string['seb_use_template'] = 'Tak - użyj istniejącego szablonu';
$string['seb_use_upload'] = 'Tak - prześlij swoją własną konfigurację';
$string['setting:autoreconfigureseb'] = 'Automatyczna konfiguracja SEB';
$string['setting:displayblocksbeforestart'] = 'Wyświetlaj bloki przed rozpoczęciem testu';
$string['setting:displayblockswhenfinished'] = 'Wyświetlaj bloki po zakończeniu testu';
$string['setting:showhttplink'] = 'Pokaż link http://';
$string['setting:showseblink'] = 'Pokaż link seb://';
$string['unknown_reason'] = 'Nieznany powód';
$string['used'] = 'W użyciu';
