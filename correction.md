# Corrections Détaillées des Diagrammes UML

## Diagramme d'Activité Principal (`Activity_Diagram_Main.png`)

### Corrections :
1. **Ajouter des étiquettes aux décisions :**
   - Ajoute explicitement des étiquettes "Oui" et "Non" sur les branches sortant des points de décision. Par exemple, à la décision "Recherche de recettes ?", place "Oui" sur la branche menant à "Cherche une recette" et "Non" sur la branche menant à l'action suivante.

2. **Simplifier les actions répétitives :**
   - Fusionne les actions répétitives de commentaire et de notation. Crée une seule action "Commenter ou noter" et utilise cette action pour les recettes et les jeux afin de réduire la complexité du diagramme.

3. **Améliorer la gestion des erreurs de connexion :**
   - Modifie l'action après un échec de connexion pour offrir des options spécifiques comme "Essayer de nouveau" ou "Récupérer mot de passe". Insère un processus décisionnel après "Afficher message d'erreur" pour ces options.

## Diagramme de Séquence pour la Connexion (`Sequence_Diagram_Login.png`)

### Corrections :
1. **Détail des interactions serveur :**
   - Précise quelles données exactement sont envoyées au serveur pour la vérification des identifiants et comment les réponses du serveur sont traitées. Par exemple, montre que l'utilisateur envoie "nom d'utilisateur" et "mot de passe" et reçoit une confirmation ou un message d'erreur.

2. **Clarifier les conditions de réussite ou d'échec :**
   - Détaille les actions après l'échec de la connexion. Ajoute un retour au formulaire de connexion avec une option spécifique affichée pour les tentatives supplémentaires ou la récupération du mot de passe.

## Diagramme de Cas d'Utilisation (`Use_Case_Diagram.png`)

### Corrections :
1. **Spécifier les actions des rôles :**
   - Définis précisément dans les descriptions des cas d'utilisation ce que chaque rôle peut faire. Par exemple, spécifie que "Gérer les utilisateurs" sous l'administrateur comprend "ajouter", "supprimer", "modifier" des utilisateurs.

2. **Supprimer les doublons :**
   - Élimine les cas d'utilisation redondants. Si "Importer des recettes" et "Gérer les recettes" se chevauchent, combine-les en un seul cas d'utilisation nommé "Gérer les recettes", incluant l'importation comme sous-fonction.

## Diagramme de Classes (`Class_Diagram.png`)

### Corrections :
1. **Corriger les multiplicités :**
   - Assure-toi que la multiplicité entre "Utilisateur" et "Recette" permette à un utilisateur de posséder plusieurs recettes. Change la multiplicité en "1..*" si nécessaire.

2. **Examiner les attributs pour chaque classe :**
   - Vérifie que tous les attributs nécessaires sont présents pour soutenir les fonctionnalités de la classe. Par exemple, ajoute un attribut "dateDeCréation" à la classe "Recette" pour suivre quand les recettes ont été créées.
