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
 * Strings for component 'filter_poodll', language 'pl', version '4.0'.
 *
 * @package     filter_poodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Aktywować PoodLL?';
$string['alwayshtml5'] = 'Zawsze używaj HTML5';
$string['audiotranscode'] = 'Autokonwersja do MP3';
$string['audiotranscodedetails'] = 'Konwertuje nagrane/załadowane pliku audio do formatu MP3 przed przechowywaniem w Moodle. To pracuje z nagraniami stworzonymi na tokyo.poodll.com, lub załadowanymi nagraniami jeżeli używa FFMPEG';
$string['autotryports'] = 'Spróbuj porównać porty jeżeli nie może się połączyć';
$string['bandwidth'] = 'Połączenie studenta. bajty/sekundę. Wpłwywa na jakość kamery int.';
$string['bgtranscode_audio'] = 'Wykonaj w tle konwersję do MP3';
$string['bgtranscode_video'] = 'Wykonaj w tle konwersję do MP4';
$string['bgtranscodedetails_audio'] = 'To jest bardziej niezawodne niż wykonywanie wtedy, kiedy użytkownik oczekuje. Ale użytkownik nie będzie mógł pobrać audio dopóki terminarz zadań (cron) nie wykona do odpowiedniego zapisu. Działa tylko wtedy, kiedy używasz FFMPEG i Moodle 2.7+. Dla nagrań w MP3 z nagrywarką MP3, konwersja odbywa się w przeglądarce, a nie na serwerze, więc konwersja po stronie serwera (FFMPEG) nie będzie używana.';
$string['bgtranscodedetails_video'] = 'To jest bardziej niezawodne niż wykonywanie wtedy kiedy użytkownik oczekuje. Ale użytkownik nie będzie mógł pobrać audio dopóki terminarz zadań (cron) nie wykona do odpowiedniego zapisu. Działa tylko wtedy, kiedy używasz FFMPEG i Moodle 2.7+.';
$string['capturefps'] = 'FPS rejestratora przechwytywania Wideo';
$string['captureheight'] = 'Wysokość rejestratora przechwytywania Wideo';
$string['capturewidth'] = 'Rozmiar rejestratora przechwytywania Wideo';
$string['defaultwhiteboard'] = 'Domyślna biała tablica';
$string['ffmpeg'] = 'Konwertuj załadowane media z FFMPEG';
$string['ffmpeg_details'] = 'FFMPEG musi być zainstalowany na twoim serwerze Moodle i w w ścieżce systemowej. To wymaga pomocy przy konwersji do mp3, więc spróbuj najpierw w linii komend wydać polecenie, np. ffmpeg -i jakisplik.flv jakisplik.mp3
To jest nadal *eksperymentalne*';
$string['filter_poodll_audioplayer_heading'] = 'Ustawienia odtwarzacza audio';
$string['filter_poodll_camera_heading'] = 'Ustawienia kamerki internetowej';
$string['filter_poodll_mic_heading'] = 'Ustawienia mikrofonu';
$string['filter_poodll_network_heading'] = 'Ustawienia sieci PoodLL';
$string['filter_poodll_videogallery_heading'] = 'Ustawienia galerii wideo';
$string['filter_poodll_videoplayer_heading'] = 'Ustawienia odtwarzacza wideo';
$string['filter_poodll_whiteboard_heading'] = 'Ustawienia białej tablicy';
$string['filtername'] = 'Filtr PoodLL';
$string['miccanpause'] = 'Zezwalaj pauzować (tylko nagrywarka MP3)';
$string['micecho'] = 'Mikrofon: Echo';
$string['micgain'] = 'Mikrofon: Przyrost';
$string['micloopback'] = 'Mikrofon: Pętla zwrotna';
$string['micrate'] = 'Mikrofon: tempo';
$string['micsilencelevel'] = 'Mikrofon: poziom ciszy';
$string['mobile_os_version_warning'] = '<p>Twoja wersja systemu jest zbyt niska</p>
		<p>Android wymaga wersji 4 lub wyższej.</p>
		<p>iOS wymaga wersji 6 lub wyższej.</p>';
$string['mobileandwebkit'] = 'Mobilne + przeglądarki Webkit (Safari, Chrome, itd.)';
$string['mobileonly'] = 'Tylko urządzenia mobilne';
$string['mp3opts'] = 'Opcje konwersji FFMPEG MP3';
$string['mp4opts'] = 'Opcje konwersji FFMPEG MP4';
$string['recui_close'] = 'Zamknij';
$string['recui_continue'] = 'Kontynuuj';
$string['recui_ok'] = 'OK';
$string['recui_pause'] = 'Pauza';
$string['recui_stop'] = 'Stop';
$string['recui_time'] = 'Czas:';
$string['registrationkey'] = 'Klucz rejestracji';
