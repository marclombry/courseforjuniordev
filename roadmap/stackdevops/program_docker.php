<?php
// Programme Hebdomadaire pour Docker

$programmeDocker = [
    'Lundi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction à Docker', 'Détail' => 'Installation, configuration initiale, et concepts de base.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Commandes de Base', 'Détail' => 'Utilisation des commandes Docker (run, ps, stop, rm).'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Dockerfile et Images', 'Détail' => 'Création et gestion des Dockerfiles et des images Docker.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Création de projets simples avec Docker.']
    ],
    'Mardi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Volumes et Réseaux', 'Détail' => 'Gestion des volumes et des réseaux Docker.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Compose et Orchestration', 'Détail' => 'Utilisation de Docker Compose pour l\'orchestration des conteneurs.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Docker Hub et Déploiement', 'Détail' => 'Gestion des images sur Docker Hub et déploiement des conteneurs.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets utilisant Docker Compose et déploiement.']
    ],
    'Mercredi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Sécurité Docker', 'Détail' => 'Sécurisation des conteneurs et des images Docker.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Monitoring et Logs', 'Détail' => 'Gestion des logs et du monitoring des conteneurs Docker.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Optimisation des Performances', 'Détail' => 'Optimisation des performances des conteneurs Docker.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets intégrant des pratiques de sécurité et optimisation.']
    ],
    'Jeudi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Déploiement Avancé', 'Détail' => 'Déploiement des applications Docker dans des environnements avancés.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Gestion des Secrets', 'Détail' => 'Gestion des secrets et des variables d\'environnement avec Docker.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Intégration avec CI/CD', 'Détail' => 'Intégration de Docker avec les pipelines CI/CD.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets avancés avec intégration CI/CD.']
    ],
    'Vendredi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Révision des Concepts', 'Détail' => 'Révision des concepts abordés durant la semaine.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Exemples de Projets', 'Détail' => 'Analyse et critique de projets Docker.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Développement Avancé', 'Détail' => 'Création de projets plus complexes avec Docker.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Finalisation et présentation de projets Docker.']
    ],
    'Samedi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Exploration de Nouvelles Fonctionnalités', 'Détail' => 'Découverte de nouvelles fonctionnalités Docker.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Feedback et Discussion', 'Détail' => 'Discussion des défis rencontrés et feedback sur les projets.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique Libre', 'Détail' => 'Travail sur des projets personnels ou exercices libres.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.']
    ],
    'Dimanche' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte des nouvelles technologies et tendances en Docker.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique et Révision', 'Détail' => 'Pratique supplémentaire et révision des concepts.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Personnels', 'Détail' => 'Travail sur des projets personnels ou approfondissement des connaissances.']
    ]
];
$listeCoursesDocker = [
    'Outils et Ressources' => [
        'Ordinateur avec IDE (comme VSCode, IntelliJ IDEA)',
        'Environnement de Développement Docker',
        'Documentation Docker en ligne',
        'Livres de Docker'
    ],
    'Ressources Supplémentaires' => [
        'Cours en Ligne et Tutoriels (Udemy, Coursera)',
        'Forums et Communautés Docker',
        'Exemples de Code et Projets'
    ]
];