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
 * Strings for component 'certificate', language 'pl', version '4.0'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Dodaj kolejną powiązaną opcję aktywności';
$string['addlinktitle'] = 'Kliknij, aby dodać kolejną powiązaną opcję aktywności';
$string['areaintro'] = 'Certyfikat - wprowadzenie';
$string['awarded'] = 'Przyznane';
$string['awardedto'] = 'Przyznane dla';
$string['back'] = 'Z powrotem';
$string['border'] = 'Obramowanie';
$string['borderblack'] = 'Czarny';
$string['borderblue'] = 'Niebieski';
$string['borderbrown'] = 'Brązowy';
$string['bordercolor'] = 'Linie obramowania';
$string['bordercolor_help'] = 'Ponieważ obrazy mogą znacznie zwiększyć rozmiar pliku PDF, możesz wybrać, aby wydrukować ramkę z linii zamiast używania obrazku ramki (upewnij się że opcja Obraz obramowania jest ustawiona na Nie). Opcja linii ramki wydrukuje ładne obramowanie złożone z 3 linii o różnych szerokość w wybranym kolorze.';
$string['bordergreen'] = 'Zielony';
$string['borderlines'] = 'Linie';
$string['borderstyle'] = 'Obraz obramowania';
$string['borderstyle_help'] = 'Opcja obrazu obramowania pozwala tobie na wybranie obrazka obramowania z folderu certyfikatu/pix/obramowania. Wybierz obraz obramowania który chcesz wokół krawędzi certyfikatów lub wybierz brak obramowania.';
$string['certificate'] = 'Weryfikacja dla kodu certyfikatu:';
$string['certificate:addinstance'] = 'Dodaj nowy certyfikat';
$string['certificate:manage'] = 'Zarządzaj certyfikatem';
$string['certificate:printteacher'] = 'Bądź wymieniony na certyfikacie  jako nauczyciel, jeśli wydruk danych nauczyciela jest włączony.';
$string['certificate:student'] = 'Pobieranie certyfikatu';
$string['certificate:view'] = 'Wyświetl certyfikat';
$string['certificatename'] = 'Nazwa certyfikatu';
$string['certificatereport'] = 'Raport certyfikatów';
$string['certificatesfor'] = 'Certyfikaty dla';
$string['certificatetype'] = 'Typ certyfikatu';
$string['certificatetype_help'] = 'To jest to, gdzie możesz określić układ certyfikatu. Folder typu certyfikatu obejmuje 4 domyślne certyfikaty:
A4 wbudowane wydruki na papierze A4 z wbudowanymi czcionkami.
A4 niewbudowane wydruki na papierze A4 bez wbudowanych czcionek.
List wbudowane wydruki na papierze listownym z wbudowanymi czcionkami.
List niewbudowane wydruki na papierze listownym bez wbudowanych czcionek.

Niewbudowane typy używają czcionek Helvetica i Times. Jeżeli czujesz że twoi użytkownicy nie mają tych czcionek na komputerze, lub twój język używa znaków lub symboli, które nie zostały uwzględnione w czcionkach Helvetica i Times, wtedy wybierz typ wbudowany. Typy wbudowane używa czcionek Dejavusans i Dejavuserif. To utworzy pliki PDF trochę większe, dlatego nie zaleca się typów wbudowanych, chyba że jest to konieczne.

