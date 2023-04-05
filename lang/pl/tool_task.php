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
 * Strings for component 'tool_task', language 'pl', version '4.0'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Blokowanie';
$string['checkcronrunning'] = 'Cron działa';
$string['component'] = 'Składnik';
$string['corecomponent'] = 'Rdzeń';
$string['crondisabled'] = 'Cron jest wyłączony. Żadne nowe zadania nie zostaną rozpoczęte. System nie będzie działał poprawnie, dopóki nie zostanie ponownie włączony.';
$string['cronok'] = 'Cron działa regularnie';
$string['default'] = 'Domyślnie';
$string['defaultx'] = 'Domyślnie: {$a}';
$string['disabled'] = 'Wyłączone';
$string['disabled_help'] = 'Wyłączone zaplanowane zadania nie są wykonywane z crona, jednak nadal można je wywołać ręcznie za pomocą narzędzia CLI.';
$string['edittaskschedule'] = 'Edytuj zaplanowane zadania: {$a}';
$string['enablerunnow'] = 'Zezwól na „Uruchom teraz” dla zaplanowanych zadań';
$string['hostname'] = 'Nazwa hosta';
$string['lastcronstart'] = 'Czas od ostatniego uruchomienia crona: {$a}';
$string['lastruntime'] = 'Ostatnie wykonanie';
$string['lastupdated'] = 'Ostatnia aktualizacja {$a}.';
$string['nextruntime'] = 'Następne wykonanie';
$string['plugindisabled'] = 'Wtyczka wyłączona';
$string['pluginname'] = 'Konfiguracja zaplanowanych zadań';
$string['privacy:metadata'] = 'Wtyczka konfiguracji zaplanowanych zadań nie przechowuje żadnych danych osobowych.';
$string['resettasktodefaults'] = 'Resetuj menadzera zadań do wartości domyślnych';
$string['resettasktodefaults_help'] = 'Spowoduje to odrzucenie wszelkich lokalnych zmian i przywrócenie harmonogramu tego zadania do pierwotnych ustawień.';
$string['runagain'] = 'Uruchom ponownie';
$string['runningtasks'] = 'Zadania uruchomione teraz';
$string['runnow'] = 'Uruchom teraz';
$string['runnow_confirm'] = 'Czy na pewno chcesz teraz uruchomić zadanie \'{$a}\' ? Zadanie zostanie uruchomione na serwerze WWW i może zabrać dłuższą chwilę.';
$string['runpattern'] = 'Uruchom wzorzec';
$string['scheduled'] = 'Zaplanowano';
$string['scheduledtaskchangesdisabled'] = 'Modyfikacja listy zaplanowanych zadań została zablokowana w konfiguracji Moodle';
$string['scheduledtasks'] = 'Zaplanowane zadania';
$string['started'] = 'Uruchomiono';
$string['taskdisabled'] = 'Zadanie wyłączone';
$string['taskfailures'] = 'zadań zakończonych niepowodzeniem: {$a}';
$string['tasklogs'] = 'Dzienniki zadań';
$string['tasknofailures'] = 'Brak zadań zakończonych niepowodzeniem';
$string['taskscheduleday'] = 'Dzień';
$string['taskscheduleday_help'] = 'Pole dnia miesiąca dla harmonogramu zadań. Pole używa tego samego formatu co unix cron. Oto kilka przykładów:

* <strong>*</strong> codziennie
* <strong>*/2</strong> co drugi dzień
* <strong>1</strong> pierwszego dnia każdego miesiąca
* <strong>1,15</strong> pierwszego i piętnastego dnia każdego miesiąca';
$string['taskscheduledayofweek'] = 'Dzień tygodnia';
$string['taskscheduledayofweek_help'] = 'Pole dnia tygodnia dla harmonogramu zadań. Pole używa tego samego formatu co unix cron. Oto kilka przykładów:

* <strong>*</strong> codziennie
* <strong>0</strong> w każdą niedzielę
* <strong>6</strong> w każdą sobotę
* <strong>1,5</strong> w każdy poniedziałek i piątek';
$string['taskschedulehour'] = 'Godzina';
$string['taskschedulehour_help'] = 'Pole godziny dla harmonogramu zadań. Pole używa tego samego formatu co unix cron. Oto kilka przykładów:

* <strong>*</strong> co godzinę
* <strong>*/2</strong> co 2 godziny
* <strong>2-10</strong> co godzinę od 2:00 do 10:00 (włącznie)
* <strong>2,6,9</strong> 2:00, 6:00 i 9:00';
$string['taskscheduleminute'] = 'Minuta';
$string['taskscheduleminute_help'] = 'Pole minut na harmonogram zadań. Pole używa tego samego formatu co unix cron. Oto kilka przykładów:

* <strong>*</strong> co minutę
* <strong>*/5</strong> co 5 minut
* <strong>2-10</strong> co minutę między 2 i 10 minut po godzinie (włącznie)
* <strong>2,6,9</strong> 2, 6 i 9 minut po godzinie';
$string['taskschedulemonth'] = 'Miesiąc';
$string['taskschedulemonth_help'] = 'Pole miesiąca dla harmonogramu zadań. Pole używa tego samego formatu co unix cron. Oto kilka przykładów:

* <strong>*</strong> co miesiąc
* <strong>*/2</strong> co drugi miesiąc
* <strong>1</strong> każdego stycznia
* <strong>1,5</strong> w styczniu i maju';
$string['viewlogs'] = 'Wyświetl logi dla {$a}';
