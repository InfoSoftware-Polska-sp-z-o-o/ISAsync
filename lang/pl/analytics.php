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
 * Strings for component 'analytics', language 'pl', version '4.0'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyzowalne {$a->analysableid} nie jest używane: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyzowalne {$a->analysableid} nie jest poprawne dla tego celu: {$a->result}';
$string['analysisinprogress'] = 'Nadal analizowane przez poprzednie wykonanie';
$string['analytics'] = 'Analityka';
$string['analyticsdisabled'] = 'Analityka jest wyłączona. Możesz ją włączyć w "Administracji serwisu -> Zaawansowane funkcje".';
$string['analyticslogstore'] = 'Dzienniki zdarzeń używane do analityki';
$string['analyticslogstore_help'] = 'Dziennik zdarzeń, który będzie używany przez API analityki do odczytu aktywności użytkowników';
$string['analyticssettings'] = 'Ustawienia analityki';
$string['analyticssiteinfo'] = 'Informacje o stronie';
$string['calclifetime'] = 'Zachowaj obliczenia analityczne dla';
$string['defaultpredictionsprocessor'] = 'Domyślny procesor prognoz';
$string['defaultpredictoroption'] = 'Domyślny procesor ({$a})';
$string['defaulttimesplittingmethods'] = 'Domyślne przedziały analizy dla oceny modelu';
$string['disabledmodel'] = 'Model wyłączony';
$string['erroralreadypredict'] = 'Plik {$a} był już używany do generowania prognoz.';
$string['errorcannotreaddataset'] = 'Zbiór danych {$a} nie może być odczytany.';
$string['errorcannotusetimesplitting'] = 'Podanego interwału analizy nie można użyć w tym modelu.';
$string['errorcannotwritedataset'] = 'Zbiór danych {$a} nie może być zapisany.';
$string['errorexportmodelresult'] = 'Model uczenia maszynowego nie może być wyeksportowany.';
$string['errorimport'] = 'Błąd podczas importowania pliku JSON.';
$string['errorinvalidindicator'] = 'Nieprawidłowy wskaźnik {$a}';
$string['errorinvalidtarget'] = 'Nieprawidłowy cel {$a}';
$string['errorinvalidtimesplitting'] = 'Nieprawidłowy podział czasu; upewnij się, że dodano w pełni kwalifikowaną nazwę klasy.';
$string['errornoindicators'] = 'Ten model nie ma żadnych wskaźników.';
$string['errornopredictresults'] = 'Brak wyników zwróconych przez procesor prognoz. Sprawdź zawartość katalogu wyjściowego, aby uzyskać więcej informacji.';
$string['errornoroles'] = 'Role ucznia lub nauczyciela nie zostały zdefiniowane. Zdefiniuj je na stronie ustawień analityki.';
$string['errornotarget'] = 'Ten model nie ma żadnego celu.';
$string['errornotimesplittings'] = 'Ten model nie ma żadnej metody podziału czasu.';
$string['errorpredictioncontextnotavailable'] = 'Ten kontekst przewidywania nie jest już dostępny.';
$string['errorpredictionformat'] = 'Niepoprawny format obliczeń prognozowania';
$string['errorpredictionnotfound'] = 'Nie znaleziono prognozy';
$string['errorpredictionsprocessor'] = 'Błąd procesora prognoz: {$a}';
$string['errorpredictwrongformat'] = 'Nie można zdekodować wyników procesora prognoz: "{$a}"';
$string['errorprocessornotready'] = 'Wybrany procesor prognoz nie jest gotowy: {$a}';
$string['errorsamplenotavailable'] = 'Przewidywana próbka nie jest już dostępna';
$string['errorunexistingmodel'] = 'Nieistniejący model {$a}.';
$string['errorunexistingtimesplitting'] = 'Wybrana metoda podziału czasu nie jest dostępna.';
$string['errorunknownaction'] = 'Nieznane działanie';
$string['eventinsightsviewed'] = 'Wyświetlono spostrzeżenia';
$string['eventpredictionactionstarted'] = 'Rozpoczęto proces prognozowania';
$string['fixedack'] = 'Potwierdź';
$string['incorrectlyflagged'] = 'Niepoprawnie oflagowane';
$string['insightinfomessagehtml'] = 'System wygenerował dla Ciebie kilka spostrzeżeń.';
$string['insightinfomessageplain'] = 'System wygenerował dla Ciebie kilka spostrzeżeń: {$a}';
$string['insightmessagesubject'] = 'Nowe spostrzeżenia dla "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Nie możne być analizowany metodą dzielenia czasu {$a}.';
$string['invalidtimesplitting'] = 'Model o identyfikatorze {$a} wymaga metody dzielenia czasu, zanim będzie można go wykorzystać do szkolenia.';
$string['levelinstitution'] = 'Poziom kształcenia';
$string['levelinstitutionisced0'] = 'Edukacja przedszkolna („niższa niż podstawowa”)';
$string['levelinstitutionisced1'] = 'Edukacja podstawowa';
$string['levelinstitutionisced2'] = 'Szkolnictwo podstawowe (7-8)';
$string['levelinstitutionisced3'] = 'Szkolnictwo ponapodstawowe';
$string['levelinstitutionisced4'] = 'Szkolnictwo policealne (może obejmować szkolenia korporacyjne lub społeczne/organizacje pozarządowe)';
$string['levelinstitutionisced5'] = '';
$string['levelinstitutionisced6'] = 'Poziom licencjata lub równoważny';
$string['levelinstitutionisced7'] = 'Poziom magistra lub równoważny';
$string['levelinstitutionisced8'] = 'Poziom doktora lub równoważny';
$string['modeinstruction'] = 'Sposoby kształcenia';
$string['modeinstructionblendedhybrid'] = 'Mieszany lub hybrydowy';
$string['modeinstructionfacetoface'] = 'Stacjonarny';
$string['modeinstructionfullyonline'] = 'W pełni online';
$string['modeloutputdir'] = 'Katalog wyjściowy modeli';
$string['modeloutputdirinfo'] = 'Katalog, w którym procesory prognozowania przechowują wszystkie informacje ewaluacyjne. Przydatny do debugowania i badań.';
$string['modeltimelimit'] = 'Limit czasu analizy na model';
$string['modeltimelimitinfo'] = 'To ustawienie ogranicza czas, jaki każdy model spędza na analizowaniu zawartości witryny.';
$string['neutral'] = 'Neutralny';
$string['neverdelete'] = 'Nigdy nie usuwaj obliczeń';
$string['nocourses'] = 'Brak kursów do analizy';
$string['nodata'] = 'Brak danych do analizy';
$string['noevaluationbasedassumptions'] = 'Modele oparte na założeniach nie mogą być oceniane.';
$string['noinsights'] = 'Brak zgłoszonych spostrzeżeń';
$string['noinsightsmodel'] = 'Ten model nie generuje spostrzeżeń';
$string['nonewdata'] = 'Brak nowych danych. Model zostanie przeanalizowany po kolejnym interwale analizy.';
$string['nonewranges'] = 'Brak nowych prognoz. Model zostanie przeanalizowany po kolejnym interwale analizy.';
$string['nopredictionsyet'] = 'Brak dostępnych prognoz';
$string['noranges'] = 'Aktualnie brak prognoz';
$string['notapplicable'] = 'Nie dotyczy';
$string['notrainingbasedassumptions'] = 'Modele oparte na założeniach nie wymagają szkolenia';
$string['notuseful'] = 'Nieprzydatne';
$string['novaliddata'] = 'Brak ważnych danych';
$string['novalidsamples'] = 'Brak dostępnych ważnych próbek';
$string['onlycli'] = 'Wykonywanie procesów analitycznych wyłącznie za pośrednictwem wiersza poleceń.';
$string['onlycliinfo'] = 'Procesy analityczne, takie jak ewaluacja modeli, trenowanie algorytmów maszynowego uczenia się lub uzyskiwanie prognoz mogą zająć trochę czasu. Będą działać jako zadania cron i mogą być wymuszane przez linię poleceń. Wyłącz to ustawienie, jeśli chcesz, aby menedżerowie witryny mogli uruchamiać te procesy ręcznie za pomocą interfejsu internetowego';
$string['percentonline'] = 'Procent online';
$string['percentonline_help'] = 'Jeśli Twoja organizacja oferuje kursy mieszane lub hybrydowe, określ  jaki procent pracy studentów odbywa się online w Moodle? Wpisz liczbę od 0 do 100.';
$string['predictionsprocessor'] = 'Procesor prognoz';
$string['predictionsprocessor_help'] = 'Procesor prognoz jest mechanizmem uczenia maszynowego, który przetwarza zbiory danych generowane przez obliczanie wskaźników i celów modeli. Wszystkie wyszkolone algorytmy i prognozy zostaną usunięte po zmianie na inny procesor predykcji.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Obliczenia wskaźników';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Kontekst';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Czas zakończenia obliczeń';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Przykładowy identyfikator';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Czas rozpoczęcia obliczeń';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Kiedy dokonano prognozy';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Wartość obliczona';
$string['privacy:metadata:analytics:predictionactions'] = 'Działania prognostyczne';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Nazwa działania';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Identyfikator prognozy';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Po wykonaniu działania prognozy';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Użytkownik, który wykonał działanie';
$string['privacy:metadata:analytics:predictions'] = 'Prognozy';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Obliczenia wskaźników';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Kontekst';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Identyfikator modelu';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Prognoza';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Wynik prognozy';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indeks interwału analizy';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Przykładowy identyfikator';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Kiedy dokonano prognozy';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Zakończenie obliczeń';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Rozpoczęcie obliczeń';
$string['processingsitecontents'] = 'Przetwarzanie treści witryny';
$string['successfullyanalysed'] = 'Pomyślnie przeanalizowano';
$string['timesplittingmethod'] = 'Interwał analizy';
$string['timesplittingmethod_help'] = 'Metoda podziału czasu dzieli czas trwania kursu na części; silnik prognoz będzie działał na końcu tych części. Zaleca się włączenie tylko tych metod dzielenia czasu, które mogą być interesujące. Proces ewaluacji będzie iterować za pomocą wszystkich dostępnych metod, więc im więcej metod podziału czasu zostanie włączonych, tym wolniejszy będzie proces oceny.';
$string['typeinstitution'] = 'Rodzaj instytucji';
$string['typeinstitutionacademic'] = 'Uczelnia';
$string['typeinstitutionngo'] = 'Organizacja pozarządowa (NGO)';
$string['typeinstitutiontraining'] = 'Szkolenie firmowe';
$string['useful'] = 'Przydatny';
$string['viewdetails'] = 'Zobacz szczegóły';
$string['viewinsight'] = 'Przeglądaj spostrzeżenia';
$string['viewinsightdetails'] = 'Przeglądaj szczegóły spostrzeżeń';
$string['viewprediction'] = 'Wyświetl szczegóły prognozy';
$string['washelpful'] = 'Czy było to pomocne?';
