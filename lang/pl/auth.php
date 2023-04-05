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
 * Strings for component 'auth', language 'pl', version '4.0'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Dostępne wtyczki uwierzytelniania';
$string['allowaccountssameemail'] = 'Zezwól na konta z takim samym adresem e-mail';
$string['allowaccountssameemail_desc'] = 'Jeśli opcja jest włączona, więcej niż jedno konto użytkownika może mieć ten sam adres e-mail. Może to spowodować problemy z bezpieczeństwem lub prywatnością, na przykład w przypadku wiadomości e-mail z potwierdzeniem zmiany hasła.';
$string['alternatelogin'] = 'Jeżeli wprowadzisz tutaj adres URL, to będzie używany jako strona logowania do tego serwisu. Strona powinna zawierać formularz o właściwości action ustawionej na <strong>\'{$a}\'</strong> i zwracać pola <strong>username</strong> i <strong>password</strong>.<br />Bądź ostrożny nie wprowadzaj niepoprawnego URL bo możesz zablokować sobie wejście do tej strony.<br />Pozostaw pole puste żeby używać domyślnej strony logowania.';
$string['alternateloginurl'] = 'Alternatywny adres URL logowania';
$string['auth_changepasswordhelp'] = 'Help nt. zmiany hasła';
$string['auth_changepasswordhelp_expl'] = '***Wyświetl help nt. straconego hasła użytkownikom, którzy stracili swoje {$a} hasło. To będzie wyświetlone wraz z, lub zamiast <strong>URL Zmiany Hasła</strong> lub zmianą hasła Internal Moodle ***';
$string['auth_changepasswordurl'] = '***URL zmiany hasła***';
$string['auth_changepasswordurl_expl'] = 'Określ url do przesłania użytkownikom, którzy stracili swoje {$a} hasło. Ustaw <strong>Użyj standardowej strony Zmiany Hasła</strong> na <strong>Nie</strong>.';
$string['auth_changingemailaddress'] = 'Zażądano zamiany adresu e-mail z {$a->oldemail} na {$a->newemail}. Ze względów bezpieczeństwa wysłaliśmy do Ciebie wiadomość pocztową na nowy adres, aby upewnić się, że należy on do Ciebie. Twój adres zostanie zaktualizowany jak tylko klikniesz link przesłany w wiadomości.';
$string['auth_common_settings'] = 'Ustawienia wspólne';
$string['auth_data_mapping'] = 'Mapuj dane';
$string['auth_fieldlock'] = 'Blokada wartości';
$string['auth_fieldlock_expl'] = '<p><b>Blokada wartości:</b> Jeśli ta opcja jest włączona, uniemożliwi użytkownikom i administratorom Moodle bezpośrednią edycję tego pola. Użyj tej opcji, jeśli utrzymujesz te dane w zewnętrznym systemie autoryzacji. </p>';
$string['auth_fieldlockfield'] = 'Blokada wartości ({$a})';
$string['auth_fieldlocks'] = 'Zablokuj dane użytkownika';
$string['auth_fieldlocks_help'] = '<p>Możesz zablokować pola z danymi użytkownika. Jest to użyteczne, gdy dane są utrzymywane ręcznie przez administratora przez edycje profilu użytkownika lub uaktualniane/przesyłane przez użycie funkcjonalności "prześlij użytkowników". Jeżeli zablokujesz pola wymagane przez Moodle, upewnij się że dostarczasz tych danych podczas tworzenia konta użytkownika ; albo konta będą nie zdatne do użytku.</p><p>Uważaj ustawiając blokady, \'zablokowanie pustych\' może powodować problemy.</p>';
$string['auth_fieldmapping'] = 'Mapowanie danych ({$a})';
$string['auth_invalidnewemailkey'] = 'Błąd: jeśli próbujesz potwierdzić zmianę adresu e-mail, mogłeś popełnić błąd podczas kopiowania adresu URL, który wysłaliśmy mailem. Proszę skopiować adres i spróbować ponownie.';
$string['auth_multiplehosts'] = 'Można wskazać więcej komputerów-hostów np. host1.com; host2.com; host3.com';
$string['auth_notconfigured'] = 'Metoda uwierzytelniania {$a} nie jest skonfigurowana.';
$string['auth_outofnewemailupdateattempts'] = 'Wykorzystałeś dozwoloną liczbę prób aktualizacji twojego adresu e-mail. Twoje żądanie aktualizacji zostało anulowane.';
$string['auth_passwordisexpired'] = 'Twoje hasło wygasło. Chcesz teraz zmienić hasło?';
$string['auth_passwordwillexpire'] = 'Twoje hasło wygaśnie za {$a} dni. Chcesz teraz zmienić hasło?';
$string['auth_remove_delete'] = 'Pełne usunięcie';
$string['auth_remove_keep'] = 'Zachowaj';
$string['auth_remove_suspend'] = 'Zawieś';
$string['auth_remove_user'] = 'Określ, co zrobić z kontem użytkownika podczas masowej synchronizacji, gdy został on usunięty z zewnętrznego źródła danych. Jedynie użytkownicy o statusie zawieszony są automatycznie reaktywowani, jeśli pojawią się ponownie w źródle zewnętrznym.';
$string['auth_remove_user_key'] = 'Usunięty użytkownik w źródle zewnętrznym';
$string['auth_sync_script'] = 'Synchronizacja konta użytkownika';
$string['auth_sync_suspended'] = 'Po włączeniu zawieszony atrybut będzie używany do aktualizowania stanu zawieszenia konta lokalnego użytkownika.';
$string['auth_sync_suspended_key'] = 'Synchronizuj stan zawieszenia lokalnego użytkownika';
$string['auth_updatelocal'] = 'Lokalne uaktualnienie.';
$string['auth_updatelocal_expl'] = '<p><b>Aktualizacja lokalna:</b> Jeśli to pole jest włączone, to będzie aktualizowane (z użyciem zewnętrznego uwierzytelniania) przy każdym logowaniu lub synchronizacji użytkownika. Pola ustawione jako aktualizowane lokalnie powinny być zablokowane.</p>';
$string['auth_updatelocalfield'] = 'Aktualizacja lokalna ({$a})';
$string['auth_updateremote'] = 'Uaktualnienie zewnętrzne';
$string['auth_updateremote_expl'] = '<p><b>Uaktualnienie zewnętrzne: </b>Jeśli zostanie włączone, autoryzacja zewnętrzna będzie uaktualniania kiedy uaktualnia się konto użytkownika. Aby to umożliwić, pola powinny być otwarte.';
$string['auth_updateremote_ldap'] = '<p><b>Uwaga: </b>uaktualnienie zewnetrznętrznych danych LDAP wymaga, byś przypisał binddn I bindpw do użytkownika bind, który ma przywileje poprawiania kont użytkowników. Na razie nie zachowuje atrybutów wielowartościowych i podczas uaktualnienia będzie usuwał dodatkowe wartości </p>';
$string['auth_updateremotefield'] = 'Aktualizacja zdalna ({$a})';
$string['auth_user_create'] = 'Włącz opcję tworzenia użytkowników';
$string['auth_user_creation'] = 'Nowi (anonimowi) użytkownicy mogą tworzyć konta użytkownika używając zewnętrznego źródła uwierzytelniania z potwierdzeniem pocztą elektroniczną. Jeżeli włączysz tę opcję, pamiętaj również o skonfigurowaniu związanych z modułami opcji tworzenia użytkowników.';
$string['auth_usernameexists'] = 'Wybrana nazwa użytkownika już istnieje - proszę wybrać inną.';
$string['auth_usernotexist'] = 'Nie można zaktualizować nieistniejącego użytkownika: {$a}';
$string['authenticationoptions'] = 'Opcje uwierzytelniania';
$string['authinstructions'] = 'Pozostawić to pole puste, aby domyślne instrukcje logowania były wyświetlane na stronie logowania. Jeśli chcesz podać niestandardowe instrukcje logowania, wprowadź je tutaj.';
$string['authloginviaemail'] = 'Zezwalaj na logowanie przez e-mail';
$string['authloginviaemail_desc'] = 'Pozwala użytkownikom do użycia obu nazwy użytkownika i adresu e-mail (jeśli unikalny) na stronie logowania.';
$string['auto_add_remote_users'] = 'Automatycznie dodawaj zdalnych użytkowników';
$string['cannotmapfield'] = 'Nie można odwzorować pola "{$a->fieldname}", ponieważ jego krótka nazwa "{$a->shortname}" jest zbyt długa. Aby zezwolić na mapowanie, musisz zmniejszyć krótką nazwę do {$a-> charlimit} znaków. <a href="{$a->link}">Edytuj pola profilu użytkownika</a>';
$string['changepassword'] = 'Adres URL gdzie można zmiany hasła';
$string['changepasswordhelp'] = 'Adres URL strony odzyskiwania utraconego hasła, który zostanie wysłany do użytkowników w wiadomości e-mail. Należy pamiętać, że to ustawienie nie odniesie skutku, jeśli adres URL zapomnianego hasła zostanie ustawiony we wspólnych ustawieniach uwierzytelniania.';
$string['chooseauthmethod'] = 'Wybierz sposób uwierzytelniania';
$string['chooseauthmethod_help'] = 'To ustawienie określa metodę uwierzytelnienia używaną podczas logowania użytkownika. Należy wybierać tylko włączone wtyczki uwierzytelnienia, w przeciwnym razie użytkownik nie będzie mógł się zalogować. Aby zablokować użytkownikowi logowanie, wybierz opcję „Brak logowania”.';
$string['createpassword'] = 'Wygeneruj hasło i powiadom użytkownika';
$string['createpasswordifneeded'] = 'Utwórz hasło jeśli potrzebne i wyślij e-mailem';
$string['emailchangecancel'] = 'Porzuć zmianę adresu e-mail';
$string['emailchangepending'] = 'Zmiany w toku. Otwórz link wysłany do Ciebie {$a->preference_newemail}.';
$string['emailnowexists'] = 'Adres e-mail, który próbowałeś/-aś przypisać do twojego profilu został już użyty przez kogoś innego. Twoja prośba o zmianę adresu e-mail zostaje anulowana. Możesz spróbować użyć innego adresu.';
$string['emailupdate'] = 'Aktualizacja adresu e-mail';
$string['emailupdatemessage'] = 'Witaj {$a->fullname},

Zażądano zmiany Twojego adresu e-mail w Twoim koncie na {$a->site}. Otwórz poniższy link aby potwierdzić tą zmianę.

{$a->url}

Jeżeli masz jakiekolwiek pytania, skontaktuj się z pomocą techniczną pod adresem: {$a->supportemail}';
$string['emailupdatesuccess'] = 'Adres użytkownika <em>{$a->fullname}</em> został pomyślnie zaktualizowany <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Potwierdzenie aktualizacji adresu e-mail na {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Hasło musi mieć co najwyżej {$a} kolejnych, identycznych znaków.';
$string['errorminpassworddigits'] = 'Hasło musi zawierać co najmniej {$a} cyfr.';
$string['errorminpasswordlength'] = 'Hasło musi mieć długość co najmniej {$a} znaków.';
$string['errorminpasswordlower'] = 'Hasło musi zawierać co najmniej {$a} małych liter.';
$string['errorminpasswordnonalphanum'] = 'Hasło musi zawierać co najmniej {$a} znaków niealfanumerycznych takich jak *, -, lub #.';
$string['errorminpasswordupper'] = 'Hasło musi zawierać co najmniej {$a} dużych liter.';
$string['errorpasswordreused'] = 'Hasło zostało już użyte i nie może być wykorzystane ponownie';
$string['errorpasswordupdate'] = 'Błąd przy zmianie hasła. Hasło nie zostało zmienione.';
$string['eventuserloggedin'] = 'Użytkownik został zalogowany';
$string['eventuserloggedinas'] = 'Użytkownik zalogowany jako inny użytkownik';
$string['eventuserloginfailed'] = 'Logowanie nie powiodło się';
$string['forcechangepassword'] = 'Wymuś zmianę hasła';
$string['forcechangepassword_help'] = 'Wymuś zmianę hasła przy następnym logowaniu do systemu Moodle.';
$string['forcechangepasswordfirst_help'] = 'Wymuś zmianę hasła przy pierwszym logowaniu do systemu Moodle.';
$string['forgottenpassword'] = 'Adres URL, który tu wpiszesz, będzie używany jako strona odzyskiwania hasła. Jest to przydatne w instalacjach, w których hasła są przechowywane całkowicie poza Moodle. Pozostaw to pole puste, aby użyć domyślnej procedury odzyskiwania hasła.';
$string['forgottenpasswordurl'] = 'URL strony odzyskiwania hasła';
$string['getrecaptchaapi'] = 'Aby używać reCAPTCHA musisz uzyskać klucz API na  <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Przycisk logowania jako gość';
$string['incorrectpleasetryagain'] = 'Niewłaściwe. Spróbuj jeszcze raz.';
$string['infilefield'] = 'Pole wymagane w pliku';
$string['informminpassworddigits'] = 'cyfr co najmniej: {$a}';
$string['informminpasswordlength'] = 'co najmniej {$a} znaków';
$string['informminpasswordlower'] = 'co najmniej {$a} małych liter';
$string['informminpasswordnonalphanum'] = 'znaków niestandardowych (takich jak *, - lub #) co najmniej: {$a}';
$string['informminpasswordreuselimit'] = 'Hasła mogą być ponownie wykorzystane po {$a} zmianach';
$string['informminpasswordupper'] = 'co najmniej {$a} dużych liter';
$string['informpasswordpolicy'] = 'Hasło musi mieć {$a}';
$string['instructions'] = 'Instrukcje';
$string['internal'] = 'Wewnętrzny';
$string['limitconcurrentlogins'] = 'Limit jednoczesnych logowań';
$string['limitconcurrentlogins_desc'] = 'Jeśli włączone, liczba jednoczesnych loginów w przeglądarce dla każdego użytkownika jest ograniczona. Najstarsza sesja zostaje zakończona po osiągnięciu limitu. Pamiętaj, że użytkownicy mogą stracić całą niezapisaną pracę. To ustawienie nie jest kompatybilne z wtyczkami do uwierzytelniania pojedynczego logowania (SSO).';
$string['locked'] = 'Zablokowane';
$string['md5'] = 'Suma kontrolna MD5';
$string['nopasswordchange'] = 'Hasło nie może być zmienione.';
$string['nopasswordchangeforced'] = 'Nie możesz kontynuować bez zmiany hasła, jakkolwiek nie ma dostępnej strony do tej zmiany. Proszę skontaktować się z Administratorem Moodla.';
$string['noprofileedit'] = 'Profil nie może być  edytowany';
$string['ntlmsso_attempting'] = 'Próba automatycznego logowania SSO przez NTLM...';
$string['ntlmsso_failed'] = 'Automatyczne logowanie nie powiodło się, użyj tradycyjnej strony logowania ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO jest wyłączone.';
$string['passwordhandling'] = 'Obsługa pola hasła';
$string['plaintext'] = 'Zwykły tekst';
$string['pluginnotenabled'] = 'Wtyczka uwierzytelniania \'{$a}\' nie jest włączona.';
$string['pluginnotinstalled'] = 'Wtyczka uwierzytelniania \'{$a}\' nie jest zainstalowana.';
$string['potentialidps'] = 'Zaloguj się używając swojego konta:';
$string['privacy:metadata:userpref:createpassword'] = 'Wskazuje, że należy wygenerować hasło dla użytkownika';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Wskazuje, czy użytkownik powinien zmienić swoje hasło po zalogowaniu';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Liczba nieudanych prób logowania użytkownika';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Liczba nieudanych prób logowania użytkownika od ostatniego poprawnego zalogowania';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Data ostatniej nieudanej próby logowania';
$string['privacy:metadata:userpref:loginlockout'] = 'Informacja czy konto użytkownika jest zablokowane z powodu nieudanych prób logowania i data, kiedy konto zostało zablokowane';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Wskazuje, że konto użytkownika nigdy nie powinno być zablokowane';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Klucz, który użytkownik musi użyć do odblokowania swojego konta';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA służy zapobieganiu nadużyciom ze strony zautomatyzowanych programów. Postępuj zgodnie z instrukcjami, aby potwierdzić, że jesteś osobą. Może to być kwadrat do zaznaczenia, znaki przedstawione na obrazie, które należy wprowadzić lub zestaw zdjęć do wyboru.

Jeśli nie jesteś pewien, jakie to są obrazy, możesz spróbować uzyskać inny CAPTCHA lub audio CAPTCHA.';
$string['security_question'] = 'Pytanie zabezpieczające';
$string['selfregistration'] = 'Samodzielna rejestracja';
$string['selfregistration_help'] = 'Jeśli wtyczka uwierzytelniania -  samodzielna rejestracja przez e-mail zostanie wybrana, umożliwi to potencjalnym użytkownikom samodzielne zarejestrowanie się i tworzenie kont. Jednocześnie pozwala to spamerom na tworzenie kont w celu umieszczania spamu na forach i blogach. Aby uniknąć tego ryzyka, samodzielna rejestracja powinna być wyłączona lub ograniczone przez ustalenie<em> dozwolonych domen e-mail </em>.';
$string['settingmigrationmismatch'] = 'Wykryto niezgodność wartości podczas korekty nazw ustawień wtyczki! Wtyczka uwierzytelniania "{$a->plugin}" miała ustawienie "{$a->setting}" skonfigurowane jako "{$a->legacy}" pod starszą nazwą i "{$a->current}" pod obecną nazwą. Ostatnia wartość została ustawiona jako prawidłowa, ale należy sprawdzić i potwierdzić, że jest oczekiwana.';
$string['sha1'] = 'Algorytm SHA-1';
$string['showguestlogin'] = 'Możesz ukryć bądź pokazać przycisk logowania jako gość';
$string['stdchangepassword'] = 'Użyj standardowej strony zmiany hasła';
$string['stdchangepassword_expl'] = 'Jeśli zewnętrzny system potwierdzający umożliwia zmiany hasła poprzez Moodle, ustaw to na TAK. To ustawienie nadpisuje „Zmień Hasło URL”';
$string['stdchangepassword_explldap'] = 'UWAGA: zaleca się, aby używać LDAP na tunelu kodowanym SSL (ldaps://), jeśli serwer LDAP jest zdalny.';
$string['suspended'] = 'Zawieszone konto';
$string['suspended_help'] = 'Zawieszony użytkownik nie może się logować lub korzystać z usług internetowych, a wszelkie wiadomości wychodzące są odrzucane.';
$string['testsettings'] = 'Test ustawień';
$string['testsettingsheading'] = 'Ustawienia testu uwierzytelniania - {$a}';
$string['unlocked'] = 'Odblokowane';
$string['unlockedifempty'] = 'Odblokowane jeśli puste';
$string['update_never'] = 'Nigdy';
$string['update_oncreate'] = 'Po utworzeniu';
$string['update_onlogin'] = 'Po każdym logowaniu';
$string['update_onupdate'] = 'Po uaktualnieniu';
$string['user_activatenotsupportusertype'] = 'Funkcja ldap user_activate() nie rozpoznaje tego typu użytkownika: {$a}';
$string['user_disablenotsupportusertype'] = 'Funkcja ldap user_activate() nie rozpoznaje tego typu użytkownika (... na razie)';
$string['username'] = 'Nazwa użytkownika';
$string['username_help'] = 'Po założeniu konta zmiana nazwy użytkownika może nie być możliwa.';
