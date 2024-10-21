# Corrections des diagrammes UML

## Diagramme d'activités de connexion
**Fichier : `Diagramme_Activité_Connexion`**

1. **Formulation de la décision "Identifiants valides ?"**
   - **Problème :** La question dans le losange de décision doit être formulée de manière claire.
   - **Correction :** Remplacer "Identifiants valides ?" par "Les identifiants sont-ils valides ?" pour respecter les normes de formulation.

2. **Absence de flèches de retour pour le flux de contrôle**
   - **Problème :** Il manque une flèche de retour pour le chemin "Demander de réessayer" pour permettre un retour clair au point de départ.
   - **Correction :** Ajouter une flèche pointant vers le premier point de décision après "Demander de réessayer".

3. **Ajout d'un point de fin d'activité**
   - **Problème :** Le diagramme ne montre pas clairement la fin de l'activité.
   - **Correction :** Ajouter un symbole de fin (cercle noir) à la fin du processus de connexion.

---

## Diagramme d'activités d'inscription
**Fichier : `Diagramme_Activité_Inscription`**

1. **Vérification de l'unicité des informations**
   - **Problème :** Les vérifications de l'unicité pour le nom d'utilisateur et l'email ne sont pas clairement définies.
   - **Correction :** Ajouter une étape distincte "Vérifier si le nom d'utilisateur est unique" avant de vérifier l'email.

2. **Utilisation d'un message d'erreur**
   - **Problème :** Les messages d'erreur doivent être spécifiques pour une meilleure compréhension.
   - **Correction :** Préciser les messages d'erreur, par exemple, "Nom d'utilisateur déjà pris" au lieu de "Afficher un message d'erreur".

3. **Ajout de synchronisation**
   - **Problème :** Il n'y a pas de point de synchronisation pour les différentes branches.
   - **Correction :** Ajouter un point de synchronisation avant de rediriger vers la page de profil.

---

## Diagramme d'activités de publication de post
**Fichier : `Diagramme_Activité_Publication_Post`**

1. **Vérification des champs obligatoires**
   - **Problème :** La vérification des champs obligatoires n'est pas suffisamment détaillée.
   - **Correction :** Préciser que chaque champ obligatoire doit être vérifié un par un.

2. **Question de sélection de catégories**
   - **Problème :** Le contrôle pour la sélection d'une seule catégorie doit être explicite.
   - **Correction :** Ajouter une étape "Vérifier si une seule catégorie est sélectionnée" avec une branche pour les cas où plusieurs catégories sont sélectionnées.

3. **Indication des erreurs**
   - **Problème :** Les messages d'erreur doivent être formulés de manière précise et informative.
   - **Correction :** Écrire des messages d'erreur spécifiques, par exemple, "Vous devez choisir une seule catégorie".

---

## Diagramme de séquence pour la connexion
**Fichier : `Diagramme_Séquence_Connexion`**

1. **Flèches de réponse manquantes**
   - **Problème :** Les flèches de réponse après chaque interaction sont omises.
   - **Correction :** Ajouter des flèches de réponse pour chaque requête envoyée au serveur et à la base de données.

2. **Identification des acteurs**
   - **Problème :** Les acteurs ne sont pas clairement identifiés dans le diagramme.
   - **Correction :** S'assurer que chaque acteur (Membre, Interface Utilisateur, etc.) est bien identifié et étiqueté.

3. **Messages non nommés**
   - **Problème :** Les messages échangés ne sont pas suffisamment nommés pour indiquer les actions spécifiques.
   - **Correction :** Renommer les messages pour être plus explicites, comme "Valider les informations d'identification".

---

## Diagramme de séquence pour l'inscription
**Fichier : `Diagramme_Séquence_Inscription`**

1. **Messages clairs et distincts**
   - **Problème :** Les messages de vérification doivent être clairs.
   - **Correction :** Indiquer clairement si le nom d'utilisateur ou l'email est déjà pris dans les messages.

2. **Structure de l'alternative**
   - **Problème :** La structure des alternatives n'est pas suffisamment explicite.
   - **Correction :** Rendre chaque condition d'alternative distincte et précise dans le diagramme.

3. **Finalisation de l'inscription**
   - **Problème :** La confirmation de la création de compte doit être précisée.
   - **Correction :** Ajouter un message comme "Compte créé avec succès" avant de rediriger vers la page de profil.

---

## Diagramme de cas d'utilisation
**Fichier : `Diagramme_Cas_Utilisation`**

1. **Identification des acteurs**
   - **Problème :** Les rôles des acteurs ne sont pas clairs.
   - **Correction :** S'assurer que chaque acteur (Admin, Membre, Visiteur) a une description claire de ses actions.

2. **Relations entre les cas d'utilisation**
   - **Problème :** Les relations entre les cas d'utilisation ne sont pas toujours visibles.
   - **Correction :** Utiliser des lignes de relation clairement marquées pour montrer les dépendances entre les cas d'utilisation.

3. **Terminologie et nommage**
   - **Problème :** La terminologie utilisée doit être uniforme.
   - **Correction :** Vérifier que tous les noms de cas d'utilisation suivent une nomenclature cohérente (ex: utiliser toujours "Créer" au lieu de "Ajouter").

---
