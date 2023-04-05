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
 * Strings for component 'tool_uploadcourse', language 'pl', version '4.0'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Zezwalaj na usuwanie';
$string['allowdeletes_help'] = 'Określa, czy usuwanie pola jest akceptowane, czy nie.';
$string['allowrenames'] = 'Zezwalaj na zmianę nazwy';
$string['allowrenames_help'] = 'Określa, czy zmiana nazwy pola jest akceptowane, czy nie.';
$string['allowresets'] = 'Zezwalaj na resetowanie';
$string['allowresets_help'] = 'Określa, czy resetowanie pola jest akceptowane, czy nie.';
$string['cannotdeletecoursenotexist'] = 'Nie można usunąć kursu, który nie istnieje';
$string['cannotforcelang'] = 'Brak uprawnień do wymuszenia języka dla tego kursu';
$string['cannotgenerateshortnameupdatemode'] = 'Nie można wygenerować nazwy skróconej, gdy aktualizacja jest dozwolona';
$string['cannotreadbackupfile'] = 'Nie można odczytać pliku kopii zapasowej';
$string['cannotrenamecoursenotexist'] = 'Nie można zmienić nazwy kursu, który nie istnieje';
$string['cannotrenameidnumberconflict'] = 'Nie można zmienić nazwy kursu, identyfikator koliduje z isniejącym kursem';
$string['cannotrenameshortnamealreadyinuse'] = 'Nie można zmienić nazwy kursu, nazwa skrócona jest już używana';
$string['cannotupdatefrontpage'] = 'Zmiany pierwszej strony jest zabroniona';
$string['canonlyrenameinupdatemode'] = 'Można zmienić nazwę kursu tylko wtedy, gdy aktualizacja jest dozwolona';
$string['canonlyresetcourseinupdatemode'] = 'W trybie aktualizacji można tylko resetować kurs';
$string['couldnotresolvecatgorybyid'] = 'Nie można rozpoznać kategorii po ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Nie można rozpoznać kategorii po numerze ID';
$string['couldnotresolvecatgorybypath'] = 'Nie można rozpoznać kategorii po ścieżce';
$string['coursecreated'] = 'Kurs utworzony';
$string['coursedeleted'] = 'Kurs usunięty';
$string['coursedeletionnotallowed'] = 'Usuwanie kursu nie jest dozwolone';
$string['coursedoesnotexistandcreatenotallowed'] = 'Kurs nie istnieje, a tworzenie kursu nie jest dozwolone';
$string['courseexistsanduploadnotallowed'] = 'Kurs istnieje i zmiana nie jest dozwolona';
$string['coursefile'] = 'Plik';
$string['coursefile_help'] = 'Plik ten musi być plikiem CSV.';
$string['courseidnumberincremented'] = 'Zwiększenie numeru ID kursu: {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Przetwarzanie kursu';
$string['courserenamed'] = 'Nazwa kursu została zmieniona';
$string['courserenamingnotallowed'] = 'Zmiana nazwy kursu nie jest dozwolone';
$string['coursereset'] = 'Reset Course';
$string['courseresetnotallowed'] = 'Resetowanie kursu jest teraz dozwolone';
$string['courserestored'] = 'Kurs przywrócony';
$string['coursescreated'] = 'Kursy utworzone: {$a}';
$string['coursesdeleted'] = 'Kursy usunięte: {$a}';
$string['courseserrors'] = 'Błędy kursu: {$a}';
$string['courseshortnamegenerated'] = 'Wygenerowana nazwa skrócona kursu: {$a}';
$string['courseshortnameincremented'] = 'Zwiększenie skróconej nazwy kursu {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Wszystkich kursów: {$a}';
$string['coursesupdated'] = 'Zaktualizowane kursy: {$a}';
$string['coursetemplatename'] = 'Po przesłaniu przywróć z tego kursu';
$string['coursetemplatename_help'] = 'Wprowadź skróconą nazwę istniejącego kursu, aby użyć jej jako szablonu do tworzenia wszystkich kursów.';
$string['coursetorestorefromdoesnotexist'] = 'Kurs do przywrócenia z nie istnieje';
$string['courseupdated'] = 'Kurs zaktualizowany';
$string['createall'] = 'Utwórz wszystkie, w razie potrzeby zmień nazwę skróconą';
$string['createnew'] = 'Utwórz tylko nowe kursy, pomiń istniejące';
$string['createorupdate'] = 'Utwórz nowe kursy lub uaktualinij istniejące';
$string['csvdelimiter'] = 'Separator pliku CSV';
$string['csvdelimiter_help'] = 'Znak oddzielający serię danych w każdym rekordzie.';
$string['csvfileerror'] = 'Wystąpił problem z plikiem CSV. Sprawdź liczbę nagłówków i kolumn oraz czy separator i kodowanie pliku jest poprawne: {$a}';
$string['csvline'] = 'Linia';
$string['customfieldinvalid'] = 'Niestandardowe pole \'{$a}\' jest puste lub zawiera nieprawidłowe dane';
$string['defaultvalues'] = 'Domyślne wartości kursu';
$string['defaultvaluescustomfieldcategory'] = 'Wartości domyślne dla \'{$a}\'';
$string['encoding'] = 'Kodowanie';
$string['encoding_help'] = 'Kodowanie pliku CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Nie można utworzyć lub zaktualizować metody rejestracji \'{$a}\'';
$string['errorcannotdeleteenrolment'] = 'Nie można usunąć metody zapisów \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Nie można wyłączyć metody rejestracji \'{$a}\'';
$string['errorwhiledeletingcourse'] = 'Błąd podczas usuwania kursu';
$string['errorwhilerestoringcourse'] = 'Błąd podczas przywracania kursu';
$string['generatedshortnamealreadyinuse'] = 'Wygenerowana krótka nazwa jest już wykorzystywana';
$string['generatedshortnameinvalid'] = 'Wygenerowana krótka nazwa jest niepoprawna';
$string['id'] = 'Identyfikator';
$string['idnumberalreadyinuse'] = 'Numer identyfikatora jest już używany przez kurs';
$string['importoptions'] = 'Opcje importu';
$string['invalidbackupfile'] = 'Nieprawidłowy plik kopii zapasowej';
$string['invalidcourseformat'] = 'Nieprawidłowy format kursu';
$string['invalidcsvfile'] = 'Nieprawidłowy wejściowy plik CSV';
$string['invalidencoding'] = 'Nieprawidłowe kodowanie';
$string['invalideupdatemode'] = 'Wybrano nieprawidłowy tryb aktualizacji';
$string['invalidfullnametoolong'] = 'Pole długiej nazwy jest ograniczone do {$a} znaków';
$string['invalidmode'] = 'Wybrano nieprawidłowy tryb';
$string['invalidroles'] = 'Nieprawidłowe nazwy ról: {$a}';
$string['invalidshortname'] = 'Nieprawidłowa krótka nazwa';
$string['invalidshortnametoolong'] = 'Pole krótkiej nazwy jest ograniczone do {$a} znaków';
$string['missingmandatoryfields'] = 'Brak wartości dla obowiązkowych pól: {$a}';
$string['missingshortnamenotemplate'] = 'Brak krótkiej nazwy i jej szablonu';
$string['mode'] = 'Tryb przesyłania';
$string['mode_help'] = 'Pozwala to określić, czy kursy mogą być tworzone i/lub aktualizowane.';
$string['nochanges'] = 'Brak zmian';
$string['pluginname'] = 'Prześlij kurs';
$string['preview'] = 'Podgląd';
$string['privacy:metadata'] = 'Wtyczka przesyłająca kursy nie przechowuje żadnych danych osobowych.';
$string['reset'] = 'Po przesłaniu zresetuj kurs';
$string['reset_help'] = 'Czy zresetować kurs po jego utworzeniu/aktualizacji?';
$string['restoreafterimport'] = 'Przywróć po imporcie';
$string['result'] = 'Wynik';
$string['rowpreviewnum'] = 'Podgląd wierszy';
$string['rowpreviewnum_help'] = 'Liczba wierszy w pliku CSV, które będą przeglądane na następnej stronie. Ta opcja ogranicza rozmiar następnej strony.';
$string['shortnametemplate'] = 'Szablon do wygenerowania krótkiej nazwy';
$string['shortnametemplate_help'] = 'Krótka nazwa kursu jest wyświetlana w nawigacji. Możesz tu użyć składni szablonu (%f = fullname, %i = idnumber) lub wprowadzić wartość początkową, która jest automatycznie zwiększana o jeden.';
$string['templatefile'] = 'Po przesłaniu przywróć z tego pliku';
$string['templatefile_help'] = 'Wybierz plik, który będzie używany jako szablon do tworzenia wszystkich kursów.';
$string['unknownimportmode'] = 'Nieznany tryb importu';
$string['updatemissing'] = 'Uzupełnij brakujące elementy w danych CSV i ustawieniach domyślnych';
$string['updatemode'] = 'Tryb aktualizacji';
$string['updatemodedoessettonothing'] = 'Tryb aktualizacji nie pozwala na aktualizację';
$string['updateonly'] = 'Zaktualizuj tylko istniejące kursy';
$string['updatewithdataonly'] = 'Aktualizuj tylko z danych CSV';
$string['updatewithdataordefaults'] = 'Zaktualizuj danymi i wartościami domyślnymi z pliku CSV';
$string['uploadcourses'] = 'Prześlij kursy';
$string['uploadcourses_help'] = 'Kursy mogą być przesyłane za pośrednictwem pliku tekstowego. Format pliku powinien wyglądać następująco:

* Każda linia pliku zawiera jeden rekord
* Każdy rekord jest serią danych oddzielonych przecinkami (lub innymi separatorami)
* Pierwszy rekord zawiera listę nazw pól określających format pozostałej części pliku
* Wymagane nazwy pól pierwszego rekordu to shortname, fullname i category';
$string['uploadcoursespreview'] = 'Prześlij podgląd kursów';
$string['uploadcoursesresult'] = 'Prześlij wyniki kursów';