Nowy typ folderów może być dodany do certyfikatu/typu folderu. Nazwa folderu i każdego nowego języka z łańcuchami znaków dla nowego typu musi być dodany do pliku języków certyfikatu.';
$string['certify'] = 'Zaświadcza się, że';
$string['code'] = 'Kod';
$string['completiondate'] = 'Zakończenia kursu';
$string['course'] = 'dla';
$string['coursegrade'] = 'Ocenę końcową';
$string['coursename'] = 'Kurs';
$string['coursetimereq'] = 'Liczba wymaganych minut spędzonych w kursie';
$string['coursetimereq_help'] = 'Wpisz tutaj minimalną ilość czasu, w minutach, przez który student musi być zalogowany w kursie, aby otrzymać certyfikat.';
$string['credithours'] = 'Liczba godzin';
$string['customtext'] = 'Własny tekst';
$string['customtext_help'] = 'Jeżeli chcesz wydrukować certyfikat różnymi nazwami dla nauczyciela niż te, które są przypisane do roli nauczyciela, nie wybieraj Wydruk Nauczyciela lub żadnego podpisu obrazka wyjątkiem obrazka linii. Wprowadź nazwy nauczyciela w tym boksie tekstu jak chcesz aby pojawiły się. Domyślnie ten tekst jest umieszczony w lewym dolnym rogu certyfikatu. Poniższe znaczniki HTML są dostępne: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src i width (lub height) są obowiązkowe, &lt;a&gt; (href jest obowiązkowe), &lt;font&gt; (możliwe atrybuty to: color, (kod koloru szesnastkowego), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Na';
$string['datefmt'] = 'Format daty';
$string['datefmt_help'] = 'Wybierz format daty drukowanej na certyfikacie. Ewentualnie wybierz ostatnią opcję, aby zastosować taki format, jaki wynika z aktualnych ustawień językowych.';
$string['datehelp'] = 'Data';
$string['deletissuedcertificates'] = 'Usuń wydane certyfikaty';
$string['delivery'] = 'Dostarczenie';
$string['delivery_help'] = 'Wybierz tutaj jak chcesz aby twoi studenci otrzymali swoje certyfikaty.
Otwórz w przeglądarce: otwiera certyfikat w nowym oknie przeglądarki.
Wymuszone pobieranie: otwiera okno przeglądarki i pobiera plik.
Certyfikat emaila: wybieranie tej opcji wysyła certyfikat na emaila studenta jako załącznik.
Po otrzymaniu certyfikatu, użytkownik jeżeli kliknie na link certyfikatu ze strony domowej kursu, zobaczą datę kiedy otrzymali certyfikat i będą mogli obejrzeć swój certyfikat.';
$string['designoptions'] = 'Opcje wyglądu';
$string['download'] = 'Wymuś pobranie/zapisanie';
$string['emailcertificate'] = 'Email';
$string['emailothers'] = 'Wyślij e-mail do innych';
$string['emailothers_help'] = 'Wpisz adresy e-mailowe tutaj, oddzielając je przecinkami, tych którzy powinni być poinformowani e-mailem, gdy studenci otrzymają certyfikat.';
$string['emailstudenttext'] = 'Dołączony jest certyfikat dla {$a->course}.';
$string['emailteachermail'] = '{$a->student} otrzymał swój certyfikat: \'{$a->certificate}\' dla {$a->course}.

Możesz obejrzeć go tutaj:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} otrzymał swój certyfikat: \'<i>{$a->certificate}</i>\' dla {$a->course}.

Możesz obejrzeć go tutaj:

	<a href="{$a->url}">Raport certyfikatu</a>.';
$string['emailteachers'] = 'Powiadom e-mailowo nauczycieli';
$string['emailteachers_help'] = 'Jeśli opcja jest włączona, to nauczyciele są powiadamiani e-mailem, gdy studenci otrzymują certyfikat.';
$string['entercode'] = 'Wpisz kod certyfikatu, aby zweryfikować:';
$string['fontsans'] = 'Rodzina czcionek bezszeryfowych';
$string['fontsans_desc'] = 'Rodzina czcionek bezszeryfowych dla certyfikatów z osadzonymi czcionkami';
$string['fontserif'] = 'Rodzina czcionek szeryfowych';
$string['fontserif_desc'] = 'Rodzina czcionek szeryfowych dla certyfikatów z osadzonymi czcionkami';
$string['getcertificate'] = 'Pobierz certyfikat';
$string['grade'] = 'Ocena';
$string['gradedate'] = 'Data uzyskania oceny';
$string['gradefmt'] = 'Format oceny';
$string['gradefmt_help'] = 'Dostępne są trzy formaty, jeśli zdecydujesz się wydrukować ocenę na świadectwie:

Procentowy stopień: Drukuje ocenę jako procent.
Punktowy stopień: Drukuje wartość punktową oceny.
Listowy stopień: Drukuje ocenę procentową jako list.';
$string['gradeletter'] = 'Nazwa stopnia';
$string['gradepercent'] = 'Ocena w procentach';
$string['gradepoints'] = 'Ocena w punktach';
$string['imagetype'] = 'Typ obrazu';
$string['incompletemessage'] = 'Aby pobrać certyfikat, musisz ukończyć wszystkie wymagane aktywności. Wróć do kursu i dokończ swoje zadania.';
$string['intro'] = 'Wprowadzenie';
$string['issued'] = 'Wydany';
$string['issueddate'] = 'Data wystawienia';
$string['issueoptions'] = 'Opcje';
$string['landscape'] = 'Poziomo';
$string['lastviewed'] = 'Ostatnio otrzymałeś/aś ten certyfikat:';
$string['letter'] = 'List';
$string['lockingoptions'] = 'Opcje blokowania';
$string['modulename'] = 'Certyfikat';
$string['modulename_help'] = 'Ten moduł pozwala na dynamiczne generowanie certyfikatów na podstawie predefiniowanych warunków ustalonych przez nauczyciela.';
$string['modulenameplural'] = 'Certyfikaty';
$string['mycertificates'] = 'Moje certyfikaty';
$string['nocertificates'] = 'Brak certyfikatów';
$string['nocertificatesissued'] = 'Nie ma certyfikatów, które zostały wydane';
$string['nocertificatesreceived'] = 'nie otrzymał żadnego certyfikatu kursu';
$string['nofileselected'] = 'Trzeba wybrać plik do przesłania!';
$string['nogrades'] = 'Brak dostępnych ocen';
$string['notapplicable'] = 'N/D';
$string['notfound'] = 'Numer certyfikatu nie mógł być zweryfikowany';
$string['notissued'] = 'Nie wydany';
$string['notissuedyet'] = 'Jeszcze nie wydany';
$string['notreceived'] = 'Nie otrzymałeś/aś tego certyfikatu';
$string['openbrowser'] = 'Otwórz w nowym oknie';
$string['opendownload'] = 'Kliknij przycisk poniżej, aby zapisać certyfikat.';
$string['openemail'] = 'Kliknij przycisk poniżej, a certyfikat zostanie wysłany na Twój e-mail w postaci załącznika.';
$string['openwindow'] = 'Kliknij przycisk poniżej, aby otworzyć swój certyfikat w nowym oknie przeglądarki.';
$string['or'] = 'lub';
$string['orientation'] = 'Orientacja';
$string['orientation_help'] = 'Zdecyduj, czy chcesz, aby certyfikat miał orientację pionową lub poziomą.';
$string['pluginadministration'] = 'Administracja Certyfikatem';
$string['pluginname'] = 'Certyfikat';
$string['portrait'] = 'Pionowo';
$string['printdate'] = 'Drukuj datę';
$string['printdate_help'] = 'To jest data, która będzie wydrukowana, jeżeli opcja druku daty jest zaznaczona. Jeżeli data zakończenia kursu jest zaznaczona, ale student nie zakończył kursu, data otrzymania powinna być wydrukowana. Możesz także wybrać do wydrukowania datę bazowaną na kiedy aktywność została oceniona. Jeżeli certyfikat jest wydane przed aktywnością która jest oceniona, data otrzymania powinna być wydrukowana.';
$string['printerfriendly'] = 'Strona przyjazna drukarce';
$string['printgrade'] = 'Drukuj ocenę';
$string['printgrade_help'] = 'Możesz wybrać każde dostępne pozycje oceniania z dziennika ocen do wydruku oceny użytkownika otrzymanego dla tej pozycji na certyfikacie. Pozycje oceny są wymienione w kolejności w takiej, w jakie występującą w dzienniku ocen. Wybierz poniżej format oceny.';
$string['printhours'] = 'Drukuj liczbę godzin';
$string['printhours_help'] = 'Wprowadź liczbę godzin kredytowych do wydrukowania na certyfikacie';
$string['printnumber'] = 'Drukuj kod';
$string['printnumber_help'] = 'Unikalny 10-cyfrowy kod losowych liter i cyfr można wydrukować na świadectwie. Liczba ta może być następnie zweryfikowana przez porównanie go do numeru kodu wyświetlanego w raporcie certyfikatów.';
$string['printoutcome'] = 'Wydrukuj efekt uczenia się';
$string['printoutcome_help'] = 'Możesz wybrać dowolny wynik kursu do druku nazwy wyniku i otrzymany wynik użytkownika na certyfikacie. Na przykład może być: Wynik zadania: Zaawansowany.';
$string['printseal'] = 'Obraz pieczęci lub logo';
$string['printseal_help'] = 'Ta opcja pozwala tobie na wybranie pieczęci lub loga które zostanie wydrukowane na certyfikacie z folderu certyfikatu/pix/pieczęci. Domyślnie ten obraz jest umieszczony w prawym dolnym rogu świadectwa.';
$string['printsignature'] = 'Obraz podpisu';
$string['printsignature_help'] = 'Ta opcja pozwala na wydrukowanie obrazka sygnatury z folderu certyfikat/pix/sygnatury. Możesz wydrukować graficzną reprezentację sygnatury, lub wydrukować linię dla podpisu graficznego. Domyślnie, ten obraz jest umieszczony w lewym dolnym rogu certyfikatu.';
$string['printteacher'] = 'Drukuj nazwisko nauczyciela(i)';
$string['printteacher_help'] = 'W celu wydrukowania nazwy nauczyciela na certyfikacie, ustaw rolę nauczyciela na poziomie modułu. Zrób to, jeżeli, np. masz więcej niż jednego nauczyciela w kursie, lub masz więcej niż jeden certyfikat w kursie i chcesz wydrukować różne nazwy nauczycieli na każdym certyfikacie. Kliknij, ab edytować certyfikat, wtedy kliknij na zakładkę lokalnego przypisywania ról. Wtedy przypisz rolę nauczyciela (edytowanie nauczyciela) do certyfikatu  (oni nie mogą być nauczycielami w kursie -- możesz przypisać tą rolę każdemu). Te nazwy będą drukowane na certyfikacie dla nauczyciela.';
$string['printwmark'] = 'Obraz znaku wodnego';
$string['printwmark_help'] = 'Plik znaku wodnego może być umieszczony w tle certyfikatu. Znak tła jest grafiką wyblakłą. Znakiem wodnym może być logo, znak, herb, treść, lub cokolwiek innego, co może być jako tło graficzne.';
$string['receivedcerts'] = 'Otrzymane certyfikaty';
$string['receiveddate'] = 'Data wystawienia';
$string['reissuecert'] = 'Ponowne wystawianie certyfikatów';
$string['removecert'] = 'Usunięto wydane certyfiakty';
$string['report'] = 'Raport';
$string['reportcert'] = 'Raport certyfikatów';
$string['reportcert_help'] = 'Jeżeli wybierzesz tutaj tak, wtedy ta data otrzymana certyfikatu, numer kodowy, i nazwa kursu będzie pokazywana w raportach certyfikatu użytkownika. Jeżeli wybierzesz wydruk oceny na tym certyfikacie, wtedy ocena też będzie pokazywana na raporcie certyfikatu.';
$string['requiredtimenotmet'] = 'Musisz spędzić przynajmniej minimum {$a->requiredtime} minut w kursie, zanim otrzymasz dostęp do tego certyfikatu';
$string['requiredtimenotvalid'] = 'Wymagany czas musi być prawidłowym numerem większym niż 0';
$string['reviewcertificate'] = 'Przegląd certyfikatu';
$string['savecert'] = 'Zapisz Certyfikaty';
$string['savecert_help'] = 'Jeżeli wybierzesz tę opcję, wtedy kopia każdego pliku certyfikatu użytkownika jest zapisywana w plikach kursu dla tego certyfikatu. Link do każdego zapisanego certyfikatu będzie wyświetlony w raporcie certyfikatu.';
$string['seal'] = 'Pieczęć';
$string['sigline'] = 'linia';
$string['signature'] = 'Podpis';
$string['statement'] = 'ukończył(a) kurs';
$string['summaryofattempts'] = 'Podsumowanie wcześniej otrzymanych certyfikatów';
$string['textoptions'] = 'Opcje tekstu';
$string['title'] = 'CERTYFIKAT';
$string['to'] = 'Przyznane dla';
$string['typeA4_embedded'] = 'A4 wbudowane';
$string['typeA4_non_embedded'] = 'A4 niewbudowane';
$string['typeletter_embedded'] = 'List wbudowany';
$string['typeletter_non_embedded'] = 'List niewbudowany';
$string['unsupportedfiletype'] = 'Plik musi być plikiem JPEG lub PNG';
$string['uploadimage'] = 'Załaduj obraz';
$string['uploadimagedesc'] = 'Ten przycisk przeniesie Cię do nowego ekranu, na którym będzie można przesyłać obrazy.';
$string['userdateformat'] = 'Format daty języka użytkownika';
$string['validate'] = 'Weryfikuj';
$string['verifycertificate'] = 'Weryfikuj Certyfikat';
$string['viewcertificateviews'] = 'Zobacz wystawione certyfikaty: {$a}';
$string['viewed'] = 'Otrzymałeś ten certyfikat:';
$string['viewtranscript'] = 'Zobacz certyfikaty';
$string['watermark'] = 'Znak wodny';
