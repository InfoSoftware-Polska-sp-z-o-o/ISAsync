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
 * Strings for component 'glossary', language 'pl', version '4.0'.
 *
 * @package     glossary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Dodaj kategorię';
$string['addcomment'] = 'Dodaj komentarz';
$string['addentry'] = 'Dodaj pojęcie';
$string['addingcomment'] = 'Dodaj komentarz';
$string['addsingleentry'] = 'Dodaj wpis';
$string['alias'] = 'Słowo kluczowe';
$string['aliases'] = 'Słowa kluczowe';
$string['aliases_help'] = 'Słownik umożliwia zapisanie aliasu, czyli alternatywnej nazwy dla każdego terminu.

<b>Wprowadź aliasy w osobnych liniach</b> (nie używaj przecinków).

Alias może być używany jak alternatywna nazwa do hasła. Na przykład, jeżeli używacie w słowniku auto-linkowania, alias będzie używany (razem z głównym hasłem) jako link do tego pojęcia.';
$string['allcategories'] = 'Wszystkie kategorie';
$string['allentries'] = 'Wszystkie';
$string['allowcomments'] = 'Pozwól komentować wpisy';
$string['allowcomments_help'] = 'Gdy ta opcja zostanie włączona, wszyscy uczestnicy, którzy posiadający uprawnienia do tworzenia komentarzy, będą mogli dodać komentarze do pojęć w słowniku.';
$string['allowduplicatedentries'] = 'Pozwól na wielokrotne definiowanie tego samego pojęcia';
$string['allowduplicatedentries_help'] = 'Jeżeli włączysz tę funkcję, określony termin będzie mógł mieć wiele definicji.';
$string['allowprintview'] = 'Pozwól drukować słownik';
$string['allowprintview_help'] = 'Gdy ta opcja zostanie włączona, studentom zostanie udostępniony link do wydrukowania słownika. Link ten jest zawsze dostępny dla prowadzących.';
$string['andmorenewentries'] = 'i {$a} nowych wpisów.';
$string['answer'] = 'Odpowiedź';
$string['approvaldisplayformat'] = 'Zatwierdzony format wyświetlania';
$string['approvaldisplayformat_help'] = 'Zatwierdzając pojęcia do słownika, możesz wybrać inny format wyświetlania';
$string['approve'] = 'Potwierdź';
$string['areaattachment'] = 'Załączniki';
$string['areaentry'] = 'Definicje';
$string['areyousuredelete'] = 'Czy na pewno chcesz usunąć ten wpis?';
$string['areyousuredeletecomment'] = 'Czy na pewno chcesz usunąć ten komentarz?';
$string['areyousureexport'] = 'Czy na pewno chcesz wyeksportować ten wpis do';
$string['ascending'] = 'rosnąco';
$string['attachment'] = 'Załącznik';
$string['attachment_help'] = 'Możesz opcjonalnie załączyć jeden lub więcej plików do wpisu w słowniku.';
$string['author'] = 'autor';
$string['authorview'] = 'Szukaj według autora';
$string['back'] = 'Powrót';
$string['cantinsertcat'] = 'Nie można wstawić tej kategorii';
$string['cantinsertrec'] = 'Nie można wstawić rekordu';
$string['cantinsertrel'] = 'Nie można wstawić relacji kategoria-wpis';
$string['casesensitive'] = 'Ten wpis inaczej traktuje duże i małe litery';
$string['casesensitive_help'] = '<P ALIGN=CENTER><B>Małe i duże litery a łączenie pojęć</B></P>

<P>Ten parametr defniuje czy pojęcie do którego się odwołujemy musi zaczynać się z dużej
lub małej litery, aby automatyczne łączenie pojęć było możliwe. Chodzi o to czy musi być zgodność
z pomiędzy pierwszą literą danego terminu w tekście i słowniku.</p>

