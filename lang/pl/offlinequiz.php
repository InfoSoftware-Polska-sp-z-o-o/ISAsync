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
 * Strings for component 'offlinequiz', language 'pl', version '4.0'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Dodaj';
$string['addarandomquestion'] = 'Pytania losowe';
$string['addarandomquestion_help'] = 'Moodle dodaje losowo wybrane pytania wielokrotnego wyboru (lub pytania wielokrotnego wyboru typu wszystkie-lub-żadne) do bieżącej grupy testu offline. Liczba dodanych pytań może być zdefiniowana. Pytania są wybierane z bieżącej kategorii pytań (oraz, jeśli zaznaczono, jej podkategorii).';
$string['addarandomselectedquestion'] = 'Dodaj losowo wybrane pytanie...';
$string['addlist'] = 'Dodaj listę';
$string['addnewpagesafterselected'] = 'Dodaj podziały stron po zaznaczonych pytaniach';
$string['addnewquestion'] = 'nowe pytanie';
$string['addnewquestionsqbank'] = 'Dodaj pytania do kategorii {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Dodaj nadpisanie użytkownika';
$string['addpagebreak'] = 'Dodaj podział strony';
$string['addpagehere'] = 'Tutaj dodaj stronę';
$string['addparts'] = 'Dodaj uczestników';
$string['addquestionfrombankatend'] = 'Dodaj na końcu z bazy pytań';
$string['addquestionfrombanktopage'] = 'Dodaj z banku pytań do strony {$a}';
$string['addrandom'] = 'Losowo dodaj {$a} pytanie(ń) wielokrotnego wyboru';
$string['addrandomfromcategory'] = 'pytania losowo';
$string['addrandomquestion'] = 'pytania losowo';
$string['addrandomquestiontoofflinequiz'] = 'Dodawanie pytań do testu offline {$a->name} (grupa {$a->group})';
$string['addrandomquestiontopage'] = 'Dodaj losowe pytanie do strony {$a}';
$string['addtoofflinequiz'] = 'Dodaj do testu offline';
$string['addtoqueue'] = 'Dodaj do kolejki';
$string['allinone'] = 'Nieograniczony';
$string['alllists'] = 'Wszystkie llisty';
$string['allornothing'] = 'Wszystko lub nic';
$string['allresults'] = 'Pokaż wszystkie wyniki';
$string['allstudents'] = 'Pokaż wszystkich studentów';
$string['alwaysavailable'] = 'Zawsze dostępne';
$string['analysis'] = 'Analiza pozycji';
$string['answerform'] = 'Formularz odpowiedzi';
$string['answerformforgroup'] = 'Formularz odpowiedzi Grupy {$a}';
$string['answerforms'] = 'Formularze odpowiedzi';
$string['answerpdfxy'] = 'Formularz odpowiedzi ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = 'Czy na pewno chcesz usunąć wszystkie zaznaczone pytania?';
$string['attemptexists'] = 'Przystąpił';
$string['attemptsexist'] = 'Nie możesz już dodawać lub usuwać pytań.';
$string['attemptsnum'] = 'Wyniki: {$a}';
$string['attemptsonly'] = 'Pokaż studentów tylko z wynikami';
$string['attendances'] = 'Frekwencje';
$string['basicideasofofflinequiz'] = 'Podstawowe założenia tworzenia testu offline';
$string['bulksavegrades'] = 'Zapisz punktacje';
$string['calibratescanner'] = 'Kalibracja skanera';
$string['cannoteditafterattempts'] = 'Nie możesz dodawać lub usuwać pytań ponieważ są już wprowadzone odpowiedzi. ({$a})';
$string['category'] = 'Kategoria';
$string['changed'] = 'Wynik został zmieniony.';
$string['checkparts'] = 'Zaznacz  wybranych uczestników jako obecni';
$string['checkuserid'] = 'Sprawdź ID grupy/użytkownika';
$string['chooseagroup'] = 'Wybierz grupę...';
$string['closebeforeopen'] = 'Nie można aktualizować testu offline. Określiłeś datę zamknięcia wcześniejszą niż data otwarcia.';
$string['closestudentview'] = 'Zamknij widok studenta';
$string['closewindow'] = 'Zamknij Okno';
$string['cmmissing'] = 'Brakuje modułu kursu dla testu offline z ID {$a}';
$string['configdecimalplaces'] = 'Liczba cyfr po przecinku pokazywana przy wyświetlaniu punktacji w teście offline.';
$string['configintro'] = 'Wartości ustawione tutaj są używane jako domyślne wartości w ustawieniach nowych testów offline.';
$string['configkeepfilesfordays'] = 'Określa przez ile dni wczytane pliki zdjęć są tymczasowo przetrzymywane. Przez ten czas pliki obrazów są dostępne w raporcie administratora testu offline.';
$string['configpapergray'] = 'Stopień szarości papieru';
$string['configshuffleanswers'] = 'Mieszaj odpowiedzi';
$string['configshufflequestions'] = 'Jeśli włączysz tę opcję, wtedy kolejność pytań w grupach testu offline będzie losowo zmieniana za każdym razem kiedy odtworzysz podgląd na zakładce "Utwórz formularze".';
$string['configshufflewithin'] = 'Jeśli włączysz tę opcję, wtedy elementy składające się na poszczególne pytania zostają losowo pomieszane, gdy formularze pytań i formularze odpowiedzi są tworzone.';
$string['configuseridentification'] = 'Równanie opisuje sposób identyfikacji użytkownika. Równanie służy do powiązania formularza odpowiedzi z użytkownikiem w systemie. Prawa strona równania musi wskazywać na pole w tabeli user w Moodle. Lewa strona definiuje liczbę cyfr wykorzystywanych do identyfikacji użytkownika na formularzach odpowiedzi.';
$string['confirmremovequestion'] = 'Czy na pewno chcesz usunąć te {$a} pytanie?';
$string['copy'] = 'Kopjuj';
$string['copyright'] = '<strong>Ostrzeżenie: Treści na tej stronie są przeznaczone tylko do Twojej wiadomości. Tak jak inne treści tych pytań są one chronione prawami autorskimi. Nie wolno Ci kopiować ich lub udostępniać innym osobom!</strong>';
$string['copyselectedtogroup'] = 'Dodaj zaznaczone pytania do Grupy: {$a}';
$string['copytogroup'] = 'Dodaj wszystkie pytania do Grupy: {$a}';
$string['correct'] = 'poprawnie';
$string['correcterror'] = 'rozwiązane';
$string['correctforgroup'] = 'Poprawne odpowiedzi dla Grupy {$a}';
$string['correctionform'] = 'Kokrekta';
$string['correctionforms'] = 'Formularze korekty';
$string['correctionoptionsheading'] = 'Opcje korekty';
$string['correctupdated'] = 'Wprowadzono poprawki formularza Grupy {$a}.';
$string['couldnotgrab'] = 'Nie można uchwycić obrazu {$a}';
$string['couldnotregister'] = 'Nie można zarejestrować użytkownika {$a}';
$string['createcategoryandaddrandomquestion'] = 'Utwórz kategorię i dodaj losowe pytanie';
$string['createlistfirst'] = 'Dodaj uczestników';
$string['createofflinequiz'] = 'Utwórz formularze';
$string['createpartpdferror'] = 'Formularz PDF z listą uczestników {$a} nie może zostać utworzony. Być może lista jest pusta.';
$string['createpdf'] = 'Formularz PDF';
$string['createpdferror'] = 'Formularz dla Grupy {$a} nie może zostać utworzony. Być może nie ma żadnych pytań w grupie.';
$string['createpdffirst'] = 'Najpierw utwórz listę PDF';
$string['createpdfforms'] = 'Utwórz formularze';
$string['createpdfs'] = 'Formularze PDF';
$string['createpdfsparticipants'] = 'Formularz PDF z listą uczestników';
$string['createquestionandadd'] = 'Utwórz nowe pytanie i dodaj je do quizu.';
$string['createquiz'] = 'Utwórz formularze';
$string['csvfile'] = 'Plik CSV';
$string['csvformat'] = 'Plik tekstowy wartości rozdzielone przecinkami (CSV)';
$string['csvplus1format'] = 'Plik tekstowy z danymi raw (CSV)';
$string['csvpluspointsformat'] = 'Plik tekstowy z punktami (CSV)';
$string['darkgray'] = 'Ciemny szary';
$string['datanotsaved'] = 'Nie można zapisać ustawień';
$string['decimalplaces'] = 'Liczba miejsc po przecinku';
$string['decimalplaces_help'] = 'Liczba cyfr po przecinku która powinna być pokazywana przy wyświetlaniu punktacji dla testu offline.';
$string['deletelistcheck'] = 'Czy na pewno chcesz usunąć zaznaczoną listę i wszystkich jej uczestników?';
$string['deletepagecheck'] = 'Czy na pewno chcesz usunąć zaznaczone strony?';
$string['deletepagesafterselected'] = 'Usuń podziały stron po zaznaczonych pytaniach';
$string['deletepartcheck'] = 'Czy na pewno chcesz usunąć zaznaczonych uczestników?';
$string['deleteparticipantslist'] = 'Usuń listę uczestników';
$string['deletepdfs'] = 'Usuń dokumenty';
$string['deleteresultcheck'] = 'Czy na pewno chcesz usunąć zaznaczone wyniki?';
$string['deleteselectedpart'] = 'Usuń zaznaczonych uczestników';
$string['deleteselectedresults'] = 'Usuń zaznaczone wyniki';
$string['deletethislist'] = 'Usuń tę listę';
$string['deleteupdatepdf'] = 'Usuń i aktualizuj formularze PDF';
$string['difficultytitle'] = 'Trudność';
$string['difficultytitlea'] = 'Trudność A';
$string['difficultytitleb'] = 'Trudność B';
$string['difficultytitlediff'] = 'Różnica';
$string['displayoptions'] = 'Wyświetl opcje';
$string['done'] = 'zrobione';
$string['downloadallzip'] = 'Pobierz wszystkie pliki jako ZIP';
$string['downloadpartpdf'] = 'Pobierz plik PDF listy {$a}';
$string['downloadpdfs'] = 'Pobierz dokumenty';
$string['downloadresultsas'] = 'Pobierz wyniki jako:';
$string['dragtoafter'] = 'Po {$a}';
$string['dragtostart'] = 'Na początek';
$string['editgroupquestions'] = 'Edytuj pytania grupy';
$string['editgroups'] = 'Edytuj Grupy Offline';
$string['editingofflinequiz'] = 'Edytowanie pytań grupy';
$string['editingofflinequiz_help'] = 'Kiedy tworzymy test offline, głównymi założeniami są:
<ul><li> Test offline, zawiera pytania na jednej lub więcej stronach</li>
<li>Bank pytań, który przechowuje kopie wszystkich pytań jest zorganizowany w kategorie</li></ul>';
$string['editingofflinequizx'] = 'Edytuj test offline: {$a}';
$string['editlist'] = 'Edytuj listę';
$string['editlists'] = 'Edytuj listy';
$string['editmaxmark'] = 'Edycja maksymalnego zaznaczenia';
$string['editofflinequiz'] = 'Edytuj test offline';
$string['editofflinesettings'] = 'Edytuj ustawienia offline';
$string['editorder'] = 'Edytuj kolejność';
$string['editparticipants'] = 'Edytuj uczestników';
$string['editquestion'] = 'Edytuj pytanie';
$string['editquestions'] = 'Edytuj pytań';
$string['editscannedform'] = 'Edytuj zeskanowany formularz';
$string['editthislist'] = 'Edytuj tę listę';
$string['emptygroups'] = 'Niektóre grupy testu offline są puste. Dodaj jakieś pytania.';
$string['enroluser'] = 'Zapisz użytkownika';
$string['erroraccessingreport'] = 'Nie masz uprawnień do przeglądania tego raportu.';
$string['errorreport'] = 'Raport błędów importu';
$string['eventattemptdeleted'] = 'Usunięto podejścia testu offline';
$string['eventattemptpreviewstarted'] = 'Rozpoczęty przegląd podejść testu offline';
$string['eventattemptreviewed'] = 'Przejrzano podejście testu offline';
$string['eventattemptsummaryviewed'] = 'Wyświetlono podsumowanie podejść testu offline';
$string['eventattemptviewed'] = 'Wyświetlono podejście testu offline';
$string['eventdocscreated'] = 'Utworzono formularze odpowiedzi i pytania testu offline';
$string['eventdocsdeleted'] = 'Usunięto formularze odpowiedzi i pytania testu offline';
$string['eventeditpageviewed'] = 'Wyświetlono stronę edycji testu offline';
$string['eventofflinequizattemptsubmitted'] = 'Przystąpiono do podejścia testu offline';
$string['eventoverridecreated'] = 'Utworzono nadpisany test offline';
$string['eventoverridedeleted'] = 'Usunięto nadpisany test offline';
$string['eventoverrideupdated'] = 'Zaktualizowano nadpisany test offline';
$string['eventparticipantmarked'] = 'Zaznaczono ręcznie uczestników testu offline';
$string['eventquestionmanuallygraded'] = 'Pytanie ocenione ręcznie';
$string['eventreportviewed'] = 'Przejrzany raport testu offline';
$string['eventresultsregraded'] = 'Powtórnie oceniono wyniki testu offline';
$string['everythingon'] = 'włączone';
$string['excelformat'] = 'Arkusz Excel (XLSX)';
$string['fileformat'] = 'Format dla arkuszy pytań';
$string['fileformat_help'] = 'Wybierz, czy chcesz, mieć arkusze pytań w formacie PDF, TXT lub DOCX. Formularze odpowiedzi i arkusze korekty będą zawsze generowane w formacie PDF.';
$string['fileprefixanswer'] = 'Formularz odpowiedzi';
$string['fileprefixform'] = 'Formularz pytań';
$string['fileprefixparticipants'] = 'Lista uczestników';
$string['filesizetolarge'] = 'Niektóre z Twoich plików obrazów są bardzo duże. Wymiary zostaną zmniejszone podczas interpretacji. Staraj się skanować w rozdzielczości pomiędzy 200 a 300 dpi w trybie czarno białym. Następnym razem przyspieszy to interpretacje wyników.';
$string['fontsize'] = 'Rozmiar czcionki';
$string['forautoanalysis'] = 'Do automatycznej analizy';
$string['formforcorrection'] = 'Formularz korekty dla grupy {$a}';
$string['formforgroup'] = 'Formularz pytania dla grupy {$a}';
$string['formforgroupdocx'] = 'Formularz pytania dla grupy {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formularz pytania dla grupy {$a} (LATEX)';
$string['formsexist'] = 'Formularze zostały utworzone.';
$string['formsexistx'] = 'Formularze już utworzone (<a href="{$a}">Pobierz formularze</a>)';
$string['formsheetsettings'] = 'Ustawienia formularza';
$string['formspreview'] = 'Podgląd formularzy';
$string['formwarning'] = 'Nie ma zdefiniowanego formularza odpowiedzi. Skontaktuj się z administratorem.';
$string['fromquestionbank'] = 'z bazy pytań';
$string['functiondisabledbysecuremode'] = 'Ta funkcjonalność jest obecnie wyłączona';
$string['generalfeedback'] = 'Ogólna informacja zwrotna';
$string['generalfeedback_help'] = 'Ogólna informacja zwrotna to tekst który jest pokazywany po próbie odpowiedzi na pytanie. W przeciwieństwie do informacji zwrotnej dla konkretnego pytania która jest zależna od udzielonej odpowiedzi, ogólna informacja zwrotna jest zawsze pokazywana.';
$string['generatepdfform'] = 'Generuj formularz PDF';
$string['grade'] = 'Ocena';
$string['gradedon'] = 'Oceniony';
$string['gradedscannedform'] = 'Zeskanowany formularz z ocenami';
$string['gradeiszero'] = 'Uwaga: Maksymalna ocena dla tego testu offline wynosi 0 punktów!';
$string['gradeswarning'] = 'Punktacje pytań muszą być liczbami!';
$string['gradewarning'] = 'Punktacja pytania musi być liczbą!';
$string['gradingofflinequiz'] = 'Oceny';
$string['gradingofflinequizx'] = 'Oceny: {$a}';
$string['gradingoptionsheading'] = 'Opcje oceniania';
$string['greeniscross'] = 'liczone na krzyż';
$string['group'] = 'Grupa';
$string['groupoutofrange'] = 'Grupa była poza zakresem i została zastąpiona Grupą A.';
$string['groupquestions'] = 'Grupa pytań';
$string['hasresult'] = 'Istnieją wyniki';
$string['idnumber'] = 'Numer ID';
$string['imagefile'] = 'Plik obrazu';
$string['imagenotfound'] = 'Plik obrazu: {$a} nie znaleziony!';
$string['imagenotjpg'] = 'Obraz nie jest typu jpg lub png: {$a}';
$string['imagickwarning'] = 'Brakuje imagemagick: Poproś administratora systemu aby zainstalował bibliotekę imagemagick i sprawdź ścieżkę do programu konwertującego w ustawieniach filtra notacji Tex. Bez tego nie możesz zaimportować plików TIF.';
$string['import'] = 'Import';
$string['importedon'] = 'Zaimportowany w';
$string['importerror11'] = 'Istnieją inne wyniki';
$string['importerror12'] = 'Użytkownik nie zarejestrowany';
$string['importerror13'] = 'Brak danych grupy';
$string['importerror14'] = 'Nie można pobrać';
$string['importerror15'] = 'Niepewne zaznaczenia';
$string['importerror16'] = 'Błąd strony';
$string['importerror17'] = 'Strona niekompletna';
$string['importerror21'] = 'Nie można pobrać';
$string['importerror22'] = 'Niepewne zaznaczenia';
$string['importerror23'] = 'Brak użytkownika na liście';
$string['importerror24'] = 'Lista nie usunięta';
$string['importforms'] = 'Import formularzy odpowiedzi';
$string['importfromto'] = 'Importowanie {$a->from} do {$a->to} z {$a->total}.';
$string['importisfinished'] = 'Import dla testu offline {$a} jest zakończony.';
$string['importlinkresults'] = 'Link do wyników: {$a}';
$string['importlinkverify'] = 'Link do weryfikacji: {$a}';
$string['importmailsubject'] = 'powiadomienia importu testu offline';
$string['importnew'] = 'Import';
$string['importnew_help'] = '<p>
Możesz zaimportować pojedynczy plik obrazu lub kilka zeskanowanych plików obrazu spakowanych do archiwum ZIP. Moduł testów offline będzie przetwarzał te pliki obrazów w tle.
Nazwy plików nie są istotne ale nie powinny zawierać znaków specjalnych. Obrazy powinny być plikami GIF, PNG  lub TIF. Zalecana jest rozdzielczość pomiędzy 200 a 200 dpi.</p>';
$string['importnumberexisting'] = 'Liczba zdublowanych formularzy: {$a}';
$string['importnumberpages'] = 'Liczba poprawnie zaimportowanych stron: {$a}';
$string['importnumberresults'] = 'Liczba zaimportowanych: {$a}';
$string['importnumberverify'] = 'Liczba formularzy wymagających weryfikacji: {$a}';
$string['importtimefinish'] = 'Proces zakończony: {$a}';
$string['importtimestart'] = 'Proces uruchomiony: {$a}';
$string['inconsistentdata'] = 'Niespójność danych: {$a}';
$string['info'] = 'Info';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Niepewne zaznaczenia wymagają recznych popraw';
$string['insecuremarkingsforquestion'] = 'Niepewne zaznaczenia wymagają ręcznego poprawienia dla pytania';
$string['insertnumber'] = 'Wprowadź poprawny numer identyfikacyjny zaznaczony niebieską ramką.';
$string['instruction1'] = 'Ten formularz odpowiedzi zostanie automatycznie zeskanowany. Nie składaj i nie poplam karty odpowiedzi. Używaj tylko długopisu z czarnym kolorem do zaznaczania pól.';
$string['instruction2'] = 'Tylko właściwie zaznaczone pola zostaną poprawnie odczytane!. Jeśli chcesz dokonać korekty, zamaluj całe błędnie zaznaczone pole. Pole takie zostanie odczytane jako niezaznaczone:';
$string['instruction3'] = 'Poprawiona odpowiedź nie może być raz jeszcze zaznaczona. Nie pisz niczego poza polami przeznaczonymi do odpowiedzi.';
$string['introduction'] = 'Wprowadzenie';
$string['invalidformula'] = 'Podano nieprawidłową formułę do powiązania użytkownika. Formuła musi mieć format &lt;prefix&gt;[&lt;#cyfry&gt;]&lt;suffix&gt;=&lt;pole-w-tabeli-user&gt;.';
$string['invalidnumberofdigits'] = 'Podano nieprawidłową liczbę cyfr. Dozwolone jest od 1 do 9 cyfr.';
$string['invaliduserfield'] = 'Podano nieprawidłową nazwę pola w tabeli user.';
$string['invigilator'] = 'Sprawdzający';
$string['ischecked'] = 'Uczestnik jest zaznaczony';
$string['isnotchecked'] = 'Uczestnik nie jest zaznaczony';
$string['itemdata'] = 'Dane pozycji';
$string['keepfilesfordays'] = 'Przechowuj pliki przez dni';
$string['lightgray'] = 'Jasny szary';
$string['linktoscannedform'] = 'Widok zeskanowanego formularza';
$string['listnotdetected'] = 'Nie można wykryć kodu kreskowego na liście!';
$string['logdeleted'] = 'Wpis logu {$a} usunięty.';
$string['logourl'] = 'Adres URL Logo';
$string['logourldesc'] = 'Adres URL obrazka który jest wyświetlany w prawym górnym rogu na formularzach odpowiedzi. np. <b>http://www.twojastrona.pl/mojelogo.png</b> lub <b>../ścieżka/do/twojego/logo.png</b>. Maksymalnym dozwolonym rozmiarem jest 520x140 pikseli. Formularze odpowiedzi nie mogą być ocenione jeśli obraz ten przekracza maksymalny rozmiar!';
$string['lowertrigger'] = 'Druga dolna granica';
$string['lowertriggerzero'] = 'Druga dolna granica jest zarowa';
$string['lowerwarning'] = 'Pierwsza dolna granica';
$string['lowerwarningzero'] = 'Pierwsza dolna granica jest zerowa';
$string['marginwarning'] = 'Wydrukuj poniższe pliki PDF bez dodatkowych marginesów!<br /> Unikaj rozdawania kserokopii studentom.';
$string['marks'] = 'Zaznaczenia';
$string['matrikel'] = 'Numer studenta';
$string['maxgradewarning'] = 'Maksymalna ocena musi być liczbą!';
$string['maxmark'] = 'Maksymalne zaznaczenie';
$string['membersinplist'] = '{$a->count} uczestników w <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Brak pliku obrazu';
$string['missingitemdata'] = 'Brakująca(e) odpowiedź(dzi) dla użytkownika {$a}';
$string['missinglogdata'] = 'Brakuje danych logowania dla istniejących wyników.';
$string['missingquestion'] = 'Wygląda na to że pytanie już nie istnieje';
$string['missinguserid'] = 'Brakuje numeru identyfikacyjnego użytkownika! Nie można odczytać kodu kreskowego!';
$string['modulename'] = 'Test Offline';
$string['modulename_help'] = 'ten moduł pozwala nauczycielowi zaprojektować testy offline zawierające pytania wielokrotnego wyboru.
Pytania te są przechowywane w banku pytań Moodle i mogą być wykorzystywane w kursie oraz nawet pomiędzy kursami.
Testy offline mogą być pobrane jako pliki PDF. Studenci zaznaczają swoje odpowiedzi na arkuszach odpowiedzi. Arkusze te są skanowane a odpowiedzi importowane do systemu.';
$string['modulenameplural'] = 'Testy Offline';
$string['moodleprocessing'] = 'Niech Moodle przetwarza dane';
$string['movecorners'] = 'Najpierw zmień pozycje zaznaczonymi narożnikami. Użyj metody przeciągnij i upuść.';
$string['moveselectedonpage'] = 'Przenieś wybrane pytania na stronę: {$a}';
$string['multianswersforsingle'] = 'Wiele odpowiedzi do pytania jednokrotnego wyboru';
$string['multichoice'] = 'Wybór wielokrotny';
$string['multipleanswers'] = 'Wybierz co najmniej jedną odpowiedź.';
$string['name'] = 'Nazwa testu offline';
$string['neededcorrection'] = '<strong>Uwaga: Niektóre z Twoich zaznaczeń wymagały ręcznej korekty. Przyjrzyj się czerwonym kwadratom na poniższym obrazku.
<br />Oznaczają ręczną interwencję przez nauczyciela i opóźniły publikacje wyników testu offline!</strong>';
$string['newgrade'] = 'Ocenione';
$string['newpage'] = 'Nowa strona';
$string['noattemptexists'] = 'Brak wyników';
$string['noattempts'] = 'Nie zaimportowano żadnych wyników!';
$string['noattemptsonly'] = 'Pokaż tylko studentów bez wyników';
$string['nocourse'] = 'Brakuje kursu o id {$a->course} do którego należy test offline o ID {$a->offlinequiz}.';
$string['nogradesseelater'] = 'Ten test nie został jeszcze oceniony dla {$a}. Tutaj będą opublikowane wyniki.';
$string['nogroupdata'] = 'Żadnych danych grup dla użytkownika {$a}';
$string['nomcquestions'] = 'Nie ma żadnych pytań wielokrotnego wyboru w Grupie {$a}';
$string['noofflinequiz'] = 'Nie ma żadnego testu offline z id {$a}!';
$string['nopages'] = 'Nie zaimportowano żadnej strony';
$string['noparticipantsfound'] = 'Nie znaleziono uczestników';
$string['nopdfscreated'] = 'Dokumenty nie utworzone!';
$string['noquestions'] = 'Niektóre grupy testów offline są puste. Dodaj jakieś pytania.';
$string['noquestionselected'] = 'Nie zaznaczono żadnych pytań!';
$string['noquestionsfound'] = 'Nie ma żadnych pytań w Grupie {$a}!';
$string['noquestionsonpage'] = 'Pusta strona';
$string['noresults'] = 'Nie ma żadnych wyników.';
$string['noreview'] = 'Nie masz uprawnień do przeglądania tego testu offline';
$string['noscannedpage'] = 'Nie ma zeskanowanej strony z ID {$a}!';
$string['nothingtodo'] = 'Nic do zrobienia!';
$string['notxtfile'] = 'Brak pliku TXT';
$string['notyetgraded'] = 'Jeszcze nie ocenione';
$string['nozipfile'] = 'Brak pliku ZIP';
$string['numattempts'] = 'Liczba zaimportowanych wyników: {$a}';
$string['numattemptsqueue'] = '{$a} formularze odpowiedzi dodane do kolejki. Zostanie wysłany email na Twój adres po zakończeniu przetwarzania danych.';
$string['numattemptsverify'] = 'Zeskanowane formularze oczekujące na korektę: {$a}';
$string['numberformat'] = 'Wartość musi być liczbą z {$a} cyframi!';
$string['numbergroups'] = 'Liczba grup';
$string['numpages'] = '{$a} stron zaimportowanych';
$string['numquestionsx'] = 'Pytania: {$a}';
$string['numusersadded'] = '{$a} uczestników dodanych';
$string['odsformat'] = 'Arkusz OpenDocument (ODS)';
$string['offlineimplementationfor'] = 'Implementacja offline dla';
$string['offlinequiz:addinstance'] = 'Dodaj test offline';
$string['offlinequiz:attempt'] = 'Podjęte testy';
$string['offlinequiz:createofflinequiz'] = 'Utwórz formularze testu offline';
$string['offlinequiz:deleteattempts'] = 'Usuń wyniki testu offline';
$string['offlinequiz:grade'] = 'Ręcznie oceń testy offline';
$string['offlinequiz:manage'] = 'Zarządzaj testami offline';
$string['offlinequiz:preview'] = 'Podgląd testów offline';
$string['offlinequiz:view'] = 'Informacje testu offline';
$string['offlinequiz:viewreports'] = 'Widok raportów testu offline';
$string['offlinequizcloses'] = 'Zamknij test offline';
$string['offlinequizcloseson'] = 'Przegląd dla tego testu offline zakończy się {$a}';
$string['offlinequizisclosed'] = 'Zamknięty test offline';
$string['offlinequizisclosedwillopen'] = 'Test offline zamknięty (otwarcie {$a})';
$string['offlinequizisopen'] = 'Ten test offline jest otwarty';
$string['offlinequizisopenwillclose'] = 'Test offline otwarty (zamknięcie {$a})';
$string['offlinequizopenedon'] = 'Ten test offline będzie otwarty o {$a}';
$string['offlinequizopens'] = 'Otwarcie testu offline';
$string['offlinequizsettings'] = 'Ustawienia offline';
$string['offlinequizwillopen'] = 'Otwarcie testu offline w {$a}';
$string['oneclickenrol'] = 'Zapisy 1-kliknięciem';
$string['oneclickenroldesc'] = 'Jeśli ta opcja jest aktywna nauczyciele mają możliwość zapisywanie użytkowników jednym kliknięciem podczas korekty formularzy odpowiedzi (Błąd "Brak użytkownika w kursie").';
$string['oneclickrole'] = 'Rola dla zapisów 1-kliknięciem.';
$string['oneclickroledesc'] = 'Wybierz rolę używaną do zapisów 1-kliknięciem. Tylko role z typem "student" mogą zostać wybrane.';
$string['onlylocalcategories'] = 'Tylko lokalne kategorie pytania';
$string['orderandpaging'] = 'Kolejność i stronicowanie';
$string['orderandpaging_help'] = 'Liczby 10, 20, 30, ... naprzeciw każdego pytania wskazują na kolejność w pytaniach. Liczby wzrastają w krokach co 10 zostawiając miejsce na wstawienie dodatkowych pytań. Aby zmienić kolejność pytań, zmień liczby klikając na przycisk "Zmień kolejność pytań".

Aby dodać podziały stron po poszczególnych pytaniach, zaznacz checkbox\'y obok pytań i kliknij przycisk "Dodaj podziały strony po wybranych pytaniach".

Aby rozmieścić pytania na wielu stronach, kliknij przycisk przearanżowanie stron i wybierz pożądaną liczbę pytań na stronie.';
$string['orderingofflinequiz'] = 'Kolejność i stronicowanie';
$string['otherresultexists'] = 'Pominięty import, istnieją już inne wyniki dla {$a}! Najpierw usuń wyniki.';
$string['outof'] = '{$a->grade} z możliwych {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Ogólna informacja zwrotna';
$string['overview'] = 'Przegląd';
$string['page-mod-offlinequiz-edit'] = 'Edycja strony testu offline';
$string['page-mod-offlinequiz-x'] = 'Dowolna strona testu offline';
$string['pagecorrected'] = 'Zaimportowano skorygowany arkusz z listą uczestników';
$string['pageimported'] = 'Zaimportowano arkusz z listą uczestników';
$string['pagenotdetected'] = 'Nie można wykryć kodu kreskowego na stronie!';
$string['pagenumberimported'] = 'Arkusz {$a} z listą uczestników zaimportowany';
$string['pagesizeparts'] = 'Pokazywanych uczestników  na stronie:';
$string['papergray'] = 'Wartość bieli papieru';
$string['papergray_help'] = 'Jeśli białe część zeskanowanych formularzy odpowiedzi są bardzo ciemne, możesz to poprawić zmieniając ustawienia tego parametru na ciemny szary.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} sprawdzonych uczestników bez wyniku</a>';
$string['partcheckedwithresult'] = '{$a} sprawdzonych uczestników z wynikiem';
$string['participants'] = 'Uczestnicy';
$string['participants_help'] = '<p>Listy uczestników są zaprojektowane dla testów offline z wieloma uczestnikami. Pomagają nauczycielowi sprawdzać którzy studenci uczestniczyli w teście i czy wszystkie wyniki testu zostały zaimportowane.
Możesz dodawać użytkowników do różnych list. Każda lista może na przykład zawierać uczestników w poszczególnych salach. Uczestnicy mogą być członkami specjalnej grupy. Do tworzenia tych grup może być wykorzystywane narzędzie rejestracji do grup.
Listy uczestników mogą być pobierane jako dokumenty PDF, drukowane i zaznaczane krzyżykami tak jak odpowiedzi na formularzach testów offline. Po tym mogą być wczytywane a zaznaczeni studenci będą wskazani jako obecni w bazie danych.
Staraj się unikać zaplamienia kodów kreskowych ponieważ są wykorzystywane do identyfikacji studentów.</p>';
$string['participantsinlists'] = 'Uczestnicy na liście';
$string['participantslist'] = 'Lista uczestników';
$string['participantslists'] = 'Uczestnicy';
$string['partimportnew'] = 'Wczytywanie list uczestników';
$string['partimportnew_help'] = '<p>
Na tej zakładce możesz wczytać uzupełnione listy uczestników. Możesz wczytać pojedyncze pliki obrazów lub kilka zeskanowanych plików obrazów w archiwum ZIP. Moduł testów offline będzie przetwarzał pliki obrazów w tle.
Nazwy plików są nieistotne ale nie powinny zawierać znaków specjalnych. Obrazki powinny być GIF, PNG lub TIF. Zalecana rozdzielczość pomiędzy 200 a 300 dpi w trybie czarno białym.</p>';
$string['partuncheckedwithoutresult'] = '{$a} niesprawdzonych uczestników bez wyniku';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} niesprawdzonych uczestników z wynikiem</a>';
$string['pdfdeletedforgroup'] = 'Formularz dla grupy {$a} usunięty';
$string['pdfintro'] = 'Dodatkowa informacja';
$string['pdfintro_help'] = 'Ta informacja będzie drukowana na pierwszej stronie arkusza pytań i powinna zawierać podstawowe informacje o tym jak wypełnić formularz odpowiedzi.';
$string['pdfintrotext'] = '<b>Jak prawidłowo zaznaczać?</b><br />Ten formularz odpowiedzi będzie automatycznie zeskanowany. Nie składaj i nie poplam go. Używaj długopisu z czarnym wkładem do zaznaczania pól. Jeśli chcesz dokonać korekty, zamaluj całkowicie korygowany kwadracik. Pole te zostanie zinterpretowane jako niezaznaczone.<br />';
$string['pdfintrotoolarge'] = 'Wprowadzenie jest za długie (maks. 2000 znaków).';
$string['pdfscreated'] = 'Formularz PDF został utworzony';
$string['pdfsdeletedforgroup'] = 'Formularze dla grupy {$a} usunięte';
$string['pearlywhite'] = 'Perłowo biały';
$string['pluginadministration'] = 'Administracja quizem offline';
$string['pluginname'] = 'Test Offline';
$string['point'] = 'punkt';
$string['present'] = 'Obecność';
$string['preventsamequestion'] = 'Nie pozwalaj na występowanie tego samego pytania w różnych grupach';
$string['preview'] = 'Podgląd';
$string['previewforgroup'] = 'Podgląd dla grupy {$a}';
$string['previewquestion'] = 'Podgląd pytania';
$string['printstudycodefield'] = 'Drukuj pole numer studenta na arkuszu pytań';
$string['printstudycodefield_help'] = 'Jeśli zaznaczone, pole numer studenta będzie drukowane na pierwszej stronie arkusza pytań.';
$string['questionanalysis'] = 'Analiza trudności';
$string['questionanalysistitle'] = 'Tabela Analizy Trudności';
$string['questionbankcontents'] = 'Zawartość banku pytań';
$string['questionforms'] = 'Formularze pytań';
$string['questioninfoanswers'] = 'Liczba poprawnych odpowiedzi';
$string['questioninfocorrectanswer'] = 'poprawna odpowiedź';
$string['questioninfocorrectanswers'] = 'poprawne odpowiedzi';
$string['questioninfonone'] = 'Nic';
$string['questioninfoqtype'] = 'Typ pytania';
$string['questionname'] = 'Nazwa pytania';
$string['questionsheet'] = 'Arkusz pytań';
$string['questionsheetlatextemplate'] = '\\documentclass[12pt,a4paper]{article}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage{graphicx} % for including pictures
\\usepackage[MeX]{polski}
\\usepackage[utf8]{inputenc}
\\renewcommand{\\familydefault}{\\sfdefault} % Font
\\newcommand{\\lsim}{\\mbox{\\raisebox{-.3em}{$\\stackrel{<}{\\sim}$}}} % less or approximately equal
\\newcommand{\\subs}{\\mbox{\\raisebox{-.5em}{$\\stackrel{\\subset}{\\neq}$}}}
\\newcommand{\\sei}{\\mbox{\\raisebox{.0em}{$\\stackrel{!}{=}$}}}
\\parindent 0pt % no indent on the beginning of a section
\\usepackage{esvect} % long vector arrows, e.g. \\vv{AB}
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % For using of Hyperlinks
\\renewcommand\\UrlFont{\\sf}
\\usepackage{ulem} %  \\sout{horizontal cross out} \\xout{diagonal strike out}
\\newcommand{\\abs}[1]{\\left\\lvert#1\\right\\rvert}
\\usepackage{scrpage2} % For Header and Footer
\\pagestyle{scrheadings}
\\clearscrheadfoot
\\ifoot{[Grupa \\Group]}
\\makeatletter %%% disable pagebreaks between answers
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Disable showing the right answer
% \\newcommand{\\answerIs}[1]{[#1]} %%%Enable showing the right answer
%%%

\\begin{document}


% ===========================================================================================================
%%% Data of the Course
\\begin{center}{\\LARGE {$a->coursename}}\\end{center}
\\begin{center}{Egzamin pisemny {$a->date}}\\end{center}
%%%
\\def\\Group{{$a->groupname}}
\\begin{center}{\\Large Group \\Group}\\end{center}

{\\bf Imię i nazwisko:}\\\\
{\\bf Nr. albumu:}\\\\
{\\bf Podpis:}\\

% ===========================================================================================================
\\bigskip

{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Pytań w';
$string['questionsingroup'] = 'Pytań w grupie';
$string['questionsinthisofflinequiz'] = 'Pytań w tym teście offline';
$string['questiontextisempty'] = '[Tekst pustego pytania]';
$string['quizdate'] = 'Data testu offline';
$string['quizopenclose'] = 'Daty otwarcia i zamknięcia';
$string['quizopenclose_help'] = 'Studenci mogą widzieć ich podejście(a) tylko po otwarciu i przed zamknięciem.';
$string['quizquestions'] = 'Pytania testu';
$string['randomfromexistingcategory'] = 'Losowe pytanie z istniejącej kategorii';
$string['randomnumber'] = 'Liczba losowych pytań';
$string['randomquestionusinganewcategory'] = 'Losowe pytanie używając nowej kategorii';
$string['readjust'] = 'Dostosuj';
$string['reallydeletepdfs'] = 'Czy na pewno chcesz usunąć formularze?';
$string['recreatepdfs'] = 'Odtwórz PDFy';
$string['recurse'] = 'Dołącz też pytania z podkategorii';
$string['rediswrong'] = 'nieprawidłowy krzyżyk lub brak krzyżyka';
$string['refreshpreview'] = 'Odśwież podgląd';
$string['regrade'] = 'Zmiana oceny';
$string['regradedisplayexplanation'] = '<b>Uwaga:</b> Zmienianie oceny nie zmieni zaznaczeń które zostały ręcznie nadpisane!';
$string['regradinginfo'] = 'Jeśli zmienisz punktacje pytania, musisz ponownie ocenić test offline aby zaktualizować wyniki uczestników.';
$string['regradingquiz'] = 'Zmienianie oceny';
$string['regradingresult'] = 'Wynik zmienionych ocen dla użytkownika {$a}...';
$string['reloadpreview'] = 'Przeładuj podgląd';
$string['reloadquestionlist'] = 'Przeładuj listę pytań';
$string['remove'] = 'Usuń';
$string['removeemptypage'] = 'Usuń pustą stronę';
$string['removepagebreak'] = 'Usuń podział strony';
$string['removeselected'] = 'Usuń zaznaczone';
$string['reordergroupquestions'] = 'Zmień kolejność Grup pytań';
$string['reorderquestions'] = 'Zmień kolejność pytań';
$string['reordertool'] = 'Pokaż narzędzia przearanżowania stron';
$string['repaginate'] = 'Przearanżowanie stron z {$a} pytaniami na stronie';
$string['repaginatecommand'] = 'Przearanżowanie stron';
$string['repaginatenow'] = 'Przearanżuj strony teraz';
$string['reportoverview'] = 'Przegląd';
$string['reportstarts'] = 'przegląd wyników';
$string['resetofflinequizzes'] = 'Resetowanie danych testów offline';
$string['resultexists'] = 'Te same wyniki dla {$a} już istnieją, pominięty import';
$string['resultimport'] = 'Import wyników';
$string['results'] = 'Wyniki';
$string['review'] = 'Przegląd';
$string['reviewbefore'] = 'Pozwól przeglądać gdy test offline jest otwarty';
$string['reviewclosed'] = 'Po zamknięciu testu offline';
$string['reviewcloses'] = 'Przeglądy zamknięte';
$string['reviewimmediately'] = 'Natychmiast po podejściu';
$string['reviewincludes'] = 'Przegląd zawiera';
$string['reviewofresult'] = 'Przegląd wyników';
$string['reviewopens'] = 'Przeglądy otwarte';
$string['reviewoptions'] = 'Studenci mogą zobaczyć';
$string['reviewoptions_help'] = 'Tymi opcjami możesz kontrolować co studenci mogą widzieć po zaimportowaniu wyników
<table>
<tr><td style="vertical-align: top;"><b>Podejście</b></td><td>
Treści pytań i odpowiedzi będą dostępne dla studentów. Będą widzieli które odpowiedzi wybrali, jednak właściwe odpowiedzi nie będą wskazane.</td>
</td></tr>
<tr><td style="vertical-align: top;"><b>Czy prawidłowe</b></td><td>
Ta opcja może być aktywowana tylko jeśli opcja "Podejście" jest aktywna.  Jeśli jest aktywna wtedy studenci mogą widzieć które z wybranych odpowiedzi są poprawne (zielone tło) bądź też niepoprawne (czerwone tło)
</td></tr>
<tr><td style="vertical-align: top;"><b>Zaznaczenia</b></td><td>
Grupa (np. B), wyniki (osiągnięta ocena, łączna ocena dla pytań, osiągnięta w procentach, np. 40/80 (50)) i ocena (np. 50 z maksymalnych 100) są wyświetlane.
Dodatkowo, jeśli "Podejście" jest wybrane, osiągnięte wyniki i maksymalne wyniki są pokazywane dla każdego pytania.
</td></tr>
<tr><td style="vertical-align: top;"><b>Prawidłowe odpowiedzi</b></td><td>
Pokazywane są które odpowiedzi są poprawne lub błędne. Ta opcja jest dostępna tylko jeśli  "Podejście" jest ustawione.
</td></tr>
<tr><td style="vertical-align: top;"><b>Zeskanowane formularze</b></td><td>
Zeskanowane formularze są pokazywane. Wybrane odpowiedzi są oznaczone zielonymi kwadratami.
</td></tr>
<tr><td style="vertical-align: top;"><b>Zeskanowane formularze z ocenami</b></td><td>
Zeskanowane formularze są pokazywane. Wybrane odpowiedzi są oznaczone zielonymi kwadratami. Błędnie zaznaczone lub niezaznaczone są podświetlone.
Dodatkowo, pokazywana jest tabela maksymalnej oceny i osiągnięta ocena dla każdego pytania.
</td></tr>
</table>';
$string['reviewoptionsheading'] = 'Opcje przeglądu';
$string['rimport'] = 'Wczytaj/Popraw';
$string['rotate'] = 'Obróć';
$string['rotatingsheet'] = 'Arkusz jest obrócony...';
$string['save'] = 'Zapisz';
$string['saveandshow'] = 'Zapisz i pokaż zmiany dla studentów';
$string['savescannersettings'] = 'Zapisz ustawienia skanera';
$string['scannedform'] = 'Zeskanowany formularz';
$string['scannerformfortype'] = 'Formularz typu {$a}';
$string['scanneroptions'] = 'Ustawienia skanera';
$string['scannerpdfs'] = 'Puste formularze';
$string['scannerpdfstext'] = 'Pobierz poniższe czyste formularze jeśli chcesz użyć własnego oprogramowania do skanowania.';
$string['scanningoptionsheading'] = 'Opcje skanowania';
$string['score'] = 'Wynik';
$string['select'] = 'Wybierz';
$string['selectagroup'] = 'Wybierz grupę';
$string['selectall'] = 'Zaznacz wszystko';
$string['selectcategory'] = 'Wybierz kategorię';
$string['selectdifferentgroup'] = 'Proszę wybrać inną grupę!';
$string['selectedattempts'] = 'Wybrane podejścia...';
$string['selectformat'] = 'Wybierz format...';
$string['selectgroup'] = 'Wybierz grupę';
$string['selectlist'] = 'Wybierz listę lub spróbuj dostosować arkusz:';
$string['selectnone'] = 'Odznacz wszystko';
$string['selectpage'] = 'Wybierz numer strony lub spróbuj dostosować arkusz:';
$string['selectquestiontype'] = '-- Wybierz typ pytania --';
$string['showallparts'] = 'Pokaż wszystkich {$a} uczestników';
$string['showcopyright'] = 'Pokaż komunikat o prawach autorskich';
$string['showcopyrightdesc'] = 'Jeśli opcja jest włączona, komunikat o prawach autorskich będzie widoczne dla studentów na stronie przeglądu wyników.';
$string['showgrades'] = 'Drukuj punktacje pytania';
$string['showgrades_help'] = 'Ta opcja kontroluje czy maksymalne oceny pytań testu offline powinny być drukowane na arkuszu pytań.';
$string['showmissingattemptonly'] = 'Pokaż wszystkich zaznaczonych uczestników bez wyników';
$string['showmissingcheckonly'] = 'Pokaż wszystkich niezaznaczonych uczestników z wynikami';
$string['shownumpartsperpage'] = 'Pokaż {$a} uczestników na stronie';
$string['showquestioninfo'] = 'Drukuj informacje na temat odpowiedzi';
$string['showquestioninfo_help'] = 'Opcją tą możesz kontrolować które dodatkowe informacje o pytaniu są drukowane na arkuszu pytań.
Możesz wybrać jedno z poniższych:
<ul>
<li> Nic
<li> Typ pytania - Drukowana będzie w zależności od typu pytania: pojedynczy wybór, wielokrotny wybór, wszystko lub nic
<li> Liczba poprawnych odpowiedzi - Drukowana będzie liczba poprawnych odpowiedzi
</ul>';
$string['showstudentview'] = 'Pokaż widok studenta';
$string['showtutorial'] = 'Pokaż samouczek testu offline dla studentów.';
$string['showtutorial_help'] = 'Ta opcja określa czy studenci mają widzieć samouczek podstaw testów offline.
Samouczek zawiera informacje o tym jak poradzić sobie z różnego rodzaju dokumentami w testach offline. W części praktycznej uczą jak poprawnie odnotować ID uczestnika.
<br />
<b>Zwróć uwagę:</b><br />
Jeśli ta opcja jest ustawiona na "Tak", ale ukryjesz link testu offline,samouczek nie będzie widoczny. W przypadku gdy dodasz link do samouczka na stronie kursu.';
$string['showtutorialdescription'] = 'Możesz dodać link do samouczka na stronie kursu używając poniższego adresu URL:';
$string['shuffleanswers'] = 'Mieszaj odpowiedzi';
$string['shufflequestions'] = 'Mieszaj pytania';
$string['shufflequestionsanswers'] = 'Mieszaj pytania i odpowiedzi';
$string['shufflequestionsselected'] = 'Opcja mieszania pytań została ustawiona, dlatego niektóre operacje na tej stronie nie są dostępne. Aby zmienić {$a} opcje mieszania.';
$string['shufflewithin'] = 'Mieszaj wewnątrz pytań';
$string['shufflewithin_help'] = 'Jeśli opcja jest włączona, elementy każdego pytania będą losowo mieszane za każdym razem kiedy naciśniesz przycisk przeładuj na formatce podglądu. UWAGA: Te ustawienie dotyczy tylko pytań które mają aktywowaną opcje mieszania.';
$string['signature'] = 'Podpis';
$string['singlechoice'] = 'Pojedyńczy wybór';
$string['standard'] = 'Standardowy';
$string['starttutorial'] = 'Uruchom samouczek dotyczący testu';
$string['statistics'] = 'Statystyki';
$string['statisticsplural'] = 'Statystyki';
$string['statsoverview'] = 'Przegląd statystyk';
$string['studycode'] = 'Kod badania';
$string['theattempt'] = 'Podejście';
$string['timesup'] = 'Czas minął';
$string['totalmarksx'] = 'Suma z zaznaczonych: {$a}';
$string['totalpointsx'] = 'Suma z zaznaczonych: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Łącznie {$a} pytań w kategorii';
$string['trigger'] = 'niższa/wyższa granica';
$string['tutorial'] = 'Samouczek do testów offline';
$string['type'] = 'Typ';
$string['uncheckparts'] = 'Zaznacz wybranych uczestników jako nieobecnych';
$string['updatedsumgrades'] = 'Suma wszystkich ocen w Grupie {$a->letter} została przeliczona na {$a->grade}.';
$string['upgradingfilenames'] = 'Aktualizowanie nazw plików dokumentów: test offline {$a->done}/{$a->outof} (ID testu offline {$a->info})';
$string['upgradingilogs'] = 'Aktualizowanie zeskanowanych stron: zeskanowana strona {$a->done}/{$a->outof} <br/>(ID testu offline {$a->info})';
$string['upgradingofflinequizattempts'] = 'Aktualizowanie podejść do testu offline: test offlinez {$a->done}/{$a->outof} <br/>(ID testu offline {$a->info})';
$string['upload'] = 'Wczytaj/Popraw';
$string['uploadpart'] = 'Wczytaj/Popraw listy uczestników';
$string['uppertrigger'] = 'Wyższa druga granica';
$string['uppertriggerzero'] = 'Wyższa druga granica wynosi zero';
$string['upperwarning'] = 'Wyższa pierwsza granica';
$string['upperwarningzero'] = 'Wyższa pierwsza granica wynosi zero';
$string['useradded'] = 'Użytkownik {$a} dodany';
$string['userdoesnotexist'] = 'Użytkownik {$a} nie istnieje w systemie';
$string['useridentification'] = 'Identyfikacja użytkownika';
$string['userimported'] = 'Użytkownik {$a} zaimportowany i oceniony';
$string['usernotincourse'] = 'Brak użytkownik {$a} w kursie';
$string['usernotinlist'] = 'Użytkownik nie zarejestrowany na liście!';
$string['usernotregistered'] = 'Użytkownik {$a} nie jest zarejestrowany w kursie';
$string['userpageimported'] = 'Pojedyncza strona zaimportowana dla użytkownika {$a}';
$string['valuezero'] = 'Wartość nie powinna być zerowa';
$string['viewresults'] = 'Podgląd wyników';
$string['white'] = 'Biały';
$string['withselected'] = 'Z zaznaczonymi...';
$string['zerogradewarning'] = 'Ostrzeżenie: Punktacja Twojego testu offline  jest 0.0!';
$string['zipfile'] = 'plik ZIP';
$string['zipok'] = 'Plik ZIP zaimportowany';
