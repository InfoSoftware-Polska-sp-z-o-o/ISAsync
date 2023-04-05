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
 * Strings for component 'tool_langimport', language 'pl', version '4.0'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['install'] = 'Zainstaluj zaznaczone paczki językowe';
$string['installedlangs'] = 'Zainstalowane paczki językowe';
$string['installfailed'] = 'Instalacja pakietów językowych nie powiodła się!';
$string['installfinished'] = 'Instalacja pakietów językowych zakończona.';
$string['installpending'] = 'Wkrótce zostaną zainstalowane następujące pakiety językowe: {$a}.';
$string['installscheduled'] = 'Pakiety językowe zaplanowane do instalacji.';
$string['langimport'] = 'Narzędzie importu języka';
$string['langimportdisabled'] = 'Funkcja importu pakietu języka została wyłączona. Musisz zaktualizować pakiety językowe ręcznie, na poziomie systemu plików. Gdy to zrobisz, nie zapomnij opróżnić podręcznej pamięci łańcuchów.';
$string['langpackinstalled'] = 'Paczka językowa \'{$a}\' została poprawnie zainstalowana';
$string['langpackinstalledevent'] = 'Paczka językowa zainstalowana';
$string['langpacknotremoved'] = 'Wystąpił błąd: paczka językowa \'{$a}\' nie została całkowicie odinstalowana. Proszę sprawdzić uprawnienia plików.';
$string['langpackremoved'] = 'Paczka językowa \'{$a}\' została odinstalowana';
$string['langpackremovedevent'] = 'Paczka językowa odinstalowana';
$string['langpackupdated'] = 'Paczka językowa \'{$a}\' została zaktualizowana';
$string['langpackupdatedevent'] = 'Paczka językowa zaktualizowana';
$string['langpackupdateskipped'] = 'Aktualizacja paczki językowej \'{$a}\' pominięta';
$string['langpackuptodate'] = 'Paczka językowa \'{$a}\' jest aktualna';
$string['langunsupported'] = '<p>Twój serwer nie obsługuje w pełni następujących języków:</p><ul>{$a->missinglocales}</ul><p>Zamiast tego do formatowania niektórych ciągów, takich jak daty lub liczby, zostaną użyte globalne ustawienia regionalne  ({$a->globallocale}).';
$string['langupdatecomplete'] = 'Zakończono aktualizację paczek językowych';
$string['missingcfglangotherroot'] = 'Brakujący parametr konfiguracji $CFG-> langotherroot';
$string['missinglangparent'] = 'Brak języka nadrzędnego <em>{$a->parent}</em> dla <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Język angielski nie może zostać odinstalowany.';
$string['nolangupdateneeded'] = 'Wszystkie twoje paczki językowe są aktualne. Nie jest wymagana aktualizacja.';
$string['pluginname'] = 'Paczki językowe';
$string['privacy:metadata'] = 'Wtyczka Paczki językowe nie przechowuje żadnych prywatnych danych.';
$string['purgestringcaches'] = 'Oczyść pamięć podręczną ciągu znaków';
$string['search'] = 'Wyszukaj dostępne pakiety językowe';
$string['selectlangs'] = 'Wybierz języki do odinstalowania';
$string['uninstall'] = 'Odinstaluj wybrane paczki językowe';
$string['uninstallconfirm'] = 'Czy jesteś pewny, że chcesz całkowicie odinstalować wybrane paczki językowe:  <strong>{$a}</strong>?';
$string['updatelangs'] = 'Uaktualnij wszystkie zainstalowane paczki językowe';
