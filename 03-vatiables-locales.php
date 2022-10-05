<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variables locales</h1>
    <p>En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.<br>
Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un souligné (_) mais on va l'éviter car les superglobales l'utilisent, et l'OO (orienté objet aussi), suivi de lettres, chiffres ou soulignés.</p>
<p>On va éviter les caractères spéciaux, même si certains sont valides. il faut absolument éviter les signes servant aux calculs (+-*/) </p>

    <h2>Utilité des variables</h2>
    <p> Elles servent à stocker les infos</p>
    <p> Elles peuvent être manipulées, affichées, sauvegardées, détruites etc...</p>

    <pre>
        $lulu =5;
        $5main =3;
        $___coucou =7;
    <?php
    $lulu =5;
    echo '$lulu = ';
    echo "$lulu <br> ";

    $lala = "yes";
    echo '$lala = ';
    echo "$lala <br>";

    ?>
</body>
</html>