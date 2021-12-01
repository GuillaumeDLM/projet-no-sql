# PROJET NOSQL

# Setup tout le projet
À la racine du projet .
# DOCKER COMPOSE
docker-compose up

# Setup le projet à la main
# SERVEUR WEB APACHE PHP
cd server
# Créer le conteneur
docker build -t projet-nosql/server .

# Exécuter le conteneur
docker run -it -p 8080:80 projet-nosql/server

# BASE MONGODB
cd mongodb
# Créer le conteneur
docker build -t projet-nosql/mongodb .

# Exécuter le conteneur
docker run -it -p 3306:3307 projet-nosql/mongodb

# BASE ELASTICSEARCH
cd elasticsearch
# Créer le conteneur
docker build -t projet-nosql/elasticsearch .

# Exécuter le conteneur
docker run -it -p 3308:3309 projet-nosql/elasticsearch