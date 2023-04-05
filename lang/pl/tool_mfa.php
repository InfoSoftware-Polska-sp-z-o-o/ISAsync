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
 * Strings for component 'tool_mfa', language 'pl', version '4.0'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Osiągnięta waga';
$string['areyousure'] = 'Czy na pewno chcesz anulować składnik?';
$string['combination'] = 'Zestaw składników';
$string['connector'] = 'I';
$string['created'] = 'Utworzony';
$string['createdfromip'] = 'Utworzony z IP';
$string['debugmode:currentweight'] = 'Aktualna waga: {$a}';
$string['debugmode:heading'] = 'Tryb debugowania';
$string['devicename'] = 'Urządzenie';
$string['email:subject'] = 'Nie udało się zalogować {$a}';
$string['enablefactor'] = 'Włącz składnik';
$string['error:actionnotfound'] = 'Akcja „{$a}” nie jest obsługiwana';
$string['error:directaccess'] = 'Ta strona nie powinna być bezpośrednio dostępna';
$string['error:factornotenabled'] = 'Składnik MFA „{$a}” nie jest włączony';
$string['error:factornotfound'] = 'Nie znaleziono składnika MFA „{$a}”';
$string['error:home'] = 'Kliknij tutaj, aby wrócić do strony głównej.';
$string['error:notenoughfactors'] = 'Nie udało się uwierzytelnić';
$string['error:reauth'] = 'Nie mogliśmy potwierdzić Twojej tożsamości w stopniu wystarczającym do spełnienia wymaganej polityki bezpieczeństwa uwierzytelniania. Jeśli pominąłeś jakiekolwiek składnik uwierzytelnienia, możesz spróbować ponownie lub skontaktować się z administratorem witryny.';
$string['error:revoke'] = 'Nie można unieważnić składnika';
$string['error:setupfactor'] = 'Nie można ustawić składnika';
$string['error:support'] = 'Jeżeli nadal nie możesz się zalogować lub uważasz, że widzisz ten komunikat przez pomyłkę, w celu uzyskania pomocy wyślij e-mail na następujący adres:';
$string['error:supportpage'] = 'Kliknij tutaj, aby przejść do strony pomocy technicznej.';
$string['error:wrongfactorid'] = 'Identyfikator składnika "{$a}" jest nieprawidłowy';
$string['event:userpassedmfa'] = 'Poprawna weryfikacja';
$string['event:userrevokedfactor'] = 'Unieważnienie składnika';
$string['event:usersetupfactor'] = 'Konfiguracja składnika';
$string['factor'] = 'Składnik';
$string['factorreport'] = 'Raport dostępnych składników';
$string['factorrevoked'] = 'Składnik "{$a}" został pomyślnie anulowany.';
$string['factorsetup'] = 'Pomyślnie skonfigurowano składnik "{$a}".';
$string['fallback'] = 'Składnik rezerwowy';
$string['fallback_info'] = 'Ten składnik jest rezerwowy, jeśli nie skonfigurowano żadnych innych składników ten zawsze zakończy się niepowodzeniem.';
$string['gotourl'] = 'Przejdź do pierwotnego adresu URL:';
$string['inputrequired'] = 'Interakcja użytkownika';
$string['lastverified'] = 'Ostatnia zweryfikowany';
$string['lockoutnotification'] = 'Pozostało Ci {$a} prób.';
$string['mfa'] = 'MFA';
$string['mfa:mfaaccess'] = 'Wejdź w interakcję z MFA';
$string['mfareports'] = 'Raporty MFA';
$string['mfasettings'] = 'Zarządzaj MFA';
$string['na'] = 'nd.';
$string['overall'] = 'Podsumowanie';
$string['pending'] = 'W trakcie';
$string['pluginname'] = 'Uwierzytelnianie wieloskładnikowego (MFA)';
$string['preferences:activefactors'] = 'Aktywne składniki';
$string['preferences:availablefactors'] = 'Dostępne składniki';
$string['preferences:header'] = 'Preferencje uwierzytelniania wieloskładnikowego';
$string['privacy:metadata:tool_mfa'] = 'Dane ze skonfigurowanymi składnikami MFA';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Adres IP, z którego ustawiono składnik';
$string['privacy:metadata:tool_mfa:factor'] = 'Typ składnika';
$string['privacy:metadata:tool_mfa:id'] = 'Identyfikator';
$string['privacy:metadata:tool_mfa:label'] = 'etykieta składnika, np. urządzenie lub e-mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Data ostatniej weryfikacji użytkownika przy użyciu tego składnika';
$string['privacy:metadata:tool_mfa:secret'] = 'Dane wrażliwe składnika';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Data utworzenia składnika';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Data ostatniej modyfikacji składnika';
$string['privacy:metadata:tool_mfa:userid'] = 'Identyfikator użytkownika, do którego należy ten składnik';
$string['redirecterrordetected'] = 'Przerwano wykonywanie skryptu z powodu wykrycia nieobsługiwanego przekierowania. Wystąpił błąd przekierowania między MFA a {$a}.';
$string['revoke'] = 'Unieważnij';
$string['revokefactor'] = 'Unieważnij składnik';
$string['settings:combinations'] = 'Podsumowanie warunków wymaganych do poprawnego zalogowania';
$string['settings:debugmode'] = 'Włącz tryb debugowania';
$string['settings:debugmode_help'] = 'Tryb debugowania wyświetli małe powiadomienie na stronach administracji MFA, a także na stronie preferencji użytkownika z informacjami o aktualnie włączonych składnikach.';
$string['settings:enabled'] = 'Włącz wtyczkę MFA';
$string['settings:enabled_help'] = '';
$string['settings:enablefactor'] = 'Włącz składnik';
$string['settings:enablefactor_help'] = 'Zaznacz, aby zezwolić na użycie składnika do uwierzytelniania MFA.';
$string['settings:general'] = 'Główne ustawienia MFA';
$string['settings:lockout'] = 'Próg blokady';
$string['settings:lockout_help'] = 'Liczba dozwolonych prób wprowadzenia składnika uwierzytelnienia przez użytkownika, zanim użytkownik zostanie zablokowany.';
$string['settings:weight'] = 'Waga składnika';
$string['settings:weight_help'] = 'Waga tego składnika, jeśli został potwierdzony. Aby się zalogować, użytkownik potrzebuje co najmniej 100 punktów.';
$string['setup'] = 'Konfiguracja';
$string['setupfactor'] = 'Konfiguruj składnik';
$string['setuprequired'] = 'Konfiguracja użytkownika';
$string['state:fail'] = 'Niepowodzenie';
$string['state:neutral'] = 'Neutralny';
$string['state:pass'] = 'Potwierdzony';
$string['state:unknown'] = 'Nieznany';
$string['totalweight'] = 'Waga całkowita';
$string['weight'] = 'Waga';
