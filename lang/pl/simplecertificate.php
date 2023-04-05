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
 * Strings for component 'simplecertificate', language 'pl', version '4.0'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Wszyscy użytkownicy';
$string['awardedsubject'] = 'Powiadomieniu o przyznaniu certyfikatu:{$a->certificate} wydany dla {$a->student}';
$string['awardedto'] = 'Przyznane dla';
$string['bulkaction'] = 'Wybierz operację zbiorczą';
$string['bulkbuttonlabel'] = 'Wyślij';
$string['bulkview'] = 'Operacje zbiorcze';
$string['cantdeleteissue'] = 'Błąd podczas usuwania wydanych certyfikatów';
$string['cantissue'] = 'Certyfikat nie może zostać wydany, ponieważ użytkownik nie spełnia wymaganych warunków.';
$string['certificatecopy'] = 'KOPIA';
$string['certificateimage'] = 'Plik obrazu certyfiaktu';
$string['certificateimage_help'] = 'Ten obraz będzie użyty na certyfikacie';
$string['certificatename'] = 'Nazwa certyfikatu';
$string['certificatename_help'] = 'Nazwa certyfikatu';
$string['certificatenot'] = 'Nie znaleziono instancji modułu \'Prosty certyfikat\'';
$string['certificatetext'] = 'Tekst certyfikatu';
$string['certificatetext_help'] = 'To jest tekst, który zostanie użyty na odwrocie certyfiaktu. Niektóry słowa specjalne (znaczniki) zostaną zastąpione przez odpowiadające im wartości zmiennych takich jak nazwa kursu, imię i nazwisko studenta, ocena ...

Są to:
<ul>
<li>{USERNAME} -> Imię i nazwisko</li>
<li>{COURSENAME} -> Pełna (bądź zdefiniowana alternatywna) nazwa kursu</li>
<li>{GRADE} -> Sformatowana ocena</li>
<li>{DATE} -> Sformatowania data</li>
<li>{OUTCOME} -> Efekty uczenia się</li>
<li>{TEACHERS} -> Lista nauczycieli</li>
<li>{IDNUMBER} -> Numer id użytkownika</li>
<li>{FIRSTNAME} -> Imię</li>
<li>{LASTNAME} -> Nazwisko</li>
<li>{EMAIL} -> adres e-mail użytkownika</li>
<li>{ICQ} -> identyfikator ICQ użytkownika</li>
<li>{SKYPE} -> identyfikator Skype użytkownika</li>
<li>{YAHOO} -> identyfikator yahoo messenger użytkownika</li>
<li>{AIM} -> Identyfikator AIM użytkownika</li>
<li>{MSN} -> Identyfikator MSN użytkownika</li>
<li>{PHONE1} -> Pierwszy numer telefoniczny użytkownika</li>
<li>{PHONE2} -> Drugi numer telefoniczny użytkownika</li>
<li>{INSTITUTION} ->Instytucja użytkownika</li>
<li>{DEPARTMENT} -> Department użytkonika</li>
<li>{ADDRESS} -> Adres użytkownika</li>
<li>{CITY} -> Miasto użytkownika</li>
<li>{COUNTRY} -> Kraj Użytkownika</li>
<li>{URL} -> Strona WWW użytkownika</li>
<li>{CERTIFICATECODE} -> Unikalny kod certyfikatu</li>
<li>{USERROLENAME} -> Nazwa roli użytkownika w kursie</li>
<li>{TIMESTART} -> Data zapisania użytkownika w kursie</li>
<li>{USERIMAGE} -> Obraz z profilu użytkownika</li>
<li>{USERRESULTS} -> Rezultaty aktywności użytkownika w innych kursach</li>
<li>{PROFILE_xxxx} -> Dodatkowe pola profilu użytkownika</li>
</ul>
Aby skorzystać z dodatkowych pól profilu użytkownika, należy ich nazwę poprzedzić prefiksem "PROFILE_", np. jeśli stworzyłeś  w profilu użytkownika dodatkowe pole o skróconej nazwie "dataur" , aby jej użyć należy użyć znacznika {PROFILE_DATAUR}.

Tekst może zawierać podstawowe kody html, podstawowe czcionki, tabele, ale unikaj definiowania położenia.
The text can use basic html, basic fonts, tables,  but avoid any position definition.';
$string['certificatetextx'] = 'Tekst certyfikatu w pozycji poziomej';
$string['certificatetexty'] = 'Tekst certyfikatu w pozycji pionowej';
$string['certificateverification'] = 'Weryfikacja certyfikatu';
$string['certlifetime'] = 'Zachowaj wydane certyfikaty przez: (miesiące)';
$string['certlifetime_help'] = 'To ustawienie definiuje okres przez jaki zamierzasz przechowywać wydane certyfikaty Wydane certyfikaty starsze niż określony tu wiek zastaną automatycznie usunięte.';
$string['code'] = 'Kod';
$string['codex'] = 'Kod QR certyfikatu w pozycji poziomej';
$string['codey'] = 'Kod QR certyfikatu w pozycji pionowej';
$string['completedusers'] = 'Użytkownicy, którzy spełniają wymagania.';
$string['completiondate'] = 'Ukończenie kursu';
$string['coursegrade'] = 'Ocena kursu';
$string['coursename'] = 'Alternatywna nazwa przedmiotu';
$string['coursename_help'] = 'Alternatywna nazwa przedmiotu';
$string['coursenotfound'] = 'Kursu nie znaleziono';
$string['coursestartdate'] = 'Data rozpoczęcia kursu';
$string['coursetimereq'] = 'Wymagany czas spędzony w kursie (w minutach)';
$string['coursetimereq_help'] = 'Wprowadź minimalny okres (w minutach), jaki student musi być zalogowany do kursu nim będzie miał możliwość otrzymania certyfikatu.';
$string['datefmt'] = 'Format daty';
$string['datefmt_help'] = 'Wprowadź poprawny (w sensie języka PHP) wzór formatu daty (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>). Lub pozostaw to pole puste aby wybrać format właściwy dla wybranego języka.';
$string['defaultcertificatetextx'] = 'Domyślna  pozycja tekstu w poziomie';
$string['defaultcertificatetexty'] = 'Domyślna  pozycja tekstu w pionie';
$string['defaultcodex'] = 'Domyślna  pozycja kodu QR w poziomie';
$string['defaultcodey'] = 'Domyślna  pozycja kodu QR w pionie';
$string['defaultheight'] = 'Domyślna wysokość';
$string['defaultperpage'] = 'Na stronę';
$string['defaultperpage_help'] = 'Liczna certyfikatów do wyświetlenia na stronie (max. 200)';
$string['defaultwidth'] = 'Domyślna szerokość';
$string['deleteall'] = 'Skasuj wszystko';
$string['deleteselected'] = 'Usuń zaznaczone';
$string['deletissuedcertificates'] = 'cUsuń wydane certyfikaty';
$string['delivery'] = 'Dostarczenie';
$string['delivery_help'] = 'Wybierz, w jaki sposób twoi studenci chcieliby otrzymać certyfikat.
<ul>
<li>Otwórz w przeglądarce: Otwiera certyfikat w nowym oknie przeglądarki.</li>
<li>Wymuś pobranie: Otwiera okno pobierania w przeglądarce.</li>
<li>Wyślij e-mailem: Wybranie tej opcji powoduje wysłanie studentowi certyfikatu w postaci załącznika do wiadomości e-mail.</li>
<li>Użytkownik, po otrzymaniu certyfikatu i kliknięciu na jego link na stronie kursu zobaczy datę jego otrzymania i będzie mógł go przejrzeć.</li>
</ul>';
$string['designoptions'] = 'Opcje projektowania';
$string['download'] = 'Wymuś pobieranie';
$string['emailcertificate'] = 'E-mail';
$string['emailfrom'] = 'Nazwa w polu Od emaila';
$string['emailfrom_help'] = 'Alternatywna nazwa w polu Od emaila';
$string['emailoncompletion'] = 'E-mail po ukończeniu kursu';
$string['emailothers'] = 'Powiadom e-mailowo innych';
$string['emailothers_help'] = 'Wprowadź adresy email oddzielone przecinkami tych osób, które mają być powiadamiane emailem kiedykolwiek student otrzymuje certyfikat.';
$string['emailsent'] = 'Maile zostały wysłane';
$string['emailstudentsubject'] = 'Twój certyfiakt z kursu {$a->course}';
$string['emailstudenttext'] = 'Dzień dobry  {$a->username},

W załączeniu swój znajdziesz swój certyfikat z kursu {$->course}.

