# Projet de restaurant O Cnamo

Ce projet est un site web test pour le formation DevWeb du CNAM.

## Prérequis

- Apache 2.4.54
- MariaDB 10.8.3
- PHP 8.1.7
- Composer 2.3.5
- NodeJS et NPM @TODO

## Installation

### Version dev

Il faut d'abord cloner l'application en local :

```
git clone https://github.com/jibundeyare/cnam-nfa021-2023-2024-laravel-10
```

Ensuite il faut créer une BDD puis configurer les accès dans le fichier `.env` :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mon_application
DB_USERNAME=mon_application
DB_PASSWORD=123
```

Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash :

```
./mkdb.sh
```

Vous pouvez donner un nom à l'application dans le fichier `.env` :

```
APP_NAME="Mon Application"
```

### Version prod

@TODO

## Utilisation

Dans le terminal :

```
php artisan serve
```

Aller sur la page [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Requêtes SQL utiles

```
-- Liste des catégories et de leurs plats
SELECT categories.id, categories.nom, plats.id, plats.nom
FROM categories
INNER JOIN plats ON categories.id = plats.categories_id
ORDER BY categories.id, plats.nom
```

```
-- Liste des plats et de leurs étiquettes
SELECT etiquettes.id, etiquettes.nom, plats.id, plats.nom
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom
```

## Recommendations

### Images d'ambiance

La taille recommandée est :

- Largeur : 1024px
- Hauteur : 768px

Il vaut mieux utilser des fichiers JPEG car ils sont plus légers.

## Mentions légales

### Licence du projet

@TODO

### Droits d'auteur

Toutes les photos du site ont été réalisées par ...
