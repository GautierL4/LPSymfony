# Projet Symfony - Licence Pro 2017-2018

## Groupe 3 - Binôme : Gautier LAURENT

### Mission : Gestion de la messagerie et des notifications

Ma mission était divisé en trois partie :

* Page d'accueil et menu
* Gestion de la messagerie
* Gestion des notifications

### Page d'accueil et menu

Le menu se personnalise si l'utilisateur est connecté. Les boutons Message,Notification et Déconnexion apparaissent.

La page d'accueil permet la redirection vers les autres fonctionnalités, cependant ces dernières ne sont pas intégré à mon rendu et donc inaccessible.

L'absence des autres fonctionnalités implique aussi l'absence de gestion d'utilisateur, il n'y a donc pas de différence entre un candidat et un conseiller.


### Messagerie

Cette fonctionnalité est accessible lorsque l'utilisateur se connecte. Il lui suffit de cliquer sur le bouton Message sur le menu.

Elle permet :
* L'accès à la boîte de messagerie (Les messages reçu)
  * Accès à la listes des messages reçu
  * Voir un message lors d'un clique dessus
* Ecrire un message à un autre membre
  * Il s'agit d'un formulaire qui permet de :
    * Renseigner un sujet
    * Choisir un destinataire parmis la liste des utilisateurs
    * Renseigner le corps du message
* Voir les messages envoyés
  * Accès à la liste des messages envoyés
  * Voir un message envoyés lors d'un clique dessus

### Notifications

Cette fonctionnalité permet d'accèder à la liste des notifications reçu.
Il faut savoir que les notifications sont crée lors d'action de la part d'un candidat/conseiller dans la section Upload/Download de fichiers. Mon groupe n'ayant pas de binôme s'occupant de cette partie la, elle n'est pas intégré et donc des notifications de test sont crée manuellement.

### **Information sur l'utilisation de l'application** 

Pour accèder à l'application il faut cloner le repertoire git sur votre repertoire correspondant à votre serveur Web.

Pour déployer l'application et ces dépendances il faut faire les commandes suivantes :

`composer install`

Pour installer les dépendances lié au projet

`php bin/console doctrine:database:create`

Pour crée la base de données

`php bin/console doctrine:schema:update --force`

Pour mapper les entités dans la base de données

Si vous souhaitez créer un utilisateur, vous pouvez accéder à un formulaire en cliquant sur le bouton inscription sur la page d'accueil.
Il est aussi accessible à l'url suivante :

`http://localhost/LPSymfony/web/app_dev.php/register/` 

ou

`http://localhost/LPSymfony/web/app.php/register/`

Si vous souhaitez crée une notification manuellement, il faut utilisé le lien suivant une fois connecté :

`http://localhost/LPSymfony/web/app.php/notification/send`

