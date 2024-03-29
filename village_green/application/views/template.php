<?php 
date_default_timezone_set("Europe/Paris"); // permet de régler le fuseau horaire
setlocale(LC_TIME, "fra.UTF-8", "fr_FR"); //permet d'afficher la date sous le format que l'on choisit : ici France
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/homeStyle.css'); ?>">
        
        <title><?= $title ?></title>
    </head>
    
    <body>
        
        <div class="container pt-3">
            <?php require('header.php');?>
            <?= $content ?>
            <?php require('footer.php');?>
        </div>
        
        <!-- script  -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>