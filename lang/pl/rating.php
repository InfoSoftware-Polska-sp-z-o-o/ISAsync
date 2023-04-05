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
 * Strings for component 'rating', language 'pl', version '4.0'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Średnia ocen';
$string['aggregatecount'] = 'Liczba ocen';
$string['aggregatemax'] = 'Najwyższa ocena';
$string['aggregatemin'] = 'Najniższa ocena';
$string['aggregatenone'] = 'Nie oceniane';
$string['aggregatesum'] = 'Suma ocen';
$string['aggregatetype'] = 'Typ zestawienia';
$string['aggregatetype_help'] = 'Metoda oceniania określa jak wyznaczana jest ostateczna ocena  do dziennika z cząstkowych na forum.
 * Średnia ocen - Z wszystkich cząstkowych będzie wyliczona średnia
 * Liczba ocen - Liczba ocenionych cząstkowych zadań będzie ostateczną oceną. Łączny wynik nie może przekroczyć maksymalnej oceny za aktywność.
 * Najwyższa ocenia - Najwyższa z cząstkowych ocen będzie ostateczną oceną
 * Najniższa ocena - Najniższa z cząstkowych ocen będzie oceną ostateczną
 * Suma ocen - Wszystkie oceny cząstkowe będą dodane do siebie. Łączny wynik nie może przekroczyć maksymalnej oceny za aktywność.

Jeśli opcja "Bez oceniania" zostanie wybrana, ocena z forum nie wyświetli się w dzienniku ocen.';
$string['allowratings'] = 'Pozwolić na ocenianie?';
$string['allratingsforitem'] = 'Wszystkie oceny';
$string['capabilitychecknotavailable'] = 'Nie mam możliwości sprawdzić uprawnień, dopóki aktywność nie jest zapisana';
$string['couldnotdeleteratings'] = 'Przykro nam, elementu nie można usunąć, ponieważ był on  już oceniany.';
$string['norate'] = 'Ocenianie elementów nie jest dozwolone.';
$string['noratings'] = 'Brak wystawionych ocen';
$string['noviewanyrate'] = 'Można widzieć wyniki tylko dla własnych elementów';
$string['noviewrate'] = 'Nie masz prawa do wyświetlania ocen elementów';
$string['privacy:metadata:rating:timemodified'] = 'Czas ostatniej aktualizacji oceny.';
$string['privacy:metadata:rating:userid'] = 'Użytkownik, który dokonał oceny.';
$string['rate'] = 'Oceń';
$string['ratepermissiondenied'] = 'Nie masz uprawnień, aby ocenić tę pozycję';
$string['rating'] = 'Oceny';
$string['ratinginvalid'] = 'Ocena jest niepoprawna';
$string['ratings'] = 'Ocenianie wpisów';
$string['ratingtime'] = 'Ogranicz ocenianie do zakresu dat:';
$string['rolewarning'] = 'Role z uprawnieniami do oceniania';
$string['rolewarning_help'] = 'Do wystawiania ocen wymagane są uprawnienia moodle/rating:rate i pewne uprawnienia specyficzne dla modułu. Użytkownicy posiadający te uprawnienia powinny być w stanie wystawiać oceny. Lista ról może być zmieniana przez element Uprawnienia w bloku ustawień.';
