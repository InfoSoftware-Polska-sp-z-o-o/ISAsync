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
 * Strings for component 'geogebra', language 'pl', version '4.0'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Aktywność ta została zamknięta';
$string['activitynotopened'] = 'Aktywność ta nie jest jeszcze dostępna';
$string['attempt'] = 'Próba';
$string['attempts'] = 'Próba';
$string['attemptsremaining'] = 'Pozostałe próby dla tej aktywności:';
$string['autograde'] = 'Samooceniająca aktywność';
$string['availabledate'] = 'Dostępna od';
$string['average'] = 'Średni';
$string['choosescripttype'] = 'Wybierz typ skryptu';
$string['comment'] = 'Komentarz';
$string['coursewithoutstudents'] = 'Kurs bez studentów';
$string['datestudent'] = 'Ostatnia modyfikacja (zadanie)';
$string['dateteacher'] = 'Ostatnia modyfikacja (ocena)';
$string['deleteallattempts'] = 'Usuń wszystkie próby';
$string['description'] = 'Opis';
$string['discardchanges'] = 'Odrzuć zmiany i powróć';
$string['duedate'] = 'Termin zakończenia';
$string['duration'] = 'Czas trwania';
$string['enableLabelDrags'] = 'Włącz przeciąganie etykiet';
$string['enableRightClick'] = 'Włącz kliknięcie prawy przyciskiem myszy';
$string['errorattempt'] = 'Błąd: próba nie może być zapisana.';
$string['expired'] = 'Przepraszamy, ale ta aktywność jest zamknięta na {$a} i nie jest dłużej dostępna';
$string['extractedfromggb'] = 'wypakowanie plików z ggb';
$string['filename'] = 'Nazwa pliku';
$string['filenotfound'] = 'Określony plik nie istnieje';
$string['filetype'] = 'Typ';
$string['filetype_help'] = 'T0 ustawienie określa ,jak aktywność GeoGebra jest dołączona w kursie. Tam są 2 opcje:

* Załadowana GeoGebra - włącza prawidłowy pakiet ".ggb", wybierany przez selektor pliku.
* Zewnętrzny URL - włącza do określenia URL. Uwaga: URL musi zaczynać się od http(s) lub www i zawierać prawidłowy plik ".ggb".';
$string['filetypeexternal'] = 'Zewnętrzny URL';
$string['filetypelocal'] = 'Załadowane pliki';
$string['firstattempt'] = 'Pierwsza próba';
$string['for'] = 'dla';
$string['functionalityoptionsgrp'] = 'Funkcjonalność';
$string['geogebra:addinstance'] = 'Dodaj GeoGebra';
$string['geogebra:grade'] = 'Ocena GeoGebra';
$string['geogebra:submit'] = 'Wyślij GeoGebra';
$string['geogebra:view'] = 'Pokaż GeoGebra';
$string['geogebrafile'] = 'Plik GeoGebra';
$string['geogebrafile_help'] = 'plik .ggb.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'To ustawienie włącza URL do określenia URL do pliku GeoGebra, niż wybieranie pliku przez selektor pliku.';
$string['grade'] = 'Ocena';
$string['gradeit'] = 'Oceń';
$string['grademethod'] = 'Metoda oceny';
$string['header_geogebra'] = 'Ustawienia GeoGebra';
$string['height'] = 'Wysokość';
$string['highestattempt'] = 'Najwyższa próba';
$string['httpnotallowed'] = 'W tej chwili nie można skorzystać z plików zewnętrznych';
$string['interfaceoptionsgrp'] = 'Interfejs użytkownika';
$string['invalidgeogebrafile'] = 'Określono nieprawidłową GeoGebra. To musi mieć rozszerzenie ".ggb".';
$string['invalidurl'] = 'Określono nieprawidłowy URL. To musi zaczynać się z http(s) i musi mieć prawidłowy plik ".ggb".';
$string['language'] = 'Język';
$string['lastattempt'] = 'Ostatnia próba';
$string['lastattemptremaining'] = 'To jest twoja ostatnia próba dla tej aktywności';
$string['lastmodifiedgrade'] = 'Ostatnia modyfikacja (ocena)';
$string['lastmodifiedsubmission'] = 'Ostatnia modyfikacja (zadanie)';
$string['lowestattempt'] = 'Najniższa próba';
$string['manualgrade'] = 'Ręcznie oceniana?';
$string['maxattempts'] = 'Maksymalna liczba prób';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> jest darmowym wieloplatformowym oprogramowaniem dynamicznej matematyki dla wszystkich poziomów edukacji, które łączą geometrię, algebrę, tabele, grafikę, statystykę i rachunek różniczkowy w jednym pakiecie łatwym do użycia.</p>
<p>Jednakże <a href="http://www.gencat.cat/ensenyament/" target="_blank">Oddział Edukacji w Katalonii</a> we współpracy z <a href="http://acgeogebra.cat/" target="_blank"> Katalońskiego Stowarzyszenia GeoGebra</a> (ACG) i zespół wsparcia GeoGebra mają zaimplementowany ten moduł, który pozwala na włączenie aktywności GeoGebra w Moodle. Jego główne cechy to:
<ul>
    <li>Pozwala na łatwe osadzanie aktywności GeoGebra w kursach Moodle.</li>
    <li>Ułatwia studentom śledzenie, ponieważ przechowuje wynik, datę, czas trwania i konstrukcję dla każdej próby stworzonej przez użytkownika.</li>
    <li>Studenci mogą zapisać stan aktywności, aby móc kontynuować je później.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Zrobiłeś tę aktywność już maksymalną liczbę razy';
