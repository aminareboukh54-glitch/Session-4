# Construire le MCD complet

## 1. Définition

Le MCD (Modèle Conceptuel de Données) est un schéma qui représente les entités, leurs attributs, les relations et les cardinalités d'une application.

## 2. Les éléments du MCD

- Entité : représentée par un rectangle.
- Relation : représentée par un ovale contenant un verbe d'action.
- Cardinalité : indique le minimum et le maximum de participation d'une entité à une relation.
- Identifiant : attribut qui permet d'identifier chaque occurrence d'une entité.

## 3. Les entités du Blog

**VILLE**
- id_ville (Identifiant)
- nom_ville

**AUTEUR**
- id_auteur (Identifiant)
- nom_auteur
- prenom_auteur
- email_auteur

**ARTICLE**
- id_article (Identifiant)
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

**CATEGORIE**
- id_categorie (Identifiant)
- nom_categorie

## 4. Les relations et cardinalités

1. VILLE (0,N) — habite — (1,1) AUTEUR
2. AUTEUR (0,N) — rédige — (1,1) ARTICLE
3. CATEGORIE (0,N) — regroupe — (1,1) ARTICLE

## 5. Les règles à respecter

- Chaque entité possède un identifiant.
- Chaque relation utilise un verbe d'action.
- Les cardinalités doivent respecter les règles de gestion.
- Ne pas ajouter de clés étrangères dans le MCD.
- Ne pas ajouter de données calculées comme duree_lecture.

## 6. Conclusion

Le MCD représente la structure globale des données d'une application avant de passer au MLD.