TO JEST WIADOMOŚĆ WYSŁANA AUTOMATYCZNIE - NIE ODPISUJ NA NIĄ';
$string['emailteachermail'] = '{$a->student} otrzymał swój certyfikat: \'{$a->certificate}\'
z kursu {$a->course}.

Możesz go przejrzeć tu:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} otrzymał swój certyfikat: \'<i>{$a->certificate}</i>\'
z kursu {$a->course}.

Możesz go przejrzeć tu:

        <a href="{$a->url}">Raport certyfikatu';
$string['emailteachers'] = 'Wyślij e-mail nauczycielom';
$string['emailteachers_help'] = 'Jeśli włączone, wykładowcy będą powiadamiani emailem kiedykolwiek student otrzyma certyfikat.';
$string['enablesecondpage'] = 'Włącz drukowanie tylnej strony certyfiaktu';
$string['enablesecondpage_help'] = 'Włącz edycję tylnej strony certyfikatu. Jeśli jest wyłączona tylko kod QR będzie drukowany na odwrocie (jeśli kody QR są włączone)';
$string['eventcertificate_verified'] = 'Certyfikat został potwierdzony';
$string['eventcertificate_verified_description'] = 'Użytkownik o id {$a->userid} zweryfikował certyfikat z id {$a->certificateid}, wydany dla użytkownika o id {$a->certiticate_userid}.';
$string['filenotfound'] = 'Nie znaleziono pliku';
$string['getcertificate'] = 'Pobierz certyfikat';
$string['grade'] = 'Ocena';
$string['gradefmt'] = 'Format oceny';
$string['gradefmt_help'] = 'Są trzy możliwości wydruku oceny na certyfikacie:
<ul>
<li>Ocena w procentach</li>
<i>Ocena w punktach</li>
<i>Ocena oznaczona literą</li>
<ul>';
$string['gradeletter'] = 'Ocena oznaczona literą';
$string['gradepercent'] = 'Ocena w procentach';
$string['gradepoints'] = 'Ocena w punktach';
$string['height'] = 'Wysokość certyfikatu';
$string['hours'] = 'godzin';
$string['intro'] = 'Wprowadzenie';
$string['invalidcode'] = 'Niepoprawny kod certyfikatu';
$string['issued'] = 'Wydany';
$string['issuedcertificatenotfound'] = 'Nie znaleziono wydanego certyfiaktu';
$string['issueddate'] = 'Data wystawienia';
$string['issueddownload'] = 'Wydany certyfikat [id: {$a}] został pobrany';
$string['issuedview'] = 'Wydane certyfikaty';
$string['issueoptions'] = 'Opcja wydanie';
$string['keywords'] = 'certyfikat, kurs, pdf, moodle';
$string['modulename'] = 'Prosty Certyfikat';
$string['modulename_help'] = 'Aktywność "Prosty certyfikat" pozwala nauczycielowi na tworzenie własnych certyfikatów, które mogą być wydawane uczestnikom, którzy spełnili określone przez niego wymagania.';
$string['modulenameplural'] = 'Proste Certyfikaty';
$string['multipdf'] = 'Pobierz certyfikaty w pliku zip';
$string['neverdeleteoption'] = 'Nigdy nie usuwaj';
$string['nocertificatesissued'] = 'Brak wydanych certyfikatów';
$string['nodelivering'] = 'Nie ustalono sposobu dostarczenia. Użytkownik otrzyma certyfikat w inny sposób';
$string['notreceived'] = 'Brak wydanych certyfikatów';
$string['onepdf'] = 'Pobierz certyfikaty w jednym pliku pdf';
$string['openbrowser'] = 'Otwórz w nowym oknie';
$string['opendownload'] = 'Kliknij przycisk poniżej, aby zapisać certyfikat.';
$string['openemail'] = 'Kliknij przycisk poniżej, a twój certyfikat zostanie wysłany do Ciebie w formie załącznika do poczty.';
$string['openwindow'] = 'Kliknij przycisk poniżej, aby otworzyć swój certyfikat w nowym oknie przeglądarki.';
$string['pluginadministration'] = 'Administracja certyfikatem';
$string['pluginname'] = 'Prosty Certyfikat';
$string['printdate'] = 'Wydrukuj datę';
$string['printdate_help'] = 'Ta data zostanie wydrukowana, jeśli wybrano wydruk daty. Jeśli jednak wybrano datę ukończenia kursu, lecz uczestnik nie skończy kursu, będzie wydrukowana data jego otrzymania. Możesz również wybrać wydruk daty ocenienia danej aktywności. Jeśli certyfikat zostanie wydany zanim aktywność została oceniona, wydrukowana zostanie data otrzymania go.';
$string['printgrade'] = 'Wydrukuj ocenę';
$string['printgrade_help'] = 'Do wydruku na certyfikacie, możesz wybrać dowolne z dostępnych w dzienniku pozycje ocen. Pozycje oceny są wymienione takiej samej kolejności, w jakiej występują w dzienniku.';
$string['printoutcome'] = 'Wydrukuj efekty uczenia się';
$string['printoutcome_help'] = 'Do wydruku na certyfikacie możesz wybrać nazwy dowolnych  efektów uczenia się osiągniętych przez użytkownika, np. Komunikacja werbalna: Biegły';
$string['printqrcode'] = 'Wydrukuj kod QR certyfikatu';
$string['printqrcode_help'] = 'Wydrukuj (lub nie) kod QR certyfikatu';
$string['qrcodefirstpage'] = 'Wydrukuj kod QR na pierwszej stronie';
$string['qrcodefirstpage_help'] = 'Wydrukuj kod QR na pierwszej stronie';
$string['qrcodeposition'] = 'Pozycja kodu QR certyfikatu';
$string['qrcodeposition_help'] = 'To są współrzędne XY ( w milimetrach) kodu QR certyfikatu';
$string['receiveddate'] = 'Data wystawienia';
$string['report'] = 'Raport';
$string['requiredtimenotmet'] = 'Musisz spędzić przynajmniej  {$a->requiredtime} minut w tym kursie, aby otrzymać certyfikat.';
$string['secondimage'] = 'Plik obrazu do umieszczenia na odwrocie certyfikatu';
$string['secondimage_help'] = 'Ten obraz zostanie umieszczony na odwrocie certyfikatu';
$string['secondpageoptions'] = 'Tylna strona certyfikatu';
$string['secondpagetext'] = 'Tekst na odwrocie certyfiaktu';
$string['secondpagex'] = 'Pozioma pozycja tekstu na odwrocie certyfiaktu';
$string['secondpagey'] = 'Pionowa pozycja tekstu na odwrocie certyfiaktu';
$string['secondtextposition'] = 'Pozycja tekstu na odwrocie certyfiaktu';
$string['secondtextposition_help'] = 'To są współrzędne XY (w milimetrach) położenia tekstu na odwrocie certyfikatu';
$string['sendtoemail'] = 'Wyślij na adresy e-mail użytkowników';
$string['showusers'] = 'Pokaż';
$string['simplecertificate:addinstance'] = 'Dodaj aktywność "Prosty certyfikat"';
$string['simplecertificate:manage'] = 'Zarządzaj aktywnością "Prosty certyfikat"';
$string['simplecertificate:view'] = 'Pokaż aktywność "Prosty certyfikat"';
$string['size'] = 'Rozmiar certyfikatu';
$string['size_help'] = 'To są wymiary szerokości  i wysokości (w milimetrach) certyfikatu. Domyślny rozmiar to A4  (układ poziomy)';
$string['standardview'] = 'Wydaj testowy certyfikat';
$string['summaryofattempts'] = 'Podsumowanie wcześniej otrzymanych certyfikatów';
$string['textposition'] = 'Pozycja tekstu certyfikatu';
$string['textposition_help'] = 'To są współrzędne XY (w milimetrach) tekstu certyfikatu';
$string['timestartdatefmt'] = 'Format daty rozpoczęcia kursu';
$string['timestartdatefmt_help'] = 'Wprowadź poprawny (w sensie języka PHP) wzór formatu daty (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>) lub zostaw to pole puste, aby użyć formatu wynikającego z ustawień wybranego języka.';
$string['upgradeerror'] = 'Błąd podczas upgradu $a';
$string['usercontextnotfound'] = 'Nie znaleziono kontekstu użytkownika';
$string['userdateformat'] = 'Format daty języka użytkownika';
$string['usernotfound'] = 'Nie znaleziono użytkownika';
$string['variablesoptions'] = 'Inne opcje';
$string['verifycertificate'] = 'Weryfikuj certyfikat';
$string['viewcertificateviews'] = 'Zobacz {$a} wydanych certyfikatów';
$string['width'] = 'Szerokość certyfikatu';
