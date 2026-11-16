
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma todo list</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    <div class="hero">
        

    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#0084ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check preview-icon"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>

    </svg>
    <div>
        <h2>Ma Todo list</h2>
        <p>Gérez et suivez vos tâches quotidiennes</p>
    </div>

</div>
    <div class="cadrs">
        <div class="cadar1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#0084ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-layers-arrow-down preview-icon">
                <path d="M12 7v15" />
                <path d="M2 12a1 1 0 00.58.91l5.093 2.316" />
                <path d="M22 12a1 1 0 01-.59.92l-5.077 2.308" />
                <path
                    d="M8 10.37 2.6 7.91a1 1 0 010-1.831l8.57-3.9a2 2 0 011.66.001l8.59 3.91a1 1 0 010 1.831l-5.392 2.45" />
                <path d="m9 19 3 3 3-3" />
            </svg>
            <div class ="cadar-titre">
                <p> Total </p>
                <h2> <?= $total ?> </h2>
                <span> taches </span>
            </div>
        </div>
        <div class="cadar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#2fa252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-check preview-icon">
                <path d="M20 6 9 17l-5-5" />
            </svg>
            <div class ="cadar-titre">
                <p> Total </p>
                <h2> <?= $terminees ?> </h2>
                <span> taches </span>
            </div>
        </div>
        <div class="cadar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#a29696" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-loader-circle preview-icon">
                <path d="M21 12a9 9 0 1 1-6.219-8.56" />
            </svg>
            <div class ="cadar-titre">
                <p> Total </p>
                <h2> <?= $nonTerminees ?> </h2>
                <span> taches </span>
            </div>
        </div>
    </div>
   
<?php foreach ($taches as $tache) : ?>
    <div class="tache">

        <?php
        if ($tache['terminee'] == true) {
            echo '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#27962e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="m16 9-5.5 5.5L8 12"/>
            </svg>';
        } else {
            echo '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
            </svg>';
        }
        ?>

        <div class="tache-info">
            <h3><?= $tache['titre'] ?></h3>
            <p><?= $tache['description'] ?></p>
        </div>

        <div class="tache-details">
            <span><?= date('d / m / Y', strtotime($tache['date_limite'])) ?></span>

            <?php
            $priorite = strtolower(trim($tache['priorite']));

            if ($priorite == "haute") {
                echo '<span class="priorite haute">Haute</span>';
            } elseif ($priorite == "moyenne") {
                echo '<span class="priorite moyenne">Moyenne</span>';
            } elseif ($priorite == "basse") {
                echo '<span class="priorite basse">Basse</span>';
            }
            ?>
        </div>

    </div>
<?php endforeach; ?>


</body>
</html>