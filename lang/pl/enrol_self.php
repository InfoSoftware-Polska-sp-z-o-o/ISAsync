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
 * Strings for component 'enrol_self', language 'pl', version '4.0'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Zapisy są wyłączone lub nieaktywne';
$string['canntenrolearly'] = 'Nie możesz w tej chwili zapisać się na kurs. Zapisy rozpoczynają się {$a}.';
$string['canntenrollate'] = 'Nie możesz już zapisać się na kurs. Zapisy zakończyły się {$a}.';
$string['cohortnonmemberinfo'] = 'Tylko członkowie kohorty \'{$a}\' mogą dokonać samodzielnego zapisu.';
$string['cohortonly'] = 'Tylko członkowie kohorty';
$string['cohortonly_help'] = 'Zapisywanie samodzielne może być ograniczone dla uczestników wybranej kohorty. Zmiana tego ustawienia nie będzie obejmowała istniejących zapisów.';
$string['confirmbulkdeleteenrolment'] = 'Czy na pewno chcesz usunąć te rejestracje użytkowników?';
$string['customwelcomemessage'] = 'Niestandardowa wiadomość powitalna';
$string['customwelcomemessage_help'] = 'Możesz tu dodać tekst swojej powitalnej wiadomości.
Może to być zwykły tekst, automatyczny format Moodle, może zawierać tagi języka HTML oraz tagi wielojęzyczne.

Możesz też dodać następujące elementy:

* Nazwa kursu {$a->coursename}
* Link do profilu użytkownika {$a->profileurl}
* Adres e-mail użytkownika {$a->email}
* Imię i nazwisko użytkownika {$a->fullname}';
$string['defaultrole'] = 'Domyślnie przypisane role';
$string['defaultrole_desc'] = 'Wskaż rolę, która powinna zostać przypisana użytkownikowi podczas samodzielnego zapisania się na kurs';
$string['deleteselectedusers'] = 'Usuń wybranych użytkowników z listy zapisanych';
$string['editselectedusers'] = 'Edytuj stan uczestnictwa wybranych użytkowników';
$string['enrolenddate'] = 'Data końcowa';
$string['enrolenddate_help'] = 'Jeśli opcja jest włączona, użytkownicy mogą zapisywać się tylko do tego dnia.';
$string['enrolenddaterror'] = 'Data końcowa zapisów na kurs nie może być wcześniejsza niż data rozpoczęcia kursu';
$string['enrolme'] = 'Zapisz mnie';
$string['enrolperiod'] = 'Okres uczestnictwa';
$string['enrolperiod_desc'] = 'Domyślna długość okresu uczestnictwa. Jeśli jest ustawiona na zero, czas uczestnictwa będzie nieograniczony.';
$string['enrolperiod_help'] = 'Okres, w którym zapisany użytkownik ma prawo korzystać z kursu. Jeśli opcja jest wyłączona wówczas dostęp do kursu nie jest limitowany czasowo. W przeciwnym wypadku, po upływie zdefiniowanego okresu czasu, uczestnicy kursu zostaną z niego wypisani.';
$string['enrolstartdate'] = 'Data początkowa';
$string['enrolstartdate_help'] = 'Jeśli ustawiono, użytkownik może się zapisać tylko od tej daty.';
$string['expiredaction'] = 'Akcja wygaśnięcia rejestracji';
$string['expiredaction_help'] = 'Wybierz czynność, którą należy wykonać, gdy rejestracja użytkownika wygaśnie. Należy pamiętać, że niektóre dane i ustawienia użytkownika są usuwane z kursu przy wypisaniu się z niego.';
$string['expirymessageenrolledbody'] = 'Witaj {$a->user},

Informujemy, że twój zapis na kurs {$a->course} wygasa {$a->timeend}.

Jeżeli potrzebujesz pomocy, prosimy o kontakt z {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Powiadomienie o wygaśnięciu zapisu na kurs';
$string['expirymessageenrollerbody'] = 'Samodzielna rejestracja na kurs \'{$a->course}\' wygaśnie w ciągu następnego {$a->threshold} dla następujących użytkowników:

{$a->użytkownicy}

Aby przedłużyć ich rejestrację przejdź do {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Powiadomienie o wygaśnięciu zapisu na kurs';
$string['expirynotifyall'] = 'Rejestrant i zapisany użytkownik';
$string['expirynotifyenroller'] = 'Tylko rejestrant';
$string['groupkey'] = 'Użyj grupowych kluczy dostępu do kursu';
$string['groupkey_desc'] = 'Domyślnie użyj grupowych kluczy dostępu do kursu.';
$string['groupkey_help'] = 'Dzięki kluczowi dostępu do kursu dostęp do kursu jest ograniczony, tzn. dostęp mają tylko ci, którzy znają klucz.
Jeśli grupowy klucz dostępu jest określony, to użytkownik, który go poda, zapisuje się na kurs, a również automatycznie staje się członkiem tej grupy
Aby działał grupowy klucz dostępu, musi on być określony w ustawieniach grupy, ale i główny klucz dostępu do kursu musi być określony w ustawieniach kursu.';
$string['keyholder'] = 'Powinieneś otrzymać klucz dostępu od:';
$string['longtimenosee'] = 'Wypisz nieaktywne osoby z kursu po';
$string['longtimenosee_help'] = 'Jeśli użytkownicy nie mają dostępu do kursu przez długi czas to są automatycznie z niego  wypisywani. Ten parametr określa limit czasowy tego terminu.';
$string['maxenrolled'] = 'Maksymalna liczba zapisanych użytkowników';
$string['maxenrolled_help'] = 'Określ maksymalną liczbę użytkowników, którzy mogą się zapisać samodzielnie. 0 oznacza brak limitu.';
$string['maxenrolledreached'] = 'Maksymalna liczba użytkowników uprawnionych do samodzielnych zapisów została już osiągnięta.';
$string['messageprovider:expiry_notification'] = 'Powiadomienia o wygaśnięciu zapisu na kurs';
$string['newenrols'] = 'Zezwól na nowe zapisy';
$string['newenrols_desc'] = 'Domyślnie zezwalaj użytkownikom na samodzielne zapisy do nowych kursów.';
$string['newenrols_help'] = 'To ustawienie określa czy użytkownik może zapisać się do tego kursu.';
$string['nopassword'] = 'Klucz dostępu do kursu nie jest wymagany.';
$string['password'] = 'Klucz dostępu';
$string['password_help'] = 'Dzięki kluczowi dostępu do kursu dostęp do kursu jest ograniczony, tzn. dostęp mają tylko ci, którzy znają klucz.
Jeśli pole jest puste, każdy użytkownik może zapisać się na kurs.

Jeśli klucz dostępu jest określony, to użytkownik, który ma zamiar zapisać się na kurs, będzie poproszony o podanie klucza.
Uwaga, użytkownik podaje ten klucz tylko RAZ, w momencie zapisywania się na kurs.';
$string['passwordinvalid'] = 'Nieprawidłowy klucz dostępu, spróbuj ponownie';
$string['passwordinvalidhint'] = 'Podany klucz dostępu do kursu nie jest poprawny, spróbuj ponownie<br />(wskazówka: klucz zaczyna się na \'{$a}\')';
$string['pluginname'] = 'Zapisywanie samodzielne';
$string['pluginname_desc'] = 'Wtyczka zapisywania samodzielnego pozwala użytkownikowi na wybór, w których kursach chcą uczestniczyć. Kursy mogą być chronione za pomocą klucza dostępu. Zwykle zapisy odbywają się poprzez wtyczkę zapisów ręcznych, którą trzeba włączyć w kursie';
$string['privacy:metadata'] = 'Wtyczka Samodzielnej rejestracji nie przechowuje żadnych danych osobowych.';
$string['requirepassword'] = 'Wymagaj klucza dostępu do kursu';
$string['requirepassword_desc'] = 'Wymagaj klucza dostępu do nowych kursów i uniemożliwiaj usunięcie klucza z istniejących kursów.';
$string['role'] = 'Domyślnie przypisana rola';
$string['self:config'] = 'Konfiguracja instancji samodzielnych zapisów';
$string['self:enrolself'] = 'Zapisz się na kurs samodzielnie';
$string['self:manage'] = 'Zarządzaj zapisanymi użytkownikami';
$string['self:unenrol'] = 'Wypisz użytkowników z kursu';
$string['self:unenrolself'] = 'Wypisz się z kursu';
$string['sendcoursewelcomemessage'] = 'Wysyłaj mail z powitaniem do nowych uczestników kursu';
$string['sendcoursewelcomemessage_help'] = 'Jeśli zaznaczysz, każdy użytkownik, który zapisze się do kursu samodzielnie, otrzyma mailem wiadomość powitalną.';
$string['showhint'] = 'Pokaż podpowiedź';
$string['showhint_desc'] = 'Pokaż pierwszą literę klucza dostępu gościa.';
$string['status'] = 'Zezwól na samodzielną rejestrację';
$string['status_desc'] = 'Zezwalaj użytkownikom na samodzielne zapisy na kurs.';
$string['status_help'] = 'To ustawienie określa, czy użytkownik może zapisać się na kurs (a także wypisać z kursu jeśli posiada odpowiednie uprawnienia).';
$string['unenrol'] = 'Wypisz użytkownika';
$string['unenrolselfconfirm'] = 'Czy na pewno chcesz wypisać się z kursu "{$a}"?';
$string['unenroluser'] = 'Czy na pewno chcesz wypisać "{$a->user}" z kursu "{$a->course}"?';
$string['unenrolusers'] = 'Zapisz użytkowników';
$string['usepasswordpolicy'] = 'Użyj zasady hasła';
$string['usepasswordpolicy_desc'] = 'Użyj standardowych zasad haseł dla kluczy rejestracji.';
$string['welcometocourse'] = 'Witamy w {$a}';
$string['welcometocoursetext'] = 'Witamy w {$a->coursename}!

Jeśli jeszcze tego nie zrobiłeś, edytuj stronę swojego profilu, abyśmy mogli dowiedzieć się więcej o Tobie:

   {$a->profileurl}';