<p>Dla przykładu, jeśli włączymy tą funkcję, wówczas termin "html" w tekście NIE zostanie automatycznie
polączony z terminem "HTML" w słowniku.</p>';
$string['cat'] = 'Kat.';
$string['categories'] = 'Kategorie';
$string['category'] = 'Kategoria';
$string['categorydeleted'] = 'Usunięta kategoria';
$string['categoryview'] = 'Szukaj według kategorii';
$string['changeto'] = 'Zmień na {$a}';
$string['cnfallowcomments'] = 'Określ, czy słownik pojęć domyślnie akceptuje komentarze.';
$string['cnfallowdupentries'] = 'Określ, czy słownik pojęć domyślnie pozwoli na podwójne definicje.';
$string['cnfapprovalstatus'] = 'Określ, czy wpis dokonany przez studenta będzie domyślnie zatwierdzany.';
$string['cnfcasesensitive'] = 'Określ, czy nowy wpis, który jest automatycznie linkowany, jest domyślnie wrażliwy na duże i małe litery.';
$string['cnfdefaulthook'] = 'Określ domyślne zaznaczenie, kiedy słownik będzie otwarty po raz pierwszy.';
$string['cnfdefaultmode'] = 'Wybierz domyślną ramkę, która się pojawi, gdy słownik pojęć będzie po raz pierwszy uruchomiony.';
$string['cnffullmatch'] = 'Określ, czy wpis, który jest automatycznie linkowany, ma dokładnie odpowiadać wyrazowi docelowemu.';
$string['cnflinkentry'] = 'Określ, czy wpis domyślnie powinien być automatycznie połączony z docelowym wyrazem.';
$string['cnflinkglossaries'] = 'Określ, czy słownik pojęć powinien być automatycznie łączony z innymi wpisami.';
$string['cnfrelatedview'] = 'Wybierz format wyświetlenia wpisów dla automatycznego łączenia pojęć i wyświetlenia wpisu';
$string['cnfshowgroup'] = 'Określ, czy przerwa powinna być widoczna czy nie';
$string['cnfsortkey'] = 'Wybierz domyślny klucz sortowania';
$string['cnfsortorder'] = 'Wybierz domyślny sposób sortowania';
$string['cnfstudentcanpost'] = 'Określ, czy studenci mogą wprowadzać nowe pojęcia.';
$string['comment'] = 'Komentarz';
$string['commentdeleted'] = 'Komentarz został usunięty.';
$string['comments'] = 'Komentarze';
$string['commentson'] = 'Komentarze na';
$string['commentupdated'] = 'Komentarz został uaktualniony';
$string['completiondetail:entries'] = 'Dodaj pojęcia: {$a}';
$string['completionentries'] = 'Student musi tworzyć wpisy:';
$string['completionentriesdesc'] = 'Student musi utworzyć co najmniej {$a} wpisów';
$string['completionentriesgroup'] = 'Wymagaj wpisów';
$string['concept'] = 'Termin';
$string['concepts'] = 'Terminy';
$string['configenablerssfeeds'] = 'Umożliwia użycie kanałów RSS dla wszystkich słowników pojęć. Musisz jednak i tak włączyć obsługę kanałów dla każdego słownika.';
$string['current'] = 'Obecnie posortowane wg {$a}';
$string['currentglossary'] = 'Aktualny słownik pojęć';
$string['date'] = 'data';
$string['dateview'] = 'Szukaj według daty';
$string['defaultapproval'] = 'Automatycznie aprobuj wpisy definicji przez studentów';
$string['defaultapproval_help'] = '<P ALIGN=CENTER><B>Domyślna aprobata wpisów</B></P>

<p>Możesz wybrać czy wpisy dokonane przez studentów będą automatycznie publikowane w sieci Web
czy też będą musiały być najpierw zatwierdzone przez nauczyciela.</p>';
$string['defaulthook'] = 'Domyślny filtr*';
$string['defaultmode'] = 'Domyślny tryb';
$string['defaultsortkey'] = 'Domyślne sortowanie';
$string['defaultsortorder'] = 'Domyślny porządek sortowania';
$string['definition'] = 'Definicja';
$string['definitions'] = 'Definicje';
$string['deletecategory'] = 'Usuń kategorię';
$string['deleteentry'] = 'Usuń wpis';
$string['deleteentrya'] = 'Usuń wpis: {$a}';
$string['deletenotenrolled'] = 'Usuń wpisy użytkowników wypisanych z kursu';
$string['deletingcomment'] = 'Usuwanie komentarza';
$string['deletingnoneemptycategory'] = 'Usunięcie tej kategorii nie usunie pojęć należących do tej kategorii. Zostaną one oznaczone jako \'nieskategoryzowane\'.';
$string['descending'] = '(malejąco)';
$string['destination'] = 'Importuj do';
$string['destination_help'] = '<P ALIGN=CENTER><B>Do którego słownika importujemy pojęcia?</B></P>

