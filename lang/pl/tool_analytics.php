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
 * Strings for component 'tool_analytics', language 'pl', version '4.0'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Dokładność';
$string['allpredictions'] = 'Wszystkie prognozy';
$string['alltimesplittingmethods'] = 'Wszystkie interwały analizy';
$string['analysingsitedata'] = 'Analizowanie witryny';
$string['analysis'] = 'Analiza';
$string['analyticmodels'] = 'Modele analityczne';
$string['bettercli'] = 'Ewaluacja modeli i generowanie prognoz może wymagać intensywnego przetwarzania. Zalecane jest uruchamianie tych akcji z wiersza poleceń.';
$string['cantguessenddate'] = 'Nie można odgadnąć daty zakończenia';
$string['cantguessstartdate'] = 'Nie można odgadnąć daty rozpoczęcia';
$string['classdoesnotexist'] = 'Klasa {$a} nie istnieje';
$string['clearmodelpredictions'] = 'Czy na pewno chcesz wyczyścić wszystkie prognozy "{$a}"?';
$string['clearpredictions'] = 'Wyczyść prognozy';
$string['clienablemodel'] = 'Model można włączyć, wybierając metodę podziału czasu za pomocą jego ID. Należy pamiętać, że można go włączyć później za pomocą interfejsu WWW ("brak", aby wyjść).';
$string['clievaluationandpredictions'] = 'Zaplanowane zadanie jest iterowane za pomocą włączonych modeli i otrzymuje prognozy. Oceny modeli za pomocą interfejsu internetowego są wyłączone. Możesz zezwolić na wykonywanie tych procesów ręcznie za pomocą interfejsu internetowego, wyłączając ustawienie analityki <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Zaplanowane zadanie jest iterowane za pomocą włączonych modeli i otrzymuje prognozy. Oceny modeli za pomocą interfejsu internetowego są wyłączone. Może być włączone przez administratora witryny.';
$string['componentselectnone'] = 'Odznacz wszystko';
$string['createmodel'] = 'Utwórz model';
$string['delete'] = 'Usuń';
$string['deletemodelconfirmation'] = 'Czy na pewno chcesz usunąć „{$a}”?  Nie będzie można tego cofnąć.';
$string['disabled'] = 'Wyłaczone';
$string['editmodel'] = 'Edytuj model "{$a}"';
$string['edittrainedwarning'] = 'Ten model został już przeszkolony. Należy zauważyć, że zmiana wskaźników lub metody podziału czasu spowoduje usunięcie wcześniejszych prognoz i rozpoczęcie generowania nowych prognoz.';
$string['enabled'] = 'Włączony';
$string['errorcantenablenotimesplitting'] = 'Przed włączeniem modelu musisz wybrać metodę podziału czasu';
$string['errornoenabledandtrainedmodels'] = 'Nie ma włączonych i wyszkolonych modeli do prognozowania.';
$string['errornoenabledmodels'] = 'Nie ma włączonych modeli do treningu.';
$string['errornoexport'] = 'Tylko wyszkolone modele mogą być eksportowane';
$string['errornostaticevaluated'] = 'Modele oparte na założeniach nie mogą być oceniane. Są zawsze w 100% poprawne w zależności od tego, jak zostały zdefiniowane.';
$string['errornostaticlog'] = 'Modele oparte na założeniach nie mogą być oceniane, ponieważ nie ma dziennika wydajności.';
$string['erroronlycli'] = 'Wykonanie jest dozwolone tylko przez wiersz poleceń';
$string['errortrainingdataexport'] = 'Dane treningowe modelu nie mogły zostać wyeksportowane';
$string['evaluate'] = 'Oceń';
$string['evaluatemodel'] = 'Oceń model';
$string['evaluationinbatches'] = 'Zawartość strony jest obliczana i przechowywana w partiach. Proces oceny może zostać zatrzymany w dowolnym momencie. Przy kolejnym uruchomieniu będzie on kontynuowany od momentu, w którym został zatrzymany.';
$string['evaluationmodecolconfiguration'] = 'Konfiguracja';
$string['export'] = 'Eksportuj';
$string['exportmodel'] = 'Konfiguracja eksportu';
$string['exporttrainingdata'] = 'Wyeksportuj dane treningowe';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Błąd oceny. Kod statusu {$a}';
$string['goodmodel'] = 'Jest to dobry model do zastosowania w celu uzyskania prognoz. Włącz go, aby rozpocząć uzyskiwanie prognoz.';
$string['ignoreversionmismatches'] = 'Ignoruj niezgodności wersji';
$string['ignoreversionmismatchescheckbox'] = 'Zignoruj różnice między tą wersją witryny a oryginalną wersją witryny.';
$string['importmodel'] = 'Importuj model';
$string['indicators'] = 'Wskaźniki';
$string['indicatorsnum'] = 'Liczba wskaźników: {$a}';
$string['info'] = 'Info';
$string['insights'] = 'Spostrzeżenia';
$string['invalidanalysables'] = 'Nieprawidłowe elementy strony';
$string['invalidanalysablesinfo'] = 'Na tej stronie wymienione są elementy, które nie mogą być użyte w tym modelu predykcyjnym. Wymienione elementy nie mogą być wykorzystywane do szkolenia modelu predykcyjnego, ani też model predykcyjny nie może uzyskać dla nich przewidywań.';
$string['invalidanalysablestable'] = 'Nieprawidłowa tabela elementów, które można analizować';
$string['invalidprediction'] = 'Nie można uzyskać prognoz';
$string['invalidtraining'] = 'Nieważne, aby wyszkolić model';
$string['loginfo'] = 'Zapisz w dziennikach zdarzeń dodatkowe informacje';
$string['missingmoodleversion'] = 'Importowany plik nie definiuje numeru wersji';
$string['modelid'] = 'Identyfikator modelu';
$string['modelinvalidanalysables'] = 'Nieprawidłowe elementy do przeanalizowania dla modelu "{$a}"';
$string['modelname'] = 'Nazwa modelu';
$string['modelresults'] = 'Wyniki {$a}';
$string['modeltimesplitting'] = 'Podział czasu';
$string['newmodel'] = 'Nowy model';
$string['nextpage'] = 'Następna strona';
$string['nodatatoevaluate'] = 'Brak danych do oceny modelu';
$string['nodatatopredict'] = 'Brak nowych elementów do prognozowania';
$string['nodatatotrain'] = 'Nie ma nowych danych, które można wykorzystać do szkolenia';
$string['notdefined'] = 'Jeszcze nie zdefiniowane';
$string['pluginname'] = 'Modele analityczne';
$string['predictionprocessfinished'] = 'Zakończono proces prognozowania';
$string['predictionresults'] = 'Wyniki prognozy';
$string['predictmodels'] = 'Modele przewidywania';
$string['predictorresultsin'] = 'Przewidywacz zarejestrował informacje w katalogu {$a}';
$string['previouspage'] = 'Poprzednia strona';
$string['restoredefault'] = 'Przywróć modele domyślne';
$string['restoredefaultempty'] = 'Wybierz modele do przywrócenia.';
$string['sameenddate'] = 'Aktualna data zakończenia jest dobra';
$string['samestartdate'] = 'Aktualna data rozpoczęcia jest dobra';
$string['scheduledanalysisresults'] = 'Wyniki z wykorzystaniem podziału czasu trwania kursu {$a->name}';
$string['scheduledanalysisresultscli'] = 'Wyniki z wykorzystaniem podziału czasu trwania kursu {$a->name}  (id: {$a->id})';
$string['target'] = 'Cel';
$string['target_help'] = 'Celem jest to, co przewidzi model.';
$string['timesplittingnotdefined'] = 'Podział czasu nie jest zdefiniowany.';
$string['timesplittingnotdefined_help'] = 'Przed włączeniem modelu musisz wybrać metodę podziału czasu.';
$string['trainandpredictmodel'] = 'Trenowanie modelu i wyliczanie prognoz';
$string['trainingprocessfinished'] = 'Proces szkolenia zakończony';
$string['trainingresults'] = 'Wyniki treningu';
$string['trainmodels'] = 'Trenuj modele';
$string['versionnotsame'] = 'Importowany plik pochodził z innej wersji ({$a->importedversion}) niż bieżąca ({$a->version})';
$string['viewlog'] = 'Dziennik zdarzeń';
$string['weeksenddateautomaticallyset'] = 'Data zakończenia jest automatycznie ustawiana na podstawie daty rozpoczęcia i liczby sekcji';
$string['weeksenddatedefault'] = 'Data zakończenia jest automatycznie liczona od daty rozpoczęcia kursu.';