$string['name'] = 'Nazwa';
$string['noattempts'] = '-';
$string['nograding'] = 'Brak oceniania';
$string['nomoreattempts'] = 'Nie zostało więcej prób dla tej aktywności';
$string['notopenyet'] = 'Niestety, ta aktywność nie jest dostępna do {$a}';
$string['pluginadministration'] = 'Administracja GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['previewtab'] = 'Podgląd';
$string['redirecttocourse'] = 'Aktywność została zapisana. Powrót do strony głównej kursu';
$string['report'] = 'Raport';
$string['resultstab'] = 'Wyniki';
$string['resumeattempt'] = 'Wznów niedokończoną próbę';
$string['review'] = 'Przegląd';
$string['reviewtab'] = 'Przegląd';
$string['savechanges'] = 'Zapisz zmiany';
$string['savewithoutsubmitting'] = 'Zapisz bez wysyłania';
$string['settings'] = 'Ustawienia';
$string['showAlgebraInput'] = 'Pokaż pasek wprowadzenia';
$string['showMenuBar'] = 'Pokaż pasek menu';
$string['showResetIcon'] = 'Pokaż ikony do resetu konstrukcji';
$string['showToolBar'] = 'Pokaż pasek narzędzi';
$string['showToolBarHelp'] = 'Pokaż pasek narzędzi z pomocą';
$string['showsubmit'] = 'Pokaż przycisk wysyłania';
$string['status'] = 'Status';
$string['submitandfinish'] = 'Wyślij i zakończ';
$string['total'] = 'Razem';
$string['unfinished'] = 'Niezakończone';
$string['ungraded'] = 'Nieocenione';
$string['unlimitedattempts'] = 'Nielimitowane próby dla tej aktywności';
$string['urledit'] = 'Plik GeoGebra';
$string['urledit_help'] = 'Plik ".ggb" gdzie znajdziesz w aktywności GeoGebra';
$string['view'] = 'Podgląd';
$string['viewattempt'] = 'Podgląd';
$string['viewattempts'] = 'Podgląd prób';
$string['viewattempttab'] = 'Podgląd próby';
$string['viewtab'] = 'Podgląd';
$string['weight'] = 'Waga';
$string['width'] = 'Szerokość';
