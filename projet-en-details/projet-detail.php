<?php 
    // Exemple de récupération de l'id du projet
    $project_id = $_GET['id']; 
    // Utilisation d'un tableau d'exemple pour les données
    $projects = [
        1 => ["title" => "Projet 1", "description" => "Description détaillée du projet 1", "image" => "images/projet1.jpg"],
        2 => ["title" => "Projet 2", "description" => "Description détaillée du projet 2", "image" => "images/projet2.jpg"],
        3 => ["title" => "Projet 3", "description" => "Description détaillée du projet 3", "image" => "images/projet3.jpg"]
    ];
    
    $project = $projects[$project_id]; // Récupération des données du projet par ID
?>

<?php include('header.php'); ?>

<main>
    <div class="project-detail">
        <h1><?php echo $project['title']; ?></h1>
        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="project-image">
        <p><?php echo $project['description']; ?></p>
    </div>
</main>

<?php include('footer.php'); ?>
