# Cahier des charges du projet de test

Le projet a pour objet la création d'une application de type API simple, permettant la gestion de comptes utilisateurs.

Cette application ne possède pas d'interface utilisateur.

## Fonctionnalités attendues :

### API simple

- permettre la création de comptes utilisateurs
- permettre la modification d'un compte
- permettre la modification d'un lot de comptes
- permettre de récupérer les données d'un compte spécifique
- permettre de récupérer une liste de compte suivant un filtre
- permettre la suppression d'un compte

### Json Web Token

- émettre un token d'authentification,
- valider un token d'authentification,

### Historisation des évènements de compte utilisateurs

- historiser les évènements occurant sur chaque compte,
- routes d'API permettant de récupérer l'historique d'un utilisateur

### Docker

- réaliser la configuration pour un déploiement avec Docker

---

## Contraintes techniques / technologiques

Le projet sera réalisée avec [Symfony 4](https://symfony.com/doc/current/setup.html) et son squelette ```symfony/skeleton```, ce qui implique l'utilisation de php à la version `7.x`.

Le projet utilisera une base de données PostgreSQL.

Le projet utilisera les bundle symfony suivants :

- [ApiPlatform](https://api-platform.com/docs/distribution#using-symfony-flex-and-composer-advanced-users),
- [LexikAuthentificationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle), en utilisant un jeu de certificats pour le chiffrement des données.

### Définitions techniques

#### Compte utilisateur

Un compte utilisateur est définie par :
	
- une adresse email unique,
- un nom,
- un prénom,
- un identifiant unique,
- un mot de passe,
- une liste de rôles.

Le hachage du mot de passe sera fait en utilisant un certificat SSL.

#### Historique utilisateur

Un évènement de gestion de compte est défini par :

- une date,
- un type d'action (ie : _CREATE_, _UPDATE_, _DELETE_),
- la sérialisation de l'objet avant l'évènement,
- la sérialisation de l'objet après l'évènement.

## Éléments de contrôle

- Il n'est pas nécessaire de compléter le projet à 100% avant de le partager.
- Le projet sera documeté utilement.
- Le nommage du projet sera argumenté.
- L'utlisation de toute ressource non mentionnée dans ce document sera argumentée.
- Une documentation technique minimale, au format UML sera réalisée, à l'aide du logiciel de votre choix ([StarUML](http://staruml.io/) est utilisé dans le service).
- Un jeu de tests réalisé avec les éléments proposés par Symfony seront mis en place.

## Conditions de rendu

- partager un repository sur GitHub avec l'utilisateur [Knudian](https://github.com/knudian) (c'est mon compte personnel) le **03 janvier 2019 à minuit (soir) au plus tard**.
- le projet ne doit à aucun moment mentionner le nom de la société.