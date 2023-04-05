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
 * Strings for component 'tool_uploaduser', language 'pl', version '4.0'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Zezwól na usuwanie';
$string['allowrenames'] = 'Dopuść zmiany nazw';
$string['allowsuspends'] = 'Zezwól na zawieszanie i aktywację kont';
$string['assignedsysrole'] = 'Przypisana rola systemowa {$a}';
$string['clidefault'] = 'Domyślne:';
$string['clifile'] = 'Ścieżka do pliku CSV z danymi użytkownika. Wymagane.';
$string['clifilenotreadable'] = 'Plik {$a} nie istnieje lub nie można go odczytać';
$string['clihelp'] = 'Wydrukuj tę pomoc.';
$string['climissingargument'] = 'Argument --{$a} jest wymagany';
$string['clivalidationerror'] = 'Błąd walidacji:';
$string['csvdelimiter'] = 'Separator pliku CSV';
$string['defaultvalues'] = 'Domyślne wartości';
$string['deleteerrors'] = 'Usuń błędy';
$string['encoding'] = 'Kodowanie';
$string['errormnetadd'] = 'Nie można dodać zdalnych użytkowników';
$string['errorprefix'] = 'Błąd:';
$string['errors'] = 'Błędy';
$string['examplecsv'] = 'Przykładowy plik tekstowy';
$string['infoprefix'] = 'Informacja:';
$string['invalidupdatetype'] = 'Ta opcja nie może zostać wybrana z wybranym typem przesyłania.';
$string['invaliduserdata'] = 'Wykryto nieprawidłowe dane dla użytkownika {$a} i zostały one automatycznie wyczyszczone.';
$string['linex'] = 'Linia {$a}';
$string['nochanges'] = 'Bez zmian';
$string['notheme'] = 'Nie zdefiniowano szaty graficznej dla tego użytkownika.';
$string['pluginname'] = 'Użytkownik przesłany';
$string['privacy:metadata'] = 'Wtyczka do przesyłania użytkownika nie przechowuje żadnych danych osobowych.';
$string['renameerrors'] = 'Przemianowane błędy';
$string['requiredtemplate'] = 'Wymagane. Możesz użyć następującej składni: %l = nazwisko (lastname), %f = imię (firstname), %u = nazwa użytkownika (username). Zobacz w helpie szczegółowe przykłady.';
$string['rowpreviewnum'] = 'Podgląd wierszy';
$string['uploadpicture_baduserfield'] = 'Określony atrybut użytkownika nie jest poprawny. Prosimy spróbować ponownie.';
$string['uploadpicture_cannotmovezip'] = 'Nie można przenieść pliku zip do katalogu tymczasowego.';
$string['uploadpicture_cannotprocessdir'] = 'Nie można przetworzyć rozpakowanych plików.';
$string['uploadpicture_cannotsave'] = 'Nie można zapisać obrazu dla użytkownika {$a}. Sprawdź oryginalny obraz.';
$string['uploadpicture_cannotunzip'] = 'Nie można rozpakować archiwum z obrazami';
$string['uploadpicture_invalidfilename'] = 'Plik obrazu {$a} posiada niewłaściwe znaki w swojej nazwie. Pominięto.';
$string['uploadpicture_overwrite'] = 'Nadpisać istniejący obraz użytkownika?';
$string['uploadpicture_userfield'] = 'Wybierz atrybut użytkownika odpowiadający nazwom obrazów:';
$string['uploadpicture_usernotfound'] = 'Użytkownik z \'{$a->userfield}\' o wartości  \'{$a->uservalue}\' nie istnieje. Pominięto.';
$string['uploadpicture_userskipped'] = 'Pominięto użytkownika {$a} który już posiada obraz.';
$string['uploadpicture_userupdated'] = 'Uaktualniono obraz dla użytkownika {$a}.';
$string['uploadpictures'] = 'Wysyłanie obrazów użytkowników';
$string['uploadpictures_help'] = 'Zdjęcia użytkowników mogą być przesłane jako skompresowany plik zip zawierający wiele plików graficznych. Pliki graficzne powinny być nazwane następująco: wybrany-użytkownik-atrybut.rozszerzenie, na przykład user1234.jpg dla użytkownika o nazwie user1234.';
$string['uploaduser:uploaduserpictures'] = 'Prześlij zdjęcia użytkownika';
$string['uploadusers'] = 'Prześlij użytkowników';
$string['uploadusers_help'] = 'Użytkownicy mogą być przesyłani (i opcjonalnie zapisani do kursów) za pośrednictwem pliku tekstowego. Format pliku powinien wyglądać następująco:

