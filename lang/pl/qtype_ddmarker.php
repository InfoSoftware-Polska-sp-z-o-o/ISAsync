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
 * Strings for component 'qtype_ddmarker', language 'pl', version '4.0'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Miejsca na {no} kolejne markery';
$string['alttext'] = 'Tekst alernatywny';
$string['answer'] = 'Odpowiedź';
$string['bgimage'] = 'Obraz tła';
$string['clearwrongparts'] = 'Przenieś niepoprawnie umieszczone markery do pozycji startowej pod obrazkiem';
$string['coords'] = 'Współrzędne';
$string['correctansweris'] = 'Prawidłową odpowiedzią jest: {$a}';
$string['draggableimage'] = 'Przeciągalny obrazek';
$string['draggableitem'] = 'Przeciągalny element';
$string['draggableitemheader'] = 'Przeciągalny element {$a}';
$string['draggableitemtype'] = 'Typ';
$string['draggableword'] = 'Przeciągalny tekst';
$string['dropbackground'] = 'Obrazek tła dla rozmieszczanych markerów';
$string['dropzone'] = 'Obszar upuszczania {$a}';
$string['dropzoneheader'] = 'Obszary upuszczania';
$string['dropzones'] = 'Obszary upuszczania';
$string['dropzones_help'] = 'Strefy zrzutu są definiowane przez podanie współrzędnych. Podczas wpisywania, podgląd powyżej jest natychmiast aktualizowany, więc możesz je rozmieszczać metodą prób i błędów.

*Okrąg: środek_x, środek_y; promień<br>Na przykład: \'80,100;50\'
*Wielokąt: x1, y1; x2, y2;...;xn, yn<br> Na przykład: \'20, 60;  100, 60; 20, 100\'
*Prostokąt: lewo, góra; szerokość, wysokość <br> Na przykład: \'20, 60; 80, 40\'';
$string['followingarewrong'] = 'Następujące markery zostały umieszczone w niewłaściwych miejscach: {$a}';
$string['followingarewrongandhighlighted'] = 'Następujące markery zostały niewłaściwie rozmieszczone: {$a}. Podświetlone markery są pokazane w ich właściwych pozycjach. <br />Kliknij na markerze aby podświetlić dozwolone miejsca.';
$string['formerror_nobgimage'] = 'Wybierz obrazek który będzie użyty jako tło do rozmieszczenia stref zrzutu.';
$string['formerror_noitemselected'] = 'Określiłeś obszar upuszczania, ale nie określiłeś znacznika/markera, który musi być przeciągnięty do obszaru upuszczania.';
$string['formerror_nosemicolons'] = 'Brak średnika we wprowadzonych współrzędnych. Współrzędne dla kształtu: {$a->shape} powinny być wyrażone jako - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'W etykiecie markera dozwolone są tylko znaczniki "{$a}".';
$string['formerror_onlyusewholepositivenumbers'] = 'Proszę wykorzystywać tylko dodatnie wartości liczbowe, aby określić współrzędne x,y i /lub wysokość kształtu. Twoje współrzędne dla kształtu "{$a->shape}" powinny być określone jako - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Dla wielokąta należy podać co najmniej trzy punkty. Współrzędne dla kształtu: {$a->shape} powinny być wyrażone jako - {$a->coordstring}.';
$string['formerror_repeatedpoint'] = 'Zostały wprowadzone te same współrzędne dwa razy. Każdy punkt musi być niepowtarzalny. Twoje współrzędne dla kształtu "{$a->shape}" powinny być wyrażone jako {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Zdefiniowany kształt wychodzi poza granice obrazu tła.';
$string['formerror_toomanysemicolons'] = 'Określono zbyt wiele elementów oddzielonych średnikami jako współrzędne. Twoje współrzędne dla kszałtu "{$a->shape}" powinny być określone jako - {$a>coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Wysokość i szerokość, którą określiłeś/aś nie jest rozpoznawalna. Twoje współrzędne dla kształtu "{$a->shape}" powinny być określone jako - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Współrzędne x,y które określiłeś są nierozpoznawalne.  Twoje współrzędne dla kształtu "{$a->shape}" powinny być określone jako - {$a->coordsstring}.';
$string['infinite'] = 'Nieskończona';
$string['marker'] = 'Marker';
$string['marker_n'] = 'Marker {no}';
$string['markers'] = 'Markery';
$string['nolabel'] = 'Brak etykiety tekstowej';
$string['noofdrags'] = 'Liczba';
$string['pleasedragatleastonemarker'] = 'Twoja odpowiedź nie została ukończona; należy umieścić co najmniej jeden znacznik na obrazie.';
$string['pluginname'] = 'Przeciągnij i upuść markery';
$string['pluginname_help'] = 'Markery typu przeciągnij i upuść wymagają odpowiadających etykiet tekstowych, które będą przeciągane i upuszczane w zdefiniowanych obszarach upuszczania na obrazie tła.';
$string['pluginnameadding'] = 'Dodawanie przeciągalnych markerów';
$string['pluginnameediting'] = 'Edycja przeciągalnych markerów';
$string['pluginnamesummary'] = 'Markery są przeciągane i upuszczane na obrazie tła.';
$string['previewareaheader'] = 'Podgląd';
$string['previewareamessage'] = 'Wybierz obraz tła, wpisz etykiety tekstowe dla markerów i zdefiniuj obszary upuszczania na obrazie tła do których mają być przeciągane.';
$string['privacy:metadata'] = 'Wtyczka pytania typu Przeciągnij i upuść markery nie przechowuje żadnych prywatnych danych.';
$string['refresh'] = 'Odśwież podgląd';
$string['shape'] = 'Kształt';
$string['shape_circle'] = 'Koło';
$string['shape_circle_coords'] = 'x,y;r (gdzie x,y są współrzędnymi środka okręgu, a r jest promieniem)';
$string['shape_circle_lowercase'] = 'koło';
$string['shape_polygon'] = 'Wielokąt';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4;... (gdzie x1,y1 są współrzędnymi pierwszego wierzchołka, x2, y2 to współrzędne drugiego, itd. Nie ma potrzeby powtarzać współrzędnych dla pierwszego wierzchołka, aby zamknąć wielokąt).';
$string['shape_polygon_lowercase'] = 'wielokąt';
$string['shape_rectangle'] = 'Prostokąt';
$string['shape_rectangle_coords'] = 'x,y;w,h (gdzie x,y są współrzędnymi lewego górnego narożnika prostokąta i w i h to szerokość i wysokość prostokąta)';
$string['shape_rectangle_lowercase'] = 'prostokąt';
$string['showmisplaced'] = 'Podświetl strefy na których nie umieszczono właściwych markerów';
$string['shuffleimages'] = 'Pomieszaj przeciągalne elementy przy każdym podejściu';
$string['stateincorrectlyplaced'] = 'Oznacz niepoprawnie rozmieszczone markery';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Obszar zrzutu {$a}';
$string['ytop'] = 'Góra';
