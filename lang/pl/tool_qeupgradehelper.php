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
 * Strings for component 'tool_qeupgradehelper', language 'pl', version '4.0'.
 *
 * @package     tool_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Akcja';
$string['alreadydone'] = 'Wszystko zostało już przekonwertowane';
$string['areyousure'] = 'Czy na pewno?';
$string['areyousuremessage'] = 'Czy chcesz dokonać aktualizacji wszystkich {$a->numtoconvert} podejść  do quizu \'{$a->name}\' w kursie {$a->shortname}?';
$string['areyousureresetmessage'] = 'Quiz \'{$a->name}\' w kursie \'{$a->shortname} ma {$a->totalattempts} podejść, z których {$a->convertedattempts} zostało przeniesionych ze starego systemu. {$a->resettableattempts} z nich można zresetować, w celu późniejszej ponownej konwersji. Czy chcesz kontynuować?';
$string['attemptstoconvert'] = 'Podejścia, które należy skonwertować';
$string['backtoindex'] = 'Powrót do strony głównej';
$string['conversioncomplete'] = 'Konwersja zakończona';
$string['convertattempts'] = 'Konwersja podejść';
$string['convertedattempts'] = 'Przekonwertowane podejścia';
$string['convertquiz'] = 'Konwersja podejść...';
$string['cronenabled'] = 'Cron włączony';
$string['croninstructions'] = 'Można włączyć cron, aby automatycznie dokończył uaktualnienie po częściowym uaktualnieniu. Cron będzie pracować między ustalonymi godzinami (w zależności od lokalnego czasu serwera). Przy każdym uruchomieniu cron przetworzy taką liczby prób, na jaką pozwoli ograniczenie czasowe, a następnie zatrzyma się i poczekać do następnego uruchomienia. Nawet jeśli  skonfigurowałeś crona, nie wykona on nic innego, dopóki główna konwersja do 2.1 nie zostanie zakończona.';
$string['cronprocesingtime'] = 'Czas przetwarzania każdego uruchomienia cron-a';
$string['cronsetup'] = 'Konfiguruj crona';
$string['cronsetup_desc'] = 'Można skonfigurować crona, aby zakończył proces aktualizacji danych podejść do quizu automatycznie.';
$string['cronstarthour'] = 'Godzina rozpoczęcia';
$string['cronstophour'] = 'Godzina zakończenia';
$string['extracttestcase'] = 'Wyodrębnij przypadek testowy';
$string['extracttestcase_desc'] = 'Użyj przykładowych danych z bazy do tworzenia testów jednostkowych, które mogą być użyte do testowania aktualizacji.';
$string['gotoindex'] = 'Powrót do listy quizów, które można zaktualizować';
$string['gotoquizreport'] = 'Przejdź do raportów quizu, aby sprawdzić uaktualnienia';
$string['gotoresetlink'] = 'Przejdź do listy quizów, które można zresetować';
$string['includedintheupgrade'] = 'Dołączyć do uaktualnienia?';
$string['invalidquizid'] = 'Nieprawidłowy id quizu. Quiz nie istnieje, albo nie ma podejść do konwersji.';
$string['listpreupgrade'] = 'Lista quizów i podejść';
$string['listpreupgrade_desc'] = 'Wyświetla raport ze wszystkich quizami w systemie i liczbą podejść do każdego. To daje pojęcie o zakresie aktualizacji, jaką trzeba zrobić.';
$string['listpreupgradeintro'] = 'Są to liczby podejść do quizów, które trzeba będzie przetworzyć podczas aktualizacji witryny. Kilkadziesiąt tysięcy nie jest problemem. Jeśli jest ich znacznie więcej, należy wziąć pod uwagę, jak długo będzie trwała aktualizacja.';
$string['listtodo'] = 'Lista quizów do uaktualnienia';
$string['listtodo_desc'] = 'Ten raport pokaże wszystkie quizy w systemie (jeśli istnieją), które mają podejścia, które muszą zostać przekonwertowane do nowego silnika pytań.';
$string['listtodointro'] = 'Są to wszystkie quizy z podejściami, które muszą zostać przekonwertowane. Możesz je przekonwertować klikając na link.';
$string['listupgraded'] = 'Lista już skonwertowanych quizów, które można zresetować';
$string['listupgraded_desc'] = 'Raport pokazuje wszystkie quizy w systemie, których podejścia zostały skonwertowane, a stare dane są zachowane, tak że aktualizacja może być wycofana i ponowiona.';
$string['listupgradedintro'] = 'Oto wszystkie quizy w systemie, których podejścia zostały skonwertowane, a stare dane są zachowane, tak że aktualizacja może być wycofana i ponowiona.';
$string['noquizattempts'] = 'W tym serwisie nie ma żadnych podejść do quizu!';
$string['nothingupgradedyet'] = 'Brak skonwertowanych podejść, które mogłyby być zresetowane';
$string['notupgradedsiterequired'] = 'Skrypt ten działa tylko zanim witryna będzie uaktualniona.';
$string['numberofattempts'] = 'Liczba podejść do quizu';
$string['oldsitedetected'] = 'Ta witryna nie została jeszcze zaktualizowana do nowego silnika zapytań.';
$string['outof'] = '{$a->some} z {$a->total}';
$string['pluginname'] = 'Narzędzie uaktualnienia silnika pytań';
$string['pretendupgrade'] = 'Wykonaj próbną aktualizację podejść bez zapisu';
$string['pretendupgrade_desc'] = 'Proces aktualizacji/konwersji składa się z etapów: załaduj istniejące dane z bazy danych; przekształcić je; zapisz przekształcone dane do bazy. Ten skrypt wykona dwie pierwsze części procesu.';
$string['questionsessions'] = 'Sesje pytania*';
$string['quizid'] = 'Id quizu';
$string['quizupgrade'] = 'Status aktualizacji quizu';
$string['quizzesthatcanbereset'] = 'Następujące quizy zawierają skonwertowane podejścia, które mogą być zresetowane.';
$string['quizzestobeupgraded'] = 'Wszystkie quizy z podejściami';
$string['quizzeswithunconverted'] = 'Poniższe quizy mają podejścia, które muszą zostać skonwertowane';
$string['resetcomplete'] = 'Reset zakończony';
$string['resetquiz'] = 'Reset podejść...';
$string['resettingquizattempts'] = 'Resetowanie prób quizu';
$string['resettingquizattemptsprogress'] = 'Resetowanie prób: {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = 'Ta witryna została już zaktualizowana do nowego silnika pytań.';
$string['upgradedsiterequired'] = 'Skrypt ten działa tylko wtedy, gdy witryna jest już uaktualniona.';
$string['upgradingquizattempts'] = 'Uaktualnianie podejść quizu \'{$a->name}\' w kursie{$a->shortname}';
$string['veryoldattemtps'] = 'Twoja witryna zawiera {$a}podejść do quizów, które nigdy nie zostały całkowicie zaktualizowane podczas aktualizacji z Moodle 1.4 do Moodle 1.5. Podejścia te będą przetworzone przed głównym uaktualnieniem. Trzeba wziąć pod uwagę dodatkowy czas na to potrzebny.';
