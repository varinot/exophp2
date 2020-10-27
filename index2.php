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
            $nom = "Philippe";
            $team = ["benoit","mathilde","stephanie"];
            $metier = [
                "benoit" => "dev",
                "mathilde" => "UI/UX",
                "stephanie" => "product owner"
            ];
            $ma_verite = false;
            $calcul = 5 + 25;
    // le role de la fonction est de verifier la valeur de $ma_verite si la valeur 
    //est fausse  alors tu change le contenue de la $nom (pour un autre nom)
    //appeller la fonction dans le head bien entendue à la fin du script php
        function verite($a,&$nom)  {
            if ($a === true){}
              else {
               $nom ="arthur";
              } ;
        }  
        verite($ma_verite,$nom);
       
    ?>
</head>
<body> 
    <?php
    var_dump($ma_verite);
        echo $nom; 
        ?>  
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
<!-- utilisation condition ternaire -->
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
<!--differente type de boucle et conditions ## troisieme partie
    listez les differentes type de boucle et conditions, 
    expliquez en une ligne ?
    ainsi que break et continue-->
<p>boucle for et while fonctionnent différemment mais peuvent être utilisées 
      pour obtenir un résultat similaire.
      préconiser for lorsque le nombre d'occurences ou nombre de boucles est connu.
      sinon pas de préférence entre les 2 types.
</p>
<p>l'utilisation de break s'opère dans le cadre de l'utilisation de condition
    switch et pour cesser de continuer de traiter les instructions suivantes 
    dans le cas du succès de la condition testée. Ainsi on utilise default pour 
    traiter les autres cas non précisés si aucun case n'est exécuté. Le switch est utlisé pour éviter les 
    trop nombreuses imbrications if elseif.
</p>
<!--fonction ## quatrieme partie
les instruction ce sont pas ecrite dans le index.php comme les autres mais cela reste un exercice donc le 9eme du fichier

    creation d'une fonction dans le head du fichier index.php
    trois types de recherches, basées sur des fonctions PHP :

    array_key_exists : pour vérifier si une clé existe dans l'array ;

    in_array : pour vérifier si une valeur existe dans l'array ;

    array_search : pour récupérer la clé d'une valeur dans l'array. 

    le role de la fonction est de verifier la valeur de $ma_verite si la valeur 
    est fausse  alors tu change le contenue de la $nom (pour un autre nom)

    appeller la fonction dans le head bien entendue à la fin du script php

    watch et analyse le comportement dans votre code
-->
</body>
</html>