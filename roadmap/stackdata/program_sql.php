<?php
// Programme Hebdomadaire pour SQL

$programmeSQL = [
    'Lundi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction à SQL', 'Détail' => 'Concepts de base, syntaxe SQL, et types de données.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Requêtes SQL de Base', 'Détail' => 'Sélection, insertion, mise à jour et suppression de données.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Filtres et Tri', 'Détail' => 'Utilisation de WHERE, ORDER BY et LIMIT.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Création de requêtes SQL pour des scénarios pratiques.']
    ],
    'Mardi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Jointures et Relations', 'Détail' => 'Jointures INNER, LEFT, RIGHT et FULL.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Fonctions SQL', 'Détail' => 'Fonctions d\'agrégation et de manipulation de chaînes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Sous-requêtes', 'Détail' => 'Utilisation des sous-requêtes dans les clauses SQL.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets utilisant des jointures et fonctions.']
    ],
    'Mercredi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Transactions SQL', 'Détail' => 'Gestion des transactions et des erreurs.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Indexation et Optimisation', 'Détail' => 'Création d\'index et optimisation des requêtes SQL.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'SQL Avancé', 'Détail' => 'Vues, procédures stockées et déclencheurs.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Application des concepts avancés dans des projets.']
    ],
    'Jeudi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Introduction aux Systèmes de Gestion de Bases de Données (SGBD)', 'Détail' => 'Comparaison entre différents SGBD comme MySQL, PostgreSQL.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Administration de Base de Données', 'Détail' => 'Création et gestion des utilisateurs et permissions.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Sauvegarde et Restauration', 'Détail' => 'Techniques de sauvegarde et de restauration des bases de données.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Gestion des SGBD pour des projets pratiques.']
    ],
    'Vendredi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Data Warehousing et ETL', 'Détail' => 'Concepts de data warehousing et processus ETL.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'SQL et BI', 'Détail' => 'Utilisation de SQL pour les outils de Business Intelligence.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Révision des Concepts', 'Détail' => 'Révision des concepts abordés durant la semaine.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets en utilisant SQL et BI.']
    ],
    'Samedi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte de nouvelles technologies SQL et tendances.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Feedback et Discussion', 'Détail' => 'Discussion des défis rencontrés et feedback sur les projets.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique Libre', 'Détail' => 'Travail sur des projets personnels ou exercices libres.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.']
    ],
    'Dimanche' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte des nouvelles technologies et tendances en SQL.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique et Révision', 'Détail' => 'Pratique supplémentaire et révision des concepts.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Personnels', 'Détail' => 'Travail sur des projets personnels ou approfondissement des connaissances.']
    ]
];
$listeCoursesSQL = [
    'Outils et Ressources' => [
        'Ordinateur avec IDE (comme DBeaver, MySQL Workbench)',
        'Accès à un SGBD (comme MySQL, PostgreSQL)',
        'Documentation SQL en ligne',
        'Livres de SQL'
    ],
    'Ressources Supplémentaires' => [
        'Cours en Ligne et Tutoriels (Udemy, Coursera)',
        'Forums et Communautés SQL',
        'Exemples de Code et Projets'
    ]
];