<P>Definicje możesz zaimportować do następujących słowników:</p>
<ul>
<li><strong>Aktualnie otwarty słownik:</strong> Nowe definicje zostaną dołączone do danego słownika.</li>
<li><strong>Nowy słownik:</strong> Nowy słownik zostanie utworzony w oparciu o plik XML i importowane pojęcia.</li>
</ul>';
$string['disapprove'] = 'Cofnij zgodę';
$string['displayformat'] = 'Format wyświetlania';
$string['displayformat_help'] = '<P ALIGN=CENTER><B>Wygląd słownika</B></P>

<P>Ten parametr określa sposób w jaki definicje zostaną zaprezentowane w słowniku. Możliwe są następujące sposoby prezentacji:</p>
<blockquote>
<dl>
<dt><b>Prosty słownik</b>:</dt>
<dd>Przypomina klasyczny słownik. Autorzy nie są uwidocznieni a załączniki schowane są za linkami.</dd>
<dt><b>Ciągły</b>:</dt>
<dd>Pokazuje terminy jeden po drugim bez żadnych przerw oprócz edycyjnych ikon.</dd>
<dt><b>Pełen z autorami</b>:</dt>
<dd>Pokazuje terminy wraz z danymi autora w sposób podobny do forum. Załączniki schowane są za linkami.</dd>
<dt><b>Pełen bez autorów</b>:</dt>
<dd>Format podobny do poprzedniego z tym, że nie zawiera informacji o autorach.</dd>
<dt><b>Encyklopedia</b>:</dt>
<dd>Taki jak "Ciągły z autorami" ale załączniki są wyświetlone w tekście.</dd>
<dt><b>Często zadawane pytania (FAQ)</b>:</dt>
<dd>Użyteczny przy wyświetlaniu "Często zadawanych pytań (FAQ). Automatycznie kategoryzuje terminy definiowane i definicje jako pytania i odpowiedzi.</dd>
</dl>
</blockquote>

<hr>
<p>Administratorzy Moodle\'a mogą utworzyć nowe formy wyświetlenia słownika:
<ol>
<li> Sprawdź zawartość katalogu mod/glossary/formats .... Powinny tam być ponumerowane pliki odpowiadające dostępnym formatom słownika.
<li> Skopiuj jeden z tych plików i nadaj jemu nową nazwę tj. numer N (zwróć uwagę, że 0 i 1 są zarezerwowane).
<li> Dokonaj edycji tego pliku wg własnego uznania (musisz jednak trochę znać PHP).
<li> Następnie dopisz w każdym pakiecie językowym jakiego używasz <b>displayformatN</b>, i nadaj mu krótką ale logiczną nazwę.
</ol>';
$string['displayformatcontinuous'] = 'Ciągły bez autora';
$string['displayformatdefault'] = 'Domyślny(zgodny z ustawionym formatem wyświetlania)';
$string['displayformatdictionary'] = 'Prosty styl słownika';
$string['displayformatencyclopedia'] = 'Encyklopedia';
$string['displayformatentrylist'] = 'Lista wpisów';
$string['displayformatfaq'] = 'FAQ';
$string['displayformatfullwithauthor'] = 'Pełny z autorami';
$string['displayformatfullwithoutauthor'] = 'Pełny bez autorów';
$string['displayformats'] = 'Dostępne formaty wyglądu';
$string['displayformatssetup'] = 'Wyświetl ustawienia formatów wyświetlania';
$string['duplicatecategory'] = 'Duplikuj kategorie';
$string['duplicateentry'] = 'Podwójne definicje';
$string['editalways'] = 'Zawsze można edytować';
$string['editalways_help'] = '<P ALIGN=CENTER><B>Zawsze edytowalne</B></P>