* Każdy wiersz pliku zawiera jeden rekord
* Każdy rekord to seria danych oddzielonych przecinkami (lub innymi ogranicznikami)
* Pierwszy rekord zawiera listę nazw pól definiujących format reszty pliku
* Wymagane nazwy pól to: username, password, firstname, lastname, email';
$string['uploaduserspreview'] = 'Podgląd użytkowników do przesłania';
$string['uploadusersresult'] = 'Rezultaty przesyłania użytkowników';
$string['useraccountupdated'] = 'Użytkownik uaktualniony';
$string['useraccountuptodate'] = 'Użytkownik zaktualizowny';
$string['userdeleted'] = 'Użytkownik usunięty';
$string['userrenamed'] = 'Użytkownicy ze zmieniąną nazwą';
$string['userscreated'] = 'Użytkownicy utworzeni';
$string['usersdeleted'] = 'Użytkownicy skasowani';
$string['usersrenamed'] = 'Użytkownicy ze zmieniąną nazwą';
$string['usersskipped'] = 'Użytkownicy pominięci';
$string['usersupdated'] = 'Użytkownicy uaktualnieni';
$string['usersweakpassword'] = 'Użytkownicy posiadający za słabe hasła';
$string['uubulk'] = 'Wybierz do operacji na wielu użytkownikach';
$string['uubulkall'] = 'Wszyscy użytkownicy';
$string['uubulknew'] = 'Nowi użytkownicy';
$string['uubulkupdated'] = 'Uaktualnieni użytkownicy';
$string['uucsvline'] = 'Linia CSV';
$string['uulegacy1role'] = '(Domyślnie Student) typeN=1';
$string['uulegacy2role'] = '(Domyślnie Nauczyciel) typeN=2';
$string['uulegacy3role'] = '(Domyślnie Prowadzący bez prawa edycji) typeN=3';
$string['uunoemailduplicates'] = 'Zapobiegaj duplikowaniu adresów email';
$string['uuoptype'] = 'Typ wysyłania';
$string['uuoptype_addinc'] = 'Dodaj wszystkich, dodaj numer do nazwy użytkownika jeśli jest to konieczne';
$string['uuoptype_addnew'] = 'Dodaj nowego i pomiń istniejących użytkowników';
$string['uuoptype_addupdate'] = 'Dodaj nowego i uaktualnij istniejących użytkowników';
$string['uuoptype_update'] = 'Uaktualnij tylko istniejących użytkowników';
$string['uupasswordcron'] = 'Wygenerowano w cronie';
$string['uupasswordnew'] = 'Hasło nowego użytkownika';
$string['uupasswordold'] = 'Hasło istniejącego użytkownika';
$string['uustandardusernames'] = 'Ujednolicona nazwa użytkownika';
$string['uuupdateall'] = 'Nadpisz według pliku i wartościami domyślnymi';
$string['uuupdatefromfile'] = 'Nadpisz według pliku';
$string['uuupdatemissing'] = 'Uzupełnij według pliku i wartościami domyślnymi';
$string['uuupdatetype'] = 'Dodatkowe informacje na temat istniejącego użytkownika';
$string['uuusernametemplate'] = 'Szablon nazwy użytkownika';
$string['warningprefix'] = 'Ostrzeżenie:';
