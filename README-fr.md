Block - UCA "Mes cours"
==================================
Projet ayant pour but de faire afficher de manière intuitive les cours suivis par un utilisateur dans un bloc Moodle. 
Le bloc est étroitement lié au plugin qui contiendra toutes les librairies et fonctions nécessaires à l'affichage du bloc ainsi qu'à la gestion de favoris (fonctionnalité non disponible dans le Moodle de base).

Requirements
------------
- Moodle en version 3.3 (build 2017051500) ou plus récente.
-> Tests effectués sur des versions 3.3 à 3.11.0.<br/>
- Dépendence sur <a href="https://github.com/andurif/moodle-local_uca_mycourses" target="_blank">le plugin UCA "Mes cours" </a>(build 2018020801).
- Thème qui supporte bootstrap.

Installation
------------
1. Installation du module

- Avec git:
> git clone https://github.com/andurif/moodle-local_uca_mycourses.git local/uca_mycourses

- En téléchargement:
> Télécharger le zip depuis <a href="https://github.com/andurif/moodle-local_uca_mycourses/archive/refs/heads/master.zip">https://github.com/andurif/moodle-local_uca_mycourses/archive/refs/heads/master.zip</a>, dézipper l'archive dans le dossier local/ et renommer le si besoin le dossier en "uca_mycourses".
  
2. Installation du bloc

- Avec git:
> git clone https://github.com/andurif/moodle-block_uca_mycourses.git blocks/uca_mycourses

- En téléchargement:
> Télécharger le zip depuis <a href="https://github.com/andurif/moodle-block_uca_mycourses/archive/refs/heads/master.zip">https://github.com/andurif/moodle-block_uca_mycourses/archive/refs/heads/master.zip, dézipper l'archive dans le dossier blocks/ et renommer le si besoin le dossier en "uca_mycourses".

3. Aller sur la page de notifications pour finaliser l'installation du plugin.

4. Une fois l'installation terminée, plusieurs options d'administration sont à renseigner:

> Administration du site -> Plugins -> Blocs -> Bloc UCA "Mes cours" -> list_view_limit

Ce réglage permet de déterminer jusqu'à combien de cours, le bloc utilisera la "vue en liste". Ce paramétrage sera utilisé tant que l'utilisateur n'a pas renseigné de préférence pour l'affichage.

> Administration du site -> Plugins -> Blocs -> Bloc UCA "Mes cours" -> roles_to_exclude

Ce réglage permet de sélectionner les roles qui seront ignorés pour afficher les cours d'un utilisateur. Si l'utilisateur possède un de ces rôles dans un cours, ce cours ne sera pas affiché dans le bloc (et ne pourra pas être ajouté aux cours favoris le cas échéant).

Usages
-----
1. Visualisation de la liste de mes cours dans un bloc selon 2 vues différentes (vue en liste ou vue en arborescence).
2. Visualisation des cours que j'ai ajouté dans mes favoris. 
3. Accès à la gestion avancée de mes cours mis en favori (classement dans des dossiers, renommage, affichage dans le bloc, mise à jour en cas de suppression).

Fonctionnement
-----
1. Ajouter le bloc sur votre page moodle.
2. Par défaut juste la liste de vos cours sera affichée (et pas encore votre liste de cours favoris, logique). En fonction du nombre de cours que vous avez et de la limite que vous aurez fixé, ces cours s'afficheront sous la forme d'une liste ou sous la forme d'un arbre (reprennant les catégories de cours).
Ce visuel est facilement modifiable grâce aux deux liens permettant de choisir la vue en haut du bloc.   
3. Cliquer sur "Gérer mes favoris" pour accéder à la page de gestion des favoris et potentiellement les ajouter à ce bloc.

A propos
------
<a href="www.uca.fr" target="_blank">Université Clermont Auvergne</a> - 2021.
