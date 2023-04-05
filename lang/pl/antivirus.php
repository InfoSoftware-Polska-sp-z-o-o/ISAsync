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
 * Strings for component 'antivirus', language 'pl', version '4.0'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Dostępne wtyczki antywirusa';
$string['antiviruscommonsettings'] = 'Główne ustawienia antywirusa';
$string['antiviruses'] = 'Wtyczki antywirusa';
$string['antivirussettings'] = 'Zarządzaj wtyczkami antywirusa';
$string['configantivirusplugins'] = 'Proszę wybrać wtyczki antywirusa, które mają być używane a następnie ustawienie w jakiej kolejności mają być stosowane.';
$string['dataerrordesc'] = 'Wystąpił błąd skanera danych.';
$string['dataerrorname'] = 'Błąd skanera danych';
$string['datainfecteddesc'] = 'Wykryto zainfekowane dane.';
$string['datainfectedname'] = 'Zainfekowane dane';
$string['datastream'] = 'Dane';
$string['emailadditionalinfo'] = 'Informacje szczegółowe zwrócone z antywirusa:';
$string['emailauthor'] = 'Przesłane przez:';
$string['emailcontenthash'] = 'Hash zawartości:';
$string['emailcontenttype'] = 'Typ zawartości:';
$string['emaildate'] = 'Data przesłania:';
$string['emailfilename'] = 'Nazwa pliku:';
$string['emailfilesize'] = 'Rozmiar pliku:';
$string['emailgeoinfo'] = 'Geolokalizacja:';
$string['emailinfectedfiledetected'] = 'Wykryto zainfekowany plik';
$string['emailipaddress'] = 'Adres IP:';
$string['emailreferer'] = 'Odnosi się do:';
$string['emailreport'] = 'Raport:';
$string['emailscanner'] = 'Antywirus:';
$string['emailscannererrordetected'] = 'Wystąpił błąd skanowania';
$string['emailsubject'] = '{$a}: Informacja programu antywirusowego Clam AV';
$string['enablequarantine'] = 'Włącz kwarantannę';
$string['enablequarantine_help'] = 'Jeśli opcja jest włączona, wszystkie pliki wykryte jako wirusy zostaną umieszczone w folderze kwarantanny ([dataroot]/{$a}) w celu późniejszego zweryfikowania. Przesyłanie pliku do Moodle nie powiedzie się. Jeśli na serwerze jest włączone skanowanie antywirusowe na poziomie systemu plików, folder kwarantanny powinien zostać wykluczony ze sprawdzania antywirusowego, aby uniknąć wykrycia plików poddanych kwarantannie.';
$string['fileerrordesc'] = 'Wystąpił błąd skanera plików.';
$string['fileerrorname'] = 'Błąd skanera plików';
$string['fileinfecteddesc'] = 'Wykryto zainfekowany plik.';
$string['fileinfectedname'] = 'Zainfekowany plik';
$string['notifyemail'] = 'E-mail z powiadomieniem o alarmie antywirusowym';
$string['notifyemail_help'] = 'Adres e-mail do powiadomień w przypadku wykryciu wirusa. Jeśli puste, wszyscy administratorzy witryny będą otrzymywać powiadomienia.';
$string['notifylevel'] = 'Poziom powiadomień';
$string['notifylevel_help'] = 'Różne poziomy informacji, o których chcesz otrzymywać powiadomienia';
$string['notifylevelerror'] = 'Powiadamiaj o zagrożeniach i problemach ze skanowaniem';
$string['notifylevelfound'] = 'Powiadamiaj o wykryciu zagrożeń';
$string['privacy:metadata'] = 'System antywirusowy nie przechowuje żadnych danych osobowych.';
$string['quarantinedfiles'] = 'Pliki poddane kwarantannie antywirusowej';
$string['quarantinedisabled'] = 'Kwarantanna jest wyłączona. Plik nie będzie przechowywany.';
$string['quarantinetime'] = 'Maksymalny czas kwarantanny';
$string['quarantinetime_desc'] = 'Pliki poddane kwarantannie starsze niż podany okres zostaną usunięte.';
$string['taskcleanup'] = 'Usuń pliki poddane kwarantannie.';
$string['threshold'] = 'Próg sprawdzania statusu';
$string['threshold_desc'] = 'Kontroluje, jak daleko wstecz należy sprawdzić poprzednie wyniki pod kątem błędów/ostrzeżeń/itp., które można wyświetlić tutaj ({$a}).';
$string['unknown'] = 'Nieznany';
$string['virusfound'] = '{$a->item} pozycji zostało przeskanowanych przez program antywirusowy i wykryto, że są zainfekowane!';
