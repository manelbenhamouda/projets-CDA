# Corrections des diagrammes UML

## Diagrammes d'activités

### 1. **Diagramme d'activités : Ajout d'une recette**

**Problèmes identifiés :**
- **Flèches non orientées correctement :** Les flèches de transition entre les étapes doivent clairement indiquer le flux d'activités.
- **Pas d'indication de fin :** Un symbole de fin d'activité est requis pour montrer la terminaison complète du processus.

**Corrections :**
- **Orientation des flèches :** S'assurer que toutes les flèches de transition sont orientées correctement et indiquent clairement la direction du flux d'activités.
- **Ajouter un symbole de fin :** Ajouter un symbole de fin à la fin du diagramme pour indiquer la fin du processus d'ajout de recette.

---

### 2. **Diagramme d'activités : Commentaires sur une recette**

**Problèmes identifiés :**
- **Symbole de décision :** Le symbole de décision devrait être un losange et formuler une question pour clarifier le flux d'activités.
- **Pas de point de retour clair :** Manque d'indication claire pour revenir à une étape précédente en cas d'erreur.

**Corrections :**
- **Utiliser un losange pour la décision :** Remplacer le symbole de décision par un losange et reformuler pour une meilleure clarté (ex. : "Commentaire valide ?").
- **Ajouter un point de retour :** Ajouter un flux de retour vers l'étape de saisie du commentaire lorsque le commentaire n'est pas valide.

---

## Diagramme de classe

### 3. **Diagramme de classe : Gestion des articles**

**Problèmes identifiés :**
- **Visibilité des attributs :** Les attributs ne sont pas annotés avec leur visibilité (public `+`, private `-`).
- **Absence de détails sur les relations :** Les relations entre les classes devraient inclure des multiplicateurs pour clarifier les cardinalités.

**Corrections :**
- **Ajouter la visibilité :** Annoter tous les attributs avec leur visibilité respective pour respecter la norme UML.
- **Clarifier les relations :** Inclure les multiplicateurs sur les lignes de relation entre les classes pour montrer les cardinalités (ex. : `0..*`, `1`, etc.).

---

## Diagramme de séquence

### 4. **Diagramme de séquence : Ajout d'un article**

**Problèmes identifiés :**
- **Messages non nommés :** Les messages échangés entre les objets doivent être clairement nommés pour indiquer les actions spécifiques.
- **Absence de conditions :** Manque d'indication des conditions qui mènent à des flux alternatifs.

**Corrections :**
- **Nommer les messages :** Renommer les messages pour être explicites sur l'action effectuée, par exemple, "Envoyer les données de l'article" et "Confirmer l'ajout".
- **Ajouter des conditions :** Inclure des conditions claires sur les flux alternatifs pour indiquer les différentes voies selon les résultats des opérations.

---

## Diagramme de cas d'utilisation

### 5. **Diagramme de cas d'utilisation : Gestion des articles**

**Problèmes identifiés :**
- **Utilisation incorrecte des relations :** Les relations d'« include » et « extend » doivent être correctement utilisées et clarifiées.
- **Absence de détails sur les acteurs :** Les acteurs devraient être clairement identifiés avec leurs rôles.

**Corrections :**
- **Vérifier l'utilisation des relations :** S'assurer que les relations d'« include » et « extend » sont correctement définies et expliquées.
- **Identifier les acteurs :** Inclure des étiquettes claires pour chaque acteur afin de spécifier leur rôle dans le système.

---