<P>Opcja ta pozwala Ci ustalić, czy wpisy są zawsze edytowalne.

<P>Możesz wybrać

<UL>
<LI><B>Tak:</B> Wpisy są zawsze edytowalne.

<LI><B>Nie:</B> Wpisy są edytowalne tylko przez określony czas po ich stworzeniu.
</UL>';
$string['editcategories'] = 'Edytuj kategorie';
$string['editcategory'] = 'Edytuj kategorię';
$string['editentry'] = 'Edytuj wpis';
$string['editentrya'] = 'Edytuj wpis: {$a}';
$string['editingcomment'] = 'Edytuj komentarz';
$string['entbypage'] = 'Wyświetl podaną liczbę pojęć na stronie';
$string['entries'] = 'Pojęcia';
$string['entrieswithoutcategory'] = 'Pojęcia nieskategoryzowane';
$string['entry'] = 'Pojęcie';
$string['entryalreadyexist'] = 'Pojęcie już istnieje';
$string['entryapproved'] = 'Wpis został zaaprobowany';
$string['entrydeleted'] = 'Wpis został usunięty';
$string['entryexported'] = 'Wpis został wyeksportowany pomyślnie';
$string['entryishidden'] = '(ten wpis jest aktualnie ukryty)';
$string['entryleveldefaultsettings'] = 'Domyślne ustawienia wpisów';
$string['entrylink'] = 'Link do wpisu: {$a}';
$string['entrynotapproved'] = 'Wpis nie został zatwierdzony';
$string['entrysaved'] = 'Hasło zostało zapisane';
$string['entryupdated'] = 'Hasło zostało uaktualnione';
$string['entryusedynalink'] = 'Ten wpis powinien zostać automatycznie linkowany.';
$string['entryusedynalink_help'] = '<P ALIGN=CENTER><B>Włączanie automatycznego linkowania wpisu</B></P>

<P>Włącznie tej opcji spowoduje automatyczne linkowanie każdego użycia danego
terminu w treści składowych kursu.</p>

<p>Jeśli nie chcesz aby w treści składowej dane słowo nie został zlinkowane do
wpisu w słowniku, umieść je w znacznikach &lt;nolink&gt; i &lt;/nolink&gt;</p>

<p>Aby móc włączyć tą opcję, linkowanie musi być włączone w opcjach słownika.</p>';
$string['errcannoteditothers'] = 'Nie możesz edytować pojęć innych użytkowników';
$string['errconceptalreadyexists'] = 'Definicja tego pojęcia już istnieje. Ten słownik nie zezwala na duplikowanie pojęć.';
$string['errdeltimeexpired'] = 'Nie możesz tego usunąć. Czas minął!';
$string['erredittimeexpired'] = 'Czas edycji tego pojęcia upłynął.';
$string['errorparsingxml'] = 'Wystąpiły błędy podczas przetwarzania pliku. Upewnij się, że ma on poprawną składnię XML.';
$string['eventcategorycreated'] = 'Kategoria została utworzona';
$string['eventcategorydeleted'] = 'Kategoria została usunięta';
$string['eventcategoryupdated'] = 'Kategoria została zaktualizowana';
$string['evententryapproved'] = 'Wpis został zatwierdzony';
$string['evententrycreated'] = 'Wpis został utworzony';
$string['evententrydeleted'] = 'Wpis został usunięty';
$string['evententrydisapproved'] = 'Wpis nie został zatwierdzony';
$string['evententryupdated'] = 'Wpis został zakualizowany';
$string['evententryviewed'] = 'Wpis został wyświetlony';
$string['explainaddentry'] = 'Dodaj nowe pojęcie do tego słownika pojęć.<br />Pola: Termin i Definicja muszą zostać wypełnione.';
$string['explainall'] = 'Wyświetl wszystkie pojęcia na jednej stronie';
$string['explainalphabet'] = 'Wyszukaj pojęcia używając tego indeksu';
$string['explainexport'] = 'Plik został stworzony.<br />Pobierz go i zachowaj w bezpiecznym miejscu. Możesz go zaimportować w ramach tego lub innego kursu.<br />Zwróć uwagę, że załączniki (np. obrazki) oraz autorzy nie są eksportowani.';
$string['explainimport'] = 'Musisz wskazać plik, który chcesz importować i zdefiniować kryteria.<p>Wyślij swoje żądanie i sprawdź wynik.';
$string['explainspecial'] = 'Pokaż pojęcia, które nie zaczynają się od litery';
$string['export'] = 'Eksport';
$string['exportedentry'] = 'Wyeksportowany plik';
$string['exportentries'] = 'Eksportuj pojęcia';
$string['exportentriestoxml'] = 'Eksportuj pojęcia do pliku XML';
$string['exportfile'] = 'Eksportuj pojęcia do pliku';
$string['exportglossary'] = 'Eksportuj słownik pojęć';
$string['exporttomainglossary'] = 'Eksportuj do głównego słownika pojęć';
$string['filetoimport'] = 'Plik do importu';
$string['filetoimport_help'] = '<P ALIGN=CENTER><B>Plik do importu</B></P>

