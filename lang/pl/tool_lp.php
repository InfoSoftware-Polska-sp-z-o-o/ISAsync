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
 * Strings for component 'tool_lp', language 'pl', version '4.0'.
 *
 * @package     tool_lp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Akcje';
$string['activities'] = 'Aktywności';
$string['addcohorts'] = 'Dodaj kohorty';
$string['addcohortstosync'] = 'Dodaj kohorty do synchronizacji';
$string['addcompetency'] = 'Dodaj kompetencję';
$string['addcoursecompetencies'] = 'Dodaj kompetencje do kursu';
$string['addnewcompetency'] = 'Dodaj nową kompetencję';
$string['addnewcompetencyframework'] = 'Dodaj nową strukturę kompetencji';
$string['addnewplan'] = 'Dodaj nowy plan nauki';
$string['addnewtemplate'] = 'Dodaj nowy szablon planu nauki';
$string['addnewuserevidence'] = 'Dodaj nową dokumentację';
$string['addtemplatecompetencies'] = 'Dodaj kompetencje do szablonu planu nauki';
$string['aisrequired'] = '\'{$a}\' jest wymagany';
$string['aplanswerecreated'] = '{$a} plany nauki zostały utworzone.';
$string['aplanswerecreatedmoremayrequiresync'] = 'utworzono {$a} plany nauki; więcej zostanie utworzonych podczas następnej synchronizacji.';
$string['assigncohorts'] = 'Przypisz koharty';
$string['averageproficiencyrate'] = 'Średni wskaźnik sprawności/biegłości dla ukończonych planów nauki opartych na tym szablonie wynosi {$a}%.';
$string['cancelreviewrequest'] = 'Anuluj żądanie przeglądu';
$string['cannotaddrules'] = 'Ta kompetencja nie może być skonfigurowana.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Nie można tworzyć nowych planów nauki. Szablon już wygasł lub niedługo wygaśnie.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Nie można tworzyć nowych planów nauki, gdy ten szablon jest ukryty.';
$string['category'] = 'Kategoria';
$string['chooserating'] = 'Wybierz ocenę...';
$string['cohortssyncedtotemplate'] = 'Kohorty zsynchronizowane z tym szablonem planu nauki';
$string['competenciesforframework'] = 'Kompetencje dla {$a}';
$string['competenciesmostoftennotproficientincourse'] = 'Najczęstsze kompetencje bez biegłości w tym kursie';
$string['competencycannotbedeleted'] = 'Kompetencja \'{$a}\' nie może być usunięta';
$string['competencycreated'] = 'Utworzono kompetencję';
$string['competencyframework'] = 'Struktura kompetencji';
$string['competencyframeworkcreated'] = 'Utworzono strukturę kompetencji.';
$string['competencyframeworkname'] = 'Nazwa';
$string['competencyframeworkroot'] = 'Brak nadrzędnego poziomu (kompetencja najwyższego poziomu)';
$string['competencyframeworks'] = 'Struktury kompetencji';
$string['competencyframeworksrepository'] = 'Repozytorium ram kwalifikacji';
$string['competencyframeworkupdated'] = 'Zaktualizowano strukturę kompetencji.';
$string['competencyoutcome_complete'] = 'Zaznacz jako wykonane';
$string['competencyoutcome_evidence'] = 'Załącz dokumentację';
$string['competencyoutcome_none'] = 'Żaden';
$string['competencypicker'] = 'Wybór kompetencji';
$string['competencyrule'] = 'Reguła kompetencji';
$string['competencyupdated'] = 'Zaktualizowano kompetencję';
$string['completeplan'] = 'Ukończ ten plan nauki';
$string['completeplanconfirm'] = 'Czy ustawić plan nauki \'{$a}\' na ukończony? Jeśli tak, to aktualny stan kompetencji wszystkich użytkowników zostanie zarejestrowany, a plan stanie się tylko do odczytu.';
$string['configurecoursecompetencysettings'] = 'Konfiguracja kompetencji kursu';
$string['configurescale'] = 'Konfiguracja wag';
$string['coursecompetencies'] = 'Kompetencje kursu';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Oceny kompetencji w tym kursie nie mają wpływu na plany nauki.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Oceny kompetencji w tym kursie są od razu aktualizowane w planach nauki.';
$string['coursesusingthiscompetency'] = 'Kursy powiązane z tą kompetencją';
$string['coveragesummary'] = '{$a->competenciescoveredcount} z {$a->competenciescount} kompetencji jest pokryte ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Utwórz plany nauki';
$string['createplans'] = 'Utwórz plany nauki';
$string['crossreferencedcompetencies'] = 'Powiązane kompetencje';
$string['default'] = 'Domyślnie';
$string['deletecompetency'] = 'Usunąć kompetencję \'{$a}\'?';
$string['deleteplan'] = 'Usunąć plan nauki \'{$a}\'?';
$string['deleteplans'] = 'Usuń plany nauki';
$string['deletetemplate'] = 'Czy usunąć szablon planu nauki \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Ten szablon ma powiązane plany nauki. Musisz wskazać, jak przetwarzać te plany.';
$string['deletethisplan'] = 'Usuń ten plan nauki';
$string['deletethisuserevidence'] = 'Usuń tę dokumentację';
$string['deleteuserevidence'] = 'Usunąć dokumentację wcześniejszej nauki \'{$a}\'?';
$string['description'] = 'Opis';
$string['duedate'] = 'Termin';
$string['duedate_help'] = 'Data, do której powinien zostać ukończony plan nauki.';
$string['editcompetency'] = 'Edytuj kompetencję';
$string['editcompetencyframework'] = 'Edytuj strukturę kompetencji';
$string['editplan'] = 'Edytuj plan nauki';
$string['editrating'] = 'Edytuj ocenę';
$string['edittemplate'] = 'Edytuj szablon planu nauki';
$string['editthisplan'] = 'Edytuj ten plan nauki';
$string['editthisuserevidence'] = 'Edytuj tę dokumentację';
$string['edituserevidence'] = 'Edytuj dokumentację';
$string['evidence'] = 'Dokumentacja';
$string['filterbyactivity'] = 'Filtruj kompetencje wg zasobu lub aktywności';
$string['findcourses'] = 'Znajdź kursy';
$string['hidden'] = 'Ukryty';
$string['hiddenhint'] = '(ukryty)';
$string['idnumber'] = 'Numer ID';
$string['itemstoadd'] = 'Pozycje do dodania';
$string['jumptocompetency'] = 'Skocz do kompetencji';
$string['jumptouser'] = 'Przejdź do użytkownika';
$string['learningplancompetencies'] = 'Kompetencje planu nauki';
$string['learningplans'] = 'Plany nauki';
$string['levela'] = 'Poziom {$a}';
$string['linkcompetencies'] = 'Powiąż kompetencje';
$string['linkcompetency'] = 'Powiąż kompetencję';
$string['linkedcompetencies'] = 'Powiązane kompetencje';
$string['linkedcourses'] = 'Powiązane kursy';
$string['linkedcourseslist'] = 'Powiązane kursy:';
$string['listcompetencyframeworkscaption'] = 'Lista struktur kompetencji';
$string['listofevidence'] = 'Lista dokumentacji';
$string['listplanscaption'] = 'Lista planów nauki.';
$string['listtemplatescaption'] = 'Lista szablonów planów nauki';
$string['loading'] = 'Ładowanie...';
$string['locatecompetency'] = 'Znajdź kompetencję';
$string['managecompetenciesandframeworks'] = 'Zarządzaj kompetencjami i ramami kwalifikacji';
$string['modcompetencies'] = 'Kompetencje kursu';
$string['modcompetencies_help'] = 'Kompetencje kursu połączone z tą aktywnością.';
$string['move'] = 'Przenieś';
$string['movecompetency'] = 'Przenieś kompetencję';
$string['movecompetencyafter'] = 'Przenieś kompetencję za \'{$a}\'';
$string['movecompetencyframework'] = 'Przenieś strukturę kompetencji';
$string['movetonewparent'] = 'Przenieś';
$string['myplans'] = 'Moje plany nauki';
$string['nfiles'] = '{$a} plik(ów)';
$string['noactivities'] = 'Brak aktywności';
$string['nocompetencies'] = 'Nie utworzono żadnych kompetencji w tych ramach kwalifikacji.';
$string['nocompetenciesinactivity'] = 'Żadne kompetencje nie zostały powiązane z tą aktywnością lub zasobem.';
$string['nocompetenciesincourse'] = 'Nie połączono żadnych kompetencji do tego kursu.';
$string['nocompetenciesinevidence'] = 'Nie połączono żadnych kompetencji do tej dokumentacji.';
$string['nocompetenciesinlearningplan'] = 'Nie połączono żadnych kompetencji do tego planu nauki.';
$string['nocompetenciesinlist'] = 'Nie wybrano kompetencji.';
$string['nocompetenciesintemplate'] = 'Nie połączono żadnych kompetencji do tego szablonu planu nauki.';
$string['nocompetencyframeworks'] = 'Nie utworzono jeszcze ram kwalifikacji.';
$string['nocompetencyselected'] = 'Nie wybrano kompetencji';
$string['nocrossreferencedcompetencies'] = 'Kompetencja nie ma innych powiązanych kompetencji.';
$string['noevidence'] = 'Brak dokumentacji';
$string['nofiles'] = 'Brak plików';
$string['nolinkedcourses'] = 'Brak kursów podłączonych do tej kompetecji';
$string['noparticipants'] = 'Nie znaleziono uczestników.';
$string['noplanswerecreated'] = 'Nie utworzono planów nauki.';
$string['notemplates'] = 'Nie utworzono jeszcze szablonów planów nauki.';
$string['nourl'] = 'Brak URL';
$string['nouserevidence'] = 'Nie dodano jeszcze dokumentacji dotyczącej wcześniejszej nauki.';
$string['nouserplans'] = 'Nie utworzono jeszcze planów nauki.';
$string['oneplanwascreated'] = 'Plan nauki został utworzony';
$string['outcome'] = 'Wynik';
$string['parentcompetency'] = 'Rodzic';
$string['parentcompetency_edit'] = 'Edytuj nadrzędne';
$string['path'] = 'Ścieżka:';
$string['planapprove'] = 'Aktywuj';
$string['plancompleted'] = 'Plan nauki ukończony';
$string['plancreated'] = 'Utworzono plan nauki';
$string['plandescription'] = 'Opis';
$string['planname'] = 'Nazwa';
$string['plantemplate'] = 'Wybierz szablon planu nauki';
$string['plantemplate_help'] = 'Plan nauki utworzony z szablonu będzie zawierał listę kompetencji pasujących do szablonu. Aktualizacje szablonu zostaną odzwierciedlone w każdym planie utworzonym z tego szablonu.';
$string['planunapprove'] = 'Cofnij do szkicu';
$string['planupdated'] = 'Zaktualizowano plan nauki';
$string['pluginname'] = 'Plany nauki';
$string['points'] = 'Punkty';
$string['pointsgivenfor'] = 'Punkty otrzymane za \'{$a}\'';
$string['privacy:metadata'] = 'Wtyczka Plany nauki nie przechowuje żadnych danych osobowych.';
$string['proficient'] = 'Biegły';
$string['progress'] = 'Postęp';
$string['rate'] = 'Oceń';
$string['ratecomment'] = 'Notatki dokumentacji';
$string['rating'] = 'Ocena';
$string['ratingaffectsuserplans'] = 'Ocena kompetencji aktualizuje również kompetencję we wszystkich planach nauki';
$string['reopenplan'] = 'Otwórz ponownie ten plan nauki';
$string['reopenplanconfirm'] = 'Czy ponownie otworzyć plan nauki \'{$a}\'? Jeśli tak, status kompetencji użytkowników, który został zarejestrowany w momencie, gdy plan był wcześniej realizowany, zostanie usunięty, a plan ponownie stanie się aktywny.';
$string['requestreview'] = 'Żądaj przeglądu';
$string['reviewstatus'] = 'Status przeglądu';
$string['savechanges'] = 'Zapisz zmiany';
$string['scale'] = 'Skala';
$string['scalevalue'] = 'Wartość skali';
$string['search'] = 'Szukaj...';
$string['selectcohortstosync'] = 'Wybierz kohorty do synchronizacji';
$string['selectcompetencymovetarget'] = 'Wybierz lokalizację do której można przenieść tę kompetencję:';
$string['selectedcompetency'] = 'Wybrana kompetencja';
$string['selectuserstocreateplansfor'] = 'Wybierz użytkowników, dla których chcesz utworzyć plany nauki';
$string['sendallcompetenciestoreview'] = 'Wyślij wszystkie kompetencje przeglądu dokumentacji wcześniejszej nauki \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Wyślij kompetencje do przeglądu';
$string['shortname'] = 'Nazwa';
$string['sitedefault'] = '(domyślna strona)';
$string['startreview'] = 'Rozpocznij przegląd';
$string['state'] = 'Stan';
$string['status'] = 'Status';
$string['stopreview'] = 'Zakończ przegląd';
$string['stopsyncingcohort'] = 'Zatrzymaj synchronizację kohorty';
$string['taxonomies'] = 'Taksonomie';
$string['taxonomy_add_behaviour'] = 'Dodaj zachowanie';
$string['taxonomy_add_competency'] = 'Dodaj kompetencję';
$string['taxonomy_add_concept'] = 'Dodaj koncepcję';
$string['taxonomy_add_domain'] = 'Dodaj domenę';
$string['taxonomy_add_indicator'] = 'Dodaj wskaźnik';
$string['taxonomy_add_level'] = 'Dodaj poziom';
$string['taxonomy_add_outcome'] = 'Dodaj wynik';
$string['taxonomy_add_proficiency'] = 'Dodaj sprawność/biegłość';
$string['taxonomy_add_skill'] = 'Dodaj umiejętność';
$string['taxonomy_add_value'] = 'Dodaj wrtość';
$string['taxonomy_edit_behaviour'] = 'edytuj zachowanie';
$string['taxonomy_edit_competency'] = 'Edytuj kompetencję';
$string['taxonomy_edit_concept'] = 'Edytuj koncepcję';
$string['taxonomy_edit_domain'] = 'Edytuj domenę';
$string['taxonomy_edit_indicator'] = 'Edytuj wskaźnik';
$string['taxonomy_edit_level'] = 'Edytuj poziom';
$string['taxonomy_edit_outcome'] = 'Edytuj wynik';
$string['taxonomy_edit_proficiency'] = 'Edytuj sprawność/biegłość';
$string['taxonomy_edit_skill'] = 'Edytuj umiejętność';
$string['taxonomy_edit_value'] = 'Edytuj wartość';
$string['taxonomy_parent_behaviour'] = 'Nadrzędne zachowanie';
$string['taxonomy_parent_competency'] = 'Nadrzędna kompetencja';
$string['taxonomy_parent_domain'] = 'Nadrzędna domena';
$string['taxonomy_parent_indicator'] = 'Nadrzędny wskaźnik';
$string['taxonomy_parent_level'] = 'Nadrzędny poziom';
$string['taxonomy_parent_outcome'] = 'Nadrzędny wynik';
$string['taxonomy_parent_proficiency'] = 'Nadrzędna sprawność/biegłość';
$string['taxonomy_parent_skill'] = 'Nadrzędna umiejętność';
$string['taxonomy_parent_value'] = 'Wartość nadrzędna';
$string['taxonomy_selected_behaviour'] = 'Wybrane zachowanie';
$string['taxonomy_selected_competency'] = 'Wybrana kompetencja';
$string['taxonomy_selected_concept'] = 'Wybrana koncepcja';
$string['taxonomy_selected_domain'] = 'Wybrana domena';
$string['taxonomy_selected_indicator'] = 'Wybrany wskaźnik';
$string['taxonomy_selected_level'] = 'Wybrany poziom';
$string['taxonomy_selected_outcome'] = 'Wybrany wynik';
$string['taxonomy_selected_proficiency'] = 'Wybrana sprawność/biegłość';
$string['taxonomy_selected_skill'] = 'Wybrana umiejętność';
$string['taxonomy_selected_value'] = 'Wybrana wartość';
$string['template'] = 'Szablon planu nauki';
$string['templatebased'] = 'Bazujący na szablonie';
$string['templatecohortnotsyncedwhilehidden'] = 'Kohorty nie będą synchronizowane dopóki ten szablon jest ukryty,';
$string['templatecompetencies'] = 'Kompetencje dotyczące szablonu planu nauki';
$string['templatecreated'] = 'Utworzono szablon planu nauki';
$string['templatename'] = 'Nazwa';
$string['templates'] = 'Szablony planów nauki';
$string['templateupdated'] = 'Zaktualizowano szablon planu nauki';
$string['unlinkcompetencyplan'] = 'Odłączyć kompetencję \'{$a}\' od planu nauki?';
$string['unlinkcompetencytemplate'] = 'Odłączyć kompetencję \'{$a}\' od szablonu planu nauki?';
$string['unlinkplanstemplate'] = 'Odłącz plany nauki od ich szablonu';
$string['unlinkplantemplate'] = 'Odłącz od szablonu planu nauki';
$string['unlinkplantemplateconfirm'] = 'Odłączyć plan nauki \'{$a}\' od jego szablonu? Wszelkie zmiany wprowadzone w szablonie nie będą już stosowane do planu. Tego działania nie będzie można cofnąć.';
$string['uponcoursecompletion'] = 'Po ukończeniu kursu:';
$string['uponcoursemodulecompletion'] = 'Po wykonaniu aktywności:';
$string['userevidence'] = 'Dokumentacja wcześniejszej nauki';
$string['userevidencecreated'] = 'Utworzono dokumentację wcześniejszej nauki';
$string['userevidencedescription'] = 'Opis';
$string['userevidencefiles'] = 'Pliki';
$string['userevidencename'] = 'Nazwa';
$string['userevidencesummary'] = 'Podsumowanie';
$string['userevidenceupdated'] = 'Zaktualizowano dokumentację wcześniejszej nauki';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'Adres URL musi rozpoczynać się od \'http://\' lub \'https://\'.';
$string['viewdetails'] = 'Widok szczegółowy';
$string['visible'] = 'Widoczne';
$string['when'] = 'Kiedy';
$string['xcompetencieslinkedoutofy'] = '{$a->x} z {$a->y} kompetencji powiązanych z kursami';
$string['xcompetenciesproficientoutofy'] = 'Biegłość w {$a->x} z {$a->y} kompetencji';
$string['xcompetenciesproficientoutofyincourse'] = 'Jesteś biegły w {$a->x} z {$a->y} kompetencji w tym kursie.';
$string['xplanscompletedoutofy'] = '{$a->x} z {$a->y} planów nauki ukończonych dla tego szablonu';
