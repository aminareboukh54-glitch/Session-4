<?php
require "data.php";
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="titre">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                stroke="#0b63c1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-code-xml preview-icon">
                <path d="m18 16 4-4-4-4" />
                <path d="m6 8-4 4 4 4" />
                <path d="m14.5 4-5 16" />
            </svg>
            <h3>Amina<span>Dev</span></h3>
        </div>
        <div class="menu">
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Competences</a>
            <a href="#">Projets</a>
            <a href="#">Contact</a>  
        </div>
</div>
    </header>
    <main class="hero">

    <div class="hero-content">

        <h2>Bonjour, je suis</h2>

        <h1>Amina ♡</h1>

        <p>
            Développeuse Web passionnée par la création
            d'applications modernes et utiles.
        </p>

        <button>Découvrir mes projets →</button>

    </div>
</main>

<div class="titre-list">

    <div class="titre-decoration">
        <span></span>
        <h3>⭐ Mes Projets</h3>
        <span></span>
    </div>

    <p>Voici une sélection de mes projets réalisés avec passion 💙</p>
</div>
<section class="projects">

    <?php foreach ($projects as $project): ?>

        <div class="project-card">

           <img src="<?= $project['image'] ?>" alt="">
           <div class = "project-info">
            
<span class="status <?= $project['status'] === 'Terminé' ? 'termine' : 'en-cours' ?>">
    <?= $project['status'] ?>
</span>

            <h2><?= $project['title'] ?></h2>

            <p><?= $project['description'] ?></p>

        
           <div class="technologies">

                <?php foreach ($project['technologies'] as $technology): ?>

                    <span><?= $technology ?></span>

                <?php endforeach; ?>
                 <div class="project-footer">

                    <span><?= $project['category'] ?></span>

                    <button>Voir plus →</button>

                </div>
            </div>

        </div>
        </div>

    <?php endforeach; ?>

</section>

<footer class="footer">

    <div class="footer-left">
        <span>♡</span>
        <p>Merci de visiter mon portfolio !</p>
    </div>
    <div class="footer-social">

        <a href="#">GitHub</a>
        <a href="#">LinkedIn</a>
        <a href="#">YouTube</a>
        <a href="#">Email</a>

    </div>

</footer>
</body>

</html>
