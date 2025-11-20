<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach($users as $key => $value){?>
                <?php if($value['age']>=18){?>
                    <?php $majorite='majeur'?>
                <?php }else{?>
                    <?php $majorite='mineur'?>
                <?php }?>
                
                <li><?= $value['firstName'].' '.$value['lastName'].' '.$majorite ?></li>
            <?php }?>
        </ul>
    </body>
</html>