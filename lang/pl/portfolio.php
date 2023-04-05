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
 * Strings for component 'portfolio', language 'pl', version '4.0'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Rozwiąż aktywny eksport';
$string['activeportfolios'] = 'Dostępne portfolia';
$string['addalltoportfolio'] = 'Eksportuj wszystko do portfolio';
$string['addnewportfolio'] = 'Dodaj nowe portfolio';
$string['addtoportfolio'] = 'Eksportuj do portfolio';
$string['alreadyalt'] = 'Już wyeksportowano - proszę tutaj kliknąć aby rozwiązać ten transfer';
$string['alreadyexporting'] = 'Już masz aktywny w tej sesji eksport portfolio. Przed kontynuowaniem, musisz ten eksport uzupełnić, lub go anulować. Czy chcesz kontynuować? (Nie będzie można z tego zrezygnować)';
$string['availableformats'] = 'Dostępne formaty eksportu';
$string['callbackclassinvalid'] = 'Wymieniona klasa callback była nieprawidłowa lub nie jest częścią hierarchii portfolio_caller';
$string['callercouldnotpackage'] = 'Nie udało się spakować twoich danych do eksportu: pierwotny błąd to {$a}';
$string['cannotsetvisible'] = 'Nie można ustawić widoczności - wtyczka została całkowicie wyłączona z powodu złej konfiguracji';
$string['commonportfoliosettings'] = 'Wspólne ustawienia portfolio';
$string['commonsettingsdesc'] = '<p> Jeżeli przewidywany czas przesyłu uznany będzie za \'średni\' lub \'długi\', użytkownik mógłby nie życzyć sobie czekać aż do jego zakończenia. </p>
<p> Transfery rozmiary poniżej progu \'średni\' są wykonywane natychmiast, bez kolejkowania, natomiast powyżej \'średni\' użytkownik jest ostrzegany, że transfer potrwa dłużej i ma szanse wyboru</p>
<p> Dodatkowo niektóre wtyczki portfolio mogą ignorować tę opcję całkowicie i wstawiać wszystkie transfery do kolejki. </p>';
$string['configexport'] = 'Skonfiguruj dane eksportu';
$string['configplugin'] = 'Konfiguruj wtyczkę portfolio';
$string['configure'] = 'Konfiguruj';
$string['confirmcancel'] = 'Czy na pewno chcesz anulować eksportowanie?';
$string['confirmexport'] = 'Proszę potwierdzić eksport';
$string['confirmsummary'] = 'Podsumowanie twojego eksportu';
$string['continuetoportfolio'] = 'Przejdź do swojego portfolio';
$string['deleteportfolio'] = 'Usuń to portfolio';
$string['destination'] = 'Przeznaczenie';
$string['disabled'] = 'Przykro nam, ale eksport portfolio nie jest możliwy na tej stronie';
$string['disabledinstance'] = 'Wyłączony';
$string['displayarea'] = 'Obszar eksportu';
$string['displayexpiry'] = 'Limit czasu przesyłania';
$string['displayinfo'] = 'Informacja o eksporcie';
$string['dontwait'] = 'Nie czekaj';
$string['enabled'] = 'Włącz portfolio';
$string['enableddesc'] = 'Włączenie pozwoli administratorom skonfigurować zdalne systemy, dokąd użytkownicy będą mogli eksportować treści';
$string['err_uniquename'] = 'Nazwa portfolio musi być unikalna (we wtyczce)';
$string['exportalreadyfinished'] = 'Eksport portfolio ukończony!';
$string['exportalreadyfinisheddesc'] = 'Eksport portfolio już ukończony!';
$string['exportcomplete'] = 'Eksport portfolio ukończony!';
$string['exportedpreviously'] = 'Poprzedni eksport';
$string['exportexceptionnoexporter'] = 'Wyjątek portfolio_export_exception został rzucony, brak obiektu exportera';
$string['exportexpired'] = 'Proces eksportu wygasł';
$string['exportexpireddesc'] = 'Próbowano częściowo powtórzyć eksport lub uruchomić pusty eksport. Aby to zrobić właściwie, należy wrócić do oryginalnej lokalizacji i uruchomić eksport ponownie. Tak się czasem zdarza w przypadku użycia przycisku wstecz przeglądarki po zakończeniu eksportu lub przez użycie nieprawidłowego URL z zakładek.';
$string['exporting'] = 'Eksportowanie do portfolio';
$string['exportingcontentfrom'] = 'Eksportowanie zawartości z {$a}';
$string['exportingcontentto'] = 'Eksportowanie zawartości do {$a}';
$string['exportqueued'] = 'Portfolio zostało umieszczone w kolejce do przesłania';
$string['exportqueuedforced'] = 'Portfolio zostało umieszczone w kolejce do przesłania (zdalny system wymusza kolejkowanie)';
$string['failedtopackage'] = 'Nie znaleziono plików do spakowania';
$string['failedtosendpackage'] = 'Nie udało się wysłać swoich danych do wybranego systemu portfolio: pierwotny błąd {$a}';
$string['filedenied'] = 'Odmowa dostępu do tego pliku';
$string['filenotfound'] = 'Nie znaleziono pliku';
$string['fileoutputnotsupported'] = 'Nadpisanie pliku wyjściowego nie jest obsługiwane dla tego formatu';
$string['format_document'] = 'Dokument';
$string['format_file'] = 'Plik';
$string['format_image'] = 'Zdjęcie';
$string['format_leap2a'] = 'Format portfolio Leap2A';
$string['format_mbkp'] = 'Format kopii zapasowych Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Prezentacja';
$string['format_richhtml'] = 'HTML z załącznikami';
$string['format_spreadsheet'] = 'Arkusz kalkulacyjny';
$string['format_text'] = 'Prosty tekst';
$string['format_video'] = 'Wideo';
$string['highdbsizethreshold'] = 'Liczba rekordów przesyły długiego';
$string['highdbsizethresholddesc'] = 'Liczba rekordów bazy danych, powyżej której czas przesyłu będzie uznany za \'długi';
$string['highfilesizethreshold'] = 'Rozmiar pliku przesyłu długiego';
$string['highfilesizethresholddesc'] = 'Rozmiar plików, powyżej którego czas przesyłu będzie uznany za \'długi';
$string['insanebody'] = 'Cześć! Otrzymujesz tę wiadomość jako administrator witryny {$a->sitename}.

