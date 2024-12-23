<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio - Projets</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include('header.php'); ?>

<main>
    <h1>Mes Projets</h1>
    <div class="cards-container">
        <!-- Carte 1 -->
        <a href="projet-detail.php?id=1" class="card">
            <div class="card-info">
                <h2>Projet 1</h2>
                <p>Description succincte de votre premier projet.</p>
            </div>
        </a>

        <!-- Carte 2 -->
        <a href="projet-detail.php?id=2" class="card">
            <div class="card-info">
                <h2>Projet 2</h2>
                <p>Description succincte de votre deuxième projet.</p>
            </div>
        </a>

        <!-- Carte 3 -->
        <a href="projet-detail.php?id=3" class="card">
            <div class="card-info">
                <h2>Projet 3</h2>
                <p>Description succincte de votre troisième projet.</p>
            </div>
        </a>
    </div>
</main>

<?php include('footer.php'); ?>
</body>
</html>



<style >
 /* Conteneur des cartes */
.cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

/* Carte principale */
.card {
    --background: linear-gradient(to right, #74ebd5 0%, #acb6e5 100%);
    width: 220px;
    height: 150px;
    padding: 15px;
    border-radius: 1rem;
    background: var(--background);
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    text-decoration: none;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card::before,
.card::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 1rem;
    z-index: -1;
}

.card::before {
    background: linear-gradient(to bottom right, #f6d365 0%, #fda085 100%);
    transform: rotate(2deg);
}

.card::after {
    background: linear-gradient(to top right, #84fab0 0%, #8fd3f4 100%);
    transform: rotate(-2deg);
}

/* Informations sur la carte */
.card-info {
    text-align: center;
}

.card-info h2 {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 5px;
}

.card-info p {
    font-size: 0.9em;
    color: rgba(255, 255, 255, 0.9);
}

/* Effets au survol */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card:hover::before,
.card:hover::after {
    opacity: 0;
}
