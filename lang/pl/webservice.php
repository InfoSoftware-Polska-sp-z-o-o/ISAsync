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
 * Strings for component 'webservice', language 'pl', version '4.0'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Wyjątek w kontroli dostępu';
$string['actwebserviceshhdr'] = 'Aktywne protokoły usług sieciowych';
$string['addaservice'] = 'Dodaj usługę';
$string['addcapabilitytousers'] = 'Dodaj uprawnienia użytkowników';
$string['addcapabilitytousersdescription'] = 'Użytkownicy powinni mieć dwa uprawnienia - webservice:createtoken i uprawnienia do wybranego protokołu, na przykład webservice/rest:use, webservice/soap:use.  Aby to osiągnąć, należy utworzyć rolę usługi internetowej z odpowiednimi uprawnieniami i przypisać ją użytkownikowi usług internetowych w kontekście systemu.';
$string['addfunction'] = 'Dodaj funkcję';
$string['addfunctionhelp'] = 'Wybierz funkcję, aby dodać do usługi';
$string['addfunctions'] = 'Dodaj funkcje';
$string['addfunctionsdescription'] = 'Wybierz wymagane funkcje dla nowo utworzonej usługi.';
$string['addrequiredcapability'] = 'Przypisz/cofnij przypisanie wymaganej zdolności';
$string['addservice'] = 'Dodaj nową usługę: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Dodaj funkcje do usługi "{$a}"';
$string['allusers'] = 'Wszyscy użytkownicy
';
$string['apiexplorer'] = 'API explorer';
$string['apiexplorernotavalaible'] = 'API explorer nie jest jeszcze dostępny.';
$string['arguments'] = 'Argumenty';
$string['authmethod'] = 'Metoda uwierzytelniania';
$string['cannotcreatetoken'] = 'Brak uprawnień do tworzenia tokenu usługi sieci web dla usługi {$a}';
$string['cannotgetcoursecontents'] = 'Nie można pobrać zawartości kursu';
$string['checkusercapability'] = 'Sprawdź możliwości użytkownika';
$string['checkusercapabilitydescription'] = 'Użytkownicy powinni mieć uprawnienia do wybranego protokołu, na przykład webservice/rest:use, webservice/soap:use.  Aby to osiągnąć, należy utworzyć rolę usługi internetowej z odpowiednimi uprawnieniami i przypisać ją użytkownikowi usług internetowych w kontekście systemu.';
$string['configwebserviceplugins'] = 'Ze względów bezpieczeństwa, tylko protokoły, które są używane, powinny być włączone.';
$string['context'] = 'Kontekst';
$string['createservicedescription'] = 'Usługa sieciowa (webservice) jest zbiorem funkcji. Dajesz użytkownikom dostęp do nowej usługi. Na stronie <strong>Dodawanie usług</strong> zaznacz "Włącz" i "Uprawnieni użytkownicy". Wybierz \'nie wymaga uprawnień\'.';
$string['createserviceforusersdescription'] = 'Usługa sieciowa (webservice) jest zbiorem funkcji. Dajesz użytkownikom dostęp do nowej usługi. Na stronie <strong>Dodawanie usług</strong> zaznacz "Włącz" i "Uprawnieni użytkownicy". Wybierz \'nie wymaga uprawnień\'.';
$string['createtoken'] = 'Utwórz token';
$string['createtokenforuser'] = 'Utwórz token dla użytkownika';
$string['createtokenforuserdescription'] = 'Utwórz token dla użytkownika usługi sieciowej.';
$string['createuser'] = 'Utwórz specjalne konto użytkownika';
$string['createuserdescription'] = 'Specjalne konto użytkownika usługi  reprezentuje system, który będzie sterował Moodle\'em.';
$string['criteriaerror'] = 'Brakujące uprawnienia do wyszukiwania w kryteriach.';
$string['default'] = 'Domyślnie dla "{$a}"';
$string['deleteaservice'] = 'Usuń usługę';
$string['deleteservice'] = 'Usuń usługę: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Usunięcie usługi spowoduje usunięcie powiązanych z nią tokenów. Czy na pewno chcesz usunąć zewnętrzną usługę "{$a}"?';
$string['deletetokenconfirm'] = 'Czy na pewno chcesz usunąć token usługi sieciowej użytkownikowi <strong>{$a->user}</strong>dla usługi <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Wszystkie protokoły usług internetowych są wyłączone. "Włączenie Usług internetowych" jest możliwe w dziale: Zaawansowane funkcje.';
$string['doc'] = 'Dokumentacja';
$string['docaccessrefused'] = 'Nie masz uprawnień, aby zobaczyć dokumentacją dla tego tokenu';
$string['documentation'] = 'dokumentacja usług sieciowych ';
$string['downloadfiles'] = 'Można pobierać pliki';
$string['downloadfiles_help'] = 'Jeśli włączone, każdy użytkownik może pobrać pliki z kluczami bezpieczeństwa. Oczywiście dotyczy to tylko plików, do których mają prawa do pobrania z witryny.';
$string['editaservice'] = 'Edytuj usługę';
$string['editservice'] = 'Edytuj usługę: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Włączone';
$string['enabledocumentation'] = 'Włącz dokumentację programisty';
$string['enabledocumentationdescription'] = 'Szczegółowa dokumentacja usług internetowych jest dostępna dla włączonych protokołów.';
$string['enableprotocols'] = 'Włącz protokoły';
$string['enableprotocolsdescription'] = 'Co najmniej jeden protokół powinien być włączony. Ze względów bezpieczeństwa tylko protokoły, które mają być użyte, powinny być włączone.';
$string['enablews'] = 'Włącz usługi sieciowe';
$string['enablewsdescription'] = 'Usługi sieciowe muszą być włączone w dziale "Zaawansowane funkcje"';
$string['entertoken'] = 'Wprowadź klucz bezpieczeństwa/token:';
$string['error'] = 'Błąd: {$a}';
$string['errorcatcontextnotvalid'] = 'Nie można wywoływać funkcji w kontekście kategorii (id kategorii: {$a->catid}). Kontekstowy komunikat błędu: {$a->message}';
$string['errorcodes'] = 'Błąd wiadomości';
$string['errorcoursecontextnotvalid'] = 'Nie można wywoływać funkcji w kontekście kursu (id kursu: {$a->catid}). Kontekstowy komunikat błędu: {$a->message}';
$string['errorinvalidparam'] = 'Parametr "{$a}" jest nieprawidłowy.';
$string['errornotemptydefaultparamarray'] = 'Parametr opisowy webserwisu o nazwie \'{$a}\' jest pojedynczą lub złożoną strukturą. Domyślnie może to być tylko pusta tablica. Sprawdź opis usług sieciowych.';
$string['erroroptionalparamarray'] = 'Parametr opisowy webserwisu o nazwie \'{$a}\' jest pojedynczą lub złożoną strukturą. Nie może być oznaczony jako VALUE_OPTIONAL. Sprawdź opis usług sieciowych.';
$string['eventwebservicefunctioncalled'] = 'Przywołano funkcję usług sieciowych';
$string['eventwebserviceloginfailed'] = 'Nie powiodło się logowanie do usług sieciowych';
$string['eventwebserviceservicecreated'] = 'Utworzono usługę sieci Web';
$string['eventwebserviceservicedeleted'] = 'Usunięto usługę sieci Web';
$string['eventwebserviceserviceupdated'] = 'Zaktualizowano usługę sieci Web';
$string['eventwebserviceserviceuseradded'] = 'Dodano użytkownika usług sieciowych';
$string['eventwebserviceserviceuserremoved'] = 'Usunięto użytkownika usług sieciowych';
$string['eventwebservicetokencreated'] = 'Utworzono token usług sieciowych';
$string['eventwebservicetokensent'] = 'Wysłano token usług sieciowych';
$string['execute'] = 'Wykonaj';
$string['executewarnign'] = 'UWAGA: Po naciśnięciu przycisku Wykonaj, bazy danych zostaną zmienione i zmiany nie będą mogły być przywrócone automatycznie!';
$string['externalservice'] = 'Usługi zewnętrzne';
$string['externalservicefunctions'] = 'Funkcje usługi zewnętrznej';
$string['externalservices'] = 'Usługi zewnętrzne';
$string['externalserviceusers'] = 'Użytkownicy usługi zewnętrznej';
$string['failedtolog'] = 'Nieudane logowanie';
$string['filenameexist'] = 'Nazwa pliku już istnieje: {$a}';
$string['forbiddenwsuser'] = 'Nie można utworzyć tokenu dla niepotwierdzonego, usuniętego, zawieszonego  użytkownika lub gościa.';
$string['function'] = 'Funkcja';
$string['functions'] = 'Funkcje';
$string['generalstructure'] = 'Ogólna struktura';
$string['information'] = 'Informacja';
$string['installexistingserviceshortnameerror'] = 'Usługa sieciowa o krótkiej nazwie "{$a}" już istnieje. Nie można zainstalować/aktualizować innej usługi z tą samą nazwą.';
$string['installserviceshortnameerror'] = 'Błąd kodowania: krótka nazwa usługi "{$a}" może zawierać tylko znaki alfanumeryczne (litery i cyfry), podkreślenie (_), łącznik (-) lub kropkę (.)';
$string['invalidextparam'] = 'Nieprawidłowy parametr zewnętrznego API: {$a}';
$string['invalidextresponse'] = 'Nieprawidłowa odpowiedź zewnętrznego API: {$a}';
$string['invalidiptoken'] = 'Nieprawidłowy token - twój IP nie jest obsługiwany';
$string['invalidtimedtoken'] = 'Nieprawidłowy token - token wygasł';
$string['invalidtoken'] = 'Nieprawidłowy token - token nieodnaleziony';
$string['iprestriction'] = 'Ograniczenia adresów IP';
$string['iprestriction_help'] = 'Użytkownik będzie musiał wywoływać usługę tylko z wymienionych adresów IP (oddzielonych przecinkami).';
$string['key'] = 'Klucz';
$string['keyshelp'] = 'Klucze są używane do łączenia się z kontem Moodle przez zewnętrzne aplikacje.';
$string['loginrequired'] = 'Dostęp tylko dla zalogowanych użytkowników';
$string['manageprotocols'] = 'Zarządzaj protokołami';
$string['managetokens'] = 'Zarządzaj tokenami';
$string['missingcaps'] = 'Brakujące uprawnienia';
$string['missingcaps_help'] = 'Lista wymaganych uprawnień, których wybrany użytkownik nie ma. Brakujące uprawnienia muszą być dodane do roli użytkownika, aby mógł korzystać z usługi.';
$string['missingpassword'] = 'Brak hasła';
$string['missingrequiredcapability'] = 'Wymagane jest uprawnienie {$a}';
$string['missingusername'] = 'Brak nazwy użytkownika';
$string['missingversionfile'] = 'Błąd w kodzie: brakuje pliku version.php dla tego komponentu {$a}';
$string['nameexists'] = 'Ta nazwa jest już używana przez inną usługę';
$string['nocapabilitytouseparameter'] = 'Użytkownik nie ma wymaganych zdolności do użycia parametru {$a}';
$string['nofunctions'] = 'Ta usługa ta nie zawiera funkcji.';
$string['norequiredcapability'] = 'Brak wymagań';
$string['notoken'] = 'Lista tokenów jest pusta.';
$string['onesystemcontrolling'] = 'Pozwól zewnętrznemu systemowi na sterowanie Moodle\'em';
$string['onesystemcontrollingdescription'] = 'Poniższe kroki pomogą skonfigurować usługi sieciowe Moodle, aby zewnętrzny system mógł współpracować z Moodle\'em. Obejmuje to włączenie metody uwierzytelniania opartej o token (klucz zabezpieczający)';
$string['onlyseecreatedtokens'] = 'Każdy token można usunąć, ale wyświetlić można tylko tokeny, które utworzyłeś.';
$string['operation'] = 'Operacja';
$string['optional'] = 'Opcjonalny(e)';
$string['passwordisexpired'] = 'Hasło wygasło.';
$string['phpparam'] = 'XML-RPC (struktura PHP)';
$string['phpresponse'] = 'XML-RPC (struktura PHP)';
$string['postrestparam'] = 'kod PHP dla REST (żądanie POST)';
$string['potusers'] = 'Nieautoryzowani użytkownicy';
$string['potusersmatching'] = 'Znalezieni nieautoryzowani użytkownicy';
$string['print'] = 'Drukuj wszystko';
$string['privacy:metadata:serviceusers'] = 'Lista użytkowników, którzy mogą korzystać z określonej usługi zewnętrznej';
$string['privacy:metadata:serviceusers:timecreated'] = 'Data utworzenia rekordu';
$string['privacy:metadata:serviceusers:userid'] = 'Identyfikator użytkownika';
$string['privacy:metadata:tokens:creatorid'] = 'Identyfikator użytkownika, który utworzył token';
$string['privacy:metadata:tokens:privatetoken'] = 'Bardziej prywatny token okazjonalnie używany do sprawdzania poprawności niektórych operacji, takich jak SSO';
$string['privacy:metadata:tokens:timecreated'] = 'Data utworzenia tokena';
$string['privacy:metadata:tokens:token'] = 'Token użytkownika';
$string['privacy:metadata:tokens:tokentype'] = 'Typ tokena';
$string['protocol'] = 'Protokół';
$string['removefunction'] = 'Usuń';
$string['removefunctionconfirm'] = 'Czy na pewno chcesz usunąć funkcję "{$a->function}" z usługi "{$a->service}"?';
$string['requireauthentication'] = 'Ta metoda wymaga uwierzytelnienia z uprawieniami xxx.';
$string['required'] = 'Wymagane';
$string['requiredcapability'] = 'Wymagane uprawnienie';
$string['requiredcapability_help'] = 'Jeśli ustawiono, tylko użytkownicy posiadający wskazane uprawnienie mają dostęp do usługi.';
$string['requiredcaps'] = 'Wymagane uprawnienia';
$string['resettokenconfirm'] = 'Czy naprawdę chcesz zresetować klucz użytkownika <strong>{$a->user}</strong> dla usłygi sieciowej <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Czy na pewno chcesz zresetować ten klucz? Wszystkie linki zawierające stary klucz nie będą już działać.';
$string['response'] = 'Odpowiedź';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Hasło do konta, które zostało odtworzone, musi być zresetowane, zanim utworzy się token.';
$string['restparam'] = 'protokół REST (parametry POST)';
$string['restrictedusers'] = 'Tylko upoważnieni użytkownicy';
$string['restrictedusers_help'] = 'To ustawienie określa, czy wszyscy użytkownicy z uprawnieniami do tworzenia tokenu usługi sieciowej mogą generować tokeny dla tej usługi na swojej stronie z kluczami zabezpieczeń, czy tylko upoważnieni użytkownicy mogą to zrobić.';
$string['securitykey'] = 'Klucz zabezpieczeń (token)';
$string['securitykeys'] = 'Klucze zabezpieczeń';
$string['selectauthorisedusers'] = 'Wybierz upoważnionych użytkowników';
$string['selectedcapability'] = 'Wybrany/e';
$string['selectedcapabilitydoesntexit'] = 'Obecnie ustalone wymagane uprawnienie ({$a}) nie istnieje. Proszę to zmienić i zapisać zmiany.';
$string['selectservice'] = 'Wybierz usługę';
$string['selectspecificuser'] = 'Wybierz specjalnego użytkownika*';
$string['selectspecificuserdescription'] = 'Dodaj użytkownika webserwisu jako upoważnionego użytkownika.';
$string['service'] = 'Usługa';
$string['servicehelpexplanation'] = 'Usługa jest zbiorem funkcji. Usługa może być dostępna dla wszystkich użytkowników lub tylko dla określonych.';
$string['servicename'] = 'Nazwa usługi';
$string['servicenotavailable'] = 'Usługa sieciowa (webserwis) nie jest dostępna (nie istnieje lub może być wyłączony)';
$string['servicerequireslogin'] = 'Usługa sieciowa nie jest dostępna. (Sesja została wylogowana lub wygasła).';
$string['servicesbuiltin'] = 'Wbudowane usługi';
$string['servicescustom'] = 'Usługi dodane';
$string['serviceusers'] = 'Uprawnieni użytkownicy';
$string['serviceusersettings'] = 'Ustawienia użytkownika';
$string['serviceusersmatching'] = 'Znalezieni uprawnieni użytkownicy';
$string['serviceuserssettings'] = 'Zmień ustawienia dla uprawnionych użytkowników';
$string['shortnametaken'] = 'Krótka nazwa jest już używana przez inną usługę ({$a})';
$string['simpleauthlog'] = 'Logowanie z prostym uwierzytelnianiem';
$string['step'] = 'Krok';
$string['supplyinfo'] = 'Więcej szczegółów';
$string['testauserwithtestclientdescription'] = 'Symulacja zewnętrznego dostępu do usługi za pomocą klienta testowego.
Zanim to zrobisz, zaloguj się jako użytkownik z uprawnieniem moodle/webservice:createtoken i uzyskaj klucz zabezpieczeń (token) w ustawieniach profilu. Użyjesz tego tokenu w kliencie testowym. Użyj wybranego protokołu z obsługą tokenu uwierzytelniania <strong>UWAGA:. Funkcje, które testujesz, RZECZYWIŚCIE BĘDĄ wykonane dla tego użytkownika, więc uważaj, co testujesz!</strong>';
$string['testclient'] = 'Klient testowy usługi sieciowej (webserwisu)';
$string['testclientdescription'] = '* Klient testowy <strong>rzeczywiście wykonuje</strong> testowane funkcje. Nie testuj funkcji, których nie znasz. <br/>
* Nie wszystkie istniejące funkcje usług sieciowych zostały już wprowadzone do klienta testowego. <br/>
* Aby sprawdzić, że użytkownik nie ma dostępu do niektórych funkcji, przetestuj te funkcje, na które nie pozwoliłeś. <br/>
* Aby zobaczyć bardziej przejrzyste komunikaty, ustawić debugowanie do <strong>{$a->mode}</strong> na {$a->atag} <br/>
* Dostęp {$a->amfatag}.';
$string['testwithtestclient'] = 'Test usługi';
$string['testwithtestclientdescription'] = 'Symulacja zewnętrznego dostępu do usługi za pomocą klienta testowego. Użyj wybranego protokołu z obsługą tokenu uwierzytelniania <strong>UWAGA:. Funkcje, które testujesz, RZECZYWIŚCIE BĘDĄ wykonane, więc uważaj, co testujesz!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Token uwierzytelniania';
$string['tokencreatedbyadmin'] = 'Może być resetowane tylko przez administratora (*)';
$string['tokencreator'] = 'Twórca';
$string['tokenfilter'] = 'Filtr tokenów';
$string['tokenfilterreset'] = 'Pokaż wszystkie tokeny';
$string['tokenfiltersubmit'] = 'Pokaż tylko pasujące tokeny';
$string['unknownoptionkey'] = 'Nieznany klucz opcji* ({$a})';
$string['unnamedstringparam'] = 'Parametr ciągu jest bez nazwy';
$string['updateusersettings'] = 'Aktualizuj';
$string['uploadfiles'] = 'Może przesłać pliki';
$string['uploadfiles_help'] = 'Jeżeli włączone, każdy użytkownik może przesłać pliki z użyciem ich kluczy bezpieczeństwa do własnego obszaru plików prywatnych lub obszaru pliku projektu. Zastosowano limit pliku na dysku dla każdego użytkownika.';
$string['userasclients'] = 'Użytkownicy jako klienci z tokenem';
$string['userasclientsdescription'] = 'Poniższe kroki pomogą skonfigurować usługę internetową Moodle dla użytkowników jako klientów. Te kroki pomogą również skonfigurować zalecaną metodę uwierzytelniania tokenów (kluczy bezpieczeństwa). W tym przypadku użytkownik wygeneruje swój token ze strony kluczy bezpieczeństwa na swojej stronie preferencji.';
$string['usermissingcaps'] = 'Brakujące uprawnienia: {$a}';
$string['usernameorid'] = 'Nazwa użytkownika / identyfikator';
$string['usernameorid_help'] = 'Wprowadź nazwę użytkownika lub identyfikator.';
$string['usernameoridnousererror'] = 'Nie znaleziono użytkowników o zadanej nazwie / identyfikatorze.';
$string['usernameoridoccurenceerror'] = 'Znaleziono więcej niż jednego użytkownika o zadanej nazwie. Proszę wprowadzić jego  identyfikator.';
$string['usernotallowed'] = 'Użytkownik nie ma dostępu do tej usługi. Najpierw musisz dodać tego użytkownika do upoważnionych użytkowników na stronie administracji {$a}.';
$string['userservices'] = 'Usługi użytkownika: {$a}';
$string['usersettingssaved'] = 'Ustawienia użytkownika zostały zapisane';
$string['validuntil'] = 'Ważne do';
$string['validuntil_help'] = 'Jeśli jest ustawione, usługa będzie dezaktywowana po tej dacie dla tego użytkownika.';
$string['webservice'] = 'Usługa sieciowa';
$string['webservices'] = 'Usługi sieciowe';
$string['webservicesoverview'] = 'Przegląd';
$string['webservicetokens'] = 'Tokeny usług sieciowych';
$string['wrongusernamepassword'] = 'Nieprawidłowy login lub hasło';
$string['wsaccessuserdeleted'] = 'Odmowa dostępu do usług sieciowych dla usuniętego użytkownika: {$a}';
$string['wsaccessuserexpired'] = 'Odmowa dostępu do usługi internetowej dla użytkownika, którego hasło wygasło: {$a}';
$string['wsaccessusernologin'] = 'Odmówiono dostępu do usług sieciowych dla użytkownika o zawieszonym logowaniu: {$a}';
$string['wsaccessusersuspended'] = 'Odmowa dostępu do usługi internetowej dla zawieszonego użytkownika: {$a}';
$string['wsaccessuserunconfirmed'] = 'Odmowa dostępu do usługi internetowej dla niepotwierdzonego użytkownika: {$a}';
$string['wsclientdoc'] = 'Dokumentacja klienta usługi sieciowej Moodle';
$string['wsdocapi'] = 'Dokumentacja API';
$string['wsdocumentation'] = 'Dokumentacja usług Web';
$string['wsdocumentationdisable'] = 'Dokumentacja usług sieciowych jest wyłączona.';
$string['wsdocumentationintro'] = 'Przed utworzeniem klienta, radzimy przeczytać {$a->doclink}';
$string['wsdocumentationlogin'] = 'lub wprowadź swoją nazwę użytkownika';
$string['wspassword'] = 'Hasło usługi sieciowej';
$string['wsusername'] = 'Użytkownik usługi sieciowej';
