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
 * Strings for component 'qtype_coderunner', language 'pl', version '4.0'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'Ukryj';
$string['HIDE_IF_FAIL'] = 'Ukryj jeśli się nie uda';
$string['HIDE_IF_SUCCEED'] = 'Ukryj jeśli się powiedzie';
$string['SHOW'] = 'Pokaż';
$string['aborted'] = 'Testowanie zostało przerwane z powodu błędu.';
$string['ace-language'] = 'Język Ace';
$string['ace_gapfillerui_ui_source_descr'] = '"globalextra", aby pobrać kod do wyświetlenia z pola globalextra lub "test0", aby pobrać go z pola testcode pierwszego testu';
$string['ace_ui_notready'] = 'Edytor Ace nie jest gotowy. Odświeżenie strony może pomóc.';
$string['addingcoderunner'] = 'Dodanie nowego pytania CodeRunner';
$string['advanced_customisation'] = 'Zaawansowane dostosowanie';
$string['ajax_error'] = '*** BŁĄD AJAX. NIE ZAPISUJ TEGO! ***';
$string['allok'] = 'Przeszedł wszystkie testy!';
$string['allornone'] = 'Kod testowy musi być podany albo dla wszystkich przypadków testowych albo dla żadnego.';
$string['allornothing'] = 'Ocenianie "wszystko albo nic"';
$string['allornothing_help'] = 'Jeżeli zaznaczono \'wszystko albo nic\', wszystkie przypadki testowe muszą być zadowalające, aby można było uzyskać jakiekolwiek punkty. W przeciwnym razie punkty uzyskuje się poprzez zsumowanie punktów z wszystkich zaliczonych testów i wyrażenie tego jako ułamek maksymalnej możliwej punktacji.

Punkty dla każdego przypadku można określić tylko wtedy, gdy pole wyboru "wszystko lub nic" nie jest zaznaczone.

