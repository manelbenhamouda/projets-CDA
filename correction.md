# Corrections Détaillées des Diagrammes UML

## Diagramme de Cas d'Utilisation 

**Clarifie et distingue les rôles avec précision :**
- **Admin** : Organise les actions de gestion et de modération en sous-groupes clairs sous "Gestion administrative" pour refléter correctement leur portée et hiérarchie.
- **Utilisateur** : Regroupe les actions nécessitant une authentification sous "Gestion des skins".
- **Visiteur** : Fusionne "Peut consulter les skins disponibles" et "Peut lire les commentaires sur les skins" en "Consulter skins et commentaires".

## Diagramme de Séquence pour la Modification de Commentaire 

**Insère une étape de validation du commentaire :**
- Ajoute "Valider le commentaire" immédiatement avant "Mettre à jour le commentaire dans la base de données", pour t'assurer de la conformité des données.

**Spécifie les messages d'erreur selon le type d'erreur :**
- Détaille les conditions d'erreur comme texte vide ou inapproprié et configure des messages d'erreur spécifiques pour chaque condition.

## Diagramme d'Activité pour la Soumission de Skin

**Vérifie que tous les champs sont remplis avant la soumission :**
- Intègre "Tous les champs sont-ils remplis ?" avant "Sauvegarder le skin dans la base de données".

**Valide le format de l'image avant sauvegarde :**
- Introduis "Vérifier le format de l'image" juste après son téléchargement pour t'assurer qu'elle répond aux critères acceptés.

## Diagramme d'Activité pour le Traitement des Signalements 

**Clarifie le processus de traitement des signalements :**
- Décris clairement les étapes décisionnelles après la sélection d'un signalement

**Fournis un retour explicite à l'utilisateur après le traitement des signalements :**
- Assure-toi d'inclure "Informer l'utilisateur du résultat" après chaque action prise sur un signalement, qu'il nécessite une suite ou non.

