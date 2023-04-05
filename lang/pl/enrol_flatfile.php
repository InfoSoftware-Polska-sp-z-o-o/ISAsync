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
 * Strings for component 'enrol_flatfile', language 'pl', version '4.0'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Kodowanie pliku';
$string['expiredaction'] = 'Akcja wygaśnięcia rejestracji';
$string['expiredaction_help'] = 'Wybierz czynność, którą należy wykonać, gdy rejestracja użytkownika wygaśnie. Należy pamiętać, że niektóre dane i ustawienia użytkownika są usuwane z kursu przy wypisaniu się z niego.';
$string['filelockedmail'] = 'Plik tekstowy CSV używany do automatycznych zapisów ({$a}) nie mógł być usunięty przez proces cron. To zazwyczaj oznacza, że uprawnienia pliku są źle ustawione. Napraw uprawnienia tak, aby Moodle mógł usunąć plik, w przeciwnym razie może być on przetwarzany wielokrotnie.';
$string['filelockedmailsubject'] = 'Poważny błąd: plik CSV do automatycznych zapisów';
$string['flatfile:unenrol'] = 'Wypisz ręcznie użytkowników z kursu';
$string['flatfileenrolments'] = 'Rejestracje w formacie płaskiego pliku (CSV)';
$string['location'] = 'Lokalizacja pliku';
$string['mapping'] = 'Mapowanie pliku CSV';
$string['messageprovider:flatfile_enrolment'] = 'Wiadomości o automatycznych zapisach wg pliku CSV';
$string['notifyadmin'] = 'Poinformuj administratora';
$string['notifyenrolled'] = 'Poinformuj zapisanych użytkowników';
$string['notifyenroller'] = 'Powiadom użytkownika odpowiedzialnego za rejestrację';
$string['pluginname'] = 'Plik CSV';
$string['pluginname_desc'] = 'W tej metodzie regularnie przegląda i przetwarza się odpowiednio  sformatowany plik tekstowy znajdujący się w określonym miejscu. Plik jest w formacie tekstowym, rozdzielony przecinkami, powinien zawierać cztery lub sześć pól w linii:
<pre class="informationbox">
* operacja, rola, idnumber (użytkownika), idnumber (kursu) [, czas_rozpoczęcia, czas_zakonczenia]
gdzie:
* operacja = add | del
* rola = student | teacher | teacheredit
* idnumber (użytkowniku) = idnumber w tabeli użytkownika (nie id!)
* idnumber (kursu) = idnumber w tabelu kursów (nie id!)
* czas_rozpoczęcia = czas rozpoczęcia (w sekundach od początku epoki) - opcjonalny
* czas_zakonczenia = czas zakończenia (w sekundach od początku epoki) - opcjonalny
</pre>
Może to wyglądać tak:
<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Termin zakończenia zapisów';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Termin modyfikacji zapisów';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Termin rozpoczęcia zapisów';
