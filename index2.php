<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titre = "exo php les bases 2eme partie"    
    ?>
    <title><?php echo $titre; ?></title>
    <?php
            $nom = ""; //affecter a la variable nom votre prenom
            $nom = "Philippe";
            $team = ["benoit","mathilde","stephanie"];
            $metier = [
                "benoit" => "dev",
                "mathilde" => "UI/UX",
                "stephanie" => "product owner"
            ];
            $ma_verite = true;
            $calcul = 5 + 25;
                
            
    ?>
</head>
<body>
   <nav>
<!--ici liens vers la page remember -->
            <a href="remember.php?nom=<?php echo $nom?>">lienremember</a>
   </nav>   
<!-- afficher la phrase suivante : bonjour a tous, je m'appelle...${nom} -->
<p>
    afficher la phrase suivante : bonjour a tous, je m'appelle 
   <?php 
   echo $nom; 
   ?> 
</p>
<!-- faire a tableau afficher les valeur de l'array $team -->
<?php
var_dump($team)
?>
<h1>la team</h1>
<p>composition</p>
<!-- faire un template d'afficher suivante : 
benoit notre dev
mathilde notre UI/UX
stephanie notre product owner 
DON'T HARDCODE
-->
<div class="template">
<?php 
	foreach ($metier as $ind =>$job){
		echo  $ind. " notre ".$job.'<br>'; 
		}
     echo '<br>';

?>
<!-- faire de meme mais avec un liste a puce 
DON'T HARDCODE
 -->
 <ul>la team again
 <?php 
foreach ($metier as $ind =>$job){
        echo '<li>' .$ind. " encore notre ".$job.'</li>'; 
    }
  ?>
  </ul>
</div>
<!-- faire un condition de comparaison sur $ma_verite
si true 
faire afficher <h1>vraix</h1>
sinon afficher <h1>faux</h1> -->
<p>condition de comparaison sur $ma_verite
si true faire afficher vrai
sinon afficher faux
</p>
<?php 
        echo (($ma_verite?: !$ma_verite)?'<h1>vrai</h1>':'<h1>faux</h1>'); 
?>
<!-- faire un condition de comparaison sur $calcul
si le resultat entre 15 et 45 
<h1>all good <h1>
si le resultat est inferieur a 15
<H1>not so good <h1>
sinon 
<h1>too high<H1>
-->
<p>condition de comparaison sur $calcul
si le résultat entre 15 et 45 all good ,
si le résultat est inferieur à 15 not so good ,
sinon too high
</p>
<?php 
if ($calcul<15){
    echo 'not so good';
}
elseif ($calcul <=45){
    echo 'all good';
}
else {
        echo 'too high';
} 
?>
</body>
</html>