W przypadku korzystania z szablonu, który przyznaje oceny cząstkowe do przypadków testowych, opcja \'wszystko albo nic\' powinna być zasadniczo odznaczona.';
$string['allowattachments'] = 'Zezwalaj na załączniki';
$string['allowattachments_help'] = 'Czy zezwolić studentom na dodawanie załączników do swoich zgłoszeń, a jeśli tak, to ile. Załączniki są kopiowane do katalogu roboczego środowiska wykonawczego, a lista nazw załączników jest rozdzielana przecinkami do szablonu w zmiennej Twig {{ ATTACHMENTS }}. Ostrzeżenie: zezwolenie na załączniki może mieć wpływ na wydajność lub miejsce na dysku dla serwerów Moodle i Jobe z dużymi klasami i/lub dużymi załącznikami. Serwer Moodle i serwery Jobe przed lutym 2019 r. przechowują wszystkie załączniki w nieskończoność.';
$string['allowedfilenames'] = 'Dozwolone nazwy plików';
$string['allowedfilenames_help'] = 'Wszystkie przesłane nazwy plików muszą odpowiadać podanemu wyrażeniu regularnemu PHP (Perl), jeśli nie jest puste. Na przykład użyj \'.+\\\\.cpp\' aby zezwolić na dowolny plik C ++ lub \'(?!Prog)\\\\.java\', aby zezwolić na dowolny plik Java z wyjątkiem \'Prog.java\'. Ponadto nazwy plików muszą zawierać tylko znaki alfanumeryczne oraz podkreślenie, łącznik i kropkę, nie mogą zaczynać się od podwójnego podkreślenia (\'\\_\\_\') i nie mogą kolidować z żadną nazwą pliku pomocniczego. Opis jest wiadomością tekstową pokazywaną studentowi w celu wyjaśnienia, jakie pliki są oczekiwane. Pozostaw puste, aby wyświetlić samo wyrażenie regularne. Pozostaw oba puste, aby pominąć sprawdzanie wyrażeń regularnych.';
$string['allowedfilenamesregex'] = 'Dozwolone nazwy plików (wyrażenie regularne)';
$string['allowmultiplestdins'] = 'Zezwalaj na wiele strumieni wejściowych (stdin)';
$string['answer'] = 'Odpowiedź';
$string['answer_help'] = 'Można tu wprowadzić przykładową odpowiedź i wykorzystać do sprawdzenia przez autora pytania i ewentualnie pokazać uczniom podczas przeglądu. Jest również używana w skrypcie testowania zbiorczego. Poprawność niepustej odpowiedzi jest sprawdzana przy zapisywaniu, chyba że nie zaznaczono opcji "Sprawdź przy zapisie"';
$string['answerbox_group'] = 'Pole odpowiedzi';
$string['answerbox_group_help'] = 'Ustaw liczbę wierszy do przydzielenia w polu odpowiedzi. Ustawia minimalną wysokość elementu interfejsu użytkownika (np. Ace), który kontroluje skrzynkę odpowiedzi. Szerokość jest ustawiona tak, aby pasowała do okna. Jeśli odpowiedź przepełni się pionowo lub poziomo, pojawią się paski przewijania.';
$string['answerboxlines'] = 'Wiersze';
$string['answerpreload'] = 'Wstępne ładowanie pola odpowiedzi';
$string['answerpreload_help'] = 'Tekst wpisany tutaj zostanie wstępnie załadowany do pola odpowiedzi studenta.';
$string['answerprompt'] = 'Odpowiedź:';
$string['answerrequired'] = 'Podaj niepustą odpowiedź';
$string['answertooshort'] = 'Odpowiedź za krótka. Musi mieć co najmniej {$a} znaków.';
$string['asolutionis'] = 'Rozwiązanie autora pytania:';
$string['atleastonetest'] = 'Musisz podać przynajmniej jeden przypadek testowy dla tego pytania.';
$string['attachmentoptions'] = 'Ustawienia załączników (eksperymentalne)';
$string['attachmentsoptional'] = 'Załączniki są opcjonalne';
$string['attachmentsrequired'] = 'Wymagaj załączników';
$string['attachmentsrequired_help'] = 'Ta opcja określa minimalną liczbę załączników wymaganych do oceny odpowiedzi.';
$string['autotagbycategoryindextitle'] = 'Automatyczne tagowanie pytań CodeRunner';
$string['autotagbycategorytitle'] = 'Automatyczne tagowanie wg kategorii';
$string['bad_dotdotdot'] = 'Niewłaściwe wykorzystanie \'...\'. Musi być na końcu, po dwóch rosnących liczbowych karach';
$string['bad_empty_splitter'] = 'Rozdzielacz testowy nie może być pusty podczas korzystania z szablonu kombinatora';
$string['bad_new_prototype_name'] = 'Niedozwolona nazwa nowego prototypu: już w użyciu';
$string['badacelangstring'] = 'Zły łańcuch języka Ace';
$string['badcputime'] = 'Limit czasu procesora CPU musi pozostać pusty lub musi być liczbą całkowitą większą od zera';
$string['bademptyprecheck'] = 'Sprawdzenie wstępne nie powiodło się z powodu następującego nieoczekiwanego wyjścia.';
$string['badfilenamesregex'] = 'Nieprawidłowe wyrażenie regularne';
$string['badfiles'] = 'Niedozwolone nazwy plików: {$a}';
$string['badjson'] = 'Błędne dane wyjściowe JSON z danych wyjściowych modułu oceniania. Wyjściem było: {$a->output}';
$string['badjsonfunc'] = 'Nieznane funkcje osadzone w JSON ({$a->func})';
$string['badmemlimit'] = 'Limit pamięci musi być pusty lub musi być nieujemną liczbą całkowitą';
$string['badpenalties'] = 'System kar musi być rozdzielaną przecinkami listą liczb z zakresu [0, 100]';
$string['badquestion'] = 'Wystąpił błąd';
$string['badrandomintarg'] = 'Zły argument funkcji JSON @randomint';
$string['badrandompickarg'] = 'Zły argument funkcji JSON @randompic';
$string['badsandboxparams'] = 'Pole \'Inne\' (parametry piaskownicy) musi być puste lub zawierać poprawny rekord JSON';
$string['badtemplateparams'] = 'Parametry szablonu muszą mieć wartość pustą lub prawidłowy rekord JSON. Otrzymano: <pre class="templateparamserror">{$a}</pre>';
$string['baduiparams'] = 'Parametry interfejsu użytkownika muszą być puste lub zawierać prawidłowy rekord JSON.';
$string['brokencombinator'] = 'Oczekiwano wyników testu {$a->numtests}, otrzymano {$a-> numresults}. Być może nadmierne dane wyjściowe lub błąd?';
$string['brokentemplategrader'] = 'Złe dane wyjściowe ze sprawdzarki: {$a->output}. Wykonywanie programu mogło zostać przerwane (np. przekroczono limit czasu lub pamięci).';
$string['bulkquestiontester'] = '<a href="{$a->link}">Skrypt testu zbiorczego</a> sprawdza, czy przykładowe odpowiedzi dla wszystkich pytań w bieżącym kontekście są ocenione prawidłowo';
$string['bulktestallincontext'] = 'Przetestuj wszystko';
$string['bulktestcontinuefromhere'] = 'Uruchom ponownie lub wznów, zaczynając od tego miejsca';
$string['bulktestindextitle'] = 'Testowanie zbiorcze CodeRunner';
$string['bulktestrun'] = 'Uruchom wszystkie testy pytań dla wszystkich pytań w systemie (wolne, tylko administrator)';
$string['bulktesttitle'] = 'Testowanie pytań w {$a}';
$string['coderunner'] = 'Kod programu';
$string['coderunner:sandboxwsaccess'] = 'Zezwól na dostęp do piaskownicy Jobe za pośrednictwem usług sieciowych';
$string['coderunner:viewhiddentestcases'] = 'Zobacz ukryte przypadki testowe podczas przeglądania pytań';
$string['coderunner_help'] = 'W odpowiedzi na pytanie, które jest specyfikacją fragmentu programu, funkcji lub całego programu, respondent wprowadza kod źródłowy w określonym języku komputerowym, który spełnia specyfikację.';
$string['coderunner_install_testsuite_failures'] = 'Testy, które się nie powiodły';
$string['coderunner_install_testsuite_intro'] = 'Ta strona umożliwia sprawdzenie, czy pytania CodeRunner z przykładowymi odpowiedziami działają poprawnie.';
$string['coderunner_install_testsuite_noanswer'] = 'Pytania bez przykładowych odpowiedzi';
$string['coderunner_install_testsuite_title'] = 'Zestaw testów dla przykładowych odpowiedzi programu CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'Skrypt <a href="{$a->link}">sample-answer-test</a> sprawdza, czy pytania z przykładowymi odpowiedziami działają poprawnie.';
$string['coderunner_question_type'] = 'Typ pytania CodeRunnera:';
$string['coderunnercategories'] = 'Kategorie z pytaniami CodeRunnera';
$string['coderunnercontexts'] = 'Konteksty z pytaniami CodeRunnera';
$string['coderunnersettings'] = 'Ustawienia CodeRunnera';
$string['coderunnersummary'] = 'Odpowiedź to kod programu wykonywany w kontekście zestawu przypadków testowych w celu ustalenia jego poprawności.';
$string['coderunnertype'] = 'Typ pytania';
$string['coderunnertype_help'] = 'Wybierz język programowania i typ pytania. Po wybraniu typu pytania, jego szczegóły można zobaczyć niżej w panelu Szczegóły pytania.';
$string['coderunnerwssettings'] = 'Ustawienia usługi sieciowej Sandob';
$string['columncontrols'] = 'Tabela wyników';
$string['columncontrols_help'] = 'Pola wyboru określają, które kolumny tabeli wyników powinny być wyświetlane uczniowi po przesłaniu';
$string['confirm_proceed'] = 'Jeśli zapiszesz to pytanie z niezaznaczonym \'Dostosuj\', wszelkie wykonane dostosowania zostaną utracone. Kontynuować?';
$string['confirmreset'] = 'Odrzuć całą pracę związaną z tym pytaniem i zresetuj pole odpowiedzi do oryginalnej wstępnie załadowanej wartości?';
$string['corruptuiparams'] = 'Parametry interfejsu użytkownika dla tego pytania lub jego prototypu są zepsute. Postępuj ostrożnie.';
$string['cputime'] = 'Limit czasu (s)';
$string['customisation'] = 'Dostosowanie';
$string['customisationcontrols'] = 'Dostosowanie';
$string['customise'] = 'Dostosuj';
$string['datafiles'] = 'Pliki pomocnicze';
$string['datafiles_help'] = 'Wszelkie przesłane tutaj pliki zostaną dodane do katalogu roboczego po wykonaniu rozszerzonego szablonu programu. Dzięki temu można wygodnie dodawać duże lub pomocnicze pliki danych.';
$string['default_penalty_regime'] = 'Domyślny system kar';
$string['default_penalty_regime_desc'] = 'Domyślny sytem kar ma zastosowanie do nowych pytań, składający się z rozdzielonej przecinkami listy procentów kar, opcjonalnie kończącej się na ", ..." w celu oznaczenia ciągłego postępu arytmetycznego.';
$string['display'] = 'Wyświetlanie';
$string['downloadquizattempts'] = 'Pobierz podejścia';
$string['editingcoderunner'] = 'Edytowanie pytania CodeRunnera';
$string['empty_new_prototype_name'] = 'Nowa nazwa typu pytania nie może być pusta';
$string['emptypenaltyregime'] = 'System kar musi być zdefiniowany (od wersji 3.1)';
$string['enable'] = 'Włącz';
$string['enable_diff_check'] = 'Włącz przycisk \'Pokaż różnice\'';
$string['enable_diff_check_desc'] = 'Zaprezentuj uczniom przycisk \'Pokaż różnice\', jeśli ich odpowiedź jest błędna, a używany jest weryfikator dopasowania dokładnego (eksperymentalny)';
$string['enable_sandbox_desc'] = 'Zezwalaj na używanie określonego obszaru izolowanego do uruchamiania zgłoszeń studentów';
$string['enable_sandbox_ws'] = 'Włącz usługę sieciową w piaskownicy';
$string['enable_sandbox_ws_desc'] = 'Włącz usługę sieciową umożliwiającą bezpośredni
dostęp do serwera piaskownicy (zwykle Jobe). FUNKCJA EKSPERYMENTALNA.';
$string['enablecombinator'] = 'Włącz kombinator';
$string['equalitygrader'] = 'Dokładne dopasowanie';
$string['error_loading_prototype'] = 'Wystąpił błąd podczas ładowania prototypu. Być może wystąpiły problemy z siecią lub serwerem?';
$string['error_loading_ui_descr'] = 'Błąd podczas ładowania opisu interfejsu użytkownika. Może problemy z siecią lub awaria serwera?';
$string['erroroninit'] = '**** BŁĄD PODCZAS INICJALIZACJI PYTANIA ****<br>{$a->error}<br>';
$string['errorstring-accessdenied'] = 'Odmowa dostępu do piaskownicy';
$string['errorstring-autherror'] = 'Brak uprawnień do użycia piaskownicy';
$string['errorstring-jobe400'] = 'Błąd z serwera piaskownicy Jobe:';
$string['errorstring-ok'] = 'OK';
$string['errorstring-overload'] = 'Zadanie nie mogło zostać uruchomione z powodu przeciążenia serwera. Może spróbuj jeszcze raz?';
$string['errorstring-pastenotfound'] = 'Żądanie statusu nieistniejącej pracy';
$string['errorstring-submissionfailed'] = 'Przesyłanie do piaskownicy nie powiodło się';
$string['errorstring-submissionlimitexceeded'] = 'Osiągnięty limit wykorzystania piaskownicy';
$string['errorstring-unknown'] = 'Nieoczekiwany błąd podczas wykonywania twojego kodu. Serwer piaskownicy może być wyłączony lub przeciążony. Może spróbuj jeszcze raz?';
$string['errorstring-wronglangid'] = 'Wymagano nieistniejącego języka';
$string['event_sandboxwebserviceexec_desc'] = 'Zadanie zostało wykonane za pośrednictwem usługi sieciowej piaskownicy CodeRunner.';
$string['expand'] = 'Rozwiń';
$string['expandtitle'] = 'Pokaż kategorie pytań';
$string['expected'] = 'Oczekiwany wynik';
$string['expected_help'] = 'Oczekiwane wyniki z testu. Widziane przez szablon jako {{TEST.expected}}.';
$string['expectedcolhdr'] = 'Oczekiwane';
$string['exportthisquestion'] = 'Wyeksportuj to pytanie';
$string['exportthisquestion_help'] = 'Spowoduje to utworzenie pliku eksportu Moodle XML zawierającego tylko to jedno pytanie. Jest to użyteczne, gdy uważasz, że to pytanie pokazuje błąd w CodeRunnerze, i chciałbyś to zgłosić programistom.';
$string['extra'] = 'Dodatkowe dane szablonu';
$string['extra_help'] = 'Czasami przydatne dodatkowe pole tekstowe do użycia przez szablon, dostępne jako {{TEST.extra}}';
$string['fail'] = 'Niepowodzenie';
$string['failedhidden'] = 'Twój kod nie przeszedł jednego lub więcej ukrytych testów.';
$string['failedntests'] = 'Niepowodzenie dla {$a->numerrors} testów';
$string['failedtesting'] = 'Nieudane testy.';
$string['fails'] = 'awarie';
$string['feedback'] = 'Informacja zwrotna';
$string['feedback_help'] = 'Wybierz \'Ustaw dla testu\', aby pozwolić na ustawienia informacji zwrotnych dotyczących testu w celu kontrolowania wyświetlania tabeli wyników. Wybierz \'Wymuś pokazywanie\', aby zawsze pokazać tabelę wyników lub \'Wymuś ukrywanie\', aby zawsze ją ukrywać.';
$string['feedback_hide'] = 'Wymuś ukrywanie';
$string['feedback_quiz'] = 'Ustaw dla testu';
$string['feedback_show'] = 'Wymuś pokazywanie';
$string['fileheader'] = 'Pliki pomocnicze';
$string['filenamesexplain'] = 'Opis';
$string['filenamesregex'] = 'Wyrażenie regularne';
$string['filloutoneanswer'] = 'Musisz wprowadzić kod źródłowy, który spełnia specyfikację. Wprowadzony kod zostanie wykonany w celu ustalenia jego poprawności i odpowiednio przyznanej punktacji.';
$string['firstfailure'] = 'Pierwsze niepowodzenie testu: {$a}';
$string['forexample'] = 'Na przykład';
$string['gapfillerui_delimiters_descr'] = 'Dwuznakowa tablica ciągów używanych do otwierania i zamykania opisu luki';
$string['gapfillerui_sync_interval_secs_descr'] = 'Odstęp czasu w sekundach między kolejnymi wywołaniami w celu zsynchronizowania zawartości interfejsu użytkownika z odpowiedzią na pytanie. 0 oznacza brak takiej automatycznej synchronizacji.';
$string['gapfillerui_ui_source_descr'] = '"globalextra", aby pobrać HTML do wyświetlenia z pola globalextra lub "test0", aby pobrać go z pola testcode pierwszego testu';
$string['giveup'] = 'Przycisk stopu';
$string['giveup_aftermaxmarks'] = 'Dostępne, gdy nie można poprawić oceny';
$string['giveup_always'] = 'Zawsze dostępne';
$string['giveup_help'] = 'Jeśli ta opcja jest włączona, studenci zobaczą przycisk, aby przestać wchodzić w interakcję z pytaniem, a zamiast tego wyświetlą ogólną opinię.

