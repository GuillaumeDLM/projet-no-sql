# PROJET NOSQL
Groupe : Guillaume DELAMOTTE, Nicolas FORGET

## Setup le projet avec Docker Compose
```console
docker-compose up -d
```
>À la racine du projet

### En cas de modification de Dockerfiles
```console
docker-compose build --no-cache && docker-compose up -d
```

## Se connecter à la base Mongo en Shell
```console
mongosh -u test
```
>password = test

## Se connecter à la base Elasticsearch en Shell
```console
curl -u elastic:changeme localhost:9200
```