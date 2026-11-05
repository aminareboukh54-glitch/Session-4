┌──────────────────────┐
│         VILLE        │
├──────────────────────┤
│ _id_ville_           │
│ nom_ville            │
└──────────┬───────────┘
           │ (0,N)
        (habite)
           │ (1,1)
┌──────────┴───────────┐
│        AUTEUR        │
├──────────────────────┤
│ _id_auteur_          │
│ nom_auteur           │
│ prenom_auteur        │
│ email_auteur         │
└──────────┬───────────┘
           │ (0,N)
        (rédige)
           │ (1,1)
┌──────────┴───────────┐
│        ARTICLE       │
├──────────────────────┤
│ _id_article_         │
│ titre_article        │
│ contenu_article      │
│ date_publication     │
│ statut_article       │
│ image_article        │
└──────────┬───────────┘
           │ (1,1)
        (regroupe)
           │ (0,N)
┌──────────┴───────────┐
│       CATEGORIE      │
├──────────────────────┤
│ _id_categorie_       │
│ nom_categorie        │
└──────────────────────┘
