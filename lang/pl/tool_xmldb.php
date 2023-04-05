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
 * Strings for component 'tool_xmldb', language 'pl', version '4.0'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Aktualny';
$string['aftertable'] = 'Po tabeli:';
$string['back'] = 'Powrót';
$string['backtomainview'] = 'Powrót do strony głównej';
$string['cannotuseidfield'] = 'Nie można wstawić pola "ID". To jest kolumna autonumerowana.';
$string['change'] = 'Zmień';
$string['charincorrectlength'] = 'Nieprawidłowa długość pola typu char';
$string['check_bigints'] = 'Szukaj błędnych liczb całkowitych w bazie';
$string['check_defaults'] = 'Sprawdź niespójne wartości domyślne';
$string['check_foreign_keys'] = 'Sprawdzić naruszenia kluczy obcych';
$string['check_indexes'] = 'Poszukaj brakujących indeksów DB';
$string['check_oracle_semantics'] = 'Sprawdzić semantykę nieprawidłowych długości';
$string['checkbigints'] = 'Sprawdź bigint';
$string['checkdefaults'] = 'Sprawdź ustawienia domyślne';
$string['checkforeignkeys'] = 'Sprawdź klucze obce';
$string['checkindexes'] = 'Sprawdź indeksy';
$string['checkoraclesemantics'] = 'Sprawdź semantykę Oracle';
$string['completelogbelow'] = '(Zobacz poniżej pełen rejestr zdarzeń wyszukiwania)';
$string['confirmcheckbigints'] = 'Ta funkcja wyszuka <a href="http://tracker.moodle.org/browse/MDL-11038">potencjalne błędne pola całkowite</a> na serwerze Moodle i automatycznie utworzy (ale nie wykona!) instrukcje SQL, aby wszystkie liczby całkowite w twojej bazie były poprawnie zdefiniowane. <br /><br />
Gdy takie instrukcje są już wygenerowane, można  je skopiować  i wykonać je bezpiecznie w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych). <br /><br />
Jest bardzo zalecane, aby mieć najnowszą wersję Moodle (ze znakiem + ) (1.8, 1.9, 2.x ...) przed wykonaniem wyszukiwania błędnych pól całkowitych. <br /><br />
Funkcja ta nie wykonuje żadnych zmian w bazie (tylko odczyt), więc może być bezpiecznie wykonana w każdej chwili.';
$string['confirmcheckdefaults'] = 'Funkcja ta wyszuka sprzeczne wartości domyślnych na serwerze Moodle i utworzy (lecz nie wykona!) instrukcje SQL, które właściwie określą wszystkie wartości domyślne. <br /><br />
Gdy takie instrukcje są już wygenerowane, można  je skopiować  i wykonać je bezpiecznie w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych). <br /><br />
Jest bardzo zalecane, aby mieć najnowszą wersję Moodle (ze znakiem + ) (1.8, 1.9, 2.x ...) przed wykonaniem wyszukiwania niespójnych wartości domyślnych.<br /><br />
Funkcja ta nie wykonuje żadnych zmian w bazie (tylko odczyt), więc może być bezpiecznie wykonana w każdej chwili.';
$string['confirmcheckforeignkeys'] = 'Funkcja ta wyszuka potencjalne naruszenia kluczy obcych określonych w install.xml. (Moodle obecnie nie generuje rzeczywistych ograniczeń (constraints) na klucz obcy w bazie danych, dlatego nieprawidłowe dane mogą wystąpić.)  <br /><br />
Jest bardzo zalecane, aby mieć najnowszą wersję Moodle (ze znakiem + ) (1.8, 1.9, 2.x ...) przed wykonaniem wyszukiwania niespójnych wartości domyślnych.<br /><br />
Funkcja ta nie wykonuje żadnych zmian w bazie (tylko odczyt), więc może być bezpiecznie wykonana w każdej chwili.';
$string['confirmcheckindexes'] = 'Funkcja ta wyszuka potencjalne brakujące indeksy na serwerze Moodle i utworzy (lecz nie wykona!) instrukcje SQL, które je odpowiednio zaktualizują. <br /><br />
Gdy takie instrukcje są już wygenerowane, można  je skopiować  i wykonać je bezpiecznie w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych). <br /><br />
Jest bardzo zalecane, aby mieć najnowszą wersję Moodle (ze znakiem + ) (1.8, 1.9, 2.x ...) przed wykonaniem wyszukiwania niespójnych wartości domyślnych.<br /><br />
Funkcja ta nie wykonuje żadnych zmian w bazie (tylko odczyt), więc może być bezpiecznie wykonana w każdej chwili.';
$string['confirmcheckoraclesemantics'] = 'Ta funkcja wyszuka <a href="http://tracker.moodle.org/browse/MDL-29322">kolumny Oracle typu varchar2 używające semantyki BYTE</a> na serwerze Moodle i automatycznie utworzy (ale nie wykona!) instrukcje SQL, które skonwertują te kolumny na  semantykę CHAR (co jest lepsze dla zgodności między systemami baz danych i zwiększa max. długość). <br /><br />
Gdy takie instrukcje są już wygenerowane, można  je skopiować  i wykonać je bezpiecznie w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych). <br /><br />
Jest bardzo zalecane, aby mieć najnowszą wersję Moodle (ze znakiem + ) (1.8, 1.9, 2.x ...) przed wykonaniem wyszukiwania błędnych pól całkowitych. <br /><br />
Funkcja ta nie wykonuje żadnych zmian w bazie (tylko odczyt), więc może być bezpiecznie wykonana w każdej chwili.';
$string['confirmdeletefield'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć pole:';
$string['confirmdeleteindex'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć index:';
$string['confirmdeletekey'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć klucz:';
$string['confirmdeletetable'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć tabelę:';
$string['confirmdeletexmlfile'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć plik:';
$string['confirmrevertchanges'] = 'Czy jesteś absolutnie pewien, że chcesz przywrócić stan sprzed zmian wykonanych na:';
$string['create'] = 'Utwórz';
$string['createtable'] = 'Utwórz tabelę:';
$string['defaultincorrect'] = 'Nieprawidłowa wartość domyślna';
$string['delete'] = 'Usuń';
$string['delete_field'] = 'Usuń pole';
$string['delete_index'] = 'Usuń indeks';
$string['delete_key'] = 'Usuń klucz';
$string['delete_table'] = 'Usuń tabelę';
$string['delete_xml_file'] = 'Usuń plik XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Indeks dokumentacji:';
$string['documentationintro'] = 'Dokumentacja ta jest generowana automatycznie na podstawie definicji bazy danych XMLDB. Jest dostępna jedynie w języku angielskim.';
$string['down'] = 'W dół';
$string['duplicate'] = 'Duplikat';
$string['duplicatefieldname'] = 'Istnieje inne pole o takiej nazwie';
$string['duplicatefieldsused'] = 'Powtórzone pole';
$string['duplicateindexname'] = 'Powtórzona nazwa indeksu';
$string['duplicatekeyname'] = 'Istnieje inny klucz o takiej nazwie';
$string['duplicatetablename'] = 'Istnieje inna tabela o takiej nazwie';
$string['edit'] = 'Edytuj';
$string['edit_field'] = 'Edytuj pole';
$string['edit_field_save'] = 'Zapisz pole';
$string['edit_index'] = 'Edytuj index';
$string['edit_index_save'] = 'Zapisz indeks';
$string['edit_key'] = 'Edytuj klucz';
$string['edit_key_save'] = 'Zapisz klucz';
$string['edit_table'] = 'Edytuj tabelę';
$string['edit_table_save'] = 'Zapisz tabelę';
$string['edit_xml_file'] = 'Edytuj plik XML';
$string['enumvaluesincorrect'] = 'Nieprawidłowe wartości pola wyliczeniowego';
$string['expected'] = 'Oczekiwano';
$string['extensionrequired'] = 'Przepraszamy - rozszerzenie PHP \'{$a}\' jest wymagane dla tej akcji. Proszę zainstalować rozszerzenie, jeżeli chcesz korzystać z tej funkcji.';
$string['extraindexesfound'] = 'Znaleziono dodatkowe indeksy';
$string['field'] = 'Pole';
$string['fieldnameempty'] = 'Pusta nazwa pola';
$string['fields'] = 'Pola';
$string['fieldsnotintable'] = 'Pole nie istnieje w tabeli';
$string['fieldsusedinindex'] = 'To pole jest używane jako indeks';
$string['fieldsusedinkey'] = 'To pole używane jest jako klucz.';
$string['filenotwriteable'] = 'Plik nie jest zapisywalny';
$string['fkviolationdetails'] = 'Klucz obcy {$a->keyname} w tabeli {$a->tablename} jest naruszany przez {$a->numviolations} z {$a->numrows} wierszy.';
$string['float2numbernote'] = 'Wskazówka: Pomimo że pola typu &quot;float&quot; są w 100% obsługiwane przez XMLDB, zaleca się zmianę na typ &quot;number&quot;.';
$string['floatincorrectdecimals'] = 'Nieprawidłowa liczba miejsc dziesiętnych dla pola typu float';
$string['floatincorrectlength'] = 'Nieprawidłowa długość pola typu float';
$string['generate_all_documentation'] = 'Pełna dokumentacja';
$string['generate_documentation'] = 'Dokumentacja';
$string['gotolastused'] = 'Przejdź do ostatnio używanego pliku';
$string['incorrectfieldname'] = 'Niepoprawna nazwa';
$string['incorrectindexname'] = 'Niepoprawna nazwa indeksu';
$string['incorrectkeyname'] = 'Niepoprawna nazwa klucza';
$string['incorrecttablename'] = 'Niepoprawna nazwa tabeli';
$string['index'] = 'Indeks';
$string['indexes'] = 'Indeksy';
$string['indexnameempty'] = 'Nazwa indeksu jest pusta';
$string['integerincorrectlength'] = 'Nieprawidłowa długość pola integer';
$string['key'] = 'Klucz';
$string['keynameempty'] = 'Nazwa klucza nie może być pusta';
$string['keys'] = 'Klucze';
$string['listreservedwords'] = 'Lista słów zastrzeżonych <br /> (wykorzystywana do uaktualniania <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> )';
$string['load'] = 'Załaduj';
$string['main_view'] = 'Główny widok';
$string['masterprimaryuniqueordernomatch'] = 'Pola w twoim kluczu obcego muszą być wymienione w tej samej kolejności, w jakiej są wymienione w UNIQUE KEY na odpowiedniej tabeli.';
$string['missing'] = 'Brakuje';
$string['missingindexes'] = 'Znaleziono brakujące indeksy';
$string['mustselectonefield'] = 'Należy wybrać jedno pole, aby wyświetlić działania  związane z polami!';
$string['mustselectoneindex'] = 'Należy wybrać jeden indeks, aby wyświetlić działania  związane z indeksami!';
$string['mustselectonekey'] = 'Należy wybrać jeden klucz, aby wyświetlić działania  związane z kluczami!';
$string['new_table_from_mysql'] = 'Nowa tabela z MySQL';
$string['newfield'] = 'Nowe pole';
$string['newindex'] = 'Nowy indeks';
$string['newkey'] = 'Nowy klucz';
$string['newtable'] = 'Nowa tabela';
$string['newtablefrommysql'] = 'Nowa tabela z MySQL';
$string['nofieldsspecified'] = 'Nie określono pól';
$string['nomasterprimaryuniquefound'] = 'Kolumna, do której odnosi się twój klucz obcy, musi być częścią podstawowego lub unikalnego klucza we wskazanej tabeli. Uwaga, nie wystarczy, że kolumna jest UNIQUE INDEX';
$string['nomissingorextraindexesfound'] = 'Nie znaleziono brakujących ani dodatkowych indeksów, więc nie są wymagane żadne dalsze działania.';
$string['noreffieldsspecified'] = 'Nie określono pól odnośników';
$string['noreftablespecified'] = 'Nie znaleziono tabeli, do której się odwołano';
$string['noviolatedforeignkeysfound'] = 'Nie znaleziono naruszonych kluczy obcych';
$string['nowrongdefaultsfound'] = 'Nie znaleziono sprzecznych wartości domyślnych, twoja baza nie wymaga dalszych działań.';
$string['nowrongintsfound'] = 'Nie znaleziono błędnych pól całkowitych, twoja baza nie wymaga dalszych działań.';
$string['nowrongoraclesemanticsfound'] = 'Nie znaleziono kolumn Oracle z semantyką BYTE, twoja baza nie wymaga dalszych działań.';
$string['numberincorrectdecimals'] = 'Nieprawidłowa liczba miejsc dziesiętnych dla pola liczbowego';
$string['numberincorrectlength'] = 'Nieprawidłowa długość pola liczbowego';
$string['numberincorrectwholepart'] = 'Zbyt duża liczba całkowita dla pola liczbowego';
$string['pendingchanges'] = 'Uwaga: Użytkownik wykonał zmiany w tym pliku. Mogą być zapisane w każdej chwili.';
$string['pendingchangescannotbesaved'] = 'Dokonano zmian w tym pliku, ale nie mogą one być zapisane! Proszę sprawdzić, że zarówno katalog jak i umieszczony w nim plik "install.xml" mają uprawnienia do zapisu na serwerze WWW.';
$string['pendingchangescannotbesavedreload'] = 'Dokonano zmian w tym pliku, ale nie mogą one być zapisane! Proszę sprawdzić, że zarówno katalog jak i umieszczony w nim plik "install.xml" mają uprawnienia do zapisu na serwerze WWW. Następnie załaduj ponownie tę stronę i powinieneś być w stanie zapisać te zmiany.';
$string['persistentfieldscomplete'] = 'Dodano następujące pola:';
$string['persistentfieldsconfirm'] = 'Czy chcesz dodać następujące pola:';
$string['persistentfieldsexist'] = 'Następujące pola już istnieją:';
$string['pluginname'] = 'Edytor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Klucze podstawowe nie mogą być puste (null)';
$string['privacy:metadata'] = 'Wtyczka edytora XMLDB nie przechowuje żadnych danych osobistych.';
$string['reserved'] = 'Zastrzeżone';
$string['reservedwords'] = 'Słowa zastrzeżone';
$string['revert'] = 'Przywróć';
$string['revert_changes'] = 'Cofnij zmiany';
$string['save'] = 'Zapisz';
$string['searchresults'] = 'Wyniki wyszukiwania';
$string['selectaction'] = 'Wybierz akcję:';
$string['selectdb'] = 'Wybierz bazę danych:';
$string['selectfieldkeyindex'] = 'Wybierz pole / klucz / index:';
$string['selectonecommand'] = 'Proszę wybrać jedną akcję z listy, aby zobaczyć kod PHP';
$string['selectonefieldkeyindex'] = 'Proszę wybrać jedno pole / klucz / indeks z listy, aby wyświetlić kod PHP';
$string['selecttable'] = 'Wybierz tabelę:';
$string['table'] = 'Tabela';
$string['tablenameempty'] = 'Nazwa tabeli nie może być pusta';
$string['tables'] = 'Tabele';
$string['unknownfield'] = 'Odnosi się do nieznanego pola';
$string['unknowntable'] = 'Odnosi się do nieznanego pola';
$string['unload'] = 'Odładuj';
$string['up'] = 'Do góry';
$string['view'] = 'Zobacz';
$string['view_reserved_words'] = 'Zobacz słowa zarezerwowane';
$string['view_structure_php'] = 'Zobacz strukturę PHP';
$string['view_structure_sql'] = 'Zobacz strukturę SQL';
$string['view_table_php'] = 'Zobacz tabelę PHP';
$string['view_table_sql'] = 'Zobacz tabelę SQL';
$string['viewedited'] = 'Zobacz edytowane';
$string['vieworiginal'] = 'Zobacz oryginał';
$string['viewphpcode'] = 'Zobacz kod PHP';
$string['viewsqlcode'] = 'Zobacz kod SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Naruszone klucze obce';
$string['violatedforeignkeysfound'] = 'Znaleziono naruszone klucze obce';
$string['violations'] = 'Naruszenia';
$string['wrong'] = 'Niepoprawne';
$string['wrongdefaults'] = 'Znalezione niewłaściwe wartości domyślne';
$string['wrongints'] = 'Znalezione niewłaściwe liczby całkowite';
$string['wronglengthforenum'] = 'Nieprawidłowa długość pola wyliczeniowego';
$string['wrongnumberofreffields'] = 'Błędna liczba pól referencyjnych';
$string['wrongoraclesemantics'] = 'Znalezione błędne semantyki Oracle BYTE';
$string['wrongreservedwords'] = 'Obecnie stosowane słowa zastrzeżone <br /> (Zwróć uwagę, że nazwy tabel nie są istotne, gdy używasz  $CFG->prefix)';
$string['yesextraindexesfound'] = 'Znaleziono następujące dodatkowe indeksy.';
$string['yesmissingindexesfound'] = 'W bazie znaleziono brakujące indeksy. Oto szczegóły i polecenia SQL, które je utworzą. Możesz je wykonać w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych).
<br /><br />
Po wykonaniu tych czynności zaleca się uruchomienie tego narzędzia ponownie, aby sprawdzić, czy nie ma więcej brakujących indeksów.';
$string['yeswrongdefaultsfound'] = 'W bazie znaleziono niespójne wartości domyślne. Oto szczegóły i polecenia SQL, które to naprawią. Możesz je wykonać w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych).
<br /><br />
Po wykonaniu tych czynności zaleca się uruchomienie tego narzędzia ponownie, aby sprawdzić, czy nie ma więcej niespójnych wartości domyślnych.';
$string['yeswrongintsfound'] = 'W bazie znaleziono błędne pola całkowite. Oto szczegóły i polecenia SQL, które to naprawią. Możesz je wykonać w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych).
<br /><br />
Po wykonaniu tych czynności zaleca się uruchomienie tego narzędzia ponownie, aby sprawdzić, czy nie ma więcej błędnych pól całkowitych.';
$string['yeswrongoraclesemanticsfound'] = 'W bazie znaleziono kolumny Oracle używające semantyki BYTE. Oto szczegóły i polecenia SQL, które to naprawią. Możesz je wykonać w swoim ulubionym interfejsie SQL (nie zapomnij o kopii zapasowej danych).
<br /><br />
Po wykonaniu tych czynności zaleca się uruchomienie tego narzędzia ponownie, aby sprawdzić, czy nie ma więcej błędów semantyki.';
