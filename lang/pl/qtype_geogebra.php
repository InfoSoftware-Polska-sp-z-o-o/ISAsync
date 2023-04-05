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
 * Strings for component 'qtype_geogebra', language 'pl', version '4.0'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Dodaj ograniczenia (warunki) do zmiennych.';
$string['addmorevarblanks'] = 'Więcej {no} pustych zmiennych';
$string['answerinvalid'] = 'Odpowiedź - łańcuch znaków w odpowiedzi jest nieprawidłowe. To nie powinno się wydarzyć.';
$string['answermissing'] = 'Brakuje odpowiedzi w żądaniu. Możliwe że JavaScript nie jest włączony w przeglądarce lub wystąpił nieznany błąd';
$string['answervar'] = 'Zmienne dla automatycznego oceniania';
$string['answervar_help'] = 'Dla automatycznego oceniania: Nazwa obiektu wartości logicznej w GeoGebra, która przyjmuje wartość prawda lub fałsz, jeżeli student rozwiązał pytanie (częściowo). Suma wszystkich ocen dla wszystkich zmiennych logicznych. Pytanie jest poprawne jeżeli każda kombinacja osiągnęła 100%. Pozostaw pusty dla ręcznego oceniania.';
$string['applet_advanced_settings'] = 'Zaawansowane ustawienia...';
$string['constraints'] = 'Ograniczenia (warunki)';
$string['constraints_help'] = 'Są jakieś ograniczenia dla zmiennej, yj. a < b, które nie mogły być zadeklarowane używając opcji suwaka? Oddzielone przecinkami. Wspierane relacje: <, <=, >, >=. Jeżeli potrzebujesz równości możesz użyć tej samej zmiennej kiedy tworzysz arkusz GeoGebra. Dynamiczne zakresy, np. używając zmienne dla suwaka min/max nie są wspierane.';
$string['constraintswrongortoohard'] = 'sposobami zrozumieć w ilości prób: {$a->tries} w czasie {$a->time} sekund. Może użyjemy lepszą metodę w przyszłości.';
$string['dragndrop'] = 'Przeciągaj i upuszczaj plik GeoGebra gdziekolwiek na sekcji apletu GeoGebra';
$string['enable_label_drags'] = 'Włącz przeciąganie etykiet';
$string['enable_right_click'] = 'Włącz prawy klik, powiększanie i edytowanie klawiatury';
$string['enable_shift_drag_zoom'] = 'Włącz zmianę przeciągania i powiększania';
$string['feedback'] = 'Odpowiedź zwrotna kiedy zmienna jest prawdą';
$string['feedback_help'] = 'Odpowiedź zwrotna jest automatycznie pobierania z napisu zmiennej w pliku GeoGebra.';
$string['geogebraapplet'] = 'Aplet GeoGebra';
$string['getvars'] = 'Pobierz zmienne które mogą być losowane z apletu';
$string['ggbfilemissing'] = 'Brakuje łańcucha znaków base64 w odpowiedzi. Możliwe że JavaScript nie jest włączony w przeglądarce lub wystąpił nieznany błąd';
$string['ggbturl'] = 'URL lub ID arkusza GeoGebraTube';
$string['ggbturl_help'] = 'Możesz użyć przycisku udostępniania na GeoGebraTube i skopiować i wkleić link lub użyć repozytorium GeoGebraTube. Aplet i parametry są przechowywane w bazie danych, chyba że aplet nie będzie przeładowywany z GeoGebraTube. Tylko dostarczanie ID lub udostępnianie klucza apletu jest także wspierane.';
$string['ggbxmlmissing'] = 'Brakuje łańcucha znaków XML.  Możliwe że JavaScript nie jest włączony w przeglądarce lub wystąpił nieznany błąd';
$string['invalidinequality'] = '{$a} jest nieprawidłowy';
$string['israndomized'] = 'Są jakieś zmienne które powinny być wylosowane?';
$string['loadapplet'] = 'Przeładuj i pokaż aplet';
$string['loadapplet_help'] = 'Przeładuj aplet z GeoGebraTube i przechowaj nową wersję z GeoGebraTube w bazie danych.';
$string['mineqmax'] = 'Min i max dla losowości nie mogą być określone prawidłowo dla zmiennej {$a}, także nie masz określonego min i max suwaka lub element nie jest suwakiem dla wszystkich. Prawdopodobnie możesz naprawić to w swoim pliku GeoGebra.';
$string['minplusstepgtmax'] = 'Min przyrost jest większy niż max dla zmiennej {$a}, możesz prawdopodobnie naprawić to  w swoim pliku GeoGebra.';
$string['noappletloaded'] = 'Żaden aplet nie jest załadowany! Sprawdź czy URL jest poprawny i czy widzisz aplet po wybraniu linku lub przeładowaniu apletu';
$string['nofractionsumeq1'] = 'Przynajmniej jedna kombinacja ocen musi sumować się do 100%';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Pytania gdzie student może rozwiązać pytanie  używając GeoGebra';
$string['pluginnameadding'] = 'Dodawanie pytania GeoGebra';
$string['pluginnameediting'] = 'Edytowanie pytania GeoGebra';
$string['pluginnamesummary'] = 'Wersja pytań obliczeniowych które używają GeoGebra do pokazywania pytania i zweryfikowania odpowiedzi kiedy quiz jest zabrany.';
$string['randomizedbutnovars'] = 'Wybierz które pytanie powinno być losowane, ale nie możesz określić żadnych prawidłowych zmiennych do losowania.';
$string['randomizedvar'] = 'Zmienne to losowania';
$string['randomizedvar_help'] = 'Zmienne, które powinny być losowane (oddzielone przecinkiem). Użyj opcje suwaka w GeoGebra, aby zdefiniować min, max i przyrost. Te zmienne mogą także być używane w tekście pytania przez umieszczenie ich w nawiasy: {a}';
$string['show_algebra_input'] = 'Pokaż pasek wprowadzenia';
$string['show_menu_bar'] = 'Pokaż menu';
$string['show_reset_icon'] = 'Pokaż ikonę do resetu konstrukcji';
$string['show_tool_bar'] = 'Pokaż pasek narzędzi';
$string['stepzero'] = 'Przyrost jest 0 dla zmiennej {$a}; jednakże nie określiłeś przyrostu suwaka lub element nie jest suwakiem dla wszystkich. Możliwe że możesz to naprawić w swoim pliku GeoGebra.';
$string['useafile'] = '... lub użyj plik ggb';
$string['valuecheckedfor'] = 'Obiekt logiczny w GeoGebra, który jest używany do sprawdzania poprawności.';
$string['variablenamewrong'] = 'Zmienna z tą nazwą nie może być znaleziona w pliku GeoGebra.';
$string['variableno'] = 'Zmienna {$a}';
$string['variables'] = 'Zmienne';
$string['willbereadfromfile'] = 'Może być odczytany z GeoGebra... (zobacz przycisk pomocy)';
