# PROJET NOSQL
Groupe : Guillaume DELAMOTTE, Nicolas FORGET

## Setup le projet avec Docker Compose
docker-compose up
>À la racine du projet

## Setup le projet manuellement
### SERVEUR WEB APACHE PHP
cd server
#### Créer le conteneur
docker build -t projet-nosql/server .

#### Exécuter le conteneur
docker run -it -p 8080:80 projet-nosql/server

### BASE MONGODB
cd mongodb
#### Créer le conteneur
docker build -t projet-nosql/mongodb .

#### Exécuter le conteneur
docker run -it -p 3306:3307 projet-nosql/mongodb

### BASE ELASTICSEARCH
cd elasticsearch
#### Créer le conteneur
docker build -t projet-nosql/elasticsearch .

#### Exécuter le conteneur
docker run -it -p 3308:3309 projet-nosql/elasticsearch