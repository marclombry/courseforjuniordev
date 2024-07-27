<?php 
/*
# Guide Docker : Commandes et Utilisations

## Débutant

### Installation de Docker
```bash
# Télécharger et installer Docker à partir du site officiel
https://docs.docker.com/get-docker/
Commandes de base
bash

# Afficher les informations sur Docker
docker info

# Afficher la version de Docker
docker --version
Gestion des images
bash

# Télécharger une image depuis Docker Hub
docker pull ubuntu

# Lister les images téléchargées
docker images
Gestion des conteneurs
bash

# Exécuter un conteneur basé sur une image
docker run -it ubuntu /bin/bash

# Lister les conteneurs en cours d'exécution
docker ps

# Lister tous les conteneurs (actifs et inactifs)
docker ps -a

# Arrêter un conteneur
docker stop <container_id>

# Supprimer un conteneur
docker rm <container_id>
Intermédiaire
Création de Dockerfile
Dockerfile

# Utiliser une image de base
FROM ubuntu:latest

# Mainteneur de l'image
MAINTAINER Votre Nom <votre.email@example.com>

# Exécuter des commandes
RUN apt-get update && apt-get install -y curl

# Définir le point d'entrée du conteneur
ENTRYPOINT ["curl"]
Construction d'images
bash

# Construire une image à partir d'un Dockerfile
docker build -t monimage:latest .

# Lister les images pour vérifier la création
docker images
Réseau et ports
bash

# Exécuter un conteneur avec des ports mappés
docker run -d -p 8080:80 nginx

# Lister les réseaux Docker
docker network ls

# Créer un réseau Docker
docker network create monreseau

# Connecter un conteneur à un réseau
docker network connect monreseau <container_id>
Avancé
Docker Compose
yaml

# Fichier docker-compose.yml
version: '3'
services:
  web:
    image: nginx
    ports:
      - "8080:80"
  app:
    image: myapp
    build:
      context: .
      dockerfile: Dockerfile
    volumes:
      - .:/code
    environment:
      - APP_ENV=production
bash

# Lancer les services définis dans docker-compose.yml
docker-compose up

# Arrêter les services
docker-compose down
Volumes Docker
bash

# Créer un volume Docker
docker volume create monvolume

# Lister les volumes Docker
docker volume ls

# Utiliser un volume dans un conteneur
docker run -d -v monvolume:/data ubuntu
Docker Swarm
bash

# Initialiser un swarm
docker swarm init

# Lister les nœuds dans le swarm
docker node ls

# Déployer un service dans le swarm
docker service create --name monservice -p 80:80 nginx

# Lister les services dans le swarm
docker service ls

# Mettre à jour un service dans le swarm
docker service update --replicas 3 monservice
Expert
Gestion des secrets
bash

# Créer un secret Docker
echo "monsecret" | docker secret create mon_secret -

# Lister les secrets Docker
docker secret ls

# Utiliser un secret dans un service
docker service create --name monservice --secret mon_secret nginx
Docker avec Kubernetes (K8s)
yaml

# Fichier de déploiement k8s-deployment.yml
apiVersion: apps/v1
kind: Deployment
metadata:
  name: monapp
spec:
  replicas: 3
  selector:
    matchLabels:
      app: monapp
  template:
    metadata:
      labels:
        app: monapp
    spec:
      containers:
      - name: monapp
        image: myapp:latest
        ports:
        - containerPort: 80
bash

# Appliquer le fichier de déploiement
kubectl apply -f k8s-deployment.yml

# Lister les pods dans Kubernetes
kubectl get pods

# Lister les services dans Kubernetes
kubectl get services
Docker Registry
bash

# Exécuter un registre Docker privé
docker run -d -p 5000:5000 --name registry registry:2

# Taguer une image pour le registre privé
docker tag monimage:latest localhost:5000/monimage

# Pousser une image vers le registre privé
docker push localhost:5000/monimage

# Tirer une image depuis le registre privé
docker pull localhost:5000/monimage
*/