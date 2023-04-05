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
 * Strings for component 'portfolio_mahara', language 'pl', version '4.0'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Włącz obsługę portfolio Leap2A (wymagana Mahara 1,3 lub wyższa)';
$string['err_invalidhost'] = 'Nieprawidłowy host MNet';
$string['err_invalidhost_help'] = 'Wtyczka ta jest źle skonfigurowana, bo wskazuje na nieprawidłowy (lub usunięty) host MNet.
Wtyczka ta wymaga węzła Moodle Networking z: opublikowanym SSO IDP , subskrybowanym SSO_SP i subskrybowanym <b>oraz</b> publikowanym portfolio.';
$string['err_networkingoff'] = 'MNet jest wyłączony';
$string['err_networkingoff_help'] = 'Mnet jest całkowicie wyłączony. Proszę go włączyć przed konfigurowaniem wtyczki. Wszystkie egzemplarze tej wtyczki zostały ustawione na niewidoczne - będzie je trzeba ręcznie przestawić ponownie na widoczne, aby mogły być używane.';
$string['err_nomnetauth'] = 'Wtyczka uwierzytelniania MNet jest wyłączona';
$string['err_nomnetauth_help'] = 'Wtyczka uwierzytelniania MNet jest wyłączona, jednak jest wymagana dla tej usługi';
$string['err_nomnethosts'] = 'Wymagany jest Mnet';
$string['err_nomnethosts_help'] = 'Wtyczka ta wymaga węzła MNet z: opublikowanym SSO IDP, subskrybowanym SSO SP i subskrybowanym <b>oraz</b> publikowanym portfolio, oraz wtyczki uwierzytelniania MNet.
Wszystkie egzemplarze tej wtyczki zostały ustawione na niewidoczne, bo powyższe warunki nie były spełnione. Będzie je trzeba ręcznie przestawić ponownie na widoczne.';
$string['failedtojump'] = 'Nie udało się ustanowić połączenia ze  zdalnym serwerem';
$string['failedtoping'] = 'Nie udało się ustanowić połączenia ze  zdalnym serwerem: {$a}';
$string['mnet_nofile'] = 'Nie odnaleziono pliku w obiekcie transferowym - dziwny błąd :-)';
$string['mnet_nofilecontents'] = 'Znaleziono plik w obiekcie transferowym, ale nie można pobrać jego zawartości - dziwny błąd: {$a}';
$string['mnet_noid'] = 'Nie znaleziono pasującego rekordu transferu dla tego tokenu';
$string['mnet_notoken'] = 'Nie znaleziono tokenu pasującego to tego transferu';
$string['mnet_wronghost'] = 'Zdalny host nie zgadza się  z rekordem transferu dla tego tokenu';
$string['mnethost'] = 'Host sieci MNet';
$string['pf_name'] = 'Usługi Portfolio';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Ta wtyczka wysyła dane na zewnątrz do połączonego konta Mahara. Nie przechowuje danych lokalnie.';
$string['privacy:metadata:data'] = 'Dane osobowe przekazywane z podsystemu portfolio.';
$string['senddisallowed'] = 'Nie można teraz przesłać plików do Mahara';
$string['url'] = 'URL';
