# Corrections des Diagrammes UML pour la Biblio

## Diagrammes d'Activité

### Inscription à la bibliothèque (Diagramme_activite_1.png)
- **Flèche de Retour :** Fais revenir directement la flèche vers "Demander les informations" en cas d'erreur.
- **Fin du Processus :** Mets un symbole de fin après "Accéder au tableau de bord" pour montrer que c'est terminé.

### Connexion à la bibliothèque (Diagramme_activite_2.png)
- **Alignement :** Mets tout ça bien en ligne pour que ce soit plus clair.
- **Activités Simultanées :** Connecte "Navigation dans la bibliothèque" et "Affichage des notifications" avec une barre de synchro pour montrer qu'elles peuvent se faire en même temps.

### Ajouter un livre (Diagramme_activite_3.png)
- **Flux de Décision :** 
  - Pour la flèche "Non", envoie-la direct vers "Notification votre livre n'est pas accepté", sans détours.
  - La flèche "Oui" doit pointer direct sur "Publication du livre dans la bibliothèque".
- **Organisation :** Range tout ça en colonnes ou grilles pour éviter que les flèches se croisent.
- **Clarté :** Mets des étiquettes qui parlent et des connecteurs pour que tout soit nickel.

## Diagramme de Classes (Diagramme_classes.png)
- **Sécu des Données :** Change "Mot de passe" pour un type plus secure, genre `String` ou `Hash`.
- **Plusieurs Livres :** Ajuste la cardinalité entre "Utilisateur" et "Livre" pour refléter la possibilité qu'un utilisateur possède plusieurs livres (0..* ou 1..*)

## Diagrammes de Séquence

### Réinitialisation du mot de passe (Diagramme_sequence_1.png)
### Précise les Infos Échangées
- **Réponses plus Claires** : Spécifie ce que la base de données confirme exactement. 
- **Contenu des Messages** : Sois plus précis avec le contenu des messages, surtout pour le message d'erreur. Ça devrait dire clairement pourquoi ça n'a pas marché.

### Processus Conditionnel
- **Conditions Bien Définies** : Reformule les 'Si' pour être super clairs. Par exemple, change "Si l'utilisateur est conforme" en "Si l'identité de l'utilisateur est confirmée par la base de données".
- **Logique des Actions** : Vérifie que chaque action sous les conditions logiques suit bien l'ordre. Après l'envoi du mail, qu'est-ce qui se passe exactement ? Montre-le clairement.

### Interactions entre Services
- **Communication avec le Serveur Mail** : Montre explicitement comment le lien de réinitialisation est envoyé via le serveur mail. Ça évite les confusions.

### Termine Correctement
- **Symboles de Fin** : Utilise des symboles de fin après chaque scénario pour montrer que c'est vraiment fini, que ça a marché ou non.

### Amélioration de la Lisibilité
- **Clarté Visuelle** : Arrange ton diagramme pour éviter les lignes qui se croisent et pour que tout soit facile à suivre

### Envoi d'un commentaire (Diagramme_sequence_2.png)
- **Conditions pour Commenter :** Sois clair sur qui peut commenter et quand.

### Ajout d'un livre (Diagramme_sequence_3.png)
- **Interactions Logiques :** Vérifie que tout se tient, surtout les validations.

## Diagramme de Cas d'Utilisation (Diagramme_use_case.png)
- **Regroupement par Fonctionnalité :**
  - Regroupe les fonctionnalités similaires ensemble de manière plus intuitive. Par exemple, tout ce qui concerne la gestion de compte (envoi d'email de réinitialisation, connexion) devrait être proche sans chevauchement avec d'autres fonctions comme la gestion de contenu (ajouter, modifier, supprimer des livres).

### Simplifie et Détaille
- **Trop de Détails dans Certains Cas :**
  - Simplifie les actions qui n'ont pas besoin d'être décomposées en sous-actions dans ce diagramme. Par exemple, "Aimer des ajouts" pourrait être une partie de "Gérer les interactions avec les ajouts", incluant aimer et retirer les j'aimes.
- **Manque de Détails pour Certains Cas :**
  - Donne plus de détails sur certains cas où c'est trop vague. "Créer des catégories" pourrait bénéficier d'une explication sur ce que cela implique ou sur ses effets sur d'autres cas d'utilisation.

### Améliore la Visibilité
- **Lisibilité :**
  - Assure-toi que le diagramme est facile à lire, avec suffisamment d'espace entre les éléments et des flèches clairement visibles. Évite que les flèches se croisent autant que possible.

### Cohérence Globale
- **Uniformité :**
  - Utilise un style cohérent pour tous les textes et les symboles. Assure-toi que tous les éléments graphiques suivent les mêmes normes UML pour éviter la confusion.
