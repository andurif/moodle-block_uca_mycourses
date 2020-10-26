<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block lang file: French.
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Bloc UCA "Mes cours"';
$string['uca_my_courses'] = 'Bloc "Mes cours"';
$string['uca_mycourses:addinstance'] = 'Ajouter d\'un bloc "Mes cours"';
$string['uca_mycourses:myaddinstance'] = 'Ajouter d\'un bloc "Mes cours" au tableau de bord';

$string['tree_view'] = 'Vue en arborescence';
$string['list_view'] = 'Vue en liste';
$string['max_courses_option'] = 'Nombre maximum de cours visibles en vue liste';
$string['max_courses_option_desc'] = 'Ce réglage permet de déterminer par défaut à partir de combien d\'espaces le bloc "Mes cours" passe en vue arbre si l\'utilisateur n\'a pas encore renseigné de préférence.';
$string['roles_to_exclude'] = 'Rôles à exclure du bloc "Mes cours".';
$string['roles_to_exclude_desc'] = 'Ce réglage permet de configurer les rôles à exclure pour l\'affichage du bloc "Mes cours". Si l\'utilisateur possède un de ces rôles dans un cours, le cours ne sera pas visible dans le bloc (et ne pourra être pas ajouté aux cours favoris).';

$string['privacy:metadata:preference:mycoursesview'] = 'Ce bloc enregistre le type de vue sélectionné par l\'utilisateur pour visualiser ses cours.';
$string['privacy:mycoursesview'] = 'Le type de vue actuellement choisi par l\'utilisateur pour visualiser ses cours est la {$a->view}.';