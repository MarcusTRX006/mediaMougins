<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Médiathèque de Mougins</title>

    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <!-- Bootstrap shape -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- CSS -->
    <link rel="stylesheet" href="monStyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand pl-5" href="index.php">Média-Mougins</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"><i class="fas fa-male"></i> Gestion des auteurs</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=auteurs&action=list">Liste des auteurs</a>
                        <a class="dropdown-item" href="index.php?uc=auteurs&action=add">Ajouter un auteur</a>
                        <a class="dropdown-item" href="index.php?uc=genres&action=list">Liste des genres</a>
                        <a class="dropdown-item" href="index.php?uc=genres&action=add">Ajouter un genre</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"><i class="far fa-flag"></i> Gestion des nationalités</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=nationalites&action=list">Liste des nationalités</a>
                        <a class="dropdown-item" href="index.php?uc=nationalites&action=add">Ajouter une nationalité</a>
                        <a class="dropdown-item" href="index.php?uc=continents&action=list">Liste des continents</a>
                        <a class="dropdown-item" href="index.php?uc=continents&action=add">Ajouter un continent</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"><i class="far fa-hand-spock"></i></i> Gestion des livres</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=livres&action=list">Liste des livres</a>
                        <a class="dropdown-item" href="index.php?uc=livres&action=add">Ajouter un livre</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"> Compte</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="inscription.php">Compte</a>  
                    </div>
                </li>
            </ul>
        </div>
    </nav>