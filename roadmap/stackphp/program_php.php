<?php
// Programme Hebdomadaire pour PHP

$programmePHP = [
    'Lundi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction au PHP', 'Détail' => 'Concepts de base du PHP, syntaxe, variables, et types de données.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Contrôles de Flux', 'Détail' => 'Structures conditionnelles et boucles en PHP.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Fonctions PHP', 'Détail' => 'Définition et utilisation des fonctions PHP.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Création de petits projets pour appliquer les concepts appris.']
    ],
    'Mardi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Tableaux et Manipulation de Données', 'Détail' => 'Travail avec les tableaux, manipulation de données en PHP.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Gestion des Fichiers', 'Détail' => 'Lecture et écriture de fichiers en PHP.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Sessions et Cookies', 'Détail' => 'Gestion des sessions et des cookies en PHP.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets pour mettre en pratique les concepts étudiés.']
    ],
    'Mercredi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction aux Bases de Données MySQL', 'Détail' => 'Connexion à une base de données MySQL et exécution de requêtes de base.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Manipulation de Bases de Données', 'Détail' => 'CRUD (Create, Read, Update, Delete) avec MySQL et PHP.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Sécurité des Données', 'Détail' => 'Principes de sécurité pour protéger les données et les applications PHP.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets intégrant des bases de données.']
    ],
    'Jeudi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Introduction à PHP Orienté Objet', 'Détail' => 'Concepts de base de la programmation orientée objet en PHP.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Classes et Objets', 'Détail' => 'Création et utilisation des classes et objets en PHP.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Héritage et Polymorphisme', 'Détail' => 'Utilisation de l\'héritage et du polymorphisme en PHP.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets utilisant les concepts orientés objet.']
    ],
    'Vendredi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Gestion des Exceptions', 'Détail' => 'Gestion des erreurs et exceptions en PHP.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'APIs et Web Services', 'Détail' => 'Consommation et création d\'APIs avec PHP.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Frameworks PHP', 'Détail' => 'Introduction aux frameworks PHP comme Laravel et Symfony.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets avec des frameworks PHP.']
    ],
    'Samedi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Révision des Concepts', 'Détail' => 'Révision des concepts abordés durant la semaine.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Examen des Projets', 'Détail' => 'Analyse et amélioration des projets développés.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique Libre', 'Détail' => 'Travail sur des projets personnels ou exercices libres.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Discussion et Feedback', 'Détail' => 'Discussion des défis rencontrés et feedback sur les projets.']
    ],
    'Dimanche' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte des nouvelles technologies et tendances en PHP.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique et Révision', 'Détail' => 'Pratique supplémentaire et révision des concepts.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Personnels', 'Détail' => 'Travail sur des projets personnels ou approfondissement des connaissances.']
    ]
];

$listeCoursesPHP = [
    'Outils et Ressources' => [
        'Ordinateur avec IDE (comme VSCode, PHPStorm)',
        'Serveur Local (comme XAMPP, WAMP)',
        'Accès à un Système de Gestion de Version (GitHub, GitLab)',
        'Documentation PHP en ligne',
        'Livres de Programmation PHP'
    ],
    'Ressources Supplémentaires' => [
        'Cours en Ligne et Tutoriels (Udemy, Coursera)',
        'Forums et Communautés PHP',
        'Exemples de Code et Projets'
    ]
];