<P>Wybierz plik XML zawierający definicje, które chcesz zaimportować</p>';
$string['fillfields'] = 'Pola: Termin i Definicja muszą zostać wypełnione';
$string['filtername'] = 'Automatyczne linkowanie pojęć';
$string['fullmatch'] = 'Szukaj tylko wyrazów tak jak zostały wpisane<br /><small>(jeśli zostały automatycznie połączone)</small>';
$string['fullmatch_help'] = '<P ALIGN=CENTER><B>Łączenie tylko całych słów</B></P>

<p>Jeżeli zostało wybrane automatyczne łączenie pojęć, wówczas włączenie tego parametru spowoduje,
że tylko całe wyrazy będą łączone.

<p>Na przykład, słownikowy termin "kolor" nie utworzy linku do wyrazu "kolorowy" w tekście.</p>';
$string['glossary:addinstance'] = 'Dodaj nowy słownik';
$string['glossary:approve'] = 'Zatwierdzaj i cofnij zatwierdzenia wpisów';
$string['glossary:comment'] = 'Twórz komentarze';
$string['glossary:export'] = 'Eksportuj pojęcia';
$string['glossary:exportentry'] = 'Eksport pojedynczego wpisu';
$string['glossary:exportownentry'] = 'Eksport własnego pojedynczego wpisu';
$string['glossary:import'] = 'Importuj pojęcia';
$string['glossary:managecategories'] = 'Zarządzaj kategoriami';
$string['glossary:managecomments'] = 'Zarządzaj komentarzami';
$string['glossary:manageentries'] = 'Zarządzaj wpisami';
$string['glossary:rate'] = 'Oceń wpisy';
$string['glossary:view'] = 'Oglądaj słownik';
$string['glossary:viewallratings'] = 'Oglądaj  wszystkie surowe oceny wystawione przez wszystkich';
$string['glossary:viewanyrating'] = 'Oglądaj oceny wszystkich';
$string['glossary:viewrating'] = 'Wyświetl oceny które otrzymałeś';
$string['glossary:write'] = 'Twórz nowe pojęcia';
$string['glossaryleveldefaultsettings'] = 'Domyślne ustawienia słownika';
$string['glossarytype'] = 'Typ słownika pojęć';
$string['glossarytype_help'] = '<P ALIGN=CENTER><B>Definiowanie głównego słownika pojęć kursu</B></P>

<P>System pozwala na wyeksportowanie zawratości jakiegokolwiek tymczsowego słownika do głównego słownika kursu.</p>

<p>Aby móc to zrobić musisz najpierw określić, który słownik jest słownikiem głównym.</p>

<p>Uwaga: W ramach jednego kursu można zbudować tylko jeden słownik główny. Tylko nauczyciele mogą aktualizować ten słownik.</p>';
$string['guestnoedit'] = 'Goście nie mogą edytować słowników';
$string['importcategories'] = 'Importuj kategorie';
$string['importedcategories'] = 'Zaimportowano kategorie';
$string['importedentries'] = 'Zaimportowano wpisy';
$string['importentries'] = 'Importuj pojęcia';
$string['importentriesfromxml'] = 'Importuj pojęcia z pliku XML';
$string['includegroupbreaks'] = 'Rozdzielaj grupy';
$string['isglobal'] = 'Czy to jest globalny słownik pojęć?';
$string['isglobal_help'] = '<P ALIGN=CENTER><B>Globalny słownik pojęć</B></P>

<P>Możesz utworzyć słownik, który będzie dostępny dla całej strony internetowej (globalny słownik).</p>

<p>Aby to zrobić, musisz zadeklarować, który słownik jest słownikiem globalnym.</p>

<p>Możesz mieć tyle słowników globalnych ile chcesz. Słowniki te mogą być wykorzystywane w dowolnym kursie. Inne zasady mają takie same zastosowanie do globalnych słowników.</p>

<p>Uwaga: Tylko administratorzy mogą utworzyć globalne słowniki.</p>';
$string['letter'] = 'litera';
$string['linkcategory'] = 'Automatycznie łącz tę kategorię';
$string['linkcategory_help'] = '<P ALIGN=CENTER><B>Automatyczne łączenie kategorii</B></P>

<P>Można automatycznie łączyć nie tylko definicje ale także kategorie definicji.</p>

<p>Uwaga: Poprawność łączenia kategorii jest zależna od wielkości liter.</p>';
$string['linking'] = 'Automatyczne linkowanie';
$string['mainglossary'] = 'Główny słownik pojęć';
$string['maxtimehaspassed'] = 'Maksymalny czas przeznaczony na edycję tego komentarza ({$a}) minął!';
$string['modulename'] = 'Słownik pojęć';
$string['modulename_help'] = 'Moduł słownika pojęć umożliwia uczestnikom tworzenie i używanie zbioru definicji, jak w słowniku; można go także użyć do zbierania i organizowania zasobów czy informacji.

Nauczyciel może zezwolić na dołączanie załączników do wpisów. Dołączone obrazki są wyświetlane we wpisie. Wpisy mogą być przeszukiwane lub przeglądane alfabetyczne lub według kategorii, daty czy autora. Wpisy mogą być domyślnie zatwierdzane lub wymagać zatwierdzenia przez nauczyciela, zanim staną się widoczne dla wszystkich.

Gdziekolwiek w treściach kursu pojawią się słowa lub zwroty ze słownika, mogą być automatycznie zamieniane na linki do wpisu w słowniku. Nazywamy to automatycznym linkowaniem pojęć.

Nauczyciel może pozwolić na komentowanie pojęć. Pojęcia mogą być także oceniane przez nauczycieli czy uczestników. Oceny mogą być agregowane do końcowej oceny kursu, odnotowywanej w dzienniczku ocen.

Słowniki mają wiele możliwości użycia, np.:

* współtworzony bank pojęć,
* miejsce, w którym uczestnicy dodają kilka słów o sobie,
* źródło praktycznych porad w określanej dziedzinie,
* miejsce dzielenia się przydatnymi filmami, obrazkami czy nagraniami audio,
* źródło pojęć do powtórzenia i zapamiętania („vademecum”).';
$string['modulenameplural'] = 'Słowniki pojęć';
$string['newentries'] = 'Nowe wpisy w słowniku';
$string['newglossary'] = 'Nowy słownik pojęć';
$string['newglossarycreated'] = 'Nowy słownik pojęć został utworzony';
$string['newglossaryentries'] = 'Nowe pojęcia w słowniku:';
$string['nocomment'] = 'Nie znaleziono żadnych komentarzy';
$string['nocomments'] = '(Nie znaleziono żadnych komentarzy dotyczących tego wpisu)';
$string['noconceptfound'] = 'Nie znaleziono żadnych terminów ani definicji';
$string['noentries'] = 'Nie znaleziono żadnych pojęć w tej sekcji';
$string['noentry'] = 'Nie znaleziono żadnych pojęć';
$string['nopermissiontodelcomment'] = 'Nie można usuwać komentarzy innych osób!';
$string['nopermissiontodelinglossary'] = 'Nie możesz komentować w tym słowniku!';
$string['nopermissiontoviewresult'] = 'Można tylko wyświetlić wyniki dla swoich własnych haseł';
$string['notapproved'] = 'wpis do słownika nie został jeszcze zatwierdzony';
$string['notcategorised'] = 'Nieskategoryzowane';
$string['numberofentries'] = 'Liczba pojęć';
$string['onebyline'] = '(jedno na linię)';
$string['page-mod-glossary-edit'] = 'Strona dodawania/edycji pojęcia ze słownika';
$string['page-mod-glossary-view'] = 'Strona przeglądu słownika pojęć';
$string['page-mod-glossary-x'] = 'Dowolna strona słownika pojęć';
$string['pluginadministration'] = 'Administracja słownikiem';
$string['pluginname'] = 'Słownik pojęć';
$string['popupformat'] = 'Format okna wyskakującego (popup)';
$string['print'] = 'Drukuj';
$string['printerfriendly'] = 'Wersja do wydruku';
$string['printviewnotallowed'] = 'Nie pozwalaj na drukowanie słownika';
$string['privacy'] = 'Prywatność wyników';
$string['privacy:metadata:core_comments'] = 'Komentarze dodawane do wpisów słownika są przechowywane przy użyciu systemu core_comment';
$string['privacy:metadata:core_files'] = 'Pliki dołączone do wpisów słownika są przechowywane przy użyciu systemu core_files';
$string['privacy:metadata:core_rating'] = 'Oceny dodane do wpisów słownika są przechowywane przy użyciu systemu core_rating';
$string['privacy:metadata:core_tag'] = 'Tagi dodane do definicji w słowniku są przechowywane przy użyciu systemu core_tag';
$string['privacy:metadata:glossary_entries'] = 'Informacje o wpisach użytkownika w danym słowniku (aktywności typu słownik pojęć)';
$string['privacy:metadata:glossary_entries:attachment'] = 'Załącznik do dodanego przez użytkownika wpisu';
$string['privacy:metadata:glossary_entries:definition'] = 'Definicja wpisu dodanego przez użytkownika';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'ID aktywności typu słownik pojęć';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Stempel czasowy wskazujący na to, kiedy wpis słownika został zmodyfikowany przez użytkownika';
$string['privacy:metadata:glossary_entries:userid'] = 'ID użytkownika dodającego ten wpis słownika';
$string['question'] = 'Pytanie';
$string['rejectedentries'] = 'Odrzuć wpisy';
$string['rejectionrpt'] = 'Raport odrzucenia';
$string['removeallglossarytags'] = 'Usuń wszystkie tagi słownika';
$string['resetglossaries'] = 'Usuń wpisy z';
$string['resetglossariesall'] = 'Usuń wszystkie wpisy';
$string['rssarticles'] = 'Liczba ostatnich artykułów RSS';
$string['rssarticles_help'] = '<P ALIGN=CENTER><B>Liczba artykułów w RSS</B></P>

<P>Ta opcja pozawala ustalić liczbę artykułów w RSS Feed.

<P>Liczba pomiędzy 5 a 20 jest zwykle odpowiednia. Zwiększ ją, jesli słownik jest często aktualizowany.';
$string['rsssubscriberss'] = 'Pokaż kanał RSS dla {$a} terminów';
$string['rsstype'] = 'Kanał RSS dla tej aktywności';
$string['rsstype_help'] = '<P>Opjca ta pozwala włączyć RSS feeds w tym słowniku.

<P>Możesz wybrać jedną z dwóch możliwości:

<UL>
<LI><B>Z autorem:</B> W tej opcji autor wpisu będzie podany.

<LI><B>Bez autora:</B> W tej opcji autor wpisu nie bedzie podany.
</UL>';
$string['search:activity'] = 'Słownik pojęć - informacje o aktywności';
$string['search:entry'] = 'Słownik pojęć - wpisy';
$string['searchindefinition'] = 'Przeszukaj cały tekst';
$string['secondaryglossary'] = 'Pomocniczy słownik pojęć';
$string['showall'] = 'Pokaż link „Wszystkie”';
$string['showall_help'] = '<P ALIGN=CENTER><B>Opcje wyszukiwania</B></P>

<P>Można zindywidualizować sposób w jaki użytkownik będzie przeglądał słownik pojęć.
Wyszukiwanie według kategorii lub daty wpisu jest zawsze dostępne, ale można jeszcze dodać następujące 3 opcje:</p>

<p><b>Pokaż link "Specjalne":</b> Umożliwia wyszukiwanie używając nietypowych znaków n.p. @, #, etc.</p>

<p><b>Pokaż link "Alfabet":</b> Umożliwia wyszukiwanie pojęć według liter.</p>

<p><b>Pokaż link "Wszystkie":</b> Umożliwia pokazanie wszystkich definicji od razu.</p>';
$string['showalphabet'] = 'Pokaż litery alfabetu';
$string['showalphabet_help'] = '<P ALIGN=CENTER><B>Opcje wyszukiwania</B></P>

<P>Można zindywidualizować sposób w jaki użytkownik będzie przeglądał słownik pojęć.
Wyszukiwanie według kategorii lub daty wpisu jest zawsze dostępne, ale można jeszcze dodać następujące 3 opcje:</p>

<p><b>Pokaż link "Specjalne":</b> Umożliwia wyszukiwanie używając nietypowych znaków n.p. @, #, etc.</p>

<p><b>Pokaż link "Alfabet":</b> Umożliwia wyszukiwanie pojęć według liter.</p>

<p><b>Pokaż link "Wszystkie":</b> Umożliwia pokazanie wszystkich definicji od razu.</p>';
$string['showspecial'] = 'Pokaż link „Specjalne”';
$string['showspecial_help'] = '<P ALIGN=CENTER><B>Opcje wyszukiwania</B></P>

<P>Można zindywidualizować sposób w jaki użytkownik będzie przeglądał słownik pojęć.
Wyszukiwanie według kategorii lub daty wpisu jest zawsze dostępne, ale można jeszcze dodać następujące 3 opcje:</p>

<p><b>Pokaż link "Specjalne":</b> Umożliwia wyszukiwanie używając nietypowych znaków n.p. @, #, etc.</p>

<p><b>Pokaż link "Alfabet":</b> Umożliwia wyszukiwanie pojęć według liter.</p>

<p><b>Pokaż link "Wszystkie":</b> Umożliwia pokazanie wszystkich definicji od razu.</p>';
$string['sortby'] = 'Sortuj według';
$string['sortbycreation'] = 'Według daty utworzenia';
$string['sortbylastupdate'] = 'Według ostatniej aktualizacji';
$string['sortchronogically'] = 'Posortuj chronologicznie';
$string['special'] = 'Specjalne';
$string['standardview'] = 'Szukaj według alfabetu';
$string['studentcanpost'] = 'Studenci mogą dodawać nowe pojęcia';
$string['tagarea_glossary_entries'] = 'Wpisy w słowniku';
$string['tagsdeleted'] = 'Tagi słownika zostały usunięte';
$string['totalentries'] = 'Liczba wpisów';
$string['usedynalink'] = 'Automatycznie linkuj pojęcia';
$string['usedynalink_help'] = '<P ALIGN=CENTER><B>Automatycznie linkuj pojęcia</B></P>

<P>Ta opcja umożliwia połączenie jakiekolwiek definicji w slowniku pojęć z definiowanym terminem, gdy takowy pojawi się
w którejkolwiek aktywności dostępnej w ramach danego kursu np. forum, wewnętrznych zasobów, podsumowań tygodnia, dzienników itd.
</p>

<p>Jeśli nie chcesz, by określony termin występujący w tekście np. forum został połączony linkiem, dodaj tagi &lt;nolink&gt; i &lt;/nolink&gt; wokół tekstu</p>

<p>Zauważ, że nazwy kategorii są także łączone.</p>';
$string['visibletabs'] = 'Widoczne karty';
$string['waitingapproval'] = 'Oczekiwanie potwierdzenia';
$string['warningstudentcapost'] = '(Dotyczy tylko sytuacji, gdy słownik pojęć nie jest słownikiem głównym)';
$string['withauthor'] = 'Terminy z autorem';
$string['withoutauthor'] = 'Terminy bez autora';
$string['writtenby'] = 'przez';
$string['youarenottheauthor'] = 'Nie jesteś autorem tego wpisu, więc nie możesz go edytować.';
