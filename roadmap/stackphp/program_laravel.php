<?php
// Programme Hebdomadaire pour Laravel

$programmeLaravel = [
    'Lundi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction à Laravel', 'Détail' => 'Installation et configuration de Laravel.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Routes et Contrôleurs', 'Détail' => 'Définir les routes et créer des contrôleurs.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Vues et Blade', 'Détail' => 'Utiliser Blade pour créer des vues dynamiques.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Création d\'une petite application Laravel.']
    ],
    'Mardi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Modèles et Migration', 'Détail' => 'Créer des modèles Eloquent et des migrations de base de données.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Validation des Données', 'Détail' => 'Validation des entrées utilisateur en Laravel.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Authentification', 'Détail' => 'Mise en place de l\'authentification des utilisateurs.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de fonctionnalités d\'authentification et validation.']
    ],
    'Mercredi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Gestion des Relations', 'Détail' => 'Gérer les relations entre modèles en Laravel.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Gestion des Erreurs', 'Détail' => 'Gérer les erreurs et exceptions en Laravel.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'API avec Laravel', 'Détail' => 'Création et gestion d\'APIs avec Laravel.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement d\'APIs et gestion des erreurs.']
    ],
    'Jeudi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Introduction aux Packages', 'Détail' => 'Utiliser et créer des packages Laravel.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Tests et Debugging', 'Détail' => 'Tests unitaires et débogage des applications Laravel.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Optimisation et Performance', 'Détail' => 'Optimiser la performance des applications Laravel.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets avec des fonctionnalités avancées.']
    ],
    'Vendredi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Déploiement', 'Détail' => 'Déploiement des applications Laravel sur un serveur.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Sécurité en Laravel', 'Détail' => 'Sécuriser les applications Laravel contre les menaces courantes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Révision des Concepts', 'Détail' => 'Révision des concepts abordés durant la semaine.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Analyse et amélioration des projets développés.']
    ],
    'Samedi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Exploration de Nouvelles Fonctionnalités', 'Détail' => 'Découverte de nouvelles fonctionnalités de Laravel.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Feedback et Discussion', 'Détail' => 'Discussion des défis rencontrés et feedback sur les projets.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique Libre', 'Détail' => 'Travail sur des projets personnels ou exercices libres.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.']
    ],
    'Dimanche' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte des nouvelles technologies et tendances en Laravel.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique et Révision', 'Détail' => 'Pratique supplémentaire et révision des concepts.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Personnels', 'Détail' => 'Travail sur des projets personnels ou approfondissement des connaissances.']
    ]
];

$listeCoursesLaravel = [
    'Outils et Ressources' => [
        'Ordinateur avec IDE (comme VSCode, PHPStorm)',
        'Serveur Local (comme XAMPP, WAMP)',
        'Accès à Composer pour la gestion des dépendances',
        'Documentation Laravel en ligne',
        'Livres de Programmation Laravel'
    ],
    'Ressources Supplémentaires' => [
        'Cours en Ligne et Tutoriels (Udemy, Laracasts)',
        'Forums et Communautés Laravel',
        'Exemples de Code et Projets'
    ]
];