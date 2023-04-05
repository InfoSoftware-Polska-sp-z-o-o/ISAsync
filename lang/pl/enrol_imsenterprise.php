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
 * Strings for component 'enrol_imsenterprise', language 'pl', version '4.0'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Po zapisaniu ustawień możesz zechcieć';
$string['allowunenrol'] = 'Pozwól <strong>wypisywać</strong> studentów/nauczycieli z kursów wg danych IMS';
$string['allowunenrol_desc'] = 'Jeśli włączone, użytkownicy będą wypisywani z kursów, jeśli taka dyrektywa znajduje się w plikach Enterprise';
$string['basicsettings'] = 'Podstawowe ustawienia';
$string['categoryidnumber'] = 'Zezwól na identyfikator kategorii';
$string['categoryseparator'] = 'Znak separatora kategorii';
$string['coursesettings'] = 'Opcje kursu';
$string['createnewcategories'] = 'Utwórz nową (ukryta) kategorię kursu, jeżeli nie odnaleziono jej w Moodle';
$string['createnewcategories_desc'] = '<p> Jeśli &lt;org&gt;&lt;orgunit&gt; element jest prezentowany na kursie przychodzących danych, zawartość będzie użyta do sprecyzowania kategorii jeśli kurs będzie stworzony satysfakcjonująco.</p>
<p>Program wspomagający nie będzie klasyfikowany na istniejącym kursie.</p>
<p>Jeśli nie istnieje kategoria z pożądaną nazwą wtedy będzie stworzona ukryta kategoria.</p>';
$string['createnewcourses'] = 'Utwórz nowe (ukryte) kursy, jeżeli nie odnaleziono ich w Moodle';
$string['createnewcourses_desc'] = '<p>Enterprise IMS wpisuje program wspomagający I może stworzyć nowe kursy dla wszystkich znalezionych w IMS danych ale nie w bazie Moodle, jeżeli to miejscie jest aktywne.</p>
<p>Kursy są w pierwszej kolejności pytane przez ich "numery id" – pole alfanumeryczne w kursie tabel Moodle , które może precyzować kod używając do identyfikacji kursu system informacji studenta (na przykład). Jeśli nie jest znaleziony, tabela kursu jest szukana poprzez "krótki opis", który w Moodle jest krótkim kursem identyfikującym jako wyświetlony w *okruszku** itp. (W niektórych systemach te dwa pola mogą być identyczne). Tylko jeśli to szukanie zawiedzie program wspomagający może opcjonalnie stworzyć nowy kurs.</p>
<p>Wszystkie nowo-wygenerowane kursy są ukrywane w momencie stworzenia.. Jest to robione w celu zapobiegania ciekawości studentów w kompletnie pustych kursach kiedy nauczyciel może być nieświadomy.</p>';
$string['createnewusers'] = 'Twórz konta dla użytkowników jeszcze nie zarejestrowanych w Moodle.';
$string['createnewusers_desc'] = 'Dane IMS Enterprise opisują zbiór użytkowników. Jeśli opcja jest włączona, dla tych użytkowników, którzy nie znajdują się jeszcze w bazie danych Moodle, będą tworzone nowe konta, Użytkownicy są wyszukiwane najpierw wg ich &quot;idnumber&quot;, a potem wg ich nazwy użytkownika Moodle (username). Hasła nie są importowane przez plugin IMS Enterprise. Wtyczka ta jednak przeznaczona jest głównie do uwierzytelniania użytkowników (a nie ich tworzenia).';
$string['cronfrequency'] = 'Częstość przetwarzania cron.';
$string['deleteusers'] = 'Usuwaj konta użytkowników, zgodnie z informacjami w danych IMS';
$string['deleteusers_desc'] = 'Jeśli włączone, dane IMS mogą spowodować usunięcie konta użytkownika (jeżeli flaga &quot;recstatus&quot; jest ustawiona na 3, co oznacza usunięcie konta). W Moodle przyjęto, że rekord użytkownika nie jest faktycznie usuwany z bazy danych, lecz jedynie zaznaczany jako usunięty przy pomocy flagi.';
$string['doitnow'] = 'przeprowadzić import IMS Enterprise teraz';
$string['emptyattribute'] = 'Zostaw puste';
$string['filelockedmail'] = 'Plik tekstowy używany przez wtyczkę IMS ({$a}) nie mógł być usunięty przez proces cron. To zazwyczaj oznacza, że uprawnienia pliku są źle ustawione. Napraw uprawnienia tak, aby Moodle mógł usunąć plik, w przeciwnym razie może być on przetwarzany wielokrotnie.';
$string['filelockedmailsubject'] = 'Poważny błąd: plik do automatycznych zapisów IMS';
$string['fixcasepersonalnames'] = 'Zapisuj dane osobowe "Wielką Literą".';
$string['fixcaseusernames'] = 'Zmień nazwę użytkownika na małe litery';
$string['ignore'] = 'Ignoruj';
$string['importimsfile'] = 'Importuj plik IMS Enterprise';
$string['imsrolesdescription'] = 'Specyfikacja IMS Enterprise zawiera 8 odrębnych typów ról. Proszę wybrać, jak je przypisać w Moodle, oraz czy któryś z nich powinien być ignorowany.';
$string['location'] = 'Lokalizacja plików';
$string['logtolocation'] = 'Lokalizację pliku wyjściowego (dziennika). Pozostaw puste, aby wyłączyć dziennik.';
$string['mailadmins'] = 'Powiadom administratora poprzez e-mail';
$string['mailusers'] = 'Powiadom użytkowników poprzez e-mail';
$string['messageprovider:imsenterprise_enrolment'] = 'Wiadomości o zapisach przez IMS Enterprise';
$string['miscsettings'] = 'Różne';
$string['nestedcategories'] = 'Zezwalaj na kategorie zagnieżdżone';
$string['pluginname'] = 'Plik IMS Enterprise';
$string['pluginname_desc'] = 'W tej metodzie regularnie przegląda i przetwarza się odpowiednio sformatowany plik tekstowy znajdujący się w określonym miejscu.
Plik musi być zgodny ze specyfikacją IMS Enterprise i zawierać elementy XML dotyczące: osoby, grupy i członkostwa.';
$string['processphoto'] = 'Dodaj zdjęcie do profilu użytkownika';
$string['restricttarget'] = 'Przetwarzaj dane tylko wtedy, gdy następujący cel jest określony';
$string['restricttarget_desc'] = 'Plik danych IMS może być wykorzystywany w wielu systemach docelowych - różnych LMS lub innych systemach w szkole/uczelni. Jednak w pliku Enterprise można określić, że dane są przeznaczone dla jednego lub więcej konkretnych systemów docelowych. Należy je wtedy wymienić w znaczniku  <target> w <properties>.
Jednak zwykle nie musisz się o to martwić. Gdy pozostawisz to pole puste, Moodle zawsze przetworzy plik danych, nawet gdy w pliku cel jest określony. W przeciwnym wypadku wpisz tu dokładną nazwę, taką jak w znaczniku <target>.';
$string['roles'] = 'Role';
$string['sourcedidfallback'] = 'Użyj „sourcedid” dla identyfikatora użytkownika, jeśli pole „userid” nie zostanie znalezione';
$string['sourcedidfallback_desc'] = 'W danych IMS pole<sourcedid> zawiera stały kod identyfikacyjny osoby, stosowany w systemie źródłowym. Pole <userid> jest oddzielnym polem, które zawiera kod identyfikacyjny używany przez użytkownika podczas logowania.
 W wielu przypadkach te dwa kody mogą być takie same - ale nie zawsze.
Niektóre systemy informacyjne dla studentów nie wyświetlają pola <userid>. W takim przypadku należy włączyć to ustawienie, aby umożliwić użycie <sourcedid> jako identyfikatora użytkownika Moodle. W innym przypadku pozostaw to ustawienie wyłączone.';
$string['truncatecoursecodes'] = 'Skróć kody kursów do tej długości';
$string['truncatecoursecodes_desc'] = 'W niektórych sytuacjach może potrzebować obciąć kody kursów do określonej długości przed przetworzeniem. Jeśli tak, podaj liczbę znaków. W przeciwnym razie pozostaw to pole puste i nie nastąpi skracanie.';
$string['updatecourses'] = 'Aktualizuj kurs';
$string['usecapitafix'] = 'Zaznacz to pole, jeśli używasz systemu &quot;Capita&quot; (ten format XML ma usterki)';
$string['usecapitafix_desc'] = 'Stwierdzono pewną usterkę w plikach XML produkowanych przez system Capita. Jeśli używasz Capita, należy włączyć to ustawienie - w przeciwnym razie pozostaw je wyłączone.';
$string['usersettings'] = 'Opcje danych użytkownika';
$string['zeroisnotruncation'] = '0 oznacza brak obcinania';
