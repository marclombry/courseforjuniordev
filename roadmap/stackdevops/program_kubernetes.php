<?php
// Programme Hebdomadaire pour Kubernetes

$programmeKubernetes = [
    'Lundi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Introduction à Kubernetes', 'Détail' => 'Installation, configuration initiale et concepts de base.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Architecture Kubernetes', 'Détail' => 'Architecture de Kubernetes, nœuds, pods, services.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Déploiement et Services', 'Détail' => 'Création et gestion des déploiements et des services Kubernetes.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Création de projets simples avec Kubernetes.']
    ],
    'Mardi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Volumes et Configuration', 'Détail' => 'Gestion des volumes persistants et des configurations dans Kubernetes.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Réseaux et Sécurité', 'Détail' => 'Gestion des réseaux et de la sécurité dans Kubernetes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Helm et Déploiements Avancés', 'Détail' => 'Utilisation de Helm pour les déploiements avancés.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets utilisant Helm et des configurations avancées.']
    ],
    'Mercredi' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Monitoring et Logs', 'Détail' => 'Gestion des logs et du monitoring avec Kubernetes.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Optimisation et Débogage', 'Détail' => 'Optimisation des performances et débogage des applications Kubernetes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'CI/CD avec Kubernetes', 'Détail' => 'Intégration de Kubernetes avec les pipelines CI/CD.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets intégrant le CI/CD avec Kubernetes.']
    ],
    'Jeudi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Gestion des Secrets', 'Détail' => 'Gestion des secrets et des configurations sécurisées dans Kubernetes.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Déploiement Avancé', 'Détail' => 'Techniques avancées de déploiement avec Kubernetes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Troubleshooting', 'Détail' => 'Techniques de résolution des problèmes dans Kubernetes.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Développement de projets avancés avec des techniques de déploiement et de troubleshooting.']
    ],
    'Vendredi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Révision des Concepts', 'Détail' => 'Révision des concepts abordés durant la semaine.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Exemples de Projets', 'Détail' => 'Analyse et critique de projets Kubernetes.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Développement Avancé', 'Détail' => 'Création de projets plus complexes avec Kubernetes.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Pratiques', 'Détail' => 'Finalisation et présentation de projets Kubernetes.']
    ],
    'Samedi' => [
        ['Heure' => '09:00 - 10:30', 'Sujet' => 'Exploration de Nouvelles Fonctionnalités', 'Détail' => 'Découverte de nouvelles fonctionnalités Kubernetes.'],
        ['Heure' => '11:00 - 12:30', 'Sujet' => 'Feedback et Discussion', 'Détail' => 'Discussion des défis rencontrés et feedback sur les projets.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique Libre', 'Détail' => 'Travail sur des projets personnels ou exercices libres.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.']
    ],
    'Dimanche' => [
        ['Heure' => '09:00 - 10:00', 'Sujet' => 'Exploration de Nouvelles Technologies', 'Détail' => 'Découverte des nouvelles technologies et tendances en Kubernetes.'],
        ['Heure' => '10:30 - 12:00', 'Sujet' => 'Planification de la Semaine Prochaine', 'Détail' => 'Planification des objectifs pour la semaine prochaine.'],
        ['Heure' => '14:00 - 15:30', 'Sujet' => 'Pratique et Révision', 'Détail' => 'Pratique supplémentaire et révision des concepts.'],
        ['Heure' => '16:00 - 17:30', 'Sujet' => 'Projets Personnels', 'Détail' => 'Travail sur des projets personnels ou approfondissement des connaissances.']
    ]
];
$listeCoursesKubernetes = [
    'Outils et Ressources' => [
        'Ordinateur avec IDE (comme VSCode, IntelliJ IDEA)',
        'Environnement de Développement Kubernetes',
        'Documentation Kubernetes en ligne',
        'Livres de Kubernetes'
    ],
    'Ressources Supplémentaires' => [
        'Cours en Ligne et Tutoriels (Udemy, Coursera)',
        'Forums et Communautés Kubernetes',
        'Exemples de Code et Projets'
    ]
];