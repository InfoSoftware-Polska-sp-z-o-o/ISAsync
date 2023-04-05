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
 * Strings for component 'customcert', language 'pl', version '4.0'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Dodaj kolejną stronę certyfikatu';
$string['addelement'] = 'Dodaj element';
$string['awardedto'] = 'Przyznany dla';
$string['cannotverifyallcertificates'] = 'Nie masz uprawnień do weryfikowania wszystkich certyfikatów na platformie.';
$string['certificate'] = 'Certyfikat';
$string['code'] = 'Kod';
$string['copy'] = 'Kopiowanie';
$string['coursetimereq'] = 'Wymagany czas spędzony w kursie (minuty):';
$string['coursetimereq_help'] = 'Wprowadź tutaj minimalną liczbę minut, ile student musi spędzić w kursie (być zalogowany) aby otrzymać certyfikat.';
$string['createtemplate'] = 'Stwórz szablon';
$string['customcert:addinstance'] = 'Dodaj nowy certyfikat niestandardowy';
$string['customcert:manage'] = 'Zarządzaj certyfikatem niestandardowym';
$string['customcert:verifyallcertificates'] = 'Weryfikacja wszystkich certyfikatów na platformie.';
$string['customcert:verifycertificate'] = 'Zweryfikuj certyfikat';
$string['customcert:view'] = 'Zobacz certyfikat niestandardowy';
$string['customcert:viewallcertificates'] = 'Zobacz wszystkie certyfikaty';
$string['customcert:viewreport'] = 'Zobacz raport z kursu';
$string['customcertsettings'] = 'Niestandardowe ustawienia certyfikatów';
$string['deletecertpage'] = 'Usuń stronę';
$string['deleteconfirm'] = 'Usuń potwierdzenie';
$string['deleteelement'] = 'Usuń element';
$string['deleteelementconfirm'] = 'Czy na pewno chcesz usunąć ten element?';
$string['deleteissueconfirm'] = 'Czy na pewno chcesz usunąć ten wydany certyfikat?';
$string['deletepageconfirm'] = 'Czy na pewno chcesz usunąć stronę z certyfikatu?';
$string['deletetemplateconfirm'] = 'Czy na pewno chcesz usunąć ten szablon certyfikatu?';
$string['description'] = 'Opis';
$string['duplicate'] = 'Duplikuj';
$string['duplicateconfirm'] = 'Duplikat potwierdzenia/powiel potwierdzenie';
$string['duplicatetemplateconfirm'] = 'Czy na pewno chcesz zduplikować ten szablon certyfikatu?';
$string['editcustomcert'] = 'Edytuj certyfikat';
$string['editelement'] = 'Edytuj element';
$string['edittemplate'] = 'Edycja szablonu';
$string['elementname'] = 'Nazwa elementu';
$string['elementname_help'] = 'To będzie nazwa używana do identyfikowania tego elementu podczas edytowania certyfikatu. Uwaga: nazwa ta nie zostanie wyświetlona w pliku PDF.';
$string['elements'] = 'Elementy';
$string['elements_help'] = 'Lista elementów, które będą wyświetlane na certyfikacie.

Uwaga: elementy są wyświetlane w tej kolejności. Kolejność może być zmieniona za pomocą strzałek obok każdego elementu.';
$string['elementwidth'] = 'Szerokość';
$string['elementwidth_help'] = 'Określ szerokość elementu - "0" oznacza, że nie ma ograniczenia szerokości.';
$string['emailnonstudentbody'] = 'W załączeniu certyfikat \'{$a->certificatename}\' dla \'{$a->userfullname}\' za kurs \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'W załączeniu certyfikat \'{$a->certificatename}\' dla \'{$a->userfullname}\' za kurs \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Wyświetl raport certyfikatu';
$string['emailnonstudentgreeting'] = 'Cześć';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Wyślij e-maila innym';
$string['emailothers_help'] = 'Jeśli to ustawisz, to zostanie wysłany e-mail na adresy e-mail wymienione tutaj (rozdzielone przecinkami) wraz z kopią certyfikatu, gdy stanie się dostępna.';
$string['emailstudentbody'] = 'Dołączony jest twój certyfikat \'{$a->certificatename}\' dla kursu \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'W załączeniu Twój certyfikat \'{$a->certificatename}\' za kurs \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Zobacz certyfikat';
$string['emailstudentgreeting'] = 'Drogi/a {$a}';
$string['emailstudents'] = 'Wyślij e-mail kursantom';
$string['emailstudents_help'] = 'Jeśli to ustawisz, to zostanie wysłany e-maila do uczniów wraz z kopią certyfikatu, gdy będzie dostępna.';
$string['emailstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailteachers'] = 'Wyślij e-mail nauczycielom';
$string['emailteachers_help'] = 'Jeśli to ustawisz, to nauczyciel otrzyma kopię certyfikatu, gdy będzie dostępna.';
$string['font'] = 'Czcionka';
$string['font_help'] = 'Czcionka użyta podczas generowania tego elementu.';
$string['fontcolour'] = 'Kolor';
$string['fontcolour_help'] = 'Kolor czcionki';
$string['fontsize'] = 'Rozmiar';
$string['fontsize_help'] = 'Rozmiar czcionki w punktach.';
$string['getcustomcert'] = 'Wyświetl certyfikat';
$string['height'] = 'Wysokość';
$string['height_help'] = 'Jest to wysokość certyfikatu PDF w mm. Dla porównania A4 kawałek papieru ma wysokość 297 mm, a list o wysokości 279 mm.';
$string['invalidcode'] = 'Nieprawidłowy kod.';
$string['invalidcolour'] = 'Nieprawidłowy kolor, podaj prawidłową nazwę koloru HTML lub sześciocyfrowy lub trzycyfrowy kolor szesnastkowy.';
$string['invalidelementwidth'] = 'Wprowadź liczbę dodatnią.';
$string['invalidheight'] = 'Wysokość musi być liczbą większą niż 0.';
$string['invalidmargin'] = 'Margines musi być liczbą większą niż 0.';
$string['invalidposition'] = 'Proszę wybrać numer dla pozycji {$a}.';
$string['invalidwidth'] = 'Szerokość musi być liczbą większą niż 0.';
$string['landscape'] = 'Poziomo';
$string['leftmargin'] = 'Lewy margines';
$string['leftmargin_help'] = 'Lewy margines na certyfikacie PDF, podany w milimetrach';
$string['listofissues'] = 'Odbiorcy certyfikatu: {$a}';
$string['load'] = 'Wczytaj';
$string['loadtemplate'] = 'Wczytaj szablon';
$string['loadtemplatemsg'] = 'Czy na pewno chcesz załadować ten szablon? Spowoduje to usunięcie wszystkich istniejących stron i elementów tego certyfikatu.';
$string['managetemplates'] = 'Zarządzaj szablonami';
$string['managetemplatesdesc'] = 'Ten link przeniesie Cię na nowy ekran, w którym będziesz mógł zarządzać szablonami używanymi w aktywności Niestandardowych certyfikatów w kursach.';
$string['modify'] = 'Modyfikacja';
$string['modulename'] = 'Certyfikat niestandardowy';
$string['modulename_help'] = 'Ten moduł umożliwia dynamiczne generowanie certyfikatów PDF.';
$string['modulenameplural'] = 'Certyfikaty niestandardowe';
$string['mycertificates'] = 'Moje certyfikaty';
$string['mycertificatesdescription'] = 'Certyfikaty przesłane przez email lub pobrane z platformy.';
$string['name'] = 'Nazwa';
$string['nametoolong'] = 'Przekroczono maksymalną dozwoloną długość nazwy';
$string['nocustomcerts'] = 'Brak certyfikatów dla tego kursu';
$string['noimage'] = 'Brak obrazu';
$string['norecipients'] = 'Brak odbiorców';
$string['notemplates'] = 'Brak szablonów';
$string['notissued'] = 'Nie wydany';
$string['notverified'] = 'Nie zweryfikowany';
$string['options'] = 'Opcje';
$string['page'] = 'Strona {$a}';
$string['pluginadministration'] = 'Administracja certyfikatem niestandardowym';
$string['pluginname'] = 'Certyfikat niestandardowy';
$string['portrait'] = 'Portret';
$string['posx'] = 'Pozycja X';
$string['posx_help'] = 'Jest to pozycja w mm od lewego górnego rogu, w której chcesz zlokalizować punkt odniesienia elementu w kierunku X.';
$string['posy'] = 'Pozycja Y';
$string['posy_help'] = 'Jest to pozycja w mm od lewego górnego rogu, w której chcesz zlokalizować punkt odniesienia elementu w kierunku Y.';
$string['print'] = 'Drukowanie';
$string['privacy:metadata:customcert_issues'] = 'Lista wydanych certyfikatów';
$string['privacy:metadata:customcert_issues:code'] = 'Kod należący do certyfikatu';
$string['privacy:metadata:customcert_issues:customcertid'] = 'ID certyfikatu';
$string['privacy:metadata:customcert_issues:emailed'] = 'Czy certyfikat został wysłany na adres email';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Czas wydania certyfikatu';
$string['privacy:metadata:customcert_issues:userid'] = 'ID odbiorcy certyfikatu';
$string['rearrangeelements'] = 'Zmień pozycję elementów';
$string['rearrangeelementsheading'] = 'Przeciągnij i upuść elementy, aby zmienić miejsce ich umieszczenia w certyfikacie.';
$string['receiveddate'] = 'Data otrzymania';
$string['refpoint'] = 'Lokalizacja punktu odniesienia';
$string['refpoint_help'] = 'Punktem odniesienia jest położenie elementu, z którego są określone współrzędne X i Y. Jest to oznaczone symbolem "+", który pojawia się w środku lub narożach elementu.';
$string['replacetemplate'] = 'Zamień';
$string['requiredtimenotmet'] = 'Musisz spędzić co najmniej {$a->requiredtime} minut w kursie aby uzyskać certyfikat.';
$string['rightmargin'] = 'Prawy margines';
$string['rightmargin_help'] = 'Prawy margines na certyfikacie PDF, podany w milimetrach';
$string['save'] = 'Zapisz';
$string['saveandclose'] = 'Zapisz i zamknij';
$string['saveandcontinue'] = 'Zapisz i kontynuuj';
$string['savechangespreview'] = 'Zapisz zmiany i zobacz podgląd';
$string['savetemplate'] = 'Zapisz szablon';
$string['search:activity'] = 'Certyfikat niestandardowy - informacje o aktywności';
$string['setprotection'] = 'Ustaw zabezpieczenia';
$string['setprotection_help'] = 'Wybierz czynności, które chcesz zabronić użytkownikom do wykonania na certyfikacie.';
$string['showposxy'] = 'Pokaż pozycję X i Y';
$string['showposxy_desc'] = 'Spowoduje to wyświetlenie pozycji X i Y podczas edytowania elementu, co pozwala użytkownikowi dokładnie określić lokalizację.

Nie jest to wymagane, jeśli planujesz korzystać wyłącznie z interfejsu przeciągnij i upuść w tym celu.';
$string['taskemailcertificate'] = 'Obsługuje wysyłkę certyfikatów e-mailem.';
$string['templatename'] = 'Nazwa szablonu';
$string['templatenameexists'] = 'Ta nazwa szablonu jest używana, wprowadź inną.';
$string['topcenter'] = 'Centrum';
$string['topleft'] = 'Górny lewy';
$string['topright'] = 'Górny prawy';
$string['type'] = 'Typ';
$string['uploadimage'] = 'Prześlij obraz';
$string['uploadimagedesc'] = 'Ten link przeniesie Cię na nowy ekran, na którym możesz przesyłać zdjęcia. Zdjęcia przesłane za pomocą tej metody będą dostępne w całej witrynie dla wszystkich użytkowników, którzy mogą tworzyć własne certyfikaty.';
$string['verified'] = 'Zweryfikowane';
$string['verify'] = 'Zweryfikuj';
$string['verifyallcertificates'] = 'Zezwól na weryfikację certyfikatów';
$string['verifyallcertificates_desc'] = 'Gdy to ustawienie jest włączone, każda osoba (w tym użytkownicy niezalogowani) może odwiedzić link \'{$a}\' w celu zweryfikowania dowolnego certyfikatu na stronie, zamiast przejść do linku weryfikacyjnego dla każdego certyfikatu.

Uwaga: dotyczy to tylko certyfikatów, w których opcja \'Pozwól każdemu na weryfikację certyfikatu\' została ustawiona na \'Tak\' w ustawieniach certyfikatu.';
$string['verifycertificate'] = 'Zweryfikuj certyfikat';
$string['verifycertificateanyone'] = 'Zezwól każdemu na weryfikację certyfikatu';
$string['verifycertificateanyone_help'] = 'To ustawienie umożliwia każdemu, kto ma link weryfikacji certyfikatu (w tym użytkownikom niezalogowanym) zweryfikować certyfikat.';
$string['verifycertificatedesc'] = 'Ten link przeniesie Cię do nowego ekranu, na którym będziesz mógł weryfikować certyfikaty na stronie';
$string['width'] = 'Szerokość';
$string['width_help'] = 'Jest to szerokość certyfikatu PDF w mm. Dla celów referencyjnych arkusz A4 ma 210 mm szerokości i ma szerokość 216 mm.';
