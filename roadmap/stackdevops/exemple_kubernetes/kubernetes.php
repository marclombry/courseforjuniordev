<?php 
/*
   Guide Kubernetes : Commandes et Utilisations

 Débutant

 Installation de Kubernetes
```bash
 Télécharger et installer kubectl
https://kubernetes.io/docs/tasks/tools/install-kubectl/

 Installer Minikube pour une installation locale de Kubernetes
https://minikube.sigs.k8s.io/docs/start/
Commandes de base
bash

 Afficher la version de kubectl
kubectl version

 Afficher les informations sur le cluster
kubectl cluster-info
Gestion des Pods
bash

 Créer un Pod avec kubectl
kubectl run nginx --image=nginx

 Lister les Pods
kubectl get pods

 Obtenir des détails sur un Pod
kubectl describe pod <pod_name>

 Supprimer un Pod
kubectl delete pod <pod_name>
Gestion des Services
bash

 Exposer un Pod en tant que Service
kubectl expose pod nginx --port=80 --target-port=80

 Lister les Services
kubectl get services

 Obtenir des détails sur un Service
kubectl describe service <service_name>

 Supprimer un Service
kubectl delete service <service_name>
Intermédiaire
Déploiements
yaml

 Fichier de déploiement deployment.yml
apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-deployment
spec:
  replicas: 3
  selector:
    matchLabels:
      app: nginx
  template:
    metadata:
      labels:
        app: nginx
    spec:
      containers:
      - name: nginx
        image: nginx:1.14.2
        ports:
        - containerPort: 80
bash

 Appliquer un fichier de déploiement
kubectl apply -f deployment.yml

 Lister les déploiements
kubectl get deployments

 Obtenir des détails sur un déploiement
kubectl describe deployment nginx-deployment

 Mettre à jour un déploiement
kubectl set image deployment/nginx-deployment nginx=nginx:1.16.1

 Supprimer un déploiement
kubectl delete deployment nginx-deployment
ConfigMaps et Secrets
yaml

 Fichier ConfigMap configmap.yml
apiVersion: v1
kind: ConfigMap
metadata:
  name: example-config
data:
  example.property.1: "value1"
  example.property.2: "value2"
bash

 Créer un ConfigMap
kubectl apply -f configmap.yml

 Lister les ConfigMaps
kubectl get configmaps

 Obtenir des détails sur un ConfigMap
kubectl describe configmap example-config

 Supprimer un ConfigMap
kubectl delete configmap example-config
yaml

 Fichier Secret secret.yml
apiVersion: v1
kind: Secret
metadata:
  name: example-secret
type: Opaque
data:
  username: YWRtaW4=   admin en base64
  password: MWYyZDFlMmU2N2Rm   1f2d1e2e67df en base64
bash

 Créer un Secret
kubectl apply -f secret.yml

 Lister les Secrets
kubectl get secrets

 Obtenir des détails sur un Secret
kubectl describe secret example-secret

 Supprimer un Secret
kubectl delete secret example-secret
Volumes
yaml

 Fichier Pod avec un volume pod-volume.yml
apiVersion: v1
kind: Pod
metadata:
  name: test-pod
spec:
  containers:
  - name: test-container
    image: busybox
    volumeMounts:
    - mountPath: /data
      name: test-volume
    command: [ "sleep", "10000" ]
  volumes:
  - name: test-volume
    hostPath:
      path: /data
      type: Directory
bash

 Appliquer un fichier de Pod avec un volume
kubectl apply -f pod-volume.yml

 Lister les Pods pour vérifier la création
kubectl get pods

 Supprimer le Pod
kubectl delete pod test-pod
Avancé
StatefulSets
yaml

 Fichier StatefulSet statefulset.yml
apiVersion: apps/v1
kind: StatefulSet
metadata:
  name: web
spec:
  selector:
    matchLabels:
      app: nginx
  serviceName: "nginx"
  replicas: 3
  template:
    metadata:
      labels:
        app: nginx
    spec:
      containers:
      - name: nginx
        image: nginx
        ports:
        - containerPort: 80
  volumeClaimTemplates:
  - metadata:
      name: www
    spec:
      accessModes: ["ReadWriteOnce"]
      resources:
        requests:
          storage: 1Gi
bash

 Appliquer un fichier StatefulSet
kubectl apply -f statefulset.yml

 Lister les StatefulSets
kubectl get statefulsets

 Obtenir des détails sur un StatefulSet
kubectl describe statefulset web

 Supprimer un StatefulSet
kubectl delete statefulset web
DaemonSets
yaml

 Fichier DaemonSet daemonset.yml
apiVersion: apps/v1
kind: DaemonSet
metadata:
  name: daemonset-example
spec:
  selector:
    matchLabels:
      name: daemonset-example
  template:
    metadata:
      labels:
        name: daemonset-example
    spec:
      containers:
      - name: daemonset-example
        image: gcr.io/google-containers/fluentd-elasticsearch:1.20
        resources:
          limits:
            memory: 200Mi
            cpu: 100m
        volumeMounts:
        - name: varlog
          mountPath: /var/log
  volumes:
  - name: varlog
    hostPath:
      path: /var/log
bash

 Appliquer un fichier DaemonSet
kubectl apply -f daemonset.yml

 Lister les DaemonSets
kubectl get daemonsets

 Obtenir des détails sur un DaemonSet
kubectl describe daemonset daemonset-example

 Supprimer un DaemonSet
kubectl delete daemonset daemonset-example
Ingress
yaml

 Fichier Ingress ingress.yml
apiVersion: networking.k8s.io/v1
kind: Ingress
metadata:
  name: example-ingress
spec:
  rules:
  - host: example.com
    http:
      paths:
      - path: /
        pathType: Prefix
        backend:
          service:
            name: example-service
            port:
              number: 80
bash

 Appliquer un fichier Ingress
kubectl apply -f ingress.yml

 Lister les Ingress
kubectl get ingress

 Obtenir des détails sur un Ingress
kubectl describe ingress example-ingress

 Supprimer un Ingress
kubectl delete ingress example-ingress
Gestion des RBAC (Role-Based Access Control)
yaml

 Fichier Role role.yml
apiVersion: rbac.authorization.k8s.io/v1
kind: Role
metadata:
  namespace: default
  name: pod-reader
rules:
- apiGroups: [""]
  resources: ["pods"]
  verbs: ["get", "watch", "list"]
yaml

 Fichier RoleBinding rolebinding.yml
apiVersion: rbac.authorization.k8s.io/v1
kind: RoleBinding
metadata:
  name: read-pods
  namespace: default
subjects:
- kind: User
  name: jane
  apiGroup: rbac.authorization.k8s.io
roleRef:
  kind: Role
  name: pod-reader
  apiGroup: rbac.authorization.k8s.io
bash

 Appliquer un fichier Role
kubectl apply -f role.yml

 Appliquer un fichier RoleBinding
kubectl apply -f rolebinding.yml

 Lister les Roles
kubectl get roles

 Lister les RoleBindings
kubectl get rolebindings

 Supprimer un Role
kubectl delete role pod-reader

 Supprimer un RoleBinding
kubectl delete rolebinding read-pods
Helm (gestionnaire de paquets Kubernetes)
bash

 Installer Helm
https://helm.sh/docs/intro/install/

 Ajouter un repository Helm
helm repo add stable https://charts.helm.sh/stable

 Mettre à jour les repositories
helm repo update

 Lister les charts disponibles
helm search repo stable

 Installer un chart Helm
helm install my-release stable/mysql

 Lister les releases Helm
helm list

 Supprimer une release Helm
helm uninstall my-release
 */