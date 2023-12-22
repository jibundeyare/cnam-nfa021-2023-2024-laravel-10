# Projet de restaurant O Cnamo

Ce projet est un site web test pour le formation DevWeb du CNAM.

## Prérequis

- Apache 2.4.54
- MariaDB 10.8.3
- PHP 8.1.7
- Composer 2.3.5
- NodeJS et NPM @TODO

## Installation

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
