# Agendar

--------------------------------------------------------------------------------------------------------------

# Application d'Agenda Collaboratif  

## **Description**  
Ce projet est une application web d'agenda qui permet :  
- De gérer un calendrier personnel ou professionnel.  
- De créer et personnaliser un emploi du temps.  
- D’ajouter des notes à des journées spécifiques.  
- De partager son agenda avec d'autres utilisateurs.  
- En option :  
  - Un système de chat intégré pour communiquer avec les utilisateurs avec qui un agenda est partagé.  
  - Une intégration avec Google Calendar pour synchroniser les données d'un compte Google Agenda avec l'application.  
  - Une fonctionnalité pour générer une fiche récapitulative de toutes les notes via un simple bouton.  

L'application est développée avec le framework **Laravel** et utilise **MySQL** comme base de données.  

--------------------------------------------------------------------------------------------------------------

## **Fonctionnalités Principales**  
### **Gestion de l'Agenda et des Notes**  
- Créer, visualiser et modifier un agenda personnel.  
- Ajouter des notes pour des journées spécifiques, comme un bloc-notes intégré au calendrier.  
- Convertir l'agenda en emploi du temps en y ajoutant des plages horaires personnalisées.  
- Afficher un résumé des notes sur une période donnée.  
- Générer une fiche récapitulative de toutes les notes (au format PDF ou autre) via un simple bouton.  

### **Partage et Collaboration**  
- Partager son agenda avec d'autres utilisateurs pour consultation ou modification.  
- Gérer les droits d'accès : consultation uniquement ou édition autorisée.  

### **Système de Chat (Optionnel)**  
- Communiquer directement avec les utilisateurs avec qui un agenda est partagé.  
- Fonctionnalité de messagerie en temps réel intégrée.  

### **Intégration avec Google Calendar (Optionnel)**  
- Synchroniser les données d'un compte Google Agenda avec l'application.  
- Afficher les événements Google Calendar directement dans l'agenda de l'application.  

--------------------------------------------------------------------------------------------------------------

## **Technologies Utilisées**  
### Backend :  
- **Framework** : Laravel (PHP).  
- **Base de données** : MySQL.  

### Frontend :  
- **Page blade** (ou tout autre framework compatible avec Laravel).  

### Système de Chat :  
- **Pusher** ou **WebSocket** (selon l'implémentation choisie).  

### Intégration API :  
- **Google Calendar API** pour la synchronisation des calendriers (optionnel).  