"Zatrzymaj i przeczytaj końcową informację zwrotną” może być wyświetlane od początku lub tylko wtedy, gdy student nie może już poprawić swojej oceny z powodu reżimu kar.';
$string['giveup_never'] = 'Nigdy nie dostępne';
$string['globalextra_help'] = 'Pole tekstowe do ogólnego użytku przez autorów szablonów, takie jak dodatkowe pole każdego przypadku testowego, ale globalne dla wszystkich testów. Dostępne dla autora szablonu jako {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Przeszedł';
$string['gotcolhdr'] = 'Otrzymane';
$string['grader'] = 'Ocenianie';
$string['grading'] = 'Ocenianie';
$string['gradingcontrols'] = 'Mechanizmy oceniania';
$string['gradingcontrols_help'] = 'Domyślne ocenianie \'dokładnego dopasowania\' przyznaje punkty tylko wtedy, gdy wynik wyjściowy programu dokładnie odpowiada oczekiwanej wartości zdefiniowanej w przypadku testowym. Końcowe białe znaki są usuwane ze wszystkich linii, a końcowe puste linie są usuwane przed wykonaniem porównania.

Ocenianie przybliżonej równości jest podobne, z tym wyjątkiem, że dodatkowo zamienia wiele spacji i wcięć w jedno, usuwa wszystkie puste linie oraz zmienia litery na małe w łańcuchach znaków.

Ocenianie \'wyrażenie regularne\' używa \'oczekiwanego\' pola przypadku testowego jako wyrażenia regularnego i testuje wynik, aby sprawdzić, czy dopasowanie do oczekiwanego wyniku można znaleźć w dowolnym miejscu na wyjściu. Aby wymusić dopasowanie całego wyjścia, rozpocznij i zakończ wyrażenie regularne odpowiednio \'\\A\' lub \'\\Z\'. Dopasowywanie wyrażeń regularnych używa opcji MULTILINE i DOTALL.

Opcja "ocenianie na podstawie szablonu" zakłada, że dane wyjściowe z programu są w rzeczywistości wynikiem oceny, tzn. że szablon nie sprawdza *i ocenia* odpowiedzi studenta. Jedynym wyjściem z takiego programu szablonowego musi być rekord zakodowany w JSONie.

Jeśli szablon jest szablonem dla każdego testu (tj. nie jest kombinatorem), ciąg JSON musi opisywać wiersz tabeli wyników i powinien zawierać co najmniej pole \'ułamek\', które jest mnożone przez TEST.mark, aby określić, ile punktów jest przyznawanych dla danego przypadku testowego. Zwykle powinien również zawierać pole \'got\' które jest wartością wyświetlaną w kolumnie \'Otrzymane\' tabeli wyników. Pozostałe kolumny tabeli wyników (testcode, stdin, expected) mogą być również zdefiniowane przez ocenianie na podstawie szablonu i będą używane zamiast wartości z przypadku testowego. Jako przykład, jeśli wyjściem programu jest ciąg znaków `{"fraction":0.5, "got": "Połowa odpowiedzi była prawidłowa"}`, Połowa punktów zostanie przyznana dla tego konkretnego przypadku testowego, a kolumna \'Otrzymane\' wyświetli tekst \'Połowa odpowiedzi była prawidłowa\'. Inne kolumny można dodać do tabeli wyników, dodając dodatkowe atrybuty do rekordu JSON, a także do pola Kolumny wyników.

Jeśli szablon jest kombinatorem, ciąg JSON wygenerowany przez ocenianie na podstawie szablonu powinien ponownie zawierać pole \'fraction\', tym razem dla znaku całkowitego, i może zawierać zero lub więcej  \'prologuehtml\', \'testresults\',
\'epiloguehtml\', \'columnformats\' i \'showdifferences\'. Pola  \'prologuehtml\' i \'epiloguehtml\' to HTML wyświetlany odpowiednio przed i po (opcjonalnej) tabeli wyników. Pole \'testresults\', jeśli jest podane, to lista list używanych do wyświetlania jakiejś tabeli wyników. Pierwszy wiersz to wiersz nagłówka kolumny, a wszystkie pozostałe wiersze definiują treść tabeli. Istnieją dwie specjalne wartości nagłówka kolumny: \'iscorrect\' i \'ishidden\'. Kolumny \'iscorrect\' służą do wyświetlania "ptaszka" lub "krzyżyka" odpowiednio dla 1 lub 0 wartości wiersza. Kolumna \'ishidden\' nie jest wyświetlana, ale wartości 0 lub 1 w kolumnie mogą być używane do włączania i wyłączania widoczności wiersza. Studenci nie widzą ukrytych wierszy, ale oceniający i inni pracownicy już tak. Jeśli podano tabelę \'testresults\', można również podać opcjonalne pole \'columnformats\'. Powinna to być lista ciągów, po jednej w kolumnie, z wyjątkiem kolumn \'iscorrect\' i \'ishidden\'. Łańcuchy określają format używany do wyświetlania wartości komórek; obecnie jedynymi obsługiwanymi formatami są \'%s\' dla normalnego wyświetlania ciągów (który jest sanityzowany i zawijany w element \'pre\') oraz \'%h\' dla wartości html, która nie powinna być dalej przetwarzana przed wyświetleniem. Pole \'showdifferences\' włącza wyświetlanie przycisku \'Pokaż różnice\' poniżej tabeli wyników, jeśli ułamek punktacji nie ma wartości 1,0.';
$string['graph_ui_invalidserialisation'] = 'GraphUI: nieprawidłowa serializacja';
$string['graphhelp'] = '- Kliknij dwukrotnie puste miejsce, aby utworzyć nowy węzeł/stan.
- Kliknij dwukrotnie istniejący węzeł, aby go "zaznaczyć", np. jako stan akceptacji Finite State Machines
(FSM). Kliknij dwukrotnie ponownie, aby usunąć zaznaczenie.
- Kliknij i przeciągnij, aby przesunąć węzeł.
- Wciśnij klawisz Shift, a następnie kliknij wewnątrz jednego węzła i przeciągnij do innego, aby utworzyć łącze.
- Wciśnij klawisz Shift, a następnie kliknij puste miejsce, przeciągnij do węzła, aby utworzyć łącze początkowe (tylko FSM).
- Kliknij i przeciągnij link, aby zmienić jego krzywą.
- Kliknij łącze/węzeł, aby edytować jego tekst.
- Wpisanie znaku _ po którym następuje cyfra, czyni tę cyfrę indeksem dolnym.
- Wpisanie \\epsilon tworzy znak epsilon (i podobnie dla \\alpha, \\beta itp.).
- Kliknij łącze/węzeł, a następnie naciśnij klawisz Delete, aby go usunąć (lub usunąć funkcję na komputerze Mac).';
$string['graphui_fontsize_descr'] = 'Rozmiar czcionki w punktach używany do etykiet węzłów i krawędzi.';
$string['graphui_helpmenutext_descr'] = 'Tekst, który, jeśli nie jest pusty, zastępuje standardowy tekst menu pomocy zdefiniowany w ciągach językowych CodeRunner';
$string['graphui_isdirected_descr'] = 'Prawda, jeśli krawędzie są skierowane';
$string['graphui_isfsm_descr'] = 'Prawda jeśli graf reprezentuje maszynę stanów skończonych, w którym to przypadku może zawierać krawędź przychodzącą znikąd (krawędź startową) i może mieć węzły "akceptuj"';
$string['graphui_lockedgelabels_descr'] = 'Prawda, aby uniemożliwić użytkownikowi edycję etykiet krawędzi. Uniemożliwia to również nadawanie etykiet nowym krawędziom.';
$string['hidden'] = 'Ukryte';
$string['hidedifferences'] = 'Ukryj różnice';
$string['hiderestiffail'] = 'Ukryj resztę jeśli się nie uda';
$string['hoisttemplateparams'] = 'Parametry szablonu Hoist';
$string['howtogetmore'] = 'Aby uzyskać bardziej szczegółowe informacje, należy zapisać pytanie z niezaznaczonym \'Zatwierdź przy zapisie\' i przetestować ręcznie';
$string['ideone_pass'] = 'Hasło serwera Ideone';
$string['ideone_pass_desc'] = 'Hasło, którego należy użyć podczas łączenia się z przestarzałym serwerem Ideone (jeśli piaskownica ideone jest włączona).';
$string['ideone_user'] = 'Nazwa użytkownika serwera Ideone';
$string['ideone_user_desc'] = 'Nazwa logowania, której należy użyć podczas łączenia się z przestarzałym serwerem Ideone (jeśli piaskownica ideone jest włączona).';
$string['illegalformat'] = 'Niedozwolony format ({$a->format}) w columnformats';
$string['info_unavailable'] = 'Informacje dotyczące pytań nie są dostępne dla niestandardowych pytań.';
$string['inputcolhdr'] = 'Dane wejściowe';
$string['insufficientattachments'] = 'Niewystarczająca liczba załączników, {$a} wymagane.';
$string['is_prototype'] = 'Użyj jako prototypu';
$string['iscombinatortemplate'] = 'Jest kombinatorem';
$string['jobe_apikey'] = 'Klucz API Jobe';
$string['jobe_apikey_desc'] = 'Klucz API, który ma być dołączony do wszystkich żądań REST do serwera Jobe (jeśli jest wymagany). Maks. 40 znaków. Pozostaw puste, aby pominąć klucz API z żądań';
$string['jobe_host'] = 'Serwer Jobe';
$string['jobe_host_desc'] = 'Nazwa hosta serwera Jobe plus numer portu, jeśli jest inny niż port 80, np. jobe.somewhere.edu:4010. Adres URL żądania Jobe uzyskuje się, poprzedzając ten ciąg http:// i dołączając /jobe/index.php/restapi/<REST_METHOD>.';
$string['language'] = 'Język piaskownicy';
$string['languages'] = 'Języki';
$string['languages_help'] = 'Język piaskownicy jest językiem komputerowym używanym do uruchomienia zgłoszenia. Musi być dostępny na wybranej piaskownicy (jeśli została wybrana konkretna) lub przynajmniej jednej z włączonych piaskownic (w przeciwnym razie). Zwykle nie wymaga to zmiany wartości w szablonie nadrzędnym; popraw go na własne ryzyko.

Język Ace to język używany przez edytor kodu Ace (jeśli jest włączony) dla odpowiedzi studenta. Domyślnie jest to to samo, co język piaskownicy; wprowadź tutaj inną wartość tylko wtedy, gdy język szablonu różni się od języka programowania, w którym oczekuje się, że uczeń napisze (np. jeśli do walidacji programu C studenta przed uruchomieniem go używany jest preprocesor Pythona).

