<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1> Les types de variables</h1>
    <h2>Les strings (text)</h2>
    <p>Les chaines de caractères sont mises dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de ... cela s'appelle concaténation</p>
    <?php
    
    //creation de la variable ( ici en camelCase), avec le = qui donne la valeur . En procedure, le type strict n'est pas obligatoire.
    //
    $monTitre="Bientôt la fin de ce cours";
    //affichage contenu de la variable avec une chaine de concaténation ( majuscule ou virgule)
    // gettype est une fonction qui permet de recuperer le type d'une variable ( en ph8 on utilsera plutot get_debug_type())
    echo $monTitre. "yes ! <br>" ;
    echo "Le type de la variable est ". gettype($monTitre);'!';
    ?>
    <p>il existe descentaines de fonctions pour gerer du texte, par exemple</p>
    <?php
      echo 'mettre tout en majuscule : strtoupper($monTitre' .strtoupper($monTitre);
    ?>
    <p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>

    <h2>Les numérique</h2>
    <p>Les numériques sont les variables les plus utilisées pour les calculs, il existe plusieurs sous types de ceux ci</p>
    <h3>Les entiers (intègrent, int</h3>
    <p>Sont des entiers les nombres sans virgules, positifs comme négatifs</p>
    <?php
    $myFirstInt = 22;
    $mySecondInt = - 7;
    echo $myFirstInt;
    echo "<br>";

    //addition
    $add= $myFirstInt + $mySecondInt;
    echo $add;
    echo "<br>";
     
    //Soustration
    $sous= $myFirstInt - $mySecondInt;
    echo $sous;
    echo "<br>";
     
    //multiplication
    $multi= $myFirstInt * $mySecondInt;
    echo $multi;
    echo "<br>";
     
    //division
    $div= $myFirstInt / $mySecondInt;
    echo $div;
    echo "<br>";


    // outil de débogage le plus commun
    var_dump($monTitre,$myFirstInt,$mySecondInt,$add,$sous,$multi,$div,$FirstFloat,$secondFloat);

    // outil de débogage plus
    ?> 
    <h3>Les chiffres à virgules ( float, double, nombre réels)</h3>
    <p> Ils ont le type de float, attention en cas de calcul en base 10, on peut avoir des erreurs du fait que les ordi travaillent en base 16<br> 
    ! On utilse le point . et pas la virgule , comme séparateur ! <a href="https://floating-point-gui.de/" target="_blank"></p>

    <?php
    $FirstFloat = 8.27;
    $secondFloat = 79.78946312558819; // il manque 3 caractères parce que l'espace est insuffisante
    ?>
    <h2>Les booléens (bool , booléen)</h2>
    <p>Variable représentant sur un seul bit les 2 possibiltés du binaire: true, false </p>
    <?php
    $bool1 = true;
    $bool2 = false;
  ?>

    <h2>Les types NULL (NULL) </h2>
        <p> Le type NULL est une variable sans valeur et n'occupe pas d'espace mémoire</p>
    <?php
        $nada = NULL
    ?>    
    <h2> Les types tableaux (array)</h2>
    <p> Le tableau permet de contenir plusieurs variables à l'interieur d'une seule variable de type array. Ils sont multidimentionnels,
     c a d on peut avoir autant de tableaux que necessaire dans un tableau. </p> 
     <p> Il existe 2 types de tableaux: les tableaux indexés et les tableaux associatifs.
     
     <h3> Les tableaux indexés</h3>
     <p> Il ne contient que des valeurs, les clefs sont attribuées par PHP</p>
     
     <?php
     // création de tableaux ou objets avec print_r, moins complet que le var_dump
     print_r($tab1);
     //on veut afficher la 2eme clef:
     echo $tab1[1]
     
     <h3> Tableau associatifs</h3>
     <p> Tableau dont on a indiqué au moins 1 des clefs, ce qui en fait un tableau associatif</p> 
     ?>
    
    var_dump($monTitre,$myFirstInt,$mySecondInt,$add,$sous,$multi,$div,$bool1; $bool2; $FirstFloat; $secondFloat)
</body>
</html>