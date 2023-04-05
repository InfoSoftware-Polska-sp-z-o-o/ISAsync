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
 * Strings for component 'tracker', language 'pl', version '4.0'.
 *
 * @package     tracker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['AND'] = 'I';
$string['IN'] = 'W';
$string['abandonned'] = 'Porzucony';
$string['action'] = 'Akcja';
$string['activeplural'] = 'Aktywności';
$string['addacomment'] = 'Dodaj komentarz';
$string['addanoption'] = 'Dodaj opcję';
$string['addaquerytomemo'] = 'Dodaj to zapytanie do "moich zapytań"';
$string['addawatcher'] = 'Dodaj obserwatora';
$string['addtothetracker'] = 'Dodaj do tego śledzenia';
$string['administration'] = 'Administracja';
$string['administrators'] = 'Administratorzy';
$string['allownotifications_help'] = 'Kiedy zostanie włączony, niektóre zmiany stanu mogą doprowadzić do wysłania powiadomień do użytkowników, kiedy użytkownik ogląda problem. Użytkownicy mogą skonfigurować, które wydarzenie mają ich informować.';
$string['alltracks'] = 'Obserwuj moją pracę we wszystkich śledzeniach';
$string['any'] = 'Wszystko';
$string['askraise'] = 'Zapytaj rozwiązywacza problemów o podniesienia priorytetu';
$string['assignedto'] = 'Przypisany do';
$string['assignee'] = 'Beneficjant';
$string['attributes'] = 'Atrybuty';
$string['browse'] = 'Przeglądaj';
$string['browser'] = 'Przeglądarka';
$string['build'] = 'Wersja';
$string['by'] = '<i>nadany przez</i>';
$string['cascade'] = 'Wyślij górny poziom';
$string['cascadedticket'] = 'Przeniesiono z:';
$string['ccs'] = 'Ccs';
$string['checkbox'] = 'Pole wyboru';
$string['checkboxhoriz'] = 'Poziome pole wyboru';
$string['chooselocal'] = 'Wybierz lokalne śledzenie jako rodzica';
$string['chooseremote'] = 'Wybierz zdalnego hosta';
$string['chooseremoteparent'] = 'Wybierz instancję zdalną';
$string['choosetarget'] = 'Wybierz cel';
$string['clearsearch'] = 'Wyczyść kryteria wyszukiwania';
$string['comment'] = 'Komentarz';
$string['comments'] = 'Komentarze';
$string['component'] = 'Komponent';
$string['count'] = 'Liczyć';
$string['countbyassignee'] = 'Przez beneficjenta';
$string['countbymonth'] = 'Przez utworzenia raportu miesięcznego';
$string['countbyreporter'] = 'Według reportera';
$string['countbystate'] = 'Raport o stanie';
$string['createdinmonth'] = 'Utworzono w tym miesiącu';
$string['createnewelement'] = 'Tworzenie nowego elementu';
$string['currentbinding'] = 'Obecna kaskada';
$string['database'] = 'Baza danych';
$string['datereported'] = 'Data raportu';
$string['defaultassignee'] = 'Domyślny beneficjant';
$string['defaultassignee_help'] = 'Może wymagać od przychodzących zgłoszeń, przypisanie ich do jednego z dostępnych rozwiązywacza problemów.';
$string['deleteattachedfile'] = 'Usuń załącznik';
$string['dependancies'] = 'Zależności';
$string['dependson'] = 'Zależne od';
$string['descriptionisempty'] = 'Opis jest pusty';
$string['distribute'] = 'Przesuń bilet do innego śledzenia';
$string['doaddelementcheckbox'] = 'Dodaj element pola wyboru';
$string['doaddelementcheckboxhoriz'] = 'Dodaj element pola wyboru';
$string['doaddelementdropdown'] = 'Dodaj element pola rozwijalnego';
$string['doaddelementfile'] = 'Dodaj element pliku załącznika';
$string['doaddelementradio'] = 'Dodaj element pola typu radio';
$string['doaddelementradiohoriz'] = 'Dodaj element pola typu radio';
$string['doaddelementtext'] = 'Dodaj pole tekstowe.';
$string['doaddelementtextarea'] = 'Dodaj obszar tekstu.';
$string['doupdateelementcheckbox'] = 'Aktualizuj element wyboru';
$string['doupdateelementcheckboxhoriz'] = 'Aktualizuj element wyboru';
$string['doupdateelementdropdown'] = 'Aktualizuj element rozwijany';
$string['doupdateelementfile'] = 'Aktualizuj element załącznik pliku';
$string['doupdateelementradio'] = 'Aktualizuj element przycisku radiowego';
$string['doupdateelementradiohoriz'] = 'Aktualizuj element przycisku radiowego';
$string['doupdateelementtext'] = 'Aktualizuj pole tekstowe';
$string['doupdateelementtextarea'] = 'Aktualizuj obszar tekstowy';
$string['dropdown'] = 'Rozwijany';
$string['editoptions'] = 'Opcje aktualizacji';
$string['editproperties'] = 'Właściwości aktualizacji';
$string['editquery'] = 'Zmień zapisane pytanie';
$string['editwatch'] = 'Zmień rejestrowanie cc';
$string['elements'] = 'Dostępne elementy';
$string['elements_help'] = 'Formularz wysyłania problemów może być dostosowany przez dodawanie do niego elementów formularza. Pola "podsumowanie", "opis", "raportowany przez" są domyślne, ale każdy inny dodatkowy kwalifikator może być dodany do opisu problemów.

Elementy, który mogą być dodane są "elementami formularza", np. standardowe widgety formularza, które mogą reprezentować każdy kwalifikator lub otwarty opis, tj. przyciski radio, pola wyboru, rozwijalne, pola tekstowe lub obszary tekstowe.


Elementy są ustawione do użycia z poniższymi właściwościami:

### Nazwa

Mówiąc techniczne, nazwa jest identyfikatorem elementu. Musi ona zawierać znaki alfanumeryczne i znak _, bez znaków odstępu lub znaków nie drukowalnych. Nazwa nie może wystąpić w interfejsie użytkownika.

### Opis

Opis jest używany, kiedy element ma być identyfikowany w interfejsie użytkownika.

### Opcje

Niektóre elementy mają skończoną listę opcji wartości.

Opcje są dodane po utworzeniu elementu.

Pola tekstowe i obszary tekstowe nie mają żadnych opcji.';
$string['elementsused'] = 'Używane elementy';
$string['elucidationratio'] = 'Wskaźnik wyjaśnienia';
$string['emailoptions'] = 'Opcje poczty';
$string['emergency'] = 'Pilne zapytanie';
$string['emptydefinition'] = 'Docelowe śledzenie nie ma definicji';
$string['enablecomemnts_help'] = 'Kiedy jest włączony, niektóre role mogą komentować probelmy.';
$string['enablecomments'] = 'Zezwól na komentarze';
$string['enablecomments_help'] = 'Kiedy opcja jest włączona, czytelnicy rekordów problemów mogą dodawać komentarze w śledzeniu.';
$string['erroraddissueattribute'] = 'Nie można wysłać atrybutu(atrybutów) problemu. Sprawa {$a}';
$string['erroralreadyinuse'] = 'Element jest już używany';
$string['errorannotdeletecarboncopies'] = 'Nie możesz usuwać kopie węglowe użytkownika: {$a}';
$string['errorannotdeletequeryid'] = 'Nie możesz usuwać zapytanie id: {$a}';
$string['errorbadlistformat'] = 'Tylko liczby (lub lista numerów oddzielonych przecinkiem (",") dozwolone w polu numer problemu.';
$string['errorcannotaddelementtouse'] = 'Nie można dodać elementu na liście elementów do użycia w śledzeniu';
$string['errorcannotclearelementsforissue'] = 'Nie można wyczyścić elementów dla problemu{$a}';
$string['errorcannotcreateelementoption'] = 'Nie można utworzyć elementu opcji';
$string['errorcannotdeletearboncopyforuser'] = 'Nie można usunąć kopii węglowej {$a->issue} dla użytkownika: {$a->userid}';
$string['errorcannotdeletecc'] = 'Nie można usunąć kopii węglowej';
$string['errorcannotdeleteelement'] = 'Nie można usunąć elementu z listy elementów do wykorzystania w tym śledzeniu';
$string['errorcannotdeleteelementtouse'] = 'Nie można usunąć elementu z listy elementów do wykorzystania w tym śledzeniu';
$string['errorcannotdeleteolddependancy'] = 'Nie można usunąć starych zależności';
$string['errorcannotdeleteoption'] = 'Błąd podczas próby usunięcia elementu opcji';
$string['errorcannoteditwatch'] = 'Nie można edytować tego obserwatora';
$string['errorcannothideelement'] = 'Nie da się ukryć elementu z formularza dla tego śledzenia';
$string['errorcannotlogoldownership'] = 'Nie można logować starego właściciela';
$string['errorcannotsaveprefs'] = 'Nie można wstawić rekordu preferencji';
$string['errorcannotsetparent'] = 'Nie można ustawić rodzica w tym śledzeniu';
$string['errorcannotshowelement'] = 'Nie można pokazać elementu w formularzu w tym śledzeniu';
$string['errorcannotsubmitticket'] = 'Błąd rejestracji nowego zgłoszenia';
$string['errorcannotujpdateoptionbecauseused'] = 'Nie można zaktualizować elementu opcji, ponieważ jest obecnie używany jako atrybut dla problemu';
$string['errorcannotunbindparent'] = 'Nie może rozwiązać rodzica tego śledzenia';
$string['errorcannotupdateelement'] = 'Nie można zaktualizować elementu';
$string['errorcannotupdateissuecascade'] = 'Nie można zaktualizować problemu dla kaskady';
$string['errorcannotupdateprefs'] = 'Nie można zaktualizować rekordu preferencji';
$string['errorcannotupdatetrackerissue'] = 'Nie można zaktualizować problemu śledzenia';
$string['errorcannotupdatewatcher'] = 'Nie można zaktualizować obserwatora';
$string['errorcannotviewelementoption'] = 'Nie można wyświetlić opcji elementów';
$string['errorcannotwritecomment'] = 'Błąd zapisu komentarza';
$string['errorcannotwritedependancy'] = 'Nie można zapisać rekordu zależności';
$string['errorcanotaddelementtouse'] = 'Nie można dodać elementu na liście elementów do wykorzystania dla tego śledzenia';
$string['errorcookie'] = 'Nie udało się ustawić ciasteczka: {$a}.';
$string['errorcoursemisconfigured'] = 'Kurs jest źle skonfigurowany';
$string['errorcoursemodid'] = 'ID modułu kursu jest niepoprawny';
$string['errordbupdate'] = 'Nie można zaktualizować elementu';
$string['errorelementdoesnotexist'] = 'Element nie istnieje';
$string['errorelementinuse'] = 'Element jest już używany';
$string['errorfindingaction'] = 'Błąd: Nie można odnaleźć działania: {$a}';
$string['errorinvalidtrackerelementid'] = 'Nieprawidłowy element. Nie można edytować id elementu';
$string['errormoduleincorrect'] = 'Moduł kursu jest niepoprawny';
$string['errornoaccessallissues'] = 'Nie masz dostępu aby zobaczyć wszystkie problemów.';
$string['errornoaccessissue'] = 'Nie masz dostępu aby zobaczyć ten problem.';
$string['errornoeditissue'] = 'Nie masz dostępu do edycji tego problemu.';
$string['errorrecordissue'] = 'Nie można wysłać problemu';
$string['errorremote'] = 'Zdalny błąd: {$a}';
$string['errorremotesendingcascade'] = 'Błąd przy wysyłaniu kaskady: <br/> {$a}';
$string['errorunabletosabequery'] = 'Nie można zapisać pytania jako pytania';
$string['errorunabletosavequeryid'] = 'Nie można zaktualizować id zapytania {$a}';
$string['errorupdateelement'] = 'Nie można zaktualizować elementu';
$string['evolution'] = 'Trendy';
$string['evolutionbymonth'] = 'Stan rozwoju problemu';
$string['file'] = 'Załączony plik';
$string['follow'] = 'Śledź';
$string['generaltrend'] = 'Tendencja';
$string['hassolution'] = 'Rozwiązanie dla tego problemu jest opublikowane';
$string['hideccs'] = 'Ukryj obserwatorów';
$string['hidecomments'] = 'Ukryj komentarze';
$string['hidedependancies'] = 'Ukryj zależności';
$string['hidehistory'] = 'Ukryj historię.';
$string['history'] = 'Beneficjent';
$string['iamadeveloper'] = 'Mogę pracować na zgłoszeniach';
$string['iamnotadeveloper'] = 'Nie mogę pracować na zgłoszeniach';
$string['icanmanage'] = 'Mogę zarządzać zawartością zgłoszeń';
$string['icannotmanage'] = 'Nie mogę zarządzać zawartością zgłoszeń';
$string['icannotreport'] = 'Nie mogę się zgłosić';
$string['icannotresolve'] = 'Nie można przypisać lub zamknąć zgłoszeń';
$string['icanreport'] = 'Mogę się zgłosić';
$string['icanresolve'] = 'Można przypisać lub zamknąć zgłoszenia';
$string['id'] = 'Identyfikator';
$string['intest'] = 'Testowanie';
$string['intro'] = 'Opis';
$string['inworkinmonth'] = 'Jeszcze w pracy';
$string['issueid'] = 'Zgłoszenie';
$string['issuename'] = 'Etykieta zgłoszenia';
$string['issuenumber'] = 'Zgłoszenie';
$string['issues'] = 'rekordy zgłoszeń';
$string['issuestoassign'] = 'Zgłoszenia do przypisania: {$a}';
$string['issuestowatch'] = 'Bilety do obejrzenia: {$a}';
$string['knownelements'] = 'Znane śledzone elementy formularza';
$string['listissues'] = 'Widok listy';
$string['local'] = 'Lokalny';
$string['lowerpriority'] = 'Niższy priorytet';
$string['lowertobottom'] = 'Dolna do piwnicy';
$string['manageelements'] = 'Zarządzaj elementami';
$string['managenetwork'] = 'Kaskady i konfiguracja sieci';
$string['manager'] = 'Kierownik';
$string['me'] = 'Mój profil';
$string['message_bugtracker'] = 'Dziękujemy za wkład i pomoc, stwarzając tę usługę bardziej wiarygodną.';
$string['message_taskspread'] = 'Masz zdefiniowane zadanie. Nie zapomnij przypisać go do jakiegoś odbiorcy na następnym ekranie, aby jego rozpowszechnić.';
$string['message_ticketting'] = 'Zarejestrowaliśmy twoje zapytanie. Zostało przypisane do {$a}.';
$string['message_ticketting_preassigned'] = 'Zarejestrowaliśmy twoje zapytanie. Zostanie przypisane i obsłużone najszybciej jak będzie to możliwe.';
$string['mode_bugtracker'] = 'Zespół śledzenia błędów';
$string['mode_customized'] = 'Dostosowanie śledzenia';
$string['mode_taskspread'] = 'Dystrybucja zadania';
$string['mode_ticketting'] = 'Ustawienie wsparcia użytkownika';
$string['mods_help'] = 'Ten moduł dostarcza drogę operatora administracyjnego lub technicznego do zbierania lokalnych problemu na implementacji Moodle. To może być używane głównie jako ogólne narzędzie systemowe dla administracji Moodle i końcowego wsparcia użytkowników, ale także może być używane jako każdy inny moduł dla projektów studenckich. To może być inicjonowane kilka razy w obrębie kursu.
Formularz opisu problemu jest w pełni dostosowalny. Śledzenie administratora może dodać jako wiele opisu ile on potrzebuje przez dodawanie elementów formularza. Silnik zintegrowanego szukania dopasuje sam do tego dostosowania.';
$string['modulename'] = 'Śledzenie - wsparcie użytkowników';
$string['modulename_help'] = 'Aktywność śledzenia pozwala śledzonym zgłoszeniom na pomoc, raportowanie błędów, lub także śledzonym aktywnościom w kursie.