Pytania wielojęzyczne, czyli pytania, na które studenci mogą odpowiedzieć w więcej niż jednym języku, włącza się, ustawiając Ace-language na rozdzieloną przecinkami listę języków. Studenci dostają rozwijane menu wyboru języka gdzie wskazują, w którym języku programowania jest ich odpowiedź. Jeśli dokładnie jeden z języków ma dołączoną gwiazdkę (\'\\*\'), ten język jest wybierany jako język domyślny w menu rozwijanym. Na przykład wartość Ace-language "C,C++,Java\\*,Python3" pozwoliłaby studentowi przesłać odpowiedź w C, C ++, Java lub Python3, ale menu rozwijane początkowo pokazywałoby Javę, która byłaby domyślna. Jeśli nie określono domyślnego stanu początkowego, lista rozwijana jest pusta i student musi wybrać język. Pytania wielojęzyczne wymagają specjalnego szablonu, który używa zmiennej szablonu {{ANSWER \\ _LANGUAGE}} do kontrolowania sposobu wykonywania kodu studenta. Zobacz wbudowany przykładowy wielojęzyczny typ pytania. Zmienna {{ANSWER \\ _LANGUAGE}} jest zdefiniowana <i>tylko</i> dla pytań wielojęzycznych.

Jeśli autor chce dostarczyć przykładową odpowiedź na pytanie wielojęzyczne, musi napisać go w języku domyślnym, jeśli jest określony, lub pierwszym z dozwolonych języków.';
$string['languageselectlabel'] = 'Język';
$string['mark'] = 'Punkty';
$string['marking'] = 'Przydział punktów';
$string['markinggroup'] = 'Przyznawanie punktów';
$string['markinggroup_help'] = 'Jeśli zaznaczono \'Wszystko albo nic\', wszystkie przypadki testowe muszą być spełnione, aby zgłoszenie mogło uzyskać jakiekolwiek punkty. W przeciwnym razie punkty uzyskuje się, sumując punkty dla wszystkich przypadków testowych, które przechodzą i wyrażając to jako ułamek maksymalnego możliwej punktacji. Punkty dla każdego przypadku można określić tylko wtedy, gdy pole wyboru \'wszystko lub nic\' nie jest zaznaczone. Jeśli używasz oceniania na podstawie szablonu, gdzie przyznawane są częściowe punkty do przypadków testowych, opcja \'Wszystko albo nic\' powinna być zasadniczo odznaczona.

Obowiązkowy system kar jest oddzieloną przecinkami listą kar (w procentach), które mają zastosowanie do kolejnych zgłoszeń. Są to kary bezwzględne, nie kumulatywne. Jako przypadek szczególny ostatnią karą może być \'...\', co oznacza \'przedłużenie poprzednich dwóch kar jako progresja arytmetyczna do 100\'. Na przykład, `0,5,10,30,...` jest odpowiednikiem `0,5,10,30,50,70,90,100`. Jeśli jest więcej zgłoszeń niż zdefiniowanych kar, używana jest ostatnia wartość.

Domyślny reżim kary może zostać ustawiony przez administratora systemu za pomocą Administracja serwisu > Wtyczki > Rodzaje pytań > CodeRunner.

Ustalenie systemu kar na \'0\' skutkuje brakiem kar dla wszystkich zgłoszeń.';
$string['maxfilesize'] = 'Maksymalny dozwolony rozmiar pliku (bajty)';
$string['maxfilesize_help'] = 'Wybierz maksymalny rozmiar przesyłanego pliku (bajty). Umożliwienie przesyłania dużych plików z dużymi klasami może wpłynąć na wydajność i miejsce na dysku zarówno na serwerach Moodle, jak i Jobe.';
$string['memorylimit'] = 'Limit pamięci (MB)';
$string['missinganswers'] = 'brakujące odpowiedzi';
$string['missingoutput'] = 'Musisz dostarczyć oczekiwane dane wyjściowe dla tego przypadku testowego.';
$string['missingprototype'] = 'To pytanie zostało zdefiniowane jako typu \'{$a->crtype}\', ale prototyp nie istnieje, nie jest unikalny lub jest niedostępny w tym kontekście. Należy anulować i spróbować (ponownie) zainstalować prototyp.
Przejdź do edycji tylko wtedy, gdy wiesz, co robisz!';
$string['missingprototypes'] = 'Brakujące prototypy';
$string['missingprototypewhenrunning'] = 'Uszkodzone pytanie (brakujący prototyp \'{$a->crtype}\'). Nie można uruchomić.';
$string['morehidden'] = 'Niektóre ukryte przypadki testowe również się nie powiodły.';
$string['multipledefaults'] = 'Co najwyżej jeden język można wybrać jako domyślny';
$string['multipleprototypes'] = 'Znaleziono wiele prototypów \'{$a->crtype}\\';
$string['mustrequirefewer'] = 'Nie możesz wymagać więcej załączników niż na to pozwalasz.';
$string['nearequalitygrader'] = 'Prawie dokładne dopasowanie';
$string['negativeorzeromark'] = 'Punktacja musi być większa od zera';
$string['nodetailsavailable'] = 'Wybierz typ pytania, aby wyświetlić szczegółową pomoc.';
$string['noerrorsallowed'] = 'Twój kod musi przejść wszystkie testy, aby uzyskać jakiekolwiek punkty. Spróbuj ponownie.';
$string['nonnumericmark'] = 'Niecyfrowa punktacja';
$string['noqtype'] = 'Nie wybrano typu pytania';
$string['nosampleanswer'] = 'Brak przykładowej odpowiedzi';
$string['options'] = 'Opcje';
$string['ordering'] = 'Kolejność';
$string['overallresult'] = 'Ogólny wynik';
$string['overloadoninit'] = 'Przeciążenie serwera piaskownicy uniemożliwiło zainicjowanie pytania';
$string['pass'] = 'Ok';
$string['passes'] = 'przechodzi';
$string['penaltyregime'] = '(system kar: {$a} %)';
$string['penaltyregimelabel'] = 'System kar:';
$string['pluginname'] = 'CodeRunner';
$string['pluginname_help'] = 'Użyj pola wyboru \'Typ pytania\', aby wybrać język programowania i typ pytania, który będzie użyty do uruchomienia zgłoszenia studenta. Określ problem, dla którego student musi napisać kod, a następnie zdefiniuj zestaw testów, które mają być przeprowadzone na przesłanym przez studenta materiale.';
$string['pluginnameadding'] = 'Dodawanie pytania CodeRunnera';
$string['pluginnameediting'] = 'Edytowanie pytania CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: uruchamia kod przesłany przez studenta w piaskownicy';
$string['precheck'] = 'Sprawdzenie wstępne';
$string['precheck_all'] = 'Wszystkie';
$string['precheck_disabled'] = 'Wyłączone';
$string['precheck_empty'] = 'Opróżnij';
$string['precheck_examples'] = 'Przykłady';
$string['precheck_help'] = 'Jeśli opcja sprawdzania wstępnego jest włączona, studenci będą mieli dodatkowy przycisk po lewej stronie zwykłego przycisku sprawdzenia, aby dać im możliwość bezkarnego sprawdzenia ich kodu w odniesieniu do podzbioru przypadków testowych.

Jeśli wybrano \'Opróżnij\', pojedyncze badanie zostanie wykonane z szablonu testowego przy użyciu przypadku testowego, w którym wszystkie pola (testcode, stdin, expected, itp.) są pustym łańcuchem. Wyjście niepuste jest uważane za niepowodzenie kontroli wstępnej. Używaj ostrożnie: niektóre typy pytań nie poradzą sobie z tym poprawnie, np. zapisywanie pytań programu, które generują wynik.

Jeżeli wybrano \'Przykłady\', kod zostanie przetestowany w odniesieniu do wszystkich testów, dla których zostało wybrane \'use_as_example\'.

Jeśli wybrano \'Wybrane\', do każdego przypadku testowego dodawany jest dodatkowy element interfejsu użytkownika, aby umożliwić autorowi wybranie określonego podzbioru testów.

Jeśli wybrano \'Wszystko\', uruchamiane są wszystkie przypadki testowe (chociaż ich zachowanie może się różnić od normalnego sprawdzania, jeśli tak określono w kodzie szablonu).

Szablon może sprawdzić, czy przebieg jest uruchomieniem wstępnym, używając parametru Twig {{ IS_PRECHECK }}, który ma wartość \'1\' podczas wykonywania kontroli wstępnej, a \'0\' w przeciwnym razie.';
$string['precheck_only'] = 'Tylko sprawdzenie wstępne';
$string['precheck_selected'] = 'Wybrane';
$string['precheckingemptyset'] = 'Sprawdzanie wstępne przykładów, ale nie ma żadnych!';
$string['privacy:metadata'] = 'Wtyczka typu pytania CodeRunner nie przechowuje żadnych danych osobowych.';
$string['proceed_at_own_risk'] = 'Edytujesz wbudowany prototyp pytań?! Kontynuuj na własne ryzyko!';
$string['prototypeQ'] = 'Jest prototypem?';
$string['prototype_error'] = '*** BŁĄD WCZYTYWANIA PROTOTYPU. NIE ZAPISUJ TEGO! ***';
$string['prototype_load_failure'] = 'Wystąpił błąd podczas ładowania prototypu:';
$string['prototypecontrols'] = 'Prototypowanie';
$string['prototypecontrols_help'] = 'Jeśli \'Jest prototypem\' jest prawdą, to pytanie staje się prototypem dla innych pytań. Po zapisaniu podana nazwa typu pytania pojawi się na liście rozwijanej typów pytań. Nowe pytania oparte na tym typie będą domyślnie dziedziczyć wszystkie atrybuty dostosowywania określone dla tego pytania. Kolejne zmiany w tym pytaniu będą miały wpływ na wszystkie pytania pochodne, chyba że same zostaną dostosowane, co spowoduje przerwanie połączenia.

Dziedziczenie prototypowe jest tylko jednopoziomowe, więc to pytanie, zapisane jako prototyp, traci połączenie z pierwotnym typem bazowym, stając się nowym typem podstawowym. Ostrzegamy, że podczas eksportowania pytań pochodnych należy upewnić się, że to pytanie jest również uwzględnione w eksporcie, lub czy pytanie pochodne będzie sierotą po zaimportowaniu do innego systemu. Jesteś również odpowiedzialny za sprawdzanie, których pytań używasz jako prototypów; zdecydowanie zaleca się zmianę nazwy pytania na np. \'PROTOTYPE_for_my_new_question_type\', aby ułatwić późniejszą konserwację.';
$string['prototypeusage'] = 'Prototyp pytania CodeRunner dla kursu {$a}';
$string['prototypeusageindex'] = 'Dostępne kursy';
$string['qWrongBehaviour'] = 'W przypadku wszystkich pytań związanych z CodeRunnerem prosimy o skorzystanie z trybu adaptacyjnego zachowania. W przeciwnym razie mogą pojawić się ogromne spadki wydajności. Na przykład wszystkie pytania na stronie będą musiały zostać ponownie ocenione, gdy strona zostanie ponownie wyświetlona.';
$string['qtype_c_function'] = '<p>Typ pytania dla C - napisz funkcję. Oczekuje się, że odpowiedź studenta będzie kompletną funkcją C, ale opcjonalnie może być poprzedzona innym niezależnym kodem C, takim jak dyrektywa preprocesora i funkcje pomocnicze.</p>

<p>Kod testowy dla takich pytań zwykle wywołuje funkcję studenta z pewnymi argumentami testowymi i wypisuje wynik, taki jak <pre>printf("%d\\n", someIntFunction(blah1, blah2))</pre> Przypadek testowy <i>Oczekiwane</i> jest oczekiwanym wynikiem testu.</p>
<p>
Jeśli nie ma standardowego wejścia dla żadnego z przypadków testowych, tworzony jest pojedynczy program testowy, składający się z:</p>
<ol>
<li>następujących standardowych #includes: stdlib.h, ctype.h, string.h, stdbool.h, math.h,</li>
<li>odpowiedzi studenta,</li>
<li>Sekwencja bloków otoczonych nawiasami klamrowymi dla każdego z podanych przypadków testowych. Każdy blok zawiera tylko kod testowy przypadku testowego. Pomiędzy blokami kodu dodano również instrukcję <i>printf</i>, aby umieścić specjalny separator, który jest używany do dzielenia wyników z powrotem na pojedyncze wyjścia przypadków testowych.</li>
</ol>
<p>Jeśli jednak którykolwiek z przypadków testowych ma niepuste standardowe wejście, uruchamianych jest wiele programów testowych, po jednym dla każdego przypadku testowego.
</p><p>Pole <i>extra</i> jest ignorowane.</p>';
$string['qtype_c_program'] = '<p>Używane w przypadku pytań napisz program C, gdzie nie ma kodu testowego, a różne testy wykorzystują po prostu różne standardowe dane wejściowe (stdin). Odpowiedź studenta ma być kompletnym programem do uruchomienia, który jest uruchamiany jako taki, bez modyfikacji przez CodeRunner, raz dla każdego przypadku testowego. Wartości kodu testowego i dodatkowych pól każdego przypadku testowego są ignorowane.</p>';
$string['qtype_cpp_function'] = '<p>Typ pytania dla C++ - napisz funkcję. Odpowiedź studenta ma być kompletną funkcją C+++, ale opcjonalnie może być poprzedzona innym, niezależnym kodem C++, takim jak dyrektywa preprocesora i funkcje pomocnicze.</p>
<p>W każdym przypadku testowym, kod testu dla takich pytań zazwyczaj wywołuje funkcję studenta z pewnymi argumentami testowymi i wypisuje wynik, taki jak <pre>cout << someIntFunction(blah1, blah2))</pre> Pole <i>Oczekiwane</i> jest oczekiwanym wynikiem testu.
<p>
Jeśli nie ma standardowego wejścia dla żadnego z przypadków testowych, tworzony jest pojedynczy program testowy, składający się z:</p>
<ol>
<li>następujących standardowych #includes: iostream, fstream, string, math, vector i algorithm,</li>
<li><code>using namespace std;</code>,</li>
<li>odpowiedzi studenta,</li>
<li>Sekwencja bloków otoczonych nawiasami klamrowymi dla każdego z podanych przypadków testowych.
Każdy blok składa się z pola <i>extra</i> (zwykle puste), po którym następuje kod testowy. Pomiędzy blokami kodu dodano również instrukcję <i>printf</i>, aby umieścić specjalny separator, który jest używany do dzielenia wyników z powrotem na pojedyncze wyjścia przypadków testowych.</li>
</ol>
<p>Jeśli jednak którykolwiek z przypadków testowych ma niepuste standardowe wejście, uruchamianych jest wiele programów testowych, po jednym dla każdego przypadku testowego.
</p>';
$string['qtype_cpp_program'] = '<p>Używane w przypadku pytań napisz program C++, gdzie nie ma kodu testowego, a różne testy wykorzystują po prostu różne standardowe dane wejściowe (stdin). Odpowiedź studenta ma być kompletnym programem do uruchomienia, który jest uruchamiany jako taki, bez modyfikacji przez CodeRunner, raz dla każdego przypadku testowego. Wartości kodu testowego i dodatkowych pól każdego przypadku testowego są ignorowane.</p>';
$string['qtype_java_class'] = '<p>Pytanie w Javie, gdzie student przesyła kompletną klasę jako odpowiedź. Każdy test zazwyczaj tworzy instancję obiektu określonej klasy i wykonuje na nim jeden lub więcej testów. Nie jest to typ pytania kombinatora, co oznacza, że każdy przypadek testowy działa jako oddzielny program piaskownicy.
</p><p>Program wygenerowany dla każdego przypadku testowego składa się z odpowiedzi studenta z usuniętym atrybutem <i>public</i>&nbsp;, jeśli jest obecny. Po tej (teraz lokalnej) definicji klasy następuje klasa publiczna <i>__Tester__&nbsp;</i>&nbsp; z metodą <i>main</i>&nbsp;, która tworzy instancję klasy Tester i wywołuje metodę <i>runTests</i>&nbsp;. Metoda <i>runTests</i>&nbsp; zawiera po prostu kod przypadku testowego. Zobacz szablon w celu wyjaśnienia.</p><p>Należy zauważyć, że algorytm używany do pominięcia atrybutu publicznego z klasy dostarczonej przez studenta jest uproszczony; działa tylko wtedy, gdy <i>public class</i>&nbsp; istnieje dokładnie raz w kodzie studenta, oddzielone pojedynczym odstępem.</p>
<p>Dodatkowe pole przypadku testowego jest ignorowane.</p>
<p>Ten typ pytania jest nieefektywny, jeśli istnieje wiele testów, ponieważ oddzielne zadanie kompilacji i wykonywania jest wysyłane do piaskownicy dla każdego przypadku testowego. Można to rozwiązać, pisząc typ pytania w stylu kombinatora. Więcej informacji można znaleźć w dokumentacji coderunner (coderunner.org.nz).</p>';
$string['qtype_java_method'] = '<p>Używane w pytaniach typu - napisz metodę w Javie, gdzie student jest proszony o napisanie metody, która jest zasadniczo samodzielną funkcją. Test dostarczony przez autora to zazwyczaj tylko jedna lub dwie linie kodu, które (najwyraźniej) po prostu wywołują metodę dostarczoną przez studenta, jak w C. Pod maską szablon tworzy klasę główną zawierającą metodę dostarczoną przez studenta (i dowolną inną pomoc metody, jeśli zdecydują się je napisać) oraz metodę \'runTests\', która owija ją. Główna funkcja klasy konstruuje instancję Main i wywołuje jej metodę \'runTests\'. Szczegółowe informacje zawiera kod szablonu.</p>';
$string['qtype_java_program'] = '<p>Pytanie typu napisz program w Javie, gdzie student przesyła kompletny program jako odpowiedź. Program jest kompilowany i uruchamiany dla każdego przypadku testowego. Nie ma kodu testowego, tylko standardowe dane testowe stdin, chociaż nie jest to w rzeczywistości sprawdzane: caveat emptor. Dodatkowe pola przypadków testowych są również ignorowane.</p>
<p>Ten typ pytania staje się bardzo nieefektywny, jeśli jest wiele przypadków testowych, ponieważ każdy z nich wymaga pełnego cyklu kompilacji i wykonania na serwerze Jobe. Możliwe jest spakowanie wszystkich testów w jedno zadanie Pythona, które jest wysyłane do serwera sandbox i kompiluje program tylko raz, a następnie uruchamia go na każdym przypadku testowym. Szczegółowe informacje na temat tego podejścia można znaleźć na forum autora pytania na coderunner.org.nz.</p>';
$string['qtype_multilanguage'] = '<p>Pytanie "Napisz program”, w którym student może przesłać odpowiedź w jednym z następujących języków: C, C ++, Java lub Python3. W polu odpowiedzi na pytania studenta znajduje się menu rozwijane u góry, za pomocą którego student musi wybrać język, w którym napisano odpowiedź.</p>
<p>Można dodać kolejne języki, jeśli są obsługiwane na serwerze Jobe, dodając nazwę języka do pola <i>AceLang</i> w formularzu edycji pytania, a następnie rozszerzając szablon (q.v.), aby obsługiwać nowy język.</p>
<p>Przesłany kod programu jest uruchamiany bez zmian dla każdego przypadku testowego. Kod testowy i dodatkowe pola każdego przypadku testowego są ignorowane.</p>';
$string['qtype_nodejs'] = '<p>Typ pytania z języka JavaScript, uruchamiane przy użyciu nodejs. Program testowy do wykonania rozpoczyna się od odpowiedzi studenta. Po tym następuje każdy z kodów przypadków testowych po kolei, a pomiędzy nimi drukowany jest łańcuch rozdzielający. Jednakże, jeśli dla któregokolwiek z przypadków testowych dostępne są standardowe dane wejściowe, dla każdego z przypadków testowych zostanie przeprowadzone oddzielne badanie.</p>';
$string['qtype_octave_function'] = '<p>Typ pytania z funkcją w Octave, którą student musi w całości przesłać. Każdy przypadek testowy zazwyczaj wywołuje funkcję studenta z argumentami testowymi i wypisuje wynik lub jakąś wartość pochodną. Jeśli w żadnym z pytań nie ma standardowego wejścia, program składa się z odpowiedzi studenta, instrukcji <code>format free</code> oraz kodu testowego z każdego przypadku testowego, plus dodatkowej instrukcji <i>disp</i> do wypisania łańcucha separatora pomiędzy wyjściami przypadków testowych.</p><p>Jeśli jest jakieś standardowe wejście, każdy przypadek testowy jest uruchamiany oddzielnie.</p>';
$string['qtype_pascal_function'] = '<p>Typ pytania dla Pascala, w którym student proszony jest o napisanie procedury lub funkcji. Program do uruchomienia składa się z odpowiedzi studenta, po której następuje instrukcja <i>testcode</i> otoczona w <code>begin .... end.</code>.<br> Nie jest to typ pytania typu kombinator, więc każde zadanie zostanie wykonane oddzielnie dla każdego przypadku testowego.</p>';
$string['qtype_pascal_program'] = '<p>Typ pytania dla Pascala, gdzie odpowiedzią studenta jest kompletny program Pascala. Program jest kompilowany i uruchamiany raz dla każdego przypadku testowego, wykorzystując standardowe dane wejściowe dostarczone w przypadku testowym i ignorując pola <i>testcode</i> i <i>extra</i>.</p>';
$string['qtype_php'] = '<p>Pytanie php, w którym zgłoszenie studenta jest kodem php. W najprostszym przypadku kod studenta zacznie się od</p>
<pre>
<?php
</pre> ale <i>nie zamknie tagu PHP</i>. Przyczynę niezamknięcia można dostrzec po obejrzeniu szablonu: po odpowiedzi studenta następuje każdy z kodów testowych. Jeśli zamiast tego chcesz, aby kod studenta zakończył się zamknięciem znacznika PHP, powinieneś edytować szablon, aby ponownie otworzyć znacznik PHP przed sekwencją testów.
</p><p>Wyjście z każdego przypadku testowego, które powinno pasować do pola <i>expected</i>, będzie wyjściem z kodu PHP studenta (włącznie z dowolną zawartością spoza zakresu tagów <?php...?>) plus wyjście z kodu testowego.</p><p>Sprawdź kod szablonu (klikając <i>Dostosuj</i>), aby to zrozumieć.</p>';
$string['qtype_python2'] = '<p>Typ pytania Python2, który może obsługiwać typy pytań napisz funkcję, napisz klasę lub napisz program. Dla każdego przypadku testowego wykonywany jest kod odpowiedzi studenta, a następnie kod testu. Tak więc, na przykład, jeśli student zostanie poproszony o napisanie definicji funkcji, najpierw zostanie wykonana jego definicja, a następnie dostarczony przez autora kod testowy, który zazwyczaj wywołuje funkcję i drukuje wynik lub pewną wartość z niego uzyskaną.</p>
<p>Jeśli dla wszystkich przypadków testowych nie zdefiniowano żadnych standardowych wejść, pytanie w rzeczywistości zamyka wszystkie testy w jeden cykl, drukując łańcuch separatora pomiędzy wyjściami każdego przypadku testowego. Należy pamiętać, że nie jest to koniecznie to samo, co uruchamianie każdego przypadku testowego oddzielnie. Na przykład, jeśli istnieją jakieś zmienne globalne zdefiniowane przez kod studenta, będą one miały swoje wartości dla wielu badań. Jeśli to może okazać się problemem, najłatwiej jest zdefiniować jedno ze standardowych pól wejściowych dla przypadków testowych jako wartość niepustą - zmusza to CodeRunnera do awaryjnego trybu uruchamiania każdego przypadku testowego oddzielnie.</p>';
$string['qtype_python3'] = '<p>Typ pytania Python3, który może obsługiwać typy pytań napisz funkcję, napisz klasę lub napisz program. Dla każdego przypadku testowego wykonywany jest kod odpowiedzi studenta, a następnie kod testu. Tak więc, na przykład, jeśli student zostanie poproszony o napisanie definicji funkcji, najpierw zostanie wykonana jego definicja, a następnie dostarczony przez autora kod testowy, który zazwyczaj wywołuje funkcję i drukuje wynik lub pewną wartość z niego uzyskaną.</p>
<p>Jeśli dla wszystkich przypadków testowych nie zdefiniowano żadnych standardowych wejść, pytanie w rzeczywistości zamyka wszystkie testy w jeden cykl, drukując łańcuch separatora pomiędzy wyjściami każdego przypadku testowego. Należy pamiętać, że nie jest to koniecznie to samo, co uruchamianie każdego przypadku testowego oddzielnie. Na przykład, jeśli istnieją jakieś zmienne globalne zdefiniowane przez kod studenta, będą one miały swoje wartości dla wielu badań. Jeśli to może okazać się problemem, najłatwiej jest zdefiniować jedno ze standardowych pól wejściowych dla przypadków testowych jako wartość niepustą - zmusza to CodeRunnera do awaryjnego trybu uruchamiania każdego przypadku testowego oddzielnie.</p>';
$string['qtype_python3_w_input'] = '<p>Typ pytania Python3, który może obsługiwać typy pytań napisz funkcję, napisz klasę lub napisz program. Różni się od nieco prostszego typu pytania <i>python3</i> tym, że zwykła funkcja python3 <i>input</i>została zastąpiona niestandardową wersją, która wypisuje standardowe wejście do standardowego wyjścia w miarę jego wykorzystania. Wynikiem tego jest naśladowanie tego, co studenci widzą podczas testowania z użyciem klawiatury. Jest zalecany zamiast tego dla typu pytań <i>python3</i> dla wszystkich pytań, które dotyczą wywołań do <i>input</i> na wprowadzających kursach programowania, gdzie studenci mogą być zdezorientowani przez brak wypisywania standardowego wejścia, gdy są pobierane z pliku.</p><p>Niewielką wadą tego typu pytania w porównaniu z typem pytania <i>python3</i> jest to, że wszelkie komunikaty o błędach w kodzie studenta będą miały mylące numery linii, ponieważ zastępcza funkcja input jest wstawiana przed kodem studenta.</p>
<p>Dla każdego przypadku testowego wykonywany jest kod odpowiedzi studenta, a następnie kod testu. Tak więc, na przykład, jeśli student zostanie poproszony o napisanie definicji funkcji, najpierw zostanie wykonana jej definicja, a następnie dostarczony przez autora kod testowy, który zazwyczaj wywołuje funkcję i wypisuje wynik lub pewną wartość z niego uzyskaną.</p>
<p>Jeśli dla wszystkich przypadków testowych nie zdefiniowano żadnych standardowych wejść, pytanie w rzeczywistości zamyka wszystkie testy w jeden cykl, drukując łańcuch separatora pomiędzy wyjściami każdego przypadku testowego. Należy pamiętać, że nie jest to koniecznie to samo, co uruchamianie każdego przypadku testowego oddzielnie. Na przykład, jeśli istnieją jakieś zmienne globalne zdefiniowane przez kod studenta, będą one miały swoje wartości dla wielu badań. Jeśli to może okazać się problemem, najłatwiej jest zdefiniować jedno ze standardowych pól wejściowych dla przypadków testowych jako wartość niepustą - zmusza to CodeRunnera do awaryjnego trybu uruchamiania każdego przypadku testowego oddzielnie.</p>';
$string['qtypehelp'] = 'Pomoc dla q-type';
$string['question_type_changed'] = 'Zmiana typu pytania. Kliknij OK, aby ponownie załadować pola dostosowywania, Anuluj, aby zachować własne.';
$string['questioncheckboxes'] = 'Dostosowanie';
$string['questioncheckboxes_help'] = 'Jeśli chcesz dostosować typ pytania, np. aby edytować szablony pytań lub parametry piaskownicy, zaznacz pole wyboru \'Dostosuj\'. W celu uzyskania dodatkowych informacji przeczytaj pomoc dostępną dla uwidocznionych elementów formularza.

Jeśli zostanie zaznaczone pole wyboru \'Szablon debugowania\', program wygenerowany dla każdej wersji testowej zostanie wyświetlony na wyjściu.';
$string['questionloaderror'] = 'Nie udało się załadować pytania';
$string['questionpreview'] = 'Podgląd pytań';
$string['questiontype'] = 'Typ pytania';
$string['questiontype_help'] = 'Wybierz konkretny typ pytania.

Pole wyboru pozwala na wybór jednego z wbudowanych typów, z których każdy określa konkretny język, a czasami również piaskownicę, w której program będzie wykonywany. Każdy typ pytania ma szablon, który określa, w jaki sposób wykonywalny program jest zbudowany z danych przypadków testowych i odpowiedzi studenta.

Szablon można wyświetlić i opcjonalnie dostosować, klikając
pole wyboru \'Dostosuj\'.

Jeśli kliknięto pole wyboru debugowania szablonów, program wygenerowany dla każdego przypadku testowego zostanie wyświetlony na wyjściu.';
$string['questiontype_required'] = 'Musisz wybrać typ pytania';
$string['questiontypedetails'] = 'Szczegóły pytania';
$string['regexgrader'] = 'Wyrażenie regularne';
$string['replacedollarscount'] = 'Kategoria zawiera {$a} pytań CodeRunner.';
$string['replaceexpectedwithgot'] = 'Kliknij przycisk &lt;&lt;, aby zastąpić oczekiwane wyjście tego zestawu testowego rzeczywistym wyjściem.';
$string['reset'] = 'Zresetuj odpowiedź';
$string['resethover'] = 'Odrzuć zmiany i zresetuj odpowiedź na pierwotną wstępnie załadowaną wartość';
$string['resultcolumnheader'] = 'Wynik';
$string['resultcolumns'] = 'Kolumny wyników';
$string['resultcolumnsnotjson'] = 'Pole kolumn wyników nie jest prawidłowym ciągiem JSON';
$string['resultcolumnsnotlist'] = 'Pole kolumn wyników musi zawierać listę specyfikatorów kolumn zakodowanych w JSON';
$string['resultcolumnspecbad'] = 'Znaleziono nieprawidłowy specyfikator kolumny: każdy musi być listą dwóch lub więcej ciągów znaków';
$string['resultstring-abnormaltermination'] = 'Nieprawidłowe zakończenie';
$string['resultstring-compilationerror'] = 'Błąd kompilacji';
$string['resultstring-illegalsyscall'] = 'Niedozwolone wywołanie funkcji';
$string['resultstring-internalerror'] = 'Błąd CodeRunner (IE): zgłoś prowadzącemu';
$string['resultstring-memorylimit'] = 'Przekroczono limit pamięci';
$string['resultstring-norun'] = 'Nie uruchomiono';
$string['resultstring-runtimeerror'] = 'Błąd wykonania';
$string['resultstring-sandboxoverload'] = 'Przeciążenie serwera piaskownicy. Może spróbujesz ponownie wkrótce?';
$string['resultstring-sandboxpending'] = 'Błąd CodeRunner (PD): zgłoś prowadzącemu';
$string['resultstring-sandboxpolicy'] = 'Błąd CodeRunner (BP): zgłoś prowadzącemu';
$string['resultstring-success'] = 'OK';
$string['resultstring-timelimit'] = 'Przekroczono limit czasu';
$string['run_failed'] = 'Nie udało się uruchomić testów';
$string['sampleanswerattachments'] = 'Załączniki do przykładowej odpowiedzi';
$string['sampleanswerattachments_help'] = 'Jeśli przykładowa odpowiedź wymaga plików załączników, prześlij je tutaj';
$string['sandboxcontrols'] = 'Piaskownica';
$string['sandboxcontrols_help'] = 'Wybierz piaskownicę, której chcesz użyć do uruchamiania zgłoszeń studentów. DEFAULT używa piaskownicy o najwyższym priorytecie dostępnej dla wybranego języka. Ponieważ Jobe zastąpił wszystkie typy piaskownicy z wyjątkiem przestarzałego \'ideonesandbox\', wartość \'jobesandbox\' jest zalecana do normalnego użycia, co skutkuje lepszymi komunikatami o błędach jeśli serwer Jobe nie działa niż w przypadku ustawienia DEFAULT.

Można również ustawić maksymalny czas pracy procesora w sekundach dozwolony dla każdego badania oraz maksymalną ilość pamięci, jaką może zużywać pojedyncze badanie (MB). Pusty wpis wykorzystuje domyślną wartość piaskownicy (zazwyczaj 5 sek. dla limitu czasu CPU i ilości pamięci zależnej od języka), ale wartości domyślne mogą nie być odpowiednie dla programów wymagających zasobów. Wartość zero dla maksymalnej ilości pamięci nie narzuca żadnych ograniczeń. Podana tutaj ilość pamięci jest całkowitą ilością potrzebną do uruchomienia, włączając w to wszystkie biblioteki, interpretatory, maszyny wirtualne itp.

Wpis \'Parametry\' jest używany do przekazywania dalszych danych specyficznych dla piaskownicy, takich jak opcje kompilacji i klucze API. Zazwyczaj powinien on pozostać pusty, ale jeśli nie jest pusty, musi to być prawidłowy rekord JSON. W przypadku jobe sandbox, dostępne atrybuty obejmują: disklimit, streamsize, numprocs, compileargs, linkargs i interpreterargs. Na przykład `{"compileargs":["-std=c89"]}` dla pytania C wymusiłoby zgodność z C89 i żadne inne opcje C nie byłyby używane. Zobacz dokumentację jobe, aby uzyskać szczegółowe informacje. Niektóre piaskownice (np. przestarzała piaskownica Ideone) mogą po cichu ignorować dowolne lub wszystkie te ustawienia.

