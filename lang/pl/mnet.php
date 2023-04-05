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
 * Strings for component 'mnet', language 'pl', version '4.0'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (samo-podpisany)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (podpisany)';
$string['RPC_HTTP_PLAINTEXT'] = 'nieszyfrowane HTTP';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (samo-podpisany)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (podpisany)';
$string['aboutyourhost'] = 'O twoim serwerze';
$string['accesslevel'] = 'Poziom dostępu';
$string['addhost'] = 'Dodaj hosta';
$string['addnewhost'] = 'Dodaj nowego hosta';
$string['addtoacl'] = 'Dodaj do kontroli dostępu';
$string['allhosts'] = 'Wszystkie hosty';
$string['allhosts_no_options'] = 'Podczas przeglądania wielu hostów opcje nie są dostępne';
$string['allow'] = 'Zezwól';
$string['applicationtype'] = 'Typ aplikacji';
$string['authfail_nosessionexists'] = 'Autoryzacja nieudana: sesja mnet nie istnieje.';
$string['authfail_sessiontimedout'] = 'Autoryzacja nieudana: sesja mnet wygasła.';
$string['authfail_usermismatch'] = 'Autoryzacja nieudana: użytkownik nie pasuje.';
$string['authmnetdisabled'] = 'Wtyczka uwierzytelniania MNet jest <strong>wyłączona</strong>.';
$string['badcert'] = 'To nie jest prawidłowy certyfikat.';
$string['certdetails'] = 'Szczegóły certtfikatu';
$string['configmnet'] = 'Mnet umożliwia komunikację tego serwera z innymi serwerami lub usługami.';
$string['couldnotgetcert'] = 'Nie znaleziono certyfikatu na stronie <br />{$a}. <br />Host może być włączony lub nieprawidłowo skonfigurowany.';
$string['couldnotmatchcert'] = 'To nie pasuje do obecnie publikowanego certyfikatu przez serwer www.';
$string['courses'] = 'kursy';
$string['courseson'] = 'kursy o';
$string['current_transport'] = 'Obecny transport';
$string['currentkey'] = 'Aktualny klucz publiczny';
$string['databaseerror'] = 'Nie można zapisać dane do bazy danych.';
$string['deleteaserver'] = 'Usuwanie serwera';
$string['deletedhostinfo'] = 'Ten host został usunięty. Jeśli chcesz to cofnąć, przełącz status usunięto na &quot;nie&quot;.';
$string['deletedhosts'] = 'Usunięte hosty: {$a}';
$string['deletehost'] = 'Usuń host';
$string['deletekeycheck'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć ten klucz?';
$string['deleteoutoftime'] = '60-sekundowy okres na usunięcie tego klucza upłynął. Proszę zacząć od początku.';
$string['deleteuserrecord'] = 'SSO ACL: usuń rekord użytkownika &quot;{$a->user}&quot; z {$a->host}.';
$string['deletewrongkeyvalue'] = 'Nastąpił błąd. Jeśli to nie ty próbowałeś usunąć klucz SSL swojego serwera, możliwe że stałeś się celem złośliwego ataku. Nie dokonano żadnych zmian.';
$string['deny'] = 'Odmów';
$string['description'] = 'Opis';
$string['duplicate_usernames'] = 'Nie udało się utworzyć indeksu na kolumnach "mnethostid" i "username" na twojej tabelce użytkownika.<br />Może to wystąpić, kiedy masz <a href="{$a}" target="_blank">zdublowane nazwy użytkowników w twojej tabeli użytkowników</a>.<br />Twoja aktualizacja powinna zakończyć się pomyślnie. Kliknij na powyższy link, w nowym oknie powinny pojawić się instrukcje naprawiające ten problem. Możesz zająć się też tym na końcu aktualizacji.';
$string['enabled_for_all'] = '(Ta usługa została włączona dla wszystkich hostów).';
$string['enterausername'] = 'Wprowadź nazwę użytkownika lub listę użytkowników rozdzielaną przecinkami.';
$string['error7020'] = 'Ten błąd zazwyczaj występuje, gdy zdalna strona stworzyła dla Ciebie rekord ze złym wwwroot, np. http://twojastrona.pl zamiast http://wwww.twojastrona.pl. Powinieneś skontaktować się z administratorem zdalnej strony z twoim wwwroot (określonym w config.php), prosząc go o zaktualizowanie rekordu dla twojego hosta.';
$string['error7022'] = 'Wiadomość wysłana do serwisu zdalnego została zaszyfrowana prawidłowo, lecz nie podpisana. To jest bardzo nieoczekiwane; powinieneś zgłosić błąd, gdy to się zdarza (podając jak najwięcej informacji o wersji aplikacji itp.)';
$string['error7023'] = 'Zdalna strona próbowała odszyfrować twoją wiadomość używając wszystkich kluczy, które są zapisane dla twojej strony. Wszystkie są nieprawidłowe. Możesz próbować naprawić ten problem przez ręczne ponowne wygenerowanie kluczy ze zdalnej strony. Jest to mało prawdopodobne, chyba że miałeś wyłączoną komunikację z zdalnej strony przez kilka miesięcy.';
$string['error7024'] = 'Wysyłasz niezaszyfrowaną wiadomość do zdalnej strony, ale zdalna strona nie akceptuje niezaszyfrowanej komunikacji z twojej strony. To było bardzo nieoczekiwane, prawdopodobnie należy zgłosić błąd jeżeli wystąpi (podając jak najwięcej informacji jak tylko możliwe o wersji aplikacji, itd.)';
$string['error7026'] = 'Klucz, którym twoja wiadomość została podpisana, różni się od klucza zapisanego na zdalnym hoście. Co więcej, zdalny host próbował pobrać twój aktualny klucz, ale nie udało mu się tego zrobić. Proszę ręcznie ponownie wysłać klucz do zdalnego hosta i spróbować ponownie.';
$string['error709'] = 'Zdalnej stronie nie udało się pobrać od Ciebie klucza SSL';
$string['eventaccesscontrolcreated'] = 'Utworzono kontrolę dostępu';
$string['eventaccesscontrolupdated'] = 'Zaktualizowano kontrolę dostępu';
$string['expired'] = 'Ten klucz wygasł';
$string['expires'] = 'Ważny do';
$string['expireyourkey'] = 'Usuń ten klucz';
$string['expireyourkeyexplain'] = 'Moodle automatycznie wykonuje cykliczna wymianę kluczy co 28 dni (domyślnie), ale masz możliwość <em>ręcznego</em> wymuszenia wygaśnięcia tego klucza w dowolnym momencie. To ma sens wtedy, gdy uważasz, że ten klucz został odtajniony. Następny klucz zostanie natychmiast automatycznie wygenerowany. <br /> Usunięcie tego klucza uniemożliwi innym aplikacjom komunikowanie się z tobą, dopóki nie skontaktujesz się z każdym administratorem i nie przekażesz im nowego klucza.';
$string['exportfields'] = 'Pola do eksportu';
$string['failedaclwrite'] = 'Nie udało się zapisać do listy kontroli dostępu MNet dla użytkownika \'{$a}\'.';
$string['findlogin'] = 'Znajdź login';
$string['forbidden-function'] = 'Ta funkcja nie jest włączona dla RPC.';
$string['forbidden-transport'] = 'Metoda transportu, której próbujesz użyć, nie jest dozwolona.';
$string['forcesavechanges'] = 'Wymuś zapisanie zmian';
$string['helpnetworksettings'] = 'Skonfiguruj komunikację Mnet';
$string['hidelocal'] = 'Ukryj lokalnych użytkowników';
$string['hideremote'] = 'Ukryj zdalnych użytkowników';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Nie znaleziono hosta lub kursu';
$string['hostdeleted'] = 'Host usunięty';
$string['hostexists'] = 'Istnieje już rekord hosta z tą nazwą (można go usunąć). <a href="{$a}">kliknij tutaj</a>, aby edytować ten rekord.';
$string['hostlist'] = 'Lista hostów w sieci';
$string['hostname'] = 'Nazwa hosta';
$string['hostnamehelp'] = 'W pełni kwalifikowana nazwa domeny zdalnego hosta, np. www.example.com';
$string['hostnotconfiguredforsso'] = 'Ten serwer nie jest skonfigurowany dla zdalnego logowania.';
$string['hostsettings'] = 'Ustawienia hosta';
$string['http_self_signed_help'] = 'Zezwól na połączenia za pomocą samodzielnie podpisanego certyfikatu DIY SSL na zdalnym hoście.';
$string['http_verified_help'] = 'Zezwól na połączenia przy użyciu zweryfikowanego certyfikatu SSL na zdalnym hoście przez <strong>http</strong>, a nie https';
$string['https_self_signed_help'] = 'Zezwól na połączenia za pomocą samodzielnie podpisanego certyfikatu DIY SSL na zdalnym hoście  przez <strong>http</strong>.';
$string['https_verified_help'] = 'Zezwól na połączenia przy użyciu zweryfikowanego certyfikatu SSL na zdalnym hoście.';
$string['id'] = 'ID';
$string['idhelp'] = 'Ta wartość jest przydzielana automatycznie i nie może być zmieniona';
$string['importfields'] = 'Pola do importu';
$string['inspect'] = 'Sprawdź';
$string['installnosuchfunction'] = 'Błąd w kodzie! Próbuje się zainstalować funkcję mnet xmlrpc ({$a->method}) z pliku ({$a->file}), ale jej nie znaleziono!';
$string['installnosuchmethod'] = 'Błąd w kodzie! Próbuje się zainstalować metodę mnet xmlrpc ({$a->method}) w klasie ({$a->class}), ale jej nie znaleziono!';
$string['installreflectionclasserror'] = 'Błąd w kodzie! Nieudana introspekcja metody &quot;{$a->method}\' w klasie \'{$a->class}&quot;. Oryginalny komunikat o błędzie to: \'{$a->error} &quot;';
$string['installreflectionfunctionerror'] = 'Błąd w kodzie! Nieudana introspekcja metody &quot;{$a->method}\' w pliku \'{$a->file}&quot;. Oryginalny komunikat o błędzie to: \'{$a->error} &quot;';
$string['invalidaccessparam'] = 'Nieprawidłowy parametr dostępu.';
$string['invalidactionparam'] = 'Nieprawidłowy parametr akcji';
$string['invalidhost'] = 'Wprowadź prawidłowy identyfikator hosta';
$string['invalidpubkey'] = 'To nie jest prawidłowy klucz SSL. ({$a})';
$string['invalidurl'] = 'Nieprawidłowy parametr URL.';
$string['ipaddress'] = 'Adres IP';
$string['is_in_range'] = 'Adres IP <code>{$a}</code> reprezentuje poprawny , zaufany host.';
$string['ispublished'] = '{$a} włączył ci tę usługę.';
$string['issubscribed'] = '{$a} zapisał się do tej usługi na twoim hoście.';
$string['keydeleted'] = 'Twój klucz został pomyślnie usunięty i zastąpiony.';
$string['keymismatch'] = 'Klucz publiczny tego hosta, który posiadasz, jest różny od klucza obecnie opublikowanego. Obecnie opublikowany klucz:';
$string['last_connect_time'] = 'Czas ostatniego połączenia';
$string['last_connect_time_help'] = 'Czas ostatniego podłączenia z tym hostem.';
$string['last_transport_help'] = 'Transport, który został użyty do ostatniego połączenia z tym hostem.';
$string['leavedefault'] = 'Użyj ustawień domyślnych';
$string['listservices'] = 'Wypisz usługi';
$string['loginlinkmnetuser'] = '<br />Jeżeli jesteś zdalnym użytkownikiem MNet i chcesz <a href="{$a}">potwierdzić tutaj swój adres email</a>, możesz zostać przekierowany do strony logowania.<br />';
$string['logs'] = 'dzienniki';
$string['managemnetpeers'] = 'Zarządzaj węzłami';
$string['method'] = 'Metoda';
$string['methodhelp'] = 'Pomoc dla metody {$a}';
$string['methodsavailableonhost'] = 'Dostępne metody na {$a}';
$string['methodsavailableonhostinservice'] = 'Dostępne metody dla usługi {$a->service} on hoście {$a->host}';
$string['methodsignature'] = 'Sygnatura metody {$a}';
$string['mnet'] = 'Sieć MNet';
$string['mnet_concatenate_strings'] = 'Złącz (najwyżej) 3 napisy i zwróć wynik';
$string['mnet_session_prohibited'] = 'Użytkownicy z twojego serwera macierzystego nie są obecnie dopuszczeni do logowania do {$a}.';
$string['mnetdisabled'] = 'Mnet jest <strong>wyłączony.</strong>';
$string['mnetidprovider'] = 'Dostawca ID MNet';
$string['mnetidproviderdesc'] = 'Możesz użyć tego udogodnienia do otrzymania linku, którym możesz się zalogować, jeżeli dostarczyłeś poprawny adres email do pasującej nazwy użytkownika, możesz z nim próbować się zalogować.';
$string['mnetidprovidermsg'] = 'Powinieś być w stanie zalogować przy użyciu dostawcy {$a}.';
$string['mnetidprovidernotfound'] = 'Przepraszamy, ale nie można znaleźć żadnych dalszych informacji.';
$string['mnetpeers'] = 'Węzły';
$string['mnetservices'] = 'Usługi';
$string['mnetsettings'] = 'Ustawienia MNet';
$string['moodle_home_help'] = 'Ścieżka do strony głównej aplikacji MNet na zdalnym hoście, np. /moodle/.';
$string['name'] = 'Nazwa';
$string['net'] = 'Sieć';
$string['networksettings'] = 'Ustawienia sieci';
$string['never'] = 'Nigdy';
$string['noaclentries'] = 'Listy kontroli dostępu SSO jest pusta';
$string['noaddressforhost'] = 'Niestety nazwa hostname ({$a}) nie jest rozpoznana!';
$string['nocurl'] = 'Biblioteka PHP cURL nie jest zainstalowana';
$string['nolocaluser'] = 'Brak lokalnego wpisu dla zdalnego użytkownika. Nie może on zostać utworzony, ponieważ ten host nie tworzy użytkowników automatycznie. Proszę skontaktować się z administratorem!';
$string['nomodifyacl'] = 'Nie masz uprawnień, aby zmodyfikować listę kontroli dostępu MNet.';
$string['nonmatchingcert'] = 'Certyfikat dotyczy innego hosta: <br /> <em>{$a->subject}</em> <br /> niż ten, z któego pochodzi: <br /> <em>{$a->host}.</em>';
$string['nopubkey'] = 'Wystąpił problem podczas pobierania klucza publicznego.<br />Może host nie pozwala MNet na pobieranie lub klucz nie jest prawidłowy.';
$string['nosite'] = 'Nie znaleziono kursu na poziomie witryny (błąd ten nie powinien się już pojawiać, bo pochodzi z wycofanego kodu).';
$string['nosuchfile'] = 'Plik/funkcja {$a} nie istnieje.';
$string['nosuchfunction'] = 'Nie można znaleźć funkcji lub funkcji niedozwolona w RPC.';
$string['nosuchmodule'] = 'Funkcja została niewłaściwie zaadresowana i nie może być zlokalizowana. Proszę użyć formatu mod/nazwa_modułu/lib/nazwa_funkcji.';
$string['nosuchpublickey'] = 'Nie można uzyskać klucza publicznego do weryfikacji podpisu.';
$string['nosuchservice'] = 'Usługa RPC nie jest uruchomiona na tym hoście.';
$string['nosuchtransport'] = 'Nie istnieje żaden transport z tym ID.';
$string['notBASE64'] = 'Napis nie jest w formacie base64. To nie może być klucz.';
$string['notPEM'] = 'Ten klucz nie jest w formacie PEM. Nie będzie działał.';
$string['not_in_range'] = 'Adres IP <code>{$a}</code> nie reprezentuje poprawnego, zaufanego hosta.';
$string['notenoughidpinfo'] = 'Twój dostawca tożsamości daje nam za mało informacji, aby utworzyć lub zaktualizować twoje konto lokalnie. Przepraszamy!';
$string['notinxmlrpcserver'] = 'Próba dostępu do klienta zdalnego MNet poza wykonywaniem XML RPC serwera';
$string['notmoodleapplication'] = 'UWAGA: Nie jest to aplikacja Moodle, więc niektóre z metod inspekcji mogą nie działać prawidłowo.';
$string['notpermittedtojump'] = 'Nie masz uprawnień, aby rozpocząć zdalną sesję z tego serwera Moodle.';
$string['notpermittedtojumpas'] = 'Nie możesz rozpocząć zdalnej sesji, gdy jesteś zalogowany jako inny użytkownik.';
$string['notpermittedtoland'] = 'Nie masz uprawnień, aby rozpocząć zdalną sesję.';
$string['off'] = 'Wyłączony';
$string['on'] = 'Włączony';
$string['options'] = 'Opcje';
$string['peerprofilefielddesc'] = 'Tutaj możesz nadpisać globalne ustawienia, które pola profilu są wysyłane i importowane, gdy nowi użytkownicy są tworzeni';
$string['permittedtransports'] = 'Dozwolone transporty';
$string['phperror'] = 'Twoje żądanie nie będzie obsłużone z powodu wewnętrznego błędu PHP.';
$string['position'] = 'Pozycja';
$string['postrequired'] = 'Funkcja usuwania wymaga żądania POST.';
$string['privacy:metadata'] = 'Wtyczka MNet nie przechowuje żadnych danych osobowych.';
$string['profileexportfields'] = 'Pola do wysłania';
$string['profilefielddesc'] = 'Tutaj można określić pola profilu, które są wysyłane i odbierane przez Mnet, gdy konta użytkowników są tworzone lub aktualizowane. To ustawienie można zmienić to dla każdego węzła MNet osobno. Zauważ, że następujące pola są zawsze wysyłane i nie są opcjonalne: {$a}';
$string['profilefields'] = 'Pola profilu';
$string['profileimportfields'] = 'Pola do importu';
$string['promiscuous'] = 'Tryb nasłuchiwania (odbierania całego ruchu)';
$string['publickey'] = 'Klucz publiczny';
$string['publickey_help'] = 'Klucz publiczny jest pobierany automatycznie z serwera zdalnego.';
$string['publickeyrequired'] = 'Musisz podać klucz publiczny.';
$string['publish'] = 'Publikuj';
$string['reallydeleteserver'] = 'Czy jesteś pewien, że chcesz usunąć serwer?';
$string['receivedwarnings'] = 'Otrzymano poniższe ostrzeżenia';
$string['recordnoexists'] = 'Rekord nie istnieje.';
$string['reenableserver'] = 'Nie - wybierz tą opcję, aby ponownie włączyć ten serwer.';
$string['registerallhosts'] = 'Rejestruj wszystkie hosty (tryb promiscuous - nasłuchiwania)';
$string['registerallhostsexplain'] = 'Możesz włączyć automatyczne rejestrowanie wszystkich hostów, które próbują połączyć się z tobą. Oznacza to, że dla każdego serwera MNetu, który łączy się i żąda twojego klucza publicznego pojawi się na wpis na liście hostów. <br />
Masz ustawić opcję poniżej na &quot;wszystkie hosty&quot; i poprzez pewnych usług, jesteś w stanie świadczyć usługi dla każdego serwera zdalnym bez ograniczeń.';
$string['registerhostsoff'] = 'Rejestracja wszystkich hostów jest obecnie <b>wyłączona</b>';
$string['registerhostson'] = 'Rejestracja wszystkich hostów jest obecnie <b>włączona</b>';
$string['remotecourses'] = 'Zdalne kursy';
$string['remotehost'] = 'Zdalny host';
$string['remotehosts'] = 'Zdalne hosty';
$string['remoteuser'] = 'Zdalny użytkownik: {$a->remotetype}';
$string['remoteuserinfo'] = 'Użytkownik zdalny - profil pobrano z <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Sieć wymaga rozszerzenia OpenSSL';
$string['restore'] = 'Przywróć';
$string['returnvalue'] = 'Zwróć wartość';
$string['reviewhostdetails'] = 'Przeglądaj szczegóły hosta';
$string['reviewhostservices'] = 'Przeglądaj usługi hosta';
$string['selectaccesslevel'] = 'Wybierz poziom dostępu z listy.';
$string['selectahost'] = 'Proszę wybrać zdalny host.';
$string['service'] = 'Nazwa usługi';
$string['serviceid'] = 'ID usługi';
$string['servicesavailableonhost'] = 'Usługi dostępne na {$a}';
$string['serviceswepublish'] = 'Usługi, które możemy opublikować na {$a}.';
$string['serviceswesubscribeto'] = 'Usługi na {$a}, do których jesteśmy zapisani.';
$string['settings'] = 'Ustawienia';
$string['showlocal'] = 'Pokaż lokalnych użytkowników';
$string['showremote'] = 'Pokaż zdalnych użytkowników';
$string['ssl_acl_allow'] = 'SSO ACL: Dopuść użytkownika {$a->user} z {$a->host}';
$string['ssl_acl_deny'] = 'SSO ACL: Odmów użytkownikowi {$a->user} z {$a->host}';
$string['sslverification'] = 'Weryfikacja SSL';
$string['ssoaccesscontrol'] = 'Kontrola dostępu SSO';
$string['ssoacldescr'] = 'Użyj tej strony do przyznania/odmowy dostępu do określonych użytkowników ze zdalnych hostów MNet. Ma to zastosowanie, gdy oferujemy usługi SSO dla użytkowników zdalnych. Aby udzielić praw  swoim <em>lokalnym</em> użytkownikom do logowania się do innych hostów Mnet, należy  przyznać ich roli uprawnienie <em>mnetlogintoremote.</em>';
$string['ssoaclneeds'] = 'Aby ta funkcjonalność działała, trzeba mieć aktywną sieć (Networking), oraz wtyczkę uwierzytelniania MNet.';
$string['strict'] = 'Kontrolowany';
$string['subscribe'] = 'Zapisać się';
$string['system'] = 'System';
$string['testclient'] = 'Klient testowy MNet';
$string['testtrustedhosts'] = 'Testuj adres';
$string['testtrustedhostsexplain'] = 'Wprowadź adres IP, aby sprawdzić, czy ten host jest zaufany.';
$string['theypublish'] = 'Oni publikują';
$string['theysubscribe'] = 'Oni są zapisani do';
$string['transport_help'] = 'Opcje te są wzajemne, więc można wymusić na zdalnym serwerze używanie podpisanego certyfikatu SS tylko wtedy, gdy twój serwer ma również taki certyfikat SSL.';
$string['trustedhosts'] = 'Zaufane hosty XML-RPC';
$string['trustedhostsexplain'] = '<p> Mechanizm zaufanych hostów pozwala konkretnym maszynom na odwoływanie się do dowolnej części Moodle API za pośrednictwem XML-RPC. To pozwala  skryptom na sterowanie zachowaniem Moodle\'a i może być bardzo niebezpieczne. W razie wątpliwości, nie należy jej włączać. </p><p> <strong>Opcja nie jest wymagana do działania żadnej standardowej funkcji Mnet!</strong> Włącz ją tylko wtedy, gdy wiesz, co robisz. </p><p> Aby ją włączyć, należy wprowadzić listę adresów IP lub sieci, po jednym w linii. Oto kilka przykładów: </p> Lokalny host: <br /> 127.0.0.1 <br /> Twój lokalny host (z blokiem sieci): <br /> 127.0.0.1/32 <br /> Tylko host z adresem IP 192.168.0.7: <br /> 192.168.0.7/32 <br /> Dowolny host z adresem IP między 192.168.0.1 i 192.168.0.255: <br /> 192.168.0.0/24 <br /> Jakikolwiek hostk: <br /> 192.168.0.0 / 0 <br /> Oczywiście ostatni przykład jest zdecydowanie <strong>niezalecany </strong>.';
$string['turnitoff'] = 'Wyłącz';
$string['turniton'] = 'Włącz';
$string['type'] = 'Typ';
$string['unknown'] = 'Nieznany';
$string['unknownerror'] = 'Wystąpił nieznany błąd podczas negocjacji.';
$string['usercannotchangepassword'] = 'Nie możesz zmienić swojego hasła, ponieważ jesteś zdalnym użytkownikiem.';
$string['userchangepasswordlink'] = '<br /> Możesz swoje hasło u swojego dostawcy <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> .';
$string['usernotfullysetup'] = 'Konto użytkownika jest niekompletne. Musisz wrócić <a href="{$a}">z powrotem do swojego dostawcy</a> i tam uzupełnić swój profil. Być może trzeba się wylogować i zalogować ponownie, aby zobaczyć efekt.';
$string['usersareonline'] = 'Uwaga:  {$a} użytkowników z tego serwera jest aktualnie zalogowanych na twojej stronie.';
$string['validated_by'] = 'Potwierdzono przez sieć: <code>{$a}</code>';
$string['verifyhostonly'] = 'Zweryfikuj tylko hosta';
$string['verifysignature-error'] = 'Weryfikacja podpisu nie powiodło się. Nastąpił błąd.';
$string['verifysignature-invalid'] = 'Weryfikacja podpisu nie powiodła się. Wydaje się, że ta paczka nie została podpisana przez Ciebie.';
$string['version'] = 'Wersja';
$string['warning'] = 'Ostrzeżenie';
$string['wrong-ip'] = 'Twój adres IP nie pasuje do adresu, który mam zapisany.';
$string['xmlrpc-missing'] = 'Musisz mieć zainstalowany XML-RPC w PHP, aby móc korzystać z tej funkcji.';
$string['yourhost'] = 'Twój host';
$string['yourpeers'] = 'Twoje węzły';
