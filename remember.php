!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titre = "get data"    
    ?>
    <title><?php echo $titre; ?></title>
</head>
<body>
    <!-- afficher la phrase suivante : salutation ${nom} , petits scarabée deviendra ...  -->
    <?php 
    echo "salutation " .$_GET['nom']. ", petits scarabée deviendra ...";
    var_dump($_GET);
    ?>
</body>
</html>