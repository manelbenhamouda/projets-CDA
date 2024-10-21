# Correction des Diagrammes UML

## Diagramme 1: Authentification de l'Utilisateur
### Problèmes identifiés :
1. **Nom des classes et relations** : Les noms de classes et les relations ne respectent pas les conventions UML. Le mot "Contrôleur" devrait être en majuscule pour "Contrôleur" et pas "Controleur".
2. **Utilisation d'«alt»** : L'utilisation de la notation alt pour représenter une alternative est correcte, mais il manque des flèches pour indiquer le chemin de retour des flux de messages.
3. **Lignes de retour** : Manque de lignes de retour qui indiquent que l'information passe de l'interface utilisateur au contrôleur, ce qui n’est pas clair.

### Comment corriger :
- Renommer "Contrôleur" et vérifier qu'il est uniformément écrit dans tous les diagrammes.
- Ajouter des flèches de retour pour montrer comment les messages transitent entre les entités.
- Vérifie que toutes les relations et dépendances sont bien indiquées.

---

## Diagramme 2: Ajout d'un Manga
### Problèmes identifiés :
1. **Titre de l'alternative** : La notation "alt" est correctement utilisée, mais les options d'alternatives ne sont pas clairement visibles.
2. **Descriptions des processus** : Les descriptions des processus ne sont pas assez détaillées pour comprendre ce qui se passe si le manga existe déjà.

### Comment corriger :
- Clarifier les alternatives sous "alt" en ajoutant des descriptions explicites sur ce qui se passe si le manga existe déjà ou non.
- Ajouter des flèches pour montrer le flux de contrôle.

---

## Diagramme 3: Modification d'un Manga
### Problèmes identifiés :
1. **Manque de détails** : Les conditions d'alternatives ne sont pas bien spécifiées. "alt" devrait inclure des détails supplémentaires sur les erreurs possibles.
2. **Retour d'informations** : Les messages d'erreur ne sont pas spécifiés, ce qui rend le processus flou.

### Comment corriger :
- Préciser les erreurs possibles et ajouter des instructions claires sur la manière de corriger les informations.
- Assurer que les retours de messages d'erreur sont correctement représentés.

---

## Diagramme 4: Bibliothèque
### Problèmes identifiés :
1. **Propriétés des classes** : Les propriétés des classes ne sont pas correctement mises en forme selon la convention UML (par exemple, les types de données ne doivent pas être en italique).
2. **Relations** : Les relations entre les classes manquent de clarté, notamment les cardinalités.

### Comment corriger :
- Formater les types de données correctement.
- Clarifier les cardinalités dans les relations entre classes, en veillant à respecter les notations UML.

---

## Diagramme 5: Connexion d'un Utilisateur
### Problèmes identifiés :
1. **Organisation du flux** : Les étapes de vérification et les décisions devraient être plus clairement distinguées.
2. **Utilisation des symboles** : Les symboles utilisés pour les décisions (diamants) ne sont pas suffisamment visibles.

### Comment corriger :
- Réorganiser le flux pour qu'il soit plus intuitif et facile à suivre.
- S'assurer que les symboles de décision sont bien en évidence et que leurs implications sont clairement indiquées.

---

## Diagramme 6: Ajout d'un Commentaire
### Problèmes identifiés :
1. **Clarté du processus** : Le processus d'ajout de commentaire devrait avoir plus de détails sur les actions possibles.
2. **Structure de flux** : Le flux du processus ne montre pas clairement les interactions entre les utilisateurs et le système.

### Comment corriger :
- Ajouter des détails sur les actions possibles lors de l'ajout d'un commentaire.
- Clarifier le flux d'interaction pour montrer comment l'utilisateur interagit avec le système.

---