Jeśli piaskownica jest ustawiona na \'jobesandbox\', host jobe, którego należy użyć do testowania pytania, jest zazwyczaj taki, jak określono w ustawieniach administratora wtyczki CodeRunner. Możliwe jest jednak wybranie innego serwera zadań poprzez zdefiniowanie parametru \'jobeserver\' oraz, opcjonalnie, parametru \'jobeapikey\'. Na przykład, jeśli pole \'Parametry\' jest ustawione na `{"jobeserver": "myspecialjobe.com"}, zamiast tego uruchomienie zostanie przesłane do serwera "myspecialjobe.com". Uwaga: funkcja ta jest nadal eksperymentalna i może ulec zmianie w przyszłości.';
$string['sandboxerror'] = 'Błąd z piaskownicy [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parametry';
$string['seethisquestioninthequestionbank'] = 'Zobacz to pytanie w banku pytań';
$string['showcolumns'] = 'Pokaż kolumny:';
$string['showcolumns_help'] = 'Wybierz, które kolumny tabeli wyników powinny być wyświetlane studentom.  Niezależnie od tego puste kolumny zawsze zostaną ukryte. Wartości domyślne są odpowiednie dla większości zastosowań.';
$string['showdetails'] = 'Pokaż szczegóły';
$string['showdifferences'] = 'Pokaż różnice';
$string['showsource'] = 'Debugowanie szablonu';
$string['sourcecodeallruns'] = 'Debugowanie: kod źródłowy ze wszystkich testów';
$string['stdin'] = 'Standardowe dane wejściowe';
$string['stdin_help'] = 'Standardowe dane wejście testu, widziane przez szablon jako {{TEST.stdin}}';
$string['student_answer'] = 'Odpowiedź studenta';
$string['submitbuttons'] = 'Przyciski wysyłania';
$string['supportscripts'] = 'Skrypty pomocnicze';
$string['syntax_errors'] = 'Błąd (błędy) składni';
$string['table_ui_invalidjson'] = 'Interfejs tabeli: nieprawidłowa serializacja JSON.';
$string['table_ui_invalidserialisation'] = 'Interfejs tabeli: nieprawidłowa serializacja.';
$string['table_ui_missingparams'] = 'Interfejs tabeli wymaga parametrów num_columns i num_rows.';
$string['tableui_column_headers_descr'] = 'Lista ciągów dla nagłówków kolumn.';
$string['template'] = 'Szablon';
$string['template_changed'] = 'Zmiana szablonu testowego - wyłączenie kombinatora? [\'Anuluj\' pozostawia to włączone.]';
$string['templatecontrols'] = 'Kontrolki szablonów';
$string['templateerror'] = 'BŁĄD SZABLONU';
$string['templategrader'] = 'Szablon oceny';
$string['templateparams'] = 'Parametry szablonu';
$string['testallincategory'] = 'Sprawdź wszystkie pytania w tej kategorii';
$string['testalltitle'] = 'Przetestuj wszystkie pytania w tym kontekście';
$string['testcase'] = 'Przypadek testowy {$a}';
$string['testcasecontrols'] = 'Właściwości testu:';
$string['testcases'] = 'Przypadki testowe';
$string['testcode'] = 'Testowanie kodu';
$string['testcode_help'] = 'Test kodu wydziany przez szablon jako {{TEST.testcode}}';
$string['testcolhdr'] = 'Test';
$string['testingquestion'] = 'Pytanie testowe {$a}';
$string['testsplitterre'] = 'Rozdzielacz testowy (regex)';
$string['testtype'] = 'Typ sprawdzania wstępnego';
$string['testtype_both'] = 'Oba';
$string['testtype_help'] = 'Jeśli sprawdzanie wstępne jest włączone i ustawione na \'wybrane\', to ustawienie kontroluje, czy test jest używany tylko przy normalnym sprawdzeniu, tylko przy wstępnym sprawdzeniu lub w obu tych przypadkach. Jeśli opcja wstępnego sprawdzenia jest ustawiona na coś innego niż \'wybrane\', to ustawienie to ignorowane.';
$string['testtype_normal'] = 'Tylko sprawdź';
$string['testtype_precheck'] = 'Tylko sprawdzenie wstępne';
$string['tooshort'] = 'Odpowiedź jest zbyt krótka, aby była sensowna i została zignorowana bez kary';
$string['twigcontrols'] = 'Kontrolki parametrów szablonu';
$string['twigerror'] = 'Błąd Twig {$a}';
$string['twigerrorintest'] = 'Błąd Twig podczas przetwarzania tego testu {$a}';
$string['type_header'] = 'Typ pytania CodeRunner';
$string['typename'] = 'Typ pytania';
$string['typerequired'] = 'Wybierz typ pytania (język, format itp.)';
$string['unauthorisedbulktest'] = 'Nie masz odpowiedniego dostępu do pytań CodeRunner';
$string['unauthoriseddbaccess'] = 'Nie masz uprawnień do używania tego skryptu';
$string['unknownerror'] = 'Wystąpił nieoczekiwany błąd. Piaskownica może być wyłączona. Spróbuj ponownie wkrótce.';
$string['useace'] = 'Szablon używa Ace';
$string['useasexample'] = 'Użyj jako przykład';
$string['validateonsave'] = 'Sprawdź poprawność przy zapisie';
$string['wrongnumberofformats'] = 'Nieprawidłowa liczba formatów kolumn wyników testu. Oczekiwano {$a->expected}, otrzymano {$a->got}.';
$string['wsdisabled'] = 'Usługa sieciowa piaskownicy wyłączona. Porozmawiaj z administratorem';
$string['wsloggingenable'] = 'Rejestruj użycie usługi internetowej piaskownicy';
$string['wsmaxcputime'] = 'Maksymalny czas procesora (s)';
$string['xmlcoderunnerformaterror'] = 'Błąd formatu XML w pytaniu coderunner';
