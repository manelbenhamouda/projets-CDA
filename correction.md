# Corrections des diagrammes UML

## Diagramme de cas d'utilisation

1. **Lien entre les cas d'utilisation**
   - **Problème :** Les cas d'utilisation sont correctement reliés aux acteurs respectifs, mais le diagramme pourrait être allégé pour plus de clarté.
   - **Correction :** S'assurer que les liens ne se croisent pas trop pour éviter toute confusion visuelle.

2. **Noms des cas d'utilisation**
   - **Problème :** Les noms des cas d'utilisation doivent être formulés comme des verbes à l'infinitif pour être conformes à la norme UML.
   - **Correction :** Par exemple, changer "Suivre la progression des clients" en "Suivre la progression des clients".

## Diagramme de classes

1. **Héritage entre `Utilisateur`, `Administrateur`, et `Niveau`**
   - **Problème :** La relation d'héritage est correctement indiquée, mais il manque une flèche claire vers `Niveau`.
   - **Correction :** S'assurer que la flèche d'héritage de `Utilisateur` vers `Niveau` soit bien visible.

 2. **Utilisation des symboles UML**
   - **Problème :** Les symboles UML tels que les flèches et les losanges doivent être utilisés conformément aux standards pour les associations et les agrégations.
   - **Correction :** 
     - **Associations :** Vérifier que les associations (liens entre les classes) sont représentées par des lignes simples. Par exemple, une association bidirectionnelle entre `Utilisateur` et `Article` doit être indiquée par une ligne sans flèche, tandis qu'une association unidirectionnelle doit avoir une flèche pointant vers la classe cible.
     
     - **Héritage :** Vérifier que les relations d'héritage sont indiquées par une flèche avec un triangle vide pointant vers la classe parente. Par exemple, `Administrateur` devrait avoir une flèche pointant vers `Utilisateur`, indiquant que `Administrateur` hérite des caractéristiques de `Utilisateur`.

     - **Agrégation et composition :** Utiliser un losange vide pour représenter une agrégation et un losange rempli pour indiquer une composition. Par exemple, si `Article` a des `Commentaires`, une relation d'agrégation serait représentée par un losange vide près de `Article`, tandis qu'une relation de composition, indiquant que les `Commentaires` ne peuvent exister sans l'`Article`, serait représentée par un losange rempli.
     
     - **Cardinalités :** Vérifier que les cardinalités (1, 0..*, etc.) soient correctement indiquées sur les lignes d'association pour définir la multiplicité des relations. Par exemple, si un `Utilisateur` peut avoir plusieurs `Articles`, cela devrait être représenté par `1` près de `Utilisateur` et `0..*` près de `Article`.

     - **Consistance :** S'assurer que tous les symboles soient utilisés de manière cohérente dans tout le diagramme pour éviter toute confusion. Par exemple, si une flèche d'héritage est utilisée pour une classe, il ne faut pas mélanger cela avec une flèche d'association.


3. **Visibilité des attributs et méthodes**
   - **Problème :** Les attributs et méthodes des classes doivent être correctement annotés avec leur visibilité afin de clarifier leur accessibilité. L'absence d'indication de visibilité peut mener à des erreurs de compréhension concernant les droits d'accès et l'encapsulation au sein du système. Cela est essentiel pour assurer que les développeurs sachent comment interagir avec les objets et leurs propriétés.

   - **Correction :**
     - **Attributs :** Vérifier que tous les attributs soient annotés avec l'un des trois modificateurs de visibilité :
       - **Public (`+`) :** Signifie que l'attribut est accessible depuis n'importe quelle autre classe. Par exemple, un attribut qui stocke le `nom` d'un `Utilisateur` pourrait être public si tu souhaites permettre l'accès à ce nom de n'importe où.
       - **Private (`-`) :** Indique que l'attribut est uniquement accessible au sein de la classe qui le définit. Cela protège les données et évite qu'elles soient modifiées directement depuis l'extérieur. Par exemple, un mot de passe (`motDePasse`) devrait être privé pour éviter des accès non autorisés.
       - **Protected (`#`) :** Permet à l'attribut d'être accessible dans la classe définie et dans toutes les classes dérivées (héritées). Cela est utile pour les classes de base qui souhaitent permettre un accès limité à leurs attributs pour les classes qui en héritent.

     - **Méthodes :** De même, toutes les méthodes doivent également être annotées avec leur visibilité. Cela aide à définir quel comportement peut être utilisé par d'autres classes :
       - Une méthode publique peut être appelée de n'importe où, tandis qu'une méthode privée ne peut être invoquée qu'à l'intérieur de la classe où elle est définie.

---