Niektóre wtyczki portfolio zostały automatycznie wyłączone z powodu błędów w konfiguracji. Oznacza to, że użytkownicy nie mogą obecnie eksportować zawartości do tych portfolio.

Lista instancji wtyczek wyłączonych: {$a->textlist}

Należy to naprawić jak najszybciej, odwiedzając {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Cześć! Otrzymujesz tę wiadomość jako administrator witryny {$a->sitename}. </p>

<p>Niektóre wtyczki portfolio zostały automatycznie wyłączone z powodu błędów w konfiguracji. Oznacza to, że użytkownicy nie mogą obecnie eksportować zawartości do tych portfolio.</p>

<p>Lista instancji wtyczek wyłączonych: </p>
{$a->textlist}

<p>Należy to naprawić jak najszybciej, odwiedzając {<a href="{$a->fixurl}"> strony konfiguracji portfolio</a></p>';
$string['insanebodysmall'] = 'Cześć! Otrzymujesz tę wiadomość jako administrator witryny {$a->sitename}.

Niektóre wtyczki portfolio zostały automatycznie wyłączone z powodu błędów w konfiguracji. Oznacza to, że użytkownicy nie mogą obecnie eksportować zawartości do tych portfolio.

Należy to naprawić jak najszybciej, odwiedzając {$a->fixurl}.';
$string['insanesubject'] = 'Niektóre instancje portfolio zostały automatycznie wyłączone';
$string['instancedeleted'] = 'Portfolio usunięte';
$string['instanceismisconfigured'] = 'To portfolio jest źle skonfigurowane, pomijam. Błąd: {$a}';
$string['instancenotdelete'] = 'Nie udało się usunąć portfolio';
$string['instancenotsaved'] = 'Nie udało się zapisać portfolio';
$string['instancesaved'] = 'Portfolio zapisane';
$string['invalidaddformat'] = 'Nieprawidłowy formatu przekazano do portfolio_add_button. ({$a})
Format musi być jednym z PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Nie znaleziono własności ({$a}) w portfolio_button';
$string['invalidconfigproperty'] = 'Nie znaleziono własności konfiguracji ({$a->property} w {$a->class})';
$string['invalidexportproperty'] = 'Nie znaleziono własności konfiguracji eksportu ({$a->property} w {$a->class})';
$string['invalidfileareaargs'] = 'Nieprawidłowe argumenty przekazywane do set_file_and_format_data - wymagane są contextid, component, filearea i itemid';
$string['invalidformat'] = 'Eksportowanie w nieprawidłowym formacie, {$a}';
$string['invalidinstance'] = 'Nie można znaleźć tego obiektu portfolio';
$string['invalidpreparepackagefile'] = 'Nieprawidłowe wywołanie prepare_package_file - należy wybrać albo single albo multifiles';
$string['invalidproperty'] = 'Nie znaleziono własności ({$a->property} w {$a->class})';
$string['invalidsha1file'] = 'Nieprawidłowe wywołanie get_sha1_file - należy wybrać albo single albo multifiles';
$string['invalidtempid'] = 'Nieprawidłowy identyfikator eksportu. Może eksport wygasł';
$string['invaliduserproperty'] = 'Nie znaleziono własności konfiguracji użytkownika ({$a->property} w {$a->class})';
$string['leap2a_emptyselection'] = 'Wymagana wartość nie została wybrana';
$string['leap2a_entryalreadyexists'] = 'Próbowano dodać pozycję Leap2A z id ({$a}), który już istnieje w tym źródle';
$string['leap2a_feedtitle'] = 'Eksport Leap2A z Moodle do {$a}';
$string['leap2a_filecontent'] = 'Próbowano wpisać plik do pola Leap2A, zamiast użyć podklasy pliku *';
$string['leap2a_invalidentryfield'] = 'Próbowano ustawić pole, które nie istnieje ({$a}) lub którego nie można ustawiać bezpośrednio';
$string['leap2a_invalidentryid'] = 'Próbowano uzyskać dostęp do wpisu o identyfikatorze, który nie istnieje ({$a})';
$string['leap2a_missingfield'] = 'Brak wymaganego pola Leap2A {$a}';
$string['leap2a_nonexistantlink'] = 'Wpis Leap2A ({$a->from}) próbował powiązać się z nie istniejącym wpisem ({$a->to}) przez {$a->rel}';
$string['leap2a_overwritingselection'] = 'Nadpisuję oryginalny typ wpisu ({$a}) na selekcję w make_selection';
$string['leap2a_selflink'] = 'Wpis Leap2A ({$a->id}) próbował powiązać się z samym sobą przez {$a->rel}';
$string['logs'] = 'Transferuj logi';
$string['logsummary'] = 'Poprzednie, udane transfery';
$string['manageportfolios'] = 'Zarządzaj portfolio';
$string['manageyourportfolios'] = 'Zarządzaj swoimi portfolio';
$string['mimecheckfail'] = 'Wtyczka portfolio {$a->plugin} nie obsługuje typu MIME {$a->mimetype}';
$string['missingcallbackarg'] = 'Brak argumentu callback {$a->arg} dla klasy {$a->class}';
$string['moderatedbsizethreshold'] = 'Średnia liczba rekordów';
$string['moderatedbsizethresholddesc'] = 'Liczba rekordów bazy danych, powyżej której czas przesyłu będzie uznany za \'średni';
$string['moderatefilesizethreshold'] = 'Średni rozmiar pliku';
$string['moderatefilesizethresholddesc'] = 'Rozmiar plików, powyżej którego czas przesyłu będzie uznany za \'średni';
$string['multipleinstancesdisallowed'] = 'Próba utworzyć kolejnego egzemplarza wtyczki, która nie pozwala na wiele egzemplarzy ({$a})';
$string['mustsetcallbackoptions'] = 'Musisz ustawić opcje callback albo w konstruktorze portfolio_add_button albo metodą set_callback_options';
$string['noavailableplugins'] = 'Niestety nie masz dostępnych portfolio, do których można by eksportować';
$string['nocallbackclass'] = 'Nie znaleziono klasy callback ({$a})';
$string['nocallbackcomponent'] = 'Nie można znaleźć określonego składnika {$a}.';
$string['nocallbackfile'] = 'Module, z którego próbujesz wyeksportować jest uszkodzony - nie odnaleziono żądanego pliku ({$a})';
$string['noclassbeforeformats'] = 'Musisz ustawić klasę callback przed wywołaniem set_formats w portfolio_button';
$string['nocommonformats'] = 'Brak wspólnych formatów dla dostępnych wtyczek i wywołującej lokacji {$a->location} (wywołanie obsługuje {$a->formats})';
$string['noinstanceyet'] = 'Jeszcze nie wybrano/zaznaczono';
$string['nologs'] = 'Brak logów do wyświetlenia!';
$string['nomultipleexports'] = 'Niestety docelowe portfolio ({$a->plugin}) nie obsługuje wielu eksportów w tym samym czasie. Proszę <a href="{$a->link}">zakończyć bieżący</a> i spróbować ponownie';
$string['nonprimative'] = 'Złożona wartość została przekazana jako argument wywołania zwrotnego do portfolio_add_button. Odmowa kontynuacji. Klucz: {$a->key}, wartość: {$a->value}';
$string['nopermissions'] = 'Przykro nam, ale nie masz wystarczających uprawnień, aby eksportować pliki z tego obszaru';
$string['notexportable'] = 'Przykro nam, ale typ zawartości, który próbujesz wyeksportować, nie jest możliwy do eksportu';
$string['notimplemented'] = 'Przykro nam, ale próbujesz wyeksportować zawartość w formacie, który nie jest jeszcze zaimplementowany ({$a})';
$string['notyetselected'] = 'Jeszcze nie wybrano';
$string['notyours'] = 'Próbujesz wznowić eksport portfolio, który nie należy do Ciebie!';
$string['nouploaddirectory'] = 'Nie można utworzyć katalog tymczasowy do zapakowania twoich danych z';
$string['off'] = 'Włączone, ale ukryte';
$string['on'] = 'Włączony i widoczny';
$string['plugin'] = 'Wtyczka portfolio';
$string['plugincouldnotpackage'] = 'Nie udało się spakować twoich danych do eksportu: pierwotny błąd to {$a}';
$string['pluginismisconfigured'] = 'Ta wtyczka portfolio jest źle skonfigurowana, pomijam. Błąd: {$a}';
$string['portfolio'] = 'Portfolio';
$string['portfolios'] = 'Portfolia';
$string['privacy:metadata:portfolio_log:userid'] = 'Identyfikator użytkownika, który wyeksportował zawartość';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Eksportuj dane';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Czas wygaśnięcia tego rekordu';
$string['privacy:metadata:userid'] = 'Identyfikator użytkownika';
$string['privacy:metadata:value'] = 'Wartość dla preferencji';
$string['queuesummary'] = 'Transfery w kolejce';
$string['returntowhereyouwere'] = 'Powrót do poprzedniego miejsca';
$string['save'] = 'Zapisz';
$string['selectedformat'] = 'Wybrany format eksportu';
$string['selectedwait'] = 'Czy wybrano czekanie?';
$string['selectplugin'] = 'Wybierz miejsce docelowe';
$string['showhide'] = 'Pokaż / ukryj';
$string['singleinstancenomultiallowed'] = 'Tylko jedna instancja wtyczki portfolio jest dostępna, nie obsługuje wielu eksportów na sesję, a w tej sesji trwa już aktywny eksport!';
$string['somepluginsdisabled'] = 'Niektóre całe wtyczki portfolio zostały wyłączone, ponieważ albo są źle skonfigurowany albo zależą od:';
$string['sure'] = 'Czy na pewno chcesz usunąć \'{$a}\'? Tej operacji nie będzie można cofnąć.';
$string['thirdpartyexception'] = 'Niestandardowy wyjątek został wyrzucony podczas eksportu portfolio ({$a}). Został on przechwycony i ponownie rzucony, ale należy to poprawić';
$string['transfertime'] = 'Czas transferu';
$string['unknownplugin'] = 'Nieznany (być może został już usunięty przez administratora)';
$string['wait'] = 'Czekaj';
$string['wanttowait_high'] = 'Nie zaleca się czekać na zakończenie tego transferu, ale można, jeśli jesteś pewien, że wiesz, co robisz';
$string['wanttowait_moderate'] = 'Chcesz czekać na zakończenie tego transferu? To może potrwać kilka minut';
