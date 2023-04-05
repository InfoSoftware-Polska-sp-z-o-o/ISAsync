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
 * Strings for component 'antivirus_clamav', language 'pl', version '4.0'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'W tej chwili występuje problem ze skanowaniem antywirusowym. Twój plik {$a->item} nie został przesłany. Spróbuj ponownie później.';
$string['clamfailed'] = 'Clam AV nie został poprawnie uruchomiony. Wiadomość o błędzie była {$a}. Tu jest odpowiedź z Clam:';
$string['clamfailureonupload'] = 'Podczas awarii ClamAV';
$string['configclamactlikevirus'] = 'Traktuj pliki jak wirusy';
$string['configclamdonothing'] = 'Traktuj pliki jako "OK"';
$string['configclamtryagain'] = 'Odrzucono przesyłanie, spróbuj ponownie';
$string['errorclamavnoresponse'] = 'ClamAV nie odpowiada; sprawdź jego stan działania.';
$string['invalidpathtoclam'] = 'Ścieżka do ClamAV, {$a}, jest nieprawidłowa.';
$string['pathtoclam'] = 'Wiersz poleceń';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pluginname'] = 'Antywirus ClamAV';
$string['privacy:metadata'] = 'Wtyczka antywirusa ClamAV nie przechowuje żadnych danych osobistych.';
$string['quarantinedir'] = 'Katalog kwarantanny';
$string['runningmethod'] = 'Metoda działania';
$string['runningmethodcommandline'] = 'Wiersz poleceń';
$string['runningmethoddesc'] = 'Sposób uruchamiania ClamAV. Wiersz poleceń jest używany domyślnie, jednak w systemach uniksowych lepszą wydajność można uzyskać za pomocą gniazd systemowych.';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['tcpsockethost'] = 'TCP socket hostname';
$string['tcpsockethostdesc'] = 'Adres serwera ClamAV';
$string['tcpsocketport'] = 'TCP socket port';
$string['tcpsocketportdesc'] = 'Port używany do łączenia z ClamAV';
$string['tries'] = 'Próby skanowania';
$string['tries_desc'] = 'Liczba prób wykonanych przez ClamAV w przypadku wystąpienia błędu podczas procesu skanowania.';
$string['tries_notice'] = 'Prób skanowania Clamav: {$a->tries}.
{$a->notice}';
$string['unknownerror'] = 'Wystąpił nieznany błąd w ClamAV.';