Aktywność pozwala stworzyć formularz śledzenia z elementów atrybutów z listy konfigurowalnych elementów. Niektóre elementy mogą być dzielone na poziomie strony, w celu użycia w innych śledzeniach.

zgłoszenie (lub zadanie) może być przypisane dla pracy do innego użytkownika.

Śledzone zgłoszenie jest zgłoszeniem pełnostatusowym, które wysyła powiadomienia o zmianie stanu do każdego śledzonego, który ma włączone powiadomienia. Użytkownik może wybrać, które zmiany stanu chce zazwyczaj śledzić.

Zgłoszenia mogą być przykute w zależnościach, więc mogą być łatwe do podążania za sekwencją zgłoszenia sprawy/konsekwencji.

Historia zmian jest śledzona dla każdego zgłoszenia.

Śledzenie zgłoszenia może być kaskadowane lokalnie lub przez MNET zezwalając kierownikowi zgłoszenia na wysłanie zgłoszenia do zdalnego kolekcjonera zgłoszenia (wyższy poziom).

Tropiciele mogą być teraz przykuci, więc zgłoszenie może być przesunięte pomiędzy śledzeniami.';
$string['modulenameplural'] = 'Wsparcie użytkownika - śledzenia';
$string['month'] = 'Miesiąc';
$string['myassignees'] = 'Rozwiązywacze i przypisani';
$string['myissues'] = 'Zgłoszenia i rozwiązane';
$string['mypreferences'] = 'Moje preferencje';
$string['myprofile'] = 'Mój profil';
$string['myqueries'] = 'Moje zapytania';
$string['mytasks'] = 'Moje zgłoszenia';
$string['mytickets'] = 'Moje zgłoszenia';
$string['mywatches'] = 'Moje obserwacje';
$string['mywork'] = 'Moja praca';
$string['name'] = 'Nazwa';
$string['namecannotbeblank'] = 'Nazwa nie może być pusta';
$string['newissue'] = 'Nowe zgłoszenie';
$string['noassignedtickets'] = 'Brak przydzielonych zgłoszeń';
$string['noassignees'] = 'Brak beneficjanta';
$string['nochange'] = 'Pozostawić bez zmian';
$string['nocomments'] = 'Brak komentarzy';
$string['nodata'] = 'Brak danych do wyświetlenia.';
$string['nodevelopers'] = 'Brak deweloperów';
$string['noelements'] = 'Brak elementów.';
$string['noelementscreated'] = 'Brak utworzonego elementu';
$string['nofile'] = 'Brak wgranego pliku';
$string['nofileloaded'] = 'Brak wczytanego tutaj pliku.';
$string['noissuesreported'] = 'Brak zgłoszenia tutaj';
$string['noissuesresolved'] = 'Bilet nie rozwiązany';
$string['nolocalcandidate'] = 'Brak lokalnego kandydata do kaskadowych';
$string['nomnet'] = 'Sieć Moodle wygląda na wyłączoną';
$string['nooptions'] = 'Brak opcji.';
$string['noqueryssaved'] = 'Brak przechowywanych zapytań';
$string['noremotehosts'] = 'Brak dostępnego hosta';
$string['noremotetrackers'] = 'Brak dostępnego zdalnego śledzenia';
$string['noreporters'] = 'Brak dziennikarzy, którzy prawdopodobnie nie zostali tutaj wprowadzeni.';
$string['noresolvers'] = 'Brak rozwiązywaczy';
$string['noresolvingissue'] = 'Brak przypisania zgłoszenia';
$string['notickets'] = 'Brak posiadanych zgłoszeń.';
$string['noticketsorassignation'] = 'Brak zgłoszeń lub przypisań';
$string['notifications'] = 'Powiadomienia';
$string['notifications_help'] = 'Ten parametr włącza lub wyłącza powiadomienia pocztowe ze śledzenia. Jeżeli włączone, niektóre wydarzenia lub zmiany stanów z tropiciela, który może wywołać wysłanie wiadomości email do konkretnych użytkowników.';
$string['notrackeradmins'] = 'Brak administratorów';
$string['nowatches'] = 'Brak obserwatorów';
$string['numberofissues'] = 'Liczba zgłoszeń';
$string['observers'] = 'Obserwatorzy';
$string['open'] = 'Otwórz.';
$string['option'] = 'Opcja';
$string['optionisused'] = 'Te opcje id są już w użyciu dla tego elementu.';
$string['options'] = 'Opcje';
$string['options_help'] = '### Nazwa
Nazwa identyfikuje wartość opcji. Powinna zawierać znaki alfanumeryczne i _ bez znaków odstępu lub znaków nie drukowanych.

### Opis

Opis jest odpowiednikiem widoczności kodu opcji.

### Sortowanie opcji

Możesz zdefiniować sortowanie w którym opcje występują na liście.

Elementy pól tekstowych i obszarów tekstowych nie mają żadnych opcji.';
$string['order'] = 'Sortowanie';
$string['pages'] = 'Strony';
$string['pluginadministration'] = 'Administracja śledzeniem';
$string['pluginname'] = 'Śledzenie zgłoszenia/Wsparcie użytkownika';
$string['posted'] = 'Wysłany';
$string['potentialresolvers'] = 'Potencjalni rozwiązywacze';
$string['preferences'] = 'Preferencje';
$string['prefsnote'] = 'Ustawienia preferencji, które domyślnie powiadamiają podczas tworzenia nowego wpisu lub kiedy zarejestrujesz obserwację dla istniejącego problemu';
$string['print'] = 'Drukuj';
$string['priority'] = 'Priorytet nadania';
$string['priorityid'] = 'Priorytet';
$string['profile'] = 'Ustawienia użytkownika';
$string['published'] = 'Opublikowany';
$string['queries'] = 'Zapytania';
$string['query'] = 'Zapytanie';
$string['queryname'] = 'Etykieta zapytania';
$string['radio'] = 'Przyciski radiowe';
$string['radiohoriz'] = 'Poziome przyciski opcji';
$string['raisepriority'] = 'Podniesienie priorytetu';
$string['raiserequestcaption'] = 'Wniosek o podniesienie priorytetu dla zgłoszenia';
$string['raiserequesttitle'] = 'Zapytaj o podniesienie priorytetu';
$string['raisetotop'] = 'Podnieść do sufitu';
$string['reason'] = 'Powód';
$string['register'] = 'Obserwuj to zgłoszenie';
$string['reportanissue'] = 'Wyślij zgłoszenie';
$string['reportedby'] = 'Zgłoszone przez';
$string['reporter'] = 'Zgłaszający';
$string['reports'] = 'Raporty';
$string['resolution'] = 'Rozwiązanie';
$string['resolved'] = 'Rozwiązany';
$string['resolvedplural'] = 'Rozwiązany';
$string['resolvedplural2'] = 'Rozwiązany';
$string['resolver'] = 'Moje zgłoszone problemy';
$string['resolvers'] = 'Rozwiązywacze';
$string['resolving'] = 'Rozwiązywanie';
$string['runninginmonth'] = 'Uruchomiony w tym miesiącu';
$string['saveasquery'] = 'Zapisz zapytanie';
$string['savequery'] = 'Zapisz zapytanie';
$string['search'] = 'Wyszukaj';
$string['searchbyid'] = 'Szukaj przez ID';
$string['searchcriteria'] = 'Kryteria wyszukiwania';
$string['searchresults'] = 'Wyniki wyszukiwania';
$string['searchwiththat'] = 'Ponownie uruchom to zapytanie';
$string['selectparent'] = 'Wybór rodzica';
$string['sendrequest'] = 'Wyślij zapytanie';
$string['setoncomment'] = 'Wyślij mi komentarz';
$string['setwhenopens'] = 'Nie wolno mi doradzać, gdy otwarte';
$string['setwhenpublished'] = 'Nie wolno mi doradzać, gdy rozwiązane jest opublikowane';
$string['setwhenresolves'] = 'Nie wolno mi doradzać, gdy rozwiązane';
$string['setwhentesting'] = 'Nie wolno mi doradzać, gdy rozwiązanie jest testowane';
$string['setwhenthrown'] = 'Nie wolno mi doradzać, gdy opuszczone';
$string['setwhenwaits'] = 'Nie wolno mi doradzać, gdy oczekuje';
$string['setwhenworks'] = 'Nie wolno mi doradzać, gdy w pracy';
$string['sharethiselement'] = 'Włącz ten elementu całej witryny';
$string['sharing'] = 'Udostępnianie';
$string['showccs'] = 'Pokaż obserwatorów';
$string['showcomments'] = 'Pokaż komentarze.';
$string['showdependancies'] = 'Pokaż zależności';
$string['showhistory'] = 'Pokaż historię';
$string['site'] = 'Strona';
$string['solution'] = 'Rozwiązanie';
$string['sortorder'] = 'Sortowanie';
$string['standalone'] = 'Samodzielny tropiciel (najwyższy poziom wsparcia).';
$string['statehistory'] = 'Stany';
$string['stateprofile'] = 'Stany zgłoszeń';
$string['status'] = 'Status';
$string['strictworkflow'] = 'Ścisły przepływ pracy';
$string['strictworkflow_help'] = 'Gdy jest włączony, każda szczególna rola wewnętrznego śledzenia (zgłaszający, deweloper, rozwiązywacz, kierownik) będzie miał dostęp tylko do swoich dostępnych stanów zamiast do swojej roli.';
$string['submission'] = 'Nowe zgłoszenie jest zgłoszone w śledzeniu [{$a}]';
$string['submitbug'] = 'Wyślij zgłoszenie';
$string['subtrackers'] = 'Podśledzenia';
$string['sum_opened'] = 'Otwarty';
$string['sum_posted'] = 'Oczekujący';
$string['sum_reported'] = 'Zgłoszony';
$string['sum_resolved'] = 'Rozwiązany';
$string['summary'] = 'Streszczenie';
$string['supportmode'] = 'Tryb wsparcia';
$string['testing'] = 'W fazie testów';
$string['text'] = 'Pole tekstowe';
$string['textarea'] = 'Obszar tekstowy';
$string['thanksdefault'] = 'Dziękujemy za przyczynianie się do stałej poprawy tej usługi.';
$string['thanksmessage'] = 'Wiadomość podziękowania.';
$string['ticketprefix'] = 'Przedrostek zgłoszenia';
$string['tickets'] = 'Zgłoszenia';
$string['tracker-levelaccess'] = 'Moje uprawnienia w tym śledzeniu';
$string['tracker:addinstance'] = 'Dodaj śledzenie';
$string['tracker:canbecced'] = 'Może być wybrana dla cc';
$string['tracker:comment'] = 'Komentarz do problemu';
$string['tracker:configure'] = 'Konfiguruj opcje śledzenia';
$string['tracker:configurenetwork'] = 'Konfiguruj funkcje sieciowe';
$string['tracker:develop'] = 'Zostać wybrany aby rozwiązać zgłoszenie';
$string['tracker:manage'] = 'Zarządzaj problemami';
$string['tracker:managepriority'] = 'Zarządzaj priorytetami wpisów';
$string['tracker:managewatches'] = 'Zarządzaj obserwacjami w zgłoszeniu';
$string['tracker:report'] = 'Raport zgłoszeń';
$string['tracker:resolve'] = 'Rozwiąż zgłoszenia';
$string['tracker:seeissues'] = 'Zobacz treść probelmu';
$string['tracker:shareelements'] = 'Współdziel elementy na poziomie strony';
$string['tracker:viewallissues'] = 'Zobacz wszystkie zgłoszenia';
$string['tracker:viewpriority'] = 'Pokaż priorytet moich zgłoszeń';
$string['tracker:viewreports'] = 'Pokaż raport pracy nad problemami';
$string['tracker_name'] = 'Usługa modułu śledzenia';
$string['tracker_service_name'] = 'Usługi modułu śledzenia';
$string['trackerelements'] = 'Definicja śledzenia';
$string['trackereventchanged'] = 'Zmiana stanu problemu w śledzeniu [${a}]';
$string['trackerhost'] = 'Host rodzica dla śledzenia';
$string['trackername'] = 'Nazwa śledzenia';
$string['transfer'] = 'Przeniesione';
$string['transfered'] = 'Przeniesione';
$string['transferservice'] = 'Wsparcie zgłoszeń kaskadowych';
$string['turneditingoff'] = 'Włącz edytowanie';
$string['turneditingon'] = 'Wyłącz edytowanie';
$string['type'] = 'Typ';
$string['unassigned'] = 'Nieprzypisane';
$string['unbind'] = 'Rozwiąż kaskadę';
$string['unregisterall'] = 'Wyrejestruj ze wszystkich';
$string['unsetoncomment'] = 'Doradzaj mi, kiedy są zamieszczane komentarze';
$string['unsetwhenopens'] = 'Doradzaj mi, kiedy otwarto';
$string['unsetwhenpublished'] = 'Doradzaj mi, kiedy rozwiązanie jest publikowane';
$string['unsetwhenresolves'] = 'Doradzaj mi, kiedy rozwiązano';
$string['unsetwhentesting'] = 'Doradzaj mi, kiedy rozwiązanie jest testowane';
$string['unsetwhenthrown'] = 'Doradzaj mi, kiedy jest wyrzucany';
$string['unsetwhenwaits'] = 'Doradzaj mi, kiedy oczekuje';
$string['unsetwhenworks'] = 'Doradzaj mi, kiedy otrzymał pracę';
$string['urgentraiserequestcaption'] = 'Użytkownik zażądał pilnego zapotrzebowania na priorytet';
$string['urgentsignal'] = 'PILNE ZAPYTANIE';
$string['validated'] = 'Zatwierdzone';
$string['view'] = 'Odsłon';
$string['vieworiginal'] = 'Zobacz oryginał';
$string['voter'] = 'Głosowanie';
$string['waiting'] = 'Czekanie';
$string['watches'] = 'Obserwowane';
$string['youneedanaccount'] = 'Musisz mieć tutaj autoryzowane konto aby zgłosić zgłoszenie';
