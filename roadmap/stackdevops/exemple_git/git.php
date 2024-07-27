<?php 
/*
Configuration initiale
bash

# Configurer le nom d'utilisateur et l'adresse e-mail
git config --global user.name "Votre Nom"
git config --global user.email "votre.email@example.com"
Initialisation d'un dépôt
bash

# Initialiser un nouveau dépôt Git
git init
Ajouter et valider des modifications
bash

# Ajouter des fichiers au suivi de Git
git add fichier.txt

# Valider les modifications avec un message de commit
git commit -m "Premier commit"
Vérifier l'état du dépôt
bash

# Afficher l'état des fichiers dans le dépôt
git status
Intermédiaire
Création et gestion des branches
bash

# Créer une nouvelle branche
git branch nouvelle-branche

# Changer de branche
git checkout nouvelle-branche

# Créer et changer de branche en une seule commande
git checkout -b une-autre-branche
Fusion des branches
bash

# Se déplacer sur la branche principale
git checkout main

# Fusionner une branche dans la branche actuelle
git merge nouvelle-branche
Historique des commits
bash

# Afficher l'historique des commits
git log
Avancé
Rebasing
bash

# Rebaser une branche sur une autre
git checkout branche-a-rebaser
git rebase main
Gestion des conflits
bash

# Afficher les conflits lors d'une fusion ou d'un rebase
# Editer les fichiers conflictuels pour résoudre les conflits
git add fichier-resolu.txt

# Continuer après avoir résolu les conflits
git rebase --continue
# ou
git merge --continue
Stash
bash

# Enregistrer les modifications non validées pour les appliquer plus tard
git stash

# Appliquer les modifications sauvegardées
git stash apply

# Appliquer et supprimer les modifications sauvegardées
git stash pop
Expert
Gestion des sous-modules
bash

# Ajouter un sous-module
git submodule add https://github.com/utilisateur/repo-sous-module chemin/sous-module

# Initialiser et mettre à jour les sous-modules
git submodule update --init --recursive
Bisect (Recherche de bugs)
bash

# Commencer une recherche binaire de bug
git bisect start

# Marquer la révision actuelle comme contenant le bug
git bisect bad

# Marquer une révision connue sans le bug
git bisect good <révision>

# Continuer jusqu'à trouver le commit fautif, puis terminer
git bisect reset
Hooks
bash

# Ajouter un hook de validation pour vérifier le format des messages de commit
# Créer un fichier .git/hooks/commit-msg et y ajouter :
#!/bin/sh
commit_message=$(cat "$1")
if ! grep -qE "JIRA-\d+" <<< "$commit_message"; then
    echo "Le message de commit doit contenir un numéro de ticket JIRA (ex. JIRA-123)"
    exit 1
fi
# Rendre le hook exécutable
chmod +x .git/hooks/commit-msg
Rewriting history avec filter-branch
bash

# Changer l'adresse e-mail dans tous les commits
git filter-branch --env-filter '
OLD_EMAIL="ancienne.email@example.com"
CORRECT_NAME="Nouveau Nom"
CORRECT_EMAIL="nouvelle.email@example.com"
if [ "$GIT_COMMITTER_EMAIL" = "$OLD_EMAIL" ]
then
    export GIT_COMMITTER_NAME="$CORRECT_NAME"
    export GIT_COMMITTER_EMAIL="$CORRECT_EMAIL"
fi
if [ "$GIT_AUTHOR_EMAIL" = "$OLD_EMAIL" ]
then
    export GIT_AUTHOR_NAME="$CORRECT_NAME"
    export GIT_AUTHOR_EMAIL="$CORRECT_EMAIL"
fi
' --tag-name-filter cat -- --branches --tags

*/