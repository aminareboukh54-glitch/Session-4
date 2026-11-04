# Déterminer les relations et les cardinalités

## 1. La relation
Une relation permet de relier deux entités à l'aide d'un verbe d'action.

Exemples :
- AUTEUR rédige ARTICLE.
- AUTEUR habite VILLE.
- CATEGORIE regroupe ARTICLE.
- ARTICLE possède TAG.

## 2. La cardinalité
La cardinalité indique combien de fois une entité peut participer à une relation.

Elle s'écrit : (Minimum, Maximum).

### Les 4 cardinalités

| Cardinalité | Signification |
|---|---|
| (0,1) | Zéro ou un seul |
| (1,1) | Un seul obligatoire |
| (0,N) | Zéro ou plusieurs |
| (1,N) | Un ou plusieurs |

## 3. Comment déterminer une cardinalité ?

On pose deux questions :

**Question 1 : Est-ce obligatoire ?**
- Non = 0
- Oui = 1

**Question 2 : Peut-il y en avoir plusieurs ?**
- Non = 1
- Oui = N

## 4. Les types de relations

**Relation 1–N :** Un élément peut être lié à plusieurs éléments.

Exemple : Un auteur rédige plusieurs articles.

**Relation N–N :** Plusieurs éléments peuvent être liés à plusieurs autres éléments.

Exemple : Un article possède plusieurs tags et un tag peut appartenir à plusieurs articles.

## 5. Application Blog

| Entité A | Cardinalité A | Relation | Cardinalité B | Entité B |
|---|---|---|---|---|
| VILLE | (1,N) | habite | (1,1) | AUTEUR |
| AUTEUR | (0,N) | rédige | (1,1) | ARTICLE |
| CATEGORIE | (0,N) | regroupe | (1,1) | ARTICLE |
| ARTICLE | (0,N) | possède | (0,N) | TAG |

**À retenir :**
- 0 = facultatif.
- 1 = obligatoire ou un seul selon la position.
- N = plusieurs.
- Toujours poser les deux questions pour déterminer la cardinalité.