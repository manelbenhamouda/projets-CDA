# Corrections des diagrammes UML

## Diagramme d'activités

1. **Nommage des étapes**
   - **Problème :** Les étapes du diagramme d'activités doivent être écrites en utilisant l'infinitif pour décrire clairement l'action.
   - **Correction :** Renommer les étapes comme suit :
     - `searchbar` → `Rechercher`
     - `loadresults` → `Charger les résultats`
     - `selectlistings` → `Sélectionner les annonces`
     - `addtocart` → `Ajouter au panier`
     - `payments` → `Effectuer le paiement`

2. **Flèches de contrôle de flux**
   - **Problème :** Les flèches doivent clairement indiquer le flux logique de l'activité. Il est important d'utiliser des flèches pleines pour les transitions et d'éviter les flèches en pointillé à moins qu'il ne s'agisse d'une notation spécifique.
   - **Correction :** Vérifie que toutes les flèches sont bien orientées et qu'elles utilisent le bon style (flèches pleines). Assure-toi que le flux est cohérent.

3. **Gestion des décisions**
   - **Problème :** Les losanges utilisés pour représenter les décisions doivent avoir des questions formulées clairement et ne pas être ambigus.
   - **Correction :** Remplacer `validé ?` par `Identifiants valides ?` et `retry ?` par `Réessayer ?`.

## Diagramme de classes

1. **Visibilité des attributs et méthodes**
   - **Problème :** Les attributs doivent être annotés avec leur visibilité (public `+`, private `-`, protected `#`).
   - **Correction :** S'assurer que tous les attributs sont précédés de leur visibilité respective. Par exemple, pour la classe `Users` :
     - `Name : string` doit être `+ Name : string`
     - `Email : string` doit être `+ Email : string`

2. **Relations entre classes**
   - **Problème :** Vérifie que les relations entre les classes sont correctement définies, notamment les multiplicité et les types de relations (associations, héritage).
   - **Correction :** Par exemple, la relation entre `Customer` et `Listings` doit être annotée avec la multiplicité appropriée (par exemple, `1..*` pour indiquer qu'un client peut avoir plusieurs annonces). S'assurer que les flèches sont correctement orientées pour montrer la direction de la relation.

3. **Utilisation des symboles UML**
   - **Problème :** Les symboles UML tels que les flèches et les losanges doivent être utilisés conformément aux standards pour les associations et les agrégations.
   - **Correction :** Vérifie que les symboles d'association, d'héritage et de composition soient appropriés et correctement orientés. Par exemple, une association devrait utiliser une flèche pleine, tandis qu'une composition utilise une flèche remplie.

## Diagramme de séquence

1. **Ordre des messages**
   - **Problème :** L'ordre des messages dans le diagramme de séquence doit être cohérent avec le flux logique de l'application.
   - **Correction :** Réorganiser les messages pour suivre le flux de l'interaction utilisateur, notamment en plaçant les messages de demande et de réponse dans l'ordre approprié.

2. **Lifelines continues**
   - **Problème :** Les lignes de vie (`lifelines`) doivent être continues pour chaque objet tout au long du diagramme.
   - **Correction :** Ajuster les lifelines afin qu'elles soient présentes pour chaque objet, même lorsque l'objet n'interagit pas activement.

3. **Messages non nommés**
   - **Problème :** Les messages échangés ne sont pas suffisamment nommés pour indiquer les actions spécifiques.
   - **Correction :** Renommer les messages pour être plus explicites, par exemple, `ask for results` pourrait devenir `Demander les résultats`.

