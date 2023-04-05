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
 * Strings for component 'enrol_authorize', language 'pl', version '4.0'.
 *
 * @package     enrol_authorize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Który typ karty kredytowej będzie akceptowany?';
$string['adminaccepts'] = 'Wybierz dozwolone metody płatności i ich typy';
$string['adminauthorizeemail'] = 'Ustawienia wysyłania poczty elektronicznej';
$string['adminauthorizewide'] = 'Ustawienia główne';
$string['admincronsetup'] = 'Skrypt zarządzania cron.php nie został uruchomiony przez ostatnie 24 godziny. <br />Cron musi być ustawiony jeśli chcesz używać właściwości autoprzechwytywania. <br />Jeśli wyłączysz funkcję autoprzechwytywania, transakcje będą unieważnianie chyba że przeglądniesz je w ciągu 30 dni. <br />Sprawdź an_review i wprowadź zero w pole an_capture_day <br /> jeśli chcesz ręcznie akceptować/odrzucać płatności w ciągu 30 dni.';
$string['adminemailexpiredsortsum'] = 'Całkowita kwota';
$string['allpendingorders'] = 'Wszystkie zlecenia oczekujące';
$string['amount'] = 'Kwota';
$string['anauthcode'] = 'Uzyskaj kod autoryzacji';
$string['anlogin'] = 'Nazwa użytkownika';
$string['anpassword'] = 'Hasło';
$string['anreferer'] = 'Zdefiniuj URL polecający (URL Referer), jeśli masz to ustawione w twoim koncie authorize.net.  Spowoduje to wysyłanie linii "Referer: URL" razem z żądaniem HTTP.';
$string['antestmode'] = 'Uruchom testową transakcję (pieniądze nie będą pobrane)';
$string['antrankey'] = 'Klucz transakcji';
$string['approvedreview'] = 'Zatwierdzono';
$string['authcaptured'] = 'Autoryzowano / Obciążono';
$string['authcode'] = 'Kod autoryzacji';
$string['authorize:config'] = 'Konfiguruj wtyczki Authorize.Net';
$string['authorize:manage'] = 'Zarządzaj zapisanymi użytkownikami';
$string['authorize:managepayments'] = 'Zarządzaj płatnościami';
$string['authorize:unenrol'] = 'Wypisz użytkowników z kursu';
$string['authorize:unenrolself'] = 'Wypisz się z kursu';
$string['authorize:uploadcsv'] = 'Prześlij plik CSV';
$string['authorizedpendingcapture'] = 'Autoryzowan / Transakcja oczekująca';
$string['authorizeerror'] = 'Authorize.Net błąd: {$a}';
$string['avsresult'] = 'Wynik AVS: {$a}';
$string['canbecredit'] = 'Może być zwrócone na {$a->upto}';
$string['cancelled'] = 'Anulowano';
$string['capture'] = 'Obciążono';
$string['capturedpendingsettle'] = 'Obciążono / Rozliczenie w toku';
$string['capturedsettled'] = 'Obciążono / Rozliczono';
$string['captureyes'] = 'Karta kredytowa zostanie obciążona, a student zostanie zapisany na kurs. Jesteś  pewien?';
$string['cccity'] = 'Miasto';
$string['ccexpire'] = 'Data ważności';
$string['ccexpired'] = 'Data ważności karty kredytowej upłynęła';
$string['ccinvalid'] = 'Niepoprawny numer karty';
$string['cclastfour'] = 'Ostatnie cztery cyfry numeru karty';
$string['ccno'] = 'Numer karty kredytowej';
$string['ccstate'] = 'Stan';
$string['cctype'] = 'Typ karty kredytowej';
$string['ccvv'] = 'Sprawdzenie karty';
$string['ccvvhelp'] = 'Sprawdź 3 ostatnie cyfry na odwrocie Twojej karty';
$string['choosemethod'] = 'Jeżeli znasz klucz dostępu do kursu to wprowadź go, w przeciwnym wypadku musisz zapłacić za ten kurs.';
$string['chooseone'] = 'Wypełnij jedno lub oba z następnych pól';
$string['cost'] = 'Koszt';
$string['currency'] = 'Waluta';
$string['cutofftime'] = 'Limit czasu';
$string['delete'] = 'Usuń';
$string['description'] = 'Moduł Authorize.net pozwala ustalać opłatę za kurs przez dostawcę kart. Są dwa sposoby ustalenia kosztu kursu: (1) w ustawieniach witryny domyślnie dla każdego kursu; (2) dla każdego kursu w jego ustawieniach. Koszt w ustawieniach kursu jest nadrzędny w stosunku do kosztu witryny.';
$string['echeckabacode'] = 'Numer banku ABA';
$string['echeckaccnum'] = 'Numer konta bankowego';
$string['echeckacctype'] = 'Typ rachunku bankowego';
$string['echeckbankname'] = 'Nazwa banku';
$string['echeckfirslasttname'] = 'Właściciel konta bankowego';
$string['enrolenddate'] = 'Data końcowa';
$string['enrolenddaterror'] = 'Data końca zapisów na kurs nie może być wcześniejsza niż data początku zapisów';
$string['enrolname'] = 'Bramka płatności Authorize.net';
$string['enrolperiod'] = 'Czas trwania zapisu';
$string['enrolstartdate'] = 'Data początkowa';
$string['expired'] = 'Wygasła';
$string['expiremonth'] = 'Miesiąc ważności';
$string['expireyear'] = 'Rok ważności';
$string['firstnameoncard'] = 'Imię na karcie';
$string['haveauthcode'] = 'Mam już kod autoryzacji';
$string['howmuch'] = 'Ile?';
$string['httpsrequired'] = 'Z przykrością stwierdzamy, iż Twoja sugestia nie może być przeprowadzona prawidłowo. To ustawienie strony nie może być przeprowadzone poprawnie.
<br /><br />
Proszę nie wprowadzać numeru swojej karty kredytowej do czasu pojawienia się żółtej kłódki na dole przeglądarki. Oznacza to, iż wszelkie dane przesyłane pomiędzy klientem a serwerem będą kodowane. A więc informacja przesyłana podczas transakcji pomiędzy dwoma komputerami jest chroniona  a numer Twojej karty kredytowej nie zostanie ujawniony w internecie';
$string['invalidaba'] = 'Niepoprawny numer ABA';
$string['invalidaccnum'] = 'Niepoprawny numer konta';
$string['invalidacctype'] = 'Nieprawidłowy typ konta';
$string['isbusinesschecking'] = 'Sprawdzenie biznesowe?*';
$string['lastnameoncard'] = 'Nazwisko na karcie';
$string['logindesc'] = 'Możesz ustawić opcje <a href="{$a->url}">loginhttps</a> w zmienne/ bezpieczeństwo.
Włączając to Moodle będzi używał połączenia z użyciem protokołu https dla stron ogowania i zapłaty.';
$string['logininfo'] = 'Podczas konfigurowania konta Authorize.Net, wymagany jest login i trzeba wprowadzić <strong>albo</strong> klucz transakcji, <strong>albo</strong> hasło w odpowiednim polu. Zaleca się użyć klucza transakcji ze względu na bezpieczeństwo.';
$string['messageprovider:authorize_enrolment'] = 'Wiadomości zapisów prze Authorize.Net';
$string['methodcc'] = 'Karta kredytowa';
$string['methodecheck'] = 'Elektroniczny czek eCheck (ACH)';
$string['missingaba'] = 'Brakuje numeru ABA';
$string['missingaddress'] = 'Brakuje adresu';
$string['missingbankname'] = 'Brakuje nazwy banku';
$string['missingcc'] = 'Brakuje numeru karty';
$string['missingccauthcode'] = 'Brak kodu autoryzacji';
$string['missingccexpiremonth'] = 'Brak miesiąca ważności';
$string['missingccexpireyear'] = 'Brak roku ważności';
$string['missingcctype'] = 'Brak typu karty';
$string['missingcvv'] = 'Brak numeru weryfikacji';
$string['missingzip'] = 'Brakuje kodu pocztowego';
$string['mypaymentsonly'] = 'Pokaż tylko moje płatności';
$string['nameoncard'] = 'Nazwisko na karcie';
$string['new'] = 'Nowy';
$string['nocost'] = 'Nie ma kosztów związanych z zapisaniem się na ten kurs przez Authorize.Net!';
$string['noreturns'] = 'Brak zwrotu!';
$string['notsettled'] = 'Nie rozliczono';
$string['orderdetails'] = 'Szczegóły zamówienia';
$string['orderid'] = 'ID zamówienia';
$string['paymentmanagement'] = 'Zarządzanie płatnościami';
$string['paymentmethod'] = 'Sposób płatności';
$string['paymentpending'] = 'Twoja płatność jest w trakcie oczekiwania dla Twojego kursu z poniższym numerem porządkowym. {$a->orderid}';
$string['pluginname'] = 'Authorize.Net';
$string['refund'] = 'Refundacja';
$string['refunded'] = 'Zrefundowano';
$string['returns'] = 'Zwroty';
$string['reviewfailed'] = 'Weryfikacja negatywna';
$string['reviewnotify'] = 'Twoja płatność będzie zweryfikowana w ciągu kilku dni oczekuj e-maila od swojego nauczyciela';
$string['sendpaymentbutton'] = 'Wyślij zapłatę';
$string['settled'] = 'Rozliczono';
$string['settlementdate'] = 'Data rozliczenia';
$string['shopper'] = 'Sklep*';
$string['status'] = 'Zezwól na zapisy Authorize.Net';
$string['subvoidyes'] = 'Transakcja zwrotna ({$a->transid}) ma być anulowana, a to spowoduje uznanie {$a->amount} na koncie. Czy na pewno?';
$string['tested'] = 'Sprawdzony';
$string['testwarning'] = 'Obciążenie/ Anulowanie /Refundacja działa w trybie testowym, ale żaden rekord nie został zaktualizowany lub wstawiony do bazie danych.';
$string['transid'] = 'Numer transakcji';
$string['underreview'] = 'Weryfikacja w toku';
$string['unenrolselfconfirm'] = 'Czy na pewno chcesz wypisać się z kursu "{$a}"?';
$string['unenrolstudent'] = 'Wypisać studentów?';
$string['uploadcsv'] = 'Załaduj plik CSV';
$string['usingccmethod'] = 'Zapisy wykorzystujące <a href="{$a->url}"><strong>kartę kredytową</strong></a>';
$string['usingecheckmethod'] = 'Zapisy wykorzystujące <a href="{$a->url}"><strong>eCheck</strong></a>';
$string['verifyaccountresult'] = '<b>Wynik weryfikacji:</b> {$a}';
$string['void'] = 'Anulowano';
$string['voidyes'] = 'Transakcja zostanie anulowana. Czy jesteś pewien(a)?';
$string['welcometocoursesemail'] = 'Szanowny {$a->name},

Dziękujemy za wykonanie płatności. Zostałeś zapisany na następujące kursy:

{$a->courses}

Możesz zobaczyć szczegół swojej płatności lub edytować swój profil:
 {$a->paymenturl}
 {$a->profileurl}';
$string['youcantdo'] = 'Nie można wykonać tego działania: {$a->action}';
$string['zipcode'] = 'kod pocztowy';
