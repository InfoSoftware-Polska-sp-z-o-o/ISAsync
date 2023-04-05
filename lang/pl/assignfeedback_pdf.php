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
 * Strings for component 'assignfeedback_pdf', language 'pl', version '4.0'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = 'Dodaj do szybkiej listy komentarzy';
$string['allowpdffeedback'] = 'Włączone';
$string['annotatesubmission'] = 'Adnotacja zadania';
$string['annotationhelp'] = 'Pomoc adnotacji';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>Kontrola</th><th>Skróty klawiszowe</th><th>Opis</th></tr></thead>
<tr><td>{$a->save}</td><td>&nbsp;</td><td>Zamknij adnotację bez generowania odpowiedzi PDF (nota: wszystkie adnotacje są zapisywane bezpośrednio tj. zostały zapisane)</td></tr>
 <tr><td>{$a->generate}</td><td>&nbsp;</td><td>Generuj PDF z adnotacjami dla studenta do ściągnięcia<tr><td>Znajdź komentarz</td><td>&nbsp;</td><td>Przejdź bezpośrednio do wcześniej wprowadzonego komentarza (w tym zadaniu) i podświetl go.</td></tr>
 <tr><td>Pokaż poprzedni</td><td>&nbsp;</td><td>Pokaż komentarze dla tego studenta z innego zadania w tym kursie (w ramie bocznej)</td></tr>
 <tr><td>&lt;-- Poprz</td><td>p</td><td>Pokaż poprzednią stronę</td></tr>
 <tr><td>Następny --&gt;</td><td>n</td><td>Pokaż następną stronę</td></tr>
 <tr><td>Kolor tła</td><td> [ i ]</td><td>Zmień kolor wypełnienia dla bokus komentarza (także dostępnego przez prawe kliknięcie na komentarzu)</td></tr>
 <tr><td>Kolor linii</td><td> { i }</td><td>Zmień kolor dla adnotacji</td></tr>
 <tr><td>Wybierz stempel</td><td>&nbsp;</td><td>Wybierz stempel do użycia na narzędziu stempla (nowe stemple mogą być dodane w folderze \'pix/stamps\' na serwerze)</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>Kliknij na stronę aby dodać boks komentarza, wprowadź w komentarzu, wtedy kliknij ponownie na stronę aby zapisać. Kliknij na komentarz aby edytować, przeciągaj aby przesuwać. Kliknij prawym przyciskiem myszy aby zmienić kolor, zapisz na listę szybkiego dostępu lub skasuj (lub skasuj tekst).</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>Kliknięcie + przesuwanie (lub kliknięcie, przesuwanie, kliknięcie) aby rysować linię na stronie</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>Kliknięcie + przesuwanie (lub kliknięcie, przesuwanie, kliknięcie) aby rysować prostokąt na stronie</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>Kliknięcie + przesuwanie (lub kliknięcie, przesuwanie, kliknięcie) aby rysować owal na stronie</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>Kliknięcie + przesuwanie aby rysować linie odręczne na stronie</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>Kliknięcie + przesuwanie (lub kliknięcie, przesuwanie, kliknięcie) aby rysować półprzezroczyste podświetlenie przez istniejącą zawartość strony</td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>Klikij aby wprowadzić zaznaczony stempel w domyślnym rozmiarze. Kliknięcie + przesuwanie, aby wprowadzić w różnych rozmiarach</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>Kliknij w lub na adnotacji (nie komentarzu) aby wymazać go</td></tr>
 <tr><td>Szybka lista</td><td>&nbsp;</td><td>Prawy klik na stronie aby wpowadzić komentarz poprzednio zapisany do \'szybkiej listy\'. Użyj \'x\' aby skasować niepotrzebne pozycje na szybkiej liście.</td></tr>
 </table>';
$string['backtocommentlist'] = 'Powrót do listy komenatrzy';
$string['badaction'] = 'Nieprawidłowa akcja \'{$a}';
$string['badannotationid'] = 'Id adnotacji jest dla innego zadania lub strony';
$string['badcommentid'] = 'Id komentarza jest dla innego zadania lub strony';
$string['badcoordinate'] = 'Nieparzysta liczba współrzędnych w wierszu - powinny być 2 współrzędne na punkt';
$string['badtype'] = 'Nieprawidłowy typ {$a}';
$string['cancel'] = 'Anuluj';
$string['clearimagecache'] = 'Wyczyść pamięć podręczną obrazu strony';
$string['colourblack'] = 'Czarny';
$string['colourblue'] = 'Niebieski';
$string['colourclear'] = 'Czyść';
$string['colourgreen'] = 'Zielony';
$string['colourred'] = 'Czerwony';
$string['colourwhite'] = 'Biały';
$string['colouryellow'] = 'Żółty';
$string['comment'] = 'Komentarz';
$string['commentcolour'] = '[,] - kolor tła komentarza';
$string['commenticon'] = 'c - dodaje do komentarzy przytrzymywanie Ctrl, aby móc rysować linię';
$string['deletecomment'] = 'Skasuj komentarz';
$string['deleteresponse'] = 'Usuń odpowiedź';
$string['downloadoriginal'] = 'Pobierz oryginalne zadanie PDF';
$string['downloadresponse'] = 'Pobierz odpowiedź';
$string['draftsaved'] = 'Szkic zapisany';
$string['emptyquicklist'] = 'Brak pozycji na szybkiej liście';
$string['emptyquicklist_instructions'] = 'Prawy klik na komentarz kopiuje go do szybkiej listy';
$string['emptysubmission'] = 'Puste zadanie';
$string['enabled'] = 'Odpowiedź PDF';
$string['enabled_help'] = 'Pozwala na adnotacje online na PDFach (wysłane przez typ zadania PDF) i zwraca pracę z adnotacjami do studentów.';
$string['eraseicon'] = 'e - wymasuje linie i kształty';
$string['errorgenerateimage'] = 'Nie można wygenerować obrazka - szczegóły: {$a}';
$string['errormessage'] = 'Wiadomość błędu:';
$string['errornosubmission'] = 'Próba stworzenia obrazu dla nieistniejącego zadania';
$string['errornosubmission2'] = 'Nie można znaleźć zadania PDF';
$string['errortempfolder'] = 'Nie można utworzyć folderu tymczasowego';
$string['findcomments'] = 'Znajdź komentarze';
$string['findcommentsempty'] = 'Brak komentarzy';
$string['freehandicon'] = 'f - linie odręczne';
$string['generateresponse'] = 'Wygeneruj plik odpowiedzi';
$string['gspath'] = 'ścieżka Ghostscript';
$string['gspath2'] = 'Na większości instalacji Linuksa, to może być znalezione jako \'/usr/bin/gs\'. Na Windowsie to może wyglądać jak \'c:gsbingswin32c.exe\' (nie może być żadnych spacji w pełnej ścieżce pliku)';
$string['highlighticon'] = 'h - podświetlenie tekstu';
$string['imagefor'] = 'pliki obrazu dla {$a}';
$string['jsrequired'] = 'Javascript musi być włączony w Twojej przeglądarce, aby funkcjonowały adnotacje PDF';
$string['keyboardnext'] = 'n - następna strona';
$string['keyboardprev'] = 'p - poprzednia strona';
$string['linecolour'] = '{,} - kolor linii';
$string['lineicon'] = 'l - linie';
$string['missingannotationdata'] = 'Brakujące dane adnotacji';
$string['missingcommentdata'] = 'Brakujące dane komentarza';
$string['missingquicklistdata'] = 'Brakujące dane szybkiej listy';
$string['next'] = 'Następny';
$string['nocomments'] = 'Brak komentarza';
$string['nogroup'] = 'Brak grupy';
$string['okagain'] = 'Kliknij OK, aby spróbować ponownie';
$string['openlinknewwindow'] = 'Otwórz linki w nowym oknie';
$string['opennewwindow'] = 'Otwórz tę stronę w nowym oknie';
$string['ovalicon'] = 'o - owale';
$string['pagenumber'] = 'Numer strony';
$string['pagenumbertoobig'] = 'Żądany numer strony jest większy niż liczna stron {$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'Żądany numer strony jest zbyt mały (<1)';
$string['pdf'] = 'Odpowiedzi PDF';
$string['pluginname'] = 'Odpowiedzi PDF';
$string['previous'] = 'Poprz';
$string['previousnone'] = 'Brak';
$string['quicklist'] = 'Szybka lista komentarzy';
$string['rectangleicon'] = 'r - prostokąty';
$string['resend'] = 'Ponownie prześlij';
$string['responsefor'] = 'Plik odpowiedzi dla {$a}';
$string['responseok'] = 'Wygenerowane plik odpowiedzi';
$string['responseproblem'] = 'Pojawił się problem podczas generowania pliku odpowiedzi';
$string['savedraft'] = 'Zapisz szkice adnotacji';
$string['servercommfailed'] = 'Komunikacja z serwerem nie powiodła się - czy chcesz ponownie przesłać wiadomość?';
$string['showpreviousassignment'] = 'Pokaż poprzednie zadanie';
$string['stamp'] = 'Wybierz stempel';
$string['stampicon'] = 's - stempel';
$string['test_doesnotexist'] = 'Ścieżka do ghostscript odwołuje się do nieistniejącego pliku';
$string['test_empty'] = 'Ścieżka do ghostscript jest pusta - proszę wprowadzić poprawną ścieżkę';
$string['test_isdir'] = 'Ścieżka do ghostscript odwołuje się do folderu, proszę załączyć program GS w ścieżce';
$string['test_notestfile'] = 'Brakuje testu PDF';
$string['test_notexecutable'] = 'GhostScript odwołuje się do pliku który nie jest wykonywalny';
$string['test_ok'] = 'Ścieżka do GhostScript wygląda na OK - proszę sprawdzić, czy widzisz wiadomość na obrazku poniżej';
$string['testgs'] = 'Test ścieżki ghostscript';
$string['viewresponse'] = 'Pokaż odpowiedzi